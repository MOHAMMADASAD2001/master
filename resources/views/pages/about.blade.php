@section('css', 'css/clock.css')

@section('title','about')

@extends('layout.master')
@section('content')


 <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>MAD WATCH</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-5">

          <!-- <div class="clock">

              <div class="hour">
                  <div class="hr" id="hr"></div>
              </div>
      
              <div class="min">
                  <div class="mn" id="mn"></div>
              </div>
      
              <div class="sec">
                  <div class="sc" id="sc"></div>
              </div> -->
          <div class="container">



            <div class="clock">
              <div class="clock-bg">
                <img src="images/clock.png" alt="...">
              </div>
              <div class="hour">
                <span class="hr" id="hr"></span>
              </div>
              <div class="minute">
                <span class="min" id="min"></span>
              </div>
              <div class="second">
                <span class="sec" id="sec"></span>
              </div>
            </div>


          </div>

        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2 style="color:#3b4a6b ;">
                About MAD
              </h2>
            </div>
            <p>
              Welcome to our E-commerce Watches Website, your digital haven for exquisite timepieces. Explore our
              carefully curated collection of watches that blend style and functionality seamlessly. From classic
              designs to modern innovations, each watch tells a unique story of craftsmanship. <br> <br> Experience a
              hassle-free shopping journey with detailed visuals, secure transactions, and global shipping.
              Whether you're a horology enthusiast or seeking a meaningful gift, we're here to make every moment count.
              Step into a world of timeless elegance with our E-commerce Watches Website. Discover the perfect fusion of
              precision and fashion as you explore our handpicked selection of watches. Elevate your wristwear game
              today!
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>
@section('js', 'js/clock.js')
  <!-- end about section -->
  @endsection