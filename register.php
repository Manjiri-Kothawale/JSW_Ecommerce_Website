<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "jsw_userdb";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$error_message = ""; 
$success_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match!";
    } else {
        $check_email = $connection->prepare("SELECT * FROM users WHERE email=?");
        $check_email->bind_param("s", $email);
        $check_email->execute();
        $result = $check_email->get_result();

        if ($result->num_rows > 0) {
            $error_message = "Email already exists. Please use a different email.";
        } else {
            $insert_sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
            $insert_user = $connection->prepare($insert_sql);
            $insert_user->bind_param("sss", $fullname, $email, $password);

            if ($insert_user->execute()) {
                $success_message = "Registration successful!";
                header("Location: login.php"); // Redirect to shop page on successful registration
                exit; 
            } else {
                $error_message = "Error: " . $insert_sql . "<br>" . $connection->error;
            }

            $insert_user->close();
        }
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
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
    <div class="container1">
        <h2>Register Form</h2>
        <?php
        // Display error message if set
        if (!empty($error_message)) {
            echo '<div class="error-message">' . $error_message . '</div>';
        }

        if (!empty($success_message)) {
            echo '<div class="success-message">' . $success_message . '</div>';
        }
        ?>
        <form action="register.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Login</a></p>
    </div>

    <script>
      function validateForm() {
            var fullname = document.getElementById("fullname").value.trim();
            var email = document.getElementById("email").value.trim();
            var password = document.getElementById("password").value.trim();
            var confirm_password = document.getElementById("confirm_password").value.trim();

            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");
            var confirmPasswordError = document.getElementById("confirmPasswordError");

         
            emailError.innerHTML = "";
            passwordError.innerHTML = "";
            confirmPasswordError.innerHTML = "";

           
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.innerHTML = "Please enter a valid email address.";
                return false;
            }

       
            var passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
            if (!passwordRegex.test(password)) {
                passwordError.innerHTML = "Password must be at least 8 characters long and contain at least one number and one special character.";
                return false;
            }

            if (password !== confirm_password) {
                confirmPasswordError.innerHTML = "Passwords do not match!";
                return false;
            }

            return true; 
        }
    </script>
</body>
</html>
