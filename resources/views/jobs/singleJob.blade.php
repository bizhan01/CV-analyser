@extends('layouts.master')
@section('content')
<!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('/images/hero_1.jpg');"
      id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">{{ $job->jobTitle}}</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              @foreach($companies as $companies)
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="/UploadedImages/{{$companies->profileImage}}"  height="53px" alt="Image Not Found">
              </div>
              <div>
                <h2>{{ $job->jobTitle}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$companies->company}}</span>
                  <span class="m-2"><span class="icon-room mr-2"></span>{{$companies->location}}</span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"></span>{{$job->category}}</span>
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
                <a href="#" class="btn btn-block btn-light btn-sm col-lg-3"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
              <div class="col-6">
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span>Share</span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-6">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> {{ $job->created_at}}</li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> {{ $job->vacancy}}</li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{ $job->category}}</li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> {{ $job->experience}} years</li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$companies->location}}</li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> {{ $job->salary}}</li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> {{ $job->gender}}</li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{ $job->dateline}}</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 card" style="margin-top: -3px; padding-bottom: 1px">
               @foreach($users as $user)
            <center>  <h3>Application Form</h3> </center>
              <div class="container">
                <form method="POST" action="/application" enctype="multipart/form-data">
                     {{csrf_field()}}
                     <input type="hidden" name="jobID" value="{{ $job->id}}" >
                     <input type="hidden" name="user_id" value="{{$user->user_id}}" >
                    <div class="col-md-12 mb-5 mb-md-0">
                      <label  for="fullName" style="color: black">Full Name</label><span style="color: red">*</span>
                      <input type="text" id="fullName" name="fullName" class="form-control" value="{{$user->fullName}}">

                    </div>
                    <div class="col-md-12">
                      <label  for="Email Address" style="color: black">Email Address</label> <span style="color: red">*</span>
                      <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label  for="phone" style="color: black">Phone Number</label><span style="color: red">*</span>
                      <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}">
                    </div>

                    <div class="col-md-12">
                      <br>
                         <input type="submit" value="Apply Now" class="btn btn-success col-lg-4  text-white">
                    </div>
                     @include('layouts.errors')
                </form>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @include('layouts.footer')
@endsection
