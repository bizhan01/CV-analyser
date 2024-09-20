@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('personlInfo', [$personlInfo->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}

       <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="Full Name" style="color:black">Full Name</label>
             <input type="text" name="fullName" value="{{$personlInfo->fullName}}"  class="form-control">
           </div>
           <div class="col-md-6">
             <label  for="Relationship" style="color:black">Profession</label>
              <input type="text" name="profession" value="{{$personlInfo->profession}}"  class="form-control">
           </div>
         </div>

         <div class="row form-group">
             <div class="col-md-6 mb-3 mb-md-0">
               <label  for="Full Name" style="color:black">Date of Birth</label>
               <input type="date" name="dob" value="{{$personlInfo->dob}}"  class="form-control">
             </div>
             <div class="col-md-6">
               <label  for="Relationship" style="color:black">Phone Number</label>
               <input type="text" name="phone" value="{{$personlInfo->phone}}"  class="form-control" >
             </div>
           </div>

           <div class="row form-group">
               <div class="col-md-6 mb-3 mb-md-0">
                 <label  for="Full Name" style="color:black">E-mail Address</label>
                  <input type="email" name="email" value="{{$personlInfo->email}}"  class="form-control">
               </div>
               <div class="col-md-6">
                 <label  for="Relationship" style="color:black">Address</label>
                 <input type="text" name="address" value="{{$personlInfo->address}}"  class="form-control" >
               </div>
             </div>

             <div class="row form-group">
                 <div class="col-md-6">
                   <br>
                   <button type="submit" class="btn btn-success">Update Record</button>
              		<a href="/skills"><button type="" class="btn btn-primary">Cancel</button> </a>
                 </div>
                 <div class="col-md-6 mb-3 mb-md-0">

                    <input type="hidden" name="profileImage" value=" {{$personlInfo->profileImage}}">
                 </div>
             </div>

      			@include('layouts.errors')
        </form>
  </div>
@endsection
