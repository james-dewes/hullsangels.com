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
      $this->validate($request, [
        'article_id'=> 'required',
        'slug'=> 'required',
        'title'=> 'required',
        'title'=> 'required',
        'content'=> 'required',
        'user_id'=> 'required',
      ]);     
      $article = News::findOrFail($request->article_id);
      $article->title = $request->title;
      $article->content = News::summernote_tidy($request->content);
      $article->user_id = $request->user_id;
      $article->slug = str_slug($request->slug);
      $article->checkSlugIsUnique();
      $article->save();
      return redirect("/news/{$article->slug}");
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
