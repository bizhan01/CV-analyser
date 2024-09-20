<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!-- Gallery  -->
	<link rel="stylesheet" href="/css/galleryStyle.css">

  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="/pro/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/pro/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/pro/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="/pro/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/pro/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/pro/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/pro/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="/pro/css/style.css">

	<!-- Modernizr JS -->
	<script src="/pro/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
    @extends('layouts.master')
  @section('content')
  <body>
  	<div id="myback"> </div>
      	<div id="colorlib-page">
            @include('userProfile.nav')
        	<div id="colorlib-main">
  							@include('userProfile.slideShow')
  							@include('userProfile.personalInfo')
  							@include('userProfile.education')
  					  	@include('userProfile.skills')
  							@include('userProfile.languages')
  							@include('userProfile.workExperience')
  							@include('userProfile.documents')
  							@include('userProfile.reference')
         </div><!-- end:container-wrap -->
   	</div><!-- end:colorlib-page -->
  </body>
  @endsection

	<!-- jQuery -->
	<script src="/pro/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/pro/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/pro/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/pro/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/pro/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/pro/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="/pro/js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="/pro/js/main.js"></script>


	<!--Galary JS files  -->

	<!--Gallery JS file-->
	<script src="/js/jquery.fancybox.min.js"></script>

	</body>
</html>
