@extends('layouts.master')
@section('meta')
  <meta name="description" content="Visit Hulls Angels to join in games of Warhammer 40k, Bolt Action, Warmachine, Age of Sigmar, Necromunda, Blood Bowl, Dreadball, Kings of War Malifaux and more.">
  <title>Hulls Angels | Wargaming and Roleplaying in Hull</title>
@endsection
@section('title')
  <?php
    $d3 = rand(1,3);
    $message = '';
    switch ($d3) {
      case 1:
        $message = "Expunged by order of the Inquisition";
        break;
      case 2:
        $message = "Lost in the Warp.";
      break;
      default:
        $message = "Invocation failed, purge Servitor and reboot.";
        break;
    }
   ?>
  404 - <?=$message?>
@endsection
@section('content')
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form>
            <p>01000110 01101100 01100101 01110011
               01101000 00100000 01101001 01110011
               00100000 01100110 01100001 01101100
               01101100 01101001 01100010 01101100
               01100101 00101100 00100000 01100010
               01110101 01110100 00100000 01110010
               01101001 01110100 01110101 01100001
               01101100 00100000 01101000 01101111
               01101110 01101111 01110101 01110010
               01110011 00100000 01110100 01101000
               01100101 00100000 01001101 01100001
               01100011 01101000 01101001 01101110
               01100101 00100000 01010011 01110000
               01101001 01110010 01101001 01110100
               00101110 00001101 00001010 01010000
               01110010 01100001 01101001 01110011
               01100101 00100000 01100010 01100101
               00100000 01110100 01101111 00100000
               01110100 01101000 01100101 00100000
               01001111 01101101 01101110 01101001
               01110011 01101001 01100001 00101110
             </p>
            </div>
          </div>
        </div>
      </div> <!-- /container -->

@endsection
