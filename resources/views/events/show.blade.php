@extends('layouts.master')
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
