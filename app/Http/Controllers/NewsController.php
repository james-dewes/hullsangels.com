<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    function index(){
      $articles = News::latest()->take(10)->get();
      return view('news.index',compact('articles'));
    }
    function show(News $article){
      return view('news.show',compact('article'));
    }
    function create(){
      return view('news.create');
    }
    function store(){
      $this->validate(request(), [
        'title'=> 'required',
        'content'=> 'required',
      ]);
      News::create(request(['title','content']));
      return redirect('/');
    }
}
