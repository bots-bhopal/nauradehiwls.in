-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blueolz8_nwls
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Test User','test@gmail.com','0123456789','Test message.','2022-04-02 03:11:18','2022-04-02 03:11:18'),(2,'Vaibhav','vaibhavblueocean@gmail.com','9713200830','test','2022-05-25 09:25:11','2022-05-25 09:25:11'),(3,'Vaibhav','vaibhavblueocean@gmail.com','9713200830','esw','2022-05-25 09:25:36','2022-05-25 09:25:36'),(4,'sankalp','sankalp.sks@gmail.com','1234567890','test','2022-06-01 09:15:40','2022-06-01 09:15:40');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_slug_unique` (`slug`),
  KEY `documents_user_id_foreign` (`user_id`),
  CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,2,'Nauradehi Bird Survey Report 2020','nauradehi-bird-survey-report-2020','https://nauradehiwls.in/public/storage/document/docs/NAURADEHI-BIRD-SURVEY-2020.pdf','NAURADEHI-BIRD-SURVEY-2020.pdf','bb30ac28212b2a7d883cb6319427317ac0ebf19b.pdf',2214496,'pdf',0,'2022-08-29 12:02:25','2022-08-29 12:02:27'),(2,2,'Nauradehi Bird Survey Report 2021','nauradehi-bird-survey-report-2021','https://nauradehiwls.in/public/storage/document/docs/Nauradehi-WLS-Bird-Survey-2021.pdf','Nauradehi-WLS-Bird-Survey-2021.pdf','58809508ed3db5bf59fdd47cb62e8716a1353594.pdf',40666249,'pdf',0,'2022-08-29 12:03:53','2022-08-29 12:04:16');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_event_id_foreign` (`event_id`),
  CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
INSERT INTO `event_images` VALUES (1,1,'1661773192cycles-2.jpg','2022-08-29 11:39:52','2022-08-29 11:39:52'),(2,1,'1661773192cycles-1.jpg','2022-08-29 11:39:52','2022-08-29 11:39:52');
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`),
  KEY `events_user_id_foreign` (`user_id`),
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,2,'World Ranger Day celebrated for the first time in Nauradehi Sanctuary','world-ranger-day-celebrated-for-the-first-time-in-nauradehi-sanctuary','2022-08-27','17:00:00','Nauradehi Sanctuary','<p style=\"text-align:justify\">नौरादेही अभ्यारण्य में पहली बार मोहली पर्यटक स्थल पर विश्व रेंजर दिवस मनाया गया, &nbsp;इस मौके पर DFO नौरादेही ने गश्ती दल के लिए 20 साईकिले वितरित की।</p>','1661773192cycles.jpg',0,'2022-08-29 11:39:52','2022-08-29 11:39:54'),(2,2,'International Tiger Day','international-tiger-day','2022-08-27','17:15:00','Nauradehi Sanctuary','<p>International Tiger Day</p>','1661773421International-Tiger-Day.jpg',0,'2022-08-29 11:43:41','2022-08-29 11:43:43');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_user_id_foreign` (`user_id`),
  CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,2,'pic-1','4eb11084bac409beb588d52fb30a2db889c2e24d.jpg','jpg',486251,0,'2022-03-10 03:02:39','2022-03-10 03:07:25'),(2,2,'pic-2','9bd14ad1fea70c5c6449da8491c9af8a435c9f09.jpg','jpg',252525,0,'2022-03-10 03:02:39','2022-03-10 03:07:24'),(3,2,'pic-3','9849b99856201b4f5e998cf98f6863ce7a236658.jpg','jpg',322303,0,'2022-03-10 03:02:40','2022-03-10 03:07:22'),(4,2,'pic-4','5edffc6ef9e0f2aa3547b36f94dc64c701e9e77c.jpg','jpg',650560,0,'2022-03-10 03:02:40','2022-03-10 03:07:22'),(5,2,'pic-5','9338b252f876cffab5184419505089529e801b84.jpg','jpg',283748,0,'2022-03-10 03:02:41','2022-03-10 03:07:20'),(6,2,'pic-6','2d5ea0ad463c2845152e8ad94d2e272cd719f701.jpg','jpg',358434,0,'2022-03-10 03:03:06','2022-03-10 03:07:18'),(7,2,'pic-7','95cd4d5ad2e58a878647de530755d72b45848302.jpg','jpg',296333,0,'2022-03-10 03:03:06','2022-03-10 03:07:16'),(8,2,'pic-8','83876ff33df519ea5c196f0db5d9ab2b40de9339.jpg','jpg',432343,0,'2022-03-10 03:03:06','2022-03-10 03:07:16'),(9,2,'pic-9','c0dd6fad32e8885571c5424208babb1e05191aa3.jpg','jpg',195901,0,'2022-03-10 03:03:06','2022-03-10 03:07:15'),(10,2,'pic-10','c00d0a48bb4ca95d6bc76ce3d0cc645b2fa81dae.jpg','jpg',196120,0,'2022-03-10 03:03:07','2022-03-10 03:07:12'),(11,2,'pic-11','1cc99a82a47c516983e1d6ae780045489160944a.jpg','jpg',286742,0,'2022-03-10 03:03:30','2022-03-10 03:07:10'),(12,2,'pic-12','bec773934d8b6a500cbac978492096641686a498.jpg','jpg',274949,0,'2022-03-10 03:03:30','2022-03-10 03:07:09'),(13,2,'pic-13','660b43ba260d21174fb3646eae2a032593886faf.jpg','jpg',613900,0,'2022-03-10 03:03:30','2022-03-10 03:07:08'),(14,2,'pic-14','b226566e558e064bc8fd680b7379cfae669cc3e1.jpg','jpg',324421,0,'2022-03-10 03:03:30','2022-03-10 03:07:07'),(15,2,'pic-15','5ddad82bf34b23453709201a9a82d5a0b4f1e394.jpg','jpg',394904,0,'2022-03-10 03:03:31','2022-03-10 03:07:05'),(16,2,'pic-16','9f9dd752b2190892c453f2dae70f631690b32daa.jpg','jpg',407832,0,'2022-03-10 03:03:48','2022-03-10 03:07:04'),(17,2,'pic-17','223dccbee392859e955263fc7077a9e5b5181a3e.jpg','jpg',435557,0,'2022-03-10 03:03:48','2022-03-10 03:07:02'),(18,2,'pic-18','cfd18c8e5aa280404478aac787f3b402285eb874.jpg','jpg',376535,0,'2022-03-10 03:03:49','2022-03-10 03:07:02'),(19,2,'pic-19','ae654f8e0781930c7ff40a7721e1f04f50a3a3e0.jpg','jpg',312864,0,'2022-03-10 03:03:49','2022-03-10 03:07:01'),(20,2,'pic-20','09d39fe3e216ffebbbc4ac91e5dc00d021c0eb0a.jpg','jpg',261640,0,'2022-03-10 03:03:49','2022-03-10 03:06:58'),(21,2,'pic-21','d2c609f2ca97f814b811ddd7b84b8b709b093571.jpg','jpg',133681,0,'2022-03-10 03:04:08','2022-03-10 03:06:57'),(22,2,'pic-22','b72805e2d6741a9f550e7996e4d0cc653f268efe.jpg','jpg',292579,0,'2022-03-10 03:04:08','2022-03-10 03:06:52'),(23,2,'pic-23','659a22b030ee70154617f6c70f52654b0f6ab45f.jpg','jpg',357820,0,'2022-03-10 03:04:09','2022-03-10 03:06:51'),(24,2,'pic-24','36e3d810e82058d1741724958d7aa61fae8bf48b.jpg','jpg',424484,0,'2022-03-10 03:04:09','2022-03-10 03:06:51'),(25,2,'pic-25','e0580c5914daa0c87dafae46c6d7b3b879313beb.jpg','jpg',282204,0,'2022-03-10 03:04:09','2022-03-10 03:06:50'),(26,2,'pic-26','956cc02d2e19beb6711c95ff04ebcd701ce9baf9.jpeg','jpeg',431354,0,'2022-03-10 03:04:45','2022-03-10 03:06:49'),(27,2,'pic-27','7d84838cba205d01d523f299cc994a32c8b3f2e1.jpg','jpg',343110,0,'2022-03-10 03:04:46','2022-03-10 03:06:47'),(28,2,'pic-29','32519865f7414428cc6654d1a1c582577952b9a9.jpg','jpg',415235,0,'2022-03-10 03:04:46','2022-03-10 03:06:46'),(29,2,'pic-31','15797046e26cbc0092fbec636ba6a563afa9b07e.jpg','jpg',461698,0,'2022-03-10 03:05:04','2022-03-10 03:06:41'),(30,2,'pic-33','fca10626aeb3addd3e3acdada77e4333cef8e961.jpg','jpg',259299,0,'2022-03-10 03:05:04','2022-03-10 03:06:39'),(31,2,'pic-34','2debdba67de33f7f415273bde7f2816d57982273.jpg','jpg',354546,0,'2022-03-10 03:05:04','2022-03-10 03:06:32'),(32,2,'pic-36','b8b8d5fd4e578fcc50f3656cdced1cc9cf337ec3.jpg','jpg',406245,0,'2022-03-10 03:05:21','2022-03-10 03:06:30'),(33,2,'pic-37','3265ab753aa3cf079ad1220bae8eb22747cc478b.jpg','jpg',311750,0,'2022-03-10 03:05:21','2022-03-10 03:06:29'),(34,2,'pic-38','18fbe58f380070632ba4a2ce8ce54ff384b4c7b4.jpg','jpg',401388,0,'2022-03-10 03:05:22','2022-03-10 03:06:28'),(35,2,'pic-40','9c33087a2cb29aabfa3c1e9ae34c39e44deecf9a.jpg','jpg',365436,0,'2022-03-10 03:05:22','2022-03-10 03:06:21'),(36,2,'pic-41','9e6321493785a1eb9a7aed935deadedeb3079f68.jpg','jpg',41901,0,'2022-03-10 03:05:45','2022-03-10 03:06:21'),(37,2,'pic-42','b7cf67e2c93ab0911b81cf35dc2cca85191c974d.jpg','jpg',242729,0,'2022-03-10 03:05:45','2022-03-10 03:06:20'),(38,2,'pic-43','31de49c81c120371868800a19527c06f4f54e741.jpg','jpg',92524,0,'2022-03-10 03:05:45','2022-03-10 03:06:19'),(39,2,'pic-44','347861be7b14cfce69b796cdb7e15897615d97cc.jpg','jpg',379037,0,'2022-03-10 03:05:45','2022-03-10 03:06:18'),(40,2,'pic-45','f10a5f3e212b4c26c05a4fb5537651f353f5c387.jpg','jpg',134348,0,'2022-03-10 03:05:46','2022-03-10 03:06:17'),(41,2,'pic-47','aa5f41bda505d5b91ba1138cad01c7881dde6100.jpg','jpg',37652,0,'2022-03-10 03:06:01','2022-03-10 03:06:15'),(42,2,'pic-48','a2497a7c999d6f359b2aca2a6ac3ec268d2bf702.jpg','jpg',44789,0,'2022-03-10 03:06:01','2022-03-10 03:06:13'),(43,2,'pic-49','451c9e8166cc34ca73a741c62d10fde5a8dc25bc.jpg','jpg',167476,0,'2022-03-10 03:06:01','2022-04-26 07:05:17');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_03_20_060813_create_galleries_table',1),(6,'2021_07_15_054832_create_tenders_table',1),(7,'2021_07_29_063621_create_trackers_table',1),(8,'2021_07_30_153218_create_documents_table',1),(9,'2021_10_09_152334_create_news_table',1),(10,'2021_10_09_161629_create_news_images_table',1),(11,'2021_12_09_062520_create_events_table',1),(12,'2021_12_09_064502_create_event_images_table',1),(13,'2022_01_20_094518_create_roles_table',1),(14,'2022_02_17_095845_create_contacts_table',2),(15,'2022_09_01_103711_create_team_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,2,'Largest home to Tigers in Madhya Pradesh','largest-home-to-tigers-in-madhya-pradesh','2022-08-27','<p style=\"text-align:justify\">Nauradehi Wildlife Sanctuary is ready to get upgraded to Tiger Reserve. Nauradehi and Rani Durgavati Sanctuary, Damoh in combined form are expected to be notified as New Tiger Reserve by the Centre. Keeping in view the possible submergence of 900 sq km core area of Panna Tiger Reserve because of the Ken-Betwa link project, Nauradehi can become a new home of tigers in the state.</p>','1661772132nwls-news-crop.jpg',0,'2022-08-29 11:22:12','2022-08-29 11:22:16'),(2,2,'Largest home to Tigers in Madhya Pradesh','largest-home-to-tigers-in-madhya-pradesh-2','2022-08-27','<p style=\"text-align:justify\">नौरादेही वन्यप्राणी अभयारण्य अपने आपको टाइगर रिजर्व की श्रेणी में शामिल करने तैयार है। दमोह के रानी दुर्गावती अभयारण्य और नौरादेही को मिलाकर केंद्र से टाइगर रिजर्व के रूप में अधिसूचित करने की उम्मीद है। केन-बेतवा लिंक परियोजना में पन्ना टाइगर रिजर्व का 900 वर्ग किमी कोर एरिया डूब में आने की स्थिति को देखते हुए नौरादेही प्रदेश में बाघों का नया आशियाना बन सकता है।</p>','1661772185nwls-news-crop.jpg',1,'2022-08-29 11:23:05','2022-08-29 11:24:18');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_images_news_id_foreign` (`news_id`),
  CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
