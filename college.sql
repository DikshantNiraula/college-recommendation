-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_us` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (1,'About Us','Anyone who loves both copywriting and swearing (who doesn’t?) will be relieved to hear that there’s a new tool to help with both, in the shape of Lorem fucking ipsum. The handy online tool, created by Good Design Advice, <br>\r\nbills itself as the placeholder text for “people who have some fucking passion!” The site lets you choose either a number of paragraphs or words, and generates a barrage of very sweary text accordingly.\r\n\r\nThe words are delivered in Helvetica Neue or Neue Haas Grotesk, selected for “their crisp, clean details and typographic texture that make them aesthetically appealing and easy to read,” say the creators. “They have a clearly defined hierarchy of sizes and weights with known typographic results and thus are compatible with such special applications as design advice, printed material, and information existing in digitial spaces.”','1681987296_woman-2094172__340.jpg','2023-04-20 04:28:50','2023-05-03 10:17:36');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Free Health Check-up Day at Our Clinic','Mark your calendars! Join us on [Date] for a free health check-up day at our clinic. Our team of skilled doctors and nurses will be providing complimentary screenings for blood pressure, cholesterol, diabetes, and more. Don\'t miss this opportunity to prioritize your health!','1682434397.jpeg','2023-04-20 04:28:50','2023-04-25 09:08:17'),(2,'Introducing New Services: Telemedicine and Virtual Consultations','We are thrilled to announce the launch of our new telemedicine and virtual consultation services. Now you can conveniently access medical care from the comfort of your own home or office. Book virtual appointments with our experienced physicians and receive quality healthcare remotely.','1682434423.jpeg','2023-04-20 04:28:50','2023-04-25 09:08:43'),(4,'New Clinic Location Now Open!','We are excited to announce the opening of our new clinic location in [City Name]. Our state-of-the-art facility is now ready to serve the local community, providing comprehensive medical care with the latest technologies and experienced healthcare professionals','1682434340.jpeg','2023-04-20 05:43:34','2023-04-25 09:07:20'),(6,'\"Clinic Awarded for Outstanding Patient Care\"','We are proud to announce that our clinic has been awarded for our exceptional patient care. This recognition reflects our team\'s unwavering commitment to providing compassionate and high-quality healthcare services. We are grateful to our patients for their trust and support.','1682434451.jpeg','2023-04-25 09:09:11','2023-05-03 10:32:37');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_courses`
--

