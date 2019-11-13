-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 07:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(14) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `bidang_kajian` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `password`, `level`, `bidang_kajian`) VALUES
(24060, 'anandavj', 'sodebade', 2, 'Supply Chain Management'),
(2406011, 'ananda', 'sodebade', 1, 'Ergonomi');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`id`, `judul`) VALUES
(1, 'sosial'),
(12345, 'andd'),
(1231231, 'sosial'),
(12312321, 'sosial');

-- --------------------------------------------------------

--
-- Table structure for table `list_tu`
--

CREATE TABLE `list_tu` (
  `id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_tu`
--

INSERT INTO `list_tu` (`id`) VALUES
(123),
(1234);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(14) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `id_kp` int(5) DEFAULT NULL,
  `id_dosbing` int(14) DEFAULT NULL,
  `file_kp` varchar(100) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL,
  `ipk` decimal(3,2) NOT NULL,
  `sks` int(3) NOT NULL,
  `perusahaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `password`, `level`, `id_kp`, `id_dosbing`, `file_kp`, `nilai`, `ipk`, `sks`, `perusahaan`) VALUES
(24022, 'anandavj', 'sodebade', 0, 1, 24060, NULL, NULL, '3.92', 90, 'PTTTTTT'),
(24060117, 'anandavj', 'sodebade', 0, NULL, 2406011, NULL, 90, '2.90', 90, NULL),
(210701171, 'Ivanca', '246810', 0, 1, 2406011, NULL, NULL, '3.90', 90, 'KFC');

-- --------------------------------------------------------

--
-- Table structure for table `tu`
--

CREATE TABLE `tu` (
  `id` int(14) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu`
--

INSERT INTO `tu` (`id`, `nama`, `password`, `level`) VALUES
(123, 'anandavj', '123456', 3),
(1234, 'anandavj', '123456', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_tu`
--
ALTER TABLE `list_tu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosbing` (`id_dosbing`),
  ADD KEY `id_kp` (`id_kp`);

--
-- Indexes for table `tu`
--
ALTER TABLE `tu`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_dosbing`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_kp`) REFERENCES `kp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
