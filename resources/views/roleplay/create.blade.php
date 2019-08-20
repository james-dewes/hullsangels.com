@extends('layouts.master')
@section('title')
  Edit {{$system->name}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <form action="roleplaying" method="POST">
                {{csrf_field()}}
                <input type="submit" name="" id="">
                <div class="form-group">
                    <label for="" ></label>
                    <input type="text" name="" id="" value="">
                </div>
                <div class="form-group">
                    <label for="" ></label>
                    <input type="text" name="" id="" value="">
                </div>
                <div class="form-group">
                    <label for="" ></label>
                    <input type="text" name="" id="" value="">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8">  
      <form action="/events/{{$article->slug}}" method="POST">
              <button type="submit" class="btn btn-primary ">Delete</button>
              <input type="hidden" name="_method" value="DELETE">
              {{csrf_field()}}
      </form>   
  </div>
@endsection('conetent')