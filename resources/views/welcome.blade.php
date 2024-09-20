@extends('layouts.master')

@section('content')

<!-- HOME -->
<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="mb-5 text-center">
          <h3 class="text-white font-weight-bold">Job Complex Is All Yours, Start Today Create Your CV and Manage Your Business</h3>
          <p>Find your dream job and your expert employee  in a click.</p>
        </div>

        <!-- Search Start -->
            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"> Find a Candidate </a>

                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Job</a>

                  </div>
                </div>

                <div class="col-md-12 tab-wrap">

                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                      <form action="/searchCondidate" method="POST" role="search" class="search-job">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" name="q" placeholder="Type Job Title (Engineer)">
                              </div>
                            </div>
                          </div>
                          <div class="">
                            <div class="">
                              <div class="form-field">
                                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Find Condidate</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                      <form action="/searchJob" method="POST" role="search" class="search-job">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span  class="icon-briefcase"></span></div>
                                <input type="text" class="form-control" name="q" placeholder="You Can Search a Job by Job Title, Company Name, Service Sector, Category, Location and Gender">
                              </div>
                            </div>
                          </div>
                          <div class="">
                            <div class="form-group">
                              <div class="form-field">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Find a Job</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Search End -->
          </div>
        </div>
      </div>
</section>
@include('careersStatistics')
@include('jobs.jobsList')


<!-- <section class="site-section py-4 mb-5 border-top">
    <div class="row align-items-center">
      <div class="col-12 text-center mt-4 mb-5">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-2">Our Candidates Work In Company</h2>
            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <section class="bg-light pt-5 testimony-full" style="background-color: red">
        <div class="owl-carousel single-carousel">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">

                <img class="img-fluid mx-auto" src="images/person_1.jpg" alt="Image" >
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Rahmatullah Bizhan</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <img class="img-fluid mx-auto" src="images/person_2.jpg" alt="Image">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Abdullah Hussaini</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

      </div>

    </section>
</section> -->


@include('ourVision')
@include('subscribe')
  @include('layouts.footer')
@endsection
