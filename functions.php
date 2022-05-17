<?php
  
  $host="localhost";
  $user="root";
  $password="";
  $db="rentacar";

  $data=mysqli_connect($host,$user,$password,$db);
  if($data==false)
  {
    die("Connection error");
  }
  
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $admin_username = $_POST["username"]; 
    $admin_password = $_POST["password"];

    $sql="SELECT * FROM admin WHERE  admin_username='".$admin_username."' AND admin_password='".$admin_password."'";
    $result=mysqli_query($data,$sql);
   if($result["admin_username"]=="username" || $result["admin_password"]=="password"){
      header("location:admin.php");
    }
    else{
      echo "username or password incorrect";
    }


  }
?>