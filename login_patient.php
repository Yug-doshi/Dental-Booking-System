<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login_patient_action.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <br>
        <h2>Don't have an account? <a href="patient_signup.php">Signup</a></h2>
        <?php
        if (isset($_REQUEST['status'])) {
            if(isset($_REQUEST['status'])=='fail') {
            ?>
            <p align="center" class="msg">Invalid username or password</p> 
            <?php 
            }
            
        }
        ?>
    </div>
</body>

</html>


