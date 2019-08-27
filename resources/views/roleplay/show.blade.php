@extends('layouts.master')
@section('meta')
  <title>Hull's Angels Roleplay | {{$system->name}}</title>
@endsection
@section('title')
  {{$system->name}}
@endsection
@section('content')
<div class="container">
 <div class="row">
   <div class="col-md-12">
       <p>{!!$system->description!!}</p>
   </div>
 </div>
@endsection
