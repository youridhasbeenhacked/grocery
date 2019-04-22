<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Home</title>
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
			<p style="padding: 2%; font-size: 18px; font-family: 'Bitter', serif; text-align: justify; background-color: white; margin-top: 5%; margin-left: 2%; margin-right: 2%;color: black;">Welcome to the admin panel. You can now make appropriate changes in the system. The changes mades are made visible in the frontend. Do not use this panel if you are not the authorized person for this. Any miscondict, misuse will be taken into strict or even legal action.</p>
			<p style="padding: 2%; font-size: 18px; font-family: 'Bitter', serif; text-align: justify; background-color: white; margin-top: 5%; margin-left: 2%; margin-right: 2%;color: black;">Select task from the sidebar in the left.</p>
			<div class="partners">
				<h3>Our Partners</h3>
				<div class="logosp">
					<img src="../images/bhatbhateni.jpg">
					<img src="../images/bigmart.jpg">
					<img src="../images/khanepani.jpg">
					<img src="../images/esewa.jpg">
				</div>
			</div>

		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>