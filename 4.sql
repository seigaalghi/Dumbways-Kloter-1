-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 04:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `importir_tb`
--

CREATE TABLE `importir_tb` (
  `id_importir` int(11) NOT NULL,
  `name_importir` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `importir_tb`
--

INSERT INTO `importir_tb` (`id_importir`, `name_importir`, `address`, `phone`) VALUES
(1, 'PT Heritage Bicycle', '2959 N Lincoln Ave Chicago, IL 60657', '(773)245-3005'),
(2, 'Bikers Mt Nyc', 'Jl. Kundangan No.14 Lampung', '082175410203'),
(3, 'Sepeda Expert Jakarta', 'Jl. Sinar Jaya No.14, Jakarta Pusat', '08829399110'),
(4, 'PT Semoga Sukses', 'Jl. Balap Sepeda No.20 Tanjung Pinang', '082176756676'),
(5, 'PT Anggrek Mayang', 'Jl. Raden Ki Ajo No.65 Bandung', '085656877865'),
(7, 'Sepeda Sampurna 2', 'Jalan Merdeka No 18 Jaksel', '088239419921'),
(8, 'Sepeda Sampurna 2', 'Jalan Merdeka No 18 Jaksel', '088239419921'),
(9, 'Slogways n co', 'Jalan negara no 22 Palembang', '082344518854'),
(10, 'Juragan Sepda Com', 'Jalan Pondok Indah No.2', '089288944231'),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk_tb`
--

CREATE TABLE `produk_tb` (
  `id_sepeda` int(11) NOT NULL,
  `name_sepeda` varchar(50) NOT NULL,
  `importir_id` int(11) NOT NULL,
  `photo` varchar(5000) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_tb`
--

INSERT INTO `produk_tb` (`id_sepeda`, `name_sepeda`, `importir_id`, `photo`, `qty`, `price`) VALUES
(1, 'The Chief', 4, 'thechief.png', 8, 3200000),
(18, 'Kenwood Mk.II', 5, 'kenwood.png', 14, 12000000),
(20, 'Mt. Bike Golden P', 1, 'mtbike.png', 7, 11000000),
(21, 'Ontel Indonesia 1948', 3, 'ontel.png', 3, 40000000),
(22, 'Phantom Thief', 4, 'phantomthief.png', 5, 10000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `importir_tb`
--
ALTER TABLE `importir_tb`
  ADD PRIMARY KEY (`id_importir`);

--
-- Indexes for table `produk_tb`
--
ALTER TABLE `produk_tb`
  ADD PRIMARY KEY (`id_sepeda`),
  ADD KEY `importir_id` (`importir_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `importir_tb`
--
ALTER TABLE `importir_tb`
  MODIFY `id_importir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produk_tb`
--
ALTER TABLE `produk_tb`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
