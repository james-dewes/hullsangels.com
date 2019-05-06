<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

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
     foreach($images as $k => $img){
         $data = $img->getattribute('src');

         list($type, $data) = explode(';', $data);
         list(, $data)      = explode(',', $data);

         $data = base64_decode($data);
         $image_name= time().$k.'.png';
         $path = public_path() .'/img/uploads/'. $image_name;
         file_put_contents($path, $data);
         $img->removeattribute('src');
         $img->setattribute('src', '/img/uploads/' . $image_name);
     }
     return $dom->savehtml();

  }

  public function getShortAttribute(string $attribute)
   {
       try {
         return Str::words($this->$attribute, 50, '...');
       } catch (\Exception $e) {
         throw new \Exception("Attribute {$attribute} does not exisit", 1);

       }

   }



}
