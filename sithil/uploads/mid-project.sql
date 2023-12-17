-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 10:43 PM
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
-- Database: `mid-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `application` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`username`, `name`, `application`) VALUES
('jawad01', 'Jawad Anam', 'aklnsdlkjfsal;/;slj,vmn,mv'),
('zawad01', 'Zawad Anam', 'aklnsdlkjfsal;/;slj,vmn,mv'),
('zawad01', 'Zawad Anam', 'aklnsdlkjfsal;/;slj,vmn,mv'),
('zawad01', 'Zawad Anam', 'aklnsdlkjfsal;/;slj,vmn,mv'),
('zawad01', 'Zawad Anam', 'aklnsdlkjfsal;/;slj,vmn,mv');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `name`, `feedback`) VALUES
('billG', 'Bill Gates', 'kljelfkdjslkdfmdsl;gkdl'),
('billG', 'Bill Gates', 'kljelfkdjslkdfmdsl;gkdl'),
('abdul', 'Abdul Kuddus', 'kljelfkdjslkdfmdsl;gkdl');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`, `userType`, `gender`, `dob`, `profile_image`) VALUES
(1, 'Abdul Kuddus', 'abdul11@gmail.com', 'abdul11', '123$', 'customer', 'Male', '2023-08-27', ''),
(2, 'Ei Emon', 'ei@gmail.com', 'eiemon', '123#', 'admin', 'Male', '2023-10-29', ''),
(3, 'Nadim', 'nadim@gmail.com', 'nadim00', '123@', 'customer', 'Male', '2023-10-22', ''),
(6, 'Elon Musk', 'elon.musk@spacex.com', 'elonM', '123@', 'employee', 'male', '1967-07-19', ''),
(7, 'Will Smith', 'will.smith@gmail.com', 'willS', '123@', 'customer', 'male', '1967-07-19', ''),
(8, 'Bob Marley', 'bob@gmail.com', 'bobM', '123@', 'employee', 'male', '1967-07-19', ''),
(9, 'Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', 'ronaldoK', '123@', 'customer', 'male', '1967-07-19', ''),
(10, 'Boris Johnson', 'boris.johnson@gmail.com', 'borisJ', '123@', 'employee', 'male', '1967-07-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(255) NOT NULL,
  `stationName` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contactNumber` int(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `stationName`, `city`, `contactNumber`, `location`) VALUES
(1, 'Akkelpur Intersection', 'Natore', 1600000001, 'Akkelpur, Natore'),
(3, 'Santahar Intersection', 'Santahar', 1600000002, 'Santahar, Bogura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
