


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Cheking details of food</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="loveFoodStopWaste.png" width="30" height="30" alt="">
          </a>
  
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
<li class="nav-item">
                <a class="nav-link" href="userProfile.php">Profile</a>
              </li>
   <li class="nav-item">
                <a class="nav-link" href="donatefood.php">Donate Now</a>
              </li>
<li class="nav-item">
                <a class="nav-link" href="userfeedback.php">Give us feedback</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Logout.php">Log out</a>
                
              </li>

           
          
          <form class="form-inline my-2 my-lg-0 " style="margin-left:633px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</body>
<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:userLogin.php');
}

$username1=$_SESSION['username'];

  
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

  // SQL QUERY
  $query = "SELECT  * from userregdetail where username='$username1' ";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {

  ?>



<div class="mt-5 bg-secondary text-light pb-2" style="margin-left:450px;margin-right:150px">
<span class="ml-4">Name:</span> <?php echo $row['name']; ?><br>
<span class="ml-4">Address1:</span> <?php echo $row['address1']; ?><br>
<span class="ml-4">Address2:</span> <?php echo $row['address2']; ?><br>
<span class="ml-4">City:</span> <?php echo $row['city']; ?><br>
<span class="ml-4">State:</span> <?php echo $row['state']; ?><br>
<span class="ml-4">Pincode:</span> <?php echo $row['pincode']; ?><br>
<span class="ml-4">UserName:</span> <?php echo $row['username']; ?><br>
 <a href="userProfileUpdate.php" class="btn btn-primary ml-3 mt-3 mb-3">Update Details</a>

</div>








<?php
}
}
?>

  <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 350px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
 
  

</html>