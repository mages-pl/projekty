-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Paź 2018, 10:55
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szypko`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adresy`
--

CREATE TABLE `adresy` (
  `id` int(11) NOT NULL,
  `ulica` text COLLATE utf8_polish_ci NOT NULL,
  `kod` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `idKlienta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adresy`
--

INSERT INTO `adresy` (`id`, `ulica`, `kod`, `miasto`, `idKlienta`) VALUES
(1, 'bbmnmbmnbm', '00889', 'kbbnmbn', 0),
(2, 'dasdasd', '123123', 'dasfsdf', 0),
(3, 'dasdasf', '6654645', 'dasdasd', 0),
(4, 'jakastam', '123', 'ZPY', 0),
(5, 'sikakasdfnjhbdfgjkbn', '5454', 'Tym razem Szczecin', 0),
(6, 'jakastam3', '1234', 'ZPY', 0),
(7, 'sikalabumba', '23456346', 'ZPY', 0),
(8, 'sdf', '555', 'ZPY', 0),
(9, 'jakastam4', '123455564', 'ZPY', 0),
(10, 'zmieniamwartosc', '78-115', 'ZPY', 0),
(11, 'jakastam2', '123', '', 0),
(12, 'jakastam5', '789', 'ZPY', 0),
(13, 'Staromiejska', '74-200', 'Pyrzyce', 0),
(14, 'Warszawska', '74-200', 'Pyrzyce', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `ImieKlienta` text COLLATE utf8_polish_ci NOT NULL,
  `NazwiskoKlienta` text COLLATE utf8_polish_ci NOT NULL,
  `MajatekKlienta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `ImieKlienta`, `NazwiskoKlienta`, `MajatekKlienta`) VALUES
(0, 'Andrzej', 'Kowalewski ', 12453),
(1, 'Dariusz', 'Biokuźnia', 123123),
(2564, 'Wacław', 'Kutasiewicz', 33645),
(2565, '1', '12', 12),
(2566, 'ssdfsdf', 'sdfsd', 0),
(2567, 'sdfdsfsdf', '4234324', 345234000);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adresy`
--
ALTER TABLE `adresy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKlienta` (`idKlienta`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `adresy`
--
ALTER TABLE `adresy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2568;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `adresy`
--
ALTER TABLE `adresy`
  ADD CONSTRAINT `adresy_ibfk_1` FOREIGN KEY (`idKlienta`) REFERENCES `klienci` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
