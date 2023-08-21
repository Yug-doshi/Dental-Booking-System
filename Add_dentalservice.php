<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dental Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("Navbar.php");
            session_start();
            include("validate.php");
    if(isset($_REQUEST['status'])){
        if($_REQUEST['status'] == 'success'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> Student added successfully <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failure!!</strong> Student not added  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    }
    ?>
    <h1 align = "center" class = "myheading mt-3">Add Dental Service</h1>
    <div class = "container mt-4" style = "text-align:center;">
        <form action = "Add_dental.php" method = "post">
            <input type = "text" placeholder = "Enter dental service" class = "form-control input border border-dark" required name = "dental_name">

            <input type = "submit" class = "btn btn-success mt-4" name = "submit">
        </form>
    </div>
</body>
</html>