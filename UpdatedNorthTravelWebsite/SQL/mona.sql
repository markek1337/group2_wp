-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 20, 2022 at 12:49 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monaSQL`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Customer ID` int NOT NULL,
  `First name` varchar(20) NOT NULL,
  `Last name` varchar(20) NOT NULL,
  `Phone number` varchar(20) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Support_request_ID` int NOT NULL,
  `E-mail` int NOT NULL,
  `User ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `E-mail` int NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Payment Status`
--

CREATE TABLE `Payment Status` (
  `Payment status` int NOT NULL,
  `Payment description` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Support`
--

CREATE TABLE `Support` (
  `Support_request_ID` int NOT NULL,
  `Category` enum('Question','Complaint') NOT NULL,
  `Query_description` enum('Solved','Ongoing') NOT NULL,
  `Query_details` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`Customer ID`),
  ADD KEY `E-mail` (`E-mail`),
  ADD KEY `Support_request_ID` (`Support_request_ID`);

--
-- Indexes for table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`E-mail`),
  ADD KEY `E-mail` (`E-mail`);

--
-- Indexes for table `Payment Status`
--
ALTER TABLE `Payment Status`
  ADD PRIMARY KEY (`Payment status`),
  ADD KEY `Payment status` (`Payment status`);

--
-- Indexes for table `Support`
--
ALTER TABLE `Support`
  ADD PRIMARY KEY (`Support_request_ID`),
  ADD KEY `Support_request_ID` (`Support_request_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `Customer ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `E-mail` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payment Status`
--
ALTER TABLE `Payment Status`
  MODIFY `Payment status` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Support`
--
ALTER TABLE `Support`
  MODIFY `Support_request_ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;