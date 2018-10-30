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


-- Dumping database structure for firma
DROP DATABASE IF EXISTS `firma`;
CREATE DATABASE IF NOT EXISTS `firma` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `firma`;

-- Dumping structure for table firma.odjeli
DROP TABLE IF EXISTS `odjeli`;
CREATE TABLE IF NOT EXISTS `odjeli` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table firma.odjeli: ~4 rows (approximately)
DELETE FROM `odjeli`;
/*!40000 ALTER TABLE `odjeli` DISABLE KEYS */;
INSERT INTO `odjeli` (`id`, `naziv`) VALUES
	(1, 'Ekonomski'),
	(2, 'Kadrovski'),
	(3, 'Proizvodnja'),
	(4, 'Skladište'),
	(5, 'Održavanje');
/*!40000 ALTER TABLE `odjeli` ENABLE KEYS */;

-- Dumping structure for table firma.zaposlenici
DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `odjeli_id` int(3) NOT NULL DEFAULT '0',
  `sef_id` int(4) DEFAULT '0',
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_zaposlenici_odjeli` (`odjeli_id`),
  KEY `FK_zaposlenici_zaposlenici` (`sef_id`),
  CONSTRAINT `FK_zaposlenici_odjeli` FOREIGN KEY (`odjeli_id`) REFERENCES `odjeli` (`id`),
  CONSTRAINT `FK_zaposlenici_zaposlenici` FOREIGN KEY (`sef_id`) REFERENCES `zaposlenici` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table firma.zaposlenici: ~2 rows (approximately)
DELETE FROM `zaposlenici`;
/*!40000 ALTER TABLE `zaposlenici` DISABLE KEYS */;
INSERT INTO `zaposlenici` (`id`, `odjeli_id`, `sef_id`, `ime`) VALUES
	(3, 1, NULL, 'Ivo'),
	(4, 2, 3, 'Marica'),
	(5, 3, 4, 'Ante');
/*!40000 ALTER TABLE `zaposlenici` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
