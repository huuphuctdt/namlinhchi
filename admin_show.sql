-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2017 at 01:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namlinhchitiendat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_show`
--

CREATE TABLE `admin_show` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_eng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_show`
--

INSERT INTO `admin_show` (`id`, `menu`, `is_show`, `created_at`, `updated_at`, `menu_eng`) VALUES
(1, 'Logo và Menu', 1, '2017-08-28 17:00:00', '2017-08-29 03:50:37', 'header'),
(2, 'Slider', 1, '2017-08-28 17:00:00', '2017-08-29 03:50:37', 'slider'),
(3, 'Giới thiệu', 1, '2017-08-28 17:00:00', '2017-08-29 01:49:54', 'pagearea'),
(5, 'Khuyến mãi', 1, '2017-08-28 17:00:00', '2017-08-29 01:49:08', 'promosection'),
(6, 'Sản phẩm', 1, '2017-08-28 17:00:00', '2017-08-29 01:49:56', 'shoppagewrap'),
(7, 'Tin tức', 1, '2017-08-28 17:00:00', '2017-08-29 01:49:56', 'newswraper'),
(8, 'Bản đồ', 1, '2017-08-28 17:00:00', '2017-08-29 01:49:57', 'ourclients'),
(9, 'Footer', 1, '2017-08-28 17:00:00', '2017-08-29 04:11:15', 'footer-wrapper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_show`
--
ALTER TABLE `admin_show`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_show`
--
ALTER TABLE `admin_show`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
