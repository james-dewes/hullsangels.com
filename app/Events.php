<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
 protected $fillable = ['name', 'description','user_id','start','end'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
