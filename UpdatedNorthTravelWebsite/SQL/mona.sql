-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 04, 2022 at 09:06 AM
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
-- Database: `app1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `Book_ID` int NOT NULL,
  `Book_date` date NOT NULL,
  `Customer_ID` int NOT NULL,
  `Email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Customer_ID` int NOT NULL,
  `First_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Last_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Country` varchar(100) NOT NULL,
  `ENTERpassword` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `Email` varchar(225) NOT NULL,
  `Status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Subscribed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Newsletter`
--

INSERT INTO `Newsletter` (`Email`, `Status`) VALUES
('achaaoudmona@gmail.com', 'Subscribed'),
('bass@gmail.com', 'Subscribed'),
('emma@gmail.com', 'Subscribed'),
('founfoun@gmail.com', 'Subscribed'),
('HOME@gmail.com', 'Subscribed'),
('jij@gmail.com', 'Subscribed'),
('jik@gmail.com', 'Subscribed'),
('kaazm@gmail.com', 'Subscribed'),
('lalaa@gmail.com', 'Subscribed'),
('lana@gmail.com', 'Subscribed'),
('mona21000@student.hamk.fi', 'Subscribed');

-- --------------------------------------------------------

--
-- Table structure for table `Payment Status`
--

CREATE TABLE `Payment Status` (
  `Payment_status` int NOT NULL,
  `Payment_description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Support`
--

CREATE TABLE `Support` (
  `Support_request_ID` int NOT NULL,
  `Category` enum('Question','Complaint') NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Query_details` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Support`
--

INSERT INTO `Support` (`Support_request_ID`, `Category`, `First_Name`, `Last_Name`, `Query_details`) VALUES
(7, 'Complaint', 'Mala', 'Lama', 'Mata'),
(9, 'Complaint', 'Lala', 'tara', 'bara'),
(10, 'Complaint', 'founfoun', 'tountoun', 'malki'),
(41, 'Complaint', 'leila', 'diani', 'nadatoune'),
(42, 'Complaint', 'louna', 'pp', 'jdapdamps'),
(43, 'Complaint', 'bass', 'bass', 'bass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `Book_date` (`Book_date`),
  ADD KEY `Customer ID` (`Customer_ID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `First_name` (`First_name`),
  ADD KEY `Last_name` (`Last_name`);

--
-- Indexes for table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `Payment Status`
--
ALTER TABLE `Payment Status`
  ADD PRIMARY KEY (`Payment_status`),
  ADD KEY `Payment status` (`Payment_status`);

--
-- Indexes for table `Support`
--
ALTER TABLE `Support`
  ADD PRIMARY KEY (`Support_request_ID`),
  ADD KEY `Support_request_ID` (`Support_request_ID`),
  ADD KEY `First_Name` (`First_Name`),
  ADD KEY `Last_Name` (`Last_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `Book_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `Customer_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Payment Status`
--
ALTER TABLE `Payment Status`
  MODIFY `Payment_status` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Support`
--
ALTER TABLE `Support`
  MODIFY `Support_request_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

