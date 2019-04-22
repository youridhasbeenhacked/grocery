<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Add User</title>
</head>
<body bgcolor="#f1f1f1">

	<?php
		require 'adminheader.php';		
	?>

	<main>
		<?php
			require 'sidebar.php';
		?>
		<div class="displaytab">
			<div class="adminaddform">
					<h3 class="formaddadmintitle">Register new user</h3>

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


					<form method="POST" action="">
						<label>Firstname</label><br>
						<input type="text" name="firstname" placeholder="Enter firstname" required="" /><br>
						<label>Surname</label><br> 
						<input type="text" name="surname" placeholder="Enter surname" required="" /><br>
						<label>Gender</label><br>
						<select name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
						<br>
						<label> Date of Birth</label><br>
						<input type="Date" name="dateofbirth"><br>
						<label>Email</label><br>
						<input type="text" name="email" placeholder="Enter email address" required="" /><br>
						<label>Username</label><br> 
						<input type="text" name="username" placeholder="Enter username" required="" /><br>
						<label>Password</label><br> 
						<input type="password" name="password" placeholder="Enter password" required="" /><br>
						<label>Confirm Password</label><br> 
						<input type="password" name="confpass" placeholder="Re-enter password" require/><br>
						<label>Contact Number</label><br> 
						<input type="Number" name="contactnumber" placeholder="Enter contact number" required="" /><br>
						<label>Country</label><br>
						<select name="country">
							<option value="Nepal">Nepal</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="Other">Other</option>
						</select>
						<br>
						<input class="btns" type="submit" name="useradd" value="Register User" title="Add new user" />
						<input class="btns" type="submit" name="viewuser" value="View User" title="View user" />
					</form>
			</div>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>