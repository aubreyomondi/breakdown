<?php
require_once 'connection.php';

// Initialize the session
session_start();
 // If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.html");
  exit;
}
?>
<!--Authors: Aubrey and Ayan
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Break Down Services Locator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />

<!-- pub nub -->
 <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.19.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
<!-- pub nub -->

<!-- font files -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> -->
<!-- /font files -->

<!-- css files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />	
	<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/swipebox.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- /css files -->

<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<!-- /js files -->

</head>
<body>
<div class="main-top" id="home">

<!-- /top bar -->
<div class="header-top">
			<div class="container">
			   <nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">BREAKDOWN SERVICES </a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav cl-effect-14">
								<li><a class="scroll" href="index.php" class="active">Home</a></li>
								<li><a class="scroll" href="about.php">About</a></li>
								<li><a class="scroll" href="breakdown.php">Breakdown</a></li>
								<li><a class="scroll" href="contact.php">Contact</a></li>
						<li class="btn-cta" class="has-dropdown" >
						    <a class="scroll" style="color:orange;" href="userprofile.php"><span><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span></a>
							<ul class="dropdown">
								<li><a style="color:white;" class="scroll" href="logout.php">Logout</a></li>
							</ul>						    
						</li>
							  </ul>
					</div>
			<!-- /.navbar-collapse -->

			</nav>	

				
			</div>
			
		</div>
	</div>
	<!-- Nav tabs -->

<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/pogoImage.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>CAR <span>BREAKDOWN</span> SERVICES LOCATOR</h3>
			
		</div>		
	</div>
	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/pogoImage1.jpg);">
		<div class="pogoSlider-slide-element">
		<h3>WE <span>GIVE</span> BEST SERVICES</h3>
		</div>
	</div>

	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/pogoImage2.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>CAR <span>BREAKDOWN</span> SERVICES LOCATOR</h3>
		</div>
	</div>
	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/pogoImage3.jpg);">
		<div class="pogoSlider-slide-element">
			<h3><span>WE GIVE BEST SERVICES</span></h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<!-- top bar -->
<div class="top-bar">
	<div class="container">
		<ul class="top-links">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>		
</div>


<!-- map -->
<!--
		<div class="map agileits"  id="map-canvas">
   <script>
    window.lat = 1.2921;
    window.lng = 36.8219;

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(updatePosition);
        }
      
        return null;
    };

    function updatePosition(position) {
      if (position) {
        window.lat = position.coords.latitude;
        window.lng = position.coords.longitude;
      }
    }
    
    setInterval(function(){updatePosition(getLocation());}, 10000);
      
    function currentLocation() {
      return {lat:window.lat, lng:window.lng};
    };

    var map;
    var mark;
    var markers;

    var initialize = function() {
      map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:lat,lng:lng},zoom:15});
      mark = new google.maps.Marker({position:{lat:lat, lng:lng}, map:map});

            // Array of markers
      markers = [
        {
          coords:{lat:-1.3099,lng:36.8156},
          content:'<h1>Madaraka</h1>'
        },
        
        {
          coords:{lat:-1.3040,lng:36.8246},
          content:'<h1>Nyayo</h1>'
        },

        {
          coords:{lat:-1.3163,lng:36.8058},
          content:'<h1>Highrise</h1>'
        }
        
      ];
      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        });

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      } 
    };



    window.initialize = initialize;

    var redraw = function(payload) {
      lat = payload.message.lat;
      lng = payload.message.lng;

      map.setCenter({lat:lat, lng:lng, alt:0});
      mark.setPosition({lat:lat, lng:lng, alt:0});
    };

    var pnChannel = "map2-channel";

    var pubnub = new PubNub({
      publishKey:   'pub-c-760c1764-8d16-4430-a167-411bf7a90f4d',
      subscribeKey: 'sub-c-00a23a5a-bfbf-11e8-9c8c-5aa277adf39c'
    });

    pubnub.subscribe({channels: [pnChannel]});
    pubnub.addListener({message:redraw});

    setInterval(function() {
      pubnub.publish({channel:pnChannel, message:currentLocation()});
    }, 5000);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDiAGmGSenmNiIeb8oyqBFRb7zT4oq-K7k&callback=initialize"></script>
		</div>
	-->
		<!-- //map -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<h2><a href="index.html">BREAKDOWN SERVICES <span>LOCATOR</span></a></h2>
					<p>Worry no more. We offer the best breakdown services locator system.</p>
					
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<ul class="agileinfo_footer_grid_list">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Strathmore University, Madaraka, <span>Nairobi City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">aubrey.omondi@strathmore.edu</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 711 170 822</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">ayan.keynan@strathmore.edu</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 799 619 965</li>
					</ul>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileinfo_footer_grid_nav">
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="index.php">Home</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="about.php">About</a></li>	
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="breakdown.php">Breakdown</a></li>		
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="contact.php">Mail Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		
		</div>
	</div>
		<div class="w3agile_footer_copy">
				<p>&copy; 2018 BreakDown Services Locator. All rights reserved | Design by <b><em>Aubrey and Ayan</em></b></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //footer -->
<!-- js files -->
<!-- swipe box js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js files -->
	<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<script src="js/waypoints.min.js"></script> 
					<script src="js/counterup.min.js"></script> 
					<script>
						jQuery(document).ready(function( $ ) {
							$('.counter').counterUp({
								delay: 20,
								time: 1000
							});
						});
					</script>
				<!-- //Starts-Number-Scroller-Animation-JavaScript -->
							<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
   <script src="js/easyResponsiveTabs.js"></script>
   <!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
			<!--/script-->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
			<!-- //swipe box js -->

 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>

<!--end-smooth-scrolling-->
<script src="js/bootstrap.js"></script>
</body>
</html>