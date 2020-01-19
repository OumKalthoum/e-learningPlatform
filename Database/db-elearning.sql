-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 19 jan. 2020 à 17:08
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
-- Base de données :  `db-elearning`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id_account` int(15) NOT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_account`, `full_name`, `email`, `password`, `date`, `type`, `active`) VALUES
(1, 'John Taylor', 'j@taylor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-01-19', 'P', 1),
(2, 'Super Admin', 's@admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-12-31', 'A', 1),
(3, 'Professor', 'p@professor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-12-31', 'P', 1),
(5, 'Oumaiyma INTISSAR', 'e@etud', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-01-19', 'S', 1),
(6, 'Lucius', 'l@Lucius', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-01-14', 'P', 1),
(8, 'Charles', 'c@charles', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-01-08', 'P', 1),
(9, 'Oumaiyma INTISSAR', 's@student', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-01-19', 'S', 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `label_category` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label_category`, `description`, `active`) VALUES
(1, 'Informatique', 'Informatique', 1),
(2, 'Kitchen', 'This category is related to cooking and bakery courses only!', 1),
(3, 'Dance ', 'Dance ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id_chapter` int(15) NOT NULL,
  `path_video` varchar(5000) NOT NULL,
  `id_course` int(15) NOT NULL,
  `title_chapter` varchar(2000) NOT NULL,
  `description_chapter` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `path_video`, `id_course`, `title_chapter`, `description_chapter`) VALUES
(3, 'v1.mp4', 1, 'What is Deep Learning?', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(4, 'v2.mp4', 1, ' Artificial Neural Networks', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(5, 'v3.mp4', 1, 'How do Neural Networks work?', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(6, 'v1.mp4', 1, 'How do Neural Networks learn?', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(7, 'v3.mp4', 4, 'Course Introduction ', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(8, 'v2.mp4', 4, 'Variable Assignments ', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(9, 'v1.mp4', 4, 'Introduction to Python Data Types ', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(10, 'mov_bbb.mp4', 5, 'Understand the HOW of cooking, before thinking of the WHAT to cook.', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit'),
(11, 'mov_bbb.mp4', 5, 'Understand the WHAT to cook.', 'Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id_course` int(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `syllabus` mediumtext NOT NULL,
  `id_prof` int(15) NOT NULL,
  `image_course` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `lunched` tinyint(1) NOT NULL DEFAULT 0,
  `release_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `syllabus`, `id_prof`, `image_course`, `id_category`, `active`, `lunched`, `release_date`) VALUES
(1, 'Deep Learning from A to Z', 'Learn how to create Deep Learning algorithms in Python by experts in Machine Learning & Data science.', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;There are five reasons why the Deep Learning course from A to Z is different and stands out compared to the other courses that can be found here and there:&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;1. ROBUST STRUCTURE&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The most important thing that we focused on is giving the course a robust structure.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Deep Learning is a very broad and complex field, which makes it difficult to approach.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This is why we have grouped the lessons into two large parts, representing the two fundamental branches of Deep Learning: Supervised Deep Learning and Unsupervised Deep Learning.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Then, each part is divided into three separate algorithms.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We have determined that this is the best structure for learning Deep Learning.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;2. INTUITIVE LESSONS&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Most courses and books start directly with theory, then math, then code ... except they forget to explain what is perhaps most important:&amp;nbsp;&amp;nbsp;&lt;/font&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;why you do what you do&lt;/span&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Not in Deep Learning from A to Z. We focus first on the&amp;nbsp;&lt;/font&gt;&lt;/font&gt;&lt;em&gt;intuition&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;of the concepts behind the algorithms.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;These intuitive lessons will make it much easier for you to understand the techniques.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Then, when you move on to the more practical lessons with code, you will easily visualize each step of the algorithms and especially why you should execute each step.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;3. EXCITING PROJECTS&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Aren\'t you tired of finding the same datasets all the time all the time?&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;It becomes tiresome.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This is why in this course we have chosen to use real data sets and to solve real real problems.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;(Not like the iris flower data or the super classic example of classification of figure as we see everywhere).&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this course, we will solve six problems:&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;ul style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to predict the departure of a client using Artificial Neural Networks.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to recognize images using Convolutional Neural Networks.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to predict the price of an action using Recurrent Neural Networks.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to carry out a fraud investigation using Adaptive Auto Cards.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to create a recommendation system using Boltzmann Machines.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;How to win the&amp;nbsp;&amp;nbsp;&lt;/font&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;$ 1 million Netflix prize&lt;/span&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;with stacked auto encoders *.&lt;/font&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;* Auto-encoders are a very recent Deep Learning technique that did not exist a few years ago.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This method is never explained in sufficient detail.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;4. CODE EXERCISES&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In Deep Learning from A to Z, we code with you.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Each practical lesson starts with a blank page, and together we progress line by line so that you can follow and understand each step of the code.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In addition, the code is structured in such a way that you can easily download it and apply it directly to your own projects.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We explain how you can change the code to suit YOUR data, or how to optimize the algorithms for your needs so that you get the results you are looking for.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This course therefore has direct application for your professional career.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;5. DIRECT SUPPORT&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Have you ever taken a course or read a book where you have tons of questions ... that go unanswered?&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Well this is not the case of course.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We are committed to making this course the best Deep Learning course on the planet.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;With this commitment comes the responsibility of being there constantly for you when you need help.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Since we also have a life and clients, a team of professional Data Scientists is there to help you.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Ask a question and you will get an answer within 48 hours no matter how complex your problem is.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We are here to ensure your success and your success.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;--- The tools ---&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Tensorflow and PyTorch are the most widely used open-source tools in Deep Learning.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this course, you will learn how to use both!&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Tensorflow was developed by Google and is used for example in their voice recognition system, in Google Photos, Gmail, Google Search, and in quite a few other applications.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Many companies use Tensorflow, such as AirBnB, Airbus, eBay, Intel, Uber, and hundreds of others.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;PyTorch is just as powerful and was developed by researchers at Nvidia and at the universities of Stanford, Oxford, and ParisTech.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Companies like Twitter, Saleforce or Facebook use PyTorch.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;So which one is better and why?&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this course, you will learn how to use both and therefore in which situations Tensorflow or PyTorch is more suitable.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;As the lessons progress, we will compare the two and give you tips and ideas to remember when to use them.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;These tools are still very recent and were created just two years ago.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This is what we are talking about when we tell you that this course uses the most advanced Deep Learning tools!&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;--- Even more tools ---&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;em&gt;Theano&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;is another open-source tool for Deep Learning.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;It is similar to Tensorflow in its usage, but we will talk about it anyway.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;em&gt;Keras&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;is a library that allows you to implement Deep Learning models.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;It combines both Theano and Tensorflow and allows you to create powerful and complex models of Deep Learning in just a few lines of code.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This is what will allow you to have a global vision of what you are creating.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The code you produce will be clear and structured thanks to this library, which will allow you to have a good intuition and an excellent understanding of what you are doing.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;--- More more more tools!&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;---&lt;/font&gt;&lt;/font&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;em&gt;Scikit-learn&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;is the ultimate Machine Learning library.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We will use it:&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;ul style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;to assess the performance of our models with the best technique:&amp;nbsp;&lt;/font&gt;&lt;em&gt;k-fold cross validation&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;to improve our models by optimizing the parameters.&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;to prepare our data so that our models can learn in the best conditions.&lt;/font&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Obviously, let\'s not forget to name Python, which is the tool on which this course is based.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Each section will give you hours and hours of practice in that language.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In addition, this course uses Numpy to perform mathematical calculations and manipulate multidimensional arrays, as well as Matplotlib to plot graphs and visualize our results, then Pandas to import and manipulate datasets efficiently.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;--- Who should attend ?&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;---&lt;/font&gt;&lt;/font&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;As you may have noticed, there are many tools in the world of Deep Learning.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this course, we wanted to show you the most important in a progressive way so that your knowledge in Deep Learning is at the forefront at the end of the course.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;If you are a complete beginner in Deep Learning&lt;/span&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;, then you will find this course particularly useful.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Deep Learning from A to Z is structured in such a way that you won\'t find yourself stuck with unnecessary code or absurd mathematical complexities.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The idea is to start applying Deep Learning techniques as quickly as possible in the course and learn quickly from scratch.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Each lesson will gradually make you more confident in your abilities.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;If you already have experience in Deep Learning&lt;/span&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;, then in this course you will find inspiring and very practical-oriented reminders.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Thanks to Deep Learning from A to Z, you will master cutting-edge algorithms (some of which did not even exist two years ago) and gain practical experience on challenges from the real world.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The apps will give you inspiration to further explore your Deep Learning skills.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;--- Real world case studies ---&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Mastering Deep Learning techniques is not just about knowing your intuition and the tools.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;It\'s also about being able to apply what you learn to real situations in order to get measurable and useful results.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This is why this course will guide you through six exciting challenges:&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;# 1 Prediction of a client\'s departure&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this part, we will present data from the database of a bank wishing to predict whether a customer will remain loyal to him in the next six months or not.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The data consists of an identifier, credit score, gender, age, if the customer has a credit card, etc.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;For six months, the bank has accumulated data on these customers.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Now your goal is to create an artificial neural network that can predict, using the demographic, geographic and transactional data provided, whether a customer will leave the bank or not.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this problem, your employer also asked you to establish a ranking among the customers to know which ones are more likely to leave.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;To answer this problem, you will use a Deep Learning model which is based on a probabilistic approach.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;If you reach the end of this project, you will allow the bank to directly adapt its offers for customers who are at risk of leaving.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Thanks to your Deep Learning model, the bank will therefore be able to reduce its customer departures.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;# 2 Image recognition&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this part, you will create a convolutional neural network that is able to detect objects in an image.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We will use a Deep Learning model capable of recognizing a cat from a dog.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Beyond this problem, this model will be able to generalize and detect any object (we will show you how) simply by changing the images we give it as input.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;For example, you can reuse the model on a set of brain images to detect whether the image contains a tumor or not.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;But if you prefer to stay on small cats and dogs, then you can have fun taking a picture of your favorite little animal and your model will be able to predict whether it is a dog or a cat.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We tested it ourselves!&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;# 3 Share price prediction&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In this part, you will create one of the most powerful Deep Learning models.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;In fact, it is the closest model to&amp;nbsp;&lt;/font&gt;&lt;/font&gt;&lt;em&gt;artificial intelligence&lt;/em&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&amp;nbsp;.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Why ?&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Because this model has a long-term memory, just like we humans do.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This branch of Deep Learning includes recurrent neural networks.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Classic RNNs have a short term memory and have never been very popular because of this.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;But recently improvements in recurrent neural networks have given birth to LSTMs (RNNs with large short-term memory) which have completely changed the situation.&amp;nbsp;&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Thus, you will learn to implement this very powerful model through a challenge consisting in predicting the real price of the Google share.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Researchers from Stanford University have worked on this challenge too and we will try to do as well as they do.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;# 4 Fraud detection&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;A recent Markets &amp;amp; Markets study estimated that the fraud detection and prevention market will reach $ 33.19 billion in 2021. It is a huge industry and the demand for advanced skills in Deep Learning can only continue to grow. .&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The challenge will be to detect cases of fraud in credit card applications.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;You will create a Deep Learning model for a bank from a dataset containing information about customers requesting a special credit card.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This customer data will allow you to detect potential fraud in requests.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;At the end of the challenge, you will be able to output an explicit list of clients who have potentially cheated by filling out their request forms.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;# 5 &amp;amp; 6 Recommendation systems&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Between Amazon product suggestions and Netflix movie recommendations, more and more recommendation systems are popping up everywhere.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The specialists who create them are among the highest paid Data Scientists on the planet.&lt;/font&gt;&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We will be working on a dataset that has exactly the same characteristics as Netflix data: a ton of movies, thousands of users, and the ratings they give on the movies they watched.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The ratings range from 1 to 5, just like in the Netflix competition, which makes the recommendation system more complex than simply saying whether the user &quot;liked&quot; or &quot;disliked&quot; the film.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Your recommendation system will be able to predict the ratings of movies that users have not yet watched.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;By ranking the predictions from 5 to 1, your Deep Learning model can then recommend the films that each user is most likely to like.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Creating such a recommendation system is a huge challenge so we will do it in two tests, that is to say that we will test two types of Deep Learning models.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The first model consists of a deep Boltzmann machine and will be discussed in Chapter 5. In the second model, we will use auto-encoders.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Both are simple to understand, which does not take away from their ability.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Then you can directly apply your system to yourself or your friends.&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;The movie list will be complete enough for you to write down the movies you\'ve watched, and all you have to do is rotate the model to find out which movie to watch!&amp;nbsp;&lt;/font&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Your referral system will be the answer to parties when you can\'t decide what to watch, and it will continue to learn if you tell it it liked the recommendation.&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;--- In summary ---&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;This course is filled with intuitive lessons and practical exercises to practice in real situations.&lt;/font&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;We wanted to make this course the best it can be and we are particularly excited to share it with you and see you progress in this wonderful world of Deep Learning.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Kirill, Hadelin &amp;amp; Charles&lt;/font&gt;&lt;/p&gt;&lt;div class=&quot;audience&quot; data-purpose=&quot;course-audience&quot; style=&quot;margin-top: 20px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;audience__title&quot; style=&quot;font-size: 18px; font-weight: 600; margin: 0px 0px 10px;&quot;&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Who this course is for:&lt;/font&gt;&lt;/div&gt;&lt;ul class=&quot;audience__list&quot; style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 10px; padding: 0px 0px 0px 35px;&quot;&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Anyone interested in Deep Learning&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Students with a high school level of mathematics wishing to learn Deep Learning&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;People who know the basics of Machine Learning or Deep Learning (classic algos like linear regression, logistic regression and more advanced subjects like artificial neural networks), but wishing to explore the field of Deep Learning further&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Anyone who is not comfortable with the code but who is interested in Deep Learning and wants to apply it on datasets&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;University students wishing to start a career in Data Science&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Data analysts wishing to improve their knowledge in Deep Learning&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;People wishing to change jobs and become data scientists&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;People who want to add more value to their business using Deep Learning technology&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Entrepreneurs wishing to understand how to use Deep Learning tools in their business&lt;/font&gt;&lt;/li&gt;&lt;li&gt;&lt;font style=&quot;vertical-align: inherit;&quot;&gt;Entrepreneurs wishing to take advantage over their competitors in their industry by using the advanced tools of Deep Learning&lt;/font&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;', 1, 'course_3.jpg', 1, 1, 1, '2020-01-14');
INSERT INTO `course` (`id_course`, `name`, `description`, `syllabus`, `id_prof`, `image_course`, `id_category`, `active`, `lunched`, `release_date`) VALUES
(4, 'Complete Python Bootcamp: Go from zero to hero in ', 'Learn Python like a Professional! Start from the basics and go all the way to creating your own applications and games!', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;Become a Python Programmer and learn one of employer\'s most requested skills of 2018!&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;This is the&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;most comprehensive, yet straight-forward, course for the Python programming language on Udemy!&lt;/span&gt;&amp;nbsp;Whether you have never programmed before, already know basic syntax, or want to learn about the advanced features of Python, this course is for you! In this course we will&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;teach you Python 3.&amp;nbsp;&lt;/span&gt;(Note, we also provide older&amp;nbsp;Python 2 notes in case you need them)&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;With&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;over 100 lectures&lt;/span&gt;&amp;nbsp;and more than 20 hours of video this comprehensive course leaves no stone unturned! This course includes quizzes, tests, and homework assignments as well as 3 major projects to create a Python project portfolio!&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;We cover a wide variety of topics, including:&lt;/p&gt;&lt;ul style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;li&gt;Command Line Basics&lt;/li&gt;&lt;li&gt;Installing Python&lt;/li&gt;&lt;li&gt;Running Python Code&lt;/li&gt;&lt;li&gt;Strings&lt;/li&gt;&lt;li&gt;Lists&amp;nbsp;&lt;/li&gt;&lt;li&gt;Dictionaries&lt;/li&gt;&lt;li&gt;Tuples&lt;/li&gt;&lt;li&gt;Sets&lt;/li&gt;&lt;li&gt;Number Data Types&lt;/li&gt;&lt;li&gt;Print Formatting&lt;/li&gt;&lt;li&gt;Functions&lt;/li&gt;&lt;li&gt;Scope&lt;/li&gt;&lt;li&gt;args/kwargs&lt;/li&gt;&lt;li&gt;Built-in Functions&lt;/li&gt;&lt;li&gt;Debugging and Error Handling&lt;/li&gt;&lt;li&gt;Modules&lt;/li&gt;&lt;li&gt;External Modules&lt;/li&gt;&lt;li&gt;Object Oriented Programming&lt;/li&gt;&lt;li&gt;Inheritance&lt;/li&gt;&lt;li&gt;Polymorphism&lt;/li&gt;&lt;li&gt;File I/O&lt;/li&gt;&lt;li&gt;Advanced Methods&lt;/li&gt;&lt;li&gt;Unit Tests&lt;/li&gt;&lt;li&gt;and much more!&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;This course comes with a&amp;nbsp;&lt;span style=&quot;font-weight: 700;&quot;&gt;30 day money back guarantee!&lt;/span&gt;&amp;nbsp;If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!&lt;/span&gt;&lt;/p&gt;&lt;div class=&quot;audience&quot; data-purpose=&quot;course-audience&quot; style=&quot;margin-top: 20px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;audience__title&quot; style=&quot;font-size: 18px; font-weight: 600; margin: 0px 0px 10px;&quot;&gt;Who this course is for:&lt;/div&gt;&lt;ul class=&quot;audience__list&quot; style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 10px; padding: 0px 0px 0px 35px;&quot;&gt;&lt;li&gt;Beginners who have never programmed before.&lt;/li&gt;&lt;li&gt;Programmers switching languages to Python.&lt;/li&gt;&lt;li&gt;Intermediate Python programmers who want to level up their skills!&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;', 3, 'course_4.jpg', 1, 1, 0, '2020-01-19'),
(5, 'Essential Cooking Skills', 'Cook like a pro, master the basic techniques used in the World\'s culinary industry! Key Techniques - Part 1', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;When one takes up cooking, the amount of information, recipes and suggestions can be overwhelming. It\'s easy to get lost in a&amp;nbsp;sea of recipes, to spend time pondering WHAT to cook and miss one of the most important aspects when it comes to preparing a great meal - the HOW. The real success of a dish comes from&amp;nbsp;correct preparation techniques&amp;nbsp;just as much as it comes from high quality ingredients,&amp;nbsp;flavour combinations or creative plating.&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;In this course I gathered some of the most important 17 techniques that any cook, anywhere in the world,&amp;nbsp;be they amateur or professional,&amp;nbsp;absolutely needs to use in his kitchen. They have been developed and perfected&amp;nbsp;over&amp;nbsp;generations by&amp;nbsp;professional chefs and, for many years, have been set as golden&amp;nbsp;standards in international cuisine.&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; word-break: break-word; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;I have done my utmost to make this an effective and pleasant experience for every&amp;nbsp;student by combining clear practical&amp;nbsp;demonstrations and useful information. This is just the first of a series of courses to follow, which I will develop&amp;nbsp;taking&amp;nbsp;into account all the feedback from my students and&amp;nbsp;the topics they are interested in.&amp;nbsp;&lt;/p&gt;&lt;div class=&quot;audience&quot; data-purpose=&quot;course-audience&quot; style=&quot;margin-top: 20px; color: rgb(41, 48, 59); font-family: &amp;quot;open sans&amp;quot;, &amp;quot;helvetica neue&amp;quot;, Helvetica, Arial, sans-serif; font-size: 15px;&quot;&gt;&lt;div class=&quot;audience__title&quot; style=&quot;font-size: 18px; font-weight: 600; margin: 0px 0px 10px;&quot;&gt;Who this course is for:&lt;/div&gt;&lt;ul class=&quot;audience__list&quot; style=&quot;list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 10.5px; margin-left: 10px; padding: 0px 0px 0px 35px;&quot;&gt;&lt;li&gt;The course is addressed to both amateur and young professional cooks who want to start their journey in the kitchen from a solid foundation of cooking techniques and methods.&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;', 6, 'course_8.jpg', 2, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `course_student`
--

CREATE TABLE `course_student` (
  `id_stud` int(15) NOT NULL,
  `id_course` int(15) NOT NULL,
  `Avancement` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course_student`
--

INSERT INTO `course_student` (`id_stud`, `id_course`, `Avancement`) VALUES
(1, 2, 20),
(9, 4, 0),
(9, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id_evaluation` int(15) NOT NULL,
  `threshold` int(15) NOT NULL,
  `id_course` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id_evaluation`, `threshold`, `id_course`) VALUES
(1, 3, 2),
(2, 5, 3),
(3, 5, 4),
(4, 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_result`
--

CREATE TABLE `evaluation_result` (
  `id_evaluation` int(15) NOT NULL,
  `note` int(15) NOT NULL,
  `id_stud` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(15) NOT NULL,
  `description` varchar(60000) DEFAULT NULL,
  `id_evaluation` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `description`, `id_evaluation`) VALUES
(1, 'Question', 1),
(2, 'Question', 1),
(3, 'Question', 1),
(4, 'Question', 1),
(5, 'Question', 1),
(6, 'What is regression?', 2),
(7, 'What is clustering ?', 2),
(8, 'What is Scala', 2),
(9, 'Is this a correct answer ?', 2),
(10, 'This application is good ?', 2),
(11, '', 3),
(12, '', 3),
(13, '', 3),
(14, '', 3),
(15, '', 3),
(16, 'Do you love cooking ?', 4),
(17, 'Do you know Chef Nusret ?', 4),
(18, 'Do you like cook or eat ?', 4),
(19, 'What is rank of Moroccan cuisine ?', 4),
(20, 'French cuisine is famous by ', 4);

-- --------------------------------------------------------

--
-- Structure de la table `response`
--

CREATE TABLE `response` (
  `id_response` int(15) NOT NULL,
  `response` varchar(20000) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `id_question` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `response`
--

INSERT INTO `response` (`id_response`, `response`, `status`, `id_question`) VALUES
(1, 'A', 1, 1),
(2, 'G', 0, 1),
(3, 'E', 0, 1),
(4, 'EE', 1, 2),
(5, 'EEEE', 0, 2),
(6, 'DD', 0, 2),
(7, 'RGGG', 1, 3),
(8, '33R', 0, 3),
(9, 'RQuestion', 0, 3),
(10, 'Question', 1, 4),
(11, 'Question', 0, 4),
(12, 'Question', 0, 4),
(13, 'Question', 1, 5),
(14, 'Question', 0, 5),
(15, 'Question', 0, 5),
(16, 'Machine learning technique', 1, 6),
(17, 'Application Android', 0, 6),
(18, 'Is a singer', 0, 6),
(19, 'Machine learning method', 1, 7),
(20, 'Programming language', 0, 7),
(21, 'Biomedical specialty', 0, 7),
(22, 'Language for machine learning', 1, 8),
(23, 'Python Library', 0, 8),
(24, 'Java Library', 0, 8),
(25, 'Yes', 1, 9),
(26, 'No', 0, 9),
(27, 'IDK', 0, 9),
(28, 'Yes !', 1, 10),
(29, 'Yes !', 0, 10),
(30, 'Yes !', 0, 10),
(31, '', 1, 11),
(32, '', 0, 11),
(33, '', 0, 11),
(34, '', 1, 12),
(35, '', 0, 12),
(36, '', 0, 12),
(37, '', 1, 13),
(38, '', 0, 13),
(39, '', 0, 13),
(40, '', 1, 14),
(41, '', 0, 14),
(42, '', 0, 14),
(43, '', 1, 15),
(44, '', 0, 15),
(45, '', 0, 15),
(46, 'Yes', 1, 16),
(47, 'No', 0, 16),
(48, 'Sometimes', 0, 16),
(49, 'Yes', 1, 17),
(50, 'No', 0, 17),
(51, 'I heard', 0, 17),
(52, 'Eat', 1, 18),
(53, 'Cook', 0, 18),
(54, 'Twice', 0, 18),
(55, 'Second', 1, 19),
(56, 'First', 0, 19),
(57, '4th', 0, 19),
(58, 'Confit de canard', 1, 20),
(59, 'Tajine', 0, 20),
(60, 'Sushi', 0, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id_chapter`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Index pour la table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id_stud`,`id_course`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id_evaluation`);

--
-- Index pour la table `evaluation_result`
--
ALTER TABLE `evaluation_result`
  ADD PRIMARY KEY (`id_evaluation`,`id_stud`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Index pour la table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id_chapter` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id_evaluation` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `response`
--
ALTER TABLE `response`
  MODIFY `id_response` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
