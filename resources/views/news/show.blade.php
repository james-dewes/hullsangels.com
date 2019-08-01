@extends('layouts.master')
@section('meta')
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@HullsAngelsClub" />
  <meta name="twitter:title" content="{{$article->title}}" />
  <meta name="twitter:description" content='{{$article->getShortAttribute('content')}}' />
  <meta name="twitter:image" content='https://hullsangels.com/img/logo.png' />

  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{$article->title}}"/>
  <meta property="article:published_time" content="{{$article->toFormattedDateString()}}"/>
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
   <div class="col-md-8">
       <p class='date text-right'>{{$article->created_at->toFormattedDateString()}}</p>
   </div>
   <div class="col-md-8">
       <p>{!!$article->content!!}</p>
   </div>
   <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">

        </div>
      </div>

   </div>
 </div>
@endsection
