<?php 
include "header.php";
include "functions.php"; 

?>
<?php 
          $sql = "SELECT * FROM cars ORDER BY id DESC";
          $res = mysqli_query($conn, $sql);
?>

      <div class="container car_view">
        <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="fname"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
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
      <td> <button type="button" class="btn btn-info viewbtn"> VIEW </button></td>
    
   </tr> 
 
   <?php } }?>
   
    </tbody>
</table>

</div></div>


</div>
<?php include "footer.php"; ?>