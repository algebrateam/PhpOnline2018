-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 09:09 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE `clan` (
  `sifra_clana` int(11) NOT NULL,
  `ime` char(30) DEFAULT NULL,
  `prezime` char(30) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `sifra_filma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clan`
--

INSERT INTO `clan` (`sifra_clana`, `ime`, `prezime`, `datum`, `sifra_filma`) VALUES
(1, 'Ante', 'Antic', '2018-10-08', 11),
(2, 'Ivo', 'Ivic', '2018-11-22', 22),
(3, 'Pavo', 'Pavic', '2018-03-04', 33);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `sifra_filma` int(11) NOT NULL,
  `naziv` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`sifra_filma`, `naziv`) VALUES
(11, 'Bohemian Rhapsody'),
(22, 'Colette'),
(33, 'Venom');

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE `posudba` (
  `sifra_posudbe` int(11) NOT NULL,
  `evidencija_vracanja` char(30) DEFAULT NULL,
  `sifra_filma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posudba`
--

INSERT INTO `posudba` (`sifra_posudbe`, `evidencija_vracanja`, `sifra_filma`) VALUES
(111, 'Ne', 11),
(222, 'Da', 22),
(333, 'Da', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`sifra_clana`),
  ADD KEY `sifra_filma` (`sifra_filma`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`sifra_filma`);

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD PRIMARY KEY (`sifra_posudbe`),
  ADD KEY `sifra_filma` (`sifra_filma`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clan`
--
ALTER TABLE `clan`
  ADD CONSTRAINT `clan_ibfk_1` FOREIGN KEY (`sifra_filma`) REFERENCES `film` (`sifra_filma`);

--
-- Constraints for table `posudba`
--
ALTER TABLE `posudba`
  ADD CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`sifra_filma`) REFERENCES `film` (`sifra_filma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
