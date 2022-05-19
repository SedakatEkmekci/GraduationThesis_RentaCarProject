<?php 
include('customer_header.php');



?>
<!-- alert -->
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
  <p>You are now customer page.</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

        
    <?php include ('footer.php'); ?>

