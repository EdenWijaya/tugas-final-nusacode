-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 02:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denz_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_24_151658_add_is_admin_to_users_table', 2),
(5, '2024_07_25_091201_create_motors_table', 3),
(6, '2024_07_26_084241_create_pesans_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_motor` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `harga_sewa` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `jumlah_kursi` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `charger` tinyint(1) NOT NULL,
  `hybrid` tinyint(1) NOT NULL,
  `tumbler_space` tinyint(1) NOT NULL,
  `GPS` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `nama_motor`, `slug`, `harga_sewa`, `gambar`, `bahan_bakar`, `jumlah_kursi`, `transmisi`, `status`, `deskripsi`, `charger`, `hybrid`, `tumbler_space`, `GPS`, `created_at`, `updated_at`) VALUES
(1, 'Sujuki Hayabusa', 'sujuki-hayabusa', '500000', 'assets/motor/jQRbnQVclGLIdooBl2LwfacNfYbR5qh3GecndOLl.jpg', 'Pertamax Turbo', '1', 'manual', 'tersedia', 'Paten pokonya', 1, 1, 0, 1, '2024-07-25 10:06:11', '2024-07-26 03:54:32'),
(4, 'Honda Vario 160', 'honda-vario-160', '230000', 'assets/motor/RVPLSU5Z7P4DTlnqrgky5oyazq5OlnBbQLK9hn58.jpg', 'Pertalite', '2', 'manual', 'tersedia', 'matic paten', 1, 0, 1, 1, '2024-07-26 03:35:53', '2024-07-26 03:57:57'),
(5, 'Honda Revo 110', 'honda-revo-110', '115000', 'assets/motor/rPd3a2eLsAaPRkOhVU4n9BpnYxPFW2qoSym0XHJe.jpg', 'pertalite', '2', 'manual', 'tersedia', 'keren', 0, 0, 0, 0, '2024-07-26 03:59:05', '2024-07-26 04:03:55'),
(6, 'Astrea Prima', 'astrea-prima', '95000', 'assets/motor/oEYbtg9FLDAdCbRKOV66K1Iy5cJyQYdN00WGilZI.jpg', 'pertalite', '2', 'manual', 'tersedia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 0, 0, 0, 0, '2024-07-26 04:23:50', '2024-07-26 04:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@example.com', '$2y$12$v9G3crNZlmxEjWc4Jg1XM.ICIV9i6nA2KRLbbC1tB0ljn/2sZch1u', '2024-07-24 10:48:16'),
('artisindonesia49@gmail.com', '$2y$12$3lXYYFjblNtD6SZ3RafAgeDChanyo86VIQJl2aVAzRNkbWOmRKs3y', '2024-07-24 10:48:44'),
('timmogiovani49@gmail.com', '$2y$12$W/wV6z4KaNuoNGCYIPsHP.z80wvSbagrmcdrAKd2mEOHU35z87aue', '2024-07-24 10:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `judul`, `pesan`, `created_at`, `updated_at`) VALUES
(2, 'TES pesan', 'tessspesan@gmail.com', 'tes judul', 'tes', '2024-07-26 03:25:36', '2024-07-26 03:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ce06FWN1fvVdrxUZIQohTyH8dAQCqwxY0XowPvRO', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia0VpNGNsSFUxc29lWGZ1eFg1NXFvRXJCTHZNRGJKNTZReklVZDZaWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lcGFnZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzIxOTk1OTM3O319', 1721995960);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@example.com', NULL, '$2y$12$/kxQeqlenqAfXQ0XHBmI1u6swFO6gpovvfXc5ukSCkYimt2HfIisK', 1, NULL, '2024-07-24 08:18:10', '2024-07-24 08:18:10'),
(3, 'artis', 'artisindonesia49@gmail.com', NULL, '$2y$12$Irv/eSFFcHDM1UMnp8hxPedrftUhPAg0hT7OGet8EK3jbh9rDEYqS', 0, NULL, '2024-07-24 08:21:37', '2024-07-24 08:21:37'),
(4, 'agus', 'agus@gmail.com', NULL, '$2y$12$T9oI1/UJntt1h5UI7myFvuaTW4LVFW0VFbq4Dqj5orozFF78UlG.a', 0, NULL, '2024-07-24 09:32:58', '2024-07-24 09:32:58'),
(5, 'timmo', 'timmogiovani49@gmail.com', NULL, '$2y$12$v6WnnuIJrjmdKq6OZzfJOuPngm72CKQvYRlkAY5GwJst2AE062yFq', 0, NULL, '2024-07-24 10:49:25', '2024-07-24 10:49:25'),
(6, 'den', 'edenwijaya49@gmail.com', NULL, '$2y$12$H1Lip7k6km.cYj0ZI0Ok3.Tx4qo9BLj80A3mHLiZDYC7PFo2m5s5G', 0, NULL, '2024-07-24 23:59:32', '2024-07-24 23:59:32'),
(7, 'admin', 'eden.122140187@student.itera.ac.id', NULL, '$2y$12$F5r1il41jO/oY/F07xAu3.GSvwvIktYdR9I0iTXJLKkRo09JlJgWa', 0, NULL, '2024-07-25 01:35:34', '2024-07-25 01:35:34'),
(8, 'admin', 'eden@gmail.com', NULL, '$2y$12$wLYieq6fruawvRjJ/f33h.lj2hpVUoo807ibIIRGeyIT91Bx2k0EC', 0, NULL, '2024-07-25 01:36:30', '2024-07-25 01:36:30'),
(9, 'admin3', 'admin3@example.com', NULL, '$2y$12$6zuxBVvWqXGZAO5M4HIp8eR3n478M2EudtvXTmIVNm8W03r9TUxVG', 0, NULL, '2024-07-25 01:39:45', '2024-07-25 01:39:45'),
(10, 'a', 'a@gmail.com', NULL, '$2y$12$ryfcVcaR3/3/hhuyrPxHnO.sHP7er8JLtEshPp2MjavgascFpBh7y', 0, NULL, '2024-07-25 01:40:21', '2024-07-25 01:40:21'),
(11, 'TesAdmin', 'tes@gmail.com', NULL, '$2y$12$.gHkVBLoVcsOgAVkk55ZpeJ7z8yYMGl/veoWMc2FSyR8rSojgWnMK', 0, NULL, '2024-07-25 01:46:38', '2024-07-25 01:46:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
