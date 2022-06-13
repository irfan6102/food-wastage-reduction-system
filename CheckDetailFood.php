<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:organizerLogin.php');
}

?>


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
          <ul class="navbar-nav mr-auto ml-3">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About us</a>
            </li>

  <li class="nav-item">
                <a class="nav-link" href="organizerLogin.php">Log out</a>
              </li>  
          </ul>
        </div>
      </nav>
</body>
<?php
session_start();
$organizer=  $_SESSION['username'];
  
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
  $query = "SELECT  * from detailoffood,userregdetail where detailoffood.username=userregdetail.username and detailoffood.organizer='$organizer' ";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
$count++;
  ?>


<div class="mt-5 bg-secondary text-light pb-2" style="margin-left:450px;margin-right:150px">
<h2 class="ml-4 pt-2">Food details of <?php echo "User".$count;?></h2>
<!-- Displaying Data Read From Database -->
<span class="ml-4">Username:</span> <?php echo $row['username']; ?><br>
<span class="ml-4">Name:</span> <?php echo $row['name']; ?><br>
<span class="ml-4">Address1:</span> <?php echo $row['address1']; ?><br>
<span class="ml-4">Address2:</span> <?php echo $row['address2']; ?><br>
<span class="ml-4">City:</span> <?php echo $row['city']; ?><br>
<span class="ml-4">State:</span> <?php echo $row['state']; ?><br>
<span class="ml-4">Pincode:</span> <?php echo $row['pincode']; ?><br><br>
<span class="ml-4">Food1:</span> <?php echo $row['fooddetail1']; ?>
<span class="ml-4">Quantity:</span> <?php echo $row['quantity1']; ?><br>
<span class="ml-4">Food2:</span> <?php echo $row['fooddetail2']; ?>
<span class="ml-4">Quantity:</span> <?php echo $row['quantity2']; ?><br>
<span class="ml-4">Food3:</span> <?php echo $row['fooddetail3']; ?>
<span class="ml-4">Quantity:</span> <?php echo $row['quantity3']; ?><br>
<span class="ml-4">Food4:</span> <?php echo $row['fooddetail4']; ?>
<span class="ml-4">Quantity:</span> <?php echo $row['quantity4']; ?><br>
<span class="ml-4">Extra food:</span> <?php echo $row['extrafood']; ?><br>
<span class="ml-4">Date:</span> <?php echo $row['date']; ?><br>

<form action="deletefooddetail.php" method="post">
<button type="submit" class="btn btn-primary mt-3 mb-3 ml-4">Recieve</button>
</form>



</div>

<?php
}
}
?>

  <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
 
  

</html>