<?php
session_start();
?>
<?php
if(!isset($_SESSION['username'])){


header('location:userLogin.php');
}

?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Donate Food</title>

</head>
<body class="bg-dark">
<h1 class="text-center mt-4 text-info">Donate some food Here</h1>
<div class="container mt-3 mb-2 border border-dark bg-secondary" style="width:750px">
<form class="pt-5 pb-3"  action="foodinsert.php" method="post">
  <div class="form-row pl-2">
    <div class="form-group col-md-6 text-info">
      <label for="fooddetail1">Enter the food detail of food1</label>
      <input type="text" class="form-control" id="fooddetail1" name="fooddetail1" placeholder="Food detail of food1" required>
    </div>
    <div class="form-group col-md-6">
      <label for="quantity1">Quantity</label>
      <input type="text" class="form-control" id="quantity1" name="quantity1" placeholder="Enter quantity" required>
    </div>
  </div>
  <div class="form-row pl-2 ">
    <div class="form-group col-md-6 text-warning">
      <label for="fooddetail2">Enter the food detail of food2</label>
      <input type="text" class="form-control" id="fooddetail2" name="fooddetail2" placeholder="Food detail of food2">
    </div>
    <div class="form-group col-md-6">
      <label for="quantity2">Quantity</label>
      <input type="text" class="form-control" id="quantity2" name="quantity2" placeholder="Enter quantity">
    </div>
  <div class="form-row pl-2 ">
    <div class="form-group col-md-6 text-success">
      <label for="fooddetail3">Enter the food detail of food3</label>
      <input type="text" class="form-control" id="fooddetail3"name="fooddetail3" placeholder="Food detail of food3">
    </div>
    <div class="form-group col-md-6">
      <label for="quantity3">Quantity</label>
      <input type="text" class="form-control" id="quantity3" name="quantity3" placeholder="Enter quantity">
    </div>
  <div class="form-row pl-2 ">
    <div class="form-group col-md-6 text-info">
      <label for="fooddetail4">Enter the food detail of food4</label>
      <input type="text" class="form-control" id="fooddetail4" name="fooddetail4" placeholder="Food detail of food4">
    </div>
    <div class="form-group col-md-6">
      <label for="quantity4">Quantity</label>
      <input type="text" class="form-control" id="quantity4" name="quantity4" placeholder="Enter quantity">
    </div>
  <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Add some extra food</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="extrafood"></textarea>
  </div>
   <div class="form-group col-md-12">
      <label for="inputState">Organizer</label>
      <select id="inputState" class="form-control" name="organizer" required>
       
        <option value="organizer1" >Organizer 1</option>
        <option value="organizer2">Organizer 2</option>
        <option value="organizer3">Organizer 3</option>
        <option value="organizer4">Organizer 4</option>
        <option value="organizer5">Organizer 5</option>

      </select>
    </div>
  <div class="form-group col-md-12">
      <label for="date">Quantity</label>
      <input type="date" class="form-control" id="date" name="date" placeholder="Enter quantity">
    </div>

 <div class="from-group" style="margin-top:10px"> 
<input class="btn btn-primary" type="submit" value="Submit">
<a class="btn btn-primary" href="userview.php" role="button">Back</a>
</div>





</form>

</div>



</body>
</html>