<?php include 'navbar1.php' ?>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <!--css file link in bootstrap folder-->
    <title>View Users</title>
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

    .table1 h2 {
        color: #505d61;
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
        word-wrap: break-word;
    }
</style>

<body>


    <div class="table1">
        <h2 align="center">All the Users</h2>
        <table class="table table-bordered table-hover table-striped">
            <tr>

                <th>User Id</th>
                <th>User Name</th>
                <th>User E-mail</th>
                <th>Delete User</th>
            </tr>

            <?php
            include("db_conection.php");
            $view_users_query = "select * from users"; //select query for viewing users.  
            $run = mysqli_query($dbcon, $view_users_query); //here run the sql query.  

            while ($row = mysqli_fetch_array($run)) //while look to fetch the result and store in a array $row.  
            {
                $user_id = $row[0];
                $user_name = $row[1];
                $user_email = $row[3];


            ?>

                <tr>
                    <!--here showing results in the table -->
                    <td><?php echo $user_id;  ?></td>
                    <td><?php echo $user_name;  ?></td>
                    <td><?php echo $user_email;  ?></td>
                    <td><a href=" delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>
                    <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

            <?php } ?>

        </table>
    </div>
    </div>
</body>

</html>