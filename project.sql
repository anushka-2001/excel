-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'College Announcements', 'Important college announcements and related doubts will be a part of this category.'),
(2, 'College Events', 'Important college events and related doubts will be a part of this category.'),
(3, 'Fees Department', 'Doubts related to Fees Department/Fee reciept or appointment booking can be a part of this category.'),
(4, 'Teaching/non-teaching Staff', 'Doubts related to college lectures, tests, academic doubts or appointment booking can be a part of this category.'),
(6, 'Student Achievements', 'Achievements by students will be posted here along with an open doubt forum for anybody to ask questions on'),
(7, 'Other', 'Any Other Category...');

-- --------------------------------------------------------

--
-- Table structure for table `quacat`
--

CREATE TABLE `quacat` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quacat`
--

INSERT INTO `quacat` (`id`, `category`) VALUES
(1, 'College Announcements'),
(2, 'College Announcements'),
(3, 'College Announcements'),
(4, 'College Events'),
(5, 'College Events'),
(43, 'College Events'),
(46, 'College Events'),
(13, 'Examination Department'),
(14, 'Examination Department'),
(28, 'Fees Department'),
(41, 'Fees Department'),
(29, 'Other'),
(30, 'Other'),
(39, 'Other'),
(15, 'Student Achievements'),
(16, 'Student Achievements'),
(17, 'Student Achievements'),
(18, 'Student Achievements'),
(19, 'Student Achievements'),
(20, 'Student Achievements'),
(21, 'Student Achievements'),
(22, 'Student Achievements'),
(23, 'Student Achievements'),
(24, 'Student Achievements'),
(25, 'Student Achievements'),
(26, 'Student Achievements'),
(27, 'Student Achievements'),
(32, 'Student Achievements'),
(6, 'Teaching/non-teaching Staff'),
(7, 'Teaching/non-teaching Staff'),
(8, 'Teaching/non-teaching Staff'),
(9, 'Teaching/non-teaching Staff'),
(10, 'Teaching/non-teaching Staff'),
(11, 'Teaching/non-teaching Staff'),
(12, 'Teaching/non-teaching Staff'),
(33, 'Teaching/non-teaching Staff'),
(44, 'Teaching/non-teaching Staff');

-- --------------------------------------------------------

--
-- Table structure for table `quans`
--

CREATE TABLE `quans` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` longtext DEFAULT NULL,
  `askedby` varchar(255) NOT NULL,
  `answeredby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quans`
--

INSERT INTO `quans` (`id`, `question`, `answer`, `askedby`, `answeredby`) VALUES
(1, 'College has received NAAC acredation', 'Great<br>or<br>hut', 'SusmithKumar', 'admin, @ '),
(2, 'Do you have a mentor?', 'Yes, we do have mentors', 'Nalinee', 'admin'),
(3, 'How many days of event is it?', 'We are doing 5 days event', 'Pranitha', 'admin'),
(4, 'Number of Students Participating?', 'Total number of participants are 100<br>or<br>hi<br>or<br>hello', 'Sreenadh', 'admin, @ , @ Aryan123'),
(5, 'What would make this event successful and how do you measure that success?', 'Our meterics for deciding the success of this event is number of people participating and the footfall, we would be measuring it on the same basis', 'Brahmendra', 'admin'),
(6, 'Are there any influential guest coming for this event?', 'Yes, we have many influential people coming for the event, all of them are experts in thier field<br>or<br>ffffsdv', 'Brahmendra', 'admin, @ Trollpolice'),
(40, 'what are the office hours?', NULL, 'Trollpolice', NULL),
(41, 'hey', 'Hi, how much is the fees for this year?', 'Trollpolice', 'Ansuka'),
(42, 'hi', NULL, 'Trollpolice', NULL),
(43, 'hii', NULL, 'Trollpolice', NULL),
(44, 'heyyy', 'Hi, how much is the fees for this year?', 'Trollpolice', 'Ansuka'),
(45, 'csd', NULL, 'Trollpolice', NULL),
(46, 'hello', NULL, 'Aryan123', NULL),
(47, 'How is this college?', NULL, 'Ansuka', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `uniqueID` varchar(15) DEFAULT NULL,
  `rtime` varchar(255) NOT NULL,
  `rdate` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `isVaccinated` varchar(255) NOT NULL,
  `generatedON` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `join_date`) VALUES
(17, 'admin', 'admin', 'admin123', 'admin@gmail.com', '2021-11-11 18:59:57'),
(21, 'Ansuka', '$2y$10$icSykFMlradjWQusbOP7f.BUGCRAjj97TMZ3gExKjealktTCohkWi', 'Ansuka Mehrotra', 'ansukabhagh@gmail.com', '2021-11-28 12:27:52'),
(9, 'Anushka', 'Anushka123', 'Anushka Bhagchandani', 'Anushka2001feb@gmail.com', '2021-11-11 16:34:59'),
(13, 'Aryan', 'Aryan123', 'Aryan', 'Anushka@gmail.com', '2021-11-10 17:09:07'),
(20, 'Aryan123', '$2y$10$iLVQ8CficAGNEJXtg2qsOe.FaT/aqi.y8mBhMS/YZ1BQFuPasj0FK', 'Aryannayak', 'aryu@gmail.com', '2021-11-28 11:29:10'),
(19, 'Trollpolice', '$2y$10$jAMsFZl.pP3dGyHmlgL1Hu1vNNdcazNo.IO6VilG8SR7gGYTfaMuK', 'frf', 'ea@b.vun', '2021-11-28 00:32:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `quacat`
--
ALTER TABLE `quacat`
  ADD PRIMARY KEY (`category`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `quans`
--
ALTER TABLE `quans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `askedby` (`askedby`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `uniqueID` (`uniqueID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
