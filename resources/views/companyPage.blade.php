@extends('layouts.master')
@section('content')
	<body>
		<br></br>
		  <br></br>
				<center>
					@foreach ($companies as $PersonlInfo)
								<img src="UploadedImages/{{$PersonlInfo->profileImage}}" alt="" height="150px" />
				   @endforeach
				    <h3 id="colorlib-logo"><a href="/home">{{ Auth::user()->name }} </a></h3>
		         <h5>Create your company profile today</h5>
					 <p class="col-lg-8">
						 Manage your business better than any time before, job complex is all yours. We try our best to keep it update and provide you the template to announce your vacant positions (jobs). In the other hand, the employees can apply your jobs online. Last but not the least, the system can short list (analysis) the CVs based on your job’s requirements.
					 </p>
					 		<a href="/company">
							<button class="btn btn-primary">
								<li class=" fa fa-spin  fa-spinner">  </li>
								<span>Continue</span>
							</button>
							 </a>
				 </center>
	</body>
@endsection
