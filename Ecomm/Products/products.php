<?php
// Connect to MySQL
$servername = "localhost";
$username = "your_username"; // Change to your MySQL username
$password = "your_password"; // Change to your MySQL password
$dbname = "your_database";   // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Fetch products and encode them in JSON format
$products = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Output JSON
header('Content-Type: application/json');
echo json_encode($products);

// Close connection
$conn->close();