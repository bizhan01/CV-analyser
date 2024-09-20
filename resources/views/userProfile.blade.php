@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
<body>
	<br></br>
	<br></br>
		<center>
		@foreach ($user as $personlInfo)
			<img src="UploadedImages/{{$personlInfo->profileImage }}" alt="No Image" class="img-circle"  height="150px"/>
			 @endforeach
			 <h2 style="margin: 0px">{{ Auth::user()->name }}</h2>
       <h4>Create your CV now</h4>
			 <p class="col-lg-8">
				 Writing an affective CV is a new experience and yet
				  a challenge for most of people living in our society. In addition,
				  it’s something more than important for an individual applying a job.
			 </p>
			 <a href="/personlInfo">
			 <button class="btn btn-primary">
				 <li class="fa fa-spin  fa-spinner"></li>
				 <span>Create your CV now</span>
			 </button>
			 </a>
		</center>

</body>
@endsection
