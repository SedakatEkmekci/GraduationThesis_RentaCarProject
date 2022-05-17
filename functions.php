<?php
  
  $host="localhost";
  $user="root";
  $password="";
  $db="rentacar";

  $db=mysqli_connect($host,$user,$password,$db);
  if($db==false)
  {
    die("Connection error");
  }
  

?>