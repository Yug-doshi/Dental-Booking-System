<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body>

    <?php         
        include("Patient_Navbar.php");
        session_start();
        $con = mysqli_connect("localhost","root","","dental_system");
        $id = $_SESSION['patient_name'];
        $query = "select * from booked_patients where Patient_id = '$id' order by booking_date";
        $result = mysqli_query($con,$query);
    ?>

<h1 align = "center" class = "total text-success mt-3">Total Appointments: <?php echo mysqli_num_rows($result);?></h1>


    <table class="table table-hover table-striped container mt-5">
        <thead class="table-dark">
        <tr align="center">
                <th>Dental Service</th>
                <th>Doctor Name</th>
                <th>Booking Date</th>
                <th>Time</th>
                <th>Approve Appointment</th>
        </tr>
        </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_array($result)){
                    $d_id = $row['doctor_id'];
                    $query = "select name from doctor where id = '$d_id' ";
                    $res = mysqli_query($con,$query);

                    $d_row = mysqli_fetch_array($res);
                    ?>
                    <tr>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $row['service']; ?> </td>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $d_row['name']; ?> </td>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $row['booking_date']; ?> </td>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $row['time']; ?> </td>
                    <td align = "center"><a class="btn btn-success"
                        href="approve.php?did=<?php echo $d_id; ?>&pid=<?php echo $row['Patient_Id'];?>">Approve</a>
                    </td>
                    <?php
                }
            ?>
        </tbody>
</body>

</html>