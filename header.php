<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<link rel="stylesheet" type="text/css" href="assets\css\index.css">
<link rel="stylesheet" type="text/css" href="assets\css\cars.css">
<link rel="stylesheet" type="text/css" href="assets\css\admin.css">
<link rel="stylesheet" type="text/css" href="assets\css\contact.css">
<link rel="stylesheet" type="text/css" href="assets\css\customer.css">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.min.css.map">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.css.map">
<link rel="stylesheet" type="text/css" href="assets\css\fontawesome\fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>
<body>
<?php 
  include ("functions.php");
?>
	<div class="topnav container">
		<div class="row">	<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets\images\Scarlogo.png" alt="">
    </a>
  </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cars.php">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <?php 
        if($_SESSION['id']>0){  //If the customer is logged in they see dropdown menu in header
          ?>
     <li class="nav-item dropdown dropbtn" onclick="myFunction()">Account
        <div class="dropdown-content" id="myDropdown">
        <a href="orders.php">Orders</a>
        <a href="#">Settings</a>
      </div>
      </li>
      <li>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
      </li> 
          <?php
              } 
      else {
        ?>
         <li class="nav-item">
          <a class="nav-link" href="customer_login.php">Login</a>
    	</li>
        <?php
       }
      ?>
     </ul>
    </div>
  </div>
</nav>
</div>
</div>

