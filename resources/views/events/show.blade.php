@extends('layouts.master')
@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hullsangels_wargaming">
<meta name="twitter:creator" content="@hullsangels_wargaming">
<meta name="twitter:title" content="{{$event->name}}">
<meta name="twitter:description" content="{{$event->getShortAttribute('description')}} from {{$event->start}}">
<meta name="twitter:image" content="https://hullsangels.com/img/logo.png">
<script type='application/ld+json'> 
{
  "@context": "https://www.schema.org",
  "@type": "Event",
  "name": "{{$event->name}}",
  "url": "https://hullsangels.com/events/{{$event->slug}}",
  "description": "{{$event->description}}",
  "startDate": "{{$event->utcStart}}",
  "endDate": "{{$event->utcEnd}}",
  "image": "{{$event->mainImage}}",
  "location": {
    "@type": "Place",
    "name": "Hull's Angels",
    "sameAs": "https://hullsangels.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Unit 2, 14-18 Grimston Street",
      "addressLocality": "Kigston Upon Hull",
      "addressRegion": "East Yorkshire",
      "postalCode": "HU1 3HG",
      "addressCountry": "UK"
    }
  }
}
 </script>
@endsection
@section('title')
{{$event->name}}
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('event',$event) }}
@endsection
@section('content')
 <div class="row">
   <div class="col-md-12">
       <p class='date'>
           {{$event->startDate}}
           {{$event->startTime}}
           To
           {{$event->endDate}}
           {{$event->endTime}}
       </p>
       <hr>
     </div>
 </div>
 <div class="row">
   <div class="col-md-12" itemprop="description">
       <p>{!!$event->description!!}</p>
 </div>
@endsection
