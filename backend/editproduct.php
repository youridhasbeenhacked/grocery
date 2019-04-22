<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Edit Product</title>
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
					<h3 class="formaddadmintitle">Edit product</h3>

					<?php
		          require 'connect.php';/*connect.php page is called here*/
		          if(isset($_GET['editidproduct'])){/*if condition when editidadmin named link is pressed*/
		            $editidproduct=$_GET['editidproduct'];/*assigning*/
		            $updateproduct=$pdo->prepare("SELECT * FROM products WHERE id='$editidproduct'");/*selecting datas from articles table*/
		            $updateproduct->execute();/*execution*/
		            $updateproduct=$updateproduct->fetch();/*fetching*/
		          }

		          if(isset($_POST['prodedit'])){/*if condition when updadm named button is pressed*/
		          	
		            $infoprod=$pdo->prepare("UPDATE products SET categoryid=:categoryid, productname=:productname, stock=:stock, price=:price WHERE productid=:id");/*updates data in the articles table*/
		            /*assigning*/
		            $conditionproduct=[
		              'categoryid'=>$_POST['updcategoryid'],
		              'productname'=>$_POST['updproductname'],
		              'stock'=>$_POST['updstock'],
		              'price'=>$_POST['updprice'],
		              'id'=>$editidproduct                                       
		            ];
		          
		            $infoprod->execute($conditionproduct);/*execution*/
		            if($infoprod==true){/*if condition*/
		                echo 'Updated Successfully';
		            }
		            else{
		            	echo 'update unsuccessful';
		            }
		          }

							if(isset($_POST['viewupdprod'])){/*if condition when viewupdadm named button is pressed*/
								header('location:updateproduct.php');//redirects to updatearticle.php
							}
         		?>


					<form method="POST" action="">
						<label>Category</label><br>
						<select  name="updcategoryid">
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
						<input type="text" name="updproductname" placeholder="Enter product name" required="" /><br>
						<label>Stock</label><br>
						<select name="updstock">
							<option value="in stock">In Stock</option>
							<option value="out of stock">Out of Stock</option>
						</select>
						<br>
						<label>Price (in Rs.)</label><br>
						<input type="text" name="updprice" placeholder="Enter price of the product" required="" /><br>
						<br>
						<input class="btns" type="submit" name="prodedit" value="Update product" title="Add new product" />
						<input class="btns" type="submit" name="viewupdprod" value="View products" title="View products" />
					</form>

					
			</div>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>