-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 17, 2024 alle 15:29
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prenotazioniterme`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `account`
--

CREATE TABLE `account` (
  `IDAccount` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `IDCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `account`
--

INSERT INTO `account` (`IDAccount`, `Email`, `Password`, `IDCliente`) VALUES
(1, 'esempio1@email.com', 'password1', 1),
(2, 'esempio2@email.com', 'password2', 2),
(3, 'esempio3@email.com', 'password3', 3),
(4, 'esempio4@email.com', 'password4', 4),
(5, 'esempio5@email.com', 'password5', 5),
(6, 'admin', 'admin', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE `cliente` (
  `IDCliente` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Cognome` varchar(50) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL,
  `Nazionalita` varchar(20) DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Comune` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`IDCliente`, `Nome`, `Cognome`, `DataNascita`, `Nazionalita`, `Provincia`, `Comune`) VALUES
(1, 'Mario', 'Rossi', '1980-05-10', 'Italiana', 'RM', 'Roma'),
(2, 'Luca', 'Bianchi', '1992-08-15', 'Italiana', 'MI', 'Milano'),
(3, 'Giulia', 'Verdi', '1985-03-20', 'Italiana', 'NA', 'Napoli'),
(4, 'Laura', 'Gialli', '1975-12-05', 'Italiana', 'TO', 'Torino'),
(5, 'Federico', 'Marroni', '1988-07-18', 'Italiana', 'FI', 'Firenze'),
(6, 'Sara', 'Celesti', '1995-02-28', 'Italiana', 'BO', 'Bologna');

-- --------------------------------------------------------

--
-- Struttura della tabella `pacchetto`
--

CREATE TABLE `pacchetto` (
  `IDPacchetto` int(11) NOT NULL,
  `IDPrenotazione` int(11) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Durata` varchar(50) DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Descrizione` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `pacchetto`
--

INSERT INTO `pacchetto` (`IDPacchetto`, `IDPrenotazione`, `Tipo`, `Durata`, `Costo`, `Descrizione`) VALUES
(1, 1, 'Pacchetto Relax', '1 Giorno', 20, 'Possibilità di usufruire tutte le nostre vasche termali'),
(2, 2, 'Pacchetto Benessere', '1 Giorno', 40, 'Accesso a tutte le vasche e al centro spa '),
(3, 3, 'Pacchetto Spa', '2 Giorni', 100, 'Accesso a tutte le vasche e al centro spa + notte passata in hotel all\'interno del centro '),
(4, 4, 'Pacchetto Cinema (EXTRA)', '1 ora', 60, 'Immergendoti in questa vasca potrai rivivere l’atmosfera di molti biomi e molti paesaggi nel nostro '),
(5, 5, 'Pacchetto Magic Forest (EXTRA)', '1 ora', 40, 'Natura e architettura si fondono tramite proiezioni e animazioni luminose in una foresta incantata'),
(6, 6, 'Pacchetto Sentiero Sensoriale', '2 ore', 70, 'Il sentiero sensoriale ti permetterà di curiosare tra le particolarità di un piccolo giardino');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `IDPrenotazione` int(11) NOT NULL,
  `DataPrenotazione` date DEFAULT NULL,
  `Disponibilita` varchar(2) DEFAULT NULL,
  `NumeroPersone` int(11) DEFAULT NULL,
  `IDAccount` int(11) DEFAULT NULL,
  `IDPacchetto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`IDPrenotazione`, `DataPrenotazione`, `Disponibilita`, `NumeroPersone`, `IDAccount`, `IDPacchetto`) VALUES
(1, '2024-04-22', 'SI', 1, 1, 1),
(2, '2024-04-23', 'SI', 2, 2, 2),
(3, '2024-04-24', 'SI', 1, 3, 3),
(4, '2024-04-25', 'SI', 2, 4, 4),
(5, '2024-04-26', 'SI', 1, 5, 5),
(6, '2024-04-27', 'SI', 2, 6, 6);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDAccount`);

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCliente`);

--
-- Indici per le tabelle `pacchetto`
--
ALTER TABLE `pacchetto`
  ADD PRIMARY KEY (`IDPacchetto`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`IDPrenotazione`),
  ADD KEY `fk_prenotazione_pacchetto` (`IDPacchetto`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD CONSTRAINT `fk_prenotazione_pacchetto` FOREIGN KEY (`IDPacchetto`) REFERENCES `pacchetto` (`IDPacchetto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
