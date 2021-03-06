
@extends('layouts.master')
@section('meta')
  <link rel='dns-prefetch' href='maps.gstatic.com'>
  <link rel='dns-prefetch' href='maps.googleapis.com'>
  <link rel='dns-prefetch' href='geo0.ggpht.com'>
  <link rel='dns-prefetch' href='geo1.ggpht.com'>
  <link rel='dns-prefetch' href='geo2.ggpht.com'>
  <link rel='dns-prefetch' href='geo3.ggpht.com'>
  <link rel='dns-prefetch' href='cbks0.googleapis.com'>
  <style media="screen">
  #map {
  min-height: 500px;
  width: 100%;
  height:100%
}
  </style>
    <title>Find Hull's Angels</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_API')}}">
    </script>
    <script>
    function initialize() {
        var myLatLng = {lat: 53.747277, lng: -0.336116};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: myLatLng,
          zoom: 14
        });
        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: 'img/map.png'
    });
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: myLatLng,
              pov: {
                heading: 170,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
      }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
@section('title')
Find Hull's Angels Wargaming Club
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <p>Situated it Hull's old YPI building you can find Hull's Angels at:</p>
      <div class="address" itemscope itemtype="http://schema.org/ContactPoint">
        <div itemscope itemtype="https://schema.org/PostalAddress">
          <span itemprop="streetAddress">Unit 2<br>14-18<br>Grimston Street</span><br>
          <span itemprop="addressLocality">Kigston Upon Hull</span><br>
          <span itemprop="addressLocality">East Yorkshire</span><br>
          <span itemprop="addressCountry">United Kingdom</span><br>
          <span itemprop="postalCode">HU1 3HG</span><br>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>Access is via Charlotte Street Mews, just off Grimston Street, down the side of the Hull Business Training Centre.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div id="map-canvas" class="map">You should see the Google Map here. Please try refreshing your browser.</div>
    </div>
    <div class="col-md-6">
      <div id="pano" class="map">You should see the Google Map here. Please try refreshing your browser.</div>
    </div>
  </div>
  <script async defer src="https://apis.google.com//js/platform.js?publisherid=101553455478763444800"></script>
@endsection
