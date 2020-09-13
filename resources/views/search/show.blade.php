@extends('layouts.master')
@section('meta')
<meta name="description" content="Search for {{$searchTerm}} on Hull's Angels">
<meta name="keywords" content="search, hulls angels, hull, clubs, wargaming, roleplay, board games, {{$searchTerm}}">
<title>{{ucwords($searchTerm)}} | Hull's Angels</title>
@endsection
@section('title')
  Your search for "{{$searchTerm}}" returned {{count($results)}} results
@endsection
@section('content')
@foreach($results as $result)
  <a href="/{{strtolower(class_basename($result))}}/{{$result->slug}}">
    <h2>{{$result->title}}{{$result->name}}</h2>
  </a>
  {!! $result->getShortAttribute('content') !!}{!! $result->getShortAttribute('description') !!}
@endforeach
<form action="/search" method="POST">
<input class="form-control mr-sm-2" type="search" id="searchTerm" name="q" placeholder="Search" aria-label="Search">
<br>
<p class="text-center"><button class="btn my-2 my-sm-0" type="submit">Search</button></p>
{{ csrf_field() }}
</form>
@endsection