<?php
   include 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  
 
  
</head>
<body>


<br>
<br>

<div class="container">
  
<h1 class="display-2">LOGIN FORM</h1> 
  <form class="login" action="validation.php" method="post">
     

      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="Account_No">Account No</label>
            <input type="text"  class="form-control" id="Account_No" name="Account_No" placeholder="Account No">
          </div>
      
      
          <div class="form-group col-md-6">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" placeholder="Password">
          </div>
    </div>
    
      <div class="form-group ">
          <label for="Email_ID">Email ID</label>
          <input type="text" class="form-control" id="Email_ID" name="Email_ID" placeholder="Email ID">
      </div>
    <div class="form-row">
      <div class="form-group col-lg-1">
          <button type="submit" class="btn btn-primary">LOGIN</button>
      </div>
      <div class="form-group col-lg-1">
      <a class="btn btn-success" href="register.php" role="button">REGISTER</a>
      </div>
   </div>
  
  </form>
  
</div>


            <!-- <a href="register.php" class="card-link">REGISTER</a> -->
            <!--<a href="#" class="card-link">Another link</a>-->




</body>
</html>