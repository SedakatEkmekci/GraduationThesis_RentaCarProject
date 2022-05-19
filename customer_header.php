<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<link rel="stylesheet" type="text/css" href="assets\css\index.css">
<link rel="stylesheet" type="text/css" href="assets\css\customer.css">
<link rel="stylesheet" type="text/css" href="assets\css\cars.css">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


</head>
<body>
  <?php 
include ('session.php');
?>
<section class="header-main border-bottom ">
	<div class="container-fluid">
       <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
           <div class="col-md-2">
               <img  class="d-none d-md-flex" src="assets\images\Scarlogo.png" alt="" width="100">
           </div>
           <div class="col-md-8">
        <div class="d-flex form-inputs">
        <input class="form-control" type="text" placeholder="Search any product...">
        <i class="bx bx-search"></i>
        </div>
           </div>
       </div>
	</div> 
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand d-md-none d-md-flex" href="#">Categories</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        
        
          </ul>
    </div>
  </div>
</nav>
</header>