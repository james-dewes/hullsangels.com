@extends('layouts.master')
@section('meta')
    <meta name="description" value="Contact the Hulls Angels committee. Press enquiries, general enquiries and all other contacts.">
    <meta name="keywords" value="hulls angels">
    <title>Hulls Angels Opening Times</title>
@endsection
@section('title')
  Contact Hulls Angels
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
          <input type="text" class="form-control" name="name" placeholder="Your name" required="required" tabindex="1">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control"name="email" placeholder="your@email.com" required="required" tabindex="2">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <select class="form-control" name="Subject" tabindex="3">
            <option value="events">Events</option>
            <option value="membership">Membership</option>
            <option value="general">General Enquiries</option>
          </select>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" rows="9" cols="80" placeholder="Your message here" required="required" tabindex="5"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" value="" id="invalidCheck" required="required" tabindex="6">
            <label for="invalidCheck">I agree for my details to be used in response to my query, <a href="terms" tabindex="8">full terms and conditions available</a>.</label>
          </div>

          <button type="submit" class="btn btn-secondary btn-lg" tabindex="7">Submit</button>
          </div>
    </div>
        </form>
  </div>
@endsection
