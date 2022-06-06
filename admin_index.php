<?php 
include ('functions.php');
include('admin_header.php');

?>
<!-- alert -->
<div class="col-sm-10">
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
  <p>You are now admin page.</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>

        
    <?php include ('footer.php'); ?>

