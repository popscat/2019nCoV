CREATE DATABASE `2019ncov`;
GRANT ALL PRIVILEGES ON `2019ncov`.* TO 'ncov' IDENTIFIED BY '2n0c1o9v';



CREATE TABLE IF NOT EXISTS `ncov_user`(
`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
`studentid` varchar(10) NOT NULL UNIQUE COMMENT '学号',
`name` varchar(50) NOT NULL COMMENT '姓名',
`phone` varchar(11) NOT NULL COMMENT '手机',
`classnumber` varchar(11) NOT NULL COMMENT '班级',
`email` varchar(255) NULL DEFAULT NULL COMMENT '邮箱',
`status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
`create_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '注册时间',
`update_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


