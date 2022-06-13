<?php

if(isset($_POST['loginasuser']))
{
  
    header('Location:userLogin.php');

    }else if(isset($_POST['loginasorganizer']))
{
  
    header('Location:organizerLogin.php');

    }else if(isset($_POST['loginasadmin']))
{
  
    header('Location:adminLogin.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<form method="post">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Food Wastage Reduction</title>

</head>  
<body>
  <div class="text-center bg-dark" ">
    <span>
    <img src="loveFoodStopWaste.png" class="rounded" alt="Image of food waste" height="100px">
    </span>
    <p class="text-white">Welcome to Food Wastage Management System</p>
  </div>
  <div class="container text-center" style="margin-top: 60px;">
    <a href="userRegistration.php">New here? Register Yourself..</a>
  </div>
  <div class="text-center " style="margin:80px 200px 200px 200px;">
    
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="loginasuser" >  Log  in  as a user  </button><br><br>
    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="loginasorganizer">Log in as a organizer</button><br><br>
    <button type="submit" class="btn btn-warning btn-lg btn-block" name="loginasadmin">  Log in as a Admin  </button>

  </div>
  
  
   
      <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >
      <footer>
        Copyright &copy; Food Wastage Reduction System
    </footer>
    </div>
 
    
</body>
</form>


</html>