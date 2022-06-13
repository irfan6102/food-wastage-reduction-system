<?php
session_start();

$fooddetail1=$_POST['fooddetail1'];
$quantity1=$_POST['quantity1'];
$fooddetail2=$_POST['fooddetail2'];
$quantity2=$_POST['quantity2'];
$fooddetail3=$_POST['fooddetail3'];
$quantity3=$_POST['quantity3'];
$fooddetail4=$_POST['fooddetail4'];
$quantity4=$_POST['quantity4'];
$extrafood=$_POST['extrafood'];
$organizer=$_POST['organizer'];
$username1=$_SESSION['username'];
$date=$_POST['date'];



$servername="localhost";
$username="root";
$password="irfan@123";
$dbname="foodwastereduction";
$conn =new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}




 $sql="SELECT * from userregdetail where username='$username1'";
 $result=$conn->query($sql);
    if($result->num_rows>0) 
     {


$stmt=$conn->prepare("INSERT INTO detailoffood (fooddetail1,quantity1,fooddetail2,quantity2,fooddetail3,quantity3,fooddetail4,quantity4,extrafood,organizer,username,date) values (?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssss",$fooddetail1,$quantity1,$fooddetail2,$quantity2,$fooddetail3,$quantity3,$fooddetail4,$quantity4,$extrafood,$organizer,$username1,$date);
$stmt->execute();
echo "<b>Food details inserted...</b><br><br>";
$stmt->close();
$conn->close();
        
       

}
   else{
       
echo "<p style='color:red;'>Please enter valid name</p>";
}






?>
<html>
<head>
<title>Registration Successful</title>
</head>
<body>
<a href="index.php">Get back to home</a><br><br>
<a class="btn btn-primary" href="userfeedback.php" role="button">Give us Feedback</a>
</body>
</html>