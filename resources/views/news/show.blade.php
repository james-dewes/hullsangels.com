@extends('layouts.master')
@section('meta')
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@HullsAngelsClub" />
  <meta name="twitter:title" content="{{$article->title}}" />
  <meta name="twitter:description" content='{{$article->getShortAttribute('content')}}' />
  <meta name="twitter:image" content='https://hullsangels.com/img/logo.png' />

  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{$article->title}}"/>
  <meta property="article:published_time" content="{{$article->created_at->toFormattedDateString()}}"/>
  <meta property="og:image" content="https://hullsangels.com/img/logo.png"/>
  <meta property="og:description" content="{{$article->getShortAttribute('content')}}"/>
  <meta property="og:url" content="{{URL::current()}}" />


  <title>Hull's Angels | {{$article->title}}</title>
@endsection
@section('title')
  {{$article->title}}
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12">
          <p class='date text-right'>{{$article->created_at->toFormattedDateString()}}</p>
        </div>
        <div class="col-md-21">
          <p>{!!$article->content!!}</p>
        </div>
      </div>
    </div>
    @include('layouts.sidebar')
  </div>
</div>
@endsection