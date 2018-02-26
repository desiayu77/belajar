-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2018 at 10:38 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(10) NOT NULL,
  `nip` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `mapel`, `alamat`) VALUES
(12, 12345678, 'Agnes', 'IPA', 'Pringkuku');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` int(15) NOT NULL,
  `kelas` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `kelas`, `nama`, `alamat`) VALUES
(1, 123, 2, 'Desi', 'Pacitan'),
(0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_trx` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `mapel` varchar(25) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` int(10) NOT NULL,
  `kelas` int(2) NOT NULL,
  PRIMARY KEY (`id_trx`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `id_guru`, `mapel`, `hari`, `jam`, `kelas`) VALUES
(1, 12, 'IPA', 'Rabu', 8, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
