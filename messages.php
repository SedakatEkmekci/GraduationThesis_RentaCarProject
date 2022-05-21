<?php 
include "admin_header.php";
include "functions.php"; 

?>

  
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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
  <?php 

          if (mysqli_num_rows($res) > 0) {
            while ($message = mysqli_fetch_assoc($res)) {  

  
?>
  <tr>
      <th scope="row"><?=$message['id']?></th>
      <td><?=$message['Name']?></td>
      <td><?=$message['Mail']?></td>
      <td><?=$message['Message']?></td>
      <td><?=$message['Date']?></td>
      <td><button type="submit" class="delete-btn">Delete</button></td>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div></div></div>
 