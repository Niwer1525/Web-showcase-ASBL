-- phpMyAdmin SQL Dump
-- version 5.2.1-1.el8.remi
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 01 mai 2024 à 08:21
-- Version du serveur : 8.0.36
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Q230242`
--

-- --------------------------------------------------------

--
-- Structure de la table `devweb_articles`
--

CREATE TABLE `devweb_articles` (
  `id` int UNSIGNED NOT NULL,
  `nameArticle` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `datePublicationArticle` date NOT NULL,
  `imageArticle` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `contentArticle` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `introArticle` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `department` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `visibility` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_articles`
--

INSERT INTO `devweb_articles` (`id`, `nameArticle`, `datePublicationArticle`, `imageArticle`, `contentArticle`, `introArticle`, `department`, `visibility`) VALUES
(1, 'Agrandissement des locaux', '2019-02-01', 'article3.jpg', 'Nous avons plusieurs projets d\'expansion en cours, parmi lesquels l\'agrandissement de nos bibliothèques, la création de plusieurs espaces de travail silencieux et de salles d\'étude pour les groupes !\r\n\r\nMais ce n\'est pas tout ! Nous prévoyons aussi d\'autres agrandissements, dont un espace de lecture et de repos pour les tout-petits et leurs parents !', 'Des projets d\'expansion en cours !\r\nLumière du savoir améliore son espace et sa qualité !', 'Administratif', 0),
(2, 'Les cadeaux de noël ', '1970-01-01', 'OIG4.05dodH8iU_EMzKuvra.jpg', 'Vous n\'avez pas trouvé de cadeaux pour vos proches ? Ou peut-être avez vous simplement envie de vous faire plaisir ?\r\n\r\nAlors n\'hésitez pas... c\'est le moment idéal pour acheter un de nos abonnements et fréquenter la connaissance avec nous à Lumière du savoir !\r\n\r\nProfitez de réductions : jusqu\'a -50% sur nos abonnements de 1 mois et -25% sur nos abonnements de 3 mois.\r\nProfitez également de conseils gratuits !', 'Vous n\'avez pas d\'idée pour vos cadeaux ?\r\nPensez alors à nos abonnements et nos livres.\r\nJusqu\'a -50% sur certains abonnements !', 'Commercial', 1),
(3, 'Offrez vos livres et diffusez la connaissance !', '2021-10-10', 'article1.jpg', 'Nous arrivons à la fin du mois et il est temps de faire notre inventaire habituel. C\'est également le moment de vous informer sur notre programme de don de livres.\r\n\r\nChaque mois, des dizaines de personnes de tous âges nous font don de livres de tout genre. Il y a de quoi satisfaire tous les goûts : des contes pour les plus jeunes aux chefs-d\'œuvre littéraires, en passant par les livres d\'histoire.\r\n\r\nSi vous avez, vous aussi, des livres qui vous encombrent, plutôt que de les jeter, offrez-leur une seconde vie en permettant à d\'autres de se cultiver, de se divertir et plus encore !', 'Suivez l\'exemple de dizaines de personnes et offrez vos livres pour la bonne cause et pour favorisez l\'éducation.', 'Commercial', 0),
(4, 'Recherche de bénévoles', '2021-02-01', 'article2.jpg', 'Comme tous les deux ans, notre ASBL organise la dernière semaine de juin, son habituelle journée du livre.\r\nToutes les aides sont bienvenues pour tenir les nombreux stands qui seront présentés', 'Vous êtes comptable ou étudiant en comptabilité et vous souhaitez participer à une grande action de bénévolat ?\r\nAlors rejoignez-nous et participez à notre 10e édition de l\'action de distribution de livres organisée par Lumière du savoir !', 'Comptabilité', 0);

-- --------------------------------------------------------

--
-- Structure de la table `devweb_departments`
--

