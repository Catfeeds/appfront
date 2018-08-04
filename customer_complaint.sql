-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-04 09:08:57
-- 服务器版本： 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fecshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer_complaint`
--

CREATE TABLE `customer_complaint` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL COMMENT '用户id',
  `shop_id` int(10) NOT NULL COMMENT '店铺id',
  `content` varchar(255) NOT NULL COMMENT '投诉内容',
  `ctype` varchar(50) NOT NULL COMMENT '投诉类型:1为商家爽约，2为服务不好，3为态度不好，4为连带推销，5为恶意跳单。6为乱收费，7为其他',
  `times` int(15) NOT NULL COMMENT '投诉时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户投诉表';

--
-- 转存表中的数据 `customer_complaint`
--

INSERT INTO `customer_complaint` (`id`, `uid`, `shop_id`, `content`, `ctype`, `times`) VALUES
(1, 1, 3, '1', '1', 1533219000),
(2, 1, 3, '1', '2', 1533219000),
(3, 1, 3, '1', '3', 1533219000),
(4, 1, 3, '1', '4', 1533219000),
(5, 1, 3, '1', '5', 1533219000),
(6, 1, 3, '1', '5', 1533219000),
(7, 1, 3, '1', '7', 1533219000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
