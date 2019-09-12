@extends('layouts.master')
@section('meta')
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@HullsAngelsClub" />
  <meta name="twitter:title" content="{{$article->title}}" />
  <meta name="twitter:description" content="{{ $article->getShortCleanAttribute('content') }}" />
  <meta name="twitter:image" content='https://hullsangels.com/img/logo.png' />

  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://hullsangels.com/news/{{ $article->slug }}" />
  <meta property="og:title" content="{{$article->title}}"/>
  <meta property="article:published_time" content="{{ $article->created_at->toFormattedDateString() }}"/>
  <meta property="og:description" content="{{ $article->getShortCleanAttribute('content') }}"/>
  <meta property="og:image" content="https://hullsangels.com/img/logo.png"/>
  <meta property="fb:app_id" content="2309869772">

  <meta name="keywords" content="{{ $article->title }}, news, hull news, wargaming news}}">
  <meta name="description" content="{{ $article->title }} - {{ $article->getShortCleanAttribute('content') }}">
  <title>{{$article->title}} | Hull's Angels</title>
@endsection
@section('title')
  {{ $article->title }}
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('article', $article) }}
@endsection
@section('date')
{{ $article->created_at->toFormattedDateString() }}
@endsection
@section('content')
<div class="container">
  @auth('admin')
    <div class="row">
      <div class="col-md-12">
        <form action="/news/edit/{{$article->slug }}" method="GET">
          <fieldset class="form-group float-right">
            <input type="submit" class="btn btn-primary" value="Edit">      
          </fieldset>
        </form>
      </div>
    </div>
  @endauth
  <div class="row">
    <div class="col-md-10">
      {!! $article->content !!}
    </div>
    @include('layouts.sidebar')
  </div>
</div>
@endsection