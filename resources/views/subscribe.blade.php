<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="text-white">Looking For A Job?</h2>
        <p class="mb-0 text-white lead">
          CV mkr helps you find your dream job, sooner than what you expect.
          </p>
      </div>
      <form method="POST" action="/subsribe">
          {{ csrf_field() }}
          <input type="text" name="name" value="" placeholder="Your full name " class="form-control"><br>
          <input type="email" name="email" value="" placeholder="Your email address " class="form-control"><br>
          <input type="submit" name="submit" value="Subscribe" class="btn btn-success btn-block btn-lg">
          @include('layouts.errors')
      </form>
    </div>
  </div>
</section>
