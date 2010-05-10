-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2010 at 06:23 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twitspare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sent_ads`
--

CREATE TABLE IF NOT EXISTS `sent_ads` (
  `sent_ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `twitspare_user_id` int(11) NOT NULL,
  `advertiser_id` int(11) NOT NULL,
  `message` varchar(140) NOT NULL,
  `link` varchar(250) NOT NULL,
  `clicks` int(11) NOT NULL,
  `requested_countries` varchar(250) NOT NULL,
  PRIMARY KEY (`sent_ads_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sent_ads`
--

INSERT INTO `sent_ads` (`sent_ads_id`, `twitspare_user_id`, `advertiser_id`, `message`, `link`, `clicks`, `requested_countries`) VALUES
(1, 1, 1, 'i loove you guys blah blah  http://bit.ly/9j8qx8 #adz', ' http://bit.ly/9j8qx8', 5969, 'united states,'),
(2, 2, 5, 'i loove you guys blah blah  http://bit.ly/9j8qx8 #adz', 'http://bit.ly/OaYh7', 2342, 'united states,');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `twitspare_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `twitter_user_id` int(11) NOT NULL,
  `ads_in_progress` int(11) NOT NULL,
  `ads_completed` int(11) NOT NULL,
  `cash_balance` int(11) NOT NULL,
  PRIMARY KEY (`twitspare_user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`twitspare_user_id`, `twitter_user_id`, `ads_in_progress`, `ads_completed`, `cash_balance`) VALUES
(1, 19243887, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
