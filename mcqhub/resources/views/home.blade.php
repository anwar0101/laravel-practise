@extends('layouts.app')

@section('content')

@if(Auth::guest())
  @include('layouts.partials.guest')
@endif

<section id="about" class="section-padding wow fadeInUp delay-05s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="title text-center">Let's <span class="deco">See</span> My Work</h2>
      </div>
      <div class="col-md-12">
        <div id="myGrid" class="grid-padding">
        <div class="col-md-4 col-sm-4 padding-right-zero">
          <img src="img/portfolio01.jpg" class="img-responsive">
          <img src="img/port01.jpg" class="img-responsive">
          <img src="img/port02.jpg" class="img-responsive">
          <img src="img/portfolio01.jpg" class="img-responsive">
        </div>
        <div class="col-md-4 col-sm-4 padding-right-zero">
          <img src="img/portfolio02.jpg" class="img-responsive">
          <img src="img/port01.jpg" class="img-responsive">
          <img src="img/port02.jpg" class="img-responsive">
          <img src="img/portfolio01.jpg" class="img-responsive">
          <img src="img/port03.jpg" class="img-responsive">
        </div>
        <div class="col-md-4 col-sm-4 padding-right-zero">
          <img src="img/port01.jpg" class="img-responsive">
          <img src="img/portfolio01.jpg" class="img-responsive">
          <img src="img/portfolio02.jpg" class="img-responsive">
          <img src="img/port03.jpg" class="img-responsive">
          <img src="img/portfolio02.jpg" class="img-responsive">
          <img src="img/port02.jpg" class="img-responsive">
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonial" class="section-padding wow fadeInUp">
  <div class="container">
    <div class="row">
      <h2 class="title text-center">See What Our <span class="deco">Client</span> Are Saying ?</h2>
      <div class="test-sec">
        <div class="col-sm-4">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
          </blockquote>
          <div class="carousel-info">
            <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
          </blockquote>
          <div class="carousel-info">
            <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
          </blockquote>
          <div class="carousel-info">
            <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">CEO,  Company Inc.</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('moreScript')

@if(Auth::guest())
    <script src="js/collapse-header.js"></script>
@endif

@endsection
