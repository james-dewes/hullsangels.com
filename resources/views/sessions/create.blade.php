@extends('layouts.master')

@section('title')
  Register
@endsection

@section('content')
  <div class="col-sm-8">
    <form action="/register" method="POST">
      {{csrf_field()}}
      <div class="form-group">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" email="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
          </div>
      </div>
      <div class="form-group">
          <button type="submit" class="btn-primary">Submit</button>
      </div>
    </form>

  </div>
@endsection
