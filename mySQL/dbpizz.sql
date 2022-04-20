-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 15 août 2021 à 16:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbpizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `role` varchar(45) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mdp`, `role`) VALUES
(1, 'admin', '$2y$10$Yb4anBvv8J1aDvMlS0uODO2Oad0DeReW2T4AIAMmwJGCi7YSrasEi', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `publie` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `pseudo`, `date`, `comment`, `note`, `publie`) VALUES
(1, 'acheteur1', '2021-07-23', 'Délicieux, je recommande.', 5, 1),
(5, 'acheteur2', '2021-07-15', 'Pizza trop cuite !', 2, 1),
(6, 'acheteur3', '2021-07-19', 'Livreur en retard !', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pizzas`
--

INSERT INTO `pizzas` (`id`, `nom`, `ingredient`, `prix`) VALUES
(1, 'Régina', 'Sauce tomate, fromage, jambon et champignons.', 10.8),
(2, 'Supreme', 'Sauce tomate, fromage, jambon, champignons, lardons, artichaut, chorizo, crème fraîche.', 13.1),
(3, 'Janmi', 'Sauce tomate, fromage, jambon, salami.', 10.8),
(4, 'Chorizo', 'Sauce tomate, fromage, chorizo.', 10.6),
(5, 'Hawaï', 'Sauce tomate, fromage, jambon, ananas.', 10.8),
(6, 'Napolitaine', 'Sauce tomate, fromage, anchois, olives, câpres.', 11.3),
(7, 'Flammekueche', 'Crème fraîche, fromage, lardons, oignons, champignons.', 11.3),
(8, 'Meline', 'Sauce tomate, fromage, lardons, chorizo, oeuf.', 11.6),
(9, 'Charcuterie', 'Sauce tomate, fromage, jambon, lardons, chorizo.', 11.6),
(10, '4 saisons de luxe', 'Sauce tomate, fromage, champignons, oignons, poivrons, artichaut.', 11.8),
(11, 'Brésilienne', 'Sauce tomate, fromage, viande hachée, chorizo, merguez.', 11.9),
(12, 'Best of', 'Sauce tomate, fromage, champignons, jambon, lardons, oignons, artichaut, bacon, chorizo.', 13.6),
(13, 'Saint-jacques', 'Crème fraîche, fromage, noix de Saint-Jacques, beurre d’escargots.', 14.1),
(14, '4 Fromages', 'Sauce tomate, fromage, maroilles, chèvre, gorgonzola, mozzarella.', 12.2),
(15, 'Grand-mère', 'Crème fraîche, lardons, oignons, bacon, pommes de terre, reblochon.', 13.2),
(16, 'Spéciale Pizza Perso', 'Sauce tomate ou Crème fraîche + 4 ingrédients au choix parmi cette carte.', 14.2),
(17, 'Bourguignonne ', 'Sauce tomate, fromage, viande hachée, oignons, oeuf, champignons\r\n\r\n', 12.1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
