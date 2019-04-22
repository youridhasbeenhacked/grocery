<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Update Product</title>
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
			<h3>Product Details</h3><!-- heading -->
         <table border="1" bgcolor="white"><!-- table is created -->
                <thead><!-- table head opened-->
                  <!-- rows heading -->
                  <tr>
                     <th>Product Id</th>
                     <th>Category Id</th>
                     <th>Product Name</th>
                     <th>Stock</th>
                     <th>Price</th>
                     <th>Update Data</th>
                  </tr>
                </thead><!-- table head closed -->
               <tbody><!-- table body opened -->
            <?php
              require 'connect.php';/*connect.php page is called here*/
                    if(isset($_GET['removeproduct'])){/*if condition when removearticle named link is pressed*/
                      $removeproduct=$_GET['removeproduct'];/*assigning*/
                        $performprod=$pdo->prepare("DELETE FROM products WHERE id='$removeproduct'");/*deleting datas from articles table according to id selected*/
                        $performprod->execute();/*execution*/
                      }
                     $viewprod=$pdo->prepare("SELECT * FROM products");/*selecting datas from articles table*/
                     $viewprod->execute();/*execution*/
                     /*displaying datas selected in tabular format for articles table*/
                     foreach($viewprod as $row){
                      echo '<tr>';
                      echo '<td>'.$row['productid'].'</td>';
                      echo '<td>'.$row['categoryid'].'</td>';
                      echo '<td>'.$row['productname'].'</td>';
                      echo '<td>'.$row['stock'].'</td>';
                      echo '<td>'.$row['price'].'</td>';
                      echo '<td><a href="editproduct.php?editidproduct='.$row['productid'].'">Edit'.'</a>'.'|'.'<a href="updateproduct.php?removeproduct='.$row['productid'].'">Remove'.'</a></td>';
                      echo '</tr>';
                    }
            ?>
              </tbody><!-- table body closed -->
        </table>
		</div>
	</main>

	<?php
		require 'footer.php';
	?>

</body>
</html>