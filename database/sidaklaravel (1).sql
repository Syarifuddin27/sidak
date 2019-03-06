-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2019 pada 02.04
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidaklaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensis`
--

CREATE TABLE `absensis` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `tanggal_awal` datetime DEFAULT NULL,
  `tanggal_akhir` datetime DEFAULT NULL,
  `sebab` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'P',
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id`, `karyawan_id`, `tanggal_awal`, `tanggal_akhir`, `sebab`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, '2018-09-20 00:00:00', '2018-09-19 10:02:18', 'A', NULL, '2018-09-19 03:02:18', '2018-09-19 03:02:18'),
(5, 2, '2018-09-19 00:00:00', '2018-09-19 10:34:37', 'I', 'sakit', '2018-09-19 03:34:37', '2018-09-19 03:34:37'),
(6, 3, '2018-10-01 11:09:36', '2018-10-01 11:10:01', 'A', NULL, '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(7, 3, '2018-10-02 11:09:44', '2018-10-02 11:10:05', 'I', NULL, '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(8, 3, '2018-10-03 11:09:48', '2018-10-03 11:10:09', 'I', 'sakit', '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(9, 2, '2018-10-03 00:00:00', '2018-10-03 11:22:20', 'A', NULL, '2018-10-03 04:22:20', '2018-10-03 04:22:20'),
(11, 2, '2018-10-25 00:00:00', '2018-10-25 08:50:39', 'A', 'sefg', '2018-10-25 01:50:39', '2018-10-25 01:50:39'),
(12, 3, '2018-10-19 00:00:00', '2018-10-19 16:37:57', 'A', NULL, '2018-10-28 09:37:57', '2018-10-28 09:37:57'),
(13, 3, '2018-10-26 00:00:00', '2018-10-26 16:38:17', 'A', NULL, '2018-10-28 09:38:17', '2018-10-28 09:38:17'),
(14, 3, '2018-10-28 00:00:00', '2018-10-28 16:38:41', 'I', 'Panggilan orang tua', '2018-10-28 09:38:41', '2018-10-28 09:38:41'),
(15, 2, '2018-10-28 00:00:00', '2018-10-28 00:00:00', 'I', 'Sakit', '2018-10-28 09:47:20', '2018-10-28 09:47:20'),
(17, 3, '2018-11-01 00:00:00', '2018-11-01 00:00:00', 'A', 'MATI RASA', '2018-11-01 04:21:16', '2018-11-01 04:21:16'),
(18, 4, '2018-10-31 00:00:00', '2018-10-31 00:00:00', 'A', 'PATAH CINTA', '2018-11-01 04:22:05', '2018-11-01 04:22:05'),
(19, 5, '2018-11-07 22:51:20', '2018-11-07 22:51:26', 'I', NULL, NULL, NULL),
(20, 5, '2018-10-31 00:00:00', '2018-10-31 00:00:00', 'I', 'Jatuh Cinta', '2018-11-01 14:45:41', '2018-11-01 14:45:41'),
(21, 2, '2018-11-05 00:00:00', '2018-11-05 00:00:00', 'A', NULL, NULL, NULL),
(22, 5, '2018-11-05 00:00:00', '2018-11-05 00:00:00', 'A', NULL, NULL, NULL),
(23, 3, '2018-11-06 00:00:00', '2018-11-06 00:00:00', 'I', NULL, NULL, NULL),
(24, 4, '2018-11-07 00:00:00', '2018-11-07 00:00:00', 'I', NULL, NULL, NULL),
(29, 2, '2018-11-08 00:00:00', '2018-11-08 00:00:00', 'A', 'Mati', '2018-11-08 11:45:41', '2018-11-08 11:45:41'),
(30, 5, '2018-11-08 00:00:00', '2018-11-08 00:00:00', 'I', 'Sakit', '2018-11-08 11:45:41', '2018-11-08 11:45:41'),
(31, 3, '2018-11-08 00:00:00', '2018-11-08 00:00:00', 'A', 'is dead', '2018-11-08 11:48:04', '2018-11-08 11:48:04'),
(32, 6, NULL, NULL, 'P', NULL, '2018-11-08 13:43:36', '2018-11-08 13:43:36'),
(33, 4, '2018-11-13 00:00:00', '2018-11-13 00:00:00', 'I', 'LAhir', '2018-11-13 04:38:34', '2018-11-13 04:38:34'),
(34, 2, '2018-11-13 00:00:00', '2018-11-13 00:00:00', 'A', NULL, '2018-11-13 04:41:18', '2018-11-13 04:41:18'),
(35, 5, '2018-11-14 00:00:00', '2018-11-14 00:00:00', 'I', NULL, '2018-11-13 04:43:08', '2018-11-13 04:43:08'),
(36, 2, '2018-11-15 00:00:00', '2018-11-15 00:00:00', 'I', 'lahir', '2018-11-13 04:59:50', '2018-11-13 04:59:50'),
(37, 5, '2018-11-15 00:00:00', '2018-11-15 00:00:00', 'A', 'mati', '2018-11-13 04:59:50', '2018-11-13 04:59:50'),
(38, 4, '2018-11-13 00:00:00', '2018-11-13 00:00:00', 'I', 'IFANI', '2018-11-13 05:00:58', '2018-11-13 05:00:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `auto_numbers`
--

INSERT INTO `auto_numbers` (`id`, `name`, `number`, `created_at`, `updated_at`) VALUES
(1, '47146c6f412d706bd0d0faf66ec58f65', 6, '2018-09-19 02:21:03', '2018-11-08 13:43:36'),
(2, '719f39309907b6901697626757036642', 1, '2018-09-19 02:22:43', '2018-09-19 02:22:43'),
(3, 'e33297705650b454864e8c99b01c65e7', 1, '2018-09-21 01:22:56', '2018-09-21 01:22:56'),
(4, '2ed42dfb82afd1a5a73f150984c99b29', 1, '2018-10-13 03:55:51', '2018-10-13 03:55:51'),
(5, '9d5a1685793e60619af3a9b5962232fe', 1, '2018-10-30 04:01:24', '2018-10-30 04:01:24'),
(6, 'd6414299ab5a86405f3611decb271332', 5, '2018-11-01 09:48:37', '2018-11-01 10:16:14'),
(7, 'be5754bd78f7d0cb1cd69669b277a59b', 1, '2018-11-01 10:17:32', '2018-11-01 10:17:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Baru', NULL, NULL),
(2, 'Aktif', NULL, NULL),
(3, 'Resign', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `docs`
--

CREATE TABLE `docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `docs`
--

INSERT INTO `docs` (`id`, `doc`, `created_at`, `updated_at`) VALUES
(1, 'KTP', NULL, NULL),
(2, 'IJAZAH', NULL, NULL),
(3, 'AKTE', NULL, NULL),
(4, 'FOTO', NULL, NULL),
(5, 'SURAT LAMARAN', NULL, NULL),
(6, 'DAFTAR RIWAYAT HIDUP', NULL, NULL),
(7, 'KARTU KELUARGA (KK)', NULL, NULL),
(8, 'SKCK', NULL, NULL),
(9, 'SURAT KETERANGAN DOKTER', NULL, '2018-10-25 02:01:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doc_karyawan`
--

CREATE TABLE `doc_karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED NOT NULL,
  `doc_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `doc_karyawan`
--

INSERT INTO `doc_karyawan` (`id`, `karyawan_id`, `doc_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 1, 9, NULL, NULL),
(10, 2, 1, NULL, NULL),
(13, 2, 4, NULL, NULL),
(14, 2, 5, NULL, NULL),
(16, 2, 7, NULL, NULL),
(17, 2, 8, NULL, NULL),
(18, 2, 9, NULL, NULL),
(19, 3, 1, NULL, NULL),
(21, 3, 3, NULL, NULL),
(23, 3, 5, NULL, NULL),
(24, 3, 6, NULL, NULL),
(25, 3, 7, NULL, NULL),
(27, 3, 9, NULL, NULL),
(28, 4, 1, NULL, NULL),
(29, 4, 2, NULL, NULL),
(30, 4, 5, NULL, NULL),
(31, 4, 6, NULL, NULL),
(32, 4, 7, NULL, NULL),
(33, 4, 8, NULL, NULL),
(34, 5, 1, NULL, NULL),
(35, 5, 2, NULL, NULL),
(36, 5, 3, NULL, NULL),
(37, 5, 4, NULL, NULL),
(38, 5, 5, NULL, NULL),
(39, 5, 6, NULL, NULL),
(40, 5, 7, NULL, NULL),
(41, 5, 8, NULL, NULL),
(42, 5, 9, NULL, NULL),
(43, 6, 1, NULL, NULL),
(44, 6, 2, NULL, NULL),
(45, 6, 3, NULL, NULL),
(46, 6, 4, NULL, NULL),
(47, 6, 5, NULL, NULL),
(48, 6, 6, NULL, NULL),
(49, 6, 7, NULL, NULL),
(50, 6, 8, NULL, NULL),
(51, 6, 9, NULL, NULL),
(52, 2, 2, NULL, NULL),
(53, 2, 3, NULL, NULL),
(54, 2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'A', '2018-09-11', '2018-09-12', '2018-09-19 01:20:36', '2018-09-19 01:20:36'),
(2, 'P', '2018-09-11', '2018-09-13', '2018-09-19 01:20:36', '2018-09-19 01:20:36'),
(3, 'A', '2018-09-14', '2018-09-14', '2018-09-19 01:20:36', '2018-09-19 01:20:36'),
(4, 'I', '2018-09-17', '2018-09-17', '2018-09-19 01:20:36', '2018-09-19 01:20:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', NULL, NULL),
(2, 'KARU ESB', NULL, NULL),
(3, 'CS', NULL, NULL),
(4, 'GUDANG', NULL, NULL),
(5, 'KARU GILING', NULL, NULL),
(6, 'GILING', NULL, NULL),
(7, 'MIXER', NULL, NULL),
(8, 'EVA 1', NULL, NULL),
(9, 'EVA 2', NULL, NULL),
(10, 'EVA 3', NULL, NULL),
(11, 'SERI EVA', NULL, NULL),
(12, 'BAHAN EVA', NULL, NULL),
(13, 'KARU INJECT', NULL, NULL),
(14, 'INJECT 1', NULL, NULL),
(15, 'INJECT 2', NULL, NULL),
(16, 'INJECT 3', NULL, NULL),
(17, 'SERI INJECT', NULL, NULL),
(18, 'SABLON', NULL, NULL),
(19, 'JAPIT', NULL, NULL),
(20, 'TARIK', NULL, NULL),
(21, 'TEMPEL', NULL, NULL),
(22, 'VARIASI 1', NULL, NULL),
(23, 'VARIASI 2', NULL, NULL),
(24, 'PACKING', NULL, NULL),
(25, 'QC', NULL, NULL),
(26, 'TEKNIK', NULL, NULL),
(27, 'MATRAS', NULL, NULL),
(28, 'SATPAM', NULL, NULL),
(29, 'TRAINING CAT', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_melamar` datetime NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `noktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `warganegara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kos` text COLLATE utf8mb4_unicode_ci,
  `nama_ibu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_absen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_wali` text COLLATE utf8mb4_unicode_ci,
  `nohp_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapat_bekerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cek` int(11) DEFAULT '0',
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `order_number`, `image`, `tgl_melamar`, `kategori`, `jabatan_id`, `noktp`, `nama`, `umur`, `slug`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tgl_lahir`, `warganegara`, `status`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `alamat_lengkap`, `alamat_kos`, `nama_ibu`, `nokk`, `jumlah_anak`, `nohp`, `berat_badan`, `kode_absen`, `tinggi_badan`, `nama_wali`, `alamat_wali`, `nohp_wali`, `dapat_bekerja`, `cek`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'SDK00001', 'uploads/karyawans/1537323663swan-color.png', '2018-09-19 00:00:00', 'PEGAWAI BORONGAN', 18, '786876876', 'intan', '20', '786876876', 'PEREMPUAN', 'ISLAM', 'sampang', '1998-09-19 00:00:00', 'indo', 'BELUM MENIKAH', 'jatim', 'sampang', 'kdsjakljf', 'uhkuh', 'kjhkjhkjh', NULL, 'sita', '76876', NULL, '876876876', '65', '110', '165', NULL, NULL, NULL, 'dsfgdsf', 1, 2, 2, '2018-09-19 02:21:03', '2018-10-24 16:47:06'),
(2, 'SDK00002', 'uploads/karyawans/1537326757tw.png', '2018-09-19 00:00:00', 'PEGAWAI BORONGAN', 6, '76876876', 'khoirotun nisa', '25', '76876876', 'LAKI-LAKI', 'ISLAM', 'jombang', '1993-09-19 00:00:00', 'indo', 'MENIKAH', 'jatim', 'tarto', 'mionang', 'mimbar', 'sudut kardus', NULL, 'isnaini', '67868', '1', '6876875454543333', '67', '22', '167', NULL, NULL, NULL, 'sekarang', 1, 2, 1, '2018-09-19 03:12:37', '2018-11-01 04:16:23'),
(3, 'SDK00003', 'uploads/karyawans/1537336684tw.png', '2018-09-19 00:00:00', 'PEGAWAI KONTRAK', 18, '675765675', 'Karung sari', '22', '675765675', 'LAKI-LAKI', 'ISLAM', 'mokokerto', '1997-09-19 00:00:00', 'indo', 'BELUM MENIKAH', 'jatim', 'mojokerto', 'gondang', 'pohjejer', 'juet rejo', NULL, 'mita', '87567576', NULL, '65675675', '65', '330', '165', NULL, NULL, NULL, 'sekarang', 1, 2, 2, '2018-09-19 05:58:05', '2018-10-24 16:47:06'),
(4, 'SDK00004', 'uploads/karyawans/153965591141742868_254059001960679_314182758832732175_n.jpg', '2018-10-16 00:00:00', 'PEGAWAI KONTRAK', 6, '2761236673222733', 'Zahra Ifani', '18', '2761236673222733', 'PEREMPUAN', 'ISLAM', 'Banjar masin', '2001-10-16 00:00:00', 'indo', 'BELUM MENIKAH', 'kalimantan timur', 'banjar masin', 'serak luntung', 'pinggiran', 'jln Kh yani ahmad no 1 gg 1 rt/rw.2', NULL, 'Mika Assyarif', '27894674543', NULL, '085343484744', '50', '65465', '160', NULL, NULL, NULL, 'sekarang', 1, 2, 2, '2018-10-16 02:11:51', '2018-11-01 04:17:52'),
(5, 'SDK00005', NULL, '2018-10-28 00:00:00', 'PEGAWAI BORONGAN', 6, '6567567', 'Sita Kumala Dewi', '23', '6567567', 'PEREMPUAN', 'ISLAM', 'mojokerto', '1990-10-28 00:00:00', 'indo', 'PERNAH MENIKAH', 'jatim', 'mojokerto', 'gondang', 'pohjejer', 'juet rejo', NULL, 'kismis', '1424535645', '1', '764767667r76', '45', '78787', '55', NULL, NULL, NULL, 'sekarang', 1, 2, 2, '2018-11-01 07:02:56', '2018-11-01 04:19:25'),
(6, 'SDK00006', 'uploads/karyawans/1541684616large.jpg', '2018-11-08 00:00:00', 'PEGAWAI HARIAN', 10, '7867868768768', 'Mahfud Mamad', '23', '7867868768768', 'LAKI-LAKI', 'ISLAM', 'Bandung', '1995-06-10 00:00:00', 'indo', 'BELUM MENIKAH', 'jabar', 'sumedang', 'gondang', 'pohkecik', 'kecik raya setelah jalan', NULL, 'Sittung', '78768676877676', NULL, '017203704763', '55', NULL, '165', NULL, NULL, NULL, 'Sekarang', 1, 1, 1, '2018-11-08 13:43:36', '2018-11-13 04:34:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan_permintaan`
--

CREATE TABLE `karyawan_permintaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `permintaan_id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan_permintaan`
--

INSERT INTO `karyawan_permintaan` (`id`, `permintaan_id`, `karyawan_id`, `created_at`, `updated_at`) VALUES
(47, 2, 2, '2018-10-21 13:03:36', '2018-10-21 13:03:36'),
(53, 3, 1, '2018-10-24 16:02:50', '2018-10-24 16:02:50'),
(54, 3, 3, '2018-10-24 16:39:19', '2018-10-24 16:39:19'),
(57, 2, 4, '2018-11-01 04:17:27', '2018-11-01 04:17:27'),
(58, 2, 5, '2018-11-01 04:18:41', '2018-11-01 04:18:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecelakaans`
--

CREATE TABLE `kecelakaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `tgl_kec` datetime DEFAULT NULL,
  `karena` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecelakaans`
--

INSERT INTO `kecelakaans` (`id`, `karyawan_id`, `tgl_kec`, `karena`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, NULL, NULL, NULL, '2018-09-19 03:12:38', '2018-09-19 03:12:38'),
(3, 3, NULL, NULL, NULL, '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(4, 4, NULL, NULL, NULL, '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, NULL, NULL, NULL, '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(6, 1, '2018-10-30 20:25:37', 'Kena mesin giling', 'Harus di amputasi', '2018-10-31 01:30:54', '2018-10-31 01:30:54'),
(7, 2, '2018-11-08 00:00:00', 'Kena Mesin', 'PAtah', '2018-11-08 13:33:18', '2018-11-08 13:33:18'),
(8, 6, NULL, NULL, NULL, '2018-11-08 13:43:36', '2018-11-08 13:43:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_03_055212_create_auto_numbers', 1),
(4, '2018_07_06_043822_create_jabatans_table', 1),
(5, '2018_07_06_045753_create_categories_table', 1),
(6, '2018_07_07_033649_create_profiles_table', 1),
(7, '2018_07_07_033958_create_karyawans_table', 1),
(8, '2018_07_07_043250_create_docs_table', 1),
(9, '2018_07_12_152649_create_doc_karyawan_table', 1),
(10, '2018_07_13_013152_create_pendidikans_table', 1),
(11, '2018_07_13_013246_create_nonpendidikans_table', 1),
(12, '2018_07_15_041029_create_pengalamen_table', 1),
(13, '2018_07_17_124635_create_permintaans_table', 1),
(14, '2018_07_26_024255_create_absensis_table', 1),
(15, '2018_07_26_024344_create_sps_table', 1),
(16, '2018_07_26_024505_create_pkwts_table', 1),
(17, '2018_07_27_031048_create_kecelakaans_table', 1),
(18, '2018_09_05_221629_create_verifies_table', 1),
(19, '2018_09_12_091351_create_verify_orders_table', 1),
(20, '2018_09_12_190538_create_events_table', 1),
(21, '2018_09_18_163333_create_permintaan_karyawan_table', 1),
(22, '2018_10_13_104116_create_karyawan_permintaan_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nonpendidikans`
--

CREATE TABLE `nonpendidikans` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `jenis_pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembaga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nonpendidikans`
--

INSERT INTO `nonpendidikans` (`id`, `karyawan_id`, `jenis_pendidikan`, `lembaga`, `kota`, `tahun`, `durasi`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, 'Kursus Agama', 'Majlis Taklim', 'Jombang', '2017', '1 tahun', '2018-09-19 03:12:38', '2018-11-08 13:59:30'),
(3, 3, NULL, NULL, NULL, NULL, NULL, '2018-09-19 05:58:05', '2018-09-19 05:58:05'),
(4, 4, NULL, NULL, NULL, NULL, NULL, '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, NULL, NULL, NULL, NULL, NULL, '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(6, 6, 'les bahasa inggris', 'genta', 'kediri', '2016', '5', '2018-11-08 13:43:36', '2018-11-08 13:43:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_formal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `karyawan_id`, `pendidikan`, `nama_sekolah`, `kota_formal`, `jurusan`, `mulai`, `lulus`, `created_at`, `updated_at`) VALUES
(1, 1, 'SMA/SMK', 'dfsg', 'sdfg', 'gdsf', '2013', '2013', '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, 'SMA/SMK', 'smk asal jadi', 'jombang', 'apk', '2010', '2012', '2018-09-19 03:12:38', '2018-09-19 03:12:38'),
(3, 3, 'SMA/SMK', 'sma asal', 'mojokerto', 'Ipa', '2013', '2015', '2018-09-19 05:58:05', '2018-09-19 05:58:05'),
(4, 4, 'SMA/SMK', 'smk masih proses', 'banjar masin', 'akuntansi', '2015', '2018', '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, 'S1', 'uner', 'malang', 'akutansi', '2009', '2013', '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(6, 6, 'SMA/SMK', 'SMA Muasal', 'bandung', 'ipa', '2011', '2014', '2018-11-08 13:43:36', '2018-11-08 13:43:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalamen`
--

CREATE TABLE `pengalamen` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_usaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai_kerja` datetime DEFAULT NULL,
  `akhir_kerja` datetime DEFAULT NULL,
  `alasan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengalamen`
--

INSERT INTO `pengalamen` (`id`, `karyawan_id`, `nama_perusahaan`, `alamat_perusahaan`, `bidang_usaha`, `jabatan`, `gaji`, `mulai_kerja`, `akhir_kerja`, `alasan`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, 'pt asal muasal', 'madiun', 'usaha karupuk', 'packing', 'umk', '2015-07-03 00:00:00', '2018-02-01 00:00:00', 'Mati', '2018-09-19 03:12:38', '2018-11-08 13:59:30'),
(3, 3, NULL, NULL, NULL, NULL, NULL, '2018-10-13 00:00:00', '2018-10-13 00:00:00', NULL, '2018-09-19 05:58:05', '2018-10-13 03:59:20'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(6, 6, 'pt maju oke', 'surabaya', 'pabrik pelastil', 'driver', 'umk', '2017-06-07 00:00:00', '2018-01-03 00:00:00', 'lahiran', '2018-11-08 13:43:36', '2018-11-08 13:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaans`
--

CREATE TABLE `permintaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_tertulis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_order` datetime NOT NULL,
  `no_spk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bertemu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sistem_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kontrak` datetime NOT NULL,
  `tgl_habiskontrak` datetime NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cek` int(11) DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permintaans`
--

INSERT INTO `permintaans` (`id`, `order_number`, `bukti_tertulis`, `unit`, `tgl_order`, `no_spk`, `bertemu`, `jabatan_id`, `gaji`, `sistem_kerja`, `tgl_kontrak`, `tgl_habiskontrak`, `jenis_kelamin`, `jumlah`, `lulusan`, `usia`, `pengalaman`, `cek`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'MJA/0919/00001', 'ada', 'PT ASAL', '2018-09-19 00:00:00', '687687', 'saya', 10, 'umr', 'PEGAWAI KONTRAK', '2018-09-19 00:00:00', '2018-09-30 00:00:00', 'LAKI-LAKI', '5', 'SMA/SMK', '20', 'tidak', 1, 2, '2018-09-19 02:22:43', '2018-09-19 02:23:16'),
(2, 'MJA/0921/00001', 'Ada saya', 'pt. maknyus jaya', '2018-09-21 00:00:00', '42524343', 'saya pribadi', 6, 'UMR', 'PEGAWAI KONTRAK', '2018-09-01 00:00:00', '2018-09-29 00:00:00', 'LAKI-LAKI', '4', 'SMA/SMK', '21', 'tidak di utamakan', 1, 2, '2018-09-21 01:22:56', '2018-10-16 13:25:22'),
(3, 'MJA/1013/00001', 'sadf', 'asdf', '2018-10-13 00:00:00', '23', 'sadf', 18, '231231', 'PEGAWAI KONTRAK', '2018-10-13 00:00:00', '2018-10-20 00:00:00', 'LAKI-LAKI', '2', 'S1', '12', 'dgas', 1, 2, '2018-10-13 03:55:52', '2018-10-14 09:47:02'),
(4, 'MJA/1030/00001', NULL, 'kita akan jalan', '2018-10-28 00:00:00', '72477', 'bRAHMA WIJAYA', 11, 'UMK', 'PEGAWAI HARIAN', '2018-10-30 00:00:00', '2018-11-14 00:00:00', 'LAKI-LAKI', '3', 'SMA/SMK', '23', 'Tidak di utamakan', 0, 2, '2018-10-30 04:01:25', '2018-10-30 04:01:25'),
(5, 'MJA/1101/00001', NULL, 'opsal', '2018-11-01 00:00:00', '12', 'saya', 18, 'umr', 'PEGAWAI KONTRAK', '2018-11-01 00:00:00', '2018-11-02 00:00:00', 'PEREMPUAN', '10', 'SMA/SMK', '12', 'tidak', 0, 2, '2018-11-01 09:48:37', '2018-11-01 09:48:37'),
(6, 'MJA/1101/00002', 'sekarang', 'yuplaps', '2018-11-01 00:00:00', '2345', 'sya', 16, '10', 'PEGAWAI KONTRAK', '2018-11-01 00:00:00', '2018-11-03 00:00:00', 'PEREMPUAN', '5', 'SMA/SMK', '23', 'sekrang', 0, 2, '2018-11-01 09:49:50', '2018-11-01 09:49:50'),
(7, 'MJA/1101/00005', NULL, 'sya23', '2018-11-01 00:00:00', '875687', 'kjkld', 5, 'umk', 'PEGAWAI BORONGAN', '2018-11-01 00:00:00', '2018-11-01 00:00:00', 'LAKI-LAKI', '2', 'SMA/SMK', '21', 'Tidak di utamakan', 0, 2, '2018-11-01 10:16:14', '2018-11-01 10:16:14'),
(8, 'MJA/11/00001', NULL, 'MD234', '2018-11-01 00:00:00', '8768768', 'SAya', 12, 'umk', 'PEGAWAI BORONGAN', '2018-11-01 00:00:00', '2018-11-10 00:00:00', 'LAKI-LAKI', '3', 'SMA/SMK', '21', 'Tidak di utamakan', 0, 2, '2018-11-01 10:17:33', '2018-11-01 10:17:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkwts`
--

CREATE TABLE `pkwts` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_awal` datetime DEFAULT NULL,
  `tgl_sampai` datetime DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pkwts`
--

INSERT INTO `pkwts` (`id`, `karyawan_id`, `type`, `tgl_awal`, `tgl_sampai`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'KONTRAK KE 1', '2018-10-04 09:35:45', '2018-10-26 09:35:56', 'asem', '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, 'KONTRAK KE 1', '2018-10-04 09:35:45', '2018-10-26 09:35:56', 'coba ', '2018-09-19 03:12:38', '2018-09-19 03:12:38'),
(3, 3, 'KONTRAK KE 1', '2018-10-04 09:35:45', '2018-10-26 09:35:56', 'berapa', '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(4, 4, 'KONTRAK KE 1', '2018-10-04 09:35:45', '2018-10-26 09:35:56', 'kali', '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, 'KONTRAK KE 1', '2018-10-04 09:35:45', '2018-10-26 09:35:56', 'lagi', '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(7, 1, 'KONTRAK KE 1', '2018-10-01 00:00:00', '2018-10-26 00:00:00', 'Sekarang', '2018-10-31 02:09:48', '2018-10-31 02:09:48'),
(8, 1, NULL, NULL, NULL, NULL, '2018-10-31 02:42:21', '2018-10-31 02:42:25'),
(9, 6, NULL, NULL, NULL, '0', '2018-11-08 13:43:36', '2018-11-08 13:43:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `about`, `facebook`, `youtube`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '0', 'Apapun Oke Asal Jalan.', '0', '0', 1, '2018-09-19 01:16:05', '2018-09-19 01:16:05'),
(2, 'uploads/avatars/1.jpg', 'Apapun Oke Asal Jalan.', 'http://www.facebook.com/syarifuddin27', 'http://www.youtube.com', 2, '2018-09-19 01:16:06', '2018-09-19 01:16:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sps`
--

CREATE TABLE `sps` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sps`
--

INSERT INTO `sps` (`id`, `karyawan_id`, `status`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, '2018-09-19 02:21:03', '2018-09-19 02:21:03'),
(2, 2, NULL, NULL, NULL, '2018-09-19 03:12:38', '2018-09-19 03:12:38'),
(3, 3, NULL, NULL, NULL, '2018-09-19 05:58:06', '2018-09-19 05:58:06'),
(4, 4, NULL, NULL, NULL, '2018-10-16 02:11:52', '2018-10-16 02:11:52'),
(5, 5, NULL, NULL, NULL, '2018-10-29 07:02:56', '2018-10-29 07:02:56'),
(6, 2, 'SP 1', '2018-11-06 20:01:05', 'Sekarang', '2018-10-31 01:32:12', '2018-10-31 01:32:12'),
(7, 2, 'SP 1', '2018-11-08 00:00:00', 'Aktif', '2018-11-08 13:16:18', '2018-11-08 13:16:18'),
(8, 6, NULL, NULL, NULL, '2018-11-08 13:43:37', '2018-11-08 13:43:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Public', 'public@public.com', 0, '$2y$10$s2P69Ze8NLb4Y/lfptNecOiktSq7oz19DPwyCaM2yjUmSqQauLalK', NULL, '2018-09-19 01:16:05', '2018-09-19 01:16:05'),
(2, 'Syarifuddin', 'admin@admin.com', 1, '$2y$10$XxzXMmoCkYaq3VfXgXz7IO9.CFcq4C40gGrRXW.B2r0Xto1j51F1W', 'Lc6kFgPP5zghI4RSQnbhnVU8mssbN9a1K1orl8ZxCoCW54xUlYYiA5laIKPb', '2018-09-19 01:16:06', '2018-09-19 01:16:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifies`
--

CREATE TABLE `verifies` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `verifies`
--

INSERT INTO `verifies` (`id`, `karyawan_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Syarifuddin', '2018-09-19 02:21:18', '2018-09-19 02:21:18'),
(2, 2, 'Syarifuddin', '2018-09-19 06:03:44', '2018-09-19 06:03:44'),
(3, 3, 'Syarifuddin', '2018-09-28 14:07:07', '2018-09-28 14:07:07'),
(4, 4, 'Syarifuddin', '2018-10-16 13:56:45', '2018-10-16 13:56:45'),
(5, 5, 'Syarifuddin', '2018-11-01 04:15:14', '2018-11-01 04:15:14'),
(6, 6, 'Syarifuddin', '2018-11-13 04:34:32', '2018-11-13 04:34:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verify_orders`
--

CREATE TABLE `verify_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `permintaan_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `verify_orders`
--

INSERT INTO `verify_orders` (`id`, `permintaan_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Syarifuddin', '2018-09-19 02:23:16', '2018-09-19 02:23:16'),
(2, 3, 'Syarifuddin', '2018-10-14 09:47:02', '2018-10-14 09:47:02'),
(3, 2, 'Syarifuddin', '2018-10-16 13:25:22', '2018-10-16 13:25:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `doc_karyawan`
--
ALTER TABLE `doc_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_karyawan_karyawan_id_index` (`karyawan_id`),
  ADD KEY `doc_karyawan_doc_id_index` (`doc_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawans_category_id_foreign` (`category_id`),
  ADD KEY `karyawans_user_id_foreign` (`user_id`),
  ADD KEY `karyawans_jabatan_id_index` (`jabatan_id`);

--
-- Indeks untuk tabel `karyawan_permintaan`
--
ALTER TABLE `karyawan_permintaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan_permintaan_permintaan_id_index` (`permintaan_id`),
  ADD KEY `karyawan_permintaan_karyawan_id_index` (`karyawan_id`);

--
-- Indeks untuk tabel `kecelakaans`
--
ALTER TABLE `kecelakaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecelakaans_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nonpendidikans`
--
ALTER TABLE `nonpendidikans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nonpendidikans_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikans_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `pengalamen`
--
ALTER TABLE `pengalamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengalamen_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permintaans_jabatan_id_index` (`jabatan_id`),
  ADD KEY `permintaans_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `pkwts`
--
ALTER TABLE `pkwts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pkwts_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `sps`
--
ALTER TABLE `sps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sps_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `verifies`
--
ALTER TABLE `verifies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifies_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `verify_orders`
--
ALTER TABLE `verify_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verify_orders_permintaan_id_foreign` (`permintaan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `doc_karyawan`
--
ALTER TABLE `doc_karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan_permintaan`
--
ALTER TABLE `karyawan_permintaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `kecelakaans`
--
ALTER TABLE `kecelakaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `nonpendidikans`
--
ALTER TABLE `nonpendidikans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengalamen`
--
ALTER TABLE `pengalamen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pkwts`
--
ALTER TABLE `pkwts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sps`
--
ALTER TABLE `sps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `verifies`
--
ALTER TABLE `verifies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `verify_orders`
--
ALTER TABLE `verify_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `doc_karyawan`
--
ALTER TABLE `doc_karyawan`
  ADD CONSTRAINT `doc_karyawan_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doc_karyawan_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `karyawans_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `karyawans_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `karyawans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karyawan_permintaan`
--
ALTER TABLE `karyawan_permintaan`
  ADD CONSTRAINT `karyawan_permintaan_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `karyawan_permintaan_permintaan_id_foreign` FOREIGN KEY (`permintaan_id`) REFERENCES `permintaans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kecelakaans`
--
ALTER TABLE `kecelakaans`
  ADD CONSTRAINT `kecelakaans_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nonpendidikans`
--
ALTER TABLE `nonpendidikans`
  ADD CONSTRAINT `nonpendidikans_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD CONSTRAINT `pendidikans_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengalamen`
--
ALTER TABLE `pengalamen`
  ADD CONSTRAINT `pengalamen_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD CONSTRAINT `permintaans_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permintaans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pkwts`
--
ALTER TABLE `pkwts`
  ADD CONSTRAINT `pkwts_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sps`
--
ALTER TABLE `sps`
  ADD CONSTRAINT `sps_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `verifies`
--
ALTER TABLE `verifies`
  ADD CONSTRAINT `verifies_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`);

--
-- Ketidakleluasaan untuk tabel `verify_orders`
--
ALTER TABLE `verify_orders`
  ADD CONSTRAINT `verify_orders_permintaan_id_foreign` FOREIGN KEY (`permintaan_id`) REFERENCES `permintaans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
