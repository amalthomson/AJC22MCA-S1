-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 01:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opms`
--

-- --------------------------------------------------------

--
-- Table structure for table `outpass`
--

CREATE TABLE `outpass` (
  `adm_no` int(11) NOT NULL,
  `date_out` varchar(50) NOT NULL,
  `date_in` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outpass`
--

INSERT INTO `outpass` (`adm_no`, `date_out`, `date_in`, `reason`, `role_id`) VALUES
(1, '2023-01-04', '2023-01-05', 'checkup', 10),
(2, '2023-01-01', '2023-01-10', 'medical leave', 11),
(3, '2022-12-20', '2022-12-28', 'marriage', 12),
(4, '2023-01-06', '2023-01-07', 'function ', 13),
(6, '2023-01-04', '2023-01-05', 'medical', 0),
(7, '2023-01-02', '2023-01-04', 'trjk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_db`
--

CREATE TABLE `role_db` (
  `role_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(8) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_db`
--

INSERT INTO `role_db` (`role_id`, `email`, `password`, `role`, `status`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(2, 'amal@gmail.com', 'amal', 'user', 1),
(3, 'vikas@gmail.com', 'vikas', 'user', 1),
(4, 'akhil@gmail.com', 'akhil', 'user', 1),
(5, 'akash@gmail.com', 'akash', 'user', 1),
(10, 'amal@gmail.com', 'AMAL', 'user', 1),
(11, 'vikas@gmail.com', 'vikas', 'user', 1),
(12, 'akhil@gmail.com', 'akhil', 'user', 1),
(13, 'akash@gmail.com', 'akash', 'user', 1),
(14, 'abcd@gmail.com', 'abcd', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `mobile`, `address`, `role_id`, `image`) VALUES
(1, 'amal', 9469664422, 'wayanad', 10, 'Ama.jpg'),
(2, 'vikas', 9149900160, 'qwer', 11, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outpass`
--
ALTER TABLE `outpass`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `role_db`
--
ALTER TABLE `role_db`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outpass`
--
ALTER TABLE `outpass`
  MODIFY `adm_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_db`
--
ALTER TABLE `role_db`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
