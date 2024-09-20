@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">

	@include('CreateCV.nav')

		<div id="colorlib-main">
			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								 <div class="timeline-centered">
									 @foreach ($experiences as $experience)
									 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
											<div class="timeline-entry-inner">
												 <div class="timeline-icon color-1 icon-briefcase" >
														<i class="icon-pen2"></i>
												 </div>
												 <div class="timeline-label">
														<h2>{{$experience->jobTitle}} at {{$experience->company}}, {{$experience->city}}-{{$experience->country}}. <span>{{$experience->start}}-{{$experience->end}}</span></h2>
														<div class="btn-group" role="group" aria-label="Basic example">
															 <a style="margin-left: 50px" href="{{ URL::to('experience/' . $experience->id . '/edit') }}">
																 <button type="submit" class="btn btn-primary">
			 															<i class="fa fa-edit"></i>
			 															<span>Edit</span>
			 													</button>
															</a>
																<form action="{{url('experience', [$experience->id])}}" method="POST">
																	<input type="hidden" name="_method" value="DELETE">
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
																			<i class="fa fa-trash"></i>
																			<span>Delete</span>
																	</button>
																</form>
														 </div>
												 </div>
											</div>
									 </article>
									@endforeach
								</div>
						 </div>
					 </div>
					<form method="POST" action="/experience">
			      {{ csrf_field() }}
							<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="Field of Study" style="color:black">Job Title</label>
										<input type="text"  name="jobTitle" class="form-control" placeholder="Job Title" required>
									</div>
									<div class="col-md-6">
										<label  for="Organization/Company" style="color:black">Organization/Company</label>
										<input type="text"  name="company" class="form-control" placeholder="Organization/Company" required>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="City" style="color:black">City </label>
										<input type="text"  name="city" class="form-control" placeholder="The City" required>
									</div>
									<div class="col-md-6">
									 @include('countryList2')
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-6 mb-3 mb-md-0">
										<label  for="Start Date" style="color:black">Start Date </label>
										<input type="month"  name="start" class="form-control" required >
									</div>
									<div class="col-md-6">
										<label  for="End Date" style="color:black">End Date</label>
										<input type="month"  name="end" class="form-control" required >
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Save" class="btn btn-primary">
								</div>
								@include('layouts.errors')
            </form>
				</div>
			</section>
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

	@endsection
