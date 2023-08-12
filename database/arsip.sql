-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 10:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_ptk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `tgl_keluar` datetime NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`id`, `nama_surat`, `tgl_keluar`, `no_surat`, `tgl_surat`, `kepada`, `perihal`, `file`) VALUES
(2, 'SURAT FAKULTAS PASCA', '2021-07-02 23:15:51', '128-PASCA-UNIMA', '2021-07-05', 'MAHASISWA PASCASARJANA', 'MAHASISWA PASCA', ''),
(9, 'RAPAT', '2021-07-08 06:55:00', '8-FATEK', '2021-07-01', 'unima', 'RAPAT', 'minahasa.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`id`, `nama_surat`, `tgl_masuk`, `pengirim`, `no_surat`, `tgl_surat`, `kepada`, `perihal`, `file`) VALUES
(2, 'SURAT PEMBERITAHUAN', '2021-08-01 23:12:17', 'DEKAN UNSRAT FT', '126-PASCA', '2021-07-14', 'DEKAN UNIMA FT', 'MAHASISWA', 'logo_unima1.jpg'),
(9, 'RAPAT DEKAN FAKULTAS FIP', '0000-00-00 00:00:00', 'DEKAN UNSRAT FIP', '128-PASCA', '2021-07-10', 'DEKAN UNIMA FT', 'RAPAT DEKAN', ''),
(10, 'KUNJUNGAN DEKAN FATEK', '0000-00-00 00:00:00', 'DEKAN UNSRAT FIP', '128-FATEK', '2021-07-02', 'DEKAN UNIMA FT', 'RAPAT DEKAN', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `alamat`, `username`, `password`, `pass`, `level`, `foto`) VALUES
(1, 'Glen Alvaro', 'glenalvaro65@gmail.com', 'Manado', '2001-02-04', 'Manado', 'admin', '0192023a7bbd73250516f069df18b500', 'admin123', 'admin', 'Glendy_Rongko3.jpg'),
(2, 'Priskila', 'priskabesi123@gmail.com', 'Tondano', '1999-07-17', 'Tondano', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user123', 'pegawai', 'kuser5.png'),
(8, 'Sandhika Galih 1', 'sandhikagalih@unpas.ac.id', 'Bandung  ', '2021-07-13', 'Bandung jln Pasundan', 'sandika', '202cb962ac59075b964b07152d234b70', '123', 'pegawai', 'profile11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
