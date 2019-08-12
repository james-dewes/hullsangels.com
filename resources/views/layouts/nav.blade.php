<nav class="navbar navbar-expand-md navbar-light fixed-top">
  <!-- <a class="navbar-brand"  title="Hull's Angels Wargaming" href="/">Hull's Angels</a> -->
  <a class="navbar-brand"  title="Hull's Angels Wargaming" href="/">
    <img src="/img/logo.png" style="max-width: 100%;height: auto;PADDING:0PX;max-height:4rem;object-fit: scale-down;" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsHull'sAngels" aria-controls="navbarsHull'sAngels" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsHull'sAngels">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/events">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/find">Find</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/opening-times">Opening Times</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">FAQ's</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/wargaming" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wargaming</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="/wargaming">All</a>
          @foreach ($nav['wargames'] as $wargame)
            <a class="dropdown-item" href="/wargaming/{{$wargame->slug}}">{{$wargame->name}}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/roleplaying" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Roleplaying</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <a class="dropdown-item" href="/roleplaying">All</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="new" href="https://shop.spreadshirt.co.uk/HullsAngels">Shop</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search/" method="POST">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      @csrf
      <button class="btn my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
