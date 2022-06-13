<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:userLogin.php');
}
$username2=  $_SESSION['username'];
  
 



   $servername = "localhost";
  $username = "root";
  $password = "irfan@123";
  $databasename = "foodwastereduction";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $count=0;
  // SQL QUERY
  $query = "SELECT  * from userregdetail where username='$username2' ";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {


    $_SESSION['mobileNumber']=$row['mobileNumber']; 
}
}
 
   $mobileNumber1=$_SESSION['mobileNumber'];



$lastTwoDigit=$mobileNumber1%100;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Php otp verification</title>
</head>
<body>
    <h1 class="container mt-5" style="margin-left:560px">Verify Yourself here</h1>
    <div class="container mt-4 border border-primary" style="width:600px">
         <p class="text-center text-warning"><?php echo "Your mobile number is XXXXXXXXX".$lastTwoDigit." "?></p>
        <form method="post" action="OtpSent.php">
        
            <button type="submit" class="btn btn-success mt-4 ml-5 mb-4">Send OTP to your registered mobile number</button>
            <a class="btn btn-success mt-4 mb-4" href="userview.php" role="button">Back</a>


        </form>

    </div>
    
</body>
</html>