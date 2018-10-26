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
-- Baza danych: `testowabazadanych`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testowatabela`
--

CREATE TABLE `testowatabela` (
  `Imie` text COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `Telefon` text COLLATE utf8_polish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `testowatabela`
--

INSERT INTO `testowatabela` (`Imie`, `Nazwisko`, `Telefon`, `id`) VALUES
('Daniel', 'Kowalski', '613826193', 1),
('Nikola', 'Kowalska', '756843367', 2),
('Adrianna', 'Kowalska', '657174927', 3),
('ewa', 'kowalska', '123456789', 4),
('hanna', 'kowalska', '123584960', 5),
('jan', 'kowalski', '637564857', 6),
('jan', 'kowalski', '857463928', 7),
('jan', 'kowalski', '967486536', 8),
('Irek', 'kowalski', '747536291', 9),
('Olek', 'kowalski', '967504864', 10),
('Piotr', 'kowalski', '749658452', 11),
('Laura', 'kowalska', '785758305', 12),
('Kamil', 'kowalski', '648674076', 13),
('Milena', 'kowalska', '547596046', 14),
('Robert', 'kowalski', '768574098', 15);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `testowatabela`
--
ALTER TABLE `testowatabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `testowatabela`
--
ALTER TABLE `testowatabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
