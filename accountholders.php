<?php

session_start();


$dbhost = 'localhost';
$dbname = 'bank_details';
$dbusername = 'root';
$dbpass = '';
$conn = mysqli_connect("localhost", "root", "", "bank_details");
 //check connection
 if(!$conn){
   die('Could not Connect My Sql:'.mysql_error());
}

// SQL query to select data from database
$sql = "SELECT * FROM registration ";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Google Font-->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Custom Css-->
    <link rel="stylesheet" href="app.css">

    <title>Transaction</title>
</head>
<body>

    <?php require 'index.php' ?>
    
    

    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

    
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">EmailID</th>
                <th scope="col">AccountNo</th>
                <!-- <th scope="col">password</th> -->
                <!-- <th scope="col">Amount</th> -->
                <th scope="col">MobileNo</th>

            </tr>
        </thead>

        <?php
            while($rows=$result->fetch_assoc())
            {
        ?>
            <tbody>
               <tr>
                
                  <td><?php echo $rows['ID']; ?> </td>
                  <td><?php echo $rows['FirstName']; ?> </td>
                  <td><?php echo $rows['LastName']; ?> </td>
                  <td><?php echo $rows['EmailID']; ?> </td>
                  <td><?php echo $rows['AccountNo']; ?> </td>
                  <!-- <td><?php echo $rows['password']; ?> </td> -->
                  <!-- <td><?php echo $rows['Amount']; ?> </td> -->
                  <td><?php echo $rows['MobileNo']; ?> </td>
                  

                </tr>
            </tbody>

        <?php
            }
        ?>

    </table> 

    <a class="btn btn-primary" href="transaction.php" role="button">DO A TRANSACTION</a>



</body>
</html>