@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('job', [$job->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="jobTitle" style="color:black">Job Title</label> <span style="color: red">*</span>
             <input type="text" id="jobTitle" name="jobTitle"  value="{{$job->jobTitle}}" class="form-control"  placeholder="Job Title">
           </div>
           <div class="col-md-6">
             <label  for="education" style="color:black">Education Level</label></label> <span style="color: red">*</span>
             <select name="education" id="education" value="{{$job->jobTitle}}" class="form-control">
               <option value="{{$job->education}}">{{$job->education}}</option>
               <option value="Diploma">Diploma </option>
               <option value="Bachelor">Bachelor </option>
               <option value="Master">Master </option>
               <option value="PhD">PhD</option>
               <option value="Other">Other</option>
             </select>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6">
             <label  for="category" style="color:black">Cender</label> </label> <span style="color: red">*</span>
             <select name="gender" id="" class="form-control">
               <option value="{{$job->gender}}">{{$job->gender}}</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Any">Any</option>
             </select>
           </div>

           <div class="col-md-6">
             <label  for="category" style="color:black">Category</label> </label> <span style="color: red">*</span>
             <select name="category" id="" class="form-control">
               <option value="{{$job->category}}">{{$job->category}}</option>
               <option value="Full Time">Full Time</option>
               <option value="Part Time">Part Time</option>
               <option value="Freelance">Freelance</option>
               <option value="Internship">Internship</option>
               <option value="Temporary">Temporary</option>
             </select>
           </div>
         </div>

        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="salary" style="color:black">Experience</label>
            <input type="number" id="salary" value="{{$job->experience}}" name="experience" class="form-control" placeholder="10,000 AFN">
          </div>
          <div class="col-md-6">
            <label  for="dateline" style="color:black">vacancy</label> <span style="color: red">*</span>
            <input type="number" id="dateline" value="{{$job->vacancy}}" name="vacancy" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="salary" style="color:black">Salary</label>
            <input type="number" id="salary" value="{{$job->salary}}" name="salary" class="form-control" placeholder="10,000 AFN">
          </div>
          <div class="col-md-6">
            <label  for="dateline" style="color:black">Dateline</label> <span style="color: red">*</span>
            <input type="date" id="dateline" value="{{$job->dateline}}" name="dateline" class="form-control">
          </div>
        </div>

			@include('layouts.errors')
		 <button type="submit" class="btn btn-success">Update Record</button>
         	<a href="reference"><button type="" class="btn btn-primary">Cancel</button> </a>
    </form>
  </div>
@endsection
