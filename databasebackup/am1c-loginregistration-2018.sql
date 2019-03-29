-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2019 at 07:54 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am1c-loginregistration-2018`
--
CREATE DATABASE IF NOT EXISTS `am1c-loginregistration-2018` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1c-loginregistration-2018`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(350) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('admin','root','customer','moderator') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `userrole`) VALUES
(1, 'adruijter@gmail.com', '$2y$10$2K3uHiksR4Gv0Em2bFzNSOvv631D2wLXm5tGRIbioq9U4YI21vDXW', 'customer'),
(2, 'customer@gmail.com', '$2y$10$Ou1xyacfNqlSrUppkQ7kCeNPKcMEIDjoNYNzedl63mRtkGFCIoTgG', 'customer'),
(3, 'administrator@gmail.com', '$2y$10$r.4PNXaGgNRgfZUU6YzFv.kliN7Eih03sGLKgouudJ/od1VogRwgG', 'admin'),
(4, 'root@gmail.com', '$2y$10$T/9.N19O3DJsFe7g6TgdduJOEr9SP0FYz/WB96IqIQqApKBRXtXXe', 'root'),
(5, 'moderator@gmail.com', '$2y$10$r2e5SMlH3N9sSLfwX7IuBOIxKrSZ0cIWTj.MSmnHQ53oTLtNoHo.K', 'moderator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
