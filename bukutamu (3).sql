-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '', '$2y$10$.dItXJ1e5itI.agtX.Yjh.qOPQDgVJbO25ijBPgo7Ak4YL8mHadwG'),
(3, '', '$2y$10$VTgYjqddA9Bf2IgiicmRS.KLC45TN0BdyXh7YN.NYYI40CnCqYYA6'),
(4, '', '$2y$10$Xv6isv3.lsle.yH3CU4pCuGchVKdAr9c6ervLqxNxeTu1j.lb9H6q'),
(5, '', '$2y$10$CPf7h5d8BSJdBt.vhLV6KOyKZ1PDe6o1vaLC5O0p6xGZOZeK37TRa'),
(6, '', '$2y$10$RSZ4jFh1zNGkZjKpLYSUjOQD9unRZAkzPomr8Gq0P3XYUV1nmmzHi');

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` longblob NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `asal` text NOT NULL,
  `nomor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`id_magang`, `nama`, `foto`, `jenis_kelamin`, `asal`, `nomor`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `narasumber`
--

CREATE TABLE `narasumber` (
  `id_narasumber` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` longblob NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `acara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` longblob NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `foto`, `nomor`, `jenis_kelamin`, `tanggal`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `narasumber`
--
ALTER TABLE `narasumber`
  ADD PRIMARY KEY (`id_narasumber`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `narasumber`
--
ALTER TABLE `narasumber`
  MODIFY `id_narasumber` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;