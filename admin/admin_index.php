<?php 
include "admin_header.php";
?>

<div align="center">
   <div class="card" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets\images\Scarlogo.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <form method="POST" action="admin_login.php">
  <div align="center">
    <div class="container">
         <form action = "" method = "post">
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
  </div>
</div>
 

  
     


<?php include "footer.php" ?>

