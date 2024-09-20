@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('experience', [$experience->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
     <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="Field of Study" style="color:black">Job Title</label>
            <input type="text"  name="jobTitle" value="{{$experience->jobTitle}}" class="form-control" >
          </div>
          <div class="col-md-6">
            <label  for="Organization/Company" style="color:black">Organization/Company</label>
            <input type="text"  name="company" value="{{$experience->company}}" class="form-control" >
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="City" style="color:black">City </label>
            <input type="text"  name="city" value="{{$experience->city}}" class="form-control" >
          </div>
          <div class="col-md-6">
            <label  for="Country" style="color:black">Country</label>
            <input type="text"  name="country" value="{{$experience->country}}" class="form-control" >
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="Start Date" style="color:black">Start Date </label>
            <input type="month"  name="start" value="{{$experience->start}}" class="form-control" >
          </div>
          <div class="col-md-6">
            <label  for="End Date" style="color:black">End Date</label>
            <input type="month"  name="end" value="{{$experience->end}}" class="form-control" >
          </div>
        </div>
			@include('layouts.errors')
		 <button type="submit" class="btn btn-success">Update Record</button>
         	<a href="reference"><button type="" class="btn btn-primary">Cancel</button> </a>
    </form>
  </div>
@endsection
