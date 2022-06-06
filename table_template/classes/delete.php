<?php
    include ("../connection_and_db/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM classes WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>