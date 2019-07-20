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
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
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
					<li><a href="#">Reviews</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="page-top-section set-bg" data-setbg="assets/frontend/img/page-top-bg.jpg">
		<div class="container">
			<h2>Recipe</h2>
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


	<!-- Recipes section -->
	<section class="recipes-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="section-title">
						<h2>Latest recipes</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="recipe-view">
						<i class="fa fa-bars"></i>
						<i class="fa fa-th active"></i>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/1.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/2.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/3.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/4.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/5.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/6.jpg" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/7.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/8.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/9.jpg" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/10.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Traditional Pizza</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/11.jpg" alt="">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>Italian home-made pasta</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="assets/frontend/img/recipes/12.jpg" alt="">
						<div class="recipe-info-warp">
								<div class="recipe-info">
								<h3>Chesse Cake Tart</h3>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-pagination">
				<span>01</span>
				<a href="#">02</a>
				<a href="#">03</a>
			</div>
		</div>
	</section>
	<!-- Recipes section end -->


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
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="{{ url('/') }}">Home</a></li>
					    <li><a href="/about">Features</a></li>
					    <li><a href="/recipes">Receipies</a></li>
					    <li><a href="#">Reviews</a></li>
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
