@extends('layouts.master')
@section('meta')
    <meta name="description" content="Visit Hull's Angels to join in games of Warhammer 40k, Bolt Action, Warmachine, Age of Sigmar, Necromunda, Blood Bowl, Dreadball, Kings of War Malifaux and more.">
    <meta name="keywords" content="warhammer 40k, warhammer 40000, aos, age of sigmar, necromunda, mordhiem, warmachine, hordes, bolt action, rumbleslam, shadow war,blood bowl, dreadball">
    <title>Game Systems at Hull's Angels</title>
@endsection
@section('title')
Wargame Systems played at Hull's Angels Wargaming Club
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('wargames') }}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Hull's Angels is a diverse group and the members play a wide variety of games and game systems.
        Here you can find out what is commonly played at Hull's Angels and a little about each system</p>
      </div>
    </div>
    @foreach ($wargames as $system)
    <div class="row">
      <div class="col-md-12">
        <article>
            <h2>
              <a href="/wargaming/{{$system->slug}}">
              {{$system->name}}
              </a>
            </h2>
            {!!$system->getShortAttribute('description')!!}
        </article>
      </div>
    </div>
    @endforeach
@endsection
