<section class="colorlib-skills" data-section="language">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Languages</span>
        <h2 class="colorlib-heading animate-box">My Languages</h2>
      </div>
    </div>
    @foreach ($languages as $language)
        <h5>{{$language->language}}: {{$language->level}} </h5>
     @endforeach
  </div>
</section>
