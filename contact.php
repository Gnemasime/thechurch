<!-- /*
* Template Name: TheChurch
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Inter&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Holy Rosary Church</title>
</head>
<body >

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?php include ('nav-member.php') ?>
	
	<div class="hero overlay" style="background-image: url('images/landscape-1.jpg'); ">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-5 me-auto text-start pe-lg-5">
					<div class="intro-text">
						<div class="mb-4"> 
							<h1 data-aos="fade-left" class="hero-heading">Get In Touch</h1>
						</div>
						<div class="">
							<p class="mb-5 opacity-5" data-aos="fade-left" data-aos-delay="200">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p data-aos="fade-left" data-aos-delay="300"><a href="#" class="btn btn-primary">Go to sermons</a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-7" data-aos="fade-left">
					<a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="video-bg glightbox">
						<span class="icon"><span class="icon-play"></span></span>
						<img src="images/landscape-1.jpg" alt="Image" class="img-fluid rounded">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-5" id="contact-section">
		<div class="row mb-5">
			<div class="col-lg-6"  data-aos="fade-up" data-aos-delay="0">
				<div class="heading-wrap">
					<h2 class="heading">Get In Touch</h2>
				</div>


			</div>

		</div>
		
		<div class="row">
			<div class="col-lg-6 mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="100">
				<form class="contact-form">
					<div class="row">
						<div class="col-6">
							<div class="mb-3">
								<label class="text-black" for="fname">First name</label>
								<input type="text" class="form-control" id="fname">
							</div>
						</div>
						<div class="col-6">
							<div class="mb-3">
								<label class="text-black" for="lname">Last name</label>
								<input type="text" class="form-control" id="lname">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label class="text-black" for="email">Email address</label>
						<input type="email" class="form-control" id="email">
					</div>

					<div class="mb-3">
						<label class="text-black" for="message">Message</label>
						<textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Send Message</button>
				</form>
			</div>
			<div class="col-lg-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
				<div class="quick-contact-item d-flex align-items-center mb-4">
					<span class="icon-home"></span>
					<address class="text">
						155 Market St #101, Paterson, NJ 07505, United States
					</address>
				</div>
				<div class="quick-contact-item d-flex align-items-center mb-4">
					<span class="icon-phone"></span>
					<address class="text">
						+1 202 2020 200
					</address>
				</div>
				<div class="quick-contact-item d-flex align-items-center mb-4">
					<span class="icon-envelope"></span>
					<address class="text">
						@info@mydomain.com
					</address>
				</div>
			</div>
		</div>
	</div>


	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4263.740639795807!2d-74.17364760599528!3d40.917497609740195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fdcb3088f637%3A0xd6a71bd6813b7c40!2sPaterson%20City%20Hall!5e0!3m2!1sen!2sph!4v1597647087983!5m2!1sen!2sph" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>




	<div class="site-footer bg-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>367 West Street. Next to Spar, Durban 4001</address>
						<ul class="list-unstyled links">
							<li><a href="tel://0658153174">+27(65)-815-3174</a></li>
							<li><a href="tel://0796378901">+27(79)-673-8901</a></li>
							<li><a href="mailto:22106529@dut4life.ac.za">22106529@dut4life.ac.za</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Volunteer</a></li>
							<li><a href="#">Patnership</a></li>
							<li><a href="#">Sermons</a></li>
							<li><a href="#">Ministry</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>

						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Developed with love by The Brainiacs</a> 
				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>




	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/glightbox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>

	
</body>
</html>
