<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Upadate User Password</title>
</head>
<body style="color:darkorange;background-color: burlywood;">
    <h2 class="text-center mt-3 text-success">Update Your Password</h2>
    <div class="container mt-5 border" style="background-color: darkcyan;" >
        <form action="updateUserPassword.php" method="post">
        
              <div class="form-group mt-4" style="padding-left: 300px;padding-right: 300px;">
                <label for="username">Username</label>
                <input type="email" class="form-control" id="username" name="username" placeholder="Enter your username">
              </div>
              <div class="form-group" style="padding-left: 300px;padding-right: 300px;">
                <label for="newPassword"> Enter New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter your password">
              </div>
        
        
      
           
          
            <div class="form-group" style="padding-left: 300px;padding-right: 300px;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="mb-4" style="padding-left: 300px;padding-right: 300px;">
            <button type="submit" class="btn btn-primary" >Update</button>
            <a class="btn btn-primary" href="userLogin.php" role="button">Back</a>
            </div>
          </form>
    </div>
    
</body>
</html>