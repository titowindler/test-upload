-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2006 at 05:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `141classrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `teacher_fname` varchar(50) NOT NULL,
  `teacher_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_code`, `course_name`, `teacher_fname`, `teacher_lname`) VALUES
(4, 'ICT 146', 'Capstone Project', 'John', 'Doe'),
(5, 'ICT 135', 'Oral Communication 2', 'John', 'Doe'),
(6, 'ICT 146', 'Capstone Project', 'John', 'Doe');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `as_premid` int(11) NOT NULL,
  `ps_premid` int(11) NOT NULL,
  `premid` float(11,2) NOT NULL,
  `as_midterm` int(11) NOT NULL,
  `ps_midterm` int(11) NOT NULL,
  `midterm` float(11,2) NOT NULL,
  `as_prefinal` int(11) NOT NULL,
  `ps_prefinal` int(11) NOT NULL,
  `prefinal` float(11,2) NOT NULL,
  `as_final` int(11) NOT NULL,
  `ps_final` int(11) NOT NULL,
  `final` float(11,2) NOT NULL,
  `finalgrade` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `studentID`, `classID`, `as_premid`, `ps_premid`, `premid`, `as_midterm`, `ps_midterm`, `midterm`, `as_prefinal`, `ps_prefinal`, `prefinal`, `as_final`, `ps_final`, `final`, `finalgrade`) VALUES
(9, 4, 4, 30, 60, 3.37, 36, 60, 3.00, 40, 50, 2.00, 36, 60, 3.00, 2.87),
(10, 5, 4, 36, 60, 3.00, 0, 0, 0.00, 0, 0, 0.00, 0, 0, 0.00, 0.60);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_fname` varchar(50) NOT NULL,
  `student_lname` varchar(50) NOT NULL,
  `studentIdNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_fname`, `student_lname`, `studentIdNumber`) VALUES
(4, '123', '123', 123),
(5, '1231', '1231', 1231);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_email`, `user_fname`, `user_lname`, `user_contact`, `user_gender`, `user_type`, `user_status`) VALUES
(1, 'test', 'test', 'test@gmail.com', 'John', 'Doe', '09234567788', 'Male', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
