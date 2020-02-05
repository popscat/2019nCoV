CREATE DATABASE `2019ncov`;
GRANT ALL PRIVILEGES ON `2019ncov`.* TO 'ncov' IDENTIFIED BY '2n0c1o9v';


--降低耦合，user表记录用户账号信息，profile表记录健康状态、姓名班级
CREATE TABLE IF NOT EXISTS `ncov_user`(
`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
`student_Id` varchar(10) NOT NULL UNIQUE COMMENT '学号',
`phone` varchar(11) NOT NULL UNIQUE COMMENT '手机',
`name` varchar(50) NOT NULL COMMENT '姓名',
`email` varchar(255) NULL DEFAULT NULL COMMENT '邮箱',
`privilege` tinyint(2) NOT NULL DEFAULT '0' COMMENT '权限',
`create_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '注册时间',
`update_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `ncov_profile`(
`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
`user_id` int(8) unsigned NOT NULL,
`condition` tinyint(2) NOT NULL DEFAULT '0' COMMENT '健康状态',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;




--班级表：id、班号、班长学号、班级人数
DROP TABLE IF EXISTS `ncov_class`;
CREATE TABLE IF NOT EXISTS `ncov_class` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`class_id` varchar(8) NOT NULL COMMENT '班号',
`student_id` varchar(8) NOT NULL COMMENT '班长学号',
`student_num` int(6) UNSIGNED NOT NULL COMMENT '班级人数',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--班级内的学生
DROP TABLE IF EXISTS `ncov_CS`;
CREATE TABLE IF NOT EXISTS `ncov_CS` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`class_id` varchar(8) NOT NULL COMMENT '班号',
`student_id` varchar(10) NOT NULL COMMENT '学号',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
