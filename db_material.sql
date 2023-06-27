-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 09:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_material`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `Kode_Barang` varchar(5) NOT NULL,
  `Nama_Barang` varchar(25) NOT NULL,
  `Harga_Barang` int(10) NOT NULL,
  `Stok_Barang` int(4) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`Kode_Barang`, `Nama_Barang`, `Harga_Barang`, `Stok_Barang`, `foto`) VALUES
('A0001', 'Asbes 80x180', 33000, 100, 'asbes1.jpg'),
('A0002', 'Asbes 100x210', 60000, 70, 'asbes2.jpg'),
('A0003', 'Asbes 100x240', 67000, 100, 'asbes3.jpg'),
('A0004', 'Asbes 100x300', 85000, 50, 'asbes4.jpg'),
('B0001', 'Besi 6', 31000, 200, 'besi1.jpg'),
('B0002', 'Besi 8', 47000, 200, 'besi2.jpg'),
('B0003', 'Besi 10', 67000, 150, 'besi3.jpg'),
('B0004', 'Besi 12', 112000, 100, 'besi4.jpg'),
('BR001', 'Baja Ringan 0.75', 80000, 100, 'bajaringan1.jpg'),
('BR002', 'Baja Ringan 0.75 full', 100000, 120, 'bajaringan2.jpg'),
('BR003', 'Reng Baja 0.30', 29000, 50, 'rengbaja3.jpg'),
('BR004', 'Reng Baja 0.40', 34000, 100, 'rengbaja4.jpg'),
('BR005', 'Spandek', 310000, 20, 'spandek5.jpg'),
('BR006', 'Bondek 0.55', 595000, 40, 'bondek6.jpg'),
('BR007', 'Bondek 0.65', 645000, 30, 'bondek7.jpg'),
('P0001', 'Wavin ½”', 25000, 200, 'wavin1.jpg'),
('P0002', 'Wavin ¾”', 35000, 150, 'wavin2.jpg'),
('P0003', 'Wavin 1”', 47000, 50, 'wavin3.jpg'),
('P0004', 'Wavin 1 ½”', 54000, 40, 'wavin4.jpg'),
('P0005', 'Wavin 2”', 64000, 40, 'wavin5.jpg'),
('P0006', 'Wavin 2 ½”', 87000, 50, 'wavin6.jpg'),
('P0007', 'Wavin 3”', 112000, 30, 'wavin7.jpg'),
('P0008', 'Wavin 4”', 172000, 30, 'wavin8.jpg'),
('P1001', 'Power ½”', 20000, 100, 'power1.jpg'),
('P1002', 'Power ¾”', 27000, 100, 'power2.jpg'),
('P1003', 'Power 1”', 30000, 40, 'power3.jpg'),
('P1004', 'Power 1 ½”', 40000, 40, 'power4.jpg'),
('P1005', 'Power 2”', 52000, 30, 'power5.jpg'),
('P1006', 'Power  2 ½”', 66000, 20, 'power6.jpg'),
('P1007', 'Power 3”', 82000, 30, 'power7.jpg'),
('P1008', 'Power 4”', 110000, 40, 'power8.jpg'),
('P2001', 'Vero 3”', 65000, 20, 'vero1.jpg'),
('P2002', 'Vero 4”', 75000, 20, 'vero2.jpg'),
('y0002', 'tes', 1, 1, 'promosi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `pass` int(11) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `pass`, `role`) VALUES
('Khafid', 221351065, 'admin'),
('yusup', 221351083, 'admin'),
('Ziran', 221351165, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
