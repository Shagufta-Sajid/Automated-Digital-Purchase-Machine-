-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `micro_lab`
--
CREATE DATABASE IF NOT EXISTS `micro_lab` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `micro_lab`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `no` int(9) NOT NULL,
  `p_code` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`no`, `p_code`, `p_name`, `quantity`, `price`) VALUES
(1, '6323a0a0', 'Chashi Aromatic Chinigura Rice', '2kg', 300),
(2, '83af5717', 'Aashirvaad Atta Multigrains', '5kg', 1125),
(3, 'a3ca8415', 'Fresh Premium Salt', '1kg', 42),
(4, '6324bee', 'Marks Full Cream Milk Powder', '500gm', 340),
(5, '930eb16', 'Fresh Premium Salt', '1kg', 42);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE `purchase` (
  `serial` int(11) NOT NULL,
  `p_code` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` int(9) DEFAULT NULL,
  `purchase_datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(250) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`serial`, `p_code`, `p_name`, `quantity`, `price`, `purchase_datetime`, `name`, `phone`) VALUES
(1, '6323a0a0', 'Chashi Aromatic Chinigura Rice', '2kg', 300, '2023-04-29 04:03:10', 'Fardin Tonmoy', '01316013995'),
(1, '83af5717', 'Aashirvaad Atta Multigrains', '5kg', 1125, '2023-04-29 04:03:10', 'Fardin Tonmoy', '01316013995'),
(1, 'a3ca8415', 'Fresh Premium Salt', '1kg', 42, '2023-04-29 04:03:10', 'Fardin Tonmoy', '01316013995'),
(1, '930eb16', 'Fresh Premium Salt', '1kg', 42, '2023-04-29 04:03:10', 'Fardin Tonmoy', '01316013995'),
(2, '6323a0a0', 'Chashi Aromatic Chinigura Rice', '2kg', 300, '2023-04-29 04:17:43', 'Shagufta Sajid', '01234567890'),
(2, '930eb16', 'Fresh Premium Salt', '1kg', 42, '2023-04-29 04:17:43', 'Shagufta Sajid', '01234567890'),
(2, 'a3ca8415', 'Fresh Premium Salt', '1kg', 42, '2023-04-29 04:17:43', 'Shagufta Sajid', '01234567890');

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

DROP TABLE IF EXISTS `serials`;
CREATE TABLE `serials` (
  `no` int(11) NOT NULL,
  `a` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`no`, `a`) VALUES
(1, 'new'),
(2, 'new'),
(3, 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `no` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `serials`
--
ALTER TABLE `serials`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
