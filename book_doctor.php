<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dental Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body>
    
    <?php
    @$id = $_REQUEST['id'];
    @$service=$_REQUEST['service'];
    include("Patient_Navbar.php");
    session_start();
    include("validate.php");
    if (isset($_REQUEST['status'])) {
        if ($_REQUEST['status'] == 'success') {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong>Appointment Booked Successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failure!!</strong>Appointment couldnt book <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }
    ?>
    <h1 align="center" class="myheading mt-3">Add Dental Service</h1>
    <div class="container mt-4" style="text-align:center;">
        <form action="book_doctor_action.php" method="post">
            <input type="text" placeholder="Enter Patient name" class="form-control input border border-dark" required
                name="patient_name">
                <br>
            <input type="number" placeholder="Enter Mobile Number" class="form-control input border-dark" required
                name="patient_mobile">
                <br>
            <input type="date" placeholder="Enter Booking Date" class="form-control input border-dark" required
                name="booking_date">
                <br>
            <input type="time" placeholder="Enter Time" class="form-control input border-dark" required
                name="time_service">
                <br>
                <input type="hidden" name="service" value="<?php echo $service; ?>">
                <input type = "hidden" name = "patientid" value = <?php echo $_SESSION['patient_name']; ?>>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-success mt-4" name="submit">
        </form>
    </div>
</body>

</html>