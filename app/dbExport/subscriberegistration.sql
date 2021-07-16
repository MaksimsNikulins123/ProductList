-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formvalidation`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriberegistration`
--

CREATE TABLE `subscriberegistration` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `subscriberegistration`
--

INSERT INTO `subscriberegistration` (`id`, `date`, `email`, `domain`) VALUES
(1, '2021-06-11', 'max123@inbox.lv', 'inbox.lv'),
(2, '2021-06-11', 'max1234@gmail.com', 'gmail.com'),
(3, '2021-06-11', 'maxxxx123@yahoo.com', 'yahoo.com'),
(4, '2021-06-11', 'max1232@mail.ru', 'mail.ru'),
(5, '2021-06-11', 'max1233@gmail.com', 'gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriberegistration`
--
ALTER TABLE `subscriberegistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriberegistration`
--
ALTER TABLE `subscriberegistration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
