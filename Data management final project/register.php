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
    $rowcount=1;
    $num=0;
    
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"finalproject");
    if (mysqli_connect_errno()||!$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    

    if (isset($_REQUEST['G_Email'])) {
        
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $G_Email = $_POST['G_Email'];
        $password = $_POST['password']; //Uses md5 to encrypt
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        //To prevent injection attacks
        $fName = mysqli_real_escape_string($con,$fName);
        $lName = mysqli_real_escape_string($con,$lName);
        $G_Email = mysqli_real_escape_string($con,$G_Email);
        $password = mysqli_real_escape_string($con,$password); //Uses md5 to encrypt
        $phone = mysqli_real_escape_string($con,$phone);
        $address = mysqli_real_escape_string($con,$address);

        
        $s = "SELECT * FROM `guest` WHERE G_Email='$G_Email'";
        if ($result2=mysqli_query($con,$s))
        {
            $num = mysqli_num_rows($result2);
            $link = "SELECT * FROM guest";
            if ($result=mysqli_query($con,$link)) {
                $rowcount=mysqli_num_rows($result);
            }
        }   
        

        //duplicate user
        if ($num == 1) {
            echo "<div class='form'>
                  <h3>Email already in database. <h3>
                  <p class='link'>Click <a href='register.php'>here</a> to try again.</p>
                  </div>";

        //create user
        } else {
            $query = "INSERT INTO guest (Guest_ID, First_Name, Last_Name, G_Email, Password, Phone, Address) VALUES ('$rowcount'+1,'$fName','$lName','$G_Email', ' . md5($password) . ', '$phone', '$address')";
            
            if(mysqli_query($con, $query)){
                echo "<div class='form'>
                <h3>You have successfully registered!</h3><br/>
                <h3 class='link'>Click here to <a href='28login.php'>Login</a></h3>
                </div>";
            }else{
                echo 'Data not inserted';
                echo mysqli_error($con);
            }
            
        }
    } else {
?>
    <form class="form" method="post">
        <h1>Register for your Hotel 28 Account</h1>
            <input type="text" class="login-input" name="fName" placeholder = "First Name" required >
            <input type="text" class="login-input" name="lName" placeholder = "Last Name" required>
            <input type="text" class="login-input" name="G_Email" placeholder = "G_Email Address" required>
            <input type="password" class="login-input" name="password" placeholder = "Password" required>
            <input type="text" class="login-input" name="phone" placeholder = "Phone Number" required>
            <input type="text" class="login-input" name="address" placeholder = "Home Address1" required>
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>
<?php
    }
?>
</body>
</html>