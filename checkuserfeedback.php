<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:adminLogin.php');
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
  $query = "SELECT  * from userfeedback";
  
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
<h2 class="ml-4 pt-2">Feedback details of <?php echo "User".$count;?></h2>
<!-- Displaying Data Read From Database -->
<span class="ml-4">Username:</span> <?php echo $row['username']; ?><br>
<span class="ml-4">Experience:</span> <?php echo $row['experience']; ?><br>
<span class="ml-4">Suggestion:</span> <?php echo $row['suggestion']; ?><br>




</div>

<?php
}
}
?>

  <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 250px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
 
  

</html>