-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 02:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kompli`
--

CREATE TABLE `kompli` (
  `kd_kompli` varchar(10) NOT NULL,
  `nm_kompli` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompli`
--

INSERT INTO `kompli` (`kd_kompli`, `nm_kompli`) VALUES
('smkn501', 'Kimia Analisis'),
('smkn502', 'Kimia Industri');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_kip`
--

CREATE TABLE `pengajuan_kip` (
  `id` varchar(25) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `date_create` varchar(30) DEFAULT NULL,
  `date_update` varchar(30) DEFAULT NULL,
  `img_sktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `kd_rombel` varchar(10) NOT NULL,
  `nama_rombel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`kd_rombel`, `nama_rombel`) VALUES
('10ka1', '10 KA 1'),
('10ki1', '10 KI 1');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` varchar(10) NOT NULL,
  `npsn` int(10) DEFAULT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` int(10) NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `npsn`, `nama_sekolah`, `alamat`, `kodepos`, `email`, `website`, `nama_kepsek`, `golongan`, `pangkat`, `nip`) VALUES
('sekolah1', 20532211, 'SMK Negeri 5 Surabaya', 'Jl. Mayjen Prof. Dr. Moestopo No.167-169, Mojo, Kec. Gubeng, Kota Surabaya, Jawa Timur', 60285, 'stemba5sby@gmail.com', 'http://smkn5-sby.sch.id', 'Drs. Heru Mursanyoto, M.M.', 'IV/b', 'Pembina Tk. I', '196309131987031016');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nis_lengkap` text,
  `nm_lengkap` varchar(100) NOT NULL,
  `kd_kompli` varchar(20) NOT NULL,
  `kd_rombel` varchar(20) NOT NULL,
  `nm_ortu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nis_lengkap`, `nm_lengkap`, `kd_kompli`, `kd_rombel`, `nm_ortu`, `alamat`, `pekerjaan`) VALUES
('19974', '19974/031/089', 'Rachmat Risanto T', 'smkn502', '10ki1', 'Risanto', 'smkn5sby', 'Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` varchar(20) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `keperluan` text,
  `tahun` varchar(5) DEFAULT NULL,
  `date_create` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `npsn` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `npsn`) VALUES
('202001154538', 'rachmat risanto', 'rachmatrt', 'cmFjaG1hdHJ0', '20532211'),
('202001154824', 'dhanang', 'dhanang', 'ZGhhbmFuZw==', '20532211'),
('202001163039', 'admin', 'admin', 'YWRtaW4=', '20532211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kompli`
--
ALTER TABLE `kompli`
  ADD PRIMARY KEY (`kd_kompli`),
  ADD KEY `kd_kompli` (`kd_kompli`);

--
-- Indexes for table `pengajuan_kip`
--
ALTER TABLE `pengajuan_kip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`) USING BTREE;

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`kd_rombel`),
  ADD KEY `kd_rombel` (`kd_rombel`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `kd_kompli` (`kd_kompli`),
  ADD KEY `kd_rombel` (`kd_rombel`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan_kip`
--
ALTER TABLE `pengajuan_kip`
  ADD CONSTRAINT `siswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `kd_kompli` FOREIGN KEY (`kd_kompli`) REFERENCES `kompli` (`kd_kompli`),
  ADD CONSTRAINT `kd_rombel` FOREIGN KEY (`kd_rombel`) REFERENCES `rombel` (`kd_rombel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
