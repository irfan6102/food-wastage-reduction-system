<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User Registration</title>
    
    
</head>

<body>
<h1 class="text-center mt-4 text-info">Register Now</h1>
    <div class="container border border-primary mt-3 bg-info" style="width:650px">
        <form action="insert.php" method="post"> 
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
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Create your username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username@132" required>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Create your Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create your password" required>
            </div>
              <div class="form-group col-md-12">
              <label for="mobileNumber">Mobile Number</label>
              <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number">
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

            <button type="submit" class="btn btn-secondary mb-5 mt-3">Register</button>
<a class="btn btn-secondary mb-5 mt-3" href="index.php" role="button">Back</a>
          </form>
    </div>
    
</body>
</html>