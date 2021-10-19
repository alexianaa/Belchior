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
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `nome_loja` varchar(100) NOT NULL,
  `formato_loja` set('Fisica','Online','Hibrida') DEFAULT NULL,
  `produtos` varchar(100) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
=======
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
>>>>>>> 0fe3e725443fc739ffd742576a77ac7263633aff
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (1,'Alícia Büchele','','','Sonho Brecho','Online','','','DF','','','','https://www.instagram.com/sonho_brecho/'),(2,'Hellen Cristina','','','Ai que Lindo!','Online','','seg à sab 9h ~ 18h','','','','','https://www.instagram.com/aiquelindo.brecho/'),(3,'Alessa Pamela Ferreira Amorim','','','Uzzadesapego','Fisica','','8hrs às 22:00','Alagoas','Maceió','','',''),(4,'Lays Quaresma','','','BsB.Brecho','Fisica','','Segunda a sábado','DF','','Rua 25 sul lote 11','','https://instagram.com/bsb.brecho?utm_medium=copy_link'),(5,'Mônica Silva e Márcio Alencar','','61982318971','BrechóMMix','Online','','De segunda a sexta-f','DF','','','','https://instagram.com/brechommix?utm_medium=copy_link'),(6,'Amanda Elisa de Oliveira Carvalho','','','Frôzinha Brechó ','Fisica','','Todos os dias das 10','DF','','','','www.instagram.com/frozinha.brecho'),(7,'Anna vitoria cabral de Oliveira ','','','Brechoanate','Online','','Atualizações geralme','DF','','','','https://instagram.com/brechoanate?utm_medium=copy_link'),(8,'Arthur Alves Lôbo','','','AMARELO brechó','Fisica','','Segunda a sábado, de','DF','','','','https://www.instagram.com/amareloxbrecho'),(9,'Wendny Gomes Boaventura da Silva ','','061995064161','Brechó Ki Achado ','Fisica','','Segunda a sábado das','DF','','','',''),(10,'Ludmila Barbosa ','','','To Face Brechó','Online','','todos os dias, 10h à','DF','','','','www.instagram.com/toface.brecho');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-18 18:34:04