DROP TABLE IF EXISTS `college_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `college_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `college_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_detail` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) NOT NULL,
  `seats_available` int DEFAULT NULL,
  `course_time_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `college_courses_college_id_foreign` (`college_id`),
  CONSTRAINT `college_courses_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_courses`
--

LOCK TABLES `college_courses` WRITE;
/*!40000 ALTER TABLE `college_courses` DISABLE KEYS */;
INSERT INTO `college_courses` VALUES (1,1,'BBA','iuhfgdsfghjklsfsdf',800000.00,100,'4',NULL,'1683911743.webp','2023-05-12 09:08:43','2023-05-12 11:30:43'),(2,7,'Bsc. CSIT, 4 years course, TU Affiliated','yuguydg',300000.00,120,'4',NULL,'1683911713.gif','2023-05-12 11:21:52','2023-05-12 11:30:13'),(3,8,'BBS Course, 45 Years, TU Affiliate','fdgfg',500000.00,50,'4',NULL,'1683911875.png','2023-05-12 11:31:58','2023-05-12 11:32:55'),(4,6,'B.SC. in PCB, PCS, CBZ','fhgjklhg',200000.00,48,'4',NULL,'1683955358.jpeg','2023-05-12 23:36:42','2023-05-12 23:37:38'),(5,7,'Bachelors in Economics','trdfygukhlj',450000.00,80,'4',NULL,'/tmp/phpoIZKjl','2023-05-13 00:22:48','2023-05-13 00:22:48');
/*!40000 ALTER TABLE `college_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colleges` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `college_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
INSERT INTO `colleges` VALUES (1,'Trinity College','Ok',1.8,1.6,'1683908714.png','2023-05-08 01:02:29','2023-05-12 10:40:14'),(3,'Ambition Academy','gjhchj',95.5,96.6,'1683908834.png','2023-05-12 10:42:14','2023-05-12 10:42:14'),(4,'Samriddhi College','iugfguio',55,66,'1683909625.jpeg','2023-05-12 10:55:25','2023-05-12 10:55:25'),(5,'Morgan International College','vghjkniuhy',45,45,'1683909660.png','2023-05-12 10:56:00','2023-05-12 10:56:00'),(6,'ST. Xaviers College','sfdgvhjgt',78,78,'1683909854.png','2023-05-12 10:59:14','2023-05-12 10:59:14'),(7,'Amrit Science Campus','adesrdgfhjgk78',78,79,'1683909887.jpeg','2023-05-12 10:59:47','2023-05-12 10:59:47'),(8,'Presidential Business School','ilgjffgjuhkil',79,80.55,'1683909912.jpg','2023-05-12 11:00:12','2023-05-12 11:00:12'),(9,'Himalayan Whitehouse Internation College','klkjghf',45,46,'1683909948.png','2023-05-12 11:00:48','2023-05-12 11:00:48');
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
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
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'What types of health insurance do you accept at your clinic?','We accept a wide range of health insurance plans. Please contact our clinic directly or visit our website for a list of accepted insurances.','2023-04-20 04:28:50','2023-04-25 09:45:21'),(8,'How can I schedule an appointment at your clinic?','You can schedule an appointment at our clinic by calling our receptionist during business hours, visiting our website to book an appointment online, or using our mobile app for convenient appointment scheduling.','2023-04-25 09:45:38','2023-04-25 09:45:38'),(9,'What should I bring to my first appointment at your clinic?','For your first appointment, please bring your valid identification, health insurance card, a list of current medications, any relevant medical records or test results, and a form of payment for any copays or deductibles.','2023-04-25 09:45:55','2023-04-25 09:45:55'),(10,'Can I receive telehealth services or virtual consultations at your clinic?','Yes, we offer telehealth services and virtual consultations for eligible patients. Please contact our clinic to inquire about telehealth options and schedule a virtual appointment with one of our healthcare providers.','2023-04-25 09:46:10','2023-04-25 09:46:10'),(11,'What are your clinic\'s payment and billing policies?','Our clinic accepts various payment methods, including cash, credit cards, and health insurance. We also offer payment plans for eligible patients. Our billing policies, including copays, deductibles, and payment due dates, are outlined in our financial policy, which can be obtained at our clinic or on our website.','2023-04-25 09:46:26','2023-04-25 09:46:26');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_counters`
--

DROP TABLE IF EXISTS `info_counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_counters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `count1` int NOT NULL,
  `count2` int NOT NULL,
  `count3` int NOT NULL,
  `count4` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_counters`
--

LOCK TABLES `info_counters` WRITE;
/*!40000 ALTER TABLE `info_counters` DISABLE KEYS */;
INSERT INTO `info_counters` VALUES (1,101,201,301,401,'2023-04-20 04:28:50','2023-04-20 04:34:59');
/*!40000 ALTER TABLE `info_counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inquiries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiries`
--

LOCK TABLES `inquiries` WRITE;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` VALUES (1,'New Name','dik@gmail.com',NULL,'98456123',NULL,'sfbhsjsjdf','2023-05-03 11:47:09','2023-05-03 11:47:09'),(2,'jhg','djshd@dsf.cm',NULL,'98654321',NULL,'dsfsfsd','2023-05-03 12:14:02','2023-05-03 12:14:02'),(3,'dsjhgsgu','ds@9876.com',NULL,'9876548765','jghfd','kjyhftgdszcx','2023-05-03 12:15:59','2023-05-03 12:15:59');
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_03_07_151413_create_products_table',1),(6,'2014_10_12_100000_create_password_resets_table',2),(7,'2023_04_14_052008_create_about_us_table',3),(8,'2023_04_14_053617_create_settings_table',3),(9,'2023_04_14_054640_create_blogs_table',3),(10,'2023_04_14_054915_create_services_table',3),(11,'2023_04_14_063828_create_faqs_table',3),(12,'2023_04_19_145214_create_testimonials_table',3),(13,'2023_04_19_155349_create_info_counters_table',4),(14,'2023_04_14_053618_create_settings_table',5),(15,'2023_04_14_053619_create_settings_table',6),(16,'2023_05_03_160526_create_inquiries_table',7),(17,'2023_05_08_063647_create_colleges_table',8),(20,'2023_05_08_075542_create_college_courses_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Product No. 1','Product Detail 1',398.00,16.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(2,'Product No. 2','Product Detail 2',180.00,18.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(3,'Product No. 3','Product Detail 3',483.00,18.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(4,'Product No. 4','Product Detail 4',491.00,13.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(5,'Product No. 5','Product Detail 5',317.00,12.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(6,'Product No. 6','Product Detail 6',418.00,14.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(7,'Product No. 7','Product Detail 7',397.00,13.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(8,'Product No. 8','Product Detail 8',218.00,20.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(9,'Product No. 9','Product Detail 9',431.00,19.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(10,'Product No. 10','Product Detail 10',214.00,7.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(11,'Product No. 11','Product Detail 11',374.00,6.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(12,'Product No. 12','Product Detail 12',77.00,17.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(13,'Product No. 13','Product Detail 13',148.00,9.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(14,'Product No. 14','Product Detail 14',278.00,14.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(15,'Product No. 15','Product Detail 15',269.00,17.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(16,'Product No. 16','Product Detail 16',90.00,10.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(17,'Product No. 17','Product Detail 17',493.00,15.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(18,'Product No. 18','Product Detail 18',250.00,17.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(19,'Product No. 19','Product Detail 19',307.00,12.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(20,'Product No. 20','Product Detail 20',439.00,10.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(21,'Product No. 21','Product Detail 21',395.00,5.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(22,'Product No. 22','Product Detail 22',50.00,17.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(23,'Product No. 23','Product Detail 23',279.00,10.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(24,'Product No. 24','Product Detail 24',23.00,19.00,'blue',0,'2023-03-07 13:42:48','2023-03-07 13:42:48'),(25,'Product No. 25','Product Detail 25',198.00,14.00,'blue',1,'2023-03-07 13:42:48','2023-03-07 13:42:48');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Diagnostic Testing','We provide a wide range of diagnostic tests, including blood tests, imaging studies, and other laboratory tests to aid in the accurate diagnosis and management of various health conditions.','1682435329.avif','2023-04-20 04:28:49','2023-04-25 09:23:49'),(2,'Vaccination Services','Our clinic offers vaccination services to help prevent and protect against various diseases, such as flu, pneumonia, and other vaccine-preventable illnesses, in accordance with recommended vaccination schedules.','1682435226.avif','2023-04-20 04:28:49','2023-04-25 09:22:06'),(4,'Blood Pressure Monitoring','Our clinic provides regular blood pressure monitoring to help you keep track of your blood pressure levels and manage hypertension effectively.\r\n\r\nHome Doctor Visits: We understand that some patients may have difficulty visiting the clinic, which is why we offer home doctor visits. Our qualified doctors can provide medical care and consultations in the comfort of your own home.','1682435166.avif','2023-04-20 05:47:57','2023-04-25 09:21:06'),(6,'Chronic Disease Management','Our experienced healthcare team provides specialized care and management for chronic diseases such as diabetes, hypertension, asthma, and others, to help patients effectively manage their conditions and improve their quality of life.','1682435247.avif','2023-04-25 09:22:27','2023-04-25 09:22:27'),(7,'Nutritional Counseling','Our clinic provides personalized nutritional counseling to help patients make healthy dietary choices, manage weight, and prevent or manage chronic conditions such as diabetes, heart disease, and gastrointestinal disorders.','1682435274.avif','2023-04-25 09:22:54','2023-04-25 09:22:54'),(8,'Mental Health Services','Our clinic recognizes the importance of mental health and offers a range of mental health services, including counseling, therapy, and medication management for conditions such as anxiety, depression, and stress management.','1682435304.avif','2023-04-25 09:23:24','2023-04-25 09:23:24');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'1234567890','9876543210','1234 Street, City','5678 Avenue, Town','info@example.com','contact@example.com','logo.png','10:00 AM - 18:00 PM','abc.com','bacd.com',NULL,'Example Company','2023-04-26 11:19:53','2023-04-26 11:25:39');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'John Doe','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum finibus nisl id malesuada. Nulla facilisi. Curabitur vel arcu ut libero consequat finibus a a ex.','1682433605.png','CEO','2023-04-19 09:56:10','2023-04-25 08:55:05'),(19,'John Doe','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum finibus nisl id malesuada. Nulla facilisi. Curabitur vel arcu ut libero consequat finibus a a ex.','1682433615.jfif','CEO','2023-04-20 04:28:50','2023-04-25 08:55:15'),(20,'Jane Smith','Maecenas tristique, augue et blandit efficitur, ligula eros suscipit velit, at cursus dolor tortor et nisl. Proin ullamcorper, enim a lacinia aliquet, elit mauris eleifend arcu, at condimentum orci dolor id velit.','1682433625.png','COO','2023-04-20 04:28:50','2023-04-25 08:55:25'),(22,'Dikshant Niraula','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum finibus nisl id malesuada. Nulla facilisi. Curabitur vel arcu ut libero consequat finibus a a ex.','1682433724.png','Developer','2023-04-20 05:17:10','2023-04-25 08:58:17');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$//HlNwcLI9v4kZICUUm4y.gYkUUzNRjYnTuGPlGkuRElX9GdwjA2y',NULL,'2023-04-19 05:35:37','2023-04-19 05:35:37'),(2,'admin','admin1@gmail.com',NULL,'$2y$10$8FlLZyhxn15SUd.U.K.9WuavTLq1HMYsnyq0Ce.TS12ZRy2Vvvvui',NULL,'2023-04-26 10:58:02','2023-04-26 10:58:02');
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

-- Dump completed on 2023-05-13 15:53:42
