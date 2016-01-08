CREATE TABLE IF NOT EXISTS `brand` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Name`) VALUES
(4, 'Lee'),
(2, 'Levis'),
(5, 'Nike'),
(6, 'Philips'),
(3, 'Puma'),
(1, 'Rebook');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_2` (`Id`),
  KEY `Name` (`Name`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`) VALUES
(8, 'Bags'),
(2, 'Clothes'),
(5, 'Cosmetics'),
(10, 'Electronics'),
(3, 'Food'),
(4, 'Furniture'),
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
('c811d45cc9254b051522171e7f1dbe8b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36', 1452258812, 'a:3:{s:7:"user_id";s:1:"8";s:8:"username";s:5:"root1";s:5:"email";s:15:"root1@gmail.com";}');

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
  PRIMARY KEY (`id`)
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
  `registered` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `registered`) VALUES
(6, 'vbngn', 'root@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1452253436'),
(7, 'root', 'mukesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '1452253750'),
(8, 'root1', 'root1@gmail.com', 'f94c017857ac124ddc8cdf22f7930652', 'male', '1452255397');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;