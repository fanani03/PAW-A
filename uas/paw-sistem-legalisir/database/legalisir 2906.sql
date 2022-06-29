-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 09:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalisir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`, `nip`, `alamat`) VALUES
(1, 'admin1', '123', 'A1 - Galih Pamungkas', '19041292', 'Jombang'),
(2, 'admin2', '1234', 'A2 - Fery Ananda', '192038123', 'Lamongan'),
(4, 'supersu', 'supersu', 'Ahmad Fanani', '9283129371', 'Jombang'),
(6, 'admin3', '12345', 'A3 - Gilang Mahendra', '23432513', 'Jombang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpan`
--

CREATE TABLE `tbl_simpan` (
  `id_simpan` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `id_transaksi` int(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `no_sertifikat` varchar(200) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_simpan`
--

INSERT INTO `tbl_simpan` (`id_simpan`, `nis`, `id_transaksi`, `nama_file`, `no_sertifikat`, `berkas`) VALUES
(8, 2001, 37, 'Ijazah', '934002340233023', 'IJAZAH FANANI sertifikat.pdf'),
(9, 2002, 38, 'skhun', '0384857393202383', 'SKHUN YOGA sertifikat.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `nis`, `id_admin`, `nama`, `nama_file`, `status`, `berkas`) VALUES
(37, 2001, 1, 'Ahmad Fanani', 'Ijazah', 'selesai', '2001-IJAZAH.pdf'),
(38, 2002, 2, 'Yoga Tirta', 'skhun', 'selesai', '2002-skhun.pdf'),
(39, 2003, NULL, 'Teguh Budi Prasetya', 'Ijazah', 'pending', '2003-ijazahku.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nis` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nis`, `username`, `password`, `nama`, `alamat`) VALUES
(2001, 'fanani', '123', 'Ahmad Fanani', 'Jombang'),
(2002, 'yoga', '1234', 'Yoga Tirta', 'Lamongan'),
(2003, 'teguh', '123', 'Teguh Budi Prasetya', 'Jombang'),
(2004, 'nico', '123', 'Nicola Yanni', 'Jombang'),
(2005, 'hesa', '123', 'Mahesa Firdaus', 'Lamongan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  ADD PRIMARY KEY (`id_simpan`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `tbl_transaksi_ibfk_2` (`nis`),
  ADD KEY `tbl_transaksi_ibfk_1` (`id_admin`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  MODIFY `id_simpan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  ADD CONSTRAINT `tbl_simpan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_simpan_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tbl_user` (`nis`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tbl_user` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
