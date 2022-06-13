<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:userLogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User View</title>
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
                <a class="nav-link" href="VerifyUser.php">Donate Now</a>
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





<div class="card mr-5 mt-5 mb-5" style="width: 18rem; display:inline-block;margin-left:120px;">
  <img class="card-img-top" src="images.jpg" alt="Food waste image">
  <div class="card-body">
    
    <p class="card-text">America wastes roughly 40 percent of its food,Of the estimated 125 to 160 billion pounds of food that goes to waste every year, much of it is perfectly edible and nutritious</p>
    <a href="https://foodprint.org/issues/the-problem-of-food-waste/" class="btn btn-primary">Know more</a>
  </div>
</div>

<div class="card mt-5 mr-5 mb-5" style="width: 18rem ; display:inline-block">
  <img class="card-img-top" src="foodwaste_NRDC.jpg" alt="Card image cap" height="194px" >
  <div class="card-body">
    
    <p class="card-text">Around 67 million tonnes of food is wasted in India every year which has been valued at around `92,000 crores; enough to feed all of Bihar
for a year</p>
    <a class="btn btn-primary" href="https://www.cleanindiajournal.com/food-wastage-crisis-in-india/" role="button">Know more</a>
  </div>
</div>

<div class="card mt-5 mr-5 mb-5" style="width: 18rem ; display:inline-block">
  <img class="card-img-top" src="fwimage.jpg" alt="Card image cap" height="218px" >
  <div class="card-body">
    
    <p class="card-text">Food losses and waste amount to roughly US$ 680 billion in industrialized countries and US$ 310 billion in developing countries</p>
    <a class="btn btn-primary" href="https://www.unep.org/thinkeatsave/get-informed/worldwide-food-waste" role="button">Know more</a>
  </div>
</div>

<div class="card mt-5 mr-5 mb-5" style="width: 18rem ; display:inline-block">
  <img class="card-img-top" src="FoodWaste1.avif" alt="Card image cap" height="98px" >
  <div class="card-body">
    
    <p class="card-text">INDIANS waste as much food as the whole of United Kingdom consumes – a statistic that may not so much indicative of our love of surfeit, as it is of our population. Still, food wastage is an alarming issue in India. Our street and garbage bins, landfills have sufficient proof to prove it.</p>
    <a class="btn btn-primary" href="https://www.unep.org/thinkeatsave/get-informed/worldwide-food-waste" role="button">Know more</a>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Give what you can</h1>
    <p class="lead">By Little a little becames a lot</p>
<a class="btn btn-primary" href="donatefood.php" role="button">Donate Now</a>
  </div>
</div>


      <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
   
</body>
</html>