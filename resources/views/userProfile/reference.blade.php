<section class="colorlib-contact" data-section="contact">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Get in Touch</span>
        <h2 class="colorlib-heading">Reference</h2>
      </div>
    </div>

			  <div class="">
      @foreach($references as $reference)
      <h5>Full Name: {{$reference-> fullName}}</h5>
      <h5>Relationship: {{$reference-> relationship}}</h5>
      <h5>Company: {{$reference-> company}}</h5>
      <h5>Position: {{$reference-> position}}</h5>
      <h5>E-mail: {{$reference-> email}}</h5>
      <h5>Phone #: {{$reference-> phone}}</h5>
      @endforeach
    </div>
     <!-- <a  href="{{url('/download/pdfMe/')}}" class="btn btn-success form-control">Download CV <i class="fa fa-download" ></i></a> -->
     <a  href="/download/pdfMe/{{$user->user_id}}" class="btn btn-success form-control">Download CV <i class="fa fa-download" ></i></a>
</section>
