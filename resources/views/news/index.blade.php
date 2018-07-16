@extends('layouts.master')
@section('meta')
    <meta name="description" value="News from Hulls Angels, news and updates from the Hulls Angels Wargaming club.">
    <meta name="keywords" value="hulls angels, news, updates">
    <title>Hulls Angels Opening News</title>
@endsection
@section('title')
  News and Updates
@endsection
@section('content')
 @foreach ($articles as $article)
   <div class="row">
     <div class="col-md-8">
       <h2 class="stencil">{{$article->title}}</h2>

       <p>{{$article->content}}</p>
       <a class="btn btn-secondary" href="/news/{{$article->slug}}" role="button">View details »</a>
     </div>
  </div>
  @endforeach
@endsection
