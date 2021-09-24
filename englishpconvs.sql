-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Sep 2021 pada 17.21
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
  `created_by` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftaran`, `saldo`, `tgl_bayar`, `created_by`, `created_at`) VALUES
(3, '0920210002', 2000000, '2021-09-24', 'USR03', '2021-09-24 22:07:21'),
(4, '0920210002', 5000000, '2021-09-24', 'USR03', '2021-09-24 22:15:56');

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
  `saldo` int(20) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nik`, `id_program`, `jt`, `saldo`, `id_user`, `status`) VALUES
('0920210001', '2021-09-12', '3374132703990004', 'REG01', '2021-12-12', 0, 'USR03', 0),
('0920210002', '2021-09-12', '3374132703990001', 'EXE01', '2021-12-12', 9000000, 'USR03', 0),
('0920210003', '2021-09-12', '3374132703990003', 'EXE01', '2021-12-12', 4500000, 'USR03', 0),
('0920210004', '2021-09-12', '3374132703990009', 'VIP01', '2021-12-12', 3450000, 'USR03', 0),
('0920210005', '2021-09-12', '3374132703990002', 'REG01', '2021-12-12', 1500000, 'USR03', 0),
('0920210006', '2021-09-12', '3374132703990003', 'REG02', '2021-12-12', 1500000, 'USR03', 0),
('0920210007', '2021-09-12', '3374132703990004', 'REG02', '2021-12-12', 2150000, 'USR03', 0),
('0920210008', '2021-09-12', '3374132703990001', 'REG01', '2021-12-12', 1800000, 'USR03', 0),
('0920210009', '2021-09-20', '3374132703990001', 'REG01', '2021-12-20', 1950000, 'USR03', 0),
('0920210010', '2021-09-24', '3374132703990001', 'EXE01', '2021-12-24', 9450000, 'USR03', 0);

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
('3374132703990001', 'Anggi March Diani', 'Jl. Simongan Panjangan RT2/RW7', '081226230447', 'SMK Texmaco', 1, '1999-03-09', 'Lagiman', '081226230441'),
('3374132703990002', 'Prasaja Bagas Triantoko', 'Plosok', '0812412412412', 'SMK Texmaco', 12, '1901-01-13', 'Suntoro', '0812141212222'),
('3374132703990003', 'Doni Sariawan', 'Demit', '081226230449', 'SMK Sembako', 8, '1991-03-29', 'Joko', '081226230422'),
('3374132703990004', 'Bayu Aji Permana', 'Jl. Simongan Panjangan RT2/RW7 Manyaran Semarang Barat', '081226230446', 'SMK Texmaco Semarang', 12, '2001-03-27', 'Muji', '083838415499'),
('3374132703990009', 'Nasrodin', 'Jl. Jalan', '08122500047', 'Rak jelas', 12, '1970-07-07', 'Joko', '0812112121222'),
('6543339876543220', 'suyatno', 'jatisari', '0823217773839', 'smp 23', 7, '2011-10-17', 'paijo', '0812577576767');

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
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
