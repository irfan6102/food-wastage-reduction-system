<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:organizerLogin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Organizer View</title>
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
              <a class="nav-link" href="CheckDetailFood.php">Check Food details</a>
            </li>
  <li class="nav-item">
                <a class="nav-link" href="organizerLogin.php">Log out</a>
              </li>
          
            
            
          </ul>




       
        </div>
      </nav>
<div style="display:inline-block">
<img src="feeding.webp"  height="200px" weidth="200px" >
</div>
<div style="display:inline-block">
<img src="foodwaste_NRDC.jpg" height="200px" weidth="200px">
</div>
<div style="display:inline-block">
<img src="foodDonate.jpg" height="200px" weidth="200px">
</div>
<div style="display:inline-block">
<img src="istockphoto-1318880638-170667a.jpg" height="200px" weidth="200px">
</div>
<div style="display:inline-block">
<img src="Food_Donation_Services_2_1024x1024.webp" height="200px" width="277px">
</div>


<div class=" ml-4 mr-4 mt-3" ">
<div class="jumbotron">
  <h1 class="display-4">Hello, Organizer!</h1>
  <p class="lead">Globally, nearly one third of food produced for human consumption is lost or wasted, equalling a total of 1.3. billion tonnes of food per year (Gustavsson et al., 2011). As the production of food is resource-intensive, food losses and wastes are indirectly accompanied by a broad range of environmental impacts, such as soil erosion, deforestation, water and air pollution, as well as greenhouse gas emissions that occurin the processes of food production, storage, transportation, and waste management (Mourad, 2016). Scenarios for Europe indicate a considerable potential for reducing emissions through the reduction of food waste (Rutten et al., 2013) along the stages of the food production and consumption chain (Schanes et al., 2016).</p>
  <hr class="my-4">
  <p>You are doing some amazing work.</p>
  <p class="lead">
    <a  href="https://sharefood.fssai.gov.in/partner.html" >Know about more organizations</a>
  </p>
</div>
</div>








      <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
   
</body>
</html>