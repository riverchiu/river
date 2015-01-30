-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 服務器版本:                        5.5.16 - MySQL Community Server (GPL)
-- 服務器操作系統:                      Win32
-- HeidiSQL 版本:                  8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 導出 river 的資料庫結構
CREATE DATABASE IF NOT EXISTS `river` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `river`;


-- 導出  表 river.login_log 結構
CREATE TABLE IF NOT EXISTS `login_log` (
  `l_guid` int(10) NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `login_time` datetime NOT NULL,
  `is_success` int(1) NOT NULL COMMENT '0:成功 1:密碼錯誤 2:帳號錯誤',
  PRIMARY KEY (`l_guid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- 正在導出表  river.login_log 的資料：~11 rows (大約)
/*!40000 ALTER TABLE `login_log` DISABLE KEYS */;
INSERT INTO `login_log` (`l_guid`, `account`, `login_time`, `is_success`) VALUES
	(1, 'rive', '2015-01-29 11:40:26', 1),
	(2, 'riverchiu', '2015-01-29 11:43:35', 2),
	(3, 'riverchiu', '2015-01-29 11:43:39', 0),
	(4, 'riverchiu', '2015-01-29 11:43:41', 0),
	(5, 'riverchiu', '2015-01-29 11:56:08', 0),
	(6, 'riverchiu', '2015-01-30 05:03:38', 0),
	(7, 'riverchiu', '2015-01-30 05:11:53', 0),
	(8, 'riverchiu', '2015-01-30 05:14:34', 0),
	(9, 'riverchiu', '2015-01-30 05:15:08', 0),
	(10, 'riverchiu', '2015-01-30 05:19:24', 0),
	(11, 'riverchiu', '2015-01-30 09:01:27', 0),
	(12, 'riverchiu', '2015-01-30 09:27:11', 0),
	(13, 'riverchiu', '2015-01-30 16:34:11', 0),
	(14, 'admin', '2015-01-30 18:00:26', 0),
	(15, 'river', '2015-01-30 18:01:03', 1),
	(16, 'admin', '2015-01-30 18:01:07', 0),
	(17, 'admin', '2015-01-30 18:01:15', 0),
	(18, 'riverchiu', '2015-01-30 18:02:09', 0),
	(19, 'riverchiu', '2015-01-30 18:02:19', 0),
	(20, 'riverchiu', '2015-01-30 18:35:39', 2),
	(21, 'riverchiu', '2015-01-30 18:35:47', 2),
	(22, 'admin', '2015-01-30 18:36:17', 0),
	(23, 'riverchiu', '2015-01-30 18:36:52', 0);
/*!40000 ALTER TABLE `login_log` ENABLE KEYS */;


-- 導出  表 river.person 結構
CREATE TABLE IF NOT EXISTS `person` (
  `p_guid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `identity` varchar(10) NOT NULL,
  `birthday` datetime NOT NULL,
  `blood_type` varchar(2) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  PRIMARY KEY (`p_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在導出表  river.person 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
/*!40000 ALTER TABLE `person` ENABLE KEYS */;


-- 導出  表 river.user 結構
CREATE TABLE IF NOT EXISTS `user` (
  `u_guid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `g_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`u_guid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在導出表  river.user 的資料：~1 rows (大約)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`u_guid`, `name`, `account`, `password`, `g_id`) VALUES
	(1, 'river丘御非', 'riverchiu', 'e358efa489f58062f10dd7316b65649e', 1),
	(2, '系統管理員', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- 導出  表 river.user_group 結構
CREATE TABLE IF NOT EXISTS `user_group` (
  `g_guid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `competence` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`g_guid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在導出表  river.user_group 的資料：~1 rows (大約)
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` (`g_guid`, `name`, `desc`, `competence`) VALUES
	(1, '管理者', '擁有最高修改權限', 'a:4:{s:4:"user";a:4:{s:5:"lists";i:1;s:3:"add";i:1;s:4:"edit";i:1;s:6:"delete";i:1;}s:10:"competence";a:5:{s:5:"lists";i:1;s:3:"add";i:1;s:4:"edit";i:1;s:14:"competenceedit";i:1;s:6:"delete";i:1;}s:8:"loginlog";a:2:{s:5:"lists";i:1;s:6:"delete";i:1;}s:9:"actionlog";a:2:{s:5:"lists";i:1;s:6:"delete";i:1;}}');
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
