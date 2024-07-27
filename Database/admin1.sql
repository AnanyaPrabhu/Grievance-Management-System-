-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 04:54 PM
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
-- Database: `admin1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp1`
--

CREATE TABLE `comp1` (
  `num` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobnum` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comdate` date NOT NULL,
  `uaddress` varchar(40) NOT NULL,
  `comdetails` varchar(40) NOT NULL,
  `upload` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp1`
--

INSERT INTO `comp1` (`num`, `username`, `mobnum`, `email`, `comdate`, `uaddress`, `comdetails`, `upload`) VALUES
(1, 'Lia', 2147483647, 'lia@gmail.com', '2024-06-21', 'Bangalore', 'Water is not clean', 0x736f6c61722069727269676174696f6e20322e6a7067),
(2, 'Urmila', 2147483647, 'urmi@gmail.com', '2024-06-21', 'Mangalore', 'Water is not clean', 0x736f6c61722069727269676174696f6e20322e6a7067),
(3, 'Rita', 2147483647, 'riya@gmail.com', '2024-06-21', 'Bangalore', 'hghjbhmmj', 0x536f6c61722d49727269676174696f6e2e6a7067),
(4, 'Ananya', 2147483647, 'ananya@gmail.com', '2024-07-15', 'kjgdfk', 'uygyugy', 0x6c616d702e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `comp2`
--

CREATE TABLE `comp2` (
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
-- Dumping data for table `comp2`
--

INSERT INTO `comp2` (`num`, `username`, `mobnum`, `email`, `comdate`, `uaddress`, `comdetails`, `upload`) VALUES
(1, 'Maya', '+91678956789', 'maya@gmail.com', '2023-11-22', 'Bidar', 'Electricity is not supplied', 0x32303135313131355f3139353830342e6a7067),
(2, 'Maya', '+91678956789', 'maya@gmail.com', '2023-11-22', 'Bidar', 'Electricity is not supplied', 0x32303135313131355f3139353830342e6a7067),
(3, 'Siya', '+91678956789', 'siya@gmail.com', '2023-11-24', 'swda', 'hghj', 0x32303135313131355f3139353832332e6a7067),
(4, 'Rani', '+91789876546', 'rani@gmail.com', '2023-11-24', 'jbhjhkj', 'ngjhgh', 0x32303135313131355f3139353831382e6a7067),
(5, 'Purvi', '+91789876546', 'purvi@gmail.com', '2023-11-24', 'kjhj', 'hggh', 0x32303135313131355f3139353832332e6a7067),
(6, 'Amar', '+91897655677', 'amar@gmail.com', '2024-06-21', 'Mumbai', 'jkvhkfrs', 0x536f6c61722d49727269676174696f6e2e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp1`
--
ALTER TABLE `comp1`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `comp2`
--
ALTER TABLE `comp2`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp1`
--
ALTER TABLE `comp1`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comp2`
--
ALTER TABLE `comp2`
  MODIFY `num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
