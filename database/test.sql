-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2015 at 03:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `UserName`, `Password`, `Type`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
`Sl` int(10) NOT NULL,
  `BatchNo` varchar(50) NOT NULL,
  `BatchCatagory` varchar(100) NOT NULL,
  `Batchtime` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`Sl`, `BatchNo`, `BatchCatagory`, `Batchtime`) VALUES
(9, '1320', 'c#', '3.40 -5.20'),
(10, '1320', 'c+', '3.00 - 4.00'),
(11, '132010', 'Web Developer & Design', '4.00 - 5.00'),
(12, '132010', 'Graphics Design', '3.40 -5.20');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
`UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`UserID`, `UserName`, `Password`, `Type`) VALUES
(1, 'bishal', 'bishal', 'Employee'),
(2, 'sami', 'sami', 'Employee'),
(3, 'swarna', 'swarna', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `empcheckin`
--

CREATE TABLE IF NOT EXISTS `empcheckin` (
`SL` int(10) NOT NULL,
  `EmpID` int(50) NOT NULL,
  `EmpName` varchar(200) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `EntryTime` varchar(100) NOT NULL,
  `EntryStatus` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empcheckin`
--

INSERT INTO `empcheckin` (`SL`, `EmpID`, `EmpName`, `Date`, `EntryTime`, `EntryStatus`) VALUES
(13, 1, 'Ahasan', '21-Dec-2015', '11:24:41 AM', 'In Time'),
(14, 2, 'Al-Amin', '21-Dec-2015', '11:25:02 AM', 'Late Arrival'),
(15, 3, 'Farjana', '21-Dec-2015', '11:25:44 AM', 'In Time'),
(16, 4, 'Moinul', '21-Dec-2015', '11:26:41 AM', 'Late Arrival');

-- --------------------------------------------------------

--
-- Table structure for table `empcheckout`
--

CREATE TABLE IF NOT EXISTS `empcheckout` (
`SL` int(10) NOT NULL,
  `EmpID` varchar(50) NOT NULL,
  `EmpName` varchar(200) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `ExitTime` varchar(100) NOT NULL,
  `ExitStatus` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empcheckout`
--

INSERT INTO `empcheckout` (`SL`, `EmpID`, `EmpName`, `Date`, `ExitTime`, `ExitStatus`) VALUES
(7, '1', 'Ahasan', '21-Dec-2015', '11:24:51 AM', 'Accurate Leave'),
(8, '2', 'Al-Amin', '21-Dec-2015', '11:25:13 AM', 'Early Leave'),
(9, '3', 'Farjana', '21-Dec-2015', '11:25:58 AM', 'Early Leave'),
(10, '4', 'Moinul', '21-Dec-2015', '11:26:49 AM', 'Accurate Leave');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmpID` int(10) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `BirthDate` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `ContactNo` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmployeeName`, `Address`, `BirthDate`, `Gender`, `Nationality`, `BloodGroup`, `ContactNo`, `Email`) VALUES
(1, 'Ahasan Habib', 'Dhaka', '1994-04-11', 'Male', 'Bangladeshi', 'AB+', 1749661200, 'bishal00772@gmail.com'),
(2, 'Al-Amin', 'Gazipur, Dhaka', '1992-06-16', 'Male', 'Bangladeshi', 'AB+', 1834654565, 'alamin00@gmail.com'),
(3, 'Farjana Karim Swarna', 'B.Baria', '1993-12-06', 'Female', 'Bangladeshi', 'A-', 1834654142, 'farjanaswarna@yahoo.com'),
(4, 'Moinul Hasan', 'Comilla', '1987-06-07', 'Male', 'Bangladeshi', 'B-', 1949656456, 'moinul.001@engineer.com');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE IF NOT EXISTS `hr` (
`UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`UserID`, `UserName`, `Password`, `Type`) VALUES
(1, 'hr01', 'hr01', 'HR'),
(2, 'hr02', 'hr02', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StuID` varchar(20) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `BatchNO` varchar(20) NOT NULL,
  `BatchCatagory` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `StuMobileNo` varchar(30) NOT NULL,
  `StuEmail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StuID`, `StudentName`, `BatchNO`, `BatchCatagory`, `Time`, `StuMobileNo`, `StuEmail`) VALUES
('15-3001', 'Tamim Iqbal', '15-30', 'Web Design And Developer', '3.00 - 4.00', '01792452455', 'tamim001@cricketer.com'),
('15-3002', 'Sakib-Al-Hasan', '15-30', 'Graphics Design', '4.00 - 5.00', '01892452545', 'sakibu002@alrounder.com'),
('15-3003', 'Masrafi Bin Mortuza', '15-30', 'Web Design And Developer', '3.00 - 4.00', '018924525545', 'masrafi007@boller.com'),
('15-3004', 'Musfiqur Rahim', '15-30', 'Web Design And Developer', '3.00 - 4.00', '01792452455', 'musfiqur.kepper@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
 ADD PRIMARY KEY (`Sl`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
 ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `empcheckin`
--
ALTER TABLE `empcheckin`
 ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `empcheckout`
--
ALTER TABLE `empcheckout`
 ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
 ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`StuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
MODIFY `Sl` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `empcheckin`
--
ALTER TABLE `empcheckin`
MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `empcheckout`
--
ALTER TABLE `empcheckout`
MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
