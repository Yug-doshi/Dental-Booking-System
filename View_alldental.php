<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("Navbar.php"); 
            session_start();
            include("validate.php");
    $con = mysqli_connect("localhost","root","","dental_system");
    
    if(isset($_REQUEST['name'])){
        $name = $_GET['name'];
        $query = "select * from dental_service where name like '$name%'";
        $result = mysqli_query($con,$query);
    }
    else{
        $query = "select * from dental_service";
        $result = mysqli_query($con,$query);
    }
    ?>

    <h1 align = "center" class = "total text-success mt-3">Total Dental Services: <?php echo mysqli_num_rows($result);?></h1>
    <form action = "View_alldental.php" align = "center">
        <input type = "text" placeholder = "Enter name of dental service to search:" name = "name" class = " form-control w-25 border border-dark mt-4 mb-4" style = "margin-left:38vw;text-align:center;">
        <input type = "submit" value = "Search" class = "btn btn-success">
    </form>

    <table class="table table-hover table-striped container mt-5">
        <thead class="table-dark">
        <tr align="center">
                <th>ID</th>
                <th>Dental Service</th>
        </tr>
        </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $row['id']; ?> </td>
                    <td style = "text-align:center;font-size:20px;font-weight:bold"> <?php echo $row['name']; ?> </td>
                    <?php
                }
            ?>
        </tbody>
</body>
</html>