-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 12:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang_keluar`
--

CREATE TABLE `data_barang_keluar` (
  `tanggal` date NOT NULL,
  `id_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_barang_masuk`
--

CREATE TABLE `data_barang_masuk` (
  `tanggal` date NOT NULL,
  `id_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang_masuk`
--

INSERT INTO `data_barang_masuk` (`tanggal`, `id_masuk`, `id_barang`, `jumlah_barang`, `harga_barang`) VALUES
('2023-02-21', 8, 1, 5, '250000'),
('2023-02-23', 9, 7, 20, '100000');

-- --------------------------------------------------------

--
-- Table structure for table `data_stock`
--

CREATE TABLE `data_stock` (
  `tanggal` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `kategori_barang` varchar(45) NOT NULL,
  `jumlah_stock` int(11) NOT NULL,
  `status_barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_stock`
--

INSERT INTO `data_stock` (`tanggal`, `id_barang`, `nama_barang`, `kategori_barang`, `jumlah_stock`, `status_barang`) VALUES
('2023-02-22', 4, 'Indomie Soto Ayam', 'Makanan Instan', 100, 'Tersedia'),
('2023-02-22', 5, 'Panadol Merah', 'Obat - Obatan', 10, 'Tersedia'),
('2023-02-22', 6, 'Energen Sachet', 'Makanan Ringan', 20, 'Tersedia'),
('2023-02-23', 8, 'Quacker Oats', 'Makanan Instan', 190, 'Tersedia'),
('2023-02-23', 12, 'Tolak Angin Cair', 'Obat - Obatan', 15, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `data_supplier`
--

CREATE TABLE `data_supplier` (
  `tanggal` date NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) NOT NULL,
  `alamat_supplier` varchar(45) NOT NULL,
  `telp_supplier` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_supplier`
--

INSERT INTO `data_supplier` (`tanggal`, `id_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`) VALUES
('2023-02-23', 10, 'PT. Atong Jasa', 'Apa Aja', '02188424121');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `account_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`tanggal`, `id_user`, `username`, `email`, `password`, `account_type`) VALUES
('2023-02-22', 1, 'Andryan', 'andryan123@gmail.com', '12345678', 'Super Admin'),
('2023-02-23', 13, 'User', 'user@gmail.com', '12345678', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang_keluar`
--
ALTER TABLE `data_barang_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `data_barang_masuk`
--
ALTER TABLE `data_barang_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `data_stock`
--
ALTER TABLE `data_stock`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang_keluar`
--
ALTER TABLE `data_barang_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_barang_masuk`
--
ALTER TABLE `data_barang_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_stock`
--
ALTER TABLE `data_stock`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_supplier`
--
ALTER TABLE `data_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
