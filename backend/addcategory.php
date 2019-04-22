<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Add Category</title>
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
					<h3 class="formaddadmintitle">Add new category</h3>

					<?php
						require 'connect.php';
						if(isset($_POST['catadd']))
						{
							$catstmt=$pdo->prepare("INSERT INTO categories(categoryid, categoryname) VALUES(:categoryid, :categoryname)");
							$catcriteria=[
								'categoryid'=>'',
								'categoryname'=>$_POST['categoryname'],
							];
							$catstmt->execute($catcriteria);
							echo "Category added successfully";
						}
					?>

					<form method="POST" action="">
						<!-- <label>Category Id</label><br>
						<input type="text" name="categorynumber" placeholder="Category Id" /><br> -->
						<label>Category Name</label><br> 
						<input type="text" name="categoryname" placeholder="Enter category name" required="" /><br>
						<input class="btns" type="submit" name="catadd" value="Add Category" title="Add new category" />
						<input class="btns" type="submit" name="viewcat" value="View Category" title="View category" />
					</form>
			</div>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>