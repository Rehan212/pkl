<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food Blog - Web Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="assets/frontend/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				{{-- <div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div> --}}
				<div class="user-panel">

					<a href="/admin/artikel">Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="assets/frontend/img/logo2.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="/about">Features</a></li>
					<li><a href="/recipes">Receipies</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="page-top-section set-bg" data-setbg="assets/frontend/img/page-top-bg.jpg">
		<div class="container">
			<h2>About us</h2>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Search section -->
	<div class="search-form-section">
		<div class="sf-warp">
			<div class="container">
				<form class="big-search-form">
					<select>
						<option>All Recipes Categories</option>
						<option>Pizza</option>
						<option>Salads</option>
						<option>Desserts</option>
						<option>Side Dishes</option>
					</select>
					<select>
						<option>All Ingredients</option>
						<option>Breakfast</option>
						<option>Lunch</option>
						<option>Dinner</option>
					</select>
					<input type="text" placeholder="Search Receipies">
					<button class="bsf-btn">Search</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Search section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 about-text">
					<h2>About our great team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni.</p>
					<div class="site-btn">Read more</div>
				</div>
				<div class="col-lg-6">
					<img src="assets/frontend/img/about.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Facts section -->
	<section class="facts-section">
		<div class="facts-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="assets/frontend/img/icon/1.png" alt="">
						</div>
						<h2>1287</h2>
						<p>Amazing receipies</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="assets/frontend/img/icon/2.png" alt="">
						</div>
						<h2>25</h2>
						<p>Wine pairings</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="assets/frontend/img/icon/3.png" alt="">
						</div>
						<h2>471</h2>
						<p>Meat receipies</p>
					</div>
					<div class="col-lg-3 col-sm-6 fact-item">
						<div class="fact-icon">
							<img src="assets/frontend/img/icon/4.png" alt="">
						</div>
						<h2>326</h2>
						<p>Desert receipies</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Facts section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 nl-text">
					<h2>Subscribe to our newsletter</h2>
					<form class="newsletter-form">
						<input type="text" placeholder="Your E-mail">
						<button class="site-btn">Subscribe</button>
					</form>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. </p>
				</div>
				<div class="col-lg-6">
					<img class="nl-sp-img" src="assets/frontend/img/newslatter.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="assets/frontend/img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="assets/frontend/img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="assets/frontend/img/logo2.png" alt="">
					</div>
					{{-- <div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div> --}}
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="{{ url('/') }}">Home</a></li>
					    <li><a href="/about">Features</a></li>
					    <li><a href="/recipes">Receipies</a></li>
					    <li><a href="/contact">Contact</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/main.js')}}"></script>
</body>
</html>
