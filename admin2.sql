-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp3`
--

CREATE TABLE `comp3` (
  `num` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobnum` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comdate` date NOT NULL,
  `uaddress` text NOT NULL,
  `comdetails` text NOT NULL,
  `upload` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp3`
--

INSERT INTO `comp3` (`num`, `username`, `mobnum`, `email`, `comdate`, `uaddress`, `comdetails`, `upload`) VALUES
(1, 'Priya', '+91789876546', 'priya@gmail.com', '2023-11-22', 'rgdgf', 'jbjhbj', 0x32303135313131355f3139353832332e6a7067),
(2, 'Maya', '+91678956789', 'maya@gmail.com', '2023-11-23', '', 'gggg', ''),
(3, 'Piya', '+91789876546', 'pooiiiii@gmail.com', '2023-11-23', 'llll', 'kkkk', 0x32303135313131355f3139353832332e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp3`
--
ALTER TABLE `comp3`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp3`
--
ALTER TABLE `comp3`
  MODIFY `num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
