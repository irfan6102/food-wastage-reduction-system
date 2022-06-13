<?php
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$username=$_POST['username'];
$password=$_POST['password'];
$mobileNumber=$_POST['mobileNumber'];




$conn=new mysqli('localhost','root','irfan@123','foodwastereduction');
if($conn->connect_error){
die('Connection FAiled:' .$conn->connect_error);
}
$stmt=$conn->prepare("INSERT INTO userregdetail (name,email,address1,address2,city,state,pincode,username,password,mobileNumber) VALUES (?,?,?,?,?,?,?,?,?,?)");



$stmt->bind_param("ssssssssss",$name,$email,$address1,$address2,$city,$state,$pincode,$username,$password,$mobileNumber);
$stmt->execute();


echo "<b>Registration successfully...</b><br><br>";
$stmt->close();
$conn->close();

?>
<html>
<head>
<title>Registration Successful</title>
</head>
<body>
<a href="index.php">Get back to home</a>
</body>
</html>