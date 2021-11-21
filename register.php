<?php
   include 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  

</head>
<body>
  
<br>
<br>

<div class="container">
  
<h1 class="display-2">REGISTRATION FORM</h1> 
  <form class="Register" action="registration.php" method="post">
     

        
    <div class="form-row">
          <div class="form-group col-md-6">

              <label for="First_Name">First Name</label>
              <input type="text" class="form-control" id="First_Name" name="First_Name" placeholder="First Name">
          
          </div>
      
      
          <div class="form-group col-md-6">
             <label for="Last_Name">Last Name</label>
             <input type="text"  class="form-control"  id="Last_Name" name="Last_Name"  placeholder="Last Name">
          </div>
    </div>

    
    <div class="form-row">
          <div class="form-group col-md-6">
              <label for="Email_ID">Email ID</label>
              <input type="text"  class="form-control" id="Email_ID" name="Email_ID"  placeholder="Email ID">
          
          </div>
      
      
          <div class="form-group col-md-6">
             <label for="Account_No">Account No</label>
             <input type="text" class="form-control" id="Account_No" name="Account_No" placeholder="Account No">
          </div>
    </div>
    
    
    <div class="form-row">
          <div class="form-group col-md-6">
              <label for="Password">Password</label>
              <input type="number"  class="form-control" id="Password" name="Password" placeholder="Password">
          
          </div>
      
      
          <div class="form-group col-md-6">
             <label for="Amount">Amount</label>
             <input type="number" class="form-control" id="Amount" name="Amount" placeholder="Amount"> 
          </div>
    </div>
   
    
    <div class="form-group">
          <label for="Mobile_No">Mobile No</label>
          <input type="text" class="form-control" id="Mobile_No" name="Mobile_No" placeholder="Mobile No">
    </div>
    
    
     




    <div class="form-row">
      <div class="form-group col-lg-2">
          <button type="submit" class="btn btn-primary" class="sendemail">REGISTER</button>
      </div>
      <div class="form-group col-lg-2">
      <a class="btn btn-success" href="login.php" role="button">LOGIN</a>
      </div>
   </div>
  
  </form>
  
</div>
  
  
    
</body>
</html>