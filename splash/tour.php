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
					<div id="gtco-logo"><a href="index.html">M-Agriculture <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li ><a href="features.php">About us</a></li>
						<li class="active"><a href="tour.php">Projects</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
								<li><a href="#">Market</a></li>
								<li><a href="#">SACCO</a></li>
							</ul>
						</li>
						<li><a href="pricing.php">Pricing</a></li>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/Mixed.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Explore The</span>
							<h1>Posibility of Our Products</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 text-left gtco-heading">
					<h2>The future of Agriculture</h2>
					<p>  A greater productivity in agriculture is critical in reducing poverty and boosting farmers’ income and this mobile technology has also been developed for livestock and fisheries. As prices decline and mobile technology becomes more accessible in Africa, smartphones and tablets could provide more sophisticated app-based information for farming in the future. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Ready Market</h3>
							<p>Peer to peer trading.Samll scall farmers trade amongst themselves</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Agricultural news</h3>
							<p>The site also provides latest agricultural news that would benefit the farmers</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>quality control</h3>
							<p>There are mentors that will provide neccesary knowledge for handling different matters.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>extension services:</h3>
							<p>Joining saccos being one of the biggest benefits to farmers</p>
						</div>
					</div>

				</div>
				<div class="col-md-7 macbook-wrap animate-box" data-animate-effect="fadeInRight">
					<img src="images/Watermelon.jpg" alt="Greens" style="length="300px" width="450px" align="right" ">
				</div>
			</div>
		</div>
	</div>

	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-md-8 text-left gtco-heading">
					<h2>These are the benefits of getting invloved</h2>
					<p> The categories listed below serve a role in the mAgri industry by providing a common framework and a standardized naming system</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<img src="images/Oran.jpg" class="img-responsive" alt="Pina">
				</div>
				<div class="col-md-6 mt-sm">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-layers-alt"></i>
						</span>
						<div class="feature-copy">
							<h3>Plan Ahead</h3>
						<p>Know when to plant using our price trends and  your anaysis will be given.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-key"></i>
						</span>
						<div class="feature-copy">
							<h3>Peer to peer learning</h3>
							<p>Farmers are able to learn from each other during conferencing and meetimgs symposiums </p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Weather information</h3>
							<p>Predictions of climate change and even daily weather reports
							</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-heart"></i>
						</span>
						<div class="feature-copy">
							<h3>Download Files</h3>
							<p>The site enables people to download monthly sceduled events.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-infinite"></i>
						</span>
						<div class="feature-copy">
							<h3>Trading facilities</h3>
							<p>The site also conncects buyyers to sellers making trade much more swift.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-credit-card"></i>
						</span>
						<div class="feature-copy">
							<h3>Joining saccos</h3>
							<p>Saccos are also available to be joined and the members recieve other major benefits</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Involvement in the community</h2>
					<p>Allows farmers to identify pests, insects and diseases early enough to guarantee crop production and protection. The app has been used widely by livestock, horticultural, nut, fruit, vegetable and crop farmers to protect their investment and accomplish higher returns. Constantly updated database offers links to a problem, including a detailed description of the issue and a photo. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Sunflower.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Sunflower.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sunflower</h2>
							<p></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Mixed.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Mixed.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Fruits</h2>
							<p>Produce form the sagana irrigation project</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Seed.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Seed.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Our Beautiful Nursery</h2>
							<p>We also have a seedling producing farm.</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Kale.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Kale.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Kale</h2>
							<p>Kale production project</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Cherry.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Cherry.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Cherry Tommato</h2>
							<p>Cherry tommatoes is one of our biggest investments.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Cocktail.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Cocktail.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h>Harvest</h2>
							<p>Beautiful variety of produced fruits and vagetables</p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new Program</p>
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

