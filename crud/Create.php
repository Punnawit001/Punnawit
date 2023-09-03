<?php

require_once '../database/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];

$sql = "INSERT INTO
        users
            (username,password,phone,email)
            VALUES
            ('$username','$password','$phone', '$email')
            ";
echo $sql;
if (mysqli_query($conn,$sql)) {
    header("Location: ../admin/userShow.php");
    echo "New record created successfully.";
} else {
    echo "Error" . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);