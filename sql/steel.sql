-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 04:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `id_about` int(10) UNSIGNED NOT NULL,
  `counter` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stat_info` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` text COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vivamus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`id_about`, `counter`, `stat_info`, `video`, `judul`, `deskripsi`, `vivamus`, `created_at`, `updated_at`) VALUES
(1, '', '', 'https://www.youtube.com/embed/lNjbHYSFTTs', 'velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt', 'nomor 0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `award_tbl`
--

CREATE TABLE `award_tbl` (
  `award_id` int(11) NOT NULL,
  `counter` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award_tbl`
--

INSERT INTO `award_tbl` (`award_id`, `counter`, `judul`) VALUES
(1, '20', 'Years Experence'),
(2, '1000', 'Awards Nominees'),
(3, '650', 'Our Projectsssss');

-- --------------------------------------------------------

--
-- Table structure for table `brand_tbl`
--

CREATE TABLE `brand_tbl` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `nama_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand_tbl`
--

INSERT INTO `brand_tbl` (`brand_id`, `nama_brand`, `created_at`, `updated_at`) VALUES
(1, 'Vivamus elementum semper', NULL, NULL),
(2, 'Bibendum sodales, augue', NULL, NULL),
(3, 'Vivamus elementum semper', NULL, NULL),
(4, 'Vivamus elementum semper', NULL, NULL),
(5, 'Bibendum sodales, augue', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_tbl`
--

CREATE TABLE `footer_tbl` (
  `footer_id` int(11) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `waktu` time DEFAULT NULL,
  `waktu2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_tbl`
--

INSERT INTO `footer_tbl` (`footer_id`, `jadwal`, `waktu`, `waktu2`) VALUES
(1, 'Monday-Friday', '17:00:00', '18:30:00'),
(2, 'Saturday', '10:30:00', '14:30:00'),
(3, 'Sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funfacts_tbl`
--

CREATE TABLE `funfacts_tbl` (
  `id_funfacts` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funfact_tbl`
--

CREATE TABLE `funfact_tbl` (
  `funfact_id` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `judul` char(200) NOT NULL,
  `deskripsi` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funfact_tbl`
--

INSERT INTO `funfact_tbl` (`funfact_id`, `nomor`, `judul`, `deskripsi`) VALUES
(1, '01', 'Steel Work', 'Bibendum sodales, augue Vivamus elementum'),
(2, '02', 'New Ideas', 'Bibendum sodales, augue Vivamus elementum'),
(3, '03', 'Innovation', 'Bibendum sodales, augue Vivamus elementum');

-- --------------------------------------------------------

--
-- Table structure for table `letter2_tbl`
--

CREATE TABLE `letter2_tbl` (
  `letter2_id` int(11) NOT NULL,
  `gambar` char(200) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL,
  `style` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `letter2_tbl`
--

INSERT INTO `letter2_tbl` (`letter2_id`, `gambar`, `nama_gambar`, `style`) VALUES
(1, 'ff1.jpg', 'molten Plant', 'img-first-left'),
(3, 'ff2.jpg', 'molten Plant', 'img-second-left');

-- --------------------------------------------------------

--
-- Table structure for table `letter_tbl`
--

CREATE TABLE `letter_tbl` (
  `id_letter` int(10) UNSIGNED NOT NULL,
  `judul_halaman` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `quotes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `letter_tbl`
--

INSERT INTO `letter_tbl` (`id_letter`, `judul_halaman`, `quotes`) VALUES
(1, 'NewsLetter', 'velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod');

-- --------------------------------------------------------

--
-- Table structure for table `members_tbl`
--

CREATE TABLE `members_tbl` (
  `id_member` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members_tbl`
--

INSERT INTO `members_tbl` (`id_member`, `gambar`, `nama`, `deskripsi`, `jabatan`) VALUES
(1, 't1.jpg', 'Joya Mily', 'Lorem ipsum dolor sit amet', 'Manager'),
(2, 't2.jpg', 'Max  Hammer', 'Lorem ipsum dolor sit amet', 'Founder & Ceo'),
(3, 't3.jpg', 'Jonn Jozz', 'Lorem ipsum dolor sit amet', 'Site Manager'),
(4, 't4.jpg', 'Ray Rox', 'Lorem ipsum dolor sit amet', 'Head Manager');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2021_04_08_145628_create_slider_tbl_table', 2),
('2021_04_12_073452_create_about_tbl_table', 3),
('2021_04_12_082459_create_funfacts_tbl_table', 4),
('2021_04_12_082943_create_service_product_tbl_table', 5),
('2021_04_12_083238_create_news_tbl_table', 6),
('2021_04_12_083824_create_members_tbl_table', 7),
('2021_04_12_121231_create_letter_tbl_table', 8),
('2021_04_12_124147_create_sosmed_tbl_table', 9),
('2021_04_12_131510_create_setting_tbl_table', 10),
('2021_04_18_135559_create_brand_tbl_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id_news` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id_news`, `gambar`, `judul`, `deskripsi`, `tags`, `komentar`, `status`, `created_at`) VALUES
(1, 'ab1.jpg', 'Quisque a rhoncus', 'mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid', '5', '5', 'active', '2019-04-12'),
(2, 'ab2.jpg', 'Quisque a rhoncus', 'mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid', '5', '5', '', '2019-04-12'),
(3, 'ab3.jpg', 'Quisque a rhoncus', 'mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid', '5', '5', '', '2019-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_product_tbl`
--

CREATE TABLE `service_product_tbl` (
  `id_service` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_product_tbl`
--

INSERT INTO `service_product_tbl` (`id_service`, `judul`, `deskripsi`) VALUES
(1, 'Commercial Fuel', 'Ut enim ad minima veniam, quis nostrum ullam corporis'),
(2, 'Oil Revolution', 'Ut enim ad minima veniam, quis nostrum ullam corporis'),
(3, 'Shell Chemicals', 'Ut enim ad minima veniam, quis nostrum ullam corporis'),
(4, 'Power & Energy', 'Ut enim ad minima veniam, quis nostrum ullam corporis'),
(5, 'Quality Material', 'Ut enim ad minima veniam, quis nostrum ullam corporis'),
(6, 'Industry Chemicals', 'Ut enim ad minima veniam, quis nostrum ullam corporis');

-- --------------------------------------------------------

--
-- Table structure for table `setting_tbl`
--

CREATE TABLE `setting_tbl` (
  `Set_webid` int(10) UNSIGNED NOT NULL,
  `Set_webicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webdeskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webfacebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webinstagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webtwitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webgoogleplus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Set_webopenhours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_tbl`
--

INSERT INTO `setting_tbl` (`Set_webid`, `Set_webicon`, `Set_webname`, `Set_webdeskripsi`, `Set_webemail`, `Set_webphone`, `Set_webfacebook`, `Set_webinstagram`, `Set_webtwitter`, `Set_webgoogleplus`, `Set_webopenhours`, `created_at`, `updated_at`) VALUES
(1, 'twitter2.png', '', '', 'info@example1.com', '24/7', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `id_slider` int(10) UNSIGNED NOT NULL,
  `Gambar_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`id_slider`, `Gambar_slider`, `Title`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'b1.jpg', 'New Industry Work', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt utadipiscing elit, sed do eiusmod tempor incididunt  Lorem ipsum dolor sit amet sed do', '2021-04-01 12:34:13', '2021-04-12 12:34:13'),
(3, 'b2.jpg', 'Let Work Together', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt utadipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet sed do', '2021-04-01 12:34:13', '2021-04-12 12:34:13'),
(4, 'b3.jpg', 'New Steel Work', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt utadipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet sed do', '2021-04-22 14:43:23', '2021-04-27 14:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed_tbl`
--

CREATE TABLE `sosmed_tbl` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkfollow` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `navbarlink` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sosmed_tbl`
--

INSERT INTO `sosmed_tbl` (`id_contact`, `icon`, `linkfollow`, `navbarlink`) VALUES
(1, 'fesbuk1.ico', 'Facebook', 'Home'),
(2, 'email4.png', 'Gmail', 'About'),
(3, 'twitter2.png', 'Twitter', 'Gallery'),
(4, 'goo5.png', 'Google+', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `award_tbl`
--
ALTER TABLE `award_tbl`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `brand_tbl`
--
ALTER TABLE `brand_tbl`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `footer_tbl`
--
ALTER TABLE `footer_tbl`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `funfacts_tbl`
--
ALTER TABLE `funfacts_tbl`
  ADD PRIMARY KEY (`id_funfacts`);

--
-- Indexes for table `funfact_tbl`
--
ALTER TABLE `funfact_tbl`
  ADD PRIMARY KEY (`funfact_id`);

--
-- Indexes for table `letter2_tbl`
--
ALTER TABLE `letter2_tbl`
  ADD PRIMARY KEY (`letter2_id`);

--
-- Indexes for table `letter_tbl`
--
ALTER TABLE `letter_tbl`
  ADD PRIMARY KEY (`id_letter`);

--
-- Indexes for table `members_tbl`
--
ALTER TABLE `members_tbl`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `service_product_tbl`
--
ALTER TABLE `service_product_tbl`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  ADD PRIMARY KEY (`Set_webid`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `sosmed_tbl`
--
ALTER TABLE `sosmed_tbl`
  ADD PRIMARY KEY (`id_contact`);

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
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `id_about` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `award_tbl`
--
ALTER TABLE `award_tbl`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand_tbl`
--
ALTER TABLE `brand_tbl`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_tbl`
--
ALTER TABLE `footer_tbl`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funfacts_tbl`
--
ALTER TABLE `funfacts_tbl`
  MODIFY `id_funfacts` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funfact_tbl`
--
ALTER TABLE `funfact_tbl`
  MODIFY `funfact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `letter2_tbl`
--
ALTER TABLE `letter2_tbl`
  MODIFY `letter2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `letter_tbl`
--
ALTER TABLE `letter_tbl`
  MODIFY `id_letter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members_tbl`
--
ALTER TABLE `members_tbl`
  MODIFY `id_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id_news` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_product_tbl`
--
ALTER TABLE `service_product_tbl`
  MODIFY `id_service` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  MODIFY `Set_webid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `id_slider` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sosmed_tbl`
--
ALTER TABLE `sosmed_tbl`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
