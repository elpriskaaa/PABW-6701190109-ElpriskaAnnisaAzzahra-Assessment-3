-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2021 pada 10.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artnow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsitek`
--

CREATE TABLE `arsitek` (
  `id_arsitek` int(5) NOT NULL,
  `nama_arsitek` varchar(30) NOT NULL,
  `foto` int(5) NOT NULL,
  `desk` varchar(200) NOT NULL,
  `gambar` int(5) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_rek` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsitek`
--

INSERT INTO `arsitek` (`id_arsitek`, `nama_arsitek`, `foto`, `desk`, `gambar`, `no_tlp`, `email`, `no_rek`) VALUES
(123, 'Aksara', 1, 'seorang arsitek, 35 tahun', 1, 812345123, 'aksa123@gmail.com', 60099821);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(5) NOT NULL,
  `id_arsitek` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_arsitek` varchar(30) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `chat` text NOT NULL,
  `harga_deal` int(15) NOT NULL,
  `nama_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `id_arsitek` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `desk` varchar(200) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `judul_desain` varchar(30) NOT NULL,
  `nama_arsitek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_arsitek`, `gambar`, `harga`, `desk`, `komentar`, `judul_desain`, `nama_arsitek`) VALUES
(1, 123, 'Pantry.jpeg', 35000000, '', '', 'Pantry', 'Aksara'),
(2, 123, 'Walk-in Closet.jpeg', 40000000, '', '', 'Walk-in Closet', 'Aksara'),
(3, 123, 'Guest Room.jpeg', 65000000, '', '', 'Guest Room', 'Aksara'),
(4, 123, 'Wooden Gate.jpeg', 19000000, '', '', 'Wooden Gate', 'Aksara'),
(5, 123, 'Jacuzzi Room.jpeg', 40000000, '', '', 'Jacuzzi Room', 'Aksara'),
(6, 123, 'Foyer.jpeg', 14000000, '', '', 'Foyer', 'Aksara'),
(7, 123, 'Backyard.jpeg', 51000000, '', '', 'Backyard', 'Aksara'),
(8, 123, 'Kitchen Area.jpeg', 35000000, '', '', 'Kitchen Area', 'Aksara'),
(9, 123, 'Master Bedroom.jpeg', 18000000, '', '', 'Master Bedroom', 'Aksara'),
(10, 123, 'Workspace.jpeg', 24000000, '', '', 'Workspace', 'Aksara'),
(11, 123, 'Mini Library.jpeg', 30000000, '', '', 'Mini Library', 'Aksara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_arsitek` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_arsitek` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_rek` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `jenis_kelamin`, `tgl_lahir`, `no_tlp`, `foto`) VALUES
(1, 'Elpriska', 'elpriska12345@gmail.', 'abcdefg', '', '0000-00-00', 2147483647, 0),
(2, 'Andreas Jae', 'kleo210901@gmail.com', '123456', '', '0000-00-00', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsitek`
--
ALTER TABLE `arsitek`
  ADD PRIMARY KEY (`id_arsitek`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_arsitek` (`id_arsitek`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_arsitek` (`id_arsitek`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_arsitek` (`id_arsitek`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsitek`
--
ALTER TABLE `arsitek`
  MODIFY `id_arsitek` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_arsitek`) REFERENCES `arsitek` (`id_arsitek`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_arsitek`) REFERENCES `arsitek` (`id_arsitek`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_arsitek`) REFERENCES `arsitek` (`id_arsitek`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
