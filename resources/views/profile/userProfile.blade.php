@extends('layouts.master')
@section('content')
<body>
	<div id="myback"> </div>
    	<div id="colorlib-page">
          @include('profile.nav')
      	<div id="colorlib-main">
							@include('profile.slideShow')
							@include('profile.personalInfo')
							@include('profile.education')
					  	@include('profile.skills')
							@include('profile.languages')
							@include('profile.workExperience')
							@include('profile.documents')
							@include('profile.reference')
       </div><!-- end:container-wrap -->
 	</div><!-- end:colorlib-page -->
</body>
@endsection
