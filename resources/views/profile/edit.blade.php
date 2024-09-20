@extends('app')

@section('content')

    <div class="templatemo-content-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url("/") }}"><font color="green">Home</font></a></li>
                <li class="active">Employee Form</li>
            </ol>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">Employee Form</div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('myform/myform/') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($user as $use)
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Employee ID</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="employeeID" value="{{ $use->employeeID }}" placeholder="Enter employee ID">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-4 control-label">E_number</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="employeeNo" value="{{ $use->employeeNo}}" placeholder="Enter employee number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="Cname" value="{{ $use->Cname }}" placeholder="Enter Contact Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="dob" value="{{ $use->dob }}" placeholder="Enter date of birth">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Contact Phone</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="phoneNumber" value="{{ $use->phoneNumber }}" placeholder="Enter Mobile Number">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="address" value="{{ $use->address }}" placeholder="Enter Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-warning"><a href="{{ url('myform/update/'.$use->employeeID) }}">
                                            Update</a>
                                        </button>
                                    </div>
                                </div>

                                {{--<a href="{{ url('myform/index') }}"> <input type="button" id="add" name="add" value="View data" class="button"></a>--}}

    @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsectio
