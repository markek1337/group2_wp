-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 20, 2022 at 11:14 AM
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
-- Database: `team2local`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cart_item`
--

CREATE TABLE `Cart_item` (
  `Cart_item_id` int NOT NULL,
  `Order_id` int NOT NULL,
  `Destination_id` int NOT NULL,
  `Discount_category` varchar(50) NOT NULL,
  `Quantity` int NOT NULL,
  `Price` decimal(5,2) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `Customer order`
--

CREATE TABLE `Customer order` (
  `Order_id` int NOT NULL,
  `Order_status_id` int NOT NULL,
  `Payment_id` int NOT NULL,
  `Customer_id` int NOT NULL,
  `Date_and_time_placed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Order_details` varchar(1000) NOT NULL,
  `Total_price` decimal(5,2) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `Discount_category`
--

CREATE TABLE `Discount_category` (
  `Discount_category` varchar(50) NOT NULL,
  `Discount_description` varchar(500) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `Order_status`
--

CREATE TABLE `Order_status` (
  `Order_status_id` int NOT NULL,
  `Order_description` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `Payments`
--

CREATE TABLE `Payments` (
  `Payment_id` int NOT NULL,
  `Order_id` int NOT NULL,
  `Payment_status` varchar(50) NOT NULL,
  `Payment_method` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `Payment_method`
--

CREATE TABLE `Payment_method` (
  `Payment_method` varchar(50) NOT NULL,
  `Card_number` bigint NOT NULL,
  `Card_holder_name` varchar(50) NOT NULL,
  `Card_holder_surname` varchar(50) NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart_item`
--
ALTER TABLE `Cart_item`
  ADD PRIMARY KEY (`Cart_item_id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Discount_category` (`Discount_category`);

--
-- Indexes for table `Customer order`
--
ALTER TABLE `Customer order`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `Customer order_ibfk_1` (`Order_status_id`),
  ADD KEY `Payment_id` (`Payment_id`);

--
-- Indexes for table `Discount_category`
--
ALTER TABLE `Discount_category`
  ADD PRIMARY KEY (`Discount_category`);

--
-- Indexes for table `Order_status`
--
ALTER TABLE `Order_status`
  ADD PRIMARY KEY (`Order_status_id`);

--
-- Indexes for table `Payments`
--
ALTER TABLE `Payments`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Payment_method` (`Payment_method`);

--
-- Indexes for table `Payment_method`
--
ALTER TABLE `Payment_method`
  ADD PRIMARY KEY (`Payment_method`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart_item`
--
ALTER TABLE `Cart_item`
  MODIFY `Cart_item_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer order`
--
ALTER TABLE `Customer order`
  MODIFY `Order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Order_status`
--
ALTER TABLE `Order_status`
  MODIFY `Order_status_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payments`
--
ALTER TABLE `Payments`
  MODIFY `Payment_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cart_item`
--
ALTER TABLE `Cart_item`
  ADD CONSTRAINT `Cart_item_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `Customer order` (`Order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Cart_item_ibfk_2` FOREIGN KEY (`Discount_category`) REFERENCES `Discount_category` (`Discount_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Customer order`
--
ALTER TABLE `Customer order`
  ADD CONSTRAINT `Customer order_ibfk_1` FOREIGN KEY (`Order_status_id`) REFERENCES `Order_status` (`Order_status_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Customer order_ibfk_2` FOREIGN KEY (`Payment_id`) REFERENCES `Payments` (`Payment_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Payments`
--
ALTER TABLE `Payments`
  ADD CONSTRAINT `Payments_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `Customer order` (`Order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Payments_ibfk_2` FOREIGN KEY (`Payment_method`) REFERENCES `Payment_method` (`Payment_method`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
