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


-- Dumping database structure for tvrtka_m
DROP DATABASE IF EXISTS `tvrtka_m`;
CREATE DATABASE IF NOT EXISTS `tvrtka_m` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `tvrtka_m`;

-- Dumping structure for table tvrtka_m.odjeli
DROP TABLE IF EXISTS `odjeli`;
CREATE TABLE IF NOT EXISTS `odjeli` (
  `id_odjela` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `naziv_odjela` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_odjela`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table tvrtka_m.odjeli: ~6 rows (approximately)
DELETE FROM `odjeli`;
/*!40000 ALTER TABLE `odjeli` DISABLE KEYS */;
INSERT INTO `odjeli` (`id_odjela`, `naziv_odjela`) VALUES
	('BIO', 'Bioproizvodi'),
	('DRO', 'Drogerija'),
	('IGR', 'Igračke'),
	('K&A', 'Kućanstvo & ambijent'),
	('PAP', 'Papirnica'),
	('PAR', 'Parfumerija');
/*!40000 ALTER TABLE `odjeli` ENABLE KEYS */;

-- Dumping structure for table tvrtka_m.sefovi
DROP TABLE IF EXISTS `sefovi`;
CREATE TABLE IF NOT EXISTS `sefovi` (
  `id_zaposlenika` int(4) NOT NULL AUTO_INCREMENT,
  `id_odjela` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_zaposlenika`,`id_odjela`),
  KEY `id_zaposlenika` (`id_zaposlenika`),
  KEY `id_odjela` (`id_odjela`),
  CONSTRAINT `FK_sefovi_odjeli` FOREIGN KEY (`id_odjela`) REFERENCES `odjeli` (`id_odjela`),
  CONSTRAINT `FK_sefovi_zaposlenici` FOREIGN KEY (`id_zaposlenika`) REFERENCES `zaposlenici` (`id_zaposlenika`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table tvrtka_m.sefovi: ~6 rows (approximately)
DELETE FROM `sefovi`;
/*!40000 ALTER TABLE `sefovi` DISABLE KEYS */;
INSERT INTO `sefovi` (`id_zaposlenika`, `id_odjela`) VALUES
	(2, 'IGR'),
	(4, 'K&A'),
	(7, 'DRO'),
	(9, 'BIO'),
	(12, 'PAR'),
	(13, 'PAP');
/*!40000 ALTER TABLE `sefovi` ENABLE KEYS */;

-- Dumping structure for table tvrtka_m.zaposlenici
DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `id_zaposlenika` int(4) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_odjela` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_zaposlenika`),
  KEY `id_odjela` (`id_odjela`),
  CONSTRAINT `FK_zaposlenici_odjeli` FOREIGN KEY (`id_odjela`) REFERENCES `odjeli` (`id_odjela`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table tvrtka_m.zaposlenici: ~13 rows (approximately)
DELETE FROM `zaposlenici`;
/*!40000 ALTER TABLE `zaposlenici` DISABLE KEYS */;
INSERT INTO `zaposlenici` (`id_zaposlenika`, `ime`, `prezime`, `id_odjela`) VALUES
	(1, 'Ana', 'Anić', 'DRO'),
	(2, 'Mate', 'Matić', 'IGR'),
	(3, 'Iva', 'Ivić', 'K&A'),
	(4, 'Pero', 'Perić', 'K&A'),
	(5, 'Petra', 'Petrović', 'PAR'),
	(6, 'Ante', 'Antić', 'PAP'),
	(7, 'Marta', 'Martić', 'DRO'),
	(8, 'Luka', 'Lukić', 'BIO'),
	(9, 'Kate', 'Katić', 'BIO'),
	(10, 'Duje', 'Dujmović', 'IGR'),
	(11, 'Andro', 'Andrić', 'PAP'),
	(12, 'Mari', 'Marić', 'PAR'),
	(13, 'Šime', 'Šimić', 'PAP');
/*!40000 ALTER TABLE `zaposlenici` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