INSERT INTO `news_images` VALUES (1,1,'1661772132nwls-news-crop.jpg','2022-08-29 11:22:12','2022-08-29 11:22:12'),(2,2,'1661772185nwls-news-crop.jpg','2022-08-29 11:23:05','2022-08-29 11:23:05');
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Server Admin','server','2022-02-24 08:48:33','2022-02-24 08:48:33'),(2,'Super Admin','super','2022-02-24 08:48:33','2022-02-24 08:48:33'),(3,'Admin','admin','2022-02-24 08:48:33','2022-02-24 08:48:33');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'Employee C','SDO, Berman','Employee C is a good person.','1662193135empc.png',1,'2022-09-03 02:48:55','2022-09-06 01:28:51'),(2,'Employee B','SDO, Rehli','Employee B is a good person.','1662193173empb.png',1,'2022-09-03 02:49:33','2022-09-06 01:28:44'),(3,'Employee A','DFO, Nauradehi','Employee A is a good person.','1662193224empa.png',1,'2022-09-03 02:50:24','2022-09-06 01:28:43');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` datetime NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenders_slug_unique` (`slug`),
  KEY `tenders_user_id_foreign` (`user_id`),
  CONSTRAINT `tenders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackers`
--

DROP TABLE IF EXISTS `trackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackers`
--

LOCK TABLES `trackers` WRITE;
/*!40000 ALTER TABLE `trackers` DISABLE KEYS */;
/*!40000 ALTER TABLE `trackers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL DEFAULT '3',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Server Admin','botadmin@nwls.in',NULL,'$2y$10$0VL/UUA/O5eKkBUn1kA5Ou4JySxFKJWZehPIDeVXCeKWdGgm3SOQ6',0,NULL,'2022-02-24 08:50:11','2022-02-24 08:50:11'),(2,2,'Super Admin','super@nwls.in',NULL,'$2y$10$U9LMFb/bGTxIRs5/ISeVTunZhb/jOh4YS5L77q.O7NaTDEjMd/dBu',0,NULL,'2022-02-24 08:50:11','2022-08-29 08:38:10'),(3,3,'Admin NWLS','admin@nwls.in',NULL,'$2y$10$hQxsP2BgCwCZ42PpfeAiEutuc1loiblQpRfmPz37fEaBRiwD4yUH2',0,NULL,'2022-02-24 08:50:11','2022-09-03 03:02:50');
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

-- Dump completed on 2022-09-09 17:25:09
