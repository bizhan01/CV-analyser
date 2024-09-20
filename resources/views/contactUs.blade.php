@extends('layouts.master')

@section('content')

<!-- HOME -->
  <section class="home-section section-hero inner-page overlay bg-image"
    style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="mb-5 text-center">
            <h1 class="text-white font-weight-bold">Contact Us</h1>
            <p>We like to hear from you because your ideas are important for us.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="site-section" id="next-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form method="POST" action="/messages">
                 {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label> <span style="color: red">*</span>
                <input type="text" name="fName" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" name="lName" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label> <span style="color: red">*</span>
                <input type="email" name="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" name="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label> <span style="color: red">*</span>
                <textarea name="body" id="body"  cols="30" rows="7" class="form-control"
                  placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" name="submit" class="btn btn-primary btn-md text-white">
              </div>
            </div>

               @include('layouts.errors')
          </form>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Kateb University, Kabul- Afghanistan</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+93 749 4800 55</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">rahmatullahbizhan@gmail.com</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.footer')
@endsection
