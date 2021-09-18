-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 02:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_04_28_130413_create_posts_table', 1),
(13, '2021_04_30_131118_create_tests_table', 1),
(14, '2021_05_12_115225_add_user_id_to_posts', 2),
(15, '2021_06_26_110609_add_covr_image_to_posts', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `email`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(1, 'Post One', '', 'this is thi Post in Body', '2021-04-30 11:17:28', '2021-04-30 11:17:28', 1, 'noimage.jpg'),
(2, 'Post Two', '', 'this is  thi Post 2', '2021-04-30 11:18:24', '2021-04-30 11:18:24', 1, 'noimage.jpg'),
(3, 'Post Thrie', '', 'tihs is thi body 3', '2021-04-30 11:20:18', '2021-04-30 11:20:18', 1, 'noimage.jpg'),
(4, 'mido', 'midoshriks@gmail.com', 'lkkkkkkkkkkk', '2021-05-01 10:33:40', '2021-07-07 14:48:42', 1, 'noimage.jpg'),
(6, 'mido', 'Midoshriks36@gmail.com', 'wwwwwwwwww', '2021-05-01 11:20:07', '2021-05-01 11:20:07', 1, 'noimage.jpg'),
(7, 'mido', 'admin@site.com', 'wwwwwwww', '2021-05-02 10:10:31', '2021-05-02 10:10:31', 1, 'noimage.jpg'),
(8, 'mido shriks', 'admin@site.com', 'method Update', '2021-05-02 10:34:49', '2021-05-02 11:21:10', 1, 'noimage.jpg'),
(10, 'saed', 'saeed.samir123@gmail', 'stch jfy igv io i', '2021-05-04 09:37:59', '2021-05-04 09:37:59', 1, 'noimage.jpg'),
(11, 'السيد سمير', 'Elsayed.samir@gmail.com', 'welcome', '2021-05-04 10:08:24', '2021-05-04 10:08:24', 1, 'noimage.jpg'),
(12, 'mido', 'Midoshriks36@gmail.com1', 'this test user_id', '2021-05-12 10:17:10', '2021-05-12 10:17:10', 1, 'noimage.jpg'),
(13, 'mido shriks', 'Midoshriks@gmail.com', 'this test in user_id 2', '2021-05-12 10:18:45', '2021-05-12 10:18:45', 2, 'noimage.jpg'),
(14, 'mido shriks 36', 'Midoshriks36@gmail.com', 'يارب ارزقنى علم نافع وصلحى منى يارب', '2021-06-13 10:56:28', '2021-07-07 15:07:37', 1, 'preview4_1625677657.jpg'),
(15, 'test op', 'po@gmail.com', 'jdjwidjwijdidjiwdj', '2021-06-13 11:50:42', '2021-06-13 11:50:42', 3, 'noimage.jpg'),
(16, 'test img', 'bob@gmail.com', 'img', '2021-06-26 09:55:15', '2021-07-07 15:05:05', 1, 'all_1625677505.jpg'),
(19, 'test img null', 'bob@gmail.com', 'test img null', '2021-07-07 14:37:09', '2021-07-07 14:37:09', 1, 'noimage.jpg'),
(21, 'test img cahinge', 'bob@gmail.com', 'test img cahinge', '2021-07-07 14:45:51', '2021-07-07 15:03:59', 1, 'preview_1625677439.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mido', 'Midoshriks36@gmail.com', NULL, '$2y$10$DIaeZvW/0beaU71yVe4TKeltJNztDhiI.EIha7.5FeAu8IMfxNXP.', NULL, '2021-05-12 09:25:54', '2021-05-12 09:25:54'),
(2, 'mido shriks', 'Midoshriks@gmail.com', NULL, '$2y$10$APusH6k9RZVdb7oFMbjfzuOcx/iHseLUvWkmVCZmoDgYildXo4AqS', NULL, '2021-05-12 10:17:58', '2021-05-12 10:17:58'),
(3, 'tets', 'a@a.com', NULL, '$2y$10$xWg3zH/jq.9UdzEirs07vebcw3j3nV4KJZi6DbV.uF7qiYNJS4Gga', NULL, '2021-06-13 11:49:56', '2021-06-13 11:49:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
