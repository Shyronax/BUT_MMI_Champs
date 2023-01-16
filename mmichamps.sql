-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmichamps`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(4) NOT NULL,
  `nom_article_fr` varchar(100) NOT NULL,
  `contenu_article_fr` varchar(1000) NOT NULL,
  `nom_article_en` varchar(100),
  `contenu_article_en` varchar(1000),
  `synopsis_en` varchar(200),
  `date_article` date NOT NULL,
  `synopsis_fr` varchar(200) NOT NULL,
  `miniature_article` varchar(100),
  `auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(2) NOT NULL,
  `nom_projet` varchar(50) NOT NULL,
  `etudiants` varchar(100) NOT NULL,
  `annee_projet` date NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `miniature_projet` varchar(100),
  `iframe_projet` varchar(100),
  `lien_projet` varchar(100),
  `image_projet` varchar(100) NOT NULL,
  `description_fr` varchar(500) NOT NULL,
  `description_en` varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temoignage`
--

CREATE TABLE `temoignage` (
  `id_temoignage` int(3) NOT NULL,
  `etudiant` varchar(100) NOT NULL,
  `promo` varchar(15) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu_temoignage_fr` varchar(1000) NOT NULL,
  `contenu_temoignage_en` varchar(1000)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_prof` int(3) NOT NULL,
  `nom_prof` varchar(50) NOT NULL,
  `login_prof` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `url_photo` varchar(70),
  `bio_fr` varchar(500),
  `bio_en` varchar(500),
  `p_articles` tinyint(4) NOT NULL,
  `p_projets` tinyint(4) NOT NULL,
  `p_temoignages` tinyint(4) NOT NULL,
  `p_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoignage`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_prof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoignage` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_prof` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
