-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2024 at 07:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eventventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `eo`
--

CREATE TABLE `eo` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eo`
--

INSERT INTO `eo` (`id`, `username`, `password`) VALUES
(1, 'eo1', '123'),
(2, 'eo2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(20) DEFAULT NULL,
  `tgl_mulai` varchar(15) DEFAULT NULL,
  `tgl_selesai` varchar(15) DEFAULT NULL,
  `jam` varchar(15) DEFAULT NULL,
  `kategori` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat_vanue` varchar(70) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `poster` varchar(70) NOT NULL,
  `tipe_booth` varchar(20) NOT NULL,
  `ukuran_booth` varchar(20) NOT NULL,
  `harga` int(30) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `tgl_mulai`, `tgl_selesai`, `jam`, `kategori`, `lokasi`, `alamat_vanue`, `deskripsi_event`, `poster`, `tipe_booth`, `ukuran_booth`, `harga`, `fasilitas`) VALUES
(6, 'Matahati', '12/12/12', '12/12/12', '12.00', 'Festifal', 'DIY', 'daksjfh akjsdhfak kajfhak', 'ya gitu deh gatau capek', 'sadjfak.jpg', 'premium', '1212', 100000, 'meja kursi'),
(7, 'Bulan', '12/12/12', '13/12/12', '10.00-11.00', 'Festifal', 'Lapangan Maguwo', 'Jalan Jenderan Sudirman', 'Festifal Rakyat Semua Golongan', 'avatar1.png', 'premium', '3x3', 123000, 'meja meja kuris');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_bisnis` varchar(20) NOT NULL,
  `kategori_bisnis` varchar(20) NOT NULL,
  `deskripsi_bisnis` text NOT NULL,
  `nama` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_bisnis`, `kategori_bisnis`, `deskripsi_bisnis`, `nama`, `telephone`, `email`, `pembayaran`, `harga`) VALUES
(1, 'bisnis cakue enak', 'Makanan', 'Jualan beragam rasa cakue', 'Dian Sastro', '08554478965', 'hikmalstudent@gmail.com', 'virtual_account', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'userhikmal', '123'),
(2, 'EOhikmal', '123'),
(3, 'user1', 'adik'),
(4, 'EO1', 'kakak'),
(5, 'hikmalbanget', '444'),
(6, 'hikmalaja', '444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eo`
--
ALTER TABLE `eo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eo`
--
ALTER TABLE `eo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
