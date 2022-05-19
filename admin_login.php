<?php 
include("header.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $admin_username = $_POST["username"]; 
    $admin_password = $_POST["password"];

    $sql="SELECT * FROM admin WHERE username='".$admin_username."' AND password='".$admin_password."' limit 1";

    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1){
      header("Location:admin_index.php");
      exit();
    }
    else {
      echo "Your username and password invalid";
         header("Location:admin_login.php");
      exit();
      }

  }
 ?>

<div class="login container" align="center" >
   <div class="card row">
    <div class="col-md-4">
      <img src="assets\images\Scarlogo.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <form method="POST" action="">
 
    <div class="container">
         <form action ="functions.php" method = "post">
            <label>Username</label><br>
            <input type = "text" name = "username" required /><br><br>
            <label>Password </label><br>
            <input type = "password" name = "password" required/><br><br>
            <button class="Submit">Submit </button>
               </form>
      </div>
   
  
</div>
 </div>
  </div>
</div>
 

  
     


<?php include "footer.php" ?>

