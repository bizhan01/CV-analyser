@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('company', [$company->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
       {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6">
                <label  for="University Name" style="color:black">Company Name</label>
                <input type="text"  name="company" value="{{$company->company}}" class="form-control" >
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <label  for="City" style="color:black">Category </label>
                <input type="text"  name="category" value="{{$company->category}}" class="form-control" >
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label  for="Country" style="color:black">Email</label>
                <input type="email"  name="email" value="{{$company->email}}" class="form-control" >
              </div>
              <div class="col-md-6">
                <label  for="End Date" style="color:black">Phone Number</label>
                <input type="text"  name="phone" value="{{$company->phone}}" class="form-control" >
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <label  for="Country" style="color:black">Website</label>
                <input type="text"  name="website" value="{{$company->website}}" class="form-control" >
              </div>
              <div class="col-md-6">
                <label  for="End Date" style="color:black">Location</label>
                <input type="text"  name="location" value="{{$company->location}}" class="form-control" >
              </div>
            </div>

            <div class="col-md-6">
              <br>
              <button type="submit" class="btn btn-success">Update Record</button>
             <a href="/skills"><button type="" class="btn btn-primary">Cancel</button> </a>
           </div><br>
      	@include('layouts.errors')
      </form>
  </div>
@endsection
