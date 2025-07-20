-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 mai 2023 à 20:29
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `website`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `code_achat_four` int(11) NOT NULL,
  `code_achat_art` int(11) NOT NULL,
  `code_achat` int(11) NOT NULL,
  `quantite_achat` int(11) NOT NULL,
  `prix_total_achat` int(11) NOT NULL,
  `date_achat` datetime NOT NULL,
  `prix_ht_achat` int(11) NOT NULL,
  `tva_achat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `name_admin` varchar(100) NOT NULL,
  `password_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`name_admin`, `password_admin`) VALUES
('Asaad', 'asaad'),
('Aymane', 'aymane'),
('Yassine', 'yassine');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `code_article` int(11) NOT NULL,
  `image_article` text NOT NULL,
  `stock_article` int(11) NOT NULL,
  `nom_article` text NOT NULL,
  `nombre_recherche_article` int(11) NOT NULL,
  `admin_article` text NOT NULL,
  `categorie_article` varchar(1000) NOT NULL,
  `equipe_article` text NOT NULL,
  `marque_article` text NOT NULL,
  `couleur_article` text NOT NULL,
  `poids_article` float NOT NULL,
  `dimensions_article` datetime NOT NULL,
  `description_article` text NOT NULL,
  `prix_ht_article` int(11) NOT NULL,
  `tva_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`code_article`, `image_article`, `stock_article`, `nom_article`, `nombre_recherche_article`, `admin_article`, `categorie_article`, `equipe_article`, `marque_article`, `couleur_article`, `poids_article`, `dimensions_article`, `description_article`, `prix_ht_article`, `tva_article`) VALUES
(47, 'PSG Away Kids Football Kit 22-23.jpg', 20, 'PSG Away Kids Football Kit 22-23', 0, 'Aymane', 'Tenues', 'PSG', 'Nike', '#ffffff', 0, '2023-04-20 04:07:59', '', 150, 20),
(49, 'Coupe du monde 2022 Puma dévoile le maillot extérieur du Maroc.webp', 300, 'Coupe du monde 2022: Puma dévoile le maillot extérieur du Maroc', 1, 'Aymane', 'Tenues', 'Maroc', 'Puma', '#ffffff', 0, '2023-04-20 04:34:35', '', 300, 20),
(50, 'Maillot Maroc 2022-23.webp', 300, 'Maillot Maroc 2022/23', 0, 'Aymane', 'Tenues', 'Maroc', 'Puma', '#ff0000', 0, '2023-04-20 04:36:00', '', 300, 20),
(51, 'coque-pour-iphone-12-mini-football-psg-neymar-vi.webp', 50, 'Coque pour iPhone 12 mini - Football Psg Neymar Vi', 6, 'Aymane', 'Accessoire de téléphone', 'PSG', '', '#0000ff', 0, '2023-04-20 04:37:57', '', 60, 5),
(52, 'shieldcase-coque-de-football-iphone-maroc.jpg', 98, 'ShieldCase Coque de football iPhone Maroc', 2, 'Aymane', 'Accessoire de téléphone', 'Maroc', 'ShieldCase', '#ff0000', 0, '2023-04-20 04:40:33', '', 100, 20),
(54, 's-l500.jpg', 49, 'ÉTUI GEL SOUPLE OFFICIEL LIVERPOOL FOOTBALL CLUB DRIP ART POUR TÉLÉPHONE', 1, 'Aymane', 'Accessoire de téléphone', 'Liverpool FC', ' -', '#ff0000', 0, '2023-04-20 04:46:18', '', 90, 20),
(55, 's-l500.png', 25, 'Étui pour téléphone Mo Salah | Liverpool LFC | Apple iPhone, Samsung Galaxy', 14, 'Aymane', 'Accessoire de téléphone', 'Liverpool FC', ' -', '#ff0000', 0, '2023-04-20 04:47:41', '', 120, 20),
(56, '1.jpg', 40, 'Tableau Mural décoratif cadre noir avec verre FC Real madrid', 5, 'Aymane', 'Tableaux décoratifs', 'FC Real Madrid', ' -', '#000000', 1000, '2023-04-20 05:05:53', '', 110, 20),
(57, '1 (1).jpg', 37, 'Tableau Mural Décoratifs Graphic imprimé- Football-Cristiano Ronaldo', 19, 'Aymane', 'Tableaux décoratifs', 'FC Juventus', ' -', '#ffffff', 250, '2023-04-20 05:07:12', '', 99, 20),
(58, '1 (2).jpg', 3, 'Tableau Décoratif Messi-Maradona &#039;La Torche&#039; 70/50cm sur Canvas', 20, 'Aymane', 'Tableaux décoratifs', 'Argentine', ' -', '#ffff00', 1000, '2023-04-20 05:09:46', '', 200, 0),
(59, '1 (3).jpg', 189, 'tableau mural d’art pour célébrer l’Équipe nationale de sport du Maroc', 27, 'Aymane', 'Tableaux décoratifs', 'Maroc', ' -', '#ff0000', 1000, '2023-04-20 05:10:59', '', 99, 0),
(60, '1 (4).jpg', 150, 'Casquette Real Madrid Club Football Stade Santiago Bernabéu BLANCHE', 1, 'Aymane', 'Casquettes', 'FC Real Madrid', ' -', '#ffffff', 100, '2023-04-20 05:13:36', '', 25, 20),
(61, 'Ballon Al Rihla League Blanc White - Pantone H57791.webp', 44, 'Ballon Al Rihla League Blanc White - Pantone H57791', 4, 'Aymane', 'Ballons', ' -', ' -', '#ffffff', 0, '0000-00-00 00:00:00', '', 1500, 20),
(62, 'Ballon de foot Molten ST5.jpg', 50, 'Ballon de foot Molten ST5', 0, 'Aymane', 'Ballons', ' -', '', '#ffffff', 0, '2023-04-20 05:21:08', '', 60, 0),
(63, 'Adidas BALLON JUVENTUS HOME CLUB BLANC BALLON DE FOOT ORIGINAL size 5.jpg', 20, 'Adidas BALLON JUVENTUS HOME CLUB BLANC BALLON DE FOOT ORIGINAL size 5', 0, 'Aymane', 'Ballons', 'FC Juventus', '', '#ffffff', 0, '2023-04-20 05:21:53', '', 100, 20),
(64, 'Ballon de football Select Numéro 10.jpg', 50, 'Ballon de football Select Numéro 10', 1, 'Aymane', 'Ballons', ' -', 'Select', '#0000ff', 0, '2023-04-20 05:22:32', '', 300, 20),
(65, 'Ballon de football Puma Teamfinal 21.6.jpg', 900, 'Ballon de football Puma Teamfinal 21.6', 0, 'Aymane', 'Ballons', ' -', 'Puma', '#ffffff', 0, '2023-04-20 05:23:13', '', 200, 20),
(66, 'Ballon F900.jpg', 500, 'Ballon F900', 0, 'Aymane', 'Ballons', ' -', ' -', '#ffff00', 0, '2023-04-20 05:24:04', '', 350, 10),
(67, 'barcelona kids third kit 22-23.jpg', 400, 'barcelona kids third kit 22-23', 0, 'Aymane', 'Tenues', 'FC Barcelone', 'Nike', '#ffffff', 0, '2023-04-20 05:26:42', '', 100, 20),
(68, 'puma infants man city away mini kit 22-23 black.jpg', 300, 'puma infants man city away mini kit 22-23 black', 0, 'Aymane', 'Tenues', 'Manchester City', 'Puma', '#000000', 0, '2023-04-20 05:27:39', '', 100, 20),
(69, 'Bayern Munich away shirt 22-23.jpg', 500, 'Bayern Munich away shirt 22-23', 0, 'Aymane', 'Tenues', 'FC Bayen Munich', 'Adidas', '#ffffff', 0, '2023-04-20 05:28:38', '', 130, 15),
(70, '', 0, 'Arsenal Third Football Shirt 22-23', 5, 'Aymane', 'Tenues', ' -', ' -', '#ff00ff', 0, '0000-00-00 00:00:00', '', 80, 20),
(71, '1 (5).jpg', 299, 'collier messi c.ronaldo joueur foot ball real madrid m.united FCB PSG', 4, 'Aymane', 'Colliers', 'FC Barcelone', ' -', '#000000', 10, '2023-04-20 05:31:42', '', 35, 0),
(72, '1 (6).jpg', 100, 'collier cristiano ronaldo CR7', 0, 'Aymane', 'Colliers', ' -', '', '#000000', 10, '2023-04-20 05:33:51', '', 35, 0),
(73, 'adidas-fc-bayern-munich-backpack.jpg', 298, 'adidas FC Bayern Munich Backpack', 2, 'Aymane', 'Cartables', 'FC Bayen Munich', 'Adidas', '#000000', 0, '2023-04-20 05:37:42', '', 400, 0),
(74, '3631c5db4c37.jpg', 400, 'Bayern München Backpack', 0, 'Aymane', 'Cartables', 'FC Bayen Munich', 'Adidas', '#0000ff', 0, '2023-04-20 05:38:51', '', 120, 0),
(75, 'adidas-fc-bayern-munich-drawstring-bag.jpg', 500, 'adidas FC Bayern Munich Drawstring Bag', 0, 'Aymane', 'Cartables', 'FC Bayen Munich', 'Adidas', '#000000', 0, '2023-04-20 05:39:33', '', 80, 0),
(76, 'Borussia-Dortmund-back-pack-Schwarz-Gelb-Logo.10015705a.jpg', 50, 'Borussia Dortmund back pack Schwarz / Gelb Logo', 0, 'Aymane', 'Cartables', 'Borussia Dortmund', 'Puma', '#000000', 0, '2023-04-20 05:41:09', '', 200, 0),
(77, 'téléchargement.jpg', 250, 'Dortmund Backpack - PUMA Black/Safety Yellow', 0, 'Aymane', 'Cartables', 'Borussia Dortmund', 'Puma', '#000000', 0, '2023-04-20 05:41:53', '', 350, 20),
(78, 'téléchargement (1).jpg', 700, 'Puma Football Soccer Borussia Dortmund BVB FINAL Backpack Rucksack Black Yellow', 0, 'Aymane', 'Cartables', 'Borussia Dortmund', 'Puma', '#000000', 0, '2023-04-20 05:42:39', '', 150, 20),
(79, '126713-_5_.jpg', 30, 'adidas Manchester United Backpack | Cummins Sports', 0, 'Aymane', 'Cartables', 'Manchester United', 'Adidas', '#ff0000', 0, '2023-04-20 05:44:28', '', 150, 20),
(80, 'il_fullxfull.4463776826_ka2c.avif', 398, 'Manchester United Étui de téléphone Manchester United Étui - Etsy Canada', 1, 'Aymane', 'Accessoire de téléphone', 'Manchester United', '', '#ff0000', 0, '2023-04-20 05:46:03', '', 150, 0),
(82, 'téléchargement (2).jpg', 400, 'Manchester City Crest Bungee Backpack | Official Man City Store', 1, 'Aymane', 'Cartables', 'Manchester City', '', '#007fff', 0, '2023-04-20 05:49:24', '', 400, 20),
(83, '076746-25_1l.webp', 700, 'Shop Blue Unisex Puma Man City Graphic Backpack', 3, 'Aymane', 'Cartables', 'Manchester City', 'Puma', '#00e1ff', 0, '2023-04-20 05:53:04', '', 300, 0),
(84, 'AC-Milan-PS4-Controller-Skin.jpg', 300, 'AC Milan PS4 Controller Skin', 2, 'Aymane', 'Jeu et console', 'AC Milan', 'Sony', '#000000', 0, '2023-04-20 05:56:31', '', 60, 10),
(85, 'WhatsApp Image 2023-05-08 at 11.52.18.jpeg', 20, 'NIKE - chaussures de football - Marvel - Captain America', 7, 'Yassine', 'shoes', ' -', 'NIKE', '#2343e1', 150, '0000-00-00 00:00:00', '', 600, 20),
(86, 'WhatsApp Image 2023-05-08 at 11.52.17 (1).jpeg', 20, 'NIKE - chaussures de football - Marvel - GAMORA', 5, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:29:58', '', 700, 20),
(87, 'WhatsApp Image 2023-05-08 at 11.52.18 (1).jpeg', 20, 'NIKE - chaussures de football - Marvel - LOKI', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#20b116', 0, '2023-05-08 01:31:28', '', 1000, 20),
(88, 'WhatsApp Image 2023-05-08 at 11.52.16 (1).jpeg', 20, 'NIKE - chaussures de football - Marvel - VENOM', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:32:58', '', 1000, 20),
(89, 'WhatsApp Image 2023-05-08 at 11.52.16.jpeg', 20, 'NIKE - chaussures de football - Marvel - DOCTOR STRANGE', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#e20303', 0, '2023-05-08 01:36:54', '', 600, 20),
(90, 'WhatsApp Image 2023-05-08 at 11.52.15.jpeg', 20, 'NIKE - chaussures de football - Marvel - IRON MAN', 1, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:40:31', '', 2400, 20),
(91, 'WhatsApp Image 2023-05-08 at 11.52.14 (1).jpeg', 20, 'NIKE - chaussures de football - Marvel - SILVER SURFER', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:41:51', '', 3000, 20),
(92, 'WhatsApp Image 2023-05-08 at 11.52.14.jpeg', 20, 'NIKE - chaussures de football - Marvel - MOON KNIGHT', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:43:48', '', 400, 20),
(93, 'WhatsApp Image 2023-05-08 at 11.52.13.jpeg', 20, 'NIKE - chaussures de football - Marvel - SPIDER-MAN', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#d60505', 0, '2023-05-08 01:46:36', '', 4000, 0),
(94, 'WhatsApp Image 2023-05-08 at 11.52.12.jpeg', 20, 'NIKE - chaussures de football - Marvel - WOLVERINE', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:48:30', '', 500, 20),
(95, 'WhatsApp Image 2023-05-08 at 11.52.11 (1).jpeg', 20, 'NIKE - chaussures de football - Marvel - DEADPOOL', 1, 'Yassine', 'shoes', ' -', 'NIKE', '#ca0202', 0, '2023-05-08 01:51:44', '', 1000, 20),
(96, 'WhatsApp Image 2023-05-08 at 11.52.11.jpeg', 5, 'NIKE - chaussures de football - Marvel - THANOS', 2, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:53:46', '', 5000, 0),
(97, 'WhatsApp Image 2023-05-08 at 11.52.09.jpeg', 15, 'NIKE - chaussures de football - Marvel - THOR', 5, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:56:37', '', 2500, 20),
(98, 'WhatsApp Image 2023-05-08 at 11.52.08.jpeg', 10, 'NIKE - chaussures de football - Marvel - HULK', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 01:58:28', '', 550, 20),
(99, 'WhatsApp Image 2023-05-08 at 11.51.58.jpeg', 20, 'NIKE - chaussures de football - Marvel - BLACK PANTHER', 0, 'Yassine', 'shoes', ' -', 'NIKE', '#000000', 0, '2023-05-08 02:05:22', '', 2000, 20),
(103, 'Inter milan watch.jpg', 0, 'Montre inter milan', 1, 'Aymane', 'Montres', ' -', 'Seagull', '#001eff', 0, '0000-00-00 00:00:00', '', 300, 20);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `nom_categorie` varchar(50) NOT NULL,
  `nom_admin_categorie` varchar(100) NOT NULL,
  `nombre_rech_categorie` int(11) NOT NULL,
  `image_categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`nom_categorie`, `nom_admin_categorie`, `nombre_rech_categorie`, `image_categorie`) VALUES
