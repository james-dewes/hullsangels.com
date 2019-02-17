@extends('layouts.master')
@section('meta')
  <title>Hulls Angels | {{$article->title}}</title>
@endsection
@section('title')
  {{$article->title}}
@endsection
@section('content')
<div class="container">
 <div class="row">
   <div class="col-md-12">
       <p class='date text-right'>{{$article->created_at->toFormattedDateString()}}</p>
     </div>
 </div>
 <div class="row">
   <div class="col-md-8">
       <p>{{$article->content}}</p>
 </div>
@endsection
