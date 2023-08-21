<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <link href="style_admin.css" rel="stylesheet" type="text/css">

        <style>
            .check{
                border:2px solid black;
            }
        </style>
    </head>

<body>
<?php
    include("Navbar.php");
    session_start();
    include("validate.php");
if (isset($_REQUEST['status'])) {
    if ($_REQUEST['status'] == 'success') {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!!</strong> Doctor added successfully <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else if ($_REQUEST['status'] == 'fail') {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failure!!</strong> Doctor not added  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } 
}
?>
<br>
<h1 align="center" class="myheading">Add Doctor</h1>
<div class="container mt-4">
    <form action="Add_Doctor_action.php" method="get">
        <input type="text" placeholder="Enter Full name" class="form-control input border border-dark" required
            name="tname">
        <br> <br>

        <?php
            $conn=mysqli_connect("localhost","root","","dental_system");
            if($conn)
            {
                $query="select * from dental_service";
                $sql=mysqli_query($conn,$query);
                if($sql)
                {
                echo "<h2>Service</h2>";
                while ($row = mysqli_fetch_array($sql)) {
                    ?>

                            <div class="form-check">
                            <input class="form-check-input check" type="checkbox"  value="<?php echo $row['name']?>" name="service[]" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <h4><?php echo $row['name'] ?><h4>
                            </label>
                            </div>

                        <?php
                }
                }
            }
            else
            {
                die("Connection Failed");
            }
        ?>
        <br><br>
        <input type="submit" class="btn btn-success" name="submit">
    </form>
</div>
</body>
</html>