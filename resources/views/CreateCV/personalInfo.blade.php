@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">

	@include('CreateCV.nav')

		<div id="colorlib-main">
<section class="colorlib-skills" data-section="skills">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <h2 class="colorlib-heading animate-box">Presonal Information</h2>
      </div>
    </div>

	  <div class="show">
			@foreach ($user as $personlInfo)
						 <div class="" style="margin-top: 20px">
							 <center>
								 <img src="UploadedImages/{{$personlInfo->profileImage}}" alt="" class="img-circle" height="150px"  />
								 <h3 style="margin: 0px">{{$personlInfo->fullName}}</h3>
								 <h6>{{$personlInfo->profession}}</h6>
							 </center>

							 <div class="row form-group" style="margin-bottom: -15px">
								 <div class="col-md-6 mb-3 mb-md-0">
									 <p>E-mail Address: <span style="color: blue">{{$personlInfo->email}}</span></p>
								 </div>
								 <div class="col-md-6">
									 <p>Phone Number: <span style="color: blue">{{$personlInfo->phone}}</span></p>
								 </div>
							 </div>
							 <div class="row form-group">
								 <div class="col-md-6 mb-3 mb-md-0">
									 <p>Date of Birth: {{$personlInfo->dob}}</p>
								 </div>
								 <div class="col-md-6">
									 <p>Address: {{$personlInfo->address}}</p>
								 </div>
							 </div>
						 </div>

					<div class="btn-group" role="group" aria-label="Basic example">
						 <a style="margin-left: 50px" href="{{ URL::to('personlInfo/' . $personlInfo->id . '/edit') }}">
							 <button type="submit" class="btn btn-primary">
									 <i class="fa fa-edit"></i>
									 <span>Edit</span>
							 </button>
						</a>
							<form action="{{url('personlInfo', [$personlInfo->id])}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
										<i class="fa fa-trash"></i>
										<span>Delete</span>
								</button>
							</form>
					 @endforeach
				 </div>

			<form method="POST" action="/personlInfo" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="row form-group">
							<div class="col-md-6 mb-3 mb-md-0">
								<label for="fullName" style="color: black">Fulll Name</label>
								<input type="text" name="fullName" value="{{ Auth::user()->name }}" class="form-control" placeholder="Enter your Full Name" required>
							</div>
							<div class="col-md-6">
								<label for="profession" style="color: black">Profession</label>
								<input type="text" name="profession" value=""  class="form-control" placeholder="Enter your profession" required>
							</div>
						</div>
						<div class="row form-group">
								<div class="col-md-6 mb-3 mb-md-0">
									<label for="Date of Birth" style="color: black">Date of Birth</label>
									<input type="date" name="dob" value=""  class="form-control" required>
								</div>
								<div class="col-md-6">
									<label for="phoneNumber" style="color: black">Phone Number</label>
									<input type="text" name="phone" value=""  class="form-control" placeholder="Enter your phone number here" required>
								</div>
							</div>
							<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label for="email" style="color: black">E-mail Address</label>
										<input type="email" name="email" value="{{ Auth::user()->email }}"  class="form-control" required>
									</div>
									<div class="col-md-6">
										<label for="address" style="color: black"> Address</label>
										<input type="text" name="address" value=""  class="form-control" placeholder="Enter your address here (state/city/country)" required>
									</div>
								</div>
								<div class="row form-group">
										<div class="col-md-6 mb-3 mb-md-0">
											<label for="image" style="color: black"> Profile Picture</label> <br>
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
</section>
  </div>
</div>
</div>

</body>
<!-- </html> -->

<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value; // Display the default slider value

		// Update the current slider value (each time you drag the slider handle)
		slider.oninput = function() {
		output.innerHTML = this.value;
		}
</script>

<script type="text/javascript">
		var counter = 0;
		function getCount() {
		counter ++;
		document.getElementById('lbl_show').innerHTML = counter;
		}
</script>

@endsection
