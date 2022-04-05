-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2014 at 02:53 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maps_ver_1_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `pic`) VALUES
(1, 'Pan Africa Market', '1521 1st Ave, Seattle, WA', 47.608940, -122.340141, 'specialdefault', 'upload/search-0.jpg'),
(2, 'Buddha Thai & Bar', '2222 2nd Ave, Seattle, WA', 47.613590, -122.344391, 'specialdefault', 'upload/search-1.jpg'),
(3, 'The Melting Pot', '14 Mercer St, Seattle, WA', 47.624561, -122.356445, 'specialdefault', 'upload/search-2.jpg'),
(4, 'Ipanema Grill', '1225 1st Ave, Seattle, WA', 47.606365, -122.337654, 'specialdefault', 'upload/search-3.jpg'),
(5, 'Sake House', '2230 1st Ave, Seattle, WA', 47.612823, -122.345673, 'specialdefault', 'upload/search-4.jpg'),
(6, 'Crab Pot', '1301 Alaskan Way, Seattle, WA', 47.605961, -122.340363, 'specialdefault', 'upload/search-5.jpg'),
(7, 'Mama''s Mexican Kitchen', '2234 2nd Ave, Seattle, WA', 47.613976, -122.345467, 'specialdefault', 'upload/search-6.jpg'),
(8, 'Wingdome', '1416 E Olive Way, Seattle, WA', 47.617214, -122.326584, 'specialdefault', 'upload/search-7.jpg'),
(9, 'Piroshky Piroshky', '1908 Pike pl, Seattle, WA', 47.610126, -122.342834, 'specialdefault', 'upload/search-8.jpg');
