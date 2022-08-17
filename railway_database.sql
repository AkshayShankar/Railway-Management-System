-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 04:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Aadhaar number` varchar(14) NOT NULL,
  `Passenger name` varchar(50) NOT NULL,
  `Date of Birth` date DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Mobile number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger address`
--

CREATE TABLE `passenger address` (
  `Passenger Aadhaar Number` varchar(14) NOT NULL,
  `Address` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passes through`
--

CREATE TABLE `passes through` (
  `PT_Train ID` varchar(10) NOT NULL,
  `PT_Station code` varchar(10) NOT NULL,
  `Order of the station` int(3) NOT NULL,
  `Arrival time` datetime(6) DEFAULT NULL,
  `Departure time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passes through`
--

INSERT INTO `passes through` (`PT_Train ID`, `PT_Station code`, `Order of the station`, `Arrival time`, `Departure time`) VALUES
('4031', 'BGK', 4, NULL, NULL),
('4031', 'BIDR', 1, NULL, NULL),
('4031', 'BJP', 3, NULL, NULL),
('4031', 'DWD', 5, NULL, NULL),
('4031', 'HVR', 6, NULL, NULL),
('4031', 'KLBG', 2, NULL, NULL),
('4031', 'SMET', 7, NULL, NULL),
('4031', 'UD', 8, NULL, NULL),
('4031R', 'BGK', 5, NULL, NULL),
('4031R', 'BIDR', 8, NULL, NULL),
('4031R', 'BJP', 6, NULL, NULL),
('4031R', 'DWD', 4, NULL, NULL),
('4031R', 'HVR', 3, NULL, NULL),
('4031R', 'KLBG', 7, NULL, NULL),
('4031R', 'SMET', 2, NULL, NULL),
('4031R', 'UD', 1, NULL, NULL),
('4031RSF', 'BIDR', 4, NULL, NULL),
('4031RSF', 'DWD', 3, NULL, NULL),
('4031RSF', 'SMET', 2, NULL, NULL),
('4031RSF', 'UD', 1, NULL, NULL),
('4031SF', 'BIDR', 1, NULL, NULL),
('4031SF', 'DWD', 2, NULL, NULL),
('4031SF', 'SMET', 3, NULL, NULL),
('4031SF', 'UD', 4, NULL, NULL),
('4032', 'BAY', 3, NULL, NULL),
('4032', 'BJP', 1, NULL, NULL),
('4032', 'CMGR', 5, NULL, NULL),
('4032', 'DVG', 4, NULL, NULL),
('4032', 'HAS', 6, NULL, NULL),
('4032', 'KBL', 2, NULL, NULL),
('4032', 'MYS', 7, NULL, NULL),
('4032R', 'BAY', 5, NULL, NULL),
('4032R', 'BJP', 7, NULL, NULL),
('4032R', 'CMGR', 3, NULL, NULL),
('4032R', 'DVG', 4, NULL, NULL),
('4032R', 'HAS', 2, NULL, NULL),
('4032R', 'KBL', 6, NULL, NULL),
('4032R', 'MYS', 1, NULL, NULL),
('4032RSF', 'BAY', 3, NULL, NULL),
('4032RSF', 'BJP', 4, NULL, NULL),
('4032RSF', 'CMGR', 2, NULL, NULL),
('4032RSF', 'MYS', 1, NULL, NULL),
('4032SF', 'BAY', 2, NULL, NULL),
('4032SF', 'BJP', 1, NULL, NULL),
('4032SF', 'CMGR', 3, NULL, NULL),
('4032SF', 'MYS', 4, NULL, NULL),
('4033', 'BGK', 1, NULL, NULL),
('4033', 'BGM', 2, NULL, NULL),
('4033', 'CTA', 5, NULL, NULL),
('4033', 'DVG', 4, NULL, NULL),
('4033', 'GDG', 3, NULL, NULL),
('4033', 'KGI', 7, NULL, NULL),
('4033', 'KLR', 8, NULL, NULL),
('4033', 'TK', 6, NULL, NULL),
('4033R', 'BGK', 8, NULL, NULL),
('4033R', 'BGM', 7, NULL, NULL),
('4033R', 'CTA', 4, NULL, NULL),
('4033R', 'DVG', 5, NULL, NULL),
('4033R', 'GDG', 6, NULL, NULL),
('4033R', 'KGI', 2, NULL, NULL),
('4033R', 'KLR', 1, NULL, NULL),
('4033R', 'TK', 3, NULL, NULL),
('4033RSF', 'BGM', 4, NULL, NULL),
('4033RSF', 'DVG', 3, NULL, NULL),
('4033RSF', 'KGI', 1, NULL, NULL),
('4033RSF', 'TK', 2, NULL, NULL),
('4033SF', 'BGM', 1, NULL, NULL),
('4033SF', 'DVG', 2, NULL, NULL),
('4033SF', 'KGI', 4, NULL, NULL),
('4033SF', 'TK', 3, NULL, NULL),
('4034', 'DKND', 2, NULL, NULL),
('4034', 'KAG', 3, NULL, NULL),
('4034', 'KGI', 8, NULL, NULL),
('4034', 'MYA', 5, NULL, NULL),
('4034', 'MYS', 4, NULL, NULL),
('4034', 'RMGM', 6, NULL, NULL),
('4034', 'SBC', 7, NULL, NULL),
('4034', 'UD', 1, NULL, NULL),
('4034R', 'DKND', 7, NULL, NULL),
('4034R', 'KAG', 6, NULL, NULL),
('4034R', 'KGI', 1, NULL, NULL),
('4034R', 'MYA', 4, NULL, NULL),
('4034R', 'MYS', 5, NULL, NULL),
('4034R', 'RMGM', 3, NULL, NULL),
('4034R', 'SBC', 2, NULL, NULL),
('4034R', 'UD', 8, NULL, NULL),
('4034RSF', 'MYS', 2, NULL, NULL),
('4034RSF', 'SBC', 1, NULL, NULL),
('4034RSF', 'UD', 3, NULL, NULL),
('4034SF', 'MYS', 2, NULL, NULL),
('4034SF', 'SBC', 3, NULL, NULL),
('4034SF', 'UD', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Station code` varchar(10) NOT NULL,
  `Station name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station code`, `Station name`, `Place`) VALUES
