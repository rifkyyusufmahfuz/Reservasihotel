-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 10:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasihotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `nomor` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `usia` varchar(2) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nokamar` varchar(5) NOT NULL,
  `jam_checkin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`nomor`, `nik`, `nama_tamu`, `jenis_kelamin`, `usia`, `no_tlp`, `email`, `nokamar`, `jam_checkin`) VALUES
(2, '326546777668467', 'Rifky YM', 'Laki-Laki', '22', '0895333074521', 'rifkyyusufmahfud@gmail.com', 'a01', '13:00 WIB'),
(3, '324354345773654', 'Yusuf', 'Laki-Laki', '21', '083817172545', 'rifkyyu@yahoo.com', 'A21', '14:00 WIB'),
(4, '324354345773654', 'Rifky Yusuf Mahfuz', 'Laki-Laki', '22', '0895333074521', 'rifkyyusufmahfud@gmail.com', 'A21', '14:00 WIB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
