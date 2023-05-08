-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_info`
--

CREATE TABLE `stock_info` (
  `S.N.` int(10) NOT NULL,
  `Stock Name` varchar(255) NOT NULL,
  `Stocks` int(10) NOT NULL,
  `Rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_info`
--

INSERT INTO `stock_info` (`S.N.`, `Stock Name`, `Stocks`, `Rate`) VALUES
(1, 'Mouse', 10, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_info`
--
ALTER TABLE `stock_info`
  ADD PRIMARY KEY (`S.N.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock_info`
--
ALTER TABLE `stock_info`
  MODIFY `S.N.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
