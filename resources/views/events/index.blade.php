
@extends('layouts.master')
@section('meta')
<meta name="description" content="Hull's Angels Events Calender. Check the latest events, download rules packs, check timings and more.">
<meta name="keywords" content="hull's angels, events, hull events, hull whats on">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css" media="print">
<title>Hull's Angels Events</title>
@endsection
@section('title')
  Events at Hull's Angels
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('events') }}
@endsection
@section('content')
  <div class="row">
    <div class="col-md-10">
      <p>See what's happening at Hull's Angels with all the events running at the club. Click into each event to find out more.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10">
      {!! $calendar_details->calendar() !!}
    </div>
    @include('layouts.sidebar')
  </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" ></script>
<script src='/js/fullcalendar.min.js'></script>
    {!! $calendar_details->script() !!}
@endsection
