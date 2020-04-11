-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 09:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enb`
--
CREATE DATABASE IF NOT EXISTS `enb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `enb`;

-- --------------------------------------------------------

--
-- Table structure for table `addevents`
--

CREATE TABLE `addevents` (
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `venue` varchar(15) NOT NULL,
  `details` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addevents`
--

INSERT INTO `addevents` (`name`, `description`, `venue`, `details`) VALUES
('Gala Dinner', 'Annual event', 'hostel-9', '2020-04-18 19:45:40.000000'),
('Marathon', 'Athletics', 'Gymkhana', '2020-04-09 11:37:00.000000'),
('Orientation', 'Freshers', 'Convocation hal', '2020-04-09 13:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES
('Black', 'Fury', 'bf@gmail.com', '456'),
('John', 'M', 'jm@gmail.com', '321'),
('Shantanu', 'Khandve', 'sk@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevents`
--
ALTER TABLE `addevents`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
