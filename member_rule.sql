/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : fecshop

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2018-08-02 09:01:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for member_rule
-- ----------------------------
DROP TABLE IF EXISTS `member_rule`;
CREATE TABLE `member_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '会员规则表',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '会员名称',
  `recharge` decimal(50,2) NOT NULL DEFAULT '0.00' COMMENT '充值要求',
  `rule` text COMMENT '所选特权配置信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_rule
-- ----------------------------
INSERT INTO `member_rule` VALUES ('1', '白银', '500.00', '{\"money\":\"500.00\",\"pid\":{\"1\":\"1\"},\"value\":{\"1\":\"9.5\"}}');
INSERT INTO `member_rule` VALUES ('2', '黄金', '1000.00', '{\"money\":\"1000.00\",\"pid\":{\"1\":\"1\"},\"value\":{\"1\":\"8.5\"}}');
INSERT INTO `member_rule` VALUES ('3', '钻石', '5000.00', '{\"money\":\"5000.00\",\"pid\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\"},\"value\":{\"1\":\"7\"}}');
