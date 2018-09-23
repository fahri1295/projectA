-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 12:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapshar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_bagian`
--

CREATE TABLE `mst_bagian` (
  `mst_id_bagian` int(11) NOT NULL,
  `mst_name_bagian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_bagian`
--

INSERT INTO `mst_bagian` (`mst_id_bagian`, `mst_name_bagian`) VALUES
(1, 'Unit 1'),
(2, 'Unit 2'),
(3, 'Unit 3'),
(4, 'Unit 4');

-- --------------------------------------------------------

--
-- Table structure for table `mst_comment_kegiatan`
--

CREATE TABLE `mst_comment_kegiatan` (
  `mst_id_comment` int(11) NOT NULL,
  `mst_id_kegiatan` int(11) DEFAULT NULL,
  `mst_isi_comment` varchar(255) DEFAULT NULL,
  `mst_date_comment` datetime DEFAULT NULL,
  `mst_name_comment` varchar(20) DEFAULT NULL COMMENT 'yang comment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mst_divisi`
--

CREATE TABLE `mst_divisi` (
  `mst_id_divisi` int(11) NOT NULL,
  `mst_name_divisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_divisi`
--

INSERT INTO `mst_divisi` (`mst_id_divisi`, `mst_name_divisi`) VALUES
(1, 'SUBDIT'),
(2, 'SATGAS'),
(3, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kegiatan`
--

CREATE TABLE `mst_kegiatan` (
  `mst_id_kegiatan` int(11) NOT NULL,
  `mst_nama_kegiatan` varchar(50) DEFAULT NULL,
  `mst_isi_kegiatan` varchar(250) DEFAULT NULL,
  `mst_image_kegiatan` varchar(250) DEFAULT NULL,
  `mst_name_user` varchar(50) DEFAULT NULL,
  `mst_name_divisi` varchar(50) DEFAULT NULL,
  `mst_name_bagian` varchar(50) DEFAULT NULL,
  `mst_tanggal_kegiatan` date DEFAULT NULL,
  `mst_name_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_kegiatan`
--

INSERT INTO `mst_kegiatan` (`mst_id_kegiatan`, `mst_nama_kegiatan`, `mst_isi_kegiatan`, `mst_image_kegiatan`, `mst_name_user`, `mst_name_divisi`, `mst_name_bagian`, `mst_tanggal_kegiatan`, `mst_name_image`) VALUES
(8, 'SENKOM Mitra Polri Kabupaten Karanganyar ', 'Jajaran Polres Karanganyar menggelar apel Operasi Mantap Brata Candi di halaman Mapolres Klaten, Selasa (4/2). Apel tersebut digelar dalam rangka persiapan pengamanan Pemilu (Pemilihan Umum) 2014. Selain jajaran Polres Kranganyar, gelar pasukan terse', 'file_1537099463.jpg', 'ahmad badawi', 'ADMIN', 'Unit 3', '0000-00-00', NULL),
(9, 'Polres Bojonegoro gelar doa bersama ', 'Polres Bojonegoro gelar doa bersama  Polres Bojonegoro gelar doa bersama Polres Bojonegoro gelar doa bersama Polres Bojonegoro gelar doa bersama Polres Bojonegoro gelar doa bersama Polres Bojonegoro gelar doa bersama Polres Bojonegoro gelar doa bersa', 'file_1537099568.jpg', 'ahmad badawi', 'ADMIN', 'Unit 3', '0000-00-00', NULL),
(10, 'Divisi Humas Mabes Polri, Polres TTS gelar kegiata', 'dewasa ini kata radikalisme merupakan kata yang sering di temukan di  media massa. Radikalisme selalu dikaitkan dengan tindak kekerasan seperti peledakan bom ataupun penculikan.\r\n\r\nRadikalisme merupakan suatu sikap yang mendambakan perubahan secara t', 'file_1537100387.jpg', 'ahmad badawi', 'ADMIN', 'Unit 3', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_laporan`
--

CREATE TABLE `mst_laporan` (
  `id` int(11) NOT NULL,
  `penyidik` varchar(125) NOT NULL,
  `produk` varchar(512) NOT NULL,
  `dokumentasi` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_laporan`
--

INSERT INTO `mst_laporan` (`id`, `penyidik`, `produk`, `dokumentasi`) VALUES
(1, '10110470110', 'Ade Zenudin Bimashita', 'Laki-laki'),
(2, '10110470111', 'Ani Lestari', 'Perempuan'),
(3, 'Pak Hendra', 'Bintang 1', '12345'),
(4, 'Pak Budi', 'Bintang 2', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `mst_organisasi`
--

CREATE TABLE `mst_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `pangkat` varchar(125) NOT NULL,
  `NRP` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_organisasi`
--

INSERT INTO `mst_organisasi` (`id`, `nama`, `pangkat`, `NRP`, `divisi`, `bagian`) VALUES
(7, 'Pak Hendra', 'Bintang 1', '12345', 'Subdit', 'Unit1'),
(8, 'Pak Budi', 'Bintang 2', '23456', 'Subdit', 'Unit3');

-- --------------------------------------------------------

--
-- Table structure for table `mst_status`
--

CREATE TABLE `mst_status` (
  `mst_id_status` int(11) DEFAULT NULL,
  `mst_name_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_status`
--

INSERT INTO `mst_status` (`mst_id_status`, `mst_name_status`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `mst_id_user` int(11) NOT NULL,
  `mst_username` varchar(50) NOT NULL,
  `mst_name_user` varchar(50) NOT NULL,
  `mst_NRP` varchar(50) NOT NULL,
  `mst_password` varchar(50) NOT NULL,
  `mst_id_bagian` int(11) NOT NULL,
  `mst_id_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`mst_id_user`, `mst_username`, `mst_name_user`, `mst_NRP`, `mst_password`, `mst_id_bagian`, `mst_id_divisi`) VALUES
(7, 'fahri02', 'FAHRI', '12', 'f689d9d6450b5b5381d879863def6188', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_bagian`
--
ALTER TABLE `mst_bagian`
  ADD PRIMARY KEY (`mst_id_bagian`);

--
-- Indexes for table `mst_comment_kegiatan`
--
ALTER TABLE `mst_comment_kegiatan`
  ADD PRIMARY KEY (`mst_id_comment`);

--
-- Indexes for table `mst_divisi`
--
ALTER TABLE `mst_divisi`
  ADD PRIMARY KEY (`mst_id_divisi`);

--
-- Indexes for table `mst_kegiatan`
--
ALTER TABLE `mst_kegiatan`
  ADD PRIMARY KEY (`mst_id_kegiatan`);

--
-- Indexes for table `mst_laporan`
--
ALTER TABLE `mst_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_organisasi`
--
ALTER TABLE `mst_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`mst_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_bagian`
--
ALTER TABLE `mst_bagian`
  MODIFY `mst_id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_comment_kegiatan`
--
ALTER TABLE `mst_comment_kegiatan`
  MODIFY `mst_id_comment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_divisi`
--
ALTER TABLE `mst_divisi`
  MODIFY `mst_id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mst_kegiatan`
--
ALTER TABLE `mst_kegiatan`
  MODIFY `mst_id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mst_laporan`
--
ALTER TABLE `mst_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_organisasi`
--
ALTER TABLE `mst_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `mst_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
