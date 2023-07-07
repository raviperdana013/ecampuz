-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 10.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `mhs_id` int(2) NOT NULL,
  `mhs_nim` int(20) NOT NULL,
  `mhs_nama` text NOT NULL,
  `mhs_angkatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`mhs_id`, `mhs_nim`, `mhs_nama`, `mhs_angkatan`) VALUES
(1, 20180001, 'Jono', 2018),
(2, 20180002, 'Taufik', 2018),
(3, 20180003, 'Maria', 2018),
(4, 20190001, 'Sari', 2019),
(5, 20190002, 'Bambang', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa_nilai`
--

CREATE TABLE `tb_mahasiswa_nilai` (
  `mhs_nilai_id` int(2) NOT NULL,
  `mhs_id` int(2) NOT NULL,
  `mk_id` int(2) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa_nilai`
--

INSERT INTO `tb_mahasiswa_nilai` (`mhs_nilai_id`, `mhs_id`, `mk_id`, `nilai`) VALUES
(1, 1, 1, 70),
(2, 1, 1, 80),
(3, 2, 1, 82),
(4, 2, 2, 74),
(5, 4, 1, 76),
(6, 4, 2, 80),
(7, 5, 1, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `mk_id` int(2) NOT NULL,
  `mk_kode` varchar(10) NOT NULL,
  `mk_sks` int(2) NOT NULL,
  `mk_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`mk_id`, `mk_kode`, `mk_sks`, `mk_nama`) VALUES
(1, 'MK202', 3, 'OOP'),
(2, 'MK303', 2, 'Basis Data');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`mhs_id`);

--
-- Indeks untuk tabel `tb_mahasiswa_nilai`
--
ALTER TABLE `tb_mahasiswa_nilai`
  ADD PRIMARY KEY (`mhs_nilai_id`);

--
-- Indeks untuk tabel `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`mk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
