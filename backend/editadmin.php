<!DOCTYPE html>
<html>
<head>
  <?php
    require 'head.php';
  ?>
  <title>Admin - Edit Admin</title>
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
          <h3 class="formaddadmintitle">Edit admin</h3>

          <?php
              require 'connect.php';/*connect.php page is called here*/
              if(isset($_GET['editidadmin'])){/*if condition when editidadmin named link is pressed*/
                $editidadmin=$_GET['editidadmin'];/*assigning*/
                $updateadmin=$pdo->prepare("SELECT * FROM admin WHERE id='$editidadmin'");/*selecting datas from admins table*/
                $updateadmin->execute();/*execution*/
                $updateadmin=$updateadmin->fetch();/*fetching*/
              }

              if(isset($_POST['updadmin'])){/*if condition when updadm named button is pressed*/
                $infoadmin=$pdo->prepare("UPDATE admin SET firstname=:firstname, surname=:surname, gender=:gender, dateofbirth=:dateofbirth, email= :email, username= :username, password= :password, contactnumber=:contactnumber, country=:country WHERE id=:id");/*updates data in the admins table*/
                /*assigning*/
                $conditionadmin=[
                  'firstname'=>$_POST['updfirstname'],
                  'surname'=>$_POST['updsurname'],
                  'gender'=>$_POST['updgender'],
                  'dateofbirth'=>$_POST['upddateofbirth'],
                  'email'=>$_POST['updemail'],
                  'username'=>$_POST['updusername'],
                  'password' => password_verify($_POST['updpassword'],PASSWORD_DEFAULT),
                  'contactnumber'=>$_POST['updcontactnumber'],
                  'country'=>$_POST['updcountry'],
                  'id'=>$editidadmin
                ];

                $infoadmin->execute($conditionadmin);/*execution*/
                if($infoadmin==true){/*if condtion*/
                    echo 'Updated Successfully';
                }
                else{
                  echo 'update unsuccessful';
                }
              }

              if(isset($_POST['viewupdadm'])){/*if condition when viewupdadm named button is pressed*/
                header('location:updateadmin.php');//redirects to updateadmin.php page
              }
            ?>

          <form method="POST" action="">
            <label>Firstname</label><br>
            <input type="text" name="updfirstname" placeholder="Enter firstname" required="" /><br>
            <label>Surname</label><br> 
            <input type="text" name="updsurname" placeholder="Enter surname" required="" /><br>
            <label>Gender</label><br>
            <select name="updgender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <label> Date of Birth</label><br>
            <input type="Date" name="upddateofbirth"><br>
            <label>Email</label><br>
            <input type="text" name="updemail" placeholder="Enter email address" required="" /><br>
            <label>Username</label><br> 
            <input type="text" name="updusername" placeholder="Enter username" required="" /><br>
            <label>Password</label><br> 
            <input type="password" name="updpassword" placeholder="Enter password" required="" /><br>
            <label>Confirm Password</label><br> 
            <input type="password" name="confpassword" placeholder="Re-enter password" required="" /><br>
            <label>Contact Number</label><br> 
            <input type="Number" name="updcontactnumber" placeholder="Enter contact number" required="" /><br>
            <label>Country</label><br>
            <select name="updcountry">
              <option value="Nepal">Nepal</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <input class="btns" type="submit" name="updadmin" value="Update Details" title="Update admin" />
            <input class="btns" type="submit" name="viewupdadm" value="View Admin" title="View admin" />
          </form>
      </div>
    </div>
  </main>

  <?php
    require 'footer.php';
  ?>

</body>
</html>