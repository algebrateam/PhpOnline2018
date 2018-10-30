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

-- Dumping structure for table upisi.polaznici
CREATE TABLE IF NOT EXISTS `polaznici` (
  `sifra` int(11) NOT NULL,
  `ime` char(50) NOT NULL,
  `prezime` char(50) NOT NULL,
  `mjesto_stanovanja` char(25) DEFAULT NULL,
  `br_tel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sifra`),
  UNIQUE KEY `jedinstveno_ime_i_prezime` (`ime`,`prezime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table upisi.polaznici: ~3 rows (approximately)
DELETE FROM `polaznici`;
/*!40000 ALTER TABLE `polaznici` DISABLE KEYS */;
INSERT INTO `polaznici` (`sifra`, `ime`, `prezime`, `mjesto_stanovanja`, `br_tel`) VALUES
	(1, 'Ivo', 'ivo', NULL, NULL),
	(2, 'Ivan', 'Ivo', NULL, NULL),
	(3, 'Mara', 'Mara', NULL, NULL);
/*!40000 ALTER TABLE `polaznici` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
