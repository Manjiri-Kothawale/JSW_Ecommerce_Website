<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "jsw_productdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        echo '<h2>' . $product['name'] . '</h2>';
        echo '<p>' . $product['description'] . '</p>';
        echo '<p>Price: $' . $product['price'] . '</p>';
        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    } else {
        echo 'Product not found.';
    }
} else {
    echo 'Invalid product ID.';
}
?>

