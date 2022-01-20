-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Gru 2021, 20:58
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `stack`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kategorii` int(10) UNSIGNED NOT NULL,
  `nazwa_kategorii` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id_kategorii`, `nazwa_kategorii`) VALUES
(1, 'Śmieszne'),
(2, 'Krajobraz'),
(3, 'Sztuka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logi`
--

CREATE TABLE `logi` (
  `id_uzytkownika` int(11) UNSIGNED NOT NULL,
  `data_logowania` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `logi`
--

INSERT INTO `logi` (`id_uzytkownika`, `data_logowania`) VALUES
(1, '2021-12-27 15:10:21'),
(1, '2021-12-27 15:10:44'),
(1, '2021-12-27 15:24:42'),
(1, '2021-12-27 15:56:54'),
(2, '2021-12-27 16:24:16'),
(2, '2021-12-27 16:34:31'),
(2, '2021-12-27 16:56:18'),
(1, '2021-12-27 16:57:15'),
(2, '2021-12-27 19:12:02'),
(3, '2021-12-27 19:17:26'),
(4, '2021-12-27 19:18:31'),
(4, '2021-12-27 19:19:49'),
(2, '2021-12-27 19:59:41'),
(5, '2021-12-27 20:01:30'),
(2, '2021-12-27 20:25:52'),
(2, '2021-12-27 20:26:40'),
(2, '2021-12-27 20:28:50'),
(2, '2021-12-27 20:31:39'),
(2, '2021-12-28 10:14:59'),
(2, '2021-12-28 10:17:08'),
(2, '2021-12-28 10:50:38'),
(1, '2021-12-28 10:51:20'),
(5, '2021-12-28 10:51:56'),
(1, '2021-12-28 10:53:51'),
(1, '2021-12-28 10:53:55'),
(1, '2021-12-28 10:54:22'),
(2, '2021-12-28 12:56:30'),
(2, '2021-12-28 12:58:02'),
(2, '2021-12-28 13:00:06'),
(1, '2021-12-28 13:04:38'),
(2, '2021-12-28 14:48:36'),
(5, '2021-12-28 14:54:20'),
(2, '2021-12-28 17:08:40'),
(2, '2021-12-28 17:25:54'),
(1, '2021-12-28 18:18:02'),
(2, '2021-12-28 18:22:01'),
(2, '2021-12-28 20:14:31'),
(1, '2021-12-28 20:15:41'),
(5, '2021-12-28 20:19:56');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obrazek_kategorie`
--

CREATE TABLE `obrazek_kategorie` (
  `id_obrazka` int(10) UNSIGNED NOT NULL,
  `id_kategorii` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obrazki`
--

CREATE TABLE `obrazki` (
  `id_obrazka` int(10) UNSIGNED NOT NULL,
  `id_uzytkownika` int(10) UNSIGNED NOT NULL,
  `obrazek` varchar(64) NOT NULL,
  `tytul` varchar(20) NOT NULL,
  `opis` varchar(40) DEFAULT '',
  `data_wygasniecia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polubienia`
--

CREATE TABLE `polubienia` (
  `id_obrazka` int(10) UNSIGNED DEFAULT NULL,
  `id_uzytkownika` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(10) UNSIGNED NOT NULL,
  `login` varchar(16) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`, `data_utworzenia`) VALUES
(1, 'brzeku', '695435f33f4f126d549756d7b2f1fd43', '2021-12-27 13:46:01'),
(2, 'roju', '695435f33f4f126d549756d7b2f1fd43', '2021-12-27 16:24:16'),
(3, 'Gawluk', '695435f33f4f126d549756d7b2f1fd43', '2021-12-27 19:17:26'),
(4, 'Kamil', '03d6ee65431d6996da8d679d48350706', '2021-12-27 19:18:31'),
(5, 'Komandos', '32a5b602ff5c798b323300c83f0c0f4b', '2021-12-27 20:01:30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kategorii`);

--
-- Indeksy dla tabeli `logi`
--
ALTER TABLE `logi`
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `obrazek_kategorie`
--
ALTER TABLE `obrazek_kategorie`
  ADD KEY `id_obrazka` (`id_obrazka`),
  ADD KEY `id_kategorii` (`id_kategorii`);

--
-- Indeksy dla tabeli `obrazki`
--
ALTER TABLE `obrazki`
  ADD PRIMARY KEY (`id_obrazka`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD KEY `id_uzytkownika` (`id_uzytkownika`),
  ADD KEY `id_obrazka` (`id_obrazka`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kategorii` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `obrazki`
--
ALTER TABLE `obrazki`
  MODIFY `id_obrazka` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `logi`
--
ALTER TABLE `logi`
  ADD CONSTRAINT `logi_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`);

--
-- Ograniczenia dla tabeli `obrazek_kategorie`
--
ALTER TABLE `obrazek_kategorie`
  ADD CONSTRAINT `obrazek_kategorie_ibfk_1` FOREIGN KEY (`id_obrazka`) REFERENCES `obrazki` (`id_obrazka`),
  ADD CONSTRAINT `obrazek_kategorie_ibfk_2` FOREIGN KEY (`id_kategorii`) REFERENCES `kategorie` (`id_kategorii`);

--
-- Ograniczenia dla tabeli `obrazki`
--
ALTER TABLE `obrazki`
  ADD CONSTRAINT `obrazki_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`);

--
-- Ograniczenia dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD CONSTRAINT `polubienia_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`),
  ADD CONSTRAINT `polubienia_ibfk_2` FOREIGN KEY (`id_obrazka`) REFERENCES `obrazki` (`id_obrazka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
