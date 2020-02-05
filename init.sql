CREATE DATABASE IF NOT EXISTS `2019ncov`;
CREATE USER IF NOT EXISTS `ncov`@`localhost` IDENTIFIED BY '2n0c1o9v';
GRANT ALL PRIVILEGES ON `2019ncov`.* TO 'ncov'@'localhost';

USE `2019ncov`;
/*降低耦合，user表记录用户账号信息，profile表记录健康状态、姓名班级*/

DROP TABLE IF EXISTS `ncov_user`;
CREATE TABLE IF NOT EXISTS `ncov_user`(
`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
`student_id` varchar(10) NOT NULL UNIQUE COMMENT '学号',
`phone` varchar(11) NOT NULL COMMENT '手机',
`classes_num` varchar(10) NOT NULL  COMMENT '班号',
`create_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '注册时间',
`update_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS `ncov_profile`;
CREATE TABLE IF NOT EXISTS `ncov_profile`(
`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL COMMENT '姓名',
`email` varchar(255) NULL DEFAULT NULL COMMENT '邮箱',
`condition` tinyint(2) NULL DEFAULT NULL COMMENT '健康状态',
`user_id` int(6) unsigned NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS `ncov_role`;
CREATE TABLE IF NOT EXISTS `ncov_role`(
`id` int(2) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(25)  NOT NULL,
`title` varchar(50) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS `ncov_access`;
CREATE TABLE IF NOT EXISTS `ncov_access`(
`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
`user_id` int(6) unsigned NOT NULL,
`role_id` int(5) unsigned NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;



/*班级表：id、班号、班长学号、班级人数*/
DROP TABLE IF EXISTS `ncov_classes`;
CREATE TABLE IF NOT EXISTS `ncov_classes` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`classes_num` varchar(8) NOT NULL COMMENT '班号',
`monitor_id` varchar(10) NULL DEFAULT NULL COMMENT '班长学号',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/*班级内的学生*/
DROP TABLE IF EXISTS `ncov_CS`;
CREATE TABLE IF NOT EXISTS `ncov_CS` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`class_id` varchar(8) NOT NULL COMMENT '班号',
`student_id` varchar(10) NOT NULL COMMENT '学号',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
