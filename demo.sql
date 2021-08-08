-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 01:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `pricetype` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `ticket_type` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `pricetype`, `title`, `organizer`, `website`, `category`, `descr`, `latitude`, `longitude`, `link`, `file`, `file1`, `ticket_type`, `qty`, `price`, `start_date`, `end_date`) VALUES
(10, 'on', 'fdgf', 'fdgdf', 'https://www.dfgdffgdf.com', 'Two', 'fd', '12.9794048', '77.5749632', 'https://www.dfgdffgdf.com', '', 'img/', 'Two', 4, '4', '2021-08-08T21:00', '2021-09-24T17:00'),
(11, 'on', 'dsfd', 'fdsdsf', 'https://www.dfgdffgdf.com', 'Two', 'gfgf', '12.9794048', '77.5749632', 'https://www.dfgdffgdf.com', 'img/', 'img/', 'Three', 56, '65', '2021-08-08T17:05', '2021-08-26T17:02'),
(12, 'on', 'dsfd', 'fdgdf', 'https://www.dfgdffgdf.com', 'Two', 'fdf', '12.9794048', '77.5749632', 'https://www.dfgdffgdf.com', '', 'img/', 'One', 32, '322', '2021-08-08T20:04', '2021-08-27T17:04'),
(13, '', '', '', '', '', '', '12.9794048', '77.5749632', '', '', 'img/', '', 0, '', '', ''),
(14, '', '', '', '', '', '', '12.9794048', '77.5749632', '', '', 'img/', '', 0, '', '', ''),
(15, '', '', '', '', '', '', '12.9794048', '77.5749632', '', '', 'img/', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `name`, `email`) VALUES
(11, 'pankaj', 'ps@gmail.com'),
(12, 'fdsfsdfd', 'sahooamit1418@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
