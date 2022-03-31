-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 05:00 AM
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
-- Database: `fanani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_143`
--

CREATE TABLE `tbl_143` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_143`
--

INSERT INTO `tbl_143` (`nim`, `nama`, `alamat`, `semester`) VALUES
(2004, 'Ahmad Fanani', 'Jombang', 3),
(2005, 'Yoga Tirta', 'Mojokerto', 2),
(2006, 'Mahesa Firdaus Ahmad', 'Lamongan', 6),
(2007, 'Doni Salmanan', 'Jakarta', 6),
(2010, 'Nicola Yanni', 'Sidoarjo', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_143`
--
ALTER TABLE `tbl_143`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
