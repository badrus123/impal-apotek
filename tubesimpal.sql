-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2018 pada 07.32
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `Id_Obat` varchar(10) NOT NULL,
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
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`Id_Obat`, `nama_obat`, `type_obat`, `harga_obat`, `promo_obat`, `sisa_obat`, `deskripsi_obat`, `image`, `produk_obat`) VALUES
('123', 'asd', 'None', 23, 12, 34, 'Facere sit accusamus expedita cupiditate sapiente molestias dignissimos occaecat repellendus Dolorem sed iste sit culpa quis omnis qui provident id', 'file_1542417325.jpg', 'Perawat Kecantikan'),
('2', 'paracetamol', 'PIL', 123, 123, 213, 'dadasdasdasdasdasdasdasdasdadasdasda', 'file_1542412747.jpg', 'Alat Kesehatan'),
('zfSz', 'obattttt', 'PIL', 56, 56, 677, 'hydhfu', 'file_1542431973.jpg', 'Alat Kesehatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`fullname`, `email`, `username`, `password`) VALUES
('Septyan Bayu', 'bayu@gmail.com', 'bayu123', '123bayu'),
('Hovely Wahyu', 'hovelywahyu@gmail.com', 'hope98', 'hop123'),
('Septyan Bayu', 'bayu@gmail.com', 'septyanbayu', 'bayu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`Id_Obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
