-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2015 at 12:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `image`
--

-- --------------------------------------------------------

--
-- Table structure for table `html_table`
--

CREATE TABLE IF NOT EXISTS `html_table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `html_table`
--

INSERT INTO `html_table` (`id`, `file`) VALUES
(1, 'html_file/1502132.jpg'),
(15, 'html_file/Good-Interior-Design.jpg'),
(16, 'html_file/Nature Inspired Home Interior Design (1).jpg'),
(17, 'html_file/Nature Inspired Home Interior Design (6).jpg'),
(18, 'html_file/Nature Inspired Home Interior Design (17).jpg');
--
-- Database: `mandeep`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `file` varchar(1000) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `technology` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`mobile`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`file`, `id`, `name`, `technology`, `mobile`) VALUES
('html_file/1502132.jpg', 1, 'Mandeep', 'PHP', '9876543210');
--
-- Database: `mobileworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email1` varchar(25) NOT NULL,
  `email2` varchar(25) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password1` varchar(12) NOT NULL,
  `password2` varchar(12) NOT NULL,
  `mobile` varchar(12) NOT NULL DEFAULT '0',
  `gender` char(10) NOT NULL,
  `address1` varchar(40) NOT NULL,
  `address2` varchar(40) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postal` int(16) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(20) NOT NULL,
  PRIMARY KEY (`mobile`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email1`, `email2`, `userid`, `password1`, `password2`, `mobile`, `gender`, `address1`, `address2`, `country`, `state`, `city`, `postal`, `question`, `answer`) VALUES
(14, 'Kulwinder', 'Singh', 'kulwindersingh@yahoo.in', 'kulwindersingh@yahoo.in', 'kulwindersingh', '1122', '1122', '89909090', 'male', 'Sector 67', 'Mohali', 'India', 'Punjab', 'Mohali', 123457, 'Q2.: What is your home-town?', 'Punjab'),
(13, 'Preet', 'Sagar', 'abc@gmil.com', 'abc@gmail.com', 'preet', '11', '11', '90909090', 'male', 'Sector 67', 'Mohali', 'India', 'Punjab', 'Mohali', 123457, 'Q1.: What is your homename?', 'ABC'),
(11, 'Mandeep', 'Kumar', 'mandeepkumar@live.com', 'mandeepkumar@live.com', 'mandeepkumarchd', '1122', '1122', '9803057421', 'male', '#1236, Indira Colony', 'Sector 17', 'India', 'Haryana', 'Panchkula', 134113, 'Q3.: Which color you like most?', 'White');
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
