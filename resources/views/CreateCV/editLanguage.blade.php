@extends('layouts.master')
@section('content')
  <div class="" style="padding: 100px">
		<h1>Edit Record</h1>
    <hr>
     <form action="{{url('tasks', [$task->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
			<div class="row form-group">
				<div class="col-md-6 mb-3 mb-md-0">
					<label style="color: black" for="organizationName">Language</label><span style="color: red">*</span>
					<input type="text" value="{{$task->language}}" class="form-control" id="taskTitle"  name="language" >
				</div>
				<div class="col-md-6">
					<label style="color: black" for="jobTitle">Level</label> <span style="color: red">*</span>
				  <!-- <input type="text" value="{{$task->level}}" class="form-control" id="taskDescription" name="level" > -->
          <select name="level" id="" class="form-control">
            <option value="N/A">Select the level</option>
            <option value="Native">Native</option>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Poor">Poor</option>
          </select>
				</div>
			</div>
			@include('layouts.errors')
		 <button type="submit" class="btn btn-success">Update Record</button>
		<a href="/skills"><button type="" class="btn btn-primary">Cancel</button> </a>
    </form>

  </div>
@endsection
