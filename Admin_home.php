<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href = "style_admin.css" rel = "stylesheet" type = "text/css">
    </head>
<body>
    <?php 
        include("Navbar.php");
        session_start();
        include("validate.php");
        $con = mysqli_connect("localhost","root","","dental_system");
        $query = "select * from dental_service";
        $sql = mysqli_query($con,$query);
        $service_num = mysqli_num_rows($sql);  

        $query2 = "select * from doctor";
        $sql2 = mysqli_query($con,$query2);
        $doctor_num = mysqli_num_rows($sql2);  

        $query3 = "select * from booked_patients";
        $sql3 = mysqli_query($con,$query3);
        $patient_num = mysqli_num_rows($sql3);  
    ?>

    <h1 class = "heading mt-2">Dashboard</h1>

    <div class = "main">
        <a href = "View_alldental.php" style = "text-decoration:none;margin-left:10%;">
        <div class = "cont">
        <img src = "images/dental.png" class = "stud_icon">
        <div class = "box">
            <p class = "info text mt-2">Total Dental Services</p>
            <p class = "info num"><?php echo $service_num?></p>
        </div>
        </div>
        </a>

        <a href = "view_doctor.php" style = "text-decoration:none;margin-left:10%;">
        <div class = "cont2">
        <img src = "images/doctor.png" class = "stud_icon">
        <div class = "box">
            <p class = "info text mt-2">Total Doctors</p>
            <p class = "info num"><?php echo $doctor_num?></p>
        </div>
        </div>
        </a>

        <a href = "View_all_students.php" style = "text-decoration:none;margin-left:10%;">
        <div class = "cont3">
        <img src = "images/examination.png" class = "stud_icon">
        <div class = "box">
            <p class = "info text mt-2">Total Patients</p>
            <p class = "info num"><?php echo $patient_num?></p>
        </div>
        </div>
        </a>
    </div>

    
</body>
</html>

