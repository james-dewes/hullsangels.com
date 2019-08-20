@extends('layouts.master')
@section('title')
  Edit {{$event->title}}
@endsection
@section('content')
  <!-- include summernote css-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <div class="row">
      <div class="col-md-8">
      <form method="POST" action="/events">
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
        <input type="datetime-local" name="start" id="start" class="form-control" value="{{$event->start}}" required>
      </div>
      <div class="form-group">
        <label for="end">End</label>
        <input type="datetime-local" name="end" id="end" class="form-control" value="{{$event->end}}" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      <input type="hidden" name="user_id" value="1">
      @include('layouts.errors')
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
