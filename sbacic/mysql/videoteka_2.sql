-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for videoteka_2
CREATE DATABASE IF NOT EXISTS `videoteka_2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `videoteka_2`;

-- Dumping structure for table videoteka_2.cjenik
CREATE TABLE IF NOT EXISTS `cjenik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Kategorija` varchar(30) NOT NULL,
  `Cijena` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka_2.cjenik: ~0 rows (approximately)
DELETE FROM `cjenik`;
/*!40000 ALTER TABLE `cjenik` DISABLE KEYS */;
/*!40000 ALTER TABLE `cjenik` ENABLE KEYS */;

-- Dumping structure for table videoteka_2.clanovi
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(40) NOT NULL,
  `Adresa` varchar(30) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Datum_uclanjenja` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka_2.clanovi: ~3 rows (approximately)
DELETE FROM `clanovi`;
/*!40000 ALTER TABLE `clanovi` DISABLE KEYS */;
INSERT INTO `clanovi` (`id`, `Ime`, `Prezime`, `Adresa`, `Telefon`, `Datum_uclanjenja`) VALUES
	(1, 'Marko', 'Marić', 'Put Stanova', '027363473', '2018-11-14 00:07:34'),
	(2, 'Jure', 'Jurić', 'Ivana Gundulića', '534644', '2018-11-14 00:08:34'),
	(3, 'Mario', 'Maričić', 'Nenada Mataka', '4645647', '2018-11-14 00:09:26');
/*!40000 ALTER TABLE `clanovi` ENABLE KEYS */;

-- Dumping structure for table videoteka_2.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(30) NOT NULL,
  `Redatelj` varchar(30) NOT NULL,
  `Glavni_glumci` varchar(50) NOT NULL,
  `Format` enum('Blue-Ray','DVD') NOT NULL,
  `Godina_izdanja` varchar(50) NOT NULL,
  `Status` enum('Action','Country','Science_Fiction') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  CONSTRAINT `Filmovi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zanr` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka_2.filmovi: ~0 rows (approximately)
DELETE FROM `filmovi`;
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table videoteka_2.posudba
CREATE TABLE IF NOT EXISTS `posudba` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Filmovi_id` int(3) unsigned NOT NULL,
  `Cjenik_id` int(3) unsigned NOT NULL,
  `datum_posudbe` datetime NOT NULL,
  `datum_vracanja` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Filmovi_id` (`Filmovi_id`),
  KEY `Cjenik_id` (`Cjenik_id`),
  CONSTRAINT `Posudba_ibfk_1` FOREIGN KEY (`id`) REFERENCES `clanovi` (`id`),
  CONSTRAINT `Posudba_ibfk_2` FOREIGN KEY (`id`) REFERENCES `filmovi` (`id`),
  CONSTRAINT `Posudba_ibfk_3` FOREIGN KEY (`id`) REFERENCES `cjenik` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka_2.posudba: ~0 rows (approximately)
DELETE FROM `posudba`;
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

-- Dumping structure for table videoteka_2.zanr
CREATE TABLE IF NOT EXISTS `zanr` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka_2.zanr: ~0 rows (approximately)
DELETE FROM `zanr`;
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
