# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: mis.arbor.local (MySQL 5.7.34)
# Database: avioni
# Generation Time: 2022-04-03 08:22:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table avion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `avion`;

CREATE TABLE `avion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) DEFAULT NULL,
  `opis` text,
  `zemljaPoreklaID` int(11) DEFAULT NULL,
  `tipID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `avion` WRITE;
/*!40000 ALTER TABLE `avion` DISABLE KEYS */;

INSERT INTO `avion` (`id`, `model`, `opis`, `zemljaPoreklaID`, `tipID`)
VALUES
	(1,'Airbus A380','Airbus A380 je dvopalubni, širokotrupni, četveromotorni putnički avion sa kapacitetom od 525 do 853 putnika i maksimalnom težinom od 590 tona, on nosi laskavu titulu najvećeg putničkog aviona na svetu. Prvi put se u visine vinuo 27. aprila 2005. u Toulouseu u Francuskoj.',6,2),
	(2,'Boing 747','Često nazivan i Jumbo Jet, Boing 747 verovatno je najprepoznatljiviji putnički avion današnjice. Ono po čemu je ipak najprepoznatljiviji, Boeing 747 nema ravnomerno valjkasto telo već ima „grbu“ u prednjem delu. „Grba“ gornje palube započinje pilotskom kabinom koja izlazi iznad glavne palube ...	',1,2),
	(3,'Konkord','Najbrži putnički avion na svetu je čuveni francusko-britanski avion Konkord koji je zbog nerentabilnosti 2003. godine  povučen iz saobraćaja. Konkord važi na najčuveniji supersonični putnički avion na svetu ali on nije jedini, čak ni prvi ove vrste koji je služio u svrhe civilnog avio saobraćaja.',6,2);

/*!40000 ALTER TABLE `avion` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tip
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tip`;

CREATE TABLE `tip` (
  `tipID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nazivTipa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tipID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tip` WRITE;
/*!40000 ALTER TABLE `tip` DISABLE KEYS */;

INSERT INTO `tip` (`tipID`, `nazivTipa`)
VALUES
	(1,'Borbeni'),
	(2,'Prevoz');

/*!40000 ALTER TABLE `tip` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table zemlja_porekla
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zemlja_porekla`;

CREATE TABLE `zemlja_porekla` (
  `zemljaPoreklaID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`zemljaPoreklaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `zemlja_porekla` WRITE;
/*!40000 ALTER TABLE `zemlja_porekla` DISABLE KEYS */;

INSERT INTO `zemlja_porekla` (`zemljaPoreklaID`, `naziv`)
VALUES
	(1,'SAD'),
	(2,'Rusija'),
	(3,'Kina'),
	(4,'Japan'),
	(5,'Nemacka'),
	(6,'Francuska');

/*!40000 ALTER TABLE `zemlja_porekla` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
