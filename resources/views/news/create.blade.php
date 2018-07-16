@extends('layouts.admin.master')
@section('title')
  Create a news article
@endsection
@section('content')
  <div class="row">
    <div class="col-md-8">
      <form method="POST" action="/news">
        {{csrf_field()}}
      <div class="form-group">
        <label for="title">Headline</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="8" cols="80" required></textarea>
      </div>
      <input type="hidden" name="user_id" value="1">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
