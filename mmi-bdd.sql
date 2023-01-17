-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 17 jan. 2023 à 18:42
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mmi-bdd.sql`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) NOT NULL,
  `contenu_article` varchar(1000) NOT NULL,
  `date_article` date NOT NULL,
  `synopsis` varchar(200) NOT NULL,
  `miniature_article` varchar(50) DEFAULT NULL,
  `auteur` varchar(40) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lien_matiere`
--

DROP TABLE IF EXISTS `lien_matiere`;
CREATE TABLE IF NOT EXISTS `lien_matiere` (
  `id_lien` int NOT NULL AUTO_INCREMENT,
  `ext_matiere` int NOT NULL,
  `ext_prof` int NOT NULL,
  PRIMARY KEY (`id_lien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(60) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_matiere`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `description`) VALUES
(1, 'Anglais (web + renforcé)', 'Dans le monde actuel, le plurilinguisme est une compétence de plus en plus importante. En plus d’offrir des opportunités d’embauches, être capable de parler anglais aide à établir une connexion réelle avec les personnes et d’en apprendre plus sur les différents lieux, cultures, et façons de vivre. Plus vous maîtrisez l’anglais et mieux vous saurez vous exprimer.\r\nÀ l’IUT de Champs-sur-Marne, on apprend à nous exprimer sur des sujets variés,les bases de la conjugaison et de la grammaire (language boost),à analyser des écrits sur des sujets divers et à en tirer des conclusions,le vocabulaire dédié au domaine du web\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :Publication de nouveautés sur le compte Instagram mmind_mmi, publication d’un teaser de notre projet sur instagram,publication de nouveautés sur le compte Instagram mmind_mmi et un CV Vidéo (doit être fait en anglais)'),
(2, 'Audiovisuel & Motion Design / Production Audio & Vidéo', 'Omniprésent dans le quotidien et en constante évolution, le motion design se retrouve dans les publicités télévisées, les clips musicaux, les génériques de films, les affichages publicitaires et bien d\'autres. Cette discipline est aussi appliquée sur Internet pour la réalisation des bannières, des vidéos promotionnelles ou institutionnelles, des tutoriels, etc. C’est donc la conception et  la réalisation de contenus associant vidéo, graphisme 2D, son, effets spéciaux, typographie et animation 3D que vous étudierez à l’IUT de Champs .En MMI, on apprend à utiliser le matériel vidéo, les techniques de tournage et à monter sur les logiciels d’Adobe\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : Interview sur un sujet donné, Création d’un motion design pour une institution, un Podcast et un CV Vidéo.'),
(3, 'Création & Design Interactif / Production Graphique', 'ici à mmi Champs , vous apprenez les bases du design de l’utilisation des logiciels de la suite Adobe, à la création de contenus graphique en passant par la réalisation d’affiches , de bannières , de logo et de mise en pages.\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons à utiliser les logiciels de la suite Adobe, à créer du contenu visuel pertinent et cohérent et respecter les normes et format pour les publications.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : création d’un gif animé, maquettage, campagne de communication institutionnelle.'),
(4, 'Culture Artistique', 'Cela désigne toutes les activités liées à la création, la production, la distribution ou la consommation dans le domaine de la musique, le théâtre, la danse, les arts visuels ou les programmes de radio et de télévision. c’est un ensemble de matières telles que : la vidéo , l’art et le design. A champs vous apprendrez à utiliser tout le potentiel de votre esprit créatif, laissez libre votre imagination. \r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons à avoir un esprit créatif !\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :Livre des 7 mots, un leporello, un Podcast'),
(5, 'Déploiement de services / Hébergement', 'Un réseau informatique est un ensemble d\'équipements reliés entre eux pour échanger des informations. Grace à de nombreux TP ( travaux pratique) vous apprendrez  à maîtriser la configuration d’un hébergement Web ou d’un réseau local (Webmail, CMS, blog)  ainsi qu’a utiliser différent système d’explotation comme Linux et Windows .\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons :à utiliser l’interface Linux, la gestion d’un réseau, la gestion de contenus.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :un portrait chinois, un site de réservation, la création d’une institution, la refonte du site MMI champs et un portfolio'),
(6, 'Développement Back / Système d’information', 'À l’IUT de Champs-sur-Marne, nous apprenons :l\'interface de gestion ( back-end ), l\'architecture MVC.\r\n\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : un site de réservation ,la création d\'une institution et la refonte du site mmi Champs.'),
(7, 'Développement & Intégration', 'Le développement Web désigne de manière générale les tâches associées au développement de sites Web destinés à être hébergés via un intranet ou Internet. Le processus de développement web comprend, entre autres, la conception de sites web, le développement de contenu web, l’élaboration de scripts côté client ou côté serveur et la configuration de la sécurité du réseau. Les langages de programmation que vous apprendrez sont : JavaScript , PHP, HTML et CSS.\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons :à coder en HTML, CSS,PHP et JS, à respecter les règles sémantiques et bien gérer ses fichiers.\r\n\r\n\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : Portrait Chinois en onepage, un Site de réservation “ResaWeb”, un site avec visualisation de données “DataViz”, un portfolio personnel et la refonte du site mmi.'),
(8, 'Economie & Droit Numérique', 'A champs vous étudierez certains concepts et méthodes de l\'analyse pour comprendre le fonctionnement des marchés numériques et ce qui les distingue de l\'économie traditionnelle. Le but est de comprendre la place et les enjeux de l\'économie numérique dans les économies contemporaines.\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons : à découvrir les aspects spécifiques du droit et de l’économie lorsqu’ils s’appliquent au monde numérique, à comprendre les enjeux juridiques, à maîtriser les droits et obligations des entreprises et des individus, à identifier les moyens de protection des données et des personnes.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : Mentions légales, aspect juridique d’un site internet'),
(9, 'Ecriture Multimédia et Narration', 'L\'écriture numérique est multimédia, au sens où elle permet d\'associer différentes ressources médias (texte linguistique, image, vidéo, son) sur un même support. Le multimédia ne se contente pas d\'additionner des médias, mais crée de nouvelles formes de messages. \r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons : à comprendre ce que l\'écriture ou les œuvres multimédias numériques ont de nouveau. A réfléchir à l\'écriture multimédia et aux œuvres multimédias.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :une interview, la création d’une association et un scénario pour un podcast'),
(10, 'Ergonomie & Accessibilité', 'A l’iut de Champs vous apprendrez les bases de l’accessibilité et de l’ergonomie pour favoriser la capacité à répondre aux attentes des utilisateurs en prenant en compte les personnes ayant un handicape.\r\n\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons : à développés de façon à ce que les personnes handicapées puissent utiliser un site web, à apporter une réponse appropriée à un besoin et à garantir un confort et une sécurité d\'utilisation.\r\n\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : un site d’association, un site de réservation, un portfolio et la refonte du site mmi.'),
(11, 'Gestion de projet', 'C\'est l\'ensemble des moyens humains et matériels pour atteindre un objectif dans un temps défini. A Champs vous apprendrez à appliquer les méthodes, les techniques, et utiliser des outils de gestion spécifiques aux différentes étapes du projet, de l\'évaluation de l\'opportunité jusqu\'à l\'achèvement du projet.\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprennos : à faire des COPILs,à savoir organiser un travail en groupe, à respecter les délais de rendu et la gestion de budget.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :un Product Backlog, l\'organisation de groupe ( copil, backlog, réunion…)et l\'écriture du SFD d’un projet.'),
(12, 'Intégration', 'La phase d\'intégration va consister à réaliser une maquette définitive du site ou de l\'application web. A partir de la définition des besoins et de l\'identité visuelle du client, l\'intégrateur va donner vie à l\'interface utilisateur de l\'application grâce aux langages HTML5 et CSS3 et au design afin de respecter d\'une part la charte graphique définie, et à faire en sorte que l\'expérience utilisateur soit optimale.\r\n\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons :à utiliser le logiciel Visual Code, gérer ses fichiers,respecter les règles d’accessibilité.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : un Portrait Chinois en one page, un site de réservation “ResaWeb” et un Portfolio.'),
(13, 'Marketing / Stratégie de Communication', 'Le marketing est un domaine vaste et complexe qui demande une multitude de compétences. Il est composé de plusieurs branches, mais il est tout à fait possible de se spécialiser dans des domaines précis.Cela prépare aux métiers de la communication et de l\'information au sens large. Elle forme des étudiants à l\'analyse et à la compréhension des enjeux et des nouvelles technologies de communication.\r\n\r\n\r\nÀ l’IUT de Champs-sur-Marne, vous apprenons : à connaître le marché, mettre au point une stratégie pour commercialiser ses produits ou services, le MARKETING OPÉRATIONNEL, le MARKETING D\'INFLUENCE, le MARKETING DIRECT, le MARKETING RELATIONNEL.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :la création de la communication d’une institution, la création d’une start-up'),
(14, 'PPP', 'À l’IUT de Champs-sur-Marne, nous apprenons :la rédaction d’un CV, avoir un profil dans le monde numérique, apprendre à se connaitre / qui suis-je ?\r\n\r\n→ cette liste n’est pas exhaustive, tout comme les cours d’une année à une autre peuvent changer.\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :un compte linkedin, la rédaction d’un cv et plusieurs lettres de motivation.'),
(15, 'référencement', 'Le référencement, aussi appelé SEO pour Search Engine Optimization, est l’ensemble des efforts effectués pour mieux positionner un site ou une page web dans les résultats sur les moteurs de recherche.\r\n\r\n\r\nÀ l’IUT de Champs-sur-Marne, nous apprenons :à faire de l’optimisation du contenu de la page, à l’optimisation de liens pointant vers la page et les éléments techniques,à réaliser un travail d’audit SEO de référencement\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière :un site de réservation \"résaweb\" et un mini blog en php.'),
(16, 'Représentation & Traitement de l’Information', 'À l’IUT de Champs-sur-Marne, nous apprenons :à bien gérer les médias ( son,image,vidéo), à étudier un signal sonore analogique,une représentation temporelle,la perception auditive, un spectre sonore et les risques auditifs.\r\n\r\n\r\nVoici quelques exemples de projets qu’il est possible de faire dans cette matière : la gestion des médias ( projet site d’une association), un Podcast, un CV vidéo, la refonte du site mmi et un portfolio.');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(50) NOT NULL,
  `etudiants` varchar(100) NOT NULL,
  `date_projet` date NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img_projet` varchar(50) DEFAULT NULL,
  `iframe_projet` varchar(50) DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `etudiants`, `date_projet`, `niveau`, `description`, `img_projet`, `iframe_projet`, `lien`) VALUES
(1, 'Resaweb ', 'Amel CHABAH', '2022-05-18', 'mmi 1', 'Ce projet a été réalisé lors du second semestre de BUT MMI. Le but était de créer un site web de réservation. Le choix du sujet était totalement libre, l’objectif principal étant l\'aspect technique : savoir gérer une base de données et mettre en place ses connaissances PHP et SQL.\r\n<br>\r\nCe site a été réalisé par Amel CHABAH et a obtenu la 3ème place au festival MMI dans la catégorie \"Prix Site web\".\r\n\r\n', 'src/img/projet/resaweb-amel.webp', '', 'https://resaweb.chabah.butmmi.o2switch.site/'),
(2, 'Portrait chinois', 'Clara MANY', '2021-12-31', 'mmi 1', 'Le Portrait chinois est un projet de première année, réalisé au premier semestre. Le but de ce projet était de réaliser un portrait chinois au travers d’un site one page, c\'est-à-dire de faire une analogie avec un élément et de personnalité.\r\n', 'src/img/projet/portrait-chinois-clara.webp', NULL, 'https://claramy.github.io/MonPortraitChinois/'),
(3, 'Portfolio', 'Valentin BLEUSE', '2023-01-03', 'mmi 2', 'Réalisé au troisième semestre de deuxième année, ce projet consistait à réaliser son portfolio, c\'est-à-dire de créer un site web qui présente ses projets et ses compétences. Le projet était assez libre puisque le but était qu’il reflète la personnalité de l’étudiant.  ', 'src/img/projet/portfolio.webp', NULL, 'https://valentin-bleuse.fr/'),
(4, 'Livre des 7 mots', 'Elise CELADON', '2021-12-06', 'mmi 1', 'Pour un projet de culture artistique en première année de BUT MMI, il fallait réaliser un livre des 7 mots. L’étudiant devait choisir 7 mots qui le touchaient, et de les illustrer de quelque façon qu’il soit, la seule condition était de le faire sur une feuille de format A5 et le tout dans un carnet (carnet qu’il pouvait réaliser lui-même) .', 'scr/img/projet/livre-elise2.webp', NULL, NULL),
(5, 'CV Vidéo', 'Anastasiya BALAN', '2020-12-30', 'mmi 2', 'Le Cv vidéo est un projet de seconde année de BUT MMI. Le but, réaliser une vidéo, allant de l’écriture à la production en passant par le montage. Il s\'agissait de créer une vidéo qui représente l’étudiant, les dialogues ou voix off devaient être impérativement en anglais. \r\n<br>\r\nIndicted a été réalisé par Anastasiya Balan, il a été primé au festival MMI en 2020.\r\n', 'scr/img/projet/cvideo.webp', NULL, 'https://www.youtube.com/watch?v=D02XLtyxyN4'),
(6, 'Motion design ', 'Valérie LAPEYRE, Samuel ENRIQUEZ-SARANO, Oscar POISSON et Valentin BLEUSE', '2022-06-09', 'mmi 1', 'Lors d’un projet de deuxième année de BUT MMI il fallait mettre en œuvre la communication d’un projet citoyen. Dans le cadre de ce projet un motion design était dans les attendus, il devait présenter l’association choisie.  \r\n', 'scr/img/projet/motion-design.webp', NULL, 'https://youtu.be/f1CG9pWlfSo'),
(7, 'Podcast Eiffel', 'Thomas DEVRED et Fathallah ZOBIR', '2022-12-16', 'mmi 2', 'Le but de ce projet de troisième semestre était de créer un environnement sonore à partir d’une œuvre ou d’un auteur, cette année (2022) il s’agissait du personnage de Gustave Eiffel. \r\n', 'scr/img/projet/podcast-eiffel.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoignage` int NOT NULL AUTO_INCREMENT,
  `etudiant` varchar(100) NOT NULL,
  `promo` varchar(15) NOT NULL,
  `nom_temoignage` varchar(50) NOT NULL,
  `contenu_temoignage` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_temoignage`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoignage`, `etudiant`, `promo`, `nom_temoignage`, `contenu_temoignage`) VALUES
