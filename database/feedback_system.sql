-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 05:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(5, 'DuyDanh', 'duydanh@gmail.com', 337136172, 'My name\'s Duy Danh', '2020-11-29 17:53:28'),
(6, 'Minh Khoi', 'minhkhoi@gmail.com', 123456789, 'My name\'s Khoi', '2020-11-29 17:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `specialized` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `position`, `specialized`, `semester`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(7, 'duydanh', 'Duy Danh', 'Chu nhiem khoa', 'Lap trinh web', 'ii', 'duydanh@gmail.com', 'duydanh', 337136172, '2020-11-21 14:30:53', 0),
(8, 'minhkhoi', 'Chau Hoang Minh Khoi', 'Pho Chu Nhiem Khoa', 'Lap trinh web', 'ii', 'minhkhoi@gmail.com', 'minhkhoi', 345667891, '2020-01-21 14:37:35', 0),
(11, 'quockhang', 'Nguyen The Quoc Khang', 'Giang Vien', 'Lap trinh web', 'i', 'quockhang@gmail.com', 'quockhang', 123456789, '2020-11-21 14:40:35', 0),
(12, 'test4337', 'test', 'test', 'ABC', 'i', 'test@gmail.com', '123', 123456789, '2020-11-26 08:01:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Question1` enum('5','4','3','2','1') NOT NULL,
  `Question2` enum('5','4','3','2','1') NOT NULL,
  `Question3` enum('5','4','3','2','1') NOT NULL,
  `Question4` enum('5','4','3','2','1') NOT NULL,
  `Question5` enum('5','4','3','2','1') NOT NULL,
  `Question6` enum('5','4','3','2','1') NOT NULL,
  `Question7` enum('5','4','3','2','1') NOT NULL,
  `Question8` enum('5','4','3','2','1') NOT NULL,
  `Question9` enum('5','4','3','2','1') NOT NULL,
  `Question10` enum('5','4','3','2','1') NOT NULL,
  `Question11` enum('5','4','3','2','1') NOT NULL,
  `Question12` enum('5','4','3','2','1') NOT NULL,
  `Question13` text NOT NULL,
  `Question14` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`, `Question6`, `Question7`, `Question8`, `Question9`, `Question10`, `Question11`, `Question12`, `Question13`, `Question14`, `date`) VALUES
(19, 'student1@gmail.com', 'duydanh@gmail.com', '5', '5', '4', '5', '5', '5', '4', '3', '3', '2', '5', '5', '\r\nabc', '\r\nabc', '2021-01-14'),
(20, 'student1@gmail.com', 'minhkhoi@gmail.com', '4', '4', '4', '5', '5', '3', '3', '2', '2', '5', '4', '5', '\r\n', '\r\n', '2021-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `specialized` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `specialized`, `semester`, `gender`, `hobbies`, `image`, `dob`, `regid`) VALUES
(15, 'Duy Danh', 'student1@gmail.com', '5e5545d38a68148a2d5bd5ec9a89e327', 337136172, 'BCA', 'ii', 'm', 'playing', '1.jpg', '1999-12-20', '2021-01-14 21:07:26'),
(16, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 337136172, 'Lap Trinh Web', 'i', 'm', 'reading', '1.jpg', '1990-02-02', '2021-01-26 21:13:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
