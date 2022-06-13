<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:userLogin.php');

}

$username1=$_SESSION['username'];


$name=$_POST['name'];
$email=$_POST['email'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];



$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "foodwastereduction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE userregdetail SET name='$name',email='$email',address1='$address1',address2='$address2',city='$city',state='$state',pincode='$pincode' WHERE username='$username1'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

