<?php
session_start();
if(isset($_POST['userlogin']))
{

$servername="localhost";
$username="root";
$password="irfan@123";
$dbname="foodwastereduction";
$conn =new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
$username=$_POST['username'];
$password=$_POST['password'];


 $sql="SELECT * from userregdetail where username='$username' and password='$password' ";
 $result=$conn->query($sql);
    if($result->num_rows>0) 
     {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
       
        header('location:userview.php');
}
   else{
       
echo "<p style='color:red;'>Wrong username or password</p>";
}}

?>
<!DOCTYPE html>
<html>
  <title>User Login</title>
<head>
<form  method="post">
  <style>
.mycss{
color:green;
}
      *
      {
          margin: 0;
          padding: 0;
      }

h1{
    text-align:center;
    color:cadetblue;margin-top: 40px;

 
}   
.login
{
        width: 382px;  
        overflow: hidden;  
        margin: auto;
         margin-bottom: 20px;
          
        padding: 80px;
         border-width: 20px 20px 20px 20px;
 border-style: solid;
  border-color: LightGray;  
         
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



/* Add padding to containers */
.container {
  padding: 0px;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}


h2{
  text-align: center;
}
</style>
</head>
<body>


<h1>Food Wastage Reduction System</h1>
<div class="login">
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>


    <button type="submit" name="userlogin">Login</button>
    <label>
<a href="userForgotPassword.php">Forgot password</a><br><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button><br><br>
  </div>

</div>


</form>
</body>
</html>