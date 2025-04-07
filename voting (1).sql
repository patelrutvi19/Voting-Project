-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 08:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `votes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`, `address`, `photo`, `role`, `status`, `votes`) VALUES
(1, 'reesha', '8866390922', 'reeshamarsonia@gmail.com', '123456', 'Rajkot', 'back1.webp', '1', '1', '0'),
(2, 'gopi', '98345231231', 'gopi@gmail.com', 'gopi123', 'rajkot', 'girl4.jpg', '2', '1', '4'),
(3, 'rutvi', '957655666', 'rutvi@gmail.com', 'rutvi456', 'Rajkot', 'girl4.jpg', '1', '1', '0'),
(5, 'abc', '9980876567', 'abc@gmail.com', '123abc', 'rajkot', 'girl8.jpg', '2', '0', '3'),
(6, 'vrushti', '676767676', 'vrushti@gmail.com', 'vrushti', 'bhayavader', 'Vrushti Makadia.jpg', '1', '1', '0'),
(7, 'rutu', '9876543256', 'rutupatel717@gmail.com', '12345', 'rajkot', '1.jpg', '1', '1', '0'),
(8, 'rutu', '975642367', 'rutupatel717@gmail.com', '12345', 'india', '1.jog.webp', '2', '0', '1'),
(9, 'rutu patel', '9876543210', 'rutuladani6@gmail.com', '123', 'surat', '5.jpg', '2', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
