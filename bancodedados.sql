CREATE DATABASE  IF NOT EXISTS `belchior` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `belchior`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: belchior
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lojas`
--

DROP TABLE IF EXISTS `lojas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lojas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_brecho` varchar(50) NOT NULL,
  `localizacao` varchar(500) DEFAULT NULL,
  `avaliacao` float DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `produtos` set('R','M','A','C') DEFAULT NULL,
  `contato` int DEFAULT NULL,
  `link_site` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lojas`
--

LOCK TABLES `lojas` WRITE;
/*!40000 ALTER TABLE `lojas` DISABLE KEYS */;
INSERT INTO `lojas` VALUES (1,'Sonho Brechó',NULL,NULL,NULL,'R,A,C',NULL,'https://www.instagram.com/sonho_brecho/'),(2,'Ai, Que Lindo!',NULL,NULL,NULL,'R,A,C',NULL,'https://www.instagram.com/aiquelindo.brecho/'),(3,'Uzzadesapego ','https://www.google.com.br/maps?hl=pt-br&sxsrf=ALeKk01wvAx09yC95FPF8_risa-SurBA8g:1629161339924&gsas=1&client=safari&lsig=AB86z5XTgQ_Dl25-D7QJ7Zbsxmk5&kgs=e4111db9904b67cd&shndl=-1&entrypoint=sh/x/kp/local&q=RUA.+Jos%C3%A9+Brito+Lisboa,+60+-+Tabuleiro+do+Martins&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjVlOXYx4',NULL,NULL,'R,A,C',NULL,' https://www.instagram.com/uzzadesapego/'),(5,'bsb.brecho','Rua 25 sul lote 11',NULL,NULL,'R,A,C',NULL,'https://instagram.com/bsb.brecho?utm_medium=copy_link'),(6,'BrechóMMix',NULL,NULL,NULL,'R,M,A,C',NULL,'https://instagram.com/brechommix?utm_medium=copy_link'),(7,'Frôzinha Brechó',NULL,NULL,NULL,'R,A,C',NULL,'http://www.instagram.com/frozinha.brecho'),(8,'Brechoanate',NULL,NULL,NULL,'R,A,C',NULL,'https://instagram.com/brechoanate?utm_medium=copy_link'),(9,'AMARELO brechó',NULL,NULL,NULL,'R,A,C',NULL,'https://www.instagram.com/amareloxbrecho'),(10,'Brechó Ki Achado ',NULL,NULL,NULL,'R',NULL,'https://www.instagram.com/brecho_ki_achado/?hl=pt-br'),(11,'To Face Brechó',NULL,NULL,NULL,'R,A,C',NULL,'http://www.instagram.com/toface.brecho');
/*!40000 ALTER TABLE `lojas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-16 14:31:01
