/* 创建数据库 */
DROP DATABASE IF EXISTS `hqweay_blog`;
create database hqweay_blog;
/* 使用该数据库*/
use hqweay_blog;

/* 创建表*/

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_content` longtext NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;

LOCK TABLES `post` WRITE;

INSERT INTO `post` VALUES (1000,'5','5');

UNLOCK TABLES;
