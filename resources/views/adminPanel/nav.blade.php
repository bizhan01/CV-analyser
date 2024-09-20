<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
  <div class="text-center">
  @foreach ($admin as $PersonlInfo)
        <div class="author-img" style="background-image: url(UploadedImages/{{$PersonlInfo->profileImage }});"></div>

   @endforeach
    <h1 id="colorlib-logo"><a href="/create">{{ Auth::user()->name }} </a></h1>
     @foreach ($admin as $PersonlInfo)
     <span class="position" style="color: white">{{$PersonlInfo->profession}}</span>
    @endforeach
  </div>
  <nav id="colorlib-main-menu" role="navigation" class="navbar">
    <div id="navbar" class="collapse">
      <ul>
        <li class="active"><a href="#" data-nav-section="dashborad">Dashborad</a></li>
        <li><a href="#" data-nav-section="messages">Messages</a></li>
        <li><a href="#" data-nav-section="users">Users</a></li>
        <li><a href="#" data-nav-section="companies">Companies</a></li>

      </ul>
    </div>
  </nav>
</aside>
