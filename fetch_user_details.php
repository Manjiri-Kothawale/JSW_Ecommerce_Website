<?php

session_start(); // Start the session to access session variables

// Check if the user is logged in (you may have a different method for checking login status)
if (isset($_SESSION['user_id'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "jsw_userdb";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Fetch user details query
    $user_id = $_SESSION['user_id']; // Assuming you store user ID in session
    $fetch_user_query = "SELECT fullname, email, mobile_number, address_line1, address_line2, postcode, state, area, education FROM users WHERE id = $user_id";
    $result = $connection->query($fetch_user_query);

    if ($result->num_rows > 0) {
        // Fetch user details
        $row = $result->fetch_assoc();
        $user_full_name = $row['fullname'];
        $user_email = $row['email'];
        $user_mobile = $row['mobile_number'];
        $user_address1 = $row['address_line1'];
        $user_address2 = $row['address_line2'];
        $user_postcode = $row['postcode'];
        $user_state = $row['state'];
        $user_area = $row['area'];
        $user_education = $row['education'];
    } else {
        // User not found or query error
        $user_full_name = "Unknown";
        $user_email = "N/A";
        $user_mobile = "N/A";
        $user_address1 = "N/A";
        $user_address2 = "N/A";
        $user_postcode = "N/A";
        $user_state = "N/A";
        $user_area = "N/A";
        $user_education = "N/A";
    }

    // Close connection
    $connection->close();
} else {
    // User is not logged in, handle this case accordingly
    // For example, redirect to login page or display an error message
    header("Location: login.html");
    exit; // Ensure no further execution
}
?>
