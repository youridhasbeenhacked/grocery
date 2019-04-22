<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.php';
	?>
	<title>Admin - Update User</title>
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
			<h3>User Details</h3><br><!-- heading -->
				 <table border="1" bgcolor="white"><!-- table is created -->
          			<thead><!-- table head opened-->
            			<tr"><!-- table rows -->
                    <!-- rows heading -->
           				   <th>Id</th>
              			 <th>Firstname</th>
             				 <th>Surname</th>
                     <th>Gender</th>
                     <th>Date of Birth</th>
              			 <th>Email</th>
                     <th>Username</th>
                     <th>Contact</th>
                     <th>Country</th>
              			 <th>Update Data</th>
            			</tr>
          			</thead><!-- table head closed -->
         			 <tbody><!-- table body opened -->
 						<?php
 							require 'connect.php';/*connect.php page is called here*/
          					if(isset($_GET['removeuser'])){/*if condition when removeadmin named link is pressed*/
             					$removeuser=$_GET['removeuser'];/*assigning*/
              					$perform=$pdo->prepare("DELETE FROM users WHERE id='$removeuser'");/*deleting datas from admins table*/
              					$perform->execute();/*execution*/
              				}
       						   $viewuser=$pdo->prepare("SELECT * FROM users");/*selecting datas from admins table*/
          					 $viewuser->execute();/*execution*/
                     /*displaying datas selected in tabular format for admins table*/
          					 foreach($viewuser as $row){
            				  echo '<tr>';
            					echo '<td>'.$row['id'].'</td>';
            					echo '<td>'.$row['firstname'].'</td>';
            					echo '<td>'.$row['surname'].'</td>';
                      echo '<td>'.$row['gender'].'</td>';
                      echo '<td>'.$row['dateofbirth'].'</td>';
                      echo '<td>'.$row['email'].'</td>';
            					echo '<td>'.$row['username'].'</td>';
            					echo '<td>'.$row['contactnumber'].'</td>';
                      echo '<td>'.$row['country'].'</td>';
            					echo '<td><a href="edituser.php?editiduser='.$row['id'].'">Edit'.'</a>'.'|'.'<a href="updateuser.php?removeuser='.$row['id'].'">Remove'.'</a></td>';
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