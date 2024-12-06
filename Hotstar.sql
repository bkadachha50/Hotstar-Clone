-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2024 at 07:44 AM
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
-- Database: `laravel`
--

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
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seasons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `seasons`, `description`, `type`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'THE WITCHER', '2019 • 3 Seasons • 5 Languages • U/A 16+', 'The series revolves around the eponymous witcher, Geralt of Rivia. In Sapkowski works, witchers are beast hunters who are given supernatural abilities at a young age to battle wild beasts and monsters.', 'Action | Fantasy | Drama | Advanture', 'Witcher.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devices` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_sound_quality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `quality`, `price`, `access`, `devices`, `resolution`, `video_sound_quality`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '', '199.00', '1 member', 'Mobile, Tablet', '720p', 'Good', NULL, NULL),
(2, 'Standard', '', '399.00', '3 member', 'Mobile, Tablet,Laptop', '1080p', 'Great', NULL, NULL),
(3, 'Pro', '', '599.00', '5 member', 'Mobile, Tablet,Laptop,Tv', '1440p', 'Best', NULL, NULL),
(4, 'Premium', '', '799.00', '10 member', 'All Platforms', '4k + HDR', 'Amazing', NULL, NULL);

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
(5, '2024_07_26_080352_users', 1),
(6, '2024_07_26_083637_users', 1),
(7, '2024_09_02_044848_create_users_table', 2),
(8, '2024_09_02_052624_add_active_to_users_table', 3),
(9, '2024_09_02_052844_add_active_to_users_table', 4),
(10, '2024_09_03_100915_users_table', 5),
(11, '2024_09_09_044400_users', 6),
(12, '2024_09_10_093851_create_password_resets_table', 7),
(13, '2024_09_16_044024_create_movies_table', 8),
(14, '2024_09_24_063906_create_subscriptions_table', 9),
(15, '2024_09_24_095522_create_page_settings_table', 10),
(16, '2024_09_24_102240_create_logo_table', 11),
(17, '2024_09_25_095759_create_headers_table', 12),
(18, '2024_09_30_051133_create_watchlist_table', 13),
(19, '2024_10_09_051540_create_notifications_table', 14),
(20, '2024_10_09_053234_create_notifications_table', 15),
(21, '2024_10_09_093154_create_notifications_table', 16),
(22, '2024_10_16_050507_create_reviews_table', 17),
(23, '2024_11_20_162206_create_subscriptions_table', 18),
(24, '2024_11_20_163944_create_membership_table', 19),
(25, '2024_11_21_082530_create_subscriptions_table', 20),
(26, '2024_11_26_162344_update_notifications_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int DEFAULT '18',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `image`, `age`, `created_at`, `updated_at`) VALUES
(8, 'Neerja', '2019 • 3 Languages', 'Movie1.webp', 18, '2024-09-17 23:39:25', '2024-09-24 00:58:29'),
(9, '12th Fail', '2019 • 3 Languages', 'Movie-1.webp', 18, '2024-09-17 23:44:45', '2024-09-17 23:44:45'),
(10, 'Avatar', '2019 • 10 Languages', 'Movie-2.webp', 18, '2024-09-17 23:48:41', '2024-09-17 23:48:41'),
(11, 'Wakanda Forever', '2021 • 8 Languages', 'Movie-3.webp', 18, '2024-09-17 23:49:41', '2024-09-17 23:49:41'),
(12, 'Shiddat', '2022 • 1 Languages', 'Movie-4.webp', 18, '2024-09-17 23:50:50', '2024-09-17 23:50:50'),
(13, 'Tanhaji', '2017 • 2 Languages', 'Movie-5.webp', 18, '2024-09-17 23:51:18', '2024-09-17 23:51:18'),
(14, 'Infinity War', '2011 • 12+ Languages', 'Movie-6.webp', 18, '2024-09-17 23:51:58', '2024-09-17 23:51:58'),
(16, 'Super 30', '2020 • 3 Languages', 'Movie-7.webp', 18, '2024-09-18 00:06:15', '2024-09-18 00:06:15'),
(17, 'Chhichhore', '2017 • 2 Languauage', 'Movie-8.webp', 18, '2024-09-18 00:06:51', '2024-11-21 03:40:00'),
(18, 'Superstructures', '2022 • 4 Languages', 'Movie-9.webp', 18, '2024-09-18 00:08:09', '2024-09-18 00:08:09'),
(19, 'Pirate of caribbean', '2018 • 5 Movies', 'Movie-10.webp', 18, '2024-09-18 00:10:41', '2024-09-18 00:10:41'),
(20, 'Fight Club', '2023 • 7 Languages', 'Movies-11.webp', 18, '2024-09-18 00:11:39', '2024-09-18 00:11:39'),
(21, 'Neru', '2024 • 2 Languages', 'Movies-12.webp', 18, '2024-09-18 00:12:13', '2024-09-18 00:12:13'),
(22, 'Echo', '2020 • 9 Languages', 'Movies-13.webp', 18, '2024-09-18 00:12:38', '2024-09-18 00:12:38'),
(23, 'Post Card', '2018 • 5 Languages', 'Movies-14.webp', 18, '2024-09-18 00:15:48', '2024-09-18 00:15:48'),
(24, 'Always Me', '2022 • 5 Languages', 'Movies-22.webp', 18, '2024-09-18 00:16:17', '2024-11-22 00:48:21'),
(25, 'Parking', '2019 • 3 Languages', 'Movies-16.webp', 18, '2024-09-18 00:16:49', '2024-09-18 00:16:49'),
(26, 'Alien 2', '2021 • 4 Languages', 'a1.webp', 18, '2024-09-18 00:17:46', '2024-11-22 00:50:46'),
(27, 'lootare', '2019 • 3 Languages', 'Movies-18.webp', 18, '2024-09-18 00:24:04', '2024-09-18 00:24:04'),
(28, 'Heart Beat', '2016 • 1 Language', 'Movies-19.webp', 18, '2024-09-18 00:24:37', '2024-09-18 00:24:37'),
(29, 'Choir', '2021 • 4 Language', 'Movies-20.webp', 18, '2024-09-18 00:25:15', '2024-09-18 00:25:15'),
(31, 'Alien', '2022 • 5 Languages', 'a.webp', 18, '2024-09-24 03:53:47', '2024-11-22 00:49:54'),
(35, 'Shinchan', '2024 • 3 Languages', 'k1.webp', 10, NULL, NULL),
(36, 'Doraemon', '2021 • 4 Languages', 'k2.webp', 10, NULL, NULL),
(37, 'Vir', '2022 • 2 Languages', 'k3.webp', 10, NULL, NULL),
(38, 'Rio', '2020 • 1 Languages', 'k4.webp', 10, NULL, NULL),
(39, 'Toy Story', '2024 • 3 Languages', 'k5.webp', 10, NULL, NULL),
(40, 'Spiderman', '2018 • 4 Languages', 'k6.webp', 10, NULL, NULL),
(41, 'Frozen', '2022 • 5 Languages', 'k7.webp', 10, NULL, NULL),
(42, 'Memo', '2021 • 3 Languages', 'k8.webp', 10, NULL, NULL),
(43, 'Lion king', '2017 • 3 Languages', 'k9.webp', 10, NULL, NULL),
(44, 'Finers and ferb', '2022 • 2 Languages', 'k10.webp', 10, NULL, NULL),
(45, 'Zotopia', '2019 • 4 Languages', 'k11.webp', 10, NULL, NULL),
(46, 'The good dainosour', '2021 • 4 Languages', 'k12.webp', 10, NULL, NULL),
(47, 'A bugs life', '2024 • 3 Languages', 'k14.webp', 10, NULL, NULL),
(48, 'Rio 2', '2023 • 1 Languages', 'k15.webp', 10, NULL, NULL),
(49, 'Amphibia', '2022 • 2 Languages', 'k16.webp', 10, NULL, NULL),
(50, 'Great ninza', '2021 • 3 Languages', 'k17.webp', 10, NULL, NULL),
(51, 'Avengers', '2020 • 5 Languages', 'k18.webp', 10, NULL, NULL),
(52, 'Ganesha 3', '2018 • 4 Languages', 'k19.webp', 10, NULL, NULL),
(53, 'Hanuman', '2019 • 3 Languages', 'k20.webp', 10, NULL, NULL),
(54, 'Ice ages', '2022 • 2 Languages', 'k21.webp', 10, NULL, NULL),
(55, 'cars', '2023 • 5 Languages', 'k13.webp', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sub.webp',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `type`, `title`, `description`, `image`, `is_read`, `created_at`, `updated_at`) VALUES
(72, 2, 'movie', 'test', 'test', 'Pic-3.jpg', 1, '2024-11-26 23:51:09', '2024-12-06 01:46:03'),
(75, 16, 'movie', 'test', 'test', 'Pic-3.jpg', 0, '2024-11-26 23:51:15', '2024-11-26 23:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('gyangamer069@gmail.com', '$2y$12$tktP/XRqXbkRMuLcCepIdelI4HNzZVpzHGo5puh3/Ke33S.DLnb6i', '2024-09-09 02:44:54');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `movie_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `rating` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `movie_id`, `user_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(6, 31, 2, 'Slow-paced and boring', 2, '2024-11-21 12:43:19', '2024-11-21 12:43:19'),
(7, 26, 15, 'Mind-blowing and exciting', 4, '2024-11-21 12:54:57', '2024-11-21 12:54:57'),
(9, 24, 16, 'Beautiful and thought-provoking', 3, '2024-11-21 13:05:06', '2024-11-21 13:05:06'),
(10, 9, 14, 'Good – intense and unforgettable', 5, '2024-11-21 13:05:18', '2024-11-21 13:05:18'),
(11, 27, 16, 'Overly dramatic and too long', 2, '2024-11-21 13:05:30', '2024-11-21 13:05:30'),
(12, 14, 2, 'Bad – relies too much on nostalgia and lacks fresh ideas', 1, '2024-11-21 13:05:36', '2024-11-21 13:05:36'),
(15, 8, 15, 'Good – fun and satisfying', 3, '2024-11-22 00:42:21', '2024-11-22 00:42:21'),
(16, 17, 15, 'Iconic and powerful', 4, '2024-11-22 01:21:40', '2024-11-22 01:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `plan_name`, `amount`, `payment_id`, `order_id`, `subscription_date`, `expiry_date`, `created_at`, `updated_at`) VALUES
(4, 2, 'Standard', '399.00', 'pay_POEoAvSAZ0x3sg', 'order_POEo0xgcX0BV4V', '2024-11-22', '2024-12-22', NULL, NULL),
(5, 15, 'Basic', '199.00', 'pay_POExLEsrXEOlQ3', 'order_POEx9ikAlw9lRm', '2024-11-22', '2024-12-22', NULL, NULL),
(6, 16, 'Premium', '799.00', 'pay_POF9xGxHSTKVGQ', 'order_POF9hkJS5Yy0rx', '2024-11-22', '2024-12-22', NULL, NULL),
(7, 14, 'Standard', '399.00', 'pay_POFAwe94Sx3OpI', 'order_POFAoGRKH8Rw7m', '2024-11-22', '2024-12-22', NULL, NULL),
(8, 14, 'Standard', '399.00', 'pay_POFmlah2qX4r0U', 'order_POFmcXxe0eml18', '2024-11-22', '2024-12-22', NULL, NULL),
(9, 15, 'Pro', '599.00', 'pay_POGWTmE46gYzAL', 'order_POGWKSOCsVLCkV', '2024-11-22', '2024-12-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `status`, `token`, `created_at`, `updated_at`) VALUES
(2, 'bharat', 'jadeja5050@gmail.com', '$2y$12$Ozpht3tbYOpE7qQXoAYbiO1SrQnG3fifRV90jrS0WRoHp8Hw.XKg2', '1726040134.jpg', 'admin', 'Active', NULL, '2024-09-11 00:15:42', '2024-09-16 02:30:11'),
(14, 'mihir', 'mihir50@gmail.com', '$2y$12$O/DxOZ/k8Q8eiw2TgME60.nrbhjH4UgiQ0dDeFV5YUOdVSSXZTJ0q', '67400a66c8255.jpg', 'user', 'Active', NULL, '2024-11-21 23:06:54', '2024-11-21 23:08:42'),
(15, 'deep', 'deep07@gmail.com', '$2y$12$cKuM.GKKG/Gdd3lXYtzxfOvG9XUZSf.apiIP4Q0nQ8.gmQn1QyYzi', '67401e3b8c370.jpg', 'user', 'Active', 'nM7a3OCtI7B7vMaXNPit58jsJs7lWzINIYdWkWjWYzmXgxmowL3xafSXolKz5cSq', '2024-11-22 00:31:31', '2024-11-22 00:31:31'),
(16, 'karan', 'karan72@gmail.com', '$2y$12$qX0u7BeX8PUz49GnDQs36e55.SVCviG5.OHwaNri8uAGF42vxb27G', '67402129461c3.jpg', 'user', 'Active', 'QmLovMnhFevjyh6fBL32mEaMjfWKYLcRPHnoCRcUl9lwiMqBEOPZHjdCJFsR7omv', '2024-11-22 00:44:01', '2024-11-22 00:44:01'),
(20, 'bharat', 'bkadachha672@rku.ac.in', '$2y$12$2oWWoCTsvuHhd/C60KmSaeADYmT.yt34DC4GExWZupSG3JIyQd1BW', '1733373680.jpg', 'user', 'Active', 'jTnkYLGau8wDg23SQ7EwfYriYSLDKs54xzv0IbfA22yq4Ss6gRHRe4KrHXOMDEuc', '2024-12-04 22:41:42', '2024-12-04 23:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `watchlists`
--

CREATE TABLE `watchlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `movie_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `watchlists`
--

INSERT INTO `watchlists` (`id`, `user_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(18, 15, 19, '2024-11-22 01:21:04', '2024-11-22 01:21:04'),
(19, 15, 20, '2024-11-22 01:21:07', '2024-11-22 01:21:07'),
(21, 15, 17, '2024-11-22 01:46:47', '2024-11-22 01:46:47'),
(29, 2, 19, '2024-12-04 22:06:10', '2024-12-04 22:06:10'),
(30, 2, 10, '2024-12-04 22:06:13', '2024-12-04 22:06:13'),
(31, 2, 26, '2024-12-04 22:06:20', '2024-12-04 22:06:20'),
(32, 20, 10, '2024-12-04 23:42:18', '2024-12-04 23:42:18');

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
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_movie_id_foreign` (`movie_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchlist_user_id_foreign` (`user_id`),
  ADD KEY `watchlist_movie_id_foreign` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `watchlists`
--
ALTER TABLE `watchlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD CONSTRAINT `watchlist_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watchlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
