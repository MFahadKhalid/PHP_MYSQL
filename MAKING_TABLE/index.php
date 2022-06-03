<?php
    include ("connection.php");

    $sql = "SELECT * FROM myguests";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        a:link {
            text-decoration: none ;
        }
        .img{
            background-image: url("assets/image/Mountains.jpg");
        }
    </style>
</head>
<body class="img">
    <div class="container-fluid">
        <div class="container bg-light mt-5 p-5 shadow-lg">
            <h1 class="text-center text-danger p-5">TABLE OF MYSQL WITH THE HELP OF PHP CODE</h1>
            <table class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>reg_date</th>
                <th>Delete Table row</th>
                <th>Uptade Table row</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['firstname']?></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['reg_date']?></td>
                <td><a href="#">DELETE</a>&nbsp;</td>
                <td><a href="#">UPTADE</a>&nbsp;</td>
            </tr>
            <?php  
               }
            }
            ?>
            </table>
            <div class="mt-5">
                <a href="Form.php"><button class="btn btn-danger">Add More Data On Form</button></a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>