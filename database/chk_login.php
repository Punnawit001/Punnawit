<?php

//session_start();

require 'db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT 
        *
        FROM 
            users 
        WHERE 
            username = '$username' 
        AND 
            password = '$password'
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)===1) {
    echo "login successful.";
} else  {
    echo "wrong useename or password or phone email.";
}

mysqli_close($conn);