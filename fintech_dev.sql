-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 02:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fintech_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ledgers`
--

CREATE TABLE `ledgers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `recordable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recordable_id` bigint(20) UNSIGNED NOT NULL,
  `context` tinyint(3) UNSIGNED NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pivot` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"remember_token\":\"AbyMxu8XXEx4QCVYleYvgh9VNoU106kJQUSQiukhzEEZm2pdR5QkSlHOL0yc\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 05:40:25\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost:8080/boil/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '50b8aeac094d950e6dc06a7a905385e2d98e24395526e62e4c06503c7195a46f8db8d42509d8b8777dd87fd393372472adf4e9d9004e103fbb591c3807fa6c14', '2019-12-01 03:55:01', '2019-12-01 03:55:01'),
(4, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2019-11-30 19:55:01\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"remember_token\":\"AbyMxu8XXEx4QCVYleYvgh9VNoU106kJQUSQiukhzEEZm2pdR5QkSlHOL0yc\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 19:55:01\",\"deleted_at\":null}', '[\"timezone\",\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://localhost:8080/boil/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'eddba5d7d6dd0dd76475af11abfb0c995e20efbe13d82ed0f11ecbba88d59d42ba8a6bc784a6dff8615c8027bbb20d485543a1748c86e0ea30bf9aae0f22e47f', '2019-12-01 03:55:01', '2019-12-01 03:55:01'),
(5, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2019-11-30 19:55:01\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"remember_token\":\"OQIOO1Bpb6I8giiBs9rzqstKHabe6Wj3RB97VJyHQNGhXltIEZdLTslSwizU\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 19:55:01\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost:8080/boil/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '7d144d32719514231312a46bd612d1b2f658afa4036af46a767ce85dc6abada59efe02b7ae43e108bb48b9469754d3382dac7180a656941bf6164f28618a5445', '2019-12-01 03:55:22', '2019-12-01 03:55:22'),
(6, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2019-11-30 19:55:34\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"remember_token\":\"OQIOO1Bpb6I8giiBs9rzqstKHabe6Wj3RB97VJyHQNGhXltIEZdLTslSwizU\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 19:55:35\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost:8080/boil/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2db65fadd5441dc8fd4d47253243ecc737030d375185b5e755cf7250981ce3397a60d2566ef30583fb7b5de39705d46238429fd1d82a25c526d1e43207320fff', '2019-12-01 03:55:35', '2019-12-01 03:55:35'),
(7, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2019-11-30 19:55:34\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"remember_token\":\"WIDUCcFHJzoyOQERnu1O8nhdRF9bHpxewYqsRBklGYayr4dxKUDHxwXA57lJ\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 19:55:35\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost:8080/boil/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '034017fe064b126866c27218284523c88cb916855cb59dd1628450ff155398a4ebaf4dbc3b4c05275303c270459a4b0defebd888f7b8fee2e1ce541029fe0ac3', '2019-12-01 03:55:42', '2019-12-01 03:55:42'),
(8, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5b983c3b-64ef-405c-9f23-6e50313c35fc\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$vQn\\/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm\\/E\\/mJWSLvG\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"33b48470a27b3dfb0fad9e59db3a498a\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2019-11-30 19:56:02\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"remember_token\":\"WIDUCcFHJzoyOQERnu1O8nhdRF9bHpxewYqsRBklGYayr4dxKUDHxwXA57lJ\",\"created_at\":\"2019-11-30 05:40:25\",\"updated_at\":\"2019-11-30 19:56:02\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost:8080/boil/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'b1e92717d29f6e0450ff875c69fbdc9461918faf96b01b798728d8ce25835b81bccce0e0b10132581b78a567a106f3210c3a6c1a4bbbed70f445c8bae20e9854', '2019-12-01 03:56:03', '2019-12-01 03:56:03');

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
(3, '2017_09_03_144628_create_permission_tables', 1),
(4, '2017_09_11_174816_create_social_accounts_table', 1),
(5, '2017_09_26_140332_create_cache_table', 1),
(6, '2017_09_26_140528_create_sessions_table', 1),
(7, '2017_09_26_140609_create_jobs_table', 1),
(8, '2018_04_08_033256_create_password_histories_table', 1),
(9, '2018_11_21_000001_create_ledgers_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Auth\\User', 1),
(2, 'App\\Models\\Auth\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_histories`
--

CREATE TABLE `password_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_histories`
--

INSERT INTO `password_histories` (`id`, `user_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, '$2y$10$vQn/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm/E/mJWSLvG', '2019-11-30 13:40:25', '2019-11-30 13:40:25'),
(2, 2, '$2y$10$EONKqWexhd28GlHOKkOE8O1H6l//0DEeCvHruHriRD9uSTXqaAZYa', '2019-11-30 13:40:25', '2019-11-30 13:40:25');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view backend', 'web', '2019-11-30 13:40:25', '2019-11-30 13:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2019-11-30 13:40:25', '2019-11-30 13:40:25'),
(2, 'user', 'web', '2019-11-30 13:40:25', '2019-11-30 13:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `created`) VALUES
(1, 'fassi93wwww2@gmail.com', 'UDFfYQE2VDUJOlNl', '2019-12-04 23:46:50'),
(2, 'info@localhost.com', 'UXAKdAJ2BSE=', '2019-12-05 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gravatar',
  `avatar_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_logged_out` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `first_name`, `last_name`, `email`, `avatar_type`, `avatar_location`, `password`, `password_changed_at`, `active`, `confirmation_code`, `confirmed`, `timezone`, `last_login_at`, `last_login_ip`, `to_be_logged_out`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5b983c3b-64ef-405c-9f23-6e50313c35fc', 'Super', 'Admin', 'admin@admin.com', 'gravatar', NULL, '$2y$10$vQn/jmEs229lX.Goq5.lAeIznHyOKiy95BStlOR.Mnm/E/mJWSLvG', NULL, 1, '33b48470a27b3dfb0fad9e59db3a498a', 1, 'America/New_York', '2019-12-01 03:56:02', '::1', 0, 'WIDUCcFHJzoyOQERnu1O8nhdRF9bHpxewYqsRBklGYayr4dxKUDHxwXA57lJ', '2019-11-30 13:40:25', '2019-12-01 03:56:02', NULL),
(2, '983e597d-7782-4ccb-a976-e211e935acd8', 'Default', 'User', 'user@user.com', 'gravatar', NULL, '$2y$10$EONKqWexhd28GlHOKkOE8O1H6l//0DEeCvHruHriRD9uSTXqaAZYa', NULL, 1, '721486d8c69ab9719c911c70f4f5a4f7', 1, NULL, NULL, NULL, 0, NULL, '2019-11-30 13:40:25', '2019-11-30 13:40:25', NULL),
(9, '', 'faisal', 'malik', 'admin@example.com', 'gravatar', NULL, 'AzJYM1A4BT8Fawo+CGAHNQ==', NULL, 1, '19b3f2ade52899db758cc962c6b6ee32', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(10, '', 'faisal', 'malik', 'fassi932@gmail.com', 'gravatar', NULL, 'B2YBP1ZhBmcEN1dh', NULL, 1, 'bf46bdb57bc8338a69f43fa4fb69b5a0', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `ledgers`
--
ALTER TABLE `ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ledgers_recordable_type_recordable_id_index` (`recordable_type`,`recordable_id`),
  ADD KEY `ledgers_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `password_histories`
--
ALTER TABLE `password_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_name_index` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `password_histories`
--
ALTER TABLE `password_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `password_histories`
--
ALTER TABLE `password_histories`
  ADD CONSTRAINT `password_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
