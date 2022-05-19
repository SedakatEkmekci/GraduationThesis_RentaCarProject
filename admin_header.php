<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<link rel="stylesheet" type="text/css" href="assets\css\index.css">
<link rel="stylesheet" type="text/css" href="assets\css\admin.css">
<link rel="stylesheet" type="text/css" href="assets\css\cars.css">
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap\bootstrap.min.css">


</head>
<body>
   <?php 
include ('session.php');
?>
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 height">
                <p class="pt-5 pb-5 text-center">
                    <a href="admin_index.php" class="text-decoration-none"><span class="text-dark text-font">Admin</span></a>
                </p>
                <hr class="bg-dark ">
                <p class="pt-2 pb-2 text-center">
                    <a href="customers.php" class="text-decoration-none"><span class="text-dark">Customers</span></a>
                </p>
                <hr class="bg-dark ">
                   <p class="pt-2 pb-2 text-center">
                    <a href="view_customers.php" class="text-decoration-none"><span class="text-dark">View Customer</span></a>
                </p>  
                <hr class="bg-dark ">
                <p class="pt-2 pb-2 text-center">
                    <a href="add_cars.php" class="text-decoration-none"><span class="text-dark">Add Cars</span></a>
                </p>
                <hr class="bg-dark ">
                <p class="pt-2 pb-2 text-center">
                    <a href="cars_display.php" class="text-decoration-none"><span class="text-dark">View Cars</span></a>
                </p>
                <hr class="bg-dark ">
                <p class="pt-2 pb-2 text-center">
                    <a href="display_orders.php" class="text-decoration-none"><span class="text-dark">View Orders</span></a>
                </p>
                <hr class="bg-dark">
                    <p class="pt-5 text-center">
                        <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                    </p>
            </div>
       