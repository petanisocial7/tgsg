-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbon`
--

CREATE TABLE `carbon` (
  `id` int(11) NOT NULL,
  `kendaraan_pelanggan_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `nama_part` varchar(255) NOT NULL,
  `jenis_motif` varchar(255) NOT NULL,
  `harga_motif` int(11) NOT NULL,
  `panjang_part` int(11) NOT NULL,
  `lebar_part` int(11) NOT NULL,
  `biaya_carbon` float NOT NULL,
  `nama_part2` varchar(255) DEFAULT NULL,
  `jenis_motif2` varchar(255) DEFAULT NULL,
  `harga_motif2` int(11) DEFAULT NULL,
  `panjang_part2` int(11) DEFAULT NULL,
  `lebar_part2` int(11) DEFAULT NULL,
  `biaya_carbon2` float DEFAULT NULL,
  `nama_part3` varchar(255) DEFAULT NULL,
  `jenis_motif3` varchar(255) DEFAULT NULL,
  `harga_motif3` int(11) DEFAULT NULL,
  `panjang_part3` int(11) DEFAULT NULL,
  `lebar_part3` int(11) DEFAULT NULL,
  `biaya_carbon3` float DEFAULT NULL,
  `nama_part4` varchar(255) DEFAULT NULL,
  `jenis_motif4` varchar(255) DEFAULT NULL,
  `harga_motif4` int(11) DEFAULT NULL,
  `panjang_part4` int(11) DEFAULT NULL,
  `lebar_part4` int(11) DEFAULT NULL,
  `biaya_carbon4` float DEFAULT NULL,
  `nama_part5` varchar(255) DEFAULT NULL,
  `jenis_motif5` varchar(255) DEFAULT NULL,
  `harga_motif5` int(11) DEFAULT NULL,
  `panjang_part5` int(11) DEFAULT NULL,
  `lebar_part5` int(11) DEFAULT NULL,
  `biaya_carbon5` float DEFAULT NULL,
  `nama_part6` varchar(255) DEFAULT NULL,
  `jenis_motif6` varchar(255) DEFAULT NULL,
  `harga_motif6` int(11) DEFAULT NULL,
  `panjang_part6` int(11) DEFAULT NULL,
  `lebar_part6` int(11) DEFAULT NULL,
  `biaya_carbon6` float DEFAULT NULL,
  `nama_part7` varchar(255) DEFAULT NULL,
  `jenis_motif7` varchar(255) DEFAULT NULL,
  `harga_motif7` int(11) DEFAULT NULL,
  `panjang_part7` int(11) DEFAULT NULL,
  `lebar_part7` int(11) DEFAULT NULL,
  `biaya_carbon7` float DEFAULT NULL,
  `nama_part8` varchar(255) DEFAULT NULL,
  `jenis_motif8` varchar(255) DEFAULT NULL,
  `harga_motif8` int(11) DEFAULT NULL,
  `panjang_part8` int(11) DEFAULT NULL,
  `lebar_part8` int(11) DEFAULT NULL,
  `biaya_carbon8` float DEFAULT NULL,
  `nama_part9` varchar(255) DEFAULT NULL,
  `jenis_motif9` varchar(255) DEFAULT NULL,
  `harga_motif9` int(11) DEFAULT NULL,
  `panjang_part9` int(11) DEFAULT NULL,
  `lebar_part9` int(11) DEFAULT NULL,
  `biaya_carbon9` float DEFAULT NULL,
  `nama_part10` varchar(255) DEFAULT NULL,
  `jenis_motif10` varchar(255) DEFAULT NULL,
  `harga_motif10` int(11) DEFAULT NULL,
  `panjang_part10` int(11) DEFAULT NULL,
  `lebar_part10` int(11) DEFAULT NULL,
  `biaya_carbon10` float DEFAULT NULL,
  `biaya_tambahan` float DEFAULT NULL,
  `total_biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `carbon`
--

INSERT INTO `carbon` (`id`, `kendaraan_pelanggan_id`, `pelanggan_id`, `nama_part`, `jenis_motif`, `harga_motif`, `panjang_part`, `lebar_part`, `biaya_carbon`, `nama_part2`, `jenis_motif2`, `harga_motif2`, `panjang_part2`, `lebar_part2`, `biaya_carbon2`, `nama_part3`, `jenis_motif3`, `harga_motif3`, `panjang_part3`, `lebar_part3`, `biaya_carbon3`, `nama_part4`, `jenis_motif4`, `harga_motif4`, `panjang_part4`, `lebar_part4`, `biaya_carbon4`, `nama_part5`, `jenis_motif5`, `harga_motif5`, `panjang_part5`, `lebar_part5`, `biaya_carbon5`, `nama_part6`, `jenis_motif6`, `harga_motif6`, `panjang_part6`, `lebar_part6`, `biaya_carbon6`, `nama_part7`, `jenis_motif7`, `harga_motif7`, `panjang_part7`, `lebar_part7`, `biaya_carbon7`, `nama_part8`, `jenis_motif8`, `harga_motif8`, `panjang_part8`, `lebar_part8`, `biaya_carbon8`, `nama_part9`, `jenis_motif9`, `harga_motif9`, `panjang_part9`, `lebar_part9`, `biaya_carbon9`, `nama_part10`, `jenis_motif10`, `harga_motif10`, `panjang_part10`, `lebar_part10`, `biaya_carbon10`, `biaya_tambahan`, `total_biaya`) VALUES
(1, 7, 2, 'Batok', 'Twill 220 gsm', 220, 2, 2, 880, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 10, 890);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_pelanggan`
--

