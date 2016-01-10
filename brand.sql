-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 05:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offerdekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Name`) VALUES
(4, 'Lee'),
(2, 'Levis'),
(9, 'luci'),
(5, 'Nike'),
(3, 'Puma'),
(1, 'Rebook'),
(22, 'rtr'),
(41, 'tuio');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`) VALUES
(8, 'Bags'),
(68, 'brand'),
(2, 'Clothes'),
(10, 'Electronics'),
(3, 'Food'),
(4, 'Furniture'),
(88, 'ggf'),
(1, 'Kitchen'),
(6, 'Sports'),
(9, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a10cf4fdbb52948b34ef0c7c18142d44', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', 1452444055, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:2:"18";s:8:"username";s:6:"soma12";s:5:"email";s:16:"soma12@gmail.com";}');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `category` int(250) NOT NULL,
  `brand` int(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `brand` (`brand`),
  KEY `category_2` (`category`),
  KEY `brand_2` (`brand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `discount`, `image`, `location`, `category`, `brand`) VALUES
(5, 'Lights 1', 50, 'p1.jpg', 'Banagalore near supermarket', 10, 6),
(6, 'Lights 2', 20, 'p2.jpg', 'Bangalore startbazar', 10, 6),
(7, 'Lights 3', 10, 'p3.jpg', 'Bangalore startbazar', 10, 6),
(8, 'Lights 4', 60, 'p4.jpg', 'Bangalore startbazar', 10, 6),
(9, 'Lights 5', 10, 'p5.jpg', 'Bangalore startbazar', 10, 6),
(10, 'Lights 6', 80, 'p6.jpg', 'Bangalore startbazar', 10, 6),
(11, 'Lights 7', 90, 'p7.jpg', 'Bangalore startbazar', 10, 6),
(12, 'Lights 8', 50, 'p8.jpg', 'Bangalore startbazar', 10, 6),
(13, 'Lights 9', 30, 'p9.jpg', 'Bangalore startbazar', 10, 6),
(14, 'Lights 10', 40, 'p10.jpg', 'Bangalore startbazar', 10, 6),
(15, 'Lights 11', 60, 'p11.jpg', 'Bangalore startbazar', 10, 6),
(16, 'Lights 12', 30, 'p12.jpg', 'Bangalore startbazar', 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`) VALUES
(9, 'root', 'root@gmail.com', 'f94c017857ac124ddc8cdf22f7930652', 'male'),
(10, 'Mukesh', 'mukeshjha2007@gmail.com', 'f94c017857ac124ddc8cdf22f7930652', 'female'),
(11, 'hhgf', 'dsdfsf@gmail.com', '202cb962ac59075b964b07152d234b70', 'male'),
(12, 'hhgsf', 'dsdfsf@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'male'),
(13, 'hhgsf', 'dsdfsf@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'male'),
(14, 'hhgsf', 'dsdfsf@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'male'),
(15, 'Mukesh', 'muki@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female'),
(16, 'Mukeshg', 'muki1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male'),
(17, 'Mukeshww', 'muki1@gmail.com', '6c14da109e294d1e8155be8aa4b1ce8e', 'male'),
(18, 'soma12', 'soma12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female'),
(19, 'soma12', 'soma12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categoty` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`brand`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
