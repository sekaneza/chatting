-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 03:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`Ad_id` int(5) NOT NULL,
  `Username` varchar(60) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Ad_id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`Com_id` int(5) NOT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `DOS` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Com_id`, `Firstname`, `Lastname`, `email`, `comment`, `DOS`) VALUES
(71, 'CELESTIN', 'CELESTIN', 'niyoceles@yahoo.com', 'HEY THIS THE VERICATION', '2017-06-03 18:43:03'),
(70, 'celestin', 'niyonsaba', 'niyoceles@yahoo.com', 'Hello', '2017-05-29 16:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE IF NOT EXISTS `message_table` (
`MSG_ID` int(11) NOT NULL,
  `MSGFROM` varchar(30) NOT NULL,
  `SUBJECT` varchar(30) DEFAULT NULL,
  `BODY` varchar(500) NOT NULL,
  `MSGTO` varchar(255) DEFAULT NULL,
  `FLAG` varchar(2) NOT NULL DEFAULT '11',
  `DOS` datetime NOT NULL,
  `FILE` varchar(255) NOT NULL,
  `FILENAME` varchar(255) NOT NULL,
  `SENDERFOLDER` enum('Sent','Draft','Deleted') NOT NULL,
  `RECEIVERFOLDER` enum('Inbox','Trash','Deleted') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`MSG_ID`, `MSGFROM`, `SUBJECT`, `BODY`, `MSGTO`, `FLAG`, `DOS`, `FILE`, `FILENAME`, `SENDERFOLDER`, `RECEIVERFOLDER`) VALUES
(162, 'mahoko', 'IGISUBIZO', 'IMANIGUHUMUGISHA NAWE!', 'DANIEL1@localhost.local', '10', '2014-09-08 05:50:04', '', '', 'Sent', 'Inbox'),
(168, 'habijean', 'KHKJHK', 'KJHKJ', 'habijean@localhost.local', '10', '2014-09-08 23:18:13', '', '', 'Sent', 'Inbox'),
(170, 'bijigo', 'asdsa', 'asdsadsa', 'habijean@localhost.local', '11', '2014-09-09 01:41:08', '', '', 'Sent', 'Inbox'),
(171, 'user1@user.com', 'hfhf', 'jfjfjf j', 'user@user.com@localhost.local', '10', '2017-05-29 14:55:16', './upload/1496094916.rtf', 'Document.rtf', 'Sent', 'Inbox'),
(172, 'user@user.com', 'hshs', 'hshs', 'user1@user.com@localhost.local', '10', '2017-05-29 15:11:46', './upload/1496095906.txt', 'ossss.txt', 'Sent', 'Inbox'),
(173, 'user@user.com', 'shshs', 'heheh', 'user1@user.com@localhost.local', '10', '2017-05-30 13:33:07', './upload/1496176387.pdf', 'CERTIFICATE FELICIEN.pdf', 'Sent', 'Inbox'),
(174, 'user1@user.com', 'ABOUT THIS PROJECT', 'hh hfa h', 'user@user.com@localhost.local', '10', '2017-05-30 13:41:55', './upload/1496176915.jpg', 'nato_construction_1575x900_belgiandefense_comopsair_michaelmoors_007jpg.jpg', 'Sent', 'Inbox'),
(175, 'user@user.com', ' hah fahfahj fa', 'hdhdh', 'user1@user.com@localhost.local', '11', '2017-05-30 13:45:51', './upload/1496177151.zip', 'dynamic_web_page.zip', 'Sent', 'Inbox'),
(176, 'user1@user.com', 'ABOUT THIS PROJECT again', 'hdhd hjka f', 'user@user.com@localhost.local', '10', '2017-05-30 13:47:01', './upload/1496177221.zip', 'dynamic_web_page.zip', 'Sent', 'Inbox'),
(177, 'user@user.com', 'VERIFICATION EMAIL', 'hEY THIS THE VERIFICATION', 'seka@localhost.local', '10', '2017-06-03 18:40:17', './upload/1496540417.jpg', 'Capture.JPG', 'Sent', 'Inbox');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE IF NOT EXISTS `signup_table` (
`USER_ID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `BOD` varchar(30) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `PHONENO` varchar(15) DEFAULT NULL,
  `REGISTRYDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`USER_ID`, `FNAME`, `LNAME`, `ADDRESS`, `BOD`, `SEX`, `PHONENO`, `REGISTRYDATE`) VALUES
(54, 'HABIMANA', 'Jean de Dieu', 'kigali', '1990-10-11', 'M', '+250-788776622', '2014-07-07 15:21:13'),
(58, 'olivier', 'cyuma', 'rubavu', '1996-12-26', 'M', '+250-785032302', '2014-07-08 23:29:53'),
(68, 'cm', 'punk', 'rubavu', '1988-4-3', 'M', '+250-788888888', '2014-07-12 03:13:32'),
(70, 'Habimana', 'jean de Dieu', 'kigali', '1997-7-7', 'M', '+250-786790914', '2014-08-22 07:14:17'),
(71, 'danhabiyambere', 'daniel', 'gisenyi', '1995-1-2', 'M', '+250-782564075', '2014-08-22 07:27:33'),
(72, 'irankunda', 'prince', 'rubavu', '1995-3-2', 'M', '+250-788564076', '2014-08-22 07:32:05'),
(73, 'Habimana', 'jean de Dieu', 'kigali', '1997-7-7', 'M', '+250-727334701', '2014-08-24 04:05:52'),
(74, 'mupenzi', 'heritier', 'rubavu', '1994-12-21', 'M', '+250-728852788', '2014-08-24 05:19:31'),
(75, 'sindikubwabo', 'telesphore', 'busasamana', '1994-7-4', 'M', '+250-725310120', '2014-08-25 05:15:18'),
(76, 'ishimwe', 'jean', 'kigali', '1988-2-13', 'F', '+250-111111111', '2014-08-26 13:49:51'),
(77, 'tuyambaze', 'jean bosco', 'rubavu', '1980-8-10', 'M', '+250-725192920', '2014-08-27 07:05:30'),
(78, 'daniel', 'DADA', 'mahoko', '1990-2-11', 'M', '+250-727201770', '2014-09-01 02:34:09'),
(79, 'DANIEL', 'DADA', 'kigali', '1991-3-13', 'M', '+250-727201774', '2014-09-01 02:39:38'),
(80, 'habiyambere', 'daniel', 'rubavu', '1999-2-1', 'M', '+250-727201776', '2014-09-02 04:04:19'),
(81, 'habi', 'jean de dieu', '', '1996-2-2', 'M', '+250-786789459', '2014-09-02 05:03:40'),
(82, 'ashimwe', 'emile', 'rubavu', '1985-10-14', 'M', '+250-788836630', '2014-09-02 07:01:46'),
(83, 'danhabiyambere', 'daniel', 'mahoko', '1985-2-14', 'M', '+250-727201775', '2014-09-03 17:04:48'),
(84, 'habi', 'f', 'kigali', '2000-1-1', 'M', '+250-722747330', '2014-09-03 18:44:57'),
(85, 'ghjghjghj', 'ghjghjghjghj', 'ghjghjghj', '1998-3-3', 'F', '+250-786790911', '2014-09-03 18:49:51'),
(86, 'hjikhiuyui', 'uiyuiyuiyuyu', 'yuiyuiyuiyui', '1998-3-3', 'M', '+250-724533023', '2014-09-03 18:56:14'),
(87, 'green', 'peter', 'f', '2000-2-2', 'M', '+250-786789205', '2014-09-03 19:11:56'),
(88, 'do', 'fredo', 'yuiyuiyuiyui', '1998-3-3', 'M', '+250-724567899', '2014-09-03 19:15:40'),
(89, 'saga', 'mute', 'kigali', '1993-8-7', 'F', '+250-788473301', '2014-09-03 19:28:15'),
(90, 'HABIMANA', 'Jean de Dieu', 'kigali', '1997-7-7', 'M', '+250-786790915', '2014-09-04 12:12:22'),
(91, 'ace', 'hood', 'hoce', '1990-7-7', 'M', '+250-723456778', '2014-09-06 13:40:51'),
(92, 'bije', 'go', 'fe', '2000-1-1', 'M', '+250-783456789', '2014-09-09 08:18:48'),
(93, 'user', 'user', 'Kigali', '1984-10-10', 'M', '+250-725219811', '2017-05-28 23:23:38'),
(94, 'USER1', 'USER1', 'kIGALI', '1990-2-10', 'M', '+250-725219812', '2017-05-29 21:37:58'),
(95, 'seka', 'olivier', 'Gisenyi', '1983-6-4', 'M', '+250-788975050', '2017-06-04 01:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(35) NOT NULL,
  `PWD` varchar(50) NOT NULL,
  `STATUS` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`USER_ID`, `USERNAME`, `PWD`, `STATUS`) VALUES
(58, 'olivizo', 'd3ca5dde60f88db606021eeba2499c02', b'1'),
(73, 'PHILOS', 'ac53de703d708988e5081cfaf77fee78', b'1'),
(76, 'ishimwe', '224f6d5086b0e5cb996109d0d74c83b3', b'1'),
(79, 'DANIEL', 'd51e3eb481ff7594adff5cea2e8aa70f', b'1'),
(80, 'DANIEL1', 'ff38fae25a3e8c473d44a85fc615b170', b'1'),
(81, 'philos1', 'a047343bf4ba65fd4c4ef9596c92960c', b'1'),
(82, 'emile@localhost.local', '0158a407b6fd9ffd6beecd95a2d2f63c', b'1'),
(83, 'mahoko', 'c328c89b3d013590e84baac342a39ca8', b'1'),
(86, 'green', 'd8578edf8458ce06fbc5bb76a58c5ca4', b'1'),
(87, 'fred', '432f45b44c432414d2f97df0e5743818', b'1'),
(88, 'greendo', '58c1d5776d47ed50da42050e0e883cdc', b'1'),
(89, 'saga', '94d445871e00065232d23ecf56ff028a', b'1'),
(90, 'habijean', 'd5170a3e24af791ba3d674760619fcd9', b'1'),
(91, 'acehood', '47f0a30950e97a6024c42a46093d38a4', b'1'),
(92, 'bijigo', 'd6b0ab7f1c8ab8f514db9a6d85de160a', b'1'),
(93, 'user@user.com', '88b87698be0bc461f3cacf1f080929d5', b'1'),
(94, 'user1@user.com', '0207f4280f6c1bd45e1a2ed7cb1cca3d', b'1'),
(95, 'seka', '71714e978f7f5d7fd019076588b75220', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`Com_id`);

--
-- Indexes for table `message_table`
--
ALTER TABLE `message_table`
 ADD PRIMARY KEY (`MSG_ID`);

--
-- Indexes for table `signup_table`
--
ALTER TABLE `signup_table`
 ADD PRIMARY KEY (`USER_ID`), ADD UNIQUE KEY `PHONENO` (`PHONENO`), ADD UNIQUE KEY `BOD` (`BOD`,`PHONENO`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
 ADD PRIMARY KEY (`USER_ID`), ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `Ad_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `Com_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `message_table`
--
ALTER TABLE `message_table`
MODIFY `MSG_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `signup_table`
--
ALTER TABLE `signup_table`
MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
ADD CONSTRAINT `users_table_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_table` (`USER_ID`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
