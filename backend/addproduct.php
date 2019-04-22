<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Add Product</title>
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
					<h3 class="formaddadmintitle">Add new product</h3>

					<?php
						require 'connect.php';
						if(isset($_POST['prodadd']))
						{
							$prodstmt=$pdo->prepare("INSERT INTO products(productid, categoryid, productname, stock, price) VALUES(:productid, :categoryid, :productname, :stock, :price)");
							
							 $prodcriteria=[
					            'productid'=>'',
					            'categoryid'=>$_POST['categoryid'],
					            'productname'=>$_POST['productname'],
					            'stock'=>$_POST['stock'],
					            'price'=>$_POST['price'],
					          ];
					          $prodstmt->execute($prodcriteria);
					          echo 'Product added successfully';
						}
					?>

					<form method="POST" action="">
						<label>Category</label><br>
						<select  name="categoryid">
				            <?php
					            require 'connect.php';
					            $info=$pdo->prepare("SELECT * FROM categories");
					            $info->execute();
					            foreach ($info as $row) {
					            	echo '<option value="'.$row['categoryid'].'">'.$row['categoryname'].'</option>';
					            }
					          /*  if(isset($_POST['viewarticle']))
					            {
					            	header('location:updatearticle.php');
					            }*/
				            ?>
			         	</select>
						<br>
						<label>Product Name</label><br> 
						<input type="text" name="productname" placeholder="Enter product name" required="" /><br>
						<label>Stock</label><br>
						<select name="stock">
							<option value="in stock">In Stock</option>
							<option value="out of stock">Out of Stock</option>
						</select>
						<br>
						<label>Price (in Rs.)</label><br>
						<input type="text" name="price" placeholder="Enter price of the product" required="" /><br>
						<br>
						<input class="btns" type="submit" name="prodadd" value="Add product" title="Add new product" />
						<input class="btns" type="submit" name="viewprod" value="View products" title="View products" />
					</form>
			</div>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>