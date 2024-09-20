@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">

	@include('CreateCV.nav')

		<div id="colorlib-main">
<section class="colorlib-skills" data-section="language">
  <div class="colorlib-narrow-content">
    <div class="row" >
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <h2 class="colorlib-heading animate-box">Language</h2>
      </div>
    </div>

  <div style="padding-right: 50px; padding-left: 50px; margin-top: -120px">
		<table class="table col-lg-8" >
 		 <thead style="background-color: #157efb; color: white">
 			 <br></br>
 			 <br>
 			 <tr >
 				 <th scope="col">Language</th>
 				 <th scope="col">Level</th>
 				 <th scope="col">Edit</th>
 				 <th scope="col">Delete</th>
 			 </tr>
 		 </thead>
 		 <tbody>
 			@foreach ($languages as $language)
 			 <tr>
 				 <td>{{$language->language}}</td>
 				 <td>{{$language->level}}</td>
 				 <td>
				 <a href="{{ URL::to('tasks/' . $language->id . '/edit') }}">
				   	<i class="fa fa-edit"></i>
					</a>
       </td>
			 <td>
		<form action="{{url('tasks', [$language->id])}}" method="POST">
			 <input type="hidden" name="_method" value="DELETE">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
				 <button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
					 <i type="submit"  class="fa fa-trash"></i>
				 </button>
		 </form>
		 </td>
 			 </tr>
 			 @endforeach
 		 </tbody>
 	 </table>
  </div>

    <form method="POST" action="/tasks">
      {{ csrf_field() }}
      <div class="row form-group">
        <div class="col-md-5 mb-3 mb-md-0">
          <label  for="skill" style="color:black">Professional Communication Skills</label>
          <input type="text"  name="language" class="form-control" placeholder="Language" required>
        </div>
        <div class="col-md-5 mb-3 mb-md-0">
          <label  for="level" style="color:black">Level</label>
          <div class="slidecontainer">
            <select name="level" id="" class="form-control" required>
              <option value="N/A">Select the level</option>
              <option value="Native">Native</option>
              <option value="Excellent">Excellent</option>
              <option value="Good">Good</option>
              <option value="Poor">Poor</option>
            </select>
          </div>
      </div>
      <div class="col-md-2 mb-1 mb-md-0">
          <a href="#"><div style="color: #157efb; font-size: 40px; margin-top: 22px ">
							<input type="submit" name="submit" value="Save" class="btn btn-primary">
					</div></a>
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
