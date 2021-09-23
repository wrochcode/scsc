-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 08:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mainsidebar`
--

CREATE TABLE `mainsidebar` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainsidebar`
--

INSERT INTO `mainsidebar` (`id`, `name`, `status`) VALUES
(1, 'General', 1),
(2, 'Transaksi', 1),
(3, 'Refreshing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `name`, `value`, `description`) VALUES
(1, 'title', 'Service Computer Semarang City', 'nama perusahaan'),
(2, 'singkatan', 'SCSC', 'singkatan nama perusahaan'),
(3, 'logo', 'stisla-fill.svg', 'logo perusahaan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `value`, `description`) VALUES
(1, 'CEO', 1, 'Pemimpin Perus'),
(2, 'Admin 1', 2, 'Pengelola admin 2'),
(3, 'Admin 2', 3, 'Pengelola invoice masuk'),
(4, 'Teknisi', 4, 'Teknisis dari Service Computer Semarang City'),
(5, 'User', 5, 'Pelanggan tercinta Service Computer Semarang City');

-- --------------------------------------------------------

--
-- Table structure for table `roleaccess`
--

CREATE TABLE `roleaccess` (
  `id` int(191) NOT NULL,
  `role` int(191) NOT NULL,
  `category` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `name`, `status`, `description`) VALUES
(1, 'Dashboard', 1, 'Halaman Utama pengguna'),
(2, 'Pemberitahuan', 1, 'Menampilkan pemberitahuan informasi dari admin'),
(3, 'Pesan', 0, 'Menampilkan pesan percakapan user dengan admin'),
(4, 'Akun', 1, 'View and Update data user'),
(5, 'Service', 1, 'Menampilkan transaksi dan riwayat status service user'),
(6, 'Item', 1, 'Menampilkan transaksi dan riwayat pembelian item service user'),
(7, 'Voucher', 0, 'Menampilkan voucher yang tersedia'),
(8, 'Game', 0, 'Memberikan game berguna dapat potongan harga dengan SC-point yang terkumpul');

-- --------------------------------------------------------

--
-- Table structure for table `sidebaradmin`
--

CREATE TABLE `sidebaradmin` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sidebarcategory`
--

CREATE TABLE `sidebarcategory` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent` int(191) NOT NULL,
  `child` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebarcategory`
--

INSERT INTO `sidebarcategory` (`id`, `name`, `parent`, `child`) VALUES
(1, 'General', 1, 1),
(2, 'General', 1, 2),
(3, 'General', 1, 3),
(4, 'Transaksi', 2, 4),
(5, 'Transaksi', 2, 5),
(6, 'Transaksi', 2, 6),
(7, 'Transaksi', 2, 7),
(8, 'Refreshing', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `telp` varchar(191) NOT NULL,
  `birthday` varchar(191) NOT NULL,
  `jobs` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `role` int(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `complete` int(191) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `photo`, `email`, `telp`, `birthday`, `jobs`, `gender`, `address`, `role`, `status`, `complete`, `password`) VALUES
(1, 'Wahyu Rochman Bantoro', '', '111201811229@mhs.dinus.ac.id', '', '', '', 'laki-laki', 'East Blue', 1, '', 0, 'wahyu123'),
(2, '', '', 'wahyurochman@scsc.com', '', '', '', '', '', 2, '', 0, 'tampan'),
(3, '', '', '111201811229@mhs', '', '', '', '', '', 2, '', 0, '827ccb0eea8a706c4c34a16891f84e7b'),
(4, '', '', 'pendekar@scsc.com', '', '', '', '', '', 2, '', 0, '20aef2ba0005706cd445b35b2e6510ec'),
(5, '', '', 'tampan@scsc.com', '', '', '', '', '', 2, '', 0, 'a0e6983146b63c23a662059b7032fffc'),
(6, '', '', 'terbaik@scsc.com', '', '', '', '', '', 2, '', 0, 'a0e6983146b63c23a662059b7032fffc'),
(7, '', '', 'wahyuu@scsc.com', '', '', '', '', '', 2, '', 0, '45d878598b47333448657dad155dc6db'),
(8, '', '', 'coba@scsc.com', '', '', '', '', '', 2, '', 0, 'c3ec0f7b054e729c5a716c8125839829'),
(9, '', '', 'coba2@scsc.com', '', '', '', '', '', 2, '', 0, 'ed68b744cf92725fd85bc9501022c4e0'),
(10, '', '', 'mantap@scsc.com', '', '', '', '', '', 2, '', 0, '32c9e71e866ecdbc93e497482aa6779f'),
(11, '', '', 'pria@scsc.com', '', '', '', '', '', 2, '', 0, '798d52ccc420831521d44bef52cc6415'),
(12, '', '', 'tampan@tampan.com', '', '', '', '', '', 2, '', 0, 'a0e6983146b63c23a662059b7032fffc'),
(13, '', '', 'dummy@scsc.com', '', '', '', '', '', 5, '', 0, '275876e34cf609db118f3d84b799a790');

-- --------------------------------------------------------

--
-- Table structure for table `user login history`
--

CREATE TABLE `user login history` (
  `id` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `time` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` int(191) NOT NULL,
  `id_cetgory` int(191) NOT NULL,
  `value` int(191) NOT NULL,
  `describtion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainsidebar`
--
ALTER TABLE `mainsidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roleaccess`
--
ALTER TABLE `roleaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebarcategory`
--
ALTER TABLE `sidebarcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user login history`
--
ALTER TABLE `user login history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainsidebar`
--
ALTER TABLE `mainsidebar`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roleaccess`
--
ALTER TABLE `roleaccess`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebarcategory`
--
ALTER TABLE `sidebarcategory`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user login history`
--
ALTER TABLE `user login history`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
