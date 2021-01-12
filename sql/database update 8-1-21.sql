-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 08 jan 2021 om 09:17
-- Serverversie: 5.7.24
-- PHP-versie: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curiotijd`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `achievement` varchar(255) NOT NULL,
  `experience` enum('50','100','150','200') NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `achievements`
--

INSERT INTO `achievements` (`id`, `achievement`, `experience`, `created_by`) VALUES
(3, 'kaasje', '50', 1),
(9, 'test', '50', 1),
(10, 'login', '200', 1),
(11, 'login', '200', 1),
(12, 'achievement', '200', 1),
(13, 'awdaw', '50', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `achievement_lists`
--

CREATE TABLE `achievement_lists` (
  `id` int(11) NOT NULL,
  `chievementid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `Date_completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `curiotijds`
--

CREATE TABLE `curiotijds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `total_EXP` int(11) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `total_EXP`, `Class`, `firstname`, `lastname`) VALUES
(1, 'test', 'vanderstaaijkevin@gmail.com', 'test123', 2000, 'amo2b', 'Kevin', 'van der Staaij');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasklist`
--

CREATE TABLE `tasklist` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `studentid` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('Afgerond','Bezig','not_started','') NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tasklist`
--

INSERT INTO `tasklist` (`id`, `task`, `studentid`, `deadline`, `status`, `feedback`) VALUES
(1, 'iets iin de database zetten', 1, '1233-03-12', 'Afgerond', ''),
(2, 'iets iin de database zetten', 1, '1233-03-12', 'Afgerond', ''),
(3, 'iets in de database', 1, '1233-03-12', 'Bezig', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teacher`
--

INSERT INTO `teacher` (`id`, `firstname`, `lastname`, `email`, `password`, `username`) VALUES
(1, 'piet', 'kees', 'pietkees@gmail.com', 'ikbenpiet', 'pietkees');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`) USING BTREE;

--
-- Indexen voor tabel `achievement_lists`
--
ALTER TABLE `achievement_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chievementid` (`chievementid`,`studentid`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexen voor tabel `curiotijds`
--
ALTER TABLE `curiotijds`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `achievement_lists`
--
ALTER TABLE `achievement_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `curiotijds`
--
ALTER TABLE `curiotijds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `teacher` (`id`);

--
-- Beperkingen voor tabel `achievement_lists`
--
ALTER TABLE `achievement_lists`
  ADD CONSTRAINT `achievement_lists_ibfk_1` FOREIGN KEY (`chievementid`) REFERENCES `achievements` (`id`),
  ADD CONSTRAINT `achievement_lists_ibfk_2` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
