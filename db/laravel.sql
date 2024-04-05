-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 09:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `catimg` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `catimg`, `created_at`, `updated_at`) VALUES
(1, 'single', 'category-5547.jpg', '2024-03-13 00:00:00', '2024-03-13 00:00:00'),
(8, 'multiple', 'category-2574.jpg,category-4838.jpg,category-7068.jpg,category-1224.jpg,category-2953.jpg', '2024-03-14 00:00:00', '2024-03-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `flavour` varchar(50) NOT NULL,
  `cakename` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `weight`, `category`, `flavour`, `cakename`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, '[\"1.5\",\"2\",\"2.5\"]', '2', 'Choco vanilla', 'jkhjkhk', 27, 'hjghj', '2023-10-12 00:00:00', '2023-10-12 00:00:00'),
(2, '[\"2\",\"2.5\"]', '4', 'Choco Truffle', 'hjgjh', 180, 'hgjh', '2023-10-12 00:00:00', '2023-10-12 00:00:00'),
(3, '[\"0.5\",\"1\"]', '3', 'German forest', 'jkhjkhk', 300, 'kjfwbycrwyjk', '2023-10-18 00:00:00', '2023-10-18 00:00:00'),
(4, '[\"4\"]', 'Test1', 'Butterscotch', 'fs', 2, 'h', '2023-10-18 00:00:00', '2023-10-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'anjali', 'anjali@gmail.com', '12ed51686a83dff335014f5960cf94a4');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `weight`, `created_at`, `updated_at`) VALUES
(2, '0.5', '2023-10-11 00:00:00', '2023-10-12 00:00:00'),
(3, '1', '2023-10-11 00:00:00', '2023-10-12 00:00:00'),
(4, '1.5', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(5, '2', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(6, '2.5', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(7, '3', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(8, '3.5', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(9, '4', '2023-10-11 00:00:00', '2023-10-11 00:00:00'),
(10, '4.5', '2023-10-11 00:00:00', '2023-10-11 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
