<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $_REQUEST['service_name']; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</head>

<body>

    <?php

    include("Patient_Navbar.php");
    $con = mysqli_connect("localhost", "root", "", "dental_system");
    $service_name = $_REQUEST['service_name'];

    if ($con) {
        if (isset($_REQUEST['name'])) {
            $name = $_GET['name'];
            $query = "select * from doctor where name like '$name%' and '$service_name' IN (dental_service) and status = 'available'";
            $sql = mysqli_query($con, $query);
        } else {
            $query = "select * from doctor where '$service_name' IN (dental_service) and status = 'available'";
            $sql = mysqli_query($con, $query);
        }
    }
    ?>
    <h1 align="center" style="color:#1d3ef5;">Dental Service:-
        <?php echo $service_name; ?>
        <h1>
            <hr>
            <h1 align="center" class="total text-success mt-3">Total Doctors:
                <?php echo mysqli_num_rows($sql); ?>
            </h1>
            <form action="view_doctor_service.php" align="center">
                <input type="text" placeholder="Enter name of doctor to search:" name="name"
                    class=" form-control w-25 border border-dark mt-4 mb-4" style="margin-left:38vw;text-align:center;">
                <input type="text" hidden value="<?php echo $service_name; ?>" name="service_name"> <br>
                <input type="submit" value="Search" class="btn btn-success" align="center">
            </form>

            <table class="table table-hover table-striped container mt-5">
                <thead class="table-dark">
                    <tr align="center">
                        <th>Name</th>
                        <th>Book</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($sql) {
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr align="center">
                                <td style="text-align:center;font-size:20px;font-weight:bold">
                                    <?php echo $row['name']; ?>
                                </td>
                                <td><a class="btn btn-danger"
                                        href="book_doctor.php?id=<?php echo $row['id']; ?>&service=<?php echo $service_name; ?>">Book</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                </tbody>
            </table>
            <?php
                    } else {
                        die("Could not connect to Database");
                    }
                    ?>
</body>

</html>