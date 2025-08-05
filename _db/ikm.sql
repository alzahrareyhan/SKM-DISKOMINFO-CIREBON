-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 02:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuesioner_id` bigint(20) UNSIGNED NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `uuid`, `kuesioner_id`, `responden_id`, `answer`, `created_at`, `updated_at`) VALUES
(136, 'bfb8e956-3615-4502-9dc7-34a81acef6be', 1, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(137, 'd304a696-bb62-42d9-bd53-290baf9fcff6', 2, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(138, '11606eb8-0a51-4908-b834-ba41265a1061', 3, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(139, '55e9e6f8-c171-4a3d-8583-e3d21de6c6c5', 4, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(140, 'e57cd34f-47df-42c6-8fc1-90e3c659f972', 5, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(141, '268a771a-ce25-48a4-80ee-6f9445af0bcf', 6, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(142, '3183ac39-bc85-426e-bf6f-55e7e2bbd9d2', 7, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(143, '8fc37e92-c993-43d6-8e5e-561438a636ba', 8, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(144, '3e160e23-3d47-474c-a54e-fbbd077ee067', 9, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(145, '32aba772-55d0-4901-bcf4-c1f0b7eac823', 10, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(146, 'e9c76169-633e-4416-9d3e-7382fa9ee149', 11, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(147, '16efd6b2-fcc2-4750-be72-29f4116b83da', 12, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(148, '6b08b589-af4a-443b-9f7b-627c8dbad5a1', 13, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(149, '10310e05-c896-4190-aa70-eb6aea5fe889', 14, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(150, '65f750b6-48ec-40be-ae7e-818062dc4a3c', 15, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(151, 'f95d33fc-f309-4c16-9da0-f6e26dd2fa7e', 16, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(152, '61880d32-6a36-4a1e-b59d-b36c6e54b1dc', 17, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(153, 'c1621a5b-2aa0-4c73-a68a-7fef0ed2d3a5', 18, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(154, '78baab4f-8a7a-4198-b395-01c66a8741b4', 19, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(155, 'dae48dd8-e8c4-4fba-b41b-f13c9b762ce4', 20, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(156, 'df138547-695a-4717-aef4-4d6ee3affae2', 21, 6, 3, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(157, '6318e70c-7540-413b-be88-d1a61c03178e', 22, 6, 2, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(158, '7b224d11-f87b-40dc-9bd3-c803bdae688c', 23, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(159, '38afe326-9fe1-4667-846a-8f4624eff62b', 24, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(160, 'd5da8589-2ef7-42f5-85b0-45f42e287dac', 25, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(161, '3f7c1b5c-78a9-4b6c-ab3d-506b209fd27b', 26, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21'),
(162, 'c2e7ba70-f89c-4c43-ba23-979cb9c5a9b9', 27, 6, 4, '2024-08-29 00:09:21', '2024-08-29 00:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uuid`, `responden_id`, `feedback`, `created_at`, `updated_at`) VALUES
(6, 'c69b4601-5a0d-4030-9dbe-15c0c37d61a3', 6, 'TIDAK ADA YANG SEMPURNA', '2024-08-29 00:09:21', '2024-08-29 00:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unsur_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `uuid`, `unsur_id`, `question`, `created_at`, `updated_at`) VALUES
(1, '11508100-ff01-4202-a616-88efbcf1b9ad', 1, 'Seberapa jelas dan mudah dipahami persyaratan yang diberikan?', '2024-01-14 22:55:37', '2024-01-14 22:55:37'),
(2, '054628a9-23e1-4034-b000-0a807cc0aeda', 1, 'Apakah Anda mengalami kesulitan dalam memenuhi persyaratan yang ditetapkan?', '2024-01-14 22:55:55', '2024-01-14 22:55:55'),
(3, '5c0b7c17-a3c2-49eb-b86d-bfd5337a7d26', 1, 'Bagaimana tingkat kepuasan Anda terhadap informasi yang disediakan tentang persyaratan?', '2024-01-14 22:56:14', '2024-01-14 22:56:14'),
(4, '84356f8d-7cbb-4798-b17e-779002b03f5b', 2, 'Sejauh mana prosedur pelayanan terlihat efisien dan efektif bagi Anda?', '2024-01-14 22:56:30', '2024-01-14 22:56:30'),
(5, '6974f48f-07fa-4964-bf9e-31c3426ed0cb', 2, 'Apakah ada aspek prosedur yang menurut Anda perlu ditingkatkan atau disederhanakan?', '2024-01-14 22:56:43', '2024-01-14 22:56:43'),
(6, '35ccf79c-e4e1-4658-a754-d5f9ba1beb45', 2, 'Bagaimana pengalaman Anda dalam mengikuti prosedur pelayanan?', '2024-01-14 22:56:55', '2024-01-14 22:56:55'),
(7, '355f92c0-de11-4736-b9fc-8840a761258d', 3, 'Seberapa cepat pelayanan diberikan sesuai dengan waktu yang dijanjikan?', '2024-01-14 22:57:11', '2024-01-14 22:57:11'),
(8, 'a0ea5eb9-03f5-4a02-bd31-b8c8fbfc93a9', 3, 'Apakah ada peningkatan yang dapat dilakukan dalam mengurangi waktu tunggu?', '2024-01-14 22:57:23', '2024-01-14 22:57:23'),
(9, '1b7be547-ae6f-43bf-a8ea-610fff68fcb6', 3, 'Bagaimana tingkat kepuasan Anda terhadap kecepatan pelayanan yang diberikan?', '2024-01-14 22:57:35', '2024-01-14 22:57:35'),
(10, '91343c91-bfcb-4bb3-9b06-5ef43a20c089', 4, 'Apakah biaya yang dikenakan sesuai dengan kualitas pelayanan yang Anda terima?', '2024-01-14 22:57:50', '2024-01-14 22:57:50'),
(11, 'e03a88b8-1ba6-49ac-b729-230c0164334c', 4, 'Apakah ada klarifikasi yang diperlukan terkait dengan biaya tarif?', '2024-01-14 22:58:02', '2024-01-14 22:58:02'),
(12, '141bb390-47b0-4663-b71a-76d42c81c121', 4, 'Bagaimana tingkat kepuasan Anda terhadap nilai uang dari biaya yang dikeluarkan?', '2024-01-14 22:58:13', '2024-01-14 22:58:13'),
(13, '002e4bef-505a-4247-819d-cd59f471622a', 5, 'Apakah produk layanan yang diberikan memenuhi harapan Anda?', '2024-01-14 22:58:28', '2024-01-14 22:58:28'),
(14, '0264e4ba-9d67-444d-bd9d-1a466bdfc56e', 5, 'Apakah ada aspek khusus dari produk layanan yang menurut Anda perlu diperbaiki?', '2024-01-14 22:58:41', '2024-01-14 22:58:41'),
(15, 'de5247fd-0515-4c7e-8234-e2dea8a72a81', 5, 'Bagaimana tingkat kepuasan Anda terhadap variasi produk layanan yang ditawarkan?', '2024-01-14 22:58:58', '2024-01-14 22:58:58'),
(16, 'f23c6940-8c3f-450f-8633-28b2bca657d2', 6, 'Seberapa kompeten dan berpengetahuan para pelaksana dalam memberikan pelayanan?', '2024-01-14 22:59:12', '2024-01-14 22:59:12'),
(17, '3fefea20-2e34-4136-b812-5dcc3ad22ecf', 6, 'Apakah Anda merasa puas dengan tingkat keahlian para pelaksana?', '2024-01-14 22:59:25', '2024-01-14 22:59:25'),
(18, '460868fb-7d8a-47ec-bcc5-fc34e171a075', 6, 'Apakah ada area di mana pelaksana dapat meningkatkan kompetensinya?', '2024-01-14 22:59:36', '2024-01-14 22:59:36'),
(19, '2aa16fa2-ce75-4ec5-91fc-9528602ac94c', 7, 'Sejauh mana pelaksana memberikan pelayanan dengan sikap ramah dan profesional?', '2024-01-14 22:59:50', '2024-01-14 22:59:50'),
(20, '844c230b-7d49-4255-9db2-961c2a781219', 7, 'Apakah Anda pernah mengalami perilaku pelaksana yang tidak diinginkan?', '2024-01-14 23:00:04', '2024-01-14 23:00:04'),
(21, '1ead8b92-3d05-4853-9e60-18e6f293a40d', 7, 'Bagaimana tingkat kepuasan Anda terhadap interaksi dengan pelaksana?', '2024-01-14 23:00:17', '2024-01-14 23:00:17'),
(22, '7e32213f-0a7e-4b46-aedc-2cb852a20a89', 8, 'Bagaimana kualitas sarana dan prasarana yang disediakan untuk pelayanan?', '2024-01-14 23:00:30', '2024-01-14 23:00:30'),
(23, '232a6ebd-2fc3-426f-a882-cec97c5795ae', 8, 'Apakah ada fasilitas atau peralatan yang perlu diperbaiki atau ditingkatkan?', '2024-01-14 23:00:43', '2024-01-14 23:00:43'),
(24, '088a0579-f6ad-44c6-bf52-bb3f57576720', 8, 'Bagaimana tingkat kepuasan Anda terhadap kondisi sarana dan prasarana?', '2024-01-14 23:00:59', '2024-01-14 23:00:59'),
(25, 'f75abcf3-d46f-4513-aaff-5e32a9c41e5f', 9, 'Apakah Anda puas dengan cara pengaduan Anda ditangani?', '2024-01-14 23:01:16', '2024-01-14 23:01:16'),
(26, '99998a6d-29b2-4d50-8582-4ab4e32c540e', 9, 'Apakah ada saran yang dapat diberikan untuk meningkatkan proses penanganan pengaduan?', '2024-01-14 23:01:30', '2024-01-14 23:01:30'),
(27, '7b738ff6-3719-4ce7-9a8c-77097808a08d', 9, 'Bagaimana tingkat kepuasan Anda terhadap respons terhadap pengaduan yang Anda ajukan?', '2024-01-14 23:01:43', '2024-01-14 23:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2019_12_14_000002_create_unsurs_table', 1),
(6, '2023_09_27_175259_create_villages_table', 1),
(7, '2023_09_27_175260_create_kuesioners_table', 1),
(8, '2023_09_29_175629_create_respondens_table', 1),
(9, '2023_09_29_175758_create_answers_table', 1),
(10, '2023_10_01_081531_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `respondens`
--

CREATE TABLE `respondens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respondens`
--

INSERT INTO `respondens` (`id`, `uuid`, `name`, `gender`, `age`, `education`, `job`, `village_id`, `created_at`, `updated_at`) VALUES
(6, '2a4fd828-11ae-4617-a155-0473b52e8315', 'Reyhan Nandita Al Zahra', 'Laki-laki', 21, 'SMA', 'Pelajar/Mahasiswa', 17, '2024-08-29 00:09:21', '2024-08-29 00:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `unsurs`
--

CREATE TABLE `unsurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unsur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unsurs`
--

INSERT INTO `unsurs` (`id`, `unsur`, `created_at`, `updated_at`) VALUES
(1, 'Persyaratan', '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(2, 'Prosedur', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(3, 'Waktu Pelayanan', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(4, 'Biaya Tarif', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(5, 'Produk Layanan', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(6, 'Kompetensi Pelaksana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(7, 'Perilaku Pelaksana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(8, 'Sarana dan Prasarana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(9, 'Penanganan Pengaduan', '2024-01-14 22:06:10', '2024-01-14 22:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin IKM', 'admin@admin.com', '2024-01-14 22:06:08', '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile.png', 'V0VpEa8Wfz', '2024-01-14 22:06:08', '2024-01-14 22:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `uuid`, `village`, `allowDelete`, `created_at`, `updated_at`) VALUES
(17, '64597333-bc94-4848-9d75-4de9f1439e39', 'Dinas Komunikasi', 0, '2024-08-29 00:05:21', '2024-08-29 00:05:21'),
(18, '39a2fa3c-ebb2-4ffb-8416-b3cd12c54041', 'Dinas Pendidikan', 0, '2024-10-07 18:00:33', '2024-10-07 18:01:11'),
(19, '6d553c3c-817a-4ae8-a486-1e8c41c4bfe6', 'Disdukcapil', 0, '2024-10-07 18:01:23', '2024-10-13 22:42:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `answers_uuid_unique` (`uuid`),
  ADD KEY `answers_kuesioner_id_foreign` (`kuesioner_id`),
  ADD KEY `answers_responden_id_foreign` (`responden_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_uuid_unique` (`uuid`),
  ADD KEY `feedback_responden_id_foreign` (`responden_id`);

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kuesioners_uuid_unique` (`uuid`),
  ADD KEY `kuesioners_unsur_id_foreign` (`unsur_id`);

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
-- Indexes for table `respondens`
--
ALTER TABLE `respondens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `respondens_uuid_unique` (`uuid`),
  ADD KEY `respondens_village_id_foreign` (`village_id`);

--
-- Indexes for table `unsurs`
--
ALTER TABLE `unsurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `villages_uuid_unique` (`uuid`),
  ADD UNIQUE KEY `villages_village_unique` (`village`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unsurs`
--
ALTER TABLE `unsurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_kuesioner_id_foreign` FOREIGN KEY (`kuesioner_id`) REFERENCES `kuesioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_unsur_id_foreign` FOREIGN KEY (`unsur_id`) REFERENCES `unsurs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `respondens`
--
ALTER TABLE `respondens`
  ADD CONSTRAINT `respondens_village_id_foreign` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
