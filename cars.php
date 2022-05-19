<?php
include('admin_header.php');
include('car_server.php')
?>


<div class="col-sm-10 ">
<h1>Adding Car</h1>

<form method="post" action="product.php">
<div class="form-group">
<label>Car Name</label>
<input type="text" class="form-control" name="cname" required>
</div>
<div class="form-group">
<label>Car Price</label>
<input type="text" class="form-control"  name="cprice" required>
</div>
<div class="form-group">
<label>Car Details</label>
<textarea class="form-control" name="cdetails" required></textarea>
</div>
<button type="submit" class="btn btn-primary" name="reg_c">Submit</button>
</form>
</div>



<?php
include('footer.php');
?>