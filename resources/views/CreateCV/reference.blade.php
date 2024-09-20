@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">
	@include('CreateCV.nav')
		<div id="colorlib-main">
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Reference</h2>
						</div>
					</div>
					<div  style="padding: 30px">
						@foreach($references as $reference)
						<center>	<h1>Your Reference Data Here</h1> </center>
						<h5>Name: {{$reference-> fullName}}</h5>
						<h5>Relationship: {{$reference-> relationship}}</h5>
						<h5>Company: {{$reference-> company}}</h5>
						<h5>Position: {{$reference-> position}}</h5>
						<h5>E-mail: {{$reference-> email}}</h5>
						<h5>Phone #: {{$reference-> phone}}</h5>

						<div class="btn-group" role="group" aria-label="Basic example">
							 <a style="margin-left: 50px" href="{{ URL::to('reference/' . $reference->id . '/edit') }}">
								 <button type="submit" class="btn btn-primary">
										<i class="fa fa-edit"></i>
										<span>Edit</span>
								</button>
							</a>
								<form action="{{url('reference', [$reference->id])}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
											<i class="fa fa-trash"></i>
											<span>Delete</span>
									</button>
								</form>
						 </div>
						 	@endforeach
					</div>

						<form method="POST" action="/reference">
								{{ csrf_field() }}
							<div class="row form-group">

									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="Full Name" style="color:black">Full Name</label>
										<input type="text"  name="fullName" class="form-control" placeholder="Full Name" required>
									</div>
									<div class="col-md-6">
										<label  for="Relationship" style="color:black">Relationship</label>
										<!-- <input type="text"  name="relationship" class="form-control" placeholder="Relationship" required> -->
										<select class="form-control" name="relationship">
											<option value="Family member">Family member</option>
											<option value="Colleague">Colleague</option>
											<option value="Friend">Friend </option>
											<option value="Not to be mention">Not to be mention </option>
											<option value="N/A">Other  </option>
										</select>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="Organization/Company" style="color:black">Organization/Company </label>
										<input type="text"  name="company" class="form-control" placeholder="Organization/Company" required>
									</div>
									<div class="col-md-6">
										<label  for="Position" style="color:black">Position</label>
										<input type="text"  name="position" class="form-control" placeholder="Position" required>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="E-mail Address" style="color:black">E-mail Address</label>
										<input type="email"  name="email" class="form-control" placeholder="someone@domain.com" required>
									</div>
									<div class="col-md-6">
										<label  for="Phone Number" style="color:black">Phone Number</label>
										<input type="text"  name="phone" class="form-control" placeholder="+93 77 -- -- ---" required>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Save" class="btn btn-primary">
								</div>
								@include('layouts.errors')
            </form>
						<center>
							 <a  href="{{url('/download/pdf')}}" class="btn btn-success col-lg-5">Download CV <i class="fa fa-download" ></i></a>
						 </center>
				</div>
			</section>

		</div>
	</div>

	</body>

<!-- </html> -->


@endsection
