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
  `nom_article_fr` varchar(100) NOT NULL,
  `contenu_article_fr` varchar(1000) NOT NULL,
  `nom_article_en` varchar(100) NOT NULL,
  `contenu_article_en` varchar(1000) NOT NULL,
  `synopsis_en` varchar(200) NOT NULL,
  `date_article` date NOT NULL,
  `synopsis_fr` varchar(200) NOT NULL,
  `miniature_article` varchar(50) NOT NULL,
  `ext_auteur` int(11) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(2) NOT NULL,
  `nom_matiere` int(11) NOT NULL,
  `description` text NOT NULL,
  `ext_projet` int(11) NOT NULL,
  `ext_utilisateur` int(11) NOT NULL
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
  `description_fr` varchar(500) NOT NULL,
  `description_en` varchar(500) NOT NULL,
  `img_projet` varchar(50) NOT NULL,
  `lien` varchar(100) NOT NULL,
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
  `contenu_temoignage_fr` varchar(1000) NOT NULL,
  `contenu_temoignage_en` varchar(1000) NOT NULL,
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
  `url_photo` varchar(70) NOT NULL,
  `competences_fr` varchar(100) NOT NULL,
  `competences_en` varchar(100) NOT NULL,
  `bio_fr` varchar(500) NOT NULL,
  `bio_en` varchar(500) NOT NULL,
  `p_articles` tinyint(4) NOT NULL,
  `p_projets` tinyint(4) NOT NULL,
  `p_temoignages` tinyint(4) NOT NULL,
  `p_admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
