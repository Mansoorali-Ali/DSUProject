<?php include 'Db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="icon" href="logo.jpg">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form class="form-group" action="#" method="post">
  <div class="container">
    <h2>Sign up form</h2>
    
      <div class="row">
        <input type="text" name="name" class="form-control col-lg-6" placeholder="Name" required="">  
      </div>
      <div class="row">
        <input type="email" name="mail" class="form-control col-lg-6" placeholder="Email" required="">  
      </div>
      <div class="row">
        <input type="Password" name="Pass" class="form-control col-lg-6" placeholder="Password" required="">  
      </div>
      <div class="row">
        <input type="password" name="Rpass" class="form-control col-lg-6" placeholder="Conform Password" required="">  
      </div>
      <div class="row">
        <input type="submit" name="login" class="btn btn-success col-lg-6">
      </div>
   
  </div>
   </form>
  <?php 
    if (isset($_POST['submit'])) {
      $Name =$_POST['Name'];
      $Email =$_POST['mail'];
      $Password =$_POST['Pass'];
      $ConformPassword =$_POST['Rpass'];
      Db:: Signup($Name,$Email,$Password,$ConformPassword);

    
    }


   ?>



</body>
</html>
