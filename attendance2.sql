-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 sep. 2020 à 14:28
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attendance2`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `name_profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`iduser`, `nom`, `email`, `mdp`, `tel`, `gender`, `name_profil`) VALUES
(1, 'constant', 'constant@gmail.com', 'd88f27a7c7715ba85c6756380d4a86888335e802', '74053199', 'ma', 'std_att5f637716b2b541600354070_671'),
(2, 'janv', 'janv@gmail.com', 'd140d0d70a7664a7abad6056fc551ab1a19458ce', '00112233', 'ma', 'std_att5f635f2fd35cc1600347951_850'),
(12, 'fev', 'fev@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '22522522', 'fe', 'std_att5f6593ef041dd1600492527_962'),
(13, 'mars', 'mars@gmail.com', 'fd28432f827c8c13d51c966bbe50edeb69eb3e5d', '22555233', 'fe', 'std_att5f65f8e04dc681600518368_121');

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `datesign` date NOT NULL DEFAULT current_timestamp(),
  `timesign` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`id`, `iduser`, `datesign`, `timesign`) VALUES
(1, 1, '2020-09-19', '06:02:15'),
(11, 2, '2020-09-19', '07:10:53'),
(12, 12, '2020-09-19', '07:16:13'),
(13, 13, '2020-09-19', '14:27:32');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `name_teacher` varchar(50) NOT NULL,
  `email_teacher` varchar(50) NOT NULL,
  `mdp_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `name_teacher`, `email_teacher`, `mdp_teacher`) VALUES
(1, 'Memel', 'admin@gmail.com', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `presence`
--
ALTER TABLE `presence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
