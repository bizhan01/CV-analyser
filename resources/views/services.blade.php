@extends('layouts.master')

@section('content')
<!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Our Services</h1>
              <p>Online CV is all yours.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="site-section services-section bg-light block__62849" id="next-section">
  <div class="container">

    <div class="row">

      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a href="service-single.html" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-laptop d-block"></span></span>
          <h3>Create CV</h3>
          <p>
            Writing an affective CV is a new experience and yet a challenge for most of people living in our society. In addition, it’s something more than important for an individual applying a job.
          </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a href="service-single.html" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-search d-block"></span></span>
          <h3>Find Candidate </h3>
          <p>
            Online CV maker helps businesses owners (HR departments) find their dream candidate because the system generates a list of people who had made their CVs and we can search by the occupation title to find out our dream staffs.
          </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a href="service-single.html" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-paper-plane d-block"></span></span>
          <h3>Post a Job </h3>
          <p>
            Not only business owners can search for a candidate through this system but also they can post their vacant positions.
          </p>
        </a>

      </div>

    </div>


  </div>
</section>

  @include('ourVision')

  @include('subscribe')
  @include('layouts.footer')
@endsection
