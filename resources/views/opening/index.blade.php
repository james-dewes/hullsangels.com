@extends('layouts.master')
@section('meta')
    <meta name="description" value="Find out when Hull's Angels is open to the public, weekdays and weekends. Find times and notices to varations in opening hours here.">
    <meta name="keywords" value="hull's angels, times, opening, opening times, opening hours, when do you open">
    <title>Hull's Angels Opening Times</title>
@endsection
@section('title')
  Opening Times
@endsection
@section('content')
  <div class="row">
    <p>From Monday the 19<sup>th</sup>of August the club will also be open Mondays from 6pm.</p>
    <div class="col-md-8">
        <time itemprop="openingHours" datetime="Mo 18:00-22:00"><span class="bold">Monday</span> 6pm - 10pm</time><br>
        <time itemprop="openingHours" datetime="Tu 17:00-22:00"><span class="bold">Tuesday</span> 5pm - 10pm</time><br>
        <time itemprop="openingHours" datetime="Th 17:00-22:00"><span class="bold">Thursday</span> 5pm - 10pm</time><br>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
    <p>Opening times may vary</p>
        <p>We suggest that you <a title="Find Hull's Angels" href="/find">Find Hull's Angels on a map</a> and <a title="Hull's' Angels FAQ page" href="/faq">read
                the FAQs</a> before you visit, if this is your first time.</p>
      </div>
    </div>
@endsection
