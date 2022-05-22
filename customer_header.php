<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<link rel="stylesheet" type="text/css" href="assets\css\index.css">
<link rel="stylesheet" type="text/css" href="assets\css\customer.css">
<link rel="stylesheet" type="text/css" href="assets\css\cars.css">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


</head>
<body>
  <?php 
include ('session.php');
?>

  <div class="head container">
    <div class="row"> <nav class="navbar navbar-expand-lg navbar-light">
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
          <a class="nav-link" href="cars.php">View Cars</a>
        </li>
       <li class="nav-item dropdown dropbtn" onclick="myFunction()">Account
      <i class="fa fa-caret-down"></i>
      <div class="dropdown-content" id="myDropdown">
    <a href="#">Cart</a>
    <a href="#">Cars</a>
    <a href="#">Settings</a>
  </div>
</li>
</ul>
    </div>
 </div>
</div>