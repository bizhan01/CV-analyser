<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
  <div class="text-center">
  @foreach ($company as $PersonlInfo)
        <div class="author-img" style="background-image: url(UploadedImages/{{$PersonlInfo->profileImage}});"></div>
   @endforeach
    <h1 id="colorlib-logo"><a href="/home">{{ Auth::user()->name }} </a></h1>
     @foreach ($company as $PersonlInfo)
     <span class="position" style="color: white">{{$PersonlInfo->category}}</span>
    @endforeach
  </div>
  <nav id="colorlib-main-menu" role="navigation" class="navbar">
    <div id="navbar" class="collapse">

      <ul>
        <li class="active"><a href="#" data-nav-section="profile">Profile</a></li>
        <li class="#"><a href="#" data-nav-section="dashborad">Post A Job</a></li>
        <li><a href="#" data-nav-section="messages">Jobs</a></li>
        <li><a href="#" data-nav-section="users">Blog</a></li>
        <li><a href="#" data-nav-section="">Analyze CVs</a></li>
      </ul>
    </div>
  </nav>
</aside>
