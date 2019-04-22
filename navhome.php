<?php
	if(!isset($_SESSION['sessUserId'])){//if condition when action performed
	header('location:index.php');//header content to load
}
?>
<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-2 text-center">
					<div id="colorlib-logo"><a href="loggedinview.php">HamroDoko</a></div>
				</div>
				<div class="col-md-10 text-right menu-1">
					<ul>
						<li><a href="loggedinview.php">Home</a></li>
						<li class="has-dropdown">
							<a href="#">Products</a>
								<ul class="dropdown">
									<li><a href="#">Vegetables & Fruits</a></li>
									<li><a href="#">Utensils</a></li>
									<li><a href="#">Household Essentials</a></li>
								</ul>
						</li>
						<li><a href="loggedinabout.php">About</a></li>
						<li><a href="loggedincontact.php">Contact</a></li>
						<li class="has-dropdown active">
							<a href="#"><span class="lnr lnr-user"></span>
								<?php echo($_SESSION['sessUserId'])  ?></a>
								<ul class="dropdown">
									<li><a href="#">My Purchases</a></li>
									<li><a href="signout.php">Sign out</a></li>
								</ul>
						</li>
						<li><a href="#"><span class="lnr lnr-cart"></span> My Cart</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>