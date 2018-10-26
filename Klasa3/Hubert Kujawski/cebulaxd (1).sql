-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Paź 2018, 11:19
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
-- Baza danych: `cebulaxd`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf32_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf32_polish_ci NOT NULL,
  `adres_zamieszkania` text COLLATE utf32_polish_ci NOT NULL,
  `nr_telefomu` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `adres_zamieszkania`, `nr_telefomu`) VALUES
(1, 'Janusz', 'Szlachta', 'Januszewska_13_2', 692616839),
(2, 'Grazyna', 'Rodowicz', 'Rodowita_13_3', 872759715),
(3, 'Bartej', 'Kowalski', 'Spokona12_4', 739571634),
(4, 'DAOFOhghghfghgf', 'WGES', 'FGWG', 589571634),
(5, 'fgdgdfg', '2', 'ąśśąśą', 0),
(6, 'ąśśąśą', '2', 'ąćżź', 0),
(7, '1', '2', '', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamuwienia`
--

CREATE TABLE `zamuwienia` (
  `id` int(10) UNSIGNED NOT NULL,
  `Cena` float UNSIGNED NOT NULL,
  `Nr_zamuwienia` int(11) NOT NULL,
  `adres_e_mail` text COLLATE utf32_polish_ci NOT NULL,
  `id_klijenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `zamuwienia`
--

INSERT INTO `zamuwienia` (`id`, `Cena`, `Nr_zamuwienia`, `adres_e_mail`, `id_klijenta`) VALUES
(1, 126, 1, 'janusz_szlachta_wp.pl', 1),
(2, 130, 2, 'grazyna_rodowicz_wp.pl', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamuwienia`
--
ALTER TABLE `zamuwienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klijenta` (`id_klijenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zamuwienia`
--
ALTER TABLE `zamuwienia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamuwienia`
--
ALTER TABLE `zamuwienia`
  ADD CONSTRAINT `zamuwienia_ibfk_1` FOREIGN KEY (`id_klijenta`) REFERENCES `uzytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
