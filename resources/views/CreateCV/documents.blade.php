@extends('layouts.master')

@section('content')
<!-- <!DOCTYPE HTML> -->
<!-- <html> -->
	<body>
		<div id="myback"> </div>
	<div id="colorlib-page">

	@include('CreateCV.nav')

		<div id="colorlib-main">
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
							<a href="UploadedImages/{{$document->documentImage }}"  class="d-block photo-item" data-fancybox="gallery">
								<img src="UploadedImages/{{$document->documentImage }}" alt="{{$document->title}}" class="img-fluid">
								<div class="photo-text-more">

									<span class="icon icon-search"></span>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</main>
				<form method="POST" action="/uploadDocument" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="file" name="documentImage" value="" required> <br> <br>
					<input type="text" name="title" value="" class="form-control" placeholder="Write the Document Details Here" > <br>
					<input type="submit" name="upload" value="Upload" class="btn btn-primary">
					@include('layouts.errors')
				</form>
  </div>
</section>
</div>
</div>

</body>
<!-- </html> -->

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
output.innerHTML = this.value;
}
</script>

@endsection
