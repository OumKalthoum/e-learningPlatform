-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 jan. 2020 à 20:57
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_elearning`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_account` int(15) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_account`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_account`, `full_name`, `email`, `password`, `date`, `type`, `active`) VALUES
(1, 'Oumaiyma', 'oumaintissar@gmail.com', '123azerty', '2001-01-20', 'S', 0),
(30, 'Admin', 'administrator@ssjs.ss', 'azert', '2001-01-20', 'A', 1),
(31, 'Professor', 'prof@prof.ma', 'prof', '2001-01-20', 'P', 1),
(32, 'Oumaiyma', 'o.intissar@mundiapolis.ma', 'azerty', '2001-01-20', 'S', 0),
(33, 'JJ', 'chanchafjaouhara@gmail.com', '123', '2001-12-20', 'S', 0),
(34, 'jaouhara', 'chanchafjaouhara@gmail.com', '11934d224d605bdbea519d5dec2d065ce803d5f9', '2020-01-13', 'P', 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `label_category` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `label_category`, `description`, `active`) VALUES
(1, 'informatique', '', 1),
(2, 'Kitchen', 'This category is related to cooking and bakery courses only!', 1),
(3, 'Dance ', 'zegez', 1),
(6, 'Java beginners course  ', 'Java programming course', 1),
(13, 'Java beginners course	', '', 1),
(14, 'Python', '', 1),
(15, 'Sign language', '', 1),
(16, 'Design patterns', '', 0),
(17, 'Category 1', 'zegeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id_chapter` int(15) NOT NULL AUTO_INCREMENT,
  `path_video` varchar(5000) NOT NULL,
  `id_course` int(15) NOT NULL,
  `title_chapter` varchar(2000) NOT NULL,
  `description_chapter` varchar(50000) NOT NULL,
  PRIMARY KEY (`id_chapter`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `path_video`, `id_course`, `title_chapter`, `description_chapter`) VALUES
(1, 'v1.mp4', 1, 'The alphabets in BSL', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(2, 'v2.mp4', 1, 'Commun signs related to school', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(3, '../videos/v3.mp4', 1, 'Commun signs related to travel', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(4, '../videos/v3.mp4', 2, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', 'Lorem ipsum dolor sit amet, malis option sit ei, ex sed timeam discere, his ex vocibus insolens. Vix in mentitum appetere repudiare, causae virtute sea ex. Vis ferri malis aeque eu, vis quot suavitate molestiae ei. Summo regione admodum ne pri. Ut oblique invenire mei. Has at mutat exerci eleifend, sit graeci verear eleifend ne.\r\n\r\nCu vel dolore consulatu, mel solet feugiat et, vix munere imperdiet ne. Eu regione nostrum intellegam eum. Sea novum tollit no. Facete delenit singulis eos ne, malorum imperdiet ad quo, malis quaerendum mel ei. Labore audire epicurei ex his, mel ad accusam cotidieque.\r\n\r\nEx sea altera primis. Ut semper aeterno tincidunt per, ad offendit theophrastus eam. Falli feugait vel et, debet legere tincidunt et vix. '),
(5, '../videos/v1.mp4', 2, 'erunt philosophatibus vim, id requtam.', 'Cu vel dolore consulatu, mel solet feugiat et, vix munere imperdiet ne. Eu regione nostrum intellegam eum. Sea novum tollit no. Facete delenit singulis eos ne, malorum imperdiet ad quo, malis quaerendum mel ei. Labore audire epicurei ex his, mel ad accusam cotidieque.\r\n\r\nEx sea altera primis. Ut semper aeterno tincidunt per, ad offendit theophrastus eam. Falli feugait vel et, debet legere tincidunt et vix. Affert lobortis moderatius no est. Purto graeci postulant mea no, mea et vide malorum neglegentur. Vix dolorem deserunt philosophia te, ex clita ignota blandit cum, veri meliore democritum et cum.\r\n\r\nVeniam everti accusam vis ex. Ei mel semper integre, per cu movet corrumpit. Ei ullum electram necessitatibus vim, id reque zril appellantur sea, agam summo usu no. Cum agam ornatus reprehendunt ea, pro ea justo volumus, et alia invidunt his. Usu te vide magna, ut tale accumsan nec. In vel fugit deco'),
(6, '../videos/v2.mp4', 3, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', '-----------------------------------------------------'),
(7, '../videos/v1.mp4', 3, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', '----------------------------------------------________________________________________----------------------------'),
(8, '../videos/v3.mp4', 3, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', '----------------Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨____________--------------------Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨Ã¨___________'),
(9, '../videos/v3.mp4', 4, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', 'gezg'),
(10, '../videos/v1.mp4', 4, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', 'zegg'),
(11, 'add_chapter.php', 1, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', 'cnvkdsn'),
(12, 'course_list.php', 2, 'Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.', 'BB'),
(13, 'add_course.php', 3, 'eryry', 'fezre'),
(14, 'add_exam.php', 3, 'eryry', 'gdsegez'),
(15, 'add_course.php', 3, 'eryry', 'sdv'),
(16, 'add_course.php', 3, 'eryry', 'sdv');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `syllabus` mediumtext NOT NULL,
  `id_prof` int(15) NOT NULL,
  `image_course` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `lunched` tinyint(1) NOT NULL DEFAULT '0',
  `release_date` date DEFAULT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `syllabus`, `id_prof`, `image_course`, `id_category`, `active`, `lunched`, `release_date`) VALUES
(1, 'BSL  ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '&lt;div id=&quot;Content&quot; style=&quot;margin: 0px; padding: 0px; position: relative; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: center;&quot;&gt;&lt;div id=&quot;Translation&quot; style=&quot;margin: 0px 28.7917px; padding: 0px; text-align: left;&quot;&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198); font-weight: bold;&quot;&gt;The standard Lorem Ipsum passage, used since the 1500s&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;1914 translation by H. Rackham&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;1914 translation by H. Rackham&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;hr style=&quot;margin: 0px; padding: 0px; border-top: 0px; clear: both; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: center;&quot;&gt;&lt;br&gt;', 1, 'i1.png', 15, 1, 1, '2020-01-12'),
(2, 'Demo course 1', 'Cu vel dolore consulatu, mel solet feugiat et, vix munere imperdiet ne. Eu regione nostrum intellegam eum. Sea novum tollit no. Facete delenit sin', '&lt;p&gt;Lorem ipsum dolor sit amet, malis option sit ei, ex sed timeam discere, his ex vocibus insolens. Vix in mentitum appetere repudiare, causae virtute sea ex. Vis ferri malis aeque eu, vis quot suavitate molestiae ei. Summo regione admodum ne pri. Ut oblique invenire mei. Has at mutat exerci eleifend, sit graeci verear eleifend ne.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Cu vel dolore consulatu, mel solet feugiat et, vix munere imperdiet ne. Eu regione nostrum intellegam eum. Sea novum tollit no. Facete delenit singulis eos ne, malorum imperdiet ad quo, malis quaerendum mel ei. Labore audire epicurei ex his, mel ad accusam cotidieque.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Ex sea altera primis. Ut semper aeterno tincidunt per, ad offendit theophrastus eam. Falli feugait vel et, debet legere tincidunt et vix. Affert lobortis moderatius no est. Purto graeci postulant mea no, mea et vide malorum neglegentur. Vix dolorem deserunt philosophia te, ex clita ignota blandit cum, veri meliore democritum et cum.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Veniam everti accusam vis ex. Ei mel semper integre, per cu movet corrumpit. Ei ullum electram necessitatibus vim, id reque zril appellantur sea, agam summo usu no. Cum agam ornatus reprehendunt ea, pro ea justo volumus, et alia invidunt his. Usu te vide magna, ut tale accumsan nec. In vel fugit decore quodsi, case eruditi adolescens ne vim.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;At mutat accusamus voluptatum mei, sed ut inermis recteque elaboraret. Cu cum idque audiam dignissim, cum agam scripta cu, no cum modus dicam. In pro officiis vulputate, dolor maluisset et vix. Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam.&lt;/p&gt;', 1, 'i1.png', 16, 0, 1, '2020-01-13'),
(3, 'Demo course 2', '______________________    ', '&lt;p&gt;AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA&lt;/p&gt;', 1, 'i1.png', 1, 1, 1, '2020-01-13'),
(4, 'SPAGUETTIII', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum &lt;span style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;passages&lt;/span&gt;, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 1, 'v.txt', 2, 1, 0, '2020-01-13'),
(5, 'CVCVC', 'dddddddddddddddddddddddddddddddd', '&lt;p&gt;ddddddddddd&lt;/p&gt;', 1, 'add_course.php', 1, 1, 1, '2020-01-13'),
(6, 'java course', 'BDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD', '&lt;p&gt;JKNNNNNNNNNNNNNNNNNNNNNNNNNNNN&lt;/p&gt;', 1, 'add_chapter.php', 3, 1, 1, '2020-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
CREATE TABLE IF NOT EXISTS `course_student` (
  `id_stud` int(15) NOT NULL,
  `id_course` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id_evaluation` int(15) NOT NULL AUTO_INCREMENT,
  `threshold` int(15) NOT NULL,
  `id_course` int(15) NOT NULL,
  PRIMARY KEY (`id_evaluation`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id_evaluation`, `threshold`, `id_course`) VALUES
(1, 5, 1),
(3, 4, 2),
(4, 3, 3),
(5, 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_result`
--

DROP TABLE IF EXISTS `evaluation_result`;
CREATE TABLE IF NOT EXISTS `evaluation_result` (
  `id_evaluation` int(15) NOT NULL,
  `note` int(15) NOT NULL,
  `id_stud` int(15) NOT NULL,
  PRIMARY KEY (`id_evaluation`,`id_stud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(15) NOT NULL AUTO_INCREMENT,
  `description` varchar(60000) DEFAULT NULL,
  `id_evaluation` int(15) NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `description`, `id_evaluation`) VALUES
(1, 'BSL firsl letter of the Alphabets', 1),
(2, 'Lorem ipsum dolor sit amet, malis o?', 2),
(3, 'Lorem ipsum dolor sit amet, malis o?', 3),
(4, 'rdolor maluisset et vix. Pri novum graecis eu. Vide libris nostrud vel in, nec te alii oportere conceptam ?', 3),
(5, 'or maluisset et vix. Pri novum m?', 3),
(6, 'que eu, vis quot suavitate ?', 3),
(7, 'cripta cu, no cum modus dicam. In pro officiis vulputate, dolor ma?', 3),
(8, 'errrrrrrrrrttttttttttttttttttterrrrrrrrrrrrrrrr', 4),
(9, 'etertertertrettzzaaazaazaaezaezeze', 4),
(10, '2334234', 5),
(11, '2334234', 5),
(12, '2334234', 5),
(13, '2334234', 5),
(14, '2334234', 5);

-- --------------------------------------------------------

--
-- Structure de la table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id_response` int(15) NOT NULL AUTO_INCREMENT,
  `response` varchar(20000) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `id_question` int(15) NOT NULL,
  PRIMARY KEY (`id_response`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `response`
--

INSERT INTO `response` (`id_response`, `response`, `status`, `id_question`) VALUES
(1, 'A', 1, 1),
(2, 'G', 0, 1),
(3, 'Y', 0, 1),
(4, 'Asery ggr', 1, 2),
(5, 'Qfergr', 0, 2),
(6, 'Smkge ggteir r', 0, 2),
(7, 'Asery ggr', 1, 3),
(8, 'Qfergr', 0, 3),
(9, 'Smkge ggteir r', 0, 3),
(10, 'a', 1, 4),
(11, 'b', 0, 4),
(12, 'c', 0, 4),
(13, 'AZE', 1, 5),
(14, 'DFG', 0, 5),
(15, 'TYU', 0, 5),
(16, 'AQW', 1, 6),
(17, 'ZSX', 0, 6),
(18, 'EDC', 0, 6),
(19, 'qs vtilo', 1, 7),
(20, 'fbft', 0, 7),
(21, 'ereg ergr l_lu_fgg ddf', 0, 7),
(22, 'rertertr', 1, 8),
(23, 'retertet erter', 0, 8),
(24, 'ertertererte erte', 0, 8),
(25, 'eze', 1, 9),
(26, 'ezeez', 0, 9),
(27, 'zezeze', 0, 9),
(28, '2334234', 1, 10),
(29, 'Qfergr', 0, 10),
(30, 'Smkge ggteir r', 0, 10),
(31, '2334234', 1, 11),
(32, '2334234', 0, 11),
(33, '2334234', 0, 11),
(34, '2334234', 1, 12),
(35, '2334234', 0, 12),
(36, '2334234', 0, 12),
(37, '2334234', 1, 13),
(38, '2334234', 0, 13),
(39, '2334234', 0, 13),
(40, '2334234', 1, 14),
(41, '2334234', 0, 14),
(42, '2334234', 0, 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
