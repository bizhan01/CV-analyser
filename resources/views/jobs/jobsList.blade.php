<head>
  <!-- DataTables -->
  <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<section class="colorlib-skills" data-section="companies">
 <center> <h2 class="section-title mb-2">{{$jobs_count}} Jobs Listed</h2> </center></br></br>
  <div class="colorlib-narrow-content">
        <div class="row" style="margin-top: -60px;margin-bottom: 0px">
          <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                          <th>Logos</th>
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
                          @foreach ($test as $job)
                         <tr>
                           <!-- <td><a href="/companies/{{$job->id}}">{{$job->company}}</a></td> -->
                           <td align="center"><img src="UploadedImages/{{$job->profileImage}}" alt="" height="40px" /></td>
                           <td><a href="/job/{{$job->id}}">{{$job->jobTitle}}</a></td>
                           <td>{{$job->education}}</td>
                           <td>{{$job->gender}}</td>
                           <td>{{$job->email}}</td>
                           <td>{{$job->phone}}</td>
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
