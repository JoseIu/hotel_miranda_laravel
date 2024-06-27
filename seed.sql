-- MySQL dump 10.13  Distrib 8.0.37, for Linux (x86_64)
--
-- Host: localhost    Database: hotel_miranda
-- ------------------------------------------------------
-- Server version	8.0.37-0ubuntu0.22.04.3

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
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,'WiFi'),(2,'TV'),(3,'Air Conditioning'),(4,'Safe'),(5,'Coffee Maker');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `gues_name` varchar(50) NOT NULL,
  `gues_lastName` varchar(50) NOT NULL,
  `reservation_id` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_number` int NOT NULL,
  `room_id` int NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `specialRequest` text NOT NULL,
  `status` varchar(32) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (1,'John','Doe','1','2021-01-01','2021-01-02','2021-01-03',1,1,'Suite','No smoking','pending'),(2,'Joselu','Gonzales','6671ae4fc113b','2024-06-18','2024-06-18','2024-06-19',2,2,'Double Bed','Esto es un test para ver si funciona.','pending'),(3,'Jaime','Jaime','6671aea1ec4d1','2024-06-18','2024-06-18','2024-06-19',6,6,'Single Bed','No php, pls','pending'),(4,'Sara','Alameda','66745e5f00615','2024-06-20','2024-06-20','2024-06-21',1,1,'Suite','Test','pending'),(5,'Sara','Alameda','66745ea382626','2024-06-20','2024-06-20','2024-06-21',1,1,'Suite','Test','pending'),(6,'Sara','Alameda','66745ebf455d8','2024-06-20','2024-06-20','2024-06-21',1,1,'Suite','Test','pending'),(7,'Sara','Alameda','66745ecd66ab1','2024-06-20','2024-06-20','2024-06-21',1,1,'Suite','Test','pending'),(8,'Sara','Alameda','66745ede8e871','2024-06-20','2024-06-20','2024-06-21',1,1,'Suite','Test','pending');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `subect` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `archived` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'2024-06-20','daasd','joselu@joselu.com','12313123','12312313','213123123',0);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `room_number` int NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `offer` tinyint(1) NOT NULL,
  `offer_price` int NOT NULL,
  `price` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,1,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',1,20,500,1),(2,2,'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,1),(3,3,'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',1,20,700,1),(4,4,'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,1),(5,5,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,1),(6,6,'Single Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,0),(7,7,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',1,20,400,1),(8,8,'Double Bed','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,1),(9,9,'Suite','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',1,20,800,1),(10,10,'Double Superior','Tyrannus cursim dedico admoneo casso blandior centum amitto creptio versus.',0,0,200,0);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_amenities`
--

DROP TABLE IF EXISTS `room_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_amenities` (
  `room_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  KEY `room_id` (`room_id`),
  KEY `amenity_id` (`amenity_id`),
  CONSTRAINT `room_amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`_id`) ON DELETE CASCADE,
  CONSTRAINT `room_amenities_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_amenities`
--

LOCK TABLES `room_amenities` WRITE;
/*!40000 ALTER TABLE `room_amenities` DISABLE KEYS */;
INSERT INTO `room_amenities` VALUES (1,1),(1,2),(1,3),(1,4),(2,1),(2,2),(2,3),(2,5),(3,1),(3,2),(3,3),(3,5),(4,1),(4,2),(4,3),(4,5),(5,1),(5,2),(5,3),(5,5),(6,1),(6,2),(6,3),(6,5),(7,1),(7,2),(7,3),(7,5),(8,1),(8,2),(8,3),(8,5),(9,1),(9,2),(9,3),(9,5),(10,1),(10,2),(10,3),(10,5),(1,1),(1,2),(1,3),(1,4),(2,1),(2,2),(2,3),(2,5),(3,1),(3,2),(3,3),(3,5),(4,1),(4,2),(4,3),(4,5),(5,1),(5,2),(5,3),(5,5),(6,1),(6,2),(6,3),(6,5),(7,1),(7,2),(7,3),(7,5),(8,1),(8,2),(8,3),(8,5),(9,1),(9,2),(9,3),(9,5),(10,1),(10,2),(10,3),(10,5);
/*!40000 ALTER TABLE `room_amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_images`
--

DROP TABLE IF EXISTS `room_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_images`
--

LOCK TABLES `room_images` WRITE;
/*!40000 ALTER TABLE `room_images` DISABLE KEYS */;
INSERT INTO `room_images` VALUES (1,1,'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),(2,1,'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),(3,2,'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),(4,2,'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267'),(5,3,'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688'),(6,3,'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),(7,4,'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688'),(8,4,'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),(9,5,'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),(10,5,'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),(11,6,'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),(12,6,'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),(13,7,'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),(14,7,'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),(15,8,'https://images.unsplash.com/photo-1560518883-ce09059eeffa'),(16,8,'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2'),(17,9,'https://images.unsplash.com/photo-1570129477492-45c003edd2be'),(18,9,'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'),(19,10,'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),(20,10,'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb');
/*!40000 ALTER TABLE `room_images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-27 15:59:05
