<?php
$hostname = "localhost";
$uname = "root";
$password = "";
$database = "dental_system";
session_start();
include("validate.php");

$con = mysqli_connect($hostname, $uname, $password, $database);

if($con)
{
    $tname=$_GET['tname'];
    $service=$_GET['service'];
    $id = substr(uniqid('',true),0,10);
    $status = 'available';

    $service = implode(',',$service);

    $query = "insert into doctor values('$id', '$tname', '$service', '$status')";
    $sql = mysqli_query($con,$query);

    if($sql){
        header("location:Add_Doctor.php?status=success");
    }
    else{
        header("location:Add_Doctor.php?status=fail");
    }

    mysqli_close($con);

}
?>