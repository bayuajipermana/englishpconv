-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Sep 2021 pada 09.45
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englishpconv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biayalain`
--

CREATE TABLE `biayalain` (
  `id_biayalain` int(11) NOT NULL,
  `id_pendaftaran` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biayalain`
--

INSERT INTO `biayalain` (`id_biayalain`, `id_pendaftaran`, `keterangan`, `nominal`) VALUES
(56, '0920210015', 'Modul Buku', 50000),
(58, '0920210015', 'Pendaftaran', 100000),
(59, '0920210016', 'Pendaftaran', 100000),
(60, '0920210016', 'Modul Buku', 50000),
(61, '0920210016', 'Kaos', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `value_dis` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `nama`, `jenis`, `value_dis`) VALUES
('ADM01', 'BEBAS ADMIN', 'admin', 50000),
('bts', 'bts', 'potongan', 1000000),
('POT01', 'Merdeka', 'potongan', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_pendaftaran` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL DEFAULT current_timestamp(),
  `metode_bayar` varchar(20) DEFAULT NULL,
  `created_by` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftaran`, `saldo`, `tgl_bayar`, `metode_bayar`, `created_by`, `created_at`) VALUES
(3, '0920210002', 3000000, '2021-08-18', NULL, 'USR03', '2021-09-24 22:07:21'),
(4, '0920210002', 2000000, '2021-07-22', NULL, 'USR03', '2021-09-24 22:15:56'),
(11, '0920210002', 4000000, '2021-09-25', NULL, 'USR03', '2021-09-25 10:42:12'),
(12, '0920210001', 0, '2021-09-25', NULL, 'USR03', '2021-09-25 11:45:22'),
(13, '0920210003', 500000, '2021-09-25', NULL, 'USR03', '2021-09-25 22:26:28'),
(14, '0920210012', 500000, '2021-09-25', NULL, 'USR03', '2021-09-25 23:50:53'),
(15, '0920210012', 200000, '2021-09-14', NULL, 'USR03', '2021-09-25 23:55:35'),
(16, '0920210013', 450000, '2021-09-25', NULL, 'USR03', '2021-09-26 00:59:57'),
(17, '0920210012', 8800000, '2021-09-25', NULL, 'USR03', '2021-09-26 01:02:33'),
(18, '0920210014', 450000, '2021-09-26', NULL, 'USR03', '2021-09-26 12:16:33'),
(19, '0920210013', 500000, '2021-09-29', 'trfbca', 'USR03', '2021-09-29 09:41:05'),
(20, '0920210015', 3000000, '2021-09-29', 'cash', 'USR03', '2021-09-29 14:20:03'),
(21, '0920210016', 4000000, '2021-09-29', 'cash', 'USR03', '2021-09-29 14:26:23'),
(22, '0920210016', 200000, '2021-09-29', 'cash', 'USR03', '2021-09-29 14:27:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `id_program` varchar(5) DEFAULT NULL,
  `jt` date DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `diskon` int(11) NOT NULL DEFAULT 0,
  `saldo` int(20) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nik`, `id_program`, `jt`, `price`, `diskon`, `saldo`, `id_user`, `status`) VALUES
('0920210001', '2021-09-12', '3374132703990004', 'REG01', '2021-12-12', 0, 0, 0, 'USR03', 1),
('0920210002', '2021-09-12', '3374132703990001', 'EXE01', '2021-12-12', 0, 0, 9000000, 'USR03', 1),
('0920210003', '2021-09-12', '3374132703990003', 'EXE01', '2021-12-12', 0, 0, 4500000, 'USR03', 0),
('0920210004', '2021-09-12', '3374132703990009', 'VIP01', '2021-12-12', 0, 0, 3450000, 'USR03', 0),
('0920210005', '2021-09-12', '3374132703990002', 'REG01', '2021-12-12', 0, 0, 1500000, 'USR03', 0),
('0920210006', '2021-09-12', '3374132703990003', 'REG02', '2021-12-12', 0, 0, 1500000, 'USR03', 0),
('0920210007', '2021-09-12', '3374132703990004', 'REG02', '2021-12-12', 0, 0, 2150000, 'USR03', 0),
('0920210008', '2021-09-12', '3374132703990001', 'REG01', '2021-12-12', 0, 0, 1800000, 'USR03', 0),
('0920210009', '2021-09-20', '3374132703990001', 'REG01', '2021-12-20', 0, 0, 1950000, 'USR03', 0),
('0920210010', '2021-09-24', '3374132703990001', 'EXE01', '2021-12-24', 0, 0, 9450000, 'USR03', 0),
('0920210012', '2021-09-25', '6543339876543220', 'EXE01', '2021-12-25', 10000000, 500000, 9500000, 'USR03', 1),
('0920210013', '2021-09-25', '6543339876543220', 'PRV01', '2021-12-25', 6000000, 50000, 5950000, 'USR03', 0),
('0920210014', '2021-09-26', '0009', 'REG01', '2021-12-26', 3000000, 50000, 2950000, 'USR03', 0),
('0920210015', '2021-09-29', '0009', 'EXE01', '2021-12-29', 10000000, 50000, 9950000, 'USR03', 0),
('0920210016', '2021-09-29', '0009', 'EXE01', '2021-12-29', 10000000, 1000000, 9200000, 'USR03', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` varchar(5) NOT NULL,
  `nama_program` varchar(50) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `harga`) VALUES
