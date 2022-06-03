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
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .color{
            box-shadow: 0px 2px 16px 12px purple;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="container w-100 color bg-light p-5 mt-5">
            <h1 class="text-primary p-3 text-center">Form</h1>
            <form action="">
                <div style="font-family: initial;" class="text-dark row">
                    <div class="col-md-6 mt-5">
                        <label for="FirstName">First Name</label>
                        <input type="text" class="text-light bg-secondary w-100 form-control">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="LastName">Last Name</label>
                        <input type="text" class="text-light bg-secondary w-100 form-control">
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="email">E-mail</label>
                        <input type="text" class="text-light bg-secondary w-100 form-control">
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="Reg-date">Registration-date</label>
                        <input type="text" class="text-light bg-secondary w-100 form-control">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="mt-4 col-md-6">
                        <a href="index.php"><button class="btn btn-outline-danger">Back to Table</button></a>
                    </div>
                    <div class="mt-4 col-md-6">
                        <a href="index.php"><button class="btn btn-outline-success">Save Data</button></a>
                    </div>
                </div>
            </div>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>