-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 14 mrt 2018 om 10:06
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am1c_loginregistration`
--
DROP DATABASE IF EXISTS `am1c_loginregistration`;
CREATE DATABASE IF NOT EXISTS `am1c_loginregistration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1c_loginregistration`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `conditions` enum('on','off') NOT NULL DEFAULT 'off',
  `userrole` enum('superadmin','administrator','subscriber') NOT NULL DEFAULT 'subscriber',
  `password` varchar(60) NOT NULL,
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `email`, `conditions`, `userrole`, `password`, `activated`) VALUES
(1, 'sub@nl', 'on', 'subscriber', '$2y$10$hhYuD38pU.YLR1tBoNqN.eY.mwVTQKrKRQEORpkLwN2hsMCGLzA4a', 'yes'),
(2, 'admin@nl', 'on', 'administrator', '$2y$10$0JzHa4YyuyEA1sZzpc08T.pJYh63rFUTVh/9Az2/aqsEv8Qsk6vv6', 'yes'),
(3, 'super@nl', 'on', 'superadmin', '$2y$10$fAdXOZg0fIACkp2PSrkvMu/aXvYD.kD.QY1hzwvDlZVw4mMgFQspC', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
