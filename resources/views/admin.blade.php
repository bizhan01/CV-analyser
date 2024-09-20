@extends('layouts.master')
@section('content')
	<body>
			<br></br>
			<br></br>
			<center>
				@foreach ($admin as $admin)
							<img src="UploadedImages/{{$admin->profileImage }}" alt="" class="img img-circle" height="150px" />
			   @endforeach
			    <h1 id="colorlib-logo"><a href="/home" style="color: black">{{ Auth::user()->name }} </a></h1>
					<a href="/admin">
					<button class="btn btn-primary">
						<li class="fa fa-spin fa-cog"></li>
							<span>Continue as Admin</span>
						</button>
						</a>
			</center>
	</body>
@endsection
