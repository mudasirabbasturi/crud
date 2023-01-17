-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 06:32 PM
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
-- Database: `listing`
--
-- --------------------------------------------------------
--
-- Table structure for table `customers`
--
CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `customers`
--
INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `phone`, `address`, `city`, `postalCode`, `country`) VALUES
(18, 'Alfreds ', 'Futterkiste	', 'alfreds@gmail.com', '+493456789', 'Obere Str. 57	', 'Berlin', '12209', 'Germany'),
(19, 'Ana ', 'Trujillo', 'trujillo@gmail.com', '(123)1234567.', 'Avda. de la Constitución 2222	', 'México D.F.	', '05021', 'Mexico'),
(20, 'Thomas ', 'Hardy', 'hardy@gmail.com', '+44123434567', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(21, 'Christina', ' Berglund', 'berglund@gmail.com', '+463075898012', 'Berguvsvägen 8', 'Luleå', 'S-958 22', 'Sweden'),
(22, 'Martín ', 'Sommer	', 'martín@gmail.com', '+343058756920', 'C/ Araquil, 67', 'Madrid', '28023', 'Spain');
--
-- Indexes for dumped tables
--
--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;