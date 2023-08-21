<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"crossorigin="anonymous"></script>

    <style>
        .mydiv{
            background-color:#1d3ef5;
            height:200px;
            text-align:center;
            width:350px;
            border-radius:20px;
        }
        .title{
            color:white;
            margin-top:20px;
            font-weight:bold;
            text-decoration:underline;
            font-size:30px;
        }
        .link{
            font-weight:bold;
        }
        .main{
            display:flex;
            flex-wrap:wrap;
        }
    </style>

</head>
<body>
    <?php 
        include("Patient_Navbar.php"); 
        $con = mysqli_connect("localhost","root","","dental_system");

        if($con){
            if(isset($_REQUEST['name'])){
                $name = $_GET['name'];
                $query = "select * from dental_service where name like '$name%'";
                $result = mysqli_query($con,$query);
            }
            else{
                $query = "select * from dental_service";
                $result = mysqli_query($con,$query);
            }
        }


    ?>

<h1 align = "center" class = "total text-success mt-3">Total Dental Services: <?php echo mysqli_num_rows($result);?></h1>
    <form action = "Patient_Home.php" align = "center">
        <input type = "text" placeholder = "Enter name of dental service to search:" name = "name" class = " form-control w-25 border border-dark mt-4 mb-4" style = "margin-left:38vw;text-align:center;">
        <input type = "submit" value = "Search" class = "btn btn-success">
    </form>
    <div class = "main">
    <?php 
        while($row = mysqli_fetch_array($result)){
            ?>
                <div class = "mydiv ms-5 mt-5">
                    <p class = "title mt-4"><?php echo $row['name'] ?></p>
                    <a class = "btn btn-light mt-4 link" href = "view_doctor_service.php?service_name=<?php echo $row['name']; ?>">View More</a>
                </div>
            <?php
        }
    ?>
    </div>
</body>
</html>
