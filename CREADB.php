<?php
    // Connessione al database
    $servername = "localhost"; // Nome del server (solitamente localhost)
    $username = "root"; // Nome utente del database
    $password = ""; // Password del database
    $dbname = "echoverse_db"; // Nome del database

    // Creazione della connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica della connessione
    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }

    // Query per recuperare il record con id = 1
    $query = "SELECT * FROM artisti WHERE id = 1";
    $result = $conn->query($query);

    // Verifica se il record è stato trovato
    if ($result->num_rows > 0) {
        // Visualizza l'id, il nome e l'immagine del record
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $nome = $row["nome"];
        $immagine = $row["immagine"];
        echo "<img src='F:\Microsoft VS Code\bin\SITOWEB\fotoartisti\postmalone.jpg'>";

    } else {
        echo "Nessun record trovato.";
    }

    // Chiusura della connessione
    $conn->close();
?>



