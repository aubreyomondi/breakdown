-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 05:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breakdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(20) NOT NULL,
  `username` text NOT NULL,
  `email` text,
  `password` text NOT NULL,
  `UserType` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `UserType`) VALUES
(23, 'Aubrey J', NULL, '$2y$10$lj1xa/myxpBfIhezZ8awSeKwoM04FvPx4x6S/scbICTahT1/lZqh2', 'Administrator'),
(24, 'Madaraka Breakdown', NULL, '$2y$10$w8y5IOT.OvdXnd1RaI3sX.hoZyb3yBMZ.FpXzawccfwU7pE9BZOEa', 'Breakdown'),
(25, 'Highrise Breakdown', NULL, '$2y$10$cGchp7r5xUdtQmZRtzWXjuiybXPhtDBmTlm/R1ORUAboL4XQkcAnC', 'Breakdown'),
(26, 'KNH Breakdown', NULL, '$2y$10$TTVLPZmSdaNTFJz68ucs8.G.CFKpDRkgwiLMh7Li8J/FHZu6JRzJe', 'Breakdown'),
(27, 'Upper Hill', NULL, '$2y$10$DxQ4Ut/ccZvjgSaNoi4ek.88jOj33m9l3EZX9SC8C23FdNhU59GIa', 'Breakdown'),
(28, 'Ayan K', NULL, '$2y$10$peO20aNAWTUYMg2PYycZjO4WVw8syY4QDkrh.w6fJGmkqrUdKpIe6', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
