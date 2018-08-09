-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-09 08:22:17
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
-- 表的结构 `page_view`
--

CREATE TABLE `page_view` (
  `id` int(10) NOT NULL,
  `shop_id` int(10) NOT NULL,
  `counts` int(30) NOT NULL DEFAULT '1' COMMENT '每访问一次，该shop_id对应的counts更新增加一次',
  `time` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `page_view`
--

INSERT INTO `page_view` (`id`, `shop_id`, `counts`, `time`) VALUES
(6, 3, 1, 1533711908),
(5, 3, 1, 1533711508),
(7, 3, 1, 1533712028),
(8, 3, 1, 1533712063),
(9, 3, 1, 1533713126),
(10, 3, 1, 1533713291),
(11, 3, 1, 1533783003),
(12, 3, 1, 1533783015),
(13, 3, 1, 1533783035),
(14, 3, 1, 1533783141),
(15, 3, 1, 1533783347),
(16, 3, 1, 1533783440),
(17, 3, 1, 1533783519),
(18, 3, 1, 1533783590),
(19, 3, 1, 1533783614),
(20, 3, 1, 1533783665),
(21, 3, 1, 1533783771),
(22, 3, 1, 1533783911),
(23, 3, 1, 1533783966),
(24, 3, 1, 1533784043),
(25, 3, 1, 1533784105),
(26, 3, 1, 1533784187),
(27, 3, 1, 1533784306),
(28, 3, 1, 1533784365),
(29, 3, 1, 1533784572),
(30, 3, 1, 1533784593),
(31, 3, 1, 1533784657),
(32, 3, 1, 1533784721),
(33, 3, 1, 1533784819),
(34, 3, 1, 1533784841),
(35, 3, 1, 1533784914),
(36, 3, 1, 1533784959),
(37, 3, 1, 1533785098),
(38, 3, 1, 1533785265),
(39, 3, 1, 1533785457),
(40, 3, 1, 1533785675),
(41, 3, 1, 1533785833),
(42, 3, 1, 1533785881),
(43, 3, 1, 1533785917);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_view`
--
ALTER TABLE `page_view`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `page_view`
--
ALTER TABLE `page_view`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
