-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 05:14 AM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('jancuk', '12356');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
  `id_calon` varchar(10) NOT NULL,
  `kode_pasangan` varchar(10) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `semester` int(2) NOT NULL,
  `ipk` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  `surat_ukm` varchar(100) NOT NULL,
  `sertifikat_ldkm` varchar(100) NOT NULL,
  `surat_izin` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `kode_pasangan`, `nim`, `nama`, `jurusan`, `semester`, `ipk`, `foto`, `surat_ukm`, `sertifikat_ldkm`, `surat_izin`, `status`) VALUES
('12015', '115', 'A2.1100086', 'Agit Naeta', 'Teknik Informaitika', 6, 3.39, 'lk.jpg', 'Chrysanthemum.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 1),
('22015', '115', 'A2.1100088', 'Yaoming', 'Sistem Informasi', 5, 3.4, 'y.jpg', 'as.gif', 'daftar UNSIL.jpg', 'Untitled.gif', 1),
('32015', '215', '23123', 'LOl', 'adasd', 0, 0, 'lol.jpg', '10422327_508463515962597_8826134096247114476_n.jpg', '10422327_508463515962597_8826134096247114476_n.jpg', '10422327_508463515962597_8826134096247114476_n.jpg', 0),
('42015', '215', 'A1.119817', 'Sunarto ', 'Manajemen Informatik', 7, 3.51, 'lk.jpg', 'ukm.jpg', 'ldkm.jpg', 'izin.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE IF NOT EXISTS `hitung` (
  `nim_pemilih` varchar(20) NOT NULL,
  `kode_pasangan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitung`
--

INSERT INTO `hitung` (`nim_pemilih`, `kode_pasangan`, `nama`) VALUES
('A2.1100086', '115', 'Agit Naeta'),
('A2.110009', '115', 'Asep ');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE IF NOT EXISTS `lembaga` (
  `nip` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`nip`, `password`) VALUES
('1', '1'),
('12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `ipk` float NOT NULL,
  `status_pilih` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `semester`, `password`, `jurusan`, `ipk`, `status_pilih`) VALUES
('A2.1100086', 'Agit Naeta', 6, '12345', 'Teknik Informatika', 3.39, 0),
('A2.110009', 'Rianto', 4, '12345', 'Sistem Informasi', 3.23, 0),
('A2.1100090', 'Yuli Kartika', 4, '12345', 'Sistem Informasi', 3.2, 0),
('A2.1100087', 'Sunroto aji', 5, '1128y8', 'Teknik Informatika', 3.4, 0),
('A2.11087665', 'Ridwan Kamil', 2, '109287', 'Sitem Informasi', 2.76, 0),
('A2.100918', 'Muhammad Silaman ', 3, '3187', 'Sistem Informasi', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasangan`
--

CREATE TABLE IF NOT EXISTS `pasangan` (
  `kode_pasangan` varchar(10) NOT NULL DEFAULT '',
  `visi_misi` varchar(1000) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `status_pasangan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasangan`
--

INSERT INTO `pasangan` (`kode_pasangan`, `visi_misi`, `foto`, `nama_pasangan`, `status_pasangan`) VALUES
('115', 'Maju Mundur bersama', 'lk.jpg', 'Agit Naeta - Asep Rohendra', 1),
('215', 'Mundur Maju Sendiri', 'lol.jpg', 'Yaoming - LOL', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
 ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
 ADD PRIMARY KEY (`nim_pemilih`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pasangan`
--
ALTER TABLE `pasangan`
 ADD PRIMARY KEY (`kode_pasangan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
