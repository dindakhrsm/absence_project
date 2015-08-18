-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2015 at 02:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_firstproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `absences`
--

CREATE TABLE IF NOT EXISTS `absences` (
  `no` int(10) unsigned NOT NULL,
  `noreg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `absences`
--

INSERT INTO `absences` (`no`, `noreg`, `nama`, `prodi`, `keterangan`, `tgl`, `created_at`, `updated_at`) VALUES
(1, '3135136204', 'Dinda', 'Sistem Komputer', 'Hadir', '2015-08-16 11:49:11', '2015-08-16 11:49:54', '2015-08-16 11:49:54'),
(2, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '2015-08-17 02:46:34', '2015-08-17 02:46:34', '2015-08-17 02:46:34'),
(3, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '2015-08-17 02:52:58', '2015-08-17 02:52:58', '2015-08-17 02:52:58'),
(4, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '2015-08-17 02:54:05', '2015-08-17 02:54:05', '2015-08-17 02:54:05'),
(5, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '2015-08-17 02:55:47', '2015-08-17 02:55:47', '2015-08-17 02:55:47'),
(6, '3135136203', 'Ghina', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-17 03:00:25', '2015-08-17 03:00:25'),
(7, '3135136188', 'Tri Febriana', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-17 03:34:42', '2015-08-17 03:34:42'),
(8, '3135136192', 'Ummu', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-17 04:22:28', '2015-08-17 04:22:28'),
(9, '3135136203', 'Ghina', 'Sistem Komputer', 'Izin', '0000-00-00 00:00:00', '2015-08-17 04:42:23', '2015-08-17 04:42:23'),
(10, '3135136205', 'Annisa Mutiara', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-17 19:57:32', '2015-08-17 19:57:32'),
(11, '3135136188', 'Tri Febriana', 'Sistem Komputer', 'Izin', '2015-08-17 21:08:15', '2015-08-17 21:09:08', '2015-08-17 21:09:08'),
(12, '3135136212', 'Anantassa', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-17 23:23:06', '2015-08-17 23:23:06'),
(13, '3135136204', 'Dinda', 'Sistem Komputer', 'Hadir', '0000-00-00 00:00:00', '2015-08-18 00:28:48', '2015-08-18 00:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_16_171845_create_absence_table', 1),
('2015_08_16_181445_rename_absence_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absences`
--
ALTER TABLE `absences`
  MODIFY `no` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
