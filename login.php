<!DOCTYPE HTML>
<html>
	<head>
	<?php
		require 'head.php';
	?>
	
	<title>Hamro Doko - Terms and Conditions</title>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
			require 'navlogin.php';
		?>
		<div class="wrapper fadeInDown">
		  <div id="formContent">
		    <!-- Tabs Titles -->

		    <!-- Icon -->
		 <h3>User Login</h3>

		 	<?php
			/*session_start();*/
			require 'connect.php';

			if(isset($_POST['login']))
			{
				$stmt = $pdo->prepare("SELECT * FROM users WHERE 
				username = :username AND 
				password = :password");	

				$criteria=[
					'username' => $_POST['username'],
					'password' => password_verify($_POST['password'],PASSWORD_DEFAULT)
				];
				$stmt->execute($criteria);
				if($stmt->rowCount() > 0){
					$user = $stmt->fetch();
					$_SESSION['sessUserId'] = $user['username'];
					header('location:loggedinview.php');
				}
				else{
					echo "<h4>Login failed. Please try again.</h4>";
				}
			}

		?>

		    <!-- Login Form -->
		    <form method="POST" action="">
		      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
		      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
		      <input type="submit" value="Log In" name="login">
		    </form>

		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="#">Forgot Password?</a>
		    </div>

		  </div>
		</div>
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

