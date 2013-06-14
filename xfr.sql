-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2013 at 04:48 PM
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
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(25) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` text NOT NULL,
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` text NOT NULL,
  `email` text NOT NULL,
  `about` text NOT NULL,
  `referrer` text NOT NULL,
  `mainservice` varchar(80) NOT NULL,
  `startupkit` tinyint(1) NOT NULL,
  `officeassistant` tinyint(1) NOT NULL,
  `retailsolution` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `form`, `ip`, `dt`, `firstname`, `lastname`, `businessname`, `email`, `about`, `referrer`, `mainservice`, `startupkit`, `officeassistant`, `retailsolution`) VALUES
(1, 'sell', '', '2013-06-14 11:50:48', 'test1', 'test1', 'test1', 'test1@thexfr.org', 'about myself', 'plane exhaust in sky.', 'gallerywall', 0, 1, 1),
(2, 'sell', '::1', '2013-06-14 12:28:08', 'test4', 'test4', 'test4', 'test4@thexfr.org', 'about me', 'bla bla', 'displaycase', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `start`
--

CREATE TABLE IF NOT EXISTS `start` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` text NOT NULL,
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` text NOT NULL,
  `email` text NOT NULL,
  `about` text NOT NULL,
  `referrer` text NOT NULL,
  `mainservice` text NOT NULL,
  `startupkit` text NOT NULL,
  `officeassistant` text NOT NULL,
  `retailsolution` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `start`
--

INSERT INTO `start` (`id`, `form`, `ip`, `dt`, `firstname`, `lastname`, `businessname`, `email`, `about`, `referrer`, `mainservice`, `startupkit`, `officeassistant`, `retailsolution`) VALUES
(1, 'start', '', '2013-06-14 11:21:27', 'test1', 'test1', 'test1', 'test1@thexfr.org', 'about me', 'The internet', '0', '', '', ''),
(2, 'start', '', '2013-06-14 11:23:27', 'test1', 'test1', 'test1', 'test1@thexfr.org', 'about me', 'The internet', '0', '', '', ''),
(3, 'start', '', '2013-06-14 11:24:26', 'test2', 'test2', 'test2', 'test2@thexfr.org', 'about me', 'a magazine', '1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `ip`, `dt`, `firstname`, `lastname`, `email`) VALUES
(1, '', '0000-00-00 00:00:00', 'rob', '', 'rcapell@Me.com'),
(2, '', '0000-00-00 00:00:00', 'rob', '', 'rcapell@Me.com'),
(3, '', '0000-00-00 00:00:00', 'rob', '', 'rcapell@me.com'),
(4, '::1', '2013-06-14 16:46:19', 'test7', '', 'test7@thexfr.org');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` text NOT NULL,
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` text NOT NULL,
  `email` text NOT NULL,
  `about` text NOT NULL,
  `referrer` text NOT NULL,
  `mainservice` varchar(80) NOT NULL,
  `startupkit` tinyint(1) NOT NULL,
  `officeassistant` tinyint(1) NOT NULL,
  `retailsolution` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `form`, `ip`, `dt`, `firstname`, `lastname`, `businessname`, `email`, `about`, `referrer`, `mainservice`, `startupkit`, `officeassistant`, `retailsolution`) VALUES
(1, 'transfer', '', '2013-06-14 12:09:03', 'test6', 'test6', 'test6', 'test6@thexfr.org', 'about me', 'google', 'learn', 0, 0, 1),
(2, 'transfer', '', '2013-06-12 14:23:47', 'test7', 'test7', 'test7', 'test7@thexfr.org', 'about me bla bla', 'bing', 'create', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` text NOT NULL,
  `ip` text NOT NULL,
  `dt` datetime NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` text NOT NULL,
  `email` text NOT NULL,
  `about` text NOT NULL,
  `referrer` text NOT NULL,
  `mainservice` varchar(80) NOT NULL,
  `startupkit` tinyint(1) NOT NULL,
  `officeassistant` tinyint(1) NOT NULL,
  `retailsolution` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `form`, `ip`, `dt`, `firstname`, `lastname`, `businessname`, `email`, `about`, `referrer`, `mainservice`, `startupkit`, `officeassistant`, `retailsolution`) VALUES
(1, 'work', '', '2013-06-14 11:49:31', 'test1', 'test1', 'test1', 'test1@thexfr.org', 'about me', 'the internet', 'customize', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
