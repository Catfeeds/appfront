/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : fecshop

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2018-07-23 11:14:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_config`
-- ----------------------------
DROP TABLE IF EXISTS `admin_config`;
CREATE TABLE `admin_config` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `label` varchar(150) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(2555) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_person` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_config
-- ----------------------------
INSERT INTO `admin_config` VALUES ('10', '11', '111', '111', '111', '2016-10-07 15:42:01', '2016-10-07 15:42:01', 'admin');
INSERT INTO `admin_config` VALUES ('11', '11', '11', '11', '11', '2016-10-07 15:42:14', '2016-10-07 15:42:14', 'admin');

-- ----------------------------
-- Table structure for `admin_menu`
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `parent_id` int(15) DEFAULT NULL,
  `url_key` varchar(255) DEFAULT NULL,
  `role_key` varchar(150) DEFAULT NULL COMMENT '权限key，也就是controller的路径，譬如/fecadmin/menu/managere,controller 是MenuController，当前的值为：/fecadmin/menu',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `sort_order` int(10) NOT NULL DEFAULT '0',
  `can_delete` int(5) DEFAULT '2' COMMENT '是否可以被删除，1代表不可以删除，2代表可以删除',
  PRIMARY KEY (`id`),
  KEY `url_key` (`url_key`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('164', '控制面板', '1', '0', '/ddd', null, '2016-01-15 10:21:36', '2016-01-15 10:21:36', '0', '1');
INSERT INTO `admin_menu` VALUES ('165', '用户管理', '2', '164', '/ddd', '', '2016-01-15 10:23:01', '2016-07-29 17:33:50', '1111', '1');
INSERT INTO `admin_menu` VALUES ('166', '菜单管理', '2', '164', '/fecadmin/menu/manager', '/fecadmin/menu', '2016-01-15 10:23:22', '2016-07-29 17:33:59', '1100', '1');
INSERT INTO `admin_menu` VALUES ('167', '我的账户', '3', '165', '/fecadmin/myaccount/index', '/fecadmin/myaccount', '2016-01-15 10:24:29', '2016-01-16 16:07:58', '0', '1');
INSERT INTO `admin_menu` VALUES ('168', '账户管理', '3', '165', '/fecadmin/account/manager', '/fecadmin/account', '2016-01-15 10:24:51', '2016-01-21 15:24:18', '0', '1');
INSERT INTO `admin_menu` VALUES ('169', '权限管理', '3', '165', '/fecadmin/role/manager', '/fecadmin/role', '2016-01-15 10:25:10', '2016-01-21 13:22:39', '0', '1');
INSERT INTO `admin_menu` VALUES ('170', '操作日志', '2', '164', '/fecadmin/log/index', '/fecadmin/log', '2016-01-15 10:35:19', '2016-07-29 17:34:05', '999', '1');
INSERT INTO `admin_menu` VALUES ('171', '缓存管理', '2', '164', '/fecadmin/cache/index', '/fecadmin/cache', '2016-01-15 10:35:40', '2016-01-16 16:45:14', '0', '1');
INSERT INTO `admin_menu` VALUES ('177', 'CMS', '1', '0', '/x/x/x', '/x/x', '2016-07-11 21:16:56', '2016-07-16 09:32:30', '5', '2');
INSERT INTO `admin_menu` VALUES ('178', '文章-Article', '2', '177', '/cms/article/index', '/cms/article', '2016-07-11 21:17:17', '2016-08-08 11:31:26', '0', '2');
INSERT INTO `admin_menu` VALUES ('179', 'Catalog', '1', '0', '/x/x/x', '/x/x', '2016-07-22 16:01:37', '2016-07-22 16:01:44', '100', '2');
INSERT INTO `admin_menu` VALUES ('180', '产品管理', '2', '179', '/catalog/product/index', '/catalog/product', '2016-07-22 16:02:01', '2016-07-22 16:07:03', '100', '2');
INSERT INTO `admin_menu` VALUES ('181', 'Url 重写管理', '2', '179', '/catalog/urlrewrite/index', '/catalog/urlrewrite', '2016-07-22 16:02:49', '2016-07-22 16:10:14', '0', '2');
INSERT INTO `admin_menu` VALUES ('182', '分类管理', '2', '179', '/catalog/category/index', '/catalog/category', '2016-07-22 16:03:05', '2016-07-22 16:07:11', '90', '2');
INSERT INTO `admin_menu` VALUES ('183', '后台配置', '2', '164', '/fecadmin/config/manager', '/fecadmin/config', '2016-07-22 16:05:31', '2016-07-22 16:05:31', '0', '2');
INSERT INTO `admin_menu` VALUES ('184', 'LOG打印输出', '2', '164', '/fecadmin/systemlog/manager', '/fecadmin/systemlog', '2016-07-22 16:05:56', '2016-07-22 16:05:56', '0', '2');
INSERT INTO `admin_menu` VALUES ('185', '产品信息管理', '3', '180', '/catalog/productinfo/index', '/catalog/productinfo', '2016-07-22 16:08:17', '2016-07-22 16:08:17', '0', '2');
INSERT INTO `admin_menu` VALUES ('186', '产品评论管理', '3', '180', '/catalog/productreview/index', '/catalog/productreview', '2016-07-22 16:08:35', '2016-07-22 16:08:35', '0', '2');
INSERT INTO `admin_menu` VALUES ('187', '产品搜索管理', '3', '180', '/catalog/productsearch/index', '/catalog/productsearch', '2016-07-22 16:09:41', '2016-07-22 16:09:41', '0', '2');
INSERT INTO `admin_menu` VALUES ('189', '日志统计', '2', '164', '/fecadmin/logtj/index', '/fecadmin/logtj', '2016-07-29 17:33:34', '2016-07-29 17:33:44', '11', '2');
INSERT INTO `admin_menu` VALUES ('190', '静态块-StaticBlock', '2', '177', '/cms/staticblock/index', '/cms/staticblock', '2016-08-08 11:31:58', '2016-08-08 11:31:58', '0', '2');
INSERT INTO `admin_menu` VALUES ('191', '用户管理', '1', '0', '/x/x/x', '/x/x', '2016-11-01 09:26:56', '2016-11-01 09:27:05', '10', '2');
INSERT INTO `admin_menu` VALUES ('192', '账号管理', '2', '191', '/customer/account/index', '/customer/account', '2016-11-01 09:27:33', '2016-11-01 09:27:33', '0', '2');
INSERT INTO `admin_menu` VALUES ('193', '产品收藏管理', '3', '180', '/catalog/productfavorite/index', '/catalog/productfavorite', '2016-11-01 09:31:03', '2016-11-01 09:31:03', '0', '2');
INSERT INTO `admin_menu` VALUES ('195', '销售', '1', '0', '/x/x/x', '/x/x', '2016-12-12 20:52:03', '2016-12-12 20:52:33', '14', '2');
INSERT INTO `admin_menu` VALUES ('196', '优惠券', '2', '195', '/sales/coupon/manager', '/sales/coupon', '2016-12-12 20:53:02', '2016-12-12 21:43:09', '0', '2');
INSERT INTO `admin_menu` VALUES ('197', '订单', '2', '195', '/x/x/x', '/x/x', '2016-12-12 20:53:41', '2016-12-12 20:54:07', '9999', '2');
INSERT INTO `admin_menu` VALUES ('198', '订单管理', '3', '197', '/sales/orderinfo/manager', '/sales/orderinfo', '2016-12-12 20:54:01', '2016-12-12 21:43:18', '0', '2');
INSERT INTO `admin_menu` VALUES ('199', 'ErrorHandler', '2', '164', '/system/error/index', '/system/error', '2017-12-01 21:45:56', '2017-12-01 23:32:39', '0', '2');
INSERT INTO `admin_menu` VALUES ('201', 'Newsletter', '2', '191', '/customer/newsletter/index', '/customer/newsletter', '2018-05-09 06:40:59', '2018-05-09 06:40:59', '0', '2');

-- ----------------------------
-- Table structure for `admin_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE `admin_role` (
  `role_id` int(15) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL COMMENT '权限名字',
  `role_description` varchar(255) DEFAULT NULL COMMENT '权限描述',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role
-- ----------------------------
INSERT INTO `admin_role` VALUES ('4', 'admin', '超级用户');
INSERT INTO `admin_role` VALUES ('12', '账户管理员', '账户管理员');
INSERT INTO `admin_role` VALUES ('13', 'ceshi', 'ceshi');

-- ----------------------------
-- Table structure for `admin_role_menu`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_menu`;
CREATE TABLE `admin_role_menu` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `menu_id` int(15) NOT NULL,
  `role_id` int(15) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role_menu
-- ----------------------------
INSERT INTO `admin_role_menu` VALUES ('4', '164', '4', '2016-01-16 11:19:15', '2016-01-16 11:19:15');
INSERT INTO `admin_role_menu` VALUES ('38', '165', '4', '2016-01-16 14:46:17', '2016-01-16 14:46:17');
INSERT INTO `admin_role_menu` VALUES ('39', '167', '4', '2016-01-16 14:46:17', '2016-01-16 14:46:17');
INSERT INTO `admin_role_menu` VALUES ('41', '169', '4', '2016-01-16 14:46:17', '2016-01-16 14:46:17');
INSERT INTO `admin_role_menu` VALUES ('43', '171', '4', '2016-01-16 14:46:17', '2016-01-16 14:46:17');
INSERT INTO `admin_role_menu` VALUES ('46', '166', '4', '2016-01-16 17:47:30', '2016-01-16 17:47:30');
INSERT INTO `admin_role_menu` VALUES ('49', '168', '4', '2016-01-18 12:16:49', '2016-01-18 12:16:49');
INSERT INTO `admin_role_menu` VALUES ('50', '170', '4', '2016-01-18 12:16:49', '2016-01-18 12:16:49');
INSERT INTO `admin_role_menu` VALUES ('51', '164', '13', '2016-01-21 14:12:09', '2016-01-21 14:12:09');
INSERT INTO `admin_role_menu` VALUES ('56', '166', '13', '2016-01-21 14:12:09', '2016-01-21 14:12:09');
INSERT INTO `admin_role_menu` VALUES ('57', '170', '13', '2016-01-21 14:12:09', '2016-01-21 14:12:09');
INSERT INTO `admin_role_menu` VALUES ('58', '171', '13', '2016-01-21 14:12:09', '2016-01-21 14:12:09');
INSERT INTO `admin_role_menu` VALUES ('64', '177', '4', '2016-07-11 21:17:46', '2016-07-11 21:17:46');
INSERT INTO `admin_role_menu` VALUES ('65', '178', '4', '2016-07-11 21:17:46', '2016-07-11 21:17:46');
INSERT INTO `admin_role_menu` VALUES ('66', '179', '4', '2016-07-22 16:04:25', '2016-07-22 16:04:25');
INSERT INTO `admin_role_menu` VALUES ('67', '180', '4', '2016-07-22 16:04:25', '2016-07-22 16:04:25');
INSERT INTO `admin_role_menu` VALUES ('68', '182', '4', '2016-07-22 16:04:25', '2016-07-22 16:04:25');
INSERT INTO `admin_role_menu` VALUES ('69', '181', '4', '2016-07-22 16:04:25', '2016-07-22 16:04:25');
INSERT INTO `admin_role_menu` VALUES ('70', '183', '4', '2016-07-22 16:06:10', '2016-07-22 16:06:10');
INSERT INTO `admin_role_menu` VALUES ('71', '184', '4', '2016-07-22 16:06:10', '2016-07-22 16:06:10');
INSERT INTO `admin_role_menu` VALUES ('72', '185', '4', '2016-07-22 16:10:22', '2016-07-22 16:10:22');
INSERT INTO `admin_role_menu` VALUES ('73', '186', '4', '2016-07-22 16:10:22', '2016-07-22 16:10:22');
INSERT INTO `admin_role_menu` VALUES ('74', '187', '4', '2016-07-22 16:10:22', '2016-07-22 16:10:22');
INSERT INTO `admin_role_menu` VALUES ('76', '189', '4', '2016-07-29 17:34:17', '2016-07-29 17:34:17');
INSERT INTO `admin_role_menu` VALUES ('77', '190', '4', '2016-08-08 11:32:12', '2016-08-08 11:32:12');
INSERT INTO `admin_role_menu` VALUES ('83', '185', '12', '2016-10-07 15:07:22', '2016-10-07 15:07:22');
INSERT INTO `admin_role_menu` VALUES ('84', '186', '12', '2016-10-07 15:07:22', '2016-10-07 15:07:22');
INSERT INTO `admin_role_menu` VALUES ('86', '180', '12', '2016-10-07 15:07:22', '2016-10-07 15:07:22');
INSERT INTO `admin_role_menu` VALUES ('87', '179', '12', '2016-10-07 15:07:22', '2016-10-07 15:07:22');
INSERT INTO `admin_role_menu` VALUES ('88', '187', '12', '2016-10-07 15:14:02', '2016-10-07 15:14:02');
INSERT INTO `admin_role_menu` VALUES ('93', '164', '12', '2016-10-07 15:15:54', '2016-10-07 15:15:54');
INSERT INTO `admin_role_menu` VALUES ('94', '168', '12', '2016-10-07 15:16:16', '2016-10-07 15:16:16');
INSERT INTO `admin_role_menu` VALUES ('99', '193', '4', '2016-11-01 09:31:57', '2016-11-01 09:31:57');
INSERT INTO `admin_role_menu` VALUES ('100', '191', '4', '2016-11-01 09:31:57', '2016-11-01 09:31:57');
INSERT INTO `admin_role_menu` VALUES ('101', '192', '4', '2016-11-01 09:31:57', '2016-11-01 09:31:57');
INSERT INTO `admin_role_menu` VALUES ('102', '193', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('103', '182', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('104', '181', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('105', '191', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('106', '192', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('107', '165', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('108', '167', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('109', '169', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('110', '166', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('111', '170', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('112', '189', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('113', '171', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('114', '183', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('115', '184', '12', '2016-11-03 16:29:00', '2016-11-03 16:29:00');
INSERT INTO `admin_role_menu` VALUES ('120', '195', '4', '2016-12-12 21:35:22', '2016-12-12 21:35:22');
INSERT INTO `admin_role_menu` VALUES ('121', '197', '4', '2016-12-12 21:35:22', '2016-12-12 21:35:22');
INSERT INTO `admin_role_menu` VALUES ('122', '198', '4', '2016-12-12 21:35:22', '2016-12-12 21:35:22');
INSERT INTO `admin_role_menu` VALUES ('123', '196', '4', '2016-12-12 21:35:22', '2016-12-12 21:35:22');
INSERT INTO `admin_role_menu` VALUES ('124', '199', '4', '2017-12-01 21:46:11', '2017-12-01 21:46:11');
INSERT INTO `admin_role_menu` VALUES ('125', '201', '4', '2018-05-09 06:46:44', '2018-05-09 06:46:44');

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password_hash` varchar(80) DEFAULT NULL COMMENT '密码',
  `password_reset_token` varchar(60) DEFAULT NULL COMMENT '密码token',
  `email` varchar(60) DEFAULT NULL COMMENT '邮箱',
  `person` varchar(100) DEFAULT NULL COMMENT '用户姓名',
  `code` varchar(100) DEFAULT NULL,
  `auth_key` varchar(60) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '状态',
  `created_at` int(18) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(18) DEFAULT NULL COMMENT '更新时间',
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  `access_token` varchar(60) DEFAULT NULL,
  `access_token_created_at` int(20) DEFAULT NULL COMMENT 'access token 的创建时间，格式为Int类型的时间戳',
  `allowance` int(20) DEFAULT NULL,
  `allowance_updated_at` int(20) DEFAULT NULL,
  `created_at_datetime` datetime DEFAULT NULL,
  `updated_at_datetime` datetime DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL COMMENT '出生日期',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `access_token` (`access_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'terry', '$2y$13$EyK1HyJtv4A/19Jb8gB5y.4SQm5y93eMeHjUf35ryLyd2dWPJlh8y', null, 'zqy234@126.com', '', '3333', 'HH-ZlZXirlG-egyz8OTtl9EVj9fvKW00', '1', '1441763620', '1475825406', '', 'yrYWR7kY-A9bUAP6UUZgCR3yi3ALtUh-', null, '599', '1452491877', '2016-01-12 09:41:44', '2016-10-07 15:30:06', null);
INSERT INTO `admin_user` VALUES ('2', 'admin', '$2y$13$T5ZFrLpJdTEkAoAdnC6A/u8lh/pG.6M0qAZBo1lKE.6x6o3V6yvVG', null, '3727@qq.com', '超级管理员', '111', '_PYjb4PdIIY332LquBRC5tClZUXV0zm_', '1', null, '1468917063', '', '1Gk6ZNn-QaBaKFI4uE2bSw0w3N7ej72q', null, null, null, '2016-01-11 09:41:52', '2016-06-26 01:40:55', null);

-- ----------------------------
-- Table structure for `admin_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_role`;
CREATE TABLE `admin_user_role` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user_role
-- ----------------------------
INSERT INTO `admin_user_role` VALUES ('1', '2', '4');
INSERT INTO `admin_user_role` VALUES ('2', '2', '12');
INSERT INTO `admin_user_role` VALUES ('7', '1', '12');

-- ----------------------------
-- Table structure for `admin_visit_log`
-- ----------------------------
DROP TABLE IF EXISTS `admin_visit_log`;
CREATE TABLE `admin_visit_log` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `account` varchar(25) DEFAULT NULL COMMENT '操作账号',
  `person` varchar(25) DEFAULT NULL COMMENT '操作人姓名',
  `created_at` datetime DEFAULT NULL COMMENT '操作时间',
  `menu` varchar(100) DEFAULT NULL COMMENT '菜单',
  `url` text COMMENT 'URL',
  `url_key` varchar(150) DEFAULT NULL COMMENT '参数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_visit_log
-- ----------------------------
INSERT INTO `admin_visit_log` VALUES ('1', 'admin', '超级管理员', '2018-05-17 02:23:18', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('2', 'admin', '超级管理员', '2018-05-17 02:23:19', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('3', 'admin', '超级管理员', '2018-05-17 02:23:33', '产品信息管理', '/catalog/productinfo/index?_=1526523800559', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('4', 'admin', '超级管理员', '2018-05-17 02:23:34', '产品评论管理', '/catalog/productreview/index?_=1526523800560', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('5', 'admin', '超级管理员', '2018-05-17 02:23:35', '产品搜索管理', '/catalog/productsearch/index?_=1526523800561', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('6', 'admin', '超级管理员', '2018-05-17 02:23:36', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800562', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('7', 'admin', '超级管理员', '2018-05-17 02:23:37', '产品搜索管理', '/catalog/productsearch/index?_=1526523800563', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('8', 'admin', '超级管理员', '2018-05-17 02:23:38', '产品评论管理', '/catalog/productreview/index?_=1526523800564', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('9', 'admin', '超级管理员', '2018-05-17 02:23:39', '产品信息管理', '/catalog/productinfo/index?_=1526523800565', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('10', 'admin', '超级管理员', '2018-05-17 02:23:40', '分类管理', '/catalog/category/index?_=1526523800566', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('11', 'admin', '超级管理员', '2018-05-17 02:23:42', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800567', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('12', 'admin', '超级管理员', '2018-05-17 02:23:43', '产品搜索管理', '/catalog/productsearch/index?_=1526523800568', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('13', 'admin', '超级管理员', '2018-05-17 02:23:43', '产品评论管理', '/catalog/productreview/index?_=1526523800569', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('14', 'admin', '超级管理员', '2018-05-17 02:23:44', '产品搜索管理', '/catalog/productsearch/index?_=1526523800570', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('15', 'admin', '超级管理员', '2018-05-17 02:23:45', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800571', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('16', 'admin', '超级管理员', '2018-05-17 02:23:45', '分类管理', '/catalog/category/index?_=1526523800572', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('17', 'admin', '超级管理员', '2018-05-17 02:23:46', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800573', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('18', 'admin', '超级管理员', '2018-05-17 02:23:46', '产品搜索管理', '/catalog/productsearch/index?_=1526523800574', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('19', 'admin', '超级管理员', '2018-05-17 02:23:47', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800575', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('20', 'admin', '超级管理员', '2018-05-17 02:23:48', '产品搜索管理', '/catalog/productsearch/index?_=1526523800576', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('21', 'admin', '超级管理员', '2018-05-17 02:23:48', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800577', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('22', 'admin', '超级管理员', '2018-05-17 02:23:49', '产品搜索管理', '/catalog/productsearch/index?_=1526523800578', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('23', 'admin', '超级管理员', '2018-05-17 02:23:49', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800579', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('24', 'admin', '超级管理员', '2018-05-17 02:23:50', '产品搜索管理', '/catalog/productsearch/index?_=1526523800580', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('25', 'admin', '超级管理员', '2018-05-17 02:23:51', '产品评论管理', '/catalog/productreview/index?_=1526523800581', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('26', 'admin', '超级管理员', '2018-05-17 02:23:52', '产品信息管理', '/catalog/productinfo/index?_=1526523800582', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('27', 'admin', '超级管理员', '2018-05-17 02:23:52', '产品评论管理', '/catalog/productreview/index?_=1526523800583', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('28', 'admin', '超级管理员', '2018-05-17 02:23:53', '产品搜索管理', '/catalog/productsearch/index?_=1526523800584', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('29', 'admin', '超级管理员', '2018-05-17 02:23:54', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800585', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('30', 'admin', '超级管理员', '2018-05-17 02:23:54', '产品搜索管理', '/catalog/productsearch/index?_=1526523800586', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('31', 'admin', '超级管理员', '2018-05-17 02:23:55', '产品信息管理', '/catalog/productinfo/index?_=1526523800587', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('32', 'admin', '超级管理员', '2018-05-17 02:23:55', '产品评论管理', '/catalog/productreview/index?_=1526523800588', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('33', 'admin', '超级管理员', '2018-05-17 02:23:56', '产品搜索管理', '/catalog/productsearch/index?_=1526523800589', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('34', 'admin', '超级管理员', '2018-05-17 02:23:57', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800590', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('35', 'admin', '超级管理员', '2018-05-17 02:23:57', '产品搜索管理', '/catalog/productsearch/index?_=1526523800591', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('36', 'admin', '超级管理员', '2018-05-17 02:23:58', '产品评论管理', '/catalog/productreview/index?_=1526523800592', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('37', 'admin', '超级管理员', '2018-05-17 02:23:58', '产品搜索管理', '/catalog/productsearch/index?_=1526523800593', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('38', 'admin', '超级管理员', '2018-05-17 02:23:59', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800594', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('39', 'admin', '超级管理员', '2018-05-17 02:23:59', '产品搜索管理', '/catalog/productsearch/index?_=1526523800595', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('40', 'admin', '超级管理员', '2018-05-17 02:24:00', '产品评论管理', '/catalog/productreview/index?_=1526523800596', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('41', 'admin', '超级管理员', '2018-05-17 02:24:00', '产品信息管理', '/catalog/productinfo/index?_=1526523800597', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('42', 'admin', '超级管理员', '2018-05-17 02:24:01', '产品评论管理', '/catalog/productreview/index?_=1526523800598', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('43', 'admin', '超级管理员', '2018-05-17 02:24:01', '产品搜索管理', '/catalog/productsearch/index?_=1526523800599', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('44', 'admin', '超级管理员', '2018-05-17 02:24:02', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800600', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('45', 'admin', '超级管理员', '2018-05-17 02:24:02', '产品搜索管理', '/catalog/productsearch/index?_=1526523800601', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('46', 'admin', '超级管理员', '2018-05-17 02:24:03', '产品评论管理', '/catalog/productreview/index?_=1526523800602', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('47', 'admin', '超级管理员', '2018-05-17 02:24:04', '产品搜索管理', '/catalog/productsearch/index?_=1526523800603', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('48', 'admin', '超级管理员', '2018-05-17 02:24:04', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800604', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('49', 'admin', '超级管理员', '2018-05-17 02:24:04', '产品搜索管理', '/catalog/productsearch/index?_=1526523800605', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('50', 'admin', '超级管理员', '2018-05-17 02:24:05', '产品评论管理', '/catalog/productreview/index?_=1526523800606', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('51', 'admin', '超级管理员', '2018-05-17 02:24:05', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800607', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('52', 'admin', '超级管理员', '2018-05-17 02:24:07', '产品信息管理', '/catalog/productinfo/index?_=1526523800608', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('53', 'admin', '超级管理员', '2018-05-17 02:24:11', '订单管理', '/sales/orderinfo/manager?_=1526523800609', '/sales/orderinfo');
INSERT INTO `admin_visit_log` VALUES ('54', 'admin', '超级管理员', '2018-05-17 02:24:12', '优惠券', '/sales/coupon/manager?_=1526523800610', '/sales/coupon');
INSERT INTO `admin_visit_log` VALUES ('55', 'admin', '超级管理员', '2018-05-17 02:24:16', '账号管理', '/customer/account/index?_=1526523800611', '/customer/account');
INSERT INTO `admin_visit_log` VALUES ('56', 'admin', '超级管理员', '2018-05-17 02:24:16', 'Newsletter', '/customer/newsletter/index?_=1526523800612', '/customer/newsletter');
INSERT INTO `admin_visit_log` VALUES ('57', 'admin', '超级管理员', '2018-05-17 02:24:19', '文章-Article', '/cms/article/index?_=1526523800613', '/cms/article');
INSERT INTO `admin_visit_log` VALUES ('58', 'admin', '超级管理员', '2018-05-17 02:24:19', '静态块-StaticBlock', '/cms/staticblock/index?_=1526523800614', '/cms/staticblock');
INSERT INTO `admin_visit_log` VALUES ('59', 'admin', '超级管理员', '2018-05-17 02:24:20', '文章-Article', '/cms/article/index?_=1526523800615', '/cms/article');
INSERT INTO `admin_visit_log` VALUES ('60', 'admin', '超级管理员', '2018-05-17 02:24:23', '我的账户', '/fecadmin/myaccount/index?_=1526523800616', '/fecadmin/myaccount');
INSERT INTO `admin_visit_log` VALUES ('61', 'admin', '超级管理员', '2018-05-17 02:24:24', '账户管理', '/fecadmin/account/manager?_=1526523800617', '/fecadmin/account');
INSERT INTO `admin_visit_log` VALUES ('62', 'admin', '超级管理员', '2018-05-17 02:24:27', '权限管理', '/fecadmin/role/manager?_=1526523800618', '/fecadmin/role');
INSERT INTO `admin_visit_log` VALUES ('63', 'admin', '超级管理员', '2018-05-17 02:24:28', '菜单管理', '/fecadmin/menu/manager?_=1526523800619', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('64', 'admin', '超级管理员', '2018-05-17 02:24:29', '操作日志', '/fecadmin/log/index?_=1526523800620', '/fecadmin/log');
INSERT INTO `admin_visit_log` VALUES ('65', 'admin', '超级管理员', '2018-05-17 02:24:31', '菜单管理', '/fecadmin/menu/manager?_=1526523800621', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('66', 'admin', '超级管理员', '2018-05-17 02:24:32', '菜单管理', '/fecadmin/menu/edit?id=185&_=1526523800622', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('67', 'admin', '超级管理员', '2018-05-17 02:24:33', '菜单管理', '/fecadmin/menu/edit?id=186&_=1526523800623', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('68', 'admin', '超级管理员', '2018-05-17 02:24:34', '菜单管理', '/fecadmin/menu/edit?id=187&_=1526523800624', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('69', 'admin', '超级管理员', '2018-05-17 02:24:34', '菜单管理', '/fecadmin/menu/edit?id=193&_=1526523800625', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('70', 'admin', '超级管理员', '2018-05-17 02:24:35', '菜单管理', '/fecadmin/menu/edit?id=182&_=1526523800626', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('71', 'admin', '超级管理员', '2018-05-17 02:24:35', '菜单管理', '/fecadmin/menu/edit?id=181&_=1526523800627', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('72', 'admin', '超级管理员', '2018-05-17 02:24:38', '菜单管理', '/fecadmin/menu/edit?id=196&_=1526523800628', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('73', 'admin', '超级管理员', '2018-05-17 02:24:39', '菜单管理', '/fecadmin/menu/edit?id=198&_=1526523800629', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('74', 'admin', '超级管理员', '2018-05-17 02:24:40', '菜单管理', '/fecadmin/menu/edit?id=192&_=1526523800630', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('75', 'admin', '超级管理员', '2018-05-17 02:24:41', '菜单管理', '/fecadmin/menu/edit?id=201&_=1526523800631', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('76', 'admin', '超级管理员', '2018-05-17 02:24:43', '菜单管理', '/fecadmin/menu/edit?id=178&_=1526523800632', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('77', 'admin', '超级管理员', '2018-05-17 02:24:44', '菜单管理', '/fecadmin/menu/edit?id=190&_=1526523800633', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('78', 'admin', '超级管理员', '2018-05-17 02:24:45', '菜单管理', '/fecadmin/menu/edit?id=166&_=1526523800634', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('79', 'admin', '超级管理员', '2018-05-17 02:24:48', '操作日志', '/fecadmin/log/index?_=1526523800635', '/fecadmin/log');
INSERT INTO `admin_visit_log` VALUES ('80', 'admin', '超级管理员', '2018-05-17 02:24:54', '日志统计', '/fecadmin/logtj/index?_=1526523800636', '/fecadmin/logtj');
INSERT INTO `admin_visit_log` VALUES ('81', 'admin', '超级管理员', '2018-05-17 02:24:55', '缓存管理', '/fecadmin/cache/index?_=1526523800637', '/fecadmin/cache');
INSERT INTO `admin_visit_log` VALUES ('82', 'admin', '超级管理员', '2018-05-17 02:25:00', '后台配置', '/fecadmin/config/manager?_=1526523800638', '/fecadmin/config');
INSERT INTO `admin_visit_log` VALUES ('83', 'admin', '超级管理员', '2018-05-17 02:25:03', 'LOG打印输出', '/fecadmin/systemlog/manager?_=1526523800639', '/fecadmin/systemlog');
INSERT INTO `admin_visit_log` VALUES ('84', 'admin', '超级管理员', '2018-05-17 02:25:03', 'ErrorHandler', '/system/error/index?_=1526523800640', '/system/error');
INSERT INTO `admin_visit_log` VALUES ('85', 'admin', '超级管理员', '2018-05-17 02:25:11', '账号管理', '/customer/account/index?_=1526523800641', '/customer/account');
INSERT INTO `admin_visit_log` VALUES ('86', 'admin', '超级管理员', '2018-05-17 02:25:13', 'Newsletter', '/customer/newsletter/index?_=1526523800642', '/customer/newsletter');
INSERT INTO `admin_visit_log` VALUES ('87', 'admin', '超级管理员', '2018-05-17 02:25:16', '订单管理', '/sales/orderinfo/manager?_=1526523800643', '/sales/orderinfo');
INSERT INTO `admin_visit_log` VALUES ('88', 'admin', '超级管理员', '2018-05-17 02:25:17', '优惠券', '/sales/coupon/manager?_=1526523800644', '/sales/coupon');
INSERT INTO `admin_visit_log` VALUES ('89', 'admin', '超级管理员', '2018-05-17 02:25:19', '分类管理', '/catalog/category/index?_=1526523800645', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('90', 'admin', '超级管理员', '2018-05-17 02:25:27', '产品信息管理', '/catalog/productinfo/index?_=1526523800646', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('91', 'admin', '超级管理员', '2018-05-17 02:25:28', '产品评论管理', '/catalog/productreview/index?_=1526523800647', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('92', 'admin', '超级管理员', '2018-05-17 02:25:29', '产品搜索管理', '/catalog/productsearch/index?_=1526523800648', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('93', 'admin', '超级管理员', '2018-05-17 02:25:30', '产品收藏管理', '/catalog/productfavorite/index?_=1526523800649', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('94', 'admin', '超级管理员', '2018-05-17 02:25:30', '分类管理', '/catalog/category/index?_=1526523800650', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('95', 'admin', '超级管理员', '2018-05-17 02:25:31', 'Url 重写管理', '/catalog/urlrewrite/index?_=1526523800651', '/catalog/urlrewrite');
INSERT INTO `admin_visit_log` VALUES ('96', 'admin', '超级管理员', '2018-05-17 02:51:39', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('97', 'admin', '超级管理员', '2018-05-17 02:52:17', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('98', 'admin', '超级管理员', '2018-05-17 02:52:17', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('99', 'admin', '超级管理员', '2018-05-17 02:52:19', '产品信息管理', '/catalog/productinfo/index?_=1526525537421', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('100', 'admin', '超级管理员', '2018-05-17 02:52:23', '产品评论管理', '/catalog/productreview/index?_=1526525537422', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('101', 'admin', '超级管理员', '2018-05-17 02:52:25', '产品搜索管理', '/catalog/productsearch/index?_=1526525537423', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('102', 'admin', '超级管理员', '2018-05-17 02:52:26', '产品收藏管理', '/catalog/productfavorite/index?_=1526525537424', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('103', 'admin', '超级管理员', '2018-05-17 02:52:29', '分类管理', '/catalog/category/index?_=1526525537425', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('104', 'admin', '超级管理员', '2018-05-17 02:52:31', 'Url 重写管理', '/catalog/urlrewrite/index?_=1526525537426', '/catalog/urlrewrite');
INSERT INTO `admin_visit_log` VALUES ('105', 'admin', '超级管理员', '2018-05-17 02:52:36', '订单管理', '/sales/orderinfo/manager?_=1526525537427', '/sales/orderinfo');
INSERT INTO `admin_visit_log` VALUES ('106', 'admin', '超级管理员', '2018-05-17 02:52:37', '优惠券', '/sales/coupon/manager?_=1526525537428', '/sales/coupon');
INSERT INTO `admin_visit_log` VALUES ('107', 'admin', '超级管理员', '2018-05-17 02:52:39', '账号管理', '/customer/account/index?_=1526525537429', '/customer/account');
INSERT INTO `admin_visit_log` VALUES ('108', 'admin', '超级管理员', '2018-05-17 02:52:40', 'Newsletter', '/customer/newsletter/index?_=1526525537430', '/customer/newsletter');
INSERT INTO `admin_visit_log` VALUES ('109', 'admin', '超级管理员', '2018-05-17 02:52:55', '文章-Article', '/cms/article/index?_=1526525537431', '/cms/article');
INSERT INTO `admin_visit_log` VALUES ('110', 'admin', '超级管理员', '2018-05-17 02:52:56', '静态块-StaticBlock', '/cms/staticblock/index?_=1526525537432', '/cms/staticblock');
INSERT INTO `admin_visit_log` VALUES ('111', 'admin', '超级管理员', '2018-05-17 02:52:58', '我的账户', '/fecadmin/myaccount/index?_=1526525537433', '/fecadmin/myaccount');
INSERT INTO `admin_visit_log` VALUES ('112', 'admin', '超级管理员', '2018-05-17 02:52:59', '账户管理', '/fecadmin/account/manager?_=1526525537434', '/fecadmin/account');
INSERT INTO `admin_visit_log` VALUES ('113', 'admin', '超级管理员', '2018-05-17 02:53:00', '权限管理', '/fecadmin/role/manager?_=1526525537435', '/fecadmin/role');
INSERT INTO `admin_visit_log` VALUES ('114', 'admin', '超级管理员', '2018-05-17 02:53:01', '菜单管理', '/fecadmin/menu/manager?_=1526525537436', '/fecadmin/menu');
INSERT INTO `admin_visit_log` VALUES ('115', 'admin', '超级管理员', '2018-05-17 02:53:02', '操作日志', '/fecadmin/log/index?_=1526525537437', '/fecadmin/log');
INSERT INTO `admin_visit_log` VALUES ('116', 'admin', '超级管理员', '2018-05-17 02:53:03', '日志统计', '/fecadmin/logtj/index?_=1526525537438', '/fecadmin/logtj');
INSERT INTO `admin_visit_log` VALUES ('117', 'admin', '超级管理员', '2018-05-17 02:53:03', '缓存管理', '/fecadmin/cache/index?_=1526525537439', '/fecadmin/cache');
INSERT INTO `admin_visit_log` VALUES ('118', 'admin', '超级管理员', '2018-05-17 02:53:05', '后台配置', '/fecadmin/config/manager?_=1526525537440', '/fecadmin/config');
INSERT INTO `admin_visit_log` VALUES ('119', 'admin', '超级管理员', '2018-05-17 02:53:06', 'LOG打印输出', '/fecadmin/systemlog/manager?_=1526525537441', '/fecadmin/systemlog');
INSERT INTO `admin_visit_log` VALUES ('120', 'admin', '超级管理员', '2018-05-17 02:53:07', 'ErrorHandler', '/system/error/index?_=1526525537442', '/system/error');
INSERT INTO `admin_visit_log` VALUES ('121', 'admin', '超级管理员', '2018-05-17 02:53:08', 'LOG打印输出', '/fecadmin/systemlog/manager?_=1526525537443', '/fecadmin/systemlog');
INSERT INTO `admin_visit_log` VALUES ('122', 'admin', '超级管理员', '2018-05-17 02:53:13', '产品信息管理', '/catalog/productinfo/index?_=1526525537444', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('123', 'admin', '超级管理员', '2018-05-17 02:57:35', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('124', 'admin', '超级管理员', '2018-05-17 03:10:04', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('125', 'admin', '超级管理员', '2018-05-17 03:10:27', '产品信息管理', '/catalog/productinfo/index?_=1526526604792', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('126', 'admin', '超级管理员', '2018-05-17 03:10:44', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('127', 'admin', '超级管理员', '2018-05-17 03:10:50', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('128', 'admin', '超级管理员', '2018-05-17 03:10:51', '产品信息管理', '/catalog/productinfo/index?_=1526526650287', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('129', 'admin', '超级管理员', '2018-05-17 03:11:36', '产品评论管理', '/catalog/productreview/index?_=1526526650288', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('130', 'admin', '超级管理员', '2018-05-17 03:11:42', '产品评论管理', '/catalog/productreview/index?_=1526526650289', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('131', 'admin', '超级管理员', '2018-05-17 03:11:43', '产品搜索管理', '/catalog/productsearch/index?_=1526526650290', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('132', 'admin', '超级管理员', '2018-05-17 03:11:44', '产品收藏管理', '/catalog/productfavorite/index?_=1526526650291', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('133', 'admin', '超级管理员', '2018-05-17 03:11:51', '分类管理', '/catalog/category/index?_=1526526650292', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('134', 'admin', '超级管理员', '2018-05-17 03:11:54', '产品搜索管理', '/catalog/productsearch/index?_=1526526650293', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('135', 'admin', '超级管理员', '2018-05-17 03:11:55', '产品收藏管理', '/catalog/productfavorite/index?_=1526526650294', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('136', 'admin', '超级管理员', '2018-05-17 03:11:56', '分类管理', '/catalog/category/index?_=1526526650295', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('137', 'admin', '超级管理员', '2018-05-17 03:11:57', '分类管理', '/catalog/category/index?parent_id=0&_=1526526650296', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('138', 'admin', '超级管理员', '2018-05-17 03:12:29', 'Url 重写管理', '/catalog/urlrewrite/index?_=1526526650297', '/catalog/urlrewrite');
INSERT INTO `admin_visit_log` VALUES ('139', 'admin', '超级管理员', '2018-05-17 03:12:31', '产品收藏管理', '/catalog/productfavorite/index?_=1526526650298', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('140', 'admin', '超级管理员', '2018-05-17 03:12:32', '分类管理', '/catalog/category/index?_=1526526650299', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('141', 'admin', '超级管理员', '2018-05-17 03:12:35', '分类管理', '/catalog/category/index?_id=5a1b673ebfb7ae44c26734f2&_=1526526650300', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('142', 'admin', '超级管理员', '2018-05-17 03:12:59', '分类管理', '/catalog/category/index?_id=57beb586f656f275313bf57a&_=1526526650301', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('143', 'admin', '超级管理员', '2018-05-17 03:13:06', '分类管理', '/catalog/category/index?_id=5a1b673ebfb7ae44c26734f2&_=1526526650302', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('144', 'admin', '超级管理员', '2018-05-17 03:13:15', '分类管理', '/catalog/category/remove?_id=5a1b673ebfb7ae44c26734f2', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('145', 'admin', '超级管理员', '2018-05-17 03:13:15', '分类管理', '/catalog/category/index', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('146', 'admin', '超级管理员', '2018-05-17 03:13:37', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('147', 'admin', '超级管理员', '2018-05-17 03:25:55', '产品评论管理', '/catalog/productreview/index?_=1526526818044', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('148', 'admin', '超级管理员', '2018-05-17 03:25:57', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('149', 'admin', '超级管理员', '2018-05-17 03:25:59', '产品评论管理', '/catalog/productreview/index?_=1526527557325', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('150', 'admin', '超级管理员', '2018-05-17 03:26:10', '产品搜索管理', '/catalog/productsearch/index?_=1526527557326', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('151', 'admin', '超级管理员', '2018-05-17 03:26:10', '产品收藏管理', '/catalog/productfavorite/index?_=1526527557327', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('152', 'admin', '超级管理员', '2018-05-17 03:39:11', '产品收藏管理', '/catalog/productfavorite/index?_=1526527557328', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('153', 'admin', '超级管理员', '2018-05-17 03:39:12', '产品搜索管理', '/catalog/productsearch/index?_=1526527557329', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('154', 'admin', '超级管理员', '2018-05-17 03:39:12', '产品评论管理', '/catalog/productreview/index?_=1526527557330', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('155', 'admin', '超级管理员', '2018-05-17 03:39:13', '产品信息管理', '/catalog/productinfo/index?_=1526527557331', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('156', 'admin', '超级管理员', '2018-05-17 03:39:14', '产品评论管理', '/catalog/productreview/index?_=1526527557332', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('157', 'admin', '超级管理员', '2018-05-17 03:39:15', '产品搜索管理', '/catalog/productsearch/index?_=1526527557333', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('158', 'admin', '超级管理员', '2018-05-17 03:39:16', '产品收藏管理', '/catalog/productfavorite/index?_=1526527557334', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('159', 'admin', '超级管理员', '2018-05-17 03:39:16', '产品搜索管理', '/catalog/productsearch/index?_=1526527557335', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('160', 'admin', '超级管理员', '2018-05-17 03:39:17', '产品评论管理', '/catalog/productreview/index?_=1526527557336', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('161', 'admin', '超级管理员', '2018-05-17 03:39:18', '产品信息管理', '/catalog/productinfo/index?_=1526527557337', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('162', 'admin', '超级管理员', '2018-05-17 03:39:19', '产品评论管理', '/catalog/productreview/index?_=1526527557338', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('163', 'admin', '超级管理员', '2018-05-17 03:39:20', '产品搜索管理', '/catalog/productsearch/index?_=1526527557339', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('164', 'admin', '超级管理员', '2018-05-17 03:39:20', '产品信息管理', '/catalog/productinfo/index?_=1526527557340', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('165', 'admin', '超级管理员', '2018-05-17 03:39:21', '产品评论管理', '/catalog/productreview/index?_=1526527557341', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('166', 'admin', '超级管理员', '2018-05-17 03:39:22', '产品搜索管理', '/catalog/productsearch/index?_=1526527557342', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('167', 'admin', '超级管理员', '2018-05-17 03:39:23', '产品收藏管理', '/catalog/productfavorite/index?_=1526527557343', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('168', 'admin', '超级管理员', '2018-05-17 05:45:00', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('169', 'admin', '超级管理员', '2018-05-17 05:45:01', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('170', 'admin', '超级管理员', '2018-05-17 05:45:03', '产品信息管理', '/catalog/productinfo/index?_=1526535901425', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('171', 'admin', '超级管理员', '2018-05-17 05:45:14', '产品信息管理', '/catalog/productinfo/manageredit?_id=57bac59ef656f24f123bf56e&_=1526535901426', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('172', 'admin', '超级管理员', '2018-05-17 05:45:14', '产品信息管理', '/catalog/productinfo/getproductcategory?product_id=57bac59ef656f24f123bf56e', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('173', 'admin', '超级管理员', '2018-05-17 05:45:43', 'Url 重写管理', '/catalog/urlrewrite/index?_=1526535901427', '/catalog/urlrewrite');
INSERT INTO `admin_visit_log` VALUES ('174', 'admin', '超级管理员', '2018-05-17 05:45:44', '分类管理', '/catalog/category/index?_=1526535901428', '/catalog/category');
INSERT INTO `admin_visit_log` VALUES ('175', 'admin', '超级管理员', '2018-05-17 05:45:53', '文章-Article', '/cms/article/index?_=1526535901429', '/cms/article');
INSERT INTO `admin_visit_log` VALUES ('176', 'admin', '超级管理员', '2018-05-17 05:45:54', '静态块-StaticBlock', '/cms/staticblock/index?_=1526535901430', '/cms/staticblock');
INSERT INTO `admin_visit_log` VALUES ('177', 'admin', '超级管理员', '2018-05-17 05:45:58', '日志统计', '/fecadmin/logtj/index?_=1526535901431', '/fecadmin/logtj');
INSERT INTO `admin_visit_log` VALUES ('178', 'admin', '超级管理员', '2018-05-17 05:45:58', '操作日志', '/fecadmin/log/index?_=1526535901432', '/fecadmin/log');
INSERT INTO `admin_visit_log` VALUES ('179', 'admin', '超级管理员', '2018-05-17 05:46:00', '缓存管理', '/fecadmin/cache/index?_=1526535901433', '/fecadmin/cache');
INSERT INTO `admin_visit_log` VALUES ('180', 'admin', '超级管理员', '2018-05-17 05:46:01', '后台配置', '/fecadmin/config/manager?_=1526535901434', '/fecadmin/config');
INSERT INTO `admin_visit_log` VALUES ('181', 'admin', '超级管理员', '2018-05-17 05:46:08', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('182', 'admin', '超级管理员', '2018-05-17 05:46:26', '产品信息管理', '/catalog/productinfo/index?_=1526535968980', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('183', 'admin', '超级管理员', '2018-05-17 05:46:27', '产品评论管理', '/catalog/productreview/index?_=1526535968981', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('184', 'admin', '超级管理员', '2018-05-17 05:46:30', '产品评论管理', '/catalog/productreview/manageredit?_id=5a2e0323bfb7ae5f1d2d06b2&_=1526535968982', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('185', 'admin', '超级管理员', '2018-05-17 06:23:27', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('186', 'admin', '超级管理员', '2018-05-17 06:23:37', '产品评论管理', '/catalog/productreview/index?_=1526538207851', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('187', 'admin', '超级管理员', '2018-05-17 08:11:07', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('188', 'admin', '超级管理员', '2018-05-17 08:11:08', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('189', 'admin', '超级管理员', '2018-07-14 09:57:56', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('190', 'admin', '超级管理员', '2018-07-14 09:57:57', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('191', 'admin', '超级管理员', '2018-07-14 09:58:01', '产品信息管理', '/catalog/productinfo/index?_=1531533478286', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('192', 'admin', '超级管理员', '2018-07-14 09:58:03', '产品评论管理', '/catalog/productreview/index?_=1531533478287', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('193', 'admin', '超级管理员', '2018-07-14 09:58:05', '产品搜索管理', '/catalog/productsearch/index?_=1531533478288', '/catalog/productsearch');
INSERT INTO `admin_visit_log` VALUES ('194', 'admin', '超级管理员', '2018-07-14 10:04:27', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('195', 'admin', '超级管理员', '2018-07-14 10:04:30', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('196', 'admin', '超级管理员', '2018-07-14 10:54:51', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('197', 'admin', '超级管理员', '2018-07-14 10:54:52', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('198', 'admin', '超级管理员', '2018-07-14 11:09:54', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('199', 'admin', '超级管理员', '2018-07-14 11:53:34', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('200', 'admin', '超级管理员', '2018-07-14 12:06:07', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('201', 'admin', '超级管理员', '2018-07-14 12:06:09', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('202', 'admin', '超级管理员', '2018-07-14 12:07:20', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('203', 'admin', '超级管理员', '2018-07-14 15:50:51', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('204', 'admin', '超级管理员', '2018-07-14 15:50:51', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('205', 'admin', '超级管理员', '2018-07-14 15:50:51', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('206', 'admin', '超级管理员', '2018-07-14 15:50:54', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('207', 'admin', '超级管理员', '2018-07-14 15:51:11', '产品评论管理', '/catalog/productreview/index?_=1531554653400', '/catalog/productreview');
INSERT INTO `admin_visit_log` VALUES ('208', 'admin', '超级管理员', '2018-07-14 15:51:13', '产品收藏管理', '/catalog/productfavorite/index?_=1531554653401', '/catalog/productfavorite');
INSERT INTO `admin_visit_log` VALUES ('209', 'admin', '超级管理员', '2018-07-14 15:51:18', '优惠券', '/sales/coupon/manager?_=1531554653402', '/sales/coupon');
INSERT INTO `admin_visit_log` VALUES ('210', 'admin', '超级管理员', '2018-07-14 15:51:19', '订单管理', '/sales/orderinfo/manager?_=1531554653403', '/sales/orderinfo');
INSERT INTO `admin_visit_log` VALUES ('211', 'admin', '超级管理员', '2018-07-14 16:02:02', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('212', 'admin', '超级管理员', '2018-07-14 18:24:12', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('213', 'admin', '超级管理员', '2018-07-14 18:24:12', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('214', 'admin', '超级管理员', '2018-07-14 18:24:16', '产品信息管理', '/catalog/productinfo/index?_=1531563853294', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('215', 'admin', '超级管理员', '2018-07-16 11:52:37', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('216', 'admin', '超级管理员', '2018-07-16 11:52:38', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('217', 'admin', '超级管理员', '2018-07-16 11:52:38', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('218', 'admin', '超级管理员', '2018-07-16 11:52:43', '产品信息管理', '/catalog/productinfo/index?_=1531713159365', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('219', 'admin', '超级管理员', '2018-07-16 12:09:26', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('220', 'admin', '超级管理员', '2018-07-16 12:35:43', '产品信息管理', '/catalog/productinfo/index?_=1531714166726', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('221', 'admin', '超级管理员', '2018-07-16 12:35:44', null, '/fecadmin/error/index?_=1531714166726', '/fecadmin/error');
INSERT INTO `admin_visit_log` VALUES ('222', 'admin', '超级管理员', '2018-07-16 12:35:55', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('223', 'admin', '超级管理员', '2018-07-16 12:35:57', '产品信息管理', '/catalog/productinfo/index?_=1531715755283', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('224', 'admin', '超级管理员', '2018-07-16 12:35:57', null, '/fecadmin/error/index?_=1531715755283', '/fecadmin/error');
INSERT INTO `admin_visit_log` VALUES ('225', 'admin', '超级管理员', '2018-07-16 12:36:07', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('226', 'admin', '超级管理员', '2018-07-16 12:36:50', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('227', 'admin', '超级管理员', '2018-07-16 12:36:53', '产品信息管理', '/catalog/productinfo/index?_=1531715811197', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('228', 'admin', '超级管理员', '2018-07-16 13:38:23', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('229', 'admin', '超级管理员', '2018-07-16 13:41:48', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('230', 'admin', '超级管理员', '2018-07-16 14:03:05', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('231', 'admin', '超级管理员', '2018-07-16 14:20:12', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('232', 'admin', '超级管理员', '2018-07-16 14:20:16', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('233', 'admin', '超级管理员', '2018-07-16 14:20:22', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('234', 'admin', '超级管理员', '2018-07-16 14:20:27', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('235', 'admin', '超级管理员', '2018-07-16 14:20:31', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('236', 'admin', '超级管理员', '2018-07-16 14:20:35', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('237', 'admin', '超级管理员', '2018-07-16 14:20:38', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('238', 'admin', '超级管理员', '2018-07-16 14:20:42', '产品信息管理', '/catalog/productinfo/index?_=1531719503692', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('239', 'admin', '超级管理员', '2018-07-16 14:21:21', '产品信息管理', '/catalog/productinfo/manageredit?_id=57bab0d5f656f2940a3bf56e&_=1531719503693', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('240', 'admin', '超级管理员', '2018-07-16 14:21:21', '产品信息管理', '/catalog/productinfo/getproductcategory?product_id=57bab0d5f656f2940a3bf56e', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('241', 'admin', '超级管理员', '2018-07-16 14:21:28', '产品信息管理', '/catalog/productinfo/managereditsave', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('242', 'admin', '超级管理员', '2018-07-16 14:21:37', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('243', 'admin', '超级管理员', '2018-07-16 14:21:39', '产品信息管理', '/catalog/productinfo/index?_=1531722097624', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('244', 'admin', '超级管理员', '2018-07-16 14:27:38', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('245', 'admin', '超级管理员', '2018-07-16 14:35:40', '产品信息管理', '/catalog/productinfo/index?_=1531722458366', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('246', 'admin', '超级管理员', '2018-07-16 14:39:26', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('247', 'admin', '超级管理员', '2018-07-16 15:04:18', '产品信息管理', '/catalog/productinfo/index?_=1531723166929', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('248', 'admin', '超级管理员', '2018-07-16 15:04:21', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('249', 'admin', '超级管理员', '2018-07-16 15:04:23', '产品信息管理', '/catalog/productinfo/index?_=1531724662115', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('250', 'admin', '超级管理员', '2018-07-16 15:41:18', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('251', 'admin', '超级管理员', '2018-07-18 18:06:32', '账号登录', '/fecadmin/login/index', '/fecadmin/login');
INSERT INTO `admin_visit_log` VALUES ('252', 'admin', '超级管理员', '2018-07-18 18:06:32', '主界面', '/', '/fecadmin/index');
INSERT INTO `admin_visit_log` VALUES ('253', 'admin', '超级管理员', '2018-07-18 18:06:36', '产品信息管理', '/catalog/productinfo/index?_=1531908393684', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('254', 'admin', '超级管理员', '2018-07-18 18:06:53', '产品信息管理', '/catalog/productinfo/manageredit?_=1531908393685', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('255', 'admin', '超级管理员', '2018-07-18 18:06:54', '产品信息管理', '/catalog/productinfo/getproductcategory?product_id=', '/catalog/productinfo');
INSERT INTO `admin_visit_log` VALUES ('256', 'admin', '超级管理员', '2018-07-18 18:07:25', '产品信息管理', '/catalog/productinfo/imageupload', '/catalog/productinfo');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_key` varchar(255) DEFAULT NULL COMMENT 'url的path部分，属于自定义url',
  `title` text COMMENT '标题',
  `meta_keywords` text COMMENT '关键字',
  `meta_description` text,
  `content` text,
  `status` int(5) DEFAULT '1' COMMENT '1代表激活，2代表关闭',
  `created_at` int(10) DEFAULT NULL,
  `updated_at` int(10) DEFAULT NULL,
  `created_user_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `url_key` (`url_key`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('25', '/fdsafsd', 'a:7:{s:8:\"title_en\";s:5:\"22222\";s:8:\"title_fr\";s:0:\"\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:0:\"\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:0:\"\";}', 'a:7:{s:16:\"meta_keywords_en\";s:2:\"33\";s:16:\"meta_keywords_fr\";s:0:\"\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:4:\"4444\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:0:\"\";}', 'a:7:{s:19:\"meta_description_en\";s:17:\"<h3>32323233</h3>\";s:19:\"meta_description_fr\";s:5:\"44444\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:0:\"\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:0:\"\";}', 'a:7:{s:10:\"content_en\";s:0:\"\";s:10:\"content_fr\";s:0:\"\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:0:\"\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:0:\"\";}', '2', '1469161277', '1469173934', '2');
INSERT INTO `article` VALUES ('26', '/55555555555', 'a:7:{s:8:\"title_en\";s:15:\"222444444444444\";s:8:\"title_fr\";s:0:\"\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:0:\"\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:0:\"\";}', 'a:7:{s:16:\"meta_keywords_en\";s:3:\"222\";s:16:\"meta_keywords_fr\";s:4:\"3333\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:0:\"\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:0:\"\";}', 'a:7:{s:19:\"meta_description_en\";s:3:\"222\";s:19:\"meta_description_fr\";s:0:\"\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:0:\"\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:0:\"\";}', 'a:7:{s:10:\"content_en\";s:1712:\"<p>六.Yii2实战方面的文章:<a href=\"http://www.fancyecommerce.com/category/yii2-%e5%ae%9e%e6%88%98/\">Yii2 实战</a></p><table><tbody><tr><td><a href=\"http://www.fancyecommerce.com/2016/05/28/yii2-%E9%A1%B5%E9%9D%A2%E5%8A%9F%E8%83%BD%E5%9D%97%EF%BC%88%E5%89%8D%E7%AB%AF%E5%90%8E%E7%AB%AF%E6%8F%90%E4%BE%9B%E6%95%B0%E6%8D%AE%E7%B1%BB%EF%BC%89%EF%BC%8C%E4%BB%A5%E5%8F%8A%E6%B7%B1%E5%BA%A6/\">yii2 页面功能块配置实现原理（前端+后端提供数据类），以及Views深度嵌套</a></td><td><a href=\"http://www.fancyecommerce.com/2016/06/26/yii2-%e5%9c%a8%e5%9f%9f%e5%90%8d%e5%90%8e%e9%9d%a2%e5%8a%a0%e4%b8%80%e4%b8%aa%e8%b7%af%e5%be%84%e4%bd%9c%e4%b8%ba%e9%a6%96%e9%a1%b5/\">yii2 在域名后面加一个路径作为首页</a></td></tr><tr><td><a href=\"http://www.fancyecommerce.com/2016/07/06/yii2-%e5%a4%9a%e6%a8%a1%e6%9d%bf%e8%b7%af%e5%be%84%e4%bc%98%e5%85%88%e7%ba%a7%e5%8a%a0%e8%bd%bdview%e6%96%b9%e5%bc%8f%e4%b8%8b-js%e5%92%8ccss-%e7%9a%84%e8%a7%a3%e5%86%b3/\">yii2 多模板路径优先级加载view方式下- js和css 的解决</a></td><td><a href=\"http://www.fancyecommerce.com/2016/06/30/yii2-fecshop-%e5%a4%9a%e6%a8%a1%e6%9d%bf%e7%9a%84%e4%bb%8b%e7%bb%8d/\">yii2 fecshop 多模板的介绍</a></td></tr></tbody></table><p>七.Nosql方面的知识: <a href=\"http://www.fancyecommerce.com/category/19-nosql-mongodbredis/\">Nosql – Mongodb,Redis</a></p><table><tbody><tr><td><a href=\"http://www.fancyecommerce.com/2016/06/21/%e9%85%8d%e7%bd%aemongodb-%e5%a4%8d%e5%88%b6%e9%9b%863-2/\">配置mongodb 复制集3.2</a></td><td><a href=\"http://www.fancyecommerce.com/2016/06/25/redis-%E5%88%86%E5%8C%BA%E5%AE%9E%E7%8E%B0%E5%8E%9F%E7%90%86/\">Redis 分区实现原理</a></td></tr></tbody></table>\";s:10:\"content_fr\";s:0:\"\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:0:\"\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:0:\"\";}', '1', '1469161289', '1469502714', '2');
INSERT INTO `article` VALUES ('27', '/98145363', 'a:7:{s:8:\"title_en\";s:21:\"发大水发发呆时\";s:8:\"title_fr\";s:6:\"frfrfr\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:0:\"\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:0:\"\";}', 'a:7:{s:16:\"meta_keywords_en\";s:21:\"发大水发发呆时\";s:16:\"meta_keywords_fr\";s:6:\"fr  fr\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:0:\"\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:0:\"\";}', 'a:7:{s:19:\"meta_description_en\";s:21:\"发大水发发呆时\";s:19:\"meta_description_fr\";s:4:\"frfr\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:0:\"\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:0:\"\";}', 'a:7:{s:10:\"content_en\";s:391:\"<p>发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时</p><p>发大水发发呆时发大水发发呆时发大水发发呆时发大水发发呆时</p><p>发大水发发呆时发大水发发呆时发大水发发呆时</p><p>发大水发发呆时发大水发发呆时<br /></p>\";s:10:\"content_fr\";s:29:\"frfr&nbsp; fadashuifrfr<br />\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:0:\"\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:0:\"\";}', '1', '1469280804', '1469772774', '2');
INSERT INTO `article` VALUES ('28', '/97282553', 'a:7:{s:8:\"title_en\";s:26:\"fashion hand bag for women\";s:8:\"title_fr\";s:0:\"\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:0:\"\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:16:\"meta_keywords_en\";s:26:\"fashion hand bag for women\";s:16:\"meta_keywords_fr\";s:0:\"\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:0:\"\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:19:\"meta_description_en\";s:26:\"fashion hand bag for women\";s:19:\"meta_description_fr\";s:0:\"\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:0:\"\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:10:\"content_en\";s:118:\"<img src=\"http://img.fancyecommerce.com/media/upload/e/n_/en_a147177412985490.jpg\" alt=\"\" />fashion hand bag for women\";s:10:\"content_fr\";s:0:\"\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:0:\"\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:12:\"时尚衣服\";}', '1', '1470123712', '1471774138', '2');
INSERT INTO `article` VALUES ('29', '/faq', 'a:7:{s:8:\"title_en\";s:26:\"fashion hand bag for women\";s:8:\"title_fr\";s:0:\"\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:0:\"\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:16:\"meta_keywords_en\";s:26:\"fashion hand bag for women\";s:16:\"meta_keywords_fr\";s:0:\"\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:0:\"\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:19:\"meta_description_en\";s:26:\"fashion hand bag for women\";s:19:\"meta_description_fr\";s:0:\"\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:0:\"\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:12:\"时尚衣服\";}', 'a:7:{s:10:\"content_en\";s:26:\"fashion hand bag for women\";s:10:\"content_fr\";s:0:\"\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:0:\"\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:12:\"时尚衣服\";}', '1', '1470123841', '1483609161', '2');
INSERT INTO `article` VALUES ('30', '/fashion-hand-bag-for-women22', 'a:7:{s:8:\"title_en\";s:28:\"fashion hand bag for women22\";s:8:\"title_fr\";s:0:\"\";s:8:\"title_de\";s:0:\"\";s:8:\"title_es\";s:10:\"eseseseses\";s:8:\"title_ru\";s:0:\"\";s:8:\"title_pt\";s:0:\"\";s:8:\"title_zh\";s:3:\"发\";}', 'a:7:{s:16:\"meta_keywords_en\";s:28:\"fashion hand bag for women22\";s:16:\"meta_keywords_fr\";s:0:\"\";s:16:\"meta_keywords_de\";s:0:\"\";s:16:\"meta_keywords_es\";s:0:\"\";s:16:\"meta_keywords_ru\";s:0:\"\";s:16:\"meta_keywords_pt\";s:0:\"\";s:16:\"meta_keywords_zh\";s:15:\"发的发生的\";}', 'a:7:{s:19:\"meta_description_en\";s:28:\"fashion hand bag for women22\";s:19:\"meta_description_fr\";s:4:\"frfr\";s:19:\"meta_description_de\";s:0:\"\";s:19:\"meta_description_es\";s:10:\"eseseseses\";s:19:\"meta_description_ru\";s:0:\"\";s:19:\"meta_description_pt\";s:0:\"\";s:19:\"meta_description_zh\";s:18:\"爱的色放打算\";}', 'a:7:{s:10:\"content_en\";s:6:\"发生\";s:10:\"content_fr\";s:60:\"芙蓉&nbsp;&nbsp; fr&nbsp;&nbsp; fashion hand bag for women\";s:10:\"content_de\";s:0:\"\";s:10:\"content_es\";s:10:\"eseseseses\";s:10:\"content_ru\";s:0:\"\";s:10:\"content_pt\";s:0:\"\";s:10:\"content_zh\";s:1132:\"<br />LuLu CMS系统优势<br /><br />&nbsp;&nbsp;&nbsp; 容易整合<br />&nbsp;&nbsp;&nbsp; 2016-01-01 18:56:48<br />&nbsp;&nbsp;&nbsp; LuLu CMS让整合第三方厂商解决方案变得更加容易，透过LuLu CMS建立客制化网站可以节省您很多的时间与资源。<br />&nbsp;&nbsp;&nbsp; 新颖的功能<br />&nbsp;&nbsp;&nbsp; 2016-01-01 18:57:07<br />&nbsp;&nbsp;&nbsp; 像是产品标签、多送货地址或产品比较系统等功能，您不需要支付额外的费用来取得，在现成的LuLu CMS系统中，您可以发现更多。<br />&nbsp;&nbsp;&nbsp; 专业与社群支援<br />&nbsp;&nbsp;&nbsp; 2016-01-01 18:57:29<br />&nbsp;&nbsp;&nbsp; 不像是其他的开放原始码解决方案，LuLu CMS提供专业、可信赖的支援，您也可以从热情的社群中取得协助,国内也有LuLu CMS的爱好者创建中文社区。<br />&nbsp;&nbsp;&nbsp; 完整的扩充性<br />&nbsp;&nbsp;&nbsp; 2016-01-01 18:57:48<br />&nbsp;&nbsp;&nbsp; 无论网站经过了一夜或是一年的成长，您不需要担心选择的方案无法应付，LuLu CMS提供了完整的扩充性。<br /><br /><br />\";}', '1', '1470123879', '1470209419', '2');
INSERT INTO `article` VALUES ('31', '/61493194', null, null, null, null, '1', '1477539885', '1477539885', '2');

-- ----------------------------
-- Table structure for `coin_record`
-- ----------------------------
DROP TABLE IF EXISTS `coin_record`;
CREATE TABLE `coin_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `time` int(11) DEFAULT NULL COMMENT '操作时间',
  `type` tinyint(1) DEFAULT NULL COMMENT '1 新增 2 消费',
  `coinNum` float DEFAULT NULL COMMENT '金币的数量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of coin_record
-- ----------------------------

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `password_hash` varchar(80) DEFAULT NULL COMMENT '密码',
  `password_reset_token` varchar(60) DEFAULT NULL COMMENT '密码token',
  `email` varchar(60) DEFAULT NULL COMMENT '邮箱',
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `is_subscribed` int(5) NOT NULL DEFAULT '2' COMMENT '1代表订阅，2代表不订阅邮件',
  `auth_key` varchar(60) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '状态',
  `created_at` int(18) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(18) DEFAULT NULL COMMENT '更新时间',
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  `access_token` varchar(60) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL COMMENT '出生日期',
  `favorite_product_count` int(15) NOT NULL DEFAULT '0' COMMENT '用户收藏的产品的总数',
  `type` varchar(35) DEFAULT 'default' COMMENT '默认为default，如果是第三方登录，譬如google账号登录注册，那么这里的值为google',
  `access_token_created_at` int(20) DEFAULT NULL COMMENT '创建token的时间',
  `allowance` int(20) DEFAULT NULL COMMENT '限制次数访问',
  `allowance_updated_at` int(20) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL COMMENT '登录手机号',
  `headImg` varchar(100) DEFAULT NULL COMMENT '头像',
  `coin` int(10) DEFAULT NULL COMMENT '金币总额',
  `money` float(10,0) DEFAULT NULL COMMENT '余额',
  PRIMARY KEY (`id`),
  UNIQUE KEY `access_token` (`access_token`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '$2y$13$Hm0A16EvCDIKI6WQiecnHeyLPIOHFRcN2hOpTN06Cf7cO9uBKmJ3K', null, '380037343@qq.com', 'river', 'nate', '1', 'XTzsUM2qXqFIOSZtNWLhT2eIXVsMuVbo', '1', '1526528289', '1526528289', '', '47AJZZFl3TcZmiN8IUssxRD6BsA41e0i', null, '1', 'default', null, null, null, '', null, null, null);
INSERT INTO `customer` VALUES ('2', '$2y$10$keQhuK1kVQPybcE6sisg.e5aH4PDLZAKv5mozZHTp1eTmrcgKZG.y', null, null, 'qweasd', null, '2', null, null, null, null, null, null, null, '0', 'default', null, null, null, '', null, null, null);
INSERT INTO `customer` VALUES ('3', '$2y$10$ajU2ILJrUh0yjF4ZfjrMbOB2YCv1.3eO4pO2zyQGQzSf3Qmx6ScLm', null, null, '123qwe', null, '2', null, null, null, null, null, null, null, '0', 'default', null, null, null, '', null, null, null);
INSERT INTO `customer` VALUES ('4', '$2y$13$jOuJjcfCMtv0KaSuml1QcuniYzdagBted3583FqO00oY8/FCvZ8WW', null, 'a@qq.com', 'qwe', '123', '1', 'GEQEtdeB2JbQ04Xy_KVlymqGCqiUpR2f', '1', '1532154354', '1532154354', '', 'RU10WfnR9NF9E6ohROXyGUmetrlNyRQQ', null, '0', 'default', null, null, null, '', null, null, null);

-- ----------------------------
-- Table structure for `customer_address`
-- ----------------------------
DROP TABLE IF EXISTS `customer_address`;
CREATE TABLE `customer_address` (
  `address_id` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `fax` varchar(150) DEFAULT NULL,
  `street1` text,
  `street2` varchar(255) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `created_at` int(20) DEFAULT NULL,
  `updated_at` int(20) DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT '2' COMMENT '1代表是默认地址，2代表不是',
  PRIMARY KEY (`address_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_address
-- ----------------------------
INSERT INTO `customer_address` VALUES ('1', 'qwe', 'a@qq.com', '123', '', 'wqwqwqwq', '', 'wqwqwqwq', 'wqwqwqwq', 'qwq', 'wqwqw', 'qwqw', 'UA', '4', '1532154445', '1532154445', '1');

-- ----------------------------
-- Table structure for `ipn_message`
-- ----------------------------
DROP TABLE IF EXISTS `ipn_message`;
CREATE TABLE `ipn_message` (
  `ipn_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(20) DEFAULT NULL COMMENT 'transaction id',
  `payment_status` varchar(20) DEFAULT NULL COMMENT '支付状态',
  `updated_at` int(15) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`ipn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ipn_message
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1526523330');
INSERT INTO `migration` VALUES ('m170228_072156_fecshop_tables', '1526523341');
INSERT INTO `migration` VALUES ('m170619_014655_fecshop_tables', '1526523342');
INSERT INTO `migration` VALUES ('m170627_013243_fecshop_tables', '1526523343');
INSERT INTO `migration` VALUES ('m170628_052812_fecshop_tables', '1526523346');
INSERT INTO `migration` VALUES ('m170706_050701_fecshop_tables', '1526523347');
INSERT INTO `migration` VALUES ('m170706_091433_fecshop_tables', '1526523348');
INSERT INTO `migration` VALUES ('m170718_090526_fecshop_tables', '1526523349');
INSERT INTO `migration` VALUES ('m170724_031142_fecshop_tables', '1526523349');
INSERT INTO `migration` VALUES ('m171122_084316_fecshop_tables', '1526523350');
INSERT INTO `migration` VALUES ('m171201_154002_fecshop_tables', '1526523350');
INSERT INTO `migration` VALUES ('m171206_101231_fecshop_tables', '1526523351');
INSERT INTO `migration` VALUES ('m180212_075829_fecshop_tables', '1526523352');
INSERT INTO `migration` VALUES ('m180224_012712_fecshop_tables', '1526523352');
INSERT INTO `migration` VALUES ('m180509_064412_fecshop_tables', '1526523353');

-- ----------------------------
-- Table structure for `money_record`
-- ----------------------------
DROP TABLE IF EXISTS `money_record`;
CREATE TABLE `money_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `moneyNum` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of money_record
-- ----------------------------

-- ----------------------------
-- Table structure for `product_custom_option_qty`
-- ----------------------------
DROP TABLE IF EXISTS `product_custom_option_qty`;
CREATE TABLE `product_custom_option_qty` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(50) NOT NULL COMMENT '产品id',
  `custom_option_sku` varchar(50) NOT NULL COMMENT '产品自定义属性sku',
  `qty` int(20) NOT NULL COMMENT '产品个数。',
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`,`custom_option_sku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_custom_option_qty
-- ----------------------------

-- ----------------------------
-- Table structure for `product_flat_qty`
-- ----------------------------
DROP TABLE IF EXISTS `product_flat_qty`;
CREATE TABLE `product_flat_qty` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(50) NOT NULL COMMENT '产品表的id',
  `qty` int(20) NOT NULL COMMENT '产品表的个数',
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_flat_qty
-- ----------------------------
INSERT INTO `product_flat_qty` VALUES ('1', '57bab0d5f656f2940a3bf56e', '111');

-- ----------------------------
-- Table structure for `sales_coupon`
-- ----------------------------
DROP TABLE IF EXISTS `sales_coupon`;
CREATE TABLE `sales_coupon` (
  `coupon_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(15) DEFAULT NULL COMMENT '创建人的ID',
  `shop_id` int(15) DEFAULT NULL COMMENT '商家的ID',
  `start_date` int(15) NOT NULL COMMENT '创建人的id',
  `coupon_name` varchar(100) DEFAULT NULL COMMENT '优惠劵名称',
  `coupon_description` varchar(255) DEFAULT NULL COMMENT '优惠劵描述',
  `coupon_code` varchar(100) DEFAULT NULL COMMENT '优惠劵编号',
  `expiration_date` int(15) DEFAULT NULL COMMENT '过期时间',
  `users_per_customer` int(15) DEFAULT '0' COMMENT '优惠劵被每个客户使用的最大次数',
  `times_used` int(15) DEFAULT '0' COMMENT '优惠劵被使用了多少次',
  `conditions` int(15) DEFAULT NULL COMMENT '优惠劵使用的条件，如果类型为1，则没有条件，如果类型是2，则购物车中产品总额满足多少的时候进行打折。这里填写的是美元金额',
  `discount` int(15) DEFAULT NULL COMMENT '优惠劵的折扣，如果类型为1，这里填写的是百分比，如果类型是2，这里代表的是在总额上减少的金额，货币为美金',
  `goods` varchar(200) DEFAULT NULL COMMENT '0 表示 所有商品 商品用|分割',
  PRIMARY KEY (`coupon_id`),
  KEY `coupon_code` (`coupon_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_coupon
-- ----------------------------
INSERT INTO `sales_coupon` VALUES ('4', '1481629639', '1481880122', '2', null, null, 'weqwwqw', '1543593600', '4', '452', '11', '10', null);

-- ----------------------------
-- Table structure for `sales_coupon_usage`
-- ----------------------------
DROP TABLE IF EXISTS `sales_coupon_usage`;
CREATE TABLE `sales_coupon_usage` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(25) DEFAULT '0' COMMENT '客户id',
  `customer_id` int(25) DEFAULT '0' COMMENT '客户id',
  `times_used` int(15) DEFAULT '0' COMMENT '使用次数',
  `status` tinyint(4) DEFAULT NULL COMMENT '0 未使用 1已使用 2已过期',
  PRIMARY KEY (`id`),
  KEY `coupon_id` (`coupon_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_coupon_usage
-- ----------------------------
INSERT INTO `sales_coupon_usage` VALUES ('1', '4', '16', '2', null);
INSERT INTO `sales_coupon_usage` VALUES ('7', '4', '37', '0', null);
INSERT INTO `sales_coupon_usage` VALUES ('8', '4', '38', '1', null);
INSERT INTO `sales_coupon_usage` VALUES ('9', '4', '39', '4', null);
INSERT INTO `sales_coupon_usage` VALUES ('10', '4', '45', '1', null);
INSERT INTO `sales_coupon_usage` VALUES ('11', '4', '46', '1', null);

-- ----------------------------
-- Table structure for `sales_flat_cart`
-- ----------------------------
DROP TABLE IF EXISTS `sales_flat_cart`;
CREATE TABLE `sales_flat_cart` (
  `cart_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` int(15) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(15) DEFAULT NULL COMMENT '更新时间',
  `items_count` int(10) DEFAULT '0' COMMENT '购物车中产品的总个数，默认为0个',
  `customer_id` int(15) DEFAULT NULL COMMENT '客户id',
  `customer_email` varchar(90) DEFAULT NULL COMMENT '客户邮箱',
  `customer_firstname` varchar(50) DEFAULT NULL COMMENT '客户名字',
  `customer_lastname` varchar(50) DEFAULT NULL COMMENT '客户名字',
  `customer_is_guest` int(5) DEFAULT NULL COMMENT '是否是游客，1代表是游客，2代表不是游客',
  `remote_ip` varchar(26) DEFAULT NULL COMMENT 'ip地址',
  `coupon_code` varchar(20) DEFAULT NULL COMMENT '优惠劵',
  `payment_method` varchar(20) DEFAULT NULL COMMENT '支付方式',
  `shipping_method` varchar(20) DEFAULT NULL COMMENT '货运方式',
  `customer_telephone` varchar(25) DEFAULT NULL COMMENT '客户电话',
  `customer_address_id` int(20) DEFAULT NULL COMMENT '客户地址id',
  `customer_address_country` varchar(50) DEFAULT NULL COMMENT '客户国家',
  `customer_address_state` varchar(50) DEFAULT NULL COMMENT '客户省',
  `customer_address_city` varchar(50) DEFAULT NULL COMMENT '客户市',
  `customer_address_zip` varchar(20) DEFAULT NULL COMMENT '客户zip',
  `customer_address_street1` text COMMENT '客户街道地址1',
  `customer_address_street2` text COMMENT '客户街道地址2',
  `app_name` varchar(20) DEFAULT NULL COMMENT '属于哪个app',
  PRIMARY KEY (`cart_id`),
  KEY `customer_id` (`customer_id`),
  KEY `customer_email` (`customer_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_flat_cart
-- ----------------------------
INSERT INTO `sales_flat_cart` VALUES ('1', '1526535685', '1526535685', '1', '1', '380037343@qq.com', 'river', 'nate', '2', '127.0.0.1', null, null, null, null, null, null, null, null, null, null, null, 'appfront');
INSERT INTO `sales_flat_cart` VALUES ('2', '1532154384', '1532154384', '1', '4', 'a@qq.com', 'qwe', '123', '2', '127.0.0.1', null, 'alipay_standard', 'middle_shipping', null, '1', null, null, null, null, null, null, 'apphtml5');

-- ----------------------------
-- Table structure for `sales_flat_cart_item`
-- ----------------------------
DROP TABLE IF EXISTS `sales_flat_cart_item`;
CREATE TABLE `sales_flat_cart_item` (
  `item_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` int(10) DEFAULT NULL COMMENT '商家ID',
  `cart_id` int(15) DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(15) DEFAULT NULL COMMENT '更新时间',
  `product_id` varchar(100) DEFAULT NULL COMMENT '产品id',
  `qty` int(10) DEFAULT NULL COMMENT '个数',
  `custom_option_sku` varchar(50) DEFAULT NULL COMMENT '产品的自定义属性',
  `active` int(5) NOT NULL DEFAULT '1' COMMENT '1代表勾选状态，2代表不勾选状态',
  PRIMARY KEY (`item_id`),
  KEY `quote_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_flat_cart_item
-- ----------------------------
INSERT INTO `sales_flat_cart_item` VALUES ('2', '1', '1', '1526540524', '1526540524', '57bab0d5f656f2940a3bf56e', '1', '', '1');
INSERT INTO `sales_flat_cart_item` VALUES ('3', '2', '2', '1532154384', '1532154384', '57c7da4af656f273013bf56e', '1', '', '1');

-- ----------------------------
-- Table structure for `sales_flat_order`
-- ----------------------------
DROP TABLE IF EXISTS `sales_flat_order`;
CREATE TABLE `sales_flat_order` (
  `order_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `increment_id` varchar(25) DEFAULT NULL COMMENT '递增个数',
  `order_status` varchar(80) DEFAULT NULL COMMENT '订单状态 0未支付 1已支付 2已接单 3 已完成 4待评价  5 已评价',
  `shop_id` int(10) DEFAULT NULL COMMENT '店铺的ID',
  `created_at` int(15) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(15) DEFAULT NULL COMMENT '更新时间',
  `items_count` int(10) DEFAULT '0' COMMENT '订单中产品的总个数，默认为0个',
  `total_weight` decimal(12,2) DEFAULT '0.00' COMMENT '总重量',
  `order_currency_code` varchar(10) DEFAULT NULL COMMENT '当前货币',
  `order_to_base_rate` decimal(12,4) DEFAULT NULL COMMENT '当前货币和默认货币的比率',
  `grand_total` decimal(12,2) DEFAULT NULL COMMENT '当前订单的总额',
  `base_grand_total` decimal(12,2) DEFAULT NULL COMMENT '当前订单的默认货币总额',
  `subtotal` decimal(12,2) DEFAULT NULL COMMENT '当前订单的产品总额',
  `base_subtotal` decimal(12,2) DEFAULT NULL COMMENT '当前订单的产品默认货币总额',
  `subtotal_with_discount` decimal(12,2) DEFAULT NULL COMMENT '当前订单的去掉的总额',
  `base_subtotal_with_discount` decimal(12,2) DEFAULT NULL COMMENT '当前订单的去掉的默认货币总额',
  `is_changed` int(5) DEFAULT '1' COMMENT '是否change，1代表是，2代表否',
  `checkout_method` varchar(20) DEFAULT NULL COMMENT 'guest，register，代表是游客还是登录客户。',
  `customer_id` int(15) DEFAULT NULL COMMENT '客户id',
  `customer_group` varchar(20) DEFAULT NULL COMMENT '客户组id',
  `customer_email` varchar(90) DEFAULT NULL COMMENT '客户邮箱',
  `customer_firstname` varchar(50) DEFAULT NULL COMMENT '客户名字',
  `customer_lastname` varchar(50) DEFAULT NULL COMMENT '客户名字',
  `customer_is_guest` int(5) DEFAULT NULL COMMENT '是否是游客，1代表是游客，2代表不是游客',
  `remote_ip` varchar(26) DEFAULT NULL COMMENT 'ip地址',
  `coin_num` float DEFAULT NULL COMMENT '金币的使用的个数',
  `coupon_code` int(20) DEFAULT NULL COMMENT '优惠劵',
  `payment_method` varchar(20) DEFAULT NULL COMMENT '支付方式',
  `shipping_method` varchar(20) DEFAULT NULL COMMENT '货运方式',
  `shipping_total` decimal(12,2) DEFAULT NULL COMMENT '运费总额',
  `base_shipping_total` decimal(12,2) DEFAULT NULL COMMENT '默认货币运费总额',
  `customer_telephone` varchar(25) DEFAULT NULL COMMENT '客户电话',
  `customer_address_country` varchar(50) DEFAULT NULL COMMENT '客户国家',
  `customer_address_state` varchar(50) DEFAULT NULL COMMENT '客户省',
  `customer_address_city` varchar(50) DEFAULT NULL COMMENT '客户市',
  `customer_address_zip` varchar(20) DEFAULT NULL COMMENT '客户zip',
  `customer_address_street1` text COMMENT '客户地址1',
  `customer_address_street2` text COMMENT '客户地址2',
  `order_remark` text COMMENT '订单的备注信息，有买家填写提交',
  `txn_type` varchar(20) DEFAULT NULL COMMENT 'Transaction类型，是在购物车点击支付按钮下单，还是在下单页面填写完货运地址信息下单',
  `txn_id` varchar(30) DEFAULT NULL COMMENT 'Transaction Id 支付平台唯一交易号,通过这个可以在第三方支付平台查找订单',
  `payer_id` varchar(30) DEFAULT NULL COMMENT '它是特定PayPal帐户的外部唯一标识符',
  `ipn_track_id` varchar(20) DEFAULT NULL,
  `receiver_id` varchar(20) DEFAULT NULL,
  `verify_sign` varchar(80) DEFAULT NULL,
  `charset` varchar(20) DEFAULT NULL,
  `payment_fee` decimal(12,2) DEFAULT NULL COMMENT '交易服务费',
  `payment_type` varchar(20) DEFAULT NULL COMMENT '交易类型',
  `correlation_id` varchar(20) DEFAULT NULL COMMENT '相关id，快捷支付里面的字段',
  `base_payment_fee` decimal(12,2) DEFAULT NULL COMMENT '交易费用，基础货币值，通过货币进行的转换',
  `protection_eligibility` varchar(20) DEFAULT NULL COMMENT '保护资格，快捷支付里面的字段',
  `protection_eligibility_type` varchar(255) DEFAULT NULL COMMENT '保护资格类型，快捷支付里面的字段',
  `secure_merchant_account_id` varchar(20) DEFAULT NULL COMMENT '商人账户安全id',
  `build` varchar(20) DEFAULT NULL COMMENT 'build',
  `paypal_order_datetime` datetime DEFAULT NULL COMMENT '订单创建，Paypal时间',
  `theme_type` int(5) DEFAULT NULL COMMENT '1-pc,2-mobile',
  `if_is_return_stock` int(5) NOT NULL DEFAULT '2' COMMENT '1,代表订单归还了库存，2代表订单没有归还库存，此状态作用：用来标示pending订单是否释放产品库存',
  `payment_token` varchar(255) DEFAULT NULL COMMENT '支付过程中使用的token，譬如paypal express支付',
  `version` int(5) NOT NULL DEFAULT '0' COMMENT '订单支付成功后，需要更改订单状态和扣除库存，为了防止多次执行扣除库存，进而使用版本号，默认为0，执行一次更改订单状态为processing，则累加1，执行完查询version是否为1，如果不为1，则说明执行过了，事务则回滚。',
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `increment_id` (`increment_id`),
  KEY `oupload_at_order_status` (`updated_at`,`order_status`,`if_is_return_stock`),
  KEY `payment_token` (`payment_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_flat_order
-- ----------------------------

-- ----------------------------
-- Table structure for `sales_flat_order_item`
-- ----------------------------
DROP TABLE IF EXISTS `sales_flat_order_item`;
CREATE TABLE `sales_flat_order_item` (
  `item_id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `store` varchar(100) DEFAULT NULL COMMENT 'store name',
  `order_id` int(15) DEFAULT NULL COMMENT '产品对应的订单表id',
  `customer_id` int(30) DEFAULT NULL COMMENT '用户的id',
  `created_at` int(16) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(16) DEFAULT NULL COMMENT '更新时间',
  `product_id` varchar(100) DEFAULT NULL COMMENT '产品id',
  `sku` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `custom_option_sku` varchar(50) DEFAULT NULL COMMENT '自定义属性',
  `image` varchar(255) DEFAULT NULL COMMENT '图片',
  `weight` decimal(12,2) DEFAULT NULL COMMENT '重量',
  `qty` int(10) DEFAULT NULL COMMENT '个数',
  `row_weight` decimal(12,2) DEFAULT NULL COMMENT '一个产品重量*个数',
  `price` decimal(12,2) DEFAULT NULL COMMENT '产品价格',
  `base_price` decimal(12,2) DEFAULT NULL COMMENT '默认货币价格',
  `row_total` decimal(12,2) DEFAULT NULL COMMENT '一个产品价格*个数',
  `base_row_total` decimal(12,2) DEFAULT NULL COMMENT '一个产品默认货币价格*个数',
  `redirect_url` varchar(200) DEFAULT NULL COMMENT '产品url',
  PRIMARY KEY (`item_id`),
  KEY `order_id` (`order_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_flat_order_item
-- ----------------------------

-- ----------------------------
-- Table structure for `session_storage`
-- ----------------------------
DROP TABLE IF EXISTS `session_storage`;
CREATE TABLE `session_storage` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) DEFAULT NULL COMMENT '用户唯一标示',
  `key` varchar(200) DEFAULT NULL COMMENT 'session key',
  `value` text COMMENT 'session value',
  `timeout` int(20) DEFAULT NULL COMMENT '超时时间，秒',
  `updated_at` int(20) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `uuid` (`uuid`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of session_storage
-- ----------------------------

-- ----------------------------
-- Table structure for `shop`
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL COMMENT '店铺索引id',
  `shop_code` varchar(20) NOT NULL COMMENT '店铺编号',
  `shop_name` varchar(50) NOT NULL DEFAULT '' COMMENT '店铺名称',
  `shop_code` varchar(50) NOT NULL DEFAULT '' COMMENT '店铺编号',
  `shop_type` int(11) NOT NULL DEFAULT '0' COMMENT '店铺类型等级 1 代表水司 2 代表商家',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '店铺管理员id',
  `shop_company_name` varchar(50) NOT NULL DEFAULT '' COMMENT '店铺公司名称',
  `province_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺所在省份ID',
  `district_id` mediumint(8) DEFAULT NULL COMMENT '店铺所在县',
  `city_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺所在市ID',
  `shop_address` varchar(100) NOT NULL DEFAULT '' COMMENT '详细地区',
  `shop_zip` varchar(10) NOT NULL DEFAULT '' COMMENT '邮政编码',
  `shop_state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '店铺状态，0关闭，1开启，2审核中，3 审核失败',
  `shop_close_info` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺关闭原因',
  `shop_logo` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺logo',
  `shop_banner` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺横幅',
  `shop_avatar` varchar(150) NOT NULL DEFAULT '' COMMENT '店铺头像',
  `shop_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺seo关键字',
  `shop_description` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺seo描述',
  `shop_phone` varchar(20) NOT NULL DEFAULT '' COMMENT '商家电话',
  `shop_recommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '推荐，0为否，1为是，默认为0',
  `shop_credit` int(10) NOT NULL DEFAULT '0' COMMENT '店铺信用',
  `shop_desccredit` float NOT NULL DEFAULT '0' COMMENT '描述相符度分数',
  `shop_servicecredit` float NOT NULL DEFAULT '0' COMMENT '服务态度分数',
  `shop_deliverycredit` float NOT NULL DEFAULT '0' COMMENT '发货速度分数',
  `shop_collect` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '店铺收藏数量',
  `shop_sales` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺销售额（不计算退款）',
  `shop_account` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺账户余额',
  `shop_cash` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '店铺可提现金额',
  `live_store_name` varchar(255) NOT NULL DEFAULT '' COMMENT '商铺名称',
  `live_store_address` varchar(255) NOT NULL DEFAULT '' COMMENT '商家地址',
  `live_store_tel` varchar(255) NOT NULL DEFAULT '' COMMENT '商铺电话',
  `shop_region` varchar(50) NOT NULL DEFAULT '' COMMENT '店铺默认配送区域',
  `shop_qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺公众号',
  `shop_create_time` int(11) NOT NULL DEFAULT '0' COMMENT '店铺时间',
  `shop_end_time` int(11) NOT NULL DEFAULT '0' COMMENT '店铺关闭时间',
  `shop_platform_commission_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '平台抽取佣金比率',
  `company_employee_count` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '员工总数',
  `company_registered_capital` int(10) NOT NULL DEFAULT '0' COMMENT '注册资金',
  `contacts_name` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人姓名',
  `contacts_phone` varchar(20) NOT NULL DEFAULT '' COMMENT '联系人电话',
  `contacts_email` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人邮箱',
  `contacts_card_no` varchar(255) NOT NULL DEFAULT '' COMMENT '申请人身份证号',
  `contacts_card_electronic_1` varchar(255) NOT NULL DEFAULT '' COMMENT '申请人手持身份证电子版',
  `contacts_card_electronic_2` varchar(255) NOT NULL DEFAULT '' COMMENT '申请人身份证正面',
  `contacts_card_electronic_3` varchar(255) NOT NULL DEFAULT '' COMMENT '申请人身份证反面',
  `business_licence_number` varchar(50) NOT NULL DEFAULT '' COMMENT '营业执照号',
  `business_sphere` varchar(1000) NOT NULL DEFAULT '' COMMENT '法定经营范围',
  `business_licence_number_electronic` varchar(50) NOT NULL DEFAULT '' COMMENT '营业执照电子版',
  `organization_code` varchar(50) NOT NULL DEFAULT '' COMMENT '组织机构代码',
  `organization_code_electronic` varchar(50) NOT NULL DEFAULT '' COMMENT '组织机构代码电子版',
  `general_taxpayer` varchar(255) NOT NULL DEFAULT '' COMMENT '一般纳税人证明',
  `bank_account_name` varchar(50) NOT NULL DEFAULT '' COMMENT '银行开户名',
  `bank_account_number` varchar(50) NOT NULL DEFAULT '' COMMENT '公司银行账号',
  `bank_name` varchar(50) NOT NULL DEFAULT '' COMMENT '开户银行支行名称',
  `bank_code` varchar(50) NOT NULL DEFAULT '' COMMENT '支行联行号',
  `bank_address` varchar(50) NOT NULL DEFAULT '' COMMENT '开户银行所在地',
  `bank_licence_electronic` varchar(50) NOT NULL DEFAULT '' COMMENT '开户银行许可证电子版',
  `is_settlement_account` tinyint(1) NOT NULL DEFAULT '1' COMMENT '开户行账号是否为结算账号 1-开户行就是结算账号 2-独立的计算账号',
  `settlement_bank_account_name` varchar(50) NOT NULL DEFAULT '' COMMENT '结算银行开户名',
  `settlement_bank_account_number` varchar(50) NOT NULL DEFAULT '' COMMENT '结算公司银行账号',
  `settlement_bank_name` varchar(50) NOT NULL DEFAULT '' COMMENT '结算开户银行支行名称',
  `settlement_bank_code` varchar(50) NOT NULL DEFAULT '' COMMENT '结算支行联行号',
  `settlement_bank_address` varchar(50) NOT NULL DEFAULT '' COMMENT '结算开户银行所在地',
  `tax_registration_certificate` varchar(50) NOT NULL DEFAULT '' COMMENT '税务登记证号',
  `tax_registration_certificate_electronic` varchar(50) NOT NULL DEFAULT '' COMMENT '税务登记证号电子版',
  `taxpayer_id` varchar(50) NOT NULL DEFAULT '' COMMENT '纳税人识别号',
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=16384 COMMENT='店铺数据表';

-- ----------------------------
-- Records of shop
-- ----------------------------

-- ----------------------------
-- Table structure for `static_block`
-- ----------------------------
DROP TABLE IF EXISTS `static_block`;
CREATE TABLE `static_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identify` varchar(100) DEFAULT NULL,
  `title` text,
  `status` int(5) DEFAULT NULL,
  `content` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_user_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `identify` (`identify`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of static_block
-- ----------------------------

-- ----------------------------
-- Table structure for `sys_city`
-- ----------------------------
DROP TABLE IF EXISTS `sys_city`;
CREATE TABLE `sys_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL DEFAULT '0',
  `city_name` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(6) NOT NULL DEFAULT '',
  `sort` int(10) NOT NULL DEFAULT '0',
  `sindex` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `IDX_g_city_CityName` (`city_name`)
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=135;

-- ----------------------------
-- Records of sys_city
-- ----------------------------
INSERT INTO `sys_city` VALUES ('1', '1', '北京市', '100000', '1', 'b');
INSERT INTO `sys_city` VALUES ('2', '2', '天津市', '100000', '0', 't');
INSERT INTO `sys_city` VALUES ('3', '3', '石家庄市', '050000', '0', 's');
INSERT INTO `sys_city` VALUES ('4', '3', '唐山市', '063000', '0', 't');
INSERT INTO `sys_city` VALUES ('5', '3', '秦皇岛市', '066000', '0', 'q');
INSERT INTO `sys_city` VALUES ('6', '3', '邯郸市', '056000', '0', 'h');
INSERT INTO `sys_city` VALUES ('7', '3', '邢台市', '054000', '0', 'x');
INSERT INTO `sys_city` VALUES ('8', '3', '保定市', '071000', '0', 'b');
INSERT INTO `sys_city` VALUES ('9', '3', '张家口市', '075000', '0', 'z');
INSERT INTO `sys_city` VALUES ('10', '3', '承德市', '067000', '0', 'c');
INSERT INTO `sys_city` VALUES ('11', '3', '沧州市', '061000', '0', 'c');
INSERT INTO `sys_city` VALUES ('12', '3', '廊坊市', '065000', '0', 'l');
INSERT INTO `sys_city` VALUES ('13', '3', '衡水市', '053000', '0', 'h');
INSERT INTO `sys_city` VALUES ('14', '4', '太原市', '030000', '0', 't');
INSERT INTO `sys_city` VALUES ('15', '4', '大同市', '037000', '0', 'd');
INSERT INTO `sys_city` VALUES ('16', '4', '阳泉市', '045000', '0', 'y');
INSERT INTO `sys_city` VALUES ('17', '4', '长治市', '046000', '0', 'c');
INSERT INTO `sys_city` VALUES ('18', '4', '晋城市', '048000', '0', 'j');
INSERT INTO `sys_city` VALUES ('19', '4', '朔州市', '036000', '0', 's');
INSERT INTO `sys_city` VALUES ('20', '4', '晋中市', '030600', '0', 'j');
INSERT INTO `sys_city` VALUES ('21', '4', '运城市', '044000', '0', 'y');
INSERT INTO `sys_city` VALUES ('22', '4', '忻州市', '034000', '0', 'x');
INSERT INTO `sys_city` VALUES ('23', '4', '临汾市', '041000', '0', 'l');
INSERT INTO `sys_city` VALUES ('24', '4', '吕梁市', '030500', '0', 'l');
INSERT INTO `sys_city` VALUES ('25', '5', '呼和浩特市', '010000', '0', 'h');
INSERT INTO `sys_city` VALUES ('26', '5', '包头市', '014000', '0', 'b');
INSERT INTO `sys_city` VALUES ('27', '5', '乌海市', '016000', '0', 'w');
INSERT INTO `sys_city` VALUES ('28', '5', '赤峰市', '024000', '0', 'c');
INSERT INTO `sys_city` VALUES ('29', '5', '通辽市', '028000', '0', 't');
INSERT INTO `sys_city` VALUES ('30', '5', '鄂尔多斯市', '010300', '0', 'e');
INSERT INTO `sys_city` VALUES ('31', '5', '呼伦贝尔市', '021000', '0', 'h');
INSERT INTO `sys_city` VALUES ('32', '5', '巴彦淖尔市', '014400', '0', 'b');
INSERT INTO `sys_city` VALUES ('33', '5', '乌兰察布市', '011800', '0', 'w');
INSERT INTO `sys_city` VALUES ('34', '5', '兴安盟', '137500', '0', 'x');
INSERT INTO `sys_city` VALUES ('35', '5', '锡林郭勒盟', '011100', '0', 'x');
INSERT INTO `sys_city` VALUES ('36', '5', '阿拉善盟', '016000', '0', 'a');
INSERT INTO `sys_city` VALUES ('37', '6', '沈阳市', '110000', '0', 's');
INSERT INTO `sys_city` VALUES ('38', '6', '大连市', '116000', '0', 'd');
INSERT INTO `sys_city` VALUES ('39', '6', '鞍山市', '114000', '0', 'a');
INSERT INTO `sys_city` VALUES ('40', '6', '抚顺市', '113000', '0', 'f');
INSERT INTO `sys_city` VALUES ('41', '6', '本溪市', '117000', '0', 'b');
INSERT INTO `sys_city` VALUES ('42', '6', '丹东市', '118000', '0', 'd');
INSERT INTO `sys_city` VALUES ('43', '6', '锦州市', '121000', '0', 'j');
INSERT INTO `sys_city` VALUES ('44', '6', '营口市', '115000', '0', 'y');
INSERT INTO `sys_city` VALUES ('45', '6', '阜新市', '123000', '0', 'f');
INSERT INTO `sys_city` VALUES ('46', '6', '辽阳市', '111000', '0', 'l');
INSERT INTO `sys_city` VALUES ('47', '6', '盘锦市', '124000', '0', 'p');
INSERT INTO `sys_city` VALUES ('48', '6', '铁岭市', '112000', '0', 't');
INSERT INTO `sys_city` VALUES ('49', '6', '朝阳市', '122000', '0', 'z');
INSERT INTO `sys_city` VALUES ('50', '6', '葫芦岛市', '125000', '0', 'h');
INSERT INTO `sys_city` VALUES ('51', '7', '长春市', '130000', '0', 'c');
INSERT INTO `sys_city` VALUES ('52', '7', '吉林市', '132000', '0', 'j');
INSERT INTO `sys_city` VALUES ('53', '7', '四平市', '136000', '0', 's');
INSERT INTO `sys_city` VALUES ('54', '7', '辽源市', '136200', '0', 'l');
INSERT INTO `sys_city` VALUES ('55', '7', '通化市', '134000', '0', 't');
INSERT INTO `sys_city` VALUES ('56', '7', '白山市', '134300', '0', 'b');
INSERT INTO `sys_city` VALUES ('57', '7', '松原市', '131100', '0', 's');
INSERT INTO `sys_city` VALUES ('58', '7', '白城市', '137000', '0', 'b');
INSERT INTO `sys_city` VALUES ('59', '7', '延边朝鲜族自治州', '133000', '0', 'y');
INSERT INTO `sys_city` VALUES ('60', '8', '哈尔滨市', '150000', '0', 'h');
INSERT INTO `sys_city` VALUES ('61', '8', '齐齐哈尔市', '161000', '0', 'q');
INSERT INTO `sys_city` VALUES ('62', '8', '鸡西市', '158100', '0', 'j');
INSERT INTO `sys_city` VALUES ('63', '8', '鹤岗市', '154100', '0', 'h');
INSERT INTO `sys_city` VALUES ('64', '8', '双鸭山市', '155100', '0', 's');
INSERT INTO `sys_city` VALUES ('65', '8', '大庆市', '163000', '0', 'd');
INSERT INTO `sys_city` VALUES ('66', '8', '伊春市', '152300', '0', 'y');
INSERT INTO `sys_city` VALUES ('67', '8', '佳木斯市', '154000', '0', 'j');
INSERT INTO `sys_city` VALUES ('68', '8', '七台河市', '154600', '0', 'q');
INSERT INTO `sys_city` VALUES ('69', '8', '牡丹江市', '157000', '0', 'm');
INSERT INTO `sys_city` VALUES ('70', '8', '黑河市', '164300', '0', 'h');
INSERT INTO `sys_city` VALUES ('71', '8', '绥化市', '152000', '0', 's');
INSERT INTO `sys_city` VALUES ('72', '8', '大兴安岭地区', '165000', '0', 'd');
INSERT INTO `sys_city` VALUES ('73', '9', '上海市', '200000', '0', 's');
INSERT INTO `sys_city` VALUES ('74', '10', '南京市', '210000', '0', 'n');
INSERT INTO `sys_city` VALUES ('75', '10', '无锡市', '214000', '0', 'w');
INSERT INTO `sys_city` VALUES ('76', '10', '徐州市', '221000', '0', 'x');
INSERT INTO `sys_city` VALUES ('77', '10', '常州市', '213000', '0', 'c');
INSERT INTO `sys_city` VALUES ('78', '10', '苏州市', '215000', '0', 's');
INSERT INTO `sys_city` VALUES ('79', '10', '南通市', '226000', '0', 'n');
INSERT INTO `sys_city` VALUES ('80', '10', '连云港市', '222000', '0', 'l');
INSERT INTO `sys_city` VALUES ('81', '10', '淮安市', '223200', '0', 'h');
INSERT INTO `sys_city` VALUES ('82', '10', '盐城市', '224000', '0', 'y');
INSERT INTO `sys_city` VALUES ('83', '10', '扬州市', '225000', '0', 'y');
INSERT INTO `sys_city` VALUES ('84', '10', '镇江市', '212000', '0', 'z');
INSERT INTO `sys_city` VALUES ('85', '10', '泰州市', '225300', '0', 't');
INSERT INTO `sys_city` VALUES ('86', '10', '宿迁市', '223800', '0', 's');
INSERT INTO `sys_city` VALUES ('87', '11', '杭州市', '310000', '0', 'h');
INSERT INTO `sys_city` VALUES ('88', '11', '宁波市', '315000', '0', 'n');
INSERT INTO `sys_city` VALUES ('89', '11', '温州市', '325000', '0', 'w');
INSERT INTO `sys_city` VALUES ('90', '11', '嘉兴市', '314000', '0', 'j');
INSERT INTO `sys_city` VALUES ('91', '11', '湖州市', '313000', '0', 'h');
INSERT INTO `sys_city` VALUES ('92', '11', '绍兴市', '312000', '0', 's');
INSERT INTO `sys_city` VALUES ('93', '11', '金华市', '321000', '0', 'j');
INSERT INTO `sys_city` VALUES ('94', '11', '衢州市', '324000', '0', 'q');
INSERT INTO `sys_city` VALUES ('95', '11', '舟山市', '316000', '0', 'z');
INSERT INTO `sys_city` VALUES ('96', '11', '台州市', '318000', '0', 't');
INSERT INTO `sys_city` VALUES ('97', '11', '丽水市', '323000', '0', 'l');
INSERT INTO `sys_city` VALUES ('98', '12', '合肥市', '230000', '0', 'h');
INSERT INTO `sys_city` VALUES ('99', '12', '芜湖市', '241000', '0', 'w');
INSERT INTO `sys_city` VALUES ('100', '12', '蚌埠市', '233000', '0', 'b');
INSERT INTO `sys_city` VALUES ('101', '12', '淮南市', '232000', '0', 'h');
INSERT INTO `sys_city` VALUES ('102', '12', '马鞍山市', '243000', '0', 'm');
INSERT INTO `sys_city` VALUES ('103', '12', '淮北市', '235000', '0', 'h');
INSERT INTO `sys_city` VALUES ('104', '12', '铜陵市', '244000', '0', 't');
INSERT INTO `sys_city` VALUES ('105', '12', '安庆市', '246000', '0', 'a');
INSERT INTO `sys_city` VALUES ('106', '12', '黄山市', '242700', '0', 'h');
INSERT INTO `sys_city` VALUES ('107', '12', '滁州市', '239000', '0', 'c');
INSERT INTO `sys_city` VALUES ('108', '12', '阜阳市', '236100', '0', 'f');
INSERT INTO `sys_city` VALUES ('109', '12', '宿州市', '234100', '0', 's');
INSERT INTO `sys_city` VALUES ('110', '12', '巢湖市', '238000', '0', 'c');
INSERT INTO `sys_city` VALUES ('111', '12', '六安市', '237000', '0', 'l');
INSERT INTO `sys_city` VALUES ('112', '12', '亳州市', '236800', '0', 'b');
INSERT INTO `sys_city` VALUES ('113', '12', '池州市', '247100', '0', 'c');
INSERT INTO `sys_city` VALUES ('114', '12', '宣城市', '366000', '0', 'x');
INSERT INTO `sys_city` VALUES ('115', '13', '福州市', '350000', '0', 'f');
INSERT INTO `sys_city` VALUES ('116', '13', '厦门市', '361000', '0', 's');
INSERT INTO `sys_city` VALUES ('117', '13', '莆田市', '351100', '0', 'p');
INSERT INTO `sys_city` VALUES ('118', '13', '三明市', '365000', '0', 's');
INSERT INTO `sys_city` VALUES ('119', '13', '泉州市', '362000', '0', 'q');
INSERT INTO `sys_city` VALUES ('120', '13', '漳州市', '363000', '0', 'z');
INSERT INTO `sys_city` VALUES ('121', '13', '南平市', '353000', '0', 'n');
INSERT INTO `sys_city` VALUES ('122', '13', '龙岩市', '364000', '0', 'l');
INSERT INTO `sys_city` VALUES ('123', '13', '宁德市', '352100', '0', 'n');
INSERT INTO `sys_city` VALUES ('124', '14', '南昌市', '330000', '0', 'n');
INSERT INTO `sys_city` VALUES ('125', '14', '景德镇市', '333000', '0', 'j');
INSERT INTO `sys_city` VALUES ('126', '14', '萍乡市', '337000', '0', 'p');
INSERT INTO `sys_city` VALUES ('127', '14', '九江市', '332000', '0', 'j');
INSERT INTO `sys_city` VALUES ('128', '14', '新余市', '338000', '0', 'x');
INSERT INTO `sys_city` VALUES ('129', '14', '鹰潭市', '335000', '0', 'y');
INSERT INTO `sys_city` VALUES ('130', '14', '赣州市', '341000', '0', 'g');
INSERT INTO `sys_city` VALUES ('131', '14', '吉安市', '343000', '0', 'j');
INSERT INTO `sys_city` VALUES ('132', '14', '宜春市', '336000', '0', 'y');
INSERT INTO `sys_city` VALUES ('133', '14', '抚州市', '332900', '0', 'f');
INSERT INTO `sys_city` VALUES ('134', '14', '上饶市', '334000', '0', 's');
INSERT INTO `sys_city` VALUES ('135', '15', '济南市', '250000', '0', 'j');
INSERT INTO `sys_city` VALUES ('136', '15', '青岛市', '266000', '0', 'q');
INSERT INTO `sys_city` VALUES ('137', '15', '淄博市', '255000', '0', 'z');
INSERT INTO `sys_city` VALUES ('138', '15', '枣庄市', '277100', '0', 'z');
INSERT INTO `sys_city` VALUES ('139', '15', '东营市', '257000', '0', 'd');
INSERT INTO `sys_city` VALUES ('140', '15', '烟台市', '264000', '0', 'y');
INSERT INTO `sys_city` VALUES ('141', '15', '潍坊市', '261000', '0', 'w');
INSERT INTO `sys_city` VALUES ('142', '15', '济宁市', '272100', '0', 'j');
INSERT INTO `sys_city` VALUES ('143', '15', '泰安市', '271000', '0', 't');
INSERT INTO `sys_city` VALUES ('144', '15', '威海市', '265700', '0', 'w');
INSERT INTO `sys_city` VALUES ('145', '15', '日照市', '276800', '0', 'r');
INSERT INTO `sys_city` VALUES ('146', '15', '莱芜市', '271100', '0', 'l');
INSERT INTO `sys_city` VALUES ('147', '15', '临沂市', '276000', '0', 'l');
INSERT INTO `sys_city` VALUES ('148', '15', '德州市', '253000', '0', 'd');
INSERT INTO `sys_city` VALUES ('149', '15', '聊城市', '252000', '0', 'l');
INSERT INTO `sys_city` VALUES ('150', '15', '滨州市', '256600', '0', 'b');
INSERT INTO `sys_city` VALUES ('151', '15', '荷泽市', '255000', '0', 'h');
INSERT INTO `sys_city` VALUES ('152', '16', '郑州市', '450000', '0', 'z');
INSERT INTO `sys_city` VALUES ('153', '16', '开封市', '475000', '0', 'k');
INSERT INTO `sys_city` VALUES ('154', '16', '洛阳市', '471000', '0', 'l');
INSERT INTO `sys_city` VALUES ('155', '16', '平顶山市', '467000', '0', 'p');
INSERT INTO `sys_city` VALUES ('156', '16', '安阳市', '454900', '0', 'a');
INSERT INTO `sys_city` VALUES ('157', '16', '鹤壁市', '456600', '0', 'h');
INSERT INTO `sys_city` VALUES ('158', '16', '新乡市', '453000', '0', 'x');
INSERT INTO `sys_city` VALUES ('159', '16', '焦作市', '454100', '0', 'j');
INSERT INTO `sys_city` VALUES ('160', '16', '濮阳市', '457000', '0', 'p');
INSERT INTO `sys_city` VALUES ('161', '16', '许昌市', '461000', '0', 'x');
INSERT INTO `sys_city` VALUES ('162', '16', '漯河市', '462000', '0', 'l');
INSERT INTO `sys_city` VALUES ('163', '16', '三门峡市', '472000', '0', 's');
INSERT INTO `sys_city` VALUES ('164', '16', '南阳市', '473000', '0', 'n');
INSERT INTO `sys_city` VALUES ('165', '16', '商丘市', '476000', '0', 's');
INSERT INTO `sys_city` VALUES ('166', '16', '信阳市', '464000', '0', 'x');
INSERT INTO `sys_city` VALUES ('167', '16', '周口市', '466000', '0', 'z');
INSERT INTO `sys_city` VALUES ('168', '16', '驻马店市', '463000', '0', 'z');
INSERT INTO `sys_city` VALUES ('169', '17', '武汉市', '430000', '0', 'w');
INSERT INTO `sys_city` VALUES ('170', '17', '黄石市', '435000', '0', 'h');
INSERT INTO `sys_city` VALUES ('171', '17', '十堰市', '442000', '0', 's');
INSERT INTO `sys_city` VALUES ('172', '17', '宜昌市', '443000', '0', 'y');
INSERT INTO `sys_city` VALUES ('173', '17', '襄樊市', '441000', '0', 'x');
INSERT INTO `sys_city` VALUES ('174', '17', '鄂州市', '436000', '0', 'e');
INSERT INTO `sys_city` VALUES ('175', '17', '荆门市', '448000', '0', 'j');
INSERT INTO `sys_city` VALUES ('176', '17', '孝感市', '432100', '0', 'x');
INSERT INTO `sys_city` VALUES ('177', '17', '荆州市', '434000', '0', 'j');
INSERT INTO `sys_city` VALUES ('178', '17', '黄冈市', '438000', '0', 'h');
INSERT INTO `sys_city` VALUES ('179', '17', '咸宁市', '437000', '0', 'x');
INSERT INTO `sys_city` VALUES ('180', '17', '随州市', '441300', '0', 's');
INSERT INTO `sys_city` VALUES ('181', '17', '恩施土家族苗族自治州', '445000', '0', 'e');
INSERT INTO `sys_city` VALUES ('182', '17', '神农架', '442400', '0', 's');
INSERT INTO `sys_city` VALUES ('183', '18', '长沙市', '410000', '0', 'c');
INSERT INTO `sys_city` VALUES ('184', '18', '株洲市', '412000', '0', 'z');
INSERT INTO `sys_city` VALUES ('185', '18', '湘潭市', '411100', '0', 'x');
INSERT INTO `sys_city` VALUES ('186', '18', '衡阳市', '421000', '0', 'h');
INSERT INTO `sys_city` VALUES ('187', '18', '邵阳市', '422000', '0', 's');
INSERT INTO `sys_city` VALUES ('188', '18', '岳阳市', '414000', '0', 'y');
INSERT INTO `sys_city` VALUES ('189', '18', '常德市', '415000', '0', 'c');
INSERT INTO `sys_city` VALUES ('190', '18', '张家界市', '427000', '0', 'z');
INSERT INTO `sys_city` VALUES ('191', '18', '益阳市', '413000', '0', 'y');
INSERT INTO `sys_city` VALUES ('192', '18', '郴州市', '423000', '0', 'c');
INSERT INTO `sys_city` VALUES ('193', '18', '永州市', '425000', '0', 'y');
INSERT INTO `sys_city` VALUES ('194', '18', '怀化市', '418000', '0', 'h');
INSERT INTO `sys_city` VALUES ('195', '18', '娄底市', '417000', '0', 'l');
INSERT INTO `sys_city` VALUES ('196', '18', '湘西土家族苗族自治州', '416000', '0', 'x');
INSERT INTO `sys_city` VALUES ('197', '19', '广州市', '510000', '0', 'g');
INSERT INTO `sys_city` VALUES ('198', '19', '韶关市', '521000', '0', 's');
INSERT INTO `sys_city` VALUES ('199', '19', '深圳市', '518000', '0', 's');
INSERT INTO `sys_city` VALUES ('200', '19', '珠海市', '519000', '0', 'z');
INSERT INTO `sys_city` VALUES ('201', '19', '汕头市', '515000', '0', 's');
INSERT INTO `sys_city` VALUES ('202', '19', '佛山市', '528000', '0', 'f');
INSERT INTO `sys_city` VALUES ('203', '19', '江门市', '529000', '0', 'j');
INSERT INTO `sys_city` VALUES ('204', '19', '湛江市', '524000', '0', 'z');
INSERT INTO `sys_city` VALUES ('205', '19', '茂名市', '525000', '0', 'm');
INSERT INTO `sys_city` VALUES ('206', '19', '肇庆市', '526000', '0', 'z');
INSERT INTO `sys_city` VALUES ('207', '19', '惠州市', '516000', '0', 'h');
INSERT INTO `sys_city` VALUES ('208', '19', '梅州市', '514000', '0', 'm');
INSERT INTO `sys_city` VALUES ('209', '19', '汕尾市', '516600', '1', 's');
INSERT INTO `sys_city` VALUES ('210', '19', '河源市', '517000', '0', 'h');
INSERT INTO `sys_city` VALUES ('211', '19', '阳江市', '529500', '0', 'y');
INSERT INTO `sys_city` VALUES ('212', '19', '清远市', '511500', '0', 'q');
INSERT INTO `sys_city` VALUES ('213', '19', '东莞市', '511700', '0', 'd');
INSERT INTO `sys_city` VALUES ('214', '19', '中山市', '528400', '0', 'z');
INSERT INTO `sys_city` VALUES ('215', '19', '潮州市', '515600', '0', 'c');
INSERT INTO `sys_city` VALUES ('216', '19', '揭阳市', '522000', '0', 'j');
INSERT INTO `sys_city` VALUES ('217', '19', '云浮市', '527300', '0', 'y');
INSERT INTO `sys_city` VALUES ('218', '20', '南宁市', '530000', '0', 'n');
INSERT INTO `sys_city` VALUES ('219', '20', '柳州市', '545000', '0', 'l');
INSERT INTO `sys_city` VALUES ('220', '20', '桂林市', '541000', '0', 'g');
INSERT INTO `sys_city` VALUES ('221', '20', '梧州市', '543000', '0', 'w');
INSERT INTO `sys_city` VALUES ('222', '20', '北海市', '536000', '0', 'b');
INSERT INTO `sys_city` VALUES ('223', '20', '防城港市', '538000', '0', 'f');
INSERT INTO `sys_city` VALUES ('224', '20', '钦州市', '535000', '0', 'q');
INSERT INTO `sys_city` VALUES ('225', '20', '贵港市', '537100', '0', 'g');
INSERT INTO `sys_city` VALUES ('226', '20', '玉林市', '537000', '0', 'y');
INSERT INTO `sys_city` VALUES ('227', '20', '百色市', '533000', '0', 'b');
INSERT INTO `sys_city` VALUES ('228', '20', '贺州市', '542800', '0', 'h');
INSERT INTO `sys_city` VALUES ('229', '20', '河池市', '547000', '0', 'h');
INSERT INTO `sys_city` VALUES ('230', '20', '来宾市', '546100', '0', 'l');
INSERT INTO `sys_city` VALUES ('231', '20', '崇左市', '532200', '0', 'c');
INSERT INTO `sys_city` VALUES ('232', '21', '海口市', '570000', '0', 'h');
INSERT INTO `sys_city` VALUES ('233', '21', '三亚市', '572000', '0', 's');
INSERT INTO `sys_city` VALUES ('234', '22', '重庆市', '400000', '0', 'z');
INSERT INTO `sys_city` VALUES ('235', '23', '成都市', '610000', '0', 'c');
INSERT INTO `sys_city` VALUES ('236', '23', '自贡市', '643000', '0', 'z');
INSERT INTO `sys_city` VALUES ('237', '23', '攀枝花市', '617000', '0', 'p');
INSERT INTO `sys_city` VALUES ('238', '23', '泸州市', '646100', '0', 'l');
INSERT INTO `sys_city` VALUES ('239', '23', '德阳市', '618000', '0', 'd');
INSERT INTO `sys_city` VALUES ('240', '23', '绵阳市', '621000', '0', 'm');
INSERT INTO `sys_city` VALUES ('241', '23', '广元市', '628000', '0', 'g');
INSERT INTO `sys_city` VALUES ('242', '23', '遂宁市', '629000', '0', 's');
INSERT INTO `sys_city` VALUES ('243', '23', '内江市', '641000', '0', 'n');
INSERT INTO `sys_city` VALUES ('244', '23', '乐山市', '614000', '0', 'l');
INSERT INTO `sys_city` VALUES ('245', '23', '南充市', '637000', '0', 'n');
INSERT INTO `sys_city` VALUES ('246', '23', '眉山市', '612100', '0', 'm');
INSERT INTO `sys_city` VALUES ('247', '23', '宜宾市', '644000', '0', 'y');
INSERT INTO `sys_city` VALUES ('248', '23', '广安市', '638000', '0', 'g');
INSERT INTO `sys_city` VALUES ('249', '23', '达州市', '635000', '0', 'd');
INSERT INTO `sys_city` VALUES ('250', '23', '雅安市', '625000', '0', 'y');
INSERT INTO `sys_city` VALUES ('251', '23', '巴中市', '635500', '0', 'b');
INSERT INTO `sys_city` VALUES ('252', '23', '资阳市', '641300', '0', 'z');
INSERT INTO `sys_city` VALUES ('253', '23', '阿坝藏族羌族自治州', '624600', '0', 'a');
INSERT INTO `sys_city` VALUES ('254', '23', '甘孜藏族自治州', '626000', '0', 'g');
INSERT INTO `sys_city` VALUES ('255', '23', '凉山彝族自治州', '615000', '0', 'l');
INSERT INTO `sys_city` VALUES ('256', '24', '贵阳市', '55000', '0', 'g');
INSERT INTO `sys_city` VALUES ('257', '24', '六盘水市', '553000', '0', 'l');
INSERT INTO `sys_city` VALUES ('258', '24', '遵义市', '563000', '0', 'z');
INSERT INTO `sys_city` VALUES ('259', '24', '安顺市', '561000', '0', 'a');
INSERT INTO `sys_city` VALUES ('260', '24', '铜仁地区', '554300', '0', 't');
INSERT INTO `sys_city` VALUES ('261', '24', '黔西南布依族苗族自治州', '551500', '0', 'q');
INSERT INTO `sys_city` VALUES ('262', '24', '毕节地区', '551700', '0', 'b');
INSERT INTO `sys_city` VALUES ('263', '24', '黔东南苗族侗族自治州', '551500', '0', 'q');
INSERT INTO `sys_city` VALUES ('264', '24', '黔南布依族苗族自治州', '550100', '0', 'q');
INSERT INTO `sys_city` VALUES ('265', '25', '昆明市', '650000', '0', 'k');
INSERT INTO `sys_city` VALUES ('266', '25', '曲靖市', '655000', '0', 'q');
INSERT INTO `sys_city` VALUES ('267', '25', '玉溪市', '653100', '0', 'y');
INSERT INTO `sys_city` VALUES ('268', '25', '保山市', '678000', '0', 'b');
INSERT INTO `sys_city` VALUES ('269', '25', '昭通市', '657000', '0', 'z');
INSERT INTO `sys_city` VALUES ('270', '25', '丽江市', '674100', '0', 'l');
INSERT INTO `sys_city` VALUES ('271', '25', '思茅市', '665000', '0', 's');
INSERT INTO `sys_city` VALUES ('272', '25', '临沧市', '677000', '0', 'l');
INSERT INTO `sys_city` VALUES ('273', '25', '楚雄彝族自治州', '675000', '0', 'c');
INSERT INTO `sys_city` VALUES ('274', '25', '红河哈尼族彝族自治州', '654400', '0', 'h');
INSERT INTO `sys_city` VALUES ('275', '25', '文山壮族苗族自治州', '663000', '0', 'w');
INSERT INTO `sys_city` VALUES ('276', '25', '西双版纳傣族自治州', '666200', '0', 'x');
INSERT INTO `sys_city` VALUES ('277', '25', '大理白族自治州', '671000', '0', 'd');
INSERT INTO `sys_city` VALUES ('278', '25', '德宏傣族景颇族自治州', '678400', '0', 'd');
INSERT INTO `sys_city` VALUES ('279', '25', '怒江傈僳族自治州', '671400', '0', 'n');
INSERT INTO `sys_city` VALUES ('280', '25', '迪庆藏族自治州', '674400', '0', 'd');
INSERT INTO `sys_city` VALUES ('281', '26', '拉萨市', '850000', '0', 'l');
INSERT INTO `sys_city` VALUES ('282', '26', '昌都地区', '854000', '0', 'c');
INSERT INTO `sys_city` VALUES ('283', '26', '山南地区', '856000', '0', 's');
INSERT INTO `sys_city` VALUES ('284', '26', '日喀则地区', '857000', '0', 'r');
INSERT INTO `sys_city` VALUES ('285', '26', '那曲地区', '852000', '0', 'n');
INSERT INTO `sys_city` VALUES ('286', '26', '阿里地区', '859100', '0', 'a');
INSERT INTO `sys_city` VALUES ('287', '26', '林芝地区', '860100', '0', 'l');
INSERT INTO `sys_city` VALUES ('288', '27', '西安市', '710000', '0', 'x');
INSERT INTO `sys_city` VALUES ('289', '27', '铜川市', '727000', '0', 't');
INSERT INTO `sys_city` VALUES ('290', '27', '宝鸡市', '721000', '0', 'b');
INSERT INTO `sys_city` VALUES ('291', '27', '咸阳市', '712000', '0', 'x');
INSERT INTO `sys_city` VALUES ('292', '27', '渭南市', '714000', '0', 'w');
INSERT INTO `sys_city` VALUES ('293', '27', '延安市', '716000', '0', 'y');
INSERT INTO `sys_city` VALUES ('294', '27', '汉中市', '723000', '0', 'h');
INSERT INTO `sys_city` VALUES ('295', '27', '榆林市', '719000', '0', 'y');
INSERT INTO `sys_city` VALUES ('296', '27', '安康市', '725000', '0', 'a');
INSERT INTO `sys_city` VALUES ('297', '27', '商洛市', '711500', '0', 's');
INSERT INTO `sys_city` VALUES ('298', '28', '兰州市', '730000', '0', 'l');
INSERT INTO `sys_city` VALUES ('299', '28', '嘉峪关市', '735100', '0', 'j');
INSERT INTO `sys_city` VALUES ('300', '28', '金昌市', '737100', '0', 'j');
INSERT INTO `sys_city` VALUES ('301', '28', '白银市', '730900', '0', 'b');
INSERT INTO `sys_city` VALUES ('302', '28', '天水市', '741000', '0', 't');
INSERT INTO `sys_city` VALUES ('303', '28', '武威市', '733000', '0', 'w');
INSERT INTO `sys_city` VALUES ('304', '28', '张掖市', '734000', '0', 'z');
INSERT INTO `sys_city` VALUES ('305', '28', '平凉市', '744000', '0', 'p');
INSERT INTO `sys_city` VALUES ('306', '28', '酒泉市', '735000', '0', 'j');
INSERT INTO `sys_city` VALUES ('307', '28', '庆阳市', '744500', '0', 'q');
INSERT INTO `sys_city` VALUES ('308', '28', '定西市', '743000', '0', 'd');
INSERT INTO `sys_city` VALUES ('309', '28', '陇南市', '742100', '0', 'l');
INSERT INTO `sys_city` VALUES ('310', '28', '临夏回族自治州', '731100', '0', 'l');
INSERT INTO `sys_city` VALUES ('311', '28', '甘南藏族自治州', '747000', '0', 'g');
INSERT INTO `sys_city` VALUES ('312', '29', '西宁市', '810000', '0', 'x');
INSERT INTO `sys_city` VALUES ('313', '29', '海东地区', '810600', '0', 'h');
INSERT INTO `sys_city` VALUES ('314', '29', '海北藏族自治州', '810300', '0', 'h');
INSERT INTO `sys_city` VALUES ('315', '29', '黄南藏族自治州', '811300', '0', 'h');
INSERT INTO `sys_city` VALUES ('316', '29', '海南藏族自治州', '813000', '0', 'h');
INSERT INTO `sys_city` VALUES ('317', '29', '果洛藏族自治州', '814000', '0', 'g');
INSERT INTO `sys_city` VALUES ('318', '29', '玉树藏族自治州', '815000', '0', 'y');
INSERT INTO `sys_city` VALUES ('319', '29', '海西蒙古族藏族自治州', '817000', '0', 'h');
INSERT INTO `sys_city` VALUES ('320', '30', '银川市', '750000', '0', 'y');
INSERT INTO `sys_city` VALUES ('321', '30', '石嘴山市', '753000', '0', 's');
INSERT INTO `sys_city` VALUES ('322', '30', '吴忠市', '751100', '0', 'w');
INSERT INTO `sys_city` VALUES ('323', '30', '固原市', '756000', '0', 'g');
INSERT INTO `sys_city` VALUES ('324', '30', '中卫市', '751700', '0', 'z');
INSERT INTO `sys_city` VALUES ('325', '31', '乌鲁木齐市', '830000', '0', 'w');
INSERT INTO `sys_city` VALUES ('326', '31', '克拉玛依市', '834000', '0', 'k');
INSERT INTO `sys_city` VALUES ('327', '31', '吐鲁番地区', '838000', '0', 't');
INSERT INTO `sys_city` VALUES ('328', '31', '哈密地区', '839000', '0', 'h');
INSERT INTO `sys_city` VALUES ('329', '31', '昌吉回族自治州', '831100', '0', 'c');
INSERT INTO `sys_city` VALUES ('330', '31', '博尔塔拉蒙古自治州', '833400', '0', 'b');
INSERT INTO `sys_city` VALUES ('331', '31', '巴音郭楞蒙古自治州', '841000', '0', 'b');
INSERT INTO `sys_city` VALUES ('332', '31', '阿克苏地区', '843000', '0', 'a');
INSERT INTO `sys_city` VALUES ('333', '31', '克孜勒苏柯尔克孜自治州', '835600', '0', 'k');
INSERT INTO `sys_city` VALUES ('334', '31', '喀什地区', '844000', '0', 'k');
INSERT INTO `sys_city` VALUES ('335', '31', '和田地区', '848000', '0', 'h');
INSERT INTO `sys_city` VALUES ('336', '31', '伊犁哈萨克自治州', '833200', '0', 'y');
INSERT INTO `sys_city` VALUES ('337', '31', '塔城地区', '834700', '0', 't');
INSERT INTO `sys_city` VALUES ('338', '31', '阿勒泰地区', '836500', '0', 'a');
INSERT INTO `sys_city` VALUES ('339', '31', '石河子市', '832000', '0', 's');
INSERT INTO `sys_city` VALUES ('340', '31', '阿拉尔市', '843300', '0', 'a');
INSERT INTO `sys_city` VALUES ('341', '31', '图木舒克市', '843900', '0', 't');
INSERT INTO `sys_city` VALUES ('342', '31', '五家渠市', '831300', '0', 'w');
INSERT INTO `sys_city` VALUES ('343', '32', '香港特别行政区', '000000', '0', 'x');
INSERT INTO `sys_city` VALUES ('344', '33', '澳门特别行政区', '000000', '0', 'a');
INSERT INTO `sys_city` VALUES ('345', '34', '台湾省', '000000', '0', 't');

-- ----------------------------
-- Table structure for `sys_district`
-- ----------------------------
DROP TABLE IF EXISTS `sys_district`;
CREATE TABLE `sys_district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) DEFAULT '0',
  `district_name` varchar(255) NOT NULL DEFAULT '',
  `sort` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`district_id`),
  KEY `IDX_g_district_DistrictName` (`district_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2870 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=50;

-- ----------------------------
-- Records of sys_district
-- ----------------------------
INSERT INTO `sys_district` VALUES ('1', '1', '东城区', '0');
INSERT INTO `sys_district` VALUES ('2', '1', '西城区', '0');
INSERT INTO `sys_district` VALUES ('3', '1', '崇文区', '0');
INSERT INTO `sys_district` VALUES ('4', '1', '宣武区', '0');
INSERT INTO `sys_district` VALUES ('5', '1', '朝阳区', '0');
INSERT INTO `sys_district` VALUES ('6', '1', '丰台区', '0');
INSERT INTO `sys_district` VALUES ('7', '1', '石景山区', '0');
INSERT INTO `sys_district` VALUES ('8', '1', '海淀区', '0');
INSERT INTO `sys_district` VALUES ('9', '1', '门头沟区', '0');
INSERT INTO `sys_district` VALUES ('10', '1', '房山区', '0');
INSERT INTO `sys_district` VALUES ('11', '1', '通州区', '0');
INSERT INTO `sys_district` VALUES ('12', '1', '顺义区', '0');
INSERT INTO `sys_district` VALUES ('13', '1', '昌平区', '0');
INSERT INTO `sys_district` VALUES ('14', '1', '大兴区', '0');
INSERT INTO `sys_district` VALUES ('15', '1', '怀柔区', '0');
INSERT INTO `sys_district` VALUES ('16', '1', '平谷区', '0');
INSERT INTO `sys_district` VALUES ('17', '1', '密云县', '0');
INSERT INTO `sys_district` VALUES ('18', '1', '延庆县', '0');
INSERT INTO `sys_district` VALUES ('19', '2', '和平区', '0');
INSERT INTO `sys_district` VALUES ('20', '2', '河东区', '0');
INSERT INTO `sys_district` VALUES ('21', '2', '河西区', '0');
INSERT INTO `sys_district` VALUES ('22', '2', '南开区', '0');
INSERT INTO `sys_district` VALUES ('23', '2', '河北区', '0');
INSERT INTO `sys_district` VALUES ('24', '2', '红桥区', '0');
INSERT INTO `sys_district` VALUES ('25', '2', '塘沽区', '0');
INSERT INTO `sys_district` VALUES ('26', '2', '汉沽区', '0');
INSERT INTO `sys_district` VALUES ('27', '2', '大港区', '0');
INSERT INTO `sys_district` VALUES ('28', '2', '东丽区', '0');
INSERT INTO `sys_district` VALUES ('29', '2', '西青区', '0');
INSERT INTO `sys_district` VALUES ('30', '2', '津南区', '0');
INSERT INTO `sys_district` VALUES ('31', '2', '北辰区', '0');
INSERT INTO `sys_district` VALUES ('32', '2', '武清区', '0');
INSERT INTO `sys_district` VALUES ('33', '2', '宝坻区', '0');
INSERT INTO `sys_district` VALUES ('34', '2', '宁河县', '0');
INSERT INTO `sys_district` VALUES ('35', '2', '静海县', '0');
INSERT INTO `sys_district` VALUES ('36', '2', '蓟县', '0');
INSERT INTO `sys_district` VALUES ('37', '3', '长安区', '0');
INSERT INTO `sys_district` VALUES ('38', '3', '桥东区', '0');
INSERT INTO `sys_district` VALUES ('39', '3', '桥西区', '0');
INSERT INTO `sys_district` VALUES ('40', '3', '新华区', '0');
INSERT INTO `sys_district` VALUES ('41', '3', '井陉矿区', '0');
INSERT INTO `sys_district` VALUES ('42', '3', '裕华区', '0');
INSERT INTO `sys_district` VALUES ('43', '3', '井陉县', '0');
INSERT INTO `sys_district` VALUES ('44', '3', '正定县', '0');
INSERT INTO `sys_district` VALUES ('45', '3', '栾城县', '0');
INSERT INTO `sys_district` VALUES ('46', '3', '行唐县', '0');
INSERT INTO `sys_district` VALUES ('47', '3', '灵寿县', '0');
INSERT INTO `sys_district` VALUES ('48', '3', '高邑县', '0');
INSERT INTO `sys_district` VALUES ('49', '3', '深泽县', '0');
INSERT INTO `sys_district` VALUES ('50', '3', '赞皇县', '0');
INSERT INTO `sys_district` VALUES ('51', '3', '无极县', '0');
INSERT INTO `sys_district` VALUES ('52', '3', '平山县', '0');
INSERT INTO `sys_district` VALUES ('53', '3', '元氏县', '0');
INSERT INTO `sys_district` VALUES ('54', '3', '赵县', '0');
INSERT INTO `sys_district` VALUES ('55', '3', '辛集市', '0');
INSERT INTO `sys_district` VALUES ('56', '3', '藁城市', '0');
INSERT INTO `sys_district` VALUES ('57', '3', '晋州市', '0');
INSERT INTO `sys_district` VALUES ('58', '3', '新乐市', '0');
INSERT INTO `sys_district` VALUES ('59', '3', '鹿泉市', '0');
INSERT INTO `sys_district` VALUES ('60', '4', '路南区', '0');
INSERT INTO `sys_district` VALUES ('61', '4', '路北区', '0');
INSERT INTO `sys_district` VALUES ('62', '4', '古冶区', '0');
INSERT INTO `sys_district` VALUES ('63', '4', '开平区', '0');
INSERT INTO `sys_district` VALUES ('64', '4', '丰南区', '0');
INSERT INTO `sys_district` VALUES ('65', '4', '丰润区', '0');
INSERT INTO `sys_district` VALUES ('66', '4', '滦县', '0');
INSERT INTO `sys_district` VALUES ('67', '4', '滦南县', '0');
INSERT INTO `sys_district` VALUES ('68', '4', '乐亭县', '0');
INSERT INTO `sys_district` VALUES ('69', '4', '迁西县', '0');
INSERT INTO `sys_district` VALUES ('70', '4', '玉田县', '0');
INSERT INTO `sys_district` VALUES ('71', '4', '唐海县', '0');
INSERT INTO `sys_district` VALUES ('72', '4', '遵化市', '0');
INSERT INTO `sys_district` VALUES ('73', '4', '迁安市', '0');
INSERT INTO `sys_district` VALUES ('74', '5', '海港区', '0');
INSERT INTO `sys_district` VALUES ('75', '5', '山海关区', '0');
INSERT INTO `sys_district` VALUES ('76', '5', '北戴河区', '0');
INSERT INTO `sys_district` VALUES ('77', '5', '青龙满族自治县', '0');
INSERT INTO `sys_district` VALUES ('78', '5', '昌黎县', '0');
INSERT INTO `sys_district` VALUES ('79', '5', '抚宁县', '0');
INSERT INTO `sys_district` VALUES ('80', '5', '卢龙县', '0');
INSERT INTO `sys_district` VALUES ('81', '6', '邯山区', '0');
INSERT INTO `sys_district` VALUES ('82', '6', '丛台区', '0');
INSERT INTO `sys_district` VALUES ('83', '6', '复兴区', '0');
INSERT INTO `sys_district` VALUES ('84', '6', '峰峰矿区', '0');
INSERT INTO `sys_district` VALUES ('85', '6', '邯郸县', '0');
INSERT INTO `sys_district` VALUES ('86', '6', '临漳县', '0');
INSERT INTO `sys_district` VALUES ('87', '6', '成安县', '0');
INSERT INTO `sys_district` VALUES ('88', '6', '大名县', '0');
INSERT INTO `sys_district` VALUES ('89', '6', '涉县', '0');
INSERT INTO `sys_district` VALUES ('90', '6', '磁县', '0');
INSERT INTO `sys_district` VALUES ('91', '6', '肥乡县', '0');
INSERT INTO `sys_district` VALUES ('92', '6', '永年县', '0');
INSERT INTO `sys_district` VALUES ('93', '6', '邱县', '0');
INSERT INTO `sys_district` VALUES ('94', '6', '鸡泽县', '0');
INSERT INTO `sys_district` VALUES ('95', '6', '广平县', '0');
INSERT INTO `sys_district` VALUES ('96', '6', '馆陶县', '0');
INSERT INTO `sys_district` VALUES ('97', '6', '魏县', '0');
INSERT INTO `sys_district` VALUES ('98', '6', '曲周县', '0');
INSERT INTO `sys_district` VALUES ('99', '6', '武安市', '0');
INSERT INTO `sys_district` VALUES ('100', '7', '桥东区', '0');
INSERT INTO `sys_district` VALUES ('101', '7', '桥西区', '0');
INSERT INTO `sys_district` VALUES ('102', '7', '邢台县', '0');
INSERT INTO `sys_district` VALUES ('103', '7', '临城县', '0');
INSERT INTO `sys_district` VALUES ('104', '7', '内丘县', '0');
INSERT INTO `sys_district` VALUES ('105', '7', '柏乡县', '0');
INSERT INTO `sys_district` VALUES ('106', '7', '隆尧县', '0');
INSERT INTO `sys_district` VALUES ('107', '7', '任县', '0');
INSERT INTO `sys_district` VALUES ('108', '7', '南和县', '0');
INSERT INTO `sys_district` VALUES ('109', '7', '宁晋县', '0');
INSERT INTO `sys_district` VALUES ('110', '7', '巨鹿县', '0');
INSERT INTO `sys_district` VALUES ('111', '7', '新河县', '0');
INSERT INTO `sys_district` VALUES ('112', '7', '广宗县', '0');
INSERT INTO `sys_district` VALUES ('113', '7', '平乡县', '0');
INSERT INTO `sys_district` VALUES ('114', '7', '威县', '0');
INSERT INTO `sys_district` VALUES ('115', '7', '清河县', '0');
INSERT INTO `sys_district` VALUES ('116', '7', '临西县', '0');
INSERT INTO `sys_district` VALUES ('117', '7', '南宫市', '0');
INSERT INTO `sys_district` VALUES ('118', '7', '沙河市', '0');
INSERT INTO `sys_district` VALUES ('119', '8', '新市区', '0');
INSERT INTO `sys_district` VALUES ('120', '8', '北市区', '0');
INSERT INTO `sys_district` VALUES ('121', '8', '南市区', '0');
INSERT INTO `sys_district` VALUES ('122', '8', '满城县', '0');
INSERT INTO `sys_district` VALUES ('123', '8', '清苑县', '0');
INSERT INTO `sys_district` VALUES ('124', '8', '涞水县', '0');
INSERT INTO `sys_district` VALUES ('125', '8', '阜平县', '0');
INSERT INTO `sys_district` VALUES ('126', '8', '徐水县', '0');
INSERT INTO `sys_district` VALUES ('127', '8', '定兴县', '0');
INSERT INTO `sys_district` VALUES ('128', '8', '唐县', '0');
INSERT INTO `sys_district` VALUES ('129', '8', '高阳县', '0');
INSERT INTO `sys_district` VALUES ('130', '8', '容城县', '0');
INSERT INTO `sys_district` VALUES ('131', '8', '涞源县', '0');
INSERT INTO `sys_district` VALUES ('132', '8', '望都县', '0');
INSERT INTO `sys_district` VALUES ('133', '8', '安新县', '0');
INSERT INTO `sys_district` VALUES ('134', '8', '易县', '0');
INSERT INTO `sys_district` VALUES ('135', '8', '曲阳县', '0');
INSERT INTO `sys_district` VALUES ('136', '8', '蠡县', '0');
INSERT INTO `sys_district` VALUES ('137', '8', '顺平县', '0');
INSERT INTO `sys_district` VALUES ('138', '8', '博野县', '0');
INSERT INTO `sys_district` VALUES ('139', '8', '雄县', '0');
INSERT INTO `sys_district` VALUES ('140', '8', '涿州市', '0');
INSERT INTO `sys_district` VALUES ('141', '8', '定州市', '0');
INSERT INTO `sys_district` VALUES ('142', '8', '安国市', '0');
INSERT INTO `sys_district` VALUES ('143', '8', '高碑店市', '0');
INSERT INTO `sys_district` VALUES ('144', '9', '桥东区', '0');
INSERT INTO `sys_district` VALUES ('145', '9', '桥西区', '0');
INSERT INTO `sys_district` VALUES ('146', '9', '宣化区', '0');
INSERT INTO `sys_district` VALUES ('147', '9', '下花园区', '0');
INSERT INTO `sys_district` VALUES ('148', '9', '宣化县', '0');
INSERT INTO `sys_district` VALUES ('149', '9', '张北县', '0');
INSERT INTO `sys_district` VALUES ('150', '9', '康保县', '0');
INSERT INTO `sys_district` VALUES ('151', '9', '沽源县', '0');
INSERT INTO `sys_district` VALUES ('152', '9', '尚义县', '0');
INSERT INTO `sys_district` VALUES ('153', '9', '蔚县', '0');
INSERT INTO `sys_district` VALUES ('154', '9', '阳原县', '0');
INSERT INTO `sys_district` VALUES ('155', '9', '怀安县', '0');
INSERT INTO `sys_district` VALUES ('156', '9', '万全县', '0');
INSERT INTO `sys_district` VALUES ('157', '9', '怀来县', '0');
INSERT INTO `sys_district` VALUES ('158', '9', '涿鹿县', '0');
INSERT INTO `sys_district` VALUES ('159', '9', '赤城县', '0');
INSERT INTO `sys_district` VALUES ('160', '9', '崇礼县', '0');
INSERT INTO `sys_district` VALUES ('161', '10', '双桥区', '0');
INSERT INTO `sys_district` VALUES ('162', '10', '双滦区', '0');
INSERT INTO `sys_district` VALUES ('163', '10', '鹰手营子矿区', '0');
INSERT INTO `sys_district` VALUES ('164', '10', '承德县', '0');
INSERT INTO `sys_district` VALUES ('165', '10', '兴隆县', '0');
INSERT INTO `sys_district` VALUES ('166', '10', '平泉县', '0');
INSERT INTO `sys_district` VALUES ('167', '10', '滦平县', '0');
INSERT INTO `sys_district` VALUES ('168', '10', '隆化县', '0');
INSERT INTO `sys_district` VALUES ('169', '10', '丰宁满族自治县', '0');
INSERT INTO `sys_district` VALUES ('170', '10', '宽城满族自治县', '0');
INSERT INTO `sys_district` VALUES ('171', '10', '围场满族蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('172', '11', '新华区', '0');
INSERT INTO `sys_district` VALUES ('173', '11', '运河区', '0');
INSERT INTO `sys_district` VALUES ('174', '11', '沧县', '0');
INSERT INTO `sys_district` VALUES ('175', '11', '青县', '0');
INSERT INTO `sys_district` VALUES ('176', '11', '东光县', '0');
INSERT INTO `sys_district` VALUES ('177', '11', '海兴县', '0');
INSERT INTO `sys_district` VALUES ('178', '11', '盐山县', '0');
INSERT INTO `sys_district` VALUES ('179', '11', '肃宁县', '0');
INSERT INTO `sys_district` VALUES ('180', '11', '南皮县', '0');
INSERT INTO `sys_district` VALUES ('181', '11', '吴桥县', '0');
INSERT INTO `sys_district` VALUES ('182', '11', '献县', '0');
INSERT INTO `sys_district` VALUES ('183', '11', '孟村回族自治县', '0');
INSERT INTO `sys_district` VALUES ('184', '11', '泊头市', '0');
INSERT INTO `sys_district` VALUES ('185', '11', '任丘市', '0');
INSERT INTO `sys_district` VALUES ('186', '11', '黄骅市', '0');
INSERT INTO `sys_district` VALUES ('187', '11', '河间市', '0');
INSERT INTO `sys_district` VALUES ('188', '12', '安次区', '0');
INSERT INTO `sys_district` VALUES ('189', '12', '广阳区', '0');
INSERT INTO `sys_district` VALUES ('190', '12', '固安县', '0');
INSERT INTO `sys_district` VALUES ('191', '12', '永清县', '0');
INSERT INTO `sys_district` VALUES ('192', '12', '香河县', '0');
INSERT INTO `sys_district` VALUES ('193', '12', '大城县', '0');
INSERT INTO `sys_district` VALUES ('194', '12', '文安县', '0');
INSERT INTO `sys_district` VALUES ('195', '12', '大厂回族自治县', '0');
INSERT INTO `sys_district` VALUES ('196', '12', '霸州市', '0');
INSERT INTO `sys_district` VALUES ('197', '12', '三河市', '0');
INSERT INTO `sys_district` VALUES ('198', '13', '桃城区', '0');
INSERT INTO `sys_district` VALUES ('199', '13', '枣强县', '0');
INSERT INTO `sys_district` VALUES ('200', '13', '武邑县', '0');
INSERT INTO `sys_district` VALUES ('201', '13', '武强县', '0');
INSERT INTO `sys_district` VALUES ('202', '13', '饶阳县', '0');
INSERT INTO `sys_district` VALUES ('203', '13', '安平县', '0');
INSERT INTO `sys_district` VALUES ('204', '13', '故城县', '0');
INSERT INTO `sys_district` VALUES ('205', '13', '景县', '0');
INSERT INTO `sys_district` VALUES ('206', '13', '阜城县', '0');
INSERT INTO `sys_district` VALUES ('207', '13', '冀州市', '0');
INSERT INTO `sys_district` VALUES ('208', '13', '深州市', '0');
INSERT INTO `sys_district` VALUES ('209', '14', '小店区', '0');
INSERT INTO `sys_district` VALUES ('210', '14', '迎泽区', '0');
INSERT INTO `sys_district` VALUES ('211', '14', '杏花岭区', '0');
INSERT INTO `sys_district` VALUES ('212', '14', '尖草坪区', '0');
INSERT INTO `sys_district` VALUES ('213', '14', '万柏林区', '0');
INSERT INTO `sys_district` VALUES ('214', '14', '晋源区', '0');
INSERT INTO `sys_district` VALUES ('215', '14', '清徐县', '0');
INSERT INTO `sys_district` VALUES ('216', '14', '阳曲县', '0');
INSERT INTO `sys_district` VALUES ('217', '14', '娄烦县', '0');
INSERT INTO `sys_district` VALUES ('218', '14', '古交市', '0');
INSERT INTO `sys_district` VALUES ('219', '15', '城区', '0');
INSERT INTO `sys_district` VALUES ('220', '15', '矿区', '0');
INSERT INTO `sys_district` VALUES ('221', '15', '南郊区', '0');
INSERT INTO `sys_district` VALUES ('222', '15', '新荣区', '0');
INSERT INTO `sys_district` VALUES ('223', '15', '阳高县', '0');
INSERT INTO `sys_district` VALUES ('224', '15', '天镇县', '0');
INSERT INTO `sys_district` VALUES ('225', '15', '广灵县', '0');
INSERT INTO `sys_district` VALUES ('226', '15', '灵丘县', '0');
INSERT INTO `sys_district` VALUES ('227', '15', '浑源县', '0');
INSERT INTO `sys_district` VALUES ('228', '15', '左云县', '0');
INSERT INTO `sys_district` VALUES ('229', '15', '大同县', '0');
INSERT INTO `sys_district` VALUES ('230', '16', '城区', '0');
INSERT INTO `sys_district` VALUES ('231', '16', '矿区', '0');
INSERT INTO `sys_district` VALUES ('232', '16', '郊区', '0');
INSERT INTO `sys_district` VALUES ('233', '16', '平定县', '0');
INSERT INTO `sys_district` VALUES ('234', '16', '盂县', '0');
INSERT INTO `sys_district` VALUES ('235', '17', '城区', '0');
INSERT INTO `sys_district` VALUES ('236', '17', '郊区', '0');
INSERT INTO `sys_district` VALUES ('237', '17', '长治县', '0');
INSERT INTO `sys_district` VALUES ('238', '17', '襄垣县', '0');
INSERT INTO `sys_district` VALUES ('239', '17', '屯留县', '0');
INSERT INTO `sys_district` VALUES ('240', '17', '平顺县', '0');
INSERT INTO `sys_district` VALUES ('241', '17', '黎城县', '0');
INSERT INTO `sys_district` VALUES ('242', '17', '壶关县', '0');
INSERT INTO `sys_district` VALUES ('243', '17', '长子县', '0');
INSERT INTO `sys_district` VALUES ('244', '17', '武乡县', '0');
INSERT INTO `sys_district` VALUES ('245', '17', '沁县', '0');
INSERT INTO `sys_district` VALUES ('246', '17', '沁源县', '0');
INSERT INTO `sys_district` VALUES ('247', '17', '潞城市', '0');
INSERT INTO `sys_district` VALUES ('248', '18', '城区', '0');
INSERT INTO `sys_district` VALUES ('249', '18', '沁水县', '0');
INSERT INTO `sys_district` VALUES ('250', '18', '阳城县', '0');
INSERT INTO `sys_district` VALUES ('251', '18', '陵川县', '0');
INSERT INTO `sys_district` VALUES ('252', '18', '泽州县', '0');
INSERT INTO `sys_district` VALUES ('253', '18', '高平市', '0');
INSERT INTO `sys_district` VALUES ('254', '19', '朔城区', '0');
INSERT INTO `sys_district` VALUES ('255', '19', '平鲁区', '0');
INSERT INTO `sys_district` VALUES ('256', '19', '山阴县', '0');
INSERT INTO `sys_district` VALUES ('257', '19', '应县', '0');
INSERT INTO `sys_district` VALUES ('258', '19', '右玉县', '0');
INSERT INTO `sys_district` VALUES ('259', '19', '怀仁县', '0');
INSERT INTO `sys_district` VALUES ('260', '20', '榆次区', '0');
INSERT INTO `sys_district` VALUES ('261', '20', '榆社县', '0');
INSERT INTO `sys_district` VALUES ('262', '20', '左权县', '0');
INSERT INTO `sys_district` VALUES ('263', '20', '和顺县', '0');
INSERT INTO `sys_district` VALUES ('264', '20', '昔阳县', '0');
INSERT INTO `sys_district` VALUES ('265', '20', '寿阳县', '0');
INSERT INTO `sys_district` VALUES ('266', '20', '太谷县', '0');
INSERT INTO `sys_district` VALUES ('267', '20', '祁县', '0');
INSERT INTO `sys_district` VALUES ('268', '20', '平遥县', '0');
INSERT INTO `sys_district` VALUES ('269', '20', '灵石县', '0');
INSERT INTO `sys_district` VALUES ('270', '20', '介休市', '0');
INSERT INTO `sys_district` VALUES ('271', '21', '盐湖区', '0');
INSERT INTO `sys_district` VALUES ('272', '21', '临猗县', '0');
INSERT INTO `sys_district` VALUES ('273', '21', '万荣县', '0');
INSERT INTO `sys_district` VALUES ('274', '21', '闻喜县', '0');
INSERT INTO `sys_district` VALUES ('275', '21', '稷山县', '0');
INSERT INTO `sys_district` VALUES ('276', '21', '新绛县', '0');
INSERT INTO `sys_district` VALUES ('277', '21', '绛县', '0');
INSERT INTO `sys_district` VALUES ('278', '21', '垣曲县', '0');
INSERT INTO `sys_district` VALUES ('279', '21', '夏县', '0');
INSERT INTO `sys_district` VALUES ('280', '21', '平陆县', '0');
INSERT INTO `sys_district` VALUES ('281', '21', '芮城县', '0');
INSERT INTO `sys_district` VALUES ('282', '21', '永济市', '0');
INSERT INTO `sys_district` VALUES ('283', '21', '河津市', '0');
INSERT INTO `sys_district` VALUES ('284', '22', '忻府区', '0');
INSERT INTO `sys_district` VALUES ('285', '22', '定襄县', '0');
INSERT INTO `sys_district` VALUES ('286', '22', '五台县', '0');
INSERT INTO `sys_district` VALUES ('287', '22', '代县', '0');
INSERT INTO `sys_district` VALUES ('288', '22', '繁峙县', '0');
INSERT INTO `sys_district` VALUES ('289', '22', '宁武县', '0');
INSERT INTO `sys_district` VALUES ('290', '22', '静乐县', '0');
INSERT INTO `sys_district` VALUES ('291', '22', '神池县', '0');
INSERT INTO `sys_district` VALUES ('292', '22', '五寨县', '0');
INSERT INTO `sys_district` VALUES ('293', '22', '岢岚县', '0');
INSERT INTO `sys_district` VALUES ('294', '22', '河曲县', '0');
INSERT INTO `sys_district` VALUES ('295', '22', '保德县', '0');
INSERT INTO `sys_district` VALUES ('296', '22', '偏关县', '0');
INSERT INTO `sys_district` VALUES ('297', '22', '原平市', '0');
INSERT INTO `sys_district` VALUES ('298', '23', '尧都区', '0');
INSERT INTO `sys_district` VALUES ('299', '23', '曲沃县', '0');
INSERT INTO `sys_district` VALUES ('300', '23', '翼城县', '0');
INSERT INTO `sys_district` VALUES ('301', '23', '襄汾县', '0');
INSERT INTO `sys_district` VALUES ('302', '23', '洪洞县', '0');
INSERT INTO `sys_district` VALUES ('303', '23', '古县', '0');
INSERT INTO `sys_district` VALUES ('304', '23', '安泽县', '0');
INSERT INTO `sys_district` VALUES ('305', '23', '浮山县', '0');
INSERT INTO `sys_district` VALUES ('306', '23', '吉县', '0');
INSERT INTO `sys_district` VALUES ('307', '23', '乡宁县', '0');
INSERT INTO `sys_district` VALUES ('308', '23', '大宁县', '0');
INSERT INTO `sys_district` VALUES ('309', '23', '隰县', '0');
INSERT INTO `sys_district` VALUES ('310', '23', '永和县', '0');
INSERT INTO `sys_district` VALUES ('311', '23', '蒲县', '0');
INSERT INTO `sys_district` VALUES ('312', '23', '汾西县', '0');
INSERT INTO `sys_district` VALUES ('313', '23', '侯马市', '0');
INSERT INTO `sys_district` VALUES ('314', '23', '霍州市', '0');
INSERT INTO `sys_district` VALUES ('315', '24', '离石区', '0');
INSERT INTO `sys_district` VALUES ('316', '24', '文水县', '0');
INSERT INTO `sys_district` VALUES ('317', '24', '交城县', '0');
INSERT INTO `sys_district` VALUES ('318', '24', '兴县', '0');
INSERT INTO `sys_district` VALUES ('319', '24', '临县', '0');
INSERT INTO `sys_district` VALUES ('320', '24', '柳林县', '0');
INSERT INTO `sys_district` VALUES ('321', '24', '石楼县', '0');
INSERT INTO `sys_district` VALUES ('322', '24', '岚县', '0');
INSERT INTO `sys_district` VALUES ('323', '24', '方山县', '0');
INSERT INTO `sys_district` VALUES ('324', '24', '中阳县', '0');
INSERT INTO `sys_district` VALUES ('325', '24', '交口县', '0');
INSERT INTO `sys_district` VALUES ('326', '24', '孝义市', '0');
INSERT INTO `sys_district` VALUES ('327', '24', '汾阳市', '0');
INSERT INTO `sys_district` VALUES ('328', '25', '新城区', '0');
INSERT INTO `sys_district` VALUES ('329', '25', '回民区', '0');
INSERT INTO `sys_district` VALUES ('330', '25', '玉泉区', '0');
INSERT INTO `sys_district` VALUES ('331', '25', '赛罕区', '0');
INSERT INTO `sys_district` VALUES ('332', '25', '土默特左旗', '0');
INSERT INTO `sys_district` VALUES ('333', '25', '托克托县', '0');
INSERT INTO `sys_district` VALUES ('334', '25', '和林格尔县', '0');
INSERT INTO `sys_district` VALUES ('335', '25', '清水河县', '0');
INSERT INTO `sys_district` VALUES ('336', '25', '武川县', '0');
INSERT INTO `sys_district` VALUES ('337', '26', '东河区', '0');
INSERT INTO `sys_district` VALUES ('338', '26', '昆都仑区', '0');
INSERT INTO `sys_district` VALUES ('339', '26', '青山区', '0');
INSERT INTO `sys_district` VALUES ('340', '26', '石拐区', '0');
INSERT INTO `sys_district` VALUES ('341', '26', '白云矿区', '0');
INSERT INTO `sys_district` VALUES ('342', '26', '九原区', '0');
INSERT INTO `sys_district` VALUES ('343', '26', '土默特右旗', '0');
INSERT INTO `sys_district` VALUES ('344', '26', '固阳县', '0');
INSERT INTO `sys_district` VALUES ('345', '26', '达尔罕茂明安联合旗', '0');
INSERT INTO `sys_district` VALUES ('346', '27', '海勃湾区', '0');
INSERT INTO `sys_district` VALUES ('347', '27', '海南区', '0');
INSERT INTO `sys_district` VALUES ('348', '27', '乌达区', '0');
INSERT INTO `sys_district` VALUES ('349', '28', '红山区', '0');
INSERT INTO `sys_district` VALUES ('350', '28', '元宝山区', '0');
INSERT INTO `sys_district` VALUES ('351', '28', '松山区', '0');
INSERT INTO `sys_district` VALUES ('352', '28', '阿鲁科尔沁旗', '0');
INSERT INTO `sys_district` VALUES ('353', '28', '巴林左旗', '0');
INSERT INTO `sys_district` VALUES ('354', '28', '巴林右旗', '0');
INSERT INTO `sys_district` VALUES ('355', '28', '林西县', '0');
INSERT INTO `sys_district` VALUES ('356', '28', '克什克腾旗', '0');
INSERT INTO `sys_district` VALUES ('357', '28', '翁牛特旗', '0');
INSERT INTO `sys_district` VALUES ('358', '28', '喀喇沁旗', '0');
INSERT INTO `sys_district` VALUES ('359', '28', '宁城县', '0');
INSERT INTO `sys_district` VALUES ('360', '28', '敖汉旗', '0');
INSERT INTO `sys_district` VALUES ('361', '29', '科尔沁区', '0');
INSERT INTO `sys_district` VALUES ('362', '29', '科尔沁左翼中旗', '0');
INSERT INTO `sys_district` VALUES ('363', '29', '科尔沁左翼后旗', '0');
INSERT INTO `sys_district` VALUES ('364', '29', '开鲁县', '0');
INSERT INTO `sys_district` VALUES ('365', '29', '库伦旗', '0');
INSERT INTO `sys_district` VALUES ('366', '29', '奈曼旗', '0');
INSERT INTO `sys_district` VALUES ('367', '29', '扎鲁特旗', '0');
INSERT INTO `sys_district` VALUES ('368', '29', '霍林郭勒市', '0');
INSERT INTO `sys_district` VALUES ('369', '30', '东胜区', '0');
INSERT INTO `sys_district` VALUES ('370', '30', '达拉特旗', '0');
INSERT INTO `sys_district` VALUES ('371', '30', '准格尔旗', '0');
INSERT INTO `sys_district` VALUES ('372', '30', '鄂托克前旗', '0');
INSERT INTO `sys_district` VALUES ('373', '30', '鄂托克旗', '0');
INSERT INTO `sys_district` VALUES ('374', '30', '杭锦旗', '0');
INSERT INTO `sys_district` VALUES ('375', '30', '乌审旗', '0');
INSERT INTO `sys_district` VALUES ('376', '30', '伊金霍洛旗', '0');
INSERT INTO `sys_district` VALUES ('377', '31', '海拉尔区', '0');
INSERT INTO `sys_district` VALUES ('378', '31', '阿荣旗', '0');
INSERT INTO `sys_district` VALUES ('379', '31', '莫力达瓦达斡尔族自治旗', '0');
INSERT INTO `sys_district` VALUES ('380', '31', '鄂伦春自治旗', '0');
INSERT INTO `sys_district` VALUES ('381', '31', '鄂温克族自治旗', '0');
INSERT INTO `sys_district` VALUES ('382', '31', '陈巴尔虎旗', '0');
INSERT INTO `sys_district` VALUES ('383', '31', '新巴尔虎左旗', '0');
INSERT INTO `sys_district` VALUES ('384', '31', '新巴尔虎右旗', '0');
INSERT INTO `sys_district` VALUES ('385', '31', '满洲里市', '0');
INSERT INTO `sys_district` VALUES ('386', '31', '牙克石市', '0');
INSERT INTO `sys_district` VALUES ('387', '31', '扎兰屯市', '0');
INSERT INTO `sys_district` VALUES ('388', '31', '额尔古纳市', '0');
INSERT INTO `sys_district` VALUES ('389', '31', '根河市', '0');
INSERT INTO `sys_district` VALUES ('390', '32', '临河区', '0');
INSERT INTO `sys_district` VALUES ('391', '32', '五原县', '0');
INSERT INTO `sys_district` VALUES ('392', '32', '磴口县', '0');
INSERT INTO `sys_district` VALUES ('393', '32', '乌拉特前旗', '0');
INSERT INTO `sys_district` VALUES ('394', '32', '乌拉特中旗', '0');
INSERT INTO `sys_district` VALUES ('395', '32', '乌拉特后旗', '0');
INSERT INTO `sys_district` VALUES ('396', '32', '杭锦后旗', '0');
INSERT INTO `sys_district` VALUES ('397', '33', '集宁区', '0');
INSERT INTO `sys_district` VALUES ('398', '33', '卓资县', '0');
INSERT INTO `sys_district` VALUES ('399', '33', '化德县', '0');
INSERT INTO `sys_district` VALUES ('400', '33', '商都县', '0');
INSERT INTO `sys_district` VALUES ('401', '33', '兴和县', '0');
INSERT INTO `sys_district` VALUES ('402', '33', '凉城县', '0');
INSERT INTO `sys_district` VALUES ('403', '33', '察哈尔右翼前旗', '0');
INSERT INTO `sys_district` VALUES ('404', '33', '察哈尔右翼中旗', '0');
INSERT INTO `sys_district` VALUES ('405', '33', '察哈尔右翼后旗', '0');
INSERT INTO `sys_district` VALUES ('406', '33', '四子王旗', '0');
INSERT INTO `sys_district` VALUES ('407', '33', '丰镇市', '0');
INSERT INTO `sys_district` VALUES ('408', '34', '乌兰浩特市', '0');
INSERT INTO `sys_district` VALUES ('409', '34', '阿尔山市', '0');
INSERT INTO `sys_district` VALUES ('410', '34', '科尔沁右翼前旗', '0');
INSERT INTO `sys_district` VALUES ('411', '34', '科尔沁右翼中旗', '0');
INSERT INTO `sys_district` VALUES ('412', '34', '扎赉特旗', '0');
INSERT INTO `sys_district` VALUES ('413', '34', '突泉县', '0');
INSERT INTO `sys_district` VALUES ('414', '35', '二连浩特市', '0');
INSERT INTO `sys_district` VALUES ('415', '35', '锡林浩特市', '0');
INSERT INTO `sys_district` VALUES ('416', '35', '阿巴嘎旗', '0');
INSERT INTO `sys_district` VALUES ('417', '35', '苏尼特左旗', '0');
INSERT INTO `sys_district` VALUES ('418', '35', '苏尼特右旗', '0');
INSERT INTO `sys_district` VALUES ('419', '35', '东乌珠穆沁旗', '0');
INSERT INTO `sys_district` VALUES ('420', '35', '西乌珠穆沁旗', '0');
INSERT INTO `sys_district` VALUES ('421', '35', '太仆寺旗', '0');
INSERT INTO `sys_district` VALUES ('422', '35', '镶黄旗', '0');
INSERT INTO `sys_district` VALUES ('423', '35', '正镶白旗', '0');
INSERT INTO `sys_district` VALUES ('424', '35', '正蓝旗', '0');
INSERT INTO `sys_district` VALUES ('425', '35', '多伦县', '0');
INSERT INTO `sys_district` VALUES ('426', '36', '阿拉善左旗', '0');
INSERT INTO `sys_district` VALUES ('427', '36', '阿拉善右旗', '0');
INSERT INTO `sys_district` VALUES ('428', '36', '额济纳旗', '0');
INSERT INTO `sys_district` VALUES ('429', '37', '和平区', '0');
INSERT INTO `sys_district` VALUES ('430', '37', '沈河区', '0');
INSERT INTO `sys_district` VALUES ('431', '37', '大东区', '0');
INSERT INTO `sys_district` VALUES ('432', '37', '皇姑区', '0');
INSERT INTO `sys_district` VALUES ('433', '37', '铁西区', '0');
INSERT INTO `sys_district` VALUES ('434', '37', '苏家屯区', '0');
INSERT INTO `sys_district` VALUES ('435', '37', '东陵区', '0');
INSERT INTO `sys_district` VALUES ('436', '37', '新城子区', '0');
INSERT INTO `sys_district` VALUES ('437', '37', '于洪区', '0');
INSERT INTO `sys_district` VALUES ('438', '37', '辽中县', '0');
INSERT INTO `sys_district` VALUES ('439', '37', '康平县', '0');
INSERT INTO `sys_district` VALUES ('440', '37', '法库县', '0');
INSERT INTO `sys_district` VALUES ('441', '37', '新民市', '0');
INSERT INTO `sys_district` VALUES ('442', '38', '中山区', '0');
INSERT INTO `sys_district` VALUES ('443', '38', '西岗区', '0');
INSERT INTO `sys_district` VALUES ('444', '38', '沙河口区', '0');
INSERT INTO `sys_district` VALUES ('445', '38', '甘井子区', '0');
INSERT INTO `sys_district` VALUES ('446', '38', '旅顺口区', '0');
INSERT INTO `sys_district` VALUES ('447', '38', '金州区', '0');
INSERT INTO `sys_district` VALUES ('448', '38', '长海县', '0');
INSERT INTO `sys_district` VALUES ('449', '38', '瓦房店市', '0');
INSERT INTO `sys_district` VALUES ('450', '38', '普兰店市', '0');
INSERT INTO `sys_district` VALUES ('451', '38', '庄河市', '0');
INSERT INTO `sys_district` VALUES ('452', '39', '铁东区', '0');
INSERT INTO `sys_district` VALUES ('453', '39', '铁西区', '0');
INSERT INTO `sys_district` VALUES ('454', '39', '立山区', '0');
INSERT INTO `sys_district` VALUES ('455', '39', '千山区', '0');
INSERT INTO `sys_district` VALUES ('456', '39', '台安县', '0');
INSERT INTO `sys_district` VALUES ('457', '39', '岫岩满族自治县', '0');
INSERT INTO `sys_district` VALUES ('458', '39', '海城市', '0');
INSERT INTO `sys_district` VALUES ('459', '40', '新抚区', '0');
INSERT INTO `sys_district` VALUES ('460', '40', '东洲区', '0');
INSERT INTO `sys_district` VALUES ('461', '40', '望花区', '0');
INSERT INTO `sys_district` VALUES ('462', '40', '顺城区', '0');
INSERT INTO `sys_district` VALUES ('463', '40', '抚顺县', '0');
INSERT INTO `sys_district` VALUES ('464', '40', '新宾满族自治县', '0');
INSERT INTO `sys_district` VALUES ('465', '40', '清原满族自治县', '0');
INSERT INTO `sys_district` VALUES ('466', '41', '平山区', '0');
INSERT INTO `sys_district` VALUES ('467', '41', '溪湖区', '0');
INSERT INTO `sys_district` VALUES ('468', '41', '明山区', '0');
INSERT INTO `sys_district` VALUES ('469', '41', '南芬区', '0');
INSERT INTO `sys_district` VALUES ('470', '41', '本溪满族自治县', '0');
INSERT INTO `sys_district` VALUES ('471', '41', '桓仁满族自治县', '0');
INSERT INTO `sys_district` VALUES ('472', '42', '元宝区', '0');
INSERT INTO `sys_district` VALUES ('473', '42', '振兴区', '0');
INSERT INTO `sys_district` VALUES ('474', '42', '振安区', '0');
INSERT INTO `sys_district` VALUES ('475', '42', '宽甸满族自治县', '0');
INSERT INTO `sys_district` VALUES ('476', '42', '东港市', '0');
INSERT INTO `sys_district` VALUES ('477', '42', '凤城市', '0');
INSERT INTO `sys_district` VALUES ('478', '43', '古塔区', '0');
INSERT INTO `sys_district` VALUES ('479', '43', '凌河区', '0');
INSERT INTO `sys_district` VALUES ('480', '43', '太和区', '0');
INSERT INTO `sys_district` VALUES ('481', '43', '黑山县', '0');
INSERT INTO `sys_district` VALUES ('482', '43', '义县', '0');
INSERT INTO `sys_district` VALUES ('483', '43', '凌海市', '0');
INSERT INTO `sys_district` VALUES ('484', '43', '北宁市', '0');
INSERT INTO `sys_district` VALUES ('485', '44', '站前区', '0');
INSERT INTO `sys_district` VALUES ('486', '44', '西市区', '0');
INSERT INTO `sys_district` VALUES ('487', '44', '鲅鱼圈区', '0');
INSERT INTO `sys_district` VALUES ('488', '44', '老边区', '0');
INSERT INTO `sys_district` VALUES ('489', '44', '盖州市', '0');
INSERT INTO `sys_district` VALUES ('490', '44', '大石桥市', '0');
INSERT INTO `sys_district` VALUES ('491', '45', '海州区', '0');
INSERT INTO `sys_district` VALUES ('492', '45', '新邱区', '0');
INSERT INTO `sys_district` VALUES ('493', '45', '太平区', '0');
INSERT INTO `sys_district` VALUES ('494', '45', '清河门区', '0');
INSERT INTO `sys_district` VALUES ('495', '45', '细河区', '0');
INSERT INTO `sys_district` VALUES ('496', '45', '阜新蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('497', '45', '彰武县', '0');
INSERT INTO `sys_district` VALUES ('498', '46', '白塔区', '0');
INSERT INTO `sys_district` VALUES ('499', '46', '文圣区', '0');
INSERT INTO `sys_district` VALUES ('500', '46', '宏伟区', '0');
INSERT INTO `sys_district` VALUES ('501', '46', '弓长岭区', '0');
INSERT INTO `sys_district` VALUES ('502', '46', '太子河区', '0');
INSERT INTO `sys_district` VALUES ('503', '46', '辽阳县', '0');
INSERT INTO `sys_district` VALUES ('504', '46', '灯塔市', '0');
INSERT INTO `sys_district` VALUES ('505', '47', '双台子区', '0');
INSERT INTO `sys_district` VALUES ('506', '47', '兴隆台区', '0');
INSERT INTO `sys_district` VALUES ('507', '47', '大洼县', '0');
INSERT INTO `sys_district` VALUES ('508', '47', '盘山县', '0');
INSERT INTO `sys_district` VALUES ('509', '48', '银州区', '0');
INSERT INTO `sys_district` VALUES ('510', '48', '清河区', '0');
INSERT INTO `sys_district` VALUES ('511', '48', '铁岭县', '0');
INSERT INTO `sys_district` VALUES ('512', '48', '西丰县', '0');
INSERT INTO `sys_district` VALUES ('513', '48', '昌图县', '0');
INSERT INTO `sys_district` VALUES ('514', '48', '调兵山市', '0');
INSERT INTO `sys_district` VALUES ('515', '48', '开原市', '0');
INSERT INTO `sys_district` VALUES ('516', '49', '双塔区', '0');
INSERT INTO `sys_district` VALUES ('517', '49', '龙城区', '0');
INSERT INTO `sys_district` VALUES ('518', '49', '朝阳县', '0');
INSERT INTO `sys_district` VALUES ('519', '49', '建平县', '0');
INSERT INTO `sys_district` VALUES ('520', '49', '喀喇沁左翼蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('521', '49', '北票市', '0');
INSERT INTO `sys_district` VALUES ('522', '49', '凌源市', '0');
INSERT INTO `sys_district` VALUES ('523', '50', '连山区', '0');
INSERT INTO `sys_district` VALUES ('524', '50', '龙港区', '0');
INSERT INTO `sys_district` VALUES ('525', '50', '南票区', '0');
INSERT INTO `sys_district` VALUES ('526', '50', '绥中县', '0');
INSERT INTO `sys_district` VALUES ('527', '50', '建昌县', '0');
INSERT INTO `sys_district` VALUES ('528', '50', '兴城市', '0');
INSERT INTO `sys_district` VALUES ('529', '51', '南关区', '0');
INSERT INTO `sys_district` VALUES ('530', '51', '宽城区', '0');
INSERT INTO `sys_district` VALUES ('531', '51', '朝阳区', '0');
INSERT INTO `sys_district` VALUES ('532', '51', '二道区', '0');
INSERT INTO `sys_district` VALUES ('533', '51', '绿园区', '0');
INSERT INTO `sys_district` VALUES ('534', '51', '双阳区', '0');
INSERT INTO `sys_district` VALUES ('535', '51', '农安县', '0');
INSERT INTO `sys_district` VALUES ('536', '51', '九台市', '0');
INSERT INTO `sys_district` VALUES ('537', '51', '榆树市', '0');
INSERT INTO `sys_district` VALUES ('538', '51', '德惠市', '0');
INSERT INTO `sys_district` VALUES ('539', '52', '昌邑区', '0');
INSERT INTO `sys_district` VALUES ('540', '52', '龙潭区', '0');
INSERT INTO `sys_district` VALUES ('541', '52', '船营区', '0');
INSERT INTO `sys_district` VALUES ('542', '52', '丰满区', '0');
INSERT INTO `sys_district` VALUES ('543', '52', '永吉县', '0');
INSERT INTO `sys_district` VALUES ('544', '52', '蛟河市', '0');
INSERT INTO `sys_district` VALUES ('545', '52', '桦甸市', '0');
INSERT INTO `sys_district` VALUES ('546', '52', '舒兰市', '0');
INSERT INTO `sys_district` VALUES ('547', '52', '磐石市', '0');
INSERT INTO `sys_district` VALUES ('548', '53', '铁西区', '0');
INSERT INTO `sys_district` VALUES ('549', '53', '铁东区', '0');
INSERT INTO `sys_district` VALUES ('550', '53', '梨树县', '0');
INSERT INTO `sys_district` VALUES ('551', '53', '伊通满族自治县', '0');
INSERT INTO `sys_district` VALUES ('552', '53', '公主岭市', '0');
INSERT INTO `sys_district` VALUES ('553', '53', '双辽市', '0');
INSERT INTO `sys_district` VALUES ('554', '54', '龙山区', '0');
INSERT INTO `sys_district` VALUES ('555', '54', '西安区', '0');
INSERT INTO `sys_district` VALUES ('556', '54', '东丰县', '0');
INSERT INTO `sys_district` VALUES ('557', '54', '东辽县', '0');
INSERT INTO `sys_district` VALUES ('558', '55', '东昌区', '0');
INSERT INTO `sys_district` VALUES ('559', '55', '二道江区', '0');
INSERT INTO `sys_district` VALUES ('560', '55', '通化县', '0');
INSERT INTO `sys_district` VALUES ('561', '55', '辉南县', '0');
INSERT INTO `sys_district` VALUES ('562', '55', '柳河县', '0');
INSERT INTO `sys_district` VALUES ('563', '55', '梅河口市', '0');
INSERT INTO `sys_district` VALUES ('564', '55', '集安市', '0');
INSERT INTO `sys_district` VALUES ('565', '56', '八道江区', '0');
INSERT INTO `sys_district` VALUES ('566', '56', '抚松县', '0');
INSERT INTO `sys_district` VALUES ('567', '56', '靖宇县', '0');
INSERT INTO `sys_district` VALUES ('568', '56', '长白朝鲜族自治县', '0');
INSERT INTO `sys_district` VALUES ('569', '56', '江源县', '0');
INSERT INTO `sys_district` VALUES ('570', '56', '临江市', '0');
INSERT INTO `sys_district` VALUES ('571', '57', '宁江区', '0');
INSERT INTO `sys_district` VALUES ('572', '57', '前郭尔罗斯蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('573', '57', '长岭县', '0');
INSERT INTO `sys_district` VALUES ('574', '57', '乾安县', '0');
INSERT INTO `sys_district` VALUES ('575', '57', '扶余县', '0');
INSERT INTO `sys_district` VALUES ('576', '58', '洮北区', '0');
INSERT INTO `sys_district` VALUES ('577', '58', '镇赉县', '0');
INSERT INTO `sys_district` VALUES ('578', '58', '通榆县', '0');
INSERT INTO `sys_district` VALUES ('579', '58', '洮南市', '0');
INSERT INTO `sys_district` VALUES ('580', '58', '大安市', '0');
INSERT INTO `sys_district` VALUES ('581', '59', '延吉市', '0');
INSERT INTO `sys_district` VALUES ('582', '59', '图们市', '0');
INSERT INTO `sys_district` VALUES ('583', '59', '敦化市', '0');
INSERT INTO `sys_district` VALUES ('584', '59', '珲春市', '0');
INSERT INTO `sys_district` VALUES ('585', '59', '龙井市', '0');
INSERT INTO `sys_district` VALUES ('586', '59', '和龙市', '0');
INSERT INTO `sys_district` VALUES ('587', '59', '汪清县', '0');
INSERT INTO `sys_district` VALUES ('588', '59', '安图县', '0');
INSERT INTO `sys_district` VALUES ('589', '60', '道里区', '0');
INSERT INTO `sys_district` VALUES ('590', '60', '南岗区', '0');
INSERT INTO `sys_district` VALUES ('591', '60', '道外区', '0');
INSERT INTO `sys_district` VALUES ('592', '60', '香坊区', '0');
INSERT INTO `sys_district` VALUES ('593', '60', '动力区', '0');
INSERT INTO `sys_district` VALUES ('594', '60', '平房区', '0');
INSERT INTO `sys_district` VALUES ('595', '60', '松北区', '0');
INSERT INTO `sys_district` VALUES ('596', '60', '呼兰区', '0');
INSERT INTO `sys_district` VALUES ('597', '60', '依兰县', '0');
INSERT INTO `sys_district` VALUES ('598', '60', '方正县', '0');
INSERT INTO `sys_district` VALUES ('599', '60', '宾县', '0');
INSERT INTO `sys_district` VALUES ('600', '60', '巴彦县', '0');
INSERT INTO `sys_district` VALUES ('601', '60', '木兰县', '0');
INSERT INTO `sys_district` VALUES ('602', '60', '通河县', '0');
INSERT INTO `sys_district` VALUES ('603', '60', '延寿县', '0');
INSERT INTO `sys_district` VALUES ('604', '60', '阿城市', '0');
INSERT INTO `sys_district` VALUES ('605', '60', '双城市', '0');
INSERT INTO `sys_district` VALUES ('606', '60', '尚志市', '0');
INSERT INTO `sys_district` VALUES ('607', '60', '五常市', '0');
INSERT INTO `sys_district` VALUES ('608', '61', '龙沙区', '0');
INSERT INTO `sys_district` VALUES ('609', '61', '建华区', '0');
INSERT INTO `sys_district` VALUES ('610', '61', '铁锋区', '0');
INSERT INTO `sys_district` VALUES ('611', '61', '昂昂溪区', '0');
INSERT INTO `sys_district` VALUES ('612', '61', '富拉尔基区', '0');
INSERT INTO `sys_district` VALUES ('613', '61', '碾子山区', '0');
INSERT INTO `sys_district` VALUES ('614', '61', '梅里斯达斡尔族区', '0');
INSERT INTO `sys_district` VALUES ('615', '61', '龙江县', '0');
INSERT INTO `sys_district` VALUES ('616', '61', '依安县', '0');
INSERT INTO `sys_district` VALUES ('617', '61', '泰来县', '0');
INSERT INTO `sys_district` VALUES ('618', '61', '甘南县', '0');
INSERT INTO `sys_district` VALUES ('619', '61', '富裕县', '0');
INSERT INTO `sys_district` VALUES ('620', '61', '克山县', '0');
INSERT INTO `sys_district` VALUES ('621', '61', '克东县', '0');
INSERT INTO `sys_district` VALUES ('622', '61', '拜泉县', '0');
INSERT INTO `sys_district` VALUES ('623', '61', '讷河市', '0');
INSERT INTO `sys_district` VALUES ('624', '62', '鸡冠区', '0');
INSERT INTO `sys_district` VALUES ('625', '62', '恒山区', '0');
INSERT INTO `sys_district` VALUES ('626', '62', '滴道区', '0');
INSERT INTO `sys_district` VALUES ('627', '62', '梨树区', '0');
INSERT INTO `sys_district` VALUES ('628', '62', '城子河区', '0');
INSERT INTO `sys_district` VALUES ('629', '62', '麻山区', '0');
INSERT INTO `sys_district` VALUES ('630', '62', '鸡东县', '0');
INSERT INTO `sys_district` VALUES ('631', '62', '虎林市', '0');
INSERT INTO `sys_district` VALUES ('632', '62', '密山市', '0');
INSERT INTO `sys_district` VALUES ('633', '63', '向阳区', '0');
INSERT INTO `sys_district` VALUES ('634', '63', '工农区', '0');
INSERT INTO `sys_district` VALUES ('635', '63', '南山区', '0');
INSERT INTO `sys_district` VALUES ('636', '63', '兴安区', '0');
INSERT INTO `sys_district` VALUES ('637', '63', '东山区', '0');
INSERT INTO `sys_district` VALUES ('638', '63', '兴山区', '0');
INSERT INTO `sys_district` VALUES ('639', '63', '萝北县', '0');
INSERT INTO `sys_district` VALUES ('640', '63', '绥滨县', '0');
INSERT INTO `sys_district` VALUES ('641', '64', '尖山区', '0');
INSERT INTO `sys_district` VALUES ('642', '64', '岭东区', '0');
INSERT INTO `sys_district` VALUES ('643', '64', '四方台区', '0');
INSERT INTO `sys_district` VALUES ('644', '64', '宝山区', '0');
INSERT INTO `sys_district` VALUES ('645', '64', '集贤县', '0');
INSERT INTO `sys_district` VALUES ('646', '64', '友谊县', '0');
INSERT INTO `sys_district` VALUES ('647', '64', '宝清县', '0');
INSERT INTO `sys_district` VALUES ('648', '64', '饶河县', '0');
INSERT INTO `sys_district` VALUES ('649', '65', '萨尔图区', '0');
INSERT INTO `sys_district` VALUES ('650', '65', '龙凤区', '0');
INSERT INTO `sys_district` VALUES ('651', '65', '让胡路区', '0');
INSERT INTO `sys_district` VALUES ('652', '65', '红岗区', '0');
INSERT INTO `sys_district` VALUES ('653', '65', '大同区', '0');
INSERT INTO `sys_district` VALUES ('654', '65', '肇州县', '0');
INSERT INTO `sys_district` VALUES ('655', '65', '肇源县', '0');
INSERT INTO `sys_district` VALUES ('656', '65', '林甸县', '0');
INSERT INTO `sys_district` VALUES ('657', '65', '杜尔伯特蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('658', '66', '伊春区', '0');
INSERT INTO `sys_district` VALUES ('659', '66', '南岔区', '0');
INSERT INTO `sys_district` VALUES ('660', '66', '友好区', '0');
INSERT INTO `sys_district` VALUES ('661', '66', '西林区', '0');
INSERT INTO `sys_district` VALUES ('662', '66', '翠峦区', '0');
INSERT INTO `sys_district` VALUES ('663', '66', '新青区', '0');
INSERT INTO `sys_district` VALUES ('664', '66', '美溪区', '0');
INSERT INTO `sys_district` VALUES ('665', '66', '金山屯区', '0');
INSERT INTO `sys_district` VALUES ('666', '66', '五营区', '0');
INSERT INTO `sys_district` VALUES ('667', '66', '乌马河区', '0');
INSERT INTO `sys_district` VALUES ('668', '66', '汤旺河区', '0');
INSERT INTO `sys_district` VALUES ('669', '66', '带岭区', '0');
INSERT INTO `sys_district` VALUES ('670', '66', '乌伊岭区', '0');
INSERT INTO `sys_district` VALUES ('671', '66', '红星区', '0');
INSERT INTO `sys_district` VALUES ('672', '66', '上甘岭区', '0');
INSERT INTO `sys_district` VALUES ('673', '66', '嘉荫县', '0');
INSERT INTO `sys_district` VALUES ('674', '66', '铁力市', '0');
INSERT INTO `sys_district` VALUES ('675', '67', '永红区', '0');
INSERT INTO `sys_district` VALUES ('676', '67', '向阳区', '0');
INSERT INTO `sys_district` VALUES ('677', '67', '前进区', '0');
INSERT INTO `sys_district` VALUES ('678', '67', '东风区', '0');
INSERT INTO `sys_district` VALUES ('679', '67', '郊区', '0');
INSERT INTO `sys_district` VALUES ('680', '67', '桦南县', '0');
INSERT INTO `sys_district` VALUES ('681', '67', '桦川县', '0');
INSERT INTO `sys_district` VALUES ('682', '67', '汤原县', '0');
INSERT INTO `sys_district` VALUES ('683', '67', '抚远县', '0');
INSERT INTO `sys_district` VALUES ('684', '67', '同江市', '0');
INSERT INTO `sys_district` VALUES ('685', '67', '富锦市', '0');
INSERT INTO `sys_district` VALUES ('686', '68', '新兴区', '0');
INSERT INTO `sys_district` VALUES ('687', '68', '桃山区', '0');
INSERT INTO `sys_district` VALUES ('688', '68', '茄子河区', '0');
INSERT INTO `sys_district` VALUES ('689', '68', '勃利县', '0');
INSERT INTO `sys_district` VALUES ('690', '69', '东安区', '0');
INSERT INTO `sys_district` VALUES ('691', '69', '阳明区', '0');
INSERT INTO `sys_district` VALUES ('692', '69', '爱民区', '0');
INSERT INTO `sys_district` VALUES ('693', '69', '西安区', '0');
INSERT INTO `sys_district` VALUES ('694', '69', '东宁县', '0');
INSERT INTO `sys_district` VALUES ('695', '69', '林口县', '0');
INSERT INTO `sys_district` VALUES ('696', '69', '绥芬河市', '0');
INSERT INTO `sys_district` VALUES ('697', '69', '海林市', '0');
INSERT INTO `sys_district` VALUES ('698', '69', '宁安市', '0');
INSERT INTO `sys_district` VALUES ('699', '69', '穆棱市', '0');
INSERT INTO `sys_district` VALUES ('700', '70', '爱辉区', '0');
INSERT INTO `sys_district` VALUES ('701', '70', '嫩江县', '0');
INSERT INTO `sys_district` VALUES ('702', '70', '逊克县', '0');
INSERT INTO `sys_district` VALUES ('703', '70', '孙吴县', '0');
INSERT INTO `sys_district` VALUES ('704', '70', '北安市', '0');
INSERT INTO `sys_district` VALUES ('705', '70', '五大连池市', '0');
INSERT INTO `sys_district` VALUES ('706', '71', '北林区', '0');
INSERT INTO `sys_district` VALUES ('707', '71', '望奎县', '0');
INSERT INTO `sys_district` VALUES ('708', '71', '兰西县', '0');
INSERT INTO `sys_district` VALUES ('709', '71', '青冈县', '0');
INSERT INTO `sys_district` VALUES ('710', '71', '庆安县', '0');
INSERT INTO `sys_district` VALUES ('711', '71', '明水县', '0');
INSERT INTO `sys_district` VALUES ('712', '71', '绥棱县', '0');
INSERT INTO `sys_district` VALUES ('713', '71', '安达市', '0');
INSERT INTO `sys_district` VALUES ('714', '71', '肇东市', '0');
INSERT INTO `sys_district` VALUES ('715', '71', '海伦市', '0');
INSERT INTO `sys_district` VALUES ('716', '72', '呼玛县', '0');
INSERT INTO `sys_district` VALUES ('717', '72', '塔河县', '0');
INSERT INTO `sys_district` VALUES ('718', '72', '漠河县', '0');
INSERT INTO `sys_district` VALUES ('719', '73', '黄浦区', '0');
INSERT INTO `sys_district` VALUES ('720', '73', '卢湾区', '0');
INSERT INTO `sys_district` VALUES ('721', '73', '徐汇区', '0');
INSERT INTO `sys_district` VALUES ('722', '73', '长宁区', '0');
INSERT INTO `sys_district` VALUES ('723', '73', '静安区', '0');
INSERT INTO `sys_district` VALUES ('724', '73', '普陀区', '0');
INSERT INTO `sys_district` VALUES ('725', '73', '闸北区', '0');
INSERT INTO `sys_district` VALUES ('726', '73', '虹口区', '0');
INSERT INTO `sys_district` VALUES ('727', '73', '杨浦区', '0');
INSERT INTO `sys_district` VALUES ('728', '73', '闵行区', '0');
INSERT INTO `sys_district` VALUES ('729', '73', '宝山区', '0');
INSERT INTO `sys_district` VALUES ('730', '73', '嘉定区', '0');
INSERT INTO `sys_district` VALUES ('731', '73', '浦东新区', '0');
INSERT INTO `sys_district` VALUES ('732', '73', '金山区', '0');
INSERT INTO `sys_district` VALUES ('733', '73', '松江区', '0');
INSERT INTO `sys_district` VALUES ('734', '73', '青浦区', '0');
INSERT INTO `sys_district` VALUES ('735', '73', '南汇区', '0');
INSERT INTO `sys_district` VALUES ('736', '73', '奉贤区', '0');
INSERT INTO `sys_district` VALUES ('737', '73', '崇明县', '0');
INSERT INTO `sys_district` VALUES ('738', '74', '玄武区', '0');
INSERT INTO `sys_district` VALUES ('739', '74', '白下区', '0');
INSERT INTO `sys_district` VALUES ('740', '74', '秦淮区', '0');
INSERT INTO `sys_district` VALUES ('741', '74', '建邺区', '0');
INSERT INTO `sys_district` VALUES ('742', '74', '鼓楼区', '0');
INSERT INTO `sys_district` VALUES ('743', '74', '下关区', '0');
INSERT INTO `sys_district` VALUES ('744', '74', '浦口区', '0');
INSERT INTO `sys_district` VALUES ('745', '74', '栖霞区', '0');
INSERT INTO `sys_district` VALUES ('746', '74', '雨花台区', '0');
INSERT INTO `sys_district` VALUES ('747', '74', '江宁区', '0');
INSERT INTO `sys_district` VALUES ('748', '74', '六合区', '0');
INSERT INTO `sys_district` VALUES ('749', '74', '溧水县', '0');
INSERT INTO `sys_district` VALUES ('750', '74', '高淳县', '0');
INSERT INTO `sys_district` VALUES ('751', '75', '崇安区', '0');
INSERT INTO `sys_district` VALUES ('752', '75', '南长区', '0');
INSERT INTO `sys_district` VALUES ('753', '75', '北塘区', '0');
INSERT INTO `sys_district` VALUES ('754', '75', '锡山区', '0');
INSERT INTO `sys_district` VALUES ('755', '75', '惠山区', '0');
INSERT INTO `sys_district` VALUES ('756', '75', '滨湖区', '0');
INSERT INTO `sys_district` VALUES ('757', '75', '江阴市', '0');
INSERT INTO `sys_district` VALUES ('758', '75', '宜兴市', '0');
INSERT INTO `sys_district` VALUES ('759', '76', '鼓楼区', '0');
INSERT INTO `sys_district` VALUES ('760', '76', '云龙区', '0');
INSERT INTO `sys_district` VALUES ('761', '76', '九里区', '0');
INSERT INTO `sys_district` VALUES ('762', '76', '贾汪区', '0');
INSERT INTO `sys_district` VALUES ('763', '76', '泉山区', '0');
INSERT INTO `sys_district` VALUES ('764', '76', '丰县', '0');
INSERT INTO `sys_district` VALUES ('765', '76', '沛县', '0');
INSERT INTO `sys_district` VALUES ('766', '76', '铜山县', '0');
INSERT INTO `sys_district` VALUES ('767', '76', '睢宁县', '0');
INSERT INTO `sys_district` VALUES ('768', '76', '新沂市', '0');
INSERT INTO `sys_district` VALUES ('769', '76', '邳州市', '0');
INSERT INTO `sys_district` VALUES ('770', '77', '天宁区', '0');
INSERT INTO `sys_district` VALUES ('771', '77', '钟楼区', '0');
INSERT INTO `sys_district` VALUES ('772', '77', '戚墅堰区', '0');
INSERT INTO `sys_district` VALUES ('773', '77', '新北区', '0');
INSERT INTO `sys_district` VALUES ('774', '77', '武进区', '0');
INSERT INTO `sys_district` VALUES ('775', '77', '溧阳市', '0');
INSERT INTO `sys_district` VALUES ('776', '77', '金坛市', '0');
INSERT INTO `sys_district` VALUES ('777', '78', '沧浪区', '0');
INSERT INTO `sys_district` VALUES ('778', '78', '平江区', '0');
INSERT INTO `sys_district` VALUES ('779', '78', '金阊区', '0');
INSERT INTO `sys_district` VALUES ('780', '78', '虎丘区', '0');
INSERT INTO `sys_district` VALUES ('781', '78', '吴中区', '0');
INSERT INTO `sys_district` VALUES ('782', '78', '相城区', '0');
INSERT INTO `sys_district` VALUES ('783', '78', '常熟市', '0');
INSERT INTO `sys_district` VALUES ('784', '78', '张家港市', '0');
INSERT INTO `sys_district` VALUES ('785', '78', '昆山市', '0');
INSERT INTO `sys_district` VALUES ('786', '78', '吴江市', '0');
INSERT INTO `sys_district` VALUES ('787', '78', '太仓市', '0');
INSERT INTO `sys_district` VALUES ('788', '79', '崇川区', '0');
INSERT INTO `sys_district` VALUES ('789', '79', '港闸区', '0');
INSERT INTO `sys_district` VALUES ('790', '79', '海安县', '0');
INSERT INTO `sys_district` VALUES ('791', '79', '如东县', '0');
INSERT INTO `sys_district` VALUES ('792', '79', '启东市', '0');
INSERT INTO `sys_district` VALUES ('793', '79', '如皋市', '0');
INSERT INTO `sys_district` VALUES ('794', '79', '通州市', '0');
INSERT INTO `sys_district` VALUES ('795', '79', '海门市', '0');
INSERT INTO `sys_district` VALUES ('796', '80', '连云区', '0');
INSERT INTO `sys_district` VALUES ('797', '80', '新浦区', '0');
INSERT INTO `sys_district` VALUES ('798', '80', '海州区', '0');
INSERT INTO `sys_district` VALUES ('799', '80', '赣榆县', '0');
INSERT INTO `sys_district` VALUES ('800', '80', '东海县', '0');
INSERT INTO `sys_district` VALUES ('801', '80', '灌云县', '0');
INSERT INTO `sys_district` VALUES ('802', '80', '灌南县', '0');
INSERT INTO `sys_district` VALUES ('803', '81', '清河区', '0');
INSERT INTO `sys_district` VALUES ('804', '81', '楚州区', '0');
INSERT INTO `sys_district` VALUES ('805', '81', '淮阴区', '0');
INSERT INTO `sys_district` VALUES ('806', '81', '清浦区', '0');
INSERT INTO `sys_district` VALUES ('807', '81', '涟水县', '0');
INSERT INTO `sys_district` VALUES ('808', '81', '洪泽县', '0');
INSERT INTO `sys_district` VALUES ('809', '81', '盱眙县', '0');
INSERT INTO `sys_district` VALUES ('810', '81', '金湖县', '0');
INSERT INTO `sys_district` VALUES ('811', '82', '亭湖区', '0');
INSERT INTO `sys_district` VALUES ('812', '82', '盐都区', '0');
INSERT INTO `sys_district` VALUES ('813', '82', '响水县', '0');
INSERT INTO `sys_district` VALUES ('814', '82', '滨海县', '0');
INSERT INTO `sys_district` VALUES ('815', '82', '阜宁县', '0');
INSERT INTO `sys_district` VALUES ('816', '82', '射阳县', '0');
INSERT INTO `sys_district` VALUES ('817', '82', '建湖县', '0');
INSERT INTO `sys_district` VALUES ('818', '82', '东台市', '0');
INSERT INTO `sys_district` VALUES ('819', '82', '大丰市', '0');
INSERT INTO `sys_district` VALUES ('820', '83', '广陵区', '0');
INSERT INTO `sys_district` VALUES ('821', '83', '邗江区', '0');
INSERT INTO `sys_district` VALUES ('822', '83', '维扬区', '0');
INSERT INTO `sys_district` VALUES ('823', '83', '宝应县', '0');
INSERT INTO `sys_district` VALUES ('824', '83', '仪征市', '0');
INSERT INTO `sys_district` VALUES ('825', '83', '高邮市', '0');
INSERT INTO `sys_district` VALUES ('826', '83', '江都市', '0');
INSERT INTO `sys_district` VALUES ('827', '84', '京口区', '0');
INSERT INTO `sys_district` VALUES ('828', '84', '润州区', '0');
INSERT INTO `sys_district` VALUES ('829', '84', '丹徒区', '0');
INSERT INTO `sys_district` VALUES ('830', '84', '丹阳市', '0');
INSERT INTO `sys_district` VALUES ('831', '84', '扬中市', '0');
INSERT INTO `sys_district` VALUES ('832', '84', '句容市', '0');
INSERT INTO `sys_district` VALUES ('833', '85', '海陵区', '0');
INSERT INTO `sys_district` VALUES ('834', '85', '高港区', '0');
INSERT INTO `sys_district` VALUES ('835', '85', '兴化市', '0');
INSERT INTO `sys_district` VALUES ('836', '85', '靖江市', '0');
INSERT INTO `sys_district` VALUES ('837', '85', '泰兴市', '0');
INSERT INTO `sys_district` VALUES ('838', '85', '姜堰市', '0');
INSERT INTO `sys_district` VALUES ('839', '86', '宿城区', '0');
INSERT INTO `sys_district` VALUES ('840', '86', '宿豫区', '0');
INSERT INTO `sys_district` VALUES ('841', '86', '沭阳县', '0');
INSERT INTO `sys_district` VALUES ('842', '86', '泗阳县', '0');
INSERT INTO `sys_district` VALUES ('843', '86', '泗洪县', '0');
INSERT INTO `sys_district` VALUES ('844', '87', '上城区', '0');
INSERT INTO `sys_district` VALUES ('845', '87', '下城区', '0');
INSERT INTO `sys_district` VALUES ('846', '87', '江干区', '0');
INSERT INTO `sys_district` VALUES ('847', '87', '拱墅区', '0');
INSERT INTO `sys_district` VALUES ('848', '87', '西湖区', '0');
INSERT INTO `sys_district` VALUES ('849', '87', '滨江区', '0');
INSERT INTO `sys_district` VALUES ('850', '87', '萧山区', '0');
INSERT INTO `sys_district` VALUES ('851', '87', '余杭区', '0');
INSERT INTO `sys_district` VALUES ('852', '87', '桐庐县', '0');
INSERT INTO `sys_district` VALUES ('853', '87', '淳安县', '0');
INSERT INTO `sys_district` VALUES ('854', '87', '建德市', '0');
INSERT INTO `sys_district` VALUES ('855', '87', '富阳市', '0');
INSERT INTO `sys_district` VALUES ('856', '87', '临安市', '0');
INSERT INTO `sys_district` VALUES ('857', '88', '海曙区', '0');
INSERT INTO `sys_district` VALUES ('858', '88', '江东区', '0');
INSERT INTO `sys_district` VALUES ('859', '88', '江北区', '0');
INSERT INTO `sys_district` VALUES ('860', '88', '北仑区', '0');
INSERT INTO `sys_district` VALUES ('861', '88', '镇海区', '0');
INSERT INTO `sys_district` VALUES ('862', '88', '鄞州区', '0');
INSERT INTO `sys_district` VALUES ('863', '88', '象山县', '0');
INSERT INTO `sys_district` VALUES ('864', '88', '宁海县', '0');
INSERT INTO `sys_district` VALUES ('865', '88', '余姚市', '0');
INSERT INTO `sys_district` VALUES ('866', '88', '慈溪市', '0');
INSERT INTO `sys_district` VALUES ('867', '88', '奉化市', '0');
INSERT INTO `sys_district` VALUES ('868', '89', '鹿城区', '0');
INSERT INTO `sys_district` VALUES ('869', '89', '龙湾区', '0');
INSERT INTO `sys_district` VALUES ('870', '89', '瓯海区', '0');
INSERT INTO `sys_district` VALUES ('871', '89', '洞头县', '0');
INSERT INTO `sys_district` VALUES ('872', '89', '永嘉县', '0');
INSERT INTO `sys_district` VALUES ('873', '89', '平阳县', '0');
INSERT INTO `sys_district` VALUES ('874', '89', '苍南县', '0');
INSERT INTO `sys_district` VALUES ('875', '89', '文成县', '0');
INSERT INTO `sys_district` VALUES ('876', '89', '泰顺县', '0');
INSERT INTO `sys_district` VALUES ('877', '89', '瑞安市', '0');
INSERT INTO `sys_district` VALUES ('878', '89', '乐清市', '0');
INSERT INTO `sys_district` VALUES ('879', '90', '秀城区', '0');
INSERT INTO `sys_district` VALUES ('880', '90', '秀洲区', '0');
INSERT INTO `sys_district` VALUES ('881', '90', '嘉善县', '0');
INSERT INTO `sys_district` VALUES ('882', '90', '海盐县', '0');
INSERT INTO `sys_district` VALUES ('883', '90', '海宁市', '0');
INSERT INTO `sys_district` VALUES ('884', '90', '平湖市', '0');
INSERT INTO `sys_district` VALUES ('885', '90', '桐乡市', '0');
INSERT INTO `sys_district` VALUES ('886', '91', '吴兴区', '0');
INSERT INTO `sys_district` VALUES ('887', '91', '南浔区', '0');
INSERT INTO `sys_district` VALUES ('888', '91', '德清县', '0');
INSERT INTO `sys_district` VALUES ('889', '91', '长兴县', '0');
INSERT INTO `sys_district` VALUES ('890', '91', '安吉县', '0');
INSERT INTO `sys_district` VALUES ('891', '92', '越城区', '0');
INSERT INTO `sys_district` VALUES ('892', '92', '绍兴县', '0');
INSERT INTO `sys_district` VALUES ('893', '92', '新昌县', '0');
INSERT INTO `sys_district` VALUES ('894', '92', '诸暨市', '0');
INSERT INTO `sys_district` VALUES ('895', '92', '上虞市', '0');
INSERT INTO `sys_district` VALUES ('896', '92', '嵊州市', '0');
INSERT INTO `sys_district` VALUES ('897', '93', '婺城区', '0');
INSERT INTO `sys_district` VALUES ('898', '93', '金东区', '0');
INSERT INTO `sys_district` VALUES ('899', '93', '武义县', '0');
INSERT INTO `sys_district` VALUES ('900', '93', '浦江县', '0');
INSERT INTO `sys_district` VALUES ('901', '93', '磐安县', '0');
INSERT INTO `sys_district` VALUES ('902', '93', '兰溪市', '0');
INSERT INTO `sys_district` VALUES ('903', '93', '义乌市', '0');
INSERT INTO `sys_district` VALUES ('904', '93', '东阳市', '0');
INSERT INTO `sys_district` VALUES ('905', '93', '永康市', '0');
INSERT INTO `sys_district` VALUES ('906', '94', '柯城区', '0');
INSERT INTO `sys_district` VALUES ('907', '94', '衢江区', '0');
INSERT INTO `sys_district` VALUES ('908', '94', '常山县', '0');
INSERT INTO `sys_district` VALUES ('909', '94', '开化县', '0');
INSERT INTO `sys_district` VALUES ('910', '94', '龙游县', '0');
INSERT INTO `sys_district` VALUES ('911', '94', '江山市', '0');
INSERT INTO `sys_district` VALUES ('912', '95', '定海区', '0');
INSERT INTO `sys_district` VALUES ('913', '95', '普陀区', '0');
INSERT INTO `sys_district` VALUES ('914', '95', '岱山县', '0');
INSERT INTO `sys_district` VALUES ('915', '95', '嵊泗县', '0');
INSERT INTO `sys_district` VALUES ('916', '96', '椒江区', '0');
INSERT INTO `sys_district` VALUES ('917', '96', '黄岩区', '0');
INSERT INTO `sys_district` VALUES ('918', '96', '路桥区', '0');
INSERT INTO `sys_district` VALUES ('919', '96', '玉环县', '0');
INSERT INTO `sys_district` VALUES ('920', '96', '三门县', '0');
INSERT INTO `sys_district` VALUES ('921', '96', '天台县', '0');
INSERT INTO `sys_district` VALUES ('922', '96', '仙居县', '0');
INSERT INTO `sys_district` VALUES ('923', '96', '温岭市', '0');
INSERT INTO `sys_district` VALUES ('924', '96', '临海市', '0');
INSERT INTO `sys_district` VALUES ('925', '97', '莲都区', '0');
INSERT INTO `sys_district` VALUES ('926', '97', '青田县', '0');
INSERT INTO `sys_district` VALUES ('927', '97', '缙云县', '0');
INSERT INTO `sys_district` VALUES ('928', '97', '遂昌县', '0');
INSERT INTO `sys_district` VALUES ('929', '97', '松阳县', '0');
INSERT INTO `sys_district` VALUES ('930', '97', '云和县', '0');
INSERT INTO `sys_district` VALUES ('931', '97', '庆元县', '0');
INSERT INTO `sys_district` VALUES ('932', '97', '景宁畲族自治县', '0');
INSERT INTO `sys_district` VALUES ('933', '97', '龙泉市', '0');
INSERT INTO `sys_district` VALUES ('934', '98', '瑶海区', '0');
INSERT INTO `sys_district` VALUES ('935', '98', '庐阳区', '0');
INSERT INTO `sys_district` VALUES ('936', '98', '蜀山区', '0');
INSERT INTO `sys_district` VALUES ('937', '98', '包河区', '0');
INSERT INTO `sys_district` VALUES ('938', '98', '长丰县', '0');
INSERT INTO `sys_district` VALUES ('939', '98', '肥东县', '0');
INSERT INTO `sys_district` VALUES ('940', '98', '肥西县', '0');
INSERT INTO `sys_district` VALUES ('941', '99', '镜湖区', '0');
INSERT INTO `sys_district` VALUES ('942', '99', '马塘区', '0');
INSERT INTO `sys_district` VALUES ('943', '99', '新芜区', '0');
INSERT INTO `sys_district` VALUES ('944', '99', '鸠江区', '0');
INSERT INTO `sys_district` VALUES ('945', '99', '芜湖县', '0');
INSERT INTO `sys_district` VALUES ('946', '99', '繁昌县', '0');
INSERT INTO `sys_district` VALUES ('947', '99', '南陵县', '0');
INSERT INTO `sys_district` VALUES ('948', '100', '龙子湖区', '0');
INSERT INTO `sys_district` VALUES ('949', '100', '蚌山区', '0');
INSERT INTO `sys_district` VALUES ('950', '100', '禹会区', '0');
INSERT INTO `sys_district` VALUES ('951', '100', '淮上区', '0');
INSERT INTO `sys_district` VALUES ('952', '100', '怀远县', '0');
INSERT INTO `sys_district` VALUES ('953', '100', '五河县', '0');
INSERT INTO `sys_district` VALUES ('954', '100', '固镇县', '0');
INSERT INTO `sys_district` VALUES ('955', '101', '大通区', '0');
INSERT INTO `sys_district` VALUES ('956', '101', '田家庵区', '0');
INSERT INTO `sys_district` VALUES ('957', '101', '谢家集区', '0');
INSERT INTO `sys_district` VALUES ('958', '101', '八公山区', '0');
INSERT INTO `sys_district` VALUES ('959', '101', '潘集区', '0');
INSERT INTO `sys_district` VALUES ('960', '101', '凤台县', '0');
INSERT INTO `sys_district` VALUES ('961', '102', '金家庄区', '0');
INSERT INTO `sys_district` VALUES ('962', '102', '花山区', '0');
INSERT INTO `sys_district` VALUES ('963', '102', '雨山区', '0');
INSERT INTO `sys_district` VALUES ('964', '102', '当涂县', '0');
INSERT INTO `sys_district` VALUES ('965', '103', '杜集区', '0');
INSERT INTO `sys_district` VALUES ('966', '103', '相山区', '0');
INSERT INTO `sys_district` VALUES ('967', '103', '烈山区', '0');
INSERT INTO `sys_district` VALUES ('968', '103', '濉溪县', '0');
INSERT INTO `sys_district` VALUES ('969', '104', '铜官山区', '0');
INSERT INTO `sys_district` VALUES ('970', '104', '狮子山区', '0');
INSERT INTO `sys_district` VALUES ('971', '104', '郊区', '0');
INSERT INTO `sys_district` VALUES ('972', '104', '铜陵县', '0');
INSERT INTO `sys_district` VALUES ('973', '105', '迎江区', '0');
INSERT INTO `sys_district` VALUES ('974', '105', '大观区', '0');
INSERT INTO `sys_district` VALUES ('975', '105', '郊区', '0');
INSERT INTO `sys_district` VALUES ('976', '105', '怀宁县', '0');
INSERT INTO `sys_district` VALUES ('977', '105', '枞阳县', '0');
INSERT INTO `sys_district` VALUES ('978', '105', '潜山县', '0');
INSERT INTO `sys_district` VALUES ('979', '105', '太湖县', '0');
INSERT INTO `sys_district` VALUES ('980', '105', '宿松县', '0');
INSERT INTO `sys_district` VALUES ('981', '105', '望江县', '0');
INSERT INTO `sys_district` VALUES ('982', '105', '岳西县', '0');
INSERT INTO `sys_district` VALUES ('983', '105', '桐城市', '0');
INSERT INTO `sys_district` VALUES ('984', '106', '屯溪区', '0');
INSERT INTO `sys_district` VALUES ('985', '106', '黄山区', '0');
INSERT INTO `sys_district` VALUES ('986', '106', '徽州区', '0');
INSERT INTO `sys_district` VALUES ('987', '106', '歙县', '0');
INSERT INTO `sys_district` VALUES ('988', '106', '休宁县', '0');
INSERT INTO `sys_district` VALUES ('989', '106', '黟县', '0');
INSERT INTO `sys_district` VALUES ('990', '106', '祁门县', '0');
INSERT INTO `sys_district` VALUES ('991', '107', '琅琊区', '0');
INSERT INTO `sys_district` VALUES ('992', '107', '南谯区', '0');
INSERT INTO `sys_district` VALUES ('993', '107', '来安县', '0');
INSERT INTO `sys_district` VALUES ('994', '107', '全椒县', '0');
INSERT INTO `sys_district` VALUES ('995', '107', '定远县', '0');
INSERT INTO `sys_district` VALUES ('996', '107', '凤阳县', '0');
INSERT INTO `sys_district` VALUES ('997', '107', '天长市', '0');
INSERT INTO `sys_district` VALUES ('998', '107', '明光市', '0');
INSERT INTO `sys_district` VALUES ('999', '108', '颍州区', '0');
INSERT INTO `sys_district` VALUES ('1000', '108', '颍东区', '0');
INSERT INTO `sys_district` VALUES ('1001', '108', '颍泉区', '0');
INSERT INTO `sys_district` VALUES ('1002', '108', '临泉县', '0');
INSERT INTO `sys_district` VALUES ('1003', '108', '太和县', '0');
INSERT INTO `sys_district` VALUES ('1004', '108', '阜南县', '0');
INSERT INTO `sys_district` VALUES ('1005', '108', '颍上县', '0');
INSERT INTO `sys_district` VALUES ('1006', '108', '界首市', '0');
INSERT INTO `sys_district` VALUES ('1007', '109', '埇桥区', '0');
INSERT INTO `sys_district` VALUES ('1008', '109', '砀山县', '0');
INSERT INTO `sys_district` VALUES ('1009', '109', '萧县', '0');
INSERT INTO `sys_district` VALUES ('1010', '109', '灵璧县', '0');
INSERT INTO `sys_district` VALUES ('1011', '109', '泗县', '0');
INSERT INTO `sys_district` VALUES ('1012', '110', '居巢区', '0');
INSERT INTO `sys_district` VALUES ('1013', '110', '庐江县', '0');
INSERT INTO `sys_district` VALUES ('1014', '110', '无为县', '0');
INSERT INTO `sys_district` VALUES ('1015', '110', '含山县', '0');
INSERT INTO `sys_district` VALUES ('1016', '110', '和县', '0');
INSERT INTO `sys_district` VALUES ('1017', '111', '金安区', '0');
INSERT INTO `sys_district` VALUES ('1018', '111', '裕安区', '0');
INSERT INTO `sys_district` VALUES ('1019', '111', '寿县', '0');
INSERT INTO `sys_district` VALUES ('1020', '111', '霍邱县', '0');
INSERT INTO `sys_district` VALUES ('1021', '111', '舒城县', '0');
INSERT INTO `sys_district` VALUES ('1022', '111', '金寨县', '0');
INSERT INTO `sys_district` VALUES ('1023', '111', '霍山县', '0');
INSERT INTO `sys_district` VALUES ('1024', '112', '谯城区', '0');
INSERT INTO `sys_district` VALUES ('1025', '112', '涡阳县', '0');
INSERT INTO `sys_district` VALUES ('1026', '112', '蒙城县', '0');
INSERT INTO `sys_district` VALUES ('1027', '112', '利辛县', '0');
INSERT INTO `sys_district` VALUES ('1028', '113', '贵池区', '0');
INSERT INTO `sys_district` VALUES ('1029', '113', '东至县', '0');
INSERT INTO `sys_district` VALUES ('1030', '113', '石台县', '0');
INSERT INTO `sys_district` VALUES ('1031', '113', '青阳县', '0');
INSERT INTO `sys_district` VALUES ('1032', '114', '宣州区', '0');
INSERT INTO `sys_district` VALUES ('1033', '114', '郎溪县', '0');
INSERT INTO `sys_district` VALUES ('1034', '114', '广德县', '0');
INSERT INTO `sys_district` VALUES ('1035', '114', '泾县', '0');
INSERT INTO `sys_district` VALUES ('1036', '114', '绩溪县', '0');
INSERT INTO `sys_district` VALUES ('1037', '114', '旌德县', '0');
INSERT INTO `sys_district` VALUES ('1038', '114', '宁国市', '0');
INSERT INTO `sys_district` VALUES ('1039', '115', '鼓楼区', '0');
INSERT INTO `sys_district` VALUES ('1040', '115', '台江区', '0');
INSERT INTO `sys_district` VALUES ('1041', '115', '仓山区', '0');
INSERT INTO `sys_district` VALUES ('1042', '115', '马尾区', '0');
INSERT INTO `sys_district` VALUES ('1043', '115', '晋安区', '0');
INSERT INTO `sys_district` VALUES ('1044', '115', '闽侯县', '0');
INSERT INTO `sys_district` VALUES ('1045', '115', '连江县', '0');
INSERT INTO `sys_district` VALUES ('1046', '115', '罗源县', '0');
INSERT INTO `sys_district` VALUES ('1047', '115', '闽清县', '0');
INSERT INTO `sys_district` VALUES ('1048', '115', '永泰县', '0');
INSERT INTO `sys_district` VALUES ('1049', '115', '平潭县', '0');
INSERT INTO `sys_district` VALUES ('1050', '115', '福清市', '0');
INSERT INTO `sys_district` VALUES ('1051', '115', '长乐市', '0');
INSERT INTO `sys_district` VALUES ('1052', '116', '思明区', '0');
INSERT INTO `sys_district` VALUES ('1053', '116', '海沧区', '0');
INSERT INTO `sys_district` VALUES ('1054', '116', '湖里区', '0');
INSERT INTO `sys_district` VALUES ('1055', '116', '集美区', '0');
INSERT INTO `sys_district` VALUES ('1056', '116', '同安区', '0');
INSERT INTO `sys_district` VALUES ('1057', '116', '翔安区', '0');
INSERT INTO `sys_district` VALUES ('1058', '117', '城厢区', '0');
INSERT INTO `sys_district` VALUES ('1059', '117', '涵江区', '0');
INSERT INTO `sys_district` VALUES ('1060', '117', '荔城区', '0');
INSERT INTO `sys_district` VALUES ('1061', '117', '秀屿区', '0');
INSERT INTO `sys_district` VALUES ('1062', '117', '仙游县', '0');
INSERT INTO `sys_district` VALUES ('1063', '118', '梅列区', '0');
INSERT INTO `sys_district` VALUES ('1064', '118', '三元区', '0');
INSERT INTO `sys_district` VALUES ('1065', '118', '明溪县', '0');
INSERT INTO `sys_district` VALUES ('1066', '118', '清流县', '0');
INSERT INTO `sys_district` VALUES ('1067', '118', '宁化县', '0');
INSERT INTO `sys_district` VALUES ('1068', '118', '大田县', '0');
INSERT INTO `sys_district` VALUES ('1069', '118', '尤溪县', '0');
INSERT INTO `sys_district` VALUES ('1070', '118', '沙县', '0');
INSERT INTO `sys_district` VALUES ('1071', '118', '将乐县', '0');
INSERT INTO `sys_district` VALUES ('1072', '118', '泰宁县', '0');
INSERT INTO `sys_district` VALUES ('1073', '118', '建宁县', '0');
INSERT INTO `sys_district` VALUES ('1074', '118', '永安市', '0');
INSERT INTO `sys_district` VALUES ('1075', '119', '鲤城区', '0');
INSERT INTO `sys_district` VALUES ('1076', '119', '丰泽区', '0');
INSERT INTO `sys_district` VALUES ('1077', '119', '洛江区', '0');
INSERT INTO `sys_district` VALUES ('1078', '119', '泉港区', '0');
INSERT INTO `sys_district` VALUES ('1079', '119', '惠安县', '0');
INSERT INTO `sys_district` VALUES ('1080', '119', '安溪县', '0');
INSERT INTO `sys_district` VALUES ('1081', '119', '永春县', '0');
INSERT INTO `sys_district` VALUES ('1082', '119', '德化县', '0');
INSERT INTO `sys_district` VALUES ('1083', '119', '金门县', '0');
INSERT INTO `sys_district` VALUES ('1084', '119', '石狮市', '0');
INSERT INTO `sys_district` VALUES ('1085', '119', '晋江市', '0');
INSERT INTO `sys_district` VALUES ('1086', '119', '南安市', '0');
INSERT INTO `sys_district` VALUES ('1087', '120', '芗城区', '0');
INSERT INTO `sys_district` VALUES ('1088', '120', '龙文区', '0');
INSERT INTO `sys_district` VALUES ('1089', '120', '云霄县', '0');
INSERT INTO `sys_district` VALUES ('1090', '120', '漳浦县', '0');
INSERT INTO `sys_district` VALUES ('1091', '120', '诏安县', '0');
INSERT INTO `sys_district` VALUES ('1092', '120', '长泰县', '0');
INSERT INTO `sys_district` VALUES ('1093', '120', '东山县', '0');
INSERT INTO `sys_district` VALUES ('1094', '120', '南靖县', '0');
INSERT INTO `sys_district` VALUES ('1095', '120', '平和县', '0');
INSERT INTO `sys_district` VALUES ('1096', '120', '华安县', '0');
INSERT INTO `sys_district` VALUES ('1097', '120', '龙海市', '0');
INSERT INTO `sys_district` VALUES ('1098', '121', '延平区', '0');
INSERT INTO `sys_district` VALUES ('1099', '121', '顺昌县', '0');
INSERT INTO `sys_district` VALUES ('1100', '121', '浦城县', '0');
INSERT INTO `sys_district` VALUES ('1101', '121', '光泽县', '0');
INSERT INTO `sys_district` VALUES ('1102', '121', '松溪县', '0');
INSERT INTO `sys_district` VALUES ('1103', '121', '政和县', '0');
INSERT INTO `sys_district` VALUES ('1104', '121', '邵武市', '0');
INSERT INTO `sys_district` VALUES ('1105', '121', '武夷山市', '0');
INSERT INTO `sys_district` VALUES ('1106', '121', '建瓯市', '0');
INSERT INTO `sys_district` VALUES ('1107', '121', '建阳市', '0');
INSERT INTO `sys_district` VALUES ('1108', '122', '新罗区', '0');
INSERT INTO `sys_district` VALUES ('1109', '122', '长汀县', '0');
INSERT INTO `sys_district` VALUES ('1110', '122', '永定县', '0');
INSERT INTO `sys_district` VALUES ('1111', '122', '上杭县', '0');
INSERT INTO `sys_district` VALUES ('1112', '122', '武平县', '0');
INSERT INTO `sys_district` VALUES ('1113', '122', '连城县', '0');
INSERT INTO `sys_district` VALUES ('1114', '122', '漳平市', '0');
INSERT INTO `sys_district` VALUES ('1115', '123', '蕉城区', '0');
INSERT INTO `sys_district` VALUES ('1116', '123', '霞浦县', '0');
INSERT INTO `sys_district` VALUES ('1117', '123', '古田县', '0');
INSERT INTO `sys_district` VALUES ('1118', '123', '屏南县', '0');
INSERT INTO `sys_district` VALUES ('1119', '123', '寿宁县', '0');
INSERT INTO `sys_district` VALUES ('1120', '123', '周宁县', '0');
INSERT INTO `sys_district` VALUES ('1121', '123', '柘荣县', '0');
INSERT INTO `sys_district` VALUES ('1122', '123', '福安市', '0');
INSERT INTO `sys_district` VALUES ('1123', '123', '福鼎市', '0');
INSERT INTO `sys_district` VALUES ('1124', '124', '东湖区', '0');
INSERT INTO `sys_district` VALUES ('1125', '124', '西湖区', '0');
INSERT INTO `sys_district` VALUES ('1126', '124', '青云谱区', '0');
INSERT INTO `sys_district` VALUES ('1127', '124', '湾里区', '0');
INSERT INTO `sys_district` VALUES ('1128', '124', '青山湖区', '0');
INSERT INTO `sys_district` VALUES ('1129', '124', '南昌县', '0');
INSERT INTO `sys_district` VALUES ('1130', '124', '新建县', '0');
INSERT INTO `sys_district` VALUES ('1131', '124', '安义县', '0');
INSERT INTO `sys_district` VALUES ('1132', '124', '进贤县', '0');
INSERT INTO `sys_district` VALUES ('1133', '125', '昌江区', '0');
INSERT INTO `sys_district` VALUES ('1134', '125', '珠山区', '0');
INSERT INTO `sys_district` VALUES ('1135', '125', '浮梁县', '0');
INSERT INTO `sys_district` VALUES ('1136', '125', '乐平市', '0');
INSERT INTO `sys_district` VALUES ('1137', '126', '安源区', '0');
INSERT INTO `sys_district` VALUES ('1138', '126', '湘东区', '0');
INSERT INTO `sys_district` VALUES ('1139', '126', '莲花县', '0');
INSERT INTO `sys_district` VALUES ('1140', '126', '上栗县', '0');
INSERT INTO `sys_district` VALUES ('1141', '126', '芦溪县', '0');
INSERT INTO `sys_district` VALUES ('1142', '127', '庐山区', '0');
INSERT INTO `sys_district` VALUES ('1143', '127', '浔阳区', '0');
INSERT INTO `sys_district` VALUES ('1144', '127', '九江县', '0');
INSERT INTO `sys_district` VALUES ('1145', '127', '武宁县', '0');
INSERT INTO `sys_district` VALUES ('1146', '127', '修水县', '0');
INSERT INTO `sys_district` VALUES ('1147', '127', '永修县', '0');
INSERT INTO `sys_district` VALUES ('1148', '127', '德安县', '0');
INSERT INTO `sys_district` VALUES ('1149', '127', '星子县', '0');
INSERT INTO `sys_district` VALUES ('1150', '127', '都昌县', '0');
INSERT INTO `sys_district` VALUES ('1151', '127', '湖口县', '0');
INSERT INTO `sys_district` VALUES ('1152', '127', '彭泽县', '0');
INSERT INTO `sys_district` VALUES ('1153', '127', '瑞昌市', '0');
INSERT INTO `sys_district` VALUES ('1154', '128', '渝水区', '0');
INSERT INTO `sys_district` VALUES ('1155', '128', '分宜县', '0');
INSERT INTO `sys_district` VALUES ('1156', '129', '月湖区', '0');
INSERT INTO `sys_district` VALUES ('1157', '129', '余江县', '0');
INSERT INTO `sys_district` VALUES ('1158', '129', '贵溪市', '0');
INSERT INTO `sys_district` VALUES ('1159', '130', '章贡区', '0');
INSERT INTO `sys_district` VALUES ('1160', '130', '赣县', '0');
INSERT INTO `sys_district` VALUES ('1161', '130', '信丰县', '0');
INSERT INTO `sys_district` VALUES ('1162', '130', '大余县', '0');
INSERT INTO `sys_district` VALUES ('1163', '130', '上犹县', '0');
INSERT INTO `sys_district` VALUES ('1164', '130', '崇义县', '0');
INSERT INTO `sys_district` VALUES ('1165', '130', '安远县', '0');
INSERT INTO `sys_district` VALUES ('1166', '130', '龙南县', '0');
INSERT INTO `sys_district` VALUES ('1167', '130', '定南县', '0');
INSERT INTO `sys_district` VALUES ('1168', '130', '全南县', '0');
INSERT INTO `sys_district` VALUES ('1169', '130', '宁都县', '0');
INSERT INTO `sys_district` VALUES ('1170', '130', '于都县', '0');
INSERT INTO `sys_district` VALUES ('1171', '130', '兴国县', '0');
INSERT INTO `sys_district` VALUES ('1172', '130', '会昌县', '0');
INSERT INTO `sys_district` VALUES ('1173', '130', '寻乌县', '0');
INSERT INTO `sys_district` VALUES ('1174', '130', '石城县', '0');
INSERT INTO `sys_district` VALUES ('1175', '130', '瑞金市', '0');
INSERT INTO `sys_district` VALUES ('1176', '130', '南康市', '0');
INSERT INTO `sys_district` VALUES ('1177', '131', '吉州区', '0');
INSERT INTO `sys_district` VALUES ('1178', '131', '青原区', '0');
INSERT INTO `sys_district` VALUES ('1179', '131', '吉安县', '0');
INSERT INTO `sys_district` VALUES ('1180', '131', '吉水县', '0');
INSERT INTO `sys_district` VALUES ('1181', '131', '峡江县', '0');
INSERT INTO `sys_district` VALUES ('1182', '131', '新干县', '0');
INSERT INTO `sys_district` VALUES ('1183', '131', '永丰县', '0');
INSERT INTO `sys_district` VALUES ('1184', '131', '泰和县', '0');
INSERT INTO `sys_district` VALUES ('1185', '131', '遂川县', '0');
INSERT INTO `sys_district` VALUES ('1186', '131', '万安县', '0');
INSERT INTO `sys_district` VALUES ('1187', '131', '安福县', '0');
INSERT INTO `sys_district` VALUES ('1188', '131', '永新县', '0');
INSERT INTO `sys_district` VALUES ('1189', '131', '井冈山市', '0');
INSERT INTO `sys_district` VALUES ('1190', '132', '袁州区', '0');
INSERT INTO `sys_district` VALUES ('1191', '132', '奉新县', '0');
INSERT INTO `sys_district` VALUES ('1192', '132', '万载县', '0');
INSERT INTO `sys_district` VALUES ('1193', '132', '上高县', '0');
INSERT INTO `sys_district` VALUES ('1194', '132', '宜丰县', '0');
INSERT INTO `sys_district` VALUES ('1195', '132', '靖安县', '0');
INSERT INTO `sys_district` VALUES ('1196', '132', '铜鼓县', '0');
INSERT INTO `sys_district` VALUES ('1197', '132', '丰城市', '0');
INSERT INTO `sys_district` VALUES ('1198', '132', '樟树市', '0');
INSERT INTO `sys_district` VALUES ('1199', '132', '高安市', '0');
INSERT INTO `sys_district` VALUES ('1200', '133', '临川区', '0');
INSERT INTO `sys_district` VALUES ('1201', '133', '南城县', '0');
INSERT INTO `sys_district` VALUES ('1202', '133', '黎川县', '0');
INSERT INTO `sys_district` VALUES ('1203', '133', '南丰县', '0');
INSERT INTO `sys_district` VALUES ('1204', '133', '崇仁县', '0');
INSERT INTO `sys_district` VALUES ('1205', '133', '乐安县', '0');
INSERT INTO `sys_district` VALUES ('1206', '133', '宜黄县', '0');
INSERT INTO `sys_district` VALUES ('1207', '133', '金溪县', '0');
INSERT INTO `sys_district` VALUES ('1208', '133', '资溪县', '0');
INSERT INTO `sys_district` VALUES ('1209', '133', '东乡县', '0');
INSERT INTO `sys_district` VALUES ('1210', '133', '广昌县', '0');
INSERT INTO `sys_district` VALUES ('1211', '134', '信州区', '0');
INSERT INTO `sys_district` VALUES ('1212', '134', '上饶县', '0');
INSERT INTO `sys_district` VALUES ('1213', '134', '广丰县', '0');
INSERT INTO `sys_district` VALUES ('1214', '134', '玉山县', '0');
INSERT INTO `sys_district` VALUES ('1215', '134', '铅山县', '0');
INSERT INTO `sys_district` VALUES ('1216', '134', '横峰县', '0');
INSERT INTO `sys_district` VALUES ('1217', '134', '弋阳县', '0');
INSERT INTO `sys_district` VALUES ('1218', '134', '余干县', '0');
INSERT INTO `sys_district` VALUES ('1219', '134', '鄱阳县', '0');
INSERT INTO `sys_district` VALUES ('1220', '134', '万年县', '0');
INSERT INTO `sys_district` VALUES ('1221', '134', '婺源县', '0');
INSERT INTO `sys_district` VALUES ('1222', '134', '德兴市', '0');
INSERT INTO `sys_district` VALUES ('1223', '135', '历下区', '0');
INSERT INTO `sys_district` VALUES ('1224', '135', '市中区', '0');
INSERT INTO `sys_district` VALUES ('1225', '135', '槐荫区', '0');
INSERT INTO `sys_district` VALUES ('1226', '135', '天桥区', '0');
INSERT INTO `sys_district` VALUES ('1227', '135', '历城区', '0');
INSERT INTO `sys_district` VALUES ('1228', '135', '长清区', '0');
INSERT INTO `sys_district` VALUES ('1229', '135', '平阴县', '0');
INSERT INTO `sys_district` VALUES ('1230', '135', '济阳县', '0');
INSERT INTO `sys_district` VALUES ('1231', '135', '商河县', '0');
INSERT INTO `sys_district` VALUES ('1232', '135', '章丘市', '0');
INSERT INTO `sys_district` VALUES ('1233', '136', '市南区', '0');
INSERT INTO `sys_district` VALUES ('1234', '136', '市北区', '0');
INSERT INTO `sys_district` VALUES ('1235', '136', '四方区', '0');
INSERT INTO `sys_district` VALUES ('1236', '136', '黄岛区', '0');
INSERT INTO `sys_district` VALUES ('1237', '136', '崂山区', '0');
INSERT INTO `sys_district` VALUES ('1238', '136', '李沧区', '0');
INSERT INTO `sys_district` VALUES ('1239', '136', '城阳区', '0');
INSERT INTO `sys_district` VALUES ('1240', '136', '胶州市', '0');
INSERT INTO `sys_district` VALUES ('1241', '136', '即墨市', '0');
INSERT INTO `sys_district` VALUES ('1242', '136', '平度市', '0');
INSERT INTO `sys_district` VALUES ('1243', '136', '胶南市', '0');
INSERT INTO `sys_district` VALUES ('1244', '136', '莱西市', '0');
INSERT INTO `sys_district` VALUES ('1245', '137', '淄川区', '0');
INSERT INTO `sys_district` VALUES ('1246', '137', '张店区', '0');
INSERT INTO `sys_district` VALUES ('1247', '137', '博山区', '0');
INSERT INTO `sys_district` VALUES ('1248', '137', '临淄区', '0');
INSERT INTO `sys_district` VALUES ('1249', '137', '周村区', '0');
INSERT INTO `sys_district` VALUES ('1250', '137', '桓台县', '0');
INSERT INTO `sys_district` VALUES ('1251', '137', '高青县', '0');
INSERT INTO `sys_district` VALUES ('1252', '137', '沂源县', '0');
INSERT INTO `sys_district` VALUES ('1253', '138', '市中区', '0');
INSERT INTO `sys_district` VALUES ('1254', '138', '薛城区', '0');
INSERT INTO `sys_district` VALUES ('1255', '138', '峄城区', '0');
INSERT INTO `sys_district` VALUES ('1256', '138', '台儿庄区', '0');
INSERT INTO `sys_district` VALUES ('1257', '138', '山亭区', '0');
INSERT INTO `sys_district` VALUES ('1258', '138', '滕州市', '0');
INSERT INTO `sys_district` VALUES ('1259', '139', '东营区', '0');
INSERT INTO `sys_district` VALUES ('1260', '139', '河口区', '0');
INSERT INTO `sys_district` VALUES ('1261', '139', '垦利县', '0');
INSERT INTO `sys_district` VALUES ('1262', '139', '利津县', '0');
INSERT INTO `sys_district` VALUES ('1263', '139', '广饶县', '0');
INSERT INTO `sys_district` VALUES ('1264', '140', '芝罘区', '0');
INSERT INTO `sys_district` VALUES ('1265', '140', '福山区', '0');
INSERT INTO `sys_district` VALUES ('1266', '140', '牟平区', '0');
INSERT INTO `sys_district` VALUES ('1267', '140', '莱山区', '0');
INSERT INTO `sys_district` VALUES ('1268', '140', '长岛县', '0');
INSERT INTO `sys_district` VALUES ('1269', '140', '龙口市', '0');
INSERT INTO `sys_district` VALUES ('1270', '140', '莱阳市', '0');
INSERT INTO `sys_district` VALUES ('1271', '140', '莱州市', '0');
INSERT INTO `sys_district` VALUES ('1272', '140', '蓬莱市', '0');
INSERT INTO `sys_district` VALUES ('1273', '140', '招远市', '0');
INSERT INTO `sys_district` VALUES ('1274', '140', '栖霞市', '0');
INSERT INTO `sys_district` VALUES ('1275', '140', '海阳市', '0');
INSERT INTO `sys_district` VALUES ('1276', '141', '潍城区', '0');
INSERT INTO `sys_district` VALUES ('1277', '141', '寒亭区', '0');
INSERT INTO `sys_district` VALUES ('1278', '141', '坊子区', '0');
INSERT INTO `sys_district` VALUES ('1279', '141', '奎文区', '0');
INSERT INTO `sys_district` VALUES ('1280', '141', '临朐县', '0');
INSERT INTO `sys_district` VALUES ('1281', '141', '昌乐县', '0');
INSERT INTO `sys_district` VALUES ('1282', '141', '青州市', '0');
INSERT INTO `sys_district` VALUES ('1283', '141', '诸城市', '0');
INSERT INTO `sys_district` VALUES ('1284', '141', '寿光市', '0');
INSERT INTO `sys_district` VALUES ('1285', '141', '安丘市', '0');
INSERT INTO `sys_district` VALUES ('1286', '141', '高密市', '0');
INSERT INTO `sys_district` VALUES ('1287', '141', '昌邑市', '0');
INSERT INTO `sys_district` VALUES ('1288', '142', '市中区', '0');
INSERT INTO `sys_district` VALUES ('1289', '142', '任城区', '0');
INSERT INTO `sys_district` VALUES ('1290', '142', '微山县', '0');
INSERT INTO `sys_district` VALUES ('1291', '142', '鱼台县', '0');
INSERT INTO `sys_district` VALUES ('1292', '142', '金乡县', '0');
INSERT INTO `sys_district` VALUES ('1293', '142', '嘉祥县', '0');
INSERT INTO `sys_district` VALUES ('1294', '142', '汶上县', '0');
INSERT INTO `sys_district` VALUES ('1295', '142', '泗水县', '0');
INSERT INTO `sys_district` VALUES ('1296', '142', '梁山县', '0');
INSERT INTO `sys_district` VALUES ('1297', '142', '曲阜市', '0');
INSERT INTO `sys_district` VALUES ('1298', '142', '兖州市', '0');
INSERT INTO `sys_district` VALUES ('1299', '142', '邹城市', '0');
INSERT INTO `sys_district` VALUES ('1300', '143', '泰山区', '0');
INSERT INTO `sys_district` VALUES ('1301', '143', '岱岳区', '0');
INSERT INTO `sys_district` VALUES ('1302', '143', '宁阳县', '0');
INSERT INTO `sys_district` VALUES ('1303', '143', '东平县', '0');
INSERT INTO `sys_district` VALUES ('1304', '143', '新泰市', '0');
INSERT INTO `sys_district` VALUES ('1305', '143', '肥城市', '0');
INSERT INTO `sys_district` VALUES ('1306', '144', '环翠区', '0');
INSERT INTO `sys_district` VALUES ('1307', '144', '文登市', '0');
INSERT INTO `sys_district` VALUES ('1308', '144', '荣成市', '0');
INSERT INTO `sys_district` VALUES ('1309', '144', '乳山市', '0');
INSERT INTO `sys_district` VALUES ('1310', '145', '东港区', '0');
INSERT INTO `sys_district` VALUES ('1311', '145', '岚山区', '0');
INSERT INTO `sys_district` VALUES ('1312', '145', '五莲县', '0');
INSERT INTO `sys_district` VALUES ('1313', '145', '莒县', '0');
INSERT INTO `sys_district` VALUES ('1314', '146', '莱城区', '0');
INSERT INTO `sys_district` VALUES ('1315', '146', '钢城区', '0');
INSERT INTO `sys_district` VALUES ('1316', '147', '兰山区', '0');
INSERT INTO `sys_district` VALUES ('1317', '147', '罗庄区', '0');
INSERT INTO `sys_district` VALUES ('1318', '147', '河东区', '0');
INSERT INTO `sys_district` VALUES ('1319', '147', '沂南县', '0');
INSERT INTO `sys_district` VALUES ('1320', '147', '郯城县', '0');
INSERT INTO `sys_district` VALUES ('1321', '147', '沂水县', '0');
INSERT INTO `sys_district` VALUES ('1322', '147', '苍山县', '0');
INSERT INTO `sys_district` VALUES ('1323', '147', '费县', '0');
INSERT INTO `sys_district` VALUES ('1324', '147', '平邑县', '0');
INSERT INTO `sys_district` VALUES ('1325', '147', '莒南县', '0');
INSERT INTO `sys_district` VALUES ('1326', '147', '蒙阴县', '0');
INSERT INTO `sys_district` VALUES ('1327', '147', '临沭县', '0');
INSERT INTO `sys_district` VALUES ('1328', '148', '德城区', '0');
INSERT INTO `sys_district` VALUES ('1329', '148', '陵县', '0');
INSERT INTO `sys_district` VALUES ('1330', '148', '宁津县', '0');
INSERT INTO `sys_district` VALUES ('1331', '148', '庆云县', '0');
INSERT INTO `sys_district` VALUES ('1332', '148', '临邑县', '0');
INSERT INTO `sys_district` VALUES ('1333', '148', '齐河县', '0');
INSERT INTO `sys_district` VALUES ('1334', '148', '平原县', '0');
INSERT INTO `sys_district` VALUES ('1335', '148', '夏津县', '0');
INSERT INTO `sys_district` VALUES ('1336', '148', '武城县', '0');
INSERT INTO `sys_district` VALUES ('1337', '148', '乐陵市', '0');
INSERT INTO `sys_district` VALUES ('1338', '148', '禹城市', '0');
INSERT INTO `sys_district` VALUES ('1339', '149', '东昌府区', '0');
INSERT INTO `sys_district` VALUES ('1340', '149', '阳谷县', '0');
INSERT INTO `sys_district` VALUES ('1341', '149', '莘县', '0');
INSERT INTO `sys_district` VALUES ('1342', '149', '茌平县', '0');
INSERT INTO `sys_district` VALUES ('1343', '149', '东阿县', '0');
INSERT INTO `sys_district` VALUES ('1344', '149', '冠县', '0');
INSERT INTO `sys_district` VALUES ('1345', '149', '高唐县', '0');
INSERT INTO `sys_district` VALUES ('1346', '149', '临清市', '0');
INSERT INTO `sys_district` VALUES ('1347', '150', '滨城区', '0');
INSERT INTO `sys_district` VALUES ('1348', '150', '惠民县', '0');
INSERT INTO `sys_district` VALUES ('1349', '150', '阳信县', '0');
INSERT INTO `sys_district` VALUES ('1350', '150', '无棣县', '0');
INSERT INTO `sys_district` VALUES ('1351', '150', '沾化县', '0');
INSERT INTO `sys_district` VALUES ('1352', '150', '博兴县', '0');
INSERT INTO `sys_district` VALUES ('1353', '150', '邹平县', '0');
INSERT INTO `sys_district` VALUES ('1354', '151', '牡丹区', '0');
INSERT INTO `sys_district` VALUES ('1355', '151', '曹县', '0');
INSERT INTO `sys_district` VALUES ('1356', '151', '单县', '0');
INSERT INTO `sys_district` VALUES ('1357', '151', '成武县', '0');
INSERT INTO `sys_district` VALUES ('1358', '151', '巨野县', '0');
INSERT INTO `sys_district` VALUES ('1359', '151', '郓城县', '0');
INSERT INTO `sys_district` VALUES ('1360', '151', '鄄城县', '0');
INSERT INTO `sys_district` VALUES ('1361', '151', '定陶县', '0');
INSERT INTO `sys_district` VALUES ('1362', '151', '东明县', '0');
INSERT INTO `sys_district` VALUES ('1363', '152', '中原区', '0');
INSERT INTO `sys_district` VALUES ('1364', '152', '二七区', '0');
INSERT INTO `sys_district` VALUES ('1365', '152', '管城回族区', '0');
INSERT INTO `sys_district` VALUES ('1366', '152', '金水区', '0');
INSERT INTO `sys_district` VALUES ('1367', '152', '上街区', '0');
INSERT INTO `sys_district` VALUES ('1368', '152', '惠济区', '0');
INSERT INTO `sys_district` VALUES ('1369', '152', '中牟县', '0');
INSERT INTO `sys_district` VALUES ('1370', '152', '巩义市', '0');
INSERT INTO `sys_district` VALUES ('1371', '152', '荥阳市', '0');
INSERT INTO `sys_district` VALUES ('1372', '152', '新密市', '0');
INSERT INTO `sys_district` VALUES ('1373', '152', '新郑市', '0');
INSERT INTO `sys_district` VALUES ('1374', '152', '登封市', '0');
INSERT INTO `sys_district` VALUES ('1375', '153', '龙亭区', '0');
INSERT INTO `sys_district` VALUES ('1376', '153', '顺河回族区', '0');
INSERT INTO `sys_district` VALUES ('1377', '153', '鼓楼区', '0');
INSERT INTO `sys_district` VALUES ('1378', '153', '南关区', '0');
INSERT INTO `sys_district` VALUES ('1379', '153', '郊区', '0');
INSERT INTO `sys_district` VALUES ('1380', '153', '杞县', '0');
INSERT INTO `sys_district` VALUES ('1381', '153', '通许县', '0');
INSERT INTO `sys_district` VALUES ('1382', '153', '尉氏县', '0');
INSERT INTO `sys_district` VALUES ('1383', '153', '开封县', '0');
INSERT INTO `sys_district` VALUES ('1384', '153', '兰考县', '0');
INSERT INTO `sys_district` VALUES ('1385', '154', '老城区', '0');
INSERT INTO `sys_district` VALUES ('1386', '154', '西工区', '0');
INSERT INTO `sys_district` VALUES ('1387', '154', '廛河回族区', '0');
INSERT INTO `sys_district` VALUES ('1388', '154', '涧西区', '0');
INSERT INTO `sys_district` VALUES ('1389', '154', '吉利区', '0');
INSERT INTO `sys_district` VALUES ('1390', '154', '洛龙区', '0');
INSERT INTO `sys_district` VALUES ('1391', '154', '孟津县', '0');
INSERT INTO `sys_district` VALUES ('1392', '154', '新安县', '0');
INSERT INTO `sys_district` VALUES ('1393', '154', '栾川县', '0');
INSERT INTO `sys_district` VALUES ('1394', '154', '嵩县', '0');
INSERT INTO `sys_district` VALUES ('1395', '154', '汝阳县', '0');
INSERT INTO `sys_district` VALUES ('1396', '154', '宜阳县', '0');
INSERT INTO `sys_district` VALUES ('1397', '154', '洛宁县', '0');
INSERT INTO `sys_district` VALUES ('1398', '154', '伊川县', '0');
INSERT INTO `sys_district` VALUES ('1399', '154', '偃师市', '0');
INSERT INTO `sys_district` VALUES ('1400', '155', '新华区', '0');
INSERT INTO `sys_district` VALUES ('1401', '155', '卫东区', '0');
INSERT INTO `sys_district` VALUES ('1402', '155', '石龙区', '0');
INSERT INTO `sys_district` VALUES ('1403', '155', '湛河区', '0');
INSERT INTO `sys_district` VALUES ('1404', '155', '宝丰县', '0');
INSERT INTO `sys_district` VALUES ('1405', '155', '叶县', '0');
INSERT INTO `sys_district` VALUES ('1406', '155', '鲁山县', '0');
INSERT INTO `sys_district` VALUES ('1407', '155', '郏县', '0');
INSERT INTO `sys_district` VALUES ('1408', '155', '舞钢市', '0');
INSERT INTO `sys_district` VALUES ('1409', '155', '汝州市', '0');
INSERT INTO `sys_district` VALUES ('1410', '156', '文峰区', '0');
INSERT INTO `sys_district` VALUES ('1411', '156', '北关区', '0');
INSERT INTO `sys_district` VALUES ('1412', '156', '殷都区', '0');
INSERT INTO `sys_district` VALUES ('1413', '156', '龙安区', '0');
INSERT INTO `sys_district` VALUES ('1414', '156', '安阳县', '0');
INSERT INTO `sys_district` VALUES ('1415', '156', '汤阴县', '0');
INSERT INTO `sys_district` VALUES ('1416', '156', '滑县', '0');
INSERT INTO `sys_district` VALUES ('1417', '156', '内黄县', '0');
INSERT INTO `sys_district` VALUES ('1418', '156', '林州市', '0');
INSERT INTO `sys_district` VALUES ('1419', '157', '鹤山区', '0');
INSERT INTO `sys_district` VALUES ('1420', '157', '山城区', '0');
INSERT INTO `sys_district` VALUES ('1421', '157', '淇滨区', '0');
INSERT INTO `sys_district` VALUES ('1422', '157', '浚县', '0');
INSERT INTO `sys_district` VALUES ('1423', '157', '淇县', '0');
INSERT INTO `sys_district` VALUES ('1424', '158', '红旗区', '0');
INSERT INTO `sys_district` VALUES ('1425', '158', '卫滨区', '0');
INSERT INTO `sys_district` VALUES ('1426', '158', '凤泉区', '0');
INSERT INTO `sys_district` VALUES ('1427', '158', '牧野区', '0');
INSERT INTO `sys_district` VALUES ('1428', '158', '新乡县', '0');
INSERT INTO `sys_district` VALUES ('1429', '158', '获嘉县', '0');
INSERT INTO `sys_district` VALUES ('1430', '158', '原阳县', '0');
INSERT INTO `sys_district` VALUES ('1431', '158', '延津县', '0');
INSERT INTO `sys_district` VALUES ('1432', '158', '封丘县', '0');
INSERT INTO `sys_district` VALUES ('1433', '158', '长垣县', '0');
INSERT INTO `sys_district` VALUES ('1434', '158', '卫辉市', '0');
INSERT INTO `sys_district` VALUES ('1435', '158', '辉县市', '0');
INSERT INTO `sys_district` VALUES ('1436', '159', '解放区', '0');
INSERT INTO `sys_district` VALUES ('1437', '159', '中站区', '0');
INSERT INTO `sys_district` VALUES ('1438', '159', '马村区', '0');
INSERT INTO `sys_district` VALUES ('1439', '159', '山阳区', '0');
INSERT INTO `sys_district` VALUES ('1440', '159', '修武县', '0');
INSERT INTO `sys_district` VALUES ('1441', '159', '博爱县', '0');
INSERT INTO `sys_district` VALUES ('1442', '159', '武陟县', '0');
INSERT INTO `sys_district` VALUES ('1443', '159', '温县', '0');
INSERT INTO `sys_district` VALUES ('1444', '159', '济源市', '0');
INSERT INTO `sys_district` VALUES ('1445', '159', '沁阳市', '0');
INSERT INTO `sys_district` VALUES ('1446', '159', '孟州市', '0');
INSERT INTO `sys_district` VALUES ('1447', '160', '华龙区', '0');
INSERT INTO `sys_district` VALUES ('1448', '160', '清丰县', '0');
INSERT INTO `sys_district` VALUES ('1449', '160', '南乐县', '0');
INSERT INTO `sys_district` VALUES ('1450', '160', '范县', '0');
INSERT INTO `sys_district` VALUES ('1451', '160', '台前县', '0');
INSERT INTO `sys_district` VALUES ('1452', '160', '濮阳县', '0');
INSERT INTO `sys_district` VALUES ('1453', '161', '魏都区', '0');
INSERT INTO `sys_district` VALUES ('1454', '161', '许昌县', '0');
INSERT INTO `sys_district` VALUES ('1455', '161', '鄢陵县', '0');
INSERT INTO `sys_district` VALUES ('1456', '161', '襄城县', '0');
INSERT INTO `sys_district` VALUES ('1457', '161', '禹州市', '0');
INSERT INTO `sys_district` VALUES ('1458', '161', '长葛市', '0');
INSERT INTO `sys_district` VALUES ('1459', '162', '源汇区', '0');
INSERT INTO `sys_district` VALUES ('1460', '162', '郾城区', '0');
INSERT INTO `sys_district` VALUES ('1461', '162', '召陵区', '0');
INSERT INTO `sys_district` VALUES ('1462', '162', '舞阳县', '0');
INSERT INTO `sys_district` VALUES ('1463', '162', '临颍县', '0');
INSERT INTO `sys_district` VALUES ('1464', '163', '市辖区', '0');
INSERT INTO `sys_district` VALUES ('1465', '163', '湖滨区', '0');
INSERT INTO `sys_district` VALUES ('1466', '163', '渑池县', '0');
INSERT INTO `sys_district` VALUES ('1467', '163', '陕县', '0');
INSERT INTO `sys_district` VALUES ('1468', '163', '卢氏县', '0');
INSERT INTO `sys_district` VALUES ('1469', '163', '义马市', '0');
INSERT INTO `sys_district` VALUES ('1470', '163', '灵宝市', '0');
INSERT INTO `sys_district` VALUES ('1471', '164', '宛城区', '0');
INSERT INTO `sys_district` VALUES ('1472', '164', '卧龙区', '0');
INSERT INTO `sys_district` VALUES ('1473', '164', '南召县', '0');
INSERT INTO `sys_district` VALUES ('1474', '164', '方城县', '0');
INSERT INTO `sys_district` VALUES ('1475', '164', '西峡县', '0');
INSERT INTO `sys_district` VALUES ('1476', '164', '镇平县', '0');
INSERT INTO `sys_district` VALUES ('1477', '164', '内乡县', '0');
INSERT INTO `sys_district` VALUES ('1478', '164', '淅川县', '0');
INSERT INTO `sys_district` VALUES ('1479', '164', '社旗县', '0');
INSERT INTO `sys_district` VALUES ('1480', '164', '唐河县', '0');
INSERT INTO `sys_district` VALUES ('1481', '164', '新野县', '0');
INSERT INTO `sys_district` VALUES ('1482', '164', '桐柏县', '0');
INSERT INTO `sys_district` VALUES ('1483', '164', '邓州市', '0');
INSERT INTO `sys_district` VALUES ('1484', '165', '梁园区', '0');
INSERT INTO `sys_district` VALUES ('1485', '165', '睢阳区', '0');
INSERT INTO `sys_district` VALUES ('1486', '165', '民权县', '0');
INSERT INTO `sys_district` VALUES ('1487', '165', '睢县', '0');
INSERT INTO `sys_district` VALUES ('1488', '165', '宁陵县', '0');
INSERT INTO `sys_district` VALUES ('1489', '165', '柘城县', '0');
INSERT INTO `sys_district` VALUES ('1490', '165', '虞城县', '0');
INSERT INTO `sys_district` VALUES ('1491', '165', '夏邑县', '0');
INSERT INTO `sys_district` VALUES ('1492', '165', '永城市', '0');
INSERT INTO `sys_district` VALUES ('1493', '166', '浉河区', '0');
INSERT INTO `sys_district` VALUES ('1494', '166', '平桥区', '0');
INSERT INTO `sys_district` VALUES ('1495', '166', '罗山县', '0');
INSERT INTO `sys_district` VALUES ('1496', '166', '光山县', '0');
INSERT INTO `sys_district` VALUES ('1497', '166', '新县', '0');
INSERT INTO `sys_district` VALUES ('1498', '166', '商城县', '0');
INSERT INTO `sys_district` VALUES ('1499', '166', '固始县', '0');
INSERT INTO `sys_district` VALUES ('1500', '166', '潢川县', '0');
INSERT INTO `sys_district` VALUES ('1501', '166', '淮滨县', '0');
INSERT INTO `sys_district` VALUES ('1502', '166', '息县', '0');
INSERT INTO `sys_district` VALUES ('1503', '167', '川汇区', '0');
INSERT INTO `sys_district` VALUES ('1504', '167', '扶沟县', '0');
INSERT INTO `sys_district` VALUES ('1505', '167', '西华县', '0');
INSERT INTO `sys_district` VALUES ('1506', '167', '商水县', '0');
INSERT INTO `sys_district` VALUES ('1507', '167', '沈丘县', '0');
INSERT INTO `sys_district` VALUES ('1508', '167', '郸城县', '0');
INSERT INTO `sys_district` VALUES ('1509', '167', '淮阳县', '0');
INSERT INTO `sys_district` VALUES ('1510', '167', '太康县', '0');
INSERT INTO `sys_district` VALUES ('1511', '167', '鹿邑县', '0');
INSERT INTO `sys_district` VALUES ('1512', '167', '项城市', '0');
INSERT INTO `sys_district` VALUES ('1513', '168', '驿城区', '0');
INSERT INTO `sys_district` VALUES ('1514', '168', '西平县', '0');
INSERT INTO `sys_district` VALUES ('1515', '168', '上蔡县', '0');
INSERT INTO `sys_district` VALUES ('1516', '168', '平舆县', '0');
INSERT INTO `sys_district` VALUES ('1517', '168', '正阳县', '0');
INSERT INTO `sys_district` VALUES ('1518', '168', '确山县', '0');
INSERT INTO `sys_district` VALUES ('1519', '168', '泌阳县', '0');
INSERT INTO `sys_district` VALUES ('1520', '168', '汝南县', '0');
INSERT INTO `sys_district` VALUES ('1521', '168', '遂平县', '0');
INSERT INTO `sys_district` VALUES ('1522', '168', '新蔡县', '0');
INSERT INTO `sys_district` VALUES ('1523', '169', '江岸区', '0');
INSERT INTO `sys_district` VALUES ('1524', '169', '江汉区', '0');
INSERT INTO `sys_district` VALUES ('1525', '169', '硚口区', '0');
INSERT INTO `sys_district` VALUES ('1526', '169', '汉阳区', '0');
INSERT INTO `sys_district` VALUES ('1527', '169', '武昌区', '0');
INSERT INTO `sys_district` VALUES ('1528', '169', '青山区', '0');
INSERT INTO `sys_district` VALUES ('1529', '169', '洪山区', '0');
INSERT INTO `sys_district` VALUES ('1530', '169', '东西湖区', '0');
INSERT INTO `sys_district` VALUES ('1531', '169', '汉南区', '0');
INSERT INTO `sys_district` VALUES ('1532', '169', '蔡甸区', '0');
INSERT INTO `sys_district` VALUES ('1533', '169', '江夏区', '0');
INSERT INTO `sys_district` VALUES ('1534', '169', '黄陂区', '0');
INSERT INTO `sys_district` VALUES ('1535', '169', '新洲区', '0');
INSERT INTO `sys_district` VALUES ('1536', '170', '黄石港区', '0');
INSERT INTO `sys_district` VALUES ('1537', '170', '西塞山区', '0');
INSERT INTO `sys_district` VALUES ('1538', '170', '下陆区', '0');
INSERT INTO `sys_district` VALUES ('1539', '170', '铁山区', '0');
INSERT INTO `sys_district` VALUES ('1540', '170', '阳新县', '0');
INSERT INTO `sys_district` VALUES ('1541', '170', '大冶市', '0');
INSERT INTO `sys_district` VALUES ('1542', '171', '茅箭区', '0');
INSERT INTO `sys_district` VALUES ('1543', '171', '张湾区', '0');
INSERT INTO `sys_district` VALUES ('1544', '171', '郧县', '0');
INSERT INTO `sys_district` VALUES ('1545', '171', '郧西县', '0');
INSERT INTO `sys_district` VALUES ('1546', '171', '竹山县', '0');
INSERT INTO `sys_district` VALUES ('1547', '171', '竹溪县', '0');
INSERT INTO `sys_district` VALUES ('1548', '171', '房县', '0');
INSERT INTO `sys_district` VALUES ('1549', '171', '丹江口市', '0');
INSERT INTO `sys_district` VALUES ('1550', '172', '西陵区', '0');
INSERT INTO `sys_district` VALUES ('1551', '172', '伍家岗区', '0');
INSERT INTO `sys_district` VALUES ('1552', '172', '点军区', '0');
INSERT INTO `sys_district` VALUES ('1553', '172', '猇亭区', '0');
INSERT INTO `sys_district` VALUES ('1554', '172', '夷陵区', '0');
INSERT INTO `sys_district` VALUES ('1555', '172', '远安县', '0');
INSERT INTO `sys_district` VALUES ('1556', '172', '兴山县', '0');
INSERT INTO `sys_district` VALUES ('1557', '172', '秭归县', '0');
INSERT INTO `sys_district` VALUES ('1558', '172', '长阳土家族自治县', '0');
INSERT INTO `sys_district` VALUES ('1559', '172', '五峰土家族自治县', '0');
INSERT INTO `sys_district` VALUES ('1560', '172', '宜都市', '0');
INSERT INTO `sys_district` VALUES ('1561', '172', '当阳市', '0');
INSERT INTO `sys_district` VALUES ('1562', '172', '枝江市', '0');
INSERT INTO `sys_district` VALUES ('1563', '173', '襄城区', '0');
INSERT INTO `sys_district` VALUES ('1564', '173', '樊城区', '0');
INSERT INTO `sys_district` VALUES ('1565', '173', '襄阳区', '0');
INSERT INTO `sys_district` VALUES ('1566', '173', '南漳县', '0');
INSERT INTO `sys_district` VALUES ('1567', '173', '谷城县', '0');
INSERT INTO `sys_district` VALUES ('1568', '173', '保康县', '0');
INSERT INTO `sys_district` VALUES ('1569', '173', '老河口市', '0');
INSERT INTO `sys_district` VALUES ('1570', '173', '枣阳市', '0');
INSERT INTO `sys_district` VALUES ('1571', '173', '宜城市', '0');
INSERT INTO `sys_district` VALUES ('1572', '174', '梁子湖区', '0');
INSERT INTO `sys_district` VALUES ('1573', '174', '华容区', '0');
INSERT INTO `sys_district` VALUES ('1574', '174', '鄂城区', '0');
INSERT INTO `sys_district` VALUES ('1575', '175', '东宝区', '0');
INSERT INTO `sys_district` VALUES ('1576', '175', '掇刀区', '0');
INSERT INTO `sys_district` VALUES ('1577', '175', '京山县', '0');
INSERT INTO `sys_district` VALUES ('1578', '175', '沙洋县', '0');
INSERT INTO `sys_district` VALUES ('1579', '175', '钟祥市', '0');
INSERT INTO `sys_district` VALUES ('1580', '176', '孝南区', '0');
INSERT INTO `sys_district` VALUES ('1581', '176', '孝昌县', '0');
INSERT INTO `sys_district` VALUES ('1582', '176', '大悟县', '0');
INSERT INTO `sys_district` VALUES ('1583', '176', '云梦县', '0');
INSERT INTO `sys_district` VALUES ('1584', '176', '应城市', '0');
INSERT INTO `sys_district` VALUES ('1585', '176', '安陆市', '0');
INSERT INTO `sys_district` VALUES ('1586', '176', '汉川市', '0');
INSERT INTO `sys_district` VALUES ('1587', '177', '沙市区', '0');
INSERT INTO `sys_district` VALUES ('1588', '177', '荆州区', '0');
INSERT INTO `sys_district` VALUES ('1589', '177', '公安县', '0');
INSERT INTO `sys_district` VALUES ('1590', '177', '监利县', '0');
INSERT INTO `sys_district` VALUES ('1591', '177', '江陵县', '0');
INSERT INTO `sys_district` VALUES ('1592', '177', '石首市', '0');
INSERT INTO `sys_district` VALUES ('1593', '177', '洪湖市', '0');
INSERT INTO `sys_district` VALUES ('1594', '177', '松滋市', '0');
INSERT INTO `sys_district` VALUES ('1595', '178', '黄州区', '0');
INSERT INTO `sys_district` VALUES ('1596', '178', '团风县', '0');
INSERT INTO `sys_district` VALUES ('1597', '178', '红安县', '0');
INSERT INTO `sys_district` VALUES ('1598', '178', '罗田县', '0');
INSERT INTO `sys_district` VALUES ('1599', '178', '英山县', '0');
INSERT INTO `sys_district` VALUES ('1600', '178', '浠水县', '0');
INSERT INTO `sys_district` VALUES ('1601', '178', '蕲春县', '0');
INSERT INTO `sys_district` VALUES ('1602', '178', '黄梅县', '0');
INSERT INTO `sys_district` VALUES ('1603', '178', '麻城市', '0');
INSERT INTO `sys_district` VALUES ('1604', '178', '武穴市', '0');
INSERT INTO `sys_district` VALUES ('1605', '179', '咸安区', '0');
INSERT INTO `sys_district` VALUES ('1606', '179', '嘉鱼县', '0');
INSERT INTO `sys_district` VALUES ('1607', '179', '通城县', '0');
INSERT INTO `sys_district` VALUES ('1608', '179', '崇阳县', '0');
INSERT INTO `sys_district` VALUES ('1609', '179', '通山县', '0');
INSERT INTO `sys_district` VALUES ('1610', '179', '赤壁市', '0');
INSERT INTO `sys_district` VALUES ('1611', '180', '曾都区', '0');
INSERT INTO `sys_district` VALUES ('1612', '180', '广水市', '0');
INSERT INTO `sys_district` VALUES ('1613', '181', '恩施市', '0');
INSERT INTO `sys_district` VALUES ('1614', '181', '利川市', '0');
INSERT INTO `sys_district` VALUES ('1615', '181', '建始县', '0');
INSERT INTO `sys_district` VALUES ('1616', '181', '巴东县', '0');
INSERT INTO `sys_district` VALUES ('1617', '181', '宣恩县', '0');
INSERT INTO `sys_district` VALUES ('1618', '181', '咸丰县', '0');
INSERT INTO `sys_district` VALUES ('1619', '181', '来凤县', '0');
INSERT INTO `sys_district` VALUES ('1620', '181', '鹤峰县', '0');
INSERT INTO `sys_district` VALUES ('1621', '182', '仙桃市', '0');
INSERT INTO `sys_district` VALUES ('1622', '182', '潜江市', '0');
INSERT INTO `sys_district` VALUES ('1623', '182', '天门市', '0');
INSERT INTO `sys_district` VALUES ('1624', '182', '神农架林区', '0');
INSERT INTO `sys_district` VALUES ('1625', '183', '芙蓉区', '0');
INSERT INTO `sys_district` VALUES ('1626', '183', '天心区', '0');
INSERT INTO `sys_district` VALUES ('1627', '183', '岳麓区', '0');
INSERT INTO `sys_district` VALUES ('1628', '183', '开福区', '0');
INSERT INTO `sys_district` VALUES ('1629', '183', '雨花区', '0');
INSERT INTO `sys_district` VALUES ('1630', '183', '长沙县', '0');
INSERT INTO `sys_district` VALUES ('1631', '183', '望城县', '0');
INSERT INTO `sys_district` VALUES ('1632', '183', '宁乡县', '0');
INSERT INTO `sys_district` VALUES ('1633', '183', '浏阳市', '0');
INSERT INTO `sys_district` VALUES ('1634', '184', '荷塘区', '0');
INSERT INTO `sys_district` VALUES ('1635', '184', '芦淞区', '0');
INSERT INTO `sys_district` VALUES ('1636', '184', '石峰区', '0');
INSERT INTO `sys_district` VALUES ('1637', '184', '天元区', '0');
INSERT INTO `sys_district` VALUES ('1638', '184', '株洲县', '0');
INSERT INTO `sys_district` VALUES ('1639', '184', '攸县', '0');
INSERT INTO `sys_district` VALUES ('1640', '184', '茶陵县', '0');
INSERT INTO `sys_district` VALUES ('1641', '184', '炎陵县', '0');
INSERT INTO `sys_district` VALUES ('1642', '184', '醴陵市', '0');
INSERT INTO `sys_district` VALUES ('1643', '185', '雨湖区', '0');
INSERT INTO `sys_district` VALUES ('1644', '185', '岳塘区', '0');
INSERT INTO `sys_district` VALUES ('1645', '185', '湘潭县', '0');
INSERT INTO `sys_district` VALUES ('1646', '185', '湘乡市', '0');
INSERT INTO `sys_district` VALUES ('1647', '185', '韶山市', '0');
INSERT INTO `sys_district` VALUES ('1648', '186', '珠晖区', '0');
INSERT INTO `sys_district` VALUES ('1649', '186', '雁峰区', '0');
INSERT INTO `sys_district` VALUES ('1650', '186', '石鼓区', '0');
INSERT INTO `sys_district` VALUES ('1651', '186', '蒸湘区', '0');
INSERT INTO `sys_district` VALUES ('1652', '186', '南岳区', '0');
INSERT INTO `sys_district` VALUES ('1653', '186', '衡阳县', '0');
INSERT INTO `sys_district` VALUES ('1654', '186', '衡南县', '0');
INSERT INTO `sys_district` VALUES ('1655', '186', '衡山县', '0');
INSERT INTO `sys_district` VALUES ('1656', '186', '衡东县', '0');
INSERT INTO `sys_district` VALUES ('1657', '186', '祁东县', '0');
INSERT INTO `sys_district` VALUES ('1658', '186', '耒阳市', '0');
INSERT INTO `sys_district` VALUES ('1659', '186', '常宁市', '0');
INSERT INTO `sys_district` VALUES ('1660', '187', '双清区', '0');
INSERT INTO `sys_district` VALUES ('1661', '187', '大祥区', '0');
INSERT INTO `sys_district` VALUES ('1662', '187', '北塔区', '0');
INSERT INTO `sys_district` VALUES ('1663', '187', '邵东县', '0');
INSERT INTO `sys_district` VALUES ('1664', '187', '新邵县', '0');
INSERT INTO `sys_district` VALUES ('1665', '187', '邵阳县', '0');
INSERT INTO `sys_district` VALUES ('1666', '187', '隆回县', '0');
INSERT INTO `sys_district` VALUES ('1667', '187', '洞口县', '0');
INSERT INTO `sys_district` VALUES ('1668', '187', '绥宁县', '0');
INSERT INTO `sys_district` VALUES ('1669', '187', '新宁县', '0');
INSERT INTO `sys_district` VALUES ('1670', '187', '城步苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1671', '187', '武冈市', '0');
INSERT INTO `sys_district` VALUES ('1672', '188', '岳阳楼区', '0');
INSERT INTO `sys_district` VALUES ('1673', '188', '云溪区', '0');
INSERT INTO `sys_district` VALUES ('1674', '188', '君山区', '0');
INSERT INTO `sys_district` VALUES ('1675', '188', '岳阳县', '0');
INSERT INTO `sys_district` VALUES ('1676', '188', '华容县', '0');
INSERT INTO `sys_district` VALUES ('1677', '188', '湘阴县', '0');
INSERT INTO `sys_district` VALUES ('1678', '188', '平江县', '0');
INSERT INTO `sys_district` VALUES ('1679', '188', '汨罗市', '0');
INSERT INTO `sys_district` VALUES ('1680', '188', '临湘市', '0');
INSERT INTO `sys_district` VALUES ('1681', '189', '武陵区', '0');
INSERT INTO `sys_district` VALUES ('1682', '189', '鼎城区', '0');
INSERT INTO `sys_district` VALUES ('1683', '189', '安乡县', '0');
INSERT INTO `sys_district` VALUES ('1684', '189', '汉寿县', '0');
INSERT INTO `sys_district` VALUES ('1685', '189', '澧县', '0');
INSERT INTO `sys_district` VALUES ('1686', '189', '临澧县', '0');
INSERT INTO `sys_district` VALUES ('1687', '189', '桃源县', '0');
INSERT INTO `sys_district` VALUES ('1688', '189', '石门县', '0');
INSERT INTO `sys_district` VALUES ('1689', '189', '津市市', '0');
INSERT INTO `sys_district` VALUES ('1690', '190', '永定区', '0');
INSERT INTO `sys_district` VALUES ('1691', '190', '武陵源区', '0');
INSERT INTO `sys_district` VALUES ('1692', '190', '慈利县', '0');
INSERT INTO `sys_district` VALUES ('1693', '190', '桑植县', '0');
INSERT INTO `sys_district` VALUES ('1694', '191', '资阳区', '0');
INSERT INTO `sys_district` VALUES ('1695', '191', '赫山区', '0');
INSERT INTO `sys_district` VALUES ('1696', '191', '南县', '0');
INSERT INTO `sys_district` VALUES ('1697', '191', '桃江县', '0');
INSERT INTO `sys_district` VALUES ('1698', '191', '安化县', '0');
INSERT INTO `sys_district` VALUES ('1699', '191', '沅江市', '0');
INSERT INTO `sys_district` VALUES ('1700', '192', '北湖区', '0');
INSERT INTO `sys_district` VALUES ('1701', '192', '苏仙区', '0');
INSERT INTO `sys_district` VALUES ('1702', '192', '桂阳县', '0');
INSERT INTO `sys_district` VALUES ('1703', '192', '宜章县', '0');
INSERT INTO `sys_district` VALUES ('1704', '192', '永兴县', '0');
INSERT INTO `sys_district` VALUES ('1705', '192', '嘉禾县', '0');
INSERT INTO `sys_district` VALUES ('1706', '192', '临武县', '0');
INSERT INTO `sys_district` VALUES ('1707', '192', '汝城县', '0');
INSERT INTO `sys_district` VALUES ('1708', '192', '桂东县', '0');
INSERT INTO `sys_district` VALUES ('1709', '192', '安仁县', '0');
INSERT INTO `sys_district` VALUES ('1710', '192', '资兴市', '0');
INSERT INTO `sys_district` VALUES ('1711', '193', '芝山区', '0');
INSERT INTO `sys_district` VALUES ('1712', '193', '冷水滩区', '0');
INSERT INTO `sys_district` VALUES ('1713', '193', '祁阳县', '0');
INSERT INTO `sys_district` VALUES ('1714', '193', '东安县', '0');
INSERT INTO `sys_district` VALUES ('1715', '193', '双牌县', '0');
INSERT INTO `sys_district` VALUES ('1716', '193', '道县', '0');
INSERT INTO `sys_district` VALUES ('1717', '193', '江永县', '0');
INSERT INTO `sys_district` VALUES ('1718', '193', '宁远县', '0');
INSERT INTO `sys_district` VALUES ('1719', '193', '蓝山县', '0');
INSERT INTO `sys_district` VALUES ('1720', '193', '新田县', '0');
INSERT INTO `sys_district` VALUES ('1721', '193', '江华瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1722', '194', '鹤城区', '0');
INSERT INTO `sys_district` VALUES ('1723', '194', '中方县', '0');
INSERT INTO `sys_district` VALUES ('1724', '194', '沅陵县', '0');
INSERT INTO `sys_district` VALUES ('1725', '194', '辰溪县', '0');
INSERT INTO `sys_district` VALUES ('1726', '194', '溆浦县', '0');
INSERT INTO `sys_district` VALUES ('1727', '194', '会同县', '0');
INSERT INTO `sys_district` VALUES ('1728', '194', '麻阳苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1729', '194', '新晃侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1730', '194', '芷江侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1731', '194', '靖州苗族侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1732', '194', '通道侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1733', '194', '洪江市', '0');
INSERT INTO `sys_district` VALUES ('1734', '195', '娄星区', '0');
INSERT INTO `sys_district` VALUES ('1735', '195', '双峰县', '0');
INSERT INTO `sys_district` VALUES ('1736', '195', '新化县', '0');
INSERT INTO `sys_district` VALUES ('1737', '195', '冷水江市', '0');
INSERT INTO `sys_district` VALUES ('1738', '195', '涟源市', '0');
INSERT INTO `sys_district` VALUES ('1739', '196', '吉首市', '0');
INSERT INTO `sys_district` VALUES ('1740', '196', '泸溪县', '0');
INSERT INTO `sys_district` VALUES ('1741', '196', '凤凰县', '0');
INSERT INTO `sys_district` VALUES ('1742', '196', '花垣县', '0');
INSERT INTO `sys_district` VALUES ('1743', '196', '保靖县', '0');
INSERT INTO `sys_district` VALUES ('1744', '196', '古丈县', '0');
INSERT INTO `sys_district` VALUES ('1745', '196', '永顺县', '0');
INSERT INTO `sys_district` VALUES ('1746', '196', '龙山县', '0');
INSERT INTO `sys_district` VALUES ('1747', '197', '东山区', '0');
INSERT INTO `sys_district` VALUES ('1748', '197', '荔湾区', '0');
INSERT INTO `sys_district` VALUES ('1749', '197', '越秀区', '0');
INSERT INTO `sys_district` VALUES ('1750', '197', '海珠区', '0');
INSERT INTO `sys_district` VALUES ('1751', '197', '天河区', '0');
INSERT INTO `sys_district` VALUES ('1752', '197', '芳村区', '0');
INSERT INTO `sys_district` VALUES ('1753', '197', '白云区', '0');
INSERT INTO `sys_district` VALUES ('1754', '197', '黄埔区', '0');
INSERT INTO `sys_district` VALUES ('1755', '197', '番禺区', '0');
INSERT INTO `sys_district` VALUES ('1756', '197', '花都区', '0');
INSERT INTO `sys_district` VALUES ('1757', '197', '增城市', '0');
INSERT INTO `sys_district` VALUES ('1759', '198', '武江区', '0');
INSERT INTO `sys_district` VALUES ('1760', '198', '浈江区', '0');
INSERT INTO `sys_district` VALUES ('1761', '198', '曲江区', '0');
INSERT INTO `sys_district` VALUES ('1762', '198', '始兴县', '0');
INSERT INTO `sys_district` VALUES ('1763', '198', '仁化县', '0');
INSERT INTO `sys_district` VALUES ('1764', '198', '翁源县', '0');
INSERT INTO `sys_district` VALUES ('1765', '198', '乳源瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1766', '198', '新丰县', '0');
INSERT INTO `sys_district` VALUES ('1767', '198', '乐昌市', '0');
INSERT INTO `sys_district` VALUES ('1768', '198', '南雄市', '0');
INSERT INTO `sys_district` VALUES ('1769', '199', '罗湖区', '0');
INSERT INTO `sys_district` VALUES ('1770', '199', '福田区', '0');
INSERT INTO `sys_district` VALUES ('1771', '199', '南山区', '0');
INSERT INTO `sys_district` VALUES ('1772', '199', '宝安区', '0');
INSERT INTO `sys_district` VALUES ('1773', '199', '龙岗区', '0');
INSERT INTO `sys_district` VALUES ('1774', '199', '盐田区', '0');
INSERT INTO `sys_district` VALUES ('1775', '200', '香洲区', '0');
INSERT INTO `sys_district` VALUES ('1776', '200', '斗门区', '0');
INSERT INTO `sys_district` VALUES ('1777', '200', '金湾区', '0');
INSERT INTO `sys_district` VALUES ('1778', '201', '龙湖区', '0');
INSERT INTO `sys_district` VALUES ('1779', '201', '金平区', '0');
INSERT INTO `sys_district` VALUES ('1780', '201', '濠江区', '0');
INSERT INTO `sys_district` VALUES ('1781', '201', '潮阳区', '0');
INSERT INTO `sys_district` VALUES ('1782', '201', '潮南区', '0');
INSERT INTO `sys_district` VALUES ('1783', '201', '澄海区', '0');
INSERT INTO `sys_district` VALUES ('1784', '201', '南澳县', '0');
INSERT INTO `sys_district` VALUES ('1785', '202', '禅城区', '0');
INSERT INTO `sys_district` VALUES ('1786', '202', '南海区', '0');
INSERT INTO `sys_district` VALUES ('1787', '202', '顺德区', '0');
INSERT INTO `sys_district` VALUES ('1788', '202', '三水区', '0');
INSERT INTO `sys_district` VALUES ('1789', '202', '高明区', '0');
INSERT INTO `sys_district` VALUES ('1790', '203', '蓬江区', '0');
INSERT INTO `sys_district` VALUES ('1791', '203', '江海区', '0');
INSERT INTO `sys_district` VALUES ('1792', '203', '新会区', '0');
INSERT INTO `sys_district` VALUES ('1793', '203', '台山市', '0');
INSERT INTO `sys_district` VALUES ('1794', '203', '开平市', '0');
INSERT INTO `sys_district` VALUES ('1795', '203', '鹤山市', '0');
INSERT INTO `sys_district` VALUES ('1796', '203', '恩平市', '0');
INSERT INTO `sys_district` VALUES ('1797', '204', '赤坎区', '0');
INSERT INTO `sys_district` VALUES ('1798', '204', '霞山区', '0');
INSERT INTO `sys_district` VALUES ('1799', '204', '坡头区', '0');
INSERT INTO `sys_district` VALUES ('1800', '204', '麻章区', '0');
INSERT INTO `sys_district` VALUES ('1801', '204', '遂溪县', '0');
INSERT INTO `sys_district` VALUES ('1802', '204', '徐闻县', '0');
INSERT INTO `sys_district` VALUES ('1803', '204', '廉江市', '0');
INSERT INTO `sys_district` VALUES ('1804', '204', '雷州市', '0');
INSERT INTO `sys_district` VALUES ('1805', '204', '吴川市', '0');
INSERT INTO `sys_district` VALUES ('1806', '205', '茂南区', '0');
INSERT INTO `sys_district` VALUES ('1807', '205', '茂港区', '0');
INSERT INTO `sys_district` VALUES ('1808', '205', '电白县', '0');
INSERT INTO `sys_district` VALUES ('1809', '205', '高州市', '0');
INSERT INTO `sys_district` VALUES ('1810', '205', '化州市', '0');
INSERT INTO `sys_district` VALUES ('1811', '205', '信宜市', '0');
INSERT INTO `sys_district` VALUES ('1812', '206', '端州区', '0');
INSERT INTO `sys_district` VALUES ('1813', '206', '鼎湖区', '0');
INSERT INTO `sys_district` VALUES ('1814', '206', '广宁县', '0');
INSERT INTO `sys_district` VALUES ('1815', '206', '怀集县', '0');
INSERT INTO `sys_district` VALUES ('1816', '206', '封开县', '0');
INSERT INTO `sys_district` VALUES ('1817', '206', '德庆县', '0');
INSERT INTO `sys_district` VALUES ('1818', '206', '高要市', '0');
INSERT INTO `sys_district` VALUES ('1819', '206', '四会市', '0');
INSERT INTO `sys_district` VALUES ('1820', '207', '惠城区', '0');
INSERT INTO `sys_district` VALUES ('1821', '207', '惠阳区', '0');
INSERT INTO `sys_district` VALUES ('1822', '207', '博罗县', '0');
INSERT INTO `sys_district` VALUES ('1823', '207', '惠东县', '0');
INSERT INTO `sys_district` VALUES ('1824', '207', '龙门县', '0');
INSERT INTO `sys_district` VALUES ('1825', '208', '梅江区', '0');
INSERT INTO `sys_district` VALUES ('1826', '208', '梅县', '0');
INSERT INTO `sys_district` VALUES ('1827', '208', '大埔县', '0');
INSERT INTO `sys_district` VALUES ('1828', '208', '丰顺县', '0');
INSERT INTO `sys_district` VALUES ('1829', '208', '五华县', '0');
INSERT INTO `sys_district` VALUES ('1830', '208', '平远县', '0');
INSERT INTO `sys_district` VALUES ('1831', '208', '蕉岭县', '0');
INSERT INTO `sys_district` VALUES ('1832', '208', '兴宁市', '0');
INSERT INTO `sys_district` VALUES ('1833', '209', '城区', '0');
INSERT INTO `sys_district` VALUES ('1834', '209', '海丰县', '0');
INSERT INTO `sys_district` VALUES ('1835', '209', '陆河县', '0');
INSERT INTO `sys_district` VALUES ('1836', '209', '陆丰市', '0');
INSERT INTO `sys_district` VALUES ('1837', '210', '源城区', '0');
INSERT INTO `sys_district` VALUES ('1838', '210', '紫金县', '0');
INSERT INTO `sys_district` VALUES ('1839', '210', '龙川县', '0');
INSERT INTO `sys_district` VALUES ('1840', '210', '连平县', '0');
INSERT INTO `sys_district` VALUES ('1841', '210', '和平县', '0');
INSERT INTO `sys_district` VALUES ('1842', '210', '东源县', '0');
INSERT INTO `sys_district` VALUES ('1843', '211', '江城区', '0');
INSERT INTO `sys_district` VALUES ('1844', '211', '阳西县', '0');
INSERT INTO `sys_district` VALUES ('1845', '211', '阳东县', '0');
INSERT INTO `sys_district` VALUES ('1846', '211', '阳春市', '0');
INSERT INTO `sys_district` VALUES ('1847', '212', '清城区', '0');
INSERT INTO `sys_district` VALUES ('1848', '212', '佛冈县', '0');
INSERT INTO `sys_district` VALUES ('1849', '212', '阳山县', '0');
INSERT INTO `sys_district` VALUES ('1850', '212', '连山壮族瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1851', '212', '连南瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1852', '212', '清新县', '0');
INSERT INTO `sys_district` VALUES ('1853', '212', '英德市', '0');
INSERT INTO `sys_district` VALUES ('1854', '212', '连州市', '0');
INSERT INTO `sys_district` VALUES ('1855', '215', '湘桥区', '0');
INSERT INTO `sys_district` VALUES ('1856', '215', '潮安县', '0');
INSERT INTO `sys_district` VALUES ('1857', '215', '饶平县', '0');
INSERT INTO `sys_district` VALUES ('1858', '216', '榕城区', '0');
INSERT INTO `sys_district` VALUES ('1859', '216', '揭东县', '0');
INSERT INTO `sys_district` VALUES ('1860', '216', '揭西县', '0');
INSERT INTO `sys_district` VALUES ('1861', '216', '惠来县', '0');
INSERT INTO `sys_district` VALUES ('1862', '216', '普宁市', '0');
INSERT INTO `sys_district` VALUES ('1863', '217', '云城区', '0');
INSERT INTO `sys_district` VALUES ('1864', '217', '新兴县', '0');
INSERT INTO `sys_district` VALUES ('1865', '217', '郁南县', '0');
INSERT INTO `sys_district` VALUES ('1866', '217', '云安县', '0');
INSERT INTO `sys_district` VALUES ('1867', '217', '罗定市', '0');
INSERT INTO `sys_district` VALUES ('1868', '218', '兴宁区', '0');
INSERT INTO `sys_district` VALUES ('1869', '218', '青秀区', '0');
INSERT INTO `sys_district` VALUES ('1870', '218', '江南区', '0');
INSERT INTO `sys_district` VALUES ('1871', '218', '西乡塘区', '0');
INSERT INTO `sys_district` VALUES ('1872', '218', '良庆区', '0');
INSERT INTO `sys_district` VALUES ('1873', '218', '邕宁区', '0');
INSERT INTO `sys_district` VALUES ('1874', '218', '武鸣县', '0');
INSERT INTO `sys_district` VALUES ('1875', '218', '隆安县', '0');
INSERT INTO `sys_district` VALUES ('1876', '218', '马山县', '0');
INSERT INTO `sys_district` VALUES ('1877', '218', '上林县', '0');
INSERT INTO `sys_district` VALUES ('1878', '218', '宾阳县', '0');
INSERT INTO `sys_district` VALUES ('1879', '218', '横县', '0');
INSERT INTO `sys_district` VALUES ('1880', '219', '城中区', '0');
INSERT INTO `sys_district` VALUES ('1881', '219', '鱼峰区', '0');
INSERT INTO `sys_district` VALUES ('1882', '219', '柳南区', '0');
INSERT INTO `sys_district` VALUES ('1883', '219', '柳北区', '0');
INSERT INTO `sys_district` VALUES ('1884', '219', '柳江县', '0');
INSERT INTO `sys_district` VALUES ('1885', '219', '柳城县', '0');
INSERT INTO `sys_district` VALUES ('1886', '219', '鹿寨县', '0');
INSERT INTO `sys_district` VALUES ('1887', '219', '融安县', '0');
INSERT INTO `sys_district` VALUES ('1888', '219', '融水苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1889', '219', '三江侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1890', '220', '秀峰区', '0');
INSERT INTO `sys_district` VALUES ('1891', '220', '叠彩区', '0');
INSERT INTO `sys_district` VALUES ('1892', '220', '象山区', '0');
INSERT INTO `sys_district` VALUES ('1893', '220', '七星区', '0');
INSERT INTO `sys_district` VALUES ('1894', '220', '雁山区', '0');
INSERT INTO `sys_district` VALUES ('1895', '220', '阳朔县', '0');
INSERT INTO `sys_district` VALUES ('1896', '220', '临桂县', '0');
INSERT INTO `sys_district` VALUES ('1897', '220', '灵川县', '0');
INSERT INTO `sys_district` VALUES ('1898', '220', '全州县', '0');
INSERT INTO `sys_district` VALUES ('1899', '220', '兴安县', '0');
INSERT INTO `sys_district` VALUES ('1900', '220', '永福县', '0');
INSERT INTO `sys_district` VALUES ('1901', '220', '灌阳县', '0');
INSERT INTO `sys_district` VALUES ('1902', '220', '龙胜各族自治县', '0');
INSERT INTO `sys_district` VALUES ('1903', '220', '资源县', '0');
INSERT INTO `sys_district` VALUES ('1904', '220', '平乐县', '0');
INSERT INTO `sys_district` VALUES ('1905', '220', '荔蒲县', '0');
INSERT INTO `sys_district` VALUES ('1906', '220', '恭城瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1907', '221', '万秀区', '0');
INSERT INTO `sys_district` VALUES ('1908', '221', '蝶山区', '0');
INSERT INTO `sys_district` VALUES ('1909', '221', '长洲区', '0');
INSERT INTO `sys_district` VALUES ('1910', '221', '苍梧县', '0');
INSERT INTO `sys_district` VALUES ('1911', '221', '藤县', '0');
INSERT INTO `sys_district` VALUES ('1912', '221', '蒙山县', '0');
INSERT INTO `sys_district` VALUES ('1913', '221', '岑溪市', '0');
INSERT INTO `sys_district` VALUES ('1914', '222', '海城区', '0');
INSERT INTO `sys_district` VALUES ('1915', '222', '银海区', '0');
INSERT INTO `sys_district` VALUES ('1916', '222', '铁山港区', '0');
INSERT INTO `sys_district` VALUES ('1917', '222', '合浦县', '0');
INSERT INTO `sys_district` VALUES ('1918', '223', '港口区', '0');
INSERT INTO `sys_district` VALUES ('1919', '223', '防城区', '0');
INSERT INTO `sys_district` VALUES ('1920', '223', '上思县', '0');
INSERT INTO `sys_district` VALUES ('1921', '223', '东兴市', '0');
INSERT INTO `sys_district` VALUES ('1922', '224', '钦南区', '0');
INSERT INTO `sys_district` VALUES ('1923', '224', '钦北区', '0');
INSERT INTO `sys_district` VALUES ('1924', '224', '灵山县', '0');
INSERT INTO `sys_district` VALUES ('1925', '224', '浦北县', '0');
INSERT INTO `sys_district` VALUES ('1926', '225', '港北区', '0');
INSERT INTO `sys_district` VALUES ('1927', '225', '港南区', '0');
INSERT INTO `sys_district` VALUES ('1928', '225', '覃塘区', '0');
INSERT INTO `sys_district` VALUES ('1929', '225', '平南县', '0');
INSERT INTO `sys_district` VALUES ('1930', '225', '桂平市', '0');
INSERT INTO `sys_district` VALUES ('1931', '226', '玉州区', '0');
INSERT INTO `sys_district` VALUES ('1932', '226', '容县', '0');
INSERT INTO `sys_district` VALUES ('1933', '226', '陆川县', '0');
INSERT INTO `sys_district` VALUES ('1934', '226', '博白县', '0');
INSERT INTO `sys_district` VALUES ('1935', '226', '兴业县', '0');
INSERT INTO `sys_district` VALUES ('1936', '226', '北流市', '0');
INSERT INTO `sys_district` VALUES ('1937', '227', '右江区', '0');
INSERT INTO `sys_district` VALUES ('1938', '227', '田阳县', '0');
INSERT INTO `sys_district` VALUES ('1939', '227', '田东县', '0');
INSERT INTO `sys_district` VALUES ('1940', '227', '平果县', '0');
INSERT INTO `sys_district` VALUES ('1941', '227', '德保县', '0');
INSERT INTO `sys_district` VALUES ('1942', '227', '靖西县', '0');
INSERT INTO `sys_district` VALUES ('1943', '227', '那坡县', '0');
INSERT INTO `sys_district` VALUES ('1944', '227', '凌云县', '0');
INSERT INTO `sys_district` VALUES ('1945', '227', '乐业县', '0');
INSERT INTO `sys_district` VALUES ('1946', '227', '田林县', '0');
INSERT INTO `sys_district` VALUES ('1947', '227', '西林县', '0');
INSERT INTO `sys_district` VALUES ('1948', '227', '隆林各族自治县', '0');
INSERT INTO `sys_district` VALUES ('1949', '228', '八步区', '0');
INSERT INTO `sys_district` VALUES ('1950', '228', '昭平县', '0');
INSERT INTO `sys_district` VALUES ('1951', '228', '钟山县', '0');
INSERT INTO `sys_district` VALUES ('1952', '228', '富川瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1953', '229', '金城江区', '0');
INSERT INTO `sys_district` VALUES ('1954', '229', '南丹县', '0');
INSERT INTO `sys_district` VALUES ('1955', '229', '天峨县', '0');
INSERT INTO `sys_district` VALUES ('1956', '229', '凤山县', '0');
INSERT INTO `sys_district` VALUES ('1957', '229', '东兰县', '0');
INSERT INTO `sys_district` VALUES ('1958', '229', '罗城仫佬族自治县', '0');
INSERT INTO `sys_district` VALUES ('1959', '229', '环江毛南族自治县', '0');
INSERT INTO `sys_district` VALUES ('1960', '229', '巴马瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1961', '229', '都安瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1962', '229', '大化瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1963', '229', '宜州市', '0');
INSERT INTO `sys_district` VALUES ('1964', '230', '兴宾区', '0');
INSERT INTO `sys_district` VALUES ('1965', '230', '忻城县', '0');
INSERT INTO `sys_district` VALUES ('1966', '230', '象州县', '0');
INSERT INTO `sys_district` VALUES ('1967', '230', '武宣县', '0');
INSERT INTO `sys_district` VALUES ('1968', '230', '金秀瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('1969', '230', '合山市', '0');
INSERT INTO `sys_district` VALUES ('1970', '231', '江洲区', '0');
INSERT INTO `sys_district` VALUES ('1971', '231', '扶绥县', '0');
INSERT INTO `sys_district` VALUES ('1972', '231', '宁明县', '0');
INSERT INTO `sys_district` VALUES ('1973', '231', '龙州县', '0');
INSERT INTO `sys_district` VALUES ('1974', '231', '大新县', '0');
INSERT INTO `sys_district` VALUES ('1975', '231', '天等县', '0');
INSERT INTO `sys_district` VALUES ('1976', '231', '凭祥市', '0');
INSERT INTO `sys_district` VALUES ('1977', '232', '秀英区', '0');
INSERT INTO `sys_district` VALUES ('1978', '232', '龙华区', '0');
INSERT INTO `sys_district` VALUES ('1979', '232', '琼山区', '0');
INSERT INTO `sys_district` VALUES ('1980', '232', '美兰区', '0');
INSERT INTO `sys_district` VALUES ('1981', '233', '五指山市', '0');
INSERT INTO `sys_district` VALUES ('1982', '233', '琼海市', '0');
INSERT INTO `sys_district` VALUES ('1983', '233', '儋州市', '0');
INSERT INTO `sys_district` VALUES ('1984', '233', '文昌市', '0');
INSERT INTO `sys_district` VALUES ('1985', '233', '万宁市', '0');
INSERT INTO `sys_district` VALUES ('1986', '233', '东方市', '0');
INSERT INTO `sys_district` VALUES ('1987', '233', '定安县', '0');
INSERT INTO `sys_district` VALUES ('1988', '233', '屯昌县', '0');
INSERT INTO `sys_district` VALUES ('1989', '233', '澄迈县', '0');
INSERT INTO `sys_district` VALUES ('1990', '233', '临高县', '0');
INSERT INTO `sys_district` VALUES ('1991', '233', '白沙黎族自治县', '0');
INSERT INTO `sys_district` VALUES ('1992', '233', '昌江黎族自治县', '0');
INSERT INTO `sys_district` VALUES ('1993', '233', '乐东黎族自治县', '0');
INSERT INTO `sys_district` VALUES ('1994', '233', '陵水黎族自治县', '0');
INSERT INTO `sys_district` VALUES ('1995', '233', '保亭黎族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1996', '233', '琼中黎族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('1997', '233', '西沙群岛', '0');
INSERT INTO `sys_district` VALUES ('1998', '233', '南沙群岛', '0');
INSERT INTO `sys_district` VALUES ('1999', '233', '中沙群岛的岛礁及其海域', '0');
INSERT INTO `sys_district` VALUES ('2000', '234', '万州区', '0');
INSERT INTO `sys_district` VALUES ('2001', '234', '涪陵区', '0');
INSERT INTO `sys_district` VALUES ('2002', '234', '渝中区', '0');
INSERT INTO `sys_district` VALUES ('2003', '234', '大渡口区', '0');
INSERT INTO `sys_district` VALUES ('2004', '234', '江北区', '0');
INSERT INTO `sys_district` VALUES ('2005', '234', '沙坪坝区', '0');
INSERT INTO `sys_district` VALUES ('2006', '234', '九龙坡区', '0');
INSERT INTO `sys_district` VALUES ('2007', '234', '南岸区', '0');
INSERT INTO `sys_district` VALUES ('2008', '234', '北碚区', '0');
INSERT INTO `sys_district` VALUES ('2009', '234', '万盛区', '0');
INSERT INTO `sys_district` VALUES ('2010', '234', '双桥区', '0');
INSERT INTO `sys_district` VALUES ('2011', '234', '渝北区', '0');
INSERT INTO `sys_district` VALUES ('2012', '234', '巴南区', '0');
INSERT INTO `sys_district` VALUES ('2013', '234', '黔江区', '0');
INSERT INTO `sys_district` VALUES ('2014', '234', '长寿区', '0');
INSERT INTO `sys_district` VALUES ('2015', '234', '綦江县', '0');
INSERT INTO `sys_district` VALUES ('2016', '234', '潼南县', '0');
INSERT INTO `sys_district` VALUES ('2017', '234', '铜梁县', '0');
INSERT INTO `sys_district` VALUES ('2018', '234', '大足县', '0');
INSERT INTO `sys_district` VALUES ('2019', '234', '荣昌县', '0');
INSERT INTO `sys_district` VALUES ('2020', '234', '璧山县', '0');
INSERT INTO `sys_district` VALUES ('2021', '234', '梁平县', '0');
INSERT INTO `sys_district` VALUES ('2022', '234', '城口县', '0');
INSERT INTO `sys_district` VALUES ('2023', '234', '丰都县', '0');
INSERT INTO `sys_district` VALUES ('2024', '234', '垫江县', '0');
INSERT INTO `sys_district` VALUES ('2025', '234', '武隆县', '0');
INSERT INTO `sys_district` VALUES ('2026', '234', '忠县', '0');
INSERT INTO `sys_district` VALUES ('2027', '234', '开县', '0');
INSERT INTO `sys_district` VALUES ('2028', '234', '云阳县', '0');
INSERT INTO `sys_district` VALUES ('2029', '234', '奉节县', '0');
INSERT INTO `sys_district` VALUES ('2030', '234', '巫山县', '0');
INSERT INTO `sys_district` VALUES ('2031', '234', '巫溪县', '0');
INSERT INTO `sys_district` VALUES ('2032', '234', '石柱土家族自治县', '0');
INSERT INTO `sys_district` VALUES ('2033', '234', '秀山土家族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2034', '234', '酉阳土家族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2035', '234', '彭水苗族土家族自治县', '0');
INSERT INTO `sys_district` VALUES ('2036', '234', '江津市', '0');
INSERT INTO `sys_district` VALUES ('2037', '234', '合川市', '0');
INSERT INTO `sys_district` VALUES ('2038', '234', '永川市', '0');
INSERT INTO `sys_district` VALUES ('2039', '234', '南川市', '0');
INSERT INTO `sys_district` VALUES ('2040', '235', '锦江区', '0');
INSERT INTO `sys_district` VALUES ('2041', '235', '青羊区', '0');
INSERT INTO `sys_district` VALUES ('2042', '235', '金牛区', '0');
INSERT INTO `sys_district` VALUES ('2043', '235', '武侯区', '0');
INSERT INTO `sys_district` VALUES ('2044', '235', '成华区', '0');
INSERT INTO `sys_district` VALUES ('2045', '235', '龙泉驿区', '0');
INSERT INTO `sys_district` VALUES ('2046', '235', '青白江区', '0');
INSERT INTO `sys_district` VALUES ('2047', '235', '新都区', '0');
INSERT INTO `sys_district` VALUES ('2048', '235', '温江区', '0');
INSERT INTO `sys_district` VALUES ('2049', '235', '金堂县', '0');
INSERT INTO `sys_district` VALUES ('2050', '235', '双流县', '0');
INSERT INTO `sys_district` VALUES ('2051', '235', '郫县', '0');
INSERT INTO `sys_district` VALUES ('2052', '235', '大邑县', '0');
INSERT INTO `sys_district` VALUES ('2053', '235', '蒲江县', '0');
INSERT INTO `sys_district` VALUES ('2054', '235', '新津县', '0');
INSERT INTO `sys_district` VALUES ('2055', '235', '都江堰市', '0');
INSERT INTO `sys_district` VALUES ('2056', '235', '彭州市', '0');
INSERT INTO `sys_district` VALUES ('2057', '235', '邛崃市', '0');
INSERT INTO `sys_district` VALUES ('2058', '235', '崇州市', '0');
INSERT INTO `sys_district` VALUES ('2059', '236', '自流井区', '0');
INSERT INTO `sys_district` VALUES ('2060', '236', '贡井区', '0');
INSERT INTO `sys_district` VALUES ('2061', '236', '大安区', '0');
INSERT INTO `sys_district` VALUES ('2062', '236', '沿滩区', '0');
INSERT INTO `sys_district` VALUES ('2063', '236', '荣县', '0');
INSERT INTO `sys_district` VALUES ('2064', '236', '富顺县', '0');
INSERT INTO `sys_district` VALUES ('2065', '237', '东区', '0');
INSERT INTO `sys_district` VALUES ('2066', '237', '西区', '0');
INSERT INTO `sys_district` VALUES ('2067', '237', '仁和区', '0');
INSERT INTO `sys_district` VALUES ('2068', '237', '米易县', '0');
INSERT INTO `sys_district` VALUES ('2069', '237', '盐边县', '0');
INSERT INTO `sys_district` VALUES ('2070', '238', '江阳区', '0');
INSERT INTO `sys_district` VALUES ('2071', '238', '纳溪区', '0');
INSERT INTO `sys_district` VALUES ('2072', '238', '龙马潭区', '0');
INSERT INTO `sys_district` VALUES ('2073', '238', '泸县', '0');
INSERT INTO `sys_district` VALUES ('2074', '238', '合江县', '0');
INSERT INTO `sys_district` VALUES ('2075', '238', '叙永县', '0');
INSERT INTO `sys_district` VALUES ('2076', '238', '古蔺县', '0');
INSERT INTO `sys_district` VALUES ('2077', '239', '旌阳区', '0');
INSERT INTO `sys_district` VALUES ('2078', '239', '中江县', '0');
INSERT INTO `sys_district` VALUES ('2079', '239', '罗江县', '0');
INSERT INTO `sys_district` VALUES ('2080', '239', '广汉市', '0');
INSERT INTO `sys_district` VALUES ('2081', '239', '什邡市', '0');
INSERT INTO `sys_district` VALUES ('2082', '239', '绵竹市', '0');
INSERT INTO `sys_district` VALUES ('2083', '240', '涪城区', '0');
INSERT INTO `sys_district` VALUES ('2084', '240', '游仙区', '0');
INSERT INTO `sys_district` VALUES ('2085', '240', '三台县', '0');
INSERT INTO `sys_district` VALUES ('2086', '240', '盐亭县', '0');
INSERT INTO `sys_district` VALUES ('2087', '240', '安县', '0');
INSERT INTO `sys_district` VALUES ('2088', '240', '梓潼县', '0');
INSERT INTO `sys_district` VALUES ('2089', '240', '北川羌族自治县', '0');
INSERT INTO `sys_district` VALUES ('2090', '240', '平武县', '0');
INSERT INTO `sys_district` VALUES ('2091', '240', '江油市', '0');
INSERT INTO `sys_district` VALUES ('2092', '241', '市中区', '0');
INSERT INTO `sys_district` VALUES ('2093', '241', '元坝区', '0');
INSERT INTO `sys_district` VALUES ('2094', '241', '朝天区', '0');
INSERT INTO `sys_district` VALUES ('2095', '241', '旺苍县', '0');
INSERT INTO `sys_district` VALUES ('2096', '241', '青川县', '0');
INSERT INTO `sys_district` VALUES ('2097', '241', '剑阁县', '0');
INSERT INTO `sys_district` VALUES ('2098', '241', '苍溪县', '0');
INSERT INTO `sys_district` VALUES ('2099', '242', '船山区', '0');
INSERT INTO `sys_district` VALUES ('2100', '242', '安居区', '0');
INSERT INTO `sys_district` VALUES ('2101', '242', '蓬溪县', '0');
INSERT INTO `sys_district` VALUES ('2102', '242', '射洪县', '0');
INSERT INTO `sys_district` VALUES ('2103', '242', '大英县', '0');
INSERT INTO `sys_district` VALUES ('2104', '243', '市中区', '0');
INSERT INTO `sys_district` VALUES ('2105', '243', '东兴区', '0');
INSERT INTO `sys_district` VALUES ('2106', '243', '威远县', '0');
INSERT INTO `sys_district` VALUES ('2107', '243', '资中县', '0');
INSERT INTO `sys_district` VALUES ('2108', '243', '隆昌县', '0');
INSERT INTO `sys_district` VALUES ('2109', '244', '市中区', '0');
INSERT INTO `sys_district` VALUES ('2110', '244', '沙湾区', '0');
INSERT INTO `sys_district` VALUES ('2111', '244', '五通桥区', '0');
INSERT INTO `sys_district` VALUES ('2112', '244', '金口河区', '0');
INSERT INTO `sys_district` VALUES ('2113', '244', '犍为县', '0');
INSERT INTO `sys_district` VALUES ('2114', '244', '井研县', '0');
INSERT INTO `sys_district` VALUES ('2115', '244', '夹江县', '0');
INSERT INTO `sys_district` VALUES ('2116', '244', '沐川县', '0');
INSERT INTO `sys_district` VALUES ('2117', '244', '峨边彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2118', '244', '马边彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2119', '244', '峨眉山市', '0');
INSERT INTO `sys_district` VALUES ('2120', '245', '顺庆区', '0');
INSERT INTO `sys_district` VALUES ('2121', '245', '高坪区', '0');
INSERT INTO `sys_district` VALUES ('2122', '245', '嘉陵区', '0');
INSERT INTO `sys_district` VALUES ('2123', '245', '南部县', '0');
INSERT INTO `sys_district` VALUES ('2124', '245', '营山县', '0');
INSERT INTO `sys_district` VALUES ('2125', '245', '蓬安县', '0');
INSERT INTO `sys_district` VALUES ('2126', '245', '仪陇县', '0');
INSERT INTO `sys_district` VALUES ('2127', '245', '西充县', '0');
INSERT INTO `sys_district` VALUES ('2128', '245', '阆中市', '0');
INSERT INTO `sys_district` VALUES ('2129', '246', '东坡区', '0');
INSERT INTO `sys_district` VALUES ('2130', '246', '仁寿县', '0');
INSERT INTO `sys_district` VALUES ('2131', '246', '彭山县', '0');
INSERT INTO `sys_district` VALUES ('2132', '246', '洪雅县', '0');
INSERT INTO `sys_district` VALUES ('2133', '246', '丹棱县', '0');
INSERT INTO `sys_district` VALUES ('2134', '246', '青神县', '0');
INSERT INTO `sys_district` VALUES ('2135', '247', '翠屏区', '0');
INSERT INTO `sys_district` VALUES ('2136', '247', '宜宾县', '0');
INSERT INTO `sys_district` VALUES ('2137', '247', '南溪县', '0');
INSERT INTO `sys_district` VALUES ('2138', '247', '江安县', '0');
INSERT INTO `sys_district` VALUES ('2139', '247', '长宁县', '0');
INSERT INTO `sys_district` VALUES ('2140', '247', '高县', '0');
INSERT INTO `sys_district` VALUES ('2141', '247', '珙县', '0');
INSERT INTO `sys_district` VALUES ('2142', '247', '筠连县', '0');
INSERT INTO `sys_district` VALUES ('2143', '247', '兴文县', '0');
INSERT INTO `sys_district` VALUES ('2144', '247', '屏山县', '0');
INSERT INTO `sys_district` VALUES ('2145', '248', '广安区', '0');
INSERT INTO `sys_district` VALUES ('2146', '248', '岳池县', '0');
INSERT INTO `sys_district` VALUES ('2147', '248', '武胜县', '0');
INSERT INTO `sys_district` VALUES ('2148', '248', '邻水县', '0');
INSERT INTO `sys_district` VALUES ('2149', '248', '华蓥市', '0');
INSERT INTO `sys_district` VALUES ('2150', '249', '通川区', '0');
INSERT INTO `sys_district` VALUES ('2151', '249', '达县', '0');
INSERT INTO `sys_district` VALUES ('2152', '249', '宣汉县', '0');
INSERT INTO `sys_district` VALUES ('2153', '249', '开江县', '0');
INSERT INTO `sys_district` VALUES ('2154', '249', '大竹县', '0');
INSERT INTO `sys_district` VALUES ('2155', '249', '渠县', '0');
INSERT INTO `sys_district` VALUES ('2156', '249', '万源市', '0');
INSERT INTO `sys_district` VALUES ('2157', '250', '雨城区', '0');
INSERT INTO `sys_district` VALUES ('2158', '250', '名山县', '0');
INSERT INTO `sys_district` VALUES ('2159', '250', '荥经县', '0');
INSERT INTO `sys_district` VALUES ('2160', '250', '汉源县', '0');
INSERT INTO `sys_district` VALUES ('2161', '250', '石棉县', '0');
INSERT INTO `sys_district` VALUES ('2162', '250', '天全县', '0');
INSERT INTO `sys_district` VALUES ('2163', '250', '芦山县', '0');
INSERT INTO `sys_district` VALUES ('2164', '250', '宝兴县', '0');
INSERT INTO `sys_district` VALUES ('2165', '251', '巴州区', '0');
INSERT INTO `sys_district` VALUES ('2166', '251', '通江县', '0');
INSERT INTO `sys_district` VALUES ('2167', '251', '南江县', '0');
INSERT INTO `sys_district` VALUES ('2168', '251', '平昌县', '0');
INSERT INTO `sys_district` VALUES ('2169', '252', '雁江区', '0');
INSERT INTO `sys_district` VALUES ('2170', '252', '安岳县', '0');
INSERT INTO `sys_district` VALUES ('2171', '252', '乐至县', '0');
INSERT INTO `sys_district` VALUES ('2172', '252', '简阳市', '0');
INSERT INTO `sys_district` VALUES ('2173', '253', '汶川县', '0');
INSERT INTO `sys_district` VALUES ('2174', '253', '理县', '0');
INSERT INTO `sys_district` VALUES ('2175', '253', '茂县', '0');
INSERT INTO `sys_district` VALUES ('2176', '253', '松潘县', '0');
INSERT INTO `sys_district` VALUES ('2177', '253', '九寨沟县', '0');
INSERT INTO `sys_district` VALUES ('2178', '253', '金川县', '0');
INSERT INTO `sys_district` VALUES ('2179', '253', '小金县', '0');
INSERT INTO `sys_district` VALUES ('2180', '253', '黑水县', '0');
INSERT INTO `sys_district` VALUES ('2181', '253', '马尔康县', '0');
INSERT INTO `sys_district` VALUES ('2182', '253', '壤塘县', '0');
INSERT INTO `sys_district` VALUES ('2183', '253', '阿坝县', '0');
INSERT INTO `sys_district` VALUES ('2184', '253', '若尔盖县', '0');
INSERT INTO `sys_district` VALUES ('2185', '253', '红原县', '0');
INSERT INTO `sys_district` VALUES ('2186', '254', '康定县', '0');
INSERT INTO `sys_district` VALUES ('2187', '254', '泸定县', '0');
INSERT INTO `sys_district` VALUES ('2188', '254', '丹巴县', '0');
INSERT INTO `sys_district` VALUES ('2189', '254', '九龙县', '0');
INSERT INTO `sys_district` VALUES ('2190', '254', '雅江县', '0');
INSERT INTO `sys_district` VALUES ('2191', '254', '道孚县', '0');
INSERT INTO `sys_district` VALUES ('2192', '254', '炉霍县', '0');
INSERT INTO `sys_district` VALUES ('2193', '254', '甘孜县', '0');
INSERT INTO `sys_district` VALUES ('2194', '254', '新龙县', '0');
INSERT INTO `sys_district` VALUES ('2195', '254', '德格县', '0');
INSERT INTO `sys_district` VALUES ('2196', '254', '白玉县', '0');
INSERT INTO `sys_district` VALUES ('2197', '254', '石渠县', '0');
INSERT INTO `sys_district` VALUES ('2198', '254', '色达县', '0');
INSERT INTO `sys_district` VALUES ('2199', '254', '理塘县', '0');
INSERT INTO `sys_district` VALUES ('2200', '254', '巴塘县', '0');
INSERT INTO `sys_district` VALUES ('2201', '254', '乡城县', '0');
INSERT INTO `sys_district` VALUES ('2202', '254', '稻城县', '0');
INSERT INTO `sys_district` VALUES ('2203', '254', '得荣县', '0');
INSERT INTO `sys_district` VALUES ('2204', '255', '西昌市', '0');
INSERT INTO `sys_district` VALUES ('2205', '255', '木里藏族自治县', '0');
INSERT INTO `sys_district` VALUES ('2206', '255', '盐源县', '0');
INSERT INTO `sys_district` VALUES ('2207', '255', '德昌县', '0');
INSERT INTO `sys_district` VALUES ('2208', '255', '会理县', '0');
INSERT INTO `sys_district` VALUES ('2209', '255', '会东县', '0');
INSERT INTO `sys_district` VALUES ('2210', '255', '宁南县', '0');
INSERT INTO `sys_district` VALUES ('2211', '255', '普格县', '0');
INSERT INTO `sys_district` VALUES ('2212', '255', '布拖县', '0');
INSERT INTO `sys_district` VALUES ('2213', '255', '金阳县', '0');
INSERT INTO `sys_district` VALUES ('2214', '255', '昭觉县', '0');
INSERT INTO `sys_district` VALUES ('2215', '255', '喜德县', '0');
INSERT INTO `sys_district` VALUES ('2216', '255', '冕宁县', '0');
INSERT INTO `sys_district` VALUES ('2217', '255', '越西县', '0');
INSERT INTO `sys_district` VALUES ('2218', '255', '甘洛县', '0');
INSERT INTO `sys_district` VALUES ('2219', '255', '美姑县', '0');
INSERT INTO `sys_district` VALUES ('2220', '255', '雷波县', '0');
INSERT INTO `sys_district` VALUES ('2221', '256', '南明区', '0');
INSERT INTO `sys_district` VALUES ('2222', '256', '云岩区', '0');
INSERT INTO `sys_district` VALUES ('2223', '256', '花溪区', '0');
INSERT INTO `sys_district` VALUES ('2224', '256', '乌当区', '0');
INSERT INTO `sys_district` VALUES ('2225', '256', '白云区', '0');
INSERT INTO `sys_district` VALUES ('2226', '256', '小河区', '0');
INSERT INTO `sys_district` VALUES ('2227', '256', '开阳县', '0');
INSERT INTO `sys_district` VALUES ('2228', '256', '息烽县', '0');
INSERT INTO `sys_district` VALUES ('2229', '256', '修文县', '0');
INSERT INTO `sys_district` VALUES ('2230', '256', '清镇市', '0');
INSERT INTO `sys_district` VALUES ('2231', '257', '钟山区', '0');
INSERT INTO `sys_district` VALUES ('2232', '257', '六枝特区', '0');
INSERT INTO `sys_district` VALUES ('2233', '257', '水城县', '0');
INSERT INTO `sys_district` VALUES ('2234', '257', '盘县', '0');
INSERT INTO `sys_district` VALUES ('2235', '258', '红花岗区', '0');
INSERT INTO `sys_district` VALUES ('2236', '258', '汇川区', '0');
INSERT INTO `sys_district` VALUES ('2237', '258', '遵义县', '0');
INSERT INTO `sys_district` VALUES ('2238', '258', '桐梓县', '0');
INSERT INTO `sys_district` VALUES ('2239', '258', '绥阳县', '0');
INSERT INTO `sys_district` VALUES ('2240', '258', '正安县', '0');
INSERT INTO `sys_district` VALUES ('2241', '258', '道真仡佬族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2242', '258', '务川仡佬族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2243', '258', '凤冈县', '0');
INSERT INTO `sys_district` VALUES ('2244', '258', '湄潭县', '0');
INSERT INTO `sys_district` VALUES ('2245', '258', '余庆县', '0');
INSERT INTO `sys_district` VALUES ('2246', '258', '习水县', '0');
INSERT INTO `sys_district` VALUES ('2247', '258', '赤水市', '0');
INSERT INTO `sys_district` VALUES ('2248', '258', '仁怀市', '0');
INSERT INTO `sys_district` VALUES ('2249', '259', '西秀区', '0');
INSERT INTO `sys_district` VALUES ('2250', '259', '平坝县', '0');
INSERT INTO `sys_district` VALUES ('2251', '259', '普定县', '0');
INSERT INTO `sys_district` VALUES ('2252', '259', '镇宁布依族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2253', '259', '关岭布依族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2254', '259', '紫云苗族布依族自治县', '0');
INSERT INTO `sys_district` VALUES ('2255', '260', '铜仁市', '0');
INSERT INTO `sys_district` VALUES ('2256', '260', '江口县', '0');
INSERT INTO `sys_district` VALUES ('2257', '260', '玉屏侗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2258', '260', '石阡县', '0');
INSERT INTO `sys_district` VALUES ('2259', '260', '思南县', '0');
INSERT INTO `sys_district` VALUES ('2260', '260', '印江土家族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2261', '260', '德江县', '0');
INSERT INTO `sys_district` VALUES ('2262', '260', '沿河土家族自治县', '0');
INSERT INTO `sys_district` VALUES ('2263', '260', '松桃苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2264', '260', '万山特区', '0');
INSERT INTO `sys_district` VALUES ('2265', '261', '兴义市', '0');
INSERT INTO `sys_district` VALUES ('2266', '261', '兴仁县', '0');
INSERT INTO `sys_district` VALUES ('2267', '261', '普安县', '0');
INSERT INTO `sys_district` VALUES ('2268', '261', '晴隆县', '0');
INSERT INTO `sys_district` VALUES ('2269', '261', '贞丰县', '0');
INSERT INTO `sys_district` VALUES ('2270', '261', '望谟县', '0');
INSERT INTO `sys_district` VALUES ('2271', '261', '册亨县', '0');
INSERT INTO `sys_district` VALUES ('2272', '261', '安龙县', '0');
INSERT INTO `sys_district` VALUES ('2273', '262', '毕节市', '0');
INSERT INTO `sys_district` VALUES ('2274', '262', '大方县', '0');
INSERT INTO `sys_district` VALUES ('2275', '262', '黔西县', '0');
INSERT INTO `sys_district` VALUES ('2276', '262', '金沙县', '0');
INSERT INTO `sys_district` VALUES ('2277', '262', '织金县', '0');
INSERT INTO `sys_district` VALUES ('2278', '262', '纳雍县', '0');
INSERT INTO `sys_district` VALUES ('2279', '262', '威宁彝族回族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2280', '262', '赫章县', '0');
INSERT INTO `sys_district` VALUES ('2281', '263', '凯里市', '0');
INSERT INTO `sys_district` VALUES ('2282', '263', '黄平县', '0');
INSERT INTO `sys_district` VALUES ('2283', '263', '施秉县', '0');
INSERT INTO `sys_district` VALUES ('2284', '263', '三穗县', '0');
INSERT INTO `sys_district` VALUES ('2285', '263', '镇远县', '0');
INSERT INTO `sys_district` VALUES ('2286', '263', '岑巩县', '0');
INSERT INTO `sys_district` VALUES ('2287', '263', '天柱县', '0');
INSERT INTO `sys_district` VALUES ('2288', '263', '锦屏县', '0');
INSERT INTO `sys_district` VALUES ('2289', '263', '剑河县', '0');
INSERT INTO `sys_district` VALUES ('2290', '263', '台江县', '0');
INSERT INTO `sys_district` VALUES ('2291', '263', '黎平县', '0');
INSERT INTO `sys_district` VALUES ('2292', '263', '榕江县', '0');
INSERT INTO `sys_district` VALUES ('2293', '263', '从江县', '0');
INSERT INTO `sys_district` VALUES ('2294', '263', '雷山县', '0');
INSERT INTO `sys_district` VALUES ('2295', '263', '麻江县', '0');
INSERT INTO `sys_district` VALUES ('2296', '263', '丹寨县', '0');
INSERT INTO `sys_district` VALUES ('2297', '264', '都匀市', '0');
INSERT INTO `sys_district` VALUES ('2298', '264', '福泉市', '0');
INSERT INTO `sys_district` VALUES ('2299', '264', '荔波县', '0');
INSERT INTO `sys_district` VALUES ('2300', '264', '贵定县', '0');
INSERT INTO `sys_district` VALUES ('2301', '264', '瓮安县', '0');
INSERT INTO `sys_district` VALUES ('2302', '264', '独山县', '0');
INSERT INTO `sys_district` VALUES ('2303', '264', '平塘县', '0');
INSERT INTO `sys_district` VALUES ('2304', '264', '罗甸县', '0');
INSERT INTO `sys_district` VALUES ('2305', '264', '长顺县', '0');
INSERT INTO `sys_district` VALUES ('2306', '264', '龙里县', '0');
INSERT INTO `sys_district` VALUES ('2307', '264', '惠水县', '0');
INSERT INTO `sys_district` VALUES ('2308', '264', '三都水族自治县', '0');
INSERT INTO `sys_district` VALUES ('2309', '265', '五华区', '0');
INSERT INTO `sys_district` VALUES ('2310', '265', '盘龙区', '0');
INSERT INTO `sys_district` VALUES ('2311', '265', '官渡区', '0');
INSERT INTO `sys_district` VALUES ('2312', '265', '西山区', '0');
INSERT INTO `sys_district` VALUES ('2313', '265', '东川区', '0');
INSERT INTO `sys_district` VALUES ('2314', '265', '呈贡县', '0');
INSERT INTO `sys_district` VALUES ('2315', '265', '晋宁县', '0');
INSERT INTO `sys_district` VALUES ('2316', '265', '富民县', '0');
INSERT INTO `sys_district` VALUES ('2317', '265', '宜良县', '0');
INSERT INTO `sys_district` VALUES ('2318', '265', '石林彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2319', '265', '嵩明县', '0');
INSERT INTO `sys_district` VALUES ('2320', '265', '禄劝彝族苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2321', '265', '寻甸回族彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2322', '265', '安宁市', '0');
INSERT INTO `sys_district` VALUES ('2323', '266', '麒麟区', '0');
INSERT INTO `sys_district` VALUES ('2324', '266', '马龙县', '0');
INSERT INTO `sys_district` VALUES ('2325', '266', '陆良县', '0');
INSERT INTO `sys_district` VALUES ('2326', '266', '师宗县', '0');
INSERT INTO `sys_district` VALUES ('2327', '266', '罗平县', '0');
INSERT INTO `sys_district` VALUES ('2328', '266', '富源县', '0');
INSERT INTO `sys_district` VALUES ('2329', '266', '会泽县', '0');
INSERT INTO `sys_district` VALUES ('2330', '266', '沾益县', '0');
INSERT INTO `sys_district` VALUES ('2331', '266', '宣威市', '0');
INSERT INTO `sys_district` VALUES ('2332', '267', '红塔区', '0');
INSERT INTO `sys_district` VALUES ('2333', '267', '江川县', '0');
INSERT INTO `sys_district` VALUES ('2334', '267', '澄江县', '0');
INSERT INTO `sys_district` VALUES ('2335', '267', '通海县', '0');
INSERT INTO `sys_district` VALUES ('2336', '267', '华宁县', '0');
INSERT INTO `sys_district` VALUES ('2337', '267', '易门县', '0');
INSERT INTO `sys_district` VALUES ('2338', '267', '峨山彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2339', '267', '新平彝族傣族自治县', '0');
INSERT INTO `sys_district` VALUES ('2340', '267', '元江哈尼族彝族傣族自治县', '0');
INSERT INTO `sys_district` VALUES ('2341', '268', '隆阳区', '0');
INSERT INTO `sys_district` VALUES ('2342', '268', '施甸县', '0');
INSERT INTO `sys_district` VALUES ('2343', '268', '腾冲县', '0');
INSERT INTO `sys_district` VALUES ('2344', '268', '龙陵县', '0');
INSERT INTO `sys_district` VALUES ('2345', '268', '昌宁县', '0');
INSERT INTO `sys_district` VALUES ('2346', '269', '昭阳区', '0');
INSERT INTO `sys_district` VALUES ('2347', '269', '鲁甸县', '0');
INSERT INTO `sys_district` VALUES ('2348', '269', '巧家县', '0');
INSERT INTO `sys_district` VALUES ('2349', '269', '盐津县', '0');
INSERT INTO `sys_district` VALUES ('2350', '269', '大关县', '0');
INSERT INTO `sys_district` VALUES ('2351', '269', '永善县', '0');
INSERT INTO `sys_district` VALUES ('2352', '269', '绥江县', '0');
INSERT INTO `sys_district` VALUES ('2353', '269', '镇雄县', '0');
INSERT INTO `sys_district` VALUES ('2354', '269', '彝良县', '0');
INSERT INTO `sys_district` VALUES ('2355', '269', '威信县', '0');
INSERT INTO `sys_district` VALUES ('2356', '269', '水富县', '0');
INSERT INTO `sys_district` VALUES ('2357', '270', '古城区', '0');
INSERT INTO `sys_district` VALUES ('2358', '270', '玉龙纳西族自治县', '0');
INSERT INTO `sys_district` VALUES ('2359', '270', '永胜县', '0');
INSERT INTO `sys_district` VALUES ('2360', '270', '华坪县', '0');
INSERT INTO `sys_district` VALUES ('2361', '270', '宁蒗彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2362', '271', '翠云区', '0');
INSERT INTO `sys_district` VALUES ('2363', '271', '普洱哈尼族彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2364', '271', '墨江哈尼族自治县', '0');
INSERT INTO `sys_district` VALUES ('2365', '271', '景东彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2366', '271', '景谷傣族彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2367', '271', '镇沅彝族哈尼族拉祜族自治县', '0');
INSERT INTO `sys_district` VALUES ('2368', '271', '江城哈尼族彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2369', '271', '孟连傣族拉祜族佤族自治县', '0');
INSERT INTO `sys_district` VALUES ('2370', '271', '澜沧拉祜族自治县', '0');
INSERT INTO `sys_district` VALUES ('2371', '271', '西盟佤族自治县', '0');
INSERT INTO `sys_district` VALUES ('2372', '272', '临翔区', '0');
INSERT INTO `sys_district` VALUES ('2373', '272', '凤庆县', '0');
INSERT INTO `sys_district` VALUES ('2374', '272', '云县', '0');
INSERT INTO `sys_district` VALUES ('2375', '272', '永德县', '0');
INSERT INTO `sys_district` VALUES ('2376', '272', '镇康县', '0');
INSERT INTO `sys_district` VALUES ('2377', '272', '双江拉祜族佤族布朗族傣族自治县', '0');
INSERT INTO `sys_district` VALUES ('2378', '272', '耿马傣族佤族自治县', '0');
INSERT INTO `sys_district` VALUES ('2379', '272', '沧源佤族自治县', '0');
INSERT INTO `sys_district` VALUES ('2380', '273', '楚雄市', '0');
INSERT INTO `sys_district` VALUES ('2381', '273', '双柏县', '0');
INSERT INTO `sys_district` VALUES ('2382', '273', '牟定县', '0');
INSERT INTO `sys_district` VALUES ('2383', '273', '南华县', '0');
INSERT INTO `sys_district` VALUES ('2384', '273', '姚安县', '0');
INSERT INTO `sys_district` VALUES ('2385', '273', '大姚县', '0');
INSERT INTO `sys_district` VALUES ('2386', '273', '永仁县', '0');
INSERT INTO `sys_district` VALUES ('2387', '273', '元谋县', '0');
INSERT INTO `sys_district` VALUES ('2388', '273', '武定县', '0');
INSERT INTO `sys_district` VALUES ('2389', '273', '禄丰县', '0');
INSERT INTO `sys_district` VALUES ('2390', '274', '个旧市', '0');
INSERT INTO `sys_district` VALUES ('2391', '274', '开远市', '0');
INSERT INTO `sys_district` VALUES ('2392', '274', '蒙自县', '0');
INSERT INTO `sys_district` VALUES ('2393', '274', '屏边苗族自治县', '0');
INSERT INTO `sys_district` VALUES ('2394', '274', '建水县', '0');
INSERT INTO `sys_district` VALUES ('2395', '274', '石屏县', '0');
INSERT INTO `sys_district` VALUES ('2396', '274', '弥勒县', '0');
INSERT INTO `sys_district` VALUES ('2397', '274', '泸西县', '0');
INSERT INTO `sys_district` VALUES ('2398', '274', '元阳县', '0');
INSERT INTO `sys_district` VALUES ('2399', '274', '红河县', '0');
INSERT INTO `sys_district` VALUES ('2400', '274', '金平苗族瑶族傣族自治县', '0');
INSERT INTO `sys_district` VALUES ('2401', '274', '绿春县', '0');
INSERT INTO `sys_district` VALUES ('2402', '274', '河口瑶族自治县', '0');
INSERT INTO `sys_district` VALUES ('2403', '275', '文山县', '0');
INSERT INTO `sys_district` VALUES ('2404', '275', '砚山县', '0');
INSERT INTO `sys_district` VALUES ('2405', '275', '西畴县', '0');
INSERT INTO `sys_district` VALUES ('2406', '275', '麻栗坡县', '0');
INSERT INTO `sys_district` VALUES ('2407', '275', '马关县', '0');
INSERT INTO `sys_district` VALUES ('2408', '275', '丘北县', '0');
INSERT INTO `sys_district` VALUES ('2409', '275', '广南县', '0');
INSERT INTO `sys_district` VALUES ('2410', '275', '富宁县', '0');
INSERT INTO `sys_district` VALUES ('2411', '276', '景洪市', '0');
INSERT INTO `sys_district` VALUES ('2412', '276', '勐海县', '0');
INSERT INTO `sys_district` VALUES ('2413', '276', '勐腊县', '0');
INSERT INTO `sys_district` VALUES ('2414', '277', '大理市', '0');
INSERT INTO `sys_district` VALUES ('2415', '277', '漾濞彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2416', '277', '祥云县', '0');
INSERT INTO `sys_district` VALUES ('2417', '277', '宾川县', '0');
INSERT INTO `sys_district` VALUES ('2418', '277', '弥渡县', '0');
INSERT INTO `sys_district` VALUES ('2419', '277', '南涧彝族自治县', '0');
INSERT INTO `sys_district` VALUES ('2420', '277', '巍山彝族回族自治县', '0');
INSERT INTO `sys_district` VALUES ('2421', '277', '永平县', '0');
INSERT INTO `sys_district` VALUES ('2422', '277', '云龙县', '0');
INSERT INTO `sys_district` VALUES ('2423', '277', '洱源县', '0');
INSERT INTO `sys_district` VALUES ('2424', '277', '剑川县', '0');
INSERT INTO `sys_district` VALUES ('2425', '277', '鹤庆县', '0');
INSERT INTO `sys_district` VALUES ('2426', '278', '瑞丽市', '0');
INSERT INTO `sys_district` VALUES ('2427', '278', '潞西市', '0');
INSERT INTO `sys_district` VALUES ('2428', '278', '梁河县', '0');
INSERT INTO `sys_district` VALUES ('2429', '278', '盈江县', '0');
INSERT INTO `sys_district` VALUES ('2430', '278', '陇川县', '0');
INSERT INTO `sys_district` VALUES ('2431', '279', '泸水县', '0');
INSERT INTO `sys_district` VALUES ('2432', '279', '福贡县', '0');
INSERT INTO `sys_district` VALUES ('2433', '279', '贡山独龙族怒族自治县', '0');
INSERT INTO `sys_district` VALUES ('2434', '279', '兰坪白族普米族自治县', '0');
INSERT INTO `sys_district` VALUES ('2435', '280', '香格里拉县', '0');
INSERT INTO `sys_district` VALUES ('2436', '280', '德钦县', '0');
INSERT INTO `sys_district` VALUES ('2437', '280', '维西傈僳族自治县', '0');
INSERT INTO `sys_district` VALUES ('2438', '281', '城关区', '0');
INSERT INTO `sys_district` VALUES ('2439', '281', '林周县', '0');
INSERT INTO `sys_district` VALUES ('2440', '281', '当雄县', '0');
INSERT INTO `sys_district` VALUES ('2441', '281', '尼木县', '0');
INSERT INTO `sys_district` VALUES ('2442', '281', '曲水县', '0');
INSERT INTO `sys_district` VALUES ('2443', '281', '堆龙德庆县', '0');
INSERT INTO `sys_district` VALUES ('2444', '281', '达孜县', '0');
INSERT INTO `sys_district` VALUES ('2445', '281', '墨竹工卡县', '0');
INSERT INTO `sys_district` VALUES ('2446', '282', '昌都县', '0');
INSERT INTO `sys_district` VALUES ('2447', '282', '江达县', '0');
INSERT INTO `sys_district` VALUES ('2448', '282', '贡觉县', '0');
INSERT INTO `sys_district` VALUES ('2449', '282', '类乌齐县', '0');
INSERT INTO `sys_district` VALUES ('2450', '282', '丁青县', '0');
INSERT INTO `sys_district` VALUES ('2451', '282', '察雅县', '0');
INSERT INTO `sys_district` VALUES ('2452', '282', '八宿县', '0');
INSERT INTO `sys_district` VALUES ('2453', '282', '左贡县', '0');
INSERT INTO `sys_district` VALUES ('2454', '282', '芒康县', '0');
INSERT INTO `sys_district` VALUES ('2455', '282', '洛隆县', '0');
INSERT INTO `sys_district` VALUES ('2456', '282', '边坝县', '0');
INSERT INTO `sys_district` VALUES ('2457', '283', '乃东县', '0');
INSERT INTO `sys_district` VALUES ('2458', '283', '扎囊县', '0');
INSERT INTO `sys_district` VALUES ('2459', '283', '贡嘎县', '0');
INSERT INTO `sys_district` VALUES ('2460', '283', '桑日县', '0');
INSERT INTO `sys_district` VALUES ('2461', '283', '琼结县', '0');
INSERT INTO `sys_district` VALUES ('2462', '283', '曲松县', '0');
INSERT INTO `sys_district` VALUES ('2463', '283', '措美县', '0');
INSERT INTO `sys_district` VALUES ('2464', '283', '洛扎县', '0');
INSERT INTO `sys_district` VALUES ('2465', '283', '加查县', '0');
INSERT INTO `sys_district` VALUES ('2466', '283', '隆子县', '0');
INSERT INTO `sys_district` VALUES ('2467', '283', '错那县', '0');
INSERT INTO `sys_district` VALUES ('2468', '283', '浪卡子县', '0');
INSERT INTO `sys_district` VALUES ('2469', '284', '日喀则市', '0');
INSERT INTO `sys_district` VALUES ('2470', '284', '南木林县', '0');
INSERT INTO `sys_district` VALUES ('2471', '284', '江孜县', '0');
INSERT INTO `sys_district` VALUES ('2472', '284', '定日县', '0');
INSERT INTO `sys_district` VALUES ('2473', '284', '萨迦县', '0');
INSERT INTO `sys_district` VALUES ('2474', '284', '拉孜县', '0');
INSERT INTO `sys_district` VALUES ('2475', '284', '昂仁县', '0');
INSERT INTO `sys_district` VALUES ('2476', '284', '谢通门县', '0');
INSERT INTO `sys_district` VALUES ('2477', '284', '白朗县', '0');
INSERT INTO `sys_district` VALUES ('2478', '284', '仁布县', '0');
INSERT INTO `sys_district` VALUES ('2479', '284', '康马县', '0');
INSERT INTO `sys_district` VALUES ('2480', '284', '定结县', '0');
INSERT INTO `sys_district` VALUES ('2481', '284', '仲巴县', '0');
INSERT INTO `sys_district` VALUES ('2482', '284', '亚东县', '0');
INSERT INTO `sys_district` VALUES ('2483', '284', '吉隆县', '0');
INSERT INTO `sys_district` VALUES ('2484', '284', '聂拉木县', '0');
INSERT INTO `sys_district` VALUES ('2485', '284', '萨嘎县', '0');
INSERT INTO `sys_district` VALUES ('2486', '284', '岗巴县', '0');
INSERT INTO `sys_district` VALUES ('2487', '285', '那曲县', '0');
INSERT INTO `sys_district` VALUES ('2488', '285', '嘉黎县', '0');
INSERT INTO `sys_district` VALUES ('2489', '285', '比如县', '0');
INSERT INTO `sys_district` VALUES ('2490', '285', '聂荣县', '0');
INSERT INTO `sys_district` VALUES ('2491', '285', '安多县', '0');
INSERT INTO `sys_district` VALUES ('2492', '285', '申扎县', '0');
INSERT INTO `sys_district` VALUES ('2493', '285', '索县', '0');
INSERT INTO `sys_district` VALUES ('2494', '285', '班戈县', '0');
INSERT INTO `sys_district` VALUES ('2495', '285', '巴青县', '0');
INSERT INTO `sys_district` VALUES ('2496', '285', '尼玛县', '0');
INSERT INTO `sys_district` VALUES ('2497', '286', '普兰县', '0');
INSERT INTO `sys_district` VALUES ('2498', '286', '札达县', '0');
INSERT INTO `sys_district` VALUES ('2499', '286', '噶尔县', '0');
INSERT INTO `sys_district` VALUES ('2500', '286', '日土县', '0');
INSERT INTO `sys_district` VALUES ('2501', '286', '革吉县', '0');
INSERT INTO `sys_district` VALUES ('2502', '286', '改则县', '0');
INSERT INTO `sys_district` VALUES ('2503', '286', '措勤县', '0');
INSERT INTO `sys_district` VALUES ('2504', '287', '林芝县', '0');
INSERT INTO `sys_district` VALUES ('2505', '287', '工布江达县', '0');
INSERT INTO `sys_district` VALUES ('2506', '287', '米林县', '0');
INSERT INTO `sys_district` VALUES ('2507', '287', '墨脱县', '0');
INSERT INTO `sys_district` VALUES ('2508', '287', '波密县', '0');
INSERT INTO `sys_district` VALUES ('2509', '287', '察隅县', '0');
INSERT INTO `sys_district` VALUES ('2510', '287', '朗县', '0');
INSERT INTO `sys_district` VALUES ('2511', '288', '新城区', '0');
INSERT INTO `sys_district` VALUES ('2512', '288', '碑林区', '0');
INSERT INTO `sys_district` VALUES ('2513', '288', '莲湖区', '0');
INSERT INTO `sys_district` VALUES ('2514', '288', '灞桥区', '0');
INSERT INTO `sys_district` VALUES ('2515', '288', '未央区', '0');
INSERT INTO `sys_district` VALUES ('2516', '288', '雁塔区', '0');
INSERT INTO `sys_district` VALUES ('2517', '288', '阎良区', '0');
INSERT INTO `sys_district` VALUES ('2518', '288', '临潼区', '0');
INSERT INTO `sys_district` VALUES ('2519', '288', '长安区', '0');
INSERT INTO `sys_district` VALUES ('2520', '288', '蓝田县', '0');
INSERT INTO `sys_district` VALUES ('2521', '288', '周至县', '0');
INSERT INTO `sys_district` VALUES ('2522', '288', '户县', '0');
INSERT INTO `sys_district` VALUES ('2523', '288', '高陵县', '0');
INSERT INTO `sys_district` VALUES ('2524', '289', '王益区', '0');
INSERT INTO `sys_district` VALUES ('2525', '289', '印台区', '0');
INSERT INTO `sys_district` VALUES ('2526', '289', '耀州区', '0');
INSERT INTO `sys_district` VALUES ('2527', '289', '宜君县', '0');
INSERT INTO `sys_district` VALUES ('2528', '290', '渭滨区', '0');
INSERT INTO `sys_district` VALUES ('2529', '290', '金台区', '0');
INSERT INTO `sys_district` VALUES ('2530', '290', '陈仓区', '0');
INSERT INTO `sys_district` VALUES ('2531', '290', '凤翔县', '0');
INSERT INTO `sys_district` VALUES ('2532', '290', '岐山县', '0');
INSERT INTO `sys_district` VALUES ('2533', '290', '扶风县', '0');
INSERT INTO `sys_district` VALUES ('2534', '290', '眉县', '0');
INSERT INTO `sys_district` VALUES ('2535', '290', '陇县', '0');
INSERT INTO `sys_district` VALUES ('2536', '290', '千阳县', '0');
INSERT INTO `sys_district` VALUES ('2537', '290', '麟游县', '0');
INSERT INTO `sys_district` VALUES ('2538', '290', '凤县', '0');
INSERT INTO `sys_district` VALUES ('2539', '290', '太白县', '0');
INSERT INTO `sys_district` VALUES ('2540', '291', '秦都区', '0');
INSERT INTO `sys_district` VALUES ('2541', '291', '杨凌区', '0');
INSERT INTO `sys_district` VALUES ('2542', '291', '渭城区', '0');
INSERT INTO `sys_district` VALUES ('2543', '291', '三原县', '0');
INSERT INTO `sys_district` VALUES ('2544', '291', '泾阳县', '0');
INSERT INTO `sys_district` VALUES ('2545', '291', '乾县', '0');
INSERT INTO `sys_district` VALUES ('2546', '291', '礼泉县', '0');
INSERT INTO `sys_district` VALUES ('2547', '291', '永寿县', '0');
INSERT INTO `sys_district` VALUES ('2548', '291', '彬县', '0');
INSERT INTO `sys_district` VALUES ('2549', '291', '长武县', '0');
INSERT INTO `sys_district` VALUES ('2550', '291', '旬邑县', '0');
INSERT INTO `sys_district` VALUES ('2551', '291', '淳化县', '0');
INSERT INTO `sys_district` VALUES ('2552', '291', '武功县', '0');
INSERT INTO `sys_district` VALUES ('2553', '291', '兴平市', '0');
INSERT INTO `sys_district` VALUES ('2554', '292', '临渭区', '0');
INSERT INTO `sys_district` VALUES ('2555', '292', '华县', '0');
INSERT INTO `sys_district` VALUES ('2556', '292', '潼关县', '0');
INSERT INTO `sys_district` VALUES ('2557', '292', '大荔县', '0');
INSERT INTO `sys_district` VALUES ('2558', '292', '合阳县', '0');
INSERT INTO `sys_district` VALUES ('2559', '292', '澄城县', '0');
INSERT INTO `sys_district` VALUES ('2560', '292', '蒲城县', '0');
INSERT INTO `sys_district` VALUES ('2561', '292', '白水县', '0');
INSERT INTO `sys_district` VALUES ('2562', '292', '富平县', '0');
INSERT INTO `sys_district` VALUES ('2563', '292', '韩城市', '0');
INSERT INTO `sys_district` VALUES ('2564', '292', '华阴市', '0');
INSERT INTO `sys_district` VALUES ('2565', '293', '宝塔区', '0');
INSERT INTO `sys_district` VALUES ('2566', '293', '延长县', '0');
INSERT INTO `sys_district` VALUES ('2567', '293', '延川县', '0');
INSERT INTO `sys_district` VALUES ('2568', '293', '子长县', '0');
INSERT INTO `sys_district` VALUES ('2569', '293', '安塞县', '0');
INSERT INTO `sys_district` VALUES ('2570', '293', '志丹县', '0');
INSERT INTO `sys_district` VALUES ('2571', '293', '吴旗县', '0');
INSERT INTO `sys_district` VALUES ('2572', '293', '甘泉县', '0');
INSERT INTO `sys_district` VALUES ('2573', '293', '富县', '0');
INSERT INTO `sys_district` VALUES ('2574', '293', '洛川县', '0');
INSERT INTO `sys_district` VALUES ('2575', '293', '宜川县', '0');
INSERT INTO `sys_district` VALUES ('2576', '293', '黄龙县', '0');
INSERT INTO `sys_district` VALUES ('2577', '293', '黄陵县', '0');
INSERT INTO `sys_district` VALUES ('2578', '294', '汉台区', '0');
INSERT INTO `sys_district` VALUES ('2579', '294', '南郑县', '0');
INSERT INTO `sys_district` VALUES ('2580', '294', '城固县', '0');
INSERT INTO `sys_district` VALUES ('2581', '294', '洋县', '0');
INSERT INTO `sys_district` VALUES ('2582', '294', '西乡县', '0');
INSERT INTO `sys_district` VALUES ('2583', '294', '勉县', '0');
INSERT INTO `sys_district` VALUES ('2584', '294', '宁强县', '0');
INSERT INTO `sys_district` VALUES ('2585', '294', '略阳县', '0');
INSERT INTO `sys_district` VALUES ('2586', '294', '镇巴县', '0');
INSERT INTO `sys_district` VALUES ('2587', '294', '留坝县', '0');
INSERT INTO `sys_district` VALUES ('2588', '294', '佛坪县', '0');
INSERT INTO `sys_district` VALUES ('2589', '295', '榆阳区', '0');
INSERT INTO `sys_district` VALUES ('2590', '295', '神木县', '0');
INSERT INTO `sys_district` VALUES ('2591', '295', '府谷县', '0');
INSERT INTO `sys_district` VALUES ('2592', '295', '横山县', '0');
INSERT INTO `sys_district` VALUES ('2593', '295', '靖边县', '0');
INSERT INTO `sys_district` VALUES ('2594', '295', '定边县', '0');
INSERT INTO `sys_district` VALUES ('2595', '295', '绥德县', '0');
INSERT INTO `sys_district` VALUES ('2596', '295', '米脂县', '0');
INSERT INTO `sys_district` VALUES ('2597', '295', '佳县', '0');
INSERT INTO `sys_district` VALUES ('2598', '295', '吴堡县', '0');
INSERT INTO `sys_district` VALUES ('2599', '295', '清涧县', '0');
INSERT INTO `sys_district` VALUES ('2600', '295', '子洲县', '0');
INSERT INTO `sys_district` VALUES ('2601', '296', '汉滨区', '0');
INSERT INTO `sys_district` VALUES ('2602', '296', '汉阴县', '0');
INSERT INTO `sys_district` VALUES ('2603', '296', '石泉县', '0');
INSERT INTO `sys_district` VALUES ('2604', '296', '宁陕县', '0');
INSERT INTO `sys_district` VALUES ('2605', '296', '紫阳县', '0');
INSERT INTO `sys_district` VALUES ('2606', '296', '岚皋县', '0');
INSERT INTO `sys_district` VALUES ('2607', '296', '平利县', '0');
INSERT INTO `sys_district` VALUES ('2608', '296', '镇坪县', '0');
INSERT INTO `sys_district` VALUES ('2609', '296', '旬阳县', '0');
INSERT INTO `sys_district` VALUES ('2610', '296', '白河县', '0');
INSERT INTO `sys_district` VALUES ('2611', '297', '商州区', '0');
INSERT INTO `sys_district` VALUES ('2612', '297', '洛南县', '0');
INSERT INTO `sys_district` VALUES ('2613', '297', '丹凤县', '0');
INSERT INTO `sys_district` VALUES ('2614', '297', '商南县', '0');
INSERT INTO `sys_district` VALUES ('2615', '297', '山阳县', '0');
INSERT INTO `sys_district` VALUES ('2616', '297', '镇安县', '0');
INSERT INTO `sys_district` VALUES ('2617', '297', '柞水县', '0');
INSERT INTO `sys_district` VALUES ('2618', '298', '城关区', '0');
INSERT INTO `sys_district` VALUES ('2619', '298', '七里河区', '0');
INSERT INTO `sys_district` VALUES ('2620', '298', '西固区', '0');
INSERT INTO `sys_district` VALUES ('2621', '298', '安宁区', '0');
INSERT INTO `sys_district` VALUES ('2622', '298', '红古区', '0');
INSERT INTO `sys_district` VALUES ('2623', '298', '永登县', '0');
INSERT INTO `sys_district` VALUES ('2624', '298', '皋兰县', '0');
INSERT INTO `sys_district` VALUES ('2625', '298', '榆中县', '0');
INSERT INTO `sys_district` VALUES ('2626', '300', '金川区', '0');
INSERT INTO `sys_district` VALUES ('2627', '300', '永昌县', '0');
INSERT INTO `sys_district` VALUES ('2628', '301', '白银区', '0');
INSERT INTO `sys_district` VALUES ('2629', '301', '平川区', '0');
INSERT INTO `sys_district` VALUES ('2630', '301', '靖远县', '0');
INSERT INTO `sys_district` VALUES ('2631', '301', '会宁县', '0');
INSERT INTO `sys_district` VALUES ('2632', '301', '景泰县', '0');
INSERT INTO `sys_district` VALUES ('2633', '302', '秦城区', '0');
INSERT INTO `sys_district` VALUES ('2634', '302', '北道区', '0');
INSERT INTO `sys_district` VALUES ('2635', '302', '清水县', '0');
INSERT INTO `sys_district` VALUES ('2636', '302', '秦安县', '0');
INSERT INTO `sys_district` VALUES ('2637', '302', '甘谷县', '0');
INSERT INTO `sys_district` VALUES ('2638', '302', '武山县', '0');
INSERT INTO `sys_district` VALUES ('2639', '302', '张家川回族自治县', '0');
INSERT INTO `sys_district` VALUES ('2640', '303', '凉州区', '0');
INSERT INTO `sys_district` VALUES ('2641', '303', '民勤县', '0');
INSERT INTO `sys_district` VALUES ('2642', '303', '古浪县', '0');
INSERT INTO `sys_district` VALUES ('2643', '303', '天祝藏族自治县', '0');
INSERT INTO `sys_district` VALUES ('2644', '304', '甘州区', '0');
INSERT INTO `sys_district` VALUES ('2645', '304', '肃南裕固族自治县', '0');
INSERT INTO `sys_district` VALUES ('2646', '304', '民乐县', '0');
INSERT INTO `sys_district` VALUES ('2647', '304', '临泽县', '0');
INSERT INTO `sys_district` VALUES ('2648', '304', '高台县', '0');
INSERT INTO `sys_district` VALUES ('2649', '304', '山丹县', '0');
INSERT INTO `sys_district` VALUES ('2650', '305', '崆峒区', '0');
INSERT INTO `sys_district` VALUES ('2651', '305', '泾川县', '0');
INSERT INTO `sys_district` VALUES ('2652', '305', '灵台县', '0');
INSERT INTO `sys_district` VALUES ('2653', '305', '崇信县', '0');
INSERT INTO `sys_district` VALUES ('2654', '305', '华亭县', '0');
INSERT INTO `sys_district` VALUES ('2655', '305', '庄浪县', '0');
INSERT INTO `sys_district` VALUES ('2656', '305', '静宁县', '0');
INSERT INTO `sys_district` VALUES ('2657', '306', '肃州区', '0');
INSERT INTO `sys_district` VALUES ('2658', '306', '金塔县', '0');
INSERT INTO `sys_district` VALUES ('2659', '306', '安西县', '0');
INSERT INTO `sys_district` VALUES ('2660', '306', '肃北蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('2661', '306', '阿克塞哈萨克族自治县', '0');
INSERT INTO `sys_district` VALUES ('2662', '306', '玉门市', '0');
INSERT INTO `sys_district` VALUES ('2663', '306', '敦煌市', '0');
INSERT INTO `sys_district` VALUES ('2664', '307', '西峰区', '0');
INSERT INTO `sys_district` VALUES ('2665', '307', '庆城县', '0');
INSERT INTO `sys_district` VALUES ('2666', '307', '环县', '0');
INSERT INTO `sys_district` VALUES ('2667', '307', '华池县', '0');
INSERT INTO `sys_district` VALUES ('2668', '307', '合水县', '0');
INSERT INTO `sys_district` VALUES ('2669', '307', '正宁县', '0');
INSERT INTO `sys_district` VALUES ('2670', '307', '宁县', '0');
INSERT INTO `sys_district` VALUES ('2671', '307', '镇原县', '0');
INSERT INTO `sys_district` VALUES ('2672', '308', '安定区', '0');
INSERT INTO `sys_district` VALUES ('2673', '308', '通渭县', '0');
INSERT INTO `sys_district` VALUES ('2674', '308', '陇西县', '0');
INSERT INTO `sys_district` VALUES ('2675', '308', '渭源县', '0');
INSERT INTO `sys_district` VALUES ('2676', '308', '临洮县', '0');
INSERT INTO `sys_district` VALUES ('2677', '308', '漳县', '0');
INSERT INTO `sys_district` VALUES ('2678', '308', '岷县', '0');
INSERT INTO `sys_district` VALUES ('2679', '309', '武都区', '0');
INSERT INTO `sys_district` VALUES ('2680', '309', '成县', '0');
INSERT INTO `sys_district` VALUES ('2681', '309', '文县', '0');
INSERT INTO `sys_district` VALUES ('2682', '309', '宕昌县', '0');
INSERT INTO `sys_district` VALUES ('2683', '309', '康县', '0');
INSERT INTO `sys_district` VALUES ('2684', '309', '西和县', '0');
INSERT INTO `sys_district` VALUES ('2685', '309', '礼县', '0');
INSERT INTO `sys_district` VALUES ('2686', '309', '徽县', '0');
INSERT INTO `sys_district` VALUES ('2687', '309', '两当县', '0');
INSERT INTO `sys_district` VALUES ('2688', '310', '临夏市', '0');
INSERT INTO `sys_district` VALUES ('2689', '310', '临夏县', '0');
INSERT INTO `sys_district` VALUES ('2690', '310', '康乐县', '0');
INSERT INTO `sys_district` VALUES ('2691', '310', '永靖县', '0');
INSERT INTO `sys_district` VALUES ('2692', '310', '广河县', '0');
INSERT INTO `sys_district` VALUES ('2693', '310', '和政县', '0');
INSERT INTO `sys_district` VALUES ('2694', '310', '东乡族自治县', '0');
INSERT INTO `sys_district` VALUES ('2695', '310', '积石山保安族东乡族撒拉族自治县', '0');
INSERT INTO `sys_district` VALUES ('2696', '311', '合作市', '0');
INSERT INTO `sys_district` VALUES ('2697', '311', '临潭县', '0');
INSERT INTO `sys_district` VALUES ('2698', '311', '卓尼县', '0');
INSERT INTO `sys_district` VALUES ('2699', '311', '舟曲县', '0');
INSERT INTO `sys_district` VALUES ('2700', '311', '迭部县', '0');
INSERT INTO `sys_district` VALUES ('2701', '311', '玛曲县', '0');
INSERT INTO `sys_district` VALUES ('2702', '311', '碌曲县', '0');
INSERT INTO `sys_district` VALUES ('2703', '311', '夏河县', '0');
INSERT INTO `sys_district` VALUES ('2704', '312', '城东区', '0');
INSERT INTO `sys_district` VALUES ('2705', '312', '城中区', '0');
INSERT INTO `sys_district` VALUES ('2706', '312', '城西区', '0');
INSERT INTO `sys_district` VALUES ('2707', '312', '城北区', '0');
INSERT INTO `sys_district` VALUES ('2708', '312', '大通回族土族自治县', '0');
INSERT INTO `sys_district` VALUES ('2709', '312', '湟中县', '0');
INSERT INTO `sys_district` VALUES ('2710', '312', '湟源县', '0');
INSERT INTO `sys_district` VALUES ('2711', '313', '平安县', '0');
INSERT INTO `sys_district` VALUES ('2712', '313', '民和回族土族自治县', '0');
INSERT INTO `sys_district` VALUES ('2713', '313', '乐都县', '0');
INSERT INTO `sys_district` VALUES ('2714', '313', '互助土族自治县', '0');
INSERT INTO `sys_district` VALUES ('2715', '313', '化隆回族自治县', '0');
INSERT INTO `sys_district` VALUES ('2716', '313', '循化撒拉族自治县', '0');
INSERT INTO `sys_district` VALUES ('2717', '314', '门源回族自治县', '0');
INSERT INTO `sys_district` VALUES ('2718', '314', '祁连县', '0');
INSERT INTO `sys_district` VALUES ('2719', '314', '海晏县', '0');
INSERT INTO `sys_district` VALUES ('2720', '314', '刚察县', '0');
INSERT INTO `sys_district` VALUES ('2721', '315', '同仁县', '0');
INSERT INTO `sys_district` VALUES ('2722', '315', '尖扎县', '0');
INSERT INTO `sys_district` VALUES ('2723', '315', '泽库县', '0');
INSERT INTO `sys_district` VALUES ('2724', '315', '河南蒙古族自治县', '0');
INSERT INTO `sys_district` VALUES ('2725', '316', '共和县', '0');
INSERT INTO `sys_district` VALUES ('2726', '316', '同德县', '0');
INSERT INTO `sys_district` VALUES ('2727', '316', '贵德县', '0');
INSERT INTO `sys_district` VALUES ('2728', '316', '兴海县', '0');
INSERT INTO `sys_district` VALUES ('2729', '316', '贵南县', '0');
INSERT INTO `sys_district` VALUES ('2730', '317', '玛沁县', '0');
INSERT INTO `sys_district` VALUES ('2731', '317', '班玛县', '0');
INSERT INTO `sys_district` VALUES ('2732', '317', '甘德县', '0');
INSERT INTO `sys_district` VALUES ('2733', '317', '达日县', '0');
INSERT INTO `sys_district` VALUES ('2734', '317', '久治县', '0');
INSERT INTO `sys_district` VALUES ('2735', '317', '玛多县', '0');
INSERT INTO `sys_district` VALUES ('2736', '318', '玉树县', '0');
INSERT INTO `sys_district` VALUES ('2737', '318', '杂多县', '0');
INSERT INTO `sys_district` VALUES ('2738', '318', '称多县', '0');
INSERT INTO `sys_district` VALUES ('2739', '318', '治多县', '0');
INSERT INTO `sys_district` VALUES ('2740', '318', '囊谦县', '0');
INSERT INTO `sys_district` VALUES ('2741', '318', '曲麻莱县', '0');
INSERT INTO `sys_district` VALUES ('2742', '319', '格尔木市', '0');
INSERT INTO `sys_district` VALUES ('2743', '319', '德令哈市', '0');
INSERT INTO `sys_district` VALUES ('2744', '319', '乌兰县', '0');
INSERT INTO `sys_district` VALUES ('2745', '319', '都兰县', '0');
INSERT INTO `sys_district` VALUES ('2746', '319', '天峻县', '0');
INSERT INTO `sys_district` VALUES ('2747', '320', '兴庆区', '0');
INSERT INTO `sys_district` VALUES ('2748', '320', '西夏区', '0');
INSERT INTO `sys_district` VALUES ('2749', '320', '金凤区', '0');
INSERT INTO `sys_district` VALUES ('2750', '320', '永宁县', '0');
INSERT INTO `sys_district` VALUES ('2751', '320', '贺兰县', '0');
INSERT INTO `sys_district` VALUES ('2752', '320', '灵武市', '0');
INSERT INTO `sys_district` VALUES ('2753', '321', '大武口区', '0');
INSERT INTO `sys_district` VALUES ('2754', '321', '惠农区', '0');
INSERT INTO `sys_district` VALUES ('2755', '321', '平罗县', '0');
INSERT INTO `sys_district` VALUES ('2756', '322', '利通区', '0');
INSERT INTO `sys_district` VALUES ('2757', '322', '盐池县', '0');
INSERT INTO `sys_district` VALUES ('2758', '322', '同心县', '0');
INSERT INTO `sys_district` VALUES ('2759', '322', '青铜峡市', '0');
INSERT INTO `sys_district` VALUES ('2760', '323', '原州区', '0');
INSERT INTO `sys_district` VALUES ('2761', '323', '西吉县', '0');
INSERT INTO `sys_district` VALUES ('2762', '323', '隆德县', '0');
INSERT INTO `sys_district` VALUES ('2763', '323', '泾源县', '0');
INSERT INTO `sys_district` VALUES ('2764', '323', '彭阳县', '0');
INSERT INTO `sys_district` VALUES ('2765', '324', '沙坡头区', '0');
INSERT INTO `sys_district` VALUES ('2766', '324', '中宁县', '0');
INSERT INTO `sys_district` VALUES ('2767', '324', '海原县', '0');
INSERT INTO `sys_district` VALUES ('2768', '325', '天山区', '0');
INSERT INTO `sys_district` VALUES ('2769', '325', '沙依巴克区', '0');
INSERT INTO `sys_district` VALUES ('2770', '325', '新市区', '0');
INSERT INTO `sys_district` VALUES ('2771', '325', '水磨沟区', '0');
INSERT INTO `sys_district` VALUES ('2772', '325', '头屯河区', '0');
INSERT INTO `sys_district` VALUES ('2773', '325', '达坂城区', '0');
INSERT INTO `sys_district` VALUES ('2774', '325', '东山区', '0');
INSERT INTO `sys_district` VALUES ('2775', '325', '乌鲁木齐县', '0');
INSERT INTO `sys_district` VALUES ('2776', '326', '独山子区', '0');
INSERT INTO `sys_district` VALUES ('2777', '326', '克拉玛依区', '0');
INSERT INTO `sys_district` VALUES ('2778', '326', '白碱滩区', '0');
INSERT INTO `sys_district` VALUES ('2779', '326', '乌尔禾区', '0');
INSERT INTO `sys_district` VALUES ('2780', '327', '吐鲁番市', '0');
INSERT INTO `sys_district` VALUES ('2781', '327', '鄯善县', '0');
INSERT INTO `sys_district` VALUES ('2782', '327', '托克逊县', '0');
INSERT INTO `sys_district` VALUES ('2783', '328', '哈密市', '0');
INSERT INTO `sys_district` VALUES ('2784', '328', '巴里坤哈萨克自治县', '0');
INSERT INTO `sys_district` VALUES ('2785', '328', '伊吾县', '0');
INSERT INTO `sys_district` VALUES ('2786', '329', '昌吉市', '0');
INSERT INTO `sys_district` VALUES ('2787', '329', '阜康市', '0');
INSERT INTO `sys_district` VALUES ('2788', '329', '米泉市', '0');
INSERT INTO `sys_district` VALUES ('2789', '329', '呼图壁县', '0');
INSERT INTO `sys_district` VALUES ('2790', '329', '玛纳斯县', '0');
INSERT INTO `sys_district` VALUES ('2791', '329', '奇台县', '0');
INSERT INTO `sys_district` VALUES ('2792', '329', '吉木萨尔县', '0');
INSERT INTO `sys_district` VALUES ('2793', '329', '木垒哈萨克自治县', '0');
INSERT INTO `sys_district` VALUES ('2794', '330', '博乐市', '0');
INSERT INTO `sys_district` VALUES ('2795', '330', '精河县', '0');
INSERT INTO `sys_district` VALUES ('2796', '330', '温泉县', '0');
INSERT INTO `sys_district` VALUES ('2797', '331', '库尔勒市', '0');
INSERT INTO `sys_district` VALUES ('2798', '331', '轮台县', '0');
INSERT INTO `sys_district` VALUES ('2799', '331', '尉犁县', '0');
INSERT INTO `sys_district` VALUES ('2800', '331', '若羌县', '0');
INSERT INTO `sys_district` VALUES ('2801', '331', '且末县', '0');
INSERT INTO `sys_district` VALUES ('2802', '331', '焉耆回族自治县', '0');
INSERT INTO `sys_district` VALUES ('2803', '331', '和静县', '0');
INSERT INTO `sys_district` VALUES ('2804', '331', '和硕县', '0');
INSERT INTO `sys_district` VALUES ('2805', '331', '博湖县', '0');
INSERT INTO `sys_district` VALUES ('2806', '332', '阿克苏市', '0');
INSERT INTO `sys_district` VALUES ('2807', '332', '温宿县', '0');
INSERT INTO `sys_district` VALUES ('2808', '332', '库车县', '0');
INSERT INTO `sys_district` VALUES ('2809', '332', '沙雅县', '0');
INSERT INTO `sys_district` VALUES ('2810', '332', '新和县', '0');
INSERT INTO `sys_district` VALUES ('2811', '332', '拜城县', '0');
INSERT INTO `sys_district` VALUES ('2812', '332', '乌什县', '0');
INSERT INTO `sys_district` VALUES ('2813', '332', '阿瓦提县', '0');
INSERT INTO `sys_district` VALUES ('2814', '332', '柯坪县', '0');
INSERT INTO `sys_district` VALUES ('2815', '333', '阿图什市', '0');
INSERT INTO `sys_district` VALUES ('2816', '333', '阿克陶县', '0');
INSERT INTO `sys_district` VALUES ('2817', '333', '阿合奇县', '0');
INSERT INTO `sys_district` VALUES ('2818', '333', '乌恰县', '0');
INSERT INTO `sys_district` VALUES ('2819', '334', '喀什市', '0');
INSERT INTO `sys_district` VALUES ('2820', '334', '疏附县', '0');
INSERT INTO `sys_district` VALUES ('2821', '334', '疏勒县', '0');
INSERT INTO `sys_district` VALUES ('2822', '334', '英吉沙县', '0');
INSERT INTO `sys_district` VALUES ('2823', '334', '泽普县', '0');
INSERT INTO `sys_district` VALUES ('2824', '334', '莎车县', '0');
INSERT INTO `sys_district` VALUES ('2825', '334', '叶城县', '0');
INSERT INTO `sys_district` VALUES ('2826', '334', '麦盖提县', '0');
INSERT INTO `sys_district` VALUES ('2827', '334', '岳普湖县', '0');
INSERT INTO `sys_district` VALUES ('2828', '334', '伽师县', '0');
INSERT INTO `sys_district` VALUES ('2829', '334', '巴楚县', '0');
INSERT INTO `sys_district` VALUES ('2830', '334', '塔什库尔干塔吉克自治县', '0');
INSERT INTO `sys_district` VALUES ('2831', '335', '和田市', '0');
INSERT INTO `sys_district` VALUES ('2832', '335', '和田县', '0');
INSERT INTO `sys_district` VALUES ('2833', '335', '墨玉县', '0');
INSERT INTO `sys_district` VALUES ('2834', '335', '皮山县', '0');
INSERT INTO `sys_district` VALUES ('2835', '335', '洛浦县', '0');
INSERT INTO `sys_district` VALUES ('2836', '335', '策勒县', '0');
INSERT INTO `sys_district` VALUES ('2837', '335', '于田县', '0');
INSERT INTO `sys_district` VALUES ('2838', '335', '民丰县', '0');
INSERT INTO `sys_district` VALUES ('2839', '336', '伊宁市', '0');
INSERT INTO `sys_district` VALUES ('2840', '336', '奎屯市', '0');
INSERT INTO `sys_district` VALUES ('2841', '336', '伊宁县', '0');
INSERT INTO `sys_district` VALUES ('2842', '336', '察布查尔锡伯自治县', '0');
INSERT INTO `sys_district` VALUES ('2843', '336', '霍城县', '0');
INSERT INTO `sys_district` VALUES ('2844', '336', '巩留县', '0');
INSERT INTO `sys_district` VALUES ('2845', '336', '新源县', '0');
INSERT INTO `sys_district` VALUES ('2846', '336', '昭苏县', '0');
INSERT INTO `sys_district` VALUES ('2847', '336', '特克斯县', '0');
INSERT INTO `sys_district` VALUES ('2848', '336', '尼勒克县', '0');
INSERT INTO `sys_district` VALUES ('2849', '337', '塔城市', '0');
INSERT INTO `sys_district` VALUES ('2850', '337', '乌苏市', '0');
INSERT INTO `sys_district` VALUES ('2851', '337', '额敏县', '0');
INSERT INTO `sys_district` VALUES ('2852', '337', '沙湾县', '0');
INSERT INTO `sys_district` VALUES ('2853', '337', '托里县', '0');
INSERT INTO `sys_district` VALUES ('2854', '337', '裕民县', '0');
INSERT INTO `sys_district` VALUES ('2855', '337', '和布克赛尔蒙古自治县', '0');
INSERT INTO `sys_district` VALUES ('2856', '338', '阿勒泰市', '0');
INSERT INTO `sys_district` VALUES ('2857', '338', '布尔津县', '0');
INSERT INTO `sys_district` VALUES ('2858', '338', '富蕴县', '0');
INSERT INTO `sys_district` VALUES ('2859', '338', '福海县', '0');
INSERT INTO `sys_district` VALUES ('2860', '338', '哈巴河县', '0');
INSERT INTO `sys_district` VALUES ('2861', '338', '青河县', '0');
INSERT INTO `sys_district` VALUES ('2862', '338', '吉木乃县', '0');
INSERT INTO `sys_district` VALUES ('2867', '352', '宛平县', '1');
INSERT INTO `sys_district` VALUES ('2868', '352', '111111', '5');
INSERT INTO `sys_district` VALUES ('2869', '345', '台北', '2');

-- ----------------------------
-- Table structure for `sys_province`
-- ----------------------------
DROP TABLE IF EXISTS `sys_province`;
CREATE TABLE `sys_province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_id` tinyint(4) NOT NULL DEFAULT '0',
  `province_name` varchar(255) NOT NULL DEFAULT '',
  `sort` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`province_id`),
  KEY `IDX_g_province_ProvinceName` (`province_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=481;

-- ----------------------------
-- Records of sys_province
-- ----------------------------
INSERT INTO `sys_province` VALUES ('1', '2', '北京市', '1');
INSERT INTO `sys_province` VALUES ('2', '2', '天津市', '0');
INSERT INTO `sys_province` VALUES ('3', '2', '河北省', '0');
INSERT INTO `sys_province` VALUES ('4', '2', '山西省', '0');
INSERT INTO `sys_province` VALUES ('5', '2', '内蒙古自治区', '0');
INSERT INTO `sys_province` VALUES ('6', '5', '辽宁省', '0');
INSERT INTO `sys_province` VALUES ('7', '5', '吉林省', '0');
INSERT INTO `sys_province` VALUES ('8', '5', '黑龙江省', '0');
INSERT INTO `sys_province` VALUES ('9', '1', '上海市', '0');
INSERT INTO `sys_province` VALUES ('10', '1', '江苏省', '0');
INSERT INTO `sys_province` VALUES ('11', '1', '浙江省', '0');
INSERT INTO `sys_province` VALUES ('12', '1', '安徽省', '0');
INSERT INTO `sys_province` VALUES ('13', '3', '福建省', '0');
INSERT INTO `sys_province` VALUES ('14', '1', '江西省', '0');
INSERT INTO `sys_province` VALUES ('15', '2', '山东省', '0');
INSERT INTO `sys_province` VALUES ('16', '4', '河南省', '0');
INSERT INTO `sys_province` VALUES ('17', '4', '湖北省', '0');
INSERT INTO `sys_province` VALUES ('18', '4', '湖南省', '0');
INSERT INTO `sys_province` VALUES ('19', '3', '广东省', '0');
INSERT INTO `sys_province` VALUES ('20', '3', '广西壮族自治区', '0');
INSERT INTO `sys_province` VALUES ('21', '3', '海南省', '0');
INSERT INTO `sys_province` VALUES ('22', '7', '重庆市', '0');
INSERT INTO `sys_province` VALUES ('23', '7', '四川省', '0');
INSERT INTO `sys_province` VALUES ('24', '7', '贵州省', '0');
INSERT INTO `sys_province` VALUES ('25', '7', '云南省', '0');
INSERT INTO `sys_province` VALUES ('26', '7', '西藏自治区', '0');
INSERT INTO `sys_province` VALUES ('27', '6', '陕西省', '0');
INSERT INTO `sys_province` VALUES ('28', '6', '甘肃省', '0');
INSERT INTO `sys_province` VALUES ('29', '6', '青海省', '0');
INSERT INTO `sys_province` VALUES ('30', '6', '宁夏回族自治区', '0');
INSERT INTO `sys_province` VALUES ('31', '6', '新疆维吾尔自治区', '0');
INSERT INTO `sys_province` VALUES ('32', '8', '香港特别行政区', '0');
INSERT INTO `sys_province` VALUES ('33', '8', '澳门特别行政区', '0');
INSERT INTO `sys_province` VALUES ('34', '8', '台湾省', '0');

-- ----------------------------
-- Table structure for `url_rewrite`
-- ----------------------------
DROP TABLE IF EXISTS `url_rewrite`;
CREATE TABLE `url_rewrite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL COMMENT '类型',
  `custom_url_key` varchar(255) DEFAULT NULL COMMENT '自定义url key',
  `origin_url` varchar(255) DEFAULT NULL COMMENT '原来的url ',
  PRIMARY KEY (`id`),
  KEY `custom_url_key` (`custom_url_key`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url_rewrite
-- ----------------------------
INSERT INTO `url_rewrite` VALUES ('1', '1', '1', '1');
INSERT INTO `url_rewrite` VALUES ('2', 'system', '/4444444444.html', '/cms/article/index?_id=57919ea0f656f2154de25ca9');
INSERT INTO `url_rewrite` VALUES ('3', 'system', '/72527', '/cms/article/index?_id=0');
INSERT INTO `url_rewrite` VALUES ('4', 'system', '/fashion-women.html', '/cms/article/index?_id=57936c63f656f2f42ce25ca4');
INSERT INTO `url_rewrite` VALUES ('5', 'system', '/fashion-women-74341929', '/cms/article/index?_id=57936ae1f656f2f42ce25ca3');
INSERT INTO `url_rewrite` VALUES ('6', 'system', '/67535963', '/cms/article/index?_id=57937062f656f2e944e25ca5');
INSERT INTO `url_rewrite` VALUES ('7', 'system', '/11571166', '/cms/article/index?_id=57937114f656f2f42ce25ca5');
INSERT INTO `url_rewrite` VALUES ('8', 'system', '/98145363', '/cms/article/index?id=27');
INSERT INTO `url_rewrite` VALUES ('9', 'system', '/55555555555', '/cms/article/index?id=26');
INSERT INTO `url_rewrite` VALUES ('10', 'system', '/67786962', '/cms/article/index?id=29');
INSERT INTO `url_rewrite` VALUES ('11', 'system', '/fashion-hand-bag-for-women22', '/cms/article/index?id=30');
INSERT INTO `url_rewrite` VALUES ('12', 'system', '/57161191', '/?_id=57aa815bf656f26e70e25ca3');
INSERT INTO `url_rewrite` VALUES ('13', 'system', '/67274789', '/?_id=57aa897cf656f26e70e25ca4');
INSERT INTO `url_rewrite` VALUES ('14', 'system', '/432432', '/catalog/category/index?_id=57aa8d7ff656f2107ee25ca3');
INSERT INTO `url_rewrite` VALUES ('15', 'system', '/111111111111111', '/catalog/category/index?_id=57aa8d91f656f24c5fe25ca3');
INSERT INTO `url_rewrite` VALUES ('16', 'system', '/women', '/catalog/category/index?_id=57aa8f18f656f24c5fe25ca4');
INSERT INTO `url_rewrite` VALUES ('17', 'system', '/men', '/catalog/category/index?_id=57aa8f1ef656f26e70e25ca5');
INSERT INTO `url_rewrite` VALUES ('18', 'system', '/lady', '/catalog/category/index?_id=57aa8f27f656f2107ee25ca4');
INSERT INTO `url_rewrite` VALUES ('19', 'system', '/2121', '/catalog/category/index?_id=57aacb89f656f22e0be25ca3');
INSERT INTO `url_rewrite` VALUES ('20', 'system', '/1111en', '/catalog/category/index?_id=57aacbbcf656f2f610e25ca3');
INSERT INTO `url_rewrite` VALUES ('21', 'system', '/1111en-66254841', '/catalog/category/index?_id=57aacbe3f656f22e0be25ca4');
INSERT INTO `url_rewrite` VALUES ('22', 'system', '/2222222', '/catalog/category/index?_id=57aacc35f656f22e0be25ca5');
INSERT INTO `url_rewrite` VALUES ('23', 'system', '/1111', '/catalog/category/index?_id=57aacdf0f656f2b00ee25ca3');
INSERT INTO `url_rewrite` VALUES ('45', 'system', '/1111111111111111', '/catalog/product/index?_id=57b5936af656f2ff293bf56e');
