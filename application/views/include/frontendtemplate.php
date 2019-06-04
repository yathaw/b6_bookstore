<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>template/frontend/img/book_logo.png" type="image/png">
	<title> World Book </title>
	<base href="<?php echo base_url(); ?>"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="<?php echo base_url('login') ?>">
								Login/Register
							</a>
						</li>
						<li>
							<a href="#">
								My Account
							</a>
						</li>
						<li>
							<a href="contact.html">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h text-primary" href="index.html">
						<img src="<?php echo base_url(); ?>template/frontend/img/book_logo.png" alt="" class="img-fluid" style="width: 50px; height: 50px;">
						World Book
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="">Home</a>
									</li>

									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Authors </a>
										<ul class="dropdown-menu" style="overflow-y: scroll; height: 200px">
										
										<?php 
											foreach ($authors as $author):

											$author_id = $author->authors_id;
											$author_name = $author->authors_name;

										?>

											<li class="nav-item">
												<a class="nav-link" href="<?php echo base_url('author/detail/'.$author_id) ?>">
													<?php echo $author_name; ?>
												</a>
											</li>

										<?php endforeach; ?>
											
										</ul>
									</li>

									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Genre </a>
										<ul class="dropdown-menu" style="overflow-y: scroll; height: 300px">
										
										<?php 
											foreach ($genres as $genre):

											$genre_id = $genre->genres_id;
											$genre_name = $genre->genres_name;

										?>

											<li class="nav-item">
												<a class="nav-link" href="<?php echo base_url('genre/detail/'.$author_id) ?>">
													<?php echo $genre_name; ?>
												</a>
											</li>
											
										<?php endforeach; ?>
										</ul>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="">Library</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="<?php echo base_url('order') ?>" class="icons">
											<i class="lnr lnr lnr-cart"></i>
											<span class="badge badge-pill badge-primary count_cart count_cart"></span>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<?php $this->load->view($innerdata); ?>
	

	<!--================ Subscription Area ================-->
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
								<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
							</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-01.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-02.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-03.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-04.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-05.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-06.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-07.jpg" alt="">
							</li>
							<li>
								<img src="<?php echo base_url(); ?>template/frontend/img/instagram/Image-08.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url(); ?>template/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/stellar.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/isotope/isotope-min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/vendors/counter-up/jquery.waypoints.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>template/frontend/vendors/flipclock/timer.js"></script> -->
	<script src="<?php echo base_url(); ?>template/frontend/vendors/counter-up/jquery.counterup.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/mail-script.js"></script>
	<script src="<?php echo base_url(); ?>template/frontend/js/theme.js"></script>

	<script src="<?php echo base_url(); ?>template/localstorage.js "></script>
</body>

</html>