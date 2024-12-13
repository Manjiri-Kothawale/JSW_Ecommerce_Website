<?php
$servername = "localhost";
$username = "root"; 
$password = "admin"; 
$dbname = "jsw_steels"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO inquiries (first_name, last_name, company_name, phone_number, email, street_address, city, state_province, zipcode, product_of_interest, additional_comment, contact_method, meeting_request) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $first_name, $last_name, $company_name, $phone_number, $email, $street_address, $city, $state_province, $zipcode, $product_of_interest, $additional_comment, $contact_method, $meeting_request);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$state_province = $_POST['state_province'];
$zipcode = $_POST['zipcode'];
$product_of_interest = $_POST['product_of_interest'];
$additional_comment = $_POST['additional_comment'];
$contact_method = $_POST['contact_method'];
$meeting_request = isset($_POST['meeting_request']) ? 1 : 0;

$stmt->execute();

echo "Thank you!";

$stmt->close();
$conn->close();
?>