(1, 'Laurence', '2021', '', '“J’ai choisi MMI car c\'est une formation qui propose un bon mélange entre technique et artistique. Par son grand nombre de disciplines enseignées, c\'est également une formation qui favorise la découverte de soi (pour les lycéens encore un peu perdus) : les domaines que l\'on préfère, ceux que l\'on aime moins, et ceux sur lesquels on souhaiterait poursuivre.\r\nPour se plaire en MMI, il faut tout d\'abord être intéressé par le web et le multimédia. Savoir être curieux et polyvalent, en toutes circonstances. Les enseignements sont tous de qualité ce qui facilite cette ouverture. L’esprit d’équipe et l’entraide sont également des valeurs selon moi indispensables dans ce cursus, car les projets de groupe y sont nombreux.\r\nUn conseil pour les futurs candidats serait de rester organisé. La charge de travail deviendra progressivement plus importante au cours de ces trois années, et il est important de garder en tête les différentes dates de rendus et partiels à venir pour pouvoir travailler effic'),
(2, 'Keïsha-Faty', '2021', '', '“J\'ai choisi MMI pour la diversité des enseignements et l\'apprentissage théorique soutenu par beaucoup de pratique. Petit plus pour le cadre de MMI champs avec son matériel et sa verdure à l\'extérieur.\r\nJ\'ai acquis une multitude de compétences, un beau portfolio, une capacité à avoir une vision complète sur le multimédia, une belle expérience humaine.\r\nPour s\'y plaire il faut être déterminé et ne pas hésiter à demander de l\'aide si nécessaire, les professeurs aiment aider et parfois les camarades aussi. Ne pas se limiter et explorer au-delà des idées reçues et préconçues.\r\nJe poursuis mes études en licence professionnelle Création et gestion de projet multimédia en alternance pour ensuite devenir directrice artistique.”\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_prof` int NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `url_photo` varchar(70) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `p_articles` tinyint NOT NULL,
  `p_projets` tinyint NOT NULL,
  `p_temoignages` tinyint NOT NULL,
  `p_admin` tinyint NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
