-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2021 at 09:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `userName` varchar(120) NOT NULL,
  `userUid` varchar(120) NOT NULL,
  `userEmail` varchar(120) NOT NULL,
  `userPassword` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userUid`, `userEmail`, `userPassword`) VALUES
(4, 'Angela Sanchez', 'angie403', 'ams880@scarletmail.rutgers.edu', '123'),
(6, 'John Jones', 'John123', 'john123@gmail.com', '123'),
(8, 'Sanchez', 'Sanchez', 'sanchez@gmail.com', '123'),
(9, 'Sanchez', 'Sanchez', 'sanchez@gmail.com', '123'),
(10, 'test', 'test', 'test@gmail.com', 'test'),
(11, 'Oscar tejax', 'Oscar', 'oskartejax13@gmail.com', '2018384831'),
(12, 'Oscar', 'juancho', 'oskartejax13@gmail.com', '201838'),
(13, 'Oscar', 'David', 'oskartejax13@gmail.com', '2018384831Oo!');

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
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
