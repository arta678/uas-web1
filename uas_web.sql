-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2019 at 08:43 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketegori_sampah`
--

CREATE TABLE `ketegori_sampah` (
  `id_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` varchar(50) NOT NULL,
  `nama_nasabah` varchar(100) DEFAULT NULL,
  `hp_nasabah` varchar(13) DEFAULT NULL,
  `alamat_nasabah` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama_nasabah`, `hp_nasabah`, `alamat_nasabah`, `keterangan`) VALUES
('1', 'arta', '083117345', 'karangasem', NULL),
('111', 'arta', '098765', 'asdasdsad', 'asdasds'),
('2', 'wiuna', '08347345', 'karanaem', 'dsjfkdsfd'),
('3', 'wiuna', '08347345', 'karanaem', 'dsjfkdsfd'),
('4', 'wiguna', '04857475', 'karangasd', 'sfhdfdffdfdf'),
('5', 'wiguna', '04857475', 'karangasd', 'sfhdfdffdfdf'),
('6', 'wiguna', '04857475', 'karangasd', 'sfhdfdffdfdf'),
('7', 'wiguna', '04857475', 'karangasd', 'sfhdfdffdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `penarikan_saldo`
--

CREATE TABLE `penarikan_saldo` (
  `id_penarikan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_tarik` double NOT NULL,
  `id_nasabah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengepul`
--

CREATE TABLE `pengepul` (
  `id` int(11) NOT NULL,
  `nama_pengepul` varchar(100) NOT NULL,
  `hp_pengepul` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_sampah` varchar(50) NOT NULL,
  `banyak_sampah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` varchar(50) NOT NULL,
  `nama_sampah` varchar(100) NOT NULL,
  `kategori_sampah` varchar(50) NOT NULL,
  `harga_datang` double NOT NULL,
  `harga_jemput` double NOT NULL,
  `harga_pengepul` double NOT NULL,
  `keterangan_sampah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `nama_sampah`, `kategori_sampah`, `harga_datang`, `harga_jemput`, `harga_pengepul`, `keterangan_sampah`) VALUES
('arta', 'plastik', 'Plastik', 200, 200, 200, ''),
('as', 'dsdfsdf', 'Kertas', 3, 6, 5, 'ere'),
('b4', 'pals', 'sfdsf', 5.4, 5.4, 5.4, '5.400'),
('bali', 'hdsjhdas', 'Kertas', 1, 1, 1, 'asd,sand'),
('cx', 'vcx', 'Kaca', 1, 1, 1, 'safsaf'),
('d2', 'sdsad', 'Plastik', 343, 4343, 43, '343434sdfd'),
('d25', 'sadasd', 'Plastik', 333, 333, 333, '45fdsf'),
('d3', 'sdsd', 'Kertas', 343, 3434, 3434, 'fsdfsdfdsgdfsg'),
('d4', 'hsjkdf', 'Plastik', 47, 45, 4534, 'jhdsjkhfkjds'),
('djs', 'd', 'Plastik', 3, 1, 1, 'ddsads'),
('ds', '9d', 'Kertas', 1, 1, 1, 'jsddsf'),
('f3', 'fsdf', 'Plastik', 34434, 3434, 3434, 'gfdgrfg'),
('f34', 'fsdf', 'Plastik', 34434, 3434, 3434, 'gfdgrfg'),
('f56', 'fsdf', 'Kertas', 34434, 3434, 3434, 'gfdgrfg'),
('fds', 'vcv', 'Logam', 1, 1, 1, 'vcv'),
('fs', 'fs', 'Kertas', 1, 1, 1, 'fd'),
('g33', 'fdf', 'Logam', 3353, 3435, 6456, 'gfdgdgfg'),
('G5', 'dfsdf', 'Plastik', 1, 1, 1, 'vdsvds'),
('gede', 'sampah', 'Plastik', 1, 1, 1, 'ini conotoh'),
('h3', 'fsdf', 'Kertas', 34434, 3434, 3434, 'gfdgrfg'),
('h43', 'sdjkasd', 'Kertas', 1, 1, 2, 'fsfsdf'),
('h4d3', 'sjkhsf', 'Kertas', 3, 4, 5, 'gdgfdg'),
('h5', 'fdsf', 'Logam', 34, 3434, 3535, 'dfdgdfgfdg'),
('h8', 'sdsad', 'Plastik', 343, 3434, 3434, 'fsdfsdfdsgdfsg'),
('heloo', 'sdhasjkd', 'Plastik', 454, 1, 1, 'fjksdfjsdkf'),
('hr2', 'dfksdfjkds', 'Kertas', 45, 4, 45, 'fdfskdjfksd'),
('Hs', 'Shajbs', 'Kertas', 5, 5, 6, 'Bsjshskssj\r\n'),
('j4', 'sdkas', 'Plastik', 4, 1, 1, 'jksfd'),
('j8', 'sdjkasd', 'Kertas', 3535, 35, 35, 'jssjdksjd'),
('K2', 'rdfdsf', 'Kertas', 34334, 355, 56, 'dfdsfds'),
('K6', 'esd', 'Kertas', 455, 688, 34, 'fhjsdkfhsdjk'),
('K8', 'dsfhdsj', 'Plastik', 500, 400, 300, 'sfsdjfkds'),
('l0', 'fhsjfhsdjf', 'Plastik', 55, 5656, 556, 'jksdhfjkdhfkj'),
('m23', 'rdfdsf', 'Plastik', 1, 1, 1, 'sdfdsf'),
('ms', 'sdd', 'Kertas', 1, 1, 1, 'cscsd'),
('n4', 'fdf', 'Plastik', 3, 1, 1, 'fdsf'),
('ndd', 'ns', 'Plastik', 1, 1, 1, 'm cas'),
('nsd', 'adalsk', 'Kertas', 1, 1, 1, 'sdasjkjaskd'),
('P1', 'Gelas Aqua', '', 300, 200, 500, 'Gelas Aqua Gelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas AquaGelas Aqua'),
('P2', 'Gelas Ale Ale', '', 300, 400, 600, ''),
('P3', 'Gelas Aqua Gelas ', '', 400, 200, 500, ''),
('P4', 'hjskds', 'Logam', 33, 54, 4545, 'ssdf'),
('P7', 'Gelas bir', 'Kertas', 300, 200, 300, 'hello sd'),
('P9', 'hjskds', 'Logam', 33, 54, 4545, 'ssdf'),
('psd', 'sjdkjs', 'Kertas', 1, 1, 1, 'fdsnfjksd'),
('s', 'ss', 'Plastik', 1, 1, 1, 'ss'),
('sc', 'xcx', 'Plastik', 1, 2, 1, 'hsdhs'),
('v3', 'ccasc', 'Plastik', 1, 1, 1, 'scsc');

-- --------------------------------------------------------

--
-- Table structure for table `setoran_sampah`
--

CREATE TABLE `setoran_sampah` (
  `id_setoran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_nasabah` varchar(50) NOT NULL,
  `id_sampah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketegori_sampah`
--
ALTER TABLE `ketegori_sampah`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `penarikan_saldo`
--
ALTER TABLE `penarikan_saldo`
  ADD PRIMARY KEY (`id_penarikan`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indexes for table `pengepul`
--
ALTER TABLE `pengepul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`),
  ADD KEY `id_kategori` (`kategori_sampah`);

--
-- Indexes for table `setoran_sampah`
--
ALTER TABLE `setoran_sampah`
  ADD PRIMARY KEY (`id_setoran`),
  ADD KEY `id_nasabah` (`id_nasabah`),
  ADD KEY `id_sampah` (`id_sampah`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penarikan_saldo`
--
ALTER TABLE `penarikan_saldo`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengepul`
--
ALTER TABLE `pengepul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setoran_sampah`
--
ALTER TABLE `setoran_sampah`
  MODIFY `id_setoran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ketegori_sampah`
--
ALTER TABLE `ketegori_sampah`
  ADD CONSTRAINT `ketegori_sampah_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `sampah` (`kategori_sampah`);

--
-- Constraints for table `penarikan_saldo`
--
ALTER TABLE `penarikan_saldo`
  ADD CONSTRAINT `penarikan_saldo_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`);

--
-- Constraints for table `setoran_sampah`
--
ALTER TABLE `setoran_sampah`
  ADD CONSTRAINT `setoran_sampah_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`) ON UPDATE CASCADE,
  ADD CONSTRAINT `setoran_sampah_ibfk_2` FOREIGN KEY (`id_sampah`) REFERENCES `sampah` (`id_sampah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
