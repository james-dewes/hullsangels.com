@extends('layouts.master')
@section('meta')
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
