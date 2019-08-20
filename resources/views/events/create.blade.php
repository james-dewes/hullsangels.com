@extends('layouts.master')
@section('title')
  Create a new event
@endsection
@section('content')
  <!-- include summernote css-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="/events">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Event Name</label>
          <input type="text" class="form-control" id="name" placeholder="Title" name="name" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="8" cols="80" required></textarea>
        </div>
        <div class="form-group">
          <label for="start">Start</label>
          <input type="datetime-local" name="start" id="start" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="end">End</label>
          <input type="datetime-local" name="end" id="end" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        <input type="hidden" name="user_id" value="1">
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
