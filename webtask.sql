# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.48-MariaDB)
# Database: webtask
# Generation Time: 2021-04-27 10:51:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table newsletter
# ------------------------------------------------------------

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `provider` varchar(50) DEFAULT NULL,
  `registerdate` date DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;

INSERT INTO `newsletter` (`id`, `email`, `provider`, `registerdate`, `createtime`)
VALUES
	(5,'a@a.lc','@a.lc','2021-03-02','2021-04-25 15:31:09'),
	(6,'b@a.lc','@a.lc','2021-03-02','2021-04-25 15:32:34'),
	(7,'c@a.lc','@a.lc','2021-03-03','2021-04-26 15:33:20'),
	(9,'a@b.lv','@b.lv','2021-03-03','2021-04-26 07:19:35'),
	(10,'a@b.lv','@b.lv','2021-03-04','2021-04-20 07:19:38'),
	(11,'a@b.lok','@b.lok','2021-03-04','2021-04-20 07:19:45'),
	(12,'a@b.fg','@b.fg','2021-03-05','2021-04-19 07:19:45'),
	(13,'sa@b.fg','@b.fg','2021-03-05','2021-04-19 07:20:03'),
	(14,'sea@b.fg','@b.fg','2021-03-06','2021-04-05 07:20:06'),
	(15,'sead@b.fg','@b.fg','2021-03-06','2021-04-05 07:20:09'),
	(16,'sead@b.fg','@b.fg','2021-03-06','2021-04-06 07:20:12'),
	(17,'seafd@b.fg','@b.fg','2021-03-09','2021-04-06 07:20:16'),
	(18,'jy@b.fg','@b.fg','2021-03-09','2021-04-07 07:20:21'),
	(19,'jfy@b.fg','@b.fg','2021-03-12','2021-04-07 07:20:25'),
	(20,'jfyuu@b.fg','@b.fg','2021-03-15','2021-04-03 07:20:29'),
	(21,'jfyuu@vd.fg','@vd.fg','2021-03-16','2021-04-03 07:20:36'),
	(22,'jfyuu@vsd.fg','@vsd.fg','2021-03-20','2021-04-27 07:20:39'),
	(23,'jfyuu@vsdd.fg','@vsdd.fg','2021-03-22','2021-04-27 07:20:43'),
	(24,'gjfyuu@vsdd.fg','@vsdd.fg','2021-03-27','2021-04-27 07:20:46'),
	(31,'aaa@aaa.lv','@aaa.lv','2021-03-27','2021-04-27 13:41:56');

/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
