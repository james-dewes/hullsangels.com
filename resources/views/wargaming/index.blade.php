@extends('layouts.master')
@section('meta')
    <meta name="description" content="Visit Hull's Angels to join in games of Warhammer 40k, Bolt Action, Warmachine, Age of Sigmar, Necromunda, Blood Bowl, Dreadball, Kings of War Malifaux and more.">
    <meta name="keywords" content="warhammer 40k, warhammer 40000, aos, age of sigmar, necromunda, mordhiem, warmachine, hordes, bolt action, rumbleslam, shadow war,blood bowl, dreadball">
    <title>Waraming Systems played at Hull's Angels | Hull's Angels</title>
@endsection
@section('title')
  Wargame Systems played at Hull's Angels Wargaming Club
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('wargames') }}
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <p>Hull's Angels members play a wide variety of wargames and wargame systems.
    Here you can find out more about the systems played at Hull's Angels, along with infomation on the facilities groups and campaigns
    supporting each system.</p>
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
