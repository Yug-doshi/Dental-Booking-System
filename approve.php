<?php 
    $con = mysqli_connect("localhost", "root", "", "dental_system");

    $did = $_REQUEST['did'];
    $pid = $_REQUEST['pid'];

    $query = "update doctor set status = 'available' where id = '$did'";
    $sql = mysqli_query($con,$query);

    $query2 = "delete from booked_patients where doctor_id = '$did' and Patient_id = '$pid'";
    $sql2 = mysqli_query($con,$query2);

    if($sql){
        header("location: view_all_appointment.php");
    }
?>