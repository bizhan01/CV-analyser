<section class="colorlib-education" data-section="education">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Education</span>
        <h2 class="colorlib-heading animate-box">Education</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
           <div class="timeline-centered">
             @foreach ($education as $education)
             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                <div class="timeline-entry-inner">
                   <div class="timeline-icon color-1 fa fa-graduation-cap" >
                      <i class="icon-pen2"></i>
                   </div>
                   <div class="timeline-label">
                      <h2>{{$education->degree}} of {{$education->fieldOfStudy}} from {{$education->school}}. <span>({{$education->city}}-{{$education->country}}, {{$education->end}}) </span></h2>
                   </div>
                </div>
             </article>
            @endforeach
          </div>
       </div>
     </div>
</section>
