-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 11:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`) VALUES
('0909090909', 'nanana', 'bana', '2015-07-13', 'laki-laki', 'dasdas'),
('1100101010', 'nuning ', 'garut', '1985-07-17', 'perempuan', 'jalan. setia budi\r\n'),
('1111111111', 'hanu', 'semarang', '1988-01-01', 'laki-laki', 'semarang'),
('1111122222', 'dkakjdbaskdjad', 'daskdgasjd', '2015-07-22', 'laki-laki', 'dadsa'),
('2222222222', 'nunung', 'bandung', '2015-02-15', 'laki-laki', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
('9898989898', 'toni', 'jawa', '2015-07-03', 'jalan setiamanah'),
('9898991724', 'jihan gancret', 'bekasi', '1998-02-11', 'jalan. cianjur no.9'),
('9909009990', 'Ilham ramadhan', 'Bandung', '1998-01-15', 'jalan. sinar jaya '),
('9975641414', 'budhi ', 'bandung', '2015-07-02', 'jalan. margahayu'),
('9986391237', 'uhuyyy', 'banjarmasin', '2015-07-25', 'banjarmasin'),
('9989899999', 'hary ', 'banten', '2015-06-16', 'jalan. batununggal'),
('9989989988', 'acep saepulloh', 'garut', '1998-08-10', 'jalan.setia manah'),
('9999090000', 'ilham ramadhan', 'bandung', '2015-06-30', 'jalan sinarjaya'),
('9999999990', 'nine', 'bante', '2015-07-06', 'jalan setia manah');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) NOT NULL,
  `nama_staff` varchar(25) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `bagian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`), ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
