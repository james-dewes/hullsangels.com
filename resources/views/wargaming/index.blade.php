@extends('layouts.master')
@section('meta')
    <meta name="description" value="Visit Hulls Angels to join in games of Warhammer 40k, Bolt Action, Warmachine, Age of Sigmar, Necromunda, Blood Bowl, Dreadball, Kings of War Malifaux and more.">
    <meta name="keywords" value="warhammer 40k, warhammer 40000, aos, age of sigmar, necromunda, mordhiem, warmachine, hordes, bolt action, rumbleslam, shadow war,blood bowl, dreadball">
    <title>Game Systems at Hulls Angels</title>
@endsection
@section('title')
Wargame Systems played at Hull's Angels Wargaming Club
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Hulls Angels is a diverse group and the members play a wide variety of games and game systems.
        Here you can find out what is commonly played at Hulls Angels and a little about each system</p>
      </div>
    </div>
    @foreach ($wargames as $system)
    <div class="row">
      <div class="col-md-12">
        <article>
            <h2>{{$system->name}}</h2>
            <p>{{$system->desciption}}</p>
        </article>
      </div>
    </div>
    @endforeach
@endsection
