-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 06:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `email` varchar(1024) NOT NULL,
  `custid` varchar(32) NOT NULL,
  `invid` varchar(32) NOT NULL,
  `noitems` int(11) NOT NULL,
  `Pay_received` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`email`, `custid`, `invid`, `noitems`, `Pay_received`) VALUES
('sundar@gmail.com', 'tanmay', 'iphone', 10, 0),
('sundar@gmail.com', 'roshan', 'macbook', 20, 0),
('sundar@gmail.com', 'roshan', 'iphone', 50, 0),
('roshan@gmail.com', 'Kartik', 'Nokia Phone', 5, 0),
('roshan@gmail.com', 'Rock', 'Stones', 40, 1),
('roshan@gmail.com', 'Dhoni', 'Bat', 10, 0),
('roshan@gmail.com', 'Brett', 'Ball', 10, 1),
('roshan@gmail.com', 'Greg', 'Cap', 2, 1),
('roshan@gmail.com', 'Messi', 'Football', 2, 0),
('roshan@gmail.com', 'Rahul', 'Cycle', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
