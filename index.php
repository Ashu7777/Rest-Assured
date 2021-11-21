<?php
  session_start();
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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Custom Css-->
    <link rel="stylesheet" href="app.css">

    <title>REST ASSURED</title>
</head>
<body>
<nav id="mainNavbar" class="navbar navbar-dark bg-dark navbar-expand-md py-0 fixed-top">
        <a href="index.html" class="navbar-brand"><i class="fas fa-university"></i>REST ASSURED</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks" aria-label="Toggle navigation">
            
            <ul class="navbar-nav">
            <?php
               
                if(isset($_SESSION['username'])){
                   #echo 'Hello,' .$_SESSION["username"];
                    echo ' 
                    <li class="nav-item">
                    <a href="accountholders.php" class="nav-link">ACCOUNT HOLDERS</a>
                    </li>

                    <li class="nav-item">
                    <a href="transaction.php" class="nav-link">TRANSACTION</a>
                    </li>

                    <li class="nav-item">
                    <a href="logout.php" class="nav-link">LOGOUT</a>
                    </li>';
                }else{
                    echo ' <li class="nav-item"> <a href="register.php" class="nav-link">REGISTER</a> </li>
                          <li class="nav-item"> <a href="login.php" class="nav-link">LOGIN</a> </li>';
                }
               
            ?> 
            </ul>
            
        </div>
    </nav>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
   
   <script>
        $(function(){
            $(document).scroll(function(){
                var $nav=$("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop()>$nav.height());

            });
        });
    </script>

</body>
</html>