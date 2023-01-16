-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 jan. 2023 à 21:07
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(4) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) NOT NULL,
  `contenu_article` varchar(1000) NOT NULL,
  `date_article` date NOT NULL,
  `synopsis` varchar(200) NOT NULL,
  `miniature_article` varchar(50),
  `auteur` varchar(40) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(2) NOT NULL, AUTO_INCREMENT
  `nom_matiere` varchar(60) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_matiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Structure de la table `lien_matiere`
--

DROP TABLE IF EXISTS `lien_matiere`;
CREATE TABLE IF NOT EXISTS `lien_matiere` (
  `id_lien` int(2) NOT NULL, AUTO_INCREMENT
  `ext_matiere` int(2) NOT NULL,
  `ext_prof` int(2) NOT NULL,
  PRIMARY KEY (`id_lien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(2) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(50) NOT NULL,
  `etudiants` varchar(100) NOT NULL,
  `date_projet` date NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img_projet` varchar(50),
  `iframe_projet` varchar(50),
  `lien` varchar(100),
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoignage` int(2) NOT NULL AUTO_INCREMENT,
  `etudiant` varchar(100) NOT NULL,
  `promo` varchar(15) NOT NULL,
  `nom_temoignage` varchar(50) NOT NULL,
  `contenu_temoignage` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_temoignage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_prof` int(3) NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `url_photo` varchar(70),
  `bio` varchar(500),
  `p_articles` varchar(3),
  `p_projets` varchar(3),
  `p_temoignages` varchar(3),
  `p_admin` varchar(3),
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
