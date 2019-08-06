@extends('layouts.master')
@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hullsangels_wargaming">
<meta name="twitter:creator" content="@hullsangels_wargaming">
<meta name="twitter:title" content="{{$event->name}}">
<meta name="twitter:description" content="{{$event->getShortAttribute('description')}} from {{$event->start}}">
<meta name="twitter:image" content="https://hullsangels.com/img/logo.png">
@endsection
@section('title')
{{$event->name}}
@endsection
@section('content')
<div class="container" itemscope itemtype="https://schema.org/Event">
 <div class="row">
   <div class="col-md-12">
      <meta itemprop="name" content="{{$event->name}}" />
      <meta itemprop="startDate" content="{{$event->utcStart}}" />
      <meta itemprop="endDate" content="{{$event->utcEnd}}" />
      <div itemprop="location" itemscope>
        <div itemprop="PostalAddress" itemscope itemtype="schema.org/PostalAddress">
          <meta itemprop="streetAddress" value="Unit 2,14-18,Grimston,Street"/>
          <meta itemprop="addressLocality" value="Kigston Upon Hull"/>
          
          <meta itemprop="addressLocality" value="East Yorkshire"/>
          <meta itemprop="addressCountry" value="United Kingdom"/>
          <meta itemprop="postalCode" value="HU1 3HG"/>
        </div>
      </div>
       <p class='date'>
           {{$event->startDate}}
           {{$event->startTime}}
           To
           {{$event->endDate}}
           {{$event->endTime}}
       </p>
       <hr>
     </div>
 </div>
 <div class="row">
   <div class="col-md-12" itemprop="description">
       <p>{!!$event->description!!}</p>
 </div>
@endsection
