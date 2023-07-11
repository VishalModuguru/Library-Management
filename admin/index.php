<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewpoint" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
body{
   background-color:#CFD8DC;
}
.black-background {background-color:#000000;}
.white {color:#ffffff;}

#main-content{
   margin-left:500px;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
   <div class="navbar-header">
   <a class="navbar-brand" href="index.php" >LIBRARY</a>
   </div>
   <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
    <a class="nav-link" href="index.php" style="color:white;">Admin login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../index.php" style="color:white;">User login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../signup.php" style="color:white;">Register</a>
    </li>
   </ul>
   </div>
</nav><br>
<span><marquee>Welcome to the Library</marquee></span><br>
<div class="row">

<!--<div class="col-md-4" id="side_bar"><br><br>
<img src="../img/Readf42f0a15cbfa4f6549dedbb3af2cf.png">
</div>-->
<div class="col-md-4" id="main-content" style="margin-top:100px;">
<h3>Admin Login Form</h3>
<form action="" method="post">
<input type="text" name="email" class="form-control" placeholder="Email" required><br>
<input type="text" name="password" class="form-control" placeholder="Password" required><br>
<button type="submit" name="login" class="btn btn-warning black-background white">Login</button>
</div>
</form>
<?php 
session_start();
if(isset($_POST['login'])){
   $connection=mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,"libdata");
$query = "select * from admins where email = '$_POST[email]'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run)){
   if($row['email'] == $_POST['email']){
      if($row['password'] == $_POST['password']){
         $_SESSION['name']=$row['name'];
         $_SESSION['email']=$row['email'];
         $_SESSION['id']=$row['id'];
         header("Location:admin_dashboard.php");
      }
      else{
         ?>
         <br><br><span class="alert-danger" style="margin-left:800px;">Wrong Password<span>
         <?php
      }
   }
   
}
}
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


