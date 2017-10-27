-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2017 at 05:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--
CREATE DATABASE IF NOT EXISTS `mini` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mini`;

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `email` varchar(1024) NOT NULL,
  `empname` varchar(32) NOT NULL,
  `empcity` varchar(32) NOT NULL,
  `noemp` int(32) NOT NULL,
  `salemp` int(32) NOT NULL,
  `noleaves` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`email`, `empname`, `empcity`, `noemp`, `salemp`, `noleaves`) VALUES
('roshan@gmail.com', 'tanmay', 'Virar', 101, 10000, 8),
('roshan@gmail.com', 'sarvesh', 'borivali', 102, 12000, 13),
('roshan@gmail.com', 'pranav', 'andheri', 103, 15000, 14),
('saheel', 'abhishek', 'borivali', 1, 12000, 16),
('saheel', 'vikas', 'andheri', 2, 12000, 0),
('saheel', 'avinash', 'malad', 3, 14000, 3),
('saheel@gmail.com', 'abhishek', 'vazira', 1001, 8000, 13),
('saheel@gmail.com', 'vikas', 'malad', 1002, 12000, 1),
('saheel@gmail.com', 'avinash', 'andheri', 1003, 20000, 12),
('saheel@gmail.com', 'SARVESH', 'mumbai', 0, 50000, 20),
('saheel@gmail.com', 'abc', 'mumbai', 111, 123432, 2),
('saheel@gmail.com', 'Ankita', 'mumbai', 12345, 500000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `invdetails`
--

CREATE TABLE `invdetails` (
  `email` varchar(1024) NOT NULL,
  `invname` varchar(32) NOT NULL,
  `noinv` int(32) NOT NULL,
  `invcost` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invdetails`
--

INSERT INTO `invdetails` (`email`, `invname`, `noinv`, `invcost`) VALUES
('', 'tanmay', 23424, 32),
('', 'macbook', 20, 100000),
('monu@mm.com', 'iphone', 12, 2000),
('avi@mail.com', 'pred', 1, 100000),
('saheel@gmail.com', 'ABCDEFGHI', 0, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `company` varchar(32) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `company`, `active`) VALUES
(11, 'Roshan', '25d55ad283aa400af464c76d713c07ad', 'roshan@gmail.com', 'Prats', 0),
(12, 'Saheel', '25d55ad283aa400af464c76d713c07ad', 'saheel@gmail.com', 'SFIT', 0),
(13, 'Akshay Yadav', '92b9cccc0b98c3a0b8d0df25a421c0e3', 'akki@gmail.com', 'Akshay Industries', 0),
(14, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 0),
(15, 'Tanmay', '81dc9bdb52d04dc20036dbd8313ed055', 'tanmay@gmail.com', 'DCOM', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
