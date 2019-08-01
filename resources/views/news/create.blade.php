@extends('layouts.admin.master')
@section('title')
  Create a news article
@endsection
@section('content')
<!-- include summernote css-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="/news">
      {{csrf_field()}}
    <div class="form-group float-right">
      <button type="submit" class="btn btn-primary ">Publish</button>
    </div>
    <div class="form-group">
      <label for="title">Headline</label>
      <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" id="content" class="form-control summernote" rows="8" cols="80" required></textarea>
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
              $('#content').summernote({
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
