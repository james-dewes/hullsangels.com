@extends('layouts.master')
@section('meta')
    <meta name="description" content="News from Hull's Angels, news and updates from the Hull's Angels Wargaming club.">
    <meta name="keywords" content="hull's angels, news, updates">
    <title>Hull's Angels Opening News</title>
    <meta property='og:type' content='article' />
    <meta property='article:publisher' content='https://www.facebook.com/groups/216540088448058/' />
    <meta property='og:site_name' content="Hull's Angels" />
@endsection
@section('title')
  News and Updates
@endsection
@section('breadcrumb')
  {{ Breadcrumbs::render('news') }}
@endsection
@section('content')
<div class="row">
     <div class="col-md-10">
       <p>Keep up with all of the latest wargaming and roleplaying news in and around the Hull gaming scene with updates from the Hull's Angels club.</p>
     </div>
</div>
<div class="row">
     <div class="col-md-10">
      @foreach ($articles as $article)
        <div class="row">
          <div class="col-md-12">
            <article>
              <h2 class="stencil">{{$article->title}}</h2>
              <p class='date'>{{$article->created_at->toFormattedDateString()}}</p>
              {!!$article->getShortAttribute('content')!!}
              <a class="btn btn-secondary" href="/news/{{$article->slug}}" role="button">Read more »</a>
              <hr>
            </article>
          </div>
        </div>
        @endforeach
        </div>
        @include('layouts.sidebar')
      </div>
    @endsection
