<?php
    include ("../connection_and_db/connection.php");
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $class_id = $_POST['class_id'];
    $sql = "UPDATE student_table SET first_name='$first_name', last_name='$last_name', phone_no='$phone_no', email='$email', class_id='$class_id' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>