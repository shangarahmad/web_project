-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 09:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_job`
--

CREATE TABLE `table_job` (
  `id` int(10) NOT NULL,
  `FName` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `P_number` int(50) NOT NULL,
  `City` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `Major` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Education` varchar(250) COLLATE utf8_unicode_520_ci NOT NULL,
  `Experience` varchar(250) COLLATE utf8_unicode_520_ci NOT NULL,
  `Word` int(20) NOT NULL,
  `Power` int(20) NOT NULL,
  `Excel` int(20) NOT NULL,
  `English` int(20) NOT NULL,
  `Arabic` int(20) NOT NULL,
  `Persion` int(20) NOT NULL,
  `Turkish` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `table_job`
--

INSERT INTO `table_job` (`id`, `FName`, `P_number`, `City`, `Email`, `Gender`, `Major`, `Education`, `Experience`, `Word`, `Power`, `Excel`, `English`, `Arabic`, `Persion`, `Turkish`) VALUES
(15, 'shangar', 2345678, 'Erbil', 'shangar@gmail.com', 'Male', 'High school', 'dq;kw', 'qlwkeqkw', 56, 61, 47, 55, 43, 38, 36),
(16, 'shangar', 2345678, 'Erbil', 'shangar@gmail.com', 'Male', 'High school', 'wefwe', 'eqew', 78, 54, 91, 36, 60, 75, 72),
(17, '', 0, 'Erbil', '', 'Male', 'High school', '', '', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_job`
--
ALTER TABLE `table_job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_job`
--
ALTER TABLE `table_job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
