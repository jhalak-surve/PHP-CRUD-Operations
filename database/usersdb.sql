-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2020 at 05:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `created_at`, `updated_at`) VALUES
(73, 'anoop.sharma@gyrix.in', 'Anoop Sharma ji', '123456', '2020-10-31 09:48:07', '2020-11-03 12:39:18'),
(99, 'somesh.yadav@gyrix.in', 'Somesh Yadav', '123456', '2020-11-02 14:22:32', '2020-11-02 08:52:32'),
(100, 'ankur.tiwari@gyrix.co', 'Ankur Tiwari', 'abc1234', '2020-11-02 14:23:05', '2020-11-02 08:53:05'),
(109, 'jhalak.surve@gyrix.in', 'Jhalak Surve', 'jhalak123', '2020-11-03 17:36:29', '2020-11-03 12:06:29'),
(110, 'jayesh.karma@gyrix.in', 'Jayesh Karma', '123456', '2020-11-03 17:36:48', '2020-11-03 12:06:48'),
(111, 'deepakshi.joshi@gyrix.in', 'Deepakshi Joshi', '123456', '2020-11-03 17:37:22', '2020-11-03 12:07:22'),
(112, 'ayush.mahajan@gyrix.in', 'Ayush Mahajan', '123456', '2020-11-03 17:38:57', '2020-11-03 12:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
