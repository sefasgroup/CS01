-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2024 pada 08.15
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs01`
--

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
(1, 'Q1', '01-01', '03-31'),
(2, 'Q2', '04-01', '06-30'),
(3, 'Q3', '07-01', '09-30'),
(4, 'Q4', '10-01', '12-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
