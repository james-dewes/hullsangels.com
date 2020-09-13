@extends('layouts.master')
@section('meta')
<meta name="description" content="{{$event->name}} at Hull's Angels. {{ $event->getShortCleanAttribute('description') }}">
<meta name="keywords" content="{{$event->name}}, events, hull events, hull whats on">
<title>{{$event->name}} | Hull's Angels</title>

<meta property="og:url"	content="https://hullsangels.com/events/{{ $event->slug }}">
<meta property="og:type"	content="website">
<meta property="og:title" content="{{$event->title}}">
<meta property="og:description" content="{{ $event->getShortCleanAttribute('description') }}">
<meta property="og:image" content="https://hullsangels.com/img/logo.png">
<meta property="fb:app_id" content="2309869772">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hullsangels_wargaming">
<meta name="twitter:creator" content="@hullsangels_wargaming">
<meta name="twitter:title" content="{{$event->name}}">
<meta name="twitter:description" content="{{ $event->getShortCleanAttribute('description') }} from {{$event->start}}">
<meta name="twitter:image" content="https://hullsangels.com/img/logo.png">
<script type='application/ld+json'> 
{
  "@context": "https://www.schema.org",
  "@type": "Event",
  "name": "{{ $event->name }}",
  "url": "https://hullsangels.com/events/{{$event->slug}}",
  "description": "{{ $event->description }}",
  "startDate": "{{ $event->utcStart }}",
  "endDate": "{{ $event->utcEnd }}",
  "image": "{{ $event->mainImage }}",
  "location": {
    "@type": "Place",
    "name": "Hull's Angels",
    "sameAs": "https://hullsangels.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1-3 Charlotte Street Mews",
      "addressLocality": "Hull",
      "addressRegion": "East Yorkshire",
      "postalCode": "HU1 3BP",
      "addressCountry": "UK"
    }
  }
}
 </script>
@endsection
@section('title')
{{ $event->name }}
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('event', $event) }}
@endsection
@section('content')
@auth('admin')
  <div class="row">
    <div class="col-md-12">
      <form action="/events/edit/{{$event->slug }}" method="GET">
        <fieldset class="form-group float-right">
          <input type="submit" class="btn btn-primary" value="Edit">      
        </fieldset>
      </form>
    </div>
  </div>
@endauth
<div class="row">
  <div class="col-md-12">
    <p class='date'>
        {{ $event->startDate }}
        {{ $event->startTime }}
        To
        {{ $event->endDate }}
        {{ $event->endTime }}
    </p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
      {!! $event->description !!}
  </div>
</div>
@endsection
