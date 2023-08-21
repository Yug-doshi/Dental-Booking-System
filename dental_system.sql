-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 04:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('krish', '12345'),
('Yug', '67890');

-- --------------------------------------------------------

--
-- Table structure for table `booked_patients`
--

CREATE TABLE `booked_patients` (
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `Patient_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_patients`
--

INSERT INTO `booked_patients` (`name`, `phone`, `booking_date`, `time`, `service`, `doctor_id`, `Patient_Id`) VALUES
('HI', 1234566543, '2024-01-11', '09:12', 'abc', '64bd2335c4', 'Nisarg'),
('Jash', 8787878787, '2022-07-24', '09:20', 'smilecare', '64be143d1e', 'Nisarg');

-- --------------------------------------------------------

--
-- Table structure for table `dental_service`
--

CREATE TABLE `dental_service` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dental_service`
--

INSERT INTO `dental_service` (`id`, `name`) VALUES
(1, 'abc'),
(2, 'abc'),
(3, 'xyz'),
(4, 'smilecare');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dental_service` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `dental_service`, `status`) VALUES
('64bd2335c4', 'Yug', 'abc', 'booked'),
('64be1379d3', 'Yug', 'xyz,smilecare', 'available'),
('64be13811e', 'Krish', 'abc,smilecare', 'available'),
('64be13861e', 'Jainam', 'abc', 'available'),
('64be1434e6', 'Harsh', 'smilecare', 'available'),
('64be143d1e', 'Vedant', 'smilecare', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Jainam', '12345'),
('Nisarg', '123456'),
('Yug', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booked_patients`
--
ALTER TABLE `booked_patients`
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `dental_service`
--
ALTER TABLE `dental_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dental_service`
--
ALTER TABLE `dental_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
