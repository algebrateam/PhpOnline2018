/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Algebra
 * Created: 07-Nov-2018
 */

SELECT * FROM clan;

SELECT * 
FROM clan LEFT JOIN posudba ON clan.sifra_filma=posudba.sifra_filma
LEFT JOIN film ON posudba.sifra_filma=film.sifra_filma; 


SELECT * FROM v_posudba;

UPDATE `fakultet`.`v_posudba` SET `evidencija_vracanja`='Ne' WHERE  id=333;

CREATE VIEW `v_posudba_1` AS 
SELECT 
clan.ime,
clan.prezime,
clan.datum,
clan.sifra_filma,
posudba.sifra_posudbe AS id,
posudba.evidencija_vracanja,
posudba.sifra_filma AS s_filma,
film.naziv
FROM clan LEFT JOIN posudba ON clan.sifra_filma=posudba.sifra_filma
LEFT JOIN film ON posudba.sifra_filma=film.sifra_filma ;

DROP VIEW v_posudba_1;

##########################################

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


# ##########################

#CREATE VIEW v_podudba_slatkisa AS
select 
*, 
TIMESTAMPDIFF(SECOND,proizvod.created_at,proizvod.updated_at) AS vrijeme_s,
TIMESTAMPDIFF(DAY,proizvod.created_at,proizvod.updated_at) AS vrijeme_d,
TIMESTAMPDIFF(DAY,proizvod.created_at,proizvod.updated_at) * 9.99 AS platiti,
LENGTH(naziv) as duljina_naziva
from proizvod;

ALTER TABLE proizvod
ADD CONSTRAINT CHK_proizvod_naziv CHECK (LENGTH(naziv)>=2);


# #################

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5279
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for firma_nancy

USE `firma_nancy`;

-- Dumping structure for table firma_nancy.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skladiste_id` int(3) unsigned NOT NULL,
  `naziv` varchar(50) NOT NULL CHECK (LENGTH(naziv)>=2),
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_proizvod_skladista` (`skladiste_id`),
  CONSTRAINT `FK_proizvod_skladista` FOREIGN KEY (`skladiste_id`) REFERENCES `skladista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table firma_nancy.proizvod: ~4 rows (approximately)
/*!40000 ALTER TABLE `proizvod` DISABLE KEYS */;

INSERT INTO `proizvod` (`id`, `skladiste_id`, `naziv`, `created_at`, `updated_at`) VALUES
	(1, 15, 'Sladoled', '2018-11-07 19:10:53', NULL),
	(2, 15, 'Čokolada', '2018-11-07 19:11:21', NULL),
	(3, 16, 'Mozzart kugle', '2018-11-05 19:12:10', '2018-11-07 19:18:45'),
	(5, 15, 'AS', '2018-11-07 19:45:48', NULL);
	
/*!40000 ALTER TABLE `proizvod` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

# ###################
USE upisi;
UPDATE polaznici SET polaznici.br_tel=321 WHERE polaznici.sifra=7;
DELETE FROM polaznici WHERE polaznici.br_tel=99;

# ###################
CREATE VIEW v_nastavnici AS
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
mjesto.nazMjesto
FROM nastavnik LEFT JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr;


SELECT *, 
MONTH(ispit.datIspit) as mjesec,
DATE_FORMAT(ispit.datIspit,'Godina %Y, dan %e') formatirani_datum
FROM ispit;



# ###################

#CREATE VIEW v_ispiti_detaljno AS
SELECT
s.imeStud,
s.prezStud,
POWER(i.ocjena,2) as ocjenanakvadrat,
p.nazPred,
n.imeNastavnik,
n.prezNastavnik
FROM stud s INNER JOIN ispit i ON s.mbrStud=i.mbrStud
LEFT JOIN nastavnik n ON n.sifNastavnik=i.sifNastavnik
LEFT JOIN pred p ON i.sifPred=p.sifPred LIMIT 50;

SELECT * FROM v_ispiti_detaljno;




# ###################

UPDATE `firma_nancy`.`v_podudba_slatkisa` SET `grad`='Sisak' WHERE  `prod_id`=9;
# ###################









