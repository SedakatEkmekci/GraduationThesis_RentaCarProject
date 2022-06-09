<?php
//Customer id is 0 as default its mean not logged in
session_start();
if(!isset($_SESSION['id'])) 
  $_SESSION['id'] = 0;
  //Database Connection
    $conn = mysqli_connect("localhost","root","","rentacar");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      
    }
?>