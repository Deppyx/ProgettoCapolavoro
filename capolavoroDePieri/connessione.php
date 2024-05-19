<?php
// Dati per la connessione al database
$dbhost = "localhost"; // Cambia con l'indirizzo del tuo server MySQL/MariaDB
$username = "root"; // Cambia con il nome utente del tuo database
$password = ""; // Cambia con la password del tuo database
$dbname = "prenotazioniterme"; // Cambia con il nome del tuo database

// Connessione al database
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}