('Accessoire de téléphone', 'Aymane', 5, ''),
('Ballons', 'Aymane', 0, ''),
('Cartables', 'Aymane', 0, ''),
('Casquettes', 'Aymane', 0, ''),
('Colliers', 'Aymane', 0, ''),
('Jeu et console', 'Aymane', 0, ''),
('Montres', 'Aymane', 0, ''),
('shoes', 'Yassine', 0, ''),
('Tableaux décoratifs', 'Aymane', 0, ''),
('Tenues', 'Aymane', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `code_client` int(11) NOT NULL,
  `nom_client` text NOT NULL,
  `password_client` text NOT NULL,
  `tel_client` varchar(10) NOT NULL,
  `gmail_client` text NOT NULL,
  `adresse_client` text NOT NULL,
  `verify_client` int(11) NOT NULL,
  `code_activation_client` int(11) NOT NULL,
  `expiration_code_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`code_client`, `nom_client`, `password_client`, `tel_client`, `gmail_client`, `adresse_client`, `verify_client`, `code_activation_client`, `expiration_code_client`) VALUES
(44, 'aymane', '123456', '0649122899', 'laarouiaymane@gmail.com', '325 bd emile zola', 1, 20353, 1681860242),
(45, 'Rayane', 'rayane33', '0643003406', 'lahbabirayane3@gmail.com', 'fihfilzhfzehlfheilzfhzei', 1, 83634, 1683537656),
(46, 'Amine', '123', '0628844399', 'amined.rag7@gmail.com', 'Dfhk', 1, 97978, 1683539971),
(47, 'Noamane', '12345678', '0641074918', 'makhloufnoaman58@gmail.com', 'Rlkgkfkxkxk', 0, 34258, 1683544077);

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `nom_equipe` varchar(30) NOT NULL,
  `logo_equipe` text NOT NULL,
  `background_equipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`nom_equipe`, `logo_equipe`, `background_equipe`) VALUES
