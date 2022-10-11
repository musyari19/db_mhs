-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2022 pada 07.18
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
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `jurusan`, `fakultas`, `gambar`) VALUES
(701210042, 'M. khobari Akbar', 'mhmmadkhobari@gmail.com', 'sistem informasi', 'sains dan teknologi', 'khobari.JPG'),
(701210049, 'Iza Diniati', 'izadiniati597@gmail.com', 'sistem informasi', 'sains dan teknologi', 'iza.JPG'),
(701210124, 'May Dinda Amelia', 'maydindaamelia@gmai.com', 'sistem informasi', 'sains dan teknologi', 'dinda.jpeg'),
(701210129, 'Muhammad Septian nugraha', 'muhammadseptiann0@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Asep.JPG'),
(701210210, 'Nurmayanti Anggraeini', 'anggraeininurmayanti@gmai.com', 'sistem informasi', 'sains dan teknologi', 'nurma.jpeg'),
(701210254, 'Rivo Dianra', 'rivodiandra2003@gmail.com', 'sistem informasi', 'sains dan teknologi', 'rivo.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
