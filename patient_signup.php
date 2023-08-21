<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            width: 450px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signup_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter Username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <input type="submit" value="Signup">
        </form>
        <?php
            if(isset($_REQUEST['status']))
            {
            ?>
            <p align="center" class="msg">Invalid username or password</p>
            <?php
            }
        ?>
    </div>
</body>

</html>