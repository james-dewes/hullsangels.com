
@extends('layouts.master')
@section('meta')
<meta name="description" value="Hulls Angels Events Calender. Check the latest events, download rules packs, check timings and more.">
<meta name="keywords" value="hulls angels, events, hull events, hull whats on">
<title>Hulls Angels Events</title>
@endsection
@section('title')
  Events at Hulls Angels
@endsection
@section('content')
  @foreach ($events as $event)
    <div class="row">
      <div class="col-md-8">
        <h2 class="stencil">{{$event->name}}</h2>
        <p class='date'>{{$event->start}}</p>
        <p class='date'>{{$event->end}}</p>
        <p>{{$event->description}}</p>
        <p>
          <a class="btn btn-secondary" href="events/{{$event->slug}}" role="button">See more »</a>
        </p>
      </div>
    </div>
    @endforeach

@endsection
