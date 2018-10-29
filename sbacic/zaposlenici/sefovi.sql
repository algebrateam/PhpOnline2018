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

-- Dumping structure for table zaposlenici.sefovi
CREATE TABLE IF NOT EXISTS `sefovi` (
  `Sifra_zaposlenika` bigint(20) NOT NULL DEFAULT '0',
  `Sifra_odjela` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Sifra_zaposlenika`,`Sifra_odjela`),
  KEY `Sifra_zaposlenika` (`Sifra_zaposlenika`),
  KEY `Sifra_odjela` (`Sifra_odjela`),
  CONSTRAINT `Sefovi_ibfk_1` FOREIGN KEY (`Sifra_odjela`) REFERENCES `odjeli` (`Sifra_odjela`),
  CONSTRAINT `Sefovi_ibfk_2` FOREIGN KEY (`Sifra_zaposlenika`) REFERENCES `zaposlenici` (`Sifra_zaposlenika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table zaposlenici.sefovi: ~0 rows (approximately)
DELETE FROM `sefovi`;
/*!40000 ALTER TABLE `sefovi` DISABLE KEYS */;
/*!40000 ALTER TABLE `sefovi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
