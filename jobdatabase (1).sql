-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 05:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `AdminName` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`AdminName`, `Password`, `email`) VALUES
('admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidatedetails`
--

CREATE TABLE `candidatedetails` (
  `JobID` int(3) NOT NULL,
  `id` int(5) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(45) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidatedetails`
--

INSERT INTO `candidatedetails` (`JobID`, `id`, `FullName`, `email`, `address`, `ContactNo`, `dateofbirth`, `file`) VALUES
(6, 3, 'sham', 'sham@gmail.com', 'nashik  \r\n                        ', 2147483647, '2022-08-02', 'itr report.pdf'),
(0, 32, 'jack45', 'jack@gmail.com', 'mumbai  \r\n                        ', 2147483647, '2023-07-05', 'TY-EE-SEM-V-MAN-22509.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `JobID` int(5) NOT NULL,
  `CompanyName` varchar(25) NOT NULL,
  `jobtitle` varchar(20) NOT NULL,
  `JobDesc` varchar(500) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Experience` varchar(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Jobtype` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `deadlinedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`JobID`, `CompanyName`, `jobtitle`, `JobDesc`, `email`, `Experience`, `Address`, `Jobtype`, `salary`, `gender`, `Qualification`, `deadlinedate`) VALUES
(1, 'WIPRO', 'Java Developer', '1.Degree in Computer Science or related field.2.Analytical mindset and good problem-solving skills.', 'wipro@gmail.com', '2 years', 'Hinjewadi,Pune,Maharashtra', 'Part Time', 'INR 450000', 'Both', 'B.E', '2022-08-07'),
(2, 'Cummins Inc.', 'IT Manager', 'Good in coding.\r\nGood communication skills.', 'cummins@gmail.com', '2-3 years', 'Mumbai,Maharshtra             ', 'Full Time', 'INR 3,00,000', 'Both', 'B.E/B.TECH', '2022-08-31'),
(3, 'Amazon', 'IT Support Associate', 'Good Communication Skills\r\n              ', 'amazon@gmail.com', 'Freshers-1 year', 'Pune,Maharashtra              ', 'Part Time', 'INR 2,00,000', 'Both', 'B.E', '2022-09-08'),
(4, 'L&T', 'Software Engineer', '1.Ability to develop software in Java, Ruby on Rails, C++ or other programming languages.       2.Excellent knowledge of relational databases, SQL and ORM technologies (JPA2, Hibernate)', 'lnt@gamil.com', '3 Years ', 'Hinjawadi,Pune,Maharashtra', 'Part Time', 'INR 500000', 'Both', 'B.E/B.TECH', '2022-09-11'),
(5, 'Tech Mahindra', 'Sr.Software Engineer', '3+ years experience in design and developmant in .NET frameworks', 'techmahindra@gmail.com', '3-4 years', 'MUMBAI,PUNE, HYDRABAD    ', 'Full Time', 'INR 4,00,0', 'Both', 'B.E', '2022-09-11'),
(6, 'TCS', 'SoftwareTester', '1.Knowledge of programming.                                  2.Excellent communication and critical thinking skills.', 'tcs@gmail.com', '2 years', 'london          ', 'Full Time', 'INR400000', 'Both', 'Mcs', '2022-08-05'),
(7, 'TATA', 'Developer', '1.knowledge of coding\r\n\r\n', 'tata@gmail.com', '1-2 years', 'Pune,Maharashtra', 'Full time', 'INR 450000', 'Both', 'B.E', '2012-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FullName` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phoneno` bigint(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatedetails`
--
ALTER TABLE `candidatedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatedetails`
--
ALTER TABLE `candidatedetails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `JobID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
