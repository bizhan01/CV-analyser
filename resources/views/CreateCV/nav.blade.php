<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
  <div class="text-center">
    @foreach ($user as $image)
          <div class="author-img" style="background-image: url(UploadedImages/{{$image->profileImage }});"></div>
     @endforeach
    <h1 id="colorlib-logo"><a href="/userProfile">{{ Auth::user()->name }} </a></h1>

    <!-- <span class="position" style="color: white"> Designer </span> -->
  </div>
  <nav id="colorlib-main-menu" role="navigation" class="navbar">
    <!-- <div id="navbar" class="collapse"> -->
      <ul>
        <li><a href="/personlInfo" data-nav-section="about">Personal Information </a></li>
        <li><a href="/education" data-nav-section="education">Education</a>
        <li><a href="/skills" data-nav-section="skills">Skills</a></li>
        <li><a href="/tasks" data-nav-section="language">Language</a></li>
        <li><a href="/experience" data-nav-section="experience">Experience</a></li>
        <li><a href="/documents" data-nav-section="work">Certificates/Awards</a></li>
        <li><a href="/reference" data-nav-section="contact">Reference</a></li>
      </ul>
    <!-- </div> -->

  </nav>
</aside>
