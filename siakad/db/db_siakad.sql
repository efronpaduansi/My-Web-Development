-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2021 at 09:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbWeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbMahasiswa`
--

CREATE TABLE `tbMahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbMahasiswa`
--

INSERT INTO `tbMahasiswa` (`id`, `nim`, `nama`, `kelas`, `kehadiran`, `tugas`, `uts`, `uas`) VALUES
(6, '181021400159', 'EFRONIUS PADUANSI', '06TPLP016', 10, 88, 70, 85);

-- --------------------------------------------------------

--
-- Table structure for table `tbMatkul`
--

CREATE TABLE `tbMatkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `namaMatkul` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbMatkul`
--

INSERT INTO `tbMatkul` (`id`, `kode`, `namaMatkul`, `kelas`, `sks`) VALUES
(1, 'TPL0373', 'PEMROGRAMAN WEB 2', '06TPLP016', 2),
(2, 'TPL0362', 'KOMPUTER GRAFIK I', '06TPLP016', 2),
(3, 'TPL0422', 'KERJA PRAKTEK', '06TPLP016', 2),
(4, 'TPL0412', 'TEKNIK KOMPILASI', '06TPLP016', 2),
(5, 'TPL0434', 'SISTEM INFORMASI MANAJEMEN', '06TPLP016', 3),
(6, 'TPL0365', 'MOBILE PROGRAMMING', '06TPLP016', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `level`) VALUES
(1, 'Dosen', 'dosen', 'dosen2021', 'dosen'),
(3, 'Mahasiswa', 'mahasiswa', 'mhs2021', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbMahasiswa`
--
ALTER TABLE `tbMahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbMatkul`
--
ALTER TABLE `tbMatkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbMahasiswa`
--
ALTER TABLE `tbMahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbMatkul`
--
ALTER TABLE `tbMatkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
