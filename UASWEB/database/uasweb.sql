-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2022 pada 11.44
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `nama_nft` varchar(255) NOT NULL,
  `harga_nft` varchar(255) NOT NULL,
  `stok_nft` varchar(255) NOT NULL,
  `bulantahun` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_nft`, `harga_nft`, `stok_nft`, `bulantahun`, `gambar`) VALUES
(4, 'RAINBOW', '2500000', '1', '2021-02', 'NFT3.jpg'),
(5, 'YACHT', '1000000', '1', '2022-01', 'NFT1.jpg'),
(7, 'KING RAINBOW', '10000000', '1', '2020-02', 'NFT2.jpg'),
(8, 'LUFFY', '50000000', '1', '2020-08', 'NFT5.jpg'),
(9, 'SULTAN', '90000000', '1', '2021-06', 'NFT6.jpg'),
(10, 'DOCTOR', '3000000', '2', '2021-10', 'NFT10.jpg'),
(11, 'KING CHEETAH', '55000000', '0', '2020-12', 'NFT9.jpg'),
(12, 'PRISON', '2500000', '3', '2022-04', 'NFT8.jpg'),
(13, 'COMUNNIS', '1500000', '2', '2022-05', 'NFT7.jpg'),
(14, 'BUZZ', '45000000', '1', '2020-05', 'NFT11.jpg'),
(16, 'SOLDIER', '2000000', '3', '2022-04', 'NFT4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(6, 'yudth', 'yudithaditya003@gmail.com', 'fb374c003ed62c087eb1b4af7887c9c1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
