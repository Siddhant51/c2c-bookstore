<?php
session_start(); //session starts here  
include 'Navbar.php';
?>

<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');

    * {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #DCDCDC;
    }

    .container {
        padding-left: 5px;
        padding-right: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #505d61;
        border-radius: 15px;
    }

    input {
        width: 400px;
        padding: 3px;
        font-style: italic;
        border-radius: 10px;
        border-color: white
    }


    h2 {
        text-align: center;
        padding: 10px;
        color: #fff;
    }

    h4 {
        text-align: center;
        padding: 5px;
        color: #fff;
    }

    p {
        text-align: center;
        color: #fff;
    }

    .button {
        padding-top: 9px;
    }

    button {
        background-color: #4CAF50;
        border: none;
        color: white;
        width: 400px;
        padding: 10px;
        text-align: center;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }
</style>

<body>

    <div class="container">
        <h2>Sign In</h2>
        <form role="form" method="post" action="login.php">

            <input class="form-control" placeholder="E-mail" name="email" type="email" required><br>

            <input class="form-control" placeholder="Password" name="pass" type="password" value="" required><br>

            <div class="button">
                <button type="submit" value="login" name="login">Login</button>
            </div>

        </form>
        <h4>Not registered yet?</h4>
        <p><a href="Registration.php">Register here</a></p>
    </div>
</body>

</html>

<?php

include("db_conection.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pass = $_POST['pass'];

    $check_user = "select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run = mysqli_query($dbcon, $check_user);

    if (mysqli_num_rows($run)) {
        echo "<script>window.open('Buy_book.php','_self')</script>";

        $_SESSION['email'] = $user_email; //here session is used and value of $user_email store in $_SESSION.  

    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>