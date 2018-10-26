-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Wrz 2018, 09:30
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
-- Baza danych: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `id` int(11) NOT NULL,
  `uzytkownik_id` int(11) NOT NULL,
  `kategoria` int(11) NOT NULL,
  `podkategoria` int(11) NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES
(1, 8, 1, 2, 'W pustyni i w puszczy', 'Pustynia'),
(2, 9, 1, 2, 'Ten obcy', 'Obcy obcy obcy'),
(3, 12, 1, 2, 'Potop', 'Potop szwedzki'),
(4, 11, 1, 2, 'Potop', 'Potop szwedzki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES
(8, 'Ewa', 'Kowalska', '600 423 532', 'ewusia@gmail.com'),
(9, 'Kazimierz', 'Wielki', '780 543 677', 'kazmirz12@wp.pl'),
(10, 'Andrzej', 'Równy', '600 723 113', 'andrju15@onet.pl'),
(11, 'Natasza', 'Blokus', '781 506 104', 'natasza-blokus@gmail.com'),
(12, 'Edward', 'Ącki', '560 356 777', 'edziu1989@gmail.com'),
(13, 'Bolesław', 'Chrobry', '997 998 999', 'bolekpierwszyról@wp.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uzytkownik_id` (`uzytkownik_id`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD CONSTRAINT `ogloszenie_ibfk_1` FOREIGN KEY (`uzytkownik_id`) REFERENCES `uzytkownik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
