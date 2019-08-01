<?php

namespace App;

class Events extends Article
{
 protected $fillable = ['name', 'description','user_id','start','end'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
