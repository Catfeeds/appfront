/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : fecshop

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2018-08-02 09:03:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for privilege
-- ----------------------------
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '特权名称',
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '特权图片',
  `info` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '特权的简介',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '特权类型 1 不需要有值  2需要值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of privilege
-- ----------------------------
INSERT INTO `privilege` VALUES ('1', '会员折扣', 'logo.png', '会员折扣', '3', '2');
INSERT INTO `privilege` VALUES ('2', '新服务尝鲜', 'logo.png', '新服务尝鲜', '1', '1');
INSERT INTO `privilege` VALUES ('3', 'VIP快速服务', 'logo.png', 'VIP快速服务', '2', '1');
