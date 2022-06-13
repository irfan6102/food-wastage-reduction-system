<?php
session_start();
?>
<?php
if(!isset($_SESSION['username'])){


header('location:userLogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User Feedback</title>
    
    
</head>

<body class="bg-dark">
<h1 class="text-center text-secondary">Give your feedback here</h1>
</body>
<div class="container mt-5 border border-warning" style="width:500px">
<form  action="userfeedbackinsert.php" method="post">
  <div class="form-group ml-5 mr-5 mt-5 text-light">
    <label for="experience">How was your experience?</label>
    <textarea class="form-control" id="experience" name="experience" rows="3"></textarea>
  </div>
  <div class="form-group ml-5 mr-5 text-light">
    <label for="suggestion">Give us some suggestion</label>
    <textarea class="form-control" id="suggestion" name="suggestion" rows="3"></textarea>
  </div>
 <div class="from-group" style="margin-top:10px;margin-left:45px;margin-bottom:40px;"> 
<input class="btn btn-primary" type="submit" value="Submit">
<a class="btn btn-primary" href="userview.php" role="button">Back</a>
</div>
</form>
</div>

</html>