CREATE TABLE `kendaraan_pelanggan` (
  `id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `nama_kendaraan` varchar(255) DEFAULT NULL,
  `tahun_kendaraan` year(4) DEFAULT NULL,
  `plat_kendaraan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kendaraan_pelanggan`
--

INSERT INTO `kendaraan_pelanggan` (`id`, `pelanggan_id`, `nama_kendaraan`, `tahun_kendaraan`, `plat_kendaraan`) VALUES
(6, 2, 'Yamaha Vario 160', '2023', 'BK 51 DIL'),
(7, 5, 'Yamaha Supra 175', '2000', 'BK O TAN'),
(8, 6, '', '2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `nomor_telepon`) VALUES
(1, 'Fadil Hanafi', 'Jln. Enggang No.64', '0812 6226 8069'),
(2, 'Duplexoona', 'Jln. Mars', '0811 2233 4455'),
(4, 'Arep Ngolah', 'Jln. Sambu', '0812 66 555 442'),
(5, 'Satria Harapan', 'Jln. Langgar No.80', '081213123123'),
(6, 'sad', 'sad', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `repaint`
--

CREATE TABLE `repaint` (
  `id` int(11) NOT NULL,
  `kendaraan_pelanggan_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `nama_part` varchar(255) NOT NULL,
  `nama_warna` varchar(255) NOT NULL,
  `biaya_repaint` float NOT NULL,
  `biaya_tambahan` float NOT NULL,
  `total_biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `repaint`
--

INSERT INTO `repaint` (`id`, `kendaraan_pelanggan_id`, `pelanggan_id`, `nama_part`, `nama_warna`, `biaya_repaint`, `biaya_tambahan`, `total_biaya`) VALUES
(1, 6, 2, 'Body', 'Blue', 10, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_jasa`
--

CREATE TABLE `rincian_jasa` (
  `id` int(11) NOT NULL,
  `kendaraan_pelanggan_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `jenis_jasa` varchar(50) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_diterima` date DEFAULT NULL,
  `estimasi_siap` date DEFAULT NULL,
  `status_pengerjaan` varchar(50) DEFAULT NULL,
  `status_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rincian_jasa`
--

INSERT INTO `rincian_jasa` (`id`, `kendaraan_pelanggan_id`, `pelanggan_id`, `jenis_jasa`, `tanggal_dibuat`, `tanggal_diterima`, `estimasi_siap`, `status_pengerjaan`, `status_barang`) VALUES
(6, 7, 2, 'Carbon', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '13', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbon`
--
ALTER TABLE `carbon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `kendaraan_pelanggan_id` (`kendaraan_pelanggan_id`);

--
-- Indexes for table `kendaraan_pelanggan`
--
ALTER TABLE `kendaraan_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repaint`
--
ALTER TABLE `repaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `kendaraan_pelanggan_id` (`kendaraan_pelanggan_id`);

--
-- Indexes for table `rincian_jasa`
--
ALTER TABLE `rincian_jasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `kendaraan_pelanggan_id` (`kendaraan_pelanggan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbon`
--
ALTER TABLE `carbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan_pelanggan`
--
ALTER TABLE `kendaraan_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `repaint`
--
ALTER TABLE `repaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rincian_jasa`
--
ALTER TABLE `rincian_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carbon`
--
ALTER TABLE `carbon`
  ADD CONSTRAINT `carbon_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carbon_ibfk_2` FOREIGN KEY (`kendaraan_pelanggan_id`) REFERENCES `kendaraan_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kendaraan_pelanggan`
--
ALTER TABLE `kendaraan_pelanggan`
  ADD CONSTRAINT `kendaraan_pelanggan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `repaint`
--
ALTER TABLE `repaint`
  ADD CONSTRAINT `repaint_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repaint_ibfk_2` FOREIGN KEY (`kendaraan_pelanggan_id`) REFERENCES `kendaraan_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_jasa`
--
ALTER TABLE `rincian_jasa`
  ADD CONSTRAINT `rincian_jasa_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rincian_jasa_ibfk_2` FOREIGN KEY (`kendaraan_pelanggan_id`) REFERENCES `kendaraan_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
