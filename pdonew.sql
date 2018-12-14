-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 06:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdonew`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdotrial1`
--

CREATE TABLE `pdotrial1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institute` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `acad_year` text NOT NULL,
  `phone` bigint(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_size` text NOT NULL,
  `athletics` tinyint(1) DEFAULT NULL,
  `aquatics` tinyint(1) DEFAULT NULL,
  `cricket` tinyint(1) DEFAULT NULL,
  `football` tinyint(1) DEFAULT NULL,
  `volleyball` tinyint(1) DEFAULT NULL,
  `basketball` tinyint(1) DEFAULT NULL,
  `badminton` tinyint(1) DEFAULT NULL,
  `chess` tinyint(1) DEFAULT NULL,
  `carrom` tinyint(1) DEFAULT NULL,
  `squash` tinyint(1) DEFAULT NULL,
  `table_tennis` tinyint(1) DEFAULT NULL,
  `lawn_tennis` tinyint(1) DEFAULT NULL,
  `snooker` tinyint(1) DEFAULT NULL,
  `power_lifting` tinyint(1) DEFAULT NULL,
  `pubg` tinyint(1) DEFAULT NULL,
  `events` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdotrial1`
--

INSERT INTO `pdotrial1` (`id`, `name`, `email`, `institute`, `designation`, `acad_year`, `phone`, `team_name`, `team_size`, `athletics`, `aquatics`, `cricket`, `football`, `volleyball`, `basketball`, `badminton`, `chess`, `carrom`, `squash`, `table_tennis`, `lawn_tennis`, `snooker`, `power_lifting`, `pubg`, `events`) VALUES
(81, 'test', 'test@test.com', 'IIITA', 'test', 'test', 9876543212, 'test', '23', 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Athletics <br>Aquatics <br>Cricket <br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdotrial1`
--
ALTER TABLE `pdotrial1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdotrial1`
--
ALTER TABLE `pdotrial1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
