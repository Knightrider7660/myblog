-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 09:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorprofile`
--

CREATE TABLE `authorprofile` (
  `profileID` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_14_120523_create_post_category_table', 1),
(4, '2018_08_14_120715_create_posts_table', 1),
(5, '2018_09_05_113858_create_authorProfile_table', 2),
(6, '2018_09_05_141214_create_usersr_table', 2);

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
  `postID` int(10) UNSIGNED NOT NULL,
  `categoryID` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `categoryID`, `title`, `post`, `imageName`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 3, 'Biriany', 'The tast is Yammy. So much impressed.', 'e92f941e09f75cd5de527d05cb1b33f2.jpeg', 1, NULL, '2018-08-16 01:56:12', '2018-08-16 01:56:12'),
(8, 1, 'Temple', 'A Hindu temple is a symbolic house  symbolic house.', 'bb1b8dcb8e334503e1c29ecd20693b7c.jpeg', 1, NULL, '2018-08-16 01:58:20', '2018-08-16 02:09:08'),
(9, 2, 'malayasha', 'fter this command you can find ImageController.php file in your ap', 'a19b3a7e34bd2cf0397838e7a7ad928e.jpeg', 1, NULL, '2018-08-16 04:06:20', '2018-09-03 15:51:40'),
(11, 4, 'Bandorban', 'Bandorban is a beautiful place. Located in Bangladesh.', 'bf9730cf0490b974891d8282acd940fb.jpeg', 1, NULL, '2018-08-16 06:22:18', '2018-08-16 06:22:18'),
(13, 2, 'Biriany', 'fter this command you can find ImageController.php file in your ap', '7a24f303c70c108a03815edd8260e4b6.jpeg', 1, NULL, '2018-08-16 06:40:35', '2018-08-16 06:40:35'),
(14, 4, 'Bandorban', 'Bandorban is a beautiful place. Located in Bangladesh.', '4e1b3d4fde7664e5b02476e365f24f17.jpeg', 1, NULL, '2018-09-03 15:45:36', '2018-09-03 15:45:36'),
(15, 7, 'Biriany', 'On Porn300 you will find all bangla sex porn films that you could ever have imagined', '157353df05740212ce2e739ca0138609.jpeg', 1, NULL, '2018-09-04 16:36:04', '2018-09-04 16:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `categoryID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`categoryID`, `name`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 1, NULL, '2018-08-15 00:57:02', '2018-08-15 00:57:02'),
(2, 'Life Style', 1, NULL, '2018-08-15 00:57:21', '2018-08-15 00:57:21'),
(3, 'Food', 1, NULL, '2018-08-15 00:57:29', '2018-08-15 00:57:29'),
(4, 'Adventure', 1, NULL, '2018-08-15 00:58:18', '2018-08-15 00:58:18'),
(5, 'Business', 1, NULL, '2018-08-15 00:58:28', '2018-08-15 00:58:28'),
(6, 'Hobby', 1, NULL, '2018-08-15 01:13:48', '2018-08-15 01:13:48'),
(7, 'Romantic', 1, NULL, '2018-08-16 01:18:54', '2018-08-16 01:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', '$2y$10$aocK.GiD98zoVMHnEUfFlOcgt3xU8Rdm0MjqdmgfW.sNIVisQLWdW', NULL, 'Admin', 'yiCkzX6ovvFe2t8q2Oi3HVm6Clatpcu9ahk9uXbXfKC5eRK5Q53PAkj3umgP', '2018-08-15 00:18:53', '2018-08-15 00:18:53'),
(2, 'Dipen Kumer Das', 'kitakortam@gmail.com', '$2y$10$8xNuSNuHNNG0aBe73izai.ZOfYIjOkOrzZMAztmjOr4WzWAe7i.8u', NULL, 'Admin', NULL, '2018-09-03 03:06:12', '2018-09-03 03:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `usersr`
--

CREATE TABLE `usersr` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorprofile`
--
ALTER TABLE `authorprofile`
  ADD PRIMARY KEY (`profileID`);

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
  ADD PRIMARY KEY (`postID`),
  ADD KEY `posts_categoryid_index` (`categoryID`),
  ADD KEY `posts_userid_index` (`userID`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `post_category_name_unique` (`name`),
  ADD KEY `post_category_userid_index` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersr`
--
ALTER TABLE `usersr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorprofile`
--
ALTER TABLE `authorprofile`
  MODIFY `profileID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usersr`
--
ALTER TABLE `usersr`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categoryid_foreign` FOREIGN KEY (`categoryID`) REFERENCES `post_category` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `posts_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
