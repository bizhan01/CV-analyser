<section class="colorlib-about" data-section="language">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-12">
            <div class="about-desc">
              <span class="heading-meta">Languages</span>
              <h2 class="colorlib-heading">Languages</h2>
            </div>
            @foreach ($languages as $language)
              <h5>{{$language->language}}: {{$language->level}} </h5>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
