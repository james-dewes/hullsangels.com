@extends('layouts.master')
@section('title')
  Enter a new FAQ
@endsection
@section('content')

      <div class="row">
        <div class="col-md-8">
      <form method="POST" action="/faq">
        {{csrf_field()}}
      <div class="form-group">
        <label for="question">Question</label>
        <input type="text" class="form-control" id="question" placeholder="Apharius or Omegon?" name="question" required>
      </div>
      <div class="form-group">
        <label for="answer">Question</label>
        <input type="text" class="form-control" id="answer" placeholder="You jest!" name="answer" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
