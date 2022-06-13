<?php
session_start();
if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:userLogin.php');
}
$username2=  $_SESSION['username'];
$mobileNumber2=$_SESSION['mobileNumber'];

  
 


$err="";
$ses="";

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


    $mobileNumber2=$row['mobileNumber']; 
}
}
    $no=$mobileNumber2 ;
    $otp=rand(1111,9999);
$stmt=$conn->prepare("INSERT INTO otpverfication (username,phoneNUmber,otp) VALUES (?,?,?)");



$stmt->bind_param("sss",$username2,$mobileNumber2,$otp);
$stmt->execute();


   


if(preg_match("/^\d+\.?\d*$/",$no) && strlen($no)==10){

$fields = array(
    "variables_values" => "$otp",
    "route" => "otp",
    "numbers" => "$no",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: GHJajxWT7yk4np1R6O2tvXVDUQi5rAhgNZSw3fc8BPY9oqueCKMhE5psjyQr4qVflKLYdZtxn0bORzPa",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
$data=json_decode($response);
$sts=$data->return;
if($sts==false){
 $err="Otp not sent";
}else{

$ses="Your OTP has sent";

}}}else{

 $err="Inavlid Mobile Number";

}
if(isset($_POST['otpSubmit']))
{

          $sql="SELECT * from otpverfication where phoneNumber='$mobileNumber2' and Otp='$otp' ";
 $result=$conn->query($sql);
    if($result->num_rows>0) 
     {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
       
          header('location:organizerAddress.php');
}

 }




    

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
    <h1 class="container mt-5" style="margin-left:560px">Please enter OTP here</h1>
    <div class="container mt-4 border border-primary" style="width:850px">
         
       <form method="post">
        <div class="form-group col-md-12" style="color:mediumslateblue">
            <label for="name">Enter 4 digit verification code sent to your number</label>
            <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter otp sent to to your number" required>
          </div>   
            <button type="submit" name="otpSubmit" class="btn btn-success mt-4 ml-5 mb-4">Submit</button>
            <a class="btn btn-success mt-4 mb-4" href="userview.php" role="button">Back</a>


        </form>

    </div>
    
</body>
</html>