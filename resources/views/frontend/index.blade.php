@extends('layouts.front')

@section('title')
    Mastor | LuxeBeautè International Academy Inc. - Shop Page
@endsection

@section('content')
    <!-- hero page -->
<section id="home">
  <div class="home_page">
      <div class="home_img ">
          <img src="\assets\frontend\pmu-shop.jpeg" alt="img ">
      </div>
      <div class="home_txt ">
          <p class="collection ">PERMANENT MAKE UP</p>
          <h2>LUXEBEAUTE<br>SHOP 2023<span style="color: #A2904E;">.</span></h2>
          <div class="home_label ">
             <button class="btn"> SHOP NOW <i class="bi bi-bag"></i></button>
              
          </div>
      </div>
  </div>
</section>
<!-- end of hero page -->

<!-- best seller -->

@include('frontend.components.bestSeller')

<!-- end of best seller -->

<!-- Mastor credits -->
<section class="mastor-credits  mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="\assets\frontend\mastor-credit.webp" alt="">
      </div>
      <div class="col-md-6">
        <p><span>Mastor,</span> the official Sponsor and Lead Organizer of the World PMU Festival and International Competition and their line of PMU Micropigmentation Pigments are of high quality, professional grade and vivid pigments used around the world by many of todays leading PMU Artists.</p>
      </div>
    </div>
  </div>
</section>
<!-- end of Mastor credits -->


<!-- card shop section -->
@include('frontend.components.featured')
<!-- card shop section -->

<!-- shop banner -->

<div class="banner-container">
  <img src="\assets\frontend\promo-banner.avif" alt="">
</div>

<!-- end of shop banner -->

<!-- card shop section2 -->

@include('frontend.components.sale')

<!-- end of card shop section 2 -->





<!-- card shop icons -->
<section class="shop-icons">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5"><img src="\assets\frontend\icons8-shipping-50.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.</p>
      </div>
      <div class="col-md-6 mt-5"><img src="\assets\frontend\icons8-customer-care-66.png" alt="">
      <p>Call us 123456789</p></div>
      <div class="col-md-6 mt-5"><img src="\assets\frontend\icons8-quality-50.png" alt="">
        <p>All of our products have been developed by experts
      </p></div>
      <div class="col-md-6 mt-5"><img src="\assets\frontend\icons8-payment-50.png" alt=""><p>
        Apple Pay, Google Pay and Pay Later Options.
      </p></div>
    </div>
  </div>
</section>
<!-- end of card shop icons -->

@endsection
