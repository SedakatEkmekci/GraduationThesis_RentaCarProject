<?php 
include('admin_header.php');
include_once 'functions.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $brand = $_POST['brand'];
     $price = $_POST['price'];
     $detail = $_POST['detail'];
     $sql = "INSERT INTO cars (car_name,car_brand,car_detail,car_price)
     VALUES ('$name','$brand','$price','$detail')";
     if (mysqli_query($conn, $sql)) {
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


?>
<div class="col-sm-10">
  
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <form id="car-add" role="form" action="" method="post">
                	<input type="hidden" name="submit" value="1">
					<div class="controls">
					<div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="car_name mt-1">Car Name</label>
                            <input id="car_name" type="text" name="name" class="form-control" placeholder="Please Enter Car Name" required="required" data-error="Name is required.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="form_price mt-1">Car Brand</label>
                            <input id="form_brand" type="text" name="brand" class="form-control" placeholder="Please Enter Car Brand *" required="required" data-error="Brand is required.">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="form_price mt-1">Car Price</label>
                            <input id="form_price" type="text" name="price" class="form-control" placeholder="Please Enter Car Price *" required="required" data-error="Price is required.">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="form_detail mt-1">Car Details*</label>
                            <input id="form_detail" type="text" name="detail" class="form-control" placeholder="Please Enter Car Details*" required="required" data-error="Details are required.">
                            
                        </div>
                    </div>

                    </div>
                </div>
                </form>
			<div class="col-md-12 mt-5">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Submit" >
                    
                </div>
          
                </div>
                 

</div>

 </div>
 </div>
 </div>




        

    

