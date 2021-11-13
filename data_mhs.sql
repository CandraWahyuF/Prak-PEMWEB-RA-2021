-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2021 pada 19.07
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak4_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mhs`
--

INSERT INTO `data_mhs` (`nim`, `nama`, `prodi`, `angkatan`) VALUES
(119140009, 'Candra Wahyu Firmansyah', 'Teknik Informatika', 2019),
(119140089, 'Arvenda Budi Anggara', 'Teknik Informatika', 2019),
(119140090, 'Ahmad Aldi Setiawan', 'Teknik Informatika', 2019);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
