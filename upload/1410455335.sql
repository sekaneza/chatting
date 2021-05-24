-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2014 at 11:18 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inyange`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'habi', 'emmanuel'),
(2, 'habinshuti', 'eric');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `bill_id` int(11) NOT NULL auto_increment,
  `client_name` varchar(50) NOT NULL,
  `products` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unity_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `by` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `operationid` int(11) NOT NULL,
  PRIMARY KEY  (`bill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `client_name`, `products`, `quantity`, `unity_price`, `total_price`, `by`, `dates`, `operationid`) VALUES
(1, 'mugisha', 'Milk(Milk tetra pak 1leter)', 100, 750, 75000, 'system', '2014-07-07 08:03:01', 5),
(2, 'habinshuti', 'Mineral Water', 200, 250, 50000, 'system', '2014-07-07 08:07:20', 5),
(13, 'bonane', 'Milk(UTH fat 500ml)', 122, 600, 73200, 'system', '2014-08-01 11:47:48', 5),
(4, 'habinshuti', 'Water', 90, 250, 22500, 'system', '2014-07-07 08:46:37', 5),
(12, 'Nkurunziza', 'Water1', 39, 250, 9750, 'system', '2014-07-31 17:27:55', 5),
(6, 'mugisha', 'Milk(tetra fino 500ml)', 50, 350, 17500, 'system', '2014-07-08 13:28:32', 5),
(11, 'Shimirwa', 'Milk(UTH fat 500ml)', 23, 600, 13800, 'system', '2014-07-29 19:03:31', 5),
(10, 'Shimirwa', 'vanilla yorghart', 25, 300, 7500, 'system', '2014-07-29 18:33:38', 5),
(14, 'Shimirwa', 'Milk(Milk tetra pak 1leter)', 52, 750, 39000, 'system', '2014-08-01 12:44:34', 5),
(15, 'Nkurunziza', 'Select Product Name', 0, 0, 0, 'system', '2014-08-01 12:48:24', 5),
(16, 'Nkurunziza', 'Select Product Name', 0, 0, 0, 'system', '2014-08-01 12:49:17', 5),
(17, 'Nkurunziza', 'Select Product Name', 0, 0, 0, 'system', '2014-08-01 12:51:09', 5),
(18, 'Nkurunziza', 'Select Product Name', 0, 0, 0, 'system', '2014-08-01 12:51:43', 5),
(19, 'Nkurunziza', 'Select Product Name', 0, 0, 0, 'system', '2014-08-01 12:54:01', 5),
(20, 'Nkurunziza', 'Milk(tetra fino 500ml)', 12, 350, 4200, 'system', '2014-08-01 12:56:02', 5),
(21, 'bonane', 'Milk(Milk tetra pak 1leter)', 200, 750, 150000, 'system', '2014-08-09 10:23:34', 5),
(22, 'Cyuma', 'Pure orange', 50, 1200, 60000, 'system', '2014-08-18 10:13:41', 5);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL auto_increment,
  `client_fname` varchar(100) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_phone` varchar(20) NOT NULL,
  `client_company` varchar(100) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `company_phone` varchar(20) NOT NULL,
  `client_category` varchar(50) NOT NULL,
  `registered_by` varchar(20) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  PRIMARY KEY  (`client_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fname`, `client_lname`, `client_phone`, `client_company`, `client_address`, `company_phone`, `client_category`, `registered_by`, `registration_date`) VALUES
(1, 'Nkurunziza', 'daniel', '0722812029', 'coste', 'Nyanza', '5656', 'Consumer Client', 'system', '2013-07-05 12:17:39'),
(3, 'habinshuti', 'emmanuel', '0726097422', 'no company', 'gisenyi', '6857', 'consumer', 'system', '2014-06-26 17:14:57'),
(4, 'habinshuti', 'eric', '0726097422', 'no company', 'gisenyi', 'no company phone', 'consumer', 'system', '2014-06-26 17:21:15'),
(14, 'Shimirwa', 'Jonathan', '0729565489', 'no company', 'gisenyi', 'no phone n', 'Consumer Client', 'system', '2014-07-29 18:31:51'),
(12, 'manase', 'koko', '4567654345', 'bl', 'nya', '0785454367', 'Abonnez', 'system', '2014-07-07 08:58:42'),
(15, 'bonane', 'janvier', '0786543255', 'ewsa', 'gisenyi', '0786543209', 'Inyange Distributor', 'system', '2014-08-01 11:26:54'),
(10, 'mugisha', 'Emeline', '0780784635', 'Tigo', 'Ruhengeri', '0759342476', 'Abonnez', 'system', '2014-07-04 18:08:43'),
(22, 'jhasjdhbf', 'afsfasfasfasf', '098765345', 'no company', 'Ruhengeri', 'no phone n', 'Consumer Client', 'system', '2014-08-06 11:51:52'),
(21, 'jhghj', 'hghjgfh', 'bv', 'no company', 'tgjh', 'no phone n', 'Abonnez', 'system', '2014-08-05 10:42:04'),
(20, 'rugamba', 'egide', '07633233', 'no company', 'gisenyi', 'no phone n', 'Consumer Client', 'system', '2014-08-04 11:49:02'),
(23, 'dad', 'dadad', '2344234222', 'dadad', 'adadadff', '5', 'Consumer Client', 'system', '2014-08-13 15:59:25'),
(24, 'shaka', 'patrick', '0722222222', 'Wasafi', 'rubavu', '44444', 'Inyange Distributor', 'system', '2014-08-14 11:39:40'),
(25, 'Cyuma', 'Eric', '07846t6532', 'no company', 'Ruhengeri', 'no phone ', 'Consumer Client', 'system', '2014-08-18 10:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cont_id` int(45) NOT NULL auto_increment,
  `names` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `messages` varchar(251) NOT NULL,
  PRIMARY KEY  (`cont_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `names`, `email`, `phone`, `subject`, `messages`) VALUES
(1, '', 'ganza@yahoo.com', '0788551123', 'Idea', ''),
(2, '', 'sugicle@yahoo.com', '07885511410', 'Idea', ''),
(3, '', 'sugicle@yahoo.com', '07885511410', 'Idea', ''),
(4, '', 'sugicle@yahoo.com', '07885511410', 'Idea', 'Ndabakunda rwose');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(200) NOT NULL auto_increment,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `username`, `message`) VALUES
(17, 'niyi@yahoo.com', 'niyigena', 'Inyange industrie is a private socity for selling water,Juice, Milk ,yorgat and other product. If you have any question about our services or you need to give us an advice or they gave you a bad customercare contact us by send us a massage by filling that form. Your E-mail and username is requered. Thanks for visiting inyange website for shopping online! '),
(18, 'habinshutifelicien@y', 'paul', 'The world’s first programmable machine was designed—although never fully built—by the English mathematician and inventor, Charles Babbage. This machine, called the Analytical Engine, used punch cards similar to those used in the Jacquard loom to select the specific arithmetic operation to apply at each step. Inserting a different set of cards changed the computations the machine performed. This ma'),
(30, 'mus@gmail.com', 'mustafa', 'ndakwemera'),
(35, 'kurraj@bgmm.com', 'mafisango', 'ibibintu ni byiza');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL auto_increment,
  `product_name` varchar(200) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_price` varchar(60) NOT NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cat`, `product_type`, `product_price`) VALUES
(23, 'Mineral Water', 'Pet bottle 500ml', '500ml', '350'),
(22, 'Milk(tetra fino 500ml)', 'Tetra fino milk 500ml', '500ml', '350'),
(27, 'Pure orange', 'Juice', '1L', '1200'),
(21, 'Milk(UTH fat 500ml)', 'UTH low fat milk 500ml 	', '500ml', '650'),
(19, 'Milk(Milk tetra pak 1leter)', 'UTH Milk tetra pak', '1 leter', '750'),
(29, 'inshyushyu', 'milk', '1L', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `sell_operations`
--

CREATE TABLE IF NOT EXISTS `sell_operations` (
  `operation_id` int(11) NOT NULL auto_increment,
  `operation_date` varchar(50) NOT NULL,
  `operation_type` varchar(50) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` double NOT NULL,
  `total_price` double NOT NULL,
  `payement_mode` varchar(100) NOT NULL,
  `delivery_type` varchar(100) NOT NULL,
  `user_name` int(11) NOT NULL,
  PRIMARY KEY  (`operation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `sell_operations`
--

INSERT INTO `sell_operations` (`operation_id`, `operation_date`, `operation_type`, `client_name`, `product_name`, `unit_price`, `quantity`, `total_price`, `payement_mode`, `delivery_type`, `user_name`) VALUES
(54, '2014-07-05 12:10:49', 'Buy', 'mugisha', 'Milk(Milk tetra pak 1leter)', 750, 700, 525000, 'Cash', 'At company', 0),
(55, '2014-07-05 17:43:02', 'Order', 'Nkurunziza', 'Milk(Milk tetra pak 1leter)', 750, 89, 66750, 'Bank Account', 'bus', 0),
(56, '2014-07-05 17:45:31', 'Buy', 'habinshuti', 'Milk(tetra fino 500ml)', 350, 100, 35000, 'Bank Account', 'At company', 0),
(57, '2014-07-07 07:41:14', 'Buy', 'Nkurunziza', 'Milk(Milk tetra pak 1leter)', 750, 70, 52500, 'Cash', 'on company', 0),
(58, '2014-07-07 07:50:44', 'Order', 'habinshuti', 'Milk(tetra fino 500ml)', 350, 45, 15750, 'Bank Account', 'bus', 0),
(59, '2014-07-07 08:03:01', 'Order', 'mugisha', 'Milk(Milk tetra pak 1leter)', 750, 100, 75000, 'Credit', '', 0),
(60, '2014-07-07 08:07:20', 'Buy', 'habinshuti', 'Mineral Water', 250, 200, 50000, 'Bank Account', 'bus', 0),
(80, '2014-08-18 10:13:41', 'Buy', 'Cyuma', 'Pure orange', 1200, 50, 60000, 'Bank Account', 'private jet', 0),
(66, '2014-07-23 17:50:58', 'Order', 'manase', 'Milk(tetra fino 500ml)', 350, 100, 35000, 'Bank Account', 'bus', 0),
(65, '2014-07-16 14:37:28', 'Buy', 'manase', 'Milk(UTH fat 500ml)', 650, 1, 650, 'Bank Account', 'bus', 0),
(64, '2014-07-08 13:28:32', 'Order', 'mugisha', 'Milk(tetra fino 500ml)', 350, 50, 17500, 'Bank Account', 'bus', 0),
(63, '2014-07-07 08:59:36', 'Buy', 'manase', 'Milk(Milk tetra pak 1leter)', 750, 87, 65250, 'On delivery', 'car', 0),
(62, '2014-07-07 08:46:37', 'Order', 'habinshuti', 'Water', 250, 90, 22500, 'Cash', 'car', 0),
(61, '2014-07-07 08:41:04', 'Buy', 'n', 'Water', 250, 90, 22500, 'Bank Account', 'sdf', 0),
(48, '2014-07-04 16:02:12', 'Order', 'habinshuti', 'Milk', 350, 100, 35000, 'Bank Account', 'car', 0),
(53, '2014-07-04 18:09:25', 'Buy', 'mugisha', 'Water', 250, 300, 75000, 'Bank Account', 'At company', 0),
(52, '2014-07-04 16:14:12', 'Buy', 'habinshuti', 'Milk(UTH fat 500ml)', 650, 400, 260000, 'Bank Account', 'toyota', 0),
(51, '2014-07-04 16:13:07', 'Order', 'habinshuti', 'Milk', 750, 400, 300000, 'Bank Account', 'bus', 0),
(50, '2014-07-04 16:08:00', 'Order', 'Nkurunziza', 'Mineral Water', 250, 100, 25000, 'Cash', 'bus', 0),
(49, '2014-07-04 16:05:20', 'Buy', 'Nkurunziza', 'Milk', 350, 200, 70000, 'Bank Account', 'on delivery', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_names` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `branch_code` varchar(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_password`, `branch_code`, `user_type`) VALUES
(1, 'rachel', 'rachel', 'kgl001', 'admin'),
(2, '123', '123', '0111', 'admin');
