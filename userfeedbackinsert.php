<?php
session_start();
$experience=$_POST['experience'];
$suggestion=$_POST['suggestion'];
$username=$_SESSION['username'];


$conn=new mysqli('localhost','root','irfan@123','foodwastereduction');
if($conn->connect_error){
die('Connection FAiled:' .$conn->connect_error);
}
$stmt=$conn->prepare("INSERT INTO userfeedback (experience,suggestion,username) VALUES (?,?,?)");
$stmt->bind_param("sss",$experience,$suggestion,$username);
$stmt->execute();
echo "<b>Your feedback has been submitted</b><br><br>";
$stmt->close();
$conn->close();

?>
<html>
<head>
<title>User Feedback Successfull</title>
</head>
<body>
<a href="index.php">Get back to home</a>
</body>
</html>