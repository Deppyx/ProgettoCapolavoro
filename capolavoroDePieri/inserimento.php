<?php
include("connessione.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Stili per la barra di navigazione */
    .sidebar {
      width: 280px;
      height: 100vh;
      background-color: #939899; /* Imposta lo sfondo grigio */
      color: #fff; /* Testo bianco */
      position: fixed; /* Rende la barra di navigazione fissata */
      top: 0;
      left: 0;
      padding-top: 50px; /* Aggiungi spazio sopra la barra di navigazione */
    }

    .sidebar .nav-link,
    .sidebar .dropdown-menu .dropdown-item {
      color: #fff !important; /* Testo bianco */
    }

    .sidebar .nav-link:hover,
    .sidebar .dropdown-menu .dropdown-item:hover {
      background-color: rgba(255, 255, 255, 0.1); /* Cambia colore di sfondo al passaggio del mouse */
    }

    .sidebar hr {
      border-top: 1px solid rgba(128, 128, 128, 0.1);
    }

    .sidebar .dropdown-menu {
      background-color: #5a5a5a;
    }

    /* Stili globali */
    body {
      font-family: "Century Gothic", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa; /* Cambia il colore di sfondo della pagina */
    }

    /* Rimuovi il bordo e la sottolineatura dei link */
    a {
      text-decoration: none;
      border: none;
    }

    a:hover {
      text-decoration: none;
    }

    /* Rimuovi i margini e i padding predefiniti */
    .nav-link,
    .nav-item {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    /* Stili per il dropdown */
    .dropdown-item {
      color: #fff !important; /* Testo bianco */
    }

    .dropdown-item:hover {
      background-color: rgba(185, 185, 185, 0.1);
    }


    /* Aggiungi effetto di transizione alle card */
    .card {
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    /* Stili personalizzati per la freccia di collapse */
    .btn-toggle svg {
      margin-right: 5px; /* Aggiunge spazio tra l'icona e il testo */
      width: 20px; /* Rende l'icona più grande */
      height: 20px;
    }

    /* Stile per la larghezza del menu */
    .sidebar-expanded {
      width: 280px;
    }

    h1 {
      color:  #939899;
    }

    .bianco {
      color: #fff;
    }

    table{
      margin-left: 280px;
    }

    h2, h3 {
        margin-left: 290px;
      color: #333;
    }

    form {
      margin-left: 280px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Aggiungi una classe "sidebar-expanded" al div della barra laterale per estenderla -->
  <div class="flex-shrink-0 p-3 sidebar sidebar-expanded">
    <a href="login2.php" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis border-bottom">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
      </svg>
      <h1>_</h1>
      <span class="bianco fs-5 fw-semibold">Centro Termale SR</span>
    </a>

  <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="bianco btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#inserimento-collapse" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
              </svg>
          <span class="text-end">Inserimento</span>
        </button>
        <div class="collapse" id="inserimento-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="inserimento.php" class="bianco text-end" id="inserimento-account">Account</a></li>
            <li><a href="inserimento.php" class="bianco text-end" id="inserimento-cliente">Cliente</a></li>
            <li><a href="inserimento.php" class="bianco text-end"id="inserimento-pacchetto">Pacchetto</a></li>
            <li><a href="inserimento.php" class="bianco text-end"id="inserimento-prenotazione">Prenotazione</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="bianco btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#modifica-collapse" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
              </svg>
          <span class="text-end">Modifica</span>
        </button>
        <div class="collapse" id="modifica-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="inserimento.php" class="bianco text-end"id="modifica-account">Account</a></li>
            <li><a href="inserimento.php" class="bianco text-end" id="modifica-cliente">Cliente</a></li>
            <li><a href="inserimento.php" class="bianco text-end"id="modifica-pacchetto">Pacchetto</a></li>
            <li><a href="inserimento.php" class="bianco text-end"id="modifica-prenotazione">Prenotazione</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="bianco btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#cancellazione-collapse" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
              </svg>
          <span class="text-end">Cancellazione</span>
        </button>
        <div class="collapse" id="cancellazione-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="inserimento.php" class="bianco text-end" id="cancellazione-account">Account</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="cancellazione-cliente">Cliente</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="cancellazione-pacchetto">Pacchetto</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="cancellazione-prenotazione">Prenotazione</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="bianco btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#visualizzazione-collapse" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down me-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
              </svg>
          <span class="text-end">Visualizzazione</span>
        </button>
        <div class="collapse" id="visualizzazione-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="inserimento.php" class="bianco text-end" id="visualizzazione-account">Account</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="visualizzazione-cliente">Cliente</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="visualizzazione-pacchetto">Pacchetto</a></li>
            <li><a href="inserimento.php" class="bianco text-end"  id="visualizzazione-prenotazione">Prenotazione</a></li>
          </ul>
        </div>
      </li>
    </div>

  <!-- Form per l'inserimento dei dati nella tabella account -->
  <div id="account-in" style="display:block">
  <h3>Inserimento in tabella account</h3>
  <form method="post" action="inserimento.php">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="idCliente">ID Cliente:</label><br>
    <input type="number" id="idCliente" name="idCliente"><br><br>
    <input type="submit" value="Inserisci">
    <input type="hidden" name="tabella" value="account">
  </form>
  </div>

  <!-- Form per l'inserimento dei dati nella tabella cliente -->
  <div id="cliente-in" style="display:none">
  <h3>Inserimento in tabella cliente</h3>
  <form method="post" action="inserimento.php">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br>
    <label for="cognome">Cognome:</label><br>
    <input type="text" id="cognome" name="cognome"><br>
    <label for="dataNascita">Data di Nascita:</label><br>
    <input type="date" id="dataNascita" name="dataNascita"><br>
    <label for="nazionalita">Nazionalità:</label><br>
    <input type="text" id="nazionalita" name="nazionalita"><br>
    <label for="provincia">Provincia:</label><br>
    <input type="text" id="provincia" name="provincia"><br>
    <label for="comune">Comune:</label><br>
    <input type="text" id="comune" name="comune"><br><br>
    <input type="submit" value="Inserisci">
    <input type="hidden" name="tabella" value="cliente">
  </form>
</div>
  <!-- Form per l'inserimento dei dati nella tabella pacchetto -->
  <div id="pacchetto-in" style="display:none">
  <h3>Inserimento in tabella pacchetto</h3>
  <form method="post" action="inserimento.php">
    <label for="tipo">Tipo:</label><br>
    <input type="text" id="tipo" name="tipo"><br>
    <label for="durata">Durata:</label><br>
    <input type="text" id="durata" name="durata"><br>
    <label for="costo">Costo:</label><br>
    <input type="text" id="costo" name="costo"><br>
    <label for="descrizione">Descrizione:</label><br>
    <input type="text" id="descrizione" name="descrizione"><br><br>
    <input type="submit" value="Inserisci">
    <input type="hidden" name="tabella" value="pacchetto">
  </form>
</div>

  <!-- Form per l'inserimento dei dati nella tabella prenotazione -->
  <div id="prenotazione-in" style="display:none">
  <h3>Inserimento in tabella prenotazione</h3>
  <form method="post" action="inserimento.php">
    <label for="dataPrenotazione">Data Prenotazione:</label><br>
    <input type="date" id="dataPrenotazione" name="dataPrenotazione"><br>
    <label for="disponibilita">Disponibilità:</label><br>
    <input type="text" id="disponibilita" name="disponibilita"><br>
    <label for="cf">Codice Fiscale:</label><br>
    <input type="text" id="cf" name="cf"><br>
    <label for="numeroPersone">Numero Persone:</label><br>
    <input type="number" id="numeroPersone" name="numeroPersone"><br><br>
    <input type="submit" value="Inserisci">
    <input type="hidden" name="tabella" value="prenotazione">
  </form>
  </div>

  <?php
// Includi il file di connessione al database
include 'connessione.php';

// Verifica se il metodo di richiesta è POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se tutti i campi necessari sono stati inviati
    if (
        isset($_POST['tabella'])
    ) {
        // Recupera il valore del campo tabella
        $tabella = $_POST['tabella'];

        // In base al valore del campo tabella, esegui l'inserimento appropriato
        switch ($tabella) {
          case 'cliente':
            // Recupera i valori dai campi del modulo per la tabella cliente
            $nome = $_POST['nome'];
            $cognome = $_POST['cognome'];
            $dataNascita = $_POST['dataNascita'];
            $nazionalita = $_POST['nazionalita'];
            $provincia = $_POST['provincia'];
            $comune = $_POST['comune'];

            // Query per l'inserimento dei dati nella tabella "cliente"
            $sql = "INSERT INTO cliente (nome, cognome, dataNascita, nazionalita, provincia, comune) VALUES ('$nome', '$cognome', '$dataNascita', '$nazionalita', '$provincia', '$comune')";
            break;
        case 'pacchetto':
            // Recupera i valori dai campi del modulo per la tabella pacchetto
            $tipo = $_POST['tipo'];
            $durata = $_POST['durata'];
            $costo = $_POST['costo'];
            $descrizione = $_POST['descrizione'];

            // Query per l'inserimento dei dati nella tabella "pacchetto"
            $sql = "INSERT INTO pacchetto (tipo, durata, costo, descrizione) VALUES ('$tipo', '$durata', '$costo', '$descrizione')";
            break;
        case 'prenotazione':
            // Recupera i valori dai campi del modulo per la tabella prenotazione
            $dataPrenotazione = $_POST['dataPrenotazione'];
            $disponibilita = $_POST['disponibilita'];
            $cf = $_POST['cf'];
            $numeroPersone = $_POST['numeroPersone'];

            // Query per l'inserimento dei dati nella tabella "prenotazione"
            $sql = "INSERT INTO prenotazione (dataPrenotazione, disponibilita, cf, numeroPersone) VALUES ('$dataPrenotazione', '$disponibilita', '$cf', $numeroPersone)";
            break;
            case 'account':
                // Recupera i valori dai campi del modulo per la tabella account
                $email = $_POST['email'];
                $password = $_POST['password'];
                $idCliente = $_POST['idCliente'];

                // Query per l'inserimento dei dati nella tabella "account"
                $sql = "INSERT INTO account (email, password, idCliente) VALUES ('$email', '$password', $idCliente)";
                break;
        }

        // Esegui la query e verifica se è stata eseguita con successo
    } 
} 
?>


<?php
// Include il file di connessione al database
include("connessione.php");

// Recupera i dati dal database per riempire i menu a tendina
$elenco_account = $conn->query("SELECT IDAccount, Email FROM account")->fetch_all(MYSQLI_ASSOC);
$elenco_clienti = $conn->query("SELECT IDCliente, Nome, Cognome FROM cliente")->fetch_all(MYSQLI_ASSOC);
$elenco_pacchetti = $conn->query("SELECT IDPacchetto, Tipo FROM pacchetto")->fetch_all(MYSQLI_ASSOC);
$elenco_prenotazioni = $conn->query("SELECT IDPrenotazione, DataPrenotazione FROM prenotazione")->fetch_all(MYSQLI_ASSOC);
?>

<!-- Form per la modifica dei dati nella tabella account -->
<div id="account-mod" style="display:none">
    <h3>Modifica dati account</h3>
    <form method="post" action="modifica.php">
        <label for="account_id">Seleziona l'account da modificare:</label><br>
        <select id="account_id" name="account_id">
            <?php
            foreach ($elenco_account as $account) {
                echo "<option value='" . $account['IDAccount'] . "'>" . $account['Email'] . "</option>";
            }
            ?>
        </select><br><br>
        <!-- Campi per le nuove informazioni -->
        <label for="new_email">Nuova Email:</label><br>
        <input type="email" id="new_email" name="new_email"><br>
        <label for="new_password">Nuova Password:</label><br>
        <input type="password" id="new_password" name="new_password"><br>
        <label for="new_idCliente">Nuovo ID Cliente:</label><br>
        <input type="number" id="new_idCliente" name="new_idCliente"><br><br>
        <input type="submit" value="Modifica">
        <input type="hidden" name="tabella" value="account">
    </form>
</div>

<!-- Form per la modifica dei dati nella tabella cliente -->
<div id="cliente-mod" style="display:none">
    <h3>Modifica dati cliente</h3>
    <form method="post" action="modifica.php">
        <label for="cliente_id">Seleziona il cliente da modificare:</label><br>
        <select id="cliente_id" name="cliente_id">
            <?php
            foreach ($elenco_clienti as $cliente) {
                echo "<option value='" . $cliente['IDCliente'] . "'>" . $cliente['Nome'] . " " . $cliente['Cognome'] . "</option>";
            }
            ?>
        </select><br><br>
        <!-- Campi per le nuove informazioni -->
        <label for="new_nome">Nuovo Nome:</label><br>
        <input type="text" id="new_nome" name="new_nome"><br>
        <label for="new_cognome">Nuovo Cognome:</label><br>
        <input type="text" id="new_cognome" name="new_cognome"><br>
        <label for="new_dataNascita">Nuova Data di Nascita:</label><br>
        <input type="date" id="new_dataNascita" name="new_dataNascita"><br>
        <label for="new_nazionalita">Nuova Nazionalità:</label><br>
        <input type="text" id="new_nazionalita" name="new_nazionalita"><br>
        <label for="new_provincia">Nuova Provincia:</label><br>
        <input type="text" id="new_provincia" name="new_provincia"><br>
        <label for="new_comune">Nuovo Comune:</label><br>
        <input type="text" id="new_comune" name="new_comune"><br><br>
        <input type="submit" value="Modifica">
        <input type="hidden" name="tabella" value="cliente">
    </form>
</div>

<!-- Form per la modifica dei dati nella tabella pacchetto -->
<div id="pacchetto-mod" style="display:none">
    <h3>Modifica dati pacchetto</h3>
    <form method="post" action="modifica.php">
        <label for="pacchetto_id">Seleziona il pacchetto da modificare:</label><br>
        <select id="pacchetto_id" name="pacchetto_id">
            <?php
            foreach ($elenco_pacchetti as $pacchetto) {
                echo "<option value='" . $pacchetto['IDPacchetto'] . "'>" . $pacchetto['Tipo'] . "</option>";
            }
            ?>
        </select><br><br>
        <!-- Campi per le nuove informazioni -->
        <label for="new_tipo">Nuovo Tipo:</label><br>
        <input type="text" id="new_tipo" name="new_tipo"><br>
        <label for="new_durata">Nuova Durata:</label><br>
        <input type="text" id="new_durata" name="new_durata"><br>
        <label for="new_costo">Nuovo Costo:</label><br>
        <input type="number" id="new_costo" name="new_costo" step="0.01"><br>
        <label for="new_descrizione">Nuova Descrizione:</label><br>
        <input type="text" id="new_descrizione" name="new_descrizione"><br><br>
        <input type="submit" value="Modifica">
        <input type="hidden" name="tabella" value="pacchetto">
    </form>
</div>

<!-- Form per la modifica dei dati nella tabella prenotazione -->
<div id="prenotazione-mod" style="display:none">
    <h3>Modifica dati prenotazione</h3>
    <form method="post" action="modifica.php">
        <label for="prenotazione_id">Seleziona la prenotazione da modificare:</label><br>
        <select id="prenotazione_id" name="prenotazione_id">
            <?php
            foreach ($elenco_prenotazioni as $prenotazione) {
                echo "<option value='" . $prenotazione['IDPrenotazione'] . "'>" . $prenotazione['DataPrenotazione'] . "</option>";
            }
            ?>
        </select><br><br>
        <!-- Campi per le nuove informazioni -->
        <label for="new_dataPrenotazione">Nuova Data di Prenotazione:</label><br>
        <input type="date" id="new_dataPrenotazione" name="new_dataPrenotazione"><br>
        <label for="new_disponibilita">Nuova Disponibilità:</label><br>
        <input type="text" id="new_disponibilita" name="new_disponibilita"><br>
        <label for="new_cf">Nuovo Codice Fiscale:</label><br>
        <input type="text" id="new_cf" name="new_cf"><br>
        <label for="new_numeroPersone">Nuovo Numero di Persone:</label><br>
        <input type="number" id="new_numeroPersone" name="new_numeroPersone"><br>
        <label for="new_idAccount">Nuovo ID Account:</label><br>
        <input type="number" id="new_idAccount" name="new_idAccount"><br><br>
        <input type="submit" value="Modifica">
        <input type="hidden" name="tabella" value="prenotazione">
    </form>
</div>


<?php
// Include il file di connessione al database
include("connessione.php");

// Recupera i dati dal database per riempire i menu a tendina
$elenco_account = $conn->query("SELECT IDAccount, Email FROM account")->fetch_all(MYSQLI_ASSOC);
$elenco_clienti = $conn->query("SELECT IDCliente, Nome, Cognome FROM cliente")->fetch_all(MYSQLI_ASSOC);
$elenco_pacchetti = $conn->query("SELECT IDPacchetto, Tipo FROM pacchetto")->fetch_all(MYSQLI_ASSOC);
$elenco_prenotazioni = $conn->query("SELECT IDPrenotazione, DataPrenotazione FROM prenotazione")->fetch_all(MYSQLI_ASSOC);
?>

<!-- Form per la cancellazione dei dati nella tabella account -->
<div id="account-del">
    <h3>Cancella account</h3>
    <form method="post" action="cancellazione.php">
        <label for="account_id">Seleziona l'account da cancellare:</label><br>
        <select id="account_id" name="account_id">
            <?php
            foreach ($elenco_account as $account) {
                echo "<option value='" . $account['IDAccount'] . "'>" . $account['Email'] . "</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Cancella">
        <input type="hidden" name="tabella" value="account">
    </form>
</div>

<!-- Form per la cancellazione dei dati nella tabella cliente -->
<div id="cliente-del">
    <h3>Cancella cliente</h3>
    <form method="post" action="cancellazione.php">
        <label for="cliente_id">Seleziona il cliente da cancellare:</label><br>
        <select id="cliente_id" name="cliente_id">
            <?php
            foreach ($elenco_clienti as $cliente) {
                echo "<option value='" . $cliente['IDCliente'] . "'>" . $cliente['Nome'] . " " . $cliente['Cognome'] . "</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Cancella">
        <input type="hidden" name="tabella" value="cliente">
    </form>
</div>

<!-- Form per la cancellazione dei dati nella tabella pacchetto -->
<div id="pacchetto-del">
    <h3>Cancella pacchetto</h3>
    <form method="post" action="cancellazione.php">
        <label for="pacchetto_id">Seleziona il pacchetto da cancellare:</label><br>
        <select id="pacchetto_id" name="pacchetto_id">
            <?php
            foreach ($elenco_pacchetti as $pacchetto) {
                echo "<option value='" . $pacchetto['IDPacchetto'] . "'>" . $pacchetto['Tipo'] . "</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Cancella">
        <input type="hidden" name="tabella" value="pacchetto">
    </form>
</div>

<!-- Form per la cancellazione dei dati nella tabella prenotazione -->
<div id="prenotazione-del">
    <h3>Cancella prenotazione</h3>
    <form method="post" action="cancellazione.php">
        <label for="prenotazione_id">Seleziona la prenotazione da cancellare:</label><br>
        <select id="prenotazione_id" name="prenotazione_id">
            <?php
            foreach ($elenco_prenotazioni as $prenotazione) {
                echo "<option value='" . $prenotazione['IDPrenotazione'] . "'>" . $prenotazione['DataPrenotazione'] . "</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Cancella">
        <input type="hidden" name="tabella" value="prenotazione">
    </form>
</div>
<?php
// Includi il file di connessione al database
include 'connessione.php';

// Funzione per visualizzare i dati di una tabella
function fetchData($conn, $sql) {
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Query per ciascuna tabella
$accountData = fetchData($conn, "SELECT * FROM account");
$clienteData = fetchData($conn, "SELECT * FROM cliente");
$pacchettoData = fetchData($conn, "SELECT * FROM pacchetto");
$prenotazioneData = fetchData($conn, "SELECT * FROM prenotazione");

// Chiudere la connessione
mysqli_close($conn);
?>

<!-- Form per la visualizzazione dei dati nella tabella account -->
<div id="account-view" style="display:none">
  <h3>Visualizzazione dati account</h3>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>ID Cliente</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($accountData as $row) {
          echo "<tr>";
          echo "<td>{$row['IDAccount']}</td>";
          echo "<td>{$row['Email']}</td>";
          echo "<td>{$row['Password']}</td>";
          echo "<td>{$row['IDCliente']}</td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Form per la visualizzazione dei dati nella tabella cliente -->
<div id="cliente-view" style="display:none">
  <h3>Visualizzazione dati cliente</h3>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Data di Nascita</th>
        <th>Nazionalità</th>
        <th>Provincia</th>
        <th>Comune</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($clienteData as $row) {
          echo "<tr>";
          echo "<td>{$row['IDCliente']}</td>";
          echo "<td>{$row['Nome']}</td>";
          echo "<td>{$row['Cognome']}</td>";
          echo "<td>{$row['DataNascita']}</td>";
          echo "<td>{$row['Nazionalita']}</td>";
          echo "<td>{$row['Provincia']}</td>";
          echo "<td>{$row['Comune']}</td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Form per la visualizzazione dei dati nella tabella pacchetto -->
<div id="pacchetto-view" style="display:none">
  <h3>Visualizzazione dati pacchetto</h3>
  <table class="table">
    <thead>
      <tr>
        <th>ID Pacchetto</th>
        <th>ID Prenotazione</th>
        <th>Tipo</th>
        <th>Durata</th>
        <th>Costo</th>
        <th>Descrizione</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($pacchettoData as $row) {
          echo "<tr>";
          echo "<td>{$row['IDPacchetto']}</td>";
          echo "<td>{$row['IDPrenotazione']}</td>";
          echo "<td>{$row['Tipo']}</td>";
          echo "<td>{$row['Durata']}</td>";
          echo "<td>{$row['Costo']}</td>";
          echo "<td>{$row['Descrizione']}</td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Form per la visualizzazione dei dati nella tabella prenotazione -->
<div id="prenotazione-view" style="display:none">
  <h3>Visualizzazione dati prenotazione</h3>
  <table class="table">
    <thead>
      <tr>
        <th>ID Prenotazione</th>
        <th>Data Prenotazione</th>
        <th>Disponibilità</th>
        <th>Numero Persone</th>
        <th>ID Account</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($prenotazioneData as $row) {
          echo "<tr>";
          echo "<td>{$row['IDPrenotazione']}</td>";
          echo "<td>{$row['DataPrenotazione']}</td>";
          echo "<td>{$row['Disponibilita']}</td>";
          echo "<td>{$row['NumeroPersone']}</td>";
          echo "<td>{$row['IDAccount']}</td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Aggiungi simili form per la visualizzazione dei dati nelle altre tabelle -->



    <?php
    
    ?>
    <script src="funzioni.js"></script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>