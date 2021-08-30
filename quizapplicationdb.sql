-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 08:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizapplicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `mcqid` int(11) NOT NULL,
  `statement` varchar(500) NOT NULL,
  `answer1` varchar(256) NOT NULL,
  `answer2` varchar(256) NOT NULL,
  `answer3` varchar(256) NOT NULL,
  `answer4` varchar(256) NOT NULL,
  `correctanswer` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`mcqid`, `statement`, `answer1`, `answer2`, `answer3`, `answer4`, `correctanswer`) VALUES
(18, '2+3=', '1', '4', '7', '5', 4),
(19, '25/5', '5', '1', '3', '2', 1),
(20, '2*3', '6', '1', '2', '5', 1),
(21, '9+8', '1', '17', '4', '3', 2),
(22, 'wsedfghj', '1', 'fgh', 'rfgh', '2', 4),
(23, 'wsedfghj', '1', 'fgh', 'rfgh', '2', 4),
(24, 'wsedfghj', '1', 'fgh', 'rfgh', '2', 4),
(25, '2-4', '-2', '17', '7', '2', 1),
(26, '3*3', '1', '17', '9', '2', 3),
(27, '2/2', '1', '17', '9', '2', 1),
(28, '9+3', '12', '11', '7', '5', 1),
(29, '9+3', '12', '11', '7', '5', 1),
(30, '10+10', '20', '17', '9', '5', 1),
(31, '100-10', '1', '17', '90', '2', 3),
(32, '5+5', '10', '4', '6', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `marks_obtained` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `date`, `marks_obtained`, `mobile_no`) VALUES
(10, '2021-08-03 06:32:05', 7, '8595319147'),
(11, '2021-08-03 06:32:47', 6, '8595319147'),
(12, '2021-08-03 06:39:01', 5, '8595319147'),
(13, '2021-08-03 06:39:05', 5, '8595319147'),
(14, '2021-08-03 07:02:58', 7, '1234567890'),
(15, '2021-08-03 07:04:55', 2, '1234567890'),
(16, '2021-08-03 07:05:31', 5, '1234567890'),
(17, '2021-08-03 07:09:56', 5, '1234567890'),
(18, '2021-08-03 07:13:28', 7, '1234567890'),
(19, '2021-08-03 07:19:10', 5, '1234678901'),
(20, '2021-08-03 07:20:40', 7, '1234678901'),
(21, '2021-08-04 01:14:11', 8, '6204458081'),
(22, '2021-08-04 01:22:33', 7, '9716849162'),
(23, '2021-08-04 01:23:28', 7, '9716849162'),
(24, '2021-08-04 01:24:10', 4, '9716849162'),
(25, '2021-08-06 11:33:47', 8, '1234567895');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mobile_no` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mobile_no`, `password`, `full_name`, `email`, `role`) VALUES
('1234567890', '123456', 'Dhiraj', 'dhiraj@gmail.com', 'user'),
('1234567895', '123456', 'sdfghh', 'sdfghj@gmail.com', 'user'),
('1234678901', '123456', 'don', 'don@gmail.com', 'user'),
('6204458081', '123456', 'kumar', 'kumar@gmail.com', 'user'),
('8595319147', '123456', 'Akhilesh', 'Akhilesh@gmail.com', 'user'),
('9716849162', '123456', 'Kumar Gaurav', 'kumar.g7@tcs.com', 'user'),
('9801945921', '123456', 'admin', 'abc@gmail.comm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`mcqid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`),
  ADD KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `mcqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`mobile_no`) REFERENCES `users` (`mobile_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
