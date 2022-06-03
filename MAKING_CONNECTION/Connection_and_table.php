<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create DB</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE Connecting_my_sql";
        if ($conn->query($sql) === TRUE) {
        echo "Your DataBase has create successfully";
        } else {
        echo "Error to creating your database: " . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>