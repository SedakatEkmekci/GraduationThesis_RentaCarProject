<?php 
include "admin_header.php";
include "functions.php"; 
include "delete_car.php";
?>

  
     <?php 
          $sql = "SELECT * FROM cars ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
      ?>

      <div class="col-sm-10 car_view">
            <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
               <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Car Name</th>
      <th scope="col">Car Brand</th>
      <th scope ="col">Car Price</th>
      <th scope="col">Details</th>
      <th scope="col">Delete Car</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
  <?php 

          if (mysqli_num_rows($res) > 0) {
            while ($car = mysqli_fetch_assoc($res)) {  

  
?>
  <tr>
      <th scope="row"><?=$car['id']?></th>
      <td><img src="uploads/<?=$car['image_url']?>"></td>
      <td><?=$car['car_name']?></td>
      <td><?=$car['car_brand']?></td>
      <td><?=$car['car_price']?></td>
      <td><?=$car['car_detail']?></td>
      <td><button type="submit" class="delete-btn">Delete</button></td>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div></div>

 
</div>
 