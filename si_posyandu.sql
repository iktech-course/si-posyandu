-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 10:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Elsi Yuni Dita', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_bayi`
--

CREATE TABLE `data_bayi` (
  `id` int(5) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bb_lahir` int(10) NOT NULL,
  `tb_lahir` int(10) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_bayi`
--

INSERT INTO `data_bayi` (`id`, `nama_bayi`, `jenis_kelamin`, `tgl_lahir`, `bb_lahir`, `tb_lahir`, `nama_ortu`) VALUES
(2, 'M Ichsan', 'L', '2021-02-10', 2455, 70, 'Ichsan/Tina'),
(5, 'kian', 'L', '2021-02-26', 2800, 60, 'LISNA / SULIONO'),
(9, 'mutia', 'P', '2019-06-06', 3100, 65, 'widia/edo'),
(10, '', '', '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu_hamil`
--

CREATE TABLE `data_ibu_hamil` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ibu_hamil`
--

INSERT INTO `data_ibu_hamil` (`id`, `nama`, `tgl_lahir`, `alamat`, `nama_suami`, `no_hp`) VALUES
(3, 'Asih Mimin Tarsih', '1995-03-17', 'Teluk Cempako', 'rajni', '085384329624'),
(11, 'FEBI FERNANDO', '2022-06-04', 'pulau punjung', 'ivan', '085384329622');

-- --------------------------------------------------------

--
-- Table structure for table `data_posyandu`
--

CREATE TABLE `data_posyandu` (
  `id` int(3) NOT NULL,
  `id_bayi` int(3) NOT NULL,
  `bb` int(10) NOT NULL,
  `tb` int(10) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_bayi`
--
ALTER TABLE `data_bayi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ibu_hamil`
--
ALTER TABLE `data_ibu_hamil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_posyandu`
--
ALTER TABLE `data_posyandu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_data_posyandu_data_bayi` (`id_bayi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_bayi`
--
ALTER TABLE `data_bayi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_ibu_hamil`
--
ALTER TABLE `data_ibu_hamil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_posyandu`
--
ALTER TABLE `data_posyandu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_posyandu`
--
ALTER TABLE `data_posyandu`
  ADD CONSTRAINT `FK_data_posyandu_data_bayi` FOREIGN KEY (`id_bayi`) REFERENCES `data_bayi` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
