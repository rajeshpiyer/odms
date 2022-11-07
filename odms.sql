-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2022 at 09:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `odms`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(100) NOT NULL AUTO_INCREMENT,
  `org_id` int(100) NOT NULL,
  `hos_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `org_id`, `hos_id`, `status`) VALUES
(3, 25, 5, '1'),
(4, 25, 5, '0'),
(8, 28, 3, '1'),
(10, 27, 3, '0'),
(11, 29, 3, '0'),
(12, 30, 3, '0'),
(13, 26, 8, '0');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_id` int(11) NOT NULL COMMENT 'f',
  `don_id` int(11) NOT NULL COMMENT 'f',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `pat_id`, `don_id`) VALUES
(3, 3, 10),
(4, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `don_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `phn` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`don_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`don_id`, `name`, `mail`, `phn`, `age`, `gender`, `pass`) VALUES
(2, 'boby benny', 'bb@gmail.com', '7994492982', 33, 'Male', 'bb'),
(7, 'sharukh', 'x@gmail.com', '1234567890', 34, 'Male', 'x'),
(9, 'jinu', 'jinu@il.com', '4564564564', 25, 'Male', '123456789'),
(10, 'don', 'don@gmail.com', '1234567899', 33, 'Male', 'akku'),
(11, 'SABU', 'sabu@gmail.com', '7994492982', 37, 'Male', 'sabu'),
(12, 'alana', 'alan@gmail.com', '7994492982', 33, 'Male', 'alan');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hos_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`hos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hos_id`, `name`, `address`, `phone`, `email`, `pass`) VALUES
(3, 'ST.THOMAS ', 'CHETHIPUZHA , KOTTAYAM. ', '9645736804', 'thomas@gmail.com', '1212'),
(5, 'ST.PIUS', 'RAMAPURAM', '6834567890', 'thoma@gmail.com', 'thoma'),
(7, 'KVMS', 'Ponkunnam', '7994672982', 'hospital@gmail.com', 'kvms'),
(8, 'St.Xaviour', 'palakkad', '1234567890', 'xaviour@gmail.com', 'pala');

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE IF NOT EXISTS `organ` (
  `org_id` int(200) NOT NULL AUTO_INCREMENT,
  `don_id` int(200) NOT NULL COMMENT 'foreign',
  `blood` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  PRIMARY KEY (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`org_id`, `don_id`, `blood`, `org`) VALUES
(25, 7, 'B+', 'liver '),
(26, 8, 'B+', 'pancrease'),
(27, 9, 'O- ', 'lung lobe '),
(28, 10, 'A+ ', 'lung lobe '),
(29, 2, 'B- ', 'pancrease'),
(30, 7, 'AB- ', 'lung lobe '),
(31, 11, 'A+ ', 'kidney'),
(32, 12, 'B+', 'kidney');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `doc_id` int(200) NOT NULL COMMENT 'foreign',
  `pat_id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`doc_id`, `pat_id`, `name`, `age`, `blood`, `org`) VALUES
(3, 3, 'Kavitha', 68, 'B+', 'Pancreas'),
(5, 4, 'Honey', 43, 'O+', 'Liver '),
(7, 6, 'Abin', 22, 'A+ ', 'Liver ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(200) NOT NULL AUTO_INCREMENT,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `mail`, `pass`, `type`) VALUES
(3, 'admin@gmail.com', 'admin', 0),
(4, 'bb@gmail.com', 'bb', 1),
(7, 'thomas@gmail.com', '1212', 2),
(12, 'donor@gmail.com', 'dono', 1),
(13, 'thoma@gmail.com', 'thoma', 2),
(14, 'jinu@il.com', '123456789', 1),
(16, 'don@gmail.com', 'akku', 1),
(17, 'sabu@gmail.com', 'sabu', 1),
(18, 'hospital@gmail.com', 'kvms', 2),
(19, 'alan@gmail.com', 'alan', 1),
(20, 'xaviour@gmail.com', 'pala', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
