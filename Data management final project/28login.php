<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
    $con = mysqli_connect("localhost","root","","finalproject");
        
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
                        
    if (isset($_POST['G_Email'])) {

        $G_Email = $_POST['G_Email'];
        $Password = $_POST['Password']; //Uses md5 to encrypt
        $rows = 10;                    
        //To prevent injection attacks
        $G_Email = mysqli_real_escape_string($con,$G_Email);
        $Password = mysqli_real_escape_string($con,$Password);
        
        $query = "SELECT * FROM `guest` WHERE G_Email ='$G_Email' and Password =' . md5($Password) . '";

        
        if($result = mysqli_query($con, $query)){
            if (mysqli_num_rows($result)>0) {
                $_SESSION['G_Email'] = $G_Email;
                header("Location: 28index.php");
    
            //If not then try again
            } else {
                echo "<div class='form'>
                        <br/>
                    <h3>Incorrect Email/Password.</h3><br/>
                    <h3>Click <a href='28login.php'>here</a> to try again.</h3>
                    </div>
                    $rows";
                    echo mysqli_error($con);
            }
        }
        
        //If user exists in database
        
            
    
        
    } else {
?>
    <form class="form" method="post">
        <h1>Login to Your Account</h1>
            <input type="text" class="login-input" name="G_Email" placeholder = "Email Address">
            <input type="Password" class="login-input" name="Password" placeholder = "Password">
            <input type="submit" value="Login" name="submit" class="login-button">
        <h3>Don't have an account? Sign up<a href='register.php'> here!</a></h3>
    </form>    
<?php
    }
    
?>
</body>

</html>