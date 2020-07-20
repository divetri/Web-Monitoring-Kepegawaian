-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: den1.mysql6.gear.host
-- Generation Time: Jun 01, 2018 at 12:55 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('123', '123'),
('admin', 'admin'),
('dinasperdagangan', 'perdagangan123');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nip_karyawan` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jk` varchar(2) NOT NULL,
  `sts` varchar(3) NOT NULL,
  `istri` int(11) NOT NULL,
  `kawin` date DEFAULT '0000-00-00',
  `kerja` date DEFAULT '0000-00-00',
  `sekolah` varchar(10) NOT NULL,
  `lulus` date DEFAULT '0000-00-00',
  `putusan` varchar(30) NOT NULL,
  `tunjangan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `nip_karyawan` varchar(18) NOT NULL,
  `periode` date NOT NULL,
  `gaji_baru` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `temp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kebangsaan` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` text NOT NULL,
  `desa` text NOT NULL,
  `camat` text NOT NULL,
  `kota` text NOT NULL,
  `jabatan` text NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `thn_pangkat` date NOT NULL,
  `kredit` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL,
  `nip_atasan` varchar(18) NOT NULL,
  `tmt_capeg` date NOT NULL,
  `jenis_peg` text NOT NULL,
  `status_peg` text NOT NULL,
  `ppsk` text NOT NULL,
  `gajipokok` text NOT NULL,
  `penghasilan` text NOT NULL,
  `jab_struk` text NOT NULL,
  `tetanggung` int(11) NOT NULL,
  `sk_akhir` text NOT NULL,
  `tgl_sk_akhir` date DEFAULT '0000-00-00',
  `masa_gol` text NOT NULL,
  `masa_sel` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmtgaji` date NOT NULL,
  `stat_kawin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `nip_karyawan` varchar(18) NOT NULL,
  `periode` date NOT NULL,
  `uskp` varchar(50) NOT NULL,
  `usulan_golongan` varchar(50) DEFAULT NULL,
  `usulan_kredit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `pasang`
--

CREATE TABLE `pasang` (
  `id` int(11) NOT NULL,
  `nip_karyawan` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tem` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `kerja` varchar(50) NOT NULL,
  `tgl_kawin` date NOT NULL,
  `ke` int(11) NOT NULL,
  `cerai` date NOT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD UNIQUE KEY `nip_karyawan` (`nip_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD UNIQUE KEY `nip_karyawan` (`nip_karyawan`);

--
-- Indexes for table `pasang`
--
ALTER TABLE `pasang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pasang`
--
ALTER TABLE `pasang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip_karyawan`) REFERENCES `karyawan` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
