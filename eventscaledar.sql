-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 01:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventscaledar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EventDate` date NOT NULL,
  `Event` varchar(250) NOT NULL,
  `Details` varchar(250) NOT NULL,
  `Photos` varchar(250) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EID`, `EventDate`, `Event`, `Details`, `Photos`) VALUES
(13, '2016-05-19', 'Annual PTA Meeting', 'The Annual PTA meeting will be held on Thursday, 17th May, 2016 at the School Main Hall starting at 10.00am. Come one come all..', 'uploades/medium/4321462619357.jpg'),
(14, '2016-05-19', 'Staff Meeting', 'Staff meeting will be held on Thursday, 19th May, 2016  at 9.00am at the staff room..', 'uploades/medium/6371462619755.jpg'),
(15, '2016-05-20', 'Visiting Day', 'There will be a visitation day on Friday, 20th May, 2016.. stating at 10.00am.', 'uploades/medium/7621462621522.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
