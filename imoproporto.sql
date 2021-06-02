-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 02 juin 2021 à 12:48
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imoproporto`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `preambule` text NOT NULL,
  `prix` int(100) NOT NULL,
  `id_auteur` int(100) NOT NULL,
  `superficie` int(100) NOT NULL,
  `achat/location` varchar(30) NOT NULL,
  `quatier` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demand`
--

CREATE TABLE `demand` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `quatier` varchar(100) NOT NULL,
  `superficie` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `achat/location` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `preambule` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `Prenoms` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `date_naiss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`id`, `pseudo`, `nom`, `Prenoms`, `pass`, `date_naiss`) VALUES
(1, 'a', 'b', 'c', '', '2021-06-17'),
(1, 'a', 'b', 'c', '', '2021-06-17'),
(2, 'fkkf', 'kfk', 'fkfk', '', '2021-06-24'),
(3, 'EE', 'EE', 'RR', '', '2021-06-16'),
(4, 'EE', 'EE', 'RR', '', '2021-06-16'),
(5, 'EE', 'EE', 'RR', '', '2021-06-16'),
(6, 'EE', 'EE', 'RR', '', '2021-06-16'),
(7, 'EE', 'EE', 'RR', '', '2021-06-16'),
(8, 'EE', 'EE', 'RR', '', '2021-06-16'),
(9, 'r', 'r', 'r', '', '2021-06-23'),
(10, 'l', 'm', 'Ã¹', '$2y$10$r88DCnvk0xgCPK5Ny0D6u.8fclsBAGVBfQVtYWpqI4FtAA/HLOUou', '2021-06-01'),
(11, 'toto', 'toto', 'toto', '$2y$10$w9iPJnBnVV49WxMQjUsxy.bLi7ltvEqaEgt.jTnG7JT90slqBFXmG', '2021-06-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
