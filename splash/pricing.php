<?php
require_once 'connection.php';
require_once 'ensureLogin.php';
?>

<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>M-agriculture</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="" />

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
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">M-agriculture <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="features.php">About us</a></li>
						<li><a href="tour.php">Projects</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
								<li><a href="Marketing.php">Market</a></li>
								<li><a href="JoinSacco.php">SACCO</a></li>
							</ul>
						</li>
						<li class="active"><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">See Our Pricing</span>
							<h1>Plans for everyone</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Choose The Best Plan For You</h2>
					<p>Join over 1 Million of users. and subscribe to the following membership.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Starter</h2>
						<div class="price"><sup class="currency">Ke</sup>1000<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Silver members</li>
							<li>weekly updates </li>
							<li>Peer to peerMarket place</li>
							
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Regular</h2>
						<div class="price"><sup class="currency">Ke</sup>1500<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Plaltinum membership</li>
							<li>monthly updates</li>
							<li>Email alerts</li>
							<li>Monthly farm check up</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">Popular</div>
						<h2 class="pricing-plan">Plus</h2>
						<div class="price"><sup class="currency">Ke</sup>2000<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
						<li>Gold member</li>
							<li>Unlimitted Services</li>
							<li>Unlimited updates</li>
							<li>Marketing priority</li>
							
						</ul>
						<a href="#" class="btn btn-primary btn-sm">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Frequently Ask Questions</h2>
					<p>Many people have asked lots of questions and this is just one of the main questions asked by users</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul class="fh5co-faq-list">
						<li class="animate-box">
							<h2>What is M-Agriculture?</h2>
							<p>Mobile Agriculture (also shortened to mAgriculture) supports Farmers along the agriculture value chain through the use of mobile technology</p>
						</li>
						<li class="animate-box">
							<h2>What sevices are available?</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</li>
						<li class="animate-box">
							<h2>I have technical problem, who do I email?</h2>
							<p>On the contact page you can type out your message and be rest assured that it will reach us. Our online team is also there to make sure your querries are answered with emmidiate effect</p>
						</li>
						<li class="animate-box">
							<h2>Can I have a username that is already taken?</h2>
							<p>Usernames vary. and someone else might have already taken that username. Email the support team for more suggestions or choose another username. </p>
						</li>
						<li class="animate-box">
							<h2>How do I use M-Agriculture features?</h2>
							<p> The help menu has the user menu for the site.</p>
						</li>
						<li class="animate-box">
							<h2>Is M-agriculture free?</h2>
							<p>M-Agriculture is Free but some features are paid for check out the price page for more information</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
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

M-Farm will have an expat to answer all your tomato questions. Tune in to #askMFarm from 8am-5pm and get your questions answered.

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
							<li><a href="https://twitter.com"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://instagram.com"><i class="icon-instagram"></i></a></li>
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

