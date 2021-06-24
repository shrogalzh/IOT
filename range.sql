-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 يونيو 2021 الساعة 10:10
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control of robot arm`
--

-- --------------------------------------------------------

--
-- بنية الجدول `range`
--

CREATE TABLE `range` (
  `Range1` int(11) NOT NULL,
  `Range2` int(11) NOT NULL,
  `Range3` int(11) NOT NULL,
  `Range4` int(11) NOT NULL,
  `Range5` int(11) NOT NULL,
  `Range6` int(11) NOT NULL,
  `on or off` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `range`
--

INSERT INTO `range` (`Range1`, `Range2`, `Range3`, `Range4`, `Range5`, `Range6`, `on or off`) VALUES
(50, 128, 50, 50, 50, 50, 'OFF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
