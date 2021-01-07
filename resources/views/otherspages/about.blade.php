@extends('otherspages.layouts.master')
@section('content')


  <!-- HEADER --> 
<div id="home" class="header-banner pages-header-banner">
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
        </ul>
<div class="banner-white-wave">
  <img src="images/bannerwave.png" alt="">
</div>

  <div class="container">
 @include('.otherspages.partials.nav')
<div class="banner-body pages-banner-body">
      <div class="text-center">
        <h2>About Photofery</h2>
        <a href="">Home</a><i class="fas fa-chevron-right"></i><a href="">Terms And Conditions</a>
      </div>
  </div>
</div>
</div>


<div class="about">
  <div class="container">
    <div class="about-body">
      <div class="pages-about-photo text-center">
        <h2 class="">About Photofery</h2>
      </div>
      <h6>Now, you do not have to wait at Salon, Spa and Beauty Parlor...!</h6>
      <p>KeChi, India’s Salon Appointment Booking App, this is the fastest way to book an appointment with salon, Spa and beauty parlor, without paying any pre-payment. Download the KeChi app now and you will never have to wait for barber at salon and beauty parlor shop for your turn.</p>
      <h6>Easy Appointment Booking:</h6>
      <p>Booking an appointment with barber and makeup artist on KeChi App is very convenient and user-friendly.</p>
      <p>* Open KeChi App</p>
      <p>* Select your city and area using drop-down option</p>
      <p>* Search your salon name</p>
      <p>* The estimated salon price list will be displayed on the screen/p>
      <p>* Go ahead and book an appointment with barber and makeup artist.</p>
    </div>
  </div>
</div>



@endsection
