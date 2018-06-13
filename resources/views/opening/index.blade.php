@extends('layouts.master')
@section('meta')
    <meta name="description" value="Find out when Hulls Angels is open to the public, weekdays and weekends. Find times and notices to varations in opening hours here.">
    <meta name="keywords" value="hulls angels, times, opening, opening times, opening hours, when do you open">
    <title>Hulls Angels Opening Times</title>
@endsection
@section('title')
  Opening Times
@endsection
@section('content')
  <div class="row">
    <div class="col-md-8">
        <time itemprop="openingHours" datetime="Tu 17:00-22:00"><span class="bold">Tuesday</span> 5pm - 10pm</time><br>
        <time itemprop="openingHours" datetime="Th 17:00-22:00"><span class="bold">Thursday</span> 5pm - 10pm</time><br>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
    <p>Opening times may vary</p>
        <p>We suggest that you <a title="Find Hulls Angels" href="/find">Find Hulls Angels on a map</a> and <a title="Hulls' Angels FAQ page" href="/faq">read
                the FAQs</a> before you visit, if this is your first time.</p>
      </div>
    </div>
@endsection
