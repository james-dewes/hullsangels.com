<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  public function getShortAttribute(string $attribute)
   {
       try {
         return Str::words($this->$attribute, 50, '...');
       } catch (\Exception $e) {
         throw new \Exception("Attribute {$attribute} does not exisit", 1);

       }

   }

}
