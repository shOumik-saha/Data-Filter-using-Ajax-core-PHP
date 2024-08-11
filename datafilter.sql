-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 12:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datafilter`
--

-- --------------------------------------------------------

--
-- Table structure for table `datafilter`
--

CREATE TABLE `datafilter` (
  `id` int(30) NOT NULL,
  `doc_name` varchar(30) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datafilter`
--

INSERT INTO `datafilter` (`id`, `doc_name`, `speciality`, `branch`, `days`, `status`) VALUES
(1, 'Ragnar', 'Eye specialist', 'Savar', 'Sunday', 1),
(2, 'Lagertha', 'Gynaecology', 'Uttara', 'Saturday', 1),
(3, 'Floki', 'Gastreology', 'Dinajpur', 'Thursday', 2),
(4, 'Bjorn', 'Pain Management', 'Rampura', 'Wednesday', 1),
(5, 'Auslaug', 'Gynaecology', 'Dinajpur', 'Monday', 2),
(6, 'Ivar', 'Neuro Surgery', 'Kushtia', 'Wednesday', 1),
(7, 'Rollo', 'Eye specialist', 'Uttara', 'Saturday', 1),
(8, 'athlestan', 'Pain Management', 'Dhanmondi', 'Monday', 2),
(9, 'Porunn', 'Gastreology', 'Barishal', 'Friday', 2),
(10, 'Horick', 'Chest Medicines', 'Shyamoli', 'Friday', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(30) NOT NULL,
  `taskStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `taskStatus`) VALUES
(1, 'Available'),
(2, 'Unavailable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datafilter`
--
ALTER TABLE `datafilter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datafilter`
--
ALTER TABLE `datafilter`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
