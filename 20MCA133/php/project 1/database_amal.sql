-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_amal`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_amal`
--

CREATE TABLE `table_amal` (
  `reg_id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_amal`
--

INSERT INTO `table_amal` (`reg_id`, `Name`, `Phone Number`, `Address`) VALUES
(2, 'Vimal Thomson', '9149900160', 'House No. 338'),
(5, 'Vikas Wilson', '9018226718', 'House No. 8/145 '),
(6, 'Amal Thomson', '9469664422', 'House No. 338');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_amal`
--
ALTER TABLE `table_amal`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_amal`
--
ALTER TABLE `table_amal`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
