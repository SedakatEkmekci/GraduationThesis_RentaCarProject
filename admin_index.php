<?php 
include "admin_header.php";
?>

<div align = "center">
 <form method="POST" action="admin_login.php">
  <div align="center">
    <div class="container">
         <form action = "" method = "post">
            <label>User Name</label><br>
            <input type = "text" name = "username" required /><br><br>
            <label>Password </label><br>
            <input type = "password" name = "password" required/><br><br>
            <button class="Submit">Submit </button>
               </form>
    </div>
   </div>
</div>
 
  
     


<?php include "footer.php" ?>

