<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <style>
         body{
            background-image: var(--gradient-color);
        }
        :root {
            --dark-color: #2d2c2c;
            --purple-solid: #350a4f;
            --purple-transparent: rgba(53, 10, 79, .7);
            --purple-transparent-alt: rgba(53, 10, 79, .5);
            --purple-light: #8f50fb;
            --yellow-solid: #fa9e2c;
            --gradient-color: linear-gradient(to right, var(--yellow-solid), var(--purple-light));
            --gradient-color-alt: linear-gradient(to right, var(--purple-light), var(--yellow-solid));
        }
        .form {
            margin: auto;
            width: 500px;
            margin-top: 25px;
            margin-bottom: 25px;
            padding: 25px;
            background: rgb(253, 253, 253);
            border: #279927;
        }
        .form input{
            margin-left: 10%;
        }
        h1{
            color: rgb(0, 0, 0);
            font-size: 25px;
            font-weight: 300;
            text-align: center;
        }
        h3 {
            font-weight: normal;
            text-align: center;
        }
        .login-button {
            color: #fff;
            background: #279927;
            border: 0;
            outline: 0;
            width: 80%;
            height: 50px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }
        .login-input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 25px;
            width: calc(80% - 23px);
            align-items: center;
        }
    </style>
</head>
<body>
<?php
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"finalproject");
    if (mysqli_connect_errno()||!$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    if (isset($_POST['destination'])) {
        
        $destination = $_POST['destination'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $roomtype = $_POST['roomtype'];
        $G_Email = $_SESSION['G_Email'];
            
             
            
            //To prevent injection attacks
        $destination = mysqli_real_escape_string($con,$destination);
        $checkin = mysqli_real_escape_string($con,$checkin);
        $checkout = mysqli_real_escape_string($con,$checkout);
        $roomtype = mysqli_real_escape_string($con,$roomtype);

        
        
        $link = "SELECT * FROM 'reservations'";
        if ($result=mysqli_query($con,$link)) {
            $rowcount=mysqli_num_rows($result);
        }
           
        

        $query = "INSERT into `reservations` (Reservation_Num, G_Email, Room_Type, HID, Date in, Date out) VALUES ('$rowcount'+1,'$G_Email','$roomtype', '$destination', '$checkin', '$checkout')";
            
        if(mysqli_query($con, $query)){
            echo "<div class='form'>
            <h3>Data Inserted</h3><br/>
            <h3 class='link'>Click here to <a href='28login.php'>Login</a></h3>
            </div>";
        }else{
            echo 'Data not inserted';
            echo mysqli_error($con);
        }
            
    }else{
    
?>
    <form action="" class="form" method="post">
    <h1>Make your hotel 28 booking</h1>
        <div class="input-group">
            <label for="adults" class="input-lable">Destination</label>
            <select class="options" name ="hotel" id="hotel">
                <option value="1">Hilton</option>
                <option value="2">Fairmont</option>
                <option value="3">Chelsea</option>
                <option value="4">Monte Carlo</option>
                <option value="5">Westin</option>
                <option value="6">Monte Carlo</option>

            </select>
        </div>
        <div class="input-group">
            <label for="Check-in" class="input-lable">Check in</label>
            <input type="date" class="input" name ="checkin" id="checkin" />
        </div>
        <div class="input-group">
            <label for="Check-out" class="input-lable">Check out</label>
            <input type="date" class="input" name ="checkout" id="checkout" />
        </div>
        <div class="input-group">
            <label for="adults" class="input-lable">Room Type</label>
            <select class="options" name ="roomtype" id="roomtype">
                <option value="Single">Single</option>
                <option value="Twin">Twin</option>
                <option value="Double">Double</option>
                <option value="King">King</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Place Booking" class="login-button">
    </form>
<?php
    }
?>
</body>
</html>