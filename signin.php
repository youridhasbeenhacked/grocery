<!DOCTYPE HTML>
<html>
	<head>
	<?php
		require 'head.php';
	?>
	<link rel="stylesheet" href="fonts/linearicons/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<title>Hamro Doko - Terms and Conditions</title>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
			require 'nav.php';
		?>

		<div class="wrapper " style="background-color: white">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">

				<?php
					require 'connect.php'; 
					if(isset($_POST['useradd'])){
						if($_POST['password'] != $_POST['confpass']){ 
							echo '<p>*Password do not match. Please enter same password.</p>';
						}
					else if($_POST['firstname']=="" || $_POST['surname']=="" || $_POST['gender']=="" || $_POST['dateofbirth']=="" || $_POST['email']=="" || $_POST['username']=="" || $_POST['password']=="" || $_POST['contactnumber']=="" || $_POST['country']==""){
					echo '*Please fill all the details';
					}
					else{
						$userstmt=$pdo->prepare("INSERT into users(id, firstname, surname, gender, dateofbirth, email, username, password, contactnumber, country)
						VALUES(:id, :firstname, :surname, :gender, :dateofbirth, :email, :username, :password, :contactnumber, :country)");
					$usercriteria=[
						'id'=>'',
						'firstname'=>$_POST['firstname'],
						'surname'=>$_POST['surname'],
						'gender'=>$_POST['gender'],
						'dateofbirth'=>$_POST['dateofbirth'],
						'email'=>$_POST['email'],
						'username'=>$_POST['username'],
						'password' => password_verify($_POST['password'],PASSWORD_DEFAULT),
						'contactnumber'=>$_POST['contactnumber'],
						'country'=>$_POST['country']
					];
					$userstmt->execute($usercriteria);
					echo '*Registration Successfull';
						}
					}
				?>

				<form action="" method="POST">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Firstname" name="firstname">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Surname" name="surname">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-users"></span>
						<select name="gender" class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-calendar-full"></span>
						<input type="date" class="form-control" placeholder="date of birth" name="dateofbirth">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email Address" name="email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="confpass">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="contactnumber">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-earth"></span>
						<select name="country" placeholder="Country" class="form-control">
							<option value="Nepal">Nepal</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<button type="submit" name="useradd">Register</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/mainsu.js"></script>
		
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

