
@extends('layouts.master')
@section('meta')
    <title>Find Hulls Angels</title>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_API')}}">
    </script>
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: {lat: 53.7470172, lng: -0.3363777},
                zoom: 15
            };
            var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
            var beachMarker = new google.maps.Marker({
              position: new google.maps.LatLng(53.747214, -0.336104);,
              map: map,
              icon: 'images/map.png';
            });
          }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
@section('title')
Find Hulls Angels Wargaming Club
@endsection

@section('content')
  <p>Situated it Hulls old YPI building you can find Hulls Angels at:</p>
  <div class="address" itemscope itemtype="http://schema.org/ContactPoint">
    <div itemscope itemtype="schema.org/PostalAddress">
      <span itemprop="streetAddress">Unit 2<br>14-18<br>Grimston Street</span><br>
      <span itemprop="addressLocality">Kigston Upon Hull</span><br>
      <span itemprop="addressLocality">East Yorkshire</span><br>
      <span itemprop="addressCountry">United Kingdom</span><br>
      <span itemprop="postalCode">HU1 3HG</span><br>
    </div>
  </div>
  <p>Access is via Charlotte Street Mews, just off Grimston Street, down the side of the Hull Business Training Centre.</p>
  <div id="map-canvas">You should see the Google Map here. Please try refreshing your browser.</div>
  <script async defer src="https://apis.google.com//js/platform.js?publisherid=101553455478763444800"></script>
  </div>
@endsection
