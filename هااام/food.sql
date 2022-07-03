-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 04:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_order` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_12_143911_create_products_table', 1),
(6, '2022_05_12_165917_create_orders_table', 1),
(7, '2022_05_14_160121_create_all_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` double DEFAULT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `count` double DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `salary`, `count`, `s_name`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش زنجر صغير', 0.75, 0, 's1'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش زنجر فرنسي', 1, 0, 's2'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش زنجر صاج صغير', 1, 0, 's3'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش زنجر صاج كبير', 1.5, 0, 's4'),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش تندر صغير', 0.75, 0, 's5'),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش تندر فرنسي', 1.5, 0, 's6'),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش تندر صاج صغير', 1, 0, 's7'),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش تندر صاج كبير', 1.5, 0, 's8'),
(9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش فاهيتا صغير', 1, 0, 's9'),
(10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش فاهيتا فرنسي كبير', 1.75, 0, 's10'),
(11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش فاهيتا صاج صغير', 1, 0, 's11'),
(12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش فاهيتا صاج كبير', 1.75, 0, 's12'),
(13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش كوردن بلو فرنسي', 1.5, 0, 's13'),
(14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش كوردن بلو صاج', 1.5, 0, 's14'),
(15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش هوت دوغ صغير', 0.35, 0, 's15'),
(16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش هوت دوغ فرنسي', 1, 0, 's16'),
(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة زنجر صاج او فرنسي', 2, 0, 's17'),
(18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة تندر صاج او فرنسي', 2, 0, 's18'),
(19, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة فاهيتا صاج او فرنسي', 2.5, 0, 's19'),
(20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة كوردن بلو صاج او فرنسي', 2.5, 0, 's20'),
(21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة هوت دوغ فرنسي', 1.75, 0, 's21'),
(22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما عادي', 1.75, 0, 's22'),
(23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما سوبر', 2.5, 0, 's23'),
(24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما دبل', 3, 0, 's24'),
(25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما تربل', 4, 0, 's25'),
(26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما إيطالي', 3.5, 0, 's26'),
(27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما حلبي', 3.5, 0, 's27'),
(28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما برايز عادي', 2, 0, 's28'),
(29, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة شاورما برايز سوبر', 3.5, 0, 's29'),
(30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش شاورما صغير', 0.6, 0, 's30'),
(31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش شاورما كبير', 1.1, 0, 's31'),
(32, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' ساندويش شاورما فرنسي', 1.5, 0, 's32'),
(33, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' الوجبة الشبابية', 7, 0, 's33'),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' الوجبة الإقتصادية', 9, 0, 's34'),
(35, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' الوجبة العائلية العملاقة', 12, 0, 's35'),
(36, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' برغر اطفال', 0.5, 0, 's36'),
(37, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' برغر 100غرام', 1.5, 0, 's37'),
(38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' برغر 200غرام', 2, 0, 's38'),
(39, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' سكالوب دجاج', 0.75, 0, 's39'),
(40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة برغر اطفال', 2, 0, 's40'),
(41, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة برغر 100غرام', 2.5, 0, 's41'),
(42, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة برغر 200غرام', 3, 0, 's42'),
(43, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة سكالوب دجاج', 2.5, NULL, 's43'),
(44, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 4 قطع حار او بارد', 3, 0, 's44'),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 8 قطع حار او بارد', 6, 0, 's45'),
(46, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 12 قطع حار او بارد', 9, 0, 's46'),
(47, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 16 قطع حار او بارد', 12, 0, 's47'),
(48, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 20 قطع حار او بارد', 15, 0, 's48'),
(49, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' وجبة 24 قطع حار او بارد', 17, 0, 's49'),
(50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' مثومة صغير', 0.25, 0, 's50'),
(51, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' مثومة كبير', 0.5, 0, 's51'),
(52, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' مخلل صغير', 0.25, 0, 's52'),
(53, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' مخلل كبير', 0.5, 0, 's53'),
(54, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' بطاطا صغير', 0.5, 0, 's54'),
(55, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' بطاطا كبير', 1, 0, 's55'),
(56, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' كولا 330مل', 0.3, 0, 's56'),
(57, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' كولا لتر', 0.6, 0, 's57'),
(58, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' مياه معدنيه', 0.35, 0, 's58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `done` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `location`, `title`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `code`, `done`) VALUES
(11, 'احمد رمزي', NULL, NULL, '0785147631', NULL, NULL, '$2y$10$t3EJ5X.YO1TJ0Xr3K7OQUuvmTlETvTnc1/1Jlb1o39q2hMLPm6J7G', NULL, '2022-05-19 09:27:03', '2022-05-19 09:27:03', '854230', NULL),
(12, 'hamzae', NULL, NULL, '0785147633', NULL, NULL, '$2y$10$/IBlt0o6oWDvW4WkacEt.e5B9Da.qxAJDtNZ.CgQsb9vvoaG0WKI.', NULL, '2022-05-19 09:37:14', '2022-05-19 09:37:14', '153151', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `all_orders_user_id_foreign` (`user_id`),
  ADD KEY `all_orders_product_id_foreign` (`product_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_orders`
--
ALTER TABLE `all_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD CONSTRAINT `all_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `all_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
