-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2019 at 12:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetlink_meetlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `room_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link`, `name`, `room_id`, `created_at`, `updated_at`) VALUES
(194, 'ทดสอบ', 'อาจารย์เฟาซัล', 20, '2018-09-06 02:51:04', '2018-09-06 02:51:04'),
(195, 'ทดสอบ', 'sdq', 20, '2018-09-06 02:58:18', '2018-09-06 02:58:18'),
(196, 'https://clients.jaideawhosting.com/clientarea.php?action=productdetails&id=2564', 'sdq', 20, '2018-09-06 02:58:36', '2018-09-06 02:58:36'),
(197, '0003416933', 'ซอดีกีน', 21, '2018-09-07 10:35:04', '2018-09-07 10:35:04'),
(198, '1', 'ซอดีกีน', 21, '2018-09-07 10:36:36', '2018-09-07 10:36:36'),
(199, '0003416933', 'sadiqeen', 21, '2018-09-07 10:42:48', '2018-09-07 10:42:48'),
(200, 'ทดสอบ', 'sadiqeen', 21, '2018-09-07 10:58:07', '2018-09-07 10:58:07'),
(201, '0003416933', 'sadiqeen', 21, '2018-09-07 10:58:10', '2018-09-07 10:58:10'),
(202, 'test-mobole', 'sm-mobile', 20, '2018-09-07 11:24:19', '2018-09-07 11:24:19'),
(203, 'ทดลองในโทรศัพท์', 'sm-mobile', 20, '2018-09-07 11:29:36', '2018-09-07 11:29:36'),
(204, 'ใช้ได้', 'sm-mobile', 20, '2018-09-07 11:32:36', '2018-09-07 11:32:36'),
(205, '0003416933', 'sadiqeen', 20, '2018-09-07 11:39:06', '2018-09-07 11:39:06'),
(206, 'ทดสอบ', 'sadiqeen', 20, '2018-09-07 11:39:28', '2018-09-07 11:39:28'),
(207, 'ทดสอบ', 'sadiqeen', 20, '2018-09-07 18:45:31', '2018-09-07 18:45:31'),
(208, 'ทดสอบ', 'sadiqeen', 20, '2018-09-07 18:45:40', '2018-09-07 18:45:40'),
(209, '0003416933', 'sadiqeen', 20, '2018-09-07 18:45:42', '2018-09-07 18:45:42'),
(210, '0003416933', 'sadiqeen', 20, '2018-09-07 18:46:06', '2018-09-07 18:46:06'),
(211, 'ทดสอบ', 'test', 23, '2018-09-11 16:17:26', '2018-09-11 16:17:26'),
(212, 'ใช้ได้หรอม', 'sadiqeen', 23, '2018-09-11 16:17:44', '2018-09-11 16:17:44'),
(213, 'ได้จริงด้วย', 'sadiqeen', 23, '2018-09-11 16:17:56', '2018-09-11 16:17:56'),
(214, 'หิวจาง', 'sadiqeen', 23, '2018-09-11 16:18:06', '2018-09-11 16:18:06'),
(215, 'เปนไรเนี่ย', 'sadiqeen', 23, '2018-09-11 16:18:18', '2018-09-11 16:18:18'),
(216, 'เหงา', 'sadiqeen', 23, '2018-09-11 16:18:30', '2018-09-11 16:18:30'),
(217, 'หิวด้วย', 'sadiqeen', 23, '2018-09-11 16:18:33', '2018-09-11 16:18:33'),
(218, '0003416933', 'test', 23, '2018-09-11 16:18:43', '2018-09-11 16:18:43'),
(219, 'ทดสอบ', 'test', 23, '2018-09-11 16:18:53', '2018-09-11 16:18:53'),
(220, 'ผ่านๆ', 'sadiqeen', 23, '2018-09-11 16:20:19', '2018-09-11 16:20:19'),
(221, 'ใช้ได้หรอม', 'sadiqeen', 23, '2018-09-11 16:20:35', '2018-09-11 16:20:35'),
(222, 'เก่งจุม', 'sadiqeen', 23, '2018-09-11 16:20:53', '2018-09-11 16:20:53'),
(223, 'sd', 'kon', 24, '2018-09-12 16:21:07', '2018-09-12 16:21:07'),
(224, 'test2', 'test2', 25, '2018-10-10 11:42:34', '2018-10-10 11:42:34'),
(225, 'test4', 'test2', 25, '2018-10-10 11:42:44', '2018-10-10 11:42:44'),
(226, '3456', 'test', 25, '2018-10-10 11:42:55', '2018-10-10 11:42:55'),
(227, '123', 'test', 25, '2018-10-10 11:43:08', '2018-10-10 11:43:08'),
(228, '321', 'test', 25, '2018-10-10 11:43:14', '2018-10-10 11:43:14'),
(229, '9876', 'test', 25, '2018-10-10 11:43:21', '2018-10-10 11:43:21'),
(230, 'สวัสดี', 'test', 25, '2018-10-10 11:43:35', '2018-10-10 11:43:35'),
(231, 'how to do real time chating', 'test', 25, '2018-10-10 11:43:49', '2018-10-10 11:43:49'),
(232, 'IDK', 'test2', 25, '2018-10-10 11:44:00', '2018-10-10 11:44:00'),
(233, 'test chatting', 'test2', 25, '2018-10-10 11:44:21', '2018-10-10 11:44:21'),
(234, 'how to authentication', 'test2', 25, '2018-10-10 11:44:34', '2018-10-10 11:44:34'),
(235, 'cloud server', 'test2', 25, '2018-10-10 11:44:49', '2018-10-10 11:44:49'),
(236, 'online communicate', 'test2', 25, '2018-10-10 11:45:00', '2018-10-10 11:45:00'),
(237, '3456', 'test2', 25, '2018-10-10 11:50:28', '2018-10-10 11:50:28'),
(238, 'testet', 'rtertr', 25, '2018-10-14 02:24:57', '2018-10-14 02:24:57'),
(239, 'ytry', 'eeqe', 25, '2018-10-14 02:25:24', '2018-10-14 02:25:24'),
(240, '5435', 'rtertr', 25, '2018-10-14 02:25:46', '2018-10-14 02:25:46'),
(241, 'tred', 'test1', 25, '2018-10-14 02:44:02', '2018-10-14 02:44:02'),
(242, 'uio', 'test2', 25, '2018-10-14 02:44:16', '2018-10-14 02:44:16'),
(243, '1313132321', 'test2', 25, '2018-10-14 02:45:16', '2018-10-14 02:45:16'),
(244, 'rwe', 'test', 25, '2018-12-04 08:17:48', '2018-12-04 08:17:48'),
(245, 'gfdd', 'test', 25, '2018-12-04 08:17:57', '2018-12-04 08:17:57');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `user`, `created_at`, `updated_at`) VALUES
(20, 'fst201', 'อาจารย์เฟาซัล', '2018-09-06 02:50:58', '2018-09-06 02:50:58'),
(21, 'ทดสอบ', 'ซอดีกีน', '2018-09-07 10:34:57', '2018-09-07 10:34:57'),
(22, 'เหงา 1', 'สมาคม', '2018-09-07 10:51:11', '2018-09-07 10:51:11'),
(23, 'test2', 'sadiqeen', '2018-09-11 16:16:56', '2018-09-11 16:16:56'),
(24, 'laravel', 'Sadiqeen', '2018-09-12 16:20:10', '2018-09-12 16:20:10'),
(25, 'test', 'test', '2018-10-10 11:41:52', '2018-10-10 11:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ศราวุธ รักชาติ', 'finixlllsarawut@gmail.com', '$2y$10$a6R1jGoCvU./0QpsOin9g.DgyUlDs0tuvqxt1NXMEFXqcGr7/08TO', 'xrvbJlRW6JFS5JvzlCikyT78Jyae3zanrBMGVZoxraLpMa6K4ZnuQzIIeROI', '2018-09-02 08:09:29', '2018-09-02 08:09:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
