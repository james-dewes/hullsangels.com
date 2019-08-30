@extends('layouts.master')
@section('meta')
  <title>Hull's Angels | {{$system->name}}</title>
@endsection
@section('title')
  {{$system->name}}
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('wargames',$system) }}
@endsection
@section('content')
<div class="container">
@auth('admin')
  <div class="row">
    <div class="col-md-12">
    <form action="/wargaming/edit/{{$system->slug }}" method="GET">
      <div class="form-group float-right">
        <input type="submit" class="btn btn-primary" value="Edit">      
      </div>
     </form>
    </div>
  </div>
@endauth
 <div class="row">
   <div class="col-md-12">
       <p>{!!$system->description!!}</p>
   </div>
 </div>
@endsection
