<html lang="en">

<head>
  <title>Travelix</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="styles3.css">
  <script src="javascript.js"></script>
</head>

<body>
<?php
    session_start();
    $email = $_SESSION['email'];
    $con2 = mysqli_connect("localhost","root","","finalproject");

    $update = "UPDATE rooms SET details='507', price='249' WHERE client='$email'";

    mysqli_query($con2, $update);

    $sql = "SELECT `checkin`,`checkout`,`adults`,`children` FROM `rooms` WHERE client = '$email'";
                $retval = mysqli_query( $con2, $sql );

            while($row = mysqli_fetch_assoc($retval)) {
                $info1 = "Checkin: " . $row["checkin"];
                $info2 = "Checkout: " . $row["checkout"];
                $info3 = "Adults: " . $row["adults"];
                $info4 = "Children: " . $row["children"];
                    }
?>
  <header class="header">
      <div class="container">
          <nav class="nav">
              <a href="28index.php"class="logo">
                  <img src="./image/logo.png" alt="Hotel 28" >
              </a>
              <div class="hamburger-menu">
                  <i class="fas fa-bars"></i>
                  <i class="fas fa-times"></i>
              </div>
              <ul class="nav-list">
                  <li class="nav-item">
                      <a href="login.php" class="nav-link">Login</a>
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

  <section class="roomdisplay">
    <div class="container">
      <h5 class="section-head">
        <span class="heading">Room Details</span>
        <span class="sub-heading">Hurry up to reserve now!</span>
      </h5>
      <div class ="roomdisplay-content">
        <div class ="roomdisplay-content-picture">
          <img src="./image/room_king.jpg" width="1150px">
        </div>
        <div class="roomdisplay-content-description">
          <p class="roomdisplay-content-title">Room Details: </p>
          <p class="roomdisplay-content-details">Two bed Queen Suite with Balcony: Room #507</p>
          <p class="roomdisplay-content-details"><?php echo $info1;?></p>
          <p class="roomdisplay-content-details"><?php echo $info2;?></p>
          <p class="roomdisplay-content-details">Room(s): 1</p>
          <p class="roomdisplay-content-details"><?php echo $info3;?></p>
          <p class="roomdisplay-content-details"><?php echo $info4;?></p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="roomdisplay-content">
        <table class="roomdisplay-content-table">
          <tr>
            <th>Room Features</th>
            <th>Bathroom</th>
            <th>Check-In</th>
          </tr>
          <tr>
            <td class="roomdisplay-content-table-column1">
              <form class="roomdisplay-roomfeaturesform" method="POST">
                <input type="radio" id="crib" name="roomFeatures" value="5">
                <label for="crib">Crib or Pack and Play</label><br>
                <input type="radio" id="rollawayBed" name="roomFeatures" value="6">
                <label for="rollawayBed">Rollaway Bed</label><br>
                <input type="radio" id="foamPillows" name="roomFeatures" value="7">
                <label for="foamPillows">Foam Pillows</label><br>
                <input type="radio" id="extraFoamPillows" name="roomFeatures" value="8">
                <label for="extraFoamPillows">Extra Foam Pillows</label><br>
                <input type="radio" id="extraFeatherPillows" name="roomFeatures" value="9">
                <label for="extraFeatherPillows">Extra Feather Pillows</label><br>
                <input type="radio" id="featherFreeRoom" name="roomFeatures" value="10">
                <label for="featherFreeRoom">Feather Free Room</label><br>
              </form>
            </td>
            <td class="roomdisplay-content-table-column2">
              <form class="roomdisplay-bathroomfeaturesform" method="POST">
                <input type="radio" id="extraTowels" name="bathroomFeatures" value="20">
                <label for="extraTowels">Extra Towels</label><br>
              </form>
            </td>
            <td class="roomdisplay-content-table-column3">
              <form class="roomdisplay-checkinfeaturesform" method="POST">
                <input type="radio" id="earlyCheckIn" name="checkInFeatures" value="20">
                <label for="earlyCheckIn">Early check-in</label><br>
              </form>
            </td>
          </tr>
        </table>
      </div>
      <h5 class="section-head">
        <span class="pricingPadding">
          <span class="heading">Pricing</span>
        </span>
      </h5>
      <div class="container">
        <form class="pricingForm">
          <div class="sub-heading" id="subtotal"></div>
          <div class="sub-heading" id="tax"></div>
          <p class="sub-heading" >_________________</p><br>
          <div class="sub-heading" id="total"></div><p class="sub-heading" > + $249/night</p>
          <button class="btn form btn-purple" type="button" onclick="getprice()">See Cost</button>
          <a href="success.php" class="btn btn-gradient">
                  Purchase
            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
          </a>
        </form>
      </div>
    </div>
  </section>
  <section class="cancellationpolicy">
    <div class="container">
      <h5 class="section-head">
        <span class="heading">Hotel 28 Cancellation Policy</span>
        <span class="sub-heading">
          <span class="sub-sub-heading">
            You may cancel your reservation for no charge before 11:59 PM local hotel time 1 day before arrival. Please note that we will assess a fee of 113.99 CAD if you must cancel after this deadline.
          </span>
        </span>
      </h5>
    </div>
  </section>
  <footer class="footer">
   <div class="container">
      <div class="footer-content">
        <div class="footer-content-brand">
          <a href="index.html" class="logo">
            <img class="logo-image" src="./image/logo.png" alt="">
          </a>
        </div>
        <div class="soical-media-wrap">
          <h4 class="footer-heading">Follow Us</h4>
          <div class="soical-media">
            <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="sm-link"><i class="fab fa-pinterest"></i></a>
            <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
