-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 07:54 AM
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
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(45) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang_keluar`
--

INSERT INTO `data_barang_keluar` (`tanggal`, `id_barang`, `nama_barang`, `kategori_barang`, `jumlah_barang`, `harga_barang`) VALUES
('2023-02-22', 1, 'Indomie Goreng', 'Makanan Instan', 50, '125000');

-- --------------------------------------------------------

--
-- Table structure for table `data_barang_masuk`
--

CREATE TABLE `data_barang_masuk` (
  `tanggal` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(45) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang_masuk`
--

INSERT INTO `data_barang_masuk` (`tanggal`, `id_barang`, `nama_barang`, `kategori_barang`, `jumlah_barang`, `harga_barang`) VALUES
('2023-02-22', 1, 'Indomie Goreng', 'Makanan Instan', 100, '250000');

-- --------------------------------------------------------

--
-- Table structure for table `data_stock`
--

CREATE TABLE `data_stock` (
  `tanggal` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `kategori_barang` varchar(45) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `status_barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_stock`
--

INSERT INTO `data_stock` (`tanggal`, `id_barang`, `nama_barang`, `kategori_barang`, `jumlah_barang`, `status_barang`) VALUES
('0000-00-00', 1, 'Indomie Goreng', 'Makanan Instan', 20, 'Tersedia'),
('2023-02-22', 3, 'Quacker Oats Instan 250 Gr', 'Makanan Instan', 20, 'Tersedia'),
('2023-02-22', 4, 'Indomie Soto Ayam', 'Makanan Instan', 100, 'Tersedia'),
('2023-02-22', 5, 'Panadol Merah', 'Obat - Obatan', 100, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `data_supplier`
--

CREATE TABLE `data_supplier` (
  `tanggal` date NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) NOT NULL,
  `alamat_supplier` varchar(45) NOT NULL,
  `telp_supplier` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_supplier`
--

INSERT INTO `data_supplier` (`tanggal`, `id_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`) VALUES
('2023-02-22', 1, 'PT. Unilever Indonesia', 'Jln. Medan Merdeka Barat', 2147483647);

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
('2023-02-22', 9, 'Ahmad', 'ahmad@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang_keluar`
--
ALTER TABLE `data_barang_keluar`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_barang_masuk`
--
ALTER TABLE `data_barang_masuk`
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_barang_masuk`
--
ALTER TABLE `data_barang_masuk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_stock`
--
ALTER TABLE `data_stock`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_supplier`
--
ALTER TABLE `data_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
