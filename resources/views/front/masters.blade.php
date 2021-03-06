<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<title>Fusion Hr Solutions | Empowering for a better tomorrow. </title>
	<!-- Stylesheets -->
	<link rel="preconnect" href="../../fonts.gstatic.com/index.html">
	<link
		href="../../fonts.googleapis.com/css23784.css?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap"
		rel="stylesheet">

    @include('favicon')
	<!-- reey font -->
	<link rel="stylesheet" href="{{asset('theme/css/reey-font.css')}}">
	<link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/owl.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/flaticon.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/jquery-ui.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/hover.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('theme/css/jarallax.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/swiper.min.css')}}">
	<link href="{{asset('theme/css/custom-animate.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/style.css')}}" rel="stylesheet">
	<!-- rtl css -->
	<link href="{{asset('theme/css/rtl.css')}}" rel="stylesheet">
	<!-- Responsive File -->
	<link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet">

	<!-- variable update -->
	<link rel="stylesheet" href="{{asset('theme/css/variables/index-8.css')}}">

	<!-- Color css -->
	<link rel="stylesheet" id="jssDefault" href="{{asset('theme/css/colors/color-12.css')}}">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{asset('theme/js/respond.js')}}"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">


		<!-- Preloader -->
		<div class="preloader">
			<div class="icon" style="background-image: url('{{asset('theme/images/update-01-10-2021/preloader-8.png')}}');"></div>
		</div>


		<!--Mobile Menu-->
		<div class="side-menu__block">


			<div class="side-menu__block-overlay custom-cursor__overlay">
				<div class="cursor"></div>
				<div class="cursor-follower"></div>
			</div><!-- /.side-menu__block-overlay -->
			<div class="side-menu__block-inner ">
				<div class="side-menu__top justify-content-end">

					<a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{asset('theme/images/icons/close-1-1.png')}}"
							alt=""></a>
				</div><!-- /.side-menu__top -->


				<nav class="mobile-nav__container">
					<!-- content is loading via js -->
				</nav>
				<div class="side-menu__sep"></div><!-- /.side-menu__sep -->
				<div class="side-menu__content">
					<p>fusionhrsolution is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
						other agencies.</p>
					<p><a href="mailto:info@fusionhrsolution.com">info@fusionhrsolution.com</a> <br> <a href="tel:+254111027711">+254 (011)- 102- 7711</a></p>
					<div class="side-menu__social">
						<a href="#"><i class="fab fa-facebook-square"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-pinterest-p"></i></a>
					</div>
				</div><!-- /.side-menu__content -->
			</div><!-- /.side-menu__block-inner -->
		</div><!-- /.side-menu__block -->

		<!--Search Popup-->
		<div class="search-popup">
			<div class="search-popup__overlay custom-cursor__overlay">
				<div class="cursor"></div>
				<div class="cursor-follower"></div>
			</div><!-- /.search-popup__overlay -->
			<div class="search-popup__inner">
				<form action="#" class="search-popup__form">
					<input type="text" name="search" placeholder="Type here to Search....">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div><!-- /.search-popup__inner -->
		</div><!-- /.search-popup -->


		<header class="header-eight">
			<div class="header-eight__topbar">
				<div class="auto-container">
					<ul class="header-eight__topbar__info">
						<li>
							<i class="flaticon-email-2"></i>
							<a href="mailto:info@fusionhrsolution.com">info@fusionhrsolution.com</a>
						</li>
						<li>
							<i class="flaticon-pin-1"></i>
							AmBank House,15th Floor-University Way
						</li>
					</ul><!-- /.header-eight__info -->
					<div class="header-eight__topbar__right">
						<p>Empowering for a better tomorrow.</p>
						<div class="header-eight__topbar__social">
                            <a href="#" class="fab fa-linkedin"></a>
							<a href="#" class="fab fa-twitter"></a>
							<a href="#" class="fab fa-facebook"></a>
							<a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-youtube"></a>
						</div><!-- /.header-eight__social -->
					</div><!-- /.header-eight__right -->
				</div><!-- /.auto-container -->
			</div><!-- /.header-eight__topbar -->


		</header><!-- /.header-eight -->


        @yield('content')


		<div class="footer-eight__copyright">
			<div class="auto-container">
				<a href="{{url('/')}}">
					<img src="{{asset('theme/images/logo/Fusionlogopng.png')}}" width="201" alt="">
				</a>
				<p>?? Copyright {{date('Y')}} by Fusion HR Solutions | All Rights Reserved | Powered By Vartech East Africa Limited</p><!-- /.text-center -->
			</div><!-- /.auto-container -->
		</div><!-- /.footer-eight__copyright -->











	</div>
	<!--End pagewrapper-->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



	<script src="{{asset('theme/js/jquery.js')}}"></script>
	<script src="{{asset('theme/js/popper.min.js')}}"></script>
	<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('theme/js/TweenMax.js')}}"></script>
	<script src="{{asset('theme/js/jquery-ui.js')}}"></script>
	<script src="{{asset('theme/js/jquery.fancybox.js')}}"></script>
	<script src="{{asset('theme/js/owl.js')}}"></script>
	<script src="{{asset('theme/js/mixitup.js')}}"></script>
	<script src="{{asset('theme/js/appear.js')}}"></script>
	<script src="{{asset('theme/js/wow.js')}}"></script>
	<script src="{{asset('theme/js/jQuery.style.switcher.min.js')}}"></script>
	<script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js')}}">
	</script>
	<script src="{{asset('theme/js/jquery.easing.min.js')}}"></script>
	<script src="{{asset('theme/js/jarallax.min.js')}}"></script>
	<script src="{{asset('theme/js/swiper.min.js')}}"></script>
	<script src="{{asset('theme/js/custom-script.js')}}"></script>


</body>


</html>
