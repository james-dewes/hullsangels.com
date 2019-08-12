@extends('layouts.master')
@section('title')
  Your search for "{{$searchTerm}}" returned {{count($results)}} results
@endsection
@section('content')
@foreach($results as $result)
  <p><a href="/{{strtolower(class_basename($result))}}/{{$result->slug}}">{{$result->title}}{{$result->name}}</a></p>
  <p>{{$result->getShortAttribute('content')}}{{$result->getShortAttribute('description')}}</p>
@endforeach
<form action="/search/" method="POST">
<input class="form-control mr-sm-2" type="text" id="searchTerm" name="q" placeholder="Search" aria-label="Search">
<br>
<p class="text-center"><button class="btn my-2 my-sm-0" type="submit">Search</button></p>
@csrf
</form>
@endsection