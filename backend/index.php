<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin Panel - Login</title>
</head>
<body bgcolor="#f1f1f1">
	
<?php
	require 'adminheader.php';
?>

<div class="formout">
	<div class="formhead"><p>Admin Login<p></div>
	<div class="formmain">

		<?php
			session_start();
			require 'connect.php';

			if(isset($_POST['login']))
			{
				$stmt = $pdo->prepare("SELECT * FROM admin WHERE 
				username = :username AND 
				password = :password");	

				$criteria=[
					'username' => $_POST['username'],
					'password' => password_verify($_POST['password'],PASSWORD_DEFAULT)
				];
				$stmt->execute($criteria);
				if($stmt->rowCount() > 0){
					$user = $stmt->fetch();
					$_SESSION['sessUserId'] = $user['id'];
					header('location:backend.php');
				}
				else{
					echo "<h4>Login failed. Please try again.</h4>";
				}
			}

		?>

		<form method="POST" action="">
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br>
			<a href="#">forgot password?</a><br><br>
			<input type="submit" name="login" value="Log In" class="logbt">
		</form>
	</div>
</div>
<p class="warn">This page is strictly only for the use by authorized people and should not be misued. You must not access the features or use the product to entertain yourself or make changes as per your interest. The person guilty of misuing the system will be taken under serious actions and legal actions can as well be taken against him/her.</p>

</body>
</html>