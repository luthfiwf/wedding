-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 05:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_wa`
--

CREATE TABLE `data_wa` (
  `id` int(11) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `format_wa` text NOT NULL,
  `isi_wa` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `var_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasangan`
--

CREATE TABLE `pasangan` (
  `id` int(11) NOT NULL,
  `sambutan` text NOT NULL,
  `foto_wanita` text NOT NULL,
  `nama_wanita` varchar(50) NOT NULL,
  `ket_wanita` text NOT NULL,
  `foto_pria` text NOT NULL,
  `nama_pria` varchar(50) NOT NULL,
  `ket_pria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasangan`
--

INSERT INTO `pasangan` (`id`, `sambutan`, `foto_wanita`, `nama_wanita`, `ket_wanita`, `foto_pria`, `nama_pria`, `ket_pria`) VALUES
(1, '<p>Maha Suci Allah yang telah menciptakan Makhluk-nya berpasang-pasangan. Ya Allah semoga ridhomu tercurah mengiringi pernikahan kami.</p>\r\n', '4.jpg', 'Amel Purnamasari, S.Pd', '<p>Putri ketiga dari Keluarga</p>\r\n\r\n<p>Bapak Asep Purnama (Alm) &amp; Ibu Titi&nbsp;</p>\r\n', '4.jpg', 'Lutfi Waziirul Fazri, S.Kom.', '<p>Putra ketiga dari</p>\r\n\r\n<p>Bapak H. Cepi Setia Wiguna &amp; Ibu Hj. Edah Jubaedah</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `pesan`) VALUES
(1, 'Lutfi Waziirul Fazri', 'Semoga sakinah');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_wa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `no_wa`) VALUES
(3, 'Lutfi Waziirul Fazri', '+6285723828011'),
(4, 'Lutfi Waziirul Fazri', '+6288809407743'),
(5, 'aaaa', '+80757397593'),
(6, 'aaaaaaaaaaaaa', '+62867637476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_wa`
--
ALTER TABLE `data_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasangan`
--
ALTER TABLE `pasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_wa`
--
ALTER TABLE `data_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasangan`
--
ALTER TABLE `pasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
