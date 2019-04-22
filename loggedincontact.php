<!DOCTYPE HTML>
<html>
	<head>
	<?php
		require 'head.php';
	?>
	<link rel="stylesheet" href="fonts/linearicons/style.css">
	<title>Hamro Doko - Contact Us
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
							<h1>Contact Us</h1>
							<p><span><a href="index.php">Home</a></span> / <span>Contact</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<h2 class="contact-head">Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span> Province 3, Central Development Region <br> Kathmandu, Nepal</p>
									</div>
									<div class="con-info">
										<p><i class="icon-phone3"></i></span><a href="tel://1234567920"> +977-9843767088</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span><a href="mailto:info@yoursite.com"> srajbhandari63@gmail.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 animate-box">
						<h2 class="contact-head">Get in touch</h2>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Send your queries"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

