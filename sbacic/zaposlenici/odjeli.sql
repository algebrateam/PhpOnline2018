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

-- Dumping structure for table zaposlenici.odjeli
CREATE TABLE IF NOT EXISTS `odjeli` (
  `Sifra_odjela` char(10) NOT NULL,
  `Naziv_odjela` varchar(40) NOT NULL,
  `Lokacija_odjela` varchar(50) NOT NULL,
  PRIMARY KEY (`Sifra_odjela`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table zaposlenici.odjeli: ~0 rows (approximately)
DELETE FROM `odjeli`;
/*!40000 ALTER TABLE `odjeli` DISABLE KEYS */;
/*!40000 ALTER TABLE `odjeli` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
