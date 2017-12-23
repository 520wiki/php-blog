CREATE DATABASE hqweay_blog;
use hqweay_blog;

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_content` longtext NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;


LOCK TABLES `post` WRITE;

INSERT INTO `post` VALUES (1000,'5','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'hello world','5');
INSERT INTO `post` VALUES (1000,'最新一篇','如你所见，唧唧是一只妖怪。大部分时间它都住在我的耳朵里，可以想象，耳朵并不是一个好住处。有时候我总感觉自己的听力下降了不少。我告诉唧唧，你能不能换个地方藏起来？或者，再变小一点，不要影响我的生活好不好？这时，唧唧就会说，“你的耳屎太多了。”');

UNLOCK TABLES;

