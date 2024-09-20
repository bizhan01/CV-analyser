@extends('layouts.master')
@section('content')
	<body>
		<div id="myback"> </div>
     	<div id="colorlib-page">
    		@include('companyPanel.nav')
						<div id="colorlib-main">
								@include('companyPanel.coProfile')
								@include('companyPanel.post')
								@include('companyPanel.jobs')
								@include('companyPanel.blog')
						</div>
	     </div>
	</body>
@endsection
