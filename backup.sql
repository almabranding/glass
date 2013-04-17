CREATE DATABASE  IF NOT EXISTS `almaglass` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `almaglass`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: borndevelopments.com    Database: almaglass
-- ------------------------------------------------------
-- Server version	5.1.54-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `info` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `img` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `thumb` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `caption` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `video` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`orden`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (94,3,'Exterior-04_155174308.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-04_155174308.jpg','thumb_Exterior-04_155174308.jpg','Exterior-04_155174308.jpg',487,196,NULL),(95,3,'Exterior-06_1662179092.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-06_1662179092.jpg','thumb_Exterior-06_1662179092.jpg','Exterior-06_1662179092.jpg',358,201,NULL),(96,3,'Exterior-07_485074808.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-07_485074808.jpg','thumb_Exterior-07_485074808.jpg','Exterior-07_485074808.jpg',228,128,NULL),(97,3,'Exterior-05_1601339112.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-05_1601339112.jpg','thumb_Exterior-05_1601339112.jpg','Exterior-05_1601339112.jpg',358,276,NULL),(98,3,'Exterior-02_260764140.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-02_260764140.jpg','thumb_Exterior-02_260764140.jpg','Exterior-02_260764140.jpg',358,190,NULL),(99,3,'Exterior-03_2105514935.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-03_2105514935.jpg','thumb_Exterior-03_2105514935.jpg','Exterior-03_2105514935.jpg',228,162,NULL),(100,3,'Exterior-08_1955986827.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-08_1955986827.jpg','thumb_Exterior-08_1955986827.jpg','Exterior-08_1955986827.jpg',616,346,NULL),(101,3,'Exterior-09_1155440469.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-09_1155440469.jpg','thumb_Exterior-09_1155440469.jpg','Exterior-09_1155440469.jpg',487,273,NULL),(102,3,'Exterior-11_1906671977.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-11_1906671977.jpg','thumb_Exterior-11_1906671977.jpg','Exterior-11_1906671977.jpg',228,128,NULL),(103,3,'Exterior-10_347536165.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-10_347536165.jpg','thumb_Exterior-10_347536165.jpg','Exterior-10_347536165.jpg',616,346,NULL),(104,3,'Exterior-12_1002712529.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-12_1002712529.jpg','thumb_Exterior-12_1002712529.jpg','Exterior-12_1002712529.jpg',616,346,NULL),(105,3,'Exterior-01_1468859962.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Exterior-01_1468859962.jpg','thumb_Exterior-01_1468859962.jpg','Exterior-01_1468859962.jpg',616,516,NULL),(106,3,'Materials-01_643593086.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Materials-01_643593086.jpg','thumb_Materials-01_643593086.jpg','Materials-01_643593086.jpg',358,536,NULL),(107,3,'Materials-03_558319426.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Materials-03_558319426.jpg','thumb_Materials-03_558319426.jpg','Materials-03_558319426.jpg',616,908,NULL),(108,3,'Materials_1269715123.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'Materials_1269715123.jpg','thumb_Materials_1269715123.jpg','Materials_1269715123.jpg',228,341,NULL),(109,5,'Interiors-01_632839340.jpg','',0,'Interiors-01_632839340.jpg','thumb_Interiors-01_632839340.jpg','Interiors-01_632839340.jpg',228,128,NULL),(110,5,'Interiors-02_1364418861.jpg','',0,'Interiors-02_1364418861.jpg','thumb_Interiors-02_1364418861.jpg','Interiors-02_1364418861.jpg',228,128,NULL),(111,5,'Interiors-03_907532543.jpg','',0,'Interiors-03_907532543.jpg','thumb_Interiors-03_907532543.jpg','Interiors-03_907532543.jpg',228,128,NULL),(112,5,'Interiors-05_1453638432.jpg','',0,'Interiors-05_1453638432.jpg','thumb_Interiors-05_1453638432.jpg','Interiors-05_1453638432.jpg',487,273,NULL),(113,5,'Interiors-04_1404643305.jpg','',0,'Interiors-04_1404643305.jpg','thumb_Interiors-04_1404643305.jpg','Interiors-04_1404643305.jpg',228,128,NULL),(114,5,'Interiors-06_917594109.jpg','',0,'Interiors-06_917594109.jpg','thumb_Interiors-06_917594109.jpg','Interiors-06_917594109.jpg',487,273,NULL),(115,5,'Interiors-07_28042650.jpg','',0,'Interiors-07_28042650.jpg','thumb_Interiors-07_28042650.jpg','Interiors-07_28042650.jpg',616,346,NULL),(116,5,'Interiors-08_2127885556.jpg','',0,'Interiors-08_2127885556.jpg','thumb_Interiors-08_2127885556.jpg','Interiors-08_2127885556.jpg',616,346,NULL),(117,5,'Interiors-09_279670709.jpg','',0,'Interiors-09_279670709.jpg','thumb_Interiors-09_279670709.jpg','Interiors-09_279670709.jpg',358,201,NULL),(118,5,'Interiors-10_1146570364.jpg','',0,'Interiors-10_1146570364.jpg','thumb_Interiors-10_1146570364.jpg','Interiors-10_1146570364.jpg',487,273,NULL),(119,5,'Interiors-11_1439257973.jpg','',0,'Interiors-11_1439257973.jpg','thumb_Interiors-11_1439257973.jpg','Interiors-11_1439257973.jpg',487,273,NULL),(120,6,'technology-06_2076305404.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-06_2076305404.jpg','thumb_technology-06_2076305404.jpg','technology-06_2076305404.jpg',358,162,NULL),(121,6,'technology-03_1002910511.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-03_1002910511.jpg','thumb_technology-03_1002910511.jpg','technology-03_1002910511.jpg',616,410,NULL),(122,6,'technology-07_1460520683.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-07_1460520683.jpg','thumb_technology-07_1460520683.jpg','technology-07_1460520683.jpg',358,163,NULL),(123,6,'technology-08_378482149.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-08_378482149.jpg','thumb_technology-08_378482149.jpg','technology-08_378482149.jpg',228,103,NULL),(124,6,'technology-09_1455702706.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-09_1455702706.jpg','thumb_technology-09_1455702706.jpg','technology-09_1455702706.jpg',228,129,NULL),(125,6,'technology-05_891965999.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-05_891965999.jpg','thumb_technology-05_891965999.jpg','technology-05_891965999.jpg',358,269,NULL),(126,6,'technology-04_337950112.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse c',0,'technology-04_337950112.jpg','thumb_technology-04_337950112.jpg','technology-04_337950112.jpg',358,229,NULL),(127,7,'Inspiration-01_1443207882.jpg','<p>Imagine living in a cube of water. Seriously... Imagine the calming sunlight dappling though the waves. Imagine the peace and tranquility of floating...<br />\r\nNow imagine, living in the sky.<br />\r\nWithin Glass, these two things become indistinguishable.</p>\r\n\r\n<p>&nbsp;</p>\r\n',0,'Inspiration-01_1443207882.jpg','thumb_Inspiration-01_1443207882.jpg','Inspiration-01_1443207882.jpg',487,290,NULL),(128,7,'Inspiration-03_416253965.jpg','<p>Imagine living in a cube of water. Seriously... Imagine the calming sunlight dappling though the waves. Imagine the peace and tranquility of floating...<br />\r\nNow imagine, living in the sky.<br />\r\nWithin Glass, these two things become indistinguishable.</p>\r\n\r\n<p>&nbsp;</p>\r\n',0,'Inspiration-03_416253965.jpg','thumb_Inspiration-03_416253965.jpg','Inspiration-03_416253965.jpg',358,242,NULL),(129,7,'Inspiration-02_1021300400.jpg','<p>Imagine living in a cube of water. Seriously... Imagine the calming sunlight dappling though the waves. Imagine the peace and tranquility of floating...<br />\r\nNow imagine, living in the sky.<br />\r\nWithin Glass, these two things become indistinguishable.</p>\r\n\r\n<p>&nbsp;</p>\r\n',0,'Inspiration-02_1021300400.jpg','thumb_Inspiration-02_1021300400.jpg','Inspiration-02_1021300400.jpg',616,462,NULL),(130,7,'Inspiration-04_1237024181.jpg','<p>Imagine living in a cube of water. Seriously... Imagine the calming sunlight dappling though the waves. Imagine the peace and tranquility of floating...<br />\r\nNow imagine, living in the sky.<br />\r\nWithin Glass, these two things become indistinguishable.</p>\r\n\r\n<p>&nbsp;</p>\r\n',0,'Inspiration-04_1237024181.jpg','thumb_Inspiration-04_1237024181.jpg','Inspiration-04_1237024181.jpg',487,374,NULL),(132,4,'glass_map_159408272_57707051.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis odio sapien. Sed fringilla tincidunt leo eget sagittis. Praesent dictum risus id velit faucibus eu sollicitudin eros vulputate. Nulla ultricies egestas bibendum. Duis vel mauris sit amet lacus laoreet lobortis sed sit amet ni',0,'glass_map_159408272_57707051.jpg','thumb_glass_map_159408272_57707051.jpg','glass_map_159408272_57707051.jpg',228,297,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intra_users`
--

DROP TABLE IF EXISTS `intra_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intra_users` (
  `userID` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `active` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intra_users`
--

LOCK TABLES `intra_users` WRITE;
/*!40000 ALTER TABLE `intra_users` DISABLE KEYS */;
INSERT INTO `intra_users` VALUES (1,'admin','948662c7529a4c8ad2712ff8710e935b85a79a44','info@imagenation.es','1');
/*!40000 ALTER TABLE `intra_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `url` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'inspiration',0,0,NULL,NULL),(2,'building',1,0,NULL,NULL),(3,'environment',2,0,NULL,NULL),(4,'The Team',4,2,'the+team',1),(6,'Architecture',0,2,'architecture',3),(7,'Area',1,3,'area',4),(8,'Residences',2,2,'residences',5),(9,'Technology',3,2,'technology',6),(10,'Gallery',NULL,1,'gallery',7),(11,'Videos',NULL,1,'videos',8);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `menu` int(11) NOT NULL DEFAULT '0',
  `orden` int(11) NOT NULL DEFAULT '0',
  `content` longtext COLLATE utf8_spanish_ci,
  `template` int(11) DEFAULT '0',
  `description` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'The Team',2,0,'<div class=\"content teamContent\">\r <div class=\"teamCol both\">\r <div>\r <div class=\"teamPic\"><img src=\"/glass/uploads/team01.jpg\" /></div>\r \r <div class=\"teamPic\"><img src=\"/glass/uploads/team02.jpg\" /></div>\r </div>\r \r <div class=\"teamText\">\r <h1>TERRA GROUP</h1>\r \r <p>The Developer</p>\r \r <p>Terra Group formed in 2001, with the ambition to evolve the Miami landscape - and by extension, the lives of the people within it. Terra Group&rsquo;s founder, Pedro Martin, has spent his entire professional life in South Florida, subsequently recognizing the opportunity to enrich and invigorate Miami by creating truly original, exceptional spaces in unexpected places. Together with his son, David, Terra Group has made it their mission to refine (and redefine) the way people could and should live, beyond the norm.</p>\r \r <p>With an in-house team of the very best people in their field &ndash; architects, builders, lawyers, designers - David and Pedro have quickly gained a reputation for creating highly original, high-end residential, commercial and mixed-used projects. However, unlike other developers &ndash; and as Miami residents themselves &ndash; Pedro and David do not simply buy up unwanted pieces of real estate with the hope of giving them a facelift. (After all, that is not progress). Instead, they choose only to work on projects that speak to their imaginations, and to their vision of a new Miami: one which helps people, and places to unlock or realize their full potential. As each project is carefully selected with an individual plan in mind, Terra Group ensures that their work makes a lasting contribution, not just to the landscape, but to the culture of Miami as a whole.</p>\r \r <p>By following their evolutionary instinct to this day, Pedro and David continue to find new opportunities, creating enriching (not to mention award-winning) connections between people and places. With an active involvement in South Florida&rsquo;s charitable, civic, arts and cultural organizations, Terra Group remain acutely aware of how our environment defines us, as much as we define it.</p>\r \r <p>For Terra Group, evolution is not a theory. It is a practice.</p>\r </div>\r </div>\r \r <div class=\"teamCol single\">\r <div class=\"teamPic\"><img src=\"/glass/uploads/team03.jpg\" /></div>\r \r <div class=\"teamText\">\r <h1>RENE GONZALEZ</h1>\r \r <p>The Architect</p>\r \r <p>There&rsquo;s a good chance you&rsquo;ve already heard of Rene Gonzalez and his firm, Rene Gonzalez Architect. If that&rsquo;s the case, then you may well share his taste for subtle contemporary details. Or the way he intentionally blurs the boundaries between the man-made and the natural landscape (what he describes as a &ldquo;design conversation&rdquo;). Or maybe you enjoy the tactility of his work &ndash; how his surprising choice of materials heightens your senses and makes you think about places in new and exciting ways. Perhaps you&rsquo;ve seen him mentioned in Wallpaper* magazine, The New York Times, The Wall Street Journal, Architectural Record, Architectural Digest... Or maybe you own a copy of the contemporary design book, Four Florida Moderns, and love the examples of the firm&rsquo;s work that you saw. What you may not realize is that Rene has been included in more than 150 national and international publications, receiving Metropolitan Home magazine&rsquo;s Home of the Year Award for design excellence in addition to being honored by Conde Nast&rsquo;s House &amp; Garden as one of 50 international designers that represent the future of design. His unique approach has certainly not gone unnoticed by his peers: Rene is the only Miami architect to receive a National American Institute of Architecture Design Award in the last 10 years for a project in South Florida. He is also the first architect in 50 years to be twice honored for Miami projects (in 2011 for Alchemist and in 2006 for Karla). Then there are his two National AIA Honor Awards, a Florida AIA Award, and a total of ten Miami AIA Awards, including the H. Samuel Kruse Silver Medal for Design in 2012 and the Firm of the Year award in 2011. If that wasn&rsquo;t praise enough, he was twice nominated for the Cooper-Hewitt Museum&rsquo;s National Design Award in Architecture.</p>\r \r <p>Then again, it is possible that you have never heard of Rene at all. You might not know that his team was responsible for the Cisneros Fontanals Art Foundation building (a jewel in the urban landscape, with lush vegetation depicted on its glistening glass tile fa&ccedil;ade), or the two Alchemist boutiques on Lincoln Road (one perched in the sky like a floating glass cloud, the other an insulated box nestled into the ground floor). You might not have seen the home on Indian Creek that captures, filters and reflects the water, radiant sun and meditative moon, but you may well have heard that it subsequently became Miami&rsquo;s most expensive residence.</p>\r \r <p>Whether you&rsquo;re aware of Rene&rsquo;s work or not, the whole of Miami has been consciously or unconsciously drawn into his &lsquo;design conversations&rsquo; - engaging our senses, and prompting us to think differently about our surroundings.</p>\r </div>\r </div>\r \r <div class=\"teamCol single\">\r <div class=\"teamPic\"><img src=\"/glass/uploads/team04.jpg\" /></div>\r \r <div class=\"teamText\">\r <h1>RAYMOND JUNGLES</h1>\r \r <p>The Landscape Architect</p>\r \r <p>Words can&rsquo;t really do justice to Raymond&rsquo;s work. You have to see it for yourself. You have to feel it for yourself. After all, that is the plan. Or rather, the design.</p>\r \r <p>From their loft-style studio overlooking the Miami River, Raymond Jungles Inc. has been meticulously bringing their sensuous outdoor spaces to life since 1981. In that time, their work has earned them 35 different design awards, and taken them to eleven different countries - including Antigua, Anguilla, the Bahamas, British Virgin Islands, China, Costa Rica, Mexico, Panama, St. Kitts and Nevis. (Which is just as well, as it&rsquo;s Raymond&rsquo;s inherent passion for local ecologies that informs his work).</p>\r \r <p>During his time at the University of Florida, Raymond&rsquo;s vision was awakened by the work of Brazilian landscape architect, Roberto Burle Marx. And whilst Marx went on to become Raymond&rsquo;s friend and mentor, RJI have continued to push the boundaries of landscape design, creating timeless, inspirational places that bring us all closer to the natural world. By posing the question &ldquo;What should it be?&rdquo; rather than &ldquo;What could it be?&rdquo; Raymond exploits (and capitalizes on) the sculptural potential of nature, allowing his elements to define spaces through their innate shapes and forms. In other words, he gives nature a platform to surprise and inspire us.</p>\r \r <p>But you really do have to see it for yourself.</p>\r </div>\r </div>\r </div>\r \r <div class=\"clr\">&nbsp;</div>\r ',3,'The Team','theteam'),(3,'Architecture',2,0,'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n',1,'','architecture'),(4,'Area',3,0,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis odio sapien. Sed fringilla tincidunt leo eget sagittis. Praesent dictum risus id velit faucibus eu sollicitudin eros vulputate. Nulla ultricies egestas bibendum. Duis vel mauris sit amet lacus laoreet lobortis sed sit amet nisi. Maecenas commodo aliquam euismod.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>MAP LEGEND</h1>\r\n\r\n<div class=\"mapLeyend\">\r\n<ul>\r\n	<li><img alt=\"map\" src=\"/glass/uploads/leyendGlass.jpg\" style=\"float:left\" /></li>\r\n	<li>\r\n	<p>Glass</p>\r\n	</li>\r\n	<li><img alt=\"map\" src=\"/glass/uploads/leyendPark.jpg\" style=\"float:left\" /></li>\r\n	<li>\r\n	<p>Parks</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n\r\n<p>A&nbsp; South Pointe Park<br />\r\nB&nbsp; Pier Park<br />\r\nC&nbsp; Prime 112<br />\r\nD&nbsp; Joe&rsquo;s Stone Crab<br />\r\nE&nbsp; Majory Stoneman Douglas &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Ocean Beach Park<br />\r\nF&nbsp; Smith &amp; Wollensky<br />\r\nG&nbsp; Washington Park<br />\r\nH&nbsp; The Room<br />\r\nI&nbsp;&nbsp;&nbsp; Lummus Park<br />\r\nJ&nbsp;&nbsp; The Wolfsonian-FIU<br />\r\nK&nbsp; Flamingo Park &amp; Pool<br />\r\nL&nbsp;&nbsp; Maurice Gibb Memorial Park<br />\r\nM Lincoln Road<br />\r\nN&nbsp; 21st&nbsp; Street Recreation Center<br />\r\nO&nbsp; Collins Park<br />\r\nP&nbsp; Bass Museu<br />\r\nQ&nbsp; Miami Beach Botanical Garden<br />\r\nR&nbsp; New World Symphony<br />\r\nS&nbsp;&nbsp; Aroma Espresso Bar<br />\r\nT&nbsp;&nbsp; Estiatorio Milos<br />\r\nU&nbsp; Jewish Museum of Florida</p>',2,'Map','area'),(5,'Residences',2,0,'',1,'','residences'),(6,'Technology',2,0,'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n',1,'','technology'),(7,'Gallery',1,0,'<p>Imagine living in a cube of water. Seriously... Imagine the calming sunlight dappling though the waves. Imagine the peace and tranquility of floating...<br />\r\nNow imagine, living in the sky.<br />\r\nWithin Glass, these two things become indistinguishable.</p>\r\n\r\n<p>&nbsp;</p>\r\n',1,'','gallery'),(8,'Videos',1,0,'',4,'','videos');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `last` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `how` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (3,'Dan','Triano','dan.triano@gmail.com',NULL,'pupu',NULL),(4,'','','',NULL,'',''),(5,'','','',NULL,'',''),(6,'','','',NULL,'',''),(7,'ytt','','',NULL,'',''),(8,'Albert','pujals','albert@lemonyellow.com',NULL,'','');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `URL` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` VALUES (1,'Building','building',NULL),(2,'Map','map',NULL),(3,'Page','page',NULL),(4,'Video','video',NULL);
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `passcode` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','passcode','dan@almabranding.com','user'),(3,'born','glass','born','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-04-17 19:20:40
