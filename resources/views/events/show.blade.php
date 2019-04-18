@extends('layouts.master')
@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hullsangels_wargaming">
<meta name="twitter:creator" content="@hullsangels_wargaming">
<meta name="twitter:text:title" content="{{$event->title}}">
<meta name="twitter:description" content="{{$event->title}} from {{$event->start}}">
<meta name="twitter:image" content="https://hullsangels.com/img/logo.png">
@endsection
@section('title')
{{$event->name}}
@endsection
@section('content')
<div class="container" itemscope itemtype="https://schema.org/Event">
 <div class="row">
   <div class="col-md-12">
       <p>
         <span class='date' itemprop="startDate">{{$event->start}}</span>
          To
          <span class='date' itemprop="startTime">{{$event->end}}</span>
       </p>
       <hr>
     </div>
 </div>
 <div class="row">
   <div class="col-md-12">
       <p itemprop="about">{!!$event->description!!}</p>
 </div>
@endsection
