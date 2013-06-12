-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2013 at 09:47 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xfr`
--

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE IF NOT EXISTS `connect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `businessName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membershipSurvey`
--

CREATE TABLE IF NOT EXISTS `membershipSurvey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `businessName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `about` text NOT NULL,
  `howDidYouHear` text NOT NULL,
  `mainService` varchar(14) NOT NULL,
  `startUpKit` tinyint(4) NOT NULL,
  `officeAssistant` tinyint(4) NOT NULL,
  `retailSolution` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membershipSurvey`
--

INSERT INTO `membershipSurvey` (`id`, `firstName`, `lastName`, `businessName`, `email`, `about`, `howDidYouHear`, `mainService`, `startUpKit`, `officeAssistant`, `retailSolution`) VALUES
(1, 'robert', 'c', 'rc Web', '', 'blah hey', 'simon', 'on', 1, 1, 0),
(2, 'Robert', 'Capell', 'RC WEB', 'rcapell@me.com', '', 'simon', 'teamOffice', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`) VALUES
(1, 'rob', 'rcapell@Me.com'),
(2, 'rob', 'rcapell@Me.com'),
(3, 'rob', 'rcapell@me.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
