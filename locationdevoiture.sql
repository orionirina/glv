-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 04 août 2025 à 16:04
-- Version du serveur :  8.0.41-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3-4ubuntu2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `locationdevoiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `CommandesClients`
--

CREATE TABLE `CommandesClients` (
  `id` int NOT NULL,
  `nom` varchar(127) NOT NULL,
  `nom_voiture` varchar(127) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `HeureDebut` time NOT NULL,
  `HeureFin` time NOT NULL,
  `Prix` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ReservationsAccepte`
--

CREATE TABLE `ReservationsAccepte` (
  `id` int NOT NULL,
  `nom` varchar(127) NOT NULL,
  `contact` int NOT NULL,
  `nom_voiture` varchar(127) NOT NULL,
  `DateDebut` varchar(127) NOT NULL,
  `DateFin` varchar(127) NOT NULL,
  `HeureDebut` varchar(128) NOT NULL,
  `HeureFin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `mdp` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mdp`) VALUES
(7, 'Tiantsoa', 'kix@gmail.com', '0110JOKO'),
(18, 'root', 'dfd@gmail.Com', 'tiantsoa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `CommandesClients`
--
ALTER TABLE `CommandesClients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ReservationsAccepte`
--
ALTER TABLE `ReservationsAccepte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `CommandesClients`
--
ALTER TABLE `CommandesClients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReservationsAccepte`
--
ALTER TABLE `ReservationsAccepte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
