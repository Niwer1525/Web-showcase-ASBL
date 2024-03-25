-- phpMyAdmin SQL Dump
-- version 5.2.1-1.el8.remi
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 25 mars 2024 à 12:39
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

INSERT INTO `devweb_articles` (`nameArticle`, `datePublicationArticle`, `imageArticle`, `contentArticle`, `introArticle`, `department`, `visibility`) VALUES
('Agrandissements des locaux', '2021-03-13', 'article3.jpg', 'Nous avons plusieurs projets d\'expansion en cours, parmi lesquels l\'agrandissement de nos bibliothèques, la création de plusieurs espaces de travail silencieux et des \"boxes\" pour les groupes !\r\n\r\nMais ce n\'est pas tout, nous prévoyons aussi d\'autres agrandissements, dont un espace de lecture et de repos pour les tout-petits et leurs parents !', 'Des projets d\'expansion en cours !\r\n\r\nLumière du savoir améliore son espace et sa qualité !', 'Administratif', 0),
('Offrez vos livres et diffusez la connaissance !', '2019-04-29', 'article1.jpg', 'Nous arrivons à la fin du mois et il est temps de faire notre inventaire habituel. C\'est également le moment de vous informer sur notre programme de don de livres.\r\n\r\nChaque mois, des dizaines de personnes de tous âges nous font don de livres de tout genre qu\'ils n\'utilisent plus. Il y a de quoi satisfaire tous les goûts, des contes pour les plus jeunes aux chefs-d\'œuvre littéraires, en passant par les livres d\'histoire.\r\n\r\nSi vous avez également des livres qui vous encombrent, plutôt que de les jeter, offrez-leur une seconde vie en permettant à d\'autres de se cultiver, de se divertir et plus encore !', 'Suivez l\'exemple de dizaines d\'autres personnes, offrez vos livres pour la bonne cause et favorisez l\'éducation.', 'Administratif', 0),
('Recherche de bénévoles', '2021-07-22', 'article2.jpg', 'Si vous avez envie de vous engager dans une cause solidaire, nous avons besoin de vous ! Nous cherchons des personnes motivées et disponibles pour nous aider à réaliser nos projets humanitaires. Que vous soyez étudiant, retraité, salarié ou sans emploi, vous pouvez apporter votre pierre à l\'édifice en devenant bénévole. Vous pourrez participer à des actions variées, comme la collecte de dons ou l\'animation d\'ateliers. En échange, vous recevrez de la gratitude, de la reconnaissance et de la convivialité. Vous ferez partie d\'une équipe dynamique et solidaire, qui partage les mêmes valeurs que vous. Alors n\'hésitez plus, rejoignez-nous !\r\n', 'Si vous avez envie de vous engager dans une cause solidaire, nous avons besoin de vous !', 'Administratif', 0);

-- --------------------------------------------------------

--
-- Structure de la table `devweb_departments`
--

CREATE TABLE `devweb_departments` (
  `nameDepartment` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `descDepartment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_departments`
--

INSERT INTO `devweb_departments` (`nameDepartment`, `descDepartment`) VALUES
('Administratif', 'Gère les projets à cours, ceux à venir.\r\nGère aussi'),
('Comptabilité', 'Gère la comptabilité de Lumière du savoir');

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
(1, 'Est-il possible d\'emprunter un ou plusieurs livres ?', 'Il est possible d\'emprunter des livres pour une période déterminée, mais les emprunts ne sont pas gratuits. Il faut compter environ 0,50€ par livre.\r\nVeillez également à respecter le délai de retour, car tout retard peut être sanctionné. Il est toutefois possible de prolonger un emprunt, en consultant nos conditions d\'emprunt.'),
(2, 'Faut-il réserver les \"boxes\" et comment faire ?', 'Vous n\'avez pas besoin de réserver à l\'avance, car vous pouvez le faire sur place. Mais attention, il se peut que votre réservation soit refusée si aucun local n\'est libre.\r\nPour réserver depuis chez vous, appelez-nous au numéro indiqué ci-dessus.');

-- --------------------------------------------------------

--
-- Structure de la table `devweb_members`
--

CREATE TABLE `devweb_members` (
  `nameMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastnameMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `emailMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `workMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nameDepartment` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `imageMember` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `devweb_members`
--

INSERT INTO `devweb_members` (`nameMember`, `lastnameMember`, `emailMember`, `workMember`, `nameDepartment`, `role`, `imageMember`) VALUES
('Clément', 'Bernard', 'clember@yahoo.com', 'Enseignant', 'Administratif', 'Administrateur', 'male.jpg'),
('LaJoie', 'Fabrice', 'lajoie.fabric@gmail.com', 'Enseignant', 'Comptabilité', 'Administrateur', 'download.jpg'),
('Livia', 'Pasta', 'livpa@arpe.be', 'Comptable', 'Comptabilité', 'Administrateur', 'female.jpg');

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
  ADD PRIMARY KEY (`nameArticle`(25));

--
-- Index pour la table `devweb_departments`
--
ALTER TABLE `devweb_departments`
  ADD PRIMARY KEY (`nameDepartment`);

--
-- Index pour la table `devweb_faq`
--
ALTER TABLE `devweb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devweb_members`
--
ALTER TABLE `devweb_members`
  ADD PRIMARY KEY (`nameMember`,`lastnameMember`,`emailMember`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
