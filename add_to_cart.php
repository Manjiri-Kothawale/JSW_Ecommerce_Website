<?php
// Database credentials
$servername = "localhost"; // Change if your MySQL server is hosted elsewhere
$username = "root";
$password = "admin";
$dbname = "jsw_shop_db"; // Change to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle Add to Cart request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = sanitize_input($_POST['product_id']);

    // Prepare SQL statement to insert into cart table
    $sql = "INSERT INTO cart (product_id, quantity) VALUES (?, 1)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute statement
    $stmt->bind_param("i", $product_id); // 'i' for integer type
    if ($stmt->execute()) {
        echo "Product added to cart successfully!";
    } else {
        echo "Error adding product to cart: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
}

// Close connection
$conn->close();
?>
