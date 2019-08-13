@extends('layouts.master')
@section('title')
  Search Hull's Angels
@endsection
@section('content')
<form action="/search/" method="POST">
<input class="form-control mr-sm-2" type="text" id="searchTerm" name="q" placeholder="Search" aria-label="Search">
<br>
<p class="text-center"><button class="btn my-2 my-sm-0" type="submit">Search</button></p>
{{ csrf_field() }}
</form>
@endsection