-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2019 at 06:34 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridges`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cell phone` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL,
  `account_created` timestamp NULL DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `tries` int(11) DEFAULT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `cell phone`, `type`, `account_created`, `image`, `age`, `gender`, `address`, `city`, `tries`) VALUES
(6, 'admin', 'admin@ya', '202cb962ac59075b964b07152d234b70', '435345345', 'admin', '2018-11-23 08:15:05', '', 0, '', '', '', 5),
(15, 'ashdah2', '1111@yahoo.com', 'b59c67bf196a4758191e42f76670ceba', '392389893', 'staff', '2019-12-03 22:20:47', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Shehroze Aamer', '123@hotmail.com', '202cb962ac59075b964b07152d234b70', '3331913600', 'staff', '2018-12-03 02:29:57', NULL, NULL, NULL, NULL, NULL, 5),
(14, 'sadsada', '555@hotmail.com', '202cb962ac59075b964b07152d234b70', '324324', 'staff', '2018-12-10 16:18:40', NULL, NULL, NULL, NULL, NULL, 5),
(16, 'Noor', 'nhudda@adelphi.edu', '01502e5160ebd853f1e863c62b84d82e', '4443322', 'staff', '2019-12-03 22:22:49', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Stephanie Grindell', 'sgrindell@adelphi.edu', '70bf0a120d703b08d4584b2586447e6c', '631-484-4018', 'staff', '2019-12-04 17:05:19', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `user_email`, `employee_email`, `time`) VALUES
(1, 'asdasdasdasda', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 13:45:32'),
(2, 'sasdsadsad', '111@hotmail.com', 'shehroze19@hotmail.com', '2018-12-07 13:59:04'),
(3, 'asdasd', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:07:30'),
(4, 'asdasdasd', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:07:37'),
(5, 'asdasdasd', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:08:24'),
(6, 'asdas', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:09:44'),
(7, 'sdff', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:12:33'),
(8, 'asdasd', 'shehroze19@hotmail.com', '111@hotmail.com', '2018-12-07 14:19:53'),
(9, 'sadasd', '111@hotmail.com', 'shehroze19@hotmail.com', '2018-12-07 14:20:25'),
(10, 'sadasd', '111@hotmail.com', 'shehroze19@hotmail.com', '2018-12-07 14:21:13'),
(11, 'fdgfdg', '111@hotmail.com', '555@hotmail.com', '2018-12-10 16:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `log_stats`
--

DROP TABLE IF EXISTS `log_stats`;
CREATE TABLE IF NOT EXISTS `log_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_stats`
--

INSERT INTO `log_stats` (`id`, `email`, `ip`, `time`) VALUES
(1, 'shehroze19@hotmail.com', '::1', '2018-11-23 06:25:30'),
(2, 'shehroze19@hotmail.com', '::1', '2018-11-23 06:36:47'),
(3, 'shehroze19@hotmail.com', '::1', '2018-11-23 06:38:45'),
(4, 'shehroze19@hotmail.com', '::1', '2018-11-23 06:39:32'),
(5, 'shehroze19@hotmail.com', '::1', '2018-11-23 08:00:03'),
(6, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:20:04'),
(7, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:21:17'),
(8, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:21:24'),
(9, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:26:45'),
(10, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:26:55'),
(11, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:28:04'),
(12, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:28:53'),
(13, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:31:01'),
(14, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:31:34'),
(15, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:31:53'),
(16, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:32:29'),
(17, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:32:42'),
(18, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:33:11'),
(19, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:33:17'),
(20, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:34:54'),
(21, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:35:21'),
(22, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:36:32'),
(23, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:36:43'),
(24, 'admin@ya', '::1', '2018-11-23 11:36:56'),
(25, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:37:27'),
(26, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:37:35'),
(27, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:37:44'),
(28, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:38:05'),
(29, 'admin@ya', '::1', '2018-11-23 11:38:51'),
(30, 'admin@ya', '::1', '2018-11-23 11:38:58'),
(31, 'admin@ya', '::1', '2018-11-23 11:40:55'),
(32, 'admin@ya', '::1', '2018-11-23 11:41:36'),
(33, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:42:37'),
(34, 'shehroze19@hotmail.com', '::1', '2018-11-23 11:43:19'),
(35, 'shehroze19@hotmail.com', '::1', '2018-11-24 08:21:34'),
(36, 'admin@ya', '::1', '2018-11-24 08:22:15'),
(37, 'shehroze19@hotmail.com', '::1', '2018-11-26 03:09:11'),
(38, 'shehroze19@hotmail.com', '::1', '2018-11-28 00:58:22'),
(39, 'shehroze19@hotmail.com', '::1', '2018-12-01 02:10:51'),
(40, 'shehroze19@hotmail.com', '::1', '2018-12-03 02:38:25'),
(41, 'shehroze19@hotmail.com', '::1', '2018-12-07 09:24:59'),
(42, 'shehroze19@hotmail.com', '::1', '2018-12-07 09:33:59'),
(43, 'admin@ya', '::1', '2018-12-07 09:34:11'),
(44, 'shehroze19@hotmail.com', '::1', '2018-12-07 10:56:13'),
(45, 'admin@ya', '::1', '2018-12-07 10:58:04'),
(46, 'shehroze19@hotmail.com', '::1', '2018-12-07 10:58:16'),
(47, 'shehroze19@hotmail.com', '::1', '2018-12-07 10:59:28'),
(48, 'shehroze19@hotmail.com', '::1', '2018-12-07 11:52:12'),
(49, 'shehroze19@hotmail.com', '::1', '2018-12-07 12:06:35'),
(50, 'admin@ya', '::1', '2018-12-07 12:12:13'),
(51, '111@hotmail.com', '::1', '2018-12-07 12:13:39'),
(52, 'shehroze19@hotmail.com', '::1', '2018-12-07 13:45:57'),
(53, '111@hotmail.com', '::1', '2018-12-07 14:13:05'),
(54, 'shehroze19@hotmail.com', '::1', '2018-12-07 14:21:27'),
(55, '111@hotmail.com', '::1', '2018-12-07 14:56:45'),
(56, 'shehroze19@hotmail.com', '192.160.131.53', '2018-12-07 15:07:20'),
(57, 'shehroze19@hotmail.com', '192.160.130.42', '2018-12-07 15:21:45'),
(58, 'shehroze19@hotmail.com', '192.160.130.73', '2018-12-08 00:22:00'),
(59, 'admin@ya', '192.160.130.73', '2018-12-08 00:23:55'),
(60, '111@hotmail.com', '192.160.130.73', '2018-12-08 00:24:24'),
(61, 'shehroze19@hotmail.com', '192.160.130.108', '2018-12-10 15:52:24'),
(62, '555@hotmail.com', '192.160.130.103', '2018-12-10 16:19:32'),
(63, 'admin@ya', '192.160.130.103', '2018-12-10 16:20:54'),
(64, '111@hotmail.com', '192.160.130.103', '2018-12-10 16:21:32'),
(65, 'shehroze19@hotmail.com', '192.160.130.108', '2018-12-11 17:17:43'),
(66, 'shehroze19@hotmail.com', '::1', '2019-12-03 22:09:10'),
(67, '1111@yahoo.com', '::1', '2019-12-03 22:20:56'),
(68, 'nhudda@adelphi.edu', '::1', '2019-12-03 22:23:09'),
(69, 'sgrindell@adelphi.edu', '::1', '2019-12-04 17:05:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
