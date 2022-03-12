-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2022 pada 14.34
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasarphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamaba`
--

CREATE TABLE `datamaba` (
  `Id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamaba`
--

INSERT INTO `datamaba` (`Id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Erik Kurniawan', '1273983129', 'erikk1629@gmail.com', 'informatika', 'erik.jpg'),
(2, 'brahim sugeng arnanto', '1864712723', 'brahim183@gmail.com', 'Manajemen informatika', 'brahim.jpg'),
(3, 'nanda ayu astika', '1927482929', 'nandaayu@gmail.com', 'Teknik perminyakan', 'nanda.jpg'),
(4, 'yuli nara mida', '8924721927', 'yuli193@gmail.com', 'pendidikan agama islam', 'yuli.jpg'),
(5, 'bela suharwati', '8912891291', 'bela1836@gmail.com', 'teknik kimia', 'bela.jpg'),
(6, 'veninda eka mahardika', '8902219371', 'veninda293@gmail.com', 'teknik industri', 'veninda.jpg'),
(7, 'septiawan kusuma', '8309724729', 'septian198@gmail.com', 'teknik sipil', 'septian.jpg'),
(8, 'bagas bima pratama', '839723017', 'bagas2819@gmail.com', 'satra jepang', 'bagas.jpg'),
(9, 'akbar maulana ', '8936172641', 'akbarmaulana18@gmail.com', 'sosiologi', 'akbar.jpg'),
(10, 'dini ayu mustika', '976123841', 'dni183@gmail.com', 'teknik informatika', 'dini.jpg'),
(26, 'uyf', '2374287', 'eufgrig', 'wegfg', 'ifgv'),
(27, '3rw', '', '3242', '2r', '234'),
(28, 'egdw', 'dfgjhvf', 'ewjhf', 'wjhfg', 'jhqejhf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamaba`
--
ALTER TABLE `datamaba`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datamaba`
--
ALTER TABLE `datamaba`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
