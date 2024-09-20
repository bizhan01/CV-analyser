<section class="colorlib-experience" data-section="experience">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Experience</span>
        <h2 class="colorlib-heading animate-box">Work Experience</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
           <div class="timeline-centered">
             @foreach ($experiences as $experience)
             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                <div class="timeline-entry-inner">

                   <div class="timeline-icon color-1 icon-briefcase" >
                      <i class="icon-pen2"></i>
                   </div>

                   <div class="timeline-label">
                      	<h2>{{$experience->jobTitle}} at {{$experience->company}}, {{$experience->city}}-{{$experience->country}}. <span>{{$experience->start}} to {{$experience->end}}</span></h2>

                   </div>
                </div>
             </article>
            @endforeach
          </div>
       </div>
     </div>
  </div>
</section>
