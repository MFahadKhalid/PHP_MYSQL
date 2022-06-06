<?php
    include ("../connection_and_db/connection.php");
    $id = $_POST['id'];
    $class_name = $_POST['class_name'];
    $room_no = $_POST['room_no'];
    $building_no = $_POST['building_no'];
    $sql = "UPDATE classes SET class_name='$class_name', room_no='$room_no', building_no='$building_no' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>