-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 04:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_subproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `allitem`
--

CREATE TABLE `allitem` (
  `id` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allitem`
--

INSERT INTO `allitem` (`id`, `itemName`) VALUES
(1, 'Bangladesh'),
(2, 'Turkey'),
(3, 'Pakistan'),
(40, 'bangladesh_Electronics'),
(41, 'bangladesh_electronics_Mobile_Phones'),
(42, 'bangladesh_electronics_mobile_phones_Iphone'),
(43, 'bangladesh_electronics_mobile_phones_iphone_Iphone_X'),
(44, 'bangladesh_electronics_mobile_phones_iphone_Iphone_6'),
(45, 'pakistan_Guns'),
(46, 'pakistan_guns_SemiAuto_Guns'),
(47, 'pakistan_guns_Short_Guns'),
(48, 'pakistan_guns_Sniper_Rifel'),
(49, 'pakistan_guns_SMG'),
(50, 'pakistan_guns_smg_UMP9'),
(51, 'pakistan_guns_smg_Vector'),
(52, 'pakistan_guns_smg_UZI'),
(53, 'Japan'),
(54, 'japan_Nudles'),
(55, 'turkey_Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `CountryName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `CountryName`) VALUES
(1, 'Bangladesh'),
(6, 'Chaina'),
(4, 'Indonesia'),
(7, 'Japan'),
(3, 'Pakistan'),
(2, 'Turkey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allitem`
--
ALTER TABLE `allitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CountryName` (`CountryName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allitem`
--
ALTER TABLE `allitem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
