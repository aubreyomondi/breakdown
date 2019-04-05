-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 02:03 PM
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
-- Database: `magriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `sacco`
--

CREATE TABLE `sacco` (
  `memberId` int(20) NOT NULL,
  `username` text,
  `email` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(20) NOT NULL,
  `username` text NOT NULL,
  `email` int(255) DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`) VALUES
(1, 'Emma Omondi', NULL, '$2y$10$Brq0BE32aDM8Y6TS9hb.hOagLSGVIXriPn680ZxTu9CgzbD.VOYGm'),
(3, 'Franklin Opil', NULL, '$2y$10$KT0yhWVLC3PxJXsh.iMJ6O316gfwrfQGbEP23oQyJRMCB5wXBsXP2'),
(4, 'Aubrey Johns', NULL, '$2y$10$rqNpJRQbYztAzCN/z2tllux.p0bnOgE4ziYhb4kOrVdbmdRF89x9G'),
(5, 'Cristiano Ronaldo', NULL, '$2y$10$j79AC8qhvBGeYLxgPNH1puvzcsJwX12UJb5C7PFiADKn2AScdqT2G'),
(7, 'Megan Mukosi', NULL, '$2y$10$pZthG/Qv7HY9dcCtlRWkXOK0IScTs5h9Vg.Cizg1HcV4Xj1zHGWWa'),
(8, 'Policup Dennis', NULL, '$2y$10$ZX3yaEA.QdQbbfCGkMexq.RJ0Zjk4LMr30Bd.Cgnpb5c31epOBTgy'),
(9, 'Mbiraru Ule Mathe', NULL, '$2y$10$SeTCvImXd5ZaFj9zdjbHi.njM1ZfZcJ8sp99mwToEFiAZ/vLhUjxO'),
(10, 'Adan Ayan', NULL, '$2y$10$AzlSrVCYh9nVYrgTxb/yR.TY7V0bsBVy2QENsal5J89.zstP8xjDu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sacco`
--
ALTER TABLE `sacco`
  ADD PRIMARY KEY (`memberId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sacco`
--
ALTER TABLE `sacco`
  MODIFY `memberId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
