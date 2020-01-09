-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 05:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sna`
--

CREATE TABLE `tbl_sna` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `major` varchar(25) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `profile` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sna`
--

INSERT INTO `tbl_sna` (`id`, `first_name`, `last_name`, `gender`, `class`, `email`, `major`, `reason`, `profile`) VALUES
(3, 'borith', 'moek', 'Male', '2021-A', 'moekborith@gmail.com', 'sna', 'LOVE SNA', 'major logo.png'),
(4, 'borith', 'moek', 'Male', '2021-B', 'moekborith@gmail.com', 'SNA', 'I LOVE SNA            ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `major` varchar(25) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `profile` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id`, `first_name`, `last_name`, `gender`, `class`, `email`, `major`, `reason`, `profile`) VALUES
(2, 'borith', 'moek', 'Male', '2021-B', 'moekborith@gmail.com', 'WEP', 'I LOVE WEP             ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sna`
--
ALTER TABLE `tbl_sna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sna`
--
ALTER TABLE `tbl_sna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
