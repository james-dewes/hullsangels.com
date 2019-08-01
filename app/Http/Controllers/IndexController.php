<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Events;

class IndexController extends Controller
{
    public function index()
    {
      $news = News::latest()->get()->first();
      $event = Events::latest()->get()->first();
      return view('index',compact(['news','event']));
    }
}
