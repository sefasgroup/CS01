-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2024 pada 09.33
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs_09`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_companies`
--

CREATE TABLE IF NOT EXISTS `db_companies` (
  `id_company` int(10) NOT NULL AUTO_INCREMENT,
  `name_company` varchar(200) NOT NULL,
  `alias_company` varchar(10) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `db_companies`
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
-- Struktur dari tabel `db_company_areas`
--

CREATE TABLE IF NOT EXISTS `db_company_areas` (
  `id_area` int(10) NOT NULL AUTO_INCREMENT,
  `name_area` varchar(100) NOT NULL,
  `id_company` int(10) NOT NULL,
  `area_address` varchar(200) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `db_company_areas`
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
-- Struktur dari tabel `db_periode`
--

CREATE TABLE IF NOT EXISTS `db_periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `name_periode` varchar(25) NOT NULL,
  `start_date_periode` varchar(10) NOT NULL,
  `end_date_periode` varchar(10) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `db_periode`
--

INSERT INTO `db_periode` (`id_periode`, `name_periode`, `start_date_periode`, `end_date_periode`) VALUES
(1, 'Q1', '02-20', '03-23'),
(2, 'Q2', '03-23', '06-05'),
(3, 'Q3', '06-06', '09-05'),
(4, 'Q4', '09-06', '12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_roles`
--

CREATE TABLE IF NOT EXISTS `db_roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(100) NOT NULL,
  `permissions` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `db_roles`
--

INSERT INTO `db_roles` (`id`, `name_role`, `permissions`) VALUES
(1, 'Administrator', '{"admin_login":1,"user_list":1,"user_role":1,"admin_view":1,"survey":1}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_roles_users`
--

CREATE TABLE IF NOT EXISTS `db_roles_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `db_roles_users`
--

INSERT INTO `db_roles_users` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_surveys`
--

CREATE TABLE IF NOT EXISTS `db_surveys` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `period_end_date` date NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_users`
--

CREATE TABLE IF NOT EXISTS `db_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `id_role` int(1) NOT NULL,
  `id_company` char(2) NOT NULL,
  `id_area` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `db_users`
--

INSERT INTO `db_users` (`id`, `email`, `password`, `name_user`, `id_role`, `id_company`, `id_area`, `phone`, `mobile_phone`, `photo`) VALUES
(1, 'it@sefasgroup.com', '86630c8cb0a331f1735f3176dd1e8988', 'Dion', 1, '0', 0, '', '', '1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
