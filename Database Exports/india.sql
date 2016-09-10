-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2016 at 01:51 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `india`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `MEMBER_ID` int(200) NOT NULL,
  `mode` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL,
  `date1` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `verify` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MEMBER_ID`, `mode`, `amount`, `date1`, `file`, `extension`, `verify`) VALUES
(12121, 'demand-draft', 12121212, '2016-06-02', '9a6a8369eb4a0646c39e24de846796a2.pdf', 'application/pdf', ''),
(121212, 'demand-draft', 1212121212, '2016-06-01', '8541c71bd3d805a491fabba951abf678.jpg', 'image/jpeg', 'unsuccessfull'),
(1, 'demand-draft', 121, '2016-05-31', '2ec9b00ee6d5ad9882ded60b9628d2a1.pdf', 'application/pdf', ''),
(121, 'cheque', 2121, '2016-06-01', 'ac859c60ee8315b0e472d9efea601bfd.jpg', 'image/jpeg', ''),
(1212121, 'demand-draft', 2121, '2016-06-01', '886f6c246391e6504f09102d004e5935.pdf', 'application/pdf', ''),
(3434, 'demand-draft', 3434, '2016-06-20', '31603c79a1a8ada646823eb33c7b958a.jpg', 'image/jpeg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
