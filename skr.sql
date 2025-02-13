-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2025 at 03:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skr`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan_id` bigint NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_berakhir` time NOT NULL,
  `keperluan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_private` tinyint(1) DEFAULT '0',
  `status` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `bidang`, `no_hp`, `tanggal`, `ruangan_id`, `waktu_mulai`, `waktu_berakhir`, `keperluan`, `is_private`, `status`, `created_at`, `updated_at`) VALUES
(259, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 10, '16:00:00', '16:50:00', 'tes', 0, 'pending', '2025-01-21 08:50:59', '2025-01-21 08:50:59'),
(260, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 2, '16:03:00', '16:15:00', 'yes', 0, 'pending', '2025-01-21 09:00:32', '2025-01-21 09:00:32'),
(261, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 3, '16:05:00', '16:15:00', 'tes', 0, 'pending', '2025-01-21 09:02:52', '2025-01-21 09:02:52'),
(262, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 9, '16:05:00', '16:15:00', 'tes', 0, 'pending', '2025-01-21 09:04:58', '2025-01-21 09:04:58'),
(263, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 8, '16:06:00', '16:17:00', 'rapat', 0, 'pending', '2025-01-21 09:06:02', '2025-01-21 09:06:02'),
(264, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 1, '16:10:00', '16:20:00', 'tes', 0, 'pending', '2025-01-21 09:08:14', '2025-01-21 09:08:14'),
(265, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 6, '17:30:00', '17:35:00', 'yes', 0, 'pending', '2025-01-21 09:13:07', '2025-01-21 09:13:07'),
(266, 'rizka', 'Bakordik', '085764655971', '2025-01-21', 3, '16:20:00', '17:00:00', 'yes', 0, 'pending', '2025-01-21 09:17:13', '2025-01-21 09:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_07_062133_create_table_ruangan', 2),
(6, '2024_05_07_062450_create_ruangan', 3),
(7, '2024_05_08_055516_create_booking_table', 4),
(8, '2024_05_08_060214_create_booking_table', 5),
(9, '2024_05_08_060513_create_booking_table', 6),
(10, '2024_05_08_060842_create_booking_table', 7),
(11, '2024_05_13_032053_create_roles_table', 8),
(12, '2024_05_16_084837_create_ruangan_table', 9),
(13, '2024_05_16_085238_create_ruangan_table', 10),
(14, '2024_05_30_135321_create_notifications_table', 11),
(15, '2024_06_07_095817_create_notifications_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nafisyahalyana42@gmail.com', '$2y$12$FZe5kvjyH002Z525jsbBUOr3n0V9eohPZAGb6Kcr.L4pSZArTjSt6', '2025-01-06 10:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-05-12 20:37:56', '2024-05-12 20:37:56'),
(2, 'Karyawan', '2024-05-12 20:37:56', '2024-05-12 20:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` bigint NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `ruangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Auditorium', 1, '2024-05-16 01:55:32', '2025-01-21 09:08:14'),
(2, 'Ruang Bakordik', 0, '2024-05-16 01:55:46', '2025-01-21 09:00:32'),
(3, 'Ruang Komdis', 1, '2024-05-16 01:55:58', '2025-01-21 09:17:13'),
(4, 'Ruang Komdis (Timur)', 0, '2024-05-20 19:24:05', '2024-07-09 08:49:47'),
(5, 'Ruang Komdis (Barat)', 0, '2024-05-20 19:24:18', '2025-01-21 08:31:59'),
(6, 'Ruang Rapat Lt 5', 1, '2024-05-20 19:24:34', '2025-01-21 09:13:07'),
(7, 'Ruang Rapat Lt 5 (Timur)', 0, '2024-05-20 19:24:48', '2024-07-12 01:46:32'),
(8, 'Ruang Rapat Lt 5 (Barat)', 0, '2024-05-20 19:25:00', '2025-01-21 09:17:13'),
(9, 'Studio Lt 6', 0, '2024-05-20 19:25:14', '2025-01-21 09:17:13'),
(10, 'Ruang Sudjak', 0, '2024-05-20 19:25:27', '2025-01-21 08:50:59'),
(11, 'Ruangan berkah', 0, '2024-05-28 01:49:39', '2024-07-10 01:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `divisi`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'alyana', '', 'nafisyahalyana42@gmail.com', 1, NULL, '$2y$12$1DnAx4n0Tqc80w.efp8oEuQJLPWz2uhvN1Ae57OD8CXGBHpgDgqhy', NULL, '2024-10-18 02:16:06', '2024-10-18 02:16:06'),
(9, 'rizka', 'Bakordik', '2111501021@student.unisayogya.ac.id', 2, NULL, '$2y$12$wWN2mw7air3pbAdoR6y5oOBPWPvgZoFnKOdgQym5PWBLEhKLdjUbO', NULL, '2025-01-06 08:17:56', '2025-01-06 08:17:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruangan_id` (`ruangan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
