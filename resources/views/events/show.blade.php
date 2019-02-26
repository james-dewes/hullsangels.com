@extends('layouts.master')
@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hullsangels_wargaming">
<meta name="twitter:creator" content="@hullsangels_wargaming">
<meta name="twitter:text:title" content="{{$event->title}}">
<meta name="twitter:description" content="{{$event->title}} from {{$event->start}}">
<meta name="twitter:image" content="https://hullsangels.com/img/logo.png">
@endsction
@section('content')
<div class="container">
 <div class="row">
   <div class="col-md-12">
       <h1 class="mt-5 stencil">{{$event->title}}</h1>
       <p>Start
          <span class='date'>{{$event->start}}</span>
       </p>
       <p>End
          <span class='date'>{{$event->start}}</span>
       </p>
       <hr>
     </div>
 </div>
 <div class="row">
   <div class="col-md-8">
       <p>{{$event->description}}</p>
 </div>
@endsection
