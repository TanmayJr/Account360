-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 07:03 AM
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
  `noleaves` int(11) NOT NULL,
  `bought` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`email`, `empname`, `empcity`, `noemp`, `salemp`, `noleaves`, `bought`) VALUES
('sundar@gmail.com', 'tanmay', 'virar', 1, 2147483647, 12345678, 10),
('sundar@gmail.com', 'roshan', 'mumbai', 2, 7878699, 2147483647, 70);

-- --------------------------------------------------------

--
-- Table structure for table `invdetails`
--

CREATE TABLE `invdetails` (
  `email` varchar(1024) NOT NULL,
  `invname` varchar(32) NOT NULL,
  `noinv` int(32) NOT NULL,
  `invcost` int(32) NOT NULL,
  `sold` int(32) NOT NULL,
  `invid` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invdetails`
--

INSERT INTO `invdetails` (`email`, `invname`, `noinv`, `invcost`, `sold`, `invid`) VALUES
('sundar@gmail.com', 'iphone', 1000, 6000, 60, 1),
('sundar@gmail.com', 'macbook', 100000, 100000, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `email` varchar(1024) NOT NULL,
  `custid` varchar(32) NOT NULL,
  `invid` varchar(32) NOT NULL,
  `noitems` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`email`, `custid`, `invid`, `noitems`) VALUES
('sundar@gmail.com', 'tanmay', 'iphone', 10),
('sundar@gmail.com', 'roshan', 'macbook', 20),
('sundar@gmail.com', 'roshan', 'iphone', 50);

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
(1, 'Sundar', '81dc9bdb52d04dc20036dbd8313ed055', 'sundar@gmail.com', 'Google', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`noemp`);

--
-- Indexes for table `invdetails`
--
ALTER TABLE `invdetails`
  ADD PRIMARY KEY (`invid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `noemp` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invdetails`
--
ALTER TABLE `invdetails`
  MODIFY `invid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