(' -', '', ''),
('AC Milan', 'Logo_of_AC_Milan.svg.png', 'Ac Milan.jpg'),
('Argentine', '', ''),
('Arsenal FC', '', ''),
('Aston Villa FC', '', ''),
('Borussia Dortmund', 'Borussia-Dortmund-Logo.png', 'Dortmund Wallpaper.jpg'),
('FC Barcelone', 'FC_Barcelona_(crest).svg.png', 'Barca background.webp'),
('FC Bayen Munich', 'FC_Bayern_5_Stars.png', 'Bayernbackground.jpg'),
('FC Juventus', 'Juventus_FC_2017_logo.svg.png', ''),
('FC Real Madrid', 'Real_Madrid_CF.svg.webp', 'Real Madrid Background.jpg'),
('Inter Milan', '', ''),
('Liverpool FC', 'Liverpool_FC.svg.webp', 'Liverpool background.jpg'),
('Manchester City', 'Manchester_City_FC_badge.svg.png', 'Manchester City background.jpg'),
('Manchester United', 'Manchester_United_FC_crest.svg.png', 'Manchester United background.webp'),
('Maroc', 'frmf.png', ''),
('Mexico', '', ''),
('PSG', 'Paris_Saint-Germain_F.C..svg.png', 'Paris Saint-Germain background.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `favories`
--

CREATE TABLE `favories` (
  `code_client_favorie` int(11) NOT NULL,
  `code_article_favorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `date_feedback` datetime NOT NULL,
  `code_client_feedback` int(11) NOT NULL,
  `code_feedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `code_fournisseur` int(11) NOT NULL,
  `nom_fournisseur` text NOT NULL,
  `tel_fournisseur` varchar(10) NOT NULL,
  `gmail_fournisseur` text NOT NULL,
  `adresse_fournisseur` text NOT NULL,
  `ville_fournisseur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`code_fournisseur`, `nom_fournisseur`, `tel_fournisseur`, `gmail_fournisseur`, `adresse_fournisseur`, `ville_fournisseur`) VALUES
(2, 'test2', '0607080966', 'flan.flan@gmail.com', 'fsfsfefs', 'Casablanca');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE `ventes` (
  `code_client_vente` int(11) NOT NULL,
  `code_article_vente` int(11) NOT NULL,
  `code_vente` int(11) NOT NULL,
  `quantite_vendu` int(11) NOT NULL,
  `prix_total_vente` int(11) NOT NULL,
  `date_vente` datetime NOT NULL,
  `prix_ht_vente` int(11) NOT NULL,
  `tva_vente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`code_client_vente`, `code_article_vente`, `code_vente`, `quantite_vendu`, `prix_total_vente`, `date_vente`, `prix_ht_vente`, `tva_vente`) VALUES
(44, 59, 1, 5, 495, '2023-04-26 12:41:24', 99, 0),
(44, 57, 2, 1, 119, '2023-04-26 12:52:52', 99, 20),
(44, 55, 2, 3, 432, '2023-04-26 12:52:52', 120, 24),
(44, 80, 2, 2, 300, '2023-04-26 12:52:52', 150, 0),
(45, 58, 3, 3, 600, '2023-05-08 11:21:07', 200, 0),
(45, 59, 3, 1, 99, '2023-05-08 11:21:07', 99, 0),
(45, 61, 3, 1, 360, '2023-05-08 11:21:07', 300, 60),
(46, 59, 4, 1, 99, '2023-05-08 11:59:10', 99, 0),
(46, 54, 5, 1, 108, '2023-05-08 12:56:05', 90, 18),
(46, 55, 5, 1, 144, '2023-05-08 12:56:05', 120, 24);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `code_ville` int(11) NOT NULL,
  `nom_ville` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`code_ville`, `nom_ville`) VALUES
(1, 'Casablanca');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`code_achat`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`name_admin`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`code_article`),
  ADD KEY `articles_ibfk_1` (`categorie_article`(768));

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`nom_categorie`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`code_client`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`nom_equipe`);

--
-- Index pour la table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`code_feedback`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`code_fournisseur`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`code_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `code_achat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `code_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `code_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `code_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `code_fournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `code_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
