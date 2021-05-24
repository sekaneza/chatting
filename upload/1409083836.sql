-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 08:13 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `selling`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `account` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `account`) VALUES
(1, 53650);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Client_id` int(10) NOT NULL AUTO_INCREMENT,
  `Names` varchar(40) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  PRIMARY KEY (`Client_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_id`, `Names`, `Phone`) VALUES
(1, 'pason', ''),
(2, 'paul', ''),
(3, 'vicky', ''),
(4, 'etienne', ''),
(5, 'Patrick', ''),
(6, 'emly', ''),
(7, 'agaba', ''),
(8, 'BOSS', ''),
(9, 'dd', ''),
(10, 'gyt', ''),
(11, 'ooo', ''),
(12, 'ttt', ''),
(13, 'ww', ''),
(14, 'rtyf', ''),
(15, 'felix', ''),
(16, 'peace', ''),
(17, 'mama', ''),
(18, 'o', ''),
(19, 'bbe', '');

-- --------------------------------------------------------

--
-- Table structure for table `expired`
--

CREATE TABLE IF NOT EXISTS `expired` (
  `Exp_id` int(10) NOT NULL AUTO_INCREMENT,
  `Product_id` int(10) NOT NULL,
  `Exp_quantity` int(10) NOT NULL,
  `exp_date` date NOT NULL,
  PRIMARY KEY (`Exp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expired`
--

INSERT INTO `expired` (`Exp_id`, `Product_id`, `Exp_quantity`, `exp_date`) VALUES
(1, 12, 1900, '2013-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Username`, `Password`) VALUES
('chris', 'gasore');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Product_id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Unit` text NOT NULL,
  `Unit_price` int(10) NOT NULL,
  `Exp_date` date NOT NULL,
  PRIMARY KEY (`Product_id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Name`, `Quantity`, `Unit`, `Unit_price`, `Exp_date`) VALUES
(1, 'GIV', 1009996, 'carton', 6000, '2014-04-02'),
(2, 'oil', 987, 'litre', 750, '2015-05-04'),
(3, 'rice', 4086, 'kg', 950, '2014-05-02'),
(12, 'greens', 0, 'packets', 900, '0000-00-00'),
(13, 'juls', 111, 'litre', 700, '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `Seller_id` int(10) NOT NULL AUTO_INCREMENT,
  `S_names` varchar(40) NOT NULL,
  `S_phone` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`Seller_id`),
  UNIQUE KEY `S_phone` (`S_phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`Seller_id`, `S_names`, `S_phone`, `Password`) VALUES
(7, 'abana anana', '0722218955', 'boss'),
(2, 'UWINGABIRE Diane', '0788420316', '1234'),
(3, 'agaba simon', '0712345678', 'abc'),
(6, 'ange ingabire', '0788625535', 'sysysy');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE IF NOT EXISTS `sold` (
  `Sold_id` int(10) NOT NULL AUTO_INCREMENT,
  `Client_id` int(10) NOT NULL,
  `Product_id` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Seller_id` int(10) NOT NULL,
  `Payed` int(11) NOT NULL DEFAULT '0',
  `Date` date NOT NULL,
  PRIMARY KEY (`Sold_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`Sold_id`, `Client_id`, `Product_id`, `Quantity`, `Seller_id`, `Payed`, `Date`) VALUES
(1, 11, 1, 12, 1, 1, '2013-07-25'),
(2, 9, 1, 12, 1, 0, '2013-07-25'),
(3, 12, 2, 4, 1, 1, '2013-07-25'),
(4, 12, 1, 12, 1, 1, '2013-07-25'),
(5, 13, 1, 1, 2, 1, '2013-07-25'),
(6, 12, 1, 2, 1, 1, '2013-07-25'),
(7, 14, 1, 1, 1, 1, '2013-07-25'),
(8, 13, 1, 2, 1, 1, '2013-07-26'),
(9, 15, 1, 2, 5, 1, '2013-07-26'),
(10, 15, 2, 3, 5, 1, '2013-07-26'),
(11, 15, 3, 1, 5, 1, '2013-07-26'),
(12, 2, 2, 1, 5, 1, '2013-07-26'),
(13, 2, 2, 1, 5, 1, '2013-07-26'),
(14, 2, 3, 1, 5, 1, '2013-07-26'),
(15, 7, 1, 1, 5, 1, '2013-07-27'),
(16, 16, 2, 2, 5, 1, '2013-07-27'),
(17, 17, 1, 1, 2, 1, '2013-07-27'),
(18, 17, 2, 1, 2, 1, '2013-07-27'),
(19, 8, 2, 1, 2, 1, '2013-07-27'),
(20, 18, 1, 2, 2, 1, '2013-07-27'),
(21, 19, 3, 12, 6, 1, '2013-07-27'),
(22, 19, 13, 45, 6, 1, '2013-07-27');
