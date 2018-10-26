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
-- Baza danych: `uczniowie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dziennik2`
--

CREATE TABLE `dziennik2` (
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `Klasa` text COLLATE utf8_polish_ci NOT NULL,
  `Numer` text COLLATE utf8_polish_ci NOT NULL,
  `ID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dziennik2`
--

INSERT INTO `dziennik2` (`Imie`, `Nazwisko`, `Klasa`, `Numer`, `ID`) VALUES
('Andrzej', 'Grabowski', 'TI', '23', 1),
('Marcin', 'Najman', 'TPS', '15', 2),
('Cezary', 'Pazura', 'TI', '11', 3),
('Ferdynand', 'Kiepski', 'TE', '26', 4),
('Kazimierz', 'Wielki', 'TI', '5', 5),
('Arkadiusz', 'Kolegowski', 'TPS', '2', 6),
('Maryla', 'Rodowicz', 'TE', '7', 7),
('Dimitri', 'Rascalov', 'TI', '16', 8),
('Cicho', 'Ciemni', 'TI', '34', 9),
('Sami', 'Swoi', 'TPS', '10', 10),
('Donald', 'Tusk', 'TPS', '14', 11),
('Antoni', 'Macierewicz', 'TE', '21', 12),
('Stachu', 'Jones', 'TMR', '29', 13),
('Wladimir', 'Putin', 'TE', '30', 14),
('Karol', 'Krawczyk', 'TI', '27', 15),
('Carl', 'Johnson', 'TI', '3', 16),
('Krzysztof', 'Kononowicz', 'TI', '70', 17),
('Major', 'Suchodolski', 'TI', '69', 18);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `ID` int(11) NOT NULL,
  `ID_dziennik2` int(11) NOT NULL,
  `Polski` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Matematyka` text COLLATE utf8mb4_polish_ci NOT NULL,
  `WF` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dziennik2`
--
ALTER TABLE `dziennik2`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_dziennik2` (`ID_dziennik2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dziennik2`
--
ALTER TABLE `dziennik2`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
