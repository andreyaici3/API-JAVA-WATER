-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2022 pada 14.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapan`
--

CREATE TABLE `rekapan` (
  `id` int(25) NOT NULL,
  `no_pol` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pendapatan` decimal(10,0) NOT NULL,
  `pengeluaran` decimal(10,0) NOT NULL,
  `sisa` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekapan`
--

INSERT INTO `rekapan` (`id`, `no_pol`, `tanggal`, `pendapatan`, `pengeluaran`, `sisa`) VALUES
(1, 'E 9632 AE', '2022-09-15', '1910000', '1100000', '810000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rekapan`
--
ALTER TABLE `rekapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rekapan`
--
ALTER TABLE `rekapan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
