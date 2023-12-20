-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 20, 2023 alle 09:10
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
-- Database: `mvcstreet`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `controlli_aggregati`
--

CREATE TABLE `controlli_aggregati` (
  `id` int(11) NOT NULL,
  `fascia` text NOT NULL,
  `controlli` text NOT NULL,
  `eccezioni` text NOT NULL,
  `id_macchina` text NOT NULL,
  `zona` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `controllo_singolo`
--

CREATE TABLE `controllo_singolo` (
  `id` int(11) NOT NULL,
  `dataora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_macchina` text NOT NULL,
  `zona` text NOT NULL,
  `eccezione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `controlli_aggregati`
--
ALTER TABLE `controlli_aggregati`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `controllo_singolo`
--
ALTER TABLE `controllo_singolo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `controlli_aggregati`
--
ALTER TABLE `controlli_aggregati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `controllo_singolo`
--
ALTER TABLE `controllo_singolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
