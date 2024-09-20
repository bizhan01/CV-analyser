@extends('layouts.master')
@section('content')
	<body>
		<div id="myback"> </div>
     	<div id="colorlib-page">
    		@include('adminPanel.nav')
						<div id="colorlib-main">
								@include('adminPanel.dashborad')
								@include('adminPanel.messages')
								@include('adminPanel.users')
						  	@include('adminPanel.companies')
						</div>
	     </div>
	</body>
@endsection