('EXE01', 'EXECUTIVE 1', 10000000),
('PRV01', 'PRIVATE 1', 6000000),
('REG01', 'REGULER 1', 3000000),
('REG02', 'REGULER 2', 3000000),
('REG03', 'REGULER 3', 3000000),
('reg4', 'reg4', 3000000),
('VIP01', 'VIP 1', 4000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `kelas` int(2) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `hp_wali` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nik`, `nama`, `alamat`, `no_hp`, `asal_sekolah`, `kelas`, `tgl_lahir`, `nama_wali`, `hp_wali`) VALUES
('0009', 'Brian Marcius', 'Jl. Genuk Karanglo', '089667610555', 'SMKN 7 SMG', 12, '1998-12-27', '-', '-'),
('3374132703990001', 'Anggi March Diani', 'Jl. Simongan Panjangan RT2/RW7', '081226230447', 'SMK Texmaco', 1, '1999-03-09', 'Lagiman', '081226230441'),
('3374132703990002', 'Prasaja Bagas Triantoko', 'Plosok', '0812412412412', 'SMK Texmaco', 12, '1901-01-13', 'Suntoro', '0812141212222'),
('3374132703990003', 'Doni Sariawan', 'Demit', '081226230449', 'SMK Sembako', 8, '1991-03-29', 'Joko', '081226230422'),
('3374132703990004', 'Bayu Aji Permana', 'Jl. Simongan Panjangan RT2/RW7 Manyaran Semarang Barat', '081226230446', 'SMK Texmaco Semarang', 12, '2001-03-27', 'Muji', '083838415499'),
('3374132703990009', 'Nasrodin', 'Jl. Jalan', '08122500047', 'Rak jelas', 12, '1970-07-07', 'Joko', '0812112121222'),
('6543339876543220', 'suyatno', 'jatisari', '0823217773839', 'smp 23', 7, '2011-10-17', 'paijo', '0812577576767'),
('tes', 'asdfasdfsafsd', 'asdfsdadf', 'asdfsdf', 'asdfsadf', 5, '2018-02-02', 'sfdsdf', 'sdfasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `no_hp`, `username`, `password`, `level`) VALUES
('USR01', 'Bayu Aji Permana', '081226230441', 'bayuajipermana', 'panjangan', 'admin'),
('USR02', 'Anggi March Diani', '081226230441', 'anggimarchdiani', '123', 'admin'),
('USR03', 'Nasrodin', '08122500093', 'udin', '123', 'user'),
('USR04', 'rosdiana', '08744567889', 'ana', 'aaaa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biayalain`
--
ALTER TABLE `biayalain`
  ADD PRIMARY KEY (`id_biayalain`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biayalain`
--
ALTER TABLE `biayalain`
  MODIFY `id_biayalain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
