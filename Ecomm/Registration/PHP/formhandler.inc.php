<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["Username"];
    $pwd = $_POST["Pwd"];   
    $name = $_POST["Name"];
    $surname = $_POST["Surname"];
    $address = $_POST["Address"];
    $telephone = $_POST["Telephone"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO Utenti (Username, Password, Name, Surname, Address, Telephone)
        VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd, $name, $surname, $address, $telephone]);

        $pdo = null;
        $stmt = null;

        header('Location: ../PHP/register.php');
        die();

        } catch (PDOException $e) {
            die("Query failed: " .$e->getMessage());
        }

    } else {
        header('Location: ../PHP/register.php');
    }

    