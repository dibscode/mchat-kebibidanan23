-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Bulan Mei 2025 pada 06.17
-- Versi server: 8.0.30
-- Versi PHP: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_bayi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `babies`
--

CREATE TABLE `babies` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_bayi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_mengisi` date NOT NULL DEFAULT '2025-05-18',
  `nilai_total` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `jawaban_kuisioner` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `babies`
--

INSERT INTO `babies` (`id`, `nama_bayi`, `nama_ibu`, `nama_ayah`, `alamat_lengkap`, `tanggal_lahir`, `tanggal_mengisi`, `nilai_total`, `status`, `jawaban_kuisioner`, `created_at`, `updated_at`) VALUES
(28, 'Kiky', 'Mimom', 'Papi', 'JAWA TIMUR, KABUPATEN SIDOARJO, TAMAN, TAMAN, RT 01/RW 03', '2025-05-05', '2025-05-18', 5, 'Normal', NULL, '2025-05-18 08:42:44', '2025-05-18 08:42:44'),
(30, 'Kikyadawa', 'Mimom', 'awdaw', 'BANTEN, KABUPATEN LEBAK, CIPANAS, HARUMSARI, RT 01/RW 03', '2025-05-01', '2025-05-18', 5, 'Meragukan', NULL, '2025-05-18 09:01:01', '2025-05-18 09:01:01'),
(31, 'dawd', 'awda', 'awdda', 'JAWA TIMUR, KABUPATEN SIDOARJO, GEDANGAN, KETAJEN, RT 01/RW 03', '2025-04-30', '2025-05-18', 0, 'Kemungkinan GPPH', NULL, '2025-05-19 00:03:40', '2025-05-19 00:03:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `babies`
--
ALTER TABLE `babies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `babies`
--
ALTER TABLE `babies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
