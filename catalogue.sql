-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 sep. 2022 à 21:07
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
-- Base de données : `catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` char(25) DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `nom_categorie`) VALUES
(1, 'Serie'),
(2, 'Films'),
(3, 'Documentaire');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `idmaison` int(11) NOT NULL AUTO_INCREMENT,
  `nom_maison` char(40) DEFAULT NULL,
  PRIMARY KEY (`idmaison`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`idmaison`, `nom_maison`) VALUES
(1, 'Cspabien'),
(2, 'Netflix'),
(3, 'PrimeVideo');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nomuser` char(25) DEFAULT NULL,
  `prenomuser` char(20) DEFAULT NULL,
  `email` char(25) DEFAULT NULL,
  `password` char(45) DEFAULT NULL,
  `statut` char(5) DEFAULT 'user',
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nomuser`, `prenomuser`, `email`, `password`, `statut`) VALUES
(2, 'TOUNKARA', 'Junior', 'tounkarajunior@gmail.com', 'tounkara', 'user'),
(4, 'MICHEL', 'Dupont', 'micheldupont@gmail.com', 'dupont', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `idvideo` int(11) NOT NULL AUTO_INCREMENT,
  `titre` char(25) DEFAULT NULL,
  `idmaison` int(11) DEFAULT NULL,
  `idcategorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`idvideo`),
  KEY `idmaison` (`idmaison`),
  KEY `idcategorie` (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`idvideo`, `titre`, `idmaison`, `idcategorie`) VALUES
(1, 'Pogbamentary', 3, 3),
(2, 'Casa de Papel', 2, 1),
(3, 'Willow', 1, 2),
(4, 'Queens', 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
