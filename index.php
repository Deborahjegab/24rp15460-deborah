<?php
  // Display navigation links
  echo "<a href='register.php'>Register</a> | <a href='login.php'>Login</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 100px auto;
            text-align: center;
        }

        .btn-purple {
            background-color: #6a0dad;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-purple:hover {
            background-color: #5c0dad;
        }

        .text-purple {
            color: #6a0dad;
        }

        .text-purple:hover {
            color: #5c0dad;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 class="text-purple">Login</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required><br><br>
            <input type="password" name="password" placeholder="Enter Password" required><br><br>
            <button type="submit" class="btn-purple">Login</button>
        </form>
    </div>

</body>
</html>   