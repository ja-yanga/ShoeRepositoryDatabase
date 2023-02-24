-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 08:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `ProductNumber` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `ProductSerialNum` varchar(100) NOT NULL,
  `ProductQuantity` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`ProductNumber`, `ProductName`, `Description`, `Category`, `ProductSerialNum`, `ProductQuantity`, `Price`) VALUES
(10, 'Jordan 2', 'Jordan Shoes', 'Basketball Shoes', '554002-111', '10', '9000'),
(11, 'Nike React', 'Nike Shoes', 'Running Shoes', '144322-132', '10', '4500'),
(12, 'Nike Huarache', 'Nike Shoes', 'Running Shoes', '322333-212', '10', '5500'),
(13, 'Jordan 4', 'Jordan Shoes', 'Basketball Shoes', '392322-345', '10', '9500'),
(14, 'Lebron 11', 'Lebron Shoes', 'Basketball Shoes', '494944-222', '10', '9500'),
(15, 'Nike Runners', 'Nike Shoes', 'Running Shoes', '112332-333', '10', '4000'),
(16, 'Nike Dunks', 'Nike Shoes', 'Basketball Shoes', '103322-333', '10', '7000'),
(17, 'Jordan 1', 'Jordan Shoes', 'Basketball Shoes', '555088-134', '10', '9500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`ProductNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `ProductNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