CREATE TABLE `devweb_departments` (
  `id` int UNSIGNED NOT NULL,
  `nameDepartment` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `descDepartment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_departments`
--

INSERT INTO `devweb_departments` (`id`, `nameDepartment`, `descDepartment`) VALUES
(1, 'Administratif', 'Gestion des projets en court et à venir.'),
(2, 'Comptabilité', 'Gestion de la comptabilité de l\'ASBL.'),
(5, 'Commercial', 'Relations avec le client.');

-- --------------------------------------------------------

--
-- Structure de la table `devweb_faq`
--

CREATE TABLE `devweb_faq` (
  `id` int NOT NULL,
  `question` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_faq`
--

INSERT INTO `devweb_faq` (`id`, `question`, `reply`) VALUES
(0, 'Quels sont les horaires et les jours d\'ouverture ?', 'Nous sommes ouverts du lundi au samedi inclus.\r\nConcernant les horaires, nous ouvrons de 8h à 16h, sauf le mercredi et le samedi où nous restons ouverts jusqu\'à 19h pour permettre aux plus jeunes de venir travailler pour leurs cours.\r\n'),
(1, 'Est-il possible d\'emprunter un ou plusieurs livres ?', 'Il est possible d\'emprunter des livres pour une période déterminée, mais les emprunts ne sont pas gratuits. Il faut compter environ 0,50€ pour 1 semaine et par livre.\r\nVeillez également à respecter le délai de retour. Tout retard peut être sanctionné. Il est toutefois possible de prolonger un emprunt, en consultant nos conditions d\'emprunt.'),
(2, 'Faut-il réserver les salles d\'étude et comment faire ?', 'Vous pouvez demander un local sur place; il vous sera attribué selon les disponibilités.\r\n\r\nPour réserver depuis chez vous, appelez le numéro indiqué ci-dessus.');

-- --------------------------------------------------------

--
-- Structure de la table `devweb_members`
--

CREATE TABLE `devweb_members` (
  `id` int NOT NULL,
  `nameMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastnameMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `emailMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `workMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nameDepartment` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `imageMember` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phoneMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `descMember` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_members`
--

INSERT INTO `devweb_members` (`id`, `nameMember`, `lastnameMember`, `emailMember`, `workMember`, `nameDepartment`, `role`, `imageMember`, `phoneMember`, `descMember`) VALUES
(1, 'Clément', 'Bernard', 'clember@yahoo.com', 'Enseignant', 'Commercial', 'Administrateur', 'male.jpg', '0477777777', 'Prof d\'histoire, j\'aime beaucoup aider les plus jeunes à comprendre le monde dans lequel ils vivent'),
(2, 'LaJoie', 'Fabrice', 'lajoie.fabric@gmail.com', 'Enseignant', 'Administratif', 'Administrateur', 'male2.jpg', '4812125543', 'Ecrivain à mes heures perdues, j\'ai publié un recueil de nouvelles fantastiques'),
(3, 'Livia', 'Pasta', 'livpa@arpe.be', 'Comptable', 'Comptabilité', 'Administrateur', 'female.jpg', '4146145226', 'Comptable de formation, je travail au sein d\'un secrétariat social.');

-- --------------------------------------------------------

--
-- Structure de la table `devweb_roles`
--

CREATE TABLE `devweb_roles` (
  `nameRole` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_roles`
--

INSERT INTO `devweb_roles` (`nameRole`) VALUES
('Administrateur'),
('Membre'),
('Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `devweb_users`
--

CREATE TABLE `devweb_users` (
  `nameUser` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastnameUser` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ageUser` int NOT NULL,
  `emailUser` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `passwordUser` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `addressUser` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_users`
--

INSERT INTO `devweb_users` (`nameUser`, `lastnameUser`, `ageUser`, `emailUser`, `passwordUser`, `addressUser`) VALUES
('Erwin', 'Redoté', 19, 'e.redote@student.helmo.be', 'passwordVisible', 'Rue de Harlez 25, 4000 Liège'),
('Webedia', 'web', 22, 'webedia@gmail.com', 'mot2pass', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devweb_articles`
--
ALTER TABLE `devweb_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devweb_departments`
--
ALTER TABLE `devweb_departments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devweb_faq`
--
ALTER TABLE `devweb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devweb_members`
--
ALTER TABLE `devweb_members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devweb_roles`
--
ALTER TABLE `devweb_roles`
  ADD PRIMARY KEY (`nameRole`);

--
-- Index pour la table `devweb_users`
--
ALTER TABLE `devweb_users`
  ADD PRIMARY KEY (`emailUser`(32));

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devweb_articles`
--
ALTER TABLE `devweb_articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `devweb_departments`
--
ALTER TABLE `devweb_departments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `devweb_members`
--
ALTER TABLE `devweb_members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
