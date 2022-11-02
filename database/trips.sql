-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 01:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halifax_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(10) NOT NULL,
  `heading` varchar(25) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(1, 'Halifax', '2023-04-12', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, voluptate atque explicabo quos deleniti cum ratione ea. Nisi consequatur reiciendis a eligendi quis, modi id asperiores impedit. Error, numquam nam.'),
(2, 'Sydney', '2023-05-10', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, voluptate atque explicabo quos deleniti cum ratione ea. Nisi consequatur reiciendis a eligendi quis, modi id asperiores impedit. Error, numquam nam.'),
(6, 'Cape Breton', '2022-11-04', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, voluptate atque explicabo quos deleniti cum ratione ea. Nisi consequatur reiciendis a eligendi quis, modi id asperiores impedit. Error, numquam nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
