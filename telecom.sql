-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 11:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telecom`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `purchased` (IN `pid` INT)  BEGIN

select * from buys where packet_id = pid;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `admin_id`) VALUES
('nachiketh@gmail.com', 'nach', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id_card_no` int(50) NOT NULL,
  `packet_id` int(50) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id_card_no`, `packet_id`, `plan_name`, `duration`, `purchase_date`, `id`) VALUES
(111, 789, 'Premium ', '6_month', '2022-02-16', 93);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `identity_card_no` int(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `registration_date` date NOT NULL,
  `mobile_ph` varchar(10) NOT NULL,
  `home_ph` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`identity_card_no`, `name`, `email`, `registration_date`, `mobile_ph`, `home_ph`, `address`, `password`) VALUES
(111, 'nachiketh', 'nachiketh@gmail.com', '2022-02-07', '9999999999', '9999999999', 'lk;sjdfjaskdj', 'nachiketh'),
(114, 'shyam', 'shyam@gmail.com', '2022-02-16', '8943884748', '8373773884', 'banglore', 'shyam'),
(115, 'manoj', 'manojgaonkar7648@gmail.com', '2022-02-16', '2424374444', '3333333333', 'ankola', 'manoj');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `custDel` AFTER DELETE ON `customer` FOR EACH ROW INSERT INTO customer_deleted VALUES(OLD.identity_card_no,OLD.name,OLD.email,OLD.registration_date,OLD.mobile_ph,OLD.home_ph,OLD.address,OLD.password,"Deleted")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `custUpd` BEFORE UPDATE ON `customer` FOR EACH ROW INSERT INTO customer_updated VALUES(OLD.identity_card_no,OLD.name,OLD.email,OLD.registration_date,OLD.mobile_ph,OLD.home_ph,OLD.address,OLD.password,"Updated")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_deleted`
--

CREATE TABLE `customer_deleted` (
  `identity_card_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  `mobile_ph` varchar(10) NOT NULL,
  `home_ph` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_deleted`
--

INSERT INTO `customer_deleted` (`identity_card_no`, `name`, `email`, `registration_date`, `mobile_ph`, `home_ph`, `address`, `password`, `action`) VALUES
(112, 'Nachiketh', 'samarth@sdmit.in', '2022-02-15', '2342346666', '6666666666', 'hh', 'manoj', 'Deleted'),
(113, 'manoj', 'manoj@123', '2022-02-15', '6666666666', '3333333333', 'home', 'manoj', 'Deleted'),
(9339, 'Samartha', 'samarth@sdmit.in', '2022-02-13', '8489484989', '9893938038', 'Sirsi ,Karnataka', 'sam', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `customer_updated`
--

CREATE TABLE `customer_updated` (
  `identity_card_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `registration_date` date NOT NULL,
  `mobile_ph` varchar(10) NOT NULL,
  `home_ph` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_updated`
--

INSERT INTO `customer_updated` (`identity_card_no`, `name`, `email`, `registration_date`, `mobile_ph`, `home_ph`, `address`, `password`, `action`) VALUES
(114, 'shyam', 'shyam@gmail.com', '2022-02-16', '8943884748', '8373773884', 'ujire', 'shyam', 'Updated'),
(9338, 'sadfdsa', 'Nachiketh123@protonmail.com', '2022-02-13', '7682883888', '8873783993', 'Sirsi ,Karnataka', 'nach', 'Updated');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `packet_id` int(38) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(40) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`packet_id`, `price`, `category`, `admin_id`) VALUES
(123, 250, 'Basic', 1),
(456, 50, 'Business', 1),
(789, 1000, 'Premium', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`email`) USING BTREE;

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `packet_id` (`packet_id`),
  ADD KEY `id_card_no` (`id_card_no`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`phone_num`) USING BTREE,
  ADD KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`identity_card_no`,`email`,`mobile_ph`);

--
-- Indexes for table `customer_deleted`
--
ALTER TABLE `customer_deleted`
  ADD PRIMARY KEY (`identity_card_no`);

--
-- Indexes for table `customer_updated`
--
ALTER TABLE `customer_updated`
  ADD PRIMARY KEY (`identity_card_no`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`packet_id`) USING BTREE,
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `identity_card_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `customer_updated`
--
ALTER TABLE `customer_updated`
  MODIFY `identity_card_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9341;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `packet_id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