('BAY', 'Ballari Junction', 'Bellary'),
('BGK', 'Bagalkot', 'Bagalk'),
('BGM', 'Belagavi', 'Belgaum'),
('BIDR', 'Bidar', 'Bidar'),
('BJP', 'Vijayapura', 'Bijapur'),
('CMGR', 'Chikkamagalur', 'Chikkamagalur'),
('CTA', 'Chitradurga', 'Chitradurga'),
('DKND', 'Dakshin Kannada', 'Dakshin Kannada'),
('DVG', 'Davangere', 'Davangere'),
('DWD', 'Dharwad', 'Dharwad'),
('GDG', 'Gadag Junction', 'Gadag'),
('HAS', 'Hassan Junction', 'Hassan'),
('HVR', 'Haveri', 'Haveri'),
('KAG', 'Kodaganur', 'Kodagur'),
('KBL', 'Koppal', 'Koppal'),
('KGI', 'Kengeri', 'Banglore Rural'),
('KLBG', 'Kalaburagi Junction', 'Gulbarga'),
('KLR', 'Kolar', 'Kolar'),
('MYA', 'Mandya', 'Mandya'),
('MYS', 'Mysuru City Junction', 'Mysore'),
('RMGM', 'Ramanagaram', 'Ramanagara'),
('SBC', 'KSR Bengaluru City Junction', 'Bangalore'),
('SMET', 'Shivamogga Town', 'Shimoga'),
('TK', 'Tumakuru', 'Tumkur'),
('UD', 'Udupi', 'Udupi');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket ID` int(10) NOT NULL,
  `Ticket Aadhaar number` varchar(14) DEFAULT NULL,
  `Ticket Train ID` varchar(10) DEFAULT NULL,
  `Source location` varchar(20) DEFAULT NULL,
  `Destination location` varchar(20) DEFAULT NULL,
  `Class` varchar(20) DEFAULT NULL,
  `Date of journey` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `Train ID` varchar(10) NOT NULL,
  `Source` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Number of FC seats booked` int(7) NOT NULL DEFAULT 0,
  `Number of FC seats available` int(7) NOT NULL,
  `Number of SC seats booked` int(7) NOT NULL DEFAULT 0,
  `Number of SC seats available` int(7) NOT NULL,
  `Number of TC seats booked` int(7) NOT NULL DEFAULT 0,
  `Number of TC seats available` int(7) NOT NULL,
  `Base Price` int(7) NOT NULL,
  `Travel cost` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Train ID`, `Source`, `Destination`, `Number of FC seats booked`, `Number of FC seats available`, `Number of SC seats booked`, `Number of SC seats available`, `Number of TC seats booked`, `Number of TC seats available`, `Base Price`, `Travel cost`) VALUES
('4031', 'Bidar', 'Udupi', 0, 0, 0, 0, 0, 0, 265, 75),
('4031R', 'Udupi', 'Bidar', 0, 0, 0, 0, 0, 0, 265, 75),
('4031RSF', 'Udupi', 'Bidar', 0, 0, 0, 0, 0, 0, 500, 250),
('4031SF', 'Bidar', 'Udupi', 0, 0, 0, 0, 0, 0, 500, 250),
('4032', 'Bijapur', 'Mysore', 0, 0, 0, 0, 0, 0, 235, 75),
('4032R', 'Mysore', 'Bijapur', 0, 0, 0, 0, 0, 0, 235, 75),
('4032RSF', 'Mysore', 'Bijapur', 0, 0, 0, 0, 0, 0, 500, 250),
('4032SF', 'Bijapur', 'Mysore', 0, 0, 0, 0, 0, 0, 500, 250),
('4033', 'Bagalk', 'Kolar', 0, 0, 0, 0, 0, 0, 275, 75),
('4033R', 'Kolar', 'Bagalk', 0, 0, 0, 0, 0, 0, 275, 75),
('4033RSF', 'Banglore Rural', 'Belgaum', 0, 0, 0, 0, 0, 0, 500, 250),
('4033SF', 'Belgaum', 'Banglore Rural', 0, 0, 0, 0, 0, 0, 500, 250),
('4034', 'Udupi', 'Bangalore Rural', 0, 0, 0, 0, 0, 0, 250, 75),
('4034R', 'Bangalore Rural', 'Udupi', 0, 20, 0, 30, 0, 40, 250, 75),
('4034RSF', 'Bangalore', 'Udupi', 0, 50, 0, 60, 0, 70, 500, 250),
('4034SF', 'Udupi', 'Bangalore', 0, 0, 0, 0, 0, 0, 500, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Aadhaar number`),
  ADD UNIQUE KEY `Mobile number` (`Mobile number`);

