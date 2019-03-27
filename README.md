# toDoList
Ce TP consiste à créer un web service, Grâce à ce service, nous allons pouvoir afficher l'ensemble des tâches, mais aussi en ajouter, modifier et supprimer.



-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 27 mars 2019 à 11:15
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todo-list`
--

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `taskId` int(11) NOT NULL,
  `madate` varchar(200) COLLATE utf8_german2_ci NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tache` varchar(200) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`taskId`, `madate`, `tache`) VALUES
(19, '2019-01-30 00:00:00', 'travail'),
(20, '2019-01-30 00:00:00', 'travail'),
(21, '2019-01-30 00:00:00', 'travailler'),
(22, '2019-01-30 00:00:00', 'travailler'),
(23, '2019-01-30 00:00:00', 'travailler'),
(24, '2019-01-30 00:00:00', 'travailler'),
(25, '2019-03-27', 'job'),
(26, '2019-03-27', 'job'),
(27, '2019-03-28', 'job2'),
(28, '2019-03-28', 'job2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `taskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

