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
        <span class="heading-meta">My Specialty</span>
        <h2 class="colorlib-heading animate-box">My Skills</h2>
      </div>
    </div>

		<table class="table">
			 <tbody>
				 	@foreach ($skills as $skills)
				 <tr>
					 <td class="col-lg-12">
							<div class="progress-wrap">
								<h3>{{$skills->skill}} </h3>
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
										aria-valuemin="0" aria-valuemax="100" style="width:{{$skills->percentage}}%">
										<span>{{$skills->percentage}}%</span>
									</div>
								</div>
							</div>
					 </td>
					 <td>
						<div class="btn-group" role="group" aria-label="Basic example">
							 <a style="margin-left: 50px" href="{{ URL::to('skills/' . $skills->id . '/edit') }}">
								 <button type="submit" class="btn btn-primary">
										<i class="fa fa-edit"></i>
										<span>Edit</span>
								</button>
							</a>
								<form action="{{url('skills', [$skills->id])}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
											<i class="fa fa-trash"></i>
											<span>Delete</span>
									</button>
								</form>
						 </div>
      	  </td>
				 </tr>
				 @endforeach
			 </tbody>
		 </table>

    <form method="POST" action="/skills">
      {{ csrf_field() }}
      <div class="row form-group">
        <div class="col-md-5 mb-3 mb-md-0">
          <label  for="skill" style="color:black">Professional Skills</label>
          <input type="text"  name="skill" class="form-control" placeholder="Your Skill here" required>
        </div>
        <div class="col-md-5 mb-3 mb-md-0">
          <label  for="percentage" style="color:black">Percentage:</label> <span class="output" id="demo" style="color: red"></span>
          <div class="slidecontainer">
              <input type="range" min="1" max="100" name="percentage" value="50" class="slider" id="myRange" required>
          </div>
      </div>
      <div class="col-md-2 mb-1 mb-md-0">
          <!-- <a href="#"><div style="color: #157efb; font-size: 40px; margin-top: 38px " class="icon-plus"></div></a> -->
					  <input type="submit" name="submit" id="btn1" value="Save" class="btn btn-primary"  style=" margin-top: 38px ">
      </div>
      <br> </br>
      <br> </br>
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

<script type="text/javascript">
		var counter = 0;
		function getCount() {
		counter ++;
		document.getElementById('lbl_show').innerHTML = counter;
		}
</script>

@endsection
