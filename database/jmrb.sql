-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmrb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id_acc` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `divisi` enum('Bisnis Komersial','Keuangan','Pemasaran','SDM & Umum','Teknik & Pengendalian Proyek') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id_acc`, `nama`, `username`, `password`, `level`, `divisi`, `created_at`, `updated_at`) VALUES
('A001', 'Ilham Alqudsi', 'ilham123', '12345', 'Admin', 'Bisnis Komersial', '2023-08-08 23:45:30', '2023-08-08 23:45:30'),
('U001', 'Danung Kurniawan', 'danung123', '12345', 'User', 'Pemasaran', '2023-08-08 23:45:30', '2023-08-08 23:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `nama`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Ilham Alqudsi', 'Informasi yang ada sudah bagus', '2023-08-09 01:15:16', '2023-08-09 01:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int(11) NOT NULL,
  `id_acc` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `aktivitas` varchar(40) NOT NULL,
  `evidence` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id`, `id_acc`, `nama`, `level`, `aktivitas`, `evidence`, `created_at`, `updated_at`) VALUES
(1, 'A001', 'Ilham Alqudsi', 'Admin', 'Memeriksa Rest Area Travoy', '1703500352_dark_mode.png', '2023-08-09 00:22:59', '2023-08-09 00:22:59'),
(2, 'U001', 'Danung Kurniawan', 'User', 'Melihat Details Rest Area', '119871712_dark_mode.png', '2023-08-09 01:13:51', '2023-08-09 01:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_restarea`
--

CREATE TABLE `tb_restarea` (
  `id` int(11) NOT NULL,
  `nama_restarea` varchar(80) NOT NULL,
  `km` int(10) NOT NULL,
  `ruas` varchar(80) NOT NULL,
  `tipe` enum('Tipe A','Tipe B','Tipe C') NOT NULL,
  `luas_lahan` decimal(4,1) NOT NULL,
  `status` enum('Beroperasi','Fungsional') NOT NULL,
  `entitas` enum('-','Joint Venture') NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_restarea`
--

INSERT INTO `tb_restarea` (`id`, `nama_restarea`, `km`, `ruas`, `tipe`, `luas_lahan`, `status`, `entitas`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Rest Area TRAVOY 88 A Cipularang', 88, 'Jalan Tol Cipularang (Arah Bandung)', 'Tipe A', 18.6, 'Beroperasi', '-', '-6.60277000588946', '107.426163194651', '2023-08-09 00:40:15', '2023-08-09 00:40:15'),
(2, 'Rest Area TRAVOY 88 B Cipularang', 88, 'Jalan Tol Cipularang (Arah Jakarta)', 'Tipe A', 23.0, 'Beroperasi', '-', '-6.60336150808469', '107.424175679134', '2023-08-09 00:43:15', '2023-08-09 00:43:15'),
(3, 'Rest Area TRAVOY 207 A Palikanci', 207, 'Jalan Tol Palkanci (Arah Jawa Tengah)', 'Tipe A', 6.0, 'Beroperasi', '-', '-6.77529699407301', '108.563105916172', '2023-08-09 00:44:00', '2023-08-09 00:44:00'),
(4, 'Rest Area Banjaratma 260 B Pejagan-Pemalang', 260, 'Jalan Tol Pejagan-Pemalang (Arah Jakarta)', 'Tipe A', 10.6, 'Beroperasi', 'Joint Venture', '-6.90594720362602', '108.983152301553', '2023-08-09 00:44:42', '2023-08-09 00:44:42'),
(5, 'Rest Area TRAVOY 360 B Semarang-Batang', 360, 'Jalan Tol Batang-Semarang (Arah Batang)', 'Tipe A', 6.2, 'Beroperasi', '-', '-6.92054421786843', '109.863536846015', '2023-08-09 00:45:33', '2023-08-09 00:45:33'),
(6, 'Rest Area TRAVOY 379 A Batang-Semarang', 379, 'Jalan Tol Batang-Semarang (Arah Semarang)', 'Tipe A', 7.3, 'Beroperasi', '-', '-6.95774139548869', '110.014704725412', '2023-08-09 00:46:38', '2023-08-09 00:46:38'),
(7, 'Rest Area TRAVOY 389 B Semarang-Batang', 389, 'Jalan Tol Batang-Semarang (Arah Jawa Barat)', 'Tipe A', 6.2, 'Beroperasi', '-', '-6.98461013830399', '110.103965592919', '2023-08-09 00:47:49', '2023-08-09 00:47:49'),
(8, 'Rest Area TRAVOY 391 A Batang-Semarang', 391, 'Jalan Tol Batang-Semarang (Arah Semarang)', 'Tipe B', 0.4, 'Beroperasi', '-', '-6.95445047301349', '110.013926677689', '2023-08-09 00:49:11', '2023-08-09 00:49:11'),
(9, 'Rest Area TRAVOY 519 A Solo-Ngawi', 519, 'Jalan Tol Solo-Ngawi (Arah Ngawi)', 'Tipe A', 3.2, 'Beroperasi', '-', '-7.47979953331182', '110.918845721282', '2023-08-09 00:49:59', '2023-08-09 00:49:59'),
(10, 'Rest Area TRAVOY 519 B Solo-Ngawi', 519, 'Jalan Tol Solo-Ngawi (Arah Solo)', 'Tipe A', 3.2, 'Beroperasi', '-', '-7.48092599243978', '110.920940926452', '2023-08-09 00:50:41', '2023-08-09 00:50:41'),
(11, 'Rest Area TRAVOY 538 A Solo-Ngawi', 538, 'Jalan Tol Solo-Ngawi (Arah Ngawi)', 'Tipe B', 0.5, 'Beroperasi', '-', '-7.39280783752442', '111.052372652407', '2023-08-09 00:51:36', '2023-08-09 00:51:36'),
(12, 'Rest Area TRAVOY 538 B Solo-Ngawi', 538, 'Jalan Tol Solo-Ngawi (Arah Solo)', 'Tipe B', 0.5, 'Beroperasi', '-', '-7.39313319668482', '111.052765390391', '2023-08-09 00:52:21', '2023-08-09 00:52:21'),
(13, 'Rest Area TRAVOY 575 A Solo-Ngawi', 575, 'Jalan Tol Solo-Ngawi (Arah Ngawi)', 'Tipe A', 3.2, 'Beroperasi', '-', '-7.40516617839175', '111.379453131318', '2023-08-09 00:53:42', '2023-08-09 00:53:42'),
(14, 'Rest Area TRAVOY 575 B Solo-Ngawi', 575, 'Jalan Tol Solo-Ngawi (Arah Solo)', 'Tipe A', 3.2, 'Beroperasi', '-', '-7.40967604386931', '111.381468269877', '2023-08-09 00:54:33', '2023-08-09 00:54:33'),
(15, 'Rest Area TRAVOY 597 A Ngawi-Kertosono', 597, 'Jalan Tol Ngawi-Kertosono (Arah Kertosono)', 'Tipe B', 0.8, 'Beroperasi', '-', '-7.54366241946005', '111.507134743172', '2023-08-09 00:55:19', '2023-08-09 00:55:19'),
(16, 'Rest Area TRAVOY 597 B Ngawi-Kertosono', 597, 'Jalan Tol Ngawi-Kertosono (Arah Ngawi)', 'Tipe B', 0.8, 'Beroperasi', '-', '-7.54518336177066', '111.507917948153', '2023-08-09 00:56:07', '2023-08-09 00:56:07'),
(17, 'Rest Area TRAVOY 725 A Surabaya-Mojokerto', 725, 'Jalan Tol Surabaya-Mojokerto (Arah Surabaya)', 'Tipe A', 7.5, 'Beroperasi', '-', '-7.37839373263262', '112.545593976986', '2023-08-09 00:59:41', '2023-08-09 00:59:41'),
(18, 'Rest Area TRAVOY 792 A Gempol-Pasuruan', 792, 'Jalan Tol Gempol-Pasuruan (Arah Pasuruan)', 'Tipe A', 6.0, 'Fungsional', 'Joint Venture', '-7.65302482610982', '112.854196344925', '2023-08-09 01:00:45', '2023-08-09 01:00:45'),
(19, 'Rest Area TRAVOY 792 B Gempol-Pasuruan', 792, 'Jalan Tol Gempol-Pasuruan (Arah Gempol)', 'Tipe A', 6.0, 'Fungsional', 'Joint Venture', '-7.6554385679992', '112.854083692077', '2023-08-09 01:01:56', '2023-08-09 01:01:56'),
(20, 'Rest Area TRAVOY 66 A Pandaan-Malang', 66, 'Jalan Tol Pandaan-Malang (Arah Malang)', 'Tipe A', 4.5, 'Fungsional', 'Joint Venture', '-7.74278374859729', '112.718000659522', '2023-08-09 01:03:00', '2023-08-09 01:03:00'),
(21, 'Rest Area TRAVOY 66 B Pandaan-Malang', 66, 'Jalan Tol Pandaan-Malang (Arah Pandaan)', 'Tipe A', 2.5, 'Fungsional', 'Joint Venture', '-7.74360298929954', '112.71711552912', '2023-08-09 01:04:06', '2023-08-09 01:04:06'),
(22, 'Rest Area TRAVOY 65 A Kualanamu-Tebing Tinggi', 65, 'Jalan Tol Kualanamu-Tebing Tinggi (Arah Tebing Tinggi)', 'Tipe A', 4.0, 'Beroperasi', '-', '3.52570797066794', '99.0572932962243', '2023-08-09 01:07:03', '2023-08-09 01:07:03'),
(23, 'Rest Area TRAVOY 65 B Kualanamu-Tebing Tinggi', 65, 'Jalan Tol Kualanamu-Tebing Tinggi (Arah Kualanamu)', 'Tipe A', 4.0, 'Beroperasi', '-', '3.52453205626461', '99.0566373676697', '2023-08-09 01:07:43', '2023-08-09 01:07:43'),
(24, 'Rest Area TRAVOY 36 A Balikpapan-Samarinda', 36, 'Jalan Tol Balikpapan-Samarinda (Arah Samarinda)', 'Tipe A', 4.0, 'Beroperasi', '-', '-0.967906581385631', '117.002484488059', '2023-08-09 01:08:33', '2023-08-09 01:08:33'),
(25, 'Rest Area TRAVOY 36 B Balikpapan-Samarinda', 36, 'Jalan Tol Balikpapan-Samarinda (Arah Balikpapan)', 'Tipe A', 5.2, 'Beroperasi', '-', '-0.963740453561507', '117.005676880303', '2023-08-09 01:09:14', '2023-08-09 01:09:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_acc` (`id_acc`);

--
-- Indexes for table `tb_restarea`
--
ALTER TABLE `tb_restarea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_restarea`
--
ALTER TABLE `tb_restarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
