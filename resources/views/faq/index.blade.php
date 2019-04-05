@extends('layouts.master')
@section('meta')
    <meta name="description" value="All of the FAQ for Hull's Angels club, what to do when you forget your kit, who is in charge and what do we do.">
    <meta name="keywords" value="hull's angels faq, wargames faq, hull's angels club faq, wargaming club faq">
    <title>Hull's Angels FAQs</title>
@endsection
@section('title')
  FAQ Section
@endsection
@section('content')
 <div class="row">
   <div class="col-md-8">
     <dl class="faq">
       @foreach ($faqs as $faq)
       <dt>{{$faq->question}}</dt>
       <dd>{{$faq->answer}}</dd>

        @endforeach
     </div>
  </div>
@endsection
