-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 06:30 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `equipes`
--

CREATE TABLE `equipes` (
  `idEq` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Titre` varchar(125) NOT NULL,
  `Facebook` varchar(125) NOT NULL,
  `Twitter` varchar(125) NOT NULL,
  `Instagram` varchar(125) NOT NULL,
  `Linkedin` varchar(125) NOT NULL,
  `Profile` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipes`
--

INSERT INTO `equipes` (`idEq`, `Nom`, `Prenom`, `Titre`, `Facebook`, `Twitter`, `Instagram`, `Linkedin`, `Profile`) VALUES
(13, 'Braim', 'Djiddi', 'hh', 'tg', 'etrg', 'tgr', 'rtee', 'pic cv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `Link` text NOT NULL,
  `annee` text NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `bourse` varchar(100) NOT NULL,
  `nomE` varchar(100) NOT NULL,
  `prenomE` varchar(100) NOT NULL,
  `dateN` date NOT NULL,
  `nationalite` varchar(100) NOT NULL,
  `CNI` varchar(100) NOT NULL,
  `paysE` varchar(100) NOT NULL,
  `villeE` varchar(100) NOT NULL,
  `cpE` int(11) NOT NULL,
  `apE` varchar(100) NOT NULL,
  `numeroE` text NOT NULL,
  `gsmE` text NOT NULL,
  `emailE` varchar(100) NOT NULL,
  `serie` text NOT NULL,
  `nomP` varchar(100) NOT NULL,
  `prenomP` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `adP` text NOT NULL,
  `cpP` int(11) NOT NULL,
  `emailP` varchar(100) NOT NULL,
  `paysP` varchar(100) NOT NULL,
  `villeP` varchar(100) NOT NULL,
  `numeroP` text NOT NULL,
  `gsmP` text NOT NULL,
  `role` text NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
('Prenom1', 'Nom1', 28, 'smi2022', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'houssam_sugar@hotmail.com', '06876542', 'Homme', 'Touriste'),
('Houssam Eddine', 'Rahimi', 21, 'houssam', '827ccb0eea8a706c4c34a16891f84e7b', 'etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Stagiaire'),
('Ivan2', 'Yvan1', 30, 'GuetcharAdmin', 'e4adc3243830dea5ffcd67b9f41ef013', 'admin', 'Guetchar@gmail.com', '0000000000', 'Homme', 'Autre'),
('Houssam Eddine', 'Rahimi', 44, 'user1', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'user1@gmail.com', '0624046210', 'Homme', 'Stagiaire'),
('Houssam Eddine', 'Rahimi', 34, 'user2', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'user2@gmail.com', '0624046210', 'Homme', 'Autre'),
('Houssam Eddine', 'Rahimi', 34, 'user3', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'user3@gmail.com', '0624046210', 'Homme', 'Stagiaire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`idEq`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `idEq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
