-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 04:42 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('manoj1234@yahoo.com', 'manoj'),
('nachiketh@gmail.com', 'nachiketh'),
('samarth@sdmit.in', 'samarth'),
('shyam@hotmail.com', 'shyam');

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id_card_no` varchar(50) NOT NULL,
  `packet_id` int(50) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `email`, `phone_num`, `comment`) VALUES
('slslskdffj', 'sdffsddf', 'sddfsdfsdf', 343423, 'fsadfsf'),
('manoj', 'gaonkar', 'manoj@gamilmco', 2147483647, 'hey there i am having an issue');

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
(5026, 'ljaskd', 'jasjdlj@aljkdf', '2022-02-13', '2983472739', '9999999999', 'lksdfjlqj', 'lskdhkj'),
(9337, 'Manoj', 'Manoj@gmail.com', '2022-02-13', '7975117551', '9859859895', 'Ankola, Karnataka', 'manoj'),
(9338, 'Nachiketh Shetty', 'Nachiketh123@protonmail.com', '2022-02-13', '7682883888', '8873783993', 'Sirsi ,Karnataka', 'nach'),
(9339, 'Samartha', 'samarth@sdmit.in', '2022-02-13', '8489484989', '9893938038', 'Sirsi ,Karnataka', 'sam'),
(9340, 'cool', 'cool@jjg', '2022-02-13', '0000000000', '9999999999', 'jfjdj', 'jjjj');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `custDel` AFTER DELETE ON `customer` FOR EACH ROW INSERT INTO customer_log VALUES(OLD.identity_card_no,OLD.name,OLD.email,OLD.registration_date,OLD.mobile_ph,OLD.home_ph,OLD.address,OLD.password,"Deleted")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `custLog` AFTER INSERT ON `customer` FOR EACH ROW INSERT INTO customer_log VALUES(NEW.identity_card_no,NEW.name,NEW.email,NOW(),NEW.mobile_ph,NEW.home_ph,NEW.address,NEW.password,"Inserted")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `custUpd` BEFORE UPDATE ON `customer` FOR EACH ROW INSERT INTO customer_log VALUES(OLD.identity_card_no,OLD.name,OLD.email,NOW(),OLD.mobile_ph,OLD.home_ph,OLD.address,OLD.password,"Updated")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_log_in`
--

CREATE TABLE `customer_log_in` (
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
-- Dumping data for table `customer_log_in`
--

INSERT INTO `customer_log_in` (`identity_card_no`, `name`, `email`, `registration_date`, `mobile_ph`, `home_ph`, `address`, `password`, `action`) VALUES
(9338, 'Nachiketh', 'Nachiketh123@protonmail.com', '2022-02-13', '7682883888', '8873783993', 'Sirsi ,Karnataka', 'nach', 'Updated'),
(9340, 'cool', 'cool@jjg', '2022-02-13', '0000000000', '9999999999', 'jfjdj', 'jjjj', 'Inserted');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `tax_id` int(40) NOT NULL,
  `identity_card_no` varchar(40) NOT NULL,
  `packet` int(40) NOT NULL,
  `first_name` int(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `office_ph` int(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `packet_id` int(38) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`packet_id`, `price`, `category`) VALUES
(123, 20, 'basic'),
(456, 30, 'business'),
(789, 40, 'Premium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id_card_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`identity_card_no`);

--
-- Indexes for table `customer_log_in`
--
ALTER TABLE `customer_log_in`
  ADD PRIMARY KEY (`identity_card_no`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`packet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `identity_card_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9341;

--
-- AUTO_INCREMENT for table `customer_log_in`
--
ALTER TABLE `customer_log_in`
  MODIFY `identity_card_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9341;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `tax_id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `packet_id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
