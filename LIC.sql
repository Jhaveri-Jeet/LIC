-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 07:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LIC`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotedplan`
--

CREATE TABLE `allotedplan` (
  `Id` int(11) NOT NULL,
  `PlanId` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `PPT` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` varchar(250) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotedplan`
--

INSERT INTO `allotedplan` (`Id`, `PlanId`, `ClientId`, `Term`, `PPT`, `StartDate`, `EndDate`, `Status`) VALUES
(1, 2, 22, 5, 5, '2023-09-26', '2023-09-26', 'Pending'),
(3, 1, 23, 15, 12, '2022-10-16', '2023-09-26', 'Pending'),
(4, 1, 21, 5, 5, '2023-09-26', '2023-09-26', 'Completed'),
(5, 1, 24, 3, 4, '2023-09-27', '2025-10-25', 'Pending'),
(8, 3, 27, 100, 15, '2023-09-29', '2023-09-29', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Mobile` varchar(500) NOT NULL,
  `State` varchar(500) NOT NULL,
  `City` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `BirthPlace` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `FatherName` varchar(500) NOT NULL,
  `MotherName` varchar(500) NOT NULL,
  `HusbandName` varchar(500) DEFAULT NULL,
  `WifeName` varchar(500) DEFAULT NULL,
  `MaritalStatus` varchar(500) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `OtherDocumentTitle` varchar(250) DEFAULT NULL,
  `Photo` varchar(2000) DEFAULT NULL,
  `AadharPhoto` varchar(2000) DEFAULT NULL,
  `PanPhoto` varchar(2000) DEFAULT NULL,
  `VaccineDose1Date` date DEFAULT NULL,
  `VaccineDose2Date` date DEFAULT NULL,
  `OtherDocumentPhoto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `Name`, `Address`, `Mobile`, `State`, `City`, `Gender`, `Nationality`, `BirthPlace`, `BirthDate`, `FatherName`, `MotherName`, `HusbandName`, `WifeName`, `MaritalStatus`, `Age`, `OtherDocumentTitle`, `Photo`, `AadharPhoto`, `PanPhoto`, `VaccineDose1Date`, `VaccineDose2Date`, `OtherDocumentPhoto`) VALUES
(21, 'test 4', 'test', '789', 'test', 'test', 'Male', 'Indian', 'test', '2023-09-22', 'test', 'test', 'test', 'test', 'Married', '5', 'test', '1695325679-68747470733a2f2f692e696d6775722e636f6d2f344153616679302e706e67.png', '1695325679-68747470733a2f2f692e696d6775722e636f6d2f344153616679302e706e67.png', '1695325679-68747470733a2f2f692e696d6775722e636f6d2f344153616679302e706e67.png', '2023-09-24', '2023-09-24', '1695325679-68747470733a2f2f692e696d6775722e636f6d2f344153616679302e706e67.png'),
(22, 'test 5', 'tset', '5', 'j', 'j', 'Male', 'Indian', 'j', '2023-09-22', 'k', 'k', 'k', 'k', 'Married', '5', 'k', '1695326011-VADGAMA JIGNESH N_4196.jpg', '1695326011-VADGAMA JIGNESH N_4196.jpg', '1695326011-VADGAMA JIGNESH N_4196.jpg', '2023-09-22', '2023-09-22', '1695326011-VADGAMA JIGNESH N_4196.jpg'),
(23, 'Testing client 1', 'this is the address', '9712791515', 'Gujarat', 'Jamnagar', 'Male', 'Indian', 'Jamnagar', '2003-10-06', 'father name', 'mother name ', '', '', 'Un-Married', '20', '', '1695673507-117 Jhaveri Jeet A..jpg', '1695673507-113 Faldu Harsh P  .jpg', '1695673507-74 Popat Priyanka D.jpg', '2023-09-26', '2023-09-26', '1695673507-73 Patel Ritu J.jpg'),
(24, 'ritu', 'patel colony', '1234567891', 'gujarat', 'jamnagar', 'Female', 'Indian', 'jamnagar', '2003-05-14', 'jiten', 'mira', 'nkjnfkj', 'fiuhiaa', 'Un-Married', '21', 'blablabla', '1695710341-IMG_0692.JPG', '1695710341-IMG_0685.JPG', '1695710341-IMG_0700.JPG', '2022-11-11', '2022-02-21', '1695710341-IMG_0691.JPG'),
(27, 'Vaja Gujariya', 'address', '9712791515', 'gujarati', 'jamnagar', 'Male', 'Indian', 'jamnagar', '2023-09-26', 'father name', 'mother name', 'husband name', 'wife name', 'Married', '45', '', '1695740803-2.PNG', '1695740803-1.PNG', '1695740803-Area Example.JPG', '2023-09-26', '2023-09-26', '1695740803-1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Relation` varchar(250) NOT NULL,
  `RateOfInterest` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`Id`, `Name`, `Relation`, `RateOfInterest`, `Age`, `ClientId`) VALUES
(1, 'Ramesh Gujariya', 'Father', 100, 50, 27),
(2, 'testing 2', 'Sister', 2, 25, 22),
(3, 'Faldu Harsh', 'Brother', 10, 20, 23),
(4, 'Krisha Vora', 'Sister', 20, 20, 23),
(5, 'vatsa', 'sister', 5, 12, 24);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Id` int(11) NOT NULL,
  `PlanNo` int(11) NOT NULL,
  `PlanName` varchar(200) NOT NULL,
  `PlanDescription` varchar(1000) NOT NULL,
  `PlanPeriod` int(200) NOT NULL,
  `PremiumPeriod` int(200) NOT NULL,
  `PremiumAmount` int(200) NOT NULL,
  `SumAssured` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Id`, `PlanNo`, `PlanName`, `PlanDescription`, `PlanPeriod`, `PremiumPeriod`, `PremiumAmount`, `SumAssured`) VALUES
(1, 1, 'Plan 1', 'This is the description of this plan', 1, 1, 2000, 2000),
(2, 2, 'Plan 2', 'This is the description of plan 2', 3, 1, 3000, 300),
(3, 945, 'jeevan umang', 'test', 15, 1, 16000, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`) VALUES
(1, 'Khushal Rajani', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotedplan`
--
ALTER TABLE `allotedplan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FkClientIdInAllotedplan` (`ClientId`),
  ADD KEY `FkPlanIdInAllotedplan` (`PlanId`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ClientId` (`ClientId`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allotedplan`
--
ALTER TABLE `allotedplan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allotedplan`
--
ALTER TABLE `allotedplan`
  ADD CONSTRAINT `FkClientIdInAllotedplan` FOREIGN KEY (`ClientId`) REFERENCES `client` (`Id`),
  ADD CONSTRAINT `FkPlanIdInAllotedplan` FOREIGN KEY (`PlanId`) REFERENCES `plan` (`Id`);

--
-- Constraints for table `nominee`
--
ALTER TABLE `nominee`
  ADD CONSTRAINT `nominee_ibfk_1` FOREIGN KEY (`ClientId`) REFERENCES `client` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
