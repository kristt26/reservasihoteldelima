-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2019 pada 12.09
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi delima hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kamar`
--

CREATE TABLE `tabel_kamar` (
  `ID_kamar` varchar(10) NOT NULL,
  `fasilitas` varchar(5) NOT NULL,
  `informasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_reservasi`
--

CREATE TABLE `tabel_reservasi` (
  `ID_reservasi` varchar(10) NOT NULL,
  `ID_tamu` varchar(11) NOT NULL,
  `fasilitas` varchar(10) NOT NULL,
  `pesanan` int(11) NOT NULL,
  `check_in` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `tipe` int(10) NOT NULL,
  `laporan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `ID_user` varchar(1) NOT NULL,
  `nama` int(1) NOT NULL,
  `password` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  ADD PRIMARY KEY (`ID_kamar`);

--
-- Indeks untuk tabel `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  ADD PRIMARY KEY (`ID_reservasi`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`ID_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
