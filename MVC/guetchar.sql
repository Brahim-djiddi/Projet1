-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 27 août 2022 à 14:51
-- Version du serveur : 10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `guetchar`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `Owner` varchar(100) NOT NULL DEFAULT 'personne',
  `Type` varchar(100) NOT NULL DEFAULT 'inconue',
  `Date_Ajout` timestamp NOT NULL DEFAULT current_timestamp(),
  `Link` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
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
-- Structure de la table `equipes`
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
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`idEq`, `Nom`, `Prenom`, `Titre`, `Facebook`, `Twitter`, `Instagram`, `Linkedin`, `Profile`) VALUES
(13, 'Braim', 'Djiddi', 'hh', 'tg', 'etrg', 'tgr', 'rtee', 'bootstrap-social-logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Age` int(100) NOT NULL DEFAULT 18,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(1000) NOT NULL,
  `Role` varchar(50) NOT NULL DEFAULT 'etudiant',
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL DEFAULT 'homme',
  `Profession` varchar(100) NOT NULL DEFAULT 'Etudiant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Age`, `Username`, `Pass`, `Role`, `Email`, `Phone`, `Gender`, `Profession`) VALUES
('Houssam Eddine', 'Rahimi', 34, 'smi2022', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Touriste'),
('Houssam Eddine', 'Rahimi', 21, 'houssam', '827ccb0eea8a706c4c34a16891f84e7b', 'etudiant', 'houssam_sugar@hotmail.com', '0624046210', 'Homme', 'Stagiaire'),
('Ivan', 'Ivan', 30, 'GuetcharAdmin', 'e4adc3243830dea5ffcd67b9f41ef013', 'admin', 'Guetchar@gmail.com', '0000000000', 'Homme', 'Autre'),
('brahim', 'djidi', 30, 'malik', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'malik@gmail.com', '56789', 'Homme', 'Etudiant'),
('brahim', 'djidi', 30, 'Malik', '81dc9bdb52d04dc20036dbd8313ed055', 'etudiant', 'Malik@gmail.com', '56789', 'Homme', 'Etudiant'),
('545454', '54545', 16, 'hhhh', '107030ca685076c0ed5e054e2c3ed940', 'etudiant', 'frghrz', '4354666556', 'Homme', 'Etudiant'),
('Brahim', 'Djidi', 26, 'Djidimi', 'e10adc3949ba59abbe56e057f20f883e', 'etudiant', 'Brahimdjidi@gmail.com', '0681920786', 'Homme', 'Etudiant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`idEq`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `idEq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
