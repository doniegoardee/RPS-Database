-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: rps_database
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'Cenro Aparri','chainsaw','2025-05-29 07:10:00','2025-05-29 07:10:00'),(2,'Cenro Solana','chainsaw','2025-05-29 07:10:00','2025-05-29 07:10:00'),(3,'Cenro Sanchez Mira','chainsaw','2025-05-29 07:10:00','2025-05-29 07:10:00'),(4,'Cenro Alcala','chainsaw','2025-05-29 07:10:00','2025-05-29 07:10:00'),(5,'Sub Office','chainsaw','2025-05-29 07:10:00','2025-05-29 07:10:00'),(6,'Cenro Aparri','CSC','2025-05-29 07:10:00','2025-05-29 07:10:00'),(7,'Cenro Solana','CSC','2025-05-29 07:10:00','2025-05-29 07:10:00'),(8,'Cenro Sanchez Mira','CSC','2025-05-29 07:10:00','2025-05-29 07:10:00'),(9,'Cenro Alcala','CSC','2025-05-29 07:10:00','2025-05-29 07:10:00'),(10,'Sub Office','CSC','2025-05-29 07:10:00','2025-05-29 07:10:00'),(11,'Cenro Aparri','SIFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(12,'Cenro Solana','SIFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(13,'Cenro Sanchez Mira','SIFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(14,'Cenro Alcala','SIFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(15,'Sub Office','SIFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(16,'Cenro Aparri','FLAg','2025-05-29 07:10:00','2025-05-29 07:10:00'),(17,'Cenro Solana','FLAg','2025-05-29 07:10:00','2025-05-29 07:10:00'),(18,'Cenro Sanchez Mira','FLAg','2025-05-29 07:10:00','2025-05-29 07:10:00'),(19,'Cenro Alcala','FLAg','2025-05-29 07:10:00','2025-05-29 07:10:00'),(20,'Sub Office','FLAg','2025-05-29 07:10:00','2025-05-29 07:10:00'),(21,'Cenro Aparri','FLAgT','2025-05-29 07:10:00','2025-05-29 07:10:00'),(22,'Cenro Solana','FLAgT','2025-05-29 07:10:00','2025-05-29 07:10:00'),(23,'Cenro Sanchez Mira','FLAgT','2025-05-29 07:10:00','2025-05-29 07:10:00'),(24,'Cenro Alcala','FLAgT','2025-05-29 07:10:00','2025-05-29 07:10:00'),(25,'Sub Office','FLAgT','2025-05-29 07:10:00','2025-05-29 07:10:00'),(26,'Cenro Aparri','FLGMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(27,'Cenro Solana','FLGMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(28,'Cenro Sanchez Mira','FLGMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(29,'Cenro Alcala','FLGMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(30,'Sub Office','FLGMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(31,'Cenro Aparri','SLUP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(32,'Cenro Solana','SLUP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(33,'Cenro Sanchez Mira','SLUP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(34,'Cenro Alcala','SLUP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(35,'Sub Office','SLUP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(36,'Cenro Aparri','SAPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(37,'Cenro Solana','SAPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(38,'Cenro Sanchez Mira','SAPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(39,'Cenro Alcala','SAPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(40,'Sub Office','SAPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(41,'Cenro Aparri','CBFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(42,'Cenro Solana','CBFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(43,'Cenro Sanchez Mira','CBFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(44,'Cenro Alcala','CBFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(45,'Sub Office','CBFMA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(46,'Cenro Aparri','Tree Cutting','2025-05-29 07:10:00','2025-05-29 07:10:00'),(47,'Cenro Solana','Tree Cutting','2025-05-29 07:10:00','2025-05-29 07:10:00'),(48,'Cenro Sanchez Mira','Tree Cutting','2025-05-29 07:10:00','2025-05-29 07:10:00'),(49,'Cenro Alcala','Tree Cutting','2025-05-29 07:10:00','2025-05-29 07:10:00'),(50,'Sub Office','Tree Cutting','2025-05-29 07:10:00','2025-05-29 07:10:00'),(51,'Cenro Aparri','Lumber Dealer','2025-05-29 07:10:00','2025-05-29 07:10:00'),(52,'Cenro Solana','Lumber Dealer','2025-05-29 07:10:00','2025-05-29 07:10:00'),(53,'Cenro Sanchez Mira','Lumber Dealer','2025-05-29 07:10:00','2025-05-29 07:10:00'),(54,'Cenro Alcala','Lumber Dealer','2025-05-29 07:10:00','2025-05-29 07:10:00'),(55,'Sub Office','Lumber Dealer','2025-05-29 07:10:00','2025-05-29 07:10:00'),(56,'Cenro Aparri','Lumber Supplier','2025-05-29 07:10:00','2025-05-29 07:10:00'),(57,'Cenro Solana','Lumber Supplier','2025-05-29 07:10:00','2025-05-29 07:10:00'),(58,'Cenro Sanchez Mira','Lumber Supplier','2025-05-29 07:10:00','2025-05-29 07:10:00'),(59,'Cenro Alcala','Lumber Supplier','2025-05-29 07:10:00','2025-05-29 07:10:00'),(60,'Sub Office','Lumber Supplier','2025-05-29 07:10:00','2025-05-29 07:10:00'),(61,'Cenro Aparri','Wildlife','2025-05-29 07:10:00','2025-05-29 07:10:00'),(62,'Cenro Solana','Wildlife','2025-05-29 07:10:00','2025-05-29 07:10:00'),(63,'Cenro Sanchez Mira','Wildlife','2025-05-29 07:10:00','2025-05-29 07:10:00'),(64,'Cenro Alcala','Wildlife','2025-05-29 07:10:00','2025-05-29 07:10:00'),(65,'Sub Office','Wildlife','2025-05-29 07:10:00','2025-05-29 07:10:00'),(66,'Cenro Aparri','TFPL','2025-05-29 07:10:00','2025-05-29 07:10:00'),(67,'Cenro Solana','TFPL','2025-05-29 07:10:00','2025-05-29 07:10:00'),(68,'Cenro Sanchez Mira','TFPL','2025-05-29 07:10:00','2025-05-29 07:10:00'),(69,'Cenro Alcala','TFPL','2025-05-29 07:10:00','2025-05-29 07:10:00'),(70,'Sub Office','TFPL','2025-05-29 07:10:00','2025-05-29 07:10:00'),(71,'Cenro Aparri','Foreshore','2025-05-29 07:10:00','2025-05-29 07:10:00'),(72,'Cenro Solana','Foreshore','2025-05-29 07:10:00','2025-05-29 07:10:00'),(73,'Cenro Sanchez Mira','Foreshore','2025-05-29 07:10:00','2025-05-29 07:10:00'),(74,'Cenro Alcala','Foreshore','2025-05-29 07:10:00','2025-05-29 07:10:00'),(75,'Sub Office','Foreshore','2025-05-29 07:10:00','2025-05-29 07:10:00'),(76,'Cenro Aparri','SP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(77,'Cenro Solana','SP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(78,'Cenro Sanchez Mira','SP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(79,'Cenro Alcala','SP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(80,'Sub Office','SP','2025-05-29 07:10:00','2025-05-29 07:10:00'),(81,'Cenro Aparri','FPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(82,'Cenro Solana','FPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(83,'Cenro Sanchez Mira','FPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(84,'Cenro Alcala','FPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(85,'Sub Office','FPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(86,'Cenro Aparri','RFPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(87,'Cenro Solana','RFPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(88,'Cenro Sanchez Mira','RFPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(89,'Cenro Alcala','RFPA','2025-05-29 07:10:00','2025-05-29 07:10:00'),(90,'Sub Office','RFPA','2025-05-29 07:10:00','2025-05-29 07:10:00');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel_cache_admi@gmail.com|127.0.0.1','i:1;',1748785470),('laravel_cache_admi@gmail.com|127.0.0.1:timer','i:1748785470;',1748785470);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chainsaw_parents`
--

DROP TABLE IF EXISTS `chainsaw_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chainsaw_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chainsaw_parents`
--

LOCK TABLES `chainsaw_parents` WRITE;
/*!40000 ALTER TABLE `chainsaw_parents` DISABLE KEYS */;
INSERT INTO `chainsaw_parents` VALUES (1,'DARIO DOMINGO','Cenro Aparri','chainsaw','2025-06-01 07:25:47','2025-06-01 07:25:47'),(2,'FLORENCIO UDASCO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(3,'MARLON BALAGAT','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(4,'BLGU OF ABRA, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN LOURENCE L. BATTAD','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(5,'RAZEL TUZON','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(6,'ALEX ORIO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(7,'EUGELIO B. DELA CRUZ ','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(8,'OSCAR BARRIT','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(9,'ANTONIO A. VILLENA','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(10,'JUANITO VILLENA JR','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(11,'HAROLD CALINGAO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(12,'DANILO TAMAYO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(13,'GILBERT C. GUILLERMO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(14,'JOANNE JOY UNANA','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(15,'BLGU OF GADDANG, APARRI, CAGAYAN  REP. BY BARANGAY CAPTAIN MR. ROMEO V. GAMMAG','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(16,'FELIX BALAO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(17,'BLGU OF MAGSAYSAY, LASAM, CAGAYAN REP. BY ANTONIO BARANGAY CAPTAIN GENOBEBE','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(18,'CELESTINO T. SAGUN','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(19,'ROMEO G. DAYAG','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(20,'CRESENCIO COLLADO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(21,'REYNANTE MACABANGON','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(22,'JAY-AR FELIPE','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(23,'JOWY VIERNES,JR','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(24,'JUANITO P. TAMAPYO, JR','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(25,'VICENTE URMATAM, JR','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(26,'AMANTE T. JAVIER','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(27,'TOMAS BARCENA','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(28,'BLGU PADDAYA ESTE, BUGUEY, CAGAYAN REP. BY BARANGAY CAPTAIN PEDRO R. AGOTO','Cenro Aparri','chainsaw','2025-06-01 07:25:48','2025-06-01 07:25:48'),(29,'EDWARD CACHOLA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(30,'BLGU OF L. ADVIENTO, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN FRANKLIN P. TOBIAS','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(31,'LORETA B. ESTAREJA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(32,'GILBERT TUMABAO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(33,'SERAFIN JULIAN','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(34,'JHUNREY ORDIOSO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(35,'BLGU OF MAREDE, STA. ANA, CAGAYAN REP. BY  BARANGAY CAPTAIN ESPERIDION L. ACACIO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(36,'ARNULFO COVITA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(37,'ELMER C. ASIASTICO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(38,'ROGIE BARCENA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(39,'BLGU OF CUNIG, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN OGIE R. TAGUIAM','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(40,'LERNA R. GAMAYON','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(41,'ANGELITO AGCAOILI','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(42,'TITO TAJADAO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(43,'BLGU TAGUMAY, GATTARAN, CAGAYAN represnted by Brgy. Captain TEOPANIS D. GUTIEREZ','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(44,'ALBERTO CONFIDENTE','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(45,'CHRISTIAN ROSAL','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(46,'MANUEL MAGDALENA ','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(47,'DOMINGO PADRE','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(48,'RONALD ALVIAR','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(49,'WILFREDO COLEGA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(50,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN C/O MEDIE MADAMBA','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(51,'BLGU OF PALAGO NORTE, GATTARAN C/O PABLO OÑATE','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(52,'DOMINADOR OLALDE','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(53,'ROBERT D. CARLOS ','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(54,'CABIRAOAN NATIONAL HIGH SCHOOL C/O LUZVIMINDA G. GUZMAN','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(55,'MARIO KADANO','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(56,'JHONY NAUI','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(57,'CATALINA M. ABON','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(58,'ERNESTO SUMAGAY','Cenro Aparri','chainsaw','2025-06-01 07:25:49','2025-06-01 07:25:49'),(59,'VICTORINO UGALDE','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(60,'BLGU OF BASAO, GATTARAN, REP. BRGY. CAPTAIN GILBERT J. GUILLERMO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(61,'SOLEDAD CABUTAJE','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(62,'RODOLFO ROMANO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(63,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN REP. BY BRGY. CAPTAIN MARISAN A. JACINTO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(64,'ORLANDO MARCOS, SR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(65,'CARLITO COSTALES','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(66,'SERAFIN A. JULIAN','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(67,'BLGU OF TUCALAN PASSING, LASAM, CAGAYAN REP. BY SANTOS ACEDO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(69,'ROMILIO CARIAGA','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(70,'ARNOLD MENDOZA','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(71,'EDUARDO CORRALES','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(72,'MINANGA NORTE, LASAM, CAGAYAN REP. BY BRGY. CAPTAIN ROWEL CAMBE','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(73,'MARINO FELIPE','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(74,'FRANCISCA REYES','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(75,'DOMINADOR INVIERNO, SR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(76,'ALEJANDRO SALUD JR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(77,'BLGU OF BANAGATAN, GATTARAN, CAGAYAN REP. BY EDGAR F. MARACHA','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(78,'ELMER TABILISIMA, JR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(79,'PANTALEON PASION','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(80,'ABRAHAM DIGAP','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(81,'JOEY ANTONIO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(82,'ELIAS BOLO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(83,'JOSELITO TINDOC','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(84,'WILFREDO ADQUILEN, JR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(85,'ESSEX LARA','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(86,'MOISES DECANO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(87,'BLGU OF SAN ANTONIO, APARRI, CAGAYAN REP. BY BRGY. CAPTAIN EVELYN L. ALBANIO','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(88,'MICHAEL ORTALEZA','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(89,'JOE RAFUL','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(90,'RICHARD RAMBUYAN','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','Cenro Aparri','chainsaw','2025-06-01 07:25:50','2025-06-01 07:25:50'),(92,'DAVI RAGUTERO','Cenro Aparri','chainsaw','2025-06-01 07:25:52','2025-06-01 07:25:52');
/*!40000 ALTER TABLE `chainsaw_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chainsaws`
--

DROP TABLE IF EXISTS `chainsaws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chainsaws` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `chainsaw_parent_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `serial_num` varchar(255) DEFAULT NULL,
  `date_registered` varchar(255) DEFAULT NULL,
  `date_expiry` varchar(255) DEFAULT NULL,
  `control_no` varchar(255) DEFAULT NULL,
  `date_acquired` varchar(255) DEFAULT NULL,
  `horse_power` varchar(255) DEFAULT NULL,
  `length_guidebar` text DEFAULT NULL,
  `sticker` varchar(255) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chainsaws_chainsaw_parent_id_foreign` (`chainsaw_parent_id`),
  KEY `chainsaws_user_id_foreign` (`user_id`),
  CONSTRAINT `chainsaws_chainsaw_parent_id_foreign` FOREIGN KEY (`chainsaw_parent_id`) REFERENCES `chainsaw_parents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `chainsaws_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chainsaws`
--

LOCK TABLES `chainsaws` WRITE;
/*!40000 ALTER TABLE `chainsaws` DISABLE KEYS */;
INSERT INTO `chainsaws` VALUES (1,1,'DARIO DOMINGO','DALAYAP, ALLACAPAN, CAGAYAN','STIHL','136471044','2023-01-04','2025-01-04','01042023-001','2025-06-01','4.8','36\'\'','01042023-001','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-112122-036 under Transfer certificate of Title C-331 situated at Dalayap, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:47','2025-06-01 07:26:31'),(2,2,'FLORENCIO UDASCO','BINUBUNGAN, ALLACAPAN, CAGAYAN','STIHL','122919880','2023-01-04','2025-01-04','01042023-002','2025-06-01','4.8','36\'\'','01042023-002','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-121222-040 under Transfer certificate of Title T-11890 (s) situated at Dalayap, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(3,3,'MARLON BALAGAT','CATALAGANAN, LASAM, CAGAYAN','SANN','2923','2023-01-11','2025-01-11','0102023-003','2019-12-27','4.8','36\'\'','01002023-003','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121222-041 under Katibayan ng Orihinal na Titulo P-93312 situated at Cataliganan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(4,4,'BLGU OF ABRA, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN LOURENCE L. BATTAD','ABRA, GATTARAN, CAGAYAN','STIHL','5001-6500','2023-01-13','2025-01-13','01132023-004','2018-10-12','4.8','36\'\'','01132023-004','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Abra, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(5,5,'RAZEL TUZON','GABUN, LASAM, CAGAYAN','STIHL','12050460109','2023-01-11','2025-01-11','01112023-005','2025-06-01','4.8','36\'\'','01112023-005','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -122022-041 under Katibayan ng Orihinal na Titulo P-84139 situated at Gabun, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(6,6,'ALEX ORIO','GABUN, LASAM, CAGAYAN','STIHL','110261964','2023-01-12','2025-01-12','01122023-006','2014-05-16','4.8','36\'\'','071822-006',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -122022-045 under Transfer Certificate of Title No. 032-2013003621 situated at Gabun, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(7,7,'EUGELIO B. DELA CRUZ ','SAN JUAN, ALLACAPAN, CAGAYAN','STIHL','187064487','2023-01-12','2025-01-12','01122023-007','2025-06-01','4.8','36\'\'','01122023-007',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121422-043 under Original Certificate of Title No. P-1809 situated at San Juan, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(8,8,'OSCAR BARRIT','BATALAN, LASAM, CAGAYAN','STIHL','2010612449','2023-01-16','2025-01-16','01162023-008','2025-06-01','4.8','36\'\'','01162023-008','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121422-042 under Katibayan ng Orihinal na Titulo P- 76806 situated at Batalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(9,9,'ANTONIO A. VILLENA','ARIDOWEN, STA. TERESITA, CAGAYAN','STIHL','120808186','2023-01-16','2025-01-16','01162023-009','1996-02-03','4.8','36\'\'','01162023-009','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership No. R2-Api-090808 under Katibayan ng Orihinal na Titulo Blg. P-8095 situated at Aridowen, Sta. Teresita, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(10,10,'JUANITO VILLENA JR','ARIDOWEN, STA. TERESITA, CAGAYAN','STIHL','131094152','2023-01-16','2025-01-16','01162023-010','2025-06-01','4.8','36\'\'','01162023-010','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership No. R2-Api-090808 under Katibayan ng Orihinal na Titulo Blg. P-1941 situated at Aridowen, Sta. Teresita, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(11,11,'HAROLD CALINGAO','ZONE 5, BANGAG, APARRI, CAGAYAN','SANN','D1601090005','2023-01-10','2025-01-10','1102023-011','2016-08-18','4.8','36\'\'','1102023-011','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121622-044 under Transfer certificate of Title T-20012 and T-26499 situated at Bangag, Aparri West, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(12,12,'DANILO TAMAYO','MATUCAY, ALLACAPAN, CAGAYAN','STIHL','110679176612134','2023-01-24','2025-01-24','01242023-012','2025-06-01','4.8','36\'\'','01242023-012','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -012423-001 under Original Certificate of Title No. 032-P-171(s) situated at Labben, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(13,13,'GILBERT C. GUILLERMO','SILAGAN, ALLACAPAN, CAGAYAN','STIHL','S185573077G','2023-02-07','2025-02-07','02072023-013','2025-06-01','4.8','36\'\'','02072023-013','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-121218-01 under Tax Declaration No. 00179 (Lot No. 119, GSS-473) situated at Silagan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(14,14,'JOANNE JOY UNANA','BANGAG, APARRI, CAGAYAN','STIHL','S160997061','2023-02-07','2025-02-07','02072023-014','2025-06-01','4.8','36\'\'','02072023-014','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-012423-002 under Original Certificate of Title No. P-28219 situated at Bangag, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(15,15,'BLGU OF GADDANG, APARRI, CAGAYAN  REP. BY BARANGAY CAPTAIN MR. ROMEO V. GAMMAG','GADDANG, APARRI, CAGAYAN','HOYOMA ','220198434','2023-02-13','2025-02-13','02132023-015','2018-09-22','4.8','36\'\'','02132023-015','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Gaddang, Aparri, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(16,16,'FELIX BALAO','CABATACAN WEST, LASAM, CAGAYAN','STIHL','1233219640','2023-02-27','2025-02-27','02272023-016','2025-06-01','4.8','36\'\'','02272023-016','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-020823-006 under Original Certificate of Title No. P-39656 situated at Cabatacan, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(17,17,'BLGU OF MAGSAYSAY, LASAM, CAGAYAN REP. BY ANTONIO BARANGAY CAPTAIN GENOBEBE','MAGSAYSAY, LASAM, CAGAYAN','STIHL','1292873','2023-03-13','2025-03-13','03132023-017','2025-06-01','4.8','36\'\'','03132023-017','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Magsaysay, Lasam, Cagayan may serve','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(18,18,'CELESTINO T. SAGUN','CABATACAN WEST, LASAM, CAGAYAN','STIHL','12571683','2023-03-13','2025-03-13','03132023-018','2025-06-01','4.8','36\'\'','03132023-018',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-112122-037 under Original Certificate of Title No. P-39274','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(19,19,'ROMEO G. DAYAG','LABBEN, ALLACAPAN, CAGAYAN','STIHL','159069215','2023-03-13','2025-03-13','013162023-019','2025-06-01','4.8','36\'\'','013162023-019','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-020823-005 under Transfer Certificate of Title No.C-1649 located at Bessang, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(20,20,'CRESENCIO COLLADO','KAPANIKIAN SUR, ALLACAPAN, CAGAYAN','STIHL','114428372','2023-03-21','2025-03-21','03212023-020','2025-06-01','4.8','36\'\'','03212023-020','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-030723-011 under Transfer Certificate of Title No. 034-2015000374 located at Kapanickian, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(21,21,'REYNANTE MACABANGON','CAPALUTAN, ALLACAPAN, CAGAYAN','STIHL','03272023-022','2023-03-27','2025-03-27','03272023-022','2025-06-01','4.8','36\'\'','03272023-022',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-022723-007 under Original Certificate of Title No.P-6484-773 located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(22,22,'JAY-AR FELIPE','CAPALUTAN, ALLACAPAN, CAGAYAN','STIHL','313192045','2023-03-27','2025-03-27','03272023-023','2025-06-01','4.8','36\'\'','03272023-023','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-022723-008 under Original Certificate of Title CARP-2014-000-224 located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(23,23,'JOWY VIERNES,JR','CAPALUTAN, ALLACAPAN, CAGAYAN','SANN','1232','2023-03-27','2025-03-27','03272024-023','2018-06-15','4.8','36\'\'','03272024-023','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-031023-013 under Original Certificate of Title P-17184 (s) located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(24,24,'JUANITO P. TAMAPYO, JR','PATTAO, BUGUEY, CAGAYAN','STIHL','13302310','2023-04-13','2025-04-13','041302023-025','2025-06-01','4.8','36\'\'','041302023-025',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-031612 situated at  Sta. Isabel, Buguey, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(25,25,'VICENTE URMATAM, JR','NAGUILIAN, LAL-LO, CAGAYAN','STIHL','576019021','2023-04-13','2025-04-13','041302023-026','2025-06-01','4.8','36\'\'','041302023-026','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  (PTPR) No. R-2-Api-040423-014 situated at  Naguilian, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(26,26,'AMANTE T. JAVIER','LUGA, STA. TERESITA, CAGAYAN','STIHL','162205228','2023-04-13','2025-04-13','041302023-027','2025-06-01','4.8','36\'\'','041302023-027','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-033001 situated at  Luga, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(27,27,'TOMAS BARCENA','VILLA CIELO, BUGUEY, CAGAYAN','STIHL','102319625','2023-04-13','2025-04-13','041302023-028','2025-06-01','4.8','36\'\'','041302023-028','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-031512 situated at  Villa Cielo, Buguey, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(28,28,'BLGU PADDAYA ESTE, BUGUEY, CAGAYAN REP. BY BARANGAY CAPTAIN PEDRO R. AGOTO','PADDAYA ESTE, BUGUEY, CAGAYAN','STIHL','27642019','2023-04-13','2025-04-13','041302023-029','2025-06-01','4.8','36\'\'','041302023-029','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Paddaya Este, Buguey, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:48','2025-06-01 07:26:31'),(29,29,'EDWARD CACHOLA','SAN PEDRO, LASAM, CAGAYAN','STIHL','175683096','2023-04-13','2025-04-13','041302023-030','2025-06-01','4.8','36\'\'','041302023-030','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Owneship  (CTO) No. R-2-Api-03-001-2020 situated at  San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(30,30,'BLGU OF L. ADVIENTO, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN FRANKLIN P. TOBIAS','L. ADVIENTO, GATTARAN, CAGAYAN','STIHL','113014006154','2023-04-20','2025-04-20','04202023-031','2025-06-01','4.8','36\'\'','04202023-031','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of L. Adviento, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(31,31,'LORETA B. ESTAREJA','STA. MARIA, GONZAGA, CAGAYAN','STIHL','161601297','2023-04-24','2025-04-24','04242023-032','2025-06-01','4.8','36\'\'','04242023-032','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-041223 situated at  Sta. Maria, Gonzaga, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(32,32,'GILBERT TUMABAO','GABUN, LASAM, CAGAYAN','STIHL','12161975','2023-04-26','2025-04-26','04262023-033','2025-06-01','4.8','36\'\'','04262023-033','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-041223-020 situated at  Gabun, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(33,33,'SERAFIN JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','20619719','2023-04-26','2025-04-26','04272023-034','2025-06-01','4.8','36\'\'','04272023-034',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-041223-018 situated at  Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(34,34,'JHUNREY ORDIOSO','JURISDICTION, LAL-LO, CAGAYAN','STIHL','20131221-024','2023-04-27','2025-04-27','04262023-034','2025-06-01','4.8','36\'\'','04262023-034','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-042623-024 situated at  Jurisdiction, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(35,35,'BLGU OF MAREDE, STA. ANA, CAGAYAN REP. BY  BARANGAY CAPTAIN ESPERIDION L. ACACIO','MAREDE, STA. ANA, CAGAYAN','STIHL','120131611','2023-05-03','2025-05-03','05032023-036','2025-06-01','4.8','36\'\'','05032023-036','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Merede, Sta. Ana, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(36,36,'ARNULFO COVITA','LABBEN, ALLACAPAN, CAGAYAN','STIHL','175076117','2023-05-03','2025-05-03','05032023-037','2025-06-01','4.8','36\'\'','05032023-037','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-072022-007 situated at  Labben, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(37,37,'ELMER C. ASIASTICO','CAPANICKIAN, ALLACAPAN, CAGAYAN','SANN','102719780','2023-05-03','2025-05-03','05032023-038','2025-06-01','4.8','36\'\'','05032023-038',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Plantation Ownership  (CTPO) No. R-2-Api-08-2021-004 situated at  Capanickian Sur, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(38,38,'ROGIE BARCENA','VILLA CIELO, BUGUEY, CAGAYAN','STIHL','56996621','2023-05-05','2025-05-05','05052023-039','2025-06-01','4.8','36\'\'','05052023-039',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-111522-035 situated at  Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(39,39,'BLGU OF CUNIG, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN OGIE R. TAGUIAM','CUNIG, GATTTARAN, CAGAYAN','STIHL','122373190','2023-05-17','2025-05-17','05172023-040','2025-06-01','4.8','36\'\'','05172023-040','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Cunig, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(40,40,'LERNA R. GAMAYON','PATTAO, BUGUEY, CAGAYAN','STIHL','040971','2023-05-19','2025-05-19','05192023-041','2025-06-01','4.8','36\'\'','05192023-041','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-051023-027 situated at  Sta. Isabel, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(41,41,'ANGELITO AGCAOILI','DALAYA, LAL-LO, CAGAYAN','STIHL','028197743','2023-05-19','2025-05-19','05192023-042','2025-06-01','4.8','36\'\'','05192023-042','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-051023-026  situated at  Dalaya, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(42,42,'TITO TAJADAO','CABANBANAN NORTE, GONZAGA, CAGAYAN','SANN','G1601090125','2022-11-02','2024-11-02','110222-060','2025-06-01','4.8','36\'\'','110222-060','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-100322-027 under Transfer Certificate of Title No. T-27699 situated at Cabanbanan Norte, Gonzaga, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(43,43,'BLGU TAGUMAY, GATTARAN, CAGAYAN represnted by Brgy. Captain TEOPANIS D. GUTIEREZ','TAGUMAY, GATTARAN, CAGAYAN','STIHL','SW21050433','2022-11-14','2024-11-14','111422-061','2025-06-01','4.8','36\'\'','111422-061','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in tim,es of Calamities and whatever legal purpose the BDRRM of Tagumay, Gattaran, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(44,44,'ALBERTO CONFIDENTE','MAXINGAL, LAL-LO, CAGAYAN','SANN','3113','2022-11-15','2024-11-15','111522-062','2025-06-01','4.8','36\'\'','111522-062','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Katibayan ng Orihinal na Titulo No. P-83736 situated at Sicalao, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(45,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','GL04201405 5210011','2022-11-18','2024-11-18','111822-063','2019-01-02','4.8','36\'\'','111822-063','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 of Mr. Gilbert Goze under Katibayan ng Orihinal na Titulo Blg. CARP2020000064 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(46,46,'MANUEL MAGDALENA ','LOGAC, LAL-LO, CAGAYAN','STIHL','S175090768','2022-11-21','2024-11-21','112122-064','2018-03-06','4.8','36\'\'','112122-064','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Certificate of Ttitle No. T-10355 situated at Logac, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(47,47,'DOMINGO PADRE','SIMPATUYO, STA. TERESITA, CAGAYAN','STIHL','11-596-689','2022-11-21','2024-11-21','112122-066','2025-06-01','4.8','36\'\'','112122-066','For Plantation development and Maintenance (Pruning, Thinning and Cutting) withi Certificate of Tree Plantation Ownership No. R-2-Api-11-2021-007 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(48,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','142482548','2022-07-08','2024-07-08','070822-001','2019-02-02','4.8','36\'\'','070822-001','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-071522-004 situated at Sitio Magapido, Barangay Pateng, Gonzaga, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(49,48,'RONALD ALVIAR','LABBEN, ALLACAPAN, CAGAYAN','STIHL','110055327','2022-07-11','2024-07-11','071122-002','2025-06-01','4.8','36\'\'','071122-002','For plantation development and maintenance (prunning, thinning and cutting) covered under Certificate of Tree Ownership (CTO) No. R-2-Api-070214 situated at Dagupan, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(50,49,'WILFREDO COLEGA','IRINGAN, ALLACAPAN, CAGAYAN','STIHL','174325575','2022-07-11','2024-07-11','071122-003','2014-06-18','4.8','36\'\'','071122-003','For plantation development and maintenance (prunning, thinning and cutting) covered under Certificate of Tree Ownership (CTO) No. R-2-Api-121813 situated at Maluyo, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(51,50,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN C/O MEDIE MADAMBA','TUCALAN, PASSING, LASAM','SANN','1701190036','2022-07-12','2024-07-12','071222-004','2017-08-12','4.8','36\'\'','071222-004','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(52,51,'BLGU OF PALAGO NORTE, GATTARAN C/O PABLO OÑATE','PALAGO NORTE, GATTARAN, CAGAYAN','STIHL','12074658','2022-07-12','2024-07-12','071222-005','2018-03-10','4.8','36\'\'','071222-005','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Palago Norte may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(53,52,'DOMINADOR OLALDE','DAGUPAN, ALLACAPAN, CAGAYAN','SANN','106796648','2022-07-12','2023-07-12','071822-006','2014-05-16','4.8','36\'\'','071822-006','For cutting/harvesting harvestable and damged trees within the Certificate of Tree Onwership (CTO) OF Mr. Nicomedes Tabunar covered with CTO No. R-2-Api-08-2021-006 situated at Labben, Allacpan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(54,53,'ROBERT D. CARLOS ','PERU, LASAM, CAGAYAN','STIHL','22030152','2022-07-21','2023-07-21','072122-007','2022-06-04','4.8','36\'\'','072122-007','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-070422-005 situated at Peru, Lasam, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(55,54,'CABIRAOAN NATIONAL HIGH SCHOOL C/O LUZVIMINDA G. GUZMAN','CABIRAOAN, GONZAGA, CAGAYAN','PORTABLE CHAINSAW','PH-CHSW-5800-22','2022-07-21','2023-07-21','072522-008','2022-04-25',NULL,NULL,'072522-008','Exclusive use for Cabiraoan National High School Agricrop Production students and for whatever legal purpose the Cabiraoan National High School may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(56,55,'MARIO KADANO','SAN VICENTE, GATTARAN, CAGAYAN','SANN','1012019654','2022-07-26','2023-07-26','072622-009','2022-04-25','4.8','36\'\'','072622-009','For cutting planted Gmelina trees within my private lot covered by Certficate of Tree Ownership No. R-2-Api-10172007 situated at San Vicente, Gattaran, Cagayan and Original Certificate of Title P-63007.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(57,56,'JHONY NAUI','ALAGUIA, LAL-LO, CAGAYAN','STIHL','11746352','2022-07-26','2024-07-26','072622-010','2022-07-26','4.8','36\'\'','072622-010','For plantation development and maintenance (prunning, thinning and cutting) under my Social Integrated Forest Management Agreement (SIFMA)No. 01-001-120 situated at Alaguia, Lal-lo, Cagayan.    ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(58,57,'CATALINA M. ABON','PLAZA, APARRI, CAGAYAN','MCK','SW2101010','2022-07-28','2024-07-28','080122-010','2022-06-23','6.5','36\'\'','080122-010','For plantation development and maintenance (prunning, thinning and cutting) covered with Katibayan ng Orihinal na Titulo BLG. CARP 2014000217 situated at Plaza, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(59,58,'ERNESTO SUMAGAY','CAPIDDIGAN, GATTARAN, CAGAYAN','STIHL','15189642926','2022-08-05','2024-08-05','080522-011','2022-06-01','4.8','36\'\'','080522-011','For cutting, pruning, slicing of damaged/fallen trees and other road obstructions when there are calamities (for Barangay Disaster Risk Reduction Management)','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:49','2025-06-01 07:26:31'),(60,59,'VICTORINO UGALDE','SAN LORENZO, BUGUEY, CAGAYAN','STIHL','S178200108','2022-08-08','2024-08-08','080822-012','2019-03-10','4.8','36\'\'','080822-012','For plantation development and maintenance (prunning, thinning and cutting) covered with Katibayan ng Orihinal na Titulo BLG.P-83571 situated at Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(61,60,'BLGU OF BASAO, GATTARAN, REP. BRGY. CAPTAIN GILBERT J. GUILLERMO','BASAO, GATTARAN, CAGAYAN','STIHL','MG-110-6021-0760','2022-08-11','2024-08-11','081122-013','2018-10-12','4.8','36\'\'','081122-013','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Basao, Gattaran may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(62,61,'SOLEDAD CABUTAJE','BICUD, LAL-LO, CAGAYAN','FUGIHAMA','1901090470','2022-08-11','2024-08-11','081522-014','2025-06-01','4.8','36\'\'','081522-014','For plantation development and maintenance (prunning, thinning and cutting) under Certificate of Tree Ownership No. R-2-API-060618 situated at Bicud, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(63,62,'RODOLFO ROMANO','SAN PEDRO, LASAM, CAGAYAN','STIHL','1210251975','2022-08-15','2024-08-15','081522-015','2025-06-01','4.8','36\'\'','081522-015','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-012 covered with TCT No. T-39304 situated at San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(64,63,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN REP. BY BRGY. CAPTAIN MARISAN A. JACINTO','TUCALAN, PASSING, LASAM','SANN','2235','2022-08-17','2024-08-17','081722-016','2019-07-25','4.8','36\'\'','081722-016','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing, Lasam may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(65,64,'ORLANDO MARCOS, SR','ALLIG, ALLACAPAN, CAGAYAN','FUJIHAMA','180808021','2022-08-17','2024-08-17','081722-018','2020-05-04','4.8','36\'\'','081722-018','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-011 covered with Original Certificate of Title No. P-(7922) 926 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(66,65,'CARLITO COSTALES','KAPAGARAN, ALLACAPAN, CAGAYAN','STIHL','121268159','2022-08-17','2024-08-17','081722-019','2010-04-22','4.8','36\'\'','081722-019','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-.072022-006 covered with TCT No. C-4404 (S) situated at Kapagaran, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(67,66,'SERAFIN A. JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','128197041','2022-08-22','2024-08-22','082222-022','2017-05-07','4.8','36\'\'','082222-022','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081222-011 situated at Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(68,67,'BLGU OF TUCALAN PASSING, LASAM, CAGAYAN REP. BY SANTOS ACEDO','TUCALAN, PASSING, LASAM','STIHL','364073200','2022-08-22','2024-08-22','082222-023','2019-04-05','4.8','36\'\'','082222-023','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing, Lasam may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(69,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203137','2022-08-22','2024-08-22','082222-024','2022-08-02','4.8','22\'\'','082222-024','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(70,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203188','2022-08-22','2024-08-22','082222-025','2022-08-02','4.8','22\'\'','082222-025','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(71,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203265','2022-08-22','2024-08-22','082222-026','2022-08-02','4.8','22\'\'','082222-026','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(72,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','STIHL','S168808795','2022-08-22','2024-08-22','082222-027',NULL,'4.8','36\'\'','082222-027','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(73,69,'ROMILIO CARIAGA','CAMBONG, LAL-LO, CAGAYAN','SANN','11133612747','2022-08-26','2024-08-26','083022-029','2020-06-01','4.8','36\'\'','083022-029','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-082622-014 situated at Sta. Teresa (Magallungon), Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(74,70,'ARNOLD MENDOZA','VIGA, LASAM, CAGAYAN','STIHL','122191972','2022-08-30','2024-08-30','083022-029','2025-06-01','4.8','36\'\'','083022-029','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081722-012 covered by Original Certificate of Title No. P-35242 situated at Viga, LasaM, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(75,71,'EDUARDO CORRALES','CAPISSAYAN NORTE, GATTARAN, CAGAYAN','STIHL','318600827','2022-08-30','2024-08-30','083022-031','2019-08-27','4.8','36\'\'','083022-031','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-083022-015 covered by Transfer Certificate of Title No. T-19852 situated at Capissayan Norte, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(76,72,'MINANGA NORTE, LASAM, CAGAYAN REP. BY BRGY. CAPTAIN ROWEL CAMBE','MINANGA NORTE, LASAM, CAGAYAN','STIHL','12030274','2022-09-05','2024-09-05','090522-032','2025-06-01','4.8','36\'\'','090522-032','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) and other related activities during and after the onslaught of typhoons and other related calamities.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(77,73,'MARINO FELIPE','STA. TERESA, LAL-LO, CAGAYAN','SANN','SANN6838','2022-09-06','2024-09-06','090622-036','2022-08-26','4.8','36\'\'','090622-036','For plantation development and maintenance (prunning, thinning and cutting) covered with Transfer Certificate of Title No. T-14248 situated my Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019 at Sta. Teresa, Lal-lo, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(78,74,'FRANCISCA REYES','ABAGAO, LAL-LO, CAGAYAN','STIHL','11060210760','2022-09-07','2024-09-07','090722-038','2025-06-01','4.8','36\'\'','090722-038','For plantation development and maintenance (prunning, thinning and cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019-A under Transfer Certificate of Title No. P-25821 situated at Abagao, Lal0lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(79,75,'DOMINADOR INVIERNO, SR','ROSARIO, LAL-LO, CAGAYAN','FUJIHAMA','18073099','2022-09-07','2024-09-07','090722-037','2020-05-06','4.8','36\'\'','090722-037','For plantation development and maintenance (prunning, thinning and cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-API-083122-018 situated at Rosari, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(80,76,'ALEJANDRO SALUD JR','CENTRO, ALLACAPAN, CAGAYAN','STIHL','MG-160997110','2022-09-05','2024-09-05','090522-039','2025-06-01','4.8','36\'\'','090522-039','For plantation development and maintenance (prunning, thinning and cutting) within his private lot under Certificate of Tree Plantation Ownership No. 10-005-2020 situated at Tamboli, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(81,77,'BLGU OF BANAGATAN, GATTARAN, CAGAYAN REP. BY EDGAR F. MARACHA','BANGATAN, GATTARAN, CAGAYAN','STIHL','719040023','2022-09-12','2024-09-12','090522-039','2020-06-09','4.8','36\'\'','090522-039','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Bangatan, Gattaran,  may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(82,78,'ELMER TABILISIMA, JR','CASAMBALANGAN, STA. ANA, CAGAYAN','STIHL','152646714','2022-09-12','2024-09-12','091222-040','2022-08-26','4.8','36\'\'','091222-040','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Stewardship (Integrated Social Forestry) Contract No. 02082127 situated at Casambalangan, Sta. Ana, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(83,79,'PANTALEON PASION','ALANNAY, LASAM, CAGAYAN','STIHL','S162530232','2022-08-30','2024-08-30','091222-041','2019-07-22','4.8','36\'\'','091222-041','For plantation development and maintenance (prunning, thinning and cutting) covered with Certification of Tree Ownership No. R-2-API-112619 covered by Transfer Certificate of Title No. 032-2017003157 situated at Alannay, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(84,80,'ABRAHAM DIGAP','PERU, LASAM, CAGAYAN','STIHL','GL04201311280566','2022-09-12','2024-09-12','091222-042','2019-05-05','4.8','36\'\'','091222-042','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. T-19688 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(85,81,'JOEY ANTONIO','BATTALAN, LASAM, CAGAYAN','STIHL','121021979','2022-09-19','2024-09-19','091922-043','2022-08-26','4.8','36\'\'','091922-043','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091222-0120 situated at Battalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(86,82,'ELIAS BOLO','CABATACAN WEST, LASAM, CAGAYAN','FUJIHAMA','SW2009004','2022-09-19','2024-09-19','091922-044',NULL,'4.8','36\'\'','091922-044','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree  Plantation Registration No. R-2-API-020922-04 situated at Cabatacan West, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(87,83,'JOSELITO TINDOC','DAGUPAN, ALLACAPAN, CAGAYAN','RHINOMEC','D-1514830284','2022-09-19','2024-09-19','091922-045','2025-06-01','1.45','36\'\'','091922-045','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091322-023 situated at Dagupan, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(88,84,'WILFREDO ADQUILEN, JR','NEWAGAK, GATTARAN, CAGAYAN','STIHL','21040020159','2022-09-20','2024-09-20','092022-047','2021-09-14','4.8','36\'\'','092022-047','Exclusive use for pruning of planted trees within private lot of Mr. Wilfredo Adquilen, Jr located at Magapit, Lal-lo, Cagayan amd Newagak, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(89,85,'ESSEX LARA','PERU, LASAM, CAGAYAN','STIHL','121619628','2022-09-23','2024-09-23','092322-048','2019-12-17','4.8','36\'\'','092322-048','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Ownership No. R-2-API-03-04-22-002 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(90,86,'MOISES DECANO','NAGATTATAN, ALLACAPAN, CAGAYAN','RHINOMEC','11701160191','2022-09-27','2024-09-27','092722-049','2025-06-01','4.8','36\'\'','092722-049','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Plantation  No. R-2-API-092222-026 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(91,87,'BLGU OF SAN ANTONIO, APARRI, CAGAYAN REP. BY BRGY. CAPTAIN EVELYN L. ALBANIO','SAN ANTONIO, APARRI, CAGAYAN','HOYOMA','SN20190420128','2022-09-29','2024-09-29','092922-051','2025-06-01','4.8','36\'\'','092922-051','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) of San Antonio, Aparri, Cagayan may serve','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(92,88,'MICHAEL ORTALEZA','MAPURAO, ALLACAPAN, CAGAYAN','SANN','113119650','2022-09-19','2024-09-19','091922-062','2019-05-20','4.8','36\'\'','091922-062','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Plantation  No. R-2-API-07-22-21-002 of Mr. Jose U. Valera situated at Muparao, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(93,89,'JOE RAFUL','BUROT, ALLACAPAN, CAGAYAN','STIHL','82676','2022-09-28','2024-09-28','092822-052','2016-05-01','4.8','36\'\'','092822-052','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-091322-022 situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(94,90,'RICHARD RAMBUYAN','BUROT, ALLACAPAN, CAGAYAN','STIHL','116619661','2022-10-03','2022-10-03','100322-053','2025-06-01','4.8','36\'\'','100322-053','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-092122-025 covered with Katibayan nf Orihinal na Titulo P-21304 (S) situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(95,91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','CENTRO WEST, ALLACAPAN, CAGAYAN','STIHL','807098879','2022-10-03','2022-10-03','100322-054','2025-06-01','4.8','36\'\'','100322-054',':Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Centro West, Allacapan, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(96,91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','CENTRO WEST, ALLACAPAN, CAGAYAN','STIHL','366594455','2022-10-03','2022-10-03','100322-055','2025-06-01','4.8','36\'\'','100322-055',':Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Centro West, Allacapan, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(97,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','142482548','2022-07-08','2024-07-08','070822-001','2019-02-02','4.8','36\'\'','070822-001','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-071522-004 situated at Sitio Magapido, Barangay Pateng, Gonzaga, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(98,48,'RONALD ALVIAR','LABBEN, ALLACAPAN, CAGAYAN','STIHL','110055327','2022-07-11','2024-07-11','071122-002','2025-06-01','4.8','36\'\'','071122-002','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Certificate of Tree Ownership (CTO) No. R-2-Api-070214 situated at Dagupan, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(99,49,'WILFREDO COLEGA','IRINGAN, ALLACAPAN, CAGAYAN','STIHL','174325575','2022-07-11','2024-07-11','071122-003','2014-06-18','4.8','36\'\'','071122-003','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Certificate of Tree Ownership (CTO) No. R-2-Api-121813 situated at Maluyo, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:50','2025-06-01 07:26:31'),(100,53,'ROBERT D. CARLOS ','PERU, LASAM, CAGAYAN','STIHL','22030152','2022-07-21','2023-07-21','072122-007','2022-06-04','4.8','36\'\'','072122-007','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-070422-005 situated at Peru, Lasam, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(101,56,'JHONY NAUI','ALAGUIA, LAL-LO, CAGAYAN','STIHL','11746352','2022-07-26','2024-07-26','072622-010','2022-07-26','4.8','36\'\'','072622-010','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under my Social Integrated Forest Management Agreement (SIFMA)No. 01-001-120 situated at Alaguia, Lal-lo, Cagayan.    ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(102,57,'CATALINA M. ABON','PLAZA, APARRI, CAGAYAN','MCK','SW2101010','2022-07-28','2024-07-28','080122-010','2022-06-23','6.5','36\'\'','080122-010','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees covered with Katibayan ng Orihinal na Titulo BLG. CARP 2014000217 situated at Plaza, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(103,59,'VICTORINO UGALDE','SAN LORENZO, BUGUEY, CAGAYAN','STIHL','S178200108','2022-08-08','2024-08-08','080822-012','2019-03-10','4.8','36\'\'','080822-012','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Katibayan ng Orihinal na Titulo BLG.P-83571 situated at Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(104,61,'SOLEDAD CABUTAJE','BICUD, LAL-LO, CAGAYAN','FUGIHAMA','1901090470','2022-08-11','2024-08-11','081522-014','2025-06-01','4.8','36\'\'','081522-014','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Certificate of Tree Ownership No. R-2-API-060618 situated at Bicud, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(105,62,'RODOLFO ROMANO','SAN PEDRO, LASAM, CAGAYAN','STIHL','1210251975','2022-08-15','2024-08-15','081522-015','2025-06-01','4.8','36\'\'','081522-015','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-012 covered with TCT No. T-39304 situated at San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(106,64,'ORLANDO MARCOS, SR','ALLIG, ALLACAPAN, CAGAYAN','FUJIHAMA','180808021','2022-08-17','2024-08-17','081722-018','2020-05-04','4.8','36\'\'','081722-018','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-011 covered with Original Certificate of Title No. P-(7922) 926 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(107,66,'SERAFIN A. JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','128197041','2022-08-22','2024-08-22','082222-022','2017-05-07','4.8','36\'\'','082222-022','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Private Tree Plantation Registration (PTPR) No. R-2-API-081222-011 situated at Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(108,69,'ROMILIO CARIAGA','CAMBONG, LAL-LO, CAGAYAN','SANN','11133612747','2022-08-26','2024-08-26','083022-029','2020-06-01','4.8','36\'\'','083022-029','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Private Tree Plantation Registration (PTPR) No. R-2-API-082622-014 situated at Sta. Teresa (Magallungon), Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(109,70,'ARNOLD MENDOZA','VIGA, LASAM, CAGAYAN','STIHL','122191972','2022-08-30','2024-08-30','083022-029','2025-06-01','4.8','36\'\'','083022-029','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081722-012 covered by Original Certificate of Title No. P-35242 situated at Viga, LasaM, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(110,71,'EDUARDO CORRALES','CAPISSAYAN NORTE, GATTARAN, CAGAYAN','STIHL','318600827','2022-08-30','2024-08-30','083022-031','2019-08-27','4.8','36\'\'','083022-031','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-083022-015 covered by Transfer Certificate of Title No. T-19852 situated at Capissayan Norte, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(111,73,'MARINO FELIPE','STA. TERESA, LAL-LO, CAGAYAN','SANN','SANN6838','2022-09-06','2024-09-06','090622-036','2022-08-26','4.8','36\'\'','090622-036','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Transfer Certificate of Title No. T-14248 situated my Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019 at Sta. Teresa, Lal-lo, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(112,74,'FRANCISCA REYES','ABAGAO, LAL-LO, CAGAYAN','STIHL','11060210760','2022-09-07','2024-09-07','090722-038','2025-06-01','4.8','36\'\'','090722-038','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019-A under Transfer Certificate of Title No. P-25821 situated at Abagao, Lal0lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(113,75,'DOMINADOR INVIERNO, SR','ROSARIO, LAL-LO, CAGAYAN','FUJIHAMA','18073099','2022-09-07','2024-09-07','090722-037','2020-05-06','4.8','36\'\'','090722-037','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-API-083122-018 situated at Rosari, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(114,76,'ALEJANDRO SALUD JR','CENTRO, ALLACAPAN, CAGAYAN','STIHL','MG-160997110','2022-09-05','2024-09-05','090522-039','2025-06-01','4.8','36\'\'','090522-039','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees within his private lot under Certificate of Tree Plantation Ownership No. 10-005-2020 situated at Tamboli, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(115,78,'ELMER TABILISIMA, JR','CASAMBALANGAN, STA. ANA, CAGAYAN','STIHL','152646714','2022-09-12','2024-09-12','091222-040','2022-08-26','4.8','36\'\'','091222-040','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Stewardship (Integrated Social Forestry) Contract No. 02082127 situated at Casambalangan, Sta. Ana, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(116,79,'PANTALEON PASION','ALANNAY, LASAM, CAGAYAN','STIHL','S162530232','2022-08-30','2024-08-30','091222-041','2019-07-22','4.8','36\'\'','091222-041','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certification of Tree Ownership No. R-2-API-112619 covered by Transfer Certificate of Title No. 032-2017003157 situated at Alannay, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(117,80,'ABRAHAM DIGAP','PERU, LASAM, CAGAYAN','STIHL','GL04201311280566','2022-09-12','2024-09-12','091222-042','2019-05-05','4.8','36\'\'','091222-042','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration (PTPR) under Certificate of Title No. T-19688 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(118,81,'JOEY ANTONIO','BATTALAN, LASAM, CAGAYAN','STIHL','121021979','2022-09-19','2024-09-19','091922-043','2022-08-26','4.8','36\'\'','091922-043','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091222-0120 situated at Battalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(119,86,'MOISES DECANO','NAGATTATAN, ALLACAPAN, CAGAYAN','RHINOMEC','11701160191','2022-09-27','2024-09-27','092722-049','2025-06-01','4.8','36\'\'','092722-049','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Tree Plantation  No. R-2-API-092222-026 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(120,88,'MICHAEL ORTALEZA','MAPURAO, ALLACAPAN, CAGAYAN','SANN','113119650','2022-09-19','2024-09-19','091922-062','2019-05-20','4.8','36\'\'','091922-062','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Tree Plantation  No. R-2-API-07-22-21-002 of Mr. Jose U. Valera situated at Muparao, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(121,89,'JOE RAFUL','BUROT, ALLACAPAN, CAGAYAN','STIHL','82676','2022-09-28','2024-09-28','092822-052','2016-05-01','4.8','36\'\'','092822-052','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-091322-022 situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(122,90,'RICHARD RAMBUYAN','BUROT, ALLACAPAN, CAGAYAN','STIHL','116619661','2022-10-03','2022-10-03','100322-053','2025-06-01','4.8','36\'\'','100322-053','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-092122-025 covered with Katibayan nf Orihinal na Titulo P-21304 (S) situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:51','2025-06-01 07:26:31'),(123,42,'TITO TAJADAO','CABANBANAN NORTE, GONZAGA, CAGAYAN','SANN','G1601090125','2022-11-02','2024-11-02','110222-060','2025-06-01','4.8','36\'\'','110222-060','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-100322-027 under Transfer Certificate of Title No. T-27699 situated at Cabanbanan Norte, Gonzaga, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:52','2025-06-01 07:26:31'),(124,44,'ALBERTO CONFIDENTE','MAXINGAL, LAL-LO, CAGAYAN','SANN','3113','2022-11-15','2024-11-15','111522-062','2025-06-01','4.8','36\'\'','111522-062','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Katibayan ng Orihinal na Titulo No. P-83736 situated at Sicalao, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:52','2025-06-01 07:26:31'),(125,46,'MANUEL MAGDALENA ','LOGAC, LAL-LO, CAGAYAN','STIHL','S175090768','2022-11-21','2024-11-21','112122-064','2018-03-06','4.8','36\'\'','112122-064','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Certificate of Ttitle No. T-10355 situated at Logac, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:52','2025-06-01 07:26:31'),(126,47,'DOMINGO PADRE','SIMPATUYO, STA. TERESITA, CAGAYAN','STIHL','11-596-689','2022-11-21','2024-11-21','112122-066','2025-06-01','4.8','36\'\'','112122-066','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  withi Certificate of Tree Plantation Ownership No. R-2-Api-11-2021-007 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:52','2025-06-01 07:26:32'),(127,92,'DAVI RAGUTERO','STA. MARIA, GATTARAN, CAGAYAN','STIHL','110700061','2022-11-22','2024-11-22','112222-067','2025-06-01','4.8','36\'\'','112122-066','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration No. R-2Api-111122-034 under Transfer Certificate of Title No. T-7875 situated at Sta. Maria, Gattaran, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:52','2025-06-01 07:26:32'),(128,29,'EDWARD CACHOLA','SAN PEDRO, LASAM, CAGAYAN','STIHL','175683096','2023-04-13','2025-04-13','041302023-030','2025-06-01','4.8','36\'\'','041302023-030','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Owneship  (CTO) No. R-2-Api-03-001-2020 situated at  San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-01 07:25:53','2025-06-01 07:26:32');
/*!40000 ALTER TABLE `chainsaws` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foreshore_parents`
--

DROP TABLE IF EXISTS `foreshore_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foreshore_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreshore_parents`
--

LOCK TABLES `foreshore_parents` WRITE;
/*!40000 ALTER TABLE `foreshore_parents` DISABLE KEYS */;
INSERT INTO `foreshore_parents` VALUES (1,'arasd','Cenro Solana','Foreshore','2025-06-01 08:17:54','2025-06-01 08:17:54');
/*!40000 ALTER TABLE `foreshore_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foreshores`
--

DROP TABLE IF EXISTS `foreshores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foreshores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `applicant` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `fla_no` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `remarks_status` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `client_id` bigint(20) unsigned DEFAULT NULL,
  `lands_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foreshores_user_id_foreign` (`user_id`),
  CONSTRAINT `foreshores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreshores`
--

LOCK TABLES `foreshores` WRITE;
/*!40000 ALTER TABLE `foreshores` DISABLE KEYS */;
INSERT INTO `foreshores` VALUES (1,'arasd',NULL,NULL,NULL,NULL,'Cenro Solana',1,'Foreshore',1,NULL,'2025-06-01 08:18:02','2025-06-01 08:18:02'),(2,'arasd',NULL,NULL,NULL,NULL,'Cenro Solana',1,'Foreshore',1,NULL,'2025-06-01 08:18:06','2025-06-01 08:18:06'),(3,'arasd',NULL,NULL,NULL,NULL,'Cenro Solana',1,'Foreshore',1,NULL,'2025-06-01 08:18:10','2025-06-01 08:18:10');
/*!40000 ALTER TABLE `foreshores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lands`
--

DROP TABLE IF EXISTS `lands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `applicant` varchar(255) DEFAULT NULL,
  `applicant_no` varchar(255) DEFAULT NULL,
  `lot_no` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `dpli_mi_si` varchar(255) DEFAULT NULL,
  `lands_type` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `client_id` bigint(20) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lands`
--

LOCK TABLES `lands` WRITE;
/*!40000 ALTER TABLE `lands` DISABLE KEYS */;
INSERT INTO `lands` VALUES (1,'Pudi',NULL,NULL,NULL,NULL,NULL,'FPA','Cenro Aparri',1,1,NULL,'2025-06-01 08:16:21','2025-06-01 08:16:21'),(2,'Pudi',NULL,NULL,NULL,NULL,NULL,'FPA','Cenro Aparri',1,1,NULL,'2025-06-01 08:16:25','2025-06-01 08:16:25'),(3,'Pudi',NULL,NULL,NULL,NULL,NULL,'FPA','Cenro Aparri',1,1,NULL,'2025-06-01 08:16:29','2025-06-01 08:16:29'),(4,'Pudi',NULL,NULL,NULL,NULL,NULL,'FPA','Cenro Aparri',1,1,NULL,'2025-06-01 08:16:49','2025-06-01 08:16:49'),(5,'Pudi',NULL,NULL,NULL,NULL,NULL,'FPA','Cenro Aparri',1,1,NULL,'2025-06-01 08:16:54','2025-06-01 08:16:54');
/*!40000 ALTER TABLE `lands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lands_parents`
--

DROP TABLE IF EXISTS `lands_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lands_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lands_parents`
--

LOCK TABLES `lands_parents` WRITE;
/*!40000 ALTER TABLE `lands_parents` DISABLE KEYS */;
INSERT INTO `lands_parents` VALUES (1,'Pudi','Cenro Aparri','FPA','2025-06-01 08:16:15','2025-06-01 08:16:15');
/*!40000 ALTER TABLE `lands_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lum_dealer_parents`
--

DROP TABLE IF EXISTS `lum_dealer_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lum_dealer_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lum_dealer_parents`
--

LOCK TABLES `lum_dealer_parents` WRITE;
/*!40000 ALTER TABLE `lum_dealer_parents` DISABLE KEYS */;
INSERT INTO `lum_dealer_parents` VALUES (1,'Pudi','Cenro Aparri','Lumber Dealer','2025-06-01 08:03:53','2025-06-01 08:03:53');
/*!40000 ALTER TABLE `lum_dealer_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lum_dealers`
--

DROP TABLE IF EXISTS `lum_dealers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lum_dealers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dealer_parent_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `date_issuance` varchar(255) DEFAULT NULL,
  `date_expiration` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lum_dealers_dealer_parent_id_foreign` (`dealer_parent_id`),
  KEY `lum_dealers_user_id_foreign` (`user_id`),
  CONSTRAINT `lum_dealers_dealer_parent_id_foreign` FOREIGN KEY (`dealer_parent_id`) REFERENCES `lum_dealer_parents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lum_dealers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lum_dealers`
--

LOCK TABLES `lum_dealers` WRITE;
/*!40000 ALTER TABLE `lum_dealers` DISABLE KEYS */;
INSERT INTO `lum_dealers` VALUES (1,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:06','2025-06-01 08:04:06'),(2,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:12','2025-06-01 08:04:12'),(3,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:13','2025-06-01 08:04:13'),(4,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:14','2025-06-01 08:04:14'),(5,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:15','2025-06-01 08:04:15'),(6,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:16','2025-06-01 08:04:16'),(7,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:17','2025-06-01 08:04:17'),(8,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:18','2025-06-01 08:04:18'),(9,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:18','2025-06-01 08:04:18'),(10,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:19','2025-06-01 08:04:19'),(11,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:20','2025-06-01 08:04:20'),(12,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:21','2025-06-01 08:04:21'),(13,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:22','2025-06-01 08:04:22'),(14,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:23','2025-06-01 08:04:23'),(15,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:24','2025-06-01 08:04:24'),(16,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:25','2025-06-01 08:04:25'),(17,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:26','2025-06-01 08:04:26'),(18,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Dealer',1,NULL,'2025-06-01 08:04:26','2025-06-01 08:04:26');
/*!40000 ALTER TABLE `lum_dealers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_03_24_070110_create_type_t_i_s_table',1),(5,'2025_03_27_023341_create_permits_table',1),(6,'2025_04_03_022358_create_chainsaw_parents_table',1),(7,'2025_04_03_022434_create_chainsaws_table',1),(8,'2025_04_03_033111_create_addresses_table',1),(9,'2025_04_10_013653_create_t_i_parents_table',1),(10,'2025_05_08_024723_create_tenurial_instruments_table',1),(11,'2025_05_17_064817_create_lum_dealer_parents_table',1),(12,'2025_05_17_064825_create_lum_dealers_table',1),(13,'2025_05_17_064845_create_supplier_parents_table',1),(14,'2025_05_17_064851_create_suppliers_table',1),(15,'2025_05_17_064906_create_tree_cutting_parents_table',1),(16,'2025_05_17_064915_create_tree_cuttings_table',1),(17,'2025_05_17_064927_create_wild_life_parents_table',1),(18,'2025_05_17_064935_create_wild_lives_table',1),(19,'2025_05_17_064953_create_t_f_p_l_parents_table',1),(20,'2025_05_17_064957_create_t_f_p_l_s_table',1),(21,'2025_05_17_065603_create_foreshore_parents_table',1),(22,'2025_05_17_065617_create_foreshores_table',1),(23,'2025_05_19_074746_create_lands_parents_table',1),(24,'2025_05_20_021738_create_lands_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permits`
--

DROP TABLE IF EXISTS `permits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permit_title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permits`
--

LOCK TABLES `permits` WRITE;
/*!40000 ALTER TABLE `permits` DISABLE KEYS */;
INSERT INTO `permits` VALUES (1,'Tree Cutting',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(2,'Chainsaw',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(3,'Lumber Dealer',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(4,'Supplier',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(5,'Wildlife',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(6,'Transport of Finished Product Lumber',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00');
/*!40000 ALTER TABLE `permits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('2GshD1iPEfOfito64RvTOVM3toX5mrpCo9qgg57m',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3pUaTYyTmxsMzh3SGxKWGFDcGR1WDNsa0p3bFJVWnlxREhwVmYxYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mYXZpY29uLmljbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1748783588),('2vhCcNMTLDw3gMNFlZJePXzzRs7FqkMZ4R9hL08w',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3NERWhHaUV5d3l1MEl6WEVGYWhqTmJhcThWMUMydk1QczUyMTZHMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9QRU5STy9sYW5kcy1leGNlbC9mb3Jlc2hvcmUvMS9DZW5ybyUyMFNvbGFuYS9mb3Jlc2hvcmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1748766002),('A4LmFlwb4vdheyUhpAojbKEFIBBHR58EY3GGKKOl',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUnRXNVYzNzdmeEtmZ2JSQ2VxSHBiT05wTkh4UGJOejY4OHNBSDdrMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1748786338),('IrdXEgrzJ9bLASLpdkSpjl9FAjrnyEhnlO94sZuQ',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) electron-app/1.0.0 Chrome/136.0.7103.115 Electron/36.3.2 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamFZempnbXNWN2pMMXB1ZHdwMjJ1MGx1U0ZNU0dPVlZqYjhwQm5SaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbWFnZXMvcGVucm9fY2FnLnBuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1748784133),('M4oJZE4N0U1ekBlwZUVaWKETkaRSAqkSqsRncWrq',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoieXJXSDlYTmJHWDYyTWJkM1VpUHkzYlV6aFQ0cWtpaktGT2FZN1N3UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mYXZpY29uLmljbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1748762398),('wjNHUZV2JyoAL136b8V9xcQNgohIIxFY2RUZZ5Lm',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) electron-app/1.0.0 Chrome/136.0.7103.115 Electron/36.3.2 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoialNXZU03WEZRaU5CSkliOFJBVHZUQ0FVTkZham51Wkdnc1NxSXBBeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbWFnZXMvcGVucm9fY2FnLnBuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1748762306),('y4HNUPr0IR8PcAlcQ5mhJ1c2eEKwdkBWhknp9EUf',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoicUprU0JVdmFwdmFKTTY0dGNHWlpHeG9jbEcxR1VKbWlZcFFmWkNSNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1748762202),('Zlh6VGFOrcTKhxjo2quSAyNXuqZ97ptM4H8Px9YI',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSUZhRHJsNjFNcWhYcG1kUjFpQU1kNHlBZHBxTE96RkdqTkh1dGtMQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1BFTlJPL1JQUy9kYXNoYm9hcmQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1748763247);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_parents`
--

DROP TABLE IF EXISTS `supplier_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_parents`
--

LOCK TABLES `supplier_parents` WRITE;
/*!40000 ALTER TABLE `supplier_parents` DISABLE KEYS */;
INSERT INTO `supplier_parents` VALUES (1,'Pudi','Cenro Aparri','Lumber Supplier','2025-06-01 08:01:25','2025-06-01 08:01:25');
/*!40000 ALTER TABLE `supplier_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_parent_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `date_issuance` varchar(255) DEFAULT NULL,
  `date_expiration` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suppliers_supplier_parent_id_foreign` (`supplier_parent_id`),
  KEY `suppliers_user_id_foreign` (`user_id`),
  CONSTRAINT `suppliers_supplier_parent_id_foreign` FOREIGN KEY (`supplier_parent_id`) REFERENCES `supplier_parents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `suppliers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:33','2025-06-01 08:01:33'),(2,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:38','2025-06-01 08:01:38'),(3,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:39','2025-06-01 08:01:39'),(4,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:40','2025-06-01 08:01:40'),(5,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:41','2025-06-01 08:01:41'),(6,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:41','2025-06-01 08:01:41'),(7,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:42','2025-06-01 08:01:42'),(8,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:43','2025-06-01 08:01:43'),(9,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:44','2025-06-01 08:01:44'),(10,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:45','2025-06-01 08:01:45'),(11,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:46','2025-06-01 08:01:46'),(12,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:47','2025-06-01 08:01:47'),(13,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:48','2025-06-01 08:01:48'),(14,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:49','2025-06-01 08:01:49'),(15,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:49','2025-06-01 08:01:49'),(16,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:50','2025-06-01 08:01:50'),(17,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:51','2025-06-01 08:01:51'),(18,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:52','2025-06-01 08:01:52'),(19,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:53','2025-06-01 08:01:53'),(20,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:54','2025-06-01 08:01:54'),(21,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:55','2025-06-01 08:01:55'),(22,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:56','2025-06-01 08:01:56'),(23,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:56','2025-06-01 08:01:56'),(24,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:57','2025-06-01 08:01:57'),(25,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:58','2025-06-01 08:01:58'),(26,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:01:59','2025-06-01 08:01:59'),(27,1,'Pudi',NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Lumber Supplier',1,NULL,'2025-06-01 08:02:00','2025-06-01 08:02:00');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_f_p_l_parents`
--

DROP TABLE IF EXISTS `t_f_p_l_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_f_p_l_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_f_p_l_parents`
--

LOCK TABLES `t_f_p_l_parents` WRITE;
/*!40000 ALTER TABLE `t_f_p_l_parents` DISABLE KEYS */;
INSERT INTO `t_f_p_l_parents` VALUES (1,'Paul C. Bautista','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(2,'Policarpio S. Carlos Sr','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(3,'Abraham A. Mayo','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(4,'Mirajah A. Caleda','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(5,'Gricelda T. Abrenica','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(6,'Roldan T. Villa','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(7,'Alvin D. Canceran','Sub Office','TFPL','2025-05-29 07:10:35','2025-05-29 07:10:35'),(8,'Harold Calingao','Cenro Alcala','TFPL','2025-05-29 07:12:53','2025-05-29 07:12:53'),(9,'Harold Calingao','Cenro Alcala','TFPL','2025-05-29 07:12:54','2025-05-29 07:12:54'),(10,'Harold Calingao','Cenro Alcala','TFPL','2025-05-29 07:14:00','2025-05-29 07:14:00'),(11,'Paul C. Bautista','Cenro Alcala','TFPL','2025-05-29 07:21:18','2025-05-29 07:21:18'),(12,'Policarpio S. Carlos Sr','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(13,'Abraham A. Mayo','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(14,'Mirajah A. Caleda','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(15,'Gricelda T. Abrenica','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(16,'Roldan T. Villa','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(17,'Alvin D. Canceran','Cenro Alcala','TFPL','2025-05-29 07:21:19','2025-05-29 07:21:19'),(18,'Paul C. Bautista','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(19,'Policarpio S. Carlos Sr','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(20,'Abraham A. Mayo','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(21,'Mirajah A. Caleda','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(22,'Gricelda T. Abrenica','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(23,'Roldan T. Villa','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18'),(24,'Alvin D. Canceran','Cenro Sanchez Mira','TFPL','2025-06-01 08:06:18','2025-06-01 08:06:18');
/*!40000 ALTER TABLE `t_f_p_l_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_f_p_l_s`
--

DROP TABLE IF EXISTS `t_f_p_l_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_f_p_l_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tfpl_parent_id` bigint(20) unsigned NOT NULL,
  `name_permitee` varchar(255) DEFAULT NULL,
  `place_of_loading` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `species` varchar(255) DEFAULT NULL,
  `permit_no` varchar(255) DEFAULT NULL,
  `volume_to_transport` varchar(255) DEFAULT NULL,
  `no_finish_product` varchar(255) DEFAULT NULL,
  `no_finish_lumber` varchar(255) DEFAULT NULL,
  `date_transport` varchar(255) DEFAULT NULL,
  `cert_and_oath` varchar(255) DEFAULT NULL,
  `inspection` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_f_p_l_s_tfpl_parent_id_foreign` (`tfpl_parent_id`),
  KEY `t_f_p_l_s_user_id_foreign` (`user_id`),
  CONSTRAINT `t_f_p_l_s_tfpl_parent_id_foreign` FOREIGN KEY (`tfpl_parent_id`) REFERENCES `t_f_p_l_parents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `t_f_p_l_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_f_p_l_s`
--

LOCK TABLES `t_f_p_l_s` WRITE;
/*!40000 ALTER TABLE `t_f_p_l_s` DISABLE KEYS */;
INSERT INTO `t_f_p_l_s` VALUES (1,1,'Paul C. Bautista','San Gabriel Tuguegarao City Cagayan','Nuig Sur Sto. Niño Cagayan','Common Hardwood','CAG 01-15-01','280',NULL,'44',NULL,'3198885','146493',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(2,2,'Policarpio S. Carlos Sr','Carig Norte Tuguegarao City Cagayan','Cordova Amulung Cagayan','Acacia/Rain tree','CAG 01-17-02','-',NULL,'-',NULL,'3198856','146489',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(3,3,'Abraham A. Mayo','Caggay Tuguegarao City Cagayan','Dugayung Amulung Cagayan','Common Hardwood','CAG 02-05-03','145.7',NULL,'25',NULL,'3198895','146494',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(4,4,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common Hardwood','CAG 02-10-04','2477.4',NULL,'613',NULL,'3196087','146462',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(5,5,'Gricelda T. Abrenica','Cabasan Peñablanca Cagayan','Remedios Subd, Caggay Tuguegarao City Cagayan','Gmelina Lumber','CAG 02-13-05','240',NULL,'52',NULL,'3198896','146495',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(6,6,'Roldan T. Villa','Dumpao Iguig Cagayan','Cataggaman Tuguegarao City Cagayan','Common Hardwood','CAG-2025-06-W','355.7',NULL,'99','2025-05-29',NULL,NULL,NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(7,4,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common hardwood',NULL,'573','Door with glass, cabinets, window frames w/glass, main door, wine bar cabinet, big cabinet, round table, hanging cabinets, tables side cabinet',NULL,NULL,'3196087','146462',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(8,7,'Alvin D. Canceran','Balzain Tuguegarao City Cagayan','Dasmariñas Cavite','Narra',NULL,'89','1 Oval Old Dining Table with 6 chairs',NULL,NULL,'3198875','146492',NULL,'Sub Office','TFPL',1,NULL,'2025-05-29 07:10:35','2025-05-29 07:10:35'),(9,11,'Paul C. Bautista','San Gabriel Tuguegarao City Cagayan','Nuig Sur Sto. Niño Cagayan','Common Hardwood','CAG 01-15-01','280',NULL,'44','2025-01-19','3198885','146493',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(10,12,'Policarpio S. Carlos Sr','Carig Norte Tuguegarao City Cagayan','Cordova Amulung Cagayan','Acacia/Rain tree','CAG 01-17-02','-',NULL,'-','2025-01-20','3198856','146489',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(11,13,'Abraham A. Mayo','Caggay Tuguegarao City Cagayan','Dugayung Amulung Cagayan','Common Hardwood','CAG 02-05-03','145.7',NULL,'25','2025-02-14','3198895','146494',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(12,14,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common Hardwood','CAG 02-10-04','2477.4',NULL,'613','2025-02-18','3196087','146462',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(13,15,'Gricelda T. Abrenica','Cabasan Peñablanca Cagayan','Remedios Subd, Caggay Tuguegarao City Cagayan','Gmelina Lumber','CAG 02-13-05','240',NULL,'52','2025-02-14','3198896','146495',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(14,16,'Roldan T. Villa','Dumpao Iguig Cagayan','Cataggaman Tuguegarao City Cagayan','Common Hardwood','CAG-2025-06-W','355.7',NULL,'99','2025-05-29',NULL,NULL,NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(15,14,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common hardwood',NULL,'573','Door with glass, cabinets, window frames w/glass, main door, wine bar cabinet, big cabinet, round table, hanging cabinets, tables side cabinet',NULL,'2025-02-18','3196087','146462',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(16,17,'Alvin D. Canceran','Balzain Tuguegarao City Cagayan','Dasmariñas Cavite','Narra',NULL,'89','1 Oval Old Dining Table with 6 chairs',NULL,'2025-02-18','3198875','146492',NULL,'Cenro Alcala','TFPL',1,NULL,'2025-05-29 07:21:19','2025-05-29 07:21:19'),(17,18,'Paul C. Bautista','San Gabriel Tuguegarao City Cagayan','Nuig Sur Sto. Niño Cagayan','Common Hardwood','CAG 01-15-01','280',NULL,'44','2025-01-19','3198885','146493',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(18,19,'Policarpio S. Carlos Sr','Carig Norte Tuguegarao City Cagayan','Cordova Amulung Cagayan','Acacia/Rain tree','CAG 01-17-02','-',NULL,'-','2025-01-20','3198856','146489',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(19,20,'Abraham A. Mayo','Caggay Tuguegarao City Cagayan','Dugayung Amulung Cagayan','Common Hardwood','CAG 02-05-03','145.7',NULL,'25','2025-02-14','3198895','146494',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(20,21,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common Hardwood','CAG 02-10-04','2477.4',NULL,'613','2025-02-18','3196087','146462',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(21,22,'Gricelda T. Abrenica','Cabasan Peñablanca Cagayan','Remedios Subd, Caggay Tuguegarao City Cagayan','Gmelina Lumber','CAG 02-13-05','240',NULL,'52','2025-02-14','3198896','146495',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(22,23,'Roldan T. Villa','Dumpao Iguig Cagayan','Cataggaman Tuguegarao City Cagayan','Common Hardwood','CAG-2025-06-W','355.7',NULL,'99','2025-06-01',NULL,NULL,NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(23,21,'Mirajah A. Caleda','Caritan Sur Tuguegarao City Cagayan','Lingu Solana Cagayan','Common hardwood',NULL,'573','Door with glass, cabinets, window frames w/glass, main door, wine bar cabinet, big cabinet, round table, hanging cabinets, tables side cabinet',NULL,'2025-02-18','3196087','146462',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18'),(24,24,'Alvin D. Canceran','Balzain Tuguegarao City Cagayan','Dasmariñas Cavite','Narra',NULL,'89','1 Oval Old Dining Table with 6 chairs',NULL,'2025-02-18','3198875','146492',NULL,'Cenro Sanchez Mira','TFPL',1,NULL,'2025-06-01 08:06:18','2025-06-01 08:06:18');
/*!40000 ALTER TABLE `t_f_p_l_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_i_parents`
--

DROP TABLE IF EXISTS `t_i_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_i_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_i_parents`
--

LOCK TABLES `t_i_parents` WRITE;
/*!40000 ALTER TABLE `t_i_parents` DISABLE KEYS */;
INSERT INTO `t_i_parents` VALUES (1,' Blue Ridge Resort c/o Febe S. Wilkinson ','Cenro Aparri','FLGMA','2025-06-01 07:29:22','2025-06-01 07:29:22'),(2,'Pudi','Cenro Aparri','FLGMA','2025-06-01 07:45:50','2025-06-01 07:45:50');
/*!40000 ALTER TABLE `t_i_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenurial_instruments`
--

DROP TABLE IF EXISTS `tenurial_instruments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tenurial_instruments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_lessee` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `expired_date` varchar(255) DEFAULT NULL,
  `tenur_no` varchar(255) DEFAULT NULL,
  `total_area` varchar(255) DEFAULT NULL,
  `tenur_type` varchar(255) DEFAULT NULL,
  `tenur_type_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tenurial_instruments_tenur_type_id_foreign` (`tenur_type_id`),
  KEY `tenurial_instruments_client_id_foreign` (`client_id`),
  KEY `tenurial_instruments_user_id_foreign` (`user_id`),
  CONSTRAINT `tenurial_instruments_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `t_i_parents` (`id`) ON DELETE SET NULL,
  CONSTRAINT `tenurial_instruments_tenur_type_id_foreign` FOREIGN KEY (`tenur_type_id`) REFERENCES `type_t_i_s` (`id`) ON DELETE SET NULL,
  CONSTRAINT `tenurial_instruments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenurial_instruments`
--

LOCK TABLES `tenurial_instruments` WRITE;
/*!40000 ALTER TABLE `tenurial_instruments` DISABLE KEYS */;
INSERT INTO `tenurial_instruments` VALUES (1,' Blue Ridge Resort c/o Febe S. Wilkinson ','Sitio Dalupang, SanVicente, Sta. Ana, Cagayan','2019-12-10','2044-12-10','FLAgT No. 02-2019','0.22','FLGMA',5,1,'Cenro Aparri',1,'EXISTING','No Remarks',NULL,'2025-06-01 07:29:22','2025-06-01 07:29:22'),(2,'Blue Ridge Resort c/o Febe S. Wilkinson',NULL,NULL,NULL,NULL,NULL,'FLGMA',5,1,'Cenro Aparri',1,'CANCELLED',NULL,NULL,'2025-06-01 07:37:19','2025-06-01 07:37:32'),(3,'Pudi',NULL,NULL,NULL,NULL,NULL,'FLGMA',5,2,'Cenro Aparri',1,'NEW',NULL,NULL,'2025-06-01 07:46:00','2025-06-01 07:46:00');
/*!40000 ALTER TABLE `tenurial_instruments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tree_cutting_parents`
--

DROP TABLE IF EXISTS `tree_cutting_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tree_cutting_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tree_cutting_parents`
--

LOCK TABLES `tree_cutting_parents` WRITE;
/*!40000 ALTER TABLE `tree_cutting_parents` DISABLE KEYS */;
INSERT INTO `tree_cutting_parents` VALUES (1,'Pudi','Cenro Aparri','Tree Cutting','2025-06-01 07:54:26','2025-06-01 07:54:26'),(2,'arasd','Cenro Aparri','Tree Cutting','2025-06-01 07:54:42','2025-06-01 07:54:42');
/*!40000 ALTER TABLE `tree_cutting_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tree_cuttings`
--

DROP TABLE IF EXISTS `tree_cuttings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tree_cuttings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cutting_parent_id` bigint(20) unsigned NOT NULL,
  `name_permitee` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `no_trees` varchar(255) DEFAULT NULL,
  `species` varchar(255) DEFAULT NULL,
  `approved_volume` varchar(255) DEFAULT NULL,
  `date_issuance` varchar(255) DEFAULT NULL,
  `expiration_date` varchar(255) DEFAULT NULL,
  `seed_requirements` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tree_cuttings_cutting_parent_id_foreign` (`cutting_parent_id`),
  KEY `tree_cuttings_user_id_foreign` (`user_id`),
  CONSTRAINT `tree_cuttings_cutting_parent_id_foreign` FOREIGN KEY (`cutting_parent_id`) REFERENCES `tree_cutting_parents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tree_cuttings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tree_cuttings`
--

LOCK TABLES `tree_cuttings` WRITE;
/*!40000 ALTER TABLE `tree_cuttings` DISABLE KEYS */;
INSERT INTO `tree_cuttings` VALUES (1,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:54:51','2025-06-01 07:54:51'),(2,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:54:58','2025-06-01 07:54:58'),(3,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:54:59','2025-06-01 07:54:59'),(4,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:00','2025-06-01 07:55:00'),(5,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:01','2025-06-01 07:55:01'),(6,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:02','2025-06-01 07:55:02'),(7,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:03','2025-06-01 07:55:03'),(8,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:04','2025-06-01 07:55:04'),(9,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:05','2025-06-01 07:55:05'),(10,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:06','2025-06-01 07:55:06'),(11,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:07','2025-06-01 07:55:07'),(12,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:08','2025-06-01 07:55:08'),(13,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:08','2025-06-01 07:55:08'),(14,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:09','2025-06-01 07:55:09'),(15,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:10','2025-06-01 07:55:10'),(16,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:11','2025-06-01 07:55:11'),(17,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:12','2025-06-01 07:55:12'),(18,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:13','2025-06-01 07:55:13'),(19,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:14','2025-06-01 07:55:14'),(20,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:15','2025-06-01 07:55:15'),(21,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:16','2025-06-01 07:55:16'),(22,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:17','2025-06-01 07:55:17'),(23,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:18','2025-06-01 07:55:18'),(24,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:19','2025-06-01 07:55:19'),(25,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:19','2025-06-01 07:55:19'),(26,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:20','2025-06-01 07:55:20'),(27,2,'arasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:55:21','2025-06-01 07:55:21');
/*!40000 ALTER TABLE `tree_cuttings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_t_i_s`
--

DROP TABLE IF EXISTS `type_t_i_s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_t_i_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_t_i_s`
--

LOCK TABLES `type_t_i_s` WRITE;
/*!40000 ALTER TABLE `type_t_i_s` DISABLE KEYS */;
INSERT INTO `type_t_i_s` VALUES (1,'CSC',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(2,'SIFMA',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(3,'FLAg',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(4,'FLAgT',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(5,'FLGMA',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(6,'SLUP',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(7,'SAPA',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(8,'CBFMA',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(9,'GSUP',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00');
/*!40000 ALTER TABLE `type_t_i_s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@gmail.com',NULL,'1','$2y$12$46kuNTN8Y4FE8GtwFbzmROp5drLAdb2o6dFQjwsJOhi0nU0Bh5k/.',NULL,'2025-05-29 07:10:00','2025-05-29 07:10:00'),(2,'Viewer','viewer@gmail.com',NULL,'0','$2y$12$jAyvJtpfWGb7NwhwT4zWHOlTTgmXQ9XcT8oa1DDQirvEyIeToloH2',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wild_life_parents`
--

DROP TABLE IF EXISTS `wild_life_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wild_life_parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wild_life_parents`
--

LOCK TABLES `wild_life_parents` WRITE;
/*!40000 ALTER TABLE `wild_life_parents` DISABLE KEYS */;
INSERT INTO `wild_life_parents` VALUES (1,'Pudi','Cenro Aparri','Wildlife','2025-06-01 07:50:42','2025-06-01 07:50:42');
/*!40000 ALTER TABLE `wild_life_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wild_lives`
--

DROP TABLE IF EXISTS `wild_lives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wild_lives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `wildlife_parent_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `permit_no` varchar(255) DEFAULT NULL,
  `date_issuance` varchar(255) DEFAULT NULL,
  `date_expiry` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `species_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `unit_measure` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `permit_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wild_lives_wildlife_parent_id_foreign` (`wildlife_parent_id`),
  KEY `wild_lives_user_id_foreign` (`user_id`),
  CONSTRAINT `wild_lives_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `wild_lives_wildlife_parent_id_foreign` FOREIGN KEY (`wildlife_parent_id`) REFERENCES `wild_life_parents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wild_lives`
--

LOCK TABLES `wild_lives` WRITE;
/*!40000 ALTER TABLE `wild_lives` DISABLE KEYS */;
INSERT INTO `wild_lives` VALUES (1,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:50:51','2025-06-01 07:50:51'),(2,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:51:06','2025-06-01 07:51:06'),(3,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:51:28','2025-06-01 07:51:28'),(4,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:51:29','2025-06-01 07:51:29'),(5,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:51:29','2025-06-01 07:51:29'),(6,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:51:30','2025-06-01 07:51:30'),(7,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:01','2025-06-01 07:53:01'),(8,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:40','2025-06-01 07:53:40'),(9,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:40','2025-06-01 07:53:40'),(10,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:41','2025-06-01 07:53:41'),(11,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:41','2025-06-01 07:53:41'),(12,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:41','2025-06-01 07:53:41'),(13,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:42','2025-06-01 07:53:42'),(14,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:42','2025-06-01 07:53:42'),(15,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:42','2025-06-01 07:53:42'),(16,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:42','2025-06-01 07:53:42'),(17,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:43','2025-06-01 07:53:43'),(18,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:43','2025-06-01 07:53:43'),(19,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:43','2025-06-01 07:53:43'),(20,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:43','2025-06-01 07:53:43'),(21,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:44','2025-06-01 07:53:44'),(22,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:44','2025-06-01 07:53:44'),(23,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:44','2025-06-01 07:53:44'),(24,1,'Pudi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cenro Aparri','Tree Cutting',1,NULL,'2025-06-01 07:53:44','2025-06-01 07:53:44');
/*!40000 ALTER TABLE `wild_lives` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-01 22:51:42
