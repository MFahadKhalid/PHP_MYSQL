<?php
    include ("../connection_and_db/connection.php");
    $class_name = $_POST['class_name'];
    $room_no = $_POST['room_no'];
    $building_no = $_POST['building_no'];
    $sql = "INSERT into classes (class_name,room_no,building_no) VALUE ('$class_name','$room_no','$building_no')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>