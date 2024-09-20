<section class="colorlib-work" data-section="work">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Documents </span>
        <h2 class="colorlib-heading animate-box">My Documents </h2>
      </div>
    </div>
          <main class="main-content">
            <div class="container-fluid photos">
              <div class="row ">
                @foreach($documents as $document)
               <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
                 <span>{{$document->title}}</span>
                 <a href="/UploadedImages/{{$document->documentImage }}"  class="d-block photo-item" data-fancybox="gallery">
                   <img src="/UploadedImages/{{$document->documentImage }}" alt="{{$document->title}}" class="img-fluid">
                   <div class="photo-text-more">
                     <span class="icon icon-search"></span>
                   </div>
                 </a>
               </div>
               @endforeach
             </div>
            </div>
          </main>
  </div>
</section>
