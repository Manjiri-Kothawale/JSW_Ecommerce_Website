<?php
session_start();

if (isset($_POST['logout'])) {
    
    unset($_SESSION['user_email']);
    header("Location: index.html"); 
    exit; //
}

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "jsw_userdb";

$connection = new mysqli($servername, $username, $password, $dbname);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$error_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['logout'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $get_user = $connection->prepare("SELECT * FROM users WHERE email=?");
    $get_user->bind_param("s", $email);
    $get_user->execute();
    $result = $get_user->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if ($password == $user['password']) { 
           
            $_SESSION['user_email'] = $email;
            header("Location: shop.php");
            exit; //
        } else {
            $error_message = "Incorrect password!";
        }
    } else {
        $error_message = "User not found!";
    }

    $get_user->close();
}

$connection->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JSW STEELS</title>
    <link rel="stylesheet" href="login.css"> 
    <style>
        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <?php
        if (!empty($error_message)) {
            echo '<div class="error-message">' . $error_message . '</div>';
        }
        ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Create new account <a href="register.html">Register</a></p>
        <form id="logoutForm" action="login.php" method="POST">
            <button type="submit" name="logout" id="logoutBtn" style="display: none;"></button>
        </form>
    </div>
    <script>
        document.getElementById("logoutBtn").addEventListener("click", function() {
            document.getElementById("logoutForm").submit();
        });
    </script>
</body>
</html>
