<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "B@mb!2324";
$dbname = "ecomm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM Utenti WHERE Username = ? AND Pwd = ?;");
    $stmt->bind_param("ss", $user, $pass);
    header("Location: ../HTML/cart.php");

    if ($stmt->num_rows > 0) {
        header("Location: cart.php");
        exit();
    } else {
        echo "Username or Password are incorrect";
    }
}

$stmt->close();
$conn->close();