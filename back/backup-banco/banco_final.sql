CREATE DATABASE  IF NOT EXISTS `banco_sepe` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `banco_sepe`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: banco_sepe
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `jogador`
--

DROP TABLE IF EXISTS `jogador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jogador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `apelido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogador`
--

LOCK TABLES `jogador` WRITE;
/*!40000 ALTER TABLE `jogador` DISABLE KEYS */;
INSERT INTO `jogador` VALUES (1,'Vasco','vasco@gmail.com','$2y$10$e3CSaogaY8lpeO.9eRdGnuV4b2WogmwK8TnALd0/vyYDNvgOHiRPi'),(2,'TK','joaovictor239090@gmail.com','$2y$10$YLDEtwJq4L64pZd47jXNq.g9wEF5kjqAmJbu1XVxA64lNEJJVZ02q'),(3,'Ganso','ganso@gmail.com','$2y$10$Tl5kp0kM7nnqlAZl5zzhQOBp3g9RUEKJ3HczjuK80EijSapBuh346'),(4,'Rafaela','rafaela@gmail.com','$2y$10$YHHJ4Y3X9ukYrVeOMpbJbOG5tPZQmYIcpCMZ6/1hOV7CLamOZ0SMa'),(5,'Luiz Eduardo','luizrosa@gmail.com','$2y$10$97unrz0gyP3YDdt/oNgUBO4ya63hDxWy7M/ighOruh1ggL4HkuEYO'),(6,'Tarzan','tarzan@gmail.com','$2y$10$aPjd/.d2oix90rwzvIiVIeWX95XIyWJlw0Bh2Z2c6P/h/DGXKul/S'),(7,'Emili','emili@gmail.com','$2y$10$d21xb2Y20XhxBC3X.Ujy.eUfWMynciyUgpq.f.IzZPD.dLnsWBbTG'),(8,'Kaua','kaua@gmail.com','$2y$10$32XUasrfITJ8L7sccMVjTeSShEsxxX6lpZuCqhPzAyQX1LHZKJ8M6'),(9,'Yohanna','yohanna@gmail.com','$2y$10$F6FzDyJzaHZQ0cw5cVp/A.IFVbT2h2rnvMD491I4W4l0dZfcrI9di'),(10,'Fufu','fufujulia@gmail.com','$2y$10$ZChrceLSpSaFeUzZhwIFl.JtM1KZ8U9jllvlz5Gv5cvctQbivo1Sy');
/*!40000 ALTER TABLE `jogador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitologia`
--

DROP TABLE IF EXISTS `mitologia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mitologia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_mitologia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitologia`
--

LOCK TABLES `mitologia` WRITE;
/*!40000 ALTER TABLE `mitologia` DISABLE KEYS */;
INSERT INTO `mitologia` VALUES (1,'grega'),(2,'egipcia'),(3,'hindu'),(4,'irlandesa'),(5,'japonesa'),(6,'mesopotamica'),(7,'nordica'),(8,'romana'),(9,'geral');
/*!40000 ALTER TABLE `mitologia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partida`
--

DROP TABLE IF EXISTS `partida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partida` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pontuacao` tinyint unsigned NOT NULL,
  `jogador_id` int NOT NULL,
  `mitologia_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jogador_id` (`jogador_id`),
  KEY `mitologia_id` (`mitologia_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partida`
--

LOCK TABLES `partida` WRITE;
/*!40000 ALTER TABLE `partida` DISABLE KEYS */;
INSERT INTO `partida` VALUES (1,8,1,1),(2,8,2,2),(3,10,2,1),(4,9,3,1),(5,7,4,1),(6,8,5,1),(7,9,6,1),(8,9,7,1),(9,8,8,1),(10,10,9,1),(11,10,10,1),(12,4,10,3);
/*!40000 ALTER TABLE `partida` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-21  1:10:53
