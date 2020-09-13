@extends('layouts.master')
@section('meta')
<!-- include summernote css-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection
@section('title')
  Edit {{$article->title}}
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="/news/{{$article->slug}}" method="POST">
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
    <form action="/news/{{ $article->slug }}"  method="POST">
        <input type="hidden" name="_method" value="patch" />
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <input type="hidden" name="article_id" value="{{$article->id}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Headline</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$article->title}}" required>
        </div>
        <div class="form-group">
            <label for="title">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{$article->slug}}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control summernote" rows="8" cols="80" required>{{$article->content}}</textarea>
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
