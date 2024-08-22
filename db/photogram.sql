-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`user_id`, `username`, `password`, `time`) VALUES
(2, 'krish', 'krish123', '2024-08-17 09:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `time`) VALUES
(1, 'krish', 'krish', '2024-08-19 11:18:37'),
(2, 'krish252', 'krish252', '2024-08-19 11:18:57'),
(3, 'krish', 'krish', '2024-08-19 11:19:27'),
(4, 'krish', 'krish', '2024-08-19 11:19:53'),
(5, 'krish', 'krish123', '2024-08-19 11:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `mobile_number` bigint(13) NOT NULL,
  `full_name` text NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `mobile_number`, `full_name`, `username`, `password`, `time`) VALUES
(2, 2147483647, 'krish gakhar', 'krish', 'krish123', '2024-08-15 12:05:45'),
(4, 2147483647, 'krish gakhar', 'krish', 'krish123', '2024-08-17 09:21:21'),
(5, 9592307540, 'Sahil gakhar', 'sahil', 'sahil123', '2024-08-18 11:13:09'),
(6, 9592307540, 'Piyush khanna', 'piyush', 'piyush123', '2024-08-18 11:15:06'),
(7, 9592307540, 'shivanshu khanna', 'shivanshu', 'shivanshu123', '2024-08-18 11:15:39'),
(8, 9592307540, 'Teena gakhar', 'Teena', 'Teena123', '2024-08-18 11:16:02'),
(9, 9592307540, 'Heena gakhar', 'Heena', 'Heena123', '2024-08-18 11:16:22'),
(10, 9592307540, 'Goldy gakhar', 'Goldy', 'Goldy123', '2024-08-18 11:18:06'),
(11, 9592307540, 'Dimple Gakhar', 'Dimple', 'Dimple123', '2024-08-18 11:18:37'),
(12, 9592307540, 'Dimple Gakhar', 'Dimple', 'Dimple123', '2024-08-18 11:29:44'),
(13, 0, '', 'krish', 'krish', '2024-08-19 08:19:28'),
(14, 9592307540, 'krish gakhar', 'krish', 'krish123', '2024-08-22 10:01:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
