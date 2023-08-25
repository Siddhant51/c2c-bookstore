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


        nav .welcome {
            font-size: 15px;

        }

        nav .welcome p {
            padding-left: 15px;
            color: #fff;
        }

        nav .logo {
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        nav .logo p {
            float: left;
            color: #fff;
            word-wrap: break-word;
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
            <p>BOOK STORE</p>
            <!-- <div class="welcome">
                <p> Welcome <?php echo $_SESSION['email'] ?></p>
            </div> -->
        </div>
        <ul>
            <li><a href="add_book.php">Add book</a></li>
            <li><a href="view_book.php">Your Uploads</a></a></li>
            <li><a href="buy_book.php">Buy Books</a></a></li>
            <li><a href="Logout.php">Logout</a></li>
        </ul>
    </nav>
</body>

</html>