<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="fa/css/svg-with-js.css">
    <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="navigation-bar">
            <div class="container">
                <!-- insert logo -->
                <div class="logo">
                   <a href="index.php" ><img src="images/logo.png" alt="logo" ></a>
                </div>
               <div class="search-area">
               <form action="" method="post">
                    <input type="text" name="search_box" class="search_box" placeholder="search">
                    <button class="search_btn btn btn-success"><i class="fas fa-search"></i></button>
                </form>
               </div>
               <!-- user menu -->
               <div class="user-menu">
                   <ul>
                   <?php

                        if(isset($_SESSION['username'])){
                        echo '<li><a href="orders.php">My order</a></li>';
                        echo '<li><a href="logout.php">Log Out</a></li>';
                        }
                        else{
                        echo '<li class="active"><a href="login.php">Log In</a></li>';
                        echo '<li><a href="register.php">Register</a></li>';
                        }
                        ?>
                       <li><a href="cart.php">Cart<i class="fas fa-shopping-cart"></i></a></li>
                   </ul>
               </div>
            </div>
        </div>