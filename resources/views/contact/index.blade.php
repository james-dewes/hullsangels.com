@extends('layouts.master')
@section('meta')
    <meta name="description" content="Contact the Hull's Angels committee. Press enquiries, general enquiries and all other contacts.">
    <meta name="keywords" content="hull's angels">
    <title>Hull's Angels Opening Times</title>
@endsection
@section('title')
  Contact Hull's Angels
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <p>Before submitting a contact request please check our <a href="faq">FAQ</a>.</p>
  </div>
</div>
<form class="contact" action="contact" method="post">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required="required" tabindex="1">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required="required" tabindex="2">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <select class="form-control" id="subject" name="subject" tabindex="3">
          @foreach($subjects as $subject)
            <option value="{{$subject}}" 
              @if($subject == $subjects[0])
                selected="selected"
              @endif
              >{{ucwords($subject)}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="9" cols="80" placeholder="Your message here" required="required" tabindex="5"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <input type="checkbox" id="terms" name="terms" value="true" required="required" tabindex="6">
        <label for="terms">I agree for my details to be used in response to my query, <a href="terms" tabindex="8">full terms and conditions available</a>.</label>
      </div>
      {{ csrf_field() }}
      <button type="submit" class="btn btn-secondary btn-lg" tabindex="7">Submit</button>
    </div>
  </div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif
@endsection
