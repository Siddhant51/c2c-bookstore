<?php
session_start();
include 'Navbar2.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>View Books</title>
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

    .table1 {
        padding-top: 70px;
    }

    table {
        padding: 0px;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
        border: 1px solid;
        table-layout: fixed;
    }

    th {
        background-color: #505d61;
        text-align: center;
        padding: 5px;
        color: #fff;
        border: 1px solid;
    }

    td {
        text-align: center;
        border: 1px solid;
        padding: 5px;
    }
</style>

</html>

<body>
    <div class="table1">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>
                    <h3>Image</h3>
                </th>
                <th>
                    <h3>Title</h3>
                </th>
                <th>
                    <h3>About</h3>
                </th>
                <th>
                    <h3>Price</h3>
                </th>
                <th>
                    <h3>Buy</h3>
                </th>
            </tr>

            <?php

            $mysqli = new mysqli("localhost", "root", "", "bookstore") or die($mysqli->connect_error);

            $table = 'books';
            $result = $mysqli->query("Select * FROM $table") or die($mysqli->error);



            while ($data = $result->fetch_assoc()) {

                if ($data['user_email'] != $_SESSION['email']) {
                    $id1 = $data['book_title'];

                    echo "<tr>";
                    echo "<td>";
                    echo "<img src ='{$data['book_image']}' width='80%'>";
                    echo "</td>";
                    echo "<td>";
                    echo "{$data['book_title']}";
                    echo "</td>";
                    echo "<td>";
                    echo "{$data['book_desc']}";
                    echo "</td>";
                    echo "<td>";
                    echo "{$data['book_price']}";
                    echo "</td>"; ?>
                    <td><a href="payment.php?del=<?php echo $id1 ?>"><button class="btn">Buy</button></a></td>
                    <tr></tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>