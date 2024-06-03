<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pwd = $_POST["Pwd"];   
    $name = $_POST["Name"];
    $surname = $_POST["Surname"];
    $address = $_POST["Address"];
    $telephone = $_POST["Telephone"];
    $username = $_POST["Username"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO Utenti (Pwd, Nome, Cognome, Indirizzo, Telefono, Username)
        VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$pwd, $name, $surname, $address, $telephone, $username]);

        $pdo = null;
        $stmt = null;

        header('Location: ../HTML/Form.html');
        die();

        } catch (PDOException $e) {
            die("Query failed: " .$e->getMessage());
        }

    } else {
        header('Location: ../PHP/register.php');
    }

    