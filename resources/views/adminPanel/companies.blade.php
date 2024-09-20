<head>
  <!-- DataTables -->
  <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" /><!-- Custom box css -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
    <section class="colorlib-skills" data-section="companies">
      <div class="colorlib-narrow-content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
            <span class="heading-meta">Companies</span>
            <h2 class="colorlib-heading animate-box">Companies</h2>
          </div>
        </div>
            <div class="row" style="margin-top: -60px;margin-bottom: 0px">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Location</th>
                                <th>Jion Date</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($companies as $company)
                            <tr>
                                <td>{{$company -> company}}</td>
                                <td>{{$company -> category}}</td>
                                <td>{{$company -> email}}</td>
                                <td>{{$company -> phone}}</td>
                                <td>{{$company -> location}}</td>
                                <td>{{$company -> created_at}}</td>
                                <td style="text-align: center"><li style="color: orange" class="fa fa-user-times"></li>&nbsp &nbsp &nbsp<li style="color:red" class="fa fa-trash"></li></td>
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
