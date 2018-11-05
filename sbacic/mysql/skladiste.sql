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


-- Dumping database structure for skladiste
CREATE DATABASE IF NOT EXISTS `skladiste` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `skladiste`;

-- Dumping structure for table skladiste.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(30) DEFAULT NULL,
  `Sifra_skladista` int(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Sifra_skladista` (`Sifra_skladista`),
  CONSTRAINT `Proizvod_ibfk_1` FOREIGN KEY (`id`) REFERENCES `skladisno_mjesto` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table skladiste.proizvod: ~0 rows (approximately)
DELETE FROM `proizvod`;
/*!40000 ALTER TABLE `proizvod` DISABLE KEYS */;
/*!40000 ALTER TABLE `proizvod` ENABLE KEYS */;

-- Dumping structure for table skladiste.radnik
CREATE TABLE IF NOT EXISTS `radnik` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `Ime` varchar(40) NOT NULL,
  `Prezime` varchar(40) NOT NULL,
  `Skladisno_mjesto` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Skladisno_mjesto` (`Skladisno_mjesto`),
  CONSTRAINT `Radnik_ibfk_1` FOREIGN KEY (`id`) REFERENCES `skladisno_mjesto` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table skladiste.radnik: ~0 rows (approximately)
DELETE FROM `radnik`;
/*!40000 ALTER TABLE `radnik` DISABLE KEYS */;
/*!40000 ALTER TABLE `radnik` ENABLE KEYS */;

-- Dumping structure for table skladiste.skladisno_mjesto
CREATE TABLE IF NOT EXISTS `skladisno_mjesto` (
  `ID` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(30) NOT NULL,
  `Mjesto` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table skladiste.skladisno_mjesto: ~0 rows (approximately)
DELETE FROM `skladisno_mjesto`;
/*!40000 ALTER TABLE `skladisno_mjesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `skladisno_mjesto` ENABLE KEYS */;

-- Dumping structure for table skladiste.voditelji
CREATE TABLE IF NOT EXISTS `voditelji` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `Sifra_skladista` int(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Sifra_skladista` (`Sifra_skladista`),
  CONSTRAINT `Voditelji_ibfk_1` FOREIGN KEY (`id`) REFERENCES `radnik` (`id`),
  CONSTRAINT `Voditelji_ibfk_2` FOREIGN KEY (`id`) REFERENCES `skladisno_mjesto` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table skladiste.voditelji: ~0 rows (approximately)
DELETE FROM `voditelji`;
/*!40000 ALTER TABLE `voditelji` DISABLE KEYS */;
/*!40000 ALTER TABLE `voditelji` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
