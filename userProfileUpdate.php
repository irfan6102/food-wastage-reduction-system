<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User Registration</title>
    
    
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
<h1 class="text-center mt-4 text-info">Update Your details</h1>
    <div class="container border border-primary mt-3 bg-info" style="width:650px">
        <form action="userUpdateInsert.php" method="post"> 
            <div class="form-row mt-5">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here" required>
              </div>         <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here" required>
              </div>
             
            </div>
            
           
            <div class="form-group">
              <label for="address1">Address</label>
              <input type="text" class="form-control"  id="address1" name="address1" placeholder="1234 Main St" required>
            </div>
            <div class="form-group">
              <label for="address2">Address 2</label>
              <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
              </div>
              <div class="form-group col-md-4">
               <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state" required>
              </div>
             
            
              <div class="form-group col-md-2">
                <label for="pincode">Pin code</label>
                <input type="text" class="form-control" id="pincode" name="pincode" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
     
            </div>

            <button type="submit" class="btn btn-secondary mb-5 mt-3">Upadte</button>
<a class="btn btn-secondary mb-5 mt-3" href="index.php" role="button">Back</a>
          </form>
    </div>
   <div class="text-center bg-dark text-white" style="height: 80px; padding: 30px; margin-top: 30px;" >

        <footer>
          Copyright &copy; Food Wastage Reduction System
      </footer>
      </div>
    
</body>
</html>