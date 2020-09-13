@extends('layouts.master')
@section('meta')
    <meta name="description" content="Find out when Hull's Angels is open to the public, weekdays and weekends. Find times and notices to varations in opening hours here.">
    <meta name="keywords" content="hull's angels, times, opening, opening times, opening hours, when do you open">
    <title>Hull's Angels Opening Times</title>
@endsection
@section('title')
  Opening Times
@endsection
@section('content')
  <div class="row">
    <p>From Monday the 19<sup>th</sup>of August the club will also be open Mondays from 6pm.</p>
    <div class="col-md-8">
      <div itemscope itemtype="https://schema.org/openingHours">
        <p><span itemprop="openingHours" content="Mo 18:00-22:00"><span class="font-weight-bold">Monday</span> 6pm - 10pm</span><br>
           <span itemprop="openingHours" content="Tu 17:00-22:00"><span class="font-weight-bold">Tuesday</span> 5pm - 10pm</span><br>
           <span itemprop="openingHours" content="Th 17:00-22:00"><span class="font-weight-bold">Thursday</span> 5pm - 10pm</span></p>
      </div>
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