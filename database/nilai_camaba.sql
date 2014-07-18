-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 18, 2014 at 03:37 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nilai_camaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `camaba`
--

CREATE TABLE IF NOT EXISTS `camaba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `camaba`
--

INSERT INTO `camaba` (`id`, `nama`, `gender`, `alamat`, `telp`) VALUES
(1, 'Dhena Pratama', 'P', 'Sumbawa', '09776677888');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `camaba_id` int(11) NOT NULL,
  `soal_id` int(11) NOT NULL,
  `nilai` float DEFAULT NULL,
  `ket` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nilai_camaba_idx` (`camaba_id`),
  KEY `fk_nilai_soal1_idx` (`soal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid_study` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `bid_study`) VALUES
(2, 'Pemrograman Web 3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_camaba` FOREIGN KEY (`camaba_id`) REFERENCES `camaba` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nilai_soal1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
