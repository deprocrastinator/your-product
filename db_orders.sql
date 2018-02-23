-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 08:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `id` int(11) NOT NULL,
  `quantity` int(2) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`id`, `quantity`, `firstname`, `lastname`, `email`) VALUES
(1, 5, 'Jonas', 'Ponas', 'ponas@mail.lt'),
(2, 4, 'Markas', 'Motsas', 'tbedbd@tnrn'),
(3, 4, 'Lukas', 'Lokarius', 'rtnoptn@rgsnkl.gr'),
(4, 4, 'edber', 'ddr', 'rebrf@eddn.lt'),
(5, 10, 'Farel', 'Marely', 'fmarely@gmail.com'),
(6, 7, 'Karlas', 'Lapas', 'snlk@gekl.lt'),
(7, 3, 'Falas', 'Karlatas', 'svdjk@gmail.vo'),
(8, 7, 'Lagas', 'Ratkas', 'efbsjsnlk@gekl.lt'),
(9, 6, 'Eltas', 'Karlatas', 'geshdjk@gmek.yt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userorders`
--
ALTER TABLE `userorders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userorders`
--
ALTER TABLE `userorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
