<?php
session_start(); //session starts here  
include 'Navbar2.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Books</title>
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
        width: 100%;
        padding: 10px;
        text-align: center;
        display: inline-block;
        border-radius: 10px;
        font-size: 16px;
    }

    input[type=file]::file-selector-button {
        border: none;
        padding: 7px;
        border-radius: 10px;
        background-color: #4CAF50;
        transition: 1s;
        color: #fff;
    }

    .btn {
        background-color: #fff;
        border: none;
        padding: 0px;
        width: 100%;
    }
</style>


<body>
    <div class="container">
        <h2>Add Book</h2>
        <form method="POST" action="Add_book.php" enctype="multipart/form-data">

            <input class="btn" type="file" name="image"><br>
            <input placeholder="Title" name="title" type="text" required><br>
            <input placeholder="Description" name="desc" type="text" required><br>
            <input placeholder="Price" name="price" type="text" required><br>
            <div class="button">
                <button type="submit" name="upload">Upload</button>
            </div>
        </form>
    </div>

    <?php
    // database connection
    $conn = mysqli_connect("localhost", "root", "", "bookstore");

    if (isset($_POST['upload'])) {

        // Get name of images
        $id = $_SESSION['email'];
        $Get_image_name = $_FILES['image']['name'];
        $title = $_POST['title'];
        $description = $_POST['desc'];
        $price = $_POST['price'];

        // image Path 
        $image_Path = "images/" . basename($Get_image_name);
        $sql = "INSERT INTO books (user_email, book_image, book_title, book_desc, book_price) VALUES ('$id', '$image_Path', '$title', '$description', '$price')";

        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
            echo "Your Image uploaded successfully";
        } else {
            echo  "Not Insert Image";
        }
    }
    ?>

</body>

</html>