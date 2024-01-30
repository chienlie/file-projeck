-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantorpolisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_brg`
--

CREATE TABLE `data_brg` (
  `tnggl_bln_thn` int(11) NOT NULL,
  `code_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jns_brg` varchar(255) NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `keadaan_brg` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_brg`
--

INSERT INTO `data_brg` (`tnggl_bln_thn`, `code_brg`, `nama_brg`, `jns_brg`, `jumlah_brg`, `harga_brg`, `keadaan_brg`, `keterangan`) VALUES
(12082009, 4, 'Jam Dinding', 'Sekunder', 12, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 5, 'Sapu\r\n\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 6, 'Kipas Angin\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 7, 'Lampu', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 8, 'AC', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 9, 'Speaker', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 10, 'Korden', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 11, 'Kaca', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 12, 'Lemari\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 13, 'rak \r\n\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 14, 'paku\r\n\r\n\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 15, 'celak albert\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 16, 'buku\r\n', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(12082009, 17, 'stop contack', 'Sekunder', 22, 300000, 'Baik', 'Beberapa meja mulai mengalami kerusakan'),
(1, 19, 'sabun', 'BESAR', 1, 1, '1', 'asdass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_brg`
--
ALTER TABLE `data_brg`
  ADD PRIMARY KEY (`code_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_brg`
--
ALTER TABLE `data_brg`
  MODIFY `code_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
