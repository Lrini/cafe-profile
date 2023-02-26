-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2023 pada 10.52
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catering`
--

CREATE TABLE `catering` (
  `id_catering` int(10) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catering`
--

INSERT INTO `catering` (`id_catering`, `nama_paket`, `isi`, `harga`) VALUES
(2, 'Paket Hemat', 'nasi goreng jumbo, esteh dan pisang goreng', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `id_chart` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_catering` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`id_chart`, `id_menu`, `id_user`, `id_catering`, `jumlah`, `harga`, `total`) VALUES
(1, 4, 1, 0, 1, 20000, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `harga_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `jumlah`, `harga`, `gambar`, `harga_pesan`) VALUES
(4, 'nasi goreng spesial', 0, 20000, 'caesar.jpg', 20000),
(5, 'steak', 0, 200000, 'tuscan-grilled.jpg', 400000),
(6, 'lobster', 0, 350000, 'lobster-bisque.jpg', 0),
(7, 'lobster roll', 0, 450000, 'lobster-roll.jpg', 0),
(8, 'roti ', 0, 100000, 'bread-barrel.jpg', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `kode`, `jumlah`, `harga`) VALUES
(9, 4, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `hp`, `user`, `pass`) VALUES
(1, 'user', '081390657610', 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_catering`);

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id_chart`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catering`
--
ALTER TABLE `catering`
  MODIFY `id_catering` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
