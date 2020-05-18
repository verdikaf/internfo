-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `foto`, `nama`, `alamat`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_profesi`
--

CREATE TABLE `bidang_profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidang_profesi`
--

INSERT INTO `bidang_profesi` (`id`, `nama`, `updated_at`, `created_at`) VALUES
(1, 'Designers', '2020-05-06', '0000-00-00'),
(2, 'Programmers', '2020-05-03', '0000-00-00'),
(3, 'Accountant', '0000-00-00', '0000-00-00'),
(4, 'Broadcasting', '0000-00-00', '0000-00-00'),
(7, 'Pariwisata', '2020-05-03', '2020-05-03'),
(8, 'Kehutanan', '2020-05-06', '2020-05-06'),
(13, 'Hukum Pidana', '2020-05-13', '2020-05-06'),
(16, 'Kimia Industri', '2020-05-13', '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `data_apply`
--

CREATE TABLE `data_apply` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `pelamar` varchar(100) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `pelamar_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_apply`
--

INSERT INTO `data_apply` (`id`, `tanggal`, `status`, `pelamar`, `perusahaan`, `pelamar_id`, `lowongan_id`) VALUES
(1, '2020-05-11', 'terima', 'Pemagang1', 'Unilever', 3, 7),
(2, '2020-05-12', 'terima', 'Dyah Ayu', 'Gameloft Indonesia', 7, 9),
(3, '2020-05-12', 'tolak', 'Galang Veda', 'Gameloft Indonesia', 6, 9),
(4, '2020-05-12', 'terima', 'Galang Veda', 'Gameloft Indonesia', 6, 10),
(5, '2020-05-13', 'menunggu', 'Galang Veda', 'Unilever', 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `bidang_profesi_id` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `job_title`, `deskripsi`, `lokasi`, `perusahaan_id`, `bidang_profesi_id`, `link`) VALUES
(7, 'Accountant', 'Akuntan ini nanti akan mengurus bagian administrasi dari Unilever', 'Malang', 2, 3, ''),
(8, 'FrontEnd Vue.JS', 'Membuat halamn FrontEnd untuk VueJS', 'Malang', 2, 2, ''),
(9, 'Backend Programmer (C++)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate leo at elit tristique tincidunt. Duis elementum lobortis purus eget efficitur. Pellentesque blandit tempus congue. Sed viverra, nunc at consequat fringilla, odio nulla scelerisque magna, eget venenatis turpis sapien a orci.', 'Jogjakarta', 3, 2, 'gameloft.com'),
(10, '3D Designer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate leo at elit tristique tincidunt. Duis elementum lobortis purus eget efficitur. Pellentesque blandit tempus congue. Sed viverra, nunc at consequat fringilla, odio nulla scelerisque magna, eget venenatis turpis sapien a orci.', 'Jogjakarta', 3, 1, 'gameloft.com');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_03_113253_create_persons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `foto`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `email`, `password`) VALUES
(3, 'assets/images/profil/IMG_20181023_153447_490.jpg', 'Pemagang1', 'Malang', '2002-07-31', 'Tlogomas, Malang', '087789894504', 'pemagang1@gmail.com', '123456'),
(6, 'assets/images/profil/IMG_20181023_153447_490.jpg', 'Galang Veda', 'Tulungagung', '2000-07-31', 'Tulungagung, Jawa Timur', '082331726133', 'galangveda@gmail.com', '123456'),
(7, 'assets/images/profil/IMG_20180915_075948_413.jpg', 'Dyah Ayu', 'Kediri', '2000-02-20', 'Kediri', '0812345678', 'dyahayu@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `foto`, `nama`, `alamat`, `deskripsi`, `email`, `password`) VALUES
(1, 'assets/images/perusahaan/trivia.jpg', 'PT. Trivia Jeverly', 'Malang, Jawa Timur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium feugiat turpis, vestibulum rhoncus arcu condimentum at. Pellentesque auctor orci vel est bibendum, eu cursus magna hendrerit. Mauris suscipit dapibus eros, non convallis arcu finibus nec. Donec ex dui, viverra ac risus nec, eleifend volutpat quam.', 'trivia@gmail.com', 'trivia'),
(2, 'assets/images/profil/221921-P15UR2-784.JPG', 'Unilever', 'Surabaya', 'Lorem Ipsum si Doler Amet. Lorem Ipsum si Doler Amet. Lorem Ipsum si Doler Amet.', 'unilever@gmail.com', '123456'),
(3, 'assets/images/profil/gameloft.png', 'Gameloft Indonesia', 'Yogyakarta', 'Gameloft SE is a French video game publisher based in Paris, founded in December 1999 by Ubisoft co-founder Michel Guillemot. The company operates 19 development studios worldwide, and publishes games with a special focus on the mobile games market.', 'gameloft@gmail.com', '123456'),
(4, 'assets/images/profil/newspaper.png', 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `upload_berkas`
--

CREATE TABLE `upload_berkas` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `file_berkas` varchar(45) DEFAULT NULL,
  `data_apply_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upload_berkas`
--

INSERT INTO `upload_berkas` (`id`, `nama`, `file_berkas`, `data_apply_id`) VALUES
(1, 'resume', '/assets/berkas/dirty_diadora.png', 1),
(2, 'portofolio', '/assets/berkas/everytime_flower.png', 1),
(3, 'resume', '/assets/berkas/dirty_diadora.png', 1),
(4, 'portofolio', '/assets/berkas/everytime_flower.png', 1),
(5, 'resume', '/assets/berkas/cv.pdf', 2),
(6, 'portofolio', '/assets/berkas/portofolio_aku.pdf', 2),
(7, 'resume', '/assets/berkas/galscv.pdf', 3),
(8, 'portofolio', '/assets/berkas/galsporto.pdf', 3),
(9, 'resume', '/assets/berkas/galscv.pdf', 4),
(10, 'portofolio', '/assets/berkas/portofolio_aku.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang_profesi`
--
ALTER TABLE `bidang_profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_apply`
--
ALTER TABLE `data_apply`
  ADD PRIMARY KEY (`id`,`pelamar_id`,`lowongan_id`),
  ADD KEY `fk_data_apply_pelamar1_idx` (`pelamar_id`),
  ADD KEY `fk_data_apply_lowongan1_idx` (`lowongan_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lowongan_perusahaan_idx` (`perusahaan_id`),
  ADD KEY `fk_lowongan_bidang_profesi1_idx` (`bidang_profesi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_upload_berkas_data_apply1_idx` (`data_apply_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidang_profesi`
--
ALTER TABLE `bidang_profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_apply`
--
ALTER TABLE `data_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_apply`
--
ALTER TABLE `data_apply`
  ADD CONSTRAINT `fk_data_apply_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_apply_pelamar1` FOREIGN KEY (`pelamar_id`) REFERENCES `pelamar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `fk_lowongan_bidang_profesi1` FOREIGN KEY (`bidang_profesi_id`) REFERENCES `bidang_profesi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lowongan_perusahaan` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD CONSTRAINT `fk_upload_berkas_data_apply1` FOREIGN KEY (`data_apply_id`) REFERENCES `data_apply` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
