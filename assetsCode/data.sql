-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 02:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_caketos_cawalos`
--

CREATE TABLE `data_caketos_cawalos` (
  `id_dataCalon` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `program_kerja` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_pribadi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_pribadi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no-hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kode_random`
--

CREATE TABLE `kode_random` (
  `id_kode` int(11) NOT NULL,
  `digit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `digit` int(10) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `pemilih` varchar(50) NOT NULL,
  `id_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE `statistic` (
  `id_statistik` int(11) NOT NULL,
  `id_dataCalon` int(11) NOT NULL,
  `statistic_pemilih` varchar(255) NOT NULL,
  `presentase_pemilih` varchar(255) NOT NULL,
  `id_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `id_statistik` int(11) NOT NULL,
  `id_dataCalon` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `id_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `no-HP` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `username`, `name`, `level`, `no-HP`) VALUES
(1, 'admin', 'admin123', 'Guru Besar', 'admin', 987654321),
(2, 'calon', 'calonone', 'calon ke 1', 'calon', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_caketos_cawalos`
--
ALTER TABLE `data_caketos_cawalos`
  ADD PRIMARY KEY (`id_dataCalon`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_pribadi`);

--
-- Indexes for table `kode_random`
--
ALTER TABLE `kode_random`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`),
  ADD KEY `pemilih` (`id_kode`);

--
-- Indexes for table `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id_statistik`),
  ADD KEY `calon` (`id_dataCalon`),
  ADD KEY `datakode` (`id_kode`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD KEY `pilih` (`id_dataCalon`),
  ADD KEY `presentase` (`id_statistik`),
  ADD KEY `kode` (`id_kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_caketos_cawalos`
--
ALTER TABLE `data_caketos_cawalos`
  MODIFY `id_dataCalon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_pribadi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_random`
--
ALTER TABLE `kode_random`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD CONSTRAINT `dataPribadi` FOREIGN KEY (`id_pribadi`) REFERENCES `data_caketos_cawalos` (`id_dataCalon`);

--
-- Constraints for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih` FOREIGN KEY (`id_kode`) REFERENCES `kode_random` (`id_kode`);

--
-- Constraints for table `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `calon` FOREIGN KEY (`id_dataCalon`) REFERENCES `data_caketos_cawalos` (`id_dataCalon`),
  ADD CONSTRAINT `datakode` FOREIGN KEY (`id_kode`) REFERENCES `kode_random` (`id_kode`);

--
-- Constraints for table `tahun`
--
ALTER TABLE `tahun`
  ADD CONSTRAINT `kode` FOREIGN KEY (`id_kode`) REFERENCES `kode_random` (`id_kode`),
  ADD CONSTRAINT `pilih` FOREIGN KEY (`id_dataCalon`) REFERENCES `data_caketos_cawalos` (`id_dataCalon`),
  ADD CONSTRAINT `presentase` FOREIGN KEY (`id_statistik`) REFERENCES `statistic` (`id_statistik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
