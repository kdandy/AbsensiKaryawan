-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 09:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buah_ht`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(100) NOT NULL,
  `id_users` int(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` time NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(100) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'HRD'),
(2, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(100) NOT NULL,
  `nama_role` varchar(100) NOT NULL,
  `deskripsi_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `deskripsi_role`) VALUES
(1, 'admin', 'mengatur seluruh sistem'),
(2, 'user', 'karyawan biasa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(100) NOT NULL,
  `id_role` int(100) NOT NULL,
  `id_divisi` int(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_tinggal` varchar(100) DEFAULT NULL,
  `gol_darah` varchar(50) DEFAULT NULL,
  `warga` varchar(50) DEFAULT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('true','false','') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_role`, `id_divisi`, `nik`, `email`, `username`, `alamat`, `no_tlp`, `agama`, `status_tinggal`, `gol_darah`, `warga`, `ktp`, `npwp`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '81828120109', 'rinda@gmail.com', 'Rinda', 'JL.PASAR SASAK CILEDUK JAYA', '0812812828', NULL, NULL, NULL, NULL, NULL, NULL, '2807266b476de7e2969e5f6669a225ac', 'true', '2021-10-24 16:46:10', '0000-00-00 00:00:00'),
(3, 2, 2, '2016148799', 'neiji@gmail.com', 'Neiji', 'JL.PANGUYUBUAN RAYA BARAT 2', '089182718188', NULL, NULL, NULL, NULL, NULL, NULL, '3d3eb22ed9e275a262a6eadded25eebc', 'true', '2021-10-26 07:59:42', NULL),
(4, 2, 2, '121212', 'njin@gmail.com', 'Njin', 'JL.PASURUAN BARAT', '0812818281', 'Islam', 'Orangtua', 'A', 'Indonesia', '01281821212', '8121827172', 'a889aa282c4e893bbe5ce82efda5804a', 'true', '2021-10-29 13:07:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_role_2` (`id_role`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
