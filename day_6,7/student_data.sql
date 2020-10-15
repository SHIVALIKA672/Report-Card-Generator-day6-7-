-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 04:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` text NOT NULL,
  `Userid` text NOT NULL,
  `Password` text NOT NULL,
  `PHP` int(11) NOT NULL,
  `HTML` int(11) NOT NULL,
  `MYSQL` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Percentage` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `Firstname`, `Lastname`, `Email`, `Userid`, `Password`, `PHP`, `HTML`, `MYSQL`, `Total`, `Percentage`) VALUES
(1, 'Shivalika', 'Pillai', 'shiva@gmail.com', 'pro', 'promax', 89, 90, 98, 277, '92'),
(2, 'Aleesha', 'Kabeer', 'aleesha@gmail.com', 'ash', 'ash11', 78, 96, 87, 261, '87'),
(3, 'Nupur', 'PV', 'nupur@gmail.com', 'hi', 'hello', 86, 86, 95, 267, '89'),
(4, 'Deepa', 'Menon', 'deepa@gmail.com', 'ok', 'okayy', 87, 89, 96, 272, '91'),
(5, 'Shriya', 'Deshpande', 'shriya@gmail.com', 'good', 'vgood', 78, 85, 93, 256, '85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
