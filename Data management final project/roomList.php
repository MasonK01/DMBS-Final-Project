<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>Room List</title>
  <link rel="stylesheet" href="styles2.css">
  <script type="text/javascript" src ="28info.js"></script>
</head>

<body>
  <?php
    session_start();
  ?>
  <header class="header">
    <div class="container">
      <nav class="nav">
        <a href="28index.php" class="logo">
          <img src="./image/logo.png" alt="Hotel 28" width = "280" height = "200" style="padding-top: 10px; padding-left: 150px">
        </a>
        <div class="menu-words">
          <a href="28login.php" >Login</a>
          <a href="28index.php" >Home</a>
          <a href="aboutus.php" >About</a>
          <a href="28contact.php" >Contact</a>
      </nav>

    </div> 
  </header>
  ...
  <!--Top Picture section-->
  <div style="background-image: url('https://glampinghub.com/blog/wp-content/uploads/2019/05/amazing-beaches-usa-1280x720.jpg');
background-size: cover; height:480px; padding-top: 200px; text-align: center;">
    <h1 style="font-size:100px; color:white; margin:10px;" id="destinationin">
  <?php

    $destination = $_SESSION['destination'];
    echo "Searching " . $destination;
  ?>
  </h1>
    <h1 style="font-size:100px; color:white; margin:10px;">Luxury Rooms</h1>
    <p style="font-size:30px; color: white;"><em>You're only a couple clicks away from your beach stay</em></p>

  </div>

  <!--Room King Balcony-->
  <div style="background-image: url(./image/room_king_balcony.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">King Suite with Balcony</h1>
    <p class="room-font"><em>Room # 501</em></p>
    <p class="room-font"><em>Starting from $299.99 per night</em></p>
    <a href="1roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>

  <!--Room King no balcony-->
  <div style="background-image: url(./image/room_king.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">King Suite no Balcony</h1>
    <p class="room-font"><em>Room # 507</em></p>
    <p class="room-font"><em>Starting from $249.99 per night</em></p>
    <a href="2roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>

  <!--Room Double Queen Balcony-->
  <div style="background-image: url(./image/room_queen_double_balcony.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">Two bed Queen Suite with Balcony</h1>
    <p class="room-font"><em>Room # 236</em></p>
    <p class="room-font"><em>Starting from $349.99 per night</em></p>
    <a href="3roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>

  <!--Room Double Queen no balcony-->
  <div style="background-image: url(./image/room_queen_double.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">Two bed Queen Suite no Balcony</h1>
    <p class="room-font"><em>Room # 403</em></p>
    <p class="room-font"><em>Starting from $299.99 per night</em></p>
    <a href="3roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>

  <!--Room Queen Balcony-->
  <div style="background-image: url(./image/room_queen_balcony.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">Queen Suite with Balcony</h1>
    <p class="room-font"><em>Room # 702</em></p>
    <p class="room-font"><em>Starting from $239.99 per night</em></p>
    <a href="3roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>

  <!--Room Queen no balcony-->
  <div style="background-image: url(./image/room_queen_2.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">Queen Suite no Balcony</h1>
    <p class="room-font"><em>Room # 709</em></p>
    <p class="room-font"><em>Starting from $199.99 per night</em></p>
    <a href="3roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>
  <!--Penthouse room-->
  <div style="background-image: url(./image/room_penthouse.jpg);
background-size: cover; height:480px; padding-top: 80px; text-align: center;">

    <h1 class="room-titles">Penthouse</h1>
    <p class="room-font"><em>Room #1</em></p>
    <p class="room-font"><em>Starting from $1899.99 per night</em></p>
    <a href="3roomselected.php" class="btn btn-gradient">
      View Room
      <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
    </a>
  </div>


</body>

</html>