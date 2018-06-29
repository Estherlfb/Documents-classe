-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 mai 2018 à 14:56
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evaluation_finale`
--

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(4, 'dada', 'dada', 'ff@ff.fr', 'd'),
(5, 'dada', 'dada', 'dfgdfg@gmail.com', 'da'),
(6, 'ff', 'fr', 'esther.lefebvre31@gmail.com', 'a'),
(16, 'Perendevy', 'Loraine', 'dfgdfg@gmail.com', 'z'),
(17, 'test1', 'test', 'test@test.fr', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_article`
--

DROP TABLE IF EXISTS `evaluation_article`;
CREATE TABLE IF NOT EXISTS `evaluation_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation_article`
--

INSERT INTO `evaluation_article` (`id`, `titre`, `sous_titre`, `date`, `auteur`, `contenu`) VALUES
(7, 'je teste encore', 'pout encore', '2018-05-22', 'michel', 'djtfghgt'),
(8, 'derniÃ¨re', 'pout tjrs', '2018-05-16', 'guigui', 'fsdqfcedrf'),
(9, 'test article', 'pout', '2018-05-23', 'jean mi', 'fdnhbg');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_utilisateurs`
--

DROP TABLE IF EXISTS `evaluation_utilisateurs`;
CREATE TABLE IF NOT EXISTS `evaluation_utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation_utilisateurs`
--

INSERT INTO `evaluation_utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(9, 'fr', 'dfgd', 'esther.lefebvre31@gmail.com', 'e'),
(10, 'fedrfed', 'ferferf', 'hhr@hfgke.fr', 'e'),
(11, 'test2', 'tesf', 'test@test.fr', 't');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
