<?php include "header.php"; ?>
   

<div class="container top-section">
  <div class="container titles">
    <h1>Contact Us</h1>
    <p>Contact us to get more information</p>
</div>
<div class="container contact_view">
  <div class="row">
      <div class="col-md-12">
        <div class="contact-us">
          <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <fieldset>    
           <!-- Name input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name" >Name</label>
             
                <input required="true" id="name" name="name" type="text" placeholder="Your Name" class="form-control">
             
            </div>
    
            <!-- Email input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              
                <input required="true" id="email" name="email" type="text" placeholder="Your E-mail Address" class="form-control">
              
            </div>
    
          <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Message</label>
              
                <textarea required="true" class="form-control" id="message" name="message" placeholder="Your Message" rows="5"></textarea>
            
            </div>
    
         <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-left"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button type="submit" class="btn btn-primary btn-md" >Contact Us!</button> 
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {   // post metoduyla verileri alıyoruz.
    
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

      sqlConn($name,$email,$message);
}
function sqlConn($name,$email,$message){
include ('functions.php');

$date = date('d-m-Y H:i:s');
$sql = "INSERT INTO messages (Name, Mail, Message, Date) VALUES ('$name', '$email', '$message', '$date')";


if ($conn->query($sql)=== TRUE) {
  echo "<br><br>";
  echo "<p align='center' class='marjver'>Your Message is arrived!</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

?>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      
  </div>
</div>


<?php
include("footer.php");
?>

 

