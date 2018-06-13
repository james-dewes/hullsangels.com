@extends('layouts.admin.master')
@section('title')
  Create a new event
@endsection
@section('content')

      <div class="row">
        <div class="col-md-8">

      <form method="POST" action="/events">
        {{csrf_field()}}
      <div class="form-group">
        <label for="name">Event Name</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="8" cols="80" required></textarea>
      </div>
      <div class="form-group">
        <label for="start">Start</label>
        <input type="datetime-local" name="start" id="start" class="form-control" rows="8" cols="80" required>
      </div>
      <div class="form-group">
        <label for="end">Description</label>
        <input type="datetime-local" name="end" id="end" class="form-control" rows="8" cols="80" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
