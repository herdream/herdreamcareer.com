-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.63-0ubuntu0.11.10.1


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema herideasinmotion
--

CREATE DATABASE IF NOT EXISTS herideasinmotion;
USE herideasinmotion;

--
-- Definition of table `herideasinmotion`.`Badge`
--

DROP TABLE IF EXISTS `herideasinmotion`.`Badge`;
CREATE TABLE  `herideasinmotion`.`Badge` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BadgeName` varchar(50) NOT NULL,
  `Image` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='list of badges';

--
-- Dumping data for table `herideasinmotion`.`Badge`
--

/*!40000 ALTER TABLE `Badge` DISABLE KEYS */;
LOCK TABLES `Badge` WRITE;
INSERT INTO `herideasinmotion`.`Badge` VALUES  (1,'MOCK-UP','/assets/img/badges/mockup.png'),
 (2,'Mockup Badge','/assets/img/badges/mockup.png');
UNLOCK TABLES;
/*!40000 ALTER TABLE `Badge` ENABLE KEYS */;


--
-- Definition of table `herideasinmotion`.`Question`
--

DROP TABLE IF EXISTS `herideasinmotion`.`Question`;
CREATE TABLE  `herideasinmotion`.`Question` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` varchar(150) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Comment` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Questions for Quiz';

--
-- Dumping data for table `herideasinmotion`.`Question`
--

/*!40000 ALTER TABLE `Question` DISABLE KEYS */;
LOCK TABLES `Question` WRITE;
INSERT INTO `herideasinmotion`.`Question` VALUES  (1,'buildyourhamburger/Quiz1/Q1.php','A','what is HTML'),
 (2,'buildyourhamburger/Quiz1/Q2.php','1','what is CSS'),
 (3,'buildyourhamburger/Quiz1/Q3.php','first','what is FLASH'),
 (4,'buildyourhamburger/Quiz2/Q2.php','none','what is HEAD'),
 (5,'buildyourhamburger/Quiz2/Q1.php','B','what is BODY TAG');
UNLOCK TABLES;
/*!40000 ALTER TABLE `Question` ENABLE KEYS */;


--
-- Definition of table `herideasinmotion`.`Quiz`
--

DROP TABLE IF EXISTS `herideasinmotion`.`Quiz`;
CREATE TABLE  `herideasinmotion`.`Quiz` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BadgeID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Master List of Quizzes';

--
-- Dumping data for table `herideasinmotion`.`Quiz`
--

/*!40000 ALTER TABLE `Quiz` DISABLE KEYS */;
LOCK TABLES `Quiz` WRITE;
INSERT INTO `herideasinmotion`.`Quiz` VALUES  (1,1,'Beginner HTML Quiz',1),
 (2,1,'Advanced HTML Quiz',1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `Quiz` ENABLE KEYS */;


--
-- Definition of table `herideasinmotion`.`QuizQuestion`
--

DROP TABLE IF EXISTS `herideasinmotion`.`QuizQuestion`;
CREATE TABLE  `herideasinmotion`.`QuizQuestion` (
  `QuizID` int(11) NOT NULL,
  `QuestionID` int(11) NOT NULL,
  `QuestionSeq` int(11) NOT NULL,
  PRIMARY KEY (`QuizID`,`QuestionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='links quizzes to questions';

--
-- Dumping data for table `herideasinmotion`.`QuizQuestion`
--

/*!40000 ALTER TABLE `QuizQuestion` DISABLE KEYS */;
LOCK TABLES `QuizQuestion` WRITE;
INSERT INTO `herideasinmotion`.`QuizQuestion` VALUES  (1,1,1),
 (1,2,2),
 (1,3,3),
 (2,3,1),
 (2,4,2);
UNLOCK TABLES;
/*!40000 ALTER TABLE `QuizQuestion` ENABLE KEYS */;


--
-- Definition of table `herideasinmotion`.`Workshop`
--

DROP TABLE IF EXISTS `herideasinmotion`.`Workshop`;
CREATE TABLE  `herideasinmotion`.`Workshop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='master list of workshops';

--
-- Dumping data for table `herideasinmotion`.`Workshop`
--

/*!40000 ALTER TABLE `Workshop` DISABLE KEYS */;
LOCK TABLES `Workshop` WRITE;
INSERT INTO `herideasinmotion`.`Workshop` VALUES  (1,'HTML Hamburger',1),
 (2,'Mockup Your Shoe',1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `Workshop` ENABLE KEYS */;


--
-- Definition of table `herideasinmotion`.`WorkshopQuiz`
--

DROP TABLE IF EXISTS `herideasinmotion`.`WorkshopQuiz`;
CREATE TABLE  `herideasinmotion`.`WorkshopQuiz` (
  `WorkshopID` int(11) NOT NULL,
  `QuizID` int(11) NOT NULL,
  `QuizSeq` int(11) NOT NULL,
  `CompletePath` varchar(150) NOT NULL,
  PRIMARY KEY (`WorkshopID`,`QuizID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herideasinmotion`.`WorkshopQuiz`
--

/*!40000 ALTER TABLE `WorkshopQuiz` DISABLE KEYS */;
LOCK TABLES `WorkshopQuiz` WRITE;
INSERT INTO `herideasinmotion`.`WorkshopQuiz` VALUES  (1,1,1,'/quiz/buildyourhamburger/Quiz1/complete.php'),
 (2,2,1,'/quiz/buildyourhamburger/Quiz1/complete.php'),
 (1,2,2,'/quiz/buildyourhamburger/Quiz1/complete.php');
UNLOCK TABLES;
/*!40000 ALTER TABLE `WorkshopQuiz` ENABLE KEYS */;


--
-- Definition of procedure `herideasinmotion`.`GetQuizForWorkshop`
--

DROP PROCEDURE IF EXISTS `herideasinmotion`.`GetQuizForWorkshop`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='' */ $$
CREATE DEFINER=`her`@`%` PROCEDURE  `herideasinmotion`.`GetQuizForWorkshop`()
BEGIN
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
