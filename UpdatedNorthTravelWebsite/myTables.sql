-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 17, 2022 at 12:20 PM
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
-- Database: `myTables`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Customer ID` int NOT NULL,
  `First name` varchar(50) NOT NULL,
  `Last name` varchar(50) NOT NULL,
  `Phone number` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Support request ID` int NOT NULL,
  `E-mail` int NOT NULL,
  `Login ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Login ID` int NOT NULL,
  `Customer ID` int NOT NULL,
  `Login name` text NOT NULL,
  `Login password hash` varchar(50) NOT NULL,
  `Date created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `E-mail` int NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Payment Status`
--

CREATE TABLE `Payment Status` (
  `Payment status` int NOT NULL,
  `Payment description` text NOT NULL,
  `Date paid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Support query`
--

CREATE TABLE `Support query` (
  `Support request ID` int NOT NULL,
  `Category` text NOT NULL,
  `Query status` text NOT NULL,
  `Query details` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`Customer ID`),
  ADD KEY `Customer ID` (`Customer ID`),
  ADD KEY `Customer ID_2` (`Customer ID`),
  ADD KEY `Support request ID` (`Support request ID`),
  ADD KEY `E-mail` (`E-mail`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Login ID`),
  ADD KEY `Customer ID` (`Customer ID`);

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
  ADD PRIMARY KEY (`Payment status`);

--
-- Indexes for table `Support query`
--
ALTER TABLE `Support query`
  ADD PRIMARY KEY (`Support request ID`),
  ADD UNIQUE KEY `Support request ID_2` (`Support request ID`),
  ADD KEY `Support request ID` (`Support request ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `Customer ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Login`
--
ALTER TABLE `Login`
  MODIFY `Login ID` int NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `Support query`
--
ALTER TABLE `Support query`
  MODIFY `Support request ID` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Customers`
--
ALTER TABLE `Customers`
  ADD CONSTRAINT `Customers_ibfk_1` FOREIGN KEY (`Support request ID`) REFERENCES `Support query` (`Support request ID`),
  ADD CONSTRAINT `Customers_ibfk_2` FOREIGN KEY (`E-mail`) REFERENCES `Newsletter` (`E-mail`);

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`Customer ID`) REFERENCES `Customers` (`Customer ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;