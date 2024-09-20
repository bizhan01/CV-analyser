@extends('layouts.master')

@section('content')

  <!-- HOME -->
  <section class="home-section section-hero inner-page overlay bg-image"
    style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="mb-5 text-center">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <p>Create your CV today and find your dream job.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section pb-0" style="margin-bottom: 20px">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="images/bizhan.jpg" alt="Image" class="img-fluid img-shadow">
          </a>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="section-title mb-3">About the Project</h2>
          <p class="lead">
            This project focus in two issues first generating an online CV for end users, second the businesses owners can search for their dream employees in this system because the system is able to make a list of people who had made their CVs here and we can search by the occupation title to find out our dream staffs.
          </p>
          <p>Project Title: Online CV Maker</p>
          <p>Developer: Rahmatullah Bizhan</p>
          <p>Advisor: Dr. Murtaza Nikzad</p>

            <span class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </span>
        </div>
      </div>
    </div>
  </section>

  @include('careersStatistics')
  @include('layouts.footer')
@endsection
