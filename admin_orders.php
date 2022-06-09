<?php include "admin_header.php";?>
<?php 
          $sql = "SELECT * FROM orders ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
      ?>
<div class="col-sm-10">
      <div class="container order_view bg-light">
          
               <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Renter Name</th>
      <th scope="col">Renter TC</th>
      <th scope="col">Pick-up Date</th>
      <th scope="col">Return Date</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    
  <?php 

          if (mysqli_num_rows($res) > 0) {
            while ($order = mysqli_fetch_assoc($res)) {  

  
?>
  <tr>
      <th scope="row"><?=$order['id']?></th>
      <td><?=$order['renter_name']?></td>
      <td><?=$order['renter_tcid']?></td>
      <td><?=$order['pickup_date']?></td>
      <td><?=$order['return_date']?></td>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div>
</div>
 
<?php include "footer.php"; ?>