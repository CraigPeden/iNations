# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: iNations
# Generation Time: 2012-07-22 22:28:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table improvement
# ------------------------------------------------------------

DROP TABLE IF EXISTS `improvement`;

CREATE TABLE `improvement` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `improvement_name` varchar(30) DEFAULT NULL,
  `improvement_cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `improvement` WRITE;
/*!40000 ALTER TABLE `improvement` DISABLE KEYS */;

INSERT INTO `improvement` (`id`, `improvement_name`, `improvement_cost`)
VALUES
	(1,'Bank',10000),
	(2,'Stadium',10000);

/*!40000 ALTER TABLE `improvement` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nation_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nation_info`;

CREATE TABLE `nation_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nation_name` varchar(20) DEFAULT NULL,
  `nation_ruler` varchar(20) DEFAULT NULL,
  `nation_infrastructure` float DEFAULT NULL,
  `nation_technology` float DEFAULT NULL,
  `nation_funds` double DEFAULT NULL,
  `nation_infrastructure_upkeep` float DEFAULT NULL,
  `nation_planes` int(11) DEFAULT NULL,
  `nation_team_colour` varchar(6) DEFAULT 'None',
  `nation_alliance_affiliation` varchar(30) DEFAULT 'None',
  `nation_government` varchar(20) DEFAULT NULL,
  `nation_religion` varchar(20) DEFAULT 'None',
  `nation_land` varchar(20) DEFAULT NULL,
  `nation_citizens` int(11) DEFAULT NULL,
  `nation_citizens_density` int(11) DEFAULT NULL,
  `nation_soldiers` int(11) DEFAULT NULL,
  `nation_average_income` int(11) DEFAULT NULL,
  `nation_tax_rate` int(2) DEFAULT NULL,
  `nation_nuclear_weapons` int(11) DEFAULT NULL,
  `nation_tanks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `nation_info` WRITE;
/*!40000 ALTER TABLE `nation_info` DISABLE KEYS */;

INSERT INTO `nation_info` (`id`, `nation_name`, `nation_ruler`, `nation_infrastructure`, `nation_technology`, `nation_funds`, `nation_infrastructure_upkeep`, `nation_planes`, `nation_team_colour`, `nation_alliance_affiliation`, `nation_government`, `nation_religion`, `nation_land`, `nation_citizens`, `nation_citizens_density`, `nation_soldiers`, `nation_average_income`, `nation_tax_rate`, `nation_nuclear_weapons`, `nation_tanks`)
VALUES
	(1,'Admin_Nation','Admin',5999.99,2999,392510.1,2,5,'Pink','Argent','Democratic','None','1000',32000,38,6411,350,28,0,0),
	(3,'Dretopia','Craig_Dem',799.99,300,81586,2,65,'Pink','Argent','Democratic','None','50',4100,84,100,100,28,0,60);

/*!40000 ALTER TABLE `nation_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` char(160) DEFAULT NULL,
  `nation_id` int(11) DEFAULT NULL,
  `last_visit` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `nation_id`, `last_visit`)
VALUES
	(1,'Admin','4e7afebcfbae000b22c7c85e5560f89a2a0280b4',1,'2012-07-22');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wonder
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wonder`;

CREATE TABLE `wonder` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wonder_name` varchar(30) DEFAULT NULL,
  `wonder_cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

LOCK TABLES `wonder` WRITE;
/*!40000 ALTER TABLE `wonder` DISABLE KEYS */;

INSERT INTO `wonder` (`id`, `wonder_name`, `wonder_cost`)
VALUES
	(1,'Stock Market',30000000),
	(2,'Manhatten Project',100000000),
	(3,'Social Security System',30000000),
	(4,'Internet',40000000),
	(5,'Fallout Shelter System',30000000),
	(6,'Strategic Defense Initiative',150000000),
	(7,'Great Monument',40000000),
	(8,'Great Temple',40000000),
	(9,'Nuclear Power Plant',150000000),
	(10,'National Healthcare System',150000000),
	(11,'Mining Industry Consortium',40000000),
	(12,'Movie Industry',40000000),
	(13,'Space Program',35000000),
	(14,'Moon Base',40000000),
	(15,'Moon Mine',40000000),
	(16,'Moon Colony',40000000),
	(17,'Mars Base',40000000),
	(18,'Mars Mine',40000000),
	(19,'Mars Colony',40000000);

/*!40000 ALTER TABLE `wonder` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
