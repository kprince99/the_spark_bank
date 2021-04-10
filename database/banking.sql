-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 06:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `SNo` int(11) NOT NULL,
  `sender` bigint(50) NOT NULL,
  `receiver` bigint(50) NOT NULL,
  `Amount` bigint(20) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`SNo`, `sender`, `receiver`, `Amount`, `Time`) VALUES
(1, 10216, 10210, 500, '2021-04-05 16:49:11'),
(2, 10216, 10210, 9000, '2021-04-05 20:24:45'),
(3, 10211, 10234, 200, '2021-04-09 15:31:56'),
(5, 12089, 10234, 78, '2021-04-09 15:38:16'),
(6, 12089, 12012, 100, '2021-04-09 15:40:26'),
(7, 10210, 10216, 300, '2021-04-09 15:45:18'),
(8, 10211, 10210, 51, '2021-04-09 15:46:29'),
(9, 10216, 12089, 100, '2021-04-09 15:48:43'),
(10, 12089, 10216, 1200, '2021-04-09 15:49:39'),
(15, 10216, 12089, 1000, '2021-04-09 17:21:11'),
(16, 10234, 12089, 2000, '2021-04-09 17:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `S.no` int(11) NOT NULL,
  `Account_Number` bigint(16) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Amount` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`S.no`, `Account_Number`, `Name`, `Email`, `Amount`) VALUES
(1, 10211, 'Neha Pandey', 'Neha@gmail.com', 13320),
(2, 10210, 'Nitin Sen', 'Nitin2710@gmail.com', 11251),
(3, 10216, 'Somya Bajaj', 'somya@gmail.com', 10400),
(4, 12089, 'Layak Pratap', 'Layak@gmail.com', 2800),
(5, 10234, 'Rohan Mulani', 'Rohan@gmail.com', 10500),
(6, 12012, 'Shivam chaudary', 'Shivam.3@gmail.com', 278),
(7, 12432, 'Amar Pandey', 'Amarujala@gmail.com', 1234),
(8, 12541, 'Arman Malik', 'Amar@yahoo.com', 2880);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
