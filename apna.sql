-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: apna
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `department` (
  `dept_name` varchar(30) DEFAULT NULL,
  `hod` varchar(20) DEFAULT NULL,
  `faculty_no` int DEFAULT NULL,
  `total_labs` int DEFAULT NULL,
  `building_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('CSE','Jyoti Gajrani',5,8,'Main Building'),('EE','Dr. K. G. Sharma',6,10,'New Building'),('EIE','Dr. Hari Shankar ',3,5,'New Building'),('Mechanical','Dr. Alok Khatri',15,20,'Mech Dept.');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `score` (
  `No` int NOT NULL AUTO_INCREMENT,
  `sid` varchar(20) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Subject_id` varchar(30) NOT NULL,
  `MidTerm` int NOT NULL,
  `Final` int NOT NULL,
  `Remarks` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
INSERT INTO `score` VALUES (18,'21CS119D ','Computer Science and Engineering ','4CS201',24,115,'Perfect'),(19,'21CS119D ','Computer Science and Engineering ','4CS405',22,98,'Good'),(20,'20CS98 ','Computer Science and Engineering ','4CS201',22,118,'Perfect'),(21,'20CS98 ','Computer Science and Engineering ','4CS405 ',7,56,'Average'),(22,'20CS101 ','Computer Science and Engineering ','4CS201',18,48,'Average'),(23,'20CS101 ','Computer Science and Engineering ','4CS405',28,116,'Perfect'),(24,'20CS83 ','Computer Science and Engineering ','4CS201',28,119,'Perfect'),(25,'20CS83 ','Computer Science and Engineering ','4CS405',29,117,'Perfect'),(26,'20CS73 ','Computer Science and Engineering ','4CS201',25,92,'Good'),(27,'20CS73 ','Computer Science and Engineering ','4CS405',21,80,'Good');
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `Department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('20CS101','Upmanyu','Ghiya','2001-05-11','Alwer','Male','8456748596','upmanyu@outlook.com','CSE'),('20CS73','Pranjal','Agarwal','2002-07-26','Delhi','Female','8756489789','pranjal@gmail.com','CSE'),('20CS83','Rakshita','Jaju','2005-06-07','Jaipur','Female','7854861515','rakshita@apna.com','CSE'),('20CS98','sumant','preet','2004-06-18','Kota','Male','9248657158','sumant@gmail.com','CSE'),('21cs119d','shubham','sharma','2003-03-02','Ajmer','Male','8462146214','shubham@apna.com','CSE');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subjects` (
  `id` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `subjectid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES ('01','4','DMS','4CS201'),('02','4','TOC','4CS406'),('03','4','DBMS','4CS405'),('04','4','MP&I','4CS304'),('05','4','TC','4CS102'),('06','4','DCCN','4CS407'),('06','4','DCCN','4CS407');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_entry`
--

DROP TABLE IF EXISTS `teacher_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teacher_entry` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Post` varchar(30) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Room_No` varchar(20) DEFAULT NULL,
  `Mobile_No` varchar(10) DEFAULT NULL,
  `Email_id` varchar(40) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Marital_status` varchar(20) DEFAULT NULL,
  `Salary` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_entry`
--

LOCK TABLES `teacher_entry` WRITE;
/*!40000 ALTER TABLE `teacher_entry` DISABLE KEYS */;
INSERT INTO `teacher_entry` VALUES ('01','Jyoti Gajrsni','Female','HoD','Computer Science Engineering','G-40','9460031242','jyotigajrani@ecajmer.ac.in','1985-10-20','Married','125000','Ajmer'),('02','Prakriti Trivedii','Female','Associate Prof.','Computer Science Engineering','F-38','7645682587','prakartitrivedi@ecajmer.ac.in','1988-06-23','Married','80000','Ajmer'),('03','Vinesh Jain','Male','Asst. Prof.','Computer Science Engineering','F-07','9462738575','vineshjain@ecajmer.ac.in','1984-06-13','Married','80000','Ajmer'),('04','Anil Kumar Tailor','Male','Asst. Prof.','Computer Science Engineering','F-33','6841579521','anilkumartailor@ecajmer.ac.in','1990-01-01','Married','80000','Jaipur'),('05','Praksh Meena','Male','Asst. Prof.','Computer Science Engineering','G-42','7895462138','prakashmeena@ecajmer.ac.in','1993-10-29','Unmarried','80000','Sirohi');
/*!40000 ALTER TABLE `teacher_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','admin'),('shubham','123456');
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

-- Dump completed on 2022-05-17 11:47:32
