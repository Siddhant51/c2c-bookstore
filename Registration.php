<?php
include 'Navbar.php';
?>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
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
        <h2>Registration</h2>
        <form role="form" method="post" action="registration.php">

            <input class="form-control" placeholder="Username" name="name" type="text" required><br>

            <input class="form-control" placeholder="E-mail" name="email" type="email" required><br>

            <input class="form-control" placeholder="Password" name="pass" type="password" value="" required><br>

            <div class="button">
                <button type="submit" value="register" name="register">Register</button>
            </div>

        </form>
        <h4>Already registered ?</h4>
        <p><a href="login.php">Login here</a></p>
    </div>

</body>

</html>

<?php

include("db_conection.php"); //make connection here  
if (isset($_POST['register'])) {
    $user_name = $_POST['name']; //here getting result from the post array after submitting the form.  
    $user_pass = $_POST['pass']; //same  
    $user_email = $_POST['email']; //same  

    //here query check weather if user already registered so can't register again.  
    $check_email_query = "select * from users WHERE user_email='$user_email'";
    $run_query = mysqli_query($dbcon, $check_email_query);

    if (mysqli_num_rows($run_query) > 0) {
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
        exit();
    }
    //insert the user into the database.  
    $insert_user = "insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if (mysqli_query($dbcon, $insert_user)) {
        echo "<script>window.open('login.php','_self')</script>";
    }
}
?>