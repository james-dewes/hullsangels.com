@extends('layouts.master')
@section('meta')
<meta name="description" content="All of the FAQ for Hull's Angels club, what to do when you forget your kit, who is in charge and what do we do.">
<meta name="keywords" content="hull's angels faq, wargames faq, hull's angels club faq, wargaming club faq">
<title>Hull's Angels FAQs</title>
<script>
  function faqFold(element){
      $(element).next('dd').toggle();
      element.classList.toggle('active');
  }
</script>
@endsection
@section('title')
  FAQ Section
@endsection
@section('content')
<div class="row">
  <div class="col-md-10">
    <p>Find answers to the most commonly asked questions about Hull's Angels. A handy guide for anyone considering visiting the 
      club for the first time, or who is new to Hull's Angels and needs to check some details.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-10">
    <dl class="faq">
      @foreach ($faqs as $faq)
      <dt onclick="faqFold(this)">{{$faq->question}}</dt>
      <dd class="hidden">{!!$faq->answer!!}</dd>
      @endforeach
    </dl>
  </div>
</div>
@endsection
