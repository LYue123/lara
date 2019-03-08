-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 05 日 09:00
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `study`
--

-- --------------------------------------------------------

--
-- 表的结构 `study_student`
--

CREATE TABLE IF NOT EXISTS `study_student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `s_no` varchar(12) NOT NULL,
  `s_user` varchar(50) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_nation` varchar(5) NOT NULL,
  `s_sex` varchar(5) NOT NULL,
  `s_major` varchar(20) NOT NULL,
  `s_class` varchar(10) NOT NULL,
  `head` varchar(255) NOT NULL,
  `type` int(4) NOT NULL,
  `key` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `study_student`
--

INSERT INTO `study_student` (`id`, `s_no`, `s_user`, `s_password`, `s_email`, `s_nation`, `s_sex`, `s_major`, `s_class`, `head`, `type`, `key`) VALUES
(1, '2015083208', '李成', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '汉', '保密', '计算机', '154', '/Cms/Uploads/Student/head/2017-05-05/590bcb7696fbe.jpg', 1, '0'),
(2, '2015083207', '兰博', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(3, '2015083210', '凌海森', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(4, '2015083212', '廖宇', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(5, '2015081616', '菲菲', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(6, '2015083215', '马源', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(7, '2015083202', '戴桐桐', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(8, '2015083211', '林益敏', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '0'),
(9, '2015083201', '陈志峰', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '汉', '男', '网络工程', '152', '', 1, '0'),
(10, '2015083200', 'user', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '3b777b775721dfa8d36de2a320a03e53'),
(11, '2105083233', '', '', '', '', '', '', '', '', 1, '8c9ce62eb00bfc39549c0b3cbe197ceb'),
(12, '2105083234', '', '', '', '', '', '', '', '', 0, '01634584b864f5f64d799199643f06d1'),
(13, '2015083205', '韩旭', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '22f7e834551fbb0f6ea55b04889e8eb1'),
(14, '', '', '', '', '', '', '', '', '', 0, 'da38769133a761c1db1bf48db6e4a135'),
(15, '', '', '', '', '', '', '', '', '', 0, '150ed5c71f73db79f0ee5a7ac78572e6'),
(16, '', '', '', '', '', '', '', '', '', 0, '23de35e670b2ced8c8a7ed4b915df4b7'),
(17, '2015083266', 'admin', 'e99a18c428cb38d5f260853678922e03', '1150400220@qq.com', '', '', '', '', '', 1, '96055f5b06bf9381ac43879351642cf5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
