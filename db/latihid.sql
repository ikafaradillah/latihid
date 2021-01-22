-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 02:31 AM
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
-- Database: `latihid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modul`
--

CREATE TABLE `tbl_modul` (
  `id_modul` int(10) NOT NULL,
  `nama_modul` varchar(100) NOT NULL,
  `harga_modul` varchar(100) NOT NULL,
  `kategori_modul` varchar(100) NOT NULL,
  `foto_modul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_modul`
--

INSERT INTO `tbl_modul` (`id_modul`, `nama_modul`, `harga_modul`, `kategori_modul`, `foto_modul`) VALUES
(1, 'Kerja Sama Tim Dalam Kesuksesan UMKM', 'Gratis', 'Kelas Populer', 'img_popular_class_1.jpg'),
(2, 'Mencari Modal Untuk Memulai Usaha', 'Gratis', 'Kelas Populer', 'img_popular_class_2.png'),
(3, 'Manajemen Produk: Mengubah Ide Kreatif Menjadi Produk Jadi', 'Gratis', 'Kelas Populer', 'img_popular_class_3.jpg'),
(4, 'Social Media Marketing', 'Gratis', 'Kelas Populer', 'img_popular_class_4.png'),
(5, 'Mengenal Business Model Canvas', 'Gratis', 'Kelas Populer', 'img_popular_class_5.jpg'),
(6, 'Copywriting Untuk Meningkatkan Penjualan Bisnis Kita', 'Gratis', 'Kelas Terbaru', 'img_new_class_1.png'),
(7, 'Pentingnya Izin Usaha Bagi UMKM Indonesia', 'Gratis', 'Kelas Terbaru', 'img_new_class_2.png'),
(8, 'Membangun Loyalitas Pegawai UMKM', 'Gratis', 'Kelas Terbaru', 'img_new_class_3.png'),
(9, 'Membangun Loyalitas Pelanggan', 'Gratis', 'Kelas Terbaru', 'img_new_class_4.jpg'),
(10, 'Strategi Pemasaran Untuk UMKM', '21.000', 'Kelas Expert', 'img_expert_class_1.png'),
(11, 'Memahami Analisa Rantai Nilai UMKM', '21.000', 'Kelas Expert', 'img_expert_class_2.png'),
(12, 'Memahami Business Model Canvas Untuk UMKM', '21.000', 'Kelas Expert', 'img_expert_class_3.png'),
(13, 'Menemukan Ide dan Perancanaan di Desa', '21.000', 'Kelas Expert', 'img_expert_class_4.png'),
(14, 'Memahami Business Model Canvas Untuk UMKM', 'Gratis', 'Kelas Bisnis', 'img_sb_1.jpg'),
(15, '3 Ide Bisnis di Masa New Normal', 'Gratis', 'Kelas Bisnis', 'img_sb_2.jpg'),
(16, 'Pentingnya Izin Usaha Bagi UMKM Indonesia', 'Gratis', 'Kelas Bisnis', 'img_sb_3.png'),
(17, 'Dasar-Dasar Sistem Dalam Memulai UMKM', 'Gratis', 'Kelas Bisnis', 'img_sb_4.jpg'),
(18, 'Memulai Usaha Dari Modal 0', 'Gratis', 'Kelas Bisnis', 'img_sb_5.jpg'),
(19, 'Optimalisasi Marketing Ads Untuk Berbisnis', 'Gratis', 'Kelas Pemasaran', 'img_mc_1.png'),
(20, 'Berjualan di Instagram', 'Gratis', 'Kelas Pemasaran', 'img_mc_2.jpg'),
(21, 'Marketing Mix', 'Gratis', 'Kelas Pemasaran', 'img_mc_3.jpg'),
(22, 'Buat Website Bisnismu', 'Gratis', 'Kelas Pemasaran', 'img_mc_4.png'),
(23, 'Design Sprint: 5 Langkah Menciptakan Inovasi', 'Gratis', 'Kelas Manajemen Operasional', 'img_om_1.png'),
(24, 'Membangung Loyalitas Pegawai UMKM', 'Gratis', 'Kelas Manajemen Operasional', 'img_om_2.png'),
(25, 'Rahasia Sukses Berjualan di Marketplace', 'Gratis', 'Kelas Manajemen Operasional', 'img_om_3.jpg'),
(26, 'Dasar-Dasar Manajemen SDM Untuk UMKM', 'Gratis', 'Kelas Manajemen Operasional', 'img_om_4.jpg'),
(27, 'Membangun Loyalitas Pelanggan', 'Gratis', 'Kelas Manajemen Operasional', 'img_om_5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_modul`
--
ALTER TABLE `tbl_modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_modul`
--
ALTER TABLE `tbl_modul`
  MODIFY `id_modul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
