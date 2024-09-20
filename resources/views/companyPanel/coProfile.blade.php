<section class="colorlib-about" data-section="profile">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft" style="margin-bottom: -150px">
          <div class="col-md-12">
            <div class="about-desc">
              <h2 class="colorlib-heading">Company Profile</h2>
            </div>
          </div>
        </div >
        @foreach ($company as $company)
          <div class="" style="margin-top: 20px">
            <center>
              <img src="UploadedImages/{{$company->profileImage}}" alt="" height="150px" />
              <h3 style="margin: 0px">{{$company->company}}</h3>
              <h6>{{$company->category}}</h6>
            </center>
            <div class="row form-group" style="margin-bottom: -15px">
              <div class="col-md-6 mb-3 mb-md-0">
                <p>Email Address: <span style="color: blue">{{$company->email}}</span></p>
              </div>
              <div class="col-md-6">
                <p>Phone Number: <span style="color: blue">{{$company->phone}}</span></p>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <p>Website: <span style="color: blue">{{$company->website}}</span></p>
              </div>
              <div class="col-md-6">
                <p>Location: {{$company->location}}</p>
              </div>
            </div>
          </div>
            <div class="btn-group" role="group" aria-label="Basic example">
               <a style="margin-left: 50px" href="{{ URL::to('company/' . $company->id . '/edit') }}">
                 <button type="submit" class="btn btn-primary">
                     <i class="fa fa-edit"></i>
                     <span>Edit</span>
                 </button>
              </a>
                <form action="{{url('company', [$company->id])}}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
                      <i class="fa fa-trash"></i>
                      <span>Delete</span>
                  </button>
                </form>
                </div>
                 @endforeach

          <div class="show">
            <form method="POST" action="/company" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label  for="Company Name" style="color:black">Company Name</label>
                    <input type="text" id="company" name="company" value="{{ Auth::user()->name }}" class="form-control" placeholder="Company Name">
                  </div>
                  <div class="col-md-6">
                    <label  for="dateline" style="color:black">Category</label> <span style="color: red">*</span>
                    <input type="text" id="category" name="category" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label  for="E-mail Address" style="color:black">E-mail Address</label>
                    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="someone@domain.com">
                  </div>
                  <div class="col-md-6">
                    <label  for="Phone Number" style="color:black">Phone Number</label> <span style="color: red">*</span>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="+XX XX XX XX XXX">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label  for="Website" style="color:black">Website</label>
                    <input type="text" id="website" name="website" class="form-control" placeholder="www.something.com">
                  </div>
                  <div class="col-md-6">
                    <label  for="dateline" style="color:black">Location</label> <span style="color: red">*</span>
                    <input type="text" id="location" name="location" class="form-control" placeholder="Enter your address here (state/city/country)">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="image"> Profile Picture</label> <br>
                    <input type="file" name="select_file" value="">
                  </div>
                  <div class="col-md-6">
                    <br>
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
                @include('layouts.errors')
              </form>
          </div>
     </div>
  </div>
</div>
</section>
