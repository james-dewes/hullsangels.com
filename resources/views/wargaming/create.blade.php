@extends('layouts.master')
@section('title')
  Add a new system to Wargaming
@endsection
@section('content')
  <!-- include summernote css-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="/wargaming">
      {{csrf_field()}}
      <div class="form-group float-right">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      <div class="form-group">
        <label for="name" >System Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control summernote" rows="8" cols="80" required></textarea>
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
