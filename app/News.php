<?php

namespace App;

class News extends Article
{
    protected $fillable = ['title', 'content','user_id'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
