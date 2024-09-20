@extends('layouts.master')
@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">

	@include('CreateCV.nav')

		<div id="colorlib-main">
			<section class="colorlib-education" data-section="education">
			  <div class="colorlib-narrow-content">
			    <div class="row">
			      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
			        <h2 class="colorlib-heading animate-box" style="margin: 0px">Education</h2>
			        <h6 class=" ">Pleas Select Your Highest Level of Education </h6>
			      </div>
			    </div>
							<div class="row">
								<div class="col-md-12">
										 <div class="timeline-centered">
											 @foreach ($education as $education)
											 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
													<div class="timeline-entry-inner">
														 <div class="timeline-icon color-1 fa fa-graduation-cap" >
																<i class="icon-pen2"></i>
														 </div>
														 <div class="timeline-label">
															 	<h2>{{$education->degree}} of {{$education->fieldOfStudy}} from {{$education->school}}. <span>({{$education->city}}-{{$education->country}}, {{$education->end}}) </span></h2>
																<div class="btn-group" role="group" aria-label="Basic example">
																	 <a style="margin-left: 50px" href="{{ URL::to('education/' . $education->id . '/edit') }}">
																		 <button type="submit" class="btn btn-primary">
					 															<i class="fa fa-edit"></i>
					 															<span>Edit</span>
					 													</button>
																	</a>
																		<form action="{{url('education', [$education->id])}}" method="POST">
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
									<div class="row">
										 <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
											 <div class="fancy-collapse-panel">
												 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
													 <!-- PhD Section -->
														 <div class="panel panel-default">
																 <div class="panel-heading" role="tab" id="headingOne">
																		 <h4 class="panel-title">
																				 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" data-toggle="collapse" aria-controls="collapseOne">PhD
																				 </a>
																		 </h4>
																 </div>
																 <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																			<div class="panel-body">
																				<form method="POST" action="/education">
																					  {{ csrf_field() }}
																						@include('CreateCV/edu.phd')
																						@include('CreateCV/edu.master')
																						@include('CreateCV/edu.bachelor')
																						@include('CreateCV/edu.highSchool')

																					<div class="form-group">
																			      <input type="submit" name="submit" value="Save" class="btn btn-primary">
																			    </div>
																	        @include('layouts.errors')
																	      </form>
																			</div>
																 </div>
														 </div>
									 <!-- Master Section -->
													 <div class="panel panel-default">
															 <div class="panel-heading" role="tab" id="headingTwo">
																	 <h4 class="panel-title">
																			 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Master Degree
																			 </a>
																	 </h4>
															 </div>
															 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
																	 <div class="panel-body">
																		 <form method="POST" action="/education">
																			   {{ csrf_field() }}
																				 @include('CreateCV/edu.master')
																				 @include('CreateCV/edu.bachelor')
																				 @include('CreateCV/edu.highSchool')

																		 <div class="form-group">
 																    <input type="submit" name="submit" value="Save" class="btn btn-primary">
 																    </div>
 																    @include('layouts.errors')
 																  </form>
																	 </div>
															 </div>
													 </div>

															 <!-- Bachelor Section -->
													 <div class="panel panel-default">
															 <div class="panel-heading" role="tab" id="headingThree">
																	 <h4 class="panel-title">
																			 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bachelor Degree
																			 </a>
																	 </h4>
															 </div>
															 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
																	 <div class="panel-body">
																		 <form method="POST" action="/education">
																			   {{ csrf_field() }}
																			 @include('CreateCV/edu.bachelor')
																			 @include('CreateCV/edu.highSchool')

																		 <div class="form-group">
 																       <input type="submit" name="submit" value="Save" class="btn btn-primary">
 																    </div>
 																    @include('layouts.errors')
 																  </form>
															 </div>
													 </div>
									 <!-- High School Section -->
													 <div class="panel panel-default">
															 <div class="panel-heading" role="tab" id="headingFour">
																	 <h4 class="panel-title">
																			 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">High School Secondary Education
																			 </a>
																	 </h4>
															 </div>
															 <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
																	 <div class="panel-body">
																		 <form method="POST" action="/education">
																		  {{ csrf_field() }}
																			  @include('CreateCV/edu.highSchool')
																				
																		<div class="form-group">
																       <input type="submit" name="submit" value="Save" class="btn btn-primary">
																    </div>
																    @include('layouts.errors')
																  </form>

																	 </div>
															 </div>
													 </div>
									 <!-- Other Section -->
													 <div class="panel panel-default">
															 <div class="panel-heading" role="tab" id="headingFive">
																	 <h4 class="panel-title">
																			 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Other courses, certificates, diplomas you received
																			 </a>
																	 </h4>
															 </div>
															 <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
																	 <div class="panel-body">
																		 	<form method="POST" action="/education">
																				  {{ csrf_field() }}
																		   @include('CreateCV/edu.course')
																			 <div class="form-group">
	 																       <input type="submit" name="submit" value="Save" class="btn btn-primary">
	 																    </div>
 																    @include('layouts.errors')
 																  </form>
																	 </div>
															 </div>
													 </div>
												 </div>
											 </div>
										 </div>
									 </div>
									</div>
			        </div>
			      </div>
			    </div>
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
