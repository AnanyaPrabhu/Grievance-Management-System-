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
-- Database: `admin3`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp4`
--

CREATE TABLE `comp4` (
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
-- Dumping data for table `comp4`
--

INSERT INTO `comp4` (`num`, `username`, `mobnum`, `email`, `comdate`, `uaddress`, `comdetails`, `upload`) VALUES
(1, 'Piya', '+91789876546', 'piya@gmail.com', '2023-11-22', 'Kalburgi', 'The roads are not good', 0x32303135313131355f3139353832392e6a7067),
(2, 'Tia', '+91678956789', 'tia@gmail.com', '2023-11-23', 'jkhjhklkl', 'jyghj', 0x32303135313131355f3139353832332e6a7067),
(3, 'Manya', '+91789876546', 'manya@gmail.com', '2023-11-23', 'jhbvh', 'nbvhn', 0x32303135313131355f3139353832332e6a7067),
(4, 'Deepa', '+91678956789', 'deepa@gmail.com', '2023-11-23', 'kjnjhkj', 'ssss', 0x32303135313131355f3139353832332e6a7067),
(5, 'Lisha', '+91789876546', 'lisha@gmail.com', '2023-11-23', 'aaaas', 'dsfes', 0x32303135313131355f3139353832332e6a7067),
(6, 'Ananya', '+91678956789', 'ananya@gmail.com', '2023-11-24', 'jhj', 'srger', 0x32303135313131355f3139353832332e6a7067),
(7, 'Reema', '+91678956789', 'reema@gmail.com', '2023-12-05', 'mhmjhj', 'jhgjh', 0x53637265656e73686f7420283236292e706e67),
(8, 'Samyuktha', '+91678956789', 'sam@gmail.com', '2023-12-05', 'mghfyjkhj', 'jhygfukgk', 0x53637265656e73686f7420283236292e706e67),
(9, 'Varsha', '+91678956789', 'riya@gmail.com', '2023-12-08', 'hgbjkbj', '', 0x53637265656e73686f7420283236292e706e67),
(10, 'Varsha', '+91789876546', 'maya@gmail.com', '2023-12-08', 'klhuk', 'jkhkjh', 0x53637265656e73686f7420283236292e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp4`
--
ALTER TABLE `comp4`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp4`
--
ALTER TABLE `comp4`
  MODIFY `num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
