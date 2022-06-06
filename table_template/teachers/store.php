<?php
    include ("../connection_and_db/connection.php");
    $teacher_name = $_POST['teacher_name'];
    $teacher_last_name = $_POST['teacher_last_name'];
    $phone_no = $_POST['phone_no'];
    $class_id = $_POST['class_id'];
    $sql = "INSERT into teachers (teacher_name,teacher_last_name,phone_no,class_id) VALUE ('$teacher_name','$teacher_last_name','$phone_no','$class_id')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>