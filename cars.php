<?php 
include "header.php";
include "functions.php"; 

          $sql = "SELECT * FROM cars ORDER BY id DESC";
          $res = mysqli_query($conn, $sql);
?>

<!-- Modal for customer Login -->
      <div class="container car_view">
        <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Login </h5>
                </div>
                <form class="form" method="post" name="login">
        
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>

                

            </div>
        </div>
    </div>
            <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
           
             
               <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Car Name</th>
      <th scope="col">Car Brand</th>
      <th scope ="col">Car Price</th>
      <th scope="col">Details</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
    
  <?php 

          if (mysqli_num_rows($res) > 0) {
            while ($car = mysqli_fetch_assoc($res)) {  

      
?>
 
  <tr>
      <th scope="row" name = "carID"><?=$car['id']?></th>
      <td><img src="uploads/<?=$car['image_url']?>"></td>
      <td><?=$car['car_name']?></td>
      <td><?=$car['car_brand']?></td>
      <td><?=$car['car_price']?></td>
      <?php 
        if($_SESSION['id']>0){ 
          ?>
          <td> <button type="button" class="btn btn-info viewbtn"> VIEW </button></td>
          <?php
              } 
      else {
        ?>
        <td>Please Login for show detail</td>
        <?php
       }
      ?>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div></div>


</div>
<?php include "footer.php"; ?>