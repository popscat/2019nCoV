DROP TABLE IF EXISTS `ncov_article`;
CREATE TABLE IF NOT EXISTS `ncov_article`(
`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
`title` VARCHAR(50) NOT NULL COMMENT '标题',
`content` VARCHAR(50) NOT NULL COMMENT '内容',
PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;