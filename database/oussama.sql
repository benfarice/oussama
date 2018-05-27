-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 27 mai 2018 à 19:17
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `oussama`
--

-- --------------------------------------------------------

--
-- Structure de la table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `assessment_value` int(11) NOT NULL,
  `assessment_day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `assessment`
--

INSERT INTO `assessment` (`id`, `question_id`, `assessment_value`, `assessment_day`, `student_id`) VALUES
(25, 3, 4, '0000-00-00 00:00:00', 2),
(26, 4, 5, '0000-00-00 00:00:00', 2),
(27, 5, 5, '0000-00-00 00:00:00', 2),
(28, 6, 5, '0000-00-00 00:00:00', 2),
(29, 7, 6, '0000-00-00 00:00:00', 2),
(30, 8, 7, '0000-00-00 00:00:00', 2),
(31, 9, 1, '0000-00-00 00:00:00', 2),
(32, 10, 3, '0000-00-00 00:00:00', 2),
(33, 11, 5, '0000-00-00 00:00:00', 2),
(34, 12, 6, '0000-00-00 00:00:00', 2),
(35, 13, 1, '0000-00-00 00:00:00', 2),
(36, 14, 2, '0000-00-00 00:00:00', 2),
(37, 15, 3, '0000-00-00 00:00:00', 2),
(38, 16, 4, '0000-00-00 00:00:00', 2),
(39, 17, 7, '0000-00-00 00:00:00', 2),
(40, 18, 1, '0000-00-00 00:00:00', 2),
(41, 19, 3, '0000-00-00 00:00:00', 2),
(42, 20, 4, '0000-00-00 00:00:00', 2),
(43, 21, 5, '0000-00-00 00:00:00', 2),
(44, 22, 3, '0000-00-00 00:00:00', 2),
(47, 3, 3, '2018-05-11 00:00:00', 3),
(48, 4, 5, '2018-05-11 00:00:00', 3),
(49, 5, 6, '2018-05-11 00:00:00', 3),
(50, 6, 6, '2018-05-11 00:00:00', 3),
(51, 7, 7, '2018-05-11 00:00:00', 3),
(52, 8, 7, '2018-05-11 00:00:00', 3),
(53, 9, 1, '2018-05-11 00:00:00', 3),
(54, 10, 3, '2018-05-11 00:00:00', 3),
(55, 11, 3, '2018-05-11 00:00:00', 3),
(56, 12, 4, '2018-05-11 00:00:00', 3),
(57, 13, 3, '2018-05-11 00:00:00', 3),
(58, 14, 3, '2018-05-11 00:00:00', 3),
(59, 15, 4, '2018-05-11 00:00:00', 3),
(60, 16, 5, '2018-05-11 00:00:00', 3),
(61, 17, 6, '2018-05-11 00:00:00', 3),
(62, 18, 1, '2018-05-11 00:00:00', 3),
(63, 19, 5, '2018-05-11 00:00:00', 3),
(64, 20, 6, '2018-05-11 00:00:00', 3),
(65, 21, 7, '2018-05-11 00:00:00', 3),
(66, 22, 7, '2018-05-11 00:00:00', 3),
(69, 3, 4, '2018-05-01 00:00:00', 4),
(70, 4, 5, '2018-05-01 00:00:00', 4),
(71, 5, 6, '2018-05-01 00:00:00', 4),
(72, 6, 7, '2018-05-01 00:00:00', 4),
(73, 7, 8, '2018-05-01 00:00:00', 4),
(74, 8, 9, '2018-05-01 00:00:00', 4),
(75, 9, 1, '2018-05-01 00:00:00', 4),
(76, 10, 2, '2018-05-01 00:00:00', 4),
(77, 11, 3, '2018-05-01 00:00:00', 4),
(78, 12, 7, '2018-05-01 00:00:00', 4),
(79, 13, 1, '2018-05-01 00:00:00', 4),
(80, 14, 6, '2018-05-01 00:00:00', 4),
(81, 15, 5, '2018-05-01 00:00:00', 4),
(82, 16, 4, '2018-05-01 00:00:00', 4),
(83, 17, 3, '2018-05-01 00:00:00', 4),
(84, 18, 3, '2018-05-01 00:00:00', 4),
(85, 19, 4, '2018-05-01 00:00:00', 4),
(86, 20, 7, '2018-05-01 00:00:00', 4),
(87, 21, 5, '2018-05-01 00:00:00', 4),
(88, 22, 4, '2018-05-01 00:00:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Class_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`Class_id`, `Class_title`) VALUES
(1, 'TDI');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `question_cat`) VALUES
(3, 'Listening Ability', 1),
(4, 'Information Research', 1),
(5, 'Teamwork Ability', 1),
(6, 'Organizing Ability', 1),
(7, 'Empathy', 1),
(8, 'Cleanliness', 1),
(9, 'Eating', 1),
(10, 'Friendliness', 1),
(11, 'Imaginative and Creative Ability', 2),
(12, 'Curiosity', 2),
(13, 'Aestethic Perception ', 2),
(14, 'Concentration', 2),
(15, 'Reading Ability', 3),
(16, 'Expression Ability', 3),
(17, 'English Communication Ability', 3),
(18, 'Practical Ability', 3),
(19, 'Observational Ability', 3),
(20, 'Oppenness to experience ', 4),
(21, 'Extraversion', 4),
(22, 'Agreeableness ', 4),
(23, 'Conscientiousness', 4),
(24, 'Emotional stability ', 4);

-- --------------------------------------------------------

--
-- Structure de la table `questions_category`
--

CREATE TABLE `questions_category` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions_category`
--

INSERT INTO `questions_category` (`id`, `title`) VALUES
(1, 'Sociality'),
(2, 'Natural Talent '),
(3, 'Skills '),
(4, 'Personality ');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `birth_year` int(11) DEFAULT NULL,
  `Parent_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Parent_name` varchar(255) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `parent_phone` varchar(255) NOT NULL,
  `Wechat_ID` varchar(255) NOT NULL,
  `Existing_Customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birth_year`, `Parent_id`, `class_id`, `Gender`, `Parent_name`, `parent_email`, `parent_phone`, `Wechat_ID`, `Existing_Customer`) VALUES
(2, 'fatim zahra', NULL, 1, 1, 2, 'hayashy', 'soka@email.vo', '124578', 'faty', 0),
(3, 'marwa', NULL, 1, 1, 2, 'hayashy', 'soka@email.vo', '124578', 'faty', 0),
(4, 'oussama', NULL, 1, 1, 1, 'oussama', 'oussama@email.com', '2145785', 'oussama', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `Password`, `User_Type`) VALUES
(1, 'youssef', '', '', '123', 1),
(2, 'ahmed', '', '', '202cb962ac59075b964b07152d234b70', 0),
(3, 'ahmed', '', '', '202cb962ac59075b964b07152d234b70', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_cat` (`question_cat`);

--
-- Index pour la table `questions_category`
--
ALTER TABLE `questions_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `Parent_id` (`Parent_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `Class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `questions_category`
--
ALTER TABLE `questions_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`),
  ADD CONSTRAINT `assessment_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`question_cat`) REFERENCES `questions_category` (`id`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`Parent_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Student_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`Class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
