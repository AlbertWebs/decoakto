-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 01:14 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decomagna`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_one` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_two` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_three` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `mission`, `vision`, `values`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, '<p>&quot;Quick-Step&reg; original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step&reg;. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets&quot;</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountbalance`
--

CREATE TABLE `accountbalance` (
  `accountBalID` int NOT NULL,
  `WorkingAccount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `FloatAccount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UtilityAccount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChargesPaidAccount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationSettlementAccount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BOCompletedTime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 12:29:46', '2021-05-10 12:29:46'),
(2, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 12:30:57', '2021-05-10 12:30:57'),
(3, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 12:30:57', '2021-05-10 12:30:57'),
(4, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 12:31:16', '2021-05-10 12:31:16'),
(5, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:08:31', '2021-05-10 13:08:31'),
(6, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:08:41', '2021-05-10 13:08:41'),
(7, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:09:21', '2021-05-10 13:09:21'),
(8, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:09:53', '2021-05-10 13:09:53'),
(9, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:10:05', '2021-05-10 13:10:05'),
(10, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:10:42', '2021-05-10 13:10:42'),
(11, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:11:49', '2021-05-10 13:11:49'),
(12, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:11:59', '2021-05-10 13:11:59'),
(13, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:12:43', '2021-05-10 13:12:43'),
(14, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:14:30', '2021-05-10 13:14:30'),
(15, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:14:32', '2021-05-10 13:14:32'),
(16, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:14:34', '2021-05-10 13:14:34'),
(17, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:15:21', '2021-05-10 13:15:21'),
(18, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:16:15', '2021-05-10 13:16:15'),
(19, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:16:26', '2021-05-10 13:16:26'),
(20, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:16:48', '2021-05-10 13:16:48'),
(21, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:17:18', '2021-05-10 13:17:18'),
(22, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:17:26', '2021-05-10 13:17:26'),
(23, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:18:39', '2021-05-10 13:18:39'),
(24, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:18:51', '2021-05-10 13:18:51'),
(25, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:19:41', '2021-05-10 13:19:41'),
(26, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:22:04', '2021-05-10 13:22:04'),
(27, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:24:25', '2021-05-10 13:24:25'),
(28, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:42:26', '2021-05-10 13:42:26'),
(29, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:44:38', '2021-05-10 13:44:38'),
(30, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:45:03', '2021-05-10 13:45:03'),
(31, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:45:15', '2021-05-10 13:45:15'),
(32, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:45:27', '2021-05-10 13:45:27'),
(33, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:45:39', '2021-05-10 13:45:39'),
(34, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:45:59', '2021-05-10 13:45:59'),
(35, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:46:05', '2021-05-10 13:46:05'),
(36, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:48:24', '2021-05-10 13:48:24'),
(37, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:49:56', '2021-05-10 13:49:56'),
(38, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:50:50', '2021-05-10 13:50:50'),
(39, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 13:53:09', '2021-05-10 13:53:09'),
(40, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:01:25', '2021-05-10 14:01:25'),
(41, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:11:08', '2021-05-10 14:11:08'),
(42, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:18:55', '2021-05-10 14:18:55'),
(43, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:26:30', '2021-05-10 14:26:30'),
(44, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:29:20', '2021-05-10 14:29:20'),
(45, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:29:25', '2021-05-10 14:29:25'),
(46, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:31:23', '2021-05-10 14:31:23'),
(47, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:38:29', '2021-05-10 14:38:29'),
(48, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:38:44', '2021-05-10 14:38:44'),
(49, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:39:39', '2021-05-10 14:39:39'),
(50, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:39:39', '2021-05-10 14:39:39'),
(51, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:39:44', '2021-05-10 14:39:44'),
(52, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:40:41', '2021-05-10 14:40:41'),
(53, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:40:54', '2021-05-10 14:40:54'),
(54, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:41:13', '2021-05-10 14:41:13'),
(55, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:41:21', '2021-05-10 14:41:21'),
(56, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:43:05', '2021-05-10 14:43:05'),
(57, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-10 14:43:15', '2021-05-10 14:43:15'),
(58, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:52:43', '2021-05-11 01:52:43'),
(59, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:52:45', '2021-05-11 01:52:45'),
(60, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:54:27', '2021-05-11 01:54:27'),
(61, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:54:27', '2021-05-11 01:54:27'),
(62, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:54:29', '2021-05-11 01:54:29'),
(63, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:54:45', '2021-05-11 01:54:45'),
(64, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:54:46', '2021-05-11 01:54:46'),
(65, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:55:18', '2021-05-11 01:55:18'),
(66, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:58:49', '2021-05-11 01:58:49'),
(67, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:59:27', '2021-05-11 01:59:27'),
(68, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 01:59:43', '2021-05-11 01:59:43'),
(69, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:00:10', '2021-05-11 02:00:10'),
(70, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:01:11', '2021-05-11 02:01:11'),
(71, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:01:11', '2021-05-11 02:01:11'),
(72, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:29', '2021-05-11 02:02:29'),
(73, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:30', '2021-05-11 02:02:30'),
(74, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:33', '2021-05-11 02:02:33'),
(75, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:38', '2021-05-11 02:02:38'),
(76, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:46', '2021-05-11 02:02:46'),
(77, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:02:51', '2021-05-11 02:02:51'),
(78, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:03:29', '2021-05-11 02:03:29'),
(79, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:03:36', '2021-05-11 02:03:36'),
(80, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:03:54', '2021-05-11 02:03:54'),
(81, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:03:59', '2021-05-11 02:03:59'),
(82, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:03', '2021-05-11 02:04:03'),
(83, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:08', '2021-05-11 02:04:08'),
(84, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:15', '2021-05-11 02:04:15'),
(85, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:20', '2021-05-11 02:04:20'),
(86, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:38', '2021-05-11 02:04:38'),
(87, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:04:43', '2021-05-11 02:04:43'),
(88, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:05:23', '2021-05-11 02:05:23'),
(89, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:06:43', '2021-05-11 02:06:43'),
(90, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:06:43', '2021-05-11 02:06:43'),
(91, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(92, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(93, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:19:33', '2021-05-11 02:19:33'),
(94, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:20:04', '2021-05-11 02:20:04'),
(95, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:21:28', '2021-05-11 02:21:28'),
(96, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:23:01', '2021-05-11 02:23:01'),
(97, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:23:30', '2021-05-11 02:23:30'),
(98, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:26:42', '2021-05-11 02:26:42'),
(99, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:29:16', '2021-05-11 02:29:16'),
(100, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:31:10', '2021-05-11 02:31:10'),
(101, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:34:01', '2021-05-11 02:34:01'),
(102, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:34:37', '2021-05-11 02:34:37'),
(103, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:37:25', '2021-05-11 02:37:25'),
(104, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:37:25', '2021-05-11 02:37:25'),
(105, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:38:47', '2021-05-11 02:38:47'),
(106, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:39:33', '2021-05-11 02:39:33'),
(107, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:39:33', '2021-05-11 02:39:33'),
(108, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:40:18', '2021-05-11 02:40:18'),
(109, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:41:38', '2021-05-11 02:41:38'),
(110, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:41:38', '2021-05-11 02:41:38'),
(111, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:42:23', '2021-05-11 02:42:23'),
(112, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:42:23', '2021-05-11 02:42:23'),
(113, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:42:43', '2021-05-11 02:42:43'),
(114, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:42:53', '2021-05-11 02:42:53'),
(115, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:43:12', '2021-05-11 02:43:12'),
(116, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:43:22', '2021-05-11 02:43:22'),
(117, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:46:04', '2021-05-11 02:46:04'),
(118, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:46:07', '2021-05-11 02:46:07'),
(119, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:46:34', '2021-05-11 02:46:34'),
(120, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:47:08', '2021-05-11 02:47:08'),
(121, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:47:22', '2021-05-11 02:47:22'),
(122, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:47:50', '2021-05-11 02:47:50'),
(123, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:48:28', '2021-05-11 02:48:28'),
(124, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:48:32', '2021-05-11 02:48:32'),
(125, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:48:37', '2021-05-11 02:48:37'),
(126, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:49:06', '2021-05-11 02:49:06'),
(127, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:49:12', '2021-05-11 02:49:12'),
(128, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:49:20', '2021-05-11 02:49:20'),
(129, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:49:30', '2021-05-11 02:49:30'),
(130, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:50:39', '2021-05-11 02:50:39'),
(131, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:51:03', '2021-05-11 02:51:03'),
(132, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:51:13', '2021-05-11 02:51:13'),
(133, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 02:51:36', '2021-05-11 02:51:36'),
(134, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:00:35', '2021-05-11 03:00:35'),
(135, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:01:25', '2021-05-11 03:01:25'),
(136, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:01:54', '2021-05-11 03:01:54'),
(137, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:01:58', '2021-05-11 03:01:58'),
(138, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:02:14', '2021-05-11 03:02:14'),
(139, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:03:22', '2021-05-11 03:03:22'),
(140, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:03:55', '2021-05-11 03:03:55'),
(141, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:06', '2021-05-11 03:04:06'),
(142, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:06', '2021-05-11 03:04:06'),
(143, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:13', '2021-05-11 03:04:13'),
(144, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:13', '2021-05-11 03:04:13'),
(145, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:17', '2021-05-11 03:04:17'),
(146, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:04:17', '2021-05-11 03:04:17'),
(147, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:06:27', '2021-05-11 03:06:27'),
(148, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:06:34', '2021-05-11 03:06:34'),
(149, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:07:05', '2021-05-11 03:07:05'),
(150, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:07:23', '2021-05-11 03:07:23'),
(151, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:09:18', '2021-05-11 03:09:18'),
(152, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:10:06', '2021-05-11 03:10:06'),
(153, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:10:21', '2021-05-11 03:10:21'),
(154, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:10:36', '2021-05-11 03:10:36'),
(155, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:10:42', '2021-05-11 03:10:42'),
(156, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:11:15', '2021-05-11 03:11:15'),
(157, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:11:53', '2021-05-11 03:11:53'),
(158, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:12:24', '2021-05-11 03:12:24'),
(159, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:12:43', '2021-05-11 03:12:43'),
(160, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:12:43', '2021-05-11 03:12:43'),
(161, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:13:12', '2021-05-11 03:13:12'),
(162, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:13:12', '2021-05-11 03:13:12'),
(163, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:14:17', '2021-05-11 03:14:17'),
(164, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:15:10', '2021-05-11 03:15:10'),
(165, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:15:52', '2021-05-11 03:15:52'),
(166, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:16:36', '2021-05-11 03:16:36'),
(167, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:16:53', '2021-05-11 03:16:53'),
(168, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:21:33', '2021-05-11 03:21:33'),
(169, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:21:52', '2021-05-11 03:21:52'),
(170, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:21:54', '2021-05-11 03:21:54'),
(171, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:21:54', '2021-05-11 03:21:54'),
(172, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:22:50', '2021-05-11 03:22:50'),
(173, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:24:31', '2021-05-11 03:24:31'),
(174, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:27:00', '2021-05-11 03:27:00'),
(175, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:27:29', '2021-05-11 03:27:29'),
(176, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:27:50', '2021-05-11 03:27:50'),
(177, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:28:25', '2021-05-11 03:28:25'),
(178, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:28:27', '2021-05-11 03:28:27'),
(179, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:29:03', '2021-05-11 03:29:03'),
(180, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:29:03', '2021-05-11 03:29:03'),
(181, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:29:50', '2021-05-11 03:29:50'),
(182, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:29:53', '2021-05-11 03:29:53'),
(183, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:30:28', '2021-05-11 03:30:28'),
(184, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:30:44', '2021-05-11 03:30:44'),
(185, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:31:31', '2021-05-11 03:31:31'),
(186, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:32:14', '2021-05-11 03:32:14'),
(187, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:32:25', '2021-05-11 03:32:25'),
(188, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:35:16', '2021-05-11 03:35:16'),
(189, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:35:48', '2021-05-11 03:35:48'),
(190, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:36:54', '2021-05-11 03:36:54'),
(191, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:37:05', '2021-05-11 03:37:05'),
(192, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:38:25', '2021-05-11 03:38:25'),
(193, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:38:43', '2021-05-11 03:38:43'),
(194, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:38:52', '2021-05-11 03:38:52'),
(195, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:39:35', '2021-05-11 03:39:35'),
(196, 'default', 'Evoked Edit Product For Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:40:22', '2021-05-11 03:40:22'),
(197, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:40:22', '2021-05-11 03:40:22'),
(198, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:41:03', '2021-05-11 03:41:03'),
(199, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:41:33', '2021-05-11 03:41:33'),
(200, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:41:46', '2021-05-11 03:41:46'),
(201, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:43:31', '2021-05-11 03:43:31'),
(202, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:43:33', '2021-05-11 03:43:33'),
(203, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:43:39', '2021-05-11 03:43:39'),
(204, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:44:28', '2021-05-11 03:44:28'),
(205, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:44:49', '2021-05-11 03:44:49'),
(206, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:46:10', '2021-05-11 03:46:10'),
(207, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:57:16', '2021-05-11 03:57:16'),
(208, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:58:20', '2021-05-11 03:58:20'),
(209, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:58:38', '2021-05-11 03:58:38'),
(210, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 03:59:35', '2021-05-11 03:59:35'),
(211, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:00:16', '2021-05-11 04:00:16'),
(212, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:00:37', '2021-05-11 04:00:37'),
(213, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:01:00', '2021-05-11 04:01:00'),
(214, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:01:05', '2021-05-11 04:01:05'),
(215, 'default', 'Evoked Edit Category For Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:01:19', '2021-05-11 04:01:19'),
(216, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:01:20', '2021-05-11 04:01:20'),
(217, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:02:46', '2021-05-11 04:02:46'),
(218, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:02:48', '2021-05-11 04:02:48'),
(219, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:03:04', '2021-05-11 04:03:04'),
(220, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:03:39', '2021-05-11 04:03:39'),
(221, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:06:36', '2021-05-11 04:06:36'),
(222, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:06:45', '2021-05-11 04:06:45'),
(223, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:07:44', '2021-05-11 04:07:44'),
(224, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:08:03', '2021-05-11 04:08:03'),
(225, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:05', '2021-05-11 04:36:05'),
(226, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:09', '2021-05-11 04:36:09'),
(227, 'default', 'Evoked Edit Category For Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:29', '2021-05-11 04:36:29'),
(228, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:29', '2021-05-11 04:36:29'),
(229, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:33', '2021-05-11 04:36:33'),
(230, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:39', '2021-05-11 04:36:39'),
(231, 'default', 'Evoked Edit Category For Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:49', '2021-05-11 04:36:49'),
(232, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:49', '2021-05-11 04:36:49'),
(233, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:51', '2021-05-11 04:36:51'),
(234, 'default', 'Access Edit Category ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:54', '2021-05-11 04:36:54'),
(235, 'default', 'Evoked Edit Category For Category ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:36:59', '2021-05-11 04:36:59'),
(236, 'default', 'Access Edit Category ID number 6 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:37:00', '2021-05-11 04:37:00'),
(237, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:37:02', '2021-05-11 04:37:02'),
(238, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:37:06', '2021-05-11 04:37:06'),
(239, 'default', 'Evoked Edit Category For Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:37:59', '2021-05-11 04:37:59'),
(240, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:37:59', '2021-05-11 04:37:59'),
(241, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:05', '2021-05-11 04:38:05'),
(242, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:10', '2021-05-11 04:38:10'),
(243, 'default', 'Evoked Edit Category For Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:41', '2021-05-11 04:38:41'),
(244, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:41', '2021-05-11 04:38:41'),
(245, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:45', '2021-05-11 04:38:45'),
(246, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:38:49', '2021-05-11 04:38:49'),
(247, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:39:17', '2021-05-11 04:39:17'),
(248, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:39:17', '2021-05-11 04:39:17'),
(249, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:53:04', '2021-05-11 04:53:04'),
(250, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:53:07', '2021-05-11 04:53:07'),
(251, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:53:52', '2021-05-11 04:53:52'),
(252, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-11 04:53:55', '2021-05-11 04:53:55'),
(253, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:42:29', '2021-05-13 11:42:29'),
(254, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:43:32', '2021-05-13 11:43:32'),
(255, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:43:46', '2021-05-13 11:43:46'),
(256, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:44:01', '2021-05-13 11:44:01'),
(257, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:44:46', '2021-05-13 11:44:46'),
(258, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:45:30', '2021-05-13 11:45:30'),
(259, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:45:39', '2021-05-13 11:45:39'),
(260, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:48:58', '2021-05-13 11:48:58'),
(261, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:49:20', '2021-05-13 11:49:20'),
(262, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:51:07', '2021-05-13 11:51:07'),
(263, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:51:11', '2021-05-13 11:51:11'),
(264, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:51:11', '2021-05-13 11:51:11'),
(265, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:52:41', '2021-05-13 11:52:41'),
(266, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:52:53', '2021-05-13 11:52:53'),
(267, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 11:52:53', '2021-05-13 11:52:53'),
(268, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:39:51', '2021-05-13 12:39:51'),
(269, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:40:02', '2021-05-13 12:40:02'),
(270, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:40:07', '2021-05-13 12:40:07'),
(271, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:41:33', '2021-05-13 12:41:33'),
(272, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:41:37', '2021-05-13 12:41:37'),
(273, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:56:10', '2021-05-13 12:56:10'),
(274, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:56:30', '2021-05-13 12:56:30'),
(275, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 12:58:17', '2021-05-13 12:58:17'),
(276, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:05:05', '2021-05-13 13:05:05'),
(277, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:23:04', '2021-05-13 13:23:04'),
(278, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:23:14', '2021-05-13 13:23:14'),
(279, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:23:14', '2021-05-13 13:23:14'),
(280, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:26:12', '2021-05-13 13:26:12'),
(281, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:26:30', '2021-05-13 13:26:30'),
(282, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:27:23', '2021-05-13 13:27:23'),
(283, 'default', 'Edited Slider ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:27:31', '2021-05-13 13:27:31'),
(284, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:27:31', '2021-05-13 13:27:31'),
(285, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:27:37', '2021-05-13 13:27:37'),
(286, 'default', 'Edited Slider ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:28:05', '2021-05-13 13:28:05'),
(287, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:28:05', '2021-05-13 13:28:05'),
(288, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:28:10', '2021-05-13 13:28:10'),
(289, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:29:11', '2021-05-13 13:29:11'),
(290, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:29:48', '2021-05-13 13:29:48'),
(291, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:31:14', '2021-05-13 13:31:14'),
(292, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:31:43', '2021-05-13 13:31:43'),
(293, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:32:30', '2021-05-13 13:32:30'),
(294, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:32:30', '2021-05-13 13:32:30'),
(295, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:32:36', '2021-05-13 13:32:36'),
(296, 'default', 'Edited Slider ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:33:06', '2021-05-13 13:33:06'),
(297, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:33:06', '2021-05-13 13:33:06'),
(298, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:33:09', '2021-05-13 13:33:09'),
(299, 'default', 'Edited Slider ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:33:57', '2021-05-13 13:33:57'),
(300, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:33:57', '2021-05-13 13:33:57'),
(301, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:35:32', '2021-05-13 13:35:32'),
(302, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:36:01', '2021-05-13 13:36:01'),
(303, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:36:10', '2021-05-13 13:36:10'),
(304, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:38:15', '2021-05-13 13:38:15'),
(305, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:38:38', '2021-05-13 13:38:38'),
(306, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:38:44', '2021-05-13 13:38:44'),
(307, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:39:32', '2021-05-13 13:39:32'),
(308, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:39:32', '2021-05-13 13:39:32'),
(309, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:39:47', '2021-05-13 13:39:47'),
(310, 'default', 'Edited Slider ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:39:59', '2021-05-13 13:39:59'),
(311, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:39:59', '2021-05-13 13:39:59'),
(312, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:03', '2021-05-13 13:40:03'),
(313, 'default', 'Edited Slider ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:22', '2021-05-13 13:40:22'),
(314, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:22', '2021-05-13 13:40:22'),
(315, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:38', '2021-05-13 13:40:38'),
(316, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:54', '2021-05-13 13:40:54'),
(317, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:40:54', '2021-05-13 13:40:54'),
(318, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:16', '2021-05-13 13:41:16'),
(319, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:16', '2021-05-13 13:41:16'),
(320, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:49', '2021-05-13 13:41:49'),
(321, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:51', '2021-05-13 13:41:51'),
(322, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:57', '2021-05-13 13:41:57'),
(323, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:41:58', '2021-05-13 13:41:58'),
(324, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:42:34', '2021-05-13 13:42:34'),
(325, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:43:23', '2021-05-13 13:43:23'),
(326, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:43:24', '2021-05-13 13:43:24'),
(327, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:43:31', '2021-05-13 13:43:31'),
(328, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:43:31', '2021-05-13 13:43:31'),
(329, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:44:06', '2021-05-13 13:44:06'),
(330, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:44:06', '2021-05-13 13:44:06'),
(331, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:44:38', '2021-05-13 13:44:38'),
(332, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:44:46', '2021-05-13 13:44:46'),
(333, 'default', 'Edited Slider ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:45:11', '2021-05-13 13:45:11');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(334, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:45:11', '2021-05-13 13:45:11'),
(335, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:45:36', '2021-05-13 13:45:36'),
(336, 'default', 'Edited Slider ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:46:23', '2021-05-13 13:46:23'),
(337, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 13:46:23', '2021-05-13 13:46:23'),
(338, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:15:29', '2021-05-13 14:15:29'),
(339, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:15:54', '2021-05-13 14:15:54'),
(340, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:16', '2021-05-13 14:17:16'),
(341, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:16', '2021-05-13 14:17:16'),
(342, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:33', '2021-05-13 14:17:33'),
(343, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:33', '2021-05-13 14:17:33'),
(344, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:34', '2021-05-13 14:17:34'),
(345, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:40', '2021-05-13 14:17:40'),
(346, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:41', '2021-05-13 14:17:41'),
(347, 'default', 'Edited Slider ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:53', '2021-05-13 14:17:53'),
(348, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:53', '2021-05-13 14:17:53'),
(349, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:54', '2021-05-13 14:17:54'),
(350, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:57', '2021-05-13 14:17:57'),
(351, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:17:58', '2021-05-13 14:17:58'),
(352, 'default', 'Edited Slider ID number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:13', '2021-05-13 14:18:13'),
(353, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:13', '2021-05-13 14:18:13'),
(354, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:14', '2021-05-13 14:18:14'),
(355, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:22', '2021-05-13 14:18:22'),
(356, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:30', '2021-05-13 14:18:30'),
(357, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:30', '2021-05-13 14:18:30'),
(358, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:18:54', '2021-05-13 14:18:54'),
(359, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:20:52', '2021-05-13 14:20:52'),
(360, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:20:53', '2021-05-13 14:20:53'),
(361, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:41:04', '2021-05-13 14:41:04'),
(362, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:42:34', '2021-05-13 14:42:34'),
(363, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:42:34', '2021-05-13 14:42:34'),
(364, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:42:39', '2021-05-13 14:42:39'),
(365, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:42:44', '2021-05-13 14:42:44'),
(366, 'default', 'Evoked Edit Product For Product ID number 15 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:43:06', '2021-05-13 14:43:06'),
(367, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:43:06', '2021-05-13 14:43:06'),
(368, 'default', 'Evoked Edit Product For Product ID number 15 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:43:12', '2021-05-13 14:43:12'),
(369, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:43:12', '2021-05-13 14:43:12'),
(370, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:43:37', '2021-05-13 14:43:37'),
(371, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:44:24', '2021-05-13 14:44:24'),
(372, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:44:24', '2021-05-13 14:44:24'),
(373, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:45:29', '2021-05-13 14:45:29'),
(374, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:45:29', '2021-05-13 14:45:29'),
(375, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:46:39', '2021-05-13 14:46:39'),
(376, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:46:39', '2021-05-13 14:46:39'),
(377, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:47:02', '2021-05-13 14:47:02'),
(378, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:47:26', '2021-05-13 14:47:26'),
(379, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:48:22', '2021-05-13 14:48:22'),
(380, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 14:48:23', '2021-05-13 14:48:23'),
(381, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-13 15:12:57', '2021-05-13 15:12:57'),
(382, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:28:41', '2021-05-14 07:28:41'),
(383, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:28:44', '2021-05-14 07:28:44'),
(384, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(385, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(386, 'default', 'Evoked an add Blog Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:44:32', '2021-05-14 07:44:32'),
(387, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 07:44:32', '2021-05-14 07:44:32'),
(388, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:20:34', '2021-05-14 12:20:34'),
(389, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:21:27', '2021-05-14 12:21:27'),
(390, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:22:41', '2021-05-14 12:22:41'),
(391, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:25:39', '2021-05-14 12:25:39'),
(392, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:26:09', '2021-05-14 12:26:09'),
(393, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:27:09', '2021-05-14 12:27:09'),
(394, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:28:05', '2021-05-14 12:28:05'),
(395, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:29:04', '2021-05-14 12:29:04'),
(396, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:34:54', '2021-05-14 12:34:54'),
(397, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:39:36', '2021-05-14 12:39:36'),
(398, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:39:49', '2021-05-14 12:39:49'),
(399, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:40:17', '2021-05-14 12:40:17'),
(400, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:40:19', '2021-05-14 12:40:19'),
(401, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:40:38', '2021-05-14 12:40:38'),
(402, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:40:39', '2021-05-14 12:40:39'),
(403, 'default', 'Accessed Add Blog Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:40:59', '2021-05-14 12:40:59'),
(404, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:50:46', '2021-05-14 12:50:46'),
(405, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:50:49', '2021-05-14 12:50:49'),
(406, 'default', 'Accessed Edit Banner ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:51:03', '2021-05-14 12:51:03'),
(407, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:52:56', '2021-05-14 12:52:56'),
(408, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:53:44', '2021-05-14 12:53:44'),
(409, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:53:54', '2021-05-14 12:53:54'),
(410, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:54:39', '2021-05-14 12:54:39'),
(411, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:57:43', '2021-05-14 12:57:43'),
(412, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:57:58', '2021-05-14 12:57:58'),
(413, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:57:58', '2021-05-14 12:57:58'),
(414, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:58:24', '2021-05-14 12:58:24'),
(415, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:58:56', '2021-05-14 12:58:56'),
(416, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:58:56', '2021-05-14 12:58:56'),
(417, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 12:59:25', '2021-05-14 12:59:25'),
(418, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:00:02', '2021-05-14 13:00:02'),
(419, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:00:05', '2021-05-14 13:00:05'),
(420, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:02:26', '2021-05-14 13:02:26'),
(421, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:02:28', '2021-05-14 13:02:28'),
(422, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:02:31', '2021-05-14 13:02:31'),
(423, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:02:52', '2021-05-14 13:02:52'),
(424, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:04:23', '2021-05-14 13:04:23'),
(425, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 13:05:52', '2021-05-14 13:05:52'),
(426, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 15:54:50', '2021-05-14 15:54:50'),
(427, 'default', 'Accessed the color Variations page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 15:54:59', '2021-05-14 15:54:59'),
(428, 'default', 'Accessed the color Variations page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-14 15:55:18', '2021-05-14 15:55:18'),
(429, 'default', 'Accessed the size Variations page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 02:59:58', '2021-05-15 02:59:58'),
(430, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:22:31', '2021-05-15 04:22:31'),
(431, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:26:09', '2021-05-15 04:26:09'),
(432, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:26:25', '2021-05-15 04:26:25'),
(433, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:27:15', '2021-05-15 04:27:15'),
(434, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:27:36', '2021-05-15 04:27:36'),
(435, 'default', 'User Accessed The Copyright Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:27:39', '2021-05-15 04:27:39'),
(436, 'default', 'User Accessed The Copyright Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:28:23', '2021-05-15 04:28:23'),
(437, 'default', 'User Accessed The Copyright Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:28:45', '2021-05-15 04:28:45'),
(438, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:29:25', '2021-05-15 04:29:25'),
(439, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:17', '2021-05-15 04:30:17'),
(440, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:22', '2021-05-15 04:30:22'),
(441, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:35', '2021-05-15 04:30:35'),
(442, 'default', 'Accessed The All FAQ Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:37', '2021-05-15 04:30:37'),
(443, 'default', 'Accessed The All FAQ Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:41', '2021-05-15 04:30:41'),
(444, 'default', 'Accessed FAQ Edit ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:48', '2021-05-15 04:30:48'),
(445, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:30:55', '2021-05-15 04:30:55'),
(446, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:18', '2021-05-15 04:31:18'),
(447, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:30', '2021-05-15 04:31:30'),
(448, 'default', 'Update o the copyright page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:32', '2021-05-15 04:31:32'),
(449, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:32', '2021-05-15 04:31:32'),
(450, 'default', 'Update o the copyright page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:43', '2021-05-15 04:31:43'),
(451, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:31:43', '2021-05-15 04:31:43'),
(452, 'default', 'Accessed The All FAQ Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 04:32:36', '2021-05-15 04:32:36'),
(453, 'default', 'Access The Terms and Conditions Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:01:08', '2021-05-15 05:01:08'),
(454, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:01:09', '2021-05-15 05:01:09'),
(455, 'default', 'Terms & Condition Added', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(456, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(457, 'default', 'Terms & Condition Added', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:02:30', '2021-05-15 05:02:30'),
(458, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:02:31', '2021-05-15 05:02:31'),
(459, 'default', 'Accessed The All Privacy Privacy Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:04:48', '2021-05-15 05:04:48'),
(460, 'default', 'Access The Privacy Policy Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:04:50', '2021-05-15 05:04:50'),
(461, 'default', 'Access The Add Privacy Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:05:18', '2021-05-15 05:05:18'),
(462, 'default', 'Access The Privacy Policy Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:05:18', '2021-05-15 05:05:18'),
(463, 'default', 'User Accessed The Copyright Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 05:09:00', '2021-05-15 05:09:00'),
(464, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 08:05:43', '2021-05-15 08:05:43'),
(465, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 08:05:46', '2021-05-15 08:05:46'),
(466, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 09:56:34', '2021-05-15 09:56:34'),
(467, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 09:57:16', '2021-05-15 09:57:16'),
(468, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 09:58:14', '2021-05-15 09:58:14'),
(469, 'default', 'Update Risk Declaration page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 09:58:33', '2021-05-15 09:58:33'),
(470, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-05-15 09:58:33', '2021-05-15 09:58:33'),
(471, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:26:47', '2022-06-06 10:26:47'),
(472, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:26:56', '2022-06-06 10:26:56'),
(473, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:27:08', '2022-06-06 10:27:08'),
(474, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:27:15', '2022-06-06 10:27:15'),
(475, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:27:37', '2022-06-06 10:27:37'),
(476, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:27:49', '2022-06-06 10:27:49'),
(477, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:29:09', '2022-06-06 10:29:09'),
(478, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 10:29:10', '2022-06-06 10:29:10'),
(479, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:08:05', '2022-06-06 11:08:05'),
(480, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:10:44', '2022-06-06 11:10:44'),
(481, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:10:51', '2022-06-06 11:10:51'),
(482, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:10:51', '2022-06-06 11:10:51'),
(483, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:10:58', '2022-06-06 11:10:58'),
(484, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:10:58', '2022-06-06 11:10:58'),
(485, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:11:15', '2022-06-06 11:11:15'),
(486, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:11:29', '2022-06-06 11:11:29'),
(487, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:11:32', '2022-06-06 11:11:32'),
(488, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:13:26', '2022-06-06 11:13:26'),
(489, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:14:54', '2022-06-06 11:14:54'),
(490, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:14:55', '2022-06-06 11:14:55'),
(491, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:16:06', '2022-06-06 11:16:06'),
(492, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:16:06', '2022-06-06 11:16:06'),
(493, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:17:10', '2022-06-06 11:17:10'),
(494, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:17:10', '2022-06-06 11:17:10'),
(495, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:18:49', '2022-06-06 11:18:49'),
(496, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:18:50', '2022-06-06 11:18:50'),
(497, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:19:59', '2022-06-06 11:19:59'),
(498, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:20:00', '2022-06-06 11:20:00'),
(499, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:21:20', '2022-06-06 11:21:20'),
(500, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:21:21', '2022-06-06 11:21:21'),
(501, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:23:07', '2022-06-06 11:23:07'),
(502, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:23:07', '2022-06-06 11:23:07'),
(503, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:24:09', '2022-06-06 11:24:09'),
(504, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:24:09', '2022-06-06 11:24:09'),
(505, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:25:06', '2022-06-06 11:25:06'),
(506, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:25:06', '2022-06-06 11:25:06'),
(507, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:26:18', '2022-06-06 11:26:18'),
(508, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:26:18', '2022-06-06 11:26:18'),
(509, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:27:27', '2022-06-06 11:27:27'),
(510, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-06-06 11:27:27', '2022-06-06 11:27:27'),
(511, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:45:25', '2022-08-06 07:45:25'),
(512, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:46:37', '2022-08-06 07:46:37'),
(513, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:46:37', '2022-08-06 07:46:37'),
(514, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:47:37', '2022-08-06 07:47:37'),
(515, 'default', 'Access Edit Product ID number 31 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:47:51', '2022-08-06 07:47:51'),
(516, 'default', 'Evoked Edit Product For Product ID number 31 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:48:11', '2022-08-06 07:48:11'),
(517, 'default', 'Access Edit Product ID number 31 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-06 07:48:11', '2022-08-06 07:48:11'),
(518, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:27:48', '2022-08-23 05:27:48'),
(519, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:27:53', '2022-08-23 05:27:53'),
(520, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:29:18', '2022-08-23 05:29:18'),
(521, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:29:18', '2022-08-23 05:29:18'),
(522, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:38:26', '2022-08-23 05:38:26'),
(523, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:38:36', '2022-08-23 05:38:36'),
(524, 'default', 'Evoked Edit Product For Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:39:03', '2022-08-23 05:39:03'),
(525, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:39:03', '2022-08-23 05:39:03'),
(526, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-08-23 05:39:30', '2022-08-23 05:39:30'),
(527, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 09:00:07', '2022-10-07 09:00:07'),
(528, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 09:00:45', '2022-10-07 09:00:45'),
(529, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 09:00:46', '2022-10-07 09:00:46'),
(530, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 09:00:51', '2022-10-07 09:00:51'),
(531, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:52:39', '2022-10-07 12:52:39'),
(532, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:52:48', '2022-10-07 12:52:48'),
(533, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:52:52', '2022-10-07 12:52:52'),
(534, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:52:57', '2022-10-07 12:52:57'),
(535, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:53:00', '2022-10-07 12:53:00'),
(536, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:53:05', '2022-10-07 12:53:05'),
(537, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 12:53:08', '2022-10-07 12:53:08'),
(538, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:35:11', '2022-10-08 01:35:11'),
(539, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:37:12', '2022-10-08 01:37:12'),
(540, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:37:12', '2022-10-08 01:37:12'),
(541, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:41:01', '2022-10-08 01:41:01'),
(542, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:41:01', '2022-10-08 01:41:01'),
(543, 'default', 'Evoked add Product Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:42:45', '2022-10-08 01:42:45'),
(544, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 01:42:46', '2022-10-08 01:42:46'),
(545, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:09:37', '2023-05-25 02:09:37'),
(546, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:10:29', '2023-05-25 02:10:29'),
(547, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:10:32', '2023-05-25 02:10:32'),
(548, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:10:50', '2023-05-25 02:10:50'),
(549, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:10:53', '2023-05-25 02:10:53'),
(550, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:11:16', '2023-05-25 02:11:16'),
(551, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:11:24', '2023-05-25 02:11:24'),
(552, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 02:12:11', '2023-05-25 02:12:11'),
(553, 'default', 'Access All users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 05:30:54', '2023-05-25 05:30:54'),
(554, 'default', 'Access All users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-05-25 05:32:04', '2023-05-25 05:32:04'),
(555, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:17:21', '2023-06-09 04:17:21'),
(556, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:20:28', '2023-06-09 04:20:28'),
(557, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:20:55', '2023-06-09 04:20:55'),
(558, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:21:02', '2023-06-09 04:21:02'),
(559, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:21:10', '2023-06-09 04:21:10'),
(560, 'default', 'Update o the copyright page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:21:52', '2023-06-09 04:21:52'),
(561, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:21:53', '2023-06-09 04:21:53'),
(562, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:38:28', '2023-06-09 04:38:28'),
(563, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:38:37', '2023-06-09 04:38:37'),
(564, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:38:39', '2023-06-09 04:38:39'),
(565, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:38:50', '2023-06-09 04:38:50'),
(566, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:38:50', '2023-06-09 04:38:50'),
(567, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:39:45', '2023-06-09 04:39:45'),
(568, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:39:55', '2023-06-09 04:39:55'),
(569, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:39:56', '2023-06-09 04:39:56'),
(570, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:40:03', '2023-06-09 04:40:03'),
(571, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:12', '2023-06-09 04:41:12'),
(572, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:16', '2023-06-09 04:41:16'),
(573, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:29', '2023-06-09 04:41:29'),
(574, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:34', '2023-06-09 04:41:34'),
(575, 'default', 'Accessed The All FAQ Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:39', '2023-06-09 04:41:39'),
(576, 'default', 'Accessed The All How it works Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:41:44', '2023-06-09 04:41:44'),
(577, 'default', 'Accessed The All How it works Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:42:02', '2023-06-09 04:42:02'),
(578, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-09 04:42:08', '2023-06-09 04:42:08'),
(579, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:02:37', '2023-06-12 06:02:37'),
(580, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:02:54', '2023-06-12 06:02:54'),
(581, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:02:54', '2023-06-12 06:02:54'),
(582, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:04', '2023-06-12 06:03:04'),
(583, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:04', '2023-06-12 06:03:04'),
(584, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:31', '2023-06-12 06:03:31'),
(585, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:32', '2023-06-12 06:03:32'),
(586, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:42', '2023-06-12 06:03:42'),
(587, 'default', 'Accessed the all blogs page ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:52', '2023-06-12 06:03:52'),
(588, 'default', 'User Accessed The About Section', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:03:58', '2023-06-12 06:03:58'),
(589, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:06:05', '2023-06-12 06:06:05'),
(590, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:06:09', '2023-06-12 06:06:09'),
(591, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:06:12', '2023-06-12 06:06:12'),
(592, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:06:57', '2023-06-12 06:06:57'),
(593, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:06:58', '2023-06-12 06:06:58'),
(594, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:07:02', '2023-06-12 06:07:02'),
(595, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:08:10', '2023-06-12 06:08:10'),
(596, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:08:10', '2023-06-12 06:08:10'),
(597, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:08:52', '2023-06-12 06:08:52'),
(598, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:08:52', '2023-06-12 06:08:52'),
(599, 'default', 'Evoked add Category Operation', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:09:34', '2023-06-12 06:09:34'),
(600, 'default', 'Accessed Add Category Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:09:34', '2023-06-12 06:09:34'),
(601, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:09:37', '2023-06-12 06:09:37'),
(602, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:09:44', '2023-06-12 06:09:44'),
(603, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:10:40', '2023-06-12 06:10:40'),
(604, 'default', 'Accessed All Products', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:11:37', '2023-06-12 06:11:37'),
(605, 'default', 'Accessed Add Product Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:11:49', '2023-06-12 06:11:49'),
(606, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:13:15', '2023-06-12 06:13:15'),
(607, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:13:20', '2023-06-12 06:13:20'),
(608, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:15:58', '2023-06-12 06:15:58'),
(609, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:17:24', '2023-06-12 06:17:24'),
(610, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:17:25', '2023-06-12 06:17:25'),
(611, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:17:30', '2023-06-12 06:17:30'),
(612, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:19:17', '2023-06-12 06:19:17'),
(613, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:19:29', '2023-06-12 06:19:29'),
(614, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:20:04', '2023-06-12 06:20:04'),
(615, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:20:18', '2023-06-12 06:20:18'),
(616, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:20:19', '2023-06-12 06:20:19'),
(617, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:21:33', '2023-06-12 06:21:33'),
(618, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:21:33', '2023-06-12 06:21:33'),
(619, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:09', '2023-06-12 06:22:09'),
(620, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:09', '2023-06-12 06:22:09'),
(621, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:14', '2023-06-12 06:22:14'),
(622, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:14', '2023-06-12 06:22:14'),
(623, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:47', '2023-06-12 06:22:47'),
(624, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:22:48', '2023-06-12 06:22:48'),
(625, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:02', '2023-06-12 06:24:02'),
(626, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:03', '2023-06-12 06:24:03'),
(627, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:09', '2023-06-12 06:24:09'),
(628, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:09', '2023-06-12 06:24:09'),
(629, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:29', '2023-06-12 06:24:29'),
(630, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:29', '2023-06-12 06:24:29'),
(631, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:53', '2023-06-12 06:24:53'),
(632, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:55', '2023-06-12 06:24:55'),
(633, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:24:55', '2023-06-12 06:24:55'),
(634, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:25:29', '2023-06-12 06:25:29'),
(635, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:25:30', '2023-06-12 06:25:30'),
(636, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:26:27', '2023-06-12 06:26:27'),
(637, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:28:21', '2023-06-12 06:28:21'),
(638, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:28:38', '2023-06-12 06:28:38'),
(639, 'default', 'Edited Slider ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:29:48', '2023-06-12 06:29:48'),
(640, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:29:48', '2023-06-12 06:29:48'),
(641, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:31:23', '2023-06-12 06:31:23'),
(642, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:32:03', '2023-06-12 06:32:03'),
(643, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:32:21', '2023-06-12 06:32:21'),
(644, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:32:29', '2023-06-12 06:32:29'),
(645, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:32:51', '2023-06-12 06:32:51'),
(646, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:39:22', '2023-06-12 06:39:22'),
(647, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:39:23', '2023-06-12 06:39:23'),
(648, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:39:27', '2023-06-12 06:39:27'),
(649, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:39:49', '2023-06-12 06:39:49'),
(650, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:40:00', '2023-06-12 06:40:00'),
(651, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:41:33', '2023-06-12 06:41:33'),
(652, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:43:06', '2023-06-12 06:43:06'),
(653, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:43:06', '2023-06-12 06:43:06'),
(654, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:45:06', '2023-06-12 06:45:06'),
(655, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:45:06', '2023-06-12 06:45:06'),
(656, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:46:23', '2023-06-12 06:46:23'),
(657, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:46:23', '2023-06-12 06:46:23'),
(658, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:47:32', '2023-06-12 06:47:32'),
(659, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:47:33', '2023-06-12 06:47:33'),
(660, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:47:35', '2023-06-12 06:47:35'),
(661, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:47:51', '2023-06-12 06:47:51'),
(662, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:49:56', '2023-06-12 06:49:56'),
(663, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:49:56', '2023-06-12 06:49:56'),
(664, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:51:49', '2023-06-12 06:51:49');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(665, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:52:02', '2023-06-12 06:52:02'),
(666, 'default', 'Evoked an add Slider Operation ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:53:21', '2023-06-12 06:53:21'),
(667, 'default', 'Add Slider Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:53:21', '2023-06-12 06:53:21'),
(668, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:53:24', '2023-06-12 06:53:24'),
(669, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:55:04', '2023-06-12 06:55:04'),
(670, 'default', 'Accessed Edit Banner ID number 9 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:55:07', '2023-06-12 06:55:07'),
(671, 'default', 'Evoked Edit Banner For Banner ID number 9 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:55:37', '2023-06-12 06:55:37'),
(672, 'default', 'Accessed Edit Banner ID number 9 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:55:37', '2023-06-12 06:55:37'),
(673, 'default', 'Accessed Edit Banner ID number 9 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:56:30', '2023-06-12 06:56:30'),
(674, 'default', 'Accessed Edit Banner ID number 9 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:56:45', '2023-06-12 06:56:45'),
(675, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:56:52', '2023-06-12 06:56:52'),
(676, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:57:27', '2023-06-12 06:57:27'),
(677, 'default', 'Accessed The All testimonials page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:59:00', '2023-06-12 06:59:00'),
(678, 'default', 'Access All users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:59:05', '2023-06-12 06:59:05'),
(679, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 06:59:20', '2023-06-12 06:59:20'),
(680, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:11:51', '2023-06-12 07:11:51'),
(681, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:12:02', '2023-06-12 07:12:02'),
(682, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:12:14', '2023-06-12 07:12:14'),
(683, 'default', 'Evoked an update Settings Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:12:24', '2023-06-12 07:12:24'),
(684, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:12:57', '2023-06-12 07:12:57'),
(685, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-06-12 07:13:57', '2023-06-12 07:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `b2b_api_response`
--

CREATE TABLE `b2b_api_response` (
  `b2bTransactionID` int NOT NULL,
  `TransactionID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatorAccountCurrentBalance` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitAccountCurrentBalance` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyAffectedAccountBalance` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b2c_api_response`
--

CREATE TABLE `b2c_api_response` (
  `b2bID` int NOT NULL,
  `TransactionReceipt` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionAmount` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CWorkingAccountAvailableFunds` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CUtilityAccountAvailableFunds` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionCompletedDateTime` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CChargesPaidAccountAvailableFunds` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CRecipientIsRegisteredCustomer` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, '7', 'Truest', '2022-06-10 13:15:33', '2022-06-10 13:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `link_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `link_name`, `title`, `size`, `content`, `link`, `section`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Slider', 'Slider', NULL, '141.95.31.206', 'https://www.aste.co.ke/products/sandals', 'home_proffesional', 'download-banner-home-proffessional.webp', NULL, NULL),
(2, 'Shop Now', 'About Us', '425by680', 'Be The First To Grab This', 'http://localhost:8000/products/women', 'home_first', 'amboseli.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint UNSIGNED NOT NULL,
  `reference` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int NOT NULL DEFAULT '0',
  `course_id` int NOT NULL,
  `amount` int DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `due` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `paid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `reference`, `transID`, `group_id`, `group_role`, `original_payment`, `student`, `note`, `balance`, `course_id`, `amount`, `description`, `due`, `title`, `paid`, `created_at`, `updated_at`) VALUES
(1, 'AEC-01', NULL, NULL, 'child', 'AEC-01', '1', 'Thank you for choosing Atlas Educational Center', -949100, 3, 1000000, 'Update', '2022-05-25 15:06:13', 'Computer Technology', 'Partially Paid', '2022-05-25 12:06:13', '2022-05-25 12:06:13'),
(2, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 197200, 5, 1000, 'Updated', '2022-05-31 07:49:19', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:49:19', '2022-05-31 04:49:19'),
(3, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 196200, 5, 1000, 'Updated', '2022-05-31 07:51:26', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:51:26', '2022-05-31 04:51:26'),
(4, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 195200, 5, 1000, 'Updated', '2022-05-31 07:51:52', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:51:52', '2022-05-31 04:51:52'),
(5, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 194200, 5, 1000, 'Updated', '2022-05-31 07:52:10', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:52:10', '2022-05-31 04:52:10'),
(6, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 193200, 5, 1000, 'Updated', '2022-05-31 07:53:03', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:53:03', '2022-05-31 04:53:03'),
(7, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 192200, 5, 1000, 'Updated', '2022-05-31 07:53:17', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:53:17', '2022-05-31 04:53:17'),
(8, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 191200, 5, 1000, 'Updated', '2022-05-31 07:53:41', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:53:41', '2022-05-31 04:53:41'),
(9, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 190200, 5, 1000, 'Updated', '2022-05-31 07:55:21', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:55:21', '2022-05-31 04:55:21'),
(10, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 189200, 5, 1000, 'Updated', '2022-05-31 07:55:36', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:55:36', '2022-05-31 04:55:36'),
(11, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 188200, 5, 1000, 'Updated', '2022-05-31 07:55:56', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:55:56', '2022-05-31 04:55:56'),
(12, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 187200, 5, 1000, 'Updated', '2022-05-31 07:57:02', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:57:02', '2022-05-31 04:57:02'),
(13, 'AEC-02', NULL, 'AEC-02', 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 186200, 5, 1000, 'Updated', '2022-05-31 07:57:12', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 04:57:12', '2022-05-31 04:57:12'),
(14, 'AEC-02', NULL, NULL, 'child', 'AEC-02', '2', 'Thank you for choosing Atlas Educational Center', 185200, 5, 1000, 'Updated', '2022-05-31 08:12:50', 'Mechatronic Engineering', 'Partially Paid', '2022-05-31 05:12:50', '2022-05-31 05:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `active`, `slung`, `title`, `tags`, `video`, `meta`, `content`, `author`, `category`, `image_one`, `image_two`, `image_three`, `image_four`, `created_at`, `updated_at`) VALUES
(1, 1, 'history-so-far', 'History so far', NULL, NULL, 'Aspernatur eos debitis vero quas quis itaque omnis nemo repellat accusamus expedita id ex, provident velit illo dolorum ducimus, aut totam veritatis error fuga ratione, fugiat quasi nesciunt maiores. Esse odit maxime optio tempore?', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '3', '2021-05-1410:30:56imageblog-single-post-02.jpg', NULL, NULL, NULL, '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(2, 1, 'maxime-veniam-non', 'Maxime veniam non', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '4', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-15 07:44:32', '2021-05-14 07:44:32'),
(5, 3, 'maxime-veniam-noon', 'Maxime veniam noon', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\r\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\r\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\r\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '3', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-16 07:44:32', '2021-05-14 07:44:32'),
(6, 3, 'maxiime-veniam-noon', 'Maxiime veniam noon', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\r\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\r\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\r\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '4', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-17 07:44:32', '2021-05-14 07:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashes`
--

CREATE TABLE `cashes` (
  `id` bigint UNSIGNED NOT NULL,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cashes`
--

INSERT INTO `cashes` (`id`, `source`, `balance`, `amount`, `date`, `user`, `reason`, `code`, `created_at`, `updated_at`) VALUES
(1, 'M-PESA', '1000000', '1000000', '2022-05-25 15:06:13', '1', 'School Fees Paid By Edward Odinga, Paying For Computer Technology', 'M-PESA', '2022-05-25 12:06:13', '2022-05-25 12:06:13'),
(2, 'M-PESA', '1001000', '1000', '2022-05-31 07:49:19', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:49:19', '2022-05-31 04:49:19'),
(3, 'M-PESA', '1002000', '1000', '2022-05-31 07:51:25', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:51:25', '2022-05-31 04:51:25'),
(4, 'M-PESA', '1003000', '1000', '2022-05-31 07:51:52', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:51:52', '2022-05-31 04:51:52'),
(5, 'M-PESA', '1004000', '1000', '2022-05-31 07:52:09', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:52:09', '2022-05-31 04:52:09'),
(6, 'M-PESA', '1005000', '1000', '2022-05-31 07:53:02', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:53:02', '2022-05-31 04:53:02'),
(7, 'M-PESA', '1006000', '1000', '2022-05-31 07:53:16', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:53:16', '2022-05-31 04:53:16'),
(8, 'M-PESA', '1007000', '1000', '2022-05-31 07:53:40', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:53:40', '2022-05-31 04:53:40'),
(9, 'M-PESA', '1008000', '1000', '2022-05-31 07:55:20', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:55:20', '2022-05-31 04:55:20'),
(10, 'M-PESA', '1009000', '1000', '2022-05-31 07:55:35', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:55:35', '2022-05-31 04:55:35'),
(11, 'M-PESA', '1010000', '1000', '2022-05-31 07:55:55', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:55:55', '2022-05-31 04:55:55'),
(12, 'M-PESA', '1011000', '1000', '2022-05-31 07:57:01', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:57:01', '2022-05-31 04:57:01'),
(13, 'M-PESA', '1012000', '1000', '2022-05-31 07:57:12', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 04:57:12', '2022-05-31 04:57:12'),
(14, 'M-PESA', '1013000', '1000', '2022-05-31 08:12:50', '1', 'School Fees Paid By Albert Muhatia, Paying For Mechatronic Engineering', 'M-PESA', '2022-05-31 05:12:50', '2022-05-31 05:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slung`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Quick-Step® Original Laminate Flooring', 'quick-step-original-laminate-flooring', '<p>Discover redefined elegance &amp; durability.</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'download.webp', '2023-06-12 06:06:57', '2023-06-12 06:06:57'),
(2, 'Quick-Step® original Flooring accessories & finishes', 'quick-step-original-flooring-accessories-finishes', '<p>Finish your floor to perfection with our dedicated selection of skirting boards, profiles, quartre rounds, cornishes and more.</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'quickstep-two.webp', '2023-06-12 06:08:10', '2023-06-12 06:08:10'),
(3, 'Quick-Step® Original Staircase Solutions', 'quick-step-original-staircase-solutions', 'Fully finished stairs in a matching color with your flooring', 'download-three.webp', '2023-06-12 06:08:52', '2023-06-12 06:08:52'),
(4, 'Quick-Step® Original Matching Solutions', 'quick-step-original-matching-solutions', '<p>Enjoy a perfect finish with matching skirting boards and profiles</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'download-four.webp', '2023-06-12 06:09:34', '2023-06-12 06:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'anonymous ',
  `status` tinyint NOT NULL DEFAULT '0',
  `post_id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `status`, `post_id`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'John Kirimi', 1, 1, 'kirimijg@gmail.com', 'This is a sample comment', '2021-05-14 08:55:24', '2021-05-14 08:55:24'),
(2, 'Albert  Muhatia', 1, 1, 'nektatech@gmail.com', 'Another Comment', '2021-05-14 08:58:01', '2021-05-14 08:58:01'),
(3, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'This is a sample', '2021-05-14 08:58:58', '2021-05-14 08:58:58'),
(4, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'asas', '2021-05-14 08:59:56', '2021-05-14 08:59:56'),
(5, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'aaa', '2021-05-14 09:00:25', '2021-05-14 09:00:25'),
(6, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'aaa', '2021-05-14 09:00:29', '2021-05-14 09:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Copyright Statement',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slung`, `meta`, `content`, `icon`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, '1st Time Learner Approach(With Live Examples)', '1st-time-learner-approachwith-live-examples', 'Beginners course for understanding the financial market(ideal for new traders)', '<ul>\n<li>One of the industry leaders</li>\n<li>Advanced risk management</li>\n<li>Award-winning customer service*</li>\n<li>Low minimum deposit</li>\n</ul>', 'in-section-profit-13a.png', 'in-section-profit-13a.png', 400, '2021-04-16 04:00:00', '2021-04-16 04:00:00'),
(2, '3 Simple Strategies: Beginner to Pro Approach(With Live Examples)', '3-simple-strategies-beginner-to-pro-approachwith-live-examples', 'Receive even deeper knowledge for deeper understanding of the financial markets', '<ul>\n<li>One of the industry leaders</li>\n<li>Advanced risk management</li>\n<li>Award-winning customer service*</li>\n<li>Low minimum deposit</li>\n</ul>', 'in-section-profit-13b.png', 'in-section-profit-13b.png', 600, '2021-04-16 04:00:00', '2021-04-16 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_basic_profiles`
--

CREATE TABLE `dymantic_instagram_basic_profiles` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dymantic_instagram_basic_profiles`
--

INSERT INTO `dymantic_instagram_basic_profiles` (`id`, `username`, `created_at`, `updated_at`) VALUES
(1, 'aste.co.ke', '2022-06-05 07:42:59', '2022-06-05 07:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_feed_tokens`
--

CREATE TABLE `dymantic_instagram_feed_tokens` (
  `id` int UNSIGNED NOT NULL,
  `profile_id` int UNSIGNED NOT NULL,
  `access_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dymantic_instagram_feed_tokens`
--

INSERT INTO `dymantic_instagram_feed_tokens` (`id`, `profile_id`, `access_code`, `username`, `user_id`, `user_fullname`, `user_profile_picture`, `created_at`, `updated_at`) VALUES
(1, 1, 'IGQVJVd2tVUVpsNjNwdlU0dE1NLWxwcEw0ZAHhHUmVTbzlkc1dMM1AyQXoxaEdfMllFQVJORzdDcG1kTUV1MTFDdGFXOXF0ZAzJpVEJrSzR1ZAXFxdk94NmJ2NHJ6YmVXMkl2VWI3Qlh3', 'aste.co.ke', '7722342604472737', 'not available', 'not available', NULL, '2022-09-04 00:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_status` tinyint NOT NULL DEFAULT '0',
  `email_body` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint UNSIGNED NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `slung`, `category`, `meta`, `content`, `created_at`, `updated_at`) VALUES
(1, 'How Write FAQs One', 'how-write-faqs-one', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(2, 'How Write FAQs two', 'how-write-faqs-two', '5', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(3, 'How Write FAQs Three', 'how-write-faqs-three', '4', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(4, 'How Write FAQs Four', 'how-write-faqs-four', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(5, 'How Write FAQs Five', 'how-write-faqs-five', '6', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(6, 'How Write FAQs Six', 'how-write-faqs-six', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(7, 'How Write FAQs Seven', 'how-write-faqs-seven', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(9, 'Test FAQ', 'test-faq', '3', 'This is a test FAQ Meta Infomation', '<p>This is a test FAQ Meta description</p>', '2021-04-13 17:45:29', '2021-04-13 17:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `hows`
--

CREATE TABLE `hows` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int NOT NULL,
  `code` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `price` double NOT NULL,
  `status` int NOT NULL,
  `product` int NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `address`, `price`, `status`, `product`, `ip`) VALUES
(27, 'iYBCr1l16eaIoJ9ei3g2Fyuqs', 'HTTP/1.1 401 Unauthorized\n', 58.6, -1, 4, '154.152.205.154'),
(28, 'T4XJ2VQ91q4FY5OshEWBt4LGJ', '18xREniiKGFg9KPNnwKhSgPPjAcuu6nH7V', 400, -1, 1, '154.152.205.154'),
(29, 'koBfTucsUeYAFii7ehdMDSpEY', '1773nBXJVFT96kJyFEqp9Pfw1bt87rcUiH', 400, -1, 1, '154.152.205.154');

-- --------------------------------------------------------

--
-- Table structure for table `lnmo_api_response`
--

CREATE TABLE `lnmo_api_response` (
  `lnmoID` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `Amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MpesaReceiptNumber` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckoutRequestID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MerchantRequestID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransactionDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `PhoneNumber` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lnmo_api_response`
--

INSERT INTO `lnmo_api_response` (`lnmoID`, `user_id`, `status`, `Amount`, `MpesaReceiptNumber`, `CheckoutRequestID`, `MerchantRequestID`, `TransactionDate`, `PhoneNumber`, `updateTime`, `updated_at`, `created_at`) VALUES
(1, 2, 1, '1', 'PEI33KFOK1', 'ws_CO_22052022163920674723014032', '8845-3128764-1', '20210518121458', '254723014032', '2021-05-18 05:14:52', '2021-05-18 13:14:52', '2021-05-18 06:14:52'),
(2, 5, 1, '10000', 'PEI33KFOK1a', 'ws_CO_08062022110945562723014032', '8845-aa3128764-1', '20210518121458', '254723014032', '2021-05-18 05:14:52', '2021-05-18 13:14:52', '2021-05-18 06:14:52'),
(3, NULL, 0, NULL, NULL, 'ws_CO_08062022100248685723014032', '65103-45475530-2', '0', NULL, '2022-06-08 10:02:50', '2022-06-08 04:02:50', '2022-06-08 04:02:50'),
(4, NULL, 0, NULL, NULL, 'ws_CO_08062022110138797723014032', '53779-105422514-2', '0', NULL, '2022-06-08 11:01:40', '2022-06-08 05:01:40', '2022-06-08 05:01:40'),
(5, NULL, 0, NULL, NULL, 'ws_CO_08062022110405698723014032', '86354-46482040-1', '0', NULL, '2022-06-08 11:04:07', '2022-06-08 05:04:07', '2022-06-08 05:04:07'),
(6, NULL, 0, NULL, NULL, 'ws_CO_08062022110657154723014032', '28835-7753600-1', '0', NULL, '2022-06-08 11:06:59', '2022-06-08 05:06:59', '2022-06-08 05:06:59'),
(7, NULL, 0, NULL, NULL, 'ws_CO_08062022110945562723014032', '28841-7760115-1', '0', NULL, '2022-06-08 11:09:48', '2022-06-08 05:09:48', '2022-06-08 05:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_09_073615_create__credentials_table', 0),
(7, '2023_06_09_073615_create__pro_excel_table', 0),
(8, '2023_06_09_073615_create__site_settings_table', 0),
(9, '2023_06_09_073615_create_abouts_table', 0),
(10, '2023_06_09_073615_create_accountbalance_table', 0),
(11, '2023_06_09_073615_create_activity_log_table', 0),
(12, '2023_06_09_073615_create_b2b_api_response_table', 0),
(13, '2023_06_09_073615_create_b2c_api_response_table', 0),
(14, '2023_06_09_073615_create_banks_table', 0),
(15, '2023_06_09_073615_create_banners_table', 0),
(16, '2023_06_09_073615_create_billings_table', 0),
(17, '2023_06_09_073615_create_blogs_table', 0),
(18, '2023_06_09_073615_create_cart_storage_table', 0),
(19, '2023_06_09_073615_create_cashes_table', 0),
(20, '2023_06_09_073615_create_categories_table', 0),
(21, '2023_06_09_073615_create_comments_table', 0),
(22, '2023_06_09_073615_create_copyright_table', 0),
(23, '2023_06_09_073615_create_copyrights_table', 0),
(24, '2023_06_09_073615_create_courses_table', 0),
(25, '2023_06_09_073615_create_dymantic_instagram_basic_profiles_table', 0),
(26, '2023_06_09_073615_create_dymantic_instagram_feed_tokens_table', 0),
(27, '2023_06_09_073615_create_email_settings_table', 0),
(28, '2023_06_09_073615_create_expenses_table', 0),
(29, '2023_06_09_073615_create_failed_jobs_table', 0),
(30, '2023_06_09_073615_create_faq_table', 0),
(31, '2023_06_09_073615_create_hows_table', 0),
(32, '2023_06_09_073615_create_invoices_table', 0),
(33, '2023_06_09_073615_create_lnmo_api_response_table', 0),
(34, '2023_06_09_073615_create_messages_table', 0),
(35, '2023_06_09_073615_create_mobile_payments_table', 0),
(36, '2023_06_09_073615_create_notifications_table', 0),
(37, '2023_06_09_073615_create_orders_table', 0),
(38, '2023_06_09_073615_create_orders_product_table', 0),
(39, '2023_06_09_073615_create_password_reset_tokens_table', 0),
(40, '2023_06_09_073615_create_password_resets_table', 0),
(41, '2023_06_09_073615_create_payment_table', 0),
(42, '2023_06_09_073615_create_payments_table', 0),
(43, '2023_06_09_073615_create_personal_access_tokens_table', 0),
(44, '2023_06_09_073615_create_post_views_table', 0),
(45, '2023_06_09_073615_create_privacies_table', 0),
(46, '2023_06_09_073615_create_products_table', 0),
(47, '2023_06_09_073615_create_rates_table', 0),
(48, '2023_06_09_073615_create_reverse_transaction_table', 0),
(49, '2023_06_09_073615_create_reviews_table', 0),
(50, '2023_06_09_073615_create_s_t_k_requests_table', 0),
(51, '2023_06_09_073615_create_schools_table', 0),
(52, '2023_06_09_073615_create_sessions_table', 0),
(53, '2023_06_09_073615_create_settings_table', 0),
(54, '2023_06_09_073615_create_sliders_table', 0),
(55, '2023_06_09_073615_create_students_table', 0),
(56, '2023_06_09_073615_create_terms_table', 0),
(57, '2023_06_09_073615_create_testimonials_table', 0),
(58, '2023_06_09_073615_create_transaction_status_table', 0),
(59, '2023_06_09_073615_create_tutors_table', 0),
(60, '2023_06_09_073615_create_users_table', 0),
(61, '2023_06_09_073615_create_variations_table', 0),
(62, '2023_06_09_073615_create_wishlist_table', 0),
(63, '2023_06_12_100042_create__credentials_table', 0),
(64, '2023_06_12_100042_create__pro_excel_table', 0),
(65, '2023_06_12_100042_create__site_settings_table', 0),
(66, '2023_06_12_100042_create_abouts_table', 0),
(67, '2023_06_12_100042_create_accountbalance_table', 0),
(68, '2023_06_12_100042_create_activity_log_table', 0),
(69, '2023_06_12_100042_create_b2b_api_response_table', 0),
(70, '2023_06_12_100042_create_b2c_api_response_table', 0),
(71, '2023_06_12_100042_create_banks_table', 0),
(72, '2023_06_12_100042_create_banners_table', 0),
(73, '2023_06_12_100042_create_billings_table', 0),
(74, '2023_06_12_100042_create_blogs_table', 0),
(75, '2023_06_12_100042_create_cart_storage_table', 0),
(76, '2023_06_12_100042_create_cashes_table', 0),
(77, '2023_06_12_100042_create_categories_table', 0),
(78, '2023_06_12_100042_create_comments_table', 0),
(79, '2023_06_12_100042_create_copyright_table', 0),
(80, '2023_06_12_100042_create_copyrights_table', 0),
(81, '2023_06_12_100042_create_courses_table', 0),
(82, '2023_06_12_100042_create_dymantic_instagram_basic_profiles_table', 0),
(83, '2023_06_12_100042_create_dymantic_instagram_feed_tokens_table', 0),
(84, '2023_06_12_100042_create_email_settings_table', 0),
(85, '2023_06_12_100042_create_expenses_table', 0),
(86, '2023_06_12_100042_create_failed_jobs_table', 0),
(87, '2023_06_12_100042_create_faq_table', 0),
(88, '2023_06_12_100042_create_hows_table', 0),
(89, '2023_06_12_100042_create_invoices_table', 0),
(90, '2023_06_12_100042_create_lnmo_api_response_table', 0),
(91, '2023_06_12_100042_create_messages_table', 0),
(92, '2023_06_12_100042_create_mobile_payments_table', 0),
(93, '2023_06_12_100042_create_notifications_table', 0),
(94, '2023_06_12_100042_create_orders_table', 0),
(95, '2023_06_12_100042_create_orders_product_table', 0),
(96, '2023_06_12_100042_create_password_reset_tokens_table', 0),
(97, '2023_06_12_100042_create_password_resets_table', 0),
(98, '2023_06_12_100042_create_payment_table', 0),
(99, '2023_06_12_100042_create_payments_table', 0),
(100, '2023_06_12_100042_create_personal_access_tokens_table', 0),
(101, '2023_06_12_100042_create_post_views_table', 0),
(102, '2023_06_12_100042_create_privacies_table', 0),
(103, '2023_06_12_100042_create_products_table', 0),
(104, '2023_06_12_100042_create_rates_table', 0),
(105, '2023_06_12_100042_create_reverse_transaction_table', 0),
(106, '2023_06_12_100042_create_reviews_table', 0),
(107, '2023_06_12_100042_create_s_t_k_requests_table', 0),
(108, '2023_06_12_100042_create_schools_table', 0),
(109, '2023_06_12_100042_create_sessions_table', 0),
(110, '2023_06_12_100042_create_settings_table', 0),
(111, '2023_06_12_100042_create_sliders_table', 0),
(112, '2023_06_12_100042_create_students_table', 0),
(113, '2023_06_12_100042_create_terms_table', 0),
(114, '2023_06_12_100042_create_testimonials_table', 0),
(115, '2023_06_12_100042_create_transaction_status_table', 0),
(116, '2023_06_12_100042_create_tutors_table', 0),
(117, '2023_06_12_100042_create_users_table', 0),
(118, '2023_06_12_100042_create_variations_table', 0),
(119, '2023_06_12_100042_create_wishlist_table', 0),
(120, '2023_06_12_100124_create__credentials_table', 0),
(121, '2023_06_12_100124_create__pro_excel_table', 0),
(122, '2023_06_12_100124_create__site_settings_table', 0),
(123, '2023_06_12_100124_create_abouts_table', 0),
(124, '2023_06_12_100124_create_accountbalance_table', 0),
(125, '2023_06_12_100124_create_activity_log_table', 0),
(126, '2023_06_12_100124_create_b2b_api_response_table', 0),
(127, '2023_06_12_100124_create_b2c_api_response_table', 0),
(128, '2023_06_12_100124_create_banks_table', 0),
(129, '2023_06_12_100124_create_banners_table', 0),
(130, '2023_06_12_100124_create_billings_table', 0),
(131, '2023_06_12_100124_create_blogs_table', 0),
(132, '2023_06_12_100124_create_cart_storage_table', 0),
(133, '2023_06_12_100124_create_cashes_table', 0),
(134, '2023_06_12_100124_create_categories_table', 0),
(135, '2023_06_12_100124_create_comments_table', 0),
(136, '2023_06_12_100124_create_copyright_table', 0),
(137, '2023_06_12_100124_create_copyrights_table', 0),
(138, '2023_06_12_100124_create_courses_table', 0),
(139, '2023_06_12_100124_create_dymantic_instagram_basic_profiles_table', 0),
(140, '2023_06_12_100124_create_dymantic_instagram_feed_tokens_table', 0),
(141, '2023_06_12_100124_create_email_settings_table', 0),
(142, '2023_06_12_100124_create_expenses_table', 0),
(143, '2023_06_12_100124_create_failed_jobs_table', 0),
(144, '2023_06_12_100124_create_faq_table', 0),
(145, '2023_06_12_100124_create_hows_table', 0),
(146, '2023_06_12_100124_create_invoices_table', 0),
(147, '2023_06_12_100124_create_lnmo_api_response_table', 0),
(148, '2023_06_12_100124_create_messages_table', 0),
(149, '2023_06_12_100124_create_mobile_payments_table', 0),
(150, '2023_06_12_100124_create_notifications_table', 0),
(151, '2023_06_12_100124_create_orders_table', 0),
(152, '2023_06_12_100124_create_orders_product_table', 0),
(153, '2023_06_12_100124_create_password_reset_tokens_table', 0),
(154, '2023_06_12_100124_create_password_resets_table', 0),
(155, '2023_06_12_100124_create_payment_table', 0),
(156, '2023_06_12_100124_create_payments_table', 0),
(157, '2023_06_12_100124_create_personal_access_tokens_table', 0),
(158, '2023_06_12_100124_create_post_views_table', 0),
(159, '2023_06_12_100124_create_privacies_table', 0),
(160, '2023_06_12_100124_create_products_table', 0),
(161, '2023_06_12_100124_create_rates_table', 0),
(162, '2023_06_12_100124_create_reverse_transaction_table', 0),
(163, '2023_06_12_100124_create_reviews_table', 0),
(164, '2023_06_12_100124_create_s_t_k_requests_table', 0),
(165, '2023_06_12_100124_create_schools_table', 0),
(166, '2023_06_12_100124_create_sessions_table', 0),
(167, '2023_06_12_100124_create_settings_table', 0),
(168, '2023_06_12_100124_create_sliders_table', 0),
(169, '2023_06_12_100124_create_students_table', 0),
(170, '2023_06_12_100124_create_terms_table', 0),
(171, '2023_06_12_100124_create_testimonials_table', 0),
(172, '2023_06_12_100124_create_transaction_status_table', 0),
(173, '2023_06_12_100124_create_tutors_table', 0),
(174, '2023_06_12_100124_create_users_table', 0),
(175, '2023_06_12_100124_create_variations_table', 0),
(176, '2023_06_12_100124_create_wishlist_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `TransactionType` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransTime` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BillRefNumber` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceNumber` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrgAccountBalance` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThirdPartyTransID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSISDN` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_payments`
--

INSERT INTO `mobile_payments` (`transLoID`, `user_id`, `status`, `TransactionType`, `TransID`, `TransTime`, `TransAmount`, `BusinessShortCode`, `BillRefNumber`, `InvoiceNumber`, `OrgAccountBalance`, `ThirdPartyTransID`, `MSISDN`, `FirstName`, `MiddleName`, `LastName`, `lastUpdate`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', 'U49DYMLXAG', '20210503142050', 1000000, '603421', '2', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2021-05-03 07:20:50', '2021-05-03 15:20:50', '2021-05-03 15:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `type`, `status`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:22:20', '2022-06-08 09:22:20'),
(2, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:23:07', '2022-06-08 09:23:07'),
(3, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:23:53', '2022-06-08 09:23:53'),
(4, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:26:20', '2022-06-08 09:26:20'),
(5, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:28:10', '2022-06-08 09:28:10'),
(6, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:28:34', '2022-06-08 09:28:34'),
(7, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:28:59', '2022-06-08 09:28:59'),
(8, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:29:22', '2022-06-08 09:29:22'),
(9, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:29:58', '2022-06-08 09:29:58'),
(10, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:35:09', '2022-06-08 09:35:09'),
(11, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:38:18', '2022-06-08 09:38:18'),
(12, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:39:16', '2022-06-08 09:39:16'),
(13, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:40:26', '2022-06-08 09:40:26'),
(14, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 09:47:54', '2022-06-08 09:47:54'),
(15, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:19:25', '2022-06-08 10:19:25'),
(16, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:26:57', '2022-06-08 10:26:57'),
(17, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:27:57', '2022-06-08 10:27:57'),
(18, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:29:03', '2022-06-08 10:29:03'),
(19, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:30:04', '2022-06-08 10:30:04'),
(20, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:33:00', '2022-06-08 10:33:00'),
(21, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:35:23', '2022-06-08 10:35:23'),
(22, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:36:26', '2022-06-08 10:36:26'),
(23, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:36:49', '2022-06-08 10:36:49'),
(24, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:37:18', '2022-06-08 10:37:18'),
(25, NULL, 'Order', 0, 'You have a new Order', '2022-06-08 10:38:47', '2022-06-08 10:38:47'),
(26, NULL, 'Order', 0, 'You have a new Order', '2022-06-10 13:15:38', '2022-06-10 13:15:38'),
(27, NULL, 'Order', 0, 'You have a new Order', '2022-06-11 10:42:42', '2022-06-11 10:42:42'),
(28, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 11:53:15', '2022-08-02 11:53:15'),
(29, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 11:56:48', '2022-08-02 11:56:48'),
(30, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:17:56', '2022-08-02 12:17:56'),
(31, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:18:03', '2022-08-02 12:18:03'),
(32, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:18:37', '2022-08-02 12:18:37'),
(33, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:19:01', '2022-08-02 12:19:01'),
(34, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:19:59', '2022-08-02 12:19:59'),
(35, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:22:15', '2022-08-02 12:22:15'),
(36, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:22:42', '2022-08-02 12:22:42'),
(37, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:23:45', '2022-08-02 12:23:45'),
(38, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:26:13', '2022-08-02 12:26:13'),
(39, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:27:26', '2022-08-02 12:27:26'),
(40, NULL, 'Order', 0, 'You have a new Order', '2022-08-02 12:27:39', '2022-08-02 12:27:39'),
(41, NULL, 'Order', 0, 'You have a new Order', '2022-08-05 15:42:33', '2022-08-05 15:42:33'),
(42, NULL, 'Order', 0, 'You have a new Order', '2022-08-06 07:52:48', '2022-08-06 07:52:48'),
(43, NULL, 'Order', 0, 'You have a new Order', '2022-08-23 04:50:20', '2022-08-23 04:50:20'),
(44, NULL, 'Order', 0, 'You have a new Order', '2022-08-23 15:08:38', '2022-08-23 15:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total`, `date`, `created_at`, `updated_at`) VALUES
(1, 7, 'pending', '6800', '2022-08-02 11:53:15', '2022-08-02 11:53:15', '2022-08-02 11:53:15'),
(2, 7, 'pending', '6800', '2022-08-02 11:56:48', '2022-08-02 11:56:48', '2022-08-02 11:56:48'),
(3, 7, 'pending', '130', '2022-08-02 12:17:56', '2022-08-02 12:17:56', '2022-08-02 12:17:56'),
(4, 7, 'pending', '130', '2022-08-02 12:18:03', '2022-08-02 12:18:03', '2022-08-02 12:18:03'),
(5, 7, 'pending', '130', '2022-08-02 12:18:37', '2022-08-02 12:18:37', '2022-08-02 12:18:37'),
(6, 7, 'pending', '130', '2022-08-02 12:19:01', '2022-08-02 12:19:01', '2022-08-02 12:19:01'),
(7, 7, 'pending', '130', '2022-08-02 12:19:59', '2022-08-02 12:19:59', '2022-08-02 12:19:59'),
(8, 7, 'pending', '130', '2022-08-02 12:22:15', '2022-08-02 12:22:15', '2022-08-02 12:22:15'),
(9, 7, 'pending', '130', '2022-08-02 12:22:42', '2022-08-02 12:22:42', '2022-08-02 12:22:42'),
(10, 7, 'pending', '130', '2022-08-02 12:23:45', '2022-08-02 12:23:45', '2022-08-02 12:23:45'),
(11, 7, 'pending', '130', '2022-08-02 12:26:13', '2022-08-02 12:26:13', '2022-08-02 12:26:13'),
(12, 7, 'pending', '130', '2022-08-02 12:27:26', '2022-08-02 12:27:26', '2022-08-02 12:27:26'),
(13, 7, 'pending', '130', '2022-08-02 12:27:39', '2022-08-02 12:27:39', '2022-08-02 12:27:39'),
(14, 7, 'pending', '0', '2022-08-05 15:42:33', '2022-08-05 15:42:33', '2022-08-05 15:42:33'),
(15, 1, 'pending', '1850', '2022-08-06 07:52:48', '2022-08-06 07:52:48', '2022-08-06 07:52:48'),
(16, 8, 'pending', '1850', '2022-08-23 04:50:20', '2022-08-23 04:50:20', '2022-08-23 04:50:20'),
(17, 1, 'pending', '1850', '2022-08-23 15:08:38', '2022-08-23 15:08:38', '2022-08-23 15:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders_product`
--

CREATE TABLE `orders_product` (
  `id` int UNSIGNED NOT NULL,
  `tax` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `orders_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_product`
--

INSERT INTO `orders_product` (`id`, `tax`, `total`, `product_id`, `orders_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, NULL, '6800', 27, 1, NULL, '2022-08-02 11:53:15', '2022-08-02 11:53:15'),
(2, NULL, '6800', 27, 2, NULL, '2022-08-02 11:56:48', '2022-08-02 11:56:48'),
(3, NULL, '130', 2, 3, NULL, '2022-08-02 12:17:56', '2022-08-02 12:17:56'),
(4, NULL, '130', 2, 4, NULL, '2022-08-02 12:18:03', '2022-08-02 12:18:03'),
(5, NULL, '130', 2, 5, NULL, '2022-08-02 12:18:37', '2022-08-02 12:18:37'),
(6, NULL, '130', 2, 6, NULL, '2022-08-02 12:19:01', '2022-08-02 12:19:01'),
(7, NULL, '130', 2, 7, NULL, '2022-08-02 12:19:59', '2022-08-02 12:19:59'),
(8, NULL, '130', 2, 8, NULL, '2022-08-02 12:22:15', '2022-08-02 12:22:15'),
(9, NULL, '130', 2, 9, NULL, '2022-08-02 12:22:42', '2022-08-02 12:22:42'),
(10, NULL, '130', 2, 10, NULL, '2022-08-02 12:23:45', '2022-08-02 12:23:45'),
(11, NULL, '130', 2, 11, NULL, '2022-08-02 12:26:13', '2022-08-02 12:26:13'),
(12, NULL, '130', 2, 12, NULL, '2022-08-02 12:27:26', '2022-08-02 12:27:26'),
(13, NULL, '130', 2, 13, NULL, '2022-08-02 12:27:39', '2022-08-02 12:27:39'),
(14, NULL, '1850', 31, 15, NULL, '2022-08-06 07:52:48', '2022-08-06 07:52:48'),
(15, NULL, '1850', 31, 16, NULL, '2022-08-23 04:50:20', '2022-08-23 04:50:20'),
(16, NULL, '1850', 31, 17, NULL, '2022-08-23 15:08:38', '2022-08-23 15:08:38');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `businessid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `order_id` int NOT NULL,
  `transactionid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `businessid`, `user_id`, `order_id`, `transactionid`, `trackingid`, `status`, `currency`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1', 7, 1, 'PESAPALKLIVCH5WARPCOLV', NULL, 'NEW', 'KES', '1', '2022-08-02 11:53:15', '2022-08-02 11:53:15'),
(2, '1', 7, 2, 'PESAPAL7A15VUF6985PM13', '7682ac29-960a-401e-b4a6-dfc79b76a24c', 'Confirmed', 'KES', '1', '2022-08-02 11:56:48', '2022-08-02 11:57:31'),
(3, '1', 7, 13, 'PESAPALJPLYHFUM4A0DMIL', NULL, 'NEW', 'KES', '1', '2022-08-02 12:27:43', '2022-08-02 12:27:43'),
(4, '1', 7, 14, 'PESAPAL24NGP9LXGM6QL9D', NULL, 'NEW', 'KES', '1', '2022-08-05 15:42:33', '2022-08-05 15:42:33'),
(5, '1', 1, 15, 'PESAPALPKPGIBJJ3XRTAFH', NULL, 'NEW', 'KES', '1', '2022-08-06 07:52:50', '2022-08-06 07:52:50'),
(6, '1', 8, 16, 'PESAPAL2WFVN40F3D9MFYJ', 'fb75a414-1e75-4c83-98dc-dfb294d91c89', 'Confirmed', 'KES', '1', '2022-08-23 04:50:22', '2022-08-23 04:51:40'),
(7, '1', 1, 17, 'PESAPAL01OZF1C1UG3UBRT', '345d0437-bc6b-451d-b775-dfb2c3517d3b', 'Confirmed', 'KES', '1', '2022-08-23 15:08:41', '2022-08-23 15:36:34');

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
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int UNSIGNED NOT NULL,
  `titleslug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', '<p>Introduction to privacy policy</p>', '2021-05-15 05:05:18', '2021-05-15 05:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `slung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_product_category` int NOT NULL DEFAULT '6552',
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aste',
  `featured` tinyint NOT NULL DEFAULT '0',
  `trending` tinyint NOT NULL DEFAULT '1',
  `banner_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'In Stock',
  `price_raw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint UNSIGNED NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rates` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `currency`, `symbol`, `rates`, `created_at`, `updated_at`) VALUES
(1, 'USD', '$', '0.008821', '2021-12-15 06:28:49', '2021-12-15 06:28:59'),
(2, 'EUR', '€', '0.007824', '2021-12-15 06:28:54', '2021-12-15 06:29:03'),
(3, 'GBP', '£', '0.006662', '2021-12-15 06:29:12', '2021-12-15 06:29:08'),
(4, 'KES', 'Ksh', '1', '2021-12-15 07:06:30', '2021-12-15 07:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `reverse_transaction`
--

CREATE TABLE `reverse_transaction` (
  `transactionstatusID` int NOT NULL,
  `DebitAccountBalance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginalTransactionID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Charge` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyPublicName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyPublicName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `product_id`, `content`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'info@designekta.com', '1', 'Sample Review Here', '5', '2021-05-15 10:35:53', '2021-05-15 10:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'School of Business Studies', '2022-05-13 06:45:41', '2022-05-13 06:45:41'),
(2, 'School of ICT', '2022-05-13 06:46:51', '2022-05-13 06:46:51'),
(3, 'School of English Language', '2022-05-13 06:48:28', '2022-05-13 06:48:28'),
(4, 'School of Tailoring Skills', '2022-05-13 06:49:10', '2022-05-13 06:49:10'),
(5, 'School of IGCSE', '2022-05-13 06:49:29', '2022-05-13 06:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `mobile`, `location`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Atlas Educational Centers', 'atlaseducationalcentre@gmail.com', '+254741363089', '7th Floor, Al Habib Building, 4th Street', 'atlascollege-logo (1).jpg', '2022-05-11 03:06:24', '2022-05-11 03:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `action_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `action`, `name`, `content`, `action_name`, `thumbnail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'https://www.decomagna.com/blog/', 'A floor that makes you smile', '<p>Sit back and relax, Quick-Step floors are there for you</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'Read Our Stories', 'https://www.decomagna.com/uploads/transparent-icon.webp', 'slider-1.webp', '2023-06-12 06:17:25', '2023-06-12 06:17:25'),
(2, 'https://decomagna.com/product-category/laminate/', 'ORIGINAL QUICK-STEP LAMINATE FLOORING', '<p>MADE IN BELGIUM</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'Our Laminate collections', NULL, 'download-slider-2.webp', '2023-06-12 06:39:23', '2023-06-12 06:39:23'),
(3, NULL, 'Flooring surveys & measurements, Kenya', '<p>Reliable flooring services at your fingertips. Get the right floor for you</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', NULL, NULL, 'download-slider-3.webp', '2023-06-12 06:43:06', '2023-06-12 06:43:06'),
(4, NULL, 'Live, Breathe, Love Flooring. We do..', 'From free site surveys to our dedication to your satisfaction.', NULL, NULL, 'download-slider-4.webp', '2023-06-12 06:45:06', '2023-06-12 06:45:06'),
(5, NULL, 'Moving in can be fun! Let us help you..', 'Don\'t gamble with your flooring, pick Quick-Step', NULL, NULL, 'download-slider-5.webp', '2023-06-12 06:46:23', '2023-06-12 06:46:23'),
(6, NULL, 'Skirting board installation for laminate flooring', '<p>It is important that the walls are scraped clean so that the skirting bords will adhere well to the wall. We dont use nails as this can impact the quality of the finishing.</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', NULL, NULL, 'download-slider-6.webp', '2023-06-12 06:47:32', '2023-06-12 06:47:32'),
(7, 'https://decomagna.com/brochure', 'STATE OF THE ART FEATURES & TECHNOLOGIES', 'DISCOVER WHAT MAKES QUICK-STEP SO GOOD', 'VIEW CATALOGS', NULL, 'download-slider-7.webp', '2023-06-12 06:49:56', '2023-06-12 06:49:56'),
(8, NULL, 'Technical support and after-sales services, Kenya', '<p>Professional &amp; efficient tech-support</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', NULL, NULL, 'download-slider-8.webp', '2023-06-12 06:53:21', '2023-06-12 06:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_t_k_requests`
--

CREATE TABLE `s_t_k_requests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `Amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CheckoutRequestID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MerchantRequestID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_t_k_requests`
--

INSERT INTO `s_t_k_requests` (`id`, `user_id`, `status`, `Amount`, `CheckoutRequestID`, `MerchantRequestID`, `PhoneNumber`, `created_at`, `updated_at`) VALUES
(1, 5, 0, '10', 'ws_CO_25052022162906855723014032', '23979-6064089-2', '254723014032', '2022-05-25 10:29:08', '2022-05-25 10:29:08'),
(2, 5, 0, '10', 'ws_CO_25052022163340614723014032', '19148-10513716-1', '254723014032', '2022-05-25 10:33:42', '2022-05-25 10:33:42'),
(3, 5, 0, '10', 'ws_CO_25052022164331192723014032', '32095-10665717-1', '254723014032', '2022-05-25 10:43:34', '2022-05-25 10:43:34'),
(4, 5, 0, '10', 'ws_CO_25052022172237518723014032', '19157-10622489-2', '254723014032', '2022-05-25 11:22:39', '2022-05-25 11:22:39'),
(5, NULL, 0, '6000', 'ws_CO_08062022095759323723014032', '17780-7600409-1', '254723014032', '2022-06-08 03:58:01', '2022-06-08 03:58:01'),
(6, NULL, 1, '6000', 'ws_CO_08062022100248685723014032', '65103-45475530-2', '254723014032', '2022-06-08 04:02:50', '2022-06-08 04:02:50'),
(7, NULL, 1, '6000', 'ws_CO_08062022110138797723014032', '53779-105422514-2', '254723014032', '2022-06-08 05:01:40', '2022-06-08 05:01:40'),
(8, NULL, 1, '6000', 'ws_CO_08062022110405698723014032', '86354-46482040-1', '254723014032', '2022-06-08 05:04:07', '2022-06-08 05:04:07'),
(9, NULL, 1, '6000', 'ws_CO_08062022110657154723014032', '28835-7753600-1', '254723014032', '2022-06-08 05:06:59', '2022-06-08 05:06:59'),
(10, NULL, 1, '6000', 'ws_CO_08062022110945562723014032', '28841-7760115-1', '254723014032', '2022-06-08 05:09:48', '2022-06-08 05:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', '<p>This is an introduction to terms and conditions</p>', '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(2, '!st Terms and Condition', '<p>Test Terms and Conditions</p>', '2021-05-15 05:02:30', '2021-05-15 05:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_status`
--

CREATE TABLE `transaction_status` (
  `transactionStatusID` int NOT NULL,
  `ReceiptNo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConversationID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `FinalisedTime` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionStatus` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReasonType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DebitAccountType` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatedTime` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginatorConversationID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyName` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyCharges` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Albert Tutorials', 'alberttutors@gmail.com', '0790841987', 'nairobi', 'Male', '1', NULL, NULL),
(2, 'Muhatia Tutora', 'teachertutors@gmail.com', '0786644148', 'nairobi', 'Male', '1', NULL, NULL),
(3, 'Kim Omondi', 'kimomondi@gmail.com', '0723014032', 'Address', 'Male', '1', '2022-05-04 08:45:54', '2022-05-04 08:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '1',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT '1',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `is_admin`, `country`, `status`, `address`, `mobile`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@decomagna.com', NULL, NULL, '$2y$10$hpLHdnlegx8PZDap3LQrTujPsoEBkrqfnBPx7C0evD994cKJ9uMci', 1, NULL, 1, NULL, NULL, 1, NULL, '2023-06-09 03:36:51', '2023-06-09 03:36:51'),
(2, 'Manager User', 'manager@decomagna.com', NULL, NULL, '$2y$10$U0YXu.drQUBwV8U3sxoZcezD7YbXcIq6aiTfXG3ATdSsUbZ2OWFQ6', 1, NULL, 1, NULL, NULL, 2, NULL, '2023-06-09 03:36:51', '2023-06-09 03:36:51'),
(3, 'User', 'user@decomagna.com', NULL, NULL, '$2y$10$szPaHmfqW9wYooClY9ICue4pb/9spyFcp31vP.H8KY.mjp4IQfWlq', 1, NULL, 1, NULL, NULL, 0, NULL, '2023-06-09 03:36:51', '2023-06-09 03:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `type`, `status`, `image`, `value`, `price`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'color', '1', '2021-05-1505:53:57imageproduct-color-red.jpg', 'Red', '130', '2', '2021-05-14 16:20:55', '2021-05-14 16:20:55'),
(2, 'color', '1', '2021-05-1505:54:55imageproduct-color-green.jpg', 'Green', '130', '2', '2021-05-15 02:17:25', '2021-05-15 02:17:25'),
(3, 'color', '1', '2021-05-1505:55:10imageproduct-color-violet.jpg', 'Violet', '130', '2', '2021-05-15 02:18:06', '2021-05-15 02:18:06'),
(4, 'color', '1', '2021-05-1505:55:57imageproduct-color-grey.jpg', 'Grey', '130', '2', '2021-05-15 02:18:33', '2021-05-15 02:18:33'),
(5, 'color', '1', '2021-05-1505:56:30imageproduct-color-blue.jpg', 'Blue', '130', '2', '2021-05-15 02:19:18', '2021-05-15 02:19:18'),
(6, 'color', '1', '2021-05-1505:56:54imageproduct-color-yellow.jpg', 'Yellow', '130', '2', '2021-05-15 02:50:29', '2021-05-15 02:50:29'),
(8, 'size', '1', '0', '36', '140', '2', '2021-05-15 03:04:41', '2021-05-15 03:04:41'),
(9, 'size', '1', '0', '38', '140', '2', '2021-05-15 03:05:28', '2021-05-15 03:05:28'),
(10, 'size', '1', '0', '42', '140', '2', '2021-05-15 03:05:04', '2021-05-15 03:05:04'),
(11, 'size', '1', '0', '40', '140', '2', '2021-05-15 03:04:53', '2021-05-15 03:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `session_id` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `session_id`, `item_id`, `created_at`, `updated_at`) VALUES
(19, '144.217.135.139', NULL, 30, '2022-06-15 08:08:29', '2022-06-15 08:08:29'),
(20, '94.154.239.69', NULL, 12, '2022-07-30 16:50:31', '2022-07-30 16:50:31'),
(21, '94.154.239.69', NULL, 13, '2022-07-30 16:50:34', '2022-07-30 16:50:34'),
(22, '94.154.239.69', NULL, 15, '2022-07-30 16:50:37', '2022-07-30 16:50:37'),
(23, '94.154.239.69', NULL, 16, '2022-07-30 16:50:42', '2022-07-30 16:50:42'),
(24, '94.154.239.69', NULL, 17, '2022-07-30 16:50:46', '2022-07-30 16:50:46'),
(25, '94.154.239.69', NULL, 18, '2022-07-30 16:50:49', '2022-07-30 16:50:49'),
(26, '94.154.239.69', NULL, 20, '2022-07-30 16:50:54', '2022-07-30 16:50:54'),
(27, '94.154.239.69', NULL, 21, '2022-07-30 16:50:57', '2022-07-30 16:50:57'),
(28, '94.154.239.69', NULL, 22, '2022-07-30 16:51:00', '2022-07-30 16:51:00'),
(29, '94.154.239.69', NULL, 23, '2022-07-30 16:51:04', '2022-07-30 16:51:04'),
(30, '94.154.239.69', NULL, 24, '2022-07-30 16:51:09', '2022-07-30 16:51:09'),
(31, '94.154.239.69', NULL, 25, '2022-07-30 16:51:13', '2022-07-30 16:51:13'),
(32, '94.154.239.69', NULL, 26, '2022-07-30 16:51:17', '2022-07-30 16:51:17'),
(33, '94.154.239.69', NULL, 27, '2022-07-30 16:51:21', '2022-07-30 16:51:21'),
(34, '94.154.239.69', NULL, 28, '2022-07-30 16:51:27', '2022-07-30 16:51:27'),
(35, '94.154.239.69', NULL, 29, '2022-07-30 16:51:30', '2022-07-30 16:51:30'),
(36, '94.154.239.69', NULL, 30, '2022-07-30 16:51:35', '2022-07-30 16:51:35'),
(37, '94.154.239.69', NULL, 4, '2022-07-30 16:51:40', '2022-07-30 16:51:40'),
(38, '94.154.239.69', NULL, 5, '2022-07-30 16:51:45', '2022-07-30 16:51:45'),
(39, '135.181.212.177', NULL, 1, '2022-07-30 21:43:21', '2022-07-30 21:43:21'),
(40, '135.181.212.177', NULL, 11, '2022-07-30 21:43:26', '2022-07-30 21:43:26'),
(41, '135.181.212.177', NULL, 14, '2022-07-30 21:43:33', '2022-07-30 21:43:33'),
(42, '135.181.212.177', NULL, 2, '2022-07-30 21:43:38', '2022-07-30 21:43:38'),
(43, '135.181.212.177', NULL, 3, '2022-07-30 21:43:43', '2022-07-30 21:43:43'),
(44, '135.181.212.177', NULL, 6, '2022-07-30 21:43:50', '2022-07-30 21:43:50'),
(45, '135.181.212.177', NULL, 7, '2022-07-30 21:43:57', '2022-07-30 21:43:57'),
(46, '135.181.212.177', NULL, 9, '2022-07-30 21:44:03', '2022-07-30 21:44:03'),
(47, '54.36.149.72', NULL, 1, '2022-07-30 22:39:32', '2022-07-30 22:39:32'),
(48, '54.36.148.59', NULL, 2, '2022-07-30 22:45:34', '2022-07-30 22:45:34'),
(49, '54.36.148.50', NULL, 3, '2022-07-30 22:52:12', '2022-07-30 22:52:12'),
(50, '54.36.149.65', NULL, 16, '2022-07-30 23:37:21', '2022-07-30 23:37:21'),
(51, '38.242.214.79', NULL, 19, '2022-07-31 03:43:28', '2022-07-31 03:43:28'),
(52, '54.36.148.18', NULL, 11, '2022-08-01 01:58:28', '2022-08-01 01:58:28'),
(53, '54.36.148.75', NULL, 14, '2022-08-01 02:11:05', '2022-08-01 02:11:05'),
(54, '54.36.148.233', NULL, 6, '2022-08-01 02:17:31', '2022-08-01 02:17:31'),
(55, '54.36.148.218', NULL, 7, '2022-08-01 02:24:06', '2022-08-01 02:24:06'),
(56, '54.36.148.77', NULL, 9, '2022-08-01 02:31:44', '2022-08-01 02:31:44'),
(57, '54.36.148.228', NULL, 19, '2022-08-01 02:50:49', '2022-08-01 02:50:49'),
(58, '54.36.148.9', NULL, 17, '2022-08-01 02:57:54', '2022-08-01 02:57:54'),
(59, '54.36.149.15', NULL, 18, '2022-08-01 03:05:11', '2022-08-01 03:05:11'),
(60, '54.36.149.87', NULL, 20, '2022-08-01 03:11:53', '2022-08-01 03:11:53'),
(61, '54.36.148.238', NULL, 21, '2022-08-01 03:19:07', '2022-08-01 03:19:07'),
(62, '54.36.148.29', NULL, 22, '2022-08-01 03:26:47', '2022-08-01 03:26:47'),
(63, '54.36.148.192', NULL, 23, '2022-08-01 03:34:00', '2022-08-01 03:34:00'),
(64, '54.36.149.96', NULL, 24, '2022-08-01 03:42:02', '2022-08-01 03:42:02'),
(65, '54.36.148.222', NULL, 25, '2022-08-01 03:49:45', '2022-08-01 03:49:45'),
(66, '54.36.148.21', NULL, 26, '2022-08-01 03:57:34', '2022-08-01 03:57:34'),
(67, '54.36.148.68', NULL, 27, '2022-08-01 04:04:05', '2022-08-01 04:04:05'),
(68, '54.36.149.87', NULL, 28, '2022-08-01 04:29:22', '2022-08-01 04:29:22'),
(69, '54.36.149.45', NULL, 29, '2022-08-01 04:54:32', '2022-08-01 04:54:32'),
(70, '54.36.149.39', NULL, 30, '2022-08-01 05:21:20', '2022-08-01 05:21:20'),
(71, '54.36.148.127', NULL, 4, '2022-08-01 05:51:15', '2022-08-01 05:51:15'),
(72, '54.36.149.67', NULL, 5, '2022-08-01 06:20:57', '2022-08-01 06:20:57'),
(73, '54.36.148.224', NULL, 31, '2022-08-07 05:14:44', '2022-08-07 05:14:44'),
(103, '173.231.60.197', NULL, 24, '2022-08-16 01:56:40', '2022-08-16 01:56:40'),
(104, '173.231.60.197', NULL, 25, '2022-08-16 01:56:51', '2022-08-16 01:56:51'),
(105, '173.231.60.197', NULL, 26, '2022-08-16 01:57:05', '2022-08-16 01:57:05'),
(106, '173.231.60.197', NULL, 27, '2022-08-16 01:57:27', '2022-08-16 01:57:27'),
(107, '173.231.60.197', NULL, 28, '2022-08-16 03:56:56', '2022-08-16 03:56:56'),
(108, '173.231.60.197', NULL, 29, '2022-08-16 03:57:08', '2022-08-16 03:57:08'),
(109, '173.231.60.197', NULL, 30, '2022-08-16 03:57:20', '2022-08-16 03:57:20'),
(110, '173.231.60.197', NULL, 31, '2022-08-16 03:57:28', '2022-08-16 03:57:28'),
(111, '185.191.171.22', NULL, 26, '2022-08-16 07:05:27', '2022-08-16 07:05:27'),
(112, '185.191.171.39', NULL, 29, '2022-08-16 11:12:15', '2022-08-16 11:12:15'),
(113, '173.231.60.197', NULL, 1, '2022-08-16 11:33:37', '2022-08-16 11:33:37'),
(114, '173.231.60.197', NULL, 2, '2022-08-16 11:33:49', '2022-08-16 11:33:49'),
(115, '173.231.60.197', NULL, 3, '2022-08-16 11:33:55', '2022-08-16 11:33:55'),
(116, '173.231.60.197', NULL, 4, '2022-08-16 11:34:03', '2022-08-16 11:34:03'),
(117, '173.231.60.197', NULL, 5, '2022-08-16 11:34:11', '2022-08-16 11:34:11'),
(118, '173.231.60.197', NULL, 6, '2022-08-16 11:34:17', '2022-08-16 11:34:17'),
(119, '173.231.60.197', NULL, 7, '2022-08-16 11:34:26', '2022-08-16 11:34:26'),
(120, '173.231.60.197', NULL, 9, '2022-08-16 11:34:32', '2022-08-16 11:34:32'),
(121, '185.191.171.8', NULL, 28, '2022-08-16 11:55:37', '2022-08-16 11:55:37'),
(122, '173.231.60.197', NULL, 11, '2022-08-16 13:22:23', '2022-08-16 13:22:23'),
(123, '173.231.60.197', NULL, 12, '2022-08-16 13:22:30', '2022-08-16 13:22:30'),
(124, '173.231.60.197', NULL, 13, '2022-08-16 13:22:37', '2022-08-16 13:22:37'),
(125, '173.231.60.197', NULL, 14, '2022-08-16 13:22:42', '2022-08-16 13:22:42'),
(126, '173.231.60.197', NULL, 20, '2022-08-16 13:22:51', '2022-08-16 13:22:51'),
(127, '199.244.88.221', NULL, 25, '2022-08-16 13:40:45', '2022-08-16 13:40:45'),
(128, '199.244.88.221', NULL, 28, '2022-08-16 13:40:45', '2022-08-16 13:40:45'),
(129, '199.244.88.221', NULL, 29, '2022-08-16 13:40:47', '2022-08-16 13:40:47'),
(130, '199.244.88.221', NULL, 26, '2022-08-16 13:40:47', '2022-08-16 13:40:47'),
(131, '199.244.88.221', NULL, 27, '2022-08-16 13:40:47', '2022-08-16 13:40:47'),
(132, '199.244.88.221', NULL, 31, '2022-08-16 13:40:47', '2022-08-16 13:40:47'),
(133, '199.244.88.221', NULL, 30, '2022-08-16 13:40:48', '2022-08-16 13:40:48'),
(134, '199.244.88.221', NULL, 24, '2022-08-16 13:40:49', '2022-08-16 13:40:49'),
(135, '173.231.60.197', NULL, 15, '2022-08-16 16:04:44', '2022-08-16 16:04:44'),
(136, '173.231.60.197', NULL, 16, '2022-08-16 16:04:52', '2022-08-16 16:04:52'),
(137, '173.231.60.197', NULL, 17, '2022-08-16 16:33:27', '2022-08-16 16:33:27'),
(138, '173.231.60.197', NULL, 18, '2022-08-16 16:33:35', '2022-08-16 16:33:35'),
(139, '173.231.60.197', NULL, 19, '2022-08-16 16:33:41', '2022-08-16 16:33:41'),
(140, '173.231.60.197', NULL, 21, '2022-08-16 16:33:52', '2022-08-16 16:33:52'),
(141, '173.231.60.197', NULL, 22, '2022-08-16 16:33:58', '2022-08-16 16:33:58'),
(142, '173.231.60.197', NULL, 23, '2022-08-16 16:34:04', '2022-08-16 16:34:04'),
(143, '185.191.171.7', NULL, 31, '2022-08-17 05:24:13', '2022-08-17 05:24:13'),
(144, '185.191.171.9', NULL, 24, '2022-08-17 09:54:14', '2022-08-17 09:54:14'),
(145, '185.191.171.40', NULL, 4, '2022-08-17 11:13:55', '2022-08-17 11:13:55'),
(146, '185.191.171.4', NULL, 30, '2022-08-17 16:04:07', '2022-08-17 16:04:07'),
(147, '185.191.171.12', NULL, 11, '2022-08-17 16:54:24', '2022-08-17 16:54:24'),
(148, '185.191.171.10', NULL, 2, '2022-08-17 17:42:07', '2022-08-17 17:42:07'),
(149, '185.191.171.38', NULL, 14, '2022-08-17 20:42:05', '2022-08-17 20:42:05'),
(150, '185.191.171.43', NULL, 6, '2022-08-17 22:49:59', '2022-08-17 22:49:59'),
(151, '185.191.171.24', NULL, 12, '2022-08-18 01:06:23', '2022-08-18 01:06:23'),
(152, '185.191.171.35', NULL, 27, '2022-08-18 05:18:15', '2022-08-18 05:18:15'),
(153, '185.191.171.20', NULL, 25, '2022-08-18 07:45:14', '2022-08-18 07:45:14'),
(154, '185.191.171.41', NULL, 26, '2022-08-18 16:53:46', '2022-08-18 16:53:46'),
(155, '185.191.171.44', NULL, 7, '2022-08-18 18:47:07', '2022-08-18 18:47:07'),
(156, '185.191.171.13', NULL, 29, '2022-08-18 21:19:38', '2022-08-18 21:19:38'),
(157, '185.191.171.33', NULL, 28, '2022-08-18 21:22:16', '2022-08-18 21:22:16'),
(158, '185.191.171.23', NULL, 5, '2022-08-19 02:26:47', '2022-08-19 02:26:47'),
(159, '135.181.40.115', NULL, 31, '2022-08-19 05:35:20', '2022-08-19 05:35:20'),
(160, '135.181.40.115', NULL, 30, '2022-08-19 05:35:21', '2022-08-19 05:35:21'),
(161, '135.181.40.115', NULL, 29, '2022-08-19 05:35:21', '2022-08-19 05:35:21'),
(162, '135.181.40.115', NULL, 28, '2022-08-19 05:35:22', '2022-08-19 05:35:22'),
(163, '135.181.40.115', NULL, 27, '2022-08-19 05:35:22', '2022-08-19 05:35:22'),
(164, '135.181.40.115', NULL, 26, '2022-08-19 05:35:23', '2022-08-19 05:35:23'),
(165, '135.181.40.115', NULL, 25, '2022-08-19 05:35:24', '2022-08-19 05:35:24'),
(166, '135.181.40.115', NULL, 24, '2022-08-19 05:35:24', '2022-08-19 05:35:24'),
(167, '135.181.41.24', NULL, 31, '2022-08-19 05:59:17', '2022-08-19 05:59:17'),
(168, '135.181.41.24', NULL, 30, '2022-08-19 05:59:17', '2022-08-19 05:59:17'),
(169, '135.181.41.24', NULL, 29, '2022-08-19 05:59:18', '2022-08-19 05:59:18'),
(170, '135.181.41.24', NULL, 28, '2022-08-19 05:59:18', '2022-08-19 05:59:18'),
(171, '135.181.41.24', NULL, 27, '2022-08-19 05:59:19', '2022-08-19 05:59:19'),
(172, '135.181.41.24', NULL, 26, '2022-08-19 05:59:20', '2022-08-19 05:59:20'),
(173, '135.181.41.24', NULL, 25, '2022-08-19 05:59:20', '2022-08-19 05:59:20'),
(174, '135.181.41.24', NULL, 24, '2022-08-19 05:59:21', '2022-08-19 05:59:21'),
(175, '95.217.233.220', NULL, 31, '2022-08-19 06:21:10', '2022-08-19 06:21:10'),
(176, '95.217.233.220', NULL, 30, '2022-08-19 06:21:11', '2022-08-19 06:21:11'),
(177, '95.217.233.220', NULL, 29, '2022-08-19 06:21:13', '2022-08-19 06:21:13'),
(178, '95.217.233.220', NULL, 28, '2022-08-19 06:21:14', '2022-08-19 06:21:14'),
(179, '95.217.233.220', NULL, 27, '2022-08-19 06:21:16', '2022-08-19 06:21:16'),
(180, '95.217.233.220', NULL, 26, '2022-08-19 06:21:17', '2022-08-19 06:21:17'),
(181, '95.217.233.220', NULL, 25, '2022-08-19 06:21:19', '2022-08-19 06:21:19'),
(182, '95.217.233.220', NULL, 24, '2022-08-19 06:21:21', '2022-08-19 06:21:21'),
(183, '185.191.171.24', NULL, 13, '2022-08-19 13:31:24', '2022-08-19 13:31:24'),
(184, '185.191.171.40', NULL, 31, '2022-08-19 14:18:00', '2022-08-19 14:18:00'),
(185, '185.191.171.39', NULL, 16, '2022-08-19 19:41:13', '2022-08-19 19:41:13'),
(186, '185.191.171.5', NULL, 4, '2022-08-19 20:20:32', '2022-08-19 20:20:32'),
(187, '185.191.171.21', NULL, 30, '2022-08-20 01:45:01', '2022-08-20 01:45:01'),
(188, '185.191.171.19', NULL, 2, '2022-08-20 02:45:19', '2022-08-20 02:45:19'),
(189, '185.191.171.21', NULL, 11, '2022-08-20 03:05:17', '2022-08-20 03:05:17'),
(190, '185.191.171.2', NULL, 21, '2022-08-20 07:05:59', '2022-08-20 07:05:59'),
(191, '185.191.171.25', NULL, 6, '2022-08-20 07:53:39', '2022-08-20 07:53:39'),
(192, '185.191.171.41', NULL, 3, '2022-08-20 08:33:44', '2022-08-20 08:33:44'),
(193, '185.191.171.20', NULL, 12, '2022-08-20 10:42:56', '2022-08-20 10:42:56'),
(194, '185.191.171.44', NULL, 27, '2022-08-20 14:20:38', '2022-08-20 14:20:38'),
(195, '185.191.171.18', NULL, 9, '2022-08-20 23:00:41', '2022-08-20 23:00:41'),
(196, '185.191.171.10', NULL, 5, '2022-08-21 11:14:41', '2022-08-21 11:14:41'),
(197, '185.191.171.4', NULL, 20, '2022-08-21 19:04:33', '2022-08-21 19:04:33'),
(198, '154.54.249.193', NULL, 29, '2022-08-23 01:23:59', '2022-08-23 01:23:59'),
(199, '154.54.249.193', NULL, 30, '2022-08-23 01:24:30', '2022-08-23 01:24:30'),
(200, '154.54.249.193', NULL, 26, '2022-08-23 01:24:58', '2022-08-23 01:24:58'),
(201, '154.54.249.193', NULL, 24, '2022-08-23 01:25:33', '2022-08-23 01:25:33'),
(202, '154.54.249.193', NULL, 25, '2022-08-23 01:26:06', '2022-08-23 01:26:06'),
(203, '154.54.249.193', NULL, 28, '2022-08-23 01:26:44', '2022-08-23 01:26:44'),
(204, '154.54.249.193', NULL, 31, '2022-08-23 01:27:10', '2022-08-23 01:27:10'),
(205, '154.54.249.193', NULL, 27, '2022-08-23 01:27:41', '2022-08-23 01:27:41'),
(214, '185.191.171.10', NULL, 9, '2022-08-23 08:54:50', '2022-08-23 08:54:50'),
(215, '185.191.171.23', NULL, 22, '2022-08-23 12:31:46', '2022-08-23 12:31:46'),
(216, '185.191.171.21', NULL, 17, '2022-08-23 18:07:49', '2022-08-23 18:07:49'),
(217, '185.191.171.34', NULL, 23, '2022-08-25 17:01:00', '2022-08-25 17:01:00'),
(238, '185.191.171.11', NULL, 22, '2022-08-25 22:03:21', '2022-08-25 22:03:21'),
(239, '64.124.8.58', NULL, 30, '2022-08-27 22:14:48', '2022-08-27 22:14:48'),
(240, '64.124.8.58', NULL, 28, '2022-08-27 22:26:20', '2022-08-27 22:26:20'),
(241, '64.124.8.58', NULL, 31, '2022-08-27 22:33:21', '2022-08-27 22:33:21'),
(242, '64.124.8.58', NULL, 29, '2022-08-27 22:45:24', '2022-08-27 22:45:24'),
(243, '185.191.171.33', NULL, 15, '2022-08-28 03:01:17', '2022-08-28 03:01:17'),
(244, '185.191.171.7', NULL, 18, '2022-08-28 03:31:31', '2022-08-28 03:31:31'),
(245, '64.124.8.36', NULL, 4, '2022-08-28 20:57:14', '2022-08-28 20:57:14'),
(246, '64.124.8.36', NULL, 3, '2022-08-28 21:02:21', '2022-08-28 21:02:21'),
(247, '64.124.8.36', NULL, 2, '2022-08-28 21:08:40', '2022-08-28 21:08:40'),
(248, '64.124.8.36', NULL, 1, '2022-08-28 21:16:10', '2022-08-28 21:16:10'),
(249, '64.124.8.53', NULL, 20, '2022-08-28 22:11:55', '2022-08-28 22:11:55'),
(250, '64.124.8.28', NULL, 5, '2022-08-29 02:38:16', '2022-08-29 02:38:16'),
(251, '64.124.8.21', NULL, 9, '2022-08-29 10:08:48', '2022-08-29 10:08:48'),
(252, '64.124.8.21', NULL, 24, '2022-08-29 10:11:54', '2022-08-29 10:11:54'),
(253, '64.124.8.21', NULL, 7, '2022-08-29 10:22:22', '2022-08-29 10:22:22'),
(254, '95.216.45.152', NULL, 24, '2022-08-29 10:37:12', '2022-08-29 10:37:12'),
(255, '95.216.45.152', NULL, 25, '2022-08-29 10:37:20', '2022-08-29 10:37:20'),
(256, '95.216.45.152', NULL, 26, '2022-08-29 10:37:30', '2022-08-29 10:37:30'),
(257, '95.216.45.152', NULL, 27, '2022-08-29 10:37:37', '2022-08-29 10:37:37'),
(258, '95.216.45.152', NULL, 28, '2022-08-29 10:37:43', '2022-08-29 10:37:43'),
(259, '95.216.45.152', NULL, 29, '2022-08-29 10:37:49', '2022-08-29 10:37:49'),
(260, '95.216.45.152', NULL, 30, '2022-08-29 10:37:55', '2022-08-29 10:37:55'),
(261, '95.216.45.152', NULL, 31, '2022-08-29 10:38:01', '2022-08-29 10:38:01'),
(262, '64.124.8.27', NULL, 6, '2022-08-29 15:02:21', '2022-08-29 15:02:21'),
(263, '95.91.109.15', NULL, 1, '2022-08-29 15:08:42', '2022-08-29 15:08:42'),
(264, '95.91.109.15', NULL, 11, '2022-08-29 15:08:45', '2022-08-29 15:08:45'),
(265, '95.91.109.15', NULL, 12, '2022-08-29 15:08:49', '2022-08-29 15:08:49'),
(266, '95.91.109.15', NULL, 13, '2022-08-29 15:08:52', '2022-08-29 15:08:52'),
(267, '95.91.109.15', NULL, 14, '2022-08-29 15:08:56', '2022-08-29 15:08:56'),
(268, '95.91.109.15', NULL, 15, '2022-08-29 15:08:59', '2022-08-29 15:08:59'),
(269, '95.91.109.15', NULL, 16, '2022-08-29 15:09:03', '2022-08-29 15:09:03'),
(270, '95.91.109.15', NULL, 17, '2022-08-29 15:09:07', '2022-08-29 15:09:07'),
(271, '95.91.109.15', NULL, 18, '2022-08-29 15:09:11', '2022-08-29 15:09:11'),
(272, '95.91.109.15', NULL, 2, '2022-08-29 15:09:18', '2022-08-29 15:09:18'),
(273, '95.91.109.15', NULL, 20, '2022-08-29 15:09:22', '2022-08-29 15:09:22'),
(274, '95.91.109.15', NULL, 21, '2022-08-29 15:09:26', '2022-08-29 15:09:26'),
(275, '95.91.109.15', NULL, 22, '2022-08-29 15:09:29', '2022-08-29 15:09:29'),
(276, '95.91.109.15', NULL, 23, '2022-08-29 15:09:37', '2022-08-29 15:09:37'),
(277, '95.91.109.15', NULL, 3, '2022-08-29 15:09:41', '2022-08-29 15:09:41'),
(278, '95.91.109.15', NULL, 4, '2022-08-29 15:09:44', '2022-08-29 15:09:44'),
(279, '95.91.109.15', NULL, 5, '2022-08-29 15:09:49', '2022-08-29 15:09:49'),
(280, '95.91.109.15', NULL, 6, '2022-08-29 15:09:52', '2022-08-29 15:09:52'),
(281, '95.91.109.15', NULL, 7, '2022-08-29 15:09:56', '2022-08-29 15:09:56'),
(282, '95.91.109.15', NULL, 9, '2022-08-29 15:09:59', '2022-08-29 15:09:59'),
(283, '65.21.232.254', NULL, 19, '2022-08-29 19:03:41', '2022-08-29 19:03:41'),
(284, '154.54.249.193', NULL, 12, '2022-08-31 04:38:39', '2022-08-31 04:38:39'),
(285, '154.54.249.193', NULL, 3, '2022-08-31 04:39:48', '2022-08-31 04:39:48'),
(286, '154.54.249.193', NULL, 5, '2022-08-31 04:40:20', '2022-08-31 04:40:20'),
(287, '154.54.249.193', NULL, 6, '2022-08-31 04:40:55', '2022-08-31 04:40:55'),
(288, '154.54.249.193', NULL, 9, '2022-08-31 04:41:29', '2022-08-31 04:41:29'),
(289, '154.54.249.193', NULL, 7, '2022-08-31 04:42:02', '2022-08-31 04:42:02'),
(290, '154.54.249.193', NULL, 4, '2022-08-31 04:42:35', '2022-08-31 04:42:35'),
(291, '154.54.249.193', NULL, 2, '2022-08-31 04:43:09', '2022-08-31 04:43:09'),
(292, '154.54.249.193', NULL, 11, '2022-08-31 04:43:48', '2022-08-31 04:43:48'),
(293, '154.54.249.193', NULL, 20, '2022-08-31 04:44:23', '2022-08-31 04:44:23'),
(294, '154.54.249.193', NULL, 1, '2022-08-31 04:45:02', '2022-08-31 04:45:02'),
(295, '154.54.249.193', NULL, 18, '2022-08-31 04:45:40', '2022-08-31 04:45:40'),
(296, '154.54.249.193', NULL, 13, '2022-08-31 04:48:08', '2022-08-31 04:48:08'),
(297, '154.54.249.193', NULL, 23, '2022-08-31 04:48:50', '2022-08-31 04:48:50'),
(298, '154.54.249.193', NULL, 14, '2022-08-31 04:50:01', '2022-08-31 04:50:01'),
(299, '154.54.249.193', NULL, 17, '2022-08-31 04:52:27', '2022-08-31 04:52:27'),
(300, '154.54.249.193', NULL, 22, '2022-08-31 04:53:04', '2022-08-31 04:53:04'),
(301, '154.54.249.193', NULL, 15, '2022-08-31 04:54:25', '2022-08-31 04:54:25'),
(302, '154.54.249.193', NULL, 21, '2022-08-31 04:55:32', '2022-08-31 04:55:32'),
(303, '154.54.249.193', NULL, 16, '2022-08-31 04:56:09', '2022-08-31 04:56:09'),
(304, '54.36.148.31', NULL, 24, '2022-08-31 18:30:09', '2022-08-31 18:30:09'),
(305, '54.36.148.163', NULL, 25, '2022-08-31 18:36:57', '2022-08-31 18:36:57'),
(306, '54.36.149.55', NULL, 26, '2022-08-31 18:43:51', '2022-08-31 18:43:51'),
(307, '54.36.148.222', NULL, 27, '2022-08-31 18:51:10', '2022-08-31 18:51:10'),
(308, '54.36.148.217', NULL, 28, '2022-08-31 18:59:02', '2022-08-31 18:59:02'),
(309, '54.36.149.86', NULL, 29, '2022-08-31 19:05:39', '2022-08-31 19:05:39'),
(310, '54.36.148.110', NULL, 30, '2022-08-31 19:12:34', '2022-08-31 19:12:34'),
(311, '54.36.148.66', NULL, 31, '2022-08-31 19:19:46', '2022-08-31 19:19:46'),
(312, '54.36.148.96', NULL, 20, '2022-09-01 01:05:48', '2022-09-01 01:05:48'),
(313, '54.36.148.205', NULL, 1, '2022-09-01 01:54:31', '2022-09-01 01:54:31'),
(314, '54.36.148.184', NULL, 12, '2022-09-01 02:01:00', '2022-09-01 02:01:00'),
(315, '54.36.149.46', NULL, 2, '2022-09-01 02:07:20', '2022-09-01 02:07:20'),
(316, '54.36.149.28', NULL, 3, '2022-09-01 02:13:46', '2022-09-01 02:13:46'),
(317, '54.36.148.5', NULL, 21, '2022-09-01 03:19:24', '2022-09-01 03:19:24'),
(318, '54.36.148.5', NULL, 4, '2022-09-01 03:31:50', '2022-09-01 03:31:50'),
(319, '54.36.148.109', NULL, 5, '2022-09-01 03:38:52', '2022-09-01 03:38:52'),
(320, '54.36.149.81', NULL, 23, '2022-09-01 03:57:33', '2022-09-01 03:57:33'),
(321, '54.36.148.77', NULL, 16, '2022-09-01 04:09:24', '2022-09-01 04:09:24'),
(322, '54.36.149.36', NULL, 13, '2022-09-01 04:21:34', '2022-09-01 04:21:34'),
(323, '185.191.171.25', NULL, 14, '2022-09-01 04:42:24', '2022-09-01 04:42:24'),
(324, '54.36.148.86', NULL, 15, '2022-09-01 05:44:17', '2022-09-01 05:44:17'),
(325, '54.36.148.0', NULL, 18, '2022-09-01 05:57:11', '2022-09-01 05:57:11'),
(326, '54.36.148.234', NULL, 17, '2022-09-01 08:32:36', '2022-09-01 08:32:36'),
(327, '54.36.148.180', NULL, 11, '2022-09-02 00:53:53', '2022-09-02 00:53:53'),
(328, '54.36.149.101', NULL, 14, '2022-09-02 01:04:55', '2022-09-02 01:04:55'),
(329, '54.36.148.215', NULL, 6, '2022-09-02 01:16:06', '2022-09-02 01:16:06'),
(330, '54.36.148.231', NULL, 7, '2022-09-02 01:27:04', '2022-09-02 01:27:04'),
(331, '54.36.148.36', NULL, 9, '2022-09-02 01:38:23', '2022-09-02 01:38:23'),
(332, '54.36.148.15', NULL, 22, '2022-09-02 01:50:42', '2022-09-02 01:50:42'),
(333, '54.36.148.74', NULL, 19, '2022-09-02 06:38:28', '2022-09-02 06:38:28'),
(334, '54.36.148.104', NULL, 24, '2022-09-03 08:18:47', '2022-09-03 08:18:47'),
(335, '185.191.171.10', NULL, 14, '2022-09-03 09:03:08', '2022-09-03 09:03:08'),
(336, '54.36.148.58', NULL, 26, '2022-09-03 09:13:50', '2022-09-03 09:13:50'),
(337, '54.36.148.124', NULL, 27, '2022-09-03 09:34:45', '2022-09-03 09:34:45'),
(338, '54.36.149.47', NULL, 28, '2022-09-03 09:55:39', '2022-09-03 09:55:39'),
(339, '54.36.148.102', NULL, 29, '2022-09-03 10:18:42', '2022-09-03 10:18:42'),
(340, '54.36.149.13', NULL, 25, '2022-09-03 10:42:06', '2022-09-03 10:42:06'),
(341, '54.36.148.130', NULL, 30, '2022-09-03 11:43:15', '2022-09-03 11:43:15'),
(342, '65.108.206.155', NULL, 31, '2022-09-04 17:19:55', '2022-09-04 17:19:55'),
(343, '185.191.171.10', NULL, 20, '2022-09-04 17:33:11', '2022-09-04 17:33:11'),
(373, '64.124.8.23', NULL, 23, '2022-09-08 04:55:47', '2022-09-08 04:55:47'),
(374, '64.124.8.23', NULL, 13, '2022-09-08 05:00:48', '2022-09-08 05:00:48'),
(375, '64.124.8.23', NULL, 17, '2022-09-08 05:05:58', '2022-09-08 05:05:58'),
(376, '185.191.171.7', NULL, 1, '2022-09-09 20:20:31', '2022-09-09 20:20:31'),
(378, '111.7.100.20', NULL, 29, '2022-09-10 08:20:30', '2022-09-10 08:20:30'),
(379, '111.7.100.27', NULL, 26, '2022-09-10 08:20:31', '2022-09-10 08:20:31'),
(380, '111.7.100.23', NULL, 31, '2022-09-10 08:20:32', '2022-09-10 08:20:32'),
(381, '111.7.100.23', NULL, 24, '2022-09-10 08:20:32', '2022-09-10 08:20:32'),
(382, '111.7.100.27', NULL, 30, '2022-09-10 08:20:32', '2022-09-10 08:20:32'),
(383, '36.99.136.143', NULL, 28, '2022-09-10 08:20:34', '2022-09-10 08:20:34'),
(384, '111.7.100.21', NULL, 27, '2022-09-10 08:20:34', '2022-09-10 08:20:34'),
(385, '111.7.100.20', NULL, 24, '2022-09-10 08:20:36', '2022-09-10 08:20:36'),
(386, '111.7.100.23', NULL, 27, '2022-09-10 08:20:38', '2022-09-10 08:20:38'),
(387, '111.7.100.22', NULL, 31, '2022-09-10 08:20:41', '2022-09-10 08:20:41'),
(388, '111.7.100.26', NULL, 30, '2022-09-10 08:20:42', '2022-09-10 08:20:42'),
(389, '111.7.100.23', NULL, 29, '2022-09-10 08:20:43', '2022-09-10 08:20:43'),
(390, '36.99.136.142', NULL, 25, '2022-09-10 08:20:45', '2022-09-10 08:20:45'),
(391, '111.7.100.25', NULL, 26, '2022-09-10 08:20:52', '2022-09-10 08:20:52'),
(392, '185.191.171.15', NULL, 17, '2022-09-10 15:07:37', '2022-09-10 15:07:37'),
(393, '185.191.171.3', NULL, 21, '2022-09-11 19:26:45', '2022-09-11 19:26:45'),
(394, '54.36.149.84', NULL, 31, '2022-09-11 21:17:46', '2022-09-11 21:17:46'),
(395, '185.191.171.42', NULL, 1, '2022-09-11 21:37:37', '2022-09-11 21:37:37'),
(396, '185.195.71.3', NULL, 24, '2022-09-12 07:14:59', '2022-09-12 07:14:59'),
(397, '185.195.71.3', NULL, 25, '2022-09-12 07:15:01', '2022-09-12 07:15:01'),
(398, '185.195.71.3', NULL, 26, '2022-09-12 07:15:03', '2022-09-12 07:15:03'),
(399, '185.195.71.3', NULL, 27, '2022-09-12 07:15:06', '2022-09-12 07:15:06'),
(400, '185.195.71.3', NULL, 28, '2022-09-12 07:15:07', '2022-09-12 07:15:07'),
(401, '185.195.71.3', NULL, 29, '2022-09-12 07:15:07', '2022-09-12 07:15:07'),
(402, '185.195.71.3', NULL, 30, '2022-09-12 07:15:08', '2022-09-12 07:15:08'),
(403, '185.195.71.3', NULL, 31, '2022-09-12 07:15:08', '2022-09-12 07:15:08'),
(404, '185.191.171.39', NULL, 28, '2022-09-12 20:42:01', '2022-09-12 20:42:01'),
(405, '185.191.171.6', NULL, 30, '2022-09-13 02:26:45', '2022-09-13 02:26:45'),
(406, '185.191.171.42', NULL, 3, '2022-09-13 03:03:36', '2022-09-13 03:03:36'),
(407, '185.191.171.41', NULL, 24, '2022-09-13 03:21:02', '2022-09-13 03:21:02'),
(408, '185.191.171.42', NULL, 16, '2022-09-13 03:30:07', '2022-09-13 03:30:07'),
(409, '185.191.171.34', NULL, 1, '2022-09-13 07:06:24', '2022-09-13 07:06:24'),
(410, '185.191.171.1', NULL, 5, '2022-09-13 09:44:17', '2022-09-13 09:44:17'),
(411, '185.191.171.5', NULL, 29, '2022-09-13 11:21:25', '2022-09-13 11:21:25'),
(412, '185.191.171.44', NULL, 23, '2022-09-13 14:38:31', '2022-09-13 14:38:31'),
(413, '185.191.171.22', NULL, 12, '2022-09-13 16:06:31', '2022-09-13 16:06:31'),
(414, '185.191.171.19', NULL, 5, '2022-09-13 19:24:04', '2022-09-13 19:24:04'),
(415, '185.191.171.45', NULL, 15, '2022-09-13 19:31:56', '2022-09-13 19:31:56'),
(416, '185.191.171.33', NULL, 31, '2022-09-13 20:57:15', '2022-09-13 20:57:15'),
(417, '185.191.171.11', NULL, 23, '2022-09-13 21:34:43', '2022-09-13 21:34:43'),
(418, '185.191.171.42', NULL, 30, '2022-09-13 22:05:03', '2022-09-13 22:05:03'),
(419, '185.191.171.35', NULL, 26, '2022-09-13 23:30:00', '2022-09-13 23:30:00'),
(420, '185.191.171.6', NULL, 2, '2022-09-14 02:41:58', '2022-09-14 02:41:58'),
(421, '185.191.171.10', NULL, 27, '2022-09-14 03:05:50', '2022-09-14 03:05:50'),
(422, '185.191.171.39', NULL, 19, '2022-09-14 03:20:31', '2022-09-14 03:20:31'),
(423, '185.191.171.38', NULL, 25, '2022-09-14 03:22:19', '2022-09-14 03:22:19'),
(424, '185.191.171.38', NULL, 28, '2022-09-14 05:03:49', '2022-09-14 05:03:49'),
(425, '185.191.171.21', NULL, 6, '2022-09-14 05:17:57', '2022-09-14 05:17:57'),
(426, '185.191.171.7', NULL, 2, '2022-09-14 07:29:42', '2022-09-14 07:29:42'),
(427, '185.191.171.38', NULL, 31, '2022-09-14 09:07:04', '2022-09-14 09:07:04'),
(428, '185.191.171.40', NULL, 26, '2022-09-14 09:32:51', '2022-09-14 09:32:51'),
(429, '185.191.171.6', NULL, 4, '2022-09-14 10:09:08', '2022-09-14 10:09:08'),
(430, '185.191.171.42', NULL, 24, '2022-09-14 10:41:54', '2022-09-14 10:41:54'),
(431, '185.191.171.3', NULL, 25, '2022-09-14 11:18:05', '2022-09-14 11:18:05'),
(432, '185.191.171.24', NULL, 17, '2022-09-14 13:03:32', '2022-09-14 13:03:32'),
(433, '185.191.171.20', NULL, 11, '2022-09-14 13:57:54', '2022-09-14 13:57:54'),
(434, '185.191.171.36', NULL, 21, '2022-09-14 14:42:38', '2022-09-14 14:42:38'),
(435, '185.191.171.14', NULL, 7, '2022-09-14 16:39:35', '2022-09-14 16:39:35'),
(436, '185.191.171.16', NULL, 12, '2022-09-14 17:20:08', '2022-09-14 17:20:08'),
(437, '185.191.171.19', NULL, 22, '2022-09-14 17:45:27', '2022-09-14 17:45:27'),
(438, '185.191.171.5', NULL, 9, '2022-09-14 18:22:59', '2022-09-14 18:22:59'),
(439, '185.191.171.1', NULL, 13, '2022-09-14 19:10:59', '2022-09-14 19:10:59'),
(440, '185.191.171.36', NULL, 18, '2022-09-14 19:55:12', '2022-09-14 19:55:12'),
(441, '185.191.171.38', NULL, 13, '2022-09-14 21:14:17', '2022-09-14 21:14:17'),
(442, '185.191.171.24', NULL, 16, '2022-09-14 22:48:22', '2022-09-14 22:48:22'),
(443, '185.191.171.16', NULL, 4, '2022-09-15 00:39:07', '2022-09-15 00:39:07'),
(444, '185.191.171.6', NULL, 14, '2022-09-15 06:38:31', '2022-09-15 06:38:31'),
(445, '185.191.171.23', NULL, 7, '2022-09-15 10:50:54', '2022-09-15 10:50:54'),
(446, '185.191.171.42', NULL, 20, '2022-09-15 12:07:50', '2022-09-15 12:07:50'),
(447, '185.191.171.19', NULL, 11, '2022-09-15 13:04:17', '2022-09-15 13:04:17'),
(448, '185.191.171.40', NULL, 6, '2022-09-16 05:12:31', '2022-09-16 05:12:31'),
(449, '185.191.171.1', NULL, 20, '2022-09-21 15:28:39', '2022-09-21 15:28:39'),
(450, '185.220.101.59', NULL, 24, '2022-09-21 23:11:22', '2022-09-21 23:11:22'),
(451, '144.172.118.134', NULL, 25, '2022-09-21 23:11:31', '2022-09-21 23:11:31'),
(452, '144.172.118.134', NULL, 26, '2022-09-21 23:11:39', '2022-09-21 23:11:39'),
(453, '185.220.101.51', NULL, 27, '2022-09-21 23:11:53', '2022-09-21 23:11:53'),
(454, '185.220.101.51', NULL, 28, '2022-09-21 23:11:54', '2022-09-21 23:11:54'),
(455, '185.220.101.51', NULL, 29, '2022-09-21 23:11:56', '2022-09-21 23:11:56'),
(456, '185.220.101.33', NULL, 30, '2022-09-21 23:12:04', '2022-09-21 23:12:04'),
(457, '185.220.101.33', NULL, 31, '2022-09-21 23:12:05', '2022-09-21 23:12:05'),
(486, '157.90.181.206', NULL, 19, '2022-09-24 19:24:59', '2022-09-24 19:24:59'),
(487, '185.191.171.11', NULL, 1, '2022-09-26 16:04:24', '2022-09-26 16:04:24'),
(488, '185.191.171.1', NULL, 3, '2022-09-26 16:46:30', '2022-09-26 16:46:30'),
(489, '185.191.171.1', NULL, 31, '2022-09-26 17:25:15', '2022-09-26 17:25:15'),
(490, '185.191.171.24', NULL, 5, '2022-09-26 18:36:09', '2022-09-26 18:36:09'),
(491, '185.191.171.25', NULL, 29, '2022-09-26 19:43:06', '2022-09-26 19:43:06'),
(492, '185.191.171.42', NULL, 26, '2022-09-26 20:59:40', '2022-09-26 20:59:40'),
(493, '185.191.171.22', NULL, 7, '2022-09-26 21:37:53', '2022-09-26 21:37:53'),
(494, '185.191.171.45', NULL, 23, '2022-09-26 22:10:32', '2022-09-26 22:10:32'),
(495, '185.191.171.11', NULL, 20, '2022-09-26 22:43:44', '2022-09-26 22:43:44'),
(496, '185.191.171.12', NULL, 12, '2022-09-26 23:53:40', '2022-09-26 23:53:40'),
(497, '185.191.171.45', NULL, 5, '2022-09-27 02:07:05', '2022-09-27 02:07:05'),
(498, '185.191.171.13', NULL, 15, '2022-09-27 02:16:01', '2022-09-27 02:16:01'),
(499, '185.191.171.22', NULL, 11, '2022-09-27 02:19:27', '2022-09-27 02:19:27'),
(500, '185.191.171.20', NULL, 17, '2022-09-27 04:08:52', '2022-09-27 04:08:52'),
(501, '185.191.171.25', NULL, 30, '2022-09-27 04:20:43', '2022-09-27 04:20:43'),
(502, '185.191.171.35', NULL, 29, '2022-09-27 04:21:56', '2022-09-27 04:21:56'),
(503, '185.191.171.22', NULL, 23, '2022-09-27 04:23:36', '2022-09-27 04:23:36'),
(504, '185.191.171.45', NULL, 26, '2022-09-27 04:40:17', '2022-09-27 04:40:17'),
(505, '185.191.171.25', NULL, 22, '2022-09-27 04:46:56', '2022-09-27 04:46:56'),
(506, '185.191.171.20', NULL, 2, '2022-09-27 07:32:53', '2022-09-27 07:32:53'),
(507, '185.191.171.8', NULL, 25, '2022-09-27 08:40:11', '2022-09-27 08:40:11'),
(508, '185.191.171.9', NULL, 19, '2022-09-27 08:45:33', '2022-09-27 08:45:33'),
(509, '185.191.171.26', NULL, 28, '2022-09-27 09:45:32', '2022-09-27 09:45:32'),
(510, '185.191.171.37', NULL, 6, '2022-09-27 10:08:12', '2022-09-27 10:08:12'),
(511, '185.191.171.42', NULL, 27, '2022-09-27 11:31:09', '2022-09-27 11:31:09'),
(512, '185.191.171.13', NULL, 11, '2022-09-27 11:43:36', '2022-09-27 11:43:36'),
(513, '185.191.171.9', NULL, 2, '2022-09-27 11:49:07', '2022-09-27 11:49:07'),
(514, '185.191.171.34', NULL, 31, '2022-09-27 13:07:05', '2022-09-27 13:07:05'),
(515, '185.191.171.3', NULL, 24, '2022-09-27 13:40:34', '2022-09-27 13:40:34'),
(516, '185.191.171.2', NULL, 4, '2022-09-27 13:51:33', '2022-09-27 13:51:33'),
(517, '185.191.171.42', NULL, 25, '2022-09-27 14:31:49', '2022-09-27 14:31:49'),
(518, '185.191.171.1', NULL, 21, '2022-09-27 14:35:59', '2022-09-27 14:35:59'),
(519, '185.191.171.15', NULL, 18, '2022-09-27 15:47:52', '2022-09-27 15:47:52'),
(520, '185.191.171.39', NULL, 4, '2022-09-27 16:27:24', '2022-09-27 16:27:24'),
(521, '185.191.171.7', NULL, 21, '2022-09-27 16:59:58', '2022-09-27 16:59:58'),
(522, '185.191.171.13', NULL, 7, '2022-09-27 18:29:24', '2022-09-27 18:29:24'),
(523, '185.191.171.18', NULL, 12, '2022-09-27 19:17:18', '2022-09-27 19:17:18'),
(524, '185.191.171.16', NULL, 28, '2022-09-27 20:15:56', '2022-09-27 20:15:56'),
(525, '185.191.171.41', NULL, 13, '2022-09-27 20:59:30', '2022-09-27 20:59:30'),
(526, '185.191.171.14', NULL, 27, '2022-09-27 21:54:35', '2022-09-27 21:54:35'),
(527, '185.191.171.14', NULL, 13, '2022-09-27 22:43:44', '2022-09-27 22:43:44'),
(528, '185.191.171.36', NULL, 22, '2022-09-27 22:54:54', '2022-09-27 22:54:54'),
(529, '185.191.171.4', NULL, 14, '2022-09-28 00:08:43', '2022-09-28 00:08:43'),
(530, '185.191.171.44', NULL, 16, '2022-09-28 01:27:52', '2022-09-28 01:27:52'),
(531, '185.191.171.35', NULL, 3, '2022-09-28 01:35:58', '2022-09-28 01:35:58'),
(532, '185.191.171.39', NULL, 24, '2022-09-28 02:00:30', '2022-09-28 02:00:30'),
(533, '185.191.171.6', NULL, 9, '2022-09-28 02:21:30', '2022-09-28 02:21:30'),
(534, '185.191.171.39', NULL, 18, '2022-09-28 03:15:32', '2022-09-28 03:15:32'),
(535, '185.191.171.23', NULL, 30, '2022-09-28 04:44:25', '2022-09-28 04:44:25'),
(536, '185.191.171.8', NULL, 1, '2022-09-28 05:08:16', '2022-09-28 05:08:16'),
(537, '185.191.171.44', NULL, 6, '2022-10-03 18:06:54', '2022-10-03 18:06:54'),
(538, '185.191.171.8', NULL, 14, '2022-10-04 03:32:23', '2022-10-04 03:32:23'),
(539, '217.113.194.174', NULL, 12, '2022-10-04 13:18:52', '2022-10-04 13:18:52'),
(540, '217.113.194.65', NULL, 3, '2022-10-04 13:19:22', '2022-10-04 13:19:22'),
(541, '217.113.194.102', NULL, 5, '2022-10-04 13:19:37', '2022-10-04 13:19:37'),
(542, '217.113.194.72', NULL, 6, '2022-10-04 13:19:52', '2022-10-04 13:19:52'),
(543, '217.113.194.44', NULL, 9, '2022-10-04 13:20:08', '2022-10-04 13:20:08'),
(544, '217.113.194.78', NULL, 7, '2022-10-04 13:20:23', '2022-10-04 13:20:23'),
(545, '217.113.194.98', NULL, 4, '2022-10-04 13:20:38', '2022-10-04 13:20:38'),
(546, '217.113.194.224', NULL, 2, '2022-10-04 13:20:53', '2022-10-04 13:20:53'),
(547, '217.113.194.18', NULL, 11, '2022-10-04 13:21:08', '2022-10-04 13:21:08'),
(548, '217.113.194.102', NULL, 20, '2022-10-04 13:21:24', '2022-10-04 13:21:24'),
(549, '217.113.194.186', NULL, 1, '2022-10-04 13:21:39', '2022-10-04 13:21:39'),
(550, '217.113.194.50', NULL, 18, '2022-10-04 13:21:54', '2022-10-04 13:21:54'),
(551, '217.113.194.119', NULL, 29, '2022-10-04 13:22:09', '2022-10-04 13:22:09'),
(552, '217.113.194.67', NULL, 30, '2022-10-04 13:22:25', '2022-10-04 13:22:25'),
(553, '217.113.194.74', NULL, 26, '2022-10-04 13:22:40', '2022-10-04 13:22:40'),
(554, '217.113.194.150', NULL, 13, '2022-10-04 13:22:55', '2022-10-04 13:22:55'),
(555, '217.113.194.106', NULL, 23, '2022-10-04 13:23:10', '2022-10-04 13:23:10'),
(556, '217.113.194.20', NULL, 14, '2022-10-04 13:23:40', '2022-10-04 13:23:40'),
(557, '217.113.194.84', NULL, 24, '2022-10-04 13:23:56', '2022-10-04 13:23:56'),
(558, '217.113.194.195', NULL, 25, '2022-10-04 13:24:11', '2022-10-04 13:24:11'),
(559, '217.113.194.109', NULL, 28, '2022-10-04 13:24:26', '2022-10-04 13:24:26'),
(560, '217.113.194.28', NULL, 17, '2022-10-04 13:24:41', '2022-10-04 13:24:41'),
(561, '217.113.194.136', NULL, 22, '2022-10-04 13:24:56', '2022-10-04 13:24:56'),
(562, '217.113.194.126', NULL, 31, '2022-10-04 13:25:12', '2022-10-04 13:25:12'),
(563, '217.113.194.122', NULL, 15, '2022-10-04 13:25:27', '2022-10-04 13:25:27'),
(564, '217.113.194.58', NULL, 27, '2022-10-04 13:25:42', '2022-10-04 13:25:42'),
(565, '217.113.194.60', NULL, 21, '2022-10-04 13:25:57', '2022-10-04 13:25:57'),
(566, '217.113.194.231', NULL, 16, '2022-10-04 13:26:12', '2022-10-04 13:26:12'),
(567, '185.191.171.26', NULL, 20, '2022-10-05 00:03:26', '2022-10-05 00:03:26'),
(568, '64.124.8.21', NULL, 30, '2022-10-05 05:21:36', '2022-10-05 05:21:36'),
(569, '64.124.8.21', NULL, 28, '2022-10-05 05:44:54', '2022-10-05 05:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `_credentials`
--

CREATE TABLE `_credentials` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_pro_excel`
--

CREATE TABLE `_pro_excel` (
  `id` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `availability` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_product_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_pro_excel`
--

INSERT INTO `_pro_excel` (`id`, `code`, `title`, `description`, `availability`, `condition`, `price`, `link`, `image_link`, `brand`, `google_product_category`, `created_at`, `updated_at`) VALUES
(1, 'WEN-83699750', 'Wendo Fuschia Limited Edition', 'Our most beautiful ‘Wendo’ tote bag is back in this lovely Fucshia color but a limited edition product. When we launched the ‘wendo’ translates to ‘love’ in english, was to create a proud Kenyan/ African brand that celebrates a legacy of Love.', 'In Stock', 'new', '16500 KES', 'https://aste.co.ke/product/wendo-fuschia-limited-edition', 'https://aste.co.ke/public/uploads/products/wendo-fuschia-2-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:11', '2022-10-08 01:54:11'),
(2, 'NZI-35647101', 'Nzinga Dome Bag', 'Introducing our all new NZINGA DOME BAG stylish, functional and cut from Kenya’s purest leather. Fits your everyday use for work and play. The Design is  inspired by Queen Ana Nzinga Mbande ,Queen of the Ambundu Kingdoms of Ndongo (1624–1663) and Matamba (1631–1663).', NULL, 'new', '18500 KES', 'https://aste.co.ke/product/nzinga-dome-bag', 'https://aste.co.ke/public/uploads/products/nzinga-dome-ladies-bag-2-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:11', '2022-10-08 01:54:11'),
(3, 'MAL-42807345', 'Malkia laptop bag', 'Our Malkia laptop bag for our Queens is out now! Fits the 13″, 14″ &  15.6” laptops with enough space for all your personal and  office stuff. Our NEW LADIES MALKIA LAPTOP bag comes in an  amazing midnight sky mix with mocha print  and royal blue grain pure leather.  This is a statement of Africa finesse and luxury all in an art and form. Made in Kenya to the world.', NULL, 'new', '22504 KES', 'https://aste.co.ke/product/malkia-laptop-bag', 'https://aste.co.ke/public/uploads/products/malkia-laptop-handbag-4-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:11', '2022-10-08 01:54:11'),
(4, 'KIF-09064157', 'Kifaru Travel suitcase', 'The Kifaru suitcase travel bag is made from genuine leather and built to last! With loads of space on the inside for your travels. It’s been designed to be air cabin ready, easy to wheel around in airports and stylish enough to turn heads.', 'In Stock', 'new', '32500 KES', 'https://aste.co.ke/product/kifaru-travel-suitcase', 'https://aste.co.ke/public/uploads/products/kifari16K5A9827-copy-600x800 (1).jpg', 'Aste', '6552', '2022-10-08 01:54:11', '2022-10-08 01:54:11'),
(5, 'MAL-14538753', 'Malkia Handbag 2022', 'The Malkia  (Queen) is an elegant handbag for the Neo-African corporate woman! We have made sure that the fusion between our heritage and culture comes out very potently to make this bag modern, practical and to fit in to your corporate lifestyle.', NULL, 'new', '18500 KES', 'https://aste.co.ke/product/malkia-handbag-2022', 'https://aste.co.ke/public/uploads/products/malkia-malbec-wine-by-jokajok-2-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:11', '2022-10-08 01:54:11'),
(6, '‘MA-85567600', '‘MAINEST’ Satchel', 'Introducing our new SATCHEL aka the ‘MAINEST’ Satchel. Made from genuine Kenyan leather. Its great for your laptop bag, cables a book and a couple of shirts. It’s great Gift for Father’s Day.', NULL, 'new', '20500 KES', 'https://aste.co.ke/product/mainest-satchel', 'https://aste.co.ke/public/uploads/products/mainest-satchel-1-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(7, 'TEK-72905306', 'TEKA Ladies Tote Bag', 'Introducing our TEKA LADIES TOTE a pure leather bag made for the classy lady who needs a bag that can fit her laptop 💻 books and work documents.', NULL, 'new', '16500 KES', 'https://aste.co.ke/product/teka-ladies-tote-bag', 'https://aste.co.ke/public/uploads/products/teka-tote-midnight-sky-2-600x800 (1).jpg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(8, 'THA-30039728', 'Thayah Classic Traveler (LE)', 'When it comes iconic travel and an outdoor experience, what matters is simplicity, style and convenience. Meet our Limited Edition Thayah with special vintage leather to give it that classic traveler look.\r\nTHIS ITEM IS ONLY AVALIABLE ON PRE ORDER.', NULL, 'new', '26500 KES', 'https://aste.co.ke/product/thayah-classic-traveler-le', 'https://aste.co.ke/public/uploads/products/thayah-vintage-limited-edition-1-600x800.png', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(9, 'URB-44510292', 'Urban Native Backpack', 'Backpacks should look classy and still be functional. Our urban native backpack is Made from pure Kenyan leather and fits your 15” laptop plus other items.', 'In Stock', 'new', '19500 KES', 'https://aste.co.ke/product/urban-native-backpack', 'https://aste.co.ke/public/uploads/products/urban-native-backpack-3-600x800.jpg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(10, 'URB-16951396', 'Urban Flow Leather HandBag', 'Urban Flow Leather HandBag - Pure Hardened Leather', NULL, 'new', '18500 KES', 'https://aste.co.ke/product/urban-flow-leather-handbag', 'https://aste.co.ke/public/uploads/products/WhatsApp Image 2022-09-10 at 17.47.53(2).jpeg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(11, 'URB-89134145', 'Urban Leather Bag 2022', 'Urban Leather Bag 2022', NULL, 'new', '22500 KES', 'https://aste.co.ke/product/urban-leather-bag-2022', 'https://aste.co.ke/public/uploads/products/WhatsApp Image 2022-09-10 at 17.47.53.jpeg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12'),
(12, 'AST-87424381', 'Aste Urban Wallet', 'Aste Urban Wallet', NULL, 'new', '7500 KES', 'https://aste.co.ke/product/aste-urban-wallet', 'https://aste.co.ke/public/uploads/products/wallet.jpeg', 'Aste', '6552', '2022-10-08 01:54:12', '2022-10-08 01:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `_site_settings`
--

CREATE TABLE `_site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `sitename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpesa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `welcome` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tawkTo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tawkToStatus` tinyint NOT NULL DEFAULT '1',
  `whatsAppStatus` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_site_settings`
--

INSERT INTO `_site_settings` (`id`, `sitename`, `logo`, `logo_footer`, `logo_two`, `favicon`, `email`, `email_one`, `mobile_one`, `mobile_two`, `mpesa`, `paypal`, `tagline`, `url`, `location`, `map`, `address`, `facebook`, `whatsapp`, `telegram`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `risks`, `welcome`, `tawkTo`, `tawkToStatus`, `whatsAppStatus`, `created_at`, `updated_at`) VALUES
(1, 'Decomagna ltd', 'decomagna Logos Trans-14.png', 'decomagna Logos Trans-16.png', 'decomagna Logos Trans-14.png', 'favicon.png', 'info@decomagna.com', 'info@decomagna.com', '+2547796 110511', '+2547796 110511', NULL, NULL, NULL, 'https://www.decomagna.com', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.645113886492!2d36.7433605!3d-1.3798952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f05afa2b62b47%3A0xe62322a0792f128b!2sQuick-Step%20flooring%20Kenya%20-%20Decomagna%20ltd!5e0!3m2!1sen!2ske!4v1686564367873!5m2!1sen!2ske', NULL, 'https://web.facebook.com/decomagnaDev/', '0796 110511\n', '0796 110511\n', 'https://twitter.com/DecomagnaKenya', 'https://www.linkedin.com/company/decomagnakenya/', 'https://www.instagram.com/decomagna_kenya/', NULL, NULL, '<p>\"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets\"</p>', '<p>\"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets\"</p>\r\n', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD PRIMARY KEY (`accountBalID`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  ADD PRIMARY KEY (`b2bTransactionID`);

--
-- Indexes for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  ADD PRIMARY KEY (`b2bID`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slung_unique` (`slung`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashes`
--
ALTER TABLE `cashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dymantic_instagram_basic_profiles_username_unique` (`username`);

--
-- Indexes for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  ADD PRIMARY KEY (`lnmoID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_product`
--
ALTER TABLE `orders_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  ADD PRIMARY KEY (`transactionstatusID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_t_k_requests`
--
ALTER TABLE `s_t_k_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_status`
--
ALTER TABLE `transaction_status`
  ADD PRIMARY KEY (`transactionStatusID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_user_id_index` (`user_id`);

--
-- Indexes for table `_credentials`
--
ALTER TABLE `_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_pro_excel`
--
ALTER TABLE `_pro_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_site_settings`
--
ALTER TABLE `_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accountbalance`
--
ALTER TABLE `accountbalance`
  MODIFY `accountBalID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=686;

--
-- AUTO_INCREMENT for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  MODIFY `b2bTransactionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  MODIFY `b2bID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_storage`
--
ALTER TABLE `cart_storage`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  MODIFY `lnmoID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders_product`
--
ALTER TABLE `orders_product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  MODIFY `transactionstatusID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `s_t_k_requests`
--
ALTER TABLE `s_t_k_requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_status`
--
ALTER TABLE `transaction_status`
  MODIFY `transactionStatusID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;

--
-- AUTO_INCREMENT for table `_credentials`
--
ALTER TABLE `_credentials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_pro_excel`
--
ALTER TABLE `_pro_excel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `_site_settings`
--
ALTER TABLE `_site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
