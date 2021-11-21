<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Custom Css-->
    <link rel="stylesheet" href="app.css">

    <style>
      #card{
        background-color:#ADD8E6;
        width: 18rem;
        border-style:round;
      }

      #transaction{
        padding:105px 300px 105px 300px;

        
      }
      
    
     
    </style>


</head>
<body>
<?php require 'index.php' ?>
    <div class="container" id="transaction">


    <div class="card" id="card">
        <div class="card-body">
          <h5 class="card-title">Make A Transaction</h5>
          
          <div class="card-text">
              <form action="transactionhistory.php" method="post">
                  
                  <label for="First_Name">First Name</label>
                  <input type="text" id="First_Name" name="First_Name" placeholder="Receiver's Name">
                  <br>
                  <br>
                  <label for="Account_No">Account No</label>
                  <input type="number" id="Account_No" name="Account_No" placeholder="Enter Receiver's accountno">
                  <br>
                  <br>
                  <label for="Amount">Amount</label>
                  <input type="number" id="Amount" name="Amount" placeholder="Enter amount to be transferred">
                  <br>
                  <br>
                  <label for="Email_ID">Email ID</label>
                  <input type="text" id="Email_ID" name="Email_ID" placeholder="Enter Receiver's EmailId">
                  <br>
                  <br>
                  
                  <input type="submit" name="sendemail"class="btn btn-primary">


                  

              </form>
            <a href="register.php" class="card-link">REGISTER</a>
            <a href="login.php" class="card-link">LOGIN</a>

          </div>
        </div>
      </div>
    </div>
    
</body>
</html>