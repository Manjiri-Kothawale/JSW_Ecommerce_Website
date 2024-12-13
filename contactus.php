<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "jsw_userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $purpose = $_POST["purpose_options"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_form (firstname, lastname, email, purpose, message)
            VALUES ('$firstname', '$lastname', '$email', '$purpose', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Thank you for reaching out!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
