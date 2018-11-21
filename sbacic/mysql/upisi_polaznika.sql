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


-- Dumping database structure for upisi_polaznika
CREATE DATABASE IF NOT EXISTS `upisi_polaznika` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `upisi_polaznika`;

-- Dumping structure for table upisi_polaznika.polznici
CREATE TABLE IF NOT EXISTS `polznici` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(40) NOT NULL,
  `prezime` varchar(40) NOT NULL,
  `mjesto_stanovanja` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table upisi_polaznika.polznici: ~6 rows (approximately)
DELETE FROM `polznici`;
/*!40000 ALTER TABLE `polznici` DISABLE KEYS */;
INSERT INTO `polznici` (`id`, `ime`, `prezime`, `mjesto_stanovanja`) VALUES
	(1, 'Ana', 'Milić', 'Zagreb'),
	(2, 'Sanja', 'Tarak', 'Split'),
	(3, 'Mladen', 'Gork', 'Osijek'),
	(4, 'Ivana', 'Matkić', 'Split'),
	(5, 'Marina', 'Anić', 'Osijek'),
	(6, 'Ivica', 'Limić', 'Split');
/*!40000 ALTER TABLE `polznici` ENABLE KEYS */;

-- Dumping structure for table upisi_polaznika.tecajevi
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv_tecaja` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table upisi_polaznika.tecajevi: ~6 rows (approximately)
DELETE FROM `tecajevi`;
/*!40000 ALTER TABLE `tecajevi` DISABLE KEYS */;
INSERT INTO `tecajevi` (`id`, `naziv_tecaja`) VALUES
	(1, 'Osnove rada PC računala'),
	(2, 'Microsoft Word'),
	(3, 'SQL-osnove'),
	(4, 'Racunalni operator-uredsko poslovanje'),
	(5, 'Specijalist poslovne primjene računala'),
	(6, 'Grafički dizajner');
/*!40000 ALTER TABLE `tecajevi` ENABLE KEYS */;

-- Dumping structure for table upisi_polaznika.upisi
CREATE TABLE IF NOT EXISTS `upisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sifra_tecaja` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `sifra_tecaja` (`sifra_tecaja`),
  CONSTRAINT `upisi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `polznici` (`id`),
  CONSTRAINT `upisi_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tecajevi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table upisi_polaznika.upisi: ~6 rows (approximately)
DELETE FROM `upisi`;
/*!40000 ALTER TABLE `upisi` DISABLE KEYS */;
INSERT INTO `upisi` (`id`, `sifra_tecaja`) VALUES
	(3, 'N01'),
	(4, 'O01'),
	(5, 'O02'),
	(1, 'P01'),
	(6, 'P01'),
	(2, 'P02');
/*!40000 ALTER TABLE `upisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
