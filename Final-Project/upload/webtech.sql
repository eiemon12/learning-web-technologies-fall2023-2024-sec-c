-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 11:42 PM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `sl` int(20) NOT NULL,
  `abt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`sl`, `abt`) VALUES
(2, 'welcome to our bibah.com\r\ndevloped by\r\nx\r\ny\r\nz');

-- --------------------------------------------------------

--
-- Table structure for table `bloginfo`
--

CREATE TABLE `bloginfo` (
  `sl` int(255) NOT NULL,
  `blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloginfo`
--

INSERT INTO `bloginfo` (`sl`, `blog`) VALUES
(1, 'The Gottman Institute Blog: Offers research-based articles and advice on building and maintaining healthy relationships.'),
(2, 'Marriage.com Blog: Covers a variety of topics related to marriage and relationships, providing tips and advice for couples. '),
(3, 'Psychology Today - The Art of Relationships Blog: Features articles from various experts in the field of psychology, offering insights and advice on relationships.');

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

CREATE TABLE `eventinfo` (
  `sl` int(255) NOT NULL,
  `event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`sl`, `event`) VALUES
(1, 'Traditional Wedding Ceremony:\r\nChoose a venue that holds sentimental value or has a beautiful backdrop.\r\nInclude cultural or religious customs that are meaningful to you and your partner.'),
(2, 'Destination Wedding:\r\nPick a picturesque location, like a beach, mountains, or a historic city.\r\nPlan a weekend of festivities for your guests to enjoy.'),
(3, 'Themed Wedding:\r\nSelect a theme that reflects your interests or a shared passion.\r\nDecorate the venue, attire, and even the menu around the chosen theme.'),
(4, 'Intimate Elopement:\r\n\r\nConsider a private ceremony with just close family and friends.\r\nChoose a scenic location or a place that holds personal significance.'),
(5, 'Adventure Wedding:\r\n\r\nIf you and your partner love adventure, consider saying your vows during an activity like hiking, skydiving, or hot air ballooning.');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `username` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`username`, `rating`) VALUES
('10', 4),
('16', 5),
('4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `username` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `review`) VALUES
('16', 'Alhamdulillah. We are very greatful.'),
('4', 'I am grateful to PerfectMatch for bringing me in contact with my soulmate. Today, I am happily married, and I owe a significant part of my marital bliss to this exceptional matrimonial service. I highly recommend PerfectMatch to anyone seeking genuine con'),
('emon_iqbal', 'Comfortable working with them\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `username`, `role`, `gender`, `salary`) VALUES
(1, 'vival_', 'host', 'male', 40000),
(2, 'jerin_', 'host', 'femal', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `username`, `email`, `address`) VALUES
(1, 'John Ahmed', 'john@gmail.com', '33, Road-1, America'),
(2, 'Jarin Kahan', 'jerin@gmail.com', '22, Ausgtralia#11'),
(3, 'Ahmed Khan', 'ahmed@gmail.com', 'Bangladesh, banani.'),
(4, 'Jiren falak', 'jiren@gmail.com', 'India, Hidrabad');

-- --------------------------------------------------------

--
-- Table structure for table `successinfo`
--

CREATE TABLE `successinfo` (
  `sl` int(255) NOT NULL,
  `success` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `successinfo`
--

INSERT INTO `successinfo` (`sl`, `success`) VALUES
(1, 'Communication: Open and honest communication is crucial. Share your thoughts, feelings, and concerns with your partner, and actively listen to their perspective.'),
(2, 'Teamwork: Approach challenges as a team. A successful marriage involves both partners working together to overcome obstacles and achieve shared goals.');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `sl` int(20) NOT NULL,
  `term` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`sl`, `term`) VALUES
(4, '1.must be 18+'),
(5, '2.submit your legal information'),
(6, 'all rights to change by authorities');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `status`, `gender`, `image`, `phoneNumber`) VALUES
(1, 'tazdik', '12345', 'tazdik@gmail.com', 'admin', 'active', 'male', 'man3.jpg', 1111111111),
(2, 'ashik rahman', '67890', 'ashik@gmail.com', 'user', 'active', 'male', 'man2.jpg', 1222222221),
(3, 'abdullah sheik', '99999', 'abdullah@gmail.com', 'host', 'active', 'male', 'man3.jpg', 1333333333),
(4, 'emon_iqbal', '1112', 'emon@gmail.com', 'user', 'active', 'male', 'man4.jpeg', 1222222221),
(10, 'tanvir_', '11111#', 'tanvir@gmail.com', 'user', '', 'male', 'man3.jpg', 1111111111),
(12, 'julia Khatun', '66666@', 'julia@gmail.com', 'host', '', 'female', '', 1222222221),
(13, 'erika.', '10101010@', 'erika@gmail.com', 'user', '', 'female', '', 1789396016),
(14, 'eiemon', '1234@', 'eiemon@gmail.com', 'admin', 'active', 'male', 'man2.jpg', 1600000000),
(15, 'emon', '1234@', 'emon@gmail.com', 'host', 'active', 'male', 'man3.jpg', 1800000000),
(16, 'emonei', '1111111@', 'emonei@gmail.com', 'user', '', 'male', '', 1600000009);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `bloginfo`
--
ALTER TABLE `bloginfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `eventinfo`
--
ALTER TABLE `eventinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `successinfo`
--
ALTER TABLE `successinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloginfo`
--
ALTER TABLE `bloginfo`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `eventinfo`
--
ALTER TABLE `eventinfo`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `successinfo`
--
ALTER TABLE `successinfo`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
