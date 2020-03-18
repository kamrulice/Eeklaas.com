-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 01:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eeklaas_fresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `thana`, `city`, `district`, `division`, `post_code`, `created_at`, `updated_at`) VALUES
(1, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-20 18:51:10', '2020-01-20 18:51:10'),
(2, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-20 18:53:30', '2020-01-20 18:53:30'),
(3, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 02:07:12', '2020-01-22 02:07:12'),
(4, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 14:43:11', '2020-01-22 14:43:11'),
(5, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 15:43:07', '2020-01-22 15:43:07'),
(6, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 15:48:30', '2020-01-22 15:48:30'),
(7, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 16:01:17', '2020-01-22 16:01:17'),
(8, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 16:06:41', '2020-01-22 16:06:41'),
(9, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 16:56:18', '2020-01-22 16:56:18'),
(10, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 17:37:25', '2020-01-22 17:37:25'),
(11, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 17:45:53', '2020-01-22 17:45:53'),
(12, 'Rainkhola,Mirpur', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 18:01:01', '2020-01-22 18:01:01'),
(13, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 19:49:27', '2020-01-22 19:49:27'),
(14, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 19:54:34', '2020-01-22 19:54:34'),
(15, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 19:58:34', '2020-01-22 19:58:34'),
(16, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 20:12:56', '2020-01-22 20:12:56'),
(17, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-22 20:13:59', '2020-01-22 20:13:59'),
(18, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 00:33:46', '2020-01-23 00:33:46'),
(19, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 00:48:48', '2020-01-23 00:48:48'),
(20, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 00:54:30', '2020-01-23 00:54:30'),
(21, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 01:01:36', '2020-01-23 01:01:36'),
(22, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 01:05:31', '2020-01-23 01:05:31'),
(23, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 01:09:11', '2020-01-23 01:09:11'),
(24, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 01:53:41', '2020-01-23 01:53:41'),
(25, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:03:39', '2020-01-23 02:03:39'),
(26, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:05:15', '2020-01-23 02:05:15'),
(27, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:11:25', '2020-01-23 02:11:25'),
(28, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:11:57', '2020-01-23 02:11:57'),
(29, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:12:16', '2020-01-23 02:12:16'),
(30, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:16:13', '2020-01-23 02:16:13'),
(31, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:20:05', '2020-01-23 02:20:05'),
(32, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 02:28:33', '2020-01-23 02:28:33'),
(33, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 13:55:23', '2020-01-23 13:55:23'),
(34, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 15:18:11', '2020-01-23 15:18:11'),
(35, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 17:38:36', '2020-01-23 17:38:36'),
(36, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 17:59:39', '2020-01-23 17:59:39'),
(37, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 18:02:42', '2020-01-23 18:02:42'),
(38, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 18:15:50', '2020-01-23 18:15:50'),
(39, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-23 20:02:44', '2020-01-23 20:02:44'),
(40, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-24 02:10:04', '2020-01-24 02:10:04'),
(41, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-24 03:54:48', '2020-01-24 03:54:48'),
(42, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-24 13:34:17', '2020-01-24 13:34:17'),
(43, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-25 14:28:34', '2020-01-25 14:28:34'),
(44, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'D', 'd', '1222', '2020-01-25 14:54:09', '2020-01-25 14:54:09'),
(45, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-26 16:01:12', '2020-01-26 16:01:12'),
(46, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-26 16:05:13', '2020-01-26 16:05:13'),
(47, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-27 16:50:38', '2020-01-27 16:50:38'),
(48, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-27 20:08:05', '2020-01-27 20:08:05'),
(49, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 14:28:53', '2020-01-28 14:28:53'),
(50, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 14:31:58', '2020-01-28 14:31:58'),
(51, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 18:16:36', '2020-01-28 18:16:36'),
(52, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 18:18:01', '2020-01-28 18:18:01'),
(53, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 18:39:12', '2020-01-28 18:39:12'),
(54, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 18:57:37', '2020-01-28 18:57:37'),
(55, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-28 19:02:42', '2020-01-28 19:02:42'),
(56, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-30 16:09:40', '2020-01-30 16:09:40'),
(57, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Mirpur', 'Mirpur', '1216', '2020-01-30 20:40:27', '2020-01-30 20:40:27'),
(58, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-31 14:27:37', '2020-01-31 14:27:37'),
(59, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-31 17:10:26', '2020-01-31 17:10:26'),
(60, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-31 17:22:16', '2020-01-31 17:22:16'),
(61, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-31 17:45:25', '2020-01-31 17:45:25'),
(62, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-01-31 18:24:08', '2020-01-31 18:24:08'),
(63, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-02-01 03:00:33', '2020-02-01 03:00:33'),
(64, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-02-01 03:02:20', '2020-02-01 03:02:20'),
(65, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-02-01 15:49:54', '2020-02-01 15:49:54'),
(66, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', '1216', '2020-02-01 15:51:32', '2020-02-01 15:51:32'),
(67, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1111', '2020-02-02 15:30:12', '2020-02-02 15:30:12'),
(68, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-02 15:55:58', '2020-02-02 15:55:58'),
(69, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '12212', '2020-02-02 17:05:46', '2020-02-02 17:05:46'),
(70, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-06 18:52:37', '2020-02-06 18:52:37'),
(71, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1750', '2020-02-10 15:02:51', '2020-02-10 15:02:51'),
(72, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-11 01:30:08', '2020-02-11 01:30:08'),
(73, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-18 04:08:34', '2020-02-18 04:08:34'),
(74, 'Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-25 23:06:41', '2020-02-25 23:06:41'),
(75, 'Dhaka', 'Mirpur', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-02-25 23:25:03', '2020-02-25 23:25:03'),
(76, 'Gazipur', 'Kaliakair', 'Gazipur', 'Gazipur', 'Dhaka', '1750', '2020-02-25 23:34:28', '2020-02-25 23:34:28'),
(77, 'Dhaka', 'Dhaka', 'Dhaka', 'Gazipur', 'Dhaka', '1750', '2020-02-29 23:15:00', '2020-02-29 23:15:00'),
(78, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1215', '2020-02-29 23:25:17', '2020-02-29 23:25:17'),
(79, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1215', '2020-03-04 01:26:31', '2020-03-04 01:26:31'),
(80, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1215', '2020-03-04 01:37:12', '2020-03-04 01:37:12'),
(81, 'House#34, Road#02,Section#02,Mirpur,Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1750', '2020-03-05 04:12:30', '2020-03-05 04:12:30'),
(82, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1215', '2020-03-06 23:11:19', '2020-03-06 23:11:19'),
(83, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1212', '2020-03-07 01:45:51', '2020-03-07 01:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(20) DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `seller_id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Fashion Banner', 'Fashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion BannerFashion Banner', '-2020-02-01-5e35c5fa59537.jpg', '2020-02-02 02:39:54', '2020-02-02 02:39:54'),
(2, 0, 1, 'Fashion Banner 2', 'Fashion Banner 2Fashion Banner 2Fashion Banner 2Fashion Banner 2Fashion Banner 2', '-2020-02-01-5e35ca06e37df.jpg', '2020-02-02 02:57:10', '2020-02-02 02:57:10'),
(6, 0, 2, 'Sports banner new', 'Fashion Banner 2Fashion Banner 2Fashion Banner 2Fashion Banner 2Fashion Banner 2', 'sports-banner-new-2020-02-02-5e3685c502b29.jpg', '2020-02-01 23:22:46', '2020-02-02 02:18:13'),
(7, 0, 2, 'sports banner', 'sports bannersports bannersports bannersports bannersports banner', 'sports-banner-2020-02-02-5e3685a1235af.jpg', '2020-02-02 02:12:50', '2020-02-02 02:17:37'),
(8, 0, 3, 'Electronics banner One', 'Electronics banner One', 'electronics-banner-one-2020-02-02-5e368673505f8.jpg', '2020-02-02 02:19:43', '2020-02-02 02:21:07'),
(9, 0, 3, 'Electronics banner two', 'Electronics banner two', 'electronics-banner-two-2020-02-02-5e368653316ec.jpg', '2020-02-02 02:20:35', '2020-02-02 02:20:35'),
(10, 0, 4, 'Digital Banner One', 'Digital Banner OneDigital Banner OneDigital Banner OneDigital Banner OneDigital Banner OneDigital Banner One', 'digital-banner-one-2020-02-02-5e3686a0e0a38.jpg', '2020-02-02 02:21:52', '2020-02-02 02:21:52'),
(11, 0, 4, 'Digital Banner two', 'Digital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner twoDigital Banner two', 'digital-banner-two-2020-02-02-5e3686cd6ebe0.jpg', '2020-02-02 02:22:37', '2020-02-02 02:22:37'),
(12, 0, 1, 'Fashion', 'good', 'fashion-2020-03-09-5e662dccc2f83.jpg', '2020-03-09 05:51:40', '2020-03-09 05:51:40'),
(13, 9, 1, 'Laptop', 'abc', 'laptop-2020-03-10-5e676e14ebfc1.png', '2020-03-10 04:38:12', '2020-03-10 05:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `bfasts`
--

CREATE TABLE `bfasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sony', 'SonySonySonySonySonySonySonySonySonySonySony', 'sony-2020-01-30-5e32b48aa3a8e.jpg', 'sony', '2020-01-20 17:52:18', '2020-01-30 18:48:42'),
(2, 'Mobile', 'MobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobile', 'mobile-2020-01-20-5e25791ed6417.jpg', 'mobile', '2020-01-20 17:55:42', '2020-01-20 17:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `size`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(57, NULL, 18, '', NULL, '::1', 2, '2020-03-11 02:46:28', '2020-03-11 04:56:01'),
(58, NULL, 43, NULL, NULL, '::1', 1, '2020-03-11 04:59:09', '2020-03-11 04:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'FashionFashionFashionFashionFashionFashionFashionFashionFashionFashionFashionFashion', 'fashion-2020-01-24-5e2b31e3f069f.jpg', NULL, 'fashion', '2020-01-25 02:05:23', '2020-01-25 02:05:23'),
(2, 'Sports', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 'sports-2020-01-24-5e2b3263e83e1.jpg', NULL, 'sports', '2020-01-25 02:07:31', '2020-01-25 02:07:31'),
(3, 'Electronics', 'ElectronicsElectronicsElectronicsElectronicsElectronicsElectronicsElectronicsElectronicsElectronicsElectronics', 'electronics-2020-01-24-5e2b3de83b13b.jpg', NULL, 'electronics', '2020-01-25 02:56:40', '2020-01-25 02:56:40'),
(4, 'Digital', 'DigitalDigitalDigitalDigitalDigitalDigitalDigitalDigitalDigitalDigitalDigital', 'digital-2020-01-25-5e2bcebddb97d.jpg', NULL, 'digital', '2020-01-25 13:14:37', '2020-01-25 13:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'molin.dupl.75@gmail.com', '2020-02-02 01:52:17', '2020-02-02 01:52:17'),
(2, 'dupl.saifulmolin@gmail.com', '2020-02-02 01:52:48', '2020-02-02 01:52:48'),
(20, 'mdkamrulhasan989@gmail.com', '2020-02-02 16:53:51', '2020-02-02 16:53:51'),
(21, 'seip@gmail.com', '2020-03-09 01:56:56', '2020-03-09 01:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `enjoys`
--

CREATE TABLE `enjoys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fsliders`
--

CREATE TABLE `fsliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
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
(3, '2019_07_06_064643_create_sliders_table', 1),
(5, '2019_07_10_055148_create_reservations_table', 1),
(6, '2019_07_14_164444_create_contacts_table', 1),
(7, '2019_07_30_060123_create_abouts_table', 1),
(8, '2019_07_30_120636_create_enjoys_table', 1),
(9, '2019_07_31_050636_create_bfasts_table', 1),
(10, '2019_07_31_064435_create_fsliders_table', 1),
(11, '2019_08_02_172000_create_social_providers_table', 1),
(12, '2019_12_21_053729_create_brands_table', 1),
(13, '2019_12_21_054212_create_products_table', 1),
(14, '2019_12_21_060315_create_admins_table', 1),
(15, '2019_12_21_060536_create_product_images_table', 1),
(18, '2020_01_16_090437_create_addresses_table', 1),
(19, '2020_01_16_091204_create_settings_table', 1),
(21, '2019_07_07_183858_create_categories_table', 2),
(22, '2019_12_24_080228_create_sub_categories_table', 2),
(26, '2020_01_16_111148_create_payments_table', 3),
(27, '2020_01_13_103046_create_orders_table', 4),
(28, '2020_01_13_104532_create_carts_table', 5),
(29, '2020_01_26_104523_create_wishlists_table', 5),
(30, '2020_02_01_050326_create_banners_table', 6),
(31, '2020_02_01_104720_create_emails_table', 6),
(32, '2020_02_18_121311_create_sellers_table', 7),
(33, '2020_02_24_044145_create_suppliers_table', 8),
(34, '2020_02_24_044237_create_shippings_table', 9),
(35, '2020_03_09_062605_create_ratings_table', 10),
(36, '2020_03_09_065114_create_ratings_table', 11),
(37, '2020_03_09_065811_create_ratings_table', 12),
(38, '2020_03_11_095951_create_sizes_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seller_id` int(20) DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT 0,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` int(11) NOT NULL DEFAULT 60,
  `product_quantity` int(11) NOT NULL,
  `custom_discount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `seller_id`, `payment_id`, `address_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `shipping_charge`, `product_quantity`, `custom_discount`, `created_at`, `updated_at`) VALUES
(19, 74, 16, 9, 3, NULL, '::1', 'Shaid Ahmad', '01773138682', 'Dhaka', 'kamrulhasan9465@gmail.com', 'hi', 0, 0, 0, NULL, 60, 5, NULL, '2020-03-04 01:37:34', '2020-03-04 01:37:34');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 1,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Agent|Personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Bkash', 'bkash.jpg', 1, 'bkash', '12345678', 'personal', '2020-01-28 10:23:51', '2020-01-28 10:23:51'),
(2, 'Rocket', 'rocket.jpg', 1, 'rocket', '12345678', 'personal', '2020-01-28 10:24:57', '2020-01-28 10:24:57'),
(3, 'Cash', 'cash.jpg', 1, 'cash', '1234567', 'personal', '2020-01-28 10:24:57', '2020-01-28 10:24:57'),
(4, 'Nogod', 'nogod.jpg', 1, 'nogod', '12345678', 'personal', '2020-01-30 09:54:10', '2020-01-30 09:54:10'),
(5, 'Visa', 'visa.jpg', 1, 'visa', '12345678', 'personal', '2020-01-30 09:55:23', '2020-01-30 09:55:23'),
(6, 'Master', 'master.jpg', 1, 'master', '12345678', 'personal', '2020-01-30 09:55:23', '2020-01-30 09:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` int(20) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `offer_price` int(11) DEFAULT NULL,
  `size` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(5) DEFAULT 0,
  `date_line` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `seller_id`, `category_id`, `sub_category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `size`, `color`, `reject`, `published`, `date_line`, `created_at`, `updated_at`) VALUES
(9, '', 9, 1, 1, 1, 'Saree', 'SareeSareeSareeSareeSareeSareeSareeSareeSareeSareeSaree', 'saree', 203, 150, 1, NULL, 'L', 'Red', NULL, 1, '2020-03-09', '2020-01-28 15:22:58', '2020-03-04 01:50:28'),
(10, '', 9, 1, 2, 1, 'Shirt', 'ShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirtShirt', 'shirt', 296, 150, 1, 10, NULL, NULL, 'Poor quality', 1, '2020-02-12', '2020-03-28 16:40:37', '2020-03-08 00:29:36'),
(12, '', 9, 2, 4, 2, 'Football', 'FootballFootballFootballFootballFootballFootballFootballFootballFootballFootballFootballFootballFootball', 'football', 50, 120, 1, 40, NULL, NULL, NULL, 1, '2020-03-02', '2020-01-29 14:39:48', '2020-03-04 01:50:22'),
(13, '', NULL, 3, 9, 1, 'TV', 'TVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTVTV', 'tv', 89, 150, 1, 60, NULL, NULL, NULL, 1, '2020-03-04', '2020-02-29 14:45:33', '2020-03-08 02:14:12'),
(14, '', NULL, 3, 10, 1, 'AC', 'ACACACACACACACACACACACACACACACACACACACACACACACACACACACACACACvv', 'ac', 294, 200, 1, 10, NULL, NULL, NULL, 1, '0000-00-00', '2020-01-29 14:46:23', '2020-03-04 01:50:16'),
(15, '', NULL, 4, 5, 1, 'Mobile', 'MobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobile', 'mobile', 201, 300, 1, 30, NULL, NULL, NULL, 1, '0000-00-00', '2020-03-29 14:47:15', '2020-02-29 02:21:07'),
(16, '', 9, 4, 6, 1, 'Camera', 'CameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCamera', 'camera', 11, 400, 1, 30, NULL, NULL, NULL, 1, '2020-03-03', '2020-01-29 14:47:57', '2020-03-08 02:15:04'),
(17, '', NULL, 2, 3, 1, 'tennis new', 'tennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis newtennis new', 'tennis-new', 301, 150, 1, 10, NULL, NULL, NULL, 1, '0000-00-00', '2020-02-29 14:47:57', '2020-03-04 01:49:58'),
(18, 'SKU.1999158762', NULL, 1, 2, 2, 'Shirt', 'well product', 'shirt', 1, 500, 1, 33, NULL, NULL, NULL, 1, '0000-00-00', '2020-02-10 15:29:00', '2020-03-08 00:40:20'),
(19, '', NULL, 4, 7, 1, 'HP', 'Well', 'hp', 30, 50000, 0, NULL, 'Red', NULL, NULL, 1, '0000-00-00', '2020-03-01 03:10:59', '2020-03-01 22:51:11'),
(20, '', 13, 3, 7, 1, 'HP', 'Well', 'hp', 40, 50000, 0, NULL, 'L', 'red', NULL, 1, '2020-03-03', '2020-03-01 03:32:33', '2020-03-01 22:51:02'),
(21, '', 12, 1, 0, 1, 'Shirt', 'good', 'shirt', 50, 500, 0, NULL, 'L', 'Blue', NULL, 1, '2020-02-03', '2020-03-01 03:55:06', '2020-03-01 22:51:07'),
(22, '', 9, 3, 7, 1, 'PC', 'good', 'pc', 19, 40000, 0, NULL, 'Red', NULL, NULL, 0, '2020-03-02', '2020-03-04 03:43:07', '2020-03-04 03:43:07'),
(23, '', 9, 3, 7, 1, 'Laptop', 'well', 'laptop', 40, 30000, 0, NULL, 'Red', NULL, NULL, 0, '2020-03-04', '2020-03-04 03:43:30', '2020-03-04 03:43:30'),
(24, '', 9, 4, 7, 1, 'HP', 'well', 'hp', 30, 40000, 0, NULL, 'Blue', NULL, NULL, 0, '2020-03-03', '2020-03-04 04:25:05', '2020-03-04 04:25:05'),
(25, '', 9, 4, 7, 1, 'HP', 'well', 'hp', 27, 40000, 0, NULL, 'Blue', NULL, NULL, 0, '2020-03-02', '2020-03-04 04:25:59', '2020-03-08 01:00:08'),
(41, '', 9, 4, 7, 1, 'HP', 'Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.', 'hp', 20, 30000, 0, NULL, 'L', 'Red', NULL, 0, '2020-03-04', '2020-03-10 01:28:27', '2020-03-10 01:28:27'),
(42, '', NULL, 3, 7, 2, 'HP', 'Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.', 'hp', 1, 121212, 0, NULL, NULL, NULL, NULL, 0, '0000-00-00', '2020-03-10 02:03:11', '2020-03-10 02:03:11'),
(43, '', NULL, 4, 7, 1, 'Phone', 'Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.', 'phone', 1, 50000, 0, NULL, NULL, NULL, NULL, 1, '0000-00-00', '2020-03-10 03:28:39', '2020-03-10 03:29:38'),
(45, '', NULL, 3, 5, 2, 'Samsung', 'Your request URL is repeating \'articles\' twice. Try prepending a slash to your forms action so that it loads from the base directory, or you can also dynamically create that within Laravel.', 'samsung', 1, 25000, 0, NULL, NULL, NULL, NULL, 0, '0000-00-00', '2020-03-10 03:36:36', '2020-03-10 03:36:36'),
(46, 'SKU.1999158765', 9, 3, 5, 1, 'Samsung', 'A Journey is a recommended guide through Laracasts for a given skill. Each section provides new tips and techniques that build upon what you\'ve already learned. That said, feel free to jump around as you see fit.A Journey is a recommended guide through Laracasts for a given skill. Each section provides new tips and techniques that build upon what you\'ve already learned. That said, feel free to jump around as you see fit.A Journey is a recommended guide through Laracasts for a given skill. Each section provides new tips and techniques that build upon what you\'ve already learned. That said, feel free to jump around as you see fit.A Journey is a recommended guide through Laracasts for a given skill. Each section provides new tips and techniques that build upon what you\'ve already learned. That said, feel free to jump around as you see fit.', 'samsung', 23, 30000, 0, NULL, 'M', 'Green', NULL, 0, '2020-03-03', '2020-03-11 01:55:00', '2020-03-11 01:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '15795139900.jpg', '2020-01-20 17:53:10', '2020-01-20 17:53:10'),
(2, 1, '15795139901.jpg', '2020-01-20 17:53:10', '2020-01-20 17:53:10'),
(3, 1, '15795139902.jpg', '2020-01-20 17:53:11', '2020-01-20 17:53:11'),
(4, 1, '15795139913.jpg', '2020-01-20 17:53:11', '2020-01-20 17:53:11'),
(5, 2, '15795174090.jpg', '2020-01-20 18:50:09', '2020-01-20 18:50:09'),
(6, 2, '15795174091.jpg', '2020-01-20 18:50:09', '2020-01-20 18:50:09'),
(7, 2, '15795174092.jpg', '2020-01-20 18:50:09', '2020-01-20 18:50:09'),
(8, 2, '15795174093.jpeg', '2020-01-20 18:50:10', '2020-01-20 18:50:10'),
(9, 3, '15796835270.jpg', '2020-01-22 16:58:47', '2020-01-22 16:58:47'),
(10, 3, '15796835281.jpg', '2020-01-22 16:58:48', '2020-01-22 16:58:48'),
(11, 3, '15796835282.jpg', '2020-01-22 16:58:48', '2020-01-22 16:58:48'),
(12, 3, '15796835283.jpg', '2020-01-22 16:58:49', '2020-01-22 16:58:49'),
(13, 4, '15798645080.jpg', '2020-01-24 19:15:08', '2020-01-24 19:15:08'),
(16, 7, '15798902640.jpg', '2020-01-25 02:24:25', '2020-01-25 02:24:25'),
(17, 8, '15800402390.jpg', '2020-01-26 20:03:59', '2020-01-26 20:03:59'),
(18, 9, '15800403740.jpg', '2020-01-26 20:06:14', '2020-01-26 20:06:14'),
(19, 9, '15801961780.jpg', '2020-01-28 15:22:59', '2020-01-28 15:22:59'),
(20, 9, '15801961791.jpg', '2020-01-28 15:22:59', '2020-01-28 15:22:59'),
(21, 10, '15802008370.jpg', '2020-01-28 16:40:38', '2020-01-28 16:40:38'),
(22, 10, '15802008381.jpg', '2020-01-28 16:40:38', '2020-01-28 16:40:38'),
(23, 11, '15802799460.jpg', '2020-01-29 14:39:06', '2020-01-29 14:39:06'),
(24, 11, '15802799461.jpg', '2020-01-29 14:39:07', '2020-01-29 14:39:07'),
(25, 11, '15802799472.jpg', '2020-01-29 14:39:07', '2020-01-29 14:39:07'),
(26, 12, '15802799880.jpg', '2020-01-29 14:39:48', '2020-01-29 14:39:48'),
(27, 12, '15802799881.jpg', '2020-01-29 14:39:48', '2020-01-29 14:39:48'),
(28, 13, '15802803330.jpg', '2020-01-29 14:45:33', '2020-01-29 14:45:33'),
(29, 13, '15802803331.jpeg', '2020-01-29 14:45:33', '2020-01-29 14:45:33'),
(30, 14, '15802803830.jpg', '2020-01-29 14:46:24', '2020-01-29 14:46:24'),
(31, 14, '15802803841.jpg', '2020-01-29 14:46:24', '2020-01-29 14:46:24'),
(32, 15, '15802804350.jpg', '2020-01-29 14:47:15', '2020-01-29 14:47:15'),
(33, 15, '15802804351.jpg', '2020-01-29 14:47:15', '2020-01-29 14:47:15'),
(34, 16, '15802804770.jpg', '2020-01-29 14:47:57', '2020-01-29 14:47:57'),
(35, 16, '15802804781.jpg', '2020-01-29 14:47:58', '2020-01-29 14:47:58'),
(36, 17, '15802943890.jpg', '2020-01-29 18:39:50', '2020-01-29 18:39:50'),
(37, 17, '15802943901.jpg', '2020-01-29 18:39:50', '2020-01-29 18:39:50'),
(38, 18, '15813269400.webp', '2020-02-10 15:29:01', '2020-02-10 15:29:01'),
(39, 18, '15813269411.jpg', '2020-02-10 15:29:01', '2020-02-10 15:29:01'),
(40, 18, '15813269412.jpg', '2020-02-10 15:29:01', '2020-02-10 15:29:01'),
(41, 18, '15813269413.jpg', '2020-02-10 15:29:01', '2020-02-10 15:29:01'),
(42, 19, '15830538600.jpg', '2020-03-01 03:11:00', '2020-03-01 03:11:00'),
(43, 19, '15830538611.jpg', '2020-03-01 03:11:01', '2020-03-01 03:11:01'),
(44, 19, '15830538612.png', '2020-03-01 03:11:01', '2020-03-01 03:11:01'),
(45, 19, '15830538613.png', '2020-03-01 03:11:01', '2020-03-01 03:11:01'),
(46, 20, '15830551540.jpg', '2020-03-01 03:32:34', '2020-03-01 03:32:34'),
(47, 20, '15830551541.png', '2020-03-01 03:32:34', '2020-03-01 03:32:34'),
(48, 20, '15830551542.jpg', '2020-03-01 03:32:34', '2020-03-01 03:32:34'),
(49, 20, '15830551543.png', '2020-03-01 03:32:34', '2020-03-01 03:32:34'),
(50, 21, '15830565060.jpg', '2020-03-01 03:55:07', '2020-03-01 03:55:07'),
(51, 21, '15830565071.jpg', '2020-03-01 03:55:07', '2020-03-01 03:55:07'),
(52, 21, '15830565072.jpg', '2020-03-01 03:55:07', '2020-03-01 03:55:07'),
(53, 21, '15830565073.jpg', '2020-03-01 03:55:07', '2020-03-01 03:55:07'),
(54, 22, '15833149870.jpg', '2020-03-04 03:43:07', '2020-03-04 03:43:07'),
(55, 22, '15833149871.jpg', '2020-03-04 03:43:07', '2020-03-04 03:43:07'),
(56, 22, '15833149872.png', '2020-03-04 03:43:08', '2020-03-04 03:43:08'),
(57, 22, '15833149883.png', '2020-03-04 03:43:08', '2020-03-04 03:43:08'),
(58, 23, '15833150110.png', '2020-03-04 03:43:31', '2020-03-04 03:43:31'),
(59, 23, '15833150111.png', '2020-03-04 03:43:31', '2020-03-04 03:43:31'),
(60, 23, '15833150112.jpg', '2020-03-04 03:43:31', '2020-03-04 03:43:31'),
(61, 23, '15833150113.jpg', '2020-03-04 03:43:31', '2020-03-04 03:43:31'),
(62, 25, '15833175590.jpg', '2020-03-04 04:26:00', '2020-03-04 04:26:00'),
(63, 25, '15833175601.png', '2020-03-04 04:26:00', '2020-03-04 04:26:00'),
(64, 25, '15833175602.jpg', '2020-03-04 04:26:00', '2020-03-04 04:26:00'),
(65, 25, '15833175603.jpg', '2020-03-04 04:26:00', '2020-03-04 04:26:00'),
(70, 41, '1583825323png', '2020-03-10 01:28:43', '2020-03-10 01:28:43'),
(71, 41, '1583825323png', '2020-03-10 01:28:43', '2020-03-10 01:28:43'),
(72, 41, '1583825324png', '2020-03-10 01:28:44', '2020-03-10 01:28:44'),
(73, 42, '1583828191png', '2020-03-10 02:16:31', '2020-03-10 02:16:31'),
(74, 43, '1583832552jpg', '2020-03-10 03:29:12', '2020-03-10 03:29:12'),
(75, 43, '1583832552jpg', '2020-03-10 03:29:12', '2020-03-10 03:29:12'),
(76, 43, '1583832552jpg', '2020-03-10 03:29:12', '2020-03-10 03:29:12'),
(78, 45, '1583833036jpg', '2020-03-10 03:37:17', '2020-03-10 03:37:17'),
(79, 46, '1583913329jpg', '2020-03-11 01:55:29', '2020-03-11 01:55:29'),
(80, 46, '1583913329jpg', '2020-03-11 01:55:29', '2020-03-11 01:55:29'),
(81, 46, '1583913330jpg', '2020-03-11 01:55:30', '2020-03-11 01:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '4',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `product_id`, `name`, `email`, `rating`, `message`, `created_at`, `updated_at`) VALUES
(1, 9, 'ASb', 'asb@gmail.com', NULL, 'Good', '2020-03-09 00:59:05', '2020-03-09 00:59:05'),
(2, 9, 'Ice', 'ice3rdbatch@gmail.com', NULL, 'A sari, saree or shari is a women\'s garment from the Indian subcontinent[1] that consists of an unstitched drape varying from 4.5 to 8 metres (15 to 26 feet) in length[2] and 600 to 1,200 mil', '2020-03-09 01:15:35', '2020-03-09 01:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '2020-01-25 10:03:41', '2020-01-25 10:03:41'),
(3, 'Supper Admin', '2020-02-11 11:26:47', '2020-02-11 11:26:47'),
(5, 'Manager', '2020-02-11 11:26:47', '2020-02-11 11:26:47'),
(6, 'Content Creator', NULL, NULL),
(7, ' Moderator', NULL, NULL),
(8, 'Advertiser', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProfileImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NidNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NidImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `status`, `phone`, `code`, `active`, `email`, `email_verified_at`, `password`, `ProfileImage`, `NidNumber`, `NidImage`, `address`, `account_name`, `account_number`, `bank_name`, `branch_name`, `checkImage`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Shaid Ahmad', '1', '01773138682', NULL, 1, 'shaid@peyachi.com', NULL, '$2y$10$B4/nf3XFDzP/U9BgOs5eGuvWYk7BE.E/xDhImV/Hb5eclD4zuXDyC', 'uploads/Seller/1582189343land_registry.jpg', '2011989', 'uploads/Seller/1582189343CAD-2.jpg', 'Dhaka', 'ASb', '17890', 'AB Bank', 'Dhaka', 'uploads/Seller/1582189343vendor panel-converted.pdf', NULL, '2020-02-20 03:01:00', '2020-02-20 03:48:54'),
(12, 'kamrul', '1', '01773138682', NULL, 1, 'mdkamrulhasan989@gmail.com', NULL, '$2y$10$8CDQEiIZI7IX.FoZByi9C./hThoHnaEd7DxaOPhJWYfDPhGCVhpAK', 'uploads/Seller/158219335415802799460.jpg', '2011898', 'uploads/Seller/158219335415802799880.jpg', 'Dhaka', 'ASB', '1789', 'AB Bank', 'Dhaka', 'uploads/Seller/1582193354agreement sirajodikhan.pdf', NULL, '2020-03-20 04:07:30', '2020-02-28 23:20:30'),
(13, 'ICE', '1', '01773138682', NULL, 1, 'kamrulhasan9465@gmail.com', NULL, '$2y$10$Y1jXujqOpRwrTiUpSTC7nOREfL5WC1z6hsowWgfpR3BNTg217PG2K', 'uploads/Seller/15830474231c3bb891f9693ddb4020e74b8fae6304.jpg_340x340q80.jpg_.webp', '201159822', 'uploads/Seller/1583047423resize.png', 'Dhaka,Mirpur', 'ASB', '1789', 'AB Bank', 'Dhaka', 'uploads/Seller/1583047423images (1).jpg', NULL, '2020-03-01 00:08:37', '2020-03-01 01:27:51'),
(14, 'seip', '0', '01773138682', NULL, 1, 'seip@gmail.com', NULL, '$2y$10$HiyaOIUtCZGCJY4eZ27rZO3TO5bvV9u6IhyfaMAW64IF7NzkcXYae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 05:06:53', '2020-03-05 05:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `seller_id` int(20) DEFAULT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charge` int(121) DEFAULT 0,
  `discount` int(121) DEFAULT 0,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `status`, `product_id`, `seller_id`, `productName`, `quantity`, `price`, `shipping_charge`, `discount`, `total_price`, `address`, `phone`, `supplier`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 1, 9, NULL, 'Saree', '1', '150', 0, 0, '150', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', '01924508028', '', '2020-02-24 01:29:45', '2020-02-24 01:50:12'),
(2, 1, 9, NULL, 'Saree', '1', '150', 0, 0, '150', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Select Supplier', '', '2020-02-24 01:59:01', '2020-02-24 04:20:09'),
(3, 1, 14, 9, 'AC', '2', '200', 0, 0, '400', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Rahim', '', '2020-03-24 02:56:33', '2020-02-25 23:42:37'),
(4, 0, 9, NULL, 'Saree', '1', '150', 60, 0, '150', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Kairm', '', '2020-02-24 03:08:03', '2020-02-24 03:08:03'),
(5, 0, 9, NULL, 'Saree', '2', '150', 60, 0, '300', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Rahim', '', '2020-02-24 03:09:50', '2020-02-24 03:09:50'),
(6, 0, 12, NULL, 'Football', '1', '120', 60, 20, '120', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Rahim', '', '2020-02-24 03:11:36', '2020-02-24 03:11:36'),
(7, 0, 16, NULL, 'Camera', '2', '400', 60, 0, '810', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Kairm', '', '2020-03-24 04:00:38', '2020-02-24 04:00:38'),
(8, 1, 16, NULL, 'Camera', '10', '400', 60, 10, '4050', 'Dhaka', '01938618203', 'Kairm', NULL, '2020-02-25 23:18:28', '2020-02-27 00:40:19'),
(9, 0, 13, 9, 'TV', '10', '150', 60, NULL, '1560', 'Dhaka,panthapath', '01938618203', 'Sharif', 'Cash', '2020-05-25 23:29:30', '2020-02-25 23:29:30'),
(10, 1, 11, 9, 'Tennis', '1', '150', 60, NULL, '210', 'House#34, Road#02,Section#02,Mirpur,Dhaka', '01924508028', 'Rahim', 'Cash', '2020-02-29 02:33:38', '2020-03-01 22:50:35'),
(11, 0, 14, NULL, 'AC', '4', '200', 60, NULL, '860', 'Kaliakair', '01938618203', 'Rahim', NULL, '2020-02-29 02:41:11', '2020-02-29 02:41:11'),
(12, 0, 14, 9, 'AC', '3', '200', 60, 10, '660', 'Dhaka', '01938618203', 'Rahim', 'Cash', '2020-02-29 23:56:03', '2020-02-29 23:56:03'),
(13, 1, 16, 9, 'Camera', '4', '400', 60, NULL, '1660', 'Dhaka', '01938618203', 'Rahim', 'Cash', '2020-02-29 23:57:37', '2020-02-29 23:58:39'),
(14, 0, 10, 9, 'Shirt', '4', '150', 60, 20, '190', 'Dhaka', '01773138682', 'Kairm', 'Cash', '2020-03-08 00:29:36', '2020-03-08 00:29:36'),
(15, 0, 18, NULL, 'Shirt', '1', '500', 60, 20, '540', 'Dhaka', '01773138682', 'Rahim', 'Cash', '2020-03-08 00:40:20', '2020-03-08 00:40:20'),
(16, 0, 25, 9, 'HP', '3', '40000', 60, 30, '120030', 'Dhaka', '01773138682', 'Rahim', 'Cash', '2020-03-08 01:00:08', '2020-03-08 01:00:08'),
(17, 0, 16, 9, 'Camera', '6', '400', 60, 10, '2450', 'Dhaka', '01773138682', 'Sharif', 'Cash', '2020-03-08 02:06:12', '2020-03-08 02:06:12'),
(18, 0, 13, NULL, 'TV', '2', '150', 60, 20, '340', 'Dhaka', '01773138682', 'Kairm', 'Cash', '2020-04-08 02:14:12', '2020-03-08 02:14:12'),
(19, 0, 16, 9, 'Camera', '5', '400', 60, 10, '2050', 'Dhaka', '01773138682', 'Sharif', 'Cash', '2020-03-08 02:15:04', '2020-03-08 02:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `user_id`, `product_id`, `size`, `color`, `created_at`, `updated_at`) VALUES
(2, 74, 14, 'M', NULL, '2020-03-11 04:22:14', '2020-03-11 04:22:14'),
(3, 74, 14, 'M', NULL, '2020-03-11 04:22:25', '2020-03-11 04:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(8, 'img2', 'img', 'img2-2020-02-02-5e365f4d6314c.jpg', '2020-02-01 23:34:05', '2020-02-01 23:34:05'),
(9, 'img2', 'img', 'img2-2020-02-02-5e365f62b21f6.jpg', '2020-02-01 23:34:26', '2020-02-01 23:34:26'),
(10, 'img2', 'img', 'img2-2020-02-02-5e365f715a444.jpg', '2020-02-01 23:34:41', '2020-02-01 23:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Women', 'WomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomenWomen', NULL, NULL, 'women', '2020-01-25 02:06:44', '2020-01-25 02:06:44'),
(2, 1, 'Men', 'MenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMenMen', NULL, NULL, 'men', '2020-01-25 02:07:04', '2020-01-25 02:07:04'),
(3, 2, 'Tennis', 'TennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennisTennis', NULL, NULL, 'tennis', '2020-01-25 02:07:59', '2020-01-25 02:07:59'),
(4, 2, 'Football', 'FootballFootballFootballFootballFootballFootballFootballFootballFootballFootballFootball', NULL, NULL, 'football', '2020-01-25 02:08:33', '2020-01-25 02:08:33'),
(5, 4, 'Mobile', 'MobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobileMobile', NULL, NULL, 'mobile', '2020-01-25 13:14:53', '2020-01-25 13:14:53'),
(6, 4, 'Camera', 'CameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCameraCamera', NULL, NULL, 'camera', '2020-01-25 13:15:16', '2020-01-25 13:15:16'),
(7, 4, 'Laptop', 'LaptopLaptopLaptopLaptopLaptopLaptopLaptopLaptopLaptopLaptopLaptopLaptop', NULL, NULL, 'laptop', '2020-01-25 13:15:33', '2020-01-25 13:15:33'),
(8, 4, 'Notebook', 'NotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookNotebookv', NULL, NULL, 'notebook', '2020-01-25 13:15:55', '2020-01-25 13:15:55'),
(9, 3, 'Television', 'Television Television Television Television Television Television Television Television Television Television Television', NULL, NULL, 'television', '2020-01-26 20:00:14', '2020-01-26 20:00:14'),
(10, 3, 'Air Conditionar', 'Air ConditionarAir ConditionarAir ConditionarAir Conditionar', NULL, NULL, 'air-conditionar', '2020-01-26 20:00:41', '2020-01-26 20:00:41'),
(11, 3, 'ARM', 'ARMARMARMARMARMARMARMARMARMARMARMARMARMARMvv', NULL, NULL, 'arm', '2020-01-26 20:00:58', '2020-01-26 20:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `isAdmin` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(121) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Division Table ID',
  `district_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'District Table ID',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive|1=Active|2=Ban',
  `bikash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nogod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `isAdmin`, `facebook_id`, `first_name`, `last_name`, `name`, `phone`, `email`, `email_verified_at`, `password`, `street_address`, `division_id`, `district_id`, `status`, `bikash`, `rocket`, `nogod`, `card_number`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(38, 2, '0', NULL, 'Md. Saiful', 'Islam', 'Saif', '01924508028', 'dupl.saifulmolin@gmail.com', NULL, '$2y$10$eQ3WpeCoLTm69ynPBB7WN.cWZJII/wBY5QaenMDLcZ4yMDznXQ1Ne', 'House#34, Road#02,Section#02,Mirpur,Dhaka', NULL, NULL, 1, '123456', '123456', NULL, '12345', '::1', NULL, NULL, 'PUrLfxyz0qPbDUIIihwDhr7vjO6SmgbG4VEjkX7ANUtAMZskTaDG8CL9rQtT', '2020-01-30 21:36:54', '2020-01-31 14:29:12'),
(72, 2, '1', NULL, NULL, NULL, 'ice', '01938618203', 'ice3rdbatch@gmail.com', NULL, '$2y$10$0Oa7sm3Su69dQ2AVT/6NEOtPhrm88gQJ8lNwY9G.PpANlSX6Me3qW', '', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-23 04:27:19', '2020-02-25 23:05:44'),
(74, 2, '0', NULL, NULL, NULL, 'Shaid Ahmad', '01773138682', 'kamrulhasan9465@gmail.com', NULL, '$2y$10$a45tF4wYOa14yshoKr1xH.6VIeiQYxP0NEHgmmjTymrqUNc6lVdL2', '', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-04 01:35:18', '2020-03-04 01:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_category_id_foreign` (`category_id`);

--
-- Indexes for table `bfasts`
--
ALTER TABLE `bfasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emails_email_unique` (`email`);

--
-- Indexes for table `enjoys`
--
ALTER TABLE `enjoys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fsliders`
--
ALTER TABLE `fsliders`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_bikash_unique` (`bikash`),
  ADD UNIQUE KEY `users_rocket_unique` (`rocket`),
  ADD UNIQUE KEY `users_nogod_unique` (`nogod`),
  ADD UNIQUE KEY `users_card_number_unique` (`card_number`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_order_id_foreign` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bfasts`
--
ALTER TABLE `bfasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enjoys`
--
ALTER TABLE `enjoys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fsliders`
--
ALTER TABLE `fsliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
