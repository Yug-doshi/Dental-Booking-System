<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "dental_system");
if ($conn) {
    $query = "select * from users where username = '$username' and password = '$password'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        $count_admin = mysqli_num_rows($sql);
        if ($count_admin == 0) {
            header("location:login_patient.php?status=fail");
        } else {
            header("location:Patient_Home.php?status=success");
            $_SESSION['patient_name'] = $username;
        }
    }
} else {
    die("Connection failed");
}

mysqli_close($conn);
?> 