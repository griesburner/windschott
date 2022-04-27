-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220423.6e78cd4300
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Apr 2022 um 19:05
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `windschott`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kommentarfunktion`
--

CREATE TABLE `kommentarfunktion` (
  `id` int(10) UNSIGNED NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `kommentarfunktion`
--

INSERT INTO `kommentarfunktion` (`id`, `vorname`, `nachname`, `email`, `text`) VALUES
(1, 'Max', 'Jork', 'max.jork@gmx.de', 'Sehr geehrte Damen und Herren, \r\nIch wollte einmal ein Lob loswerden. Ich finde es super das alles so reibungslos geklappt hat. Das ist heutzutage nicht mehr selbstverständlich. Auch das keine Kosten entstanden sind hat mich sehr erfreut. Man kann ihr Windshot-Unternehmen mit guten Gewissen weiter empfehlen. Vielen Dank und schönes Wochenende.'),
(2, 'Susanne', 'Meier', 'susanne.meier@gmx.de', 'sehr geehrte damen und herren, ihre produkte sind wirklich weltklasse und ich kann sie garnicht krass genug bewerten. also was sie an produktn produzieren ist ja mal wirklich der absolute wahnsinn. also das glaube ich ja garnicht was sie da abliefern das geht unter keine kuhhaut was sie da machen das ist so gut also ich bewerte sie wirklich hochgradig top. da kann man nicht meckern.'),
(3, 'Peter', 'Schaffer', 'peter.schaffer@gmx.de', 'Yo was geht ab tole Produkte habt ihr hier. der waaahnsinn sag ich nur respeeekt wers selber macht.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kommentarfunktion`
--
ALTER TABLE `kommentarfunktion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kommentarfunktion`
--
ALTER TABLE `kommentarfunktion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
