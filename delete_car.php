<?php

include ('functions.php');
include "admin_header.php";

if(isset($_POST['submit']))
{    
    $id= $car['id'];
    
// sql to delete a record
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}

$conn->close();
?>