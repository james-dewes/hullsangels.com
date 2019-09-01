@extends('layouts.master')
@section('meta')
<meta name="description" value="Hull's Angels Events Calender. Check the latest events, download rules packs, check timings and more.">
<meta name="keywords" value="hull's angels, events, hull events, hull whats on">
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
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="pannel pannel-primary">
        <div class="pannel-body">
        </div>
        {!! $calendar_details->calendar() !!}
        </div>
      </div>
      @include('layouts.sidebar')
    </div>
  </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" ></script>
<script src='/js/fullcalendar.min.js'></script>
    {!! $calendar_details->script() !!}
<script type="text/javascript">
$('#calendar').fullCalendar({
  defaultView: 'basicWeek'
});
</script>
@endsection
