<?php include "header.php" ?>

<div class="container">
  <img src="assets\images\Scarlogo.png">
<form method="POST" action="admin_login.php">
  <div align="center">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
    <div class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div >
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php include "footer.php" ?>

