-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Jul 30, 2018, 02:18 PM
-- 伺服器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `pcschool`
--

-- --------------------------------------------------------

--
-- 資料表格式： `adminlist`
--

CREATE TABLE IF NOT EXISTS `adminlist` (
  `a_username` char(20) NOT NULL COMMENT '管理帳號',
  `a_passwd` char(20) NOT NULL COMMENT '管理密碼',
  KEY `a_username` (`a_username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `adminlist`
--

INSERT INTO `adminlist` (`a_username`, `a_passwd`) VALUES
('admin', '123');
