@extends('layouts.master')
@section('meta')
    <meta name="description" content="News from Hull's Angels, news and updates from the Hull's Angels Wargaming club.">
    <meta name="keywords" content="hull's angels, news, updates">
    <title>Hull's Angels Opening News</title>
@endsection
@section('title')
  News and Updates
@endsection
@section('content')
<div class="row">
     <div class="col-md-8">
      @foreach ($articles as $article)
        <div class="row">
          <div class="col-md-12">
            <article>
              <h2 class="stencil">{{$article->title}}</h2>
              <p class='date'>{{$article->created_at->toFormattedDateString()}}</p>
              <p>{!!$article->getShortAttribute('content')!!}</p>
              <a class="btn btn-secondary" href="/news/{{$article->slug}}" role="button">Read more »</a>
              <hr>
            </article>
          </div>
        </div>
        @endforeach
        </div>
        <aside class="col-md-4">
            <h2>Archive</h2>
            <ol class="list-unstyled mb-0">
              @foreach($archives as $status)
              <li>
                <a href="">{{$status->month}} {{$status->year}} ({{$status->published}})</a>
              </li>
              @endforeach
            </ol>
        </aside>
      </div>
    @endsection
