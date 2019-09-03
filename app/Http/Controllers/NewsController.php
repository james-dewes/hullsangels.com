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
    function show($slug){
      $article = News::whereSlug($slug)->firstOrFail();
      return view('news.show', compact('article'));

    }

    function create(){
      return view('news.create');
    }
    function update(Request $request)
    {
      dd($request);
    }

    function store(Request $request){
      $this->validate($request, [
        'title'=> 'required',
        'content'=> 'required',
        'user_id'=> 'required',
      ]);
      $article = new News;
      $article->title = $request->title;
      $article->content = News::summernote_tidy($request->content);
      $article->user_id = $request->user_id;
      $article->slug = str_slug($request->title);

      //TODO tidy this up
      $latestSlug = News::whereRaw("slug RLIKE '^{$article->slug}(-[0-9]*)?$'")
        ->latest('id')
        ->value('slug');
      if($latestSlug){
        $pieces = explode('-',$latestSlug);
        $number = intval(end($pieces));
        $article->slug .= '-' . ($number + 1);
      }
      $article->save();
      return redirect("/news/{$article->slug}");
    }
    function edit($slug)
    {
      $article = News::whereSlug($slug)->firstOrFail();
      return view('news.edit',compact('article'));
    }
    function destroy($slug)
    {
      $article = News::whereSlug($slug)->firstOrFail();
      News::destroy($article->id);
      return redirect("/news");
    }
}
