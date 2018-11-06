-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 30 Paź 2018, 18:56
-- Wersja serwera: 5.7.20
-- Wersja PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola_dziennik`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `idKlasa` int(11) NOT NULL,
  `nazwa` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `specjalizacja` varchar(250) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`idKlasa`, `nazwa`, `specjalizacja`) VALUES
(1, '4 TI', 'Technik Informatyk'),
(2, '4 TMR', 'Technik Mechanizacji Rolnictwa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listanauczycieli`
--

CREATE TABLE `listanauczycieli` (
  `idlistaNauczycieli` int(11) NOT NULL,
  `imie` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `listanauczycieli`
--

INSERT INTO `listanauczycieli` (`idlistaNauczycieli`, `imie`, `nazwisko`, `email`) VALUES
(6, 'Katarzyna', 'Banaszczyk', 'k.banaszczyk@zscku.pl'),
(10, 'Tomasz', 'Błażejewski', 't.blazejewski@zscku.pl'),
(11, 'Anna', 'Bogusz', 'a.bogusz@zscku.pl'),
(12, 'Marlena', 'Borowiec', 'm.borowiec@zscku.pl'),
(13, 'Małgorzata', 'Cichocka', 'm.cichocka@zscku.pl'),
(14, 'Ewa', 'Cywińska', 'e.cywinska@zscku.pl'),
(15, 'Marta', 'Cywińska', 'm.cywinska@zscku.pl'),
(16, 'Jakub', 'Dacko', 'j.dacko@zscku.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listauczniow`
--

CREATE TABLE `listauczniow` (
  `listaUczniow` int(11) NOT NULL,
  `imie` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `Klasa_idKlasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `listauczniow`
--

INSERT INTO `listauczniow` (`listaUczniow`, `imie`, `nazwisko`, `Klasa_idKlasa`) VALUES
(70, 'Łukasz', 'Augustyniak', 1),
(71, 'Elżbieta', 'Cierniak', 1),
(72, 'Wojciech', 'Grabowski', 1),
(73, 'Krzysztof', 'Kłonowski', 1),
(74, 'Jakub', 'Knapiński', 1),
(75, 'Paweł', 'Korylak', 1),
(76, 'Filip', 'Kowalczyk', 1),
(77, 'Jakub', 'Kowalczyk', 1),
(78, 'Patryk', 'Latoszewski', 1),
(79, 'Jarosław', 'Muskała', 1),
(80, 'Bartłomiej', 'Niewiadomski', 1),
(81, 'Natan', 'Panasiuk', 1),
(82, 'Adrian', 'Połczyński', 1),
(83, 'Tomasz', 'Socha', 1),
(84, 'Dawid', 'Majka', 2),
(85, 'Łukasz', 'Pawluk', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nr_lekcji`
--

CREATE TABLE `nr_lekcji` (
  `id_lekcji` int(11) NOT NULL,
  `nr_lekcji` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obecnosc`
--

CREATE TABLE `obecnosc` (
  `idObecnosc` int(11) NOT NULL,
  `stan` enum('O','N') COLLATE utf8_polish_ci NOT NULL,
  `listaUczniow_idlistaUczniow` int(11) NOT NULL,
  `Zajecia_idZajecia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `idOceny` int(11) NOT NULL,
  `Prrzedmioty_idPrzedmioty` int(11) NOT NULL,
  `wartosc` enum('1','2','3','4','5','6') COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `idOpinie` int(20) NOT NULL,
  `status` enum('P','N','','') COLLATE utf8_polish_ci NOT NULL,
  `listaUczniow_idlistaUczniow` int(11) NOT NULL,
  `listaNauczycieli_idlistaNauczycieli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `idPrzedmioty` int(11) NOT NULL,
  `nazwa` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zajecia`
--

CREATE TABLE `zajecia` (
  `idZajecia` int(11) NOT NULL,
  `Temat` text COLLATE utf8_polish_ci NOT NULL,
  `Przedmioty_idPrzedmioty` int(11) NOT NULL,
  `listaNauczycieli_idlistaNauczycieli` int(11) NOT NULL,
  `Klasa_idKlasa` int(11) NOT NULL,
  `dzien_zajecia` date NOT NULL,
  `nr_lekcji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`idKlasa`);

--
-- Indexes for table `listanauczycieli`
--
ALTER TABLE `listanauczycieli`
  ADD PRIMARY KEY (`idlistaNauczycieli`);

--
-- Indexes for table `listauczniow`
--
ALTER TABLE `listauczniow`
  ADD PRIMARY KEY (`listaUczniow`),
  ADD KEY `Klasa_idKlasa` (`Klasa_idKlasa`);

--
-- Indexes for table `nr_lekcji`
--
ALTER TABLE `nr_lekcji`
  ADD PRIMARY KEY (`id_lekcji`);

--
-- Indexes for table `obecnosc`
--
ALTER TABLE `obecnosc`
  ADD PRIMARY KEY (`idObecnosc`),
  ADD KEY `Zajecia_idZajecia` (`Zajecia_idZajecia`),
  ADD KEY `listaUczniow_idlistaUczniow` (`listaUczniow_idlistaUczniow`);

--
-- Indexes for table `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`idOceny`),
  ADD KEY `Prrzedmioty_idPrzedmioty` (`Prrzedmioty_idPrzedmioty`);

--
-- Indexes for table `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`idOpinie`),
  ADD KEY `listaNauczycieli_idlistaNauczycieli` (`listaNauczycieli_idlistaNauczycieli`),
  ADD KEY `listaUczniow_idlistaUczniow` (`listaUczniow_idlistaUczniow`);

--
-- Indexes for table `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`idPrzedmioty`);

--
-- Indexes for table `zajecia`
--
ALTER TABLE `zajecia`
  ADD PRIMARY KEY (`idZajecia`),
  ADD KEY `Klasa_idKlasa` (`Klasa_idKlasa`),
  ADD KEY `listaNauczycieli_idlistaNauczycieli` (`listaNauczycieli_idlistaNauczycieli`),
  ADD KEY `Przedmioty_idPrzedmioty` (`Przedmioty_idPrzedmioty`),
  ADD KEY `nr_lekcji` (`nr_lekcji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `idKlasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `listanauczycieli`
--
ALTER TABLE `listanauczycieli`
  MODIFY `idlistaNauczycieli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT dla tabeli `listauczniow`
--
ALTER TABLE `listauczniow`
  MODIFY `listaUczniow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT dla tabeli `nr_lekcji`
--
ALTER TABLE `nr_lekcji`
  MODIFY `id_lekcji` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `obecnosc`
--
ALTER TABLE `obecnosc`
  MODIFY `idObecnosc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `idOceny` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `idOpinie` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `idPrzedmioty` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
  MODIFY `idZajecia` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `listauczniow`
--
ALTER TABLE `listauczniow`
  ADD CONSTRAINT `listauczniow_ibfk_1` FOREIGN KEY (`Klasa_idKlasa`) REFERENCES `klasa` (`idKlasa`);

--
-- Ograniczenia dla tabeli `obecnosc`
--
ALTER TABLE `obecnosc`
  ADD CONSTRAINT `obecnosc_ibfk_1` FOREIGN KEY (`Zajecia_idZajecia`) REFERENCES `zajecia` (`idZajecia`),
  ADD CONSTRAINT `obecnosc_ibfk_3` FOREIGN KEY (`listaUczniow_idlistaUczniow`) REFERENCES `listauczniow` (`listaUczniow`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`Prrzedmioty_idPrzedmioty`) REFERENCES `przedmioty` (`idPrzedmioty`);

--
-- Ograniczenia dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD CONSTRAINT `opinie_ibfk_2` FOREIGN KEY (`listaUczniow_idlistaUczniow`) REFERENCES `listauczniow` (`listaUczniow`),
  ADD CONSTRAINT `opinie_ibfk_3` FOREIGN KEY (`listaNauczycieli_idlistaNauczycieli`) REFERENCES `listanauczycieli` (`idlistaNauczycieli`);

--
-- Ograniczenia dla tabeli `zajecia`
--
ALTER TABLE `zajecia`
  ADD CONSTRAINT `zajecia_ibfk_2` FOREIGN KEY (`Przedmioty_idPrzedmioty`) REFERENCES `przedmioty` (`idPrzedmioty`),
  ADD CONSTRAINT `zajecia_ibfk_3` FOREIGN KEY (`Klasa_idKlasa`) REFERENCES `klasa` (`idKlasa`),
  ADD CONSTRAINT `zajecia_ibfk_4` FOREIGN KEY (`nr_lekcji`) REFERENCES `nr_lekcji` (`id_lekcji`),
  ADD CONSTRAINT `zajecia_ibfk_5` FOREIGN KEY (`listaNauczycieli_idlistaNauczycieli`) REFERENCES `listanauczycieli` (`idlistaNauczycieli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
