<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Update Category</title>
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
			<h3>Category Details</h3><!-- heading -->
         <table border="1" bgcolor="white"><!-- table is created -->
                <thead><!-- table head opened-->
                  <tr><!-- table rows -->
                        <!-- rows heading -->
                      <th>Id</th>
                      <th>Category Name</th>
                      <th>Update Data</th>
                  </tr>
                </thead><!-- table head closed -->
          <tbody><!-- table body closed -->
            <?php
                  require 'connect.php';/*connect.php page is called here*/
                  if(isset($_GET['removecat'])){/*if condition when removeadmin named link is pressed*/
                      $removecat=$_GET['removecat'];/*assigning*/
                      $performcat=$pdo->prepare("DELETE FROM categories WHERE categoryid='$removecat'");/*deleting datas from categories table according to id selected*/
                      $performcat->execute();/*execution*/
                    }
                  $viewcat=$pdo->prepare("SELECT * FROM categories");/*selecting datas from categories table*/
                  $viewcat->execute();/*execution*/
                   /*displaying datas selected in tabular format for admins table*/
                  foreach($viewcat as $row){
                      echo '<tr>';
                      echo '<td>'.$row['categoryid'].'</td>';
                      echo '<td>'.$row['categoryname'].'</td>';
                      echo '<td><a href="editcategory.php?editid='.$row['categoryid'].'">Edit'.'</a>'.'|'.'<a href="updatecategory.php?removecat='.$row['categoryid'].'">Delete'.'</a></td>';
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