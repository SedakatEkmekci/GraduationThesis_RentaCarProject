<?php
include "functions.php";


if(isset($_POST['submit']))
{    
    $id= $car['id'];
    
// sql to delete a record
$sql = "DELETE FROM Cars WHERE $id=$car['id']";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>