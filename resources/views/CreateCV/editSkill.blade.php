@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('skills', [$skill->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
			<div class="row form-group">
				<div class="col-md-6 mb-3 mb-md-0">
					<label style="color: black" for="organizationName">Skill</label><span style="color: red">*</span>
					<input type="text" value="{{$skill->skill}}" class="form-control" id="taskTitle"  name="skill" >
				</div>
				<div class="col-md-6">
					<label style="color: black" for="jobTitle">Percentage(%)</label> <span style="color: red">*</span>
				  <input type="text" value="{{$skill->percentage}}" class="form-control" id="taskDescription" name="percentage" >
				</div>
			</div>
			@include('layouts.errors')
		 <button type="submit" class="btn btn-success">Update Record</button>
		<a href="/skill"><button type="" class="btn btn-primary">Cancel</button> </a>
    </form>

  </div>
@endsection
