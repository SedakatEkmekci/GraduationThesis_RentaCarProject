<?php
session_start();

    $conn = mysqli_connect("localhost","root","","rentacar");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        if(!isset($_SESSION['id']))
            $_SESSION['id'] = 0;
    }
?>