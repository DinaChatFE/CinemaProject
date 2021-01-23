-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 06:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieID` int(11) NOT NULL,
  `movieTitle` varchar(255) DEFAULT NULL,
  `durationTime` varchar(255) DEFAULT NULL,
  `moviePrice` varchar(10) DEFAULT NULL,
  `movieStatus` bit(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `categories` varchar(255) NOT NULL,
  `duration_time` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieID`, `movieTitle`, `durationTime`, `moviePrice`, `movieStatus`, `image`, `hall_id`, `create_at`, `start_time`, `end_time`, `categories`, `duration_time`) VALUES
(176, 'shit-movie', '5mn', '2$', b'1', 'HaUHkZ.png', 1, '2021-01-23 15:53:42', '2021-01-22 16:53:34', '2021-01-29 15:53:10', '', 0),
(178, 'ss', 'ss', '22', b'1', 'HaUHkZ.png', 1, '2021-01-23 15:49:02', '2021-01-22 15:53:38', '2021-01-22 15:53:15', '', 0),
(179, 'ss', 'ss', 'ss', b'1', 'carousel1.jpg', 1, '2021-01-23 15:49:02', '2021-01-22 15:53:17', '2021-01-23 15:53:19', '', 0),
(182, 'sas', '22', 'sas', b'1', 'm6.jpg', 2, '2021-01-23 05:03:11', NULL, NULL, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
