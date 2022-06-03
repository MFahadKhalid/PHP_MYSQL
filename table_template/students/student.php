<?php
    include ("../connection_and_db/connection.php");
    $sql = "SELECT * FROM student_table"; 
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Table</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <style>
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-success">
    <div style="background-color: #1A1A1A;">
        <?php include ("../Nav.php") ?>
    </div>
    <div class="container-fluid">
        <div class="m-5 shadow-lg bg-light p-3 container">
            <h1 class="text-center text-danger mb-5">Student Table</h1>
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Class id</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
                <?php
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                    <td><?php echo $row['class_id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']?>"><img src="../assets/img/b_edit.png" alt="b_edit"> Edit</a>&nbsp;
                    <a href="delete.php?id=<?php echo $row['id']?>"><img src="../assets/img/b_drop.png" alt="b_drop"> Delete</a>&nbsp;
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
            <a href="create.php"><button class="mt-5 btn btn-block btn-outline-success">Add Data</button></a>
        </div>
    </div>
    <?php include ("../footer2.php"); ?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>