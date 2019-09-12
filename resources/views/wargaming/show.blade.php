@extends('layouts.master')
@section('meta')
  <meta name="keywords" content="{{$system->name}}, wargaming, wargames, hull, gaming">
  <meta name="description" content="Find out more about {{$system->name}} at Hull's Angels">
  <title>{{$system->name}} | Hull's Angels</title>
@endsection
@section('title')
  {{$system->name}}
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('wargames',$system) }}
@endsection
@section('content')
@auth('admin')
<div class="row">
  <div class="col-md-12">
  <form action="/wargaming/edit/{{ $system->slug }}" method="GET">
    <fieldset class="form-group float-right">
      <input type="submit" class="btn btn-primary" value="Edit">      
    </fieldset>
    </form>
  </div>
</div>
@endauth
<div class="row">
  <div class="col-md-12">
      {!! $system->description !!}
  </div>
</div>
@endsection
