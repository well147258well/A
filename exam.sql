-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-04-14 04:28:48
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `well`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exam`
--

CREATE TABLE `exam` (
  `no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `times` int(30) NOT NULL,
  `lasttime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `exam`
--

INSERT INTO `exam` (`no`, `name`, `pwd`, `email`, `phone`, `times`, `lasttime`) VALUES
(1, 'root', '123456', '', '', 0, '2016- 04 - 14 / 09 : 56 : 08'),
(2, 'root', '123456', '', '', 0, '2016- 04 - 14 / 09 : 56 : 40'),
(3, 'zxcwell123', 'zxcwell987', 'well147258well@gmail.com', '0930675942', 0, '2016- 04 - 14 / 09 : 58 : 02');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`no`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `exam`
--
ALTER TABLE `exam`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
