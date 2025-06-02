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
INSERT INTO `addresses` VALUES (1,'Cenro Aparri','chainsaw','2025-06-01 16:35:14','2025-06-01 16:35:14'),(2,'Cenro Solana','chainsaw','2025-06-01 16:35:14','2025-06-01 16:35:14'),(3,'Cenro Sanchez Mira','chainsaw','2025-06-01 16:35:14','2025-06-01 16:35:14'),(4,'Cenro Alcala','chainsaw','2025-06-01 16:35:14','2025-06-01 16:35:14'),(5,'Sub Office','chainsaw','2025-06-01 16:35:14','2025-06-01 16:35:14'),(6,'Cenro Aparri','CSC','2025-06-01 16:35:14','2025-06-01 16:35:14'),(7,'Cenro Solana','CSC','2025-06-01 16:35:14','2025-06-01 16:35:14'),(8,'Cenro Sanchez Mira','CSC','2025-06-01 16:35:14','2025-06-01 16:35:14'),(9,'Cenro Alcala','CSC','2025-06-01 16:35:14','2025-06-01 16:35:14'),(10,'Sub Office','CSC','2025-06-01 16:35:14','2025-06-01 16:35:14'),(11,'Cenro Aparri','SIFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(12,'Cenro Solana','SIFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(13,'Cenro Sanchez Mira','SIFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(14,'Cenro Alcala','SIFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(15,'Sub Office','SIFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(16,'Cenro Aparri','FLAg','2025-06-01 16:35:14','2025-06-01 16:35:14'),(17,'Cenro Solana','FLAg','2025-06-01 16:35:14','2025-06-01 16:35:14'),(18,'Cenro Sanchez Mira','FLAg','2025-06-01 16:35:14','2025-06-01 16:35:14'),(19,'Cenro Alcala','FLAg','2025-06-01 16:35:14','2025-06-01 16:35:14'),(20,'Sub Office','FLAg','2025-06-01 16:35:14','2025-06-01 16:35:14'),(21,'Cenro Aparri','FLAgT','2025-06-01 16:35:14','2025-06-01 16:35:14'),(22,'Cenro Solana','FLAgT','2025-06-01 16:35:14','2025-06-01 16:35:14'),(23,'Cenro Sanchez Mira','FLAgT','2025-06-01 16:35:14','2025-06-01 16:35:14'),(24,'Cenro Alcala','FLAgT','2025-06-01 16:35:14','2025-06-01 16:35:14'),(25,'Sub Office','FLAgT','2025-06-01 16:35:14','2025-06-01 16:35:14'),(26,'Cenro Aparri','FLGMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(27,'Cenro Solana','FLGMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(28,'Cenro Sanchez Mira','FLGMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(29,'Cenro Alcala','FLGMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(30,'Sub Office','FLGMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(31,'Cenro Aparri','SLUP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(32,'Cenro Solana','SLUP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(33,'Cenro Sanchez Mira','SLUP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(34,'Cenro Alcala','SLUP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(35,'Sub Office','SLUP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(36,'Cenro Aparri','SAPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(37,'Cenro Solana','SAPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(38,'Cenro Sanchez Mira','SAPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(39,'Cenro Alcala','SAPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(40,'Sub Office','SAPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(41,'Cenro Aparri','CBFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(42,'Cenro Solana','CBFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(43,'Cenro Sanchez Mira','CBFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(44,'Cenro Alcala','CBFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(45,'Sub Office','CBFMA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(46,'Cenro Aparri','Tree Cutting','2025-06-01 16:35:14','2025-06-01 16:35:14'),(47,'Cenro Solana','Tree Cutting','2025-06-01 16:35:14','2025-06-01 16:35:14'),(48,'Cenro Sanchez Mira','Tree Cutting','2025-06-01 16:35:14','2025-06-01 16:35:14'),(49,'Cenro Alcala','Tree Cutting','2025-06-01 16:35:14','2025-06-01 16:35:14'),(50,'Sub Office','Tree Cutting','2025-06-01 16:35:14','2025-06-01 16:35:14'),(51,'Cenro Aparri','Lumber Dealer','2025-06-01 16:35:14','2025-06-01 16:35:14'),(52,'Cenro Solana','Lumber Dealer','2025-06-01 16:35:14','2025-06-01 16:35:14'),(53,'Cenro Sanchez Mira','Lumber Dealer','2025-06-01 16:35:14','2025-06-01 16:35:14'),(54,'Cenro Alcala','Lumber Dealer','2025-06-01 16:35:14','2025-06-01 16:35:14'),(55,'Sub Office','Lumber Dealer','2025-06-01 16:35:14','2025-06-01 16:35:14'),(56,'Cenro Aparri','Lumber Supplier','2025-06-01 16:35:14','2025-06-01 16:35:14'),(57,'Cenro Solana','Lumber Supplier','2025-06-01 16:35:14','2025-06-01 16:35:14'),(58,'Cenro Sanchez Mira','Lumber Supplier','2025-06-01 16:35:14','2025-06-01 16:35:14'),(59,'Cenro Alcala','Lumber Supplier','2025-06-01 16:35:14','2025-06-01 16:35:14'),(60,'Sub Office','Lumber Supplier','2025-06-01 16:35:14','2025-06-01 16:35:14'),(61,'Cenro Aparri','Wildlife','2025-06-01 16:35:14','2025-06-01 16:35:14'),(62,'Cenro Solana','Wildlife','2025-06-01 16:35:14','2025-06-01 16:35:14'),(63,'Cenro Sanchez Mira','Wildlife','2025-06-01 16:35:14','2025-06-01 16:35:14'),(64,'Cenro Alcala','Wildlife','2025-06-01 16:35:14','2025-06-01 16:35:14'),(65,'Sub Office','Wildlife','2025-06-01 16:35:14','2025-06-01 16:35:14'),(66,'Cenro Aparri','TFPL','2025-06-01 16:35:14','2025-06-01 16:35:14'),(67,'Cenro Solana','TFPL','2025-06-01 16:35:14','2025-06-01 16:35:14'),(68,'Cenro Sanchez Mira','TFPL','2025-06-01 16:35:14','2025-06-01 16:35:14'),(69,'Cenro Alcala','TFPL','2025-06-01 16:35:14','2025-06-01 16:35:14'),(70,'Sub Office','TFPL','2025-06-01 16:35:14','2025-06-01 16:35:14'),(71,'Cenro Aparri','Foreshore','2025-06-01 16:35:14','2025-06-01 16:35:14'),(72,'Cenro Solana','Foreshore','2025-06-01 16:35:14','2025-06-01 16:35:14'),(73,'Cenro Sanchez Mira','Foreshore','2025-06-01 16:35:14','2025-06-01 16:35:14'),(74,'Cenro Alcala','Foreshore','2025-06-01 16:35:14','2025-06-01 16:35:14'),(75,'Sub Office','Foreshore','2025-06-01 16:35:14','2025-06-01 16:35:14'),(76,'Cenro Aparri','SP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(77,'Cenro Solana','SP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(78,'Cenro Sanchez Mira','SP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(79,'Cenro Alcala','SP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(80,'Sub Office','SP','2025-06-01 16:35:14','2025-06-01 16:35:14'),(81,'Cenro Aparri','FPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(82,'Cenro Solana','FPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(83,'Cenro Sanchez Mira','FPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(84,'Cenro Alcala','FPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(85,'Sub Office','FPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(86,'Cenro Aparri','RFPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(87,'Cenro Solana','RFPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(88,'Cenro Sanchez Mira','RFPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(89,'Cenro Alcala','RFPA','2025-06-01 16:35:14','2025-06-01 16:35:14'),(90,'Sub Office','RFPA','2025-06-01 16:35:14','2025-06-01 16:35:14');
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
INSERT INTO `chainsaw_parents` VALUES (1,'DARIO DOMINGO','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(2,'FLORENCIO UDASCO','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(3,'MARLON BALAGAT','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(4,'BLGU OF ABRA, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN LOURENCE L. BATTAD','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(5,'RAZEL TUZON','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(6,'ALEX ORIO','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(7,'EUGELIO B. DELA CRUZ ','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(8,'OSCAR BARRIT','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(9,'ANTONIO A. VILLENA','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(10,'JUANITO VILLENA JR','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(11,'HAROLD CALINGAO','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(12,'DANILO TAMAYO','Cenro Aparri','chainsaw','2025-06-02 02:44:00','2025-06-02 02:44:00'),(13,'GILBERT C. GUILLERMO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(14,'JOANNE JOY UNANA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(15,'BLGU OF GADDANG, APARRI, CAGAYAN  REP. BY BARANGAY CAPTAIN MR. ROMEO V. GAMMAG','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(16,'FELIX BALAO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(17,'BLGU OF MAGSAYSAY, LASAM, CAGAYAN REP. BY ANTONIO BARANGAY CAPTAIN GENOBEBE','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(18,'CELESTINO T. SAGUN','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(19,'ROMEO G. DAYAG','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(20,'CRESENCIO COLLADO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(21,'REYNANTE MACABANGON','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(22,'JAY-AR FELIPE','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(23,'JOWY VIERNES,JR','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(24,'JUANITO P. TAMAPYO, JR','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(25,'VICENTE URMATAM, JR','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(26,'AMANTE T. JAVIER','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(27,'TOMAS BARCENA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(28,'BLGU PADDAYA ESTE, BUGUEY, CAGAYAN REP. BY BARANGAY CAPTAIN PEDRO R. AGOTO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(29,'EDWARD CACHOLA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(30,'BLGU OF L. ADVIENTO, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN FRANKLIN P. TOBIAS','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(31,'LORETA B. ESTAREJA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(32,'GILBERT TUMABAO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(33,'SERAFIN JULIAN','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(34,'JHUNREY ORDIOSO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(35,'BLGU OF MAREDE, STA. ANA, CAGAYAN REP. BY  BARANGAY CAPTAIN ESPERIDION L. ACACIO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(36,'ARNULFO COVITA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(37,'ELMER C. ASIASTICO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(38,'ROGIE BARCENA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(39,'BLGU OF CUNIG, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN OGIE R. TAGUIAM','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(40,'LERNA R. GAMAYON','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(41,'ANGELITO AGCAOILI','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(42,'TITO TAJADAO','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(43,'BLGU TAGUMAY, GATTARAN, CAGAYAN represnted by Brgy. Captain TEOPANIS D. GUTIEREZ','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(44,'ALBERTO CONFIDENTE','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(45,'CHRISTIAN ROSAL','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(46,'MANUEL MAGDALENA ','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(47,'DOMINGO PADRE','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(48,'RONALD ALVIAR','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(49,'WILFREDO COLEGA','Cenro Aparri','chainsaw','2025-06-02 02:44:01','2025-06-02 02:44:01'),(50,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN C/O MEDIE MADAMBA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(51,'BLGU OF PALAGO NORTE, GATTARAN C/O PABLO OÑATE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(52,'DOMINADOR OLALDE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(53,'ROBERT D. CARLOS ','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(54,'CABIRAOAN NATIONAL HIGH SCHOOL C/O LUZVIMINDA G. GUZMAN','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(55,'MARIO KADANO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(56,'JHONY NAUI','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(57,'CATALINA M. ABON','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(58,'ERNESTO SUMAGAY','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(59,'VICTORINO UGALDE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(60,'BLGU OF BASAO, GATTARAN, REP. BRGY. CAPTAIN GILBERT J. GUILLERMO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(61,'SOLEDAD CABUTAJE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(62,'RODOLFO ROMANO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(63,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN REP. BY BRGY. CAPTAIN MARISAN A. JACINTO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(64,'ORLANDO MARCOS, SR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(65,'CARLITO COSTALES','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(66,'SERAFIN A. JULIAN','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(67,'BLGU OF TUCALAN PASSING, LASAM, CAGAYAN REP. BY SANTOS ACEDO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(69,'ROMILIO CARIAGA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(70,'ARNOLD MENDOZA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(71,'EDUARDO CORRALES','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(72,'MINANGA NORTE, LASAM, CAGAYAN REP. BY BRGY. CAPTAIN ROWEL CAMBE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(73,'MARINO FELIPE','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(74,'FRANCISCA REYES','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(75,'DOMINADOR INVIERNO, SR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(76,'ALEJANDRO SALUD JR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(77,'BLGU OF BANAGATAN, GATTARAN, CAGAYAN REP. BY EDGAR F. MARACHA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(78,'ELMER TABILISIMA, JR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(79,'PANTALEON PASION','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(80,'ABRAHAM DIGAP','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(81,'JOEY ANTONIO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(82,'ELIAS BOLO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(83,'JOSELITO TINDOC','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(84,'WILFREDO ADQUILEN, JR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(85,'ESSEX LARA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(86,'MOISES DECANO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(87,'BLGU OF SAN ANTONIO, APARRI, CAGAYAN REP. BY BRGY. CAPTAIN EVELYN L. ALBANIO','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(88,'MICHAEL ORTALEZA','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(89,'JOE RAFUL','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(90,'RICHARD RAMBUYAN','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','Cenro Aparri','chainsaw','2025-06-02 02:44:02','2025-06-02 02:44:02'),(92,'DAVI RAGUTERO','Cenro Aparri','chainsaw','2025-06-02 02:44:03','2025-06-02 02:44:03');
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
INSERT INTO `chainsaws` VALUES (1,1,'DARIO DOMINGO','DALAYAP, ALLACAPAN, CAGAYAN','STIHL','136471044','2023-01-04','2025-01-04','01042023-001','2025-06-02','4.8','36\'\'','01042023-001','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-112122-036 under Transfer certificate of Title C-331 situated at Dalayap, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(2,2,'FLORENCIO UDASCO','BINUBUNGAN, ALLACAPAN, CAGAYAN','STIHL','122919880','2023-01-04','2025-01-04','01042023-002','2025-06-02','4.8','36\'\'','01042023-002','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-121222-040 under Transfer certificate of Title T-11890 (s) situated at Dalayap, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(3,3,'MARLON BALAGAT','CATALAGANAN, LASAM, CAGAYAN','SANN','2923','2023-01-11','2025-01-11','0102023-003','2019-12-27','4.8','36\'\'','01002023-003','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121222-041 under Katibayan ng Orihinal na Titulo P-93312 situated at Cataliganan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(4,4,'BLGU OF ABRA, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN LOURENCE L. BATTAD','ABRA, GATTARAN, CAGAYAN','STIHL','5001-6500','2023-01-13','2025-01-13','01132023-004','2018-10-12','4.8','36\'\'','01132023-004','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Abra, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(5,5,'RAZEL TUZON','GABUN, LASAM, CAGAYAN','STIHL','12050460109','2023-01-11','2025-01-11','01112023-005','2025-06-02','4.8','36\'\'','01112023-005','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -122022-041 under Katibayan ng Orihinal na Titulo P-84139 situated at Gabun, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(6,6,'ALEX ORIO','GABUN, LASAM, CAGAYAN','STIHL','110261964','2023-01-12','2025-01-12','01122023-006','2014-05-16','4.8','36\'\'','071822-006',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -122022-045 under Transfer Certificate of Title No. 032-2013003621 situated at Gabun, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(7,7,'EUGELIO B. DELA CRUZ ','SAN JUAN, ALLACAPAN, CAGAYAN','STIHL','187064487','2023-01-12','2025-01-12','01122023-007','2025-06-02','4.8','36\'\'','01122023-007',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121422-043 under Original Certificate of Title No. P-1809 situated at San Juan, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(8,8,'OSCAR BARRIT','BATALAN, LASAM, CAGAYAN','STIHL','2010612449','2023-01-16','2025-01-16','01162023-008','2025-06-02','4.8','36\'\'','01162023-008','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121422-042 under Katibayan ng Orihinal na Titulo P- 76806 situated at Batalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(9,9,'ANTONIO A. VILLENA','ARIDOWEN, STA. TERESITA, CAGAYAN','STIHL','120808186','2023-01-16','2025-01-16','01162023-009','1996-02-03','4.8','36\'\'','01162023-009','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership No. R2-Api-090808 under Katibayan ng Orihinal na Titulo Blg. P-8095 situated at Aridowen, Sta. Teresita, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(10,10,'JUANITO VILLENA JR','ARIDOWEN, STA. TERESITA, CAGAYAN','STIHL','131094152','2023-01-16','2025-01-16','01162023-010','2025-06-02','4.8','36\'\'','01162023-010','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership No. R2-Api-090808 under Katibayan ng Orihinal na Titulo Blg. P-1941 situated at Aridowen, Sta. Teresita, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(11,11,'HAROLD CALINGAO','ZONE 5, BANGAG, APARRI, CAGAYAN','SANN','D1601090005','2023-01-10','2025-01-10','1102023-011','2016-08-18','4.8','36\'\'','1102023-011','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -121622-044 under Transfer certificate of Title T-20012 and T-26499 situated at Bangag, Aparri West, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:00','2025-06-02 02:48:06'),(12,12,'DANILO TAMAYO','MATUCAY, ALLACAPAN, CAGAYAN','STIHL','110679176612134','2023-01-24','2025-01-24','01242023-012','2025-06-02','4.8','36\'\'','01242023-012','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api -012423-001 under Original Certificate of Title No. 032-P-171(s) situated at Labben, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(13,13,'GILBERT C. GUILLERMO','SILAGAN, ALLACAPAN, CAGAYAN','STIHL','S185573077G','2023-02-07','2025-02-07','02072023-013','2025-06-02','4.8','36\'\'','02072023-013','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-121218-01 under Tax Declaration No. 00179 (Lot No. 119, GSS-473) situated at Silagan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(14,14,'JOANNE JOY UNANA','BANGAG, APARRI, CAGAYAN','STIHL','S160997061','2023-02-07','2025-02-07','02072023-014','2025-06-02','4.8','36\'\'','02072023-014','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-012423-002 under Original Certificate of Title No. P-28219 situated at Bangag, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(15,15,'BLGU OF GADDANG, APARRI, CAGAYAN  REP. BY BARANGAY CAPTAIN MR. ROMEO V. GAMMAG','GADDANG, APARRI, CAGAYAN','HOYOMA ','220198434','2023-02-13','2025-02-13','02132023-015','2018-09-22','4.8','36\'\'','02132023-015','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Gaddang, Aparri, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(16,16,'FELIX BALAO','CABATACAN WEST, LASAM, CAGAYAN','STIHL','1233219640','2023-02-27','2025-02-27','02272023-016','2025-06-02','4.8','36\'\'','02272023-016','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-020823-006 under Original Certificate of Title No. P-39656 situated at Cabatacan, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(17,17,'BLGU OF MAGSAYSAY, LASAM, CAGAYAN REP. BY ANTONIO BARANGAY CAPTAIN GENOBEBE','MAGSAYSAY, LASAM, CAGAYAN','STIHL','1292873','2023-03-13','2025-03-13','03132023-017','2025-06-02','4.8','36\'\'','03132023-017','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Magsaysay, Lasam, Cagayan may serve','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(18,18,'CELESTINO T. SAGUN','CABATACAN WEST, LASAM, CAGAYAN','STIHL','12571683','2023-03-13','2025-03-13','03132023-018','2025-06-02','4.8','36\'\'','03132023-018',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-112122-037 under Original Certificate of Title No. P-39274','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(19,19,'ROMEO G. DAYAG','LABBEN, ALLACAPAN, CAGAYAN','STIHL','159069215','2023-03-13','2025-03-13','013162023-019','2025-06-02','4.8','36\'\'','013162023-019','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-020823-005 under Transfer Certificate of Title No.C-1649 located at Bessang, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(20,20,'CRESENCIO COLLADO','KAPANIKIAN SUR, ALLACAPAN, CAGAYAN','STIHL','114428372','2023-03-21','2025-03-21','03212023-020','2025-06-02','4.8','36\'\'','03212023-020','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-030723-011 under Transfer Certificate of Title No. 034-2015000374 located at Kapanickian, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(21,21,'REYNANTE MACABANGON','CAPALUTAN, ALLACAPAN, CAGAYAN','STIHL','03272023-022','2023-03-27','2025-03-27','03272023-022','2025-06-02','4.8','36\'\'','03272023-022',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-022723-007 under Original Certificate of Title No.P-6484-773 located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(22,22,'JAY-AR FELIPE','CAPALUTAN, ALLACAPAN, CAGAYAN','STIHL','313192045','2023-03-27','2025-03-27','03272023-023','2025-06-02','4.8','36\'\'','03272023-023','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-022723-008 under Original Certificate of Title CARP-2014-000-224 located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(23,23,'JOWY VIERNES,JR','CAPALUTAN, ALLACAPAN, CAGAYAN','SANN','1232','2023-03-27','2025-03-27','03272024-023','2018-06-15','4.8','36\'\'','03272024-023','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-031023-013 under Original Certificate of Title P-17184 (s) located at Capalutan, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(24,24,'JUANITO P. TAMAPYO, JR','PATTAO, BUGUEY, CAGAYAN','STIHL','13302310','2023-04-13','2025-04-13','041302023-025','2025-06-02','4.8','36\'\'','041302023-025',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-031612 situated at  Sta. Isabel, Buguey, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(25,25,'VICENTE URMATAM, JR','NAGUILIAN, LAL-LO, CAGAYAN','STIHL','576019021','2023-04-13','2025-04-13','041302023-026','2025-06-02','4.8','36\'\'','041302023-026','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  (PTPR) No. R-2-Api-040423-014 situated at  Naguilian, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(26,26,'AMANTE T. JAVIER','LUGA, STA. TERESITA, CAGAYAN','STIHL','162205228','2023-04-13','2025-04-13','041302023-027','2025-06-02','4.8','36\'\'','041302023-027','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-033001 situated at  Luga, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(27,27,'TOMAS BARCENA','VILLA CIELO, BUGUEY, CAGAYAN','STIHL','102319625','2023-04-13','2025-04-13','041302023-028','2025-06-02','4.8','36\'\'','041302023-028','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Ownership (CTO) No. R-2-Api-031512 situated at  Villa Cielo, Buguey, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(28,28,'BLGU PADDAYA ESTE, BUGUEY, CAGAYAN REP. BY BARANGAY CAPTAIN PEDRO R. AGOTO','PADDAYA ESTE, BUGUEY, CAGAYAN','STIHL','27642019','2023-04-13','2025-04-13','041302023-029','2025-06-02','4.8','36\'\'','041302023-029','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Paddaya Este, Buguey, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(29,29,'EDWARD CACHOLA','SAN PEDRO, LASAM, CAGAYAN','STIHL','175683096','2023-04-13','2025-04-13','041302023-030','2025-06-02','4.8','36\'\'','041302023-030','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Owneship  (CTO) No. R-2-Api-03-001-2020 situated at  San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(30,30,'BLGU OF L. ADVIENTO, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN FRANKLIN P. TOBIAS','L. ADVIENTO, GATTARAN, CAGAYAN','STIHL','113014006154','2023-04-20','2025-04-20','04202023-031','2025-06-02','4.8','36\'\'','04202023-031','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of L. Adviento, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(31,31,'LORETA B. ESTAREJA','STA. MARIA, GONZAGA, CAGAYAN','STIHL','161601297','2023-04-24','2025-04-24','04242023-032','2025-06-02','4.8','36\'\'','04242023-032','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration  No. R-2-Api-041223 situated at  Sta. Maria, Gonzaga, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(32,32,'GILBERT TUMABAO','GABUN, LASAM, CAGAYAN','STIHL','12161975','2023-04-26','2025-04-26','04262023-033','2025-06-02','4.8','36\'\'','04262023-033','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-041223-020 situated at  Gabun, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(33,33,'SERAFIN JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','20619719','2023-04-26','2025-04-26','04272023-034','2025-06-02','4.8','36\'\'','04272023-034',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-041223-018 situated at  Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(34,34,'JHUNREY ORDIOSO','JURISDICTION, LAL-LO, CAGAYAN','STIHL','20131221-024','2023-04-27','2025-04-27','04262023-034','2025-06-02','4.8','36\'\'','04262023-034','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-042623-024 situated at  Jurisdiction, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(35,35,'BLGU OF MAREDE, STA. ANA, CAGAYAN REP. BY  BARANGAY CAPTAIN ESPERIDION L. ACACIO','MAREDE, STA. ANA, CAGAYAN','STIHL','120131611','2023-05-03','2025-05-03','05032023-036','2025-06-02','4.8','36\'\'','05032023-036','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Merede, Sta. Ana, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(36,36,'ARNULFO COVITA','LABBEN, ALLACAPAN, CAGAYAN','STIHL','175076117','2023-05-03','2025-05-03','05032023-037','2025-06-02','4.8','36\'\'','05032023-037','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-072022-007 situated at  Labben, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(37,37,'ELMER C. ASIASTICO','CAPANICKIAN, ALLACAPAN, CAGAYAN','SANN','102719780','2023-05-03','2025-05-03','05032023-038','2025-06-02','4.8','36\'\'','05032023-038',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Plantation Ownership  (CTPO) No. R-2-Api-08-2021-004 situated at  Capanickian Sur, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(38,38,'ROGIE BARCENA','VILLA CIELO, BUGUEY, CAGAYAN','STIHL','56996621','2023-05-05','2025-05-05','05052023-039','2025-06-02','4.8','36\'\'','05052023-039',' For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-111522-035 situated at  Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(39,39,'BLGU OF CUNIG, GATTARAN, CAGAYAN REP. BY BARANGAY CAPTAIN OGIE R. TAGUIAM','CUNIG, GATTTARAN, CAGAYAN','STIHL','122373190','2023-05-17','2025-05-17','05172023-040','2025-06-02','4.8','36\'\'','05172023-040','  Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Cunig, Gattaran, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(40,40,'LERNA R. GAMAYON','PATTAO, BUGUEY, CAGAYAN','STIHL','040971','2023-05-19','2025-05-19','05192023-041','2025-06-02','4.8','36\'\'','05192023-041','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-051023-027 situated at  Sta. Isabel, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(41,41,'ANGELITO AGCAOILI','DALAYA, LAL-LO, CAGAYAN','STIHL','028197743','2023-05-19','2025-05-19','05192023-042','2025-06-02','4.8','36\'\'','05192023-042','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-051023-026  situated at  Dalaya, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(42,42,'TITO TAJADAO','CABANBANAN NORTE, GONZAGA, CAGAYAN','SANN','G1601090125','2022-11-02','2024-11-02','110222-060','2025-06-02','4.8','36\'\'','110222-060','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-100322-027 under Transfer Certificate of Title No. T-27699 situated at Cabanbanan Norte, Gonzaga, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(43,43,'BLGU TAGUMAY, GATTARAN, CAGAYAN represnted by Brgy. Captain TEOPANIS D. GUTIEREZ','TAGUMAY, GATTARAN, CAGAYAN','STIHL','SW21050433','2022-11-14','2024-11-14','111422-061','2025-06-02','4.8','36\'\'','111422-061','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in tim,es of Calamities and whatever legal purpose the BDRRM of Tagumay, Gattaran, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(44,44,'ALBERTO CONFIDENTE','MAXINGAL, LAL-LO, CAGAYAN','SANN','3113','2022-11-15','2024-11-15','111522-062','2025-06-02','4.8','36\'\'','111522-062','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Katibayan ng Orihinal na Titulo No. P-83736 situated at Sicalao, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(45,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','GL04201405 5210011','2022-11-18','2024-11-18','111822-063','2019-01-02','4.8','36\'\'','111822-063','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 of Mr. Gilbert Goze under Katibayan ng Orihinal na Titulo Blg. CARP2020000064 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(46,46,'MANUEL MAGDALENA ','LOGAC, LAL-LO, CAGAYAN','STIHL','S175090768','2022-11-21','2024-11-21','112122-064','2018-03-06','4.8','36\'\'','112122-064','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Certificate of Ttitle No. T-10355 situated at Logac, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(47,47,'DOMINGO PADRE','SIMPATUYO, STA. TERESITA, CAGAYAN','STIHL','11-596-689','2022-11-21','2024-11-21','112122-066','2025-06-02','4.8','36\'\'','112122-066','For Plantation development and Maintenance (Pruning, Thinning and Cutting) withi Certificate of Tree Plantation Ownership No. R-2-Api-11-2021-007 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(48,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','142482548','2022-07-08','2024-07-08','070822-001','2019-02-02','4.8','36\'\'','070822-001','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-071522-004 situated at Sitio Magapido, Barangay Pateng, Gonzaga, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(49,48,'RONALD ALVIAR','LABBEN, ALLACAPAN, CAGAYAN','STIHL','110055327','2022-07-11','2024-07-11','071122-002','2025-06-02','4.8','36\'\'','071122-002','For plantation development and maintenance (prunning, thinning and cutting) covered under Certificate of Tree Ownership (CTO) No. R-2-Api-070214 situated at Dagupan, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:01','2025-06-02 02:48:06'),(50,49,'WILFREDO COLEGA','IRINGAN, ALLACAPAN, CAGAYAN','STIHL','174325575','2022-07-11','2024-07-11','071122-003','2014-06-18','4.8','36\'\'','071122-003','For plantation development and maintenance (prunning, thinning and cutting) covered under Certificate of Tree Ownership (CTO) No. R-2-Api-121813 situated at Maluyo, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:06'),(51,50,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN C/O MEDIE MADAMBA','TUCALAN, PASSING, LASAM','SANN','1701190036','2022-07-12','2024-07-12','071222-004','2017-08-12','4.8','36\'\'','071222-004','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:06'),(52,51,'BLGU OF PALAGO NORTE, GATTARAN C/O PABLO OÑATE','PALAGO NORTE, GATTARAN, CAGAYAN','STIHL','12074658','2022-07-12','2024-07-12','071222-005','2018-03-10','4.8','36\'\'','071222-005','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Palago Norte may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:06'),(53,52,'DOMINADOR OLALDE','DAGUPAN, ALLACAPAN, CAGAYAN','SANN','106796648','2022-07-12','2023-07-12','071822-006','2014-05-16','4.8','36\'\'','071822-006','For cutting/harvesting harvestable and damged trees within the Certificate of Tree Onwership (CTO) OF Mr. Nicomedes Tabunar covered with CTO No. R-2-Api-08-2021-006 situated at Labben, Allacpan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:06'),(54,53,'ROBERT D. CARLOS ','PERU, LASAM, CAGAYAN','STIHL','22030152','2022-07-21','2023-07-21','072122-007','2022-06-04','4.8','36\'\'','072122-007','For plantation development and maintenance (prunning, thinning and cutting) covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-070422-005 situated at Peru, Lasam, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(55,54,'CABIRAOAN NATIONAL HIGH SCHOOL C/O LUZVIMINDA G. GUZMAN','CABIRAOAN, GONZAGA, CAGAYAN','PORTABLE CHAINSAW','PH-CHSW-5800-22','2022-07-21','2023-07-21','072522-008','2022-04-25',NULL,NULL,'072522-008','Exclusive use for Cabiraoan National High School Agricrop Production students and for whatever legal purpose the Cabiraoan National High School may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(56,55,'MARIO KADANO','SAN VICENTE, GATTARAN, CAGAYAN','SANN','1012019654','2022-07-26','2023-07-26','072622-009','2022-04-25','4.8','36\'\'','072622-009','For cutting planted Gmelina trees within my private lot covered by Certficate of Tree Ownership No. R-2-Api-10172007 situated at San Vicente, Gattaran, Cagayan and Original Certificate of Title P-63007.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(57,56,'JHONY NAUI','ALAGUIA, LAL-LO, CAGAYAN','STIHL','11746352','2022-07-26','2024-07-26','072622-010','2022-07-26','4.8','36\'\'','072622-010','For plantation development and maintenance (prunning, thinning and cutting) under my Social Integrated Forest Management Agreement (SIFMA)No. 01-001-120 situated at Alaguia, Lal-lo, Cagayan.    ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(58,57,'CATALINA M. ABON','PLAZA, APARRI, CAGAYAN','MCK','SW2101010','2022-07-28','2024-07-28','080122-010','2022-06-23','6.5','36\'\'','080122-010','For plantation development and maintenance (prunning, thinning and cutting) covered with Katibayan ng Orihinal na Titulo BLG. CARP 2014000217 situated at Plaza, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(59,58,'ERNESTO SUMAGAY','CAPIDDIGAN, GATTARAN, CAGAYAN','STIHL','15189642926','2022-08-05','2024-08-05','080522-011','2022-06-01','4.8','36\'\'','080522-011','For cutting, pruning, slicing of damaged/fallen trees and other road obstructions when there are calamities (for Barangay Disaster Risk Reduction Management)','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(60,59,'VICTORINO UGALDE','SAN LORENZO, BUGUEY, CAGAYAN','STIHL','S178200108','2022-08-08','2024-08-08','080822-012','2019-03-10','4.8','36\'\'','080822-012','For plantation development and maintenance (prunning, thinning and cutting) covered with Katibayan ng Orihinal na Titulo BLG.P-83571 situated at Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(61,60,'BLGU OF BASAO, GATTARAN, REP. BRGY. CAPTAIN GILBERT J. GUILLERMO','BASAO, GATTARAN, CAGAYAN','STIHL','MG-110-6021-0760','2022-08-11','2024-08-11','081122-013','2018-10-12','4.8','36\'\'','081122-013','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Basao, Gattaran may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(62,61,'SOLEDAD CABUTAJE','BICUD, LAL-LO, CAGAYAN','FUGIHAMA','1901090470','2022-08-11','2024-08-11','081522-014','2025-06-02','4.8','36\'\'','081522-014','For plantation development and maintenance (prunning, thinning and cutting) under Certificate of Tree Ownership No. R-2-API-060618 situated at Bicud, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(63,62,'RODOLFO ROMANO','SAN PEDRO, LASAM, CAGAYAN','STIHL','1210251975','2022-08-15','2024-08-15','081522-015','2025-06-02','4.8','36\'\'','081522-015','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-012 covered with TCT No. T-39304 situated at San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(64,63,'BLGU OF TUCALAN PASSING, LASAM CAGAYAN REP. BY BRGY. CAPTAIN MARISAN A. JACINTO','TUCALAN, PASSING, LASAM','SANN','2235','2022-08-17','2024-08-17','081722-016','2019-07-25','4.8','36\'\'','081722-016','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing, Lasam may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(65,64,'ORLANDO MARCOS, SR','ALLIG, ALLACAPAN, CAGAYAN','FUJIHAMA','180808021','2022-08-17','2024-08-17','081722-018','2020-05-04','4.8','36\'\'','081722-018','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-011 covered with Original Certificate of Title No. P-(7922) 926 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(66,65,'CARLITO COSTALES','KAPAGARAN, ALLACAPAN, CAGAYAN','STIHL','121268159','2022-08-17','2024-08-17','081722-019','2010-04-22','4.8','36\'\'','081722-019','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-.072022-006 covered with TCT No. C-4404 (S) situated at Kapagaran, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(67,66,'SERAFIN A. JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','128197041','2022-08-22','2024-08-22','082222-022','2017-05-07','4.8','36\'\'','082222-022','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081222-011 situated at Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(68,67,'BLGU OF TUCALAN PASSING, LASAM, CAGAYAN REP. BY SANTOS ACEDO','TUCALAN, PASSING, LASAM','STIHL','364073200','2022-08-22','2024-08-22','082222-023','2019-04-05','4.8','36\'\'','082222-023','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Tucalan Passing, Lasam may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(69,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203137','2022-08-22','2024-08-22','082222-024','2022-08-02','4.8','22\'\'','082222-024','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(70,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203188','2022-08-22','2024-08-22','082222-025','2022-08-02','4.8','22\'\'','082222-025','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(71,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','J.CK.','203265','2022-08-22','2024-08-22','082222-026','2022-08-02','4.8','22\'\'','082222-026','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(72,68,'CAGAYAN STATE UNIVERSITY REP. BY ANTONIO C. CABALBAG, PHD','STA. MARIA, LAL-LO, CAGAYAN','STIHL','S168808795','2022-08-22','2024-08-22','082222-027',NULL,'4.8','36\'\'','082222-027','Exclusive use for Cagayan State University (CSU-Lal-lo Campus) for Plantation Development and Maintenance (Pruning, Thinning and Cutting) and for whatever legal purpose the CSU may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(73,69,'ROMILIO CARIAGA','CAMBONG, LAL-LO, CAGAYAN','SANN','11133612747','2022-08-26','2024-08-26','083022-029','2020-06-01','4.8','36\'\'','083022-029','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-082622-014 situated at Sta. Teresa (Magallungon), Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(74,70,'ARNOLD MENDOZA','VIGA, LASAM, CAGAYAN','STIHL','122191972','2022-08-30','2024-08-30','083022-029','2025-06-02','4.8','36\'\'','083022-029','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-081722-012 covered by Original Certificate of Title No. P-35242 situated at Viga, LasaM, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(75,71,'EDUARDO CORRALES','CAPISSAYAN NORTE, GATTARAN, CAGAYAN','STIHL','318600827','2022-08-30','2024-08-30','083022-031','2019-08-27','4.8','36\'\'','083022-031','For plantation development and maintenance (prunning, thinning and cutting) under Private Tree Plantation Registration (PTPR) No. R-2-API-083022-015 covered by Transfer Certificate of Title No. T-19852 situated at Capissayan Norte, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(76,72,'MINANGA NORTE, LASAM, CAGAYAN REP. BY BRGY. CAPTAIN ROWEL CAMBE','MINANGA NORTE, LASAM, CAGAYAN','STIHL','12030274','2022-09-05','2024-09-05','090522-032','2025-06-02','4.8','36\'\'','090522-032','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) and other related activities during and after the onslaught of typhoons and other related calamities.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(77,73,'MARINO FELIPE','STA. TERESA, LAL-LO, CAGAYAN','SANN','SANN6838','2022-09-06','2024-09-06','090622-036','2022-08-26','4.8','36\'\'','090622-036','For plantation development and maintenance (prunning, thinning and cutting) covered with Transfer Certificate of Title No. T-14248 situated my Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019 at Sta. Teresa, Lal-lo, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(78,74,'FRANCISCA REYES','ABAGAO, LAL-LO, CAGAYAN','STIHL','11060210760','2022-09-07','2024-09-07','090722-038','2025-06-02','4.8','36\'\'','090722-038','For plantation development and maintenance (prunning, thinning and cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019-A under Transfer Certificate of Title No. P-25821 situated at Abagao, Lal0lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(79,75,'DOMINADOR INVIERNO, SR','ROSARIO, LAL-LO, CAGAYAN','FUJIHAMA','18073099','2022-09-07','2024-09-07','090722-037','2020-05-06','4.8','36\'\'','090722-037','For plantation development and maintenance (prunning, thinning and cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-API-083122-018 situated at Rosari, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(80,76,'ALEJANDRO SALUD JR','CENTRO, ALLACAPAN, CAGAYAN','STIHL','MG-160997110','2022-09-05','2024-09-05','090522-039','2025-06-02','4.8','36\'\'','090522-039','For plantation development and maintenance (prunning, thinning and cutting) within his private lot under Certificate of Tree Plantation Ownership No. 10-005-2020 situated at Tamboli, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(81,77,'BLGU OF BANAGATAN, GATTARAN, CAGAYAN REP. BY EDGAR F. MARACHA','BANGATAN, GATTARAN, CAGAYAN','STIHL','719040023','2022-09-12','2024-09-12','090522-039','2020-06-09','4.8','36\'\'','090522-039','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operations in times of Calamities and whatever legal purpose the BDRRM of Bangatan, Gattaran,  may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(82,78,'ELMER TABILISIMA, JR','CASAMBALANGAN, STA. ANA, CAGAYAN','STIHL','152646714','2022-09-12','2024-09-12','091222-040','2022-08-26','4.8','36\'\'','091222-040','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Stewardship (Integrated Social Forestry) Contract No. 02082127 situated at Casambalangan, Sta. Ana, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(83,79,'PANTALEON PASION','ALANNAY, LASAM, CAGAYAN','STIHL','S162530232','2022-08-30','2024-08-30','091222-041','2019-07-22','4.8','36\'\'','091222-041','For plantation development and maintenance (prunning, thinning and cutting) covered with Certification of Tree Ownership No. R-2-API-112619 covered by Transfer Certificate of Title No. 032-2017003157 situated at Alannay, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(84,80,'ABRAHAM DIGAP','PERU, LASAM, CAGAYAN','STIHL','GL04201311280566','2022-09-12','2024-09-12','091222-042','2019-05-05','4.8','36\'\'','091222-042','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. T-19688 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(85,81,'JOEY ANTONIO','BATTALAN, LASAM, CAGAYAN','STIHL','121021979','2022-09-19','2024-09-19','091922-043','2022-08-26','4.8','36\'\'','091922-043','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091222-0120 situated at Battalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(86,82,'ELIAS BOLO','CABATACAN WEST, LASAM, CAGAYAN','FUJIHAMA','SW2009004','2022-09-19','2024-09-19','091922-044',NULL,'4.8','36\'\'','091922-044','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree  Plantation Registration No. R-2-API-020922-04 situated at Cabatacan West, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(87,83,'JOSELITO TINDOC','DAGUPAN, ALLACAPAN, CAGAYAN','RHINOMEC','D-1514830284','2022-09-19','2024-09-19','091922-045','2025-06-02','1.45','36\'\'','091922-045','For plantation development and maintenance (prunning, thinning and cutting) within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091322-023 situated at Dagupan, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(88,84,'WILFREDO ADQUILEN, JR','NEWAGAK, GATTARAN, CAGAYAN','STIHL','21040020159','2022-09-20','2024-09-20','092022-047','2021-09-14','4.8','36\'\'','092022-047','Exclusive use for pruning of planted trees within private lot of Mr. Wilfredo Adquilen, Jr located at Magapit, Lal-lo, Cagayan amd Newagak, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(89,85,'ESSEX LARA','PERU, LASAM, CAGAYAN','STIHL','121619628','2022-09-23','2024-09-23','092322-048','2019-12-17','4.8','36\'\'','092322-048','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Ownership No. R-2-API-03-04-22-002 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(90,86,'MOISES DECANO','NAGATTATAN, ALLACAPAN, CAGAYAN','RHINOMEC','11701160191','2022-09-27','2024-09-27','092722-049','2025-06-02','4.8','36\'\'','092722-049','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Plantation  No. R-2-API-092222-026 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(91,87,'BLGU OF SAN ANTONIO, APARRI, CAGAYAN REP. BY BRGY. CAPTAIN EVELYN L. ALBANIO','SAN ANTONIO, APARRI, CAGAYAN','HOYOMA','SN20190420128','2022-09-29','2024-09-29','092922-051','2025-06-02','4.8','36\'\'','092922-051','Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM) of San Antonio, Aparri, Cagayan may serve','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(92,88,'MICHAEL ORTALEZA','MAPURAO, ALLACAPAN, CAGAYAN','SANN','113119650','2022-09-19','2024-09-19','091922-062','2019-05-20','4.8','36\'\'','091922-062','For plantation development and maintenance (prunning, thinning and cutting) covered with Certificate of Tree Plantation  No. R-2-API-07-22-21-002 of Mr. Jose U. Valera situated at Muparao, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(93,89,'JOE RAFUL','BUROT, ALLACAPAN, CAGAYAN','STIHL','82676','2022-09-28','2024-09-28','092822-052','2016-05-01','4.8','36\'\'','092822-052','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-091322-022 situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(94,90,'RICHARD RAMBUYAN','BUROT, ALLACAPAN, CAGAYAN','STIHL','116619661','2022-10-03','2022-10-03','100322-053','2025-06-02','4.8','36\'\'','100322-053','For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-092122-025 covered with Katibayan nf Orihinal na Titulo P-21304 (S) situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(95,91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','CENTRO WEST, ALLACAPAN, CAGAYAN','STIHL','807098879','2022-10-03','2022-10-03','100322-054','2025-06-02','4.8','36\'\'','100322-054',':Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Centro West, Allacapan, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(96,91,'BLGU OF CENTRO WEST, ALLACAPAN, CAGAYAN REP. BY BRGY. CAPTAIN NAPOLEON SALDIVAR','CENTRO WEST, ALLACAPAN, CAGAYAN','STIHL','366594455','2022-10-03','2022-10-03','100322-055','2025-06-02','4.8','36\'\'','100322-055',':Exclusive use for Barangay Disaster Risk Reduction Management (BDRRM)  for clearing operation in times of Calamities and whatever legal purpose the BDRRM of Centro West, Allacapan, Cagayan may serve.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(97,45,'CHRISTIAN ROSAL','BUYUN, STA. TERESITA, CAGAYAN','STIHL','142482548','2022-07-08','2024-07-08','070822-001','2019-02-02','4.8','36\'\'','070822-001','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-071522-004 situated at Sitio Magapido, Barangay Pateng, Gonzaga, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(98,48,'RONALD ALVIAR','LABBEN, ALLACAPAN, CAGAYAN','STIHL','110055327','2022-07-11','2024-07-11','071122-002','2025-06-02','4.8','36\'\'','071122-002','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Certificate of Tree Ownership (CTO) No. R-2-Api-070214 situated at Dagupan, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(99,49,'WILFREDO COLEGA','IRINGAN, ALLACAPAN, CAGAYAN','STIHL','174325575','2022-07-11','2024-07-11','071122-003','2014-06-18','4.8','36\'\'','071122-003','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Certificate of Tree Ownership (CTO) No. R-2-Api-121813 situated at Maluyo, Allacapan, Cagayan.              ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(100,53,'ROBERT D. CARLOS ','PERU, LASAM, CAGAYAN','STIHL','22030152','2022-07-21','2023-07-21','072122-007','2022-06-04','4.8','36\'\'','072122-007','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-070422-005 situated at Peru, Lasam, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(101,56,'JHONY NAUI','ALAGUIA, LAL-LO, CAGAYAN','STIHL','11746352','2022-07-26','2024-07-26','072622-010','2022-07-26','4.8','36\'\'','072622-010','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under my Social Integrated Forest Management Agreement (SIFMA)No. 01-001-120 situated at Alaguia, Lal-lo, Cagayan.    ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(102,57,'CATALINA M. ABON','PLAZA, APARRI, CAGAYAN','MCK','SW2101010','2022-07-28','2024-07-28','080122-010','2022-06-23','6.5','36\'\'','080122-010','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees covered with Katibayan ng Orihinal na Titulo BLG. CARP 2014000217 situated at Plaza, Aparri, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(103,59,'VICTORINO UGALDE','SAN LORENZO, BUGUEY, CAGAYAN','STIHL','S178200108','2022-08-08','2024-08-08','080822-012','2019-03-10','4.8','36\'\'','080822-012','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Katibayan ng Orihinal na Titulo BLG.P-83571 situated at Villa Cielo, Buguey, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(104,61,'SOLEDAD CABUTAJE','BICUD, LAL-LO, CAGAYAN','FUGIHAMA','1901090470','2022-08-11','2024-08-11','081522-014','2025-06-02','4.8','36\'\'','081522-014','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Certificate of Tree Ownership No. R-2-API-060618 situated at Bicud, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(105,62,'RODOLFO ROMANO','SAN PEDRO, LASAM, CAGAYAN','STIHL','1210251975','2022-08-15','2024-08-15','081522-015','2025-06-02','4.8','36\'\'','081522-015','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-012 covered with TCT No. T-39304 situated at San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(106,64,'ORLANDO MARCOS, SR','ALLIG, ALLACAPAN, CAGAYAN','FUJIHAMA','180808021','2022-08-17','2024-08-17','081722-018','2020-05-04','4.8','36\'\'','081722-018','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081522-011 covered with Original Certificate of Title No. P-(7922) 926 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(107,66,'SERAFIN A. JULIAN','PARANUM, LAL-LO, CAGAYAN','STIHL','128197041','2022-08-22','2024-08-22','082222-022','2017-05-07','4.8','36\'\'','082222-022','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Private Tree Plantation Registration (PTPR) No. R-2-API-081222-011 situated at Paranum, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(108,69,'ROMILIO CARIAGA','CAMBONG, LAL-LO, CAGAYAN','SANN','11133612747','2022-08-26','2024-08-26','083022-029','2020-06-01','4.8','36\'\'','083022-029','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees under Private Tree Plantation Registration (PTPR) No. R-2-API-082622-014 situated at Sta. Teresa (Magallungon), Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(109,70,'ARNOLD MENDOZA','VIGA, LASAM, CAGAYAN','STIHL','122191972','2022-08-30','2024-08-30','083022-029','2025-06-02','4.8','36\'\'','083022-029','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-081722-012 covered by Original Certificate of Title No. P-35242 situated at Viga, LasaM, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(110,71,'EDUARDO CORRALES','CAPISSAYAN NORTE, GATTARAN, CAGAYAN','STIHL','318600827','2022-08-30','2024-08-30','083022-031','2019-08-27','4.8','36\'\'','083022-031','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  under Private Tree Plantation Registration (PTPR) No. R-2-API-083022-015 covered by Transfer Certificate of Title No. T-19852 situated at Capissayan Norte, Gattaran, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(111,73,'MARINO FELIPE','STA. TERESA, LAL-LO, CAGAYAN','SANN','SANN6838','2022-09-06','2024-09-06','090622-036','2022-08-26','4.8','36\'\'','090622-036','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Transfer Certificate of Title No. T-14248 situated my Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019 at Sta. Teresa, Lal-lo, Cagayan. ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(112,74,'FRANCISCA REYES','ABAGAO, LAL-LO, CAGAYAN','STIHL','11060210760','2022-09-07','2024-09-07','090722-038','2025-06-02','4.8','36\'\'','090722-038','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-API-090622-019-A under Transfer Certificate of Title No. P-25821 situated at Abagao, Lal0lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:02','2025-06-02 02:48:07'),(113,75,'DOMINADOR INVIERNO, SR','ROSARIO, LAL-LO, CAGAYAN','FUJIHAMA','18073099','2022-09-07','2024-09-07','090722-037','2020-05-06','4.8','36\'\'','090722-037','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-API-083122-018 situated at Rosari, Lal-lo, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(114,76,'ALEJANDRO SALUD JR','CENTRO, ALLACAPAN, CAGAYAN','STIHL','MG-160997110','2022-09-05','2024-09-05','090522-039','2025-06-02','4.8','36\'\'','090522-039','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees within his private lot under Certificate of Tree Plantation Ownership No. 10-005-2020 situated at Tamboli, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(115,78,'ELMER TABILISIMA, JR','CASAMBALANGAN, STA. ANA, CAGAYAN','STIHL','152646714','2022-09-12','2024-09-12','091222-040','2022-08-26','4.8','36\'\'','091222-040','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Stewardship (Integrated Social Forestry) Contract No. 02082127 situated at Casambalangan, Sta. Ana, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(116,79,'PANTALEON PASION','ALANNAY, LASAM, CAGAYAN','STIHL','S162530232','2022-08-30','2024-08-30','091222-041','2019-07-22','4.8','36\'\'','091222-041','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certification of Tree Ownership No. R-2-API-112619 covered by Transfer Certificate of Title No. 032-2017003157 situated at Alannay, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(117,80,'ABRAHAM DIGAP','PERU, LASAM, CAGAYAN','STIHL','GL04201311280566','2022-09-12','2024-09-12','091222-042','2019-05-05','4.8','36\'\'','091222-042','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration (PTPR) under Certificate of Title No. T-19688 situated at Peru, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(118,81,'JOEY ANTONIO','BATTALAN, LASAM, CAGAYAN','STIHL','121021979','2022-09-19','2024-09-19','091922-043','2022-08-26','4.8','36\'\'','091922-043','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration (PTPR) under Certificate of Title No. R-2-API-091222-0120 situated at Battalan, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(119,86,'MOISES DECANO','NAGATTATAN, ALLACAPAN, CAGAYAN','RHINOMEC','11701160191','2022-09-27','2024-09-27','092722-049','2025-06-02','4.8','36\'\'','092722-049','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Tree Plantation  No. R-2-API-092222-026 situated at Allig, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(120,88,'MICHAEL ORTALEZA','MAPURAO, ALLACAPAN, CAGAYAN','SANN','113119650','2022-09-19','2024-09-19','091922-062','2019-05-20','4.8','36\'\'','091922-062','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Certificate of Tree Plantation  No. R-2-API-07-22-21-002 of Mr. Jose U. Valera situated at Muparao, Allacapan, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(121,89,'JOE RAFUL','BUROT, ALLACAPAN, CAGAYAN','STIHL','82676','2022-09-28','2024-09-28','092822-052','2016-05-01','4.8','36\'\'','092822-052','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-091322-022 situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(122,90,'RICHARD RAMBUYAN','BUROT, ALLACAPAN, CAGAYAN','STIHL','116619661','2022-10-03','2022-10-03','100322-053','2025-06-02','4.8','36\'\'','100322-053','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered with Private Tree Plantation Registration (PTPR) No. R-2-Api-092122-025 covered with Katibayan nf Orihinal na Titulo P-21304 (S) situated at Burot, Allacapan, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(123,42,'TITO TAJADAO','CABANBANAN NORTE, GONZAGA, CAGAYAN','SANN','G1601090125','2022-11-02','2024-11-02','110222-060','2025-06-02','4.8','36\'\'','110222-060','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-100322-027 under Transfer Certificate of Title No. T-27699 situated at Cabanbanan Norte, Gonzaga, Cagayan.         ','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(124,44,'ALBERTO CONFIDENTE','MAXINGAL, LAL-LO, CAGAYAN','SANN','3113','2022-11-15','2024-11-15','111522-062','2025-06-02','4.8','36\'\'','111522-062','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Katibayan ng Orihinal na Titulo No. P-83736 situated at Sicalao, Lasam, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(125,46,'MANUEL MAGDALENA ','LOGAC, LAL-LO, CAGAYAN','STIHL','S175090768','2022-11-21','2024-11-21','112122-064','2018-03-06','4.8','36\'\'','112122-064','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  covered under Private Tree Plantation Registration (PTPR) No. R-2-Api-110922-001 under Certificate of Ttitle No. T-10355 situated at Logac, Lal-lo, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(126,47,'DOMINGO PADRE','SIMPATUYO, STA. TERESITA, CAGAYAN','STIHL','11-596-689','2022-11-21','2024-11-21','112122-066','2025-06-02','4.8','36\'\'','112122-066','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  withi Certificate of Tree Plantation Ownership No. R-2-Api-11-2021-007 situated at Simpatuyo, Sta. Teresita, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(127,92,'DAVI RAGUTERO','STA. MARIA, GATTARAN, CAGAYAN','STIHL','110700061','2022-11-22','2024-11-22','112222-067','2025-06-02','4.8','36\'\'','112122-066','For maintenance of plantation (prunning, thinning) and cutting of harvestable planted trees  within Private Tree Plantation Registration No. R-2Api-111122-034 under Transfer Certificate of Title No. T-7875 situated at Sta. Maria, Gattaran, Cagayan.','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07'),(128,29,'EDWARD CACHOLA','SAN PEDRO, LASAM, CAGAYAN','STIHL','175683096','2023-04-13','2025-04-13','041302023-030','2025-06-02','4.8','36\'\'','041302023-030','  For Plantation Development and Maintenance (Pruning, Thinning and Cutting) covered with Certificate of Tree Owneship  (CTO) No. R-2-Api-03-001-2020 situated at  San Pedro, Lasam, Cagayan','EXPIRED','Cenro Aparri','chainsaw',1,NULL,'2025-06-02 02:44:03','2025-06-02 02:48:07');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreshore_parents`
--

LOCK TABLES `foreshore_parents` WRITE;
/*!40000 ALTER TABLE `foreshore_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreshores`
--

LOCK TABLES `foreshores` WRITE;
/*!40000 ALTER TABLE `foreshores` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lands`
--

LOCK TABLES `lands` WRITE;
/*!40000 ALTER TABLE `lands` DISABLE KEYS */;
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
INSERT INTO `lands_parents` VALUES (1,'Roceldi Doniego','Cenro Aparri','FPA','2025-06-02 02:42:32','2025-06-02 02:42:32');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lum_dealer_parents`
--

LOCK TABLES `lum_dealer_parents` WRITE;
/*!40000 ALTER TABLE `lum_dealer_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lum_dealers`
--

LOCK TABLES `lum_dealers` WRITE;
/*!40000 ALTER TABLE `lum_dealers` DISABLE KEYS */;
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
INSERT INTO `permits` VALUES (1,'Tree Cutting',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(2,'Chainsaw',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(3,'Lumber Dealer',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(4,'Supplier',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(5,'Wildlife',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(6,'Transport of Finished Product Lumber',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14');
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
INSERT INTO `sessions` VALUES ('U2t8OTuwVNClSvUqTmNsKRxVzQGvuGkZS2eapzxs',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWNCb3hKSHhvYVBtWnNkdXNzWlRpVHBSUVFlRTJaTjRqSEJiUFRuMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1748839272);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_parents`
--

LOCK TABLES `supplier_parents` WRITE;
/*!40000 ALTER TABLE `supplier_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_f_p_l_parents`
--

LOCK TABLES `t_f_p_l_parents` WRITE;
/*!40000 ALTER TABLE `t_f_p_l_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_f_p_l_s`
--

LOCK TABLES `t_f_p_l_s` WRITE;
/*!40000 ALTER TABLE `t_f_p_l_s` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_i_parents`
--

LOCK TABLES `t_i_parents` WRITE;
/*!40000 ALTER TABLE `t_i_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenurial_instruments`
--

LOCK TABLES `tenurial_instruments` WRITE;
/*!40000 ALTER TABLE `tenurial_instruments` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tree_cutting_parents`
--

LOCK TABLES `tree_cutting_parents` WRITE;
/*!40000 ALTER TABLE `tree_cutting_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tree_cuttings`
--

LOCK TABLES `tree_cuttings` WRITE;
/*!40000 ALTER TABLE `tree_cuttings` DISABLE KEYS */;
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
INSERT INTO `type_t_i_s` VALUES (1,'CSC',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(2,'SIFMA',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(3,'FLAg',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(4,'FLAgT',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(5,'FLGMA',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(6,'SLUP',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(7,'SAPA',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(8,'CBFMA',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(9,'GSUP',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14');
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
INSERT INTO `users` VALUES (1,'Administrator','admin@gmail.com',NULL,'1','$2y$12$bIQPAqh83d6.N7i9LV3daulXi2RnRzFjCaRUDkaVtGkmdt22bSS1a',NULL,'2025-06-01 16:35:14','2025-06-01 16:35:14'),(2,'Viewer','viewer@gmail.com',NULL,'0','$2y$12$XenWIzabH5GnfZgST/tB/uX75rZLYzzSnELaJeKvmeLHVpcSQzA9u',NULL,NULL,NULL);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wild_life_parents`
--

LOCK TABLES `wild_life_parents` WRITE;
/*!40000 ALTER TABLE `wild_life_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wild_lives`
--

LOCK TABLES `wild_lives` WRITE;
/*!40000 ALTER TABLE `wild_lives` DISABLE KEYS */;
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

-- Dump completed on 2025-06-02 12:41:18
