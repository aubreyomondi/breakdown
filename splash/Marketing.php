<?php
require_once 'connection.php';
require_once 'ensureLogin.php';
?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=ed\ge">
	<title>M-agriculture</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ayan.Aubrey" />


  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
	<body>

		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation" style="color:#b3b6b7;">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo" ><a href="index.html"style="color:Black;">M-agriculture <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
					<li><a href="Features.php" style="color:Black;">AboutUs</a></li>
			
					<li><a href="tour.php" style="color:Black;">Projects</a></li>
					<li class="has-dropdown">
							<a href="#"style="color:Black">Services</a>
							<ul class="dropdown">
								
								<li><a href="Marketing.php">Market</a></li>
								<li><a href="JoinSacco.php">Join Sacco</a></li>
							</ul>
						</li>
					<li><a href="pricing.php"style="color:Black;">Pricing</a></li>
					<li><a href="contact.php"style="color:Black;">Contact</a></li>
						<li class="btn-cta" class="has-dropdown">
						    <a href="userprofile.php"><span><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span></a>
							<ul class="dropdown">
								<li><a href="logout.php">Logout</a></li>
							</ul>						    
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	<div class="row" style="padding-top:80px">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Pineapple.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Pineapple.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Pinneapple </h2>
							<p> 100ksh/1kg<br>079347880<br> Nairobi kenya </p>

						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Strawberry.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Strawberry.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Strawberry farming</h2>
							<p> 800ksh/1kg<br>07462780<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Avo.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Avo.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Avocado </h2>
							<p> 80ksh/1kg<br>079964370<br> Narok,kenya </p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Brocoli.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Brocoli.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Brocoli</h2>
							<p> 100ksh/1kg<br>079347880<br> Muranga,kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Coconut.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Coconut.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Coconut</h2>
							<p> 75ksh/1kg<br>074278614<br> Mombasa,
							kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">

					<a href="images/Orenge.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Orange.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Oranges</h2>
							<p> 120ksh/1kg<br>079347880<br> Nairobi,kenya </p>
						</div>
					</a>
				</div>


	<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Citrus.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Citrus.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Lemon </h2>
							<p> 50ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Pearful.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Pearful.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Local Pears</h2>
							<p> 80ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Tomoko.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Tomoko.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Tomokos </h2>
							<p> 500ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Peace.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Peace.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>French beans</h2>
							<p> 35ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Tommatoes.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Tommatoes.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Tommatoes</h2>
							<p> 90ksh/1kg<br>074369240<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">

					<a href="images/Bananas.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Bananas.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bananas </h2>
							<p> 80ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
		<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Bobo.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Bobo.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Capsicum </h2>
							<p> 200ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Grapes.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Grapes.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Grapes</h2>
							<p> 1200ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>
				

				
				<div class="col-lg-4 col-md-4 col-sm-6">

					<a href="images/Sunflower.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Sunflower.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sunflower farming </h2>
							<p> 100ksh/1kg<br>079347880<br> Nairobi kenya </p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	<div id="gtco-products">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>More Products</h2>
					<p>As crops grow, the agents and the agronomist make regular farm inspections to ensure they are being well managed to produce sufficient, high quality yields that meet the M-Farm buyers' standards</p>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel owl-carousel-carousel">
					<div class="item">
						<a href="#"><img src="images/Cowa.jpg" alt="Cowa"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/Fields.jpg" alt="Fields"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/Hero.jpg" alt="Hero"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/Irrigation.jpg" alt="Irrigation"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about m-agriculture</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">M-agriculture<span>.<span></span></h3>
						<p>LDid you know that there are over 7,500 tomato varieties in the world?

	M-Farm will have an expat to answer all your tomato questions. Tune in to #askM-Agriculture from 8am-5pm and get your questions answered.

	Ask your questions by sending an email to expat@mfarm.co.ke or ask your questions here with #askMFarm. If you want to join our whatsapp tomato discussion group, inbox your number.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +254 722 890 894</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@M-agriculture</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; Created by Aubrey and Ayan.</small> 
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
