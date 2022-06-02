<?php 
include "header.php";

          $sql = "SELECT * FROM cars ORDER BY id DESC";
          $res = mysqli_query($conn, $sql);

        
    if(isset($_POST['deleted_car_id']))
    {
        $_sql = "DELETE FROM cars WHERE id = '".$_POST['deleted_car_id']."'";
        mysqli_query($conn, $_sql);
        mysqli_close($conn);
        header("location: cars.php");
    }

?>

<!-- The section that will open when the user wants to rent a car -->
<div class="container car_view">
    <!-- The ssection where the cars are shown to the user as a Ttable -->
    <div class="card mt-2 mx-auto p-4 bg-light">

        <div class="card-body bg-light">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <!-- The section  where the vehicles are taken according to the name -->
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Car Brand</th>
                        <th scope="col">Car Price</th>
                        <th scope="col">Details</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php 
    if (mysqli_num_rows($res) > 0) {  //In the loop, it writes to the table line by line according to the id numbers of the cars
    while ($car = mysqli_fetch_assoc($res)) {  
  ?>
                    <tr>
                        <th scope="row" name="carID">
                            <?=$car['id']?>
                        </th>
                        <td><img src="uploads/<?=$car['image_url']?>"></td>
                        <td>
                            <?=$car['car_name']?>
                        </td>
                        <td>
                            <?=$car['car_brand']?>
                        </td>
                        <td>
                            <?=$car['car_price']?>
                        </td>
                        <?php 
        if($_SESSION['id']>0){  //If the customer is not logged in, they cannot see the view button.
          ?>
                        <td>
                        <form action="BuyCar.php" method="POST">
                            <input type="hidden" name="car_id" value="<?php echo $car['id'] ?>">
                            <button type="submit" name="Buy" class="btn btn-info viewbtn"> BUY </button>
                        </form>
                        <br>
                        <form method="POST">
                            <input type="hidden" name="deleted_car_id" value="<?php echo $car['id'] ?>">
                            <button type="submit" name="Delete" class="btn btn-danger viewbtn"> Delete </button>
                        </form>
                        </td>
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
        </div>
    </div>
</div>
<?php include "footer.php"; ?>