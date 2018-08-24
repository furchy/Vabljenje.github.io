-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 17. avg 2018 ob 22.53
-- Različica strežnika: 10.1.33-MariaDB
-- Različica PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabele `vabilo`
--

CREATE TABLE `vabilo` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `priimek` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `datum` date NOT NULL,
  `dosje` int(7) NOT NULL,
  `policist` varchar(30) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `vabilo`
--

INSERT INTO `vabilo` (`id`, `ime`, `priimek`, `datum`, `dosje`, `policist`) VALUES
(1, 'Katarina', 'LupÅ¡ina', '2018-09-15', 1, 'Å½olger'),
(2, 'Katja', 'PoliÄnik', '2018-10-15', 2, 'MikoliÄ'),
(3, 'Samo', 'MoÅ¾nar', '2018-09-18', 3, 'Pernek'),
(4, 'UroÅ¡', 'KlavÅ¾ar', '2018-09-09', 4, 'Vajda'),
(5, 'Matija', 'Planko', '2018-09-28', 5, 'Furst'),
(6, 'Klemen', 'Krizar', '2018-09-14', 7, 'Markovec'),
(7, 'Miha', 'Jordan', '2018-09-11', 6, 'Vajda'),
(8, 'Peter', 'Berdnik', '2018-09-08', 7, 'Markovec'),
(9, 'Janko', 'Moder', '2018-08-23', 8, 'Pernek'),
(10, 'Nino', 'Vranes', '2018-09-20', 9, 'Furst'),
(11, 'Davor', 'Ulcar', '2018-08-26', 10, 'Pernek'),
(12, 'Klemen', 'Kranjc', '2018-08-28', 11, 'Furst'),
(17, 'Davor', 'Plahuta', '2018-08-25', 12, 'Vajda'),
(18, 'Slavko', 'Slavc', '2018-09-22', 12, 'Furst'),
(19, 'Boris', 'Stajnko', '2018-09-08', 13, 'Furst'),
(20, 'JoÅ¾e', 'GrÅ¾ina', '2018-08-29', 13, 'Mikek');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `vabilo`
--
ALTER TABLE `vabilo`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `vabilo` ADD FULLTEXT KEY `ime` (`ime`);
ALTER TABLE `vabilo` ADD FULLTEXT KEY `priimek` (`priimek`);
ALTER TABLE `vabilo` ADD FULLTEXT KEY `policist` (`policist`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `vabilo`
--
ALTER TABLE `vabilo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
