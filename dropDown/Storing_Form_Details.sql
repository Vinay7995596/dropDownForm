-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2023 at 02:40 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Storing Form Details`
--

-- --------------------------------------------------------

--
-- Table structure for table `serviceOptions`
--

CREATE TABLE `serviceOptions` (
  `Id` int NOT NULL,
  `Group` varchar(32) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Count` int NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `serviceOptions`
--

INSERT INTO `serviceOptions` (`Id`, `Group`, `Name`, `Count`, `IsActive`, `Order`) VALUES
(1, 'search engine', 'Google', 11980, 1, 1),
(2, 'search engine', 'Bing', 17561, 1, 2),
(3, 'search engine', 'Youtube', 561, 1, 3),
(4, 'search engine', 'Google', 11980, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serviceOptions`
--
ALTER TABLE `serviceOptions`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serviceOptions`
--
ALTER TABLE `serviceOptions`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
