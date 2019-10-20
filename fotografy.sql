-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 07:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotografy`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `email`, `ime`, `prezime`, `created_at`, `updated_at`) VALUES
(1, 'korisnik@gmail.com', 'Korisnik', 'Korisnik', '2019-03-16 15:04:55', '2019-03-16 15:04:55'),
(2, 'korisnik@gmail.com', 'Korisnik', 'Korisnik', '2019-03-16 15:10:00', '2019-03-16 15:10:00'),
(3, 'korisnik@gmail.com', 'Korisnik', 'Korisnik', '2019-03-16 15:12:07', '2019-03-16 15:12:07'),
(4, 'korisnik@gmail.com', 'Korisnik', 'Korisnik', '2019-03-16 15:19:50', '2019-03-16 15:19:50'),
(5, 'djole@gmail.com', 'Djole', 'Ilic', '2019-03-16 15:33:20', '2019-03-16 15:33:20'),
(6, 'korisnik@gmail.com', 'Korisnik', 'Korisnik', '2019-03-16 15:34:26', '2019-03-16 15:34:26'),
(7, 'djole@gmail.com', 'Djole', 'Ilic', '2019-03-17 14:10:14', '2019-03-17 14:10:14'),
(8, 'djole@gmail.com', 'Djole', 'Ilic', '2019-03-17 14:20:52', '2019-03-17 14:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(50) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_s` int(50) NOT NULL,
  `id_u` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `text`, `created_at`, `updated_at`, `id_s`, `id_u`) VALUES
(19, 'batmen majstor', '2019-03-11 11:43:13', '2019-03-11 11:43:13', 4, 11),
(20, 'Crazy!', '2019-03-14 09:55:35', '2019-03-14 09:55:35', 28, 10),
(21, 'komentar proba', '2019-03-14 19:14:46', '2019-03-14 19:14:46', 6, 10),
(22, 'Djole komentar', '2019-03-14 19:16:11', '2019-03-14 19:16:11', 6, 12),
(23, 'komentar 2', '2019-03-14 19:16:30', '2019-03-14 19:16:30', 6, 12),
(24, 'dassada', '2019-03-14 19:45:21', '2019-03-14 19:45:21', 4, 12),
(25, 'Komentar', '2019-03-16 14:21:25', '2019-03-16 14:21:25', 22, 10),
(26, 'cz\\xsadsa', '2019-03-16 15:36:42', '2019-03-16 15:36:42', 6, 13),
(27, 'Odlicna slika!', '2019-03-16 16:39:36', '2019-03-16 16:39:36', 4, 10),
(28, 'komentar', '2019-03-16 20:03:11', '2019-03-16 20:03:11', 23, 10);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(50) NOT NULL,
  `src` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `src`, `alt`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'city1.jpg', 'City', 'Town ', 'The word town shares an origin with the German word Zaun, the Dutch word tuin, and the Old Norse tun. The German word Zaun comes closest to the original meaning of the word: a fence of any material. An early borrowing from Celtic *dunom (cf. Old Irish dun, Welsh din \"fortress, fortified place, camp,\" dinas \"city\").\r\n\r\nIn English and Dutch, the meaning of the word took on the sense of the space which these fences enclosed. In England.', NULL, NULL),
(6, 'city3.jpg', 'picture of a city', 'New York City', 'New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural centers. Its iconic sites include skyscrapers such as the Empire State Building and sprawling Central Park. Broadway theater is staged in neon-lit Times Square.', NULL, NULL),
(7, 'nature2.jpg', 'picture of a nature 2', 'Waterfall', 'Nature, in the broadest sense, is the natural, physical, or material world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science.', NULL, NULL),
(22, 'eyeemfiltered1545837017461.jpg', 'light bulb', 'Wild light', 'Beautiful focus inside the light bulb. The light bulb in whole new light!', '2019-03-13 20:34:29', '2019-03-13 20:34:29'),
(23, 'eyeemfiltered1546090383411.jpg', 'Coca-cola can', 'Abstract coke', 'Unusual presentation of Coca-cola can. Abstract photographing at it\'s best.', '2019-03-13 20:40:20', '2019-03-13 20:40:20'),
(24, 'LRM_EXPORT_15078743464364_20190220_131912918.jpeg', 'Ub', 'City Ub', 'Ub, Serbia. Center of town from whole different perspective.', '2019-03-13 20:51:05', '2019-03-13 20:51:05'),
(25, 'LRM_EXPORT_354080423312635_20190205_135141544.jpeg', 'swan', 'Swan', 'Captured in Fazanerija lake, Ub. One of nicest hidden places in Serbia.', '2019-03-13 20:53:52', '2019-03-13 20:53:52'),
(26, 'LRM_EXPORT_29912916970433_20190130_181724000.jpeg', 'dog', 'Doggo', 'When dog saw his owner. Get excited in life like he is on that picture!', '2019-03-13 20:56:09', '2019-03-13 20:56:09'),
(27, 'PSX_20181027_182328.jpg', 'river', 'Just a regular street', 'Sunlight meets Ub\'s street.', '2019-03-13 20:58:30', '2019-03-13 20:58:30'),
(28, 'Adobe_20190307_171939.jpg', 'cat', 'Just chillin\'', 'Best picture of cat you\'ll see today', '2019-03-13 20:59:24', '2019-03-13 20:59:24');

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
(1, '2019_03_05_103647_add_timestamps_to_users_table', 1),
(2, '2019_03_05_114437_add_timestamps_to_user_table', 2),
(3, '2019_03_12_203922_add_timestamps_to_images', 3),
(4, '2019_03_16_153420_create_activity_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(50) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_r` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `password`, `email`, `id_r`, `created_at`, `updated_at`) VALUES
(10, 'Danilo', 'Stojanovic', 'dane97', 'd139777ad043a31172004e835456a74b', 'dane.sto@gmail.com', 1, '2019-03-08 11:24:43', '2019-03-08 11:24:43'),
(11, 'Batman', 'Batman', 'bat97', '050fb33fd3bcd66e9058f3ed3b83a199', 'bat@gmail.com', 2, '2019-03-08 12:14:54', '2019-03-08 12:14:54'),
(12, 'Djole', 'Ilic', 'djole97', 'b4cf916158880a7c2c9e8decc88a2f96', 'djole@gmail.com', 2, '2019-03-14 19:15:31', '2019-03-14 19:15:31'),
(13, 'Korisnik', 'Korisnik', 'korisnik97', 'f77fe1446633ed0971bffc395f5e82f0', 'korisnik@gmail.com', 2, '2019-03-16 15:02:24', '2019-03-16 15:02:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_s` (`id_s`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_r` (`id_r`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `images` (`id_image`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_r`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
