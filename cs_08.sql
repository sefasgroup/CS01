-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2024 at 08:43 AM
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
-- Database: `cs_08`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_companies`
--

CREATE TABLE `db_companies` (
  `id_company` int(10) NOT NULL,
  `name_company` varchar(200) NOT NULL,
  `alias_company` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_companies`
--

INSERT INTO `db_companies` (`id_company`, `name_company`, `alias_company`) VALUES
(0, 'global', 'global'),
(1, 'PT Sefas Pelindotama', 'SP'),
(4, 'PT Sefas Keliantama', 'SK'),
(5, 'PT Tribina Panutan', 'TP'),
(6, 'PT Blue Coolant Indonesia', 'BCI'),
(9, 'PT Cahaya Samoedera Bersaudara', 'CSB');

-- --------------------------------------------------------

--
-- Table structure for table `db_company_areas`
--

CREATE TABLE `db_company_areas` (
  `id_area` int(10) NOT NULL,
  `name_area` varchar(100) NOT NULL,
  `id_company` int(10) NOT NULL,
  `area_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_company_areas`
--

INSERT INTO `db_company_areas` (`id_area`, `name_area`, `id_company`, `area_address`) VALUES
(0, 'global', 0, 'global'),
(3, 'Jakarta', 4, 'Jl. Cideng Barat No. 87, Jakarta Pusat'),
(4, 'Cilegon', 5, 'Jl. Raya Bojonegara km. 2  No. 7 RT. 002/004, Kedaleman, Kecamatan Cibeber, Kota Cilego, Banten'),
(5, 'Balikpapan', 1, 'Jl. Mulawarman No. 12 RT 03  Batakan Balikpapan 76116, Kalimantan Timur'),
(7, 'Bali & Nusa Tenggara', 4, 'Bali & Nusa Tenggara'),
(12, 'global', 6, 'Jl. Cideng Barat No. 87, Jakarta Pusat'),
(13, 'Banjarmasin', 1, 'Banjarmasin'),
(14, 'PAMA', 1, 'Jl. Cideng Barat No. 87, Jakarta Pusat'),
(16, 'Tangerang', 5, 'Kawasan Sentral Gudang Bitung Blok B-10 Industri Kadu, Jl. Tembusan Industri Kadu Baitussa Adah RT.03/RW.01, Kel. Kadu, Kec. Curug, Tangerang'),
(17, 'Marine', 9, 'Marine');

-- --------------------------------------------------------

--
-- Table structure for table `db_roles`
--

CREATE TABLE `db_roles` (
  `id` int(10) NOT NULL,
  `name_role` varchar(100) NOT NULL,
  `permissions` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_roles`
--

INSERT INTO `db_roles` (`id`, `name_role`, `permissions`) VALUES
(1, 'Administrator', '{\"admin_login\":1,\"user_list\":1,\"user_role\":1,\"admin_view\":1,\"survey\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `db_roles_users`
--

CREATE TABLE `db_roles_users` (
  `id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_roles_users`
--

INSERT INTO `db_roles_users` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_surveys`
--

CREATE TABLE `db_surveys` (
  `survey_id` int(11) NOT NULL,
  `ns_id` varchar(50) NOT NULL,
  `survey_date` datetime NOT NULL,
  `survey_name` varchar(100) NOT NULL,
  `survey_position` varchar(100) NOT NULL,
  `survey_company` varchar(100) NOT NULL,
  `survey_email` varchar(100) NOT NULL,
  `survey_phone` varchar(15) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `other_sector` varchar(100) NOT NULL,
  `product` varchar(200) NOT NULL,
  `q1` varchar(30) NOT NULL,
  `other_q1` varchar(100) NOT NULL,
  `q2` varchar(30) NOT NULL,
  `other_q2` varchar(100) NOT NULL,
  `q31` varchar(30) NOT NULL,
  `q32` varchar(30) NOT NULL,
  `q33` varchar(30) NOT NULL,
  `q41` varchar(30) NOT NULL,
  `q42` varchar(30) NOT NULL,
  `q43` varchar(30) NOT NULL,
  `q44` varchar(30) NOT NULL,
  `q51` varchar(30) NOT NULL,
  `q52` varchar(30) NOT NULL,
  `q53` varchar(30) NOT NULL,
  `q6` varchar(30) NOT NULL,
  `survey_note` text NOT NULL,
  `quartal` varchar(3) NOT NULL,
  `year` varchar(4) NOT NULL,
  `period_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_surveys`
--

INSERT INTO `db_surveys` (`survey_id`, `ns_id`, `survey_date`, `survey_name`, `survey_position`, `survey_company`, `survey_email`, `survey_phone`, `sector`, `other_sector`, `product`, `q1`, `other_q1`, `q2`, `other_q2`, `q31`, `q32`, `q33`, `q41`, `q42`, `q43`, `q44`, `q51`, `q52`, `q53`, `q6`, `survey_note`, `quartal`, `year`, `period_end_date`) VALUES
(1, 'C-BCI-01207', '2023-03-29 11:09:46', 'Gloria', 'Finance Manager', 'PT Angin Ribut', 'gloria@anginribut.com', '0818224324', 'Oil and Gas', '0', 'Reco-Cool HD Premium-N Prediluted 50%, Recochem TMW Gold Degreaser, Shell Grease', 'Lainnya', 'Harga', 'Tepat waktu', '0', 'Cukup', 'Cukup', 'Cukup', 'Tidak Baik', 'Tidak Baik', 'Tidak Baik', 'Tidak Baik', 'Baik', 'Baik', 'Baik', 'Merekomendasikan', 'sudah ok', 'Q1', '2023', '2023-03-31'),
(2, 'C-BCI-01207', '2023-03-29 11:53:41', 'Abcde', 'Manager', 'PT ABCDEFGXWY', 'abcde@fghijk.com', '08123456789', 'Cement', '0', 'Reco-Cool HD Premium-N Prediluted 25%, Recochem TMW Gold Degreaser, Shell rimula', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Merekomendasikan', 'sudah oke', 'Q1', '2023', '2023-03-31'),
(3, 'C-BCI-01230', '2023-06-06 10:29:00', 'Steven Gerrits, S.T., M.T.', 'Ga', 'PT Sany Perkasa', 'sgerrits68@gmail.com', '081119284111', 'Mining', '0', 'Reco-Cool HD Premium-N Prediluted 25%', 'Layanan/jasa', '0', 'Tidak tepat waktu', 'Dulu Pernah Pengiriman Ke Kendari tidak Bisa Masksimal semua di Kirim Langsung segingga di Nilai Ber', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Merekomendasikan', 'Semoga Blue Coolant Indonesia Makin Sukses', 'Q2', '2023', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE `db_users` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `id_role` int(1) NOT NULL,
  `id_company` char(2) NOT NULL,
  `id_area` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `email`, `password`, `name_user`, `id_role`, `id_company`, `id_area`, `phone`, `mobile_phone`, `photo`) VALUES
(1, 'it@sefasgroup.com', '86630c8cb0a331f1735f3176dd1e8988', 'Dion', 1, '0', 0, '', '', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `db_companies`
--
ALTER TABLE `db_companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `db_company_areas`
--
ALTER TABLE `db_company_areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `db_roles`
--
ALTER TABLE `db_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_roles_users`
--
ALTER TABLE `db_roles_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_surveys`
--
ALTER TABLE `db_surveys`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_companies`
--
ALTER TABLE `db_companies`
  MODIFY `id_company` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `db_company_areas`
--
ALTER TABLE `db_company_areas`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `db_roles`
--
ALTER TABLE `db_roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_roles_users`
--
ALTER TABLE `db_roles_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_surveys`
--
ALTER TABLE `db_surveys`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
