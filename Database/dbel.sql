-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 01 jan. 2020 à 23:44
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbel`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id_account` int(15) NOT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_account`, `full_name`, `email`, `password`, `date`, `type`) VALUES
(1, 'Oumaiyma', 'oumaintissar@gmail.com', '123azerty', '2001-01-20', 'S'),
(30, 'Admin', 'administrator@ssjs.ss', 'azert', '2001-01-20', 'A'),
(31, 'Professor', 'prof@prof.ma', 'prof', '2001-01-20', 'P'),
(32, 'Oumaiyma', 'o.intissar@mundiapolis.ma', 'azerty', '2001-01-20', 'S');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `label_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label_category`) VALUES
(1, 'informatique'),
(2, 'cuisine'),
(3, 'dance');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id_course` int(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(100) NOT NULL,
  `syllabus` varchar(100) NOT NULL,
  `id_prof` int(15) NOT NULL,
  `image_course` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `syllabus`, `id_prof`, `image_course`, `id_category`) VALUES
(1, 'PHP Course', 'loremmmmaaat epssommaatat', 'syllabussat', 31, 'image_course', 1),
(2, 'HTML Course', 'loremmmmaaat epssommaatatloremmmmaaat epssommaatat', 'syllabussat', 31, 'image_course', 1);

-- --------------------------------------------------------

--
-- Structure de la table `course_student`
--

CREATE TABLE `course_student` (
  `id_stud` int(15) NOT NULL,
  `id_course` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id_evaluation` int(15) NOT NULL,
  `threshold` int(15) NOT NULL,
  `id_course` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_result`
--

CREATE TABLE `evaluation_result` (
  `id_stud` int(15) NOT NULL,
  `id_evaluation` int(15) NOT NULL,
  `note` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `id_evaluation` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `response`
--

CREATE TABLE `response` (
  `id_response` int(15) NOT NULL,
  `response` varchar(60) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `id_question` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id_video` int(15) NOT NULL,
  `path` varchar(30) NOT NULL,
  `id_course` int(15) NOT NULL,
  `description_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
