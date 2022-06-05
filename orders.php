<?php include "header.php";?>
<?php 
          $sql = "SELECT * FROM messages ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
      ?>

      <div class="col-sm-10 message_view">
            <div class="messaged mt-2 mx-auto p-4 bg-light">
            <div class="messaged-body bg-light">
               <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Renter Name</th>
      <th scope="col">Renter TC</th>
      <th scope="col">Location</th>
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
      <td><?=$order['Renter Name']?></td>
      <td><?=$order['Renter TC']?></td>
      <td><?=$order['location']?></td>
      <td><?=$order['Pick-up Date']?></td>
      <td><?=$order['Order Date']?></td>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div></div></div>
 
<?php include "footer.php"; ?>