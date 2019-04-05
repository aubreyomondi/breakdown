<?php
require_once 'connection.php';
// Initialize the session
session_start();


// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: splash/index.php");
  exit;
}

?>

<!--Authors: Aubrey and Ayan
-->
<!DOCTYPE HTML>
<html>
<head>
<title>User Locator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!-- pub nub -->
 <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.19.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
<!-- pub nub -->

<!-- font files -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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

<script src="https://www.gstatic.com/firebasejs/5.5.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.6/firebase-database.js"></script>
<script src="js/modernizr.custom.js"></script>
<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<!-- /js files -->

</head>
<body>
<style>
    .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
</style>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.3/mapbox-gl-directions.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.3/mapbox-gl-directions.css' type='text/css' />	
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
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav cl-effect-14">
								<li><a class="scroll" href="#" ><i style="position: relative; top: -0.5em;" class="fa fa-user fa-3x" aria-hidden="true"></i></a></li>
						        <li><span style="color:orange;"><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span></li>
                                <li><span ><b><a class="scroll" style="color:white;" href="logout.php">Logout</a></b></span></li>
							  </ul>
					</div>
			<!-- /.navbar-collapse -->

			</nav>	

				
			</div>
			
		</div>
	</div>
	<!-- Nav tabs -->

<!-- banner section   -->
<!-- map -->
		<div class="map agileits" class="container" id="js-main-slider">
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYXVicmV5am9obnMiLCJhIjoiY2pub2wzMWV4MGQ0eDN3bzE2ZjF1YTFveiJ9.E5V_e11VdPCJVPanDGbw4A';

var map = new mapboxgl.Map({
    container: 'js-main-slider',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [36.8058, -1.3163],
    zoom: 14
});


map.addControl(new MapboxDirections({
    accessToken: mapboxgl.accessToken
}), 'top-left');  

map.addControl(new mapboxgl.FullscreenControl()); 

    
map.on('load', function () {
    // Add a layer showing the places.
    map.addLayer({
        "id": "places",
        "type": "symbol",
        "source": {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "properties": {
                        "description": "<strong>Highrise Breakdown Services</strong><p><a href=\"http://www.truckeroodc.com/www/\" target=\"_blank\">Highrise</a> is available for 24 hours.<br>Call:0711170822</p>",
                        "icon": "car"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [36.8058, -1.3163]
                    }
                }]
            }
        },
        "layout": {
            "icon-image": "{icon}-15",
            "icon-allow-overlap": true
        }
    });


    // When a click event occurs on a feature in the places layer, open a popup at the
    // location of the feature, with description HTML from its properties.
    map.on('click', 'places', function (e) {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(description)
            .addTo(map);
    });

    // Change the cursor to a pointer when the mouse is over the places layer.
    map.on('mouseenter', 'places', function () {
        map.getCanvas().style.cursor = 'pointer';
    });

    // Change it back to a pointer when it leaves.
    map.on('mouseleave', 'places', function () {
        map.getCanvas().style.cursor = '';
    });
map.on('click', function (e) {
    var longitude=document.getElementById('lng').value;
var latitude=document.getElementById('lat').value;

var marker = new mapboxgl.Marker({
    draggable: false
})
    .setLngLat([longitude, latitude])
    .addTo(map);
});
});
</script>
</div>
		<!-- //map -->
<!-- /banner section -->

<!-- top bar -->
<div class="top-bar">
	<div class="container">
        <h1><a class="navbar-brand" href="#">BREAKDOWN SERVICES <span>LOCATOR</span></a></h1>
        <!--start-used to allow for breakdown services locator visibility in mobile-->
        <ul class="top-contacts">
            <li class="top-unhover"><p><span class="" aria-hidden="true"></span></p>
            <li class="top-hover"><p><span class="" aria-hidden="true"></span> <a href="mailto:support@company.com"></a></p>
        </ul>
		<ul class="top-contacts">
            <li class="top-unhover"><p><span class="" aria-hidden="true"></span></p>
            <li class="top-hover"><p><span class="" aria-hidden="true"></span> <a href="mailto:support@company.com"></a></p>
        </ul>
        <ul class="top-contacts">
            <li class="top-unhover"><p><span class="" aria-hidden="true"></span></p>
            <li class="top-hover"><p><span class="" aria-hidden="true"></span> <a href="mailto:support@company.com"></a></p>
        </ul>
        <!--stop-used to allow for breakdown services locator visibility in mobile-->
		<div class="clearfix"></div>
	</div>		
</div>
<!-- newsletter -->
	<div class="newsletter" id="contact">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Accept Request</h3>
				  <p>Hi, <span><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span> 
                  </p>
				  <p id="msg"></p>
                  <p>The map above shows the location of a user who has requested for your service. Details of the user are shown in the form.
                  </p>
                  <!--
					<ul class="top-links two three">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				-->
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form>
				    <p>User's Name </p>
				    <input type="text" name="username" id='username'>
					<p>User's Latitude Location </p>
                    <input type="text" name="lat"  id="lat">
					<p>User's Longitude Location </p>
                    <input type="text" name="lng"  id="lng"> 
				</form>
				<input type="submit" onclick="readDatabase()" name="request" value="GET REQUEST">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

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

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCU9-Y9CxCGdAIkhC6THOVR12gGbUXEs3M",
    authDomain: "breakdown-services.firebaseapp.com",
    databaseURL: "https://breakdown-services.firebaseio.com",
    projectId: "breakdown-services",
    storageBucket: "breakdown-services.appspot.com",
    messagingSenderId: "252925882636"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript">
	function readDatabase(){
		return firebase.database().ref('/user/').once('value').then(function(snapshot) {
  	let username = (snapshot.val() && snapshot.val().username) ;
  	let lng = (snapshot.val() && snapshot.val().lng);
  	let lat = (snapshot.val() && snapshot.val().lat);

	document.getElementById('username').value = username;
	document.getElementById('lng').value = lng;
	document.getElementById('lat').value =lat;
  // ...
});
	}
</script>
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
							readDatabase();
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