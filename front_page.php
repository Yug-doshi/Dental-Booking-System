<?php
$user = $_GET['loginAs'];
if ($user == "admin") {
    header("location:index.php");
}else {
    header("location:login_patient.php");
}
?>