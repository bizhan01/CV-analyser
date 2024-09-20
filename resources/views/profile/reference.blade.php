<section class="colorlib-about" data-section="contact">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-12">
            <div class="about-desc">
              <span class="heading-meta">Get in Touch</span>
              <h2 class="colorlib-heading">Reference</h2>
            </div>
            @foreach($references as $reference)
            <h5>Full Name: {{$reference-> fullName}}</h5>
            <h5>Relationship: {{$reference-> relationship}}</h5>
            <h5>Company: {{$reference-> company}}</h5>
            <h5>Position: {{$reference-> position}}</h5>
            <h5>E-mail: {{$reference-> email}}</h5>
            <h5>Phone #: {{$reference-> phone}}</h5>
            @endforeach
          </div>
           <a  href="{{url('/download/pdf')}}" class="btn btn-success form-control">Download CV <i class="fa fa-download" ></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
