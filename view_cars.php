<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM cars ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($car = mysqli_fetch_assoc($res)) {  ?>
             
             <div>
             	<img src="uploads/<?=$car['image_url']?>">
             </div>
             <div>
             	" " <?=$car['car_name']?>
             </div>
                <div>
             	" " <?=$car['car_price']?>
             </div>
                <div>
             	" " <?=$car['car_brand']?>
             </div>
                <div>
             	" " <?=$car['car_detail']?>
             </div>
          		
    <?php } }?>
</body>
</html>