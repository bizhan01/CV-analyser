<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
  <div class="text-center">
  @foreach ($user as $PersonlInfo)
        <div class="author-img" style="background-image: url(UploadedImages/{{$PersonlInfo->profileImage }});"></div>
   @endforeach
    <h1 id="colorlib-logo"><a href="/home">{{ Auth::user()->name }} </a></h1>
     @foreach ($user as $PersonlInfo)
     <span class="position" style="color: white">{{$PersonlInfo->profession}}</span>
    @endforeach
  </div>
  <nav id="colorlib-main-menu" role="navigation" class="navbar">
    <div id="navbar" class="collapse">
      <ul>
        <li><a href="#" data-nav-section="about">Personal Information </a></li>
        <li><a href="#" data-nav-section="education">Education</a></li>
        <li><a href="#" data-nav-section="skills">Skills</a></li>
        <li><a href="#" data-nav-section="language">Language</a></li>
        <li><a href="#" data-nav-section="experience">Experience</a></li>
        <li><a href="#" data-nav-section="work">Certificates/Awards</a></li>
        <li><a href="#" data-nav-section="contact">Contact</a></li>
      </ul>
    </div>
  </nav>
</aside>