--
-- Indexes for table `passenger address`
--
ALTER TABLE `passenger address`
  ADD PRIMARY KEY (`Passenger Aadhaar Number`,`Address`);

--
-- Indexes for table `passes through`
--
ALTER TABLE `passes through`
  ADD PRIMARY KEY (`PT_Train ID`,`PT_Station code`,`Order of the station`),
  ADD KEY `PT_Station code` (`PT_Station code`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`Station code`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket ID`),
  ADD KEY `Ticket Aadhaar number` (`Ticket Aadhaar number`),
  ADD KEY `Ticket Train ID` (`Ticket Train ID`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Train ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger address`
--
ALTER TABLE `passenger address`
  ADD CONSTRAINT `passenger address_ibfk_1` FOREIGN KEY (`Passenger Aadhaar Number`) REFERENCES `passenger` (`Aadhaar number`) ON DELETE CASCADE;

--
-- Constraints for table `passes through`
--
ALTER TABLE `passes through`
  ADD CONSTRAINT `passes through_ibfk_1` FOREIGN KEY (`PT_Station code`) REFERENCES `station` (`Station code`) ON DELETE CASCADE,
  ADD CONSTRAINT `passes through_ibfk_2` FOREIGN KEY (`PT_Train ID`) REFERENCES `train` (`Train ID`) ON DELETE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`Ticket Aadhaar number`) REFERENCES `passenger` (`Aadhaar number`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`Ticket Train ID`) REFERENCES `train` (`Train ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
