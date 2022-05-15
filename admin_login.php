<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   

    $email 	= $_POST['email'];
    $password = $_POST['password'];

    sqlConnection($email,$password);
}
function sqlConnection($email,$password){
	
include("functions.php");

$enteredpassword = $password;
$sql = "SELECT * FROM admin WHERE email = '$email'";
$do = $conn->query($sql);

 
    while($result = $do->fetch_assoc()) {

        $DBpassword = $result["password"];	
    }
$conn->close();
}
ob_start();
if(($_POST["email"]==$email) and ($_POST["password"]==$DBpassword)){
$_SESSION["login"] = "true";
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
}
else{
echo "Username or Password Incorrect.<br>";
echo "You are redirected to the login page.";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>