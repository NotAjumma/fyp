-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: fyp
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `browser_histories`
--

DROP TABLE IF EXISTS `browser_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `browser_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `browser_histories_user_id_foreign` (`user_id`),
  CONSTRAINT `browser_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `browser_histories`
--

LOCK TABLES `browser_histories` WRITE;
/*!40000 ALTER TABLE `browser_histories` DISABLE KEYS */;
INSERT INTO `browser_histories` VALUES (1,4,'http://fyp.test/coursepage','Course Page','2024-05-13 07:53:20','2024-05-13 07:53:20'),(2,4,'http://fyp.test/coursepage','Course Page','2024-05-13 15:54:42','2024-05-13 15:54:42'),(3,4,'http://fyp.test/coursepage','Course Page','2024-05-13 15:57:07','2024-05-13 15:57:07'),(4,4,'http://fyp.test/coursepage','Course Page','2024-05-13 16:10:12','2024-05-13 16:10:12'),(5,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:11:35','2024-05-13 16:11:35'),(6,4,'http://fyp.test/coursepage','Course Page','2024-05-13 16:11:54','2024-05-13 16:11:54'),(7,4,'http://fyp.test/coursepage','Course Page','2024-05-13 16:14:42','2024-05-13 16:14:42'),(8,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:18:27','2024-05-13 16:18:27'),(9,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:18:50','2024-05-13 16:18:50'),(10,4,'http://fyp.test/coursepage','Course Page','2024-05-13 16:18:53','2024-05-13 16:18:53'),(11,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:18:56','2024-05-13 16:18:56'),(12,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:22:10','2024-05-13 16:22:10'),(13,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:23:54','2024-05-13 16:23:54'),(14,4,'course.coursepage','Course Page','2024-05-13 16:24:29','2024-05-13 16:24:29'),(15,4,'http://fyp.test/bcdrcourse','Course Page','2024-05-13 16:25:14','2024-05-13 16:25:14'),(16,4,'course.coursepage','Course Page','2024-05-13 16:25:33','2024-05-13 16:25:33'),(17,4,'course.coursepage','Course Page','2024-05-14 14:18:32','2024-05-14 14:18:32'),(18,4,'course.coursepage','Course Page','2024-05-14 14:21:26','2024-05-14 14:21:26'),(19,4,'course.coursepage','Course Page','2024-05-14 14:21:42','2024-05-14 14:21:42'),(20,4,'course.coursepage','Course Page','2024-05-14 14:21:44','2024-05-14 14:21:44'),(21,4,'course.coursepage','Management of Information Security','2024-05-14 14:22:29','2024-05-14 14:22:29'),(22,4,'http://fyp.test/bcdrcourse','Management of Information Security','2024-05-14 14:24:21','2024-05-14 14:24:21'),(23,4,'http://fyp.test/bcdrcourse','Business Continuity & Disaster Recovery','2024-05-14 14:24:33','2024-05-14 14:24:33'),(24,4,'course.bcdrcoursepage','Business Continuity & Disaster Recovery','2024-05-14 14:25:05','2024-05-14 14:25:05'),(25,4,'course.coursepage','Management of Information Security','2024-05-14 14:26:46','2024-05-14 14:26:46'),(26,4,'course.riskcoursepage','Risk Management','2024-05-14 14:28:07','2024-05-14 14:28:07'),(27,4,'course.auditcoursepage','Risk Management','2024-05-14 14:29:08','2024-05-14 14:29:08'),(28,4,'course.bcdrcoursepage','Business Continuity & Disaster Recovery','2024-05-14 14:30:01','2024-05-14 14:30:01'),(29,4,'course.bcdrcoursepage','Business Continuity & Disaster Recovery','2024-05-14 14:30:05','2024-05-14 14:30:05'),(30,4,'course.riskcoursepage','Risk Management','2024-05-14 14:30:07','2024-05-14 14:30:07'),(31,4,'course.riskcoursepage','Risk Management','2024-05-14 14:30:46','2024-05-14 14:30:46'),(32,4,'course.riskcoursepage','Risk Management','2024-05-14 14:32:45','2024-05-14 14:32:45'),(33,4,'course.auditcoursepage','Control & Audit of Information System','2024-05-14 14:32:58','2024-05-14 14:32:58'),(34,4,'course.auditcoursepage','Control & Audit of Information System','2024-05-14 14:33:37','2024-05-14 14:33:37'),(35,4,'course.auditcoursepage','Control & Audit of Information System','2024-05-14 14:34:20','2024-05-14 14:34:20'),(36,4,'course.auditcoursepage','Control & Audit of Information System','2024-05-14 14:34:21','2024-05-14 14:34:21'),(37,4,'course.auditcoursepage','Control & Audit of Information System','2024-05-14 14:34:23','2024-05-14 14:34:23');
/*!40000 ALTER TABLE `browser_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_05_01_053843_create_admins_table',1),(6,'2024_05_01_073115_create_files_table',1),(7,'2024_05_06_105209_create_feedback_table',2),(8,'2024_05_13_153704_create_browser_histories_table',2),(9,'2024_05_13_235836_add_last_login_at_to_users_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin',NULL,'admin@gmail.com',NULL,NULL,'$2y$10$ATVjBwA5.QYbXuV8GhKsruCR0l9DdAQ33.qeJEDuRjYchMeTeN8Ty',NULL,NULL,NULL,'admin'),(2,'nini',NULL,'nini@gmail.com',NULL,NULL,'$2y$10$izg3GWGo2mddVHURaCe13u7NXZ8rwIxP4aT16CRk76Asltq0hK70u',NULL,NULL,'2024-05-07 05:51:10','user'),(3,'Nizam Amin',NULL,'nizam@gmail.com',NULL,NULL,'$2y$10$374XAAAVugB2duI3H1hq7.vKx501zQDrI1QqS2ob3uFnh4MBEHdmS',NULL,'2024-05-12 07:51:31','2024-05-12 07:51:31','user'),(4,'Nizam Amin',NULL,'nizam2@gmail.com',NULL,'2024-05-14 14:01:04','$2y$10$6fJSz9Wp8R5Yx9C.XYFjqejOsybcGRpks24Xe30Pp.JNsrwYd7zIi',NULL,'2024-05-12 07:52:39','2024-05-14 14:01:04','user'),(5,'Nizam Amin',NULL,'nizam3@gmail.com',NULL,NULL,'$2y$10$jFoZXQeP5gWWyMa2CtDs1OyC05rgi3A/tbQr9YA916nqdjakb1XvK',NULL,'2024-05-12 08:36:28','2024-05-12 08:36:28','user');
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

-- Dump completed on 2024-05-14 22:50:49
