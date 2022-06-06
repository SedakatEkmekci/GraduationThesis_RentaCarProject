<?php 
include ('functions.php');
include('admin_header.php');

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $brand = $_POST['brand'];
     $price = $_POST['price'];
     $detail = $_POST['detail'];
    
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO cars(car_name,car_brand,car_detail,car_price,image_url)
                VALUES ('$name','$brand','$price','$detail','$new_img_name')";
                mysqli_query($conn, $sql);
                header("Location: view_cars.php");
            }else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
     mysqli_close($conn);
}


?>
<div class="col-sm-10">
  
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <form id="car-add" role="form" action=""
           method="post"
           enctype="multipart/form-data">
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
                    <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="form_detail mt-1">Image*</label>
                            <input id="form_detail"  type="file" 
                  name="my_image" class="form-control" placeholder="Please Enter Car Image*" required="required" data-error="Image is required.">
                            
                        </div>
                    </div>

                    </div>
                </div>
                </form>
			<div class="col-md-12 mt-5">
                        
                        <input type="submit" 
                  name="submit"
                  value="Upload" class="btn btn-success btn-send  pt-2 btn-block 
                            "  >
                    
                </div>
          
                </div>
                 

</div>

 </div>
 </div>
 </div>




        

    

