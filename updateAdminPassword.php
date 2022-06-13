<?php

$password1=$_POST['newPassword'];
$username1=$_POST['username'];
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

$sql = "UPDATE admindetail SET password='$password1' WHERE username='$username1'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>



