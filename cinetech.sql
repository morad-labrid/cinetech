-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 02 juin 2021 à 10:22
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `cinetech`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_element` int(11) DEFAULT NULL,
  `avis` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_user`, `id_element`, `avis`, `date`) VALUES
(1, 5, 238, 'trop bien', '2021-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_element` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_user`, `id_element`, `type`) VALUES
(1, 5, 775996, 'movie'),
(2, 5, 60735, 'tv'),
(3, 5, 724089, 'movie'),
(4, 5, 791373, 'movie'),
(5, 5, 83880, 'tv'),
(6, 5, 278, 'movie'),
(7, 5, 19404, 'movie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(5, 'nadir', 'nadir@ziane.com', '$2y$10$KuIsmnGvY5/R0ryNI7fZTut43/4zTaQNAueYPJq4UbdA9cwrODl2C'),
(4, 'sami', 'samir@bensalma.com', '$2y$10$PwJtljRsiMRyORqTNKGLRO.KdrdgKdn7Nh9X5CUp247jDeIaiwjSy'),
(6, 'elias', 'elias@ziane.com', '$2y$10$SLrcaisSZWxPq8W4go4Pi.DR8cocNJQHIQ/0m0JrEQcEcOw/eDize'),
(7, 'weh', 'weh@weh.com', '$2y$10$uH5Bz4b6gr8YxAcyCgBSCeCJ1y5YdyOt2gqYOXAmIdxU7ntValiYG'),
(8, 'samir', 'samir@samir.com', '$2y$10$tE9ZUtpe.fzIn.fGbpI0ReuflUmHqTWCrozK49SoYYTxgLHRw/qzi'),
(9, 'robin', 'robin@robin.com', '$2y$10$91HeCVy9of.EsRp1E.mL..J7uHDhgIy92QYw7kpYEYJ7PBqNsv/nu'),
(10, 'moradd', 'morad@momo.com', '$2y$10$Tx5w01BNJsFiM8/MiCjWxOeg7TssKTrQU2HGK/yGzAgKR78xXWYl6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
