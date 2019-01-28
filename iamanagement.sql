-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 05:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iamanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `ia1`
--

CREATE TABLE `ia1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ia1`
--

INSERT INTO `ia1` (`id`, `name`, `sem`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(1, 'sanjay', 7, 15, 15, 15, 15, 15, 0),
(21, 'tanushree', 7, 13, 12, 14, 15, 15, 0),
(22, 'zuhad', 3, 9, 8, 7, 11, 14, 4),
(23, 'tasmiya', 3, 14, 14, 1, 4, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `ia2`
--

CREATE TABLE `ia2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ia2`
--

INSERT INTO `ia2` (`id`, `name`, `sem`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(1, 'sanjay', 7, 12, 15, 13, 14, 15, 15),
(2, 'zuhad', 3, 3, 4, 3, 2, 8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `ia3`
--

CREATE TABLE `ia3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ia3`
--

INSERT INTO `ia3` (`id`, `name`, `sem`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(1, 'sanjay', 7, 15, 15, 15, 15, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `scheme` longblob NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `usn`, `name`, `sem`) VALUES
(1, '4AD15CS075', 'sanjay', 7),
(2, '4AD15CS093', 'Zoha Afreen', 7),
(3, '4AD15CS085', 'thanushree', 7),
(4, '4AD16CS088', 'Zuhad', 5),
(5, '4AD17CS012', 'Charan', 3),
(6, '4AD17CS010', 'Aditya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `handled` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `code`, `sem`, `handled`) VALUES
(1, 'M3', '15CS31', 3, 'sanjay'),
(2, 'ADE', '15CS32', 3, ''),
(3, 'DS', '15CS33', 3, 'thanushree'),
(4, 'ME', '15CS51', 5, ''),
(5, 'CN', '15CS52', 5, 'zoha'),
(6, 'DBMS', '15CS53', 5, ''),
(7, 'Web', '15CS71', 7, 'sanjay'),
(8, 'ACA', '15CS72', 7, ''),
(9, 'CO', '15CS34', 3, ''),
(10, 'USP', '15CS35', 3, ''),
(11, 'DMS', '15CS36', 3, ''),
(12, 'ATC', '15CS54', 5, 'sanjay'),
(13, '.NET', '15CS56', 5, ''),
(14, 'Advanced Java', '15CS55', 5, ''),
(15, 'ML', '15CS73', 7, 'sanjay'),
(16, 'INS', '15CS74', 7, ''),
(17, 'SAN', '15CS75', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `subject`) VALUES
(1, 'admin', 'admin123', '0', ''),
(9, 'thanushree', 'qwerty', '9686676263', 'DS'),
(10, 'zoha', 'qwerty', '7204853470', 'CN'),
(11, 'sanjay', 'sanjay', '7019239905', 'M3'),
(12, 'salman', 'mustafa', '9632800732', 'USP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ia1`
--
ALTER TABLE `ia1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ia2`
--
ALTER TABLE `ia2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ia3`
--
ALTER TABLE `ia3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ia1`
--
ALTER TABLE `ia1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ia2`
--
ALTER TABLE `ia2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ia3`
--
ALTER TABLE `ia3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
