<section class="colorlib-about" data-section="about">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-12">
            <div class="about-desc">
              <span class="heading-meta">Personal Information </span>
              <h2 class="colorlib-heading">Who Am I?</h2>
            </div>
            @foreach ($user as $PersonlInfo)
             <h5> Full Name: {{$PersonlInfo->fullName}}</h5 >
             <h5> Profession: {{$PersonlInfo->profession}}</h5 >
             <h5> Date of Birth: {{$PersonlInfo->dob}}</h5 >
             <h5> Phone #: {{$PersonlInfo->phone}}</h5 >
             <h5> E-mail: {{$PersonlInfo->email}}</h5 >
             <h5> Address: {{$PersonlInfo->address}}</h5 >
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
