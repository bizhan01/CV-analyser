@extends('layouts.master')
@section('content')
<br></br>
<br></br>

<head>
  <!-- DataTables -->
  <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<div class="container well">

    <!-- Search Start -->
      <div class="col-md-12" >
        <div class="ftco-search" >
          <div class="row" >
            <div class="col-md-12 nav-link-wrap" >
              <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true" style="border: 1px solid black"> Find a Candidate </a>
                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false" style="border: 1px solid black" >Find a Job</a>
              </div>
            </div>
            <div class="col-md-12 tab-wrap" >
              <div class="tab-content p-4" id="v-pills-tabContent" style="border: 1px solid black">
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                  <form action="/searchCondidate" method="POST" role="search" class="search-job">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><span class="icon-user"></span></div>
                            <input type="text" class="form-control" name="q" placeholder="Type Job Title (Engineer)">
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <div class="">
                          <div class="form-field">
                              <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search" ><span class="icon-search icon mr-2"></span>Find Condidate</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                  <form action="/searchJob" method="POST" role="search" class="search-job">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><span  class="icon-briefcase"></span></div>
                            <input type="text" class="form-control" name="q" placeholder="You Can Search a Job by Job Title, Company Name, Service Sector, Category, Location and Gender">
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <div class="form-group">
                          <div class="form-field">
                            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Find a Job</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Search End -->

   <!-- Show Result -->
    <section class="colorlib-skills" data-section="companies">
      @if(isset($details))
        <center>  <h5>  Available Candidates for Your Query  <span style="color: blue"> {{ $query }} </span> are:</h5> </center> <br></br>
      <div class="colorlib-narrow-content">
            <div class="row" style="margin-top: -60px;margin-bottom: 0px">
              <div class="col-lg-1"></div>
                <div class="col-lg-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                              <th>Full Name</th>
                              <th>Profession</th>
                              <th>Cell Phone</th>
                              <th>Email Address</th>
                              <th>CV</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($details as $user)
                              <tr>
                                <!--A Route to userProfileController  -->
                                  <td><a href="/user/{{$user->id}}">{{$user->fullName}}</a></td>
                                  <td>{{$user->profession}}</td>
                                  <td>{{$user->phone}}</td>
                                  <td>{{$user->email}}</td>
                                  <td><a href="/download/pdfMe/{{$user->user_id}}"><span class="fa fa-download"> PDF</span></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
    <script src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
    </div>
    @endif
    </section>
<!-- End -->


<!-- Show Result -->
 <section class="colorlib-skills" data-section="companies" style="margin-top: -250px">
  @if(isset($detailss))
     <center>  <h5>  Available Candidates for Your Query  <span style="color: blue"> {{ $query }} </span> are:</h5> </center> <br></br>
   <div class="colorlib-narrow-content">
         <div class="row" style="margin-top: -60px;margin-bottom: 0px">
             <div class="col-lg-12">
                 <div class="card-box table-responsive">
                     <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                         <thead>
                           <tr>
                             <th>Job Title</th>
                             <th>Education Level</th>
                             <th>Gender</th>
                             <th>Email</th>
                             <th>Phone Number</th>
                             <th>Dateline</th>
                             <th>Apply</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($detailss as $job)
                           <tr>
                             <td><a href="/job/{{$job->id}}">{{$job->jobTitle}}</a></td>
                             <td>{{$job->education}}</td>
                             <td>{{$job->gender}}</td>
                             <td>{{$job->category}}</td>
                             <td>{{$job->salary}}</td>
                             <td><strong class="text-black">{{$job->dateline}}</strong></td>
                             <td><a href="/job/{{$job->id}}" class="btn  btn-primary btn-sm">Apply Now</a></td>
                           </tr>
                           @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!-- end row -->
     </div> <!-- end container -->

 <!-- end wrapper -->
 <script src="/assets/js/jquery.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         $('#datatable').DataTable();

         //Buttons examples
         var table = $('#datatable-buttons').DataTable({
             lengthChange: false,
             buttons: ['copy', 'excel', 'pdf']
         });

         table.buttons().container()
                 .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
     } );

 </script>
 </div>
 @endif
 </section>
<!-- End -->
@endsection
