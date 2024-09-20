<section class="colorlib-about" data-section="messages">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-12">
            <div class="about-desc">
              <h2 class="colorlib-heading">Messages</h2>
            </div>
          </div>
        </div>
        <!-- content starts here -->
        <head>
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
            </head>
            <body>
                <div class="row"  style="margin-top: -60px;margin-bottom: -150px">
                    <div class="col-sm-12">
                        <div class="inbox-app-main">
                            <div class="row">

                                <div class="col-md-12">
                                    <main id="main" style="height: 200px">
                                        <div class="overlay"></div>
                                        <header class="header">
                                            <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span
                                                    class="line"></span><span class="line"></span><span
                                                    class="line"></span><span class="line line-angle1"></span><span
                                                    class="line line-angle2"></span></a></h1>
                                            <div class="action-bar pull-left">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a class="icon circle-icon"><i class="mdi mdi-refresh text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="icon circle-icon"><i class="mdi mdi-share text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="icon circle-icon red"><i class="mdi mdi-close text-danger"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="icon circle-icon red"><i class="mdi mdi-flag text-danger"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="search-box pull-left">
                                                <input placeholder="Search..."><span
                                                    class="icon fa fa-search"></span>
                                            </div>

                                            <div class="clearfix"></div>
                                        </header>

                                        <div >
                                            <div >
                                                <ul class="message-list">
                                                  @foreach($messages as $message)
                                                  <li class="unread">
                                                      <div class="mail-col mail-col-1"><span class="dot"></span>
                                                          <div class="checkbox-wrapper-mail">
                                                              <input type="checkbox">
                                                              <label for="" class="toggle"></label>
                                                          </div>
                                                          <p class="title">{{$message->fName}} {{$message->lName}}</p><span
                                                                  class="star-toggle fa fa-star-o"></span>
                                                      </div>
                                                      <div class="mail-col mail-col-2">
                                                          <div class="subject">{{$message->subject}}
                                                               &nbsp;&ndash;&nbsp;
                                                              <span >{{$message->body}}</span>
                                                          </div>
                                                          <div style="float: right">{{$message->created_at->diffForHumans()}}</div>
                                                      </div>
                                                  </li>
                                                  @endforeach
                                                </ul>
                                                <!-- <a href="#" class="load-more-link">Show more messages</a> -->
                                            </div>
                                        </div>

                                    </main>
                                    <div id="message">
                                        <div class="header">
                                            <h1 class="page-title"><a
                                              class="icon circle-icon mdi mdi-close text-muted trigger-message-close"></a>{{$message->lName}}<span
                                              class="grey">{{$message->email}}</span></h1>
                                                <span >{{$message->body}}</span>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- jQuery  -->
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/pages/jquery.inbox.js"></script>
            </body>
         <!-- content End -->
      </div>
    </div>
  </div>
</section>
