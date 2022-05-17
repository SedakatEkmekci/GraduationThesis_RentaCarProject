<?php

include("functions.php");
ob_start();
session_start();
 
  $umail=$_POST['umail'];
  $pass=$_POST['pass'];
 
 $sql="SELECT * FROM admin WHERE admin_mail='".$umail."'AND admin_password='".$pass."'";

 
if(!isset($_SESSION["login"])){
    header("Location:admin.php");
}
else {
    if($umail=="" or $pass=="") {
        echo "<center>Please do not leave the username or password blank..!<a href=javascript:history.back(-1)>Turn Back</a></center>";
    }
    else {
        echo "<center>You Have Entered Incorrect Password<br><a href=javascript:history.back(-1)>Turn Back</a></center>";
    }
}
 
ob_end_flush();

?>