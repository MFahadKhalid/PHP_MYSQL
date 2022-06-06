<?php
    include ("../connection_and_db/connection.php");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $class_id = $_POST['class_id'];
    $email = $_POST['email'];
    $sql = "INSERT into students (first_name,last_name,phone_no,class_id,email) VALUE ('$first_name','$last_name','$phone_no','$class_id','$email')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>