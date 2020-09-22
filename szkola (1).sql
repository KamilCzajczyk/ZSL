-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Wrz 2020, 16:38
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id_klasy` int(11) NOT NULL,
  `klasa` varchar(20) NOT NULL,
  `id_nauczyciel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`id_klasy`, `klasa`, `id_nauczyciel`) VALUES
(1, '3b2t', 1),
(2, '3b1t', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE `nauczyciel` (
  `id_nauczyciel` int(11) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `przedmiot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`id_nauczyciel`, `nazwisko`, `przedmiot`) VALUES
(1, 'Kupsik', 'Sieci'),
(2, 'Paszyn', 'Matematyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_ocena` int(11) NOT NULL,
  `ocena` int(11) DEFAULT NULL,
  `id_nauczyciel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id_klasy`),
  ADD KEY `id_nauczyciel` (`id_nauczyciel`);

--
-- Indeksy dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  ADD PRIMARY KEY (`id_nauczyciel`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id_ocena`),
  ADD KEY `id_nauczyciel` (`id_nauczyciel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  MODIFY `id_nauczyciel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_ocena` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD CONSTRAINT `klasa_ibfk_1` FOREIGN KEY (`id_nauczyciel`) REFERENCES `nauczyciel` (`id_nauczyciel`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_nauczyciel`) REFERENCES `nauczyciel` (`id_nauczyciel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
