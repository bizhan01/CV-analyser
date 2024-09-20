@extends('layouts.master')
@section('content')
<br></br>
<br></br>
<head>
  <!-- DataTables -->
  <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- <link href="/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" /><!-- Custom box css -->
  <!-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="/assets/css/style.css" rel="stylesheet" type="text/css" /> -->
</head>
<br></br>
    <section class="colorlib-skills" data-section="companies">
      <div class="colorlib-narrow-content">
            <div class="row" style="margin-top: -60px;margin-bottom: 0px">
              <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th>CV</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($application as $application)
                             <tr>
                               <td>{{$application->fullName}}</td>
                               <td>{{$application->email}}</td>
                               <td>{{$application->phone}}</td>
                               <td><a href="/download/pdfCV/{{$application->user_id}}"><span class="fa fa-download"> PDF</span></a></td>
                               <td>Reply</td>
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
</section>
@endsection
