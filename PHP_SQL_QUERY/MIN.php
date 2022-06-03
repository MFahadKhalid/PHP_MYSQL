<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN</title>
    <style>
        body{
            text-align: center;
            background-color: #343A40;
            color: #F8F9FA;
        }
    </style>
</head>
<body>
    <h1>MIN</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "connecting_my_sql";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT  MIN(id) FROM demo2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["MIN(id)"] . "<br> <br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
</body>
</html>