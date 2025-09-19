-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2025 at 04:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry_orders`
--

CREATE TABLE `laundry_orders` (
  `id` int NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_laundry` varchar(50) NOT NULL,
  `isian_laundry` varchar(50) NOT NULL,
  `karakteristik` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `laundry_orders`
--

INSERT INTO `laundry_orders` (`id`, `nama_user`, `password`, `jenis_laundry`, `isian_laundry`, `karakteristik`, `keterangan`, `created_at`) VALUES
(1, 'aseimalak', '$2y$12$eLeIpOZ1Xb2mbog3VttRgOyGHGcGAcLkBAnzL12ObyziN3vqpz202', 'express', 'bed_cover', 'pewangi, express_service', 'yg wangi ya nok', '2025-09-19 04:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry_orders`
--
ALTER TABLE `laundry_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry_orders`
--
ALTER TABLE `laundry_orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
