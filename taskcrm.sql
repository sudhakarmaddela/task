-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 10:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_email` varchar(1000) NOT NULL,
  `admin_password` varchar(500) NOT NULL,
  `admin_mobileno` varchar(10) NOT NULL,
  `admin_address` text NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobileno`, `admin_address`, `role_name`, `is_active`, `date_added`, `date_modified`) VALUES
(1, 'Sudhakar', 'sudhakar@gnhub.com', '1234', '2147483647', 'Surat', 'Admin', 1, '2021-03-16 14:30:54', '0000-00-00 00:00:00'),
(2, 'Rishi', 'rishi@gmail.com', '1234', '2147483647', 'surat', 'Admin', 1, '2021-03-16 15:34:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_age` varchar(255) NOT NULL,
  `emp_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `emp_age`, `emp_designation`) VALUES
(0, 'q', 'q', 'q'),
(0, 'q', 'q', 'q'),
(0, 'q', 'q', 'q'),
(0, 'dasda', 'adsdfsdfsdfs', 'sfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `person_message` varchar(255) NOT NULL,
  `person_age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(500) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `is_active`, `date_added`) VALUES
(1, 'Admin', 1, '2021-03-16 14:07:33'),
(2, 'Employee', 1, '2021-03-16 14:28:42'),
(3, 'Operator', 1, '2021-03-16 14:28:55'),
(4, 'Student', 1, '2021-03-16 14:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_mobileno` varchar(11) NOT NULL,
  `visitor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `visitor_name`, `visitor_mobileno`, `visitor_address`) VALUES
(77, 'sdad', 'asdas', 'dasdasd'),
(78, 'dsadas', 'dasd', 'asdsadad'),
(79, 'asdas', 'dasdas', 'dasdasdasd'),
(80, 'dasda', 'dasd', 'asdasdasdad'),
(81, 'asda', 'dada', 'dasdasda'),
(82, 'asd', 'asda', 'sdadad'),
(83, 'asddasd', 'asdasd', 'asdasdas'),
(84, 'asdasd', 'asdas', 'dasdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
