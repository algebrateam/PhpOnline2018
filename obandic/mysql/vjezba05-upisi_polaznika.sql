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


-- Dumping database structure for upisi_polaznika
DROP DATABASE IF EXISTS `upisi_polaznika`;
CREATE DATABASE IF NOT EXISTS `upisi_polaznika` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `upisi_polaznika`;

-- Dumping structure for table upisi_polaznika.polaznici
DROP TABLE IF EXISTS `polaznici`;
CREATE TABLE IF NOT EXISTS `polaznici` (
  `sifra_polaznika` int(11) NOT NULL AUTO_INCREMENT,
  `ime` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `mjesto_stanovanja` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sifra_polaznika`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table upisi_polaznika.polaznici: ~6 rows (approximately)
DELETE FROM `polaznici`;
/*!40000 ALTER TABLE `polaznici` DISABLE KEYS */;
INSERT INTO `polaznici` (`sifra_polaznika`, `ime`, `prezime`, `mjesto_stanovanja`) VALUES
	(1, 'Ana', 'Milić', 'Zagreb'),
	(2, 'Sanja', 'Tarak', 'Split'),
	(3, 'Mladen', 'Gork', 'Osijek'),
	(4, 'Ivana', 'Matkić', 'Split'),
	(5, 'Marina', 'Anić', 'Osijek'),
	(6, 'Ivica', 'Limac', 'Split');
/*!40000 ALTER TABLE `polaznici` ENABLE KEYS */;

-- Dumping structure for table upisi_polaznika.tecajevi
DROP TABLE IF EXISTS `tecajevi`;
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `sifra_tecaja` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `naziv_tecaja` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra_tecaja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table upisi_polaznika.tecajevi: ~6 rows (approximately)
DELETE FROM `tecajevi`;
/*!40000 ALTER TABLE `tecajevi` DISABLE KEYS */;
INSERT INTO `tecajevi` (`sifra_tecaja`, `naziv_tecaja`) VALUES
	('D01', 'SQL - osnove'),
	('D05', 'Osnove i teorija C++'),
	('O01', 'Račnalni operator - uredsko poslovanje'),
	('O02', 'Specijalist poslovne primjene računala'),
	('O03', 'Grafički dizajner'),
	('P01', 'Osnove rada PC računala'),
	('P02', 'Microsoft Word');
/*!40000 ALTER TABLE `tecajevi` ENABLE KEYS */;

-- Dumping structure for table upisi_polaznika.upisi
DROP TABLE IF EXISTS `upisi`;
CREATE TABLE IF NOT EXISTS `upisi` (
  `sifra_polaznika` int(11) NOT NULL AUTO_INCREMENT,
  `sifra_tecaja` char(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra_polaznika`,`sifra_tecaja`),
  KEY `sifra_polaznika` (`sifra_polaznika`),
  KEY `sifra_tecaja` (`sifra_tecaja`),
  CONSTRAINT `FK_upisi_polaznici` FOREIGN KEY (`sifra_polaznika`) REFERENCES `polaznici` (`sifra_polaznika`),
  CONSTRAINT `FK_upisi_tecajevi` FOREIGN KEY (`sifra_tecaja`) REFERENCES `tecajevi` (`sifra_tecaja`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table upisi_polaznika.upisi: ~6 rows (approximately)
DELETE FROM `upisi`;
/*!40000 ALTER TABLE `upisi` DISABLE KEYS */;
INSERT INTO `upisi` (`sifra_polaznika`, `sifra_tecaja`) VALUES
	(1, 'P01'),
	(2, 'P02'),
	(3, 'D01'),
	(4, 'D05'),
	(4, 'O01'),
	(5, 'O02'),
	(6, 'P01');
/*!40000 ALTER TABLE `upisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
