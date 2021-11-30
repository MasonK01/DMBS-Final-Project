<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel 28</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src ="28info.js"></script> 
</head>
<body>
    <?php

    session_start();
    $con = mysqli_connect("localhost","root","","finalproject");
    $con2 = mysqli_connect("localhost","root","","finalproject");

    
    ?>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="28index.html">
                    <img src="./image/logo.png" alt="Hotel 28" width = "280" height = "200" style="padding-top: 10px;">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">

                    <li class="nav-item">
                        <a href="28login.php" class="nav-link">Login</a>
                    </li>

                    <li class="nav-item">
                        <a href="28index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Offers</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="28contact.php" class="nav-link">Contact</a>
                    </li>        
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h2 class="subtitle">
                    </h2>
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Luxury hotels</h2>
                </div>
                <a href="bookingPage.php" class="btn btn-gradient">Book Now
                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>

                </a>
            </div>
        </div>
    </main>
    <?php
    
?>
    <script src="main.js"></script>
</body>
</html>