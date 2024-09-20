<section class="colorlib-about" data-section="users">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-12">
            <div class="about-desc">
              <h2 class="colorlib-heading">users</h2>
            </div>
          </div>
        </div>
        <!-- content starts here -->

                <div class="wrapper" style="margin-top: -170px;margin-bottom: -160px">
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable2" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Profession</th>
                                            <th>Degree</th>
                                            <th>DOB</th>
                                            <th>Email</th>
                                            <th>Jion Date</th>
                                            <th>Operations</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                          @foreach($personlInfo as $user)
                                          <tr>
                                            <td>{{$user->fullName}}</td>
                                            <td>{{$user->profession}}</td>
                                            <td>{{$user->degree}}</td>
                                            <td>{{$user->dob}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td style="text-align: center"><li style="color: orange" class="fa fa-user-times"></li>&nbsp &nbsp &nbsp<li style="color:red" class="fa fa-trash"></li></td>
                                          </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
                <!-- end wrapper -->
                    <script src="/assets/js/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#datatable2').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons2').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf']
                        });

                        table.buttons().container()
                                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    } );

                </script>
        <!-- eeeeeeeeee -->
      </div>
    </div>
  </div>
</section>
