-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2016 at 07:50 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `india`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `admin_id` int(11) DEFAULT NULL,
  `payment_id` int(11) NOT NULL DEFAULT '1',
  `event_id` int(11) DEFAULT NULL,
  `MEMBER_ID` int(200) NOT NULL,
  `mode` varchar(200) NOT NULL,
  `reciept_number` int(11) NOT NULL,
  `bank_branch` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `currency` varchar(11) NOT NULL,
  `payment_date` date NOT NULL,
  `dateOfRequest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PaymentProof` varchar(200) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `verify` varchar(100) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`admin_id`, `payment_id`, `event_id`, `MEMBER_ID`, `mode`, `reciept_number`, `bank_branch`, `amount`, `currency`, `payment_date`, `dateOfRequest`, `PaymentProof`, `extension`, `verify`, `comments`) VALUES
(NULL, 6, 12, 12, 'cheque', 21, 'n bjkn', 1213, 'tgf', '2016-08-12', '2016-08-23 17:35:10', 'PaymentProof_6.gif', 'image/gif', 'successfull', 'dada'),
(NULL, 7, 12, 12, 'bank-cash-deposit-slip', 121, 'ewewe', 2121, 'dsdsd', '2016-09-15', '2016-09-10 19:45:25', 'PaymentProof_7.png', 'image/png', 'successfull', 'dada'),
(NULL, 8, 1101, 1101, 'bank-cash-deposit-slip', 12101, 'ewwwwwwwwwww', 21111, 'swqwq', '2016-09-22', '2016-09-10 19:47:29', 'PaymentProof_82.png', 'image/png', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
