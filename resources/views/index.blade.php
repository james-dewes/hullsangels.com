@extends('layouts.master')
@section('meta')
  <meta name="description" content="Visit Hulls Angels to join in games of Warhammer 40k, Bolt Action, Warmachine, Age of Sigmar, Necromunda, Blood Bowl, Dreadball, Kings of War Malifaux and more.">
  <title>Hulls Angels | Wargaming and Roleplaying in Hull</title>
@endsection

@section('content')
      <div class="jumbotron">
        <div class="container">
          <h1>Hulls Angels Wargaming Club</h1>
          <p>Hull's foremost wargaming club</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Latest News</h2>
            <h3>{{$news->title}}</h3>
            <p>{{$news->created_at->toFormattedDateString()}}</p>
            <p>{{$news->content}}</p>
            <p><a class="btn btn-secondary" href="/news/{{$news->slug}}" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <h2>Welcome to Hulls Angels</h2>
                <p>Hulls Angels is one of the largest wargaming clubs in the north east with more than 200 members. Open two nights a week and on weekends Hulls Angels' permanent gaming space boasts more than 20 gaming tables as well as soft seating for role playing, tables for hobby activities, board games, card based games and a painting bar.</p>
              </div>
              <div class="col-md-12">
                <h2>Friendly space to game</h2>
                <p>Whether you are a veteran gamer, or are just starting out in the hobby Hulls Angels can offer you a friendly space where you will regularly find opponents for the most common local systems including Warhammer 40k, Warmachine, the fast growing Kings of War, X-Wing and Bolt Action games and specialist game enthusiasts playing everything from Dread Ball to Necromunda.</p>
                <p>In the large gaming hall you can battle over fantastic terrain, from the urban sprawl of the 41st millennium to the fields of northern Europe and the endless ocean of the Pacific. With 6x4 boards, 4x4 boards and several boards that can combine for larger battles. The on-site tuck-shop provides plenty of snacks, tea and coffee making facilities and a microwave.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /container -->

@endsection
