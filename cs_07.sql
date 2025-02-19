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
-- Database: `cs_07`
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
  `q3` varchar(30) NOT NULL,
  `other_q3` varchar(100) NOT NULL,
  `q4` varchar(30) NOT NULL,
  `other_q4` varchar(100) NOT NULL,
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

INSERT INTO `db_surveys` (`survey_id`, `ns_id`, `survey_date`, `survey_name`, `survey_position`, `survey_company`, `survey_email`, `survey_phone`, `sector`, `other_sector`, `product`, `q1`, `other_q1`, `q2`, `other_q2`, `q3`, `other_q3`, `q4`, `other_q4`, `q41`, `q42`, `q43`, `q44`, `q51`, `q52`, `q53`, `q6`, `survey_note`, `quartal`, `year`, `period_end_date`) VALUES
(3, 'C-SSP-00263', '2023-04-04 09:56:34', 'Hariyadi', 'Purchasing ', 'PT anugerah daya industri komponen utama ', 'purchasing@adiku.co.id , hariyadhi469@gmail.com', '081511456879', 'General Manufacture', '0', 'Tellus, Omala, Gadus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'Per 6bulan', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Menjaga kondisi stock dan kestabilan harga produk', 'Q2', '2023', '2023-04-30'),
(4, 'C-SSP-00070', '2023-04-04 10:05:13', 'SATRIO ADIPUTRO', 'STAF PENGADAAN', 'PT. WIKA BETON TBK-UNIT MOBILE CONCRETE 2', 'satrio.putro287@gmail.com', '087879490061', 'Construction', '0', 'Rimula, Spirax, Tellus, Omala, Gadus', 'Layanan/jasa', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Untuk ditingkatkan lagi pelayanan ke konsumen', 'Q2', '2023', '2023-04-30'),
(5, 'C-SSP-00054', '2023-04-04 10:06:58', 'Hud Wiradikara', 'Dy Mgr Procurement', 'PT AM/NS Indonesia', 'hud.wiradikara@amns.in', '021-8980152', 'Steel', '0', 'Morlina, Gadus, Tonna', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(6, 'C-SSP-00047', '2023-04-04 10:15:06', 'Susilo', 'Staff', 'Pt Bridgestone Tire Indonesia', 'bsin.susilo@bridgestone.com', '081219352367', 'Others', 'Tire Manufacture', 'Tellus, Omala, Gadus, Turbo', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'Bisa di kondisikan', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Terima kasih', 'Q2', '2023', '2023-04-30'),
(7, 'C-SSP-00058', '2023-04-04 10:51:56', 'Jessica', 'Admin', 'PT. EKA KEMASINDO ASRI', 'ekakemasindoasri@gmail.com', '0254404008', 'General Manufacture', '0', 'Rimula, Spirax, Omala, Gadus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(8, 'C-SSP-00108', '2023-04-04 13:21:32', 'Haniffudin Aziz', 'Buyer Karawang ', 'PT.GS BATTERY ', 'haniffudin.aziz@gs.astra.co.id', '085883498839', 'Others', 'STORAGE BATTERY MANUFACTURER', 'Omala, Corena', 'Produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '2x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Baik', 'Sangat Baik', 'Ya', 'Sukses terus untuk PT.SINERGI SEMESTA PRATAMA,semoga kedepannya harga produk bisa cost reduction ya:)', 'Q2', '2023', '2023-04-30'),
(9, 'C-SSP-00009', '2023-04-04 15:34:23', 'Bagus Gilang M', 'Purchasing Senior Staff', 'PT. SARI TAKAGI ELOK PRODUK', 'bagus.gilang@step.co.id', '082297307996', 'Steel', '0', 'Spirax, Tellus, Omala', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(10, 'C-SSP-00091', '2023-04-05 10:09:32', 'ERNI YULIATI', 'Purchasing Staff', 'PT. ASIAN ISUZU CASTING CENTER', 'purchasing@ijtt-id.com', '021-8904590-91', 'Others', 'Otomotive', 'Tellus', 'Lainnya', 'Produk, Kualitas, Layanan, Ketersediaan Produk dan Harga', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Tetap jaga kinerja team SSP baik pelayanan, produk, ketepatan kirim, kualitas, harga, juga hubungan baik antara team SSP dan AICC.\nSemoga semakin sukses selalu SSP. Aamiin.', 'Q2', '2023', '2023-04-30'),
(11, 'C-SSP-00017', '2023-04-05 10:12:35', 'Anindea P Hapsari', 'Purchasing Staff', 'PT. Sumitomo Construction Machinery Indonesia', 'anindea.hapsari@shi-g.com', '085224075005', 'Construction', '0', 'Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Mohon agar invoice tidak ada kesalahan dalam mention account bank name lagi. karena sudah berkali-kali salah.. Lalu, kami berharap adanya project cost down dari pembelian kami. Untuk projectnya, bisa didapatkan dari cost down transportasi, packaging, lot order atau apapun, kami harap bisa didiskusikan untuk kedepannya.', 'Q2', '2023', '2023-04-30'),
(12, 'C-SSP-00030', '2023-04-05 10:56:57', 'Pipit Wahyuni', 'Purchasing', 'PT. Steel Pipe Industry Of Indonesia, Tbk.', 'purchasing.skf@spindo.co.id', '0267 - 440823 ', 'General Manufacture', '0', 'Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '2-3 bulan sekali', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(13, 'C-SSP-00122', '2023-04-05 13:06:40', 'EKO RISWANDI', 'MANAGER', 'PT. CAHAYA AGUNG BUMIRIZKI', 'cahaya.agungbumirizki@gmail.com', '0811-193-439', 'Fleet', '0', 'Rimula', 'Layanan/jasa', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Cukup', 'Baik', 'Baik', 'Baik', 'Ya', 'Untuk promo kita jarang mendapat informasi', 'Q2', '2023', '2023-04-30'),
(14, 'C-SSP-00096', '2023-04-05 15:54:17', 'Agus Nurwahid', 'Maintenance Manager', 'PT. ARBE CHEMINDO', 'agusnurwahid@arbechem.com', '081310496040 / ', 'Others', 'Chemical Manufacture', 'Tellus, Omala, Refrigeration', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'Tentative', 'Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Tingkatkan dalam segala pelayanan untuk pelanggan, dan berikan harga yang kompetitif', 'Q2', '2023', '2023-04-30'),
(15, 'C-SSP-00155', '2023-04-05 16:11:07', 'Akim', 'Asst. Supervisor', 'Pt enkei Indonesia', 'akim@enkei.co.id', '081319660304', 'Others', 'Manufaktur otomotif', 'Gadus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Harga lebih kompetitif', 'Q2', '2023', '2023-04-30'),
(16, 'C-SSP-00270', '2023-04-05 16:25:02', 'Muhammad Adipati Firdauz', 'Maintenance ', 'PT KAO INDONESIA', 'm.firdauz@kao.co.id', '082329411679', 'Others', 'Alat kesehatan', 'Tellus, Omala', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'saat dibutuhkan', 'Baik', 'Baik', 'Baik', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Tidak', 'Secara kulitas dan komunikasi sudah baik. mohon kedepannya lebih baik lagi.', 'Q2', '2023', '2023-04-30'),
(17, 'C-SSP-00090', '2023-04-05 17:02:32', 'ANIN SYAEFUDIN A.', 'QUALITY ASSURANCE', 'PT. FAJAR INTI PLASINDO', 'anin_syaefudin@yahoo.com', '081311473566', 'General Manufacture', '0', 'Rimula, Tellus, Corena', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Tetap Dipertahankan Kualitas Produk & Pengiriman Tepat Waktu', 'Q2', '2023', '2023-04-30'),
(18, 'C-SSP-00071', '2023-04-06 11:02:43', 'SUNARTO', 'DIREKTUR', 'CV.SEIKI TEHNIK MANUFACTURE', 'seikitehnik@yahoo.co.id', '082114019333', 'General Manufacture', '0', 'Tellus, Tonna', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '1X / 2BULAN', 'Baik', 'Baik', 'Baik', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'HARGA JANGAN TERLALU MAHAL', 'Q2', '2023', '2023-04-30'),
(19, 'C-SSP-00087', '2023-04-06 15:23:51', 'Hengki', 'Purchasing / Staff', 'PT.EXCEL METAL', 'Purchasing@excel-wheels.com', '0819-08139111', 'General Manufacture', '0', 'Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Untuk harga mohon agar selalu di pertimbangkan apabila terjadi kenaikan harga.', 'Q2', '2023', '2023-04-30'),
(20, 'C-SSP-00024', '2023-04-06 19:11:57', 'Iis Nur Istiqomah', 'Purchasing', 'PT Ericcon BHG Rekacipta Beton', 'Transbhg@gmail.com', '083815648231', 'Construction', '0', 'Rimula, Spirax', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(21, 'C-SSP-00010', '2023-04-12 09:06:36', 'Yathi ', 'ADM. Gudang ', 'PT Harapan Mandiri Sejahtera ', 'suyathirahayu@gmail.com', '081296866471', 'General Manufacture', '0', 'Rimula, Spirax, Tellus', 'Lainnya', 'Layanan & Produk', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'Dimana kami butuhkan disitu mereka jelaskan', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(22, 'C-SSP-00093', '2023-04-12 09:08:35', 'Agus Sugiarto', 'Manager', 'PT. CROWN Beverage Cans Indonesia', 'Agus-Sugiarto@crowncork.com.sg', '08179873748', 'Others', 'Metal packaging', 'Tellus, Omala, Tonna', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Keep the good Service and fast respond', 'Q2', '2023', '2023-04-30'),
(23, 'C-SSP-00068', '2023-04-12 09:29:20', 'Citra Anugrah Lifany', 'Finance Staff', 'PT FOODINDO DWIVESTAMAS', 'citralifany@gmail.com', '08999478786', 'General Manufacture', '0', 'Heat Transfer', 'Lainnya', 'Semua pilihan', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '2x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(24, 'C-SSP-00233', '2023-04-12 09:44:04', 'Nurohman ', 'Asst. Mgr Maintenance ', 'PT Mitsuba Indonesia Pipe Parts ', 'nurohman@mipp.co.id', '021 89982857', 'General Manufacture', '0', 'Spirax, Morlina, Corena', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Pertahankan yang sudah baik bila perlu ditingkatkan lagi.', 'Q2', '2023', '2023-04-30'),
(25, 'C-SSP-00033', '2023-04-12 09:48:02', 'yuni nur wulandari', 'staff purrchasing', 'PT YANMAR INDONESIA', 'yuni_wulandari@yanmar.com', '081357365427', 'General Manufacture', '0', 'Rimula, Tellus, Morlina', 'Layanan/jasa', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '', 'Cukup', 'Baik', 'Cukup', 'Cukup', 'Baik', 'Baik', 'Baik', 'Tidak', 'fast  respon dalam konfimasi po seklipun sibuk di luar kota', 'Q2', '2023', '2023-04-30'),
(26, 'C-SSP-00193', '2023-04-12 09:53:32', 'Dicky Yoko Exoryanto', 'Staff Warehouse', 'PT. BEPTA TRANS', 'dicky.yoko@bepta.co.id', '082237970224', 'Fleet', '0', 'Rimula', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '2x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Sudah sangat bagus sekali.', 'Q2', '2023', '2023-04-30'),
(27, 'C-SSP-00115', '2023-04-12 09:57:18', 'Fitri', 'Purchase staff', 'PT. INDOBHARAT RAYON ', 'fitriwati.pm@adityabirla.com', '081218512224', 'Others', 'Viscose fibre', 'Omala', 'Lainnya', 'Produk dan jasa', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(28, 'C-SSP-00058', '2023-04-12 10:53:24', 'Jessica', 'Admin', 'PT. EKA KEMASINDO ASRI', 'ekakemasindoasri@gmail.com', '0254404008', 'General Manufacture', '0', 'Rimula, Omala, Gadus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(29, 'C-SSP-00218', '2023-04-12 14:30:48', 'ANGGUN PERMATASARI', 'STAFF PURCHASING', 'PT ELEGANT TEXTILE INDUSTRY', 'PURINQUIRY.PTE@ADITYABIRLA.COM', '082116308540', 'Others', 'TEXTILE', 'Tellus, Morlina, Gadus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '2x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(30, 'C-SSP-00179', '2023-04-12 14:53:30', 'Ofan Subroto', 'Maintenance Manager', 'PT. Kasai Teck See Indonesia', 'ofan@kasai-group.com', '08157758921', 'Others', 'otomotif manufacture', 'Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(31, 'C-SSP-00065', '2023-04-12 15:02:52', 'Ahmad Hudori', 'Purchasing', 'PT Astra Juoku Indonesia', 'ahmad.hudori@astra-juoku.com', '085693113239 (W', 'General Manufacture', '0', 'Tellus', 'Ketersediaan produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Pertahankan yang sudah baik', 'Q2', '2023', '2023-04-30'),
(32, 'C-SSP-00149', '2023-04-12 15:34:55', 'Dwi Lestari', 'Purchasing', 'PT. Starmas Inti Aluminium Inudstry', 'purchasing3@starmas.com', '021 59402222', 'Others', 'Aluminium', 'Rimula, Tellus, Omala', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(33, 'C-SSP-00081', '2023-04-12 15:37:12', 'Hasfhi Adli Putra Herfian', 'Staff Procurement', 'PT. Magdatama Multi Industri', 'hasfhi.magdatama@gmail.com', '081563675316', 'General Manufacture', '0', 'Tellus, Tonna', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'Situasional Sesuai kebutuhan ', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Mohon untuk diberikan diskon terbaiknya, jaga dan tingkatkat kualitas jasa/pelayanan dan produknya yg sudah sangat baik ini.', 'Q2', '2023', '2023-04-30'),
(34, 'C-SSP-00043', '2023-04-12 15:42:33', 'Devy', 'Staff ', 'PT. Japfa Comfeed Indonesia Tangerang', '', '081380630682', 'General Manufacture', '0', 'Gadus', 'Lainnya', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', '2/12', 'Baik', 'Cukup', 'Cukup', 'Baik', 'Baik', 'Cukup', 'Cukup', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(35, 'C-SSP-00238', '2023-04-13 10:55:10', 'Indah', 'Purchasing', 'PT. Daisho Precision', 'purch1.daisho@gmail.com', '081280722925', 'Steel', '0', 'Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(36, 'C-SSP-00023', '2023-04-14 12:37:19', 'Rizki imam', 'staff', 'PT Indosafety Sentosa Industry', 'rizki.imam@indosafety.co.id', '081220440003', 'General Manufacture', '0', 'Spirax, Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30'),
(37, 'C-SSP-00043', '2023-04-14 16:02:01', 'Alfonsus Bayu Dirgantara', 'Procurement', 'PT Japfa Comfeed Indonesia', 'alfonsus.dirgantara@japfa.com', '08118496633', 'Others', 'Feed Manufacturing', 'Tellus, Omala, Gadus', 'Layanan/jasa', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '1x', '0', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Harganya bisa dapat diskon lg', 'Q2', '2023', '2023-04-30'),
(38, 'C-SSP-00045', '2023-04-18 11:20:51', 'Triyatno', 'Staft', 'PT Ekanuri', 'triyatno@ekanuri.com', '082227907541', 'Others', 'Wharehouse', 'Rimula, Tellus', 'Kualitas produk', '0', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', '2x', '0', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Ya', 'Diberikan doorprise bagi yang mengisi kuisioner', 'Q2', '2023', '2023-04-30'),
(39, 'C-SSP-00093', '2023-04-21 19:32:54', 'rizka dwi kania', 'exim spv', 'PT CROWN BEVERAGE CANS INDONESIA ', 'rizka-kania@crowncork.com.sg', '08111146738', 'General Manufacture', '0', 'Omala, Tonna', 'Lainnya', 'kualitas product dan layanan nya', 'Tepat waktu', '0', 'Sesuai dengan yang dipesan', '0', 'Lainnya', 'x', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Ya', '', 'Q2', '2023', '2023-04-30');

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
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
