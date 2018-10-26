-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Paź 2018, 13:59
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
-- Baza danych: `sensowna_nazwa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oddzial_psychiatryczny`
--

CREATE TABLE `oddzial_psychiatryczny` (
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `Numer_Pacjenta` int(11) NOT NULL,
  `Kategoria` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oddzial_psychiatryczny`
--

INSERT INTO `oddzial_psychiatryczny` (`Imie`, `Nazwisko`, `Numer_Pacjenta`, `Kategoria`) VALUES
('Janusz', 'Kurde', 43214325, 'zyd'),
('Gusaw', 'Gustlig', 1, 'Obersturmmannfuher'),
('Huber', 'Orman', 99700012, 'naczelny_zyd'),
('Michau', 'Rychlik', 21424321, 'Zyden'),
('Bartosz', 'Olejnik', 104213, 'Naczelny_mudzin'),
('Janusz', 'Kurde', 43214325, 'zyd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
