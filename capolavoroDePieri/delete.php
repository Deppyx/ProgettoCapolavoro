<?php
// Includi il file di connessione al database
include 'connessione.php';

// Funzione per cancellare un elemento da una tabella
function deleteData($conn, $table, $id) {
    $sql = "DELETE FROM $table WHERE ID = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Gestione della richiesta di cancellazione
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $table = $_GET['table'];
    $id = $_GET['id'];
    if (deleteData($conn, $table, $id)) {
        http_response_code(204);
    } else {
        http_response_code(500);
    }
}

// Chiudere la connessione
mysqli_close($conn);
?>