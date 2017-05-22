-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 09:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coursework`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `Lecturer_id` char(7) NOT NULL,
  `Lecturer_name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Lecturer_surname` varchar(30) NOT NULL,
  `office` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`Lecturer_id`, `Lecturer_name`, `password`, `Lecturer_surname`, `office`) VALUES
('L123', 'Anne ', 'm234', 'Mul', ''),
('L234', 'Henry', 'm456', 'Dean', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `lecturer_id` varchar(7) NOT NULL,
  `student_id` varchar(7) NOT NULL,
  `request_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Session_id` int(3) NOT NULL,
  `Start_Time` varchar(20) NOT NULL,
  `End_Time` varchar(20) NOT NULL,
  `session_date` varchar(50) NOT NULL,
  `student_id` varchar(7) NOT NULL,
  `lec_id` varchar(7) NOT NULL,
  `task_to_do` varchar(500) NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Session_id`, `Start_Time`, `End_Time`, `session_date`, `student_id`, `lec_id`, `task_to_do`, `notes`) VALUES
(3, '14:15', '14:30', '2017-04-30', '2153', 'L123', 'ftjf', ''),
(4, '14:15', '14:30', '2017-04-30', '2153', 'L123', 'ftjf', ''),
(5, '15:15', '15:30', '2017-05-01', 'dfbdf', 'L123', 'svsfsf', ''),
(6, '16:00', '16:30', '2017-05-01', 's123', 'L123', 'dfbd', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` char(5) NOT NULL,
  `Student_Name` char(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Student_surname` varchar(30) NOT NULL,
  `Lecturer_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Student_Name`, `password`, `Student_surname`, `Lecturer_id`) VALUES
('s123', 'John', '1234J', 'Green', 'L123'),
('s234', 'Anne', '1234A', 'Brown', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`Lecturer_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Session_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `Session_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
