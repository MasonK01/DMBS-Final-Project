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

            <div class='form'>
            <h3>Congratulations, <?php 
            session_start();
            $con = mysqli_connect("localhost","root","","finalproject");
            $G_Email = $_SESSION['G_Email'];
            $sql = "SELECT `fName` FROM `clients` WHERE G_Email = '$G_Email'";
                $retval = mysqli_query( $con, $sql );

            while($row = mysqli_fetch_assoc($retval)) {
                $name = $row["fName"];
                    }

            $update = "UPDATE rooms SET paid='TRUE' WHERE client='$G_Email'";

            mysqli_query($con, $update);

            echo $name . "!";
            ?></h3>
            <h3>You have successfully booked your hotel.</h3>
            <h3>Check your G_Email for your receipt.</h3><br>
            <h3 class='link'>Click <a href='28index.php'>here</a> to return to the homepage</h3>
            </div>"

</body>
</html>