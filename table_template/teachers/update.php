<?php
    include ("../connection_and_db/connection.php");
    $id = $_POST['id'];
    $teacher_name = $_POST['teacher_name'];
    $teacher_last_name = $_POST['teacher_last_name'];
    $phone_no = $_POST['phone_no'];
    $class_id = $_POST['class_id'];
    $sql = "UPDATE teachers SET teacher_name='$teacher_name', teacher_last_name='$teacher_last_name', phone_no='$phone_no', class_id='$class_id' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>