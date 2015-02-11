-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2014 at 05:35 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `age` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fName`, `lName`, `email`, `age`) VALUES
(6, 'Biswajit', 'Bardhan', 'biswajitb@cybage.com', '23'),
(7, 'Pranjay', 'Patil', 'pranjayp@cybage.com', '22'),
(8, 'Ankita', 'Nandurkar', 'ankitan@cybage.com', '22'),
(9, 'Priyanka', 'Mogali', 'priyankam@cybage.com', '22'),
(10, 'Ashwin', 'Kupatkar', 'ashwinkup@cybage.com', '22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
