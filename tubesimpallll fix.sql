-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2018 pada 07.46
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
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
-- Struktur dari tabel `obat`
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
-- Dumping data untuk tabel `obat`
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
-- Struktur dari tabel `pengambilan_obat`
--

CREATE TABLE `pengambilan_obat` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hari_pengambilan` date NOT NULL,
  `jam_pengambilan` time NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `foto_pengambilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengambilan_obat`
--

INSERT INTO `pengambilan_obat` (`nama`, `email`, `hari_pengambilan`, `jam_pengambilan`, `no_telepon`, `foto_pengambilan`) VALUES
('ef', 'hovelywahyusimatupang@yahoo.co.id', '0000-00-00', '12:00:00', '23423', 'file_1543386997.jpg'),
('bayu', 'bayu@gmail.com', '0000-00-00', '12:30:00', '23554353', 'file_1543387270.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_obat`
--

CREATE TABLE `pengembalian_obat` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `jumlah_obat` varchar(50) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `foto_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian_obat`
--

INSERT INTO `pengembalian_obat` (`nama`, `email`, `jenis_obat`, `jumlah_obat`, `tanggal_pengembalian`, `foto_pengembalian`) VALUES
('a', 'hov@gmail.com', 'a', '123', '0000-00-00', 'file_1543382771.jpg'),
('a', 'hovelywahyusimatupang@yahoo.co.id', 'a', '14', '0000-00-00', 'file_1543382603.png'),
('badrus', 'badrus@gmail', 'sfsdf', '24', '0000-00-00', 'file_1543387217.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`fullname`, `email`, `username`, `password`, `foto_user`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin', 'https://3.bp.blogspot.com/-WPIEaxZnxzk/V2k-vQ57MlI'),
('hovely simatupang', 'hovelywahyusimatupang@yahoo.co.id', 'hovely', 'asu', 'https://3.bp.blogspot.com/-WPIEaxZnxzk/V2k-vQ57MlI');

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
