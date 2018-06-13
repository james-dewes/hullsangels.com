@extends('layouts.master')
@section('content')
<div class="container">
 <div class="row">
   <div class="col-md-12">
       <h1 class="mt-5 stencil">{{$article['title']}}</h1>
       <p class='date'>{{$article['date']}}</p>
       <hr>
     </div>
 </div>
 <div class="row">
   <div class="col-md-8">
       <p>{{$article['content']}}</p>
 </div>
@endsection
