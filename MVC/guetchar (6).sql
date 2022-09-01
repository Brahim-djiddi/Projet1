-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 12:14 AM
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
('user1', 'Demande_Stage', '2022-09-01 21:35:01', '1662068101_user1'),
('user3', 'Demande_Etude', '2022-09-01 22:12:52', '1662070371_user3'),
('smi2022', 'Demande_Etude', '2022-09-01 21:45:25', '1662068724_smi2022'),
('user1', 'Demande_Etude', '2022-09-01 20:40:20', '1662064819_user1'),
('smi2022', 'Demande_Stage', '2022-09-01 21:34:08', '1662068047_smi2022');

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
(18, 'Rahimi', 'Houssam Eddine', 'premier titre', 'https://www.facebook.com/profile.php?id=100030789651877', 'https://twitter.com/home?lang=fr', 'instagram', 'Linkedin', '1662063282_pic cv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `titre`, `description`, `image`, `date`) VALUES
(22, 'titre 2', 'description 2', 'images2.png', '2022-08-29 20:48:23'),
(23, 'titre 3', 'description 3', 'images3.png', '2022-08-29 20:48:39'),
(24, 'titre 4', 'description 4', 'images4.png', '2022-08-29 20:48:56'),
(21, 'titre 1', 'description 1', 'images5.png', '2022-08-29 20:47:46'),
(25, 'titre 5', 'description 5', 'images1.png', '2022-08-29 20:49:21'),
(27, 'titre 6', 'description 6', 'images6_resized.jpg', '2022-08-29 21:01:21'),
(29, 'premier titre', 'premier description', '1662063413_8996951c-591d-4b06-bec3-1ac39512c758.jpg', '2022-09-01 20:16:55');

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

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `Link`, `annee`, `filiere`, `etablissement`, `bourse`, `nomE`, `prenomE`, `dateN`, `nationalite`, `CNI`, `paysE`, `villeE`, `cpE`, `apE`, `numeroE`, `gsmE`, `emailE`, `serie`, `nomP`, `prenomP`, `profession`, `adP`, `cpP`, `emailP`, `paysP`, `villeP`, `numeroP`, `gsmP`, `role`, `destination`) VALUES
(57, '1662068101_user1', '1', 'Histoire', 'UniversitÃ© public', 'stage', 'simop idrissi', 'y8QskyxUce', '2022-08-13', 'KB24t04nHI', 'RwZz9SrUHP', 'ogWiaJmffR', '14a1j3Qab2', 129509, 'd6p9k5POSV', 'ikaZKKPv9B', 'isaNNp8oRm', 'dqjnb@uef3.com', 'x2HfVSay7m', 'oLNgBkB719', 'ihM1J2dzWJ', 'Cultivateur', 'AV ISMAILIA 12 RUE HANGARIE RCE MIFTAH', 43545, 'houssam_sugar@hotmail.com', 'n7IB0gKRmq', 'Fes', '0624046210', 'QlhBYKj0Af', 'Tuteur', 'Tunisie'),
(58, '1662068724_smi2022', '5', 'Ã‰conomie', 'UniversitÃ© public', 'stage', 'simop idrissi', 'kzMyPduadj', '2022-08-13', '7sqfoIyPo8', 'bxcnPodg6V', 'WoM6dfdITs', 'CCOZVq8FCZ', 908481, 'hMSJYxjmbQ', 'drKdN8xLJo', 'EoZkVTPV3X', 'krase@abj2.com', 'CarJeGKG7F', 'k5WAP1VC45', 'RQYA2wKUvc', 'Cultivateur', 'AV ISMAILIA 12 RUE HANGARIE RCE MIFTAH', 703630, 'houssam_sugar@hotmail.com', '77Lz2PkISQ', 'Fes', '0624046210', 'RQg5DmyB9G', 'Tuteur', 'Maroc'),
(53, '1662064819_user1', '5', 'Ã‰conomie', 'UniversitÃ© public', 'stage', 'simop idrissi', 'y8QskyxUce', '2022-08-13', 'KB24t04nHI', 'RwZz9SrUHP', 'ogWiaJmffR', '14a1j3Qab2', 129509, 'd6p9k5POSV', 'ikaZKKPv9B', 'isaNNp8oRm', 'dqjnb@uef3.com', 'x2HfVSay7m', 'oLNgBkB719', 'ihM1J2dzWJ', 'Cultivateur', 'AV ISMAILIA 12 RUE HANGARIE RCE MIFTAH', 43545, 'houssam_sugar@hotmail.com', 'n7IB0gKRmq', 'Fes', '0624046210', 'QlhBYKj0Af', 'Tuteur', 'Tunisie'),
(56, '1662068047_smi2022', '5', 'Ã‰conomie', 'UniversitÃ© public', 'stage', 'simop idrissi', 'thvNb2lrgZ', '2022-08-13', '5z7XTX6Z9X', 'qmyvqJsOt4', 'XNq3YbGGhR', 'oEQp6EQFBm', 952663, 'pp1qTZt760', 'MrxDjpGXyy', 'cuaW5M231d', 'p5vgg@ku1l.com', 'QHqPPhkqDw', 'qtAlXfey3c', 'NLYNjlyrAv', 'Cultivateur', 'AV ISMAILIA 12 RUE HANGARIE RCE MIFTAH', 703630, 'houssam_sugar@hotmail.com', '9vyMOxOdUU', 'Fes', '0624046210', 'tiaxRPFf9H', 'Tuteur', 'Maroc'),
(59, '1662070371_user3', '5', 'Ã‰conomie', 'UniversitÃ© public', 'stage', 'simop idrissi', 'aGV2bICfu1', '2022-08-13', 'gwjIZeOs9Y', 'dXqvIXGsZr', 'ugacziq2vm', 'OOOvEMqMmK', 318809, 'TrHZXTpBU3', 'XzDRzF8U3d', 'tGyT3Osfxj', 'ba6in@hxkf.com', 'dsS7In2iya', 'yLccyEBQc1', 'bvYtQWBrrg', 'Cultivateur', 'AV ISMAILIA 12 RUE HANGARIE RCE MIFTAH', 703630, 'houssam_sugar@hotmail.com', 'SwdXmwnN8G', 'Fes', '0624046210', 'JcXvfGpDaI', 'Tuteur', 'Maroc');

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
('Ivan2', 'Yvan1', 30, 'GuetcharAdmin', 'e4adc3243830dea5ffcd67b9f41ef013', 'admin', 'Guetchar@gmail.com', '0000000000', 'Homme', 'Autre'),
('Houssam Eddine', 'Rahimi', 34, 'smi2022', '81dc9bdb52d04dc20036dbd8313ed055', 'Etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Etudiant'),
('Houssam Eddine', 'Rahimi', 60, 'user1', '81dc9bdb52d04dc20036dbd8313ed055', 'Etudiant', 'user1@gmail.com', '0624046210', 'Homme', 'Etudiant'),
('Houssam Eddine', 'Rahimi', 34, 'user2', '81dc9bdb52d04dc20036dbd8313ed055', 'Stagiaire', 'user2@gmail.com', '0624046210', 'Homme', 'Stagiaire'),
('Houssam Eddine', 'Rahimi', 34, 'user3', '81dc9bdb52d04dc20036dbd8313ed055', 'Stagiaire', 'user3@gmail.com', '0624046210', 'Homme', 'Stagiaire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`idEq`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `idEq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
