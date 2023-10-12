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
  `apelido` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogador`
--

LOCK TABLES `jogador` WRITE;
/*!40000 ALTER TABLE `jogador` DISABLE KEYS */;
INSERT INTO `jogador` VALUES (1,'TK','joaovictor239090@gmail.com','$2y$10$tQWzYso8.rC1P119eoRVyeKqr3qSrBIniHqg9Z/qYQe2sxMJZ0kRq'),(2,'Clerosvaldo','clerosvaldo@gmail.com','$2y$10$UTai/NHszxWZ52nmvXZPROeJnZN48jDxsC4Op4UolamPugZmdQFFS');
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
  `nome_mitologia` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partida`
--

LOCK TABLES `partida` WRITE;
/*!40000 ALTER TABLE `partida` DISABLE KEYS */;
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

-- Dump completed on 2023-10-12 16:23:27
