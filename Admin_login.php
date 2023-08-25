<?php
include 'Navbar.php';
?>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Admin Login</title>
</head>
<style>
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
        padding-bottom: 10px;
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
        <h2>Admin Login</h2>
        <form role="form" method="post" action="admin_login.php">

            <input class="form-control" placeholder="Admin Name" name="admin_name" type="text" required><br>

            <input class="form-control" placeholder="Admin Password" name="admin_pass" type="password" value="" required><br>

            <div class="button">
                <button type="submit" value="login" name="admin_login">Login</button>
            </div>

        </form>
    </div>
</body>

</html>

<?php
include("db_conection.php");

if (isset($_POST['admin_login'])) //this will tell us what to do if some data has been post through form with button.  
{
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];

    $admin_query = "select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query = mysqli_query($dbcon, $admin_query);

    if (mysqli_num_rows($run_query) > 0) {

        echo "<script>window.open('view_users.php','_self')</script>";
    } else {
        echo "<script>alert('Admin Details are incorrect..!')</script>";
    }
}

?>