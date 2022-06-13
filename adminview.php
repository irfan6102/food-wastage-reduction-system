<?php
session_start();

if(!isset($_SESSION['username'] )&& !isset( $_SESSION['password'])){


header('location:adminLogin.php');
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
                <a class="nav-link" href="organizerLogin.php">Log out</a>
              </li>
          
            
            
          </ul>




       
        </div>
      </nav>



<div class=" ml-4 mr-4 mt-5 mb-5" ">
<div class="jumbotron">
  <h1 class="display-4">Hello, Admin!</h1>
  <p class="lead">Globally, nearly one third of food produced for human consumption is lost or wasted, equalling a total of 1.3. billion tonnes of food per year (Gustavsson et al., 2011). As the production of food is resource-intensive, food losses and wastes are indirectly accompanied by a broad range of environmental impacts, such as soil erosion, deforestation, water and air pollution, as well as greenhouse gas emissions that occurin the processes of food production, storage, transportation, and waste management (Mourad, 2016). Scenarios for Europe indicate a considerable potential for reducing emissions through the reduction of food waste (Rutten et al., 2013) along the stages of the food production and consumption chain (Schanes et al., 2016).America wastes roughly 40 percent of its food.One Of the estimated 125 to 160 billion pounds of food that goes to waste every year, much of it is perfectly edible and nutritious. Food is lost or wasted for a variety of reasons: bad weather, processing problems, overproduction and unstable markets cause food loss long before it arrives in a grocery store, while overbuying, poor planning and confusion over labels and safety contribute to food waste at stores and in homes.Food waste also has a staggering price tag, costing this country approximately $218 billion per year.3 Uneaten food also puts unneeded strain on the environment by wasting valuable resources like water and farmland. At a time when 12 percent of American households are food insecure 4, reducing food waste by just 15 percent could provide enough sustenance to feed more than 25 million people, annually.</p>
  <hr class="my-4">
  <p>You are doing some amazing work.</p>
<a class="btn btn-primary" href="checkuserfeedback.php" role="button">Check feedback</a>
<a class="btn btn-primary" href="checkorganizerlist.php" role="button">Check Organizer List</a>
<a class="btn btn-primary" href="checkuserlist.php" role="button">Check User List</a>

</div>
</div>








      <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
   
</body>
</html>