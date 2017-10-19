-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 05:45 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `Batchtime` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`Sl`, `BatchNo`, `BatchCatagory`, `Batchtime`) VALUES
(1, '1320', 'Graphics Design', '3.00-4.00'),
(2, '1320', 'Software Developer', '4.30-5.30'),
(3, '1320', 'Programming', '11.00-12.0'),
(4, '1330', 'Graphics Design', '3.00-4.00'),
(5, '1330', 'Software Developer', '11.00-12.0');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
`UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `empcheckin`
--

INSERT INTO `empcheckin` (`SL`, `EmpID`, `EmpName`, `Date`, `EntryTime`, `EntryStatus`) VALUES
(8, 13203020, 'Ahasan', '30-Nov-2015', '11:35:07 AM', 'Not Fixed Yet');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `empcheckout`
--

INSERT INTO `empcheckout` (`SL`, `EmpID`, `EmpName`, `Date`, `ExitTime`, `ExitStatus`) VALUES
(5, '13203020', 'Ahasan', '30-Nov-2015', '11:36:40 AM', 'Not Fixed Yet');

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
(13203020, 'Ahasan Habib', 'sfdgzxcvzxdcvzxv', '2015-11-11', 'Male', 'Bangladeshi', 'AB-', 1749661200, 'bishal00772@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE IF NOT EXISTS `hr` (
`UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`UserID`, `UserName`, `Password`, `Type`) VALUES
(1, 'hr01', 'hr01', 'HR'),
(2, 'hr02', 'hr02', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplication`
--

CREATE TABLE IF NOT EXISTS `leaveapplication` (
`SL` int(10) NOT NULL,
  `EmpID` varchar(20) NOT NULL,
  `EmpName` varchar(100) NOT NULL,
  `LeaveType` varchar(100) NOT NULL,
  `StartDate` varchar(50) NOT NULL,
  `EndDate` varchar(50) NOT NULL,
  `NoDays` int(20) NOT NULL,
  `Purpose` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StuID` int(10) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `BatchNO` varchar(20) NOT NULL,
  `BatchCatagory` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `StuMobileNo` varchar(30) NOT NULL,
  `StuEmail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
 ADD PRIMARY KEY (`SL`);

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
MODIFY `Sl` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `empcheckin`
--
ALTER TABLE `empcheckin`
MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `empcheckout`
--
ALTER TABLE `empcheckout`
MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
