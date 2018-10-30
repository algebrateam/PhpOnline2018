-- --------------------------------------------------------
-- Poslužitelj:                  127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Verzija:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for firma
DROP DATABASE IF EXISTS `firma`;
CREATE DATABASE IF NOT EXISTS `firma` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `firma`;

-- Dumping structure for table firma.odjeli
DROP TABLE IF EXISTS `odjeli`;
CREATE TABLE IF NOT EXISTS `odjeli` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table firma.proizvod
DROP TABLE IF EXISTS `proizvod`;
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skladiste_id` int(3) unsigned NOT NULL,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_proizvod_skladista` (`skladiste_id`),
  CONSTRAINT `FK_proizvod_skladista` FOREIGN KEY (`skladiste_id`) REFERENCES `skladista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table firma.skladista
DROP TABLE IF EXISTS `skladista`;
CREATE TABLE IF NOT EXISTS `skladista` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `grad` enum('Zagreb','Rijeka','Sisak') NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `sef_id` int(4) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_skladista_zaposlenici` (`sef_id`),
  CONSTRAINT `FK_skladista_zaposlenici` FOREIGN KEY (`sef_id`) REFERENCES `zaposlenici` (`sef_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table firma.zaposlenici
DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `odjeli_id` int(3) NOT NULL DEFAULT '0',
  `sef_id` int(4) unsigned DEFAULT NULL,
  `ime` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_zaposlenici_odjeli` (`odjeli_id`),
  KEY `sef_id` (`sef_id`),
  CONSTRAINT `FK_zaposlenici_odjeli` FOREIGN KEY (`odjeli_id`) REFERENCES `odjeli` (`id`),
  CONSTRAINT `FK_zaposlenici_zaposlenici` FOREIGN KEY (`sef_id`) REFERENCES `zaposlenici` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
