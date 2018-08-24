-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: sql107.byetcluster.com
-- 生成日期: 2017 年 07 月 20 日 04:25
-- 服务器版本: 5.6.35-81.0
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `b7_20407529_ben`
--

-- --------------------------------------------------------

--
-- 表的结构 `ben_pda`
--

CREATE TABLE IF NOT EXISTS `ben_pda` (
  `ben_id` int(5) NOT NULL AUTO_INCREMENT,
  `ben_userdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Pdt_type` varchar(10) DEFAULT NULL,
  `Pdt_number` int(10) DEFAULT NULL,
  `Pdt_name` varchar(20) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Qtd` int(10) DEFAULT NULL,
  `Pdt_img` varchar(10) DEFAULT NULL,
  `Pdt_spec` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ben_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `ben_pda`
--

INSERT INTO `ben_pda` (`ben_id`, `ben_userdate`, `Pdt_type`, `Pdt_number`, `Pdt_name`, `Price`, `Qtd`, `Pdt_img`, `Pdt_spec`) VALUES
(1, '2017-07-20 08:26:12', 'PDA', 1, 'Garofalo', 150, 20, 'PD_A01.jpg', ''),
(2, '2017-07-20 08:26:12', 'PDA', 2, 'Tortellini', 180, 20, 'PD_A02.jpg', ''),
(3, '2017-07-20 08:26:12', 'PDA', 3, 'Tagliatelle', 200, 30, 'PD_A03.jpg', ''),
(4, '2017-07-20 08:26:12', 'PDA', 4, 'Spaghetti', 220, 20, 'PD_A04.jpg', ''),
(5, '2017-07-20 08:26:12', 'PDA', 5, 'Gnocchi', 250, 30, 'PD_A05.jpg', ''),
(6, '2017-07-20 08:26:12', 'PDA', 6, 'Fusilli', 180, 20, 'PD_A06.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
