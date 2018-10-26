-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Paź 2018, 13:58
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
-- Baza danych: `spismiejscowosci`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id` int(11) NOT NULL,
  `nazwaMiasta` text COLLATE utf8_polish_ci NOT NULL,
  `polozenie` text COLLATE utf8_polish_ci NOT NULL,
  `iloscMieszkancow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id`, `nazwaMiasta`, `polozenie`, `iloscMieszkancow`) VALUES
(1, 'Warszawa', 'Polska', 1735000),
(2, 'Berlin', 'Niemcy', 3470000),
(3, 'Londyn', 'Anglia', 8136000),
(4, 'Moskwa', 'Rosja', 11920000),
(5, 'Szczecin', 'Polska', 404461),
(6, 'Poznań', 'Polska', 540372),
(7, 'Kolonia', 'Niemcy', 1061000),
(8, 'Monachium', 'Niemcy', 1450000),
(9, 'Petersburg', 'Rosja', 4991000),
(10, 'Manchester', 'Anglia', 510746);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rzeki`
--

CREATE TABLE `rzeki` (
  `id` int(11) NOT NULL,
  `nazwaRzeki` text COLLATE utf8_polish_ci NOT NULL,
  `położenie` text COLLATE utf8_polish_ci NOT NULL,
  `długość` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rzeki`
--

INSERT INTO `rzeki` (`id`, `nazwaRzeki`, `położenie`, `długość`) VALUES
(1, 'Wisła', 'Polska', 1047),
(2, 'Ren', 'Niemcy', 1233),
(3, 'Wołga', 'Rosja', 3530),
(4, 'Tamiza', 'Anglia', 346);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indeksy dla tabeli `rzeki`
--
ALTER TABLE `rzeki`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
