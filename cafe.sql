-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 06:03 AM
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
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id_catering` int(10) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id_catering`, `nama_paket`, `isi`, `harga`) VALUES
(1, 'Paket Hemat', 'terdiri dari beberapa makanan seperti :', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id_chart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id_chart`, `id_user`, `id_menu`, `jumlah`, `harga`) VALUES
(1, 1, 2, 0, 0),
(2, 1, 2, 0, 0),
(3, 1, 2, 0, 0),
(4, 1, 2, 0, 0),
(5, 1, 2, 0, 0),
(6, 1, 2, 0, 0),
(7, 1, 2, 0, 0),
(8, 1, 2, 0, 0),
(9, 1, 2, 0, 0),
(10, 1, 2, 0, 0),
(11, 1, 2, 0, 0),
(12, 1, 2, 0, 0),
(13, 1, 2, 0, 0),
(14, 1, 2, 0, 0),
(15, 1, 2, 0, 0),
(16, 1, 2, 0, 0),
(17, 1, 2, 0, 0),
(18, 1, 2, 0, 0),
(19, 1, 2, 0, 0),
(20, 1, 2, 0, 0),
(21, 1, 2, 0, 0),
(22, 1, 2, 0, 0),
(23, 1, 2, 0, 0),
(24, 1, 2, 0, 0),
(25, 1, 2, 0, 0),
(26, 1, 2, 0, 0),
(27, 1, 2, 0, 0),
(28, 1, 3, 0, 0),
(29, 1, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `harga`, `gambar`) VALUES
(2, 'jagung', 10000, 'Thai-Tea.jpg'),
(3, 'es lilim', 10, 'wp3966695.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `nama`, `hp`) VALUES
(1, 'admin', 1234, 'admin', '081390657610'),
(3, 'user', 12345, 'iwan', '081390657610');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_catering`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id_chart`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id_catering` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
