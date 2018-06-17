-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (armv7l)
--
-- Host: localhost    Database: FitnessDatabase
-- ------------------------------------------------------
-- Server version	5.5.52-0+deb8u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `FitnessDatabase`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `FitnessDatabase` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `FitnessDatabase`;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_avatar` varchar(60) DEFAULT NULL,
  `user_param01` varchar(100) DEFAULT NULL,
  `user_param02` varchar(100) DEFAULT NULL,
  `user_param03` varchar(100) DEFAULT NULL,
  `user_param04` varchar(100) DEFAULT NULL,
  `user_param05` varchar(100) DEFAULT NULL,
  `user_param06` varchar(100) DEFAULT NULL,
  `user_param07` varchar(100) DEFAULT NULL,
  `user_param08` varchar(100) DEFAULT NULL,
  `user_param09` varchar(100) DEFAULT NULL,
  `user_param10` varchar(100) DEFAULT NULL,
  `user_img01` varchar(100) DEFAULT NULL,
  `user_img02` varchar(100) DEFAULT NULL,
  `user_img03` varchar(100) DEFAULT NULL,
  `user_img04` varchar(100) DEFAULT NULL,
  `user_img05` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `params`
--

DROP TABLE IF EXISTS `params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `params` (
  `params_id` int(11) NOT NULL AUTO_INCREMENT,
  `params_userid` int(11),
  `params_submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `params_value01` varchar(10) DEFAULT NULL,
  `params_value02` varchar(10) DEFAULT NULL,
  `params_value03` varchar(10) DEFAULT NULL,
  `params_value04` varchar(10) DEFAULT NULL,
  `params_value05` varchar(10) DEFAULT NULL,
  `params_value06` varchar(10) DEFAULT NULL,
  `params_value07` varchar(10) DEFAULT NULL,
  `params_value08` varchar(10) DEFAULT NULL,
  `params_value09` varchar(10) DEFAULT NULL,
  `params_value10` varchar(10) DEFAULT NULL,
  `params_img01` varchar(100) DEFAULT NULL,
  `params_img02` varchar(100) DEFAULT NULL,
  `params_img03` varchar(100) DEFAULT NULL,
  `params_img04` varchar(100) DEFAULT NULL,
  `params_img05` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`params_id`),
  FOREIGN KEY (`params_userid`) REFERENCES users(`user_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



