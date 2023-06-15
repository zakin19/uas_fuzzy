-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2020 pada 06.22
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
-- Database: `db_raskin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_fuzzy`
--

CREATE TABLE `hasil_fuzzy` (
  `id` int(5) NOT NULL,
  `id_himpunan` varchar(5) NOT NULL,
  `id_calon_penerima` varchar(10) NOT NULL,
  `f` float(2,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hasil_fuzzy`
--

INSERT INTO `hasil_fuzzy` (`id`, `id_himpunan`, `id_calon_penerima`, `f`) VALUES
(470, '10', '61', 0.00),
(469, '9', '61', 0.80),
(468, '8', '61', 0.99),
(467, '7', '61', 0.00),
(466, '6', '61', 0.00),
(465, '5', '61', 0.00),
(464, '4', '61', 0.40),
(430, '10', '57', 0.40),
(429, '9', '57', 0.00),
(428, '8', '57', 0.00),
(427, '7', '57', 0.00),
(426, '6', '57', 0.26),
(425, '5', '57', 0.00),
(454, '4', '60', 0.00),
(453, '3', '60', 0.00),
(452, '2', '60', 0.99),
(451, '1', '60', 0.00),
(463, '3', '61', 0.10),
(462, '2', '61', 0.83),
(461, '1', '61', 0.00),
(460, '10', '60', 0.80),
(459, '9', '60', 0.00),
(458, '8', '60', 0.53),
(457, '7', '60', 0.00),
(456, '6', '60', 0.00),
(455, '5', '60', 0.60),
(424, '4', '57', 0.70),
(423, '3', '57', 0.00),
(422, '2', '57', 0.20),
(438, '8', '58', 0.13),
(446, '6', '59', 0.00),
(445, '5', '59', 0.00),
(444, '4', '59', 0.70),
(443, '3', '59', 0.00),
(442, '2', '59', 0.43),
(441, '1', '59', 0.00),
(421, '1', '57', 0.13),
(437, '7', '58', 0.30),
(436, '6', '58', 0.00),
(435, '5', '58', 0.00),
(434, '4', '58', 0.00),
(433, '3', '58', 0.99),
(432, '2', '58', 0.00),
(431, '1', '58', 0.33),
(440, '10', '58', 0.00),
(439, '9', '58', 0.80),
(450, '10', '59', 0.20),
(449, '9', '59', 0.20),
(448, '8', '59', 0.00),
(447, '7', '59', 0.75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `masa_kerja` int(2) DEFAULT NULL,
  `usia` int(3) DEFAULT NULL,
  `gaji` int(7) DEFAULT NULL,
  `jumlah_tanggungan` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `masa_kerja`, `usia`, `gaji`, `jumlah_tanggungan`) VALUES
(61, 'Lilis', 45, 34, 4500000, 1),
(60, 'Eno Karno', 90, 54, 3800000, 7),
(59, 'Dikin Saepudin', 33, 37, 2750000, 4),
(58, 'Ncep Badru', 20, 25, 3200000, 1),
(57, 'Jamaludin', 26, 43, 1500000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_himpunan`
--

CREATE TABLE `tbl_himpunan` (
  `id` int(10) NOT NULL,
  `nama_himpunan` varchar(30) DEFAULT NULL,
  `bawah` float(10,2) DEFAULT NULL,
  `tengah` float(10,2) DEFAULT NULL,
  `atas` float(10,2) DEFAULT NULL,
  `kelompok` tinyint(2) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_himpunan`
--

INSERT INTO `tbl_himpunan` (`id`, `nama_himpunan`, `bawah`, `tengah`, `atas`, `kelompok`, `keterangan`) VALUES
(1, 'Baru', 0.00, 25.00, 30.00, 1, NULL),
(2, 'Lama', 20.00, 30.00, 50.00, 1, NULL),
(3, 'Muda', 25.00, 30.00, 35.00, 2, NULL),
(4, 'Parobaya', 30.00, 40.00, 50.00, 2, NULL),
(5, 'Tua', 45.00, 55.00, 60.00, 2, NULL),
(6, 'Rendah', 100000.00, 950000.00, 2000000.00, 3, NULL),
(7, 'Sedang', 1500000.00, 2500000.00, 3500000.00, 3, NULL),
(8, 'Tinggi', 3000000.00, 3750000.00, 4500000.00, 3, NULL),
(9, 'Sedikit', 0.00, 3.00, 5.00, 4, NULL),
(10, 'Banyak', 3.00, 5.00, 8.00, 4, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_variabel`
--

CREATE TABLE `tbl_variabel` (
  `id` int(10) NOT NULL,
  `nama_variabel` varchar(25) DEFAULT NULL,
  `field_akses` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_variabel`
--

INSERT INTO `tbl_variabel` (`id`, `nama_variabel`, `field_akses`) VALUES
(1, 'Masa Kerja', 'masa_kerja'),
(2, 'Usia', 'usia'),
(3, 'Gaji', 'gaji'),
(4, 'Jumlah Tanggungan', 'jumlah _tanggungan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
