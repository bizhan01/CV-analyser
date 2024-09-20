<section class="colorlib-skills" data-section="skills">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">My Specialty</span>
        <h2 class="colorlib-heading animate-box">My Skills</h2>
      </div>
    </div>

		   <div class="row">
      @foreach ($skills as $skills)
     <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
       <div class="progress-wrap">
         <h3>{{$skills->skill}} </h3>
         <div class="progress">
           <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
             aria-valuemin="0" aria-valuemax="100" style="width:{{$skills->percentage}}%">
             <span>{{$skills->percentage}}%</span>
             </div>
         </div>
       </div>
     </div>
     @endforeach
  </div>

  </div>
</section>
