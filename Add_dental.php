<?php 
        session_start();
        include("validate.php");
    $con = mysqli_connect("localhost","root","","dental_system");

    if($con){
        $service = $_POST['dental_name'];

        $query = "insert into dental_service values('','$service')";
        $sql = mysqli_query($con,$query);

        if($sql){
            header("location:Add_dentalservice.php?status=success");
        }
        else{
            header("location:Add_dentalservice.php?status=fail");
        }
    }
?>