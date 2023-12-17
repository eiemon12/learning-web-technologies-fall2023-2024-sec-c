-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 08:02 PM
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
-- Database: `riyad`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(255) NOT NULL,
  `counterNo` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counterNo`, `name`, `phone`, `email`, `location`) VALUES
(1, 350, 'Airport Railway Station', 1700000000, 'rail350@abc.com', 'Azampur, Dhaka'),
(2, 351, 'Airport Railway Station', 1700000001, 'rail351@abc.com', 'Azampur, Dhaka'),
(3, 352, 'Airport Railway Station', 1700000502, 'rail352@abc.com', 'Azampur, Dhaka'),
(4, 353, 'Airport Railway Station', 1700000004, 'rail353@abc.com', 'Azampur, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(255) NOT NULL,
  `deals` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `deals`, `date`) VALUES
(2, 'Promotional Fares: Look out for special promotional fares during specific seasons or events. Railways may offer discounted rates for travel during off-peak times or for specific routes.', '2023-11-19 04:28:53'),
(3, 'Student and Senior Discounts: Many railway services offer special discounts for students and seniors. Valid identification may be required to avail of these discounts.', '2023-11-19 04:38:01'),
(4, 'Newsletter Subscriptions: Signing up for newsletters or following railway companies on social media can be a good way to stay informed about exclusive deals, promotions, and offers.', '2023-11-19 04:39:10'),
(5, 'Off-Peak Travel: Consider traveling during off-peak hours or days to take advantage of lower fares. Some railways offer discounted rates for travel during non-peak times.', '2023-11-19 04:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `feedback`) VALUES
(1, 'elonM', '\"The app\'s interface is clean and intuitive. I can easily navigate through different sections without any confusion.\"'),
(2, 'nadim11', 'Booking tickets is a breeze with this app. The step-by-step process is straightforward, and I can quickly choose my preferred seats.'),
(3, 'sis21', 'The apps ability to show real-time seat availability is a game-changer. No more guessing if I will get a window seat!'),
(4, 'billG', 'The apps ability to show real-time seat availability is a game-changer. No more guessing if I will get a window seat!'),
(5, 'willS', 'The loyalty program is a nice touch. I have earned points for my bookings, and it adds a little extra value to using the app.'),
(6, 'borisJ', 'Offline ticket access is a lifesaver, especially when there is no network connectivity in certain areas.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `phone`, `password`, `userType`, `gender`, `dob`) VALUES
(1, 'Abdul Jolil', 'kuddus@gmail.com', 'kuddus00', 1612345677, '123@', 'customer', 'Male', '2023-10-29'),
(3, 'Abdul Jobbar', 'jobbar@abc.com', 'jobbar00', 1612345679, '123@', 'customer', 'Male', '2023-11-05'),
(4, 'Rohim Mia', 'rohim@abc.com', 'rohim00', 1312345679, '123@', 'employee', 'Male', '2023-10-29'),
(5, 'Abdul Baki', 'abdul@gmail.com', 'abdul11', 1310345678, '123@', 'customer', 'Male', '2023-09-04'),
(6, 'Nadim Shamim', 'nadim@gmail.com', 'nadim01', 1412300678, '123@', 'customer', 'Male', '2023-08-27'),
(7, 'Bill Gates', 'bill.gates@microsoft.com', 'billG', 1502345678, '123@', 'customer', 'male', '1967-07-19'),
(8, 'Elon Musk', 'elon.musk@spacex.com', 'elonM', 1612045678, '123@', 'customer', 'male', '1967-07-19'),
(9, 'Will Smith', 'will.smith@gmail.com', 'willS', 1712305678, '123@', 'customer', 'male', '1967-07-19'),
(10, 'Bob Marley', 'bob@gmail.com', 'bobM', 1812305678, '123@', 'employee', 'male', '1967-07-19'),
(11, 'Cristiano Ronaldo', 'cristiano.ronaldo@gmail.com', 'ronaldoK', 1912345078, '123@', 'customer', 'male', '1967-07-19'),
(12, 'Boris Johnson', 'boris.johnson@gmail.com', 'borisJ', 1312305678, '123@', 'customer', 'male', '1967-07-19'),
(15, 'Sadiya Islam', 'sadia@abc.com', 'sis20', 1510111110, '123@', 'customer', 'Female', '2023-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
