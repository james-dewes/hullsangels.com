@extends('layouts.master')
@section('title')
  Add a new system to Wargaming
@endsection
@section('content')
      <div class="row">
        <div class="col-md-8">
      <form method="POST" action="/wargaming">
        {{csrf_field()}}
      <div class="form-group">
        <label for="name">System Name</label>
        <input type="text" class="form-control" id="name" placeholder="Apharius or Omegon?" name="name" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="8" cols="80" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
