-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2020 at 12:14 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_account` int(15) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `full_name`, `email`, `password`, `date`, `type`) VALUES
(1, 'Oumaiyma', 'oumaintissar@gmail.com', '123azerty', '2001-01-20', 'S'),
(30, 'Admin', 'administrator@ssjs.ss', 'azert', '2001-01-20', 'A'),
(31, 'Professor', 'prof@prof.ma', 'prof', '2001-01-20', 'P'),
(32, 'Oumaiyma', 'o.intissar@mundiapolis.ma', 'azerty', '2001-01-20', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `label_category` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `label_category`, `description`, `active`) VALUES
(1, 'informatique', '', 1),
(2, 'Kitchen', 'This category is related to cooking and bakery courses only!', 1),
(3, 'Dance ', '', 1),
(6, 'Java beginners course  ', 'Java programming course', 1),
(13, 'Java beginners course	', '', 1),
(14, 'Python', '', 1),
(15, 'Sign language', '', 1),
(16, 'Design patterns', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id_chapter` int(15) NOT NULL AUTO_INCREMENT,
  `path_video` varchar(2000) NOT NULL,
  `id_course` int(15) NOT NULL,
  `title_chapter` varchar(100) NOT NULL,
  `description_chapter` varchar(500) NOT NULL,
  PRIMARY KEY (`id_chapter`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `path_video`, `id_course`, `title_chapter`, `description_chapter`) VALUES
(1, 'videos/v1.mp4', 1, 'The alphabets in BSL', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(2, 'videos/v2.mp4', 1, 'Commun signs related to school', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(3, 'videos/v3.mp4', 1, 'Commun signs related to travel', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `syllabus` mediumtext NOT NULL,
  `id_prof` int(15) NOT NULL,
  `image_course` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `lunched` tinyint(1) NOT NULL DEFAULT '0',
  `release_date` date NOT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `syllabus`, `id_prof`, `image_course`, `id_category`, `active`, `lunched`, `release_date`) VALUES
(1, 'BSL  ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '&lt;div id=&quot;Content&quot; style=&quot;margin: 0px; padding: 0px; position: relative; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: center;&quot;&gt;&lt;div id=&quot;Translation&quot; style=&quot;margin: 0px 28.7917px; padding: 0px; text-align: left;&quot;&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198); font-weight: bold;&quot;&gt;The standard Lorem Ipsum passage, used since the 1500s&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;1914 translation by H. Rackham&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;&lt;span style=&quot;color: rgb(57, 132, 198);&quot;&gt;Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;&lt;/p&gt;&lt;h3 style=&quot;margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px;&quot;&gt;1914 translation by H. Rackham&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;&quot;&gt;&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;hr style=&quot;margin: 0px; padding: 0px; border-top: 0px; clear: both; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: center;&quot;&gt;&lt;br&gt;', 1, 'i1.png', 15, 1, 0, '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
CREATE TABLE IF NOT EXISTS `course_student` (
  `id_stud` int(15) NOT NULL,
  `id_course` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id_evaluation` int(15) NOT NULL AUTO_INCREMENT,
  `threshold` int(15) NOT NULL,
  `id_course` int(15) NOT NULL,
  PRIMARY KEY (`id_evaluation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id_evaluation`, `threshold`, `id_course`) VALUES
(1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_result`
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
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(15) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `id_evaluation` int(15) NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `description`, `id_evaluation`) VALUES
(1, 'BSL firsl letter of the Alphabets', 1);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id_response` int(15) NOT NULL AUTO_INCREMENT,
  `response` varchar(60) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `id_question` int(15) NOT NULL,
  PRIMARY KEY (`id_response`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id_response`, `response`, `status`, `id_question`) VALUES
(1, 'A', 1, 1),
(2, 'G', 0, 1),
(3, 'Y', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(15) NOT NULL AUTO_INCREMENT,
  `path` varchar(30) NOT NULL,
  `id_course` int(15) NOT NULL,
  `description_video` varchar(100) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
