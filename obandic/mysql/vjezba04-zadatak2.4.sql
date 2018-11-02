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


-- Dumping database structure for trgovina
DROP DATABASE IF EXISTS `trgovina`;
CREATE DATABASE IF NOT EXISTS `trgovina` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `trgovina`;

-- Dumping structure for table trgovina.proizvod
DROP TABLE IF EXISTS `proizvod`;
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id_proizvoda` int(5) NOT NULL,
  `naziv_proizvoda` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_skladista` int(3) NOT NULL,
  PRIMARY KEY (`id_proizvoda`),
  KEY `id_skladista` (`id_skladista`),
  CONSTRAINT `FK_proizvod_skladisno_mjesto` FOREIGN KEY (`id_skladista`) REFERENCES `skladisno_mjesto` (`id_skladista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table trgovina.proizvod: ~9 rows (approximately)
DELETE FROM `proizvod`;
/*!40000 ALTER TABLE `proizvod` DISABLE KEYS */;
INSERT INTO `proizvod` (`id_proizvoda`, `naziv_proizvoda`, `id_skladista`) VALUES
	(30001, 'opeka - mega blok', 1),
	(30002, 'opeka - termo blok', 1),
	(30003, 'opeka - mega blok', 2),
	(30004, 'opeka - termo blok', 2),
	(30005, 'crijep', 1),
	(30006, 'crijep', 2),
	(30007, 'greda', 3),
	(30008, 'greda', 4),
	(30009, 'daska', 3),
	(30010, 'daska', 4);
/*!40000 ALTER TABLE `proizvod` ENABLE KEYS */;

-- Dumping structure for table trgovina.radnik
DROP TABLE IF EXISTS `radnik`;
CREATE TABLE IF NOT EXISTS `radnik` (
  `id_radnika` int(4) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_skladista` int(3) NOT NULL,
  `voditelj_skladista` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_radnika`),
  KEY `id_skladista` (`id_skladista`),
  CONSTRAINT `FK_radnik_skladisno_mjesto` FOREIGN KEY (`id_skladista`) REFERENCES `skladisno_mjesto` (`id_skladista`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table trgovina.radnik: ~8 rows (approximately)
DELETE FROM `radnik`;
/*!40000 ALTER TABLE `radnik` DISABLE KEYS */;
INSERT INTO `radnik` (`id_radnika`, `ime`, `prezime`, `id_skladista`, `voditelj_skladista`) VALUES
	(1, 'Ana', 'Anić', 1, 'da'),
	(2, 'Mate', 'Matić', 1, 'ne'),
	(3, 'Pero', 'Perić', 3, 'ne'),
	(4, 'Iva', 'Ivić', 2, 'ne'),
	(5, 'Patra', 'Petrović', 4, 'ne'),
	(6, 'Duje', 'Dujmović', 4, 'da'),
	(7, 'Šime', 'Šimić', 3, 'da'),
	(8, 'Kate', 'Katić', 2, 'da');
/*!40000 ALTER TABLE `radnik` ENABLE KEYS */;

-- Dumping structure for table trgovina.skladisno_mjesto
DROP TABLE IF EXISTS `skladisno_mjesto`;
CREATE TABLE IF NOT EXISTS `skladisno_mjesto` (
  `id_skladista` int(3) NOT NULL,
  `naziv_skladista` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mjesto_skladista` enum('Zagreb','Rijeka','Sisak') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_skladista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table trgovina.skladisno_mjesto: ~4 rows (approximately)
DELETE FROM `skladisno_mjesto`;
/*!40000 ALTER TABLE `skladisno_mjesto` DISABLE KEYS */;
INSERT INTO `skladisno_mjesto` (`id_skladista`, `naziv_skladista`, `mjesto_skladista`) VALUES
	(1, 'opeka & crijep', 'Zagreb'),
	(2, 'opeka & crijep', 'Rijeka'),
	(3, 'drvena građa', 'Sisak'),
	(4, 'drvena građa', 'Zagreb');
/*!40000 ALTER TABLE `skladisno_mjesto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
