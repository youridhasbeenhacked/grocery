<!DOCTYPE html>
<html>
<head>
  <?php
    require 'head.php';
  ?>
  <title>Admin - Edit User</title>
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
          <h3 class="formaddadmintitle">Edit user</h3>

          <?php
              require 'connect.php';/*connect.php page is called here*/
              if(isset($_GET['editiduser'])){/*if condition when editidadmin named link is pressed*/
                $editiduser=$_GET['editiduser'];/*assigning*/
                $updateuser=$pdo->prepare("SELECT * FROM users WHERE id='$editiduser'");/*selecting datas from admins table*/
                $updateuser->execute();/*execution*/
                $updateuser=$updateuser->fetch();/*fetching*/
              }

              if(isset($_POST['upduser'])){/*if condition when updadm named button is pressed*/
                $infouser=$pdo->prepare("UPDATE users SET firstname=:firstname, surname=:surname, gender=:gender, dateofbirth=:dateofbirth, email= :email, username= :username, password= :password, contactnumber=:contactnumber, country=:country WHERE id=:id");/*updates data in the admins table*/
                /*assigning*/
                $conditionuser=[
                  'firstname'=>$_POST['updfirstname'],
                  'surname'=>$_POST['updsurname'],
                  'gender'=>$_POST['updgender'],
                  'dateofbirth'=>$_POST['upddateofbirth'],
                  'email'=>$_POST['updemail'],
                  'username'=>$_POST['updusername'],
                  'password' => password_verify($_POST['updpassword'],PASSWORD_DEFAULT),
                  'contactnumber'=>$_POST['updcontactnumber'],
                  'country'=>$_POST['updcountry'],
                  'id'=>$editiduser
                ];

                $infouser->execute($conditionuser);/*execution*/
                if($infouser==true){/*if condtion*/
                    echo 'Updated Successfully';
                }
                else{
                  echo 'update unsuccessful';
                }
              }

              if(isset($_POST['viewupduser'])){/*if condition when viewupdadm named button is pressed*/
                header('location:updateuser.php');//redirects to updateadmin.php page
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
            <input type="submit" class="btns" name="upduser" value="Update Details" title="Update user" />
            <input type="submit" class="btns" name="viewupduser" value="View Users" title="View users" />
          </form>
      </div>
    </div>
  </main>

  <?php
    require 'footer.php';
  ?>

</body>
</html>