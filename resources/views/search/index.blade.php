@extends('layouts.master')
@section('title')
  Your search for "{{$searchTerm}}" returned {{count($results)}} results
@endsection
@section('content')
    @if(count($results)>0)
      @foreach($results as $result)
        <p><a href="/{{strtolower(class_basename($result))}}/{{$result->slug}}">{{$result->title}}{{$result->name}}</a></p>
        <p>{{$result->getShortAttribute('content')}}{{$result->getShortAttribute('description')}}</p>
      @endforeach
    @else
      <p>Try again?</p>
      <form action="/search/">
      <input class="form-control mr-sm-2" type="text" id="searchTerm" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit">Search</button>
    </form>
    @endif
@endsection