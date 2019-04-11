-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 02:46 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iter`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `hostel_no` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `f_name`, `l_name`, `sex`, `hostel_no`, `password`, `c_password`, `mob_no`, `address`) VALUES
('102003000', 'kiran', 'kumar', 'male', 'BH-2', 'kiran@123', 'kiran@123', '0123456789', 'xyz,abc 012345');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `regd_no` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `receipt_no` varchar(15) NOT NULL,
  `amount_paid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`regd_no`, `name`, `receipt_no`, `amount_paid`) VALUES
('1651020031', 'kiran', '1231334', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `regd_no` varchar(10) NOT NULL,
  `date_of_join` date NOT NULL,
  `a_no` varchar(12) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `localg_name` varchar(30) NOT NULL,
  `hostel_no` varchar(5) NOT NULL,
  `room_no` varchar(5) NOT NULL,
  `bed_no` varchar(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `parent_no` varchar(10) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `local_no` varchar(10) NOT NULL,
  `t_address` varchar(50) NOT NULL,
  `p_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`regd_no`, `date_of_join`, `a_no`, `s_name`, `f_name`, `m_name`, `localg_name`, `hostel_no`, `room_no`, `bed_no`, `branch`, `sex`, `parent_no`, `p_email`, `mob_no`, `s_email`, `local_no`, `t_address`, `p_address`) VALUES
('1651020031', '2017-09-30', '6137486774', 'kiran', 'gggerg', 'fadq', 'njndjs', 'BH-2', '109', 'B-03', 'mca', 'male', '5365647', 'test1@gmail.com', '', 'test@gmail.com', '5252525', 'grgg', '	gergegr'),
('1651020032', '2017-10-01', '34141414', 'kiran', 'gggerg', 'grgrgg', 'abcdef', 'LH-1', '109', 'B-02', 'mca', 'female', '4314213131', 'gggerg@gmail.com', '4344324324', 'xyz@gmail.com', '0878078828', 'qrqrrqmlqmkvdmwv', 'svwvwkjvkwj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`regd_no`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`regd_no`),
  ADD UNIQUE KEY `regd_no` (`regd_no`),
  ADD UNIQUE KEY `a_no` (`a_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
