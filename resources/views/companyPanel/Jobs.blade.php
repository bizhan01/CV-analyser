<section class="colorlib-about" data-section="messages">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft" style="margin-bottom: -150px">
          <div class="col-md-12">
            <div class="about-desc">
              <h2 class="colorlib-heading">Jobs</h2>
            </div>
          </div>
        </div >
        <div >
          <table class="table col-lg-8" >
           <thead style="background-color: #157efb; color: white">
             <br></br>
             <br>
             <tr >
               <th scope="col">Job Title</th>
               <th scope="col">Education Level</th>
               <th scope="col">Gender</th>
               <th scope="col">Category</th>
               <th scope="col">Dateline</th>
               <th scope="col">Applicant</th>
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
            @foreach ($job as $job)
             <tr>
               <td>{{$job->jobTitle}}</td>
               <td>{{$job->education}}</td>
               <td>{{$job->gender}}</td>
               <td>{{$job->category}}</td>
               <td>{{$job->dateline}}</td>
               <td><a href="/applications/{{$job->id}}">
                 <span>{{$application_number}}</span>
               </a></td>
               <td>
               <div class="btn-group" role="group" aria-label="Basic example">
                   <a href="{{ URL::to('job/' . $job->id . '/edit') }}">
                     <button type="submit" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                        <span>Edit</span>
                    </button>
                   </a>&nbsp;
                   <form action="{{url('job', [$job->id])}}" method="POST">
               <input type="hidden" name="_method" value="DELETE">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure to delete this record?")' >
                   <i class="fa fa-trash"></i>
                   <span>Delete</span>
               </button>
             </form>
               </div>
             </td>
             </tr>
             @endforeach
           </tbody>
         </table>
        </div>
    </div>
  </div>
</div>
</section>
