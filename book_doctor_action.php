<?php
    $patient_name=$_POST['patient_name'];
    $patient_mobile=$_POST['patient_mobile'];
    $booking_date=$_POST['booking_date'];
    $time_service=$_POST['time_service'];
    $service=$_POST['service'];
    $id=$_POST['id'];
    $pateint_id = $_POST['patientid'];

    $con=mysqli_connect("localhost","root","","dental_system");
    if($con)
    {
        $query="insert into booked_patients values('$patient_name','$patient_mobile','$booking_date','$time_service','$service','$id', '$pateint_id')";
        $sql=mysqli_query($con,$query);

        $query2 = "update doctor set status = 'booked' where id = '$id'";
        $sql2 = mysqli_query($con,$query2);

        if($sql && $sql2)
        {
            header("location:book_doctor.php?status=success");
        }
    }

    else
    {

    }
?>