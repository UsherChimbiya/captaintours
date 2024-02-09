-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 08:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `website` varchar(250) DEFAULT NULL,
  `message` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `full_name`, `email`, `subject`, `website`, `message`, `status`) VALUES
(3, 'Chanda Indian', 'bwalya@gmail.com', 'I want to pay for my hosting fee', 'b@gmail.com', 'hey', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `password`, `registration_time`, `role`) VALUES
(2, 'Nswana jane', 'angela@gmail.com', '$2y$10$cJ.t53ber7CnCCpFdC6XsuJzGHKcyesfuOuy1vEO6S5RCJXWQrYsG', '2024-02-08 13:19:01', 'user'),
(3, 'karen', 'karen@gmail.com', '$2y$10$kPa4pMOlT8dWnvlWluISJuCI10/RiPZIdIeJgEhNw1UrSRVbImMc2', '2024-02-08 16:27:02', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `car_type` varchar(50) DEFAULT NULL,
  `pick_up_place` varchar(50) DEFAULT NULL,
  `pick_up_date` varchar(50) DEFAULT NULL,
  `pick_up_time` varchar(50) DEFAULT NULL,
  `drop_off_place` varchar(50) DEFAULT NULL,
  `drop_off_date` varchar(50) DEFAULT NULL,
  `drop_off_time` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `car_type`, `pick_up_place`, `pick_up_date`, `pick_up_time`, `drop_off_place`, `drop_off_date`, `drop_off_time`, `status`) VALUES
(16, 'Lexus CT', 'Delhi road', '2024-02-08', '19:43', 'Delhi road', '2024-02-08', '19:43', 'Pending'),
(17, 'Toyota', 'Delhi road', '2024-02-08', '', 'Delhi road', '2024-02-08', '19:03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `registration_time`, `role`) VALUES
(28, 'karen Nakamba', 'nakamba1@gmail.com', '$2y$10$6IjRda6xR5FElDhWi9E5/O8fDFS8k14NOUTVbRmyYXvkHQs2wiV2q', '2024-02-08 17:24:46', 'user'),
(29, 'Nswana Cobet', 'nswanacobet@gmail.com', '$2y$10$hO0Jkq5UfWHO8gxfpzen2OUDOyB6VeA.6ro9/CJk/t1uYW4bY0MaC', '2024-02-08 17:32:48', 'user'),
(30, 'Boris Bwalya', 'boris@gmail.com', '$2y$10$mj5HCW.uhfPVEb4eA9ZVVuToCeezh.gSp1MdjGwYz7AIqiPPghY4K', '2024-02-08 18:17:19', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
