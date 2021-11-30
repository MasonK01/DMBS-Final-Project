-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: finalproject
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill` (
  `Invoice_Num` int(11) NOT NULL,
  `Guest_ID` int(11) DEFAULT NULL,
  `Room_Fees` varchar(45) DEFAULT NULL,
  `Room_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Invoice_Num`),
  KEY `room_ID_idx` (`Room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,1,'45',1),(2,2,'95',2),(3,3,'115',3),(4,4,'120',4),(5,5,'35',5),(6,6,'155',6),(7,7,'250',7),(8,8,'50',8),(9,9,'45',9),(10,10,'39',10),(11,11,'110',11),(12,12,'255',12),(13,13,'155',13),(14,14,'175',14),(15,15,'130',15),(16,16,'125',16),(17,17,'120',17),(18,18,'45',18);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `HID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EMPLOYEE_ID`),
  KEY `hotel_id_idx` (`HID`),
  CONSTRAINT `hotel_id` FOREIGN KEY (`HID`) REFERENCES `hotel` (`HID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'John','6479678942',1),(2,'Wall','6479849542',1),(3,'Steven','4168869944',1),(4,'Mark','4168548892',2),(5,'Walberg','4169902345',2),(6,'Jayson','6479840934',2),(7,'Mason','2895509892',3),(8,'Jathavan','2890892455',3),(9,'Dillon','6479038841',3),(10,'Johnny','6479902124',4),(11,'Watson','4168930994',4),(12,'Paul','4165529904',4),(13,'Vin','2899051242',5),(14,'Peter','4379983452',5),(15,'Jackson','4370032748',5),(16,'James','4162490942',6),(17,'Waleed','4379835823',6),(18,'Sanjith','6479802456',6);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guest` (
  `Guest_ID` int(11) NOT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Invoice_Num` int(11) DEFAULT NULL,
  `G_Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Guest_ID`),
  UNIQUE KEY `G_Email_UNIQUE` (`G_Email`),
  KEY `Invoice_Num_idx` (`Invoice_Num`),
  CONSTRAINT `Invoice_Num` FOREIGN KEY (`Invoice_Num`) REFERENCES `bill` (`Invoice_Num`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` VALUES (1,'John','Watson','2895579494','54 Help Way',1,'mkoitsan@rogers.com','123'),(2,'Jeff','Wish','2895579494','89 Simcoe Street',2,NULL,NULL),(3,'Morgan','Freeman','2895579494','57 Conlin Road',3,NULL,NULL),(4,'Blake','Lively','2895579494','500 Conlin Road',4,NULL,NULL),(5,'Ryan','Reynolds','2895579494','3895 Markham Road',5,NULL,NULL),(6,'Glenn','Bridges','2895579494','3595 Markham Road',6,NULL,NULL),(7,'Matt','Waters','4168893094','3005 McCowan Road',7,NULL,NULL),(8,'Heather','Falls','4168840985','59 Banana Street',8,NULL,NULL),(9,'Jimmy','Fallon','4168955685','783 Jenkins Way',9,NULL,NULL),(10,'Jimmy','Kimmel','4168954564','884 Balsam Road',10,NULL,NULL),(11,'Jayson','Tatum','4168950001','1000 Silver Star Blvd',11,NULL,NULL),(12,'LeBron','James','4168951112','748 Birchmount Road',12,NULL,NULL),(13,'Wayne','Gretzky','6479848583','76 Bridle Path',13,NULL,NULL),(14,'Wayne','Rivers','6478995532','989 Lampshade Blvd',14,NULL,NULL),(15,'Scarlett','Jo','6478878832','2000 Vanni Road',15,NULL,NULL),(16,'Jenny','Law','6478223441','65 Kocha Road',16,NULL,NULL),(17,'Elton','John','6478110011','1200 Starbees Road',17,NULL,NULL),(18,'Astra','Zeneca','6478989021','89 Curster Ave',18,NULL,NULL),(19,'123','123','123','123',NULL,'123',' . md5(123) . '),(20,'mason','koitsan','123','123',NULL,'mkoitsab@rogers.com',' . md5(123) . '),(21,'123','123','123','123',NULL,'4',' . md5(123) . '),(22,'123','123','123','123',NULL,'45',' . md5(123) . '),(23,'dfg','sdfgsdfg','sdfgsdfg','sdfgsdfg',NULL,'sdfg',' . md5(sdfgsdfg) . '),(24,'maksdgnb','wkegjn','worgjn','wsjgn',NULL,';wkjng',' . md5(wjgn) . '),(25,'123','123','123','123',NULL,'12345',' . md5(12345) . ');
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel` (
  `HID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL,
  `Hotel_Name` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`HID`,`EMPLOYEE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (1,1,'Hilton','12 Westview Ave'),(1,2,'Hilton','12 Westview Ave'),(1,3,'Hilton','12 Westview Ave'),(2,4,'Fairmont Royal','1 Fairmont Path'),(2,5,'Fairmont Royal','1 Fairmont Path'),(2,6,'Fairmont Royal','1 Fairmont Path'),(3,7,'Chelsea Hotel','200 England Ave'),(3,8,'Chelsea Hotel','200 England Ave'),(3,9,'Chelsea Hotel','200 England Ave'),(4,10,'Monte Carlo','78 Dundas'),(4,11,'Monte Carlo','78 Dundas'),(4,12,'Monte Carlo','78 Dundas'),(5,13,'Westin Harbour','54 East Harbour St'),(5,14,'Westin Harbour','54 East Harbour St'),(5,15,'Westin Harbour','54 East Harbour St'),(6,16,'Hampton Inn','150 Hampton Way'),(6,17,'Hampton Inn','150 Hampton Way'),(6,18,'Hampton Inn','150 Hampton Way');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservations` (
  `Reserveration_Num` int(11) NOT NULL,
  `G_Email` varchar(45) DEFAULT NULL,
  `Room_Type` varchar(45) DEFAULT NULL,
  `HID` int(11) DEFAULT NULL,
  `Date in` date DEFAULT NULL,
  `Date out` date DEFAULT NULL,
  PRIMARY KEY (`Reserveration_Num`),
  KEY `guest_ID_idx` (`G_Email`),
  KEY `hotel_ID_idx` (`HID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,'1','Double',1,NULL,NULL),(2,'2','King',1,NULL,NULL),(3,'3','Single',1,NULL,NULL),(4,'4','Double',2,NULL,NULL),(5,'5','King',2,NULL,NULL),(6,'6','Single',2,NULL,NULL),(7,'7','Double',3,NULL,NULL),(8,'8','King',3,NULL,NULL),(9,'9','Single',3,NULL,NULL),(10,'10','Twin',4,NULL,NULL),(11,'11','Single',4,NULL,NULL),(12,'12','Double',4,NULL,NULL),(13,'13','Single',5,NULL,NULL),(14,'14','Double',5,NULL,NULL),(15,'15','King',5,NULL,NULL),(16,'16','Twin',6,NULL,NULL),(17,'17','King',6,NULL,NULL),(18,'18','Double',6,NULL,NULL);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `Room_ID` int(11) NOT NULL,
  `Room_Type` varchar(45) DEFAULT NULL,
  `Guest_ID` int(11) DEFAULT NULL,
  `Reservation_Num` int(11) DEFAULT NULL,
  PRIMARY KEY (`Room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,'Double',1,1),(2,'King',2,2),(3,'Single',3,3),(4,'Double',4,4),(5,'King',5,5),(6,'Single',6,6),(7,'Double',7,7),(8,'King',8,8),(9,'Single',9,9),(10,'Twin',10,10),(11,'Single',11,11),(12,'Double',12,12),(13,'Single',13,13),(14,'Double',14,14),(15,'King',15,15),(16,'Twin',16,16),(17,'King',17,17),(18,'Double',18,18);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-29 22:46:58
