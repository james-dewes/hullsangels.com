@extends('layouts.master')
@section('meta')
  <!-- include summernote css-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection
@section('title')
  Edit {{$event->name}}
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="/events/{{$event->slug}}" method="POST">
      <div class="form-group float-right">
          <button type="submit" class="btn btn-primary ">Delete</button>
          <input type="hidden" name="_method" value="DELETE">
          {{csrf_field()}}
      </div>
    </form>   
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form action="/events/{{$event->slug}}" method="POST">
      <input type="hidden" name="_method" value="patch" />
      <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
      <input type="hidden" name="event_id" value="{{$event->id}}" />
      {{csrf_field()}}
      <div class="form-group">
        <label for="name">Event Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}" required>
      </div>
      <div class="form-group">
        <label for="slug">Event Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{$event->slug}}" required>
      </div>
      <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control" rows="8" cols="80" required>{{$event->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="start">Start</label>
      <input type="datetime-local" name="start" id="start" class="form-control" value="{{date('Y-m-d\TH:i', strtotime($event->start))}}" required>
    </div>
    <div class="form-group">
      <label for="end">End</label>
      <input type="datetime-local" name="end" id="end" class="form-control" value="{{date('Y-m-d\TH:i', strtotime($event->end))}}" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary ">Update</button>
    </div>
    @include('layouts.errors')
    </form>
  </div>
</div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <script>
          $(document).ready(function() {
              $('#description').summernote({
                height:200,
                dialogsInBody: true,
                callbacks:{
                  onInit:function(){
                    $('body > .note-popover').hide();
                  }
                },
              });
          });
  </script>
@endsection
