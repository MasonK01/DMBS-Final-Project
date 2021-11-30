-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2020 at 05:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fName` varchar(30) DEFAULT NULL,
  `lName` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `cardName` varchar(100) DEFAULT NULL,
  `CardNo` varchar(100) NOT NULL,
  `cardMonth` varchar(30) NOT NULL,
  `cardYear` varchar(30) NOT NULL,
  `cvv` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Id`, `fName`, `lName`, `email`, `password`, `phone`, `address`, `cardName`, `CardNo`, `cardMonth`, `cardYear`, `cvv`) VALUES
(18, 'person', 'last', 'person@gmail.com', '202cb962ac59075b964b07152d234b70', '1222', '456', '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02', 'January', '2022', 'c20ad4d76fe97759aa27a0c99bff6710'),
(17, 'jeremy', 'lastname', 'jeremy@yahoo.ca', '202cb962ac59075b964b07152d234b70', '3432', '4234', 'f2fc990265c712c49d51a18a32b39f0c', '71a5c0514ab83382d98154e5a5f9d813', 'January', '2022', 'f2fc990265c712c49d51a18a32b39f0c'),
(10, 'Thomas', 'Pretz', 'ThomasPretz@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'example', '1a79a4d60de6718e8e5b326e338ae533', 'c4887b7b0e00b1ce655e9b2783613258', 'September', '2025', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
