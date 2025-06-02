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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chainsaw_parents`
--

LOCK TABLES `chainsaw_parents` WRITE;
/*!40000 ALTER TABLE `chainsaw_parents` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chainsaws`
--

LOCK TABLES `chainsaws` WRITE;
/*!40000 ALTER TABLE `chainsaws` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lands_parents`
--

LOCK TABLES `lands_parents` WRITE;
/*!40000 ALTER TABLE `lands_parents` DISABLE KEYS */;
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
INSERT INTO `sessions` VALUES ('KRfPvSS0s0MuVus8TKLCfL4nMty83YX7pfHnZWMI',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYjRHejBzcmk2SVYzb0ZCMDRSZnpNZXBwYThYMzNVVnFzWVVld0pOdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9QRU5STy9sYW5kcy9yZnBhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1748796003),('QhQhkJpjNS24kkz5YVMlfBcrHtVFenzXtYttQLgc',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSGpsSkhjaDM2dTFaa3BNRUNDMmFaYUtPd3Bpb2FiSDNxbjJtazZzRiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvUEVOUk8vcGVybWl0cy9wZXJtaXRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1748795939);
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

-- Dump completed on 2025-06-02 10:38:47
