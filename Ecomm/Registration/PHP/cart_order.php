<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "B@mb!2324";
$dbname = "ecomm";

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);
// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["Username"];
    // Esegui la query per ottenere i prodotti
    $sql = "SELECT Descrizione, Prezzo FROM Prodotti
    INNER JOIN Ordini on Prodotti.Ordine = Ordini.Numero
    where Ordini.Username = $username;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output dei dati di ogni riga
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Descrizione"]. "</td><td>" . $row["Prezzo"]. " €</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nessun prodotto disponibile</td></tr>";
    }

}

// Chiudi la connessione
$conn->close();