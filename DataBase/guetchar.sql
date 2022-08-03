-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 08:33 PM
-- Server version: 5.7.17
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guetchar`
--

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

CREATE TABLE `demandes` (
  `Owner` varchar(100) NOT NULL DEFAULT 'personne',
  `Type` varchar(100) NOT NULL DEFAULT 'inconue',
  `Date_Ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Link` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demandes`
--

INSERT INTO `demandes` (`Owner`, `Type`, `Date_Ajout`, `Link`) VALUES
('GuetcharAdmin', 'Demande_Etude', '2022-07-30 15:31:13', 'pdf_16889.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-30 15:32:36', 'pdf_46297.pdf'),
('houssam', 'Demande_Etude', '2022-07-31 06:16:05', 'pdf_12113.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 07:56:48', 'pdf_119606.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 08:02:41', 'pdf_114301.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 08:06:21', 'pdf_88240.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 08:07:58', 'pdf_71444.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 08:23:10', 'pdf_108731.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 08:27:56', 'pdf_102822.pdf'),
('houssam_sugar@hotmail.com', 'Demande_Etude', '2022-07-31 10:03:34', 'pdf_46052.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Age` int(100) NOT NULL DEFAULT '18',
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(1000) NOT NULL,
  `Role` varchar(50) NOT NULL DEFAULT 'etudiant',
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL DEFAULT 'homme',
  `Profession` varchar(100) NOT NULL DEFAULT 'Etudiant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Age`, `Username`, `Pass`, `Role`, `Email`, `Phone`, `Gender`, `Profession`) VALUES
('Houssam Eddine', 'Rahimi', 34, 'smi2022', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Touriste'),
('Houssam Eddine', 'Rahimi', 21, 'houssam', '827ccb0eea8a706c4c34a16891f84e7b', 'etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Stagiaire'),
('Ivan', 'Ivan', 30, 'GuetcharAdmin', 'e4adc3243830dea5ffcd67b9f41ef013', 'admin', 'Guetchar@gmail.com', '0000000000', 'Homme', 'Autre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
