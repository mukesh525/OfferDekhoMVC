-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2016 at 06:21 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OfferDekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `imageslider`
--

CREATE TABLE IF NOT EXISTS `imageslider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `imageslider`
--
INSERT INTO `products` (`id`, `name`, `discount`, `image`, `location`, `category`, `brand`, `valid`) VALUES
(5, 'Lights 1', 50, 'p1.jpg', 'Banagalore near supermarket', 10, 6, '0000-00-00'),
(6, 'Lights 2', 20, 'p2.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(7, 'Lights 3', 10, 'p3.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(8, 'Lights 4', 60, 'p4.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(9, 'Lights 5', 10, 'p5.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(10, 'Lights 6', 80, 'p6.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(11, 'Lights 7', 90, 'p7.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(12, 'Lights 8', 50, 'p8.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(13, 'Lights 9', 30, 'p9.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(14, 'Lights 10', 40, 'p10.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(15, 'Lights 11', 60, 'p11.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(16, 'Lights 12', 30, 'p12.jpg', 'Bangalore startbazar', 10, 6, '0000-00-00'),
(17, 'Mukesh', 0, 'image_726f6a3.png', 'kolkata', 6, 4, '0000-00-00'),
(18, 'Muku', 10, 'image_1dfd9fb.jpg', 'kolkata', 9, 6, '2016-01-17');




INSERT INTO `imageslider` (`id`, `image`, `name`, `description`) VALUES
(1, 'bnr2.jpg', 'Offer In Hypercity Banagalore', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.\r\n					 '),
(2, 'bnr3.jpg', 'Offer In All Season Super Market Banagalore', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit'),
(3, 'bnr.jpg', 'Offer In StarBazar Banagalore', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.\r\n					 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `hotoffers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `discount` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hotoffers`
--

INSERT INTO `hotoffers` (`id`, `name`, `discount`, `image`, `location`) VALUES
(1, 'Emergency Lights & Led Bulds', 60, 'ofr2.jpeg', 'Bangalore'),
(2, 'Outdoor Gate Lights', 30, 'ofr3.jpg', 'Bangalore');


CREATE EVENT test
ON SCHEDULE EVERY 10 SECOND
ON COMPLETION PRESERVE
DO
DELETE FROM `table` WHERE `expiryTime`-UNIX_TIMESTAMP() < 1