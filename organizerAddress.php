<?php
session_start();
if(isset($_POST['SubmitOrganizerAddress']))
{

$servername="localhost";
$username="root";
$password="irfan@123";
$dbname="foodwastereduction";
$conn =new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}

$oaddress1=$_POST['oaddress1'];
$oaddress2=$_POST['oaddress2'];
$ocity=$_POST['ocity'];
$ostate=$_POST['ostate'];
$opincode=$_POST['opincode'];




$stmt=$conn->prepare("INSERT INTO organizerAddress (address1,address2,city,state,pincode) VALUES (?,?,?,?,?)");



$stmt->bind_param("sssss",$oaddress1,$oaddress2,$ocity,$ostate,$opincode);
$stmt->execute();
       
        header('location:donatefood.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Organizer Address</title>
    
    
</head>

<body>
<h1 class="text-center mt-4 text-info">Donate to this address</h1>
    <div class="container border border-primary mt-3" style="width:650px;color:blueviolet;background-color: azure;">
        <form method="post"> 
        
            
           
            <div class="form-group">
              <label for="address1">Address</label>
              <input type="text" class="form-control"  id="address1" name="oaddress1" value="Near Aman sweets">
            </div>
            <div class="form-group">
              <label for="address2">Address 2</label>
              <input type="text" class="form-control" id="address2" name="oaddress2" placeholder="Champion market" value="Champion market">
            </div>
           
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="ocity" placeholder="Gopalganj" value="Gopalganj">
              </div>
              <div class="form-group col-md-4">
               <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="ostate" placeholder="Gopalganj" value="Bihar">
              </div>
             
            
              <div class="form-group col-md-2">
                <label for="pincode">Pin code</label>
                <input type="text" class="form-control" id="pincode" name="opincode" placeholder="841426" value="841426">
              </div>
            </div>
            <div class="form-row">
           
            
         
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
     
            </div>

            <button type="submit" class="btn btn-success mb-5 mt-3" name="SubmitOrganizerAddress">Submit</button>
<a class="btn btn-success mb-5 mt-3" href="index.php" role="button">Back</a>
          </form>
    </div>
    
</body>
</html>