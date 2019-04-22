<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Edit Category</title>
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
					<h3 class="formaddadmintitle">Edit category</h3>

					<?php
		          		require 'connect.php';/*connect.php page is called here*/
		          		if(isset($_GET['editid']))
		          		{/*if condition when editidnamed link is pressed*/
				            $editid=$_GET['editid'];/*assigning*/
				            $update=$pdo->prepare("SELECT * FROM categories WHERE id='$editid'");/*selecting datas from categories table*/
				            $update->execute();/*execution*/
				            $update=$update->fetch();/*fetching*/
				          }

		          if(isset($_POST['edit'])){/*if condition when updadm named button is pressed*/
		            $info=$pdo->prepare("UPDATE categories SET categoryname=:categoryname WHERE categoryid=:categoryid");/*updates data in the admins table*/
		            /*assigning*/
		            $condition=[
		             'categoryname'=>$_POST['updcategoryname'],
		             'categoryid'=>$editid
		            ];

		            $info->execute($condition);/*execution*/
		            if($info){/*if condition*/
		                echo 'Updated Successfully';
		            }
		            else 
		            echo 'update unsuccessful'; 
		          }

							if(isset($_POST['view'])){/*if condition when view named button is pressed*/
								header('location:updatecategory.php');/*redirects updatecategory.php page*/
							}
         ?>

					<form method="POST" action="">
						<!-- <label>Category Id</label><br>
						<input type="text" name="categorynumber" placeholder="Category Id" /><br> -->
						<label>Category Name</label><br> 
						<input type="text" name="updcategoryname" placeholder="Enter category name" required=""/><br>
						<input class="btns" type="submit" name="edit" value="Edit Category" title="Add new category" />
						<input class="btns" type="submit" name="view" value="View Category" title="View category" />
					</form>
			</div>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>