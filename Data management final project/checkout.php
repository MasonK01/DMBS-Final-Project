<!DOCTYPE html> 
<html> 
  
<head>
    <title>Checkout</title>
    <style>
        #check {
            margin:auto;
        }
        #summary {
            text-align: center;
            
        }
        h1 {
            text-align: centers;
        }
        .center {
            margin-top: 25px;
            margin-left: auto;
            margin-right: auto;
            outline: none;
            font-weight: bold;
            color: white;
            font-family: "Open Sans", sans-serif;
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
        body{
            background-image: var(--gradient-color);
        }
        td {
            text-align: center;
            padding: 75px;
        }
        .btn-gradient{
            background-image: var(--gradient-color);
            color: white;
            padding: 7px;
        }
        .btn-gradient:hover{
            background-image: var(--gradient-color-alt);
        }
        .form {
    margin: auto;
    margin-top: 25px;
    padding: 25px;
    background: rgb(253, 253, 253);
    border: #279927;
    color: black;
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
        .header{
            width: 100%;
            height:6rem;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--purple-transparent);
            z-index: 999;
        }
        .container{
        width: 100%;
        max-width: 120rem;
        padding: 0 1.5rem;
        margin: 0 auto;
    }
    .nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .nav-list{
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        flex-direction: row;
        justify-content: initial;
        opacity: 1;
        transform: scale(1);
    }
    .hamburger-menu{
    font-size: 2.6rem;
    color: #fff;
    cursor: pointer;
    position: relative;
    z-index: 1500;

}

.hamburger-menu .fa-times{
    display: none;

}

.menu-open .hamburger-menu .fa-times{
    display:block;
}

.nav-link{
        font-size: 1.3rem;
        font-weight: normal;
        transition: color .5s;
    }
    .nav-item:not(:last-child){
    margin-bottom: .5rem;
}


    </style>
</head>

<body>
<?php
                            $con = mysqli_connect("localhost","root","","finalproject");
   
                        if (mysqli_connect_errno()){
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        session_start();
                        
                        if (isset($_POST['email'])) {

                            $email = $_POST['email'];
                            $password = $_POST['password']; //Uses md5 to encrypt
                            
                            //To prevent injection attacks
                            $email = mysqli_real_escape_string($con,$email);
                            $password = mysqli_real_escape_string($con,$password);

                            $query = "SELECT * FROM `clients` WHERE email ='$email'AND password ='" . md5($password) . "'";

                            $result = mysqli_query($con, $query);
                            $rows = mysqli_num_rows($result);

                            //If user exists in database
                            if ($rows == 1) {
                                $_SESSION['email'] = $email;
                                //header("Location: profile.php");

                            //If not then one can create one here
                            } else {
                                echo "<div class='form'>
                                        <br/>
                                    <h3>Incorrect Email/Password.</h3><br/>
                                    <h3>Click <a href='checkout.php'>here</a> to try again.</h3>
                                    </div>";
                            }
                        } else {
                    ?>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html">
                    <img src="images/logo.png" alt="Hotel 28" width = "280" height = "200" style="padding-top: 10px;">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Offers</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">News</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <table class="center">
        <tr>
            <td>
                <div id="summary">
                    <h2>Summary</h2>
                        You have selected <p id="type"></p> room
                        during <p id="bookin"></p> until <p id="bookout"></p><br>
                        Your total today comes out to: $<p id="total"></p><br>
                    </div>
            </td>
            <td>
                <div id="check">
                    <form class="form" method="post" name="login">
                        <h1>Login to Your Account</h1>
                            <input type="text" class="login-input" name="email" placeholder = "Email Address">
                            <input type="password" class="login-input" name="password" placeholder = "Passwoerd">
                            <input type="submit" value="Login" name="submit" class="login-button">
                        <h3>Don't have an account? Sign up<a href='register.php'> here!</a></h3>
                    </form>
                </div>
            </td>
            <td>
                <img src="images/traveler.png" alt="Traveler" width="250" height="400">
            </td>
        </tr>
    </table>

<script>
    function test(){
        var fname = document.getElementById('fName').value;
        var lname = document.getElementById('lName').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('cardNo').value;
        var cardName = document.getElementById('cardName').value;
        var month = document.getElementByName('month');
        var year = document.getElementByName('year');
        var cvv = document.getElementById('cvv').value;

        for(i = 0; i < month.length; i++) { 
            if(month[i].checked){ 
            var monthVAL = month[i].value;
            return monthVAL      
            }
        } 

        for(i = 0; i < year.length; i++) { 
            if(year[i].checked){ 
            var yearVAL = year[i].value;
            return yearVAL      
            }
        }

        document.getElementById("type").innerHTML = + type;
        document.getElementById("bookin").innerHTML = + bookin;
        document.getElementById("bookout").innerHTML = + bookout;
        document.getElementById("total").innerHTML = + totalPrice.toFixed(2);
            

    }

</script>
<?php
    }
?>
</body>

</html>