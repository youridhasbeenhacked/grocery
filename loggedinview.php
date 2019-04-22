<!DOCTYPE HTML>
<html>
	<head>
	<?php
		require 'head.php';
	?>
	<link rel="stylesheet" href="fonts/linearicons/style.css">
	<title>Hamro Doko - Welcome
	<?php echo($_SESSION['sessUserId']); ?>
	</title>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
			require 'navhome.php';
		?>
		
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="intro">
							<h1>Your one stop online grocery shopping</h1>
							<p>Started in 2019, Hamro Doko is an online store for grocery items where you can choose the item of your need and buy it online and get it delivered at your door step. Choose from hundreds of vegetables, fruits and other food items along with basic needs including water supplies and gas cyliinders too.</p>
							<p><a href="contact.php" class="btn btn-primary btn-outline btn-md">Contact Us</a> <a href="about.php" class="btn btn-primary btn-outline btn-md">Learn more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<aside id="colorlib-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="flexslider">
							<ul class="slides">
						   	<li style="background-image: url(images/slide1.jpg);">
						   		<div class="overlay"></div>
						   	</li>
						   	<li style="background-image: url(images/slide2.jpg);">
						   		<div class="overlay"></div>
						   	</li>
						   	<li style="background-image: url(images/slide3.jpg);">
						   		<div class="overlay"></div>
						   	</li>	
						  	</ul>
					  	</div>
					  		<hr>
				  	</div>
			  	</div>
		  	</div>
		</aside>

		<?php
			require 'footerloggedin.php';
		?>
		
	</div>



	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

