@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('education', [$education->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
       {{ csrf_field() }}
           <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label  for="Field of Study" style="color:black">Select Degree </label>
                <div class="slidecontainer">
                  <select name="degree" id="" class="form-control">
                    <option value="N/A">Select Degree</option>
                    <option value="PhD">PhD</option>
                    <option value="Master">Master</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Diploma">Diploma</option>
                    <option value="High School Secondary Education">High School Secondary Education</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <label  for="Field of Study" style="color:black">Field of Study </label>
                <input type="text"  name="fieldOfStudy" value="{{$education->fieldOfStudy}}" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label  for="University Name" style="color:black">School Name</label>
                <input type="text"  name="school" value="{{$education->school}}" class="form-control" >
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <label  for="City" style="color:black">City </label>
                <input type="text"  name="city" value="{{$education->city}}" class="form-control" >
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label  for="Country" style="color:black">Country</label>
                <input type="text"  name="country" value="{{$education->country}}" class="form-control" >
              </div>
              <div class="col-md-6">
                <label  for="End Date" style="color:black">End Date</label>
                <input type="text"  name="end" value="{{$education->end}}" class="form-control" >
              </div>
            </div>
            <div class="col-md-6">
              <br>
              <button type="submit" class="btn btn-success">Update Record</button>
             <a href="/skills"><button type="" class="btn btn-primary">Cancel</button> </a>
            </div>
      	@include('layouts.errors')
      </form>
  </div>
@endsection
