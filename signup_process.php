<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "dental_system");
if ($conn) {
    $query = "insert into users (username, password) values ('$username', '$password')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header("location:login_patient.php");
    }
    else
    {
        header("location:patient_signup.php?status=fail");
    }
} else {
    die("Connection failed");
}

mysqli_close($conn);
?>