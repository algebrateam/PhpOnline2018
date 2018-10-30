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


-- Dumping database structure for videoteka
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `videoteka`;

-- Dumping structure for table videoteka.cjenik
CREATE TABLE IF NOT EXISTS `cjenik` (
  `Sifra_cjenika` int(11) NOT NULL,
  `Kategorija` varchar(30) DEFAULT NULL,
  `Cijena` float DEFAULT NULL,
  PRIMARY KEY (`Sifra_cjenika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.cjenik: ~0 rows (approximately)
DELETE FROM `cjenik`;
/*!40000 ALTER TABLE `cjenik` DISABLE KEYS */;
/*!40000 ALTER TABLE `cjenik` ENABLE KEYS */;

-- Dumping structure for table videoteka.clanovi
CREATE TABLE IF NOT EXISTS `clanovi` (
  `Clanski_broj` int(11) NOT NULL,
  `Ime` varchar(40) DEFAULT NULL,
  `Prezime` varchar(40) DEFAULT NULL,
  `Adresa` varchar(40) DEFAULT NULL,
  `Telefon` char(20) DEFAULT NULL,
  `Datum_uclanjenja` datetime DEFAULT NULL,
  PRIMARY KEY (`Clanski_broj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.clanovi: ~0 rows (approximately)
DELETE FROM `clanovi`;
/*!40000 ALTER TABLE `clanovi` DISABLE KEYS */;
/*!40000 ALTER TABLE `clanovi` ENABLE KEYS */;

-- Dumping structure for table videoteka.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `Sifra_filma` int(11) NOT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `Direktor` varchar(30) DEFAULT NULL,
  `Producent` varchar(30) DEFAULT NULL,
  `Snimatelj` varchar(30) DEFAULT NULL,
  `Glavni_glumci` varchar(90) DEFAULT NULL,
  `Sporedni_glumci` varchar(120) DEFAULT NULL,
  `Godina_izdanja` int(11) NOT NULL,
  `Kolicina_izdanja` int(11) NOT NULL,
  `Kolicina_DVD` int(11) NOT NULL,
  `Kolicina_VHS` int(11) NOT NULL,
  `Sifra_zanra` int(11) NOT NULL,
  PRIMARY KEY (`Sifra_filma`),
  KEY `Sifra_zanra` (`Sifra_zanra`),
  CONSTRAINT `Filmovi_ibfk_1` FOREIGN KEY (`Sifra_zanra`) REFERENCES `zanr` (`Sifra_zanra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.filmovi: ~0 rows (approximately)
DELETE FROM `filmovi`;
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table videoteka.posudba
CREATE TABLE IF NOT EXISTS `posudba` (
  `Clanski_broj` int(11) NOT NULL,
  `Sifra_filma` int(11) NOT NULL,
  `Datum_posudbe` datetime NOT NULL,
  `DATUM_vracanja` datetime DEFAULT NULL,
  `Sifra_cjenika` int(11) NOT NULL,
  PRIMARY KEY (`Clanski_broj`,`Sifra_filma`,`Datum_posudbe`),
  KEY `Clanski_broj` (`Clanski_broj`),
  KEY `Sifra_filma` (`Sifra_filma`),
  KEY `Sifra_cjenika` (`Sifra_cjenika`),
  CONSTRAINT `Posudba_ibfk_1` FOREIGN KEY (`Clanski_broj`) REFERENCES `clanovi` (`Clanski_broj`),
  CONSTRAINT `Posudba_ibfk_2` FOREIGN KEY (`Sifra_filma`) REFERENCES `filmovi` (`Sifra_filma`),
  CONSTRAINT `Posudba_ibfk_3` FOREIGN KEY (`Sifra_cjenika`) REFERENCES `cjenik` (`Sifra_cjenika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.posudba: ~0 rows (approximately)
DELETE FROM `posudba`;
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

-- Dumping structure for table videoteka.zanr
CREATE TABLE IF NOT EXISTS `zanr` (
  `Sifra_zanra` int(11) NOT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Sifra_zanra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.zanr: ~0 rows (approximately)
DELETE FROM `zanr`;
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
