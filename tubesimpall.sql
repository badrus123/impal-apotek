-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 03:04 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesimpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(10) NOT NULL,
  `pengirim` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teks` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `penerima` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `type_obat` varchar(50) NOT NULL,
  `harga_obat` int(50) NOT NULL,
  `promo_obat` int(50) NOT NULL,
  `sisa_obat` int(50) NOT NULL,
  `deskripsi_obat` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `produk_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `type_obat`, `harga_obat`, `promo_obat`, `sisa_obat`, `deskripsi_obat`, `image`, `produk_obat`) VALUES
('12', 'obattttt', 'PIL', 123, 34, 23, 'asdasdasd', 'file_1542614912.jpg', 'Alat Kesehatan'),
('123', 'asd', 'None', 23, 12, 34, 'Facere sit accusamus expedita cupiditate sapiente molestias dignissimos occaecat repellendus Dolorem sed iste sit culpa quis omnis qui provident id', 'file_1542417325.jpg', 'Perawat Kecantikan'),
('2', 'paracetamol', 'PIL', 123, 123, 213, 'dadasdasdasdasdasdasdasdasdadasdasda', 'file_1542412747.jpg', 'Alat Kesehatan'),
('234', 'asdfd', 'PIL', 23, 12, 12, 'sdsddsffsdsdfsdffdgsdfdafasdf', 'file_1542952819.jpg', 'Alat Kesehatan'),
('45', 'asdfdgdfg', 'PIL', 234, 0, 0, 'sdfsdf s', 'file_1542615210.jpg', 'Bayi dan Anak'),
('adit', 'adit', 'Sirup', 123, 12, 12, 'fsdgzdgfgsdfgzdfgs gc wfadasdfasdfasdf', 'file_1542988916.jpg', 'Obat'),
('fghfgh', 'fghfgh', 'Sirup', 243, 55, 12, 'dfsdfd fzsdfdfzsdfzsdfzsdf', 'file_1542615320.jpg', 'Alat Kesehatan'),
('zfSz', 'obattttt', 'PIL', 56, 56, 677, 'hydhfu', 'file_1542431973.jpg', 'Alat Kesehatan'),
('zxc', 'zxc', 'PIL', 112, 12, 12, 'tr', 'file_1543050698.jpg', 'Alat Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan_obat`
--

CREATE TABLE `pengambilan_obat` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hari_pengambilan` date NOT NULL,
  `jam_pengambilan` time NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `foto_pengambilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_obat`
--

CREATE TABLE `pengembalian_obat` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `jumlah_obat` varchar(50) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `foto_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fullname`, `email`, `username`, `password`, `foto_user`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin', 'https://3.bp.blogspot.com/-WPIEaxZnxzk/V2k-vQ57MlI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pengambilan_obat`
--
ALTER TABLE `pengambilan_obat`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengembalian_obat`
--
ALTER TABLE `pengembalian_obat`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
