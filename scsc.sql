-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 01:53 AM
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
(3, 'logo', 'stisla-fill.svg', 'logo perusahaan\r\n'),
(4, 'email', 'scscofficial@scsc.com', 'Email official perusahaan'),
(5, 'telp', '+62 8953 2692 0220', 'Number telepon perusahaan'),
(6, 'alamat', 'Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 'Alamat Office Perusahaan'),
(7, 'twitter', 'https://twitter.com/excel_shelby', 'social media twitter official'),
(8, 'facebook', 'https://www.facebook.com/wahyu.punk.988', 'social media facebook official'),
(9, 'instagram', 'https://www.instagram.com/w.roch19/', 'social media instagram official'),
(10, 'skype', '#', 'social media skype official'),
(11, 'linkedin', 'https://www.linkedin.com/in/wahyu-rochman-bantoro/', 'social media linkedin official');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
