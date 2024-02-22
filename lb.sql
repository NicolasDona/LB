-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 22 fév. 2024 à 10:11
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lb`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

CREATE TABLE `appointments` (
  `id_appointment` int NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `id_user` int NOT NULL,
  `id_timeslot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`id_appointment`, `appointment_date`, `id_user`, `id_timeslot`) VALUES
(7, '2024-02-21', 20, 14),
(8, '2024-02-23', 21, 6),
(9, '2024-03-28', 21, 15),
(10, '2024-02-22', 22, 9),
(11, '2024-03-22', 22, 11);

-- --------------------------------------------------------

--
-- Structure de la table `appointments_services`
--

CREATE TABLE `appointments_services` (
  `id_appointment` int NOT NULL,
  `id_service` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `appointments_services`
--

INSERT INTO `appointments_services` (`id_appointment`, `id_service`) VALUES
(8, 15),
(11, 17),
(9, 18),
(7, 22),
(10, 29);

-- --------------------------------------------------------

--
-- Structure de la table `book2`
--

CREATE TABLE `book2` (
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `removal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `stock` int DEFAULT NULL,
  `promostick` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `archived_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id_service` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_service`, `type`, `picture`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Couleur', 'couleur.jpg', 34.00, '2024-02-16 10:04:57', '2024-02-16 10:04:57'),
(2, 'Couleur Balayage', 'balayage.jpg', 66.00, '2024-02-16 10:04:57', '2024-02-16 10:04:57'),
(3, 'Mèches', 'meches.jpg', 56.00, '2024-02-16 10:09:52', '2024-02-16 10:09:52'),
(6, 'Permanente', 'permanente.jpg', 12.00, '2024-02-16 10:10:06', '2024-02-16 10:10:06'),
(8, 'Décoloration', 'decoloration.jpg', 40.00, '2024-02-16 10:16:47', '2024-02-16 10:16:47'),
(9, 'Shampoing', 'shampoing.jpg', 4.00, '2024-02-16 10:16:53', '2024-02-16 10:16:53'),
(11, 'SHP coupe brushing', 'brushing.jpg', 33.00, '2024-02-16 10:21:21', '2024-02-16 10:21:21'),
(12, 'Ombré coupe coiffage', 'ombre.jpg', 43.50, '2024-02-16 10:24:48', '2024-02-16 10:24:48'),
(13, 'Chignon cocktail', 'chignon.jpg', 40.00, '2024-02-16 10:28:01', '2024-02-16 10:28:01'),
(14, 'SHP coupe coiffage', 'simple.jpg', 31.50, '2024-02-16 10:30:16', '2024-02-16 10:30:16'),
(15, 'Patine', NULL, 23.00, '2024-02-16 10:47:56', '2024-02-16 10:47:56'),
(16, 'Couleur KYO', NULL, 35.00, '2024-02-16 10:47:56', '2024-02-16 10:47:56'),
(17, 'Forfait chignon de mariage', NULL, 120.00, '2024-02-16 10:50:06', '2024-02-16 10:50:06'),
(18, 'Ombré coupe coiffage', NULL, 97.00, '2024-02-16 10:50:06', '2024-02-16 10:50:06'),
(19, 'Mèches bicolore', NULL, 66.00, '2024-02-16 10:52:42', '2024-02-16 10:52:42'),
(20, 'SHP coupe mèche bonnet coiffage', NULL, 75.00, '2024-02-16 10:55:24', '2024-02-16 10:55:24'),
(21, 'SHP coupe perm coiffage', NULL, 62.00, '2024-02-16 10:55:24', '2024-02-16 10:55:24'),
(22, 'SHP coupe coiffage', NULL, 31.50, '2024-02-16 11:15:13', '2024-02-16 11:15:13'),
(23, 'Forfait fille -10 ans', NULL, 15.00, '2024-02-16 11:18:55', '2024-02-16 11:18:55'),
(24, 'Forfait fille -18 ans', NULL, 28.00, '2024-02-16 11:18:55', '2024-02-16 11:18:55'),
(25, 'Forfait garçon -10 ans', NULL, 10.00, '2024-02-16 11:21:17', '2024-02-16 11:21:17'),
(26, 'Forfait garçon -18 ans', NULL, 14.50, '2024-02-16 11:21:17', '2024-02-16 11:21:17'),
(27, 'Forfait coupe homme', NULL, 17.50, '2024-02-16 11:23:30', '2024-02-16 11:23:30'),
(28, 'Barbe', NULL, 14.80, '2024-02-16 11:23:30', '2024-02-16 11:23:30'),
(29, 'Permanente homme', NULL, 31.00, '2024-02-16 11:26:51', '2024-02-16 11:26:51'),
(30, 'Mèches homme', NULL, 31.00, '2024-02-16 11:26:51', '2024-02-16 11:26:51'),
(31, ' H SHP perm coupe coiffage', NULL, 45.00, '2024-02-16 11:29:05', '2024-02-16 11:29:05'),
(32, 'H SHP coupe mèches coiffage', NULL, NULL, '2024-02-16 11:29:05', '2024-02-16 11:29:05');

-- --------------------------------------------------------

--
-- Structure de la table `timeslots`
--

CREATE TABLE `timeslots` (
  `id_timeslot` int NOT NULL,
  `slot` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `timeslots`
--

INSERT INTO `timeslots` (`id_timeslot`, `slot`) VALUES
(2, '09:00:00'),
(3, '09:30:00'),
(4, '10:00:00'),
(5, '10:30:00'),
(6, '11:00:00'),
(7, '11:30:00'),
(8, '12:00:00'),
(9, '12:30:00'),
(10, '13:00:00'),
(11, '13:30:00'),
(12, '14:00:00'),
(13, '14:30:00'),
(14, '15:00:00'),
(15, '15:30:00'),
(16, '16:00:00'),
(17, '16:30:00'),
(18, '17:00:00'),
(19, '17:30:00'),
(20, '18:00:00'),
(21, '18:30:00'),
(22, '19:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phonenumber` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `archived_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `lastname`, `firstname`, `password`, `email`, `phonenumber`, `address`, `is_admin`, `created_at`, `updated_at`, `archived_at`) VALUES
(14, 'Albert', 'Martin', '$2y$10$ZJOpx2LdgU3no9/1L1nDm.sTL3EOI25wp1fKWyO.nbljLZ.WxvIia', 'albertmartin@gmail.com', '+33614215798', '45 rue de Béthencourtel, 60250 Bury', 1, '2024-02-14 08:50:34', '2024-02-14 08:50:34', NULL),
(17, 'Dupont', 'Jean', '$2y$10$UMbbn2Dt.K/6Ke59oD2F5.G1J4aovRnFX3nEObfsWaE/1LF/UEyPe', 'test@mail.com', '+33614213030', '45 Rue de l&#39;étoile 75000 Paris', 0, '2024-02-15 09:28:28', '2024-02-15 09:28:28', NULL),
(20, 'Dubois', 'Patrick', '$2y$10$gaxTRJt83erRkfeMs0ysduTdjWkZ0H8Iw9O6UlFWRCX1dEjSRM81e', 'toto@mail.com', '+33614213366', '36 Rue Charles de Gaulle 75003 Paris', 0, '2024-02-15 16:13:49', '2024-02-15 16:13:49', NULL),
(21, 'Boulard', 'Olivier', '$2y$10$ZtrIGJUonZ1pg6YcgSFxIuLu.4R5idKv5TOUxFwSfe.SS8NrI9APO', 'olivier.boulard@gmail.com', '0344565269', '265 Rue Albert Martin, 60250 Bury', 1, '2024-02-19 19:40:43', '2024-02-19 19:40:43', NULL),
(22, 'Jean-Jacques', 'Goldman', '$2y$10$mL5.fm9EqBd/El78uWe1V.JAOkrZI7W8qmyR4BRuHgrKyYde3MTKG', 'goldman@gmail.com', '+33614217210', '45 rue Danton 60250 Bury', 0, '2024-02-20 18:21:55', '2024-02-20 18:21:55', NULL),
(23, 'Mendes', 'Carlos', '$2y$10$ioc8SkAixfOwc6UlvjxXru.1a1FB.tk77keprf.8VJZJzHM7FGYEK', 'cmendes@gmail.com', '+33614217750', '45 rue de Béthencourtel 54000 Chiron', 0, '2024-02-21 15:46:08', '2024-02-21 15:46:08', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_timeslot` (`id_timeslot`);

--
-- Index pour la table `appointments_services`
--
ALTER TABLE `appointments_services`
  ADD PRIMARY KEY (`id_appointment`,`id_service`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `book2`
--
ALTER TABLE `book2`
  ADD PRIMARY KEY (`id_user`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `timeslots`
--
ALTER TABLE `timeslots`
  ADD PRIMARY KEY (`id_timeslot`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id_appointment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `timeslots`
--
ALTER TABLE `timeslots`
  MODIFY `id_timeslot` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`id_timeslot`) REFERENCES `timeslots` (`id_timeslot`);

--
-- Contraintes pour la table `appointments_services`
--
ALTER TABLE `appointments_services`
  ADD CONSTRAINT `appointments_services_ibfk_1` FOREIGN KEY (`id_appointment`) REFERENCES `appointments` (`id_appointment`),
  ADD CONSTRAINT `appointments_services_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `book2`
--
ALTER TABLE `book2`
  ADD CONSTRAINT `book2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `book2_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
