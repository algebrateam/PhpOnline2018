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


-- Dumping database structure for videoteka
DROP DATABASE IF EXISTS `videoteka`;
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `videoteka`;

-- Dumping structure for table videoteka.cjenik
DROP TABLE IF EXISTS `cjenik`;
CREATE TABLE IF NOT EXISTS `cjenik` (
  `id_cjenika` int(3) NOT NULL,
  `medij` enum('DVD','BlueRay') COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` enum('hit-film','','stari film') COLLATE utf8_unicode_ci NOT NULL,
  `cijena` float NOT NULL,
  PRIMARY KEY (`id_cjenika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.cjenik: ~5 rows (approximately)
DELETE FROM `cjenik`;
/*!40000 ALTER TABLE `cjenik` DISABLE KEYS */;
INSERT INTO `cjenik` (`id_cjenika`, `medij`, `kategorija`, `cijena`) VALUES
	(1, 'BlueRay', 'hit-film', 15),
	(2, 'BlueRay', '', 12),
	(3, 'DVD', 'hit-film', 12),
	(4, 'DVD', '', 10),
	(5, 'DVD', 'stari film', 8);
/*!40000 ALTER TABLE `cjenik` ENABLE KEYS */;

-- Dumping structure for table videoteka.clanovi
DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id_clana` int(4) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datum_uclanjenja` date NOT NULL,
  PRIMARY KEY (`id_clana`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.clanovi: ~3 rows (approximately)
DELETE FROM `clanovi`;
/*!40000 ALTER TABLE `clanovi` DISABLE KEYS */;
INSERT INTO `clanovi` (`id_clana`, `ime`, `prezime`, `adresa`, `telefon`, `datum_uclanjenja`) VALUES
	(1, 'Šime', 'Šimić', NULL, NULL, '2015-10-28'),
	(2, 'Kate', 'Katić', NULL, NULL, '2016-11-02'),
	(3, 'Duje', 'Dujmović', NULL, NULL, '2018-06-21');
/*!40000 ALTER TABLE `clanovi` ENABLE KEYS */;

-- Dumping structure for table videoteka.filmovi
DROP TABLE IF EXISTS `filmovi`;
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id_filma` int(5) NOT NULL,
  `naziv_filma-godina_izdanja` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `drzava` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vrijeme_trajanja` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `zanr` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rezija` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uloge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_filma`),
  KEY `zanr` (`zanr`),
  CONSTRAINT `FK_filmovi_zanr` FOREIGN KEY (`zanr`) REFERENCES `zanr` (`zanr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.filmovi: ~6 rows (approximately)
DELETE FROM `filmovi`;
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
INSERT INTO `filmovi` (`id_filma`, `naziv_filma-godina_izdanja`, `drzava`, `vrijeme_trajanja`, `zanr`, `rezija`, `uloge`) VALUES
	(10001, 'Bohemian Rhapsody (2018)', 'Velika Britanija, SAD', '134min', 'biografski', 'Bryan Singer', 'Rami Malek, Joseph Mazzello, Mike Myers, ...'),
	(10002, 'Mjesta i ljudi (2017)', 'Francuska', '94min', 'dokumentarni', 'JR, Agnes Varda', 'Agnes Varda, JR, Jeannine Carpentier, ...'),
	(10003, 'Proljeće, ljeto, jesen, zima...i proljeće (2003)', 'Južna Koreja', '103min', 'drama', 'Kim Ki-Duk', 'Oh Yeong-Su, Kim Ki-Duk, Kim Young-Min, ...'),
	(10004, 'Bez pomaka (2004)', 'Italija', '125min', 'drama', ' Sergio Castellitto', 'Penélope Cruz, Sergio Castellitto, Claudia Gerini, ..'),
	(10005, 'American Made (2017)', 'SAD', '115min', 'triler', 'Doug Liman', 'Tom Cruise, Caleb Landry Jones, Domhnall Gleeson, ...'),
	(10006, 'Ben Hur (1959)', 'SAD', '212min', 'povijesni', 'William Wyler', 'Charlton Heston, Jack Hawkins, Stephen Boyd, ...');
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table videoteka.posudba
DROP TABLE IF EXISTS `posudba`;
CREATE TABLE IF NOT EXISTS `posudba` (
  `id_clana` int(4) NOT NULL AUTO_INCREMENT,
  `id_filma` int(5) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `id_cjenika` int(3) NOT NULL,
  PRIMARY KEY (`id_clana`,`id_filma`,`datum_posudbe`),
  KEY `id_clana` (`id_clana`),
  KEY `id_filma` (`id_filma`),
  KEY `id_cjenika` (`id_cjenika`),
  CONSTRAINT `FK_posudba_cjenik` FOREIGN KEY (`id_cjenika`) REFERENCES `cjenik` (`id_cjenika`),
  CONSTRAINT `FK_posudba_clanovi` FOREIGN KEY (`id_clana`) REFERENCES `clanovi` (`id_clana`),
  CONSTRAINT `FK_posudba_filmovi` FOREIGN KEY (`id_filma`) REFERENCES `filmovi` (`id_filma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.posudba: ~3 rows (approximately)
DELETE FROM `posudba`;
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
INSERT INTO `posudba` (`id_clana`, `id_filma`, `datum_posudbe`, `datum_povratka`, `id_cjenika`) VALUES
	(1, 10001, '2018-10-15', '2018-10-16', 1),
	(2, 10005, '2018-10-27', '2018-10-30', 2),
	(3, 10003, '2018-09-13', '0000-00-00', 4);
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

-- Dumping structure for table videoteka.zanr
DROP TABLE IF EXISTS `zanr`;
CREATE TABLE IF NOT EXISTS `zanr` (
  `zanr` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`zanr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.zanr: ~17 rows (approximately)
DELETE FROM `zanr`;
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
INSERT INTO `zanr` (`zanr`) VALUES
	('akcijski'),
	('animirani'),
	('avanturistički'),
	('biografski'),
	('dokumentarni'),
	('drama'),
	('horror'),
	('komedija'),
	('kriminalistički'),
	('obiteljski'),
	('povijesni'),
	('ratni'),
	('romantični'),
	('SF'),
	('tinejdžerski'),
	('triler'),
	('vestern');
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
