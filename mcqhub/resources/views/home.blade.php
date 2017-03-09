@extends('layouts.app')

@section('content')

<div class="header">
    <div class="bg-color">
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Let's join and power up IQ</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button type="button" class="btn btn-primary">Sign in</button>
                <button type="button" class="btn btn-primary">Sign up</button>
              </div>
              <!-- <div class="">
                  <button type="button" class="btn btn-default">Let</button>
              </div> -->
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
</div>

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
