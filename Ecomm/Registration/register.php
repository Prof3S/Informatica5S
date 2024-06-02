<?php
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = "B@mb!2324"; // Change to your MySQL password
$dbname = "ecomm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO Utenti (CodUtente, Pwd, Nome, Cognome, Indirizzo, Telefono, Username) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param($cod, $pwd, $name, $surname, $address, $telephone, $user);

// Set parameters and execute
$cod = 1;
$user = $_POST['Username'];
$pwd = $_POST['Pwd'];
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$address = $_POST['Address'];
$telephone = $_POST['Telephone'];

$stmt->execute();

echo "New record inserted successfully";

$stmt->close();
$conn->close();