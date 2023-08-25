<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        nav {
            width: 100%;
            height: 50px;
            background-color: #505d61;
            line-height: 50px;
            padding: 0px 30px;
            position: fixed;
            z-index: 1;
        }

        nav .logo {
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        nav .logo p {
            float: left;
            color: #fff;
            text-transform: uppercase;
        }

        nav ul {
            float: right;
        }

        nav ul li {
            display: inline-block;
            list-style: none;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            text-transform: uppercase;
            padding: 0px 10px;
        }

        nav ul li a:hover {
            color: #c0d96f;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <p>book store</p>
        </div>
        <ul>
            <li><a href="Home.php" class="active">home</a></li>
            <li><a href="Admin_login.php">Admin Login</a></li>
            <li><a href="Registration.php">Register</a></li>
            <li><a href="Login.php">Login</a></li>
        </ul>
    </nav>
</body>

</html>