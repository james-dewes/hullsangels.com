<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    private $shortAttribute;
    private $shortCleanAttribute;

    /*
     * Strips base 64 images out of summernote and saves them in public/img/uploads
    */
    public static function summernote_tidy($field)
    {
        $dom = new \domdocument();
        $dom->loadHtml($field, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach ($images as $k => $img) {
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $image_name = time() . $k . '.png';
            $path = public_path() . '/img/uploads/' . $image_name;
            file_put_contents($path, $data);
            $img->removeattribute('src');
            $img->setattribute('src', '/img/uploads/' . $image_name);
        }
        return $dom->savehtml();
    }

    public function getShortAttribute(string $attribute)
    {
        if (!$this->shortAttribute) {
            try {
                $this->shortAttribute = $this->closetags(Str::words($this->$attribute, 50, '...'));
            } catch (\Exception $e) {
                throw new \Exception("Attribute {$attribute} does not exisit", 1);
            }
        }
        return $this->shortAttribute;
    }

    private function closetags($html)
    {
        preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
        $openedtags = $result[1];
        preg_match_all('#</([a-z]+)>#iU', $html, $result);
        $closedtags = $result[1];
        $len_opened = count($openedtags);
        if (count($closedtags) == $len_opened) {
            return $html;
        }
        $openedtags = array_reverse($openedtags);
        for ($i = 0; $i < $len_opened; $i++) {
            if (!in_array($openedtags[$i], $closedtags)) {
                $html .= '</' . $openedtags[$i] . '>';
            } else {
                unset($closedtags[array_search($openedtags[$i], $closedtags)]);
            }
        }
        return $html;
    }

    public function checkSlugIsUnique()
    {
        $latestSlug = Article::whereRaw("slug RLIKE '^{$this->slug}(-[0-9]*)?$'")
        ->latest('id')
        ->value('slug');
        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);
            $number = intval(end($pieces));
            $this->slug .= '-' . ($number + 1);
        }
    }

    public function getShortCleanAttribute(string $attribute)
    {
        if (!$this->shortCleanAttribute) {
            $value = $this->getShortAttribute($attribute);
            $value = preg_replace('#<[^>]+>#', ' ', $value);
            $this->shortCleanAttribute = trim(preg_replace('/\s+/', ' ', $value));
        }
        return $this->shortCleanAttribute;
    }
}
