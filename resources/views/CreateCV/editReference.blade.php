@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('reference', [$reference->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
     <div class="row form-group">
         <div class="col-md-6 mb-3 mb-md-0">
           <label  for="Full Name" style="color:black">Full Name</label>
           <input type="text"  value="{{$reference->fullName}}" name="fullName" class="form-control" >
         </div>
         <div class="col-md-6">
           <label  for="Relationship" style="color:black">Relationship</label>
           <input type="text"  value="{{$reference->relationship}}" name="relationship"  class="form-control" >
         </div>
       </div>

       <div class="row form-group">
         <div class="col-md-6 mb-3 mb-md-0">
           <label  for="Organization/Company" style="color:black">Organization/Company </label>
           <input type="text" value="{{$reference->company}}"  name="company" class="form-control" >
         </div>
         <div class="col-md-6">
           <label  for="Position" style="color:black">Position</label>
           <input type="text" value="{{$reference->position}}" name="position" class="form-control" >
         </div>
       </div>

       <div class="row form-group">
         <div class="col-md-6 mb-3 mb-md-0">
           <label  for="E-mail Address" style="color:black">E-mail Address</label>
           <input type="email" value="{{$reference->email}}"  name="email" class="form-control" >
         </div>
         <div class="col-md-6">
           <label  for="Phone Number" style="color:black">Phone Number</label>
           <input type="text" value="{{$reference->phone}}"  name="phone" class="form-control" >
         </div>
       </div>
			@include('layouts.errors')
		 <button type="submit" class="btn btn-success">Update Record</button>
         	<a href="reference"><button type="" class="btn btn-primary">Cancel</button> </a>
    </form>



  </div>
@endsection
