-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2019 at 10:28 PM
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
  `id_nasabah` int(11) NOT NULL,
  `nama_nasabah` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `hp_nasabah` varchar(13) DEFAULT NULL,
  `alamat_nasabah` varchar(255) DEFAULT NULL,
  `saldo_nasabah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama_nasabah`, `jenis_kelamin`, `hp_nasabah`, `alamat_nasabah`, `saldo_nasabah`) VALUES
(129, 'arta', 'Perempuan', '34234324', 'karangasem', 2000),
(130, 'arta wiguna', 'Perempuan', '34343', '4adssadasd', 0),
(132, 'NI Kadek Yunita Dewi', 'Perempuan', '083117345545', 'denpasar\r\n', 0),
(133, 'WIGUNA', 'Perempuan', '5354', 'fsdfd', 0),
(134, 'OMING AYU', 'Perempuan', '81345654344', 'selat karangasem', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `penarikan_saldo`
--

CREATE TABLE `penarikan_saldo` (
  `id_penarikan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_tarik` int(11) NOT NULL,
  `id_nasabah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penarikan_saldo`
--

INSERT INTO `penarikan_saldo` (`id_penarikan`, `tanggal`, `jumlah_tarik`, `id_nasabah`) VALUES
(1, '2019-06-06', 50000, 134),
(2, '2019-06-08', 5000, 134),
(3, '2019-06-08', 5000, 134),
(4, '2019-06-08', 50000, 134);

--
-- Triggers `penarikan_saldo`
--
DELIMITER $$
CREATE TRIGGER `pengurangan_saldo` AFTER INSERT ON `penarikan_saldo` FOR EACH ROW BEGIN
UPDATE nasabah SET nasabah.saldo_nasabah = nasabah.saldo_nasabah - new.jumlah_tarik
WHERE id_nasabah = new.id_nasabah;
END
$$
DELIMITER ;

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
  `id_sampah` int(11) NOT NULL,
  `nama_sampah` varchar(100) NOT NULL,
  `kategori_sampah` varchar(50) NOT NULL,
  `harga_datang` double NOT NULL,
  `harga_pengepul` double NOT NULL,
  `keterangan_sampah` varchar(255) NOT NULL,
  `stok_sampah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `nama_sampah`, `kategori_sampah`, `harga_datang`, `harga_pengepul`, `keterangan_sampah`, `stok_sampah`) VALUES
(290, 'Gelas Aqua', 'Kaca', 2000, 3000, 'segala jenis gelas aqua', 137),
(298, 'fsdfsd', 'Kertas', 2, 2, '', 1010),
(299, 'beli rongsok', 'Logam', 2000, 3243040, 'sdjksdh', 17),
(300, '2323', 'Kertas', 23324, 4545, 'dfgdfg', 100),
(302, 'gelas', 'Kaca', 2000, 3000, 'jdjds', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `setoran sampah`
--
CREATE TABLE `setoran sampah` (
`id_setoran` int(11)
,`tanggal` date
,`nama_nasabah` varchar(100)
,`nama_sampah` varchar(100)
,`harga_datang` double
,`berat_setoran` double
);

-- --------------------------------------------------------

--
-- Table structure for table `setoran_sampah`
--

CREATE TABLE `setoran_sampah` (
  `id_setoran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_nasabah` int(11) NOT NULL,
  `id_sampah` int(11) NOT NULL,
  `berat_setoran` double NOT NULL,
  `total_setoran` int(11) DEFAULT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setoran_sampah`
--

INSERT INTO `setoran_sampah` (`id_setoran`, `tanggal`, `id_nasabah`, `id_sampah`, `berat_setoran`, `total_setoran`, `Keterangan`) VALUES
(26, '2019-06-08', 132, 290, 1, 0, 'Setoran'),
(27, '2019-06-08', 132, 290, 10, 0, 'Setoran'),
(28, '2019-06-08', 133, 290, 10, 0, 'Setoran'),
(29, '2019-06-08', 133, 298, 10, 0, 'Setoran'),
(30, '2019-06-08', 133, 299, 10, 0, 'Setoran'),
(31, '2019-06-08', 133, 302, 0.02, 0, 'Setoran'),
(32, '2019-06-03', 130, 290, 10, 2000, 'con'),
(33, '2019-06-19', 130, 290, 10, 3000, '56'),
(34, '2019-06-13', 129, 290, 20, 400, 'gfg'),
(38, '2019-06-08', 134, 290, 5, 0, 'Setoran'),
(39, '2019-06-08', 134, 290, 20, 0, 'Setoran'),
(40, '2019-06-08', 134, 290, 20, 1000, 'Setoran'),
(41, '2019-06-08', 129, 299, 7, 350, 'Setoran'),
(42, '2019-06-08', 130, 298, 0.01, 1, 'Setoran'),
(43, '2019-06-08', 130, 298, -0.02, -1, 'Setoran'),
(44, '2019-06-12', 130, 290, 5, NULL, 'dsff'),
(45, '2019-06-25', 129, 298, 10, NULL, 'sdsdsd'),
(49, '2019-06-12', 129, 290, 10, 20000, 'ddsad'),
(50, '2019-06-04', 129, 300, 100, 2332400, ''),
(51, '2019-06-08', 134, 290, 5, 10000, 'Setoran'),
(52, '2019-06-08', 129, 290, 2, 4000, 'Setoran'),
(53, '2019-06-10', 134, 290, 50, 100000, 'dsd'),
(54, '2019-06-08', 134, 299, 10, 20000, 'Setoran'),
(55, '2019-06-08', 130, 298, 0.04, 0, 'Setoran'),
(56, '2019-06-08', 129, 298, 1000, 2000, 'Setoran');

--
-- Triggers `setoran_sampah`
--
DELIMITER $$
CREATE TRIGGER `tambah_Sampah` AFTER INSERT ON `setoran_sampah` FOR EACH ROW BEGIN
UPDATE sampah SET sampah.stok_sampah = sampah.stok_sampah + new.berat_setoran
WHERE id_sampah = new.id_sampah;
UPDATE nasabah SET nasabah.saldo_nasabah = nasabah.saldo_nasabah+new.total_setoran
WHERE id_nasabah = new.id_nasabah;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `total_setoran_auto` BEFORE INSERT ON `setoran_sampah` FOR EACH ROW BEGIN
DECLARE total int;
set total = (SELECT sampah.harga_datang FROM sampah WHERE id_sampah = new.id_sampah);
SET new.total_setoran = new.berat_setoran*total;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stok_sampah`
--

CREATE TABLE `stok_sampah` (
  `id_sampah` int(11) NOT NULL,
  `total_sampah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_sampah`
--

INSERT INTO `stok_sampah` (`id_sampah`, `total_sampah`) VALUES
(290, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `setoran sampah`
--
DROP TABLE IF EXISTS `setoran sampah`;

CREATE ALGORITHM=MERGE DEFINER=`artawgn`@`localhost` SQL SECURITY DEFINER VIEW `setoran sampah`  AS  select `setoran_sampah`.`id_setoran` AS `id_setoran`,`setoran_sampah`.`tanggal` AS `tanggal`,`nasabah`.`nama_nasabah` AS `nama_nasabah`,`sampah`.`nama_sampah` AS `nama_sampah`,`sampah`.`harga_datang` AS `harga_datang`,`setoran_sampah`.`berat_setoran` AS `berat_setoran` from ((`setoran_sampah` join `nasabah` on((`setoran_sampah`.`id_setoran` = `nasabah`.`id_nasabah`))) join `sampah` on((`setoran_sampah`.`id_sampah` = `sampah`.`id_sampah`))) ;

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
  ADD KEY `id_sampah` (`id_sampah`),
  ADD KEY `id_sampah_2` (`id_sampah`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indexes for table `stok_sampah`
--
ALTER TABLE `stok_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `penarikan_saldo`
--
ALTER TABLE `penarikan_saldo`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;
--
-- AUTO_INCREMENT for table `setoran_sampah`
--
ALTER TABLE `setoran_sampah`
  MODIFY `id_setoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penarikan_saldo`
--
ALTER TABLE `penarikan_saldo`
  ADD CONSTRAINT `penarikan_saldo_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
