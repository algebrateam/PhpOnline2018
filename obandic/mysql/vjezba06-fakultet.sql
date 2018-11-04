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


-- Dumping database structure for fakultet
DROP DATABASE IF EXISTS `fakultet`;
CREATE DATABASE IF NOT EXISTS `fakultet` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `fakultet`;

-- Dumping structure for table fakultet.dvorana
DROP TABLE IF EXISTS `dvorana`;
CREATE TABLE IF NOT EXISTS `dvorana` (
  `oznakaDvorane` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `kapacitet` int(11) NOT NULL,
  PRIMARY KEY (`oznakaDvorane`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.dvorana: ~6 rows (approximately)
DELETE FROM `dvorana`;
/*!40000 ALTER TABLE `dvorana` DISABLE KEYS */;
INSERT INTO `dvorana` (`oznakaDvorane`, `kapacitet`) VALUES
	('A1-01', 115),
	('B1-25', 50),
	('B1-27', 60),
	('B2-17', 65),
	('B2-47', 50),
	('B3-53', 50);
/*!40000 ALTER TABLE `dvorana` ENABLE KEYS */;

-- Dumping structure for table fakultet.ispit
DROP TABLE IF EXISTS `ispit`;
CREATE TABLE IF NOT EXISTS `ispit` (
  `mbrStudenta` int(11) NOT NULL,
  `sifraPredmeta` int(11) NOT NULL,
  `sifraNastavnika` int(11) NOT NULL,
  `datumIspita` date NOT NULL,
  `ocjena` smallint(6) NOT NULL,
  PRIMARY KEY (`mbrStudenta`,`sifraPredmeta`,`sifraNastavnika`),
  KEY `mbrStudenta` (`mbrStudenta`),
  KEY `sifraPredmeta` (`sifraPredmeta`),
  KEY `sifraNastavnika` (`sifraNastavnika`),
  CONSTRAINT `FK_ispit_nastavnik` FOREIGN KEY (`sifraNastavnika`) REFERENCES `nastavnik` (`sifraNastavnika`),
  CONSTRAINT `FK_ispit_predmet` FOREIGN KEY (`sifraPredmeta`) REFERENCES `predmet` (`sifraPredmeta`),
  CONSTRAINT `FK_ispit_student` FOREIGN KEY (`mbrStudenta`) REFERENCES `student` (`mbrStudenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.ispit: ~10 rows (approximately)
DELETE FROM `ispit`;
/*!40000 ALTER TABLE `ispit` DISABLE KEYS */;
INSERT INTO `ispit` (`mbrStudenta`, `sifraPredmeta`, `sifraNastavnika`, `datumIspita`, `ocjena`) VALUES
	(56789, 9, 4, '2018-06-24', 3),
	(56790, 1, 1, '2018-05-27', 3),
	(56790, 2, 2, '2018-07-14', 4),
	(56790, 7, 3, '2018-06-04', 5),
	(56791, 3, 1, '2018-05-21', 5),
	(56793, 3, 1, '2018-09-04', 3),
	(56794, 146, 5, '2018-10-24', 4),
	(56796, 5, 2, '2018-10-17', 2),
	(56798, 230, 6, '2018-06-02', 1),
	(56799, 235, 3, '2018-06-04', 2);
/*!40000 ALTER TABLE `ispit` ENABLE KEYS */;

-- Dumping structure for table fakultet.mjesto
DROP TABLE IF EXISTS `mjesto`;
CREATE TABLE IF NOT EXISTS `mjesto` (
  `pbrMjesta` int(11) NOT NULL,
  `nazivMjesta` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `sifraZupanije` smallint(6) NOT NULL,
  PRIMARY KEY (`pbrMjesta`),
  KEY `sifraZupanije` (`sifraZupanije`),
  CONSTRAINT `FK_mjesto_zupanija` FOREIGN KEY (`sifraZupanije`) REFERENCES `zupanija` (`sifraZupanije`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.mjesto: ~8 rows (approximately)
DELETE FROM `mjesto`;
/*!40000 ALTER TABLE `mjesto` DISABLE KEYS */;
INSERT INTO `mjesto` (`pbrMjesta`, `nazivMjesta`, `sifraZupanije`) VALUES
	(10000, 'Zagreb', 21),
	(20000, 'Dubrovnik', 19),
	(21000, 'Split', 17),
	(22000, 'Šibenik', 15),
	(23000, 'Zadar', 13),
	(31000, 'Osijek', 14),
	(51000, 'Rijeka', 8),
	(52000, 'Pazin', 18);
/*!40000 ALTER TABLE `mjesto` ENABLE KEYS */;

-- Dumping structure for table fakultet.nastavnik
DROP TABLE IF EXISTS `nastavnik`;
CREATE TABLE IF NOT EXISTS `nastavnik` (
  `sifraNastavnika` int(11) NOT NULL,
  `imeNastavnika` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezimeNastavnika` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `pbrStanovanja` int(11) NOT NULL,
  `sifraOrgJedinice` int(11) NOT NULL,
  `koeficijent` decimal(3,2) NOT NULL,
  PRIMARY KEY (`sifraNastavnika`),
  KEY `pbrStanovanja` (`pbrStanovanja`),
  KEY `sifraOrgJedinice` (`sifraOrgJedinice`),
  CONSTRAINT `FK_nastavnik_mjesto` FOREIGN KEY (`pbrStanovanja`) REFERENCES `mjesto` (`pbrMjesta`),
  CONSTRAINT `FK_nastavnik_organizacijska_jedinica` FOREIGN KEY (`sifraOrgJedinice`) REFERENCES `organizacijska_jedinica` (`sifraOrgJedinice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.nastavnik: ~5 rows (approximately)
DELETE FROM `nastavnik`;
/*!40000 ALTER TABLE `nastavnik` DISABLE KEYS */;
INSERT INTO `nastavnik` (`sifraNastavnika`, `imeNastavnika`, `prezimeNastavnika`, `pbrStanovanja`, `sifraOrgJedinice`, `koeficijent`) VALUES
	(1, 'Marija', 'Marić', 21000, 2, 3.14),
	(2, 'Marko', 'Marković', 21000, 1, 3.14),
	(3, 'Pero', 'Perić', 22000, 5, 3.14),
	(4, 'Ivana', 'Ivančić', 23000, 7, 3.14),
	(5, 'Tonka', 'Tonković', 10000, 7, 3.00),
	(6, 'Antun', 'Antunović', 51000, 2, 3.00);
/*!40000 ALTER TABLE `nastavnik` ENABLE KEYS */;

-- Dumping structure for table fakultet.organizacijska_jedinica
DROP TABLE IF EXISTS `organizacijska_jedinica`;
CREATE TABLE IF NOT EXISTS `organizacijska_jedinica` (
  `sifraOrgJedinice` int(11) NOT NULL,
  `nazivOrgJedinice` char(60) COLLATE utf8_unicode_ci NOT NULL,
  `sifraNadOrgJedinice` int(11) DEFAULT NULL,
  PRIMARY KEY (`sifraOrgJedinice`),
  KEY `sifraNadOrgJedinice` (`sifraNadOrgJedinice`),
  CONSTRAINT `FK_organizacijska_jedinica_organizacijska_jedinica` FOREIGN KEY (`sifraNadOrgJedinice`) REFERENCES `organizacijska_jedinica` (`sifraOrgJedinice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.organizacijska_jedinica: ~7 rows (approximately)
DELETE FROM `organizacijska_jedinica`;
/*!40000 ALTER TABLE `organizacijska_jedinica` DISABLE KEYS */;
INSERT INTO `organizacijska_jedinica` (`sifraOrgJedinice`, `nazivOrgJedinice`, `sifraNadOrgJedinice`) VALUES
	(1, 'Odjel F', 1),
	(2, 'Odjel M', 2),
	(3, 'Odjel B', 3),
	(4, 'Odjel K', 4),
	(5, 'Odjel I', 5),
	(6, 'Odjel P', 6),
	(7, 'Odjel S', 7);
/*!40000 ALTER TABLE `organizacijska_jedinica` ENABLE KEYS */;

-- Dumping structure for table fakultet.predmet
DROP TABLE IF EXISTS `predmet`;
CREATE TABLE IF NOT EXISTS `predmet` (
  `sifraPredmeta` int(11) NOT NULL,
  `kratPredmeta` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `nazivPredmeta` char(60) COLLATE utf8_unicode_ci NOT NULL,
  `sifraOrgJedinice` int(11) NOT NULL,
  `upisanoStudenata` int(11) NOT NULL,
  `brojSatiTjedno` int(11) NOT NULL,
  PRIMARY KEY (`sifraPredmeta`),
  KEY `sifraOrgJedinice` (`sifraOrgJedinice`),
  CONSTRAINT `FK_predmet_organizacijska_jedinica` FOREIGN KEY (`sifraOrgJedinice`) REFERENCES `organizacijska_jedinica` (`sifraOrgJedinice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.predmet: ~12 rows (approximately)
DELETE FROM `predmet`;
/*!40000 ALTER TABLE `predmet` DISABLE KEYS */;
INSERT INTO `predmet` (`sifraPredmeta`, `kratPredmeta`, `nazivPredmeta`, `sifraOrgJedinice`, `upisanoStudenata`, `brojSatiTjedno`) VALUES
	(1, 'PMM008', 'Predmet A', 2, 40, 5),
	(2, 'PMM015', 'Predmet D', 2, 40, 6),
	(3, 'PMM120', 'Predmet V', 1, 30, 6),
	(4, 'PMF220', 'Predmet E', 1, 30, 5),
	(5, 'PMF230', 'Predmet K', 5, 50, 5),
	(6, 'PMF240', 'Predmet T', 7, 70, 4),
	(7, 'PMI005', 'Predmet O', 5, 50, 3),
	(8, 'PMI019', 'Predmet R', 5, 45, 4),
	(9, 'PMS004', 'Predmet P', 7, 80, 2),
	(146, 'PMS007', 'Predmet Nj', 7, 20, 2),
	(230, 'PMS008', 'Predmet Tj', 7, 100, 2),
	(235, 'PMM125', 'Predmet G', 2, 30, 6);
/*!40000 ALTER TABLE `predmet` ENABLE KEYS */;

-- Dumping structure for table fakultet.rezervacija
DROP TABLE IF EXISTS `rezervacija`;
CREATE TABLE IF NOT EXISTS `rezervacija` (
  `oznakaDvorane` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `oznakaDana` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `sat` smallint(6) NOT NULL,
  `sifraPredmeta` int(11) NOT NULL,
  PRIMARY KEY (`oznakaDvorane`,`sifraPredmeta`),
  KEY `oznakaDvorane` (`oznakaDvorane`),
  KEY `sifraPredmeta` (`sifraPredmeta`),
  CONSTRAINT `FK_rezervacija_dvorana` FOREIGN KEY (`oznakaDvorane`) REFERENCES `dvorana` (`oznakaDvorane`),
  CONSTRAINT `FK_rezervacija_predmet` FOREIGN KEY (`sifraPredmeta`) REFERENCES `predmet` (`sifraPredmeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.rezervacija: ~6 rows (approximately)
DELETE FROM `rezervacija`;
/*!40000 ALTER TABLE `rezervacija` DISABLE KEYS */;
INSERT INTO `rezervacija` (`oznakaDvorane`, `oznakaDana`, `sat`, `sifraPredmeta`) VALUES
	('A1-01', 'PO', 8, 6),
	('B1-25', 'PO', 10, 2),
	('B1-27', 'UT', 8, 1),
	('B2-17', 'SR', 9, 3),
	('B2-47', 'PE', 9, 5),
	('B3-53', 'ČE', 8, 4);
/*!40000 ALTER TABLE `rezervacija` ENABLE KEYS */;

-- Dumping structure for table fakultet.student
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `mbrStudenta` int(11) NOT NULL,
  `imeStudenta` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezimeStudenta` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `pbrRodenja` int(11) NOT NULL,
  `pbrStanovanja` int(11) NOT NULL,
  `datRodStudenta` date NOT NULL,
  `oibStudenta` bigint(11) NOT NULL,
  PRIMARY KEY (`mbrStudenta`),
  UNIQUE KEY `oibStudenta` (`oibStudenta`),
  KEY `pbrRodenja` (`pbrRodenja`),
  KEY `pbrStanovanja` (`pbrStanovanja`),
  CONSTRAINT `FK_student_mjesto` FOREIGN KEY (`pbrRodenja`) REFERENCES `mjesto` (`pbrMjesta`),
  CONSTRAINT `FK_student_mjesto_2` FOREIGN KEY (`pbrStanovanja`) REFERENCES `mjesto` (`pbrMjesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.student: ~11 rows (approximately)
DELETE FROM `student`;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`mbrStudenta`, `imeStudenta`, `prezimeStudenta`, `pbrRodenja`, `pbrStanovanja`, `datRodStudenta`, `oibStudenta`) VALUES
	(56789, 'Kate', 'Katić', 10000, 10000, '1996-04-15', 12345678901),
	(56790, 'Duje', 'Dujmović', 22000, 21000, '1995-01-28', 12345678902),
	(56791, 'Ana', 'Anić', 23000, 23000, '1999-09-12', 12345678903),
	(56792, 'Šime', 'Šimić', 51000, 52000, '1997-12-30', 12345678904),
	(56793, 'Nikola', 'Nikolić', 31000, 51000, '1998-05-25', 12345678905),
	(56794, 'Dora', 'Dorić', 20000, 20000, '1999-10-07', 12345678906),
	(56795, 'Andro', 'Andrić', 52000, 22000, '1998-07-07', 12345678907),
	(56796, 'Josip', 'Josipović', 21000, 21000, '1997-11-04', 12345678908),
	(56797, 'Ana', 'Analiza', 10000, 51000, '1995-04-28', 12345678909),
	(56798, 'Vinko', 'Okanović', 20000, 10000, '1994-10-26', 12345678910),
	(56799, 'Kristijan', 'Ranković', 22000, 22000, '1996-08-08', 1345678911);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Dumping structure for table fakultet.zupanija
DROP TABLE IF EXISTS `zupanija`;
CREATE TABLE IF NOT EXISTS `zupanija` (
  `sifraZupanije` smallint(6) NOT NULL,
  `nazivZupanije` char(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifraZupanije`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table fakultet.zupanija: ~19 rows (approximately)
DELETE FROM `zupanija`;
/*!40000 ALTER TABLE `zupanija` DISABLE KEYS */;
INSERT INTO `zupanija` (`sifraZupanije`, `nazivZupanije`) VALUES
	(1, 'Zagrebačka županija'),
	(2, 'Krapinsko-zagorska županija'),
	(3, 'Sisačko-moslavačka županija'),
	(4, 'Karlovačka županija'),
	(5, 'Varaždinska županija'),
	(6, 'Koprivničko-križevačka županija'),
	(7, 'Bjelovarsko-bilogorska županija'),
	(8, 'Primorsko-goranska županija'),
	(9, 'Ličko-senjska županija'),
	(10, 'Virovitičko-podravska županija'),
	(11, 'Požeško-slavonska županija'),
	(12, 'Brodsko-posavska županija'),
	(13, 'Zadarska županija'),
	(14, 'Osječko-baranjska županija'),
	(15, 'Šibensko-kninska županija'),
	(16, 'Vukovarsko-srijemska županija'),
	(17, 'Splitsko-dalmatinska županija'),
	(18, 'Istarska županija'),
	(19, 'Dubrovačko-neretvanska županija'),
	(20, 'Međimurska županija'),
	(21, 'Grad Zagreb');
/*!40000 ALTER TABLE `zupanija` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
