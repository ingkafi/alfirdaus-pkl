-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2021 pada 03.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfirdaus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `grades`
--

INSERT INTO `grades` (`id`, `grade7`, `grade8`, `grade9`, `grade10`, `grade11`, `grade12`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2021_01_17_114109_create_teachers_table', 1),
(48, '2014_10_12_100000_create_password_resets_table', 2),
(49, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(50, '2019_08_19_000000_create_failed_jobs_table', 2),
(51, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(52, '2021_01_10_082808_create_sessions_table', 2),
(53, '2021_01_13_121439_create_posts_table', 2),
(54, '2021_01_17_011453_create_students_table', 2),
(55, '2021_01_21_024348_create_raports_table', 2),
(68, '2021_01_21_062843_create_reports_table', 3),
(69, '2014_10_12_000000_create_users_table', 4),
(70, '2021_01_24_041036_create_parents_table', 5),
(83, '2021_01_21_062843_create_presensi_table', 9),
(84, '2021_01_25_073627_create_grades_table', 10),
(86, '2021_02_03_041006_create_portofolio_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `nis`, `judul`, `grade`, `file`, `kategori`, `created_at`, `updated_at`) VALUES
(3, '141', 'Desain 1', '7', '141-2-1614718447.pdf', '2', '2021-03-02 13:54:07', '2021-03-02 13:54:07'),
(4, '123', 'Art  1', '7', '123-1-1615196333.pdf', '1', '2021-03-08 02:38:53', '2021-03-08 02:38:53'),
(5, '123', 'Desain 1', '8', '123-2-1616198783.pdf', '2', '2021-03-19 17:06:23', '2021-03-19 17:06:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `isi`, `gambar`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'INFORMASI 1', 'ISI INFORMASI 1', '[\"Picsdture1.png\"]', 'GRADE 7', NULL, '2021-02-25 18:26:05', '2021-02-25 18:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_kel` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_1` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_2` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_3` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_4` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_5` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_6` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_7` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_8` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_9` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_10` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_11` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_12` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_13` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_14` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_15` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_16` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_17` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_18` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_19` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_20` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_21` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_22` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_23` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_24` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_25` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_26` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_27` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_28` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_29` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_30` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_31` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `nama`, `nis`, `j_kel`, `grade`, `bulan`, `tgl_1`, `tgl_2`, `tgl_3`, `tgl_4`, `tgl_5`, `tgl_6`, `tgl_7`, `tgl_8`, `tgl_9`, `tgl_10`, `tgl_11`, `tgl_12`, `tgl_13`, `tgl_14`, `tgl_15`, `tgl_16`, `tgl_17`, `tgl_18`, `tgl_19`, `tgl_20`, `tgl_21`, `tgl_22`, `tgl_23`, `tgl_24`, `tgl_25`, `tgl_26`, `tgl_27`, `tgl_28`, `tgl_29`, `tgl_30`, `tgl_31`, `created_at`, `updated_at`) VALUES
(37, 'AFIF', '123', 'M', '7', '1', 's', 'i', 'v', 's', 'v', 'v', 'v', 's', 'i', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:13', '2021-04-02 21:49:02'),
(38, 'AFIF', '123', 'M', '7', '2', 'i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:13', '2021-04-02 21:49:02'),
(39, 'AFIF', '123', 'M', '7', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(40, 'AFIF', '123', 'M', '7', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(41, 'AFIF', '123', 'M', '7', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(42, 'AFIF', '123', 'M', '7', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(43, 'AFIF', '123', 'M', '7', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(44, 'AFIF', '123', 'M', '7', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(45, 'AFIF', '123', 'M', '7', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(46, 'AFIF', '123', 'M', '7', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(47, 'AFIF', '123', 'M', '7', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(48, 'AFIF', '123', 'M', '7', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(49, 'ADAM GIFARI', '1244', 'M', '10', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(50, 'ADAM GIFARI', '1244', 'M', '10', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(51, 'ADAM GIFARI', '1244', 'M', '10', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(52, 'ADAM GIFARI', '1244', 'M', '10', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(53, 'ADAM GIFARI', '1244', 'M', '10', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(54, 'ADAM GIFARI', '1244', 'M', '10', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(55, 'ADAM GIFARI', '1244', 'M', '10', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(56, 'ADAM GIFARI', '1244', 'M', '10', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(57, 'ADAM GIFARI', '1244', 'M', '10', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(58, 'ADAM GIFARI', '1244', 'M', '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(59, 'ADAM GIFARI', '1244', 'M', '10', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(60, 'ADAM GIFARI', '1244', 'M', '10', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(97, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '1', 'v', 'v', 'a', 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:17:30'),
(98, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:04:59'),
(99, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:04:59'),
(100, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:04:59'),
(101, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:04:59'),
(102, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:04:59', '2021-03-19 17:04:59'),
(103, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00'),
(104, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00'),
(105, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00'),
(106, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00'),
(107, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00'),
(108, 'DYAN AZKA INGKAFI', '1234', 'M', '7', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 17:05:00', '2021-03-19 17:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raports`
--

CREATE TABLE `raports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `raport_7_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_7_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_8_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_8_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_9_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_9_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_10_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_10_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_11_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_11_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_12_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raport_12_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `raports`
--

INSERT INTO `raports` (`id`, `nis`, `created_at`, `updated_at`, `raport_7_1`, `raport_7_2`, `raport_8_1`, `raport_8_2`, `raport_9_1`, `raport_9_2`, `raport_10_1`, `raport_10_2`, `raport_11_1`, `raport_11_2`, `raport_12_1`, `raport_12_2`) VALUES
(36, 123, '2021-02-12 07:32:14', '2021-04-02 21:49:01', NULL, NULL, NULL, 'IMAM PRAJURITNO_8_2.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 1244, '2021-02-12 07:32:39', '2021-02-12 07:32:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 1234, '2021-03-19 17:05:00', '2021-03-19 17:05:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2orqWeF1irH9I31z9rghc30j0mvkROZHV8cAUX7C', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkM5UmtMYVp4QzhQdEFsSlM5bFJ4UEZ4Mmp3MmlaMEpwUkp4enhzYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1617349618),
('BPYTHK8zlXVrA30lOV8wtBz2hxwGYexJ0NrHqjAr', 34, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoieDF1akRHNkNhMW8xUFNqZTBqb2I5cmVTTWM4SFFCR014SmZFVFlTNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM0O3M6NDoicm9sZSI7czozOiJocnQiO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZjVUNFRIRUJVNWFEQUdwTGVHT3FQLlhNYy9pY1hDU1JuS1ozU1JBZlJRd2FXVjZLc2FuRG0iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGY1VDRUSEVCVTVhREFHcExlR09xUC5YTWMvaWNYQ1NSbktaM1NSQWZSUXdhV1Y2S3NhbkRtIjtzOjU6ImFsZXJ0IjthOjA6e319', 1617429568),
('DXq4x7MfmePeXrQZEpamcKbe0Wy2DtsIVGu54jOG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFMzUlZ0dUlyWVh1OEpGUTFJMTQ5MlY5eGFwclNBUzcyTHk3bFJ5aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1617349619),
('NdIHMM1JZjBFqbLwo9nxaGtpw6toJBDUqHEpabPy', 43, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiT1JPV0tWcDE5YzBrMFp3akQxYTVGOFJFTm94czBJU01kTUljUTBpcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXJlbnQvcG9ydG9mb2xpby9hbGwiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0MztzOjQ6InJvbGUiO3M6NjoicGFyZW50IjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGlQR0xGNTJvQ2NRaVpqVldZMnM5dU94d0lnSW9HOHdreVBRZmxXUnFuNHVXWTFDcWsveDhTIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRpUEdMRjUyb0NjUWlaalZXWTJzOXVPeHdJZ0lvRzh3a3lQUWZsV1JxbjR1V1kxQ3FrL3g4UyI7fQ==', 1617253520);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `grade` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_kel` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nis`, `nama`, `tgl_lahir`, `grade`, `j_kel`, `foto_siswa`, `created_at`, `updated_at`) VALUES
(40, '123', 'AFIF', '2020-04-07', '7', 'M', '[\"AFIF.jpg\"]', '2021-02-12 07:32:13', '2021-04-02 21:49:02'),
(41, '1244', 'ADAM GIFARI', '2021-02-15', '10', 'M', '[\"ADAM GIFARI.jpg\"]', '2021-02-12 07:32:38', '2021-02-12 07:32:38'),
(45, '1234', 'DYAN AZKA INGKAFI', '2021-03-01', '7', 'M', '[\"DYAN AZKA INGKAFI.jpg\"]', '2021-03-19 17:04:59', '2021-03-19 17:04:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hrt',
  `grade` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `role`, `grade`, `nis`, `created_at`, `updated_at`) VALUES
(28, 'ADMIN', 'admin@alfirdaus.com', NULL, '$2y$10$W92E54Ov2Njmh732DCJ4h.FXJMfrRBgBFHlk.al9aZ5Q7glZn0ywi', NULL, NULL, NULL, 'admin', NULL, NULL, '2021-02-09 06:37:39', '2021-02-10 03:40:35'),
(34, 'GRADE 7', 'sri@alfirdaus.com', NULL, '$2y$10$f5T4THEBU5aDAGpLeGOqP.XMc/icXCSRnKZ3SRAfRQwaWV6KsanDm', NULL, NULL, NULL, 'hrt', '7', NULL, '2021-02-10 03:41:45', '2021-03-09 04:58:48'),
(35, 'GRADE 8', 'grade8@alfirdaus.com', NULL, '$2y$10$UOmNF5YojoJ2HD5tx0X1Uu3L5vXqnnpqUjcN5GcFSX58UUK0YOvey', NULL, NULL, NULL, 'hrt', '8', NULL, '2021-02-10 03:42:18', '2021-02-25 18:22:53'),
(43, 'AFIF', '123@alfirdaus.com', NULL, '$2y$10$XGia4QvaVlG3mQsuOGw8EOawGCneXRri9osGtd2tNDRjnIJ47xnLW', NULL, NULL, NULL, 'parent', '7', '123', '2021-02-12 07:32:14', '2021-04-02 21:49:02'),
(44, 'ADAM GIFARI', '1244@alfirdaus.com', NULL, '$2y$10$TZXaNxC19twKHFC5seHIee0LVkpCQUgdoUAUG37YdQ3nO947dehNi', NULL, NULL, NULL, 'parent', '10', '1244', '2021-02-12 07:32:39', '2021-02-12 07:32:39'),
(48, 'DYAN AZKA INGKAFI', '1234@alfirdaus.com', NULL, '$2y$10$I636.fkZRiC.wfkNOlDOAu5a.dS7feqwDYeiq5BxqjRGdL8QHDmCm', NULL, NULL, NULL, 'parent', '7', '1234', '2021-03-19 17:05:00', '2021-03-19 17:05:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `raports`
--
ALTER TABLE `raports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `raports_nis_unique` (`nis`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nis_unique` (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nis_unique` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `raports`
--
ALTER TABLE `raports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
