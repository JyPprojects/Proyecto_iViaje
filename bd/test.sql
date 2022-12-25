-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: database-1-test.c4t4842a3z9o.eu-west-3.rds.amazonaws.com    Database: test2
-- ------------------------------------------------------
-- Server version	5.7.38-log

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Current Database: `test2`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `test2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test2`;

--
-- Table structure for table `alojamiento`
--

DROP TABLE IF EXISTS `alojamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alojamiento` (
  `id_alojamiento` int(11) NOT NULL,
  `tipo_alojamiento` varchar(25) NOT NULL,
  `direccion_alojamiento` varchar(50) NOT NULL,
  `tlfn_estancia` int(10) DEFAULT NULL,
  `id_viaje` int(11) NOT NULL,
  PRIMARY KEY (`id_alojamiento`),
  KEY `id_viaje` (`id_viaje`),
  CONSTRAINT `alojamiento_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alojamiento`
--

LOCK TABLES `alojamiento` WRITE;
/*!40000 ALTER TABLE `alojamiento` DISABLE KEYS */;
INSERT INTO `alojamiento` VALUES (12,'Casa Rural','Calle Estio Nº1',952970407,172),(13,'Casa Rural','Calle Estio 1',555555555,172),(14,'Casa Rural','Calle Estio Nº1',635557809,173),(15,'Hotel','23r',234,173),(16,'Hotel','3',3,173),(17,'Hotel','e',3,173),(18,'Caravana','3',3,173),(19,'Casa Rural','C/ Estío Nº1',635557809,173),(20,'Casa Rural','C/ Estío Nº1',635557809,174),(21,'Hotel','C/Cardo cuco Nº20 3ºB',609625166,175),(22,'Casa Rural','C/Cardo cuco Nº20 3ºB',609625166,176),(23,'Casa Rural','C/ Estío Nº1',635557809,177),(24,'Hotel','C/ Estío Nº1',635557809,178),(26,'Casa Rural','C/ Estío Nº1',635557809,180),(27,'Caravana','C/ Estío Nº1',635557809,181),(28,'Casa Rural','C/ Estío Nº1',635557809,182),(29,'Hotel','C/ Estío Nº1',635557809,183),(30,'Casa Rural','C/ Estío Nº1',635557809,184),(31,'Casa Rural','C/ Estío Nº1',635557809,185),(32,'Casa Rural','C/ Estío Nº1',635557809,186);
/*!40000 ALTER TABLE `alojamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogo_necesidades`
--

DROP TABLE IF EXISTS `catalogo_necesidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo_necesidades` (
  `id_necesidad` int(11) NOT NULL,
  `id_indice` int(11) NOT NULL,
  `nombre_necesidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_necesidad`),
  KEY `id_indice` (`id_indice`),
  CONSTRAINT `catalogo_necesidades_ibfk_1` FOREIGN KEY (`id_indice`) REFERENCES `lista_indice` (`id_indice`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo_necesidades`
--

LOCK TABLES `catalogo_necesidades` WRITE;
/*!40000 ALTER TABLE `catalogo_necesidades` DISABLE KEYS */;
INSERT INTO `catalogo_necesidades` VALUES (1,1,'Comida'),(2,1,'Bebida'),(3,1,'Utensilios'),(4,1,'General'),(5,2,'Combustible'),(6,3,'Ubicación'),(7,3,'Tipo_estancia'),(8,3,'Direccion'),(9,3,'Telefono');
/*!40000 ALTER TABLE `catalogo_necesidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datosusuario`
--

DROP TABLE IF EXISTS `datosusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datosusuario` (
  `id_usuario` int(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `imagen` mediumblob,
  `tipo_imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosusuario`
--

LOCK TABLES `datosusuario` WRITE;
/*!40000 ALTER TABLE `datosusuario` DISABLE KEYS */;
INSERT INTO `datosusuario` VALUES (1,'david','$2y$10$h.H/6DbLP/66/Ssn.YuYfuGEnQvvsZ.0GYo5tKS96VYIFCKoyX9bW','tudavid@gmail.com','1999-01-02','David','Muñoz','',NULL),(2,'gaonis','$2y$10$LzhkZYe76xcpa405H6MW6eUbfHrKfLcS6gNOigr.WwkXRuxJE.mtu','srgaona1@gmail.com','0000-00-00','Pablo','','',NULL),(3,'gaonis007','$2y$10$/uvrhHy1iqLztXw2S85oHOaCF10Kx81.Xp2YL9XmRuoHZuARwkM4e','tudavid@gmail.com','0023-12-31','Juan Antonio','Rodriguez Martín','',NULL),(4,'gerar','$2y$10$yVG87iP4LQ9H7kki5A8Fbu2Engho/6f./kjSp3Bga0wvCJgcv9hE6','g@gmail.com','2313-02-10','gerardo','primero','',NULL),(5,'juanan','$2y$10$Z9TQRhOCDpYIusNXykNsJecwIEKnhbTN4vjjuqM52Lv2400vFMD4q','tujuanilloloco@yahoo.es','0000-00-00','','','',NULL),(6,'PAco','$2y$10$ZhwGJf.9iVIqKXINl31C2OXZh7XjqCJE9m0Ozfa/fwYm51VgE/GJm','pago@gsdfnl.com','0000-00-00','Paco','Gomes','',NULL),(8,'sevi','$2y$10$tzs2Ncdnc86ciCw2.5Icc.DBFJYHjT4PU0TArcUZIkYSkwfZ3Pu9e','tusevi@gmail.com','0000-00-00','Alejandro','','',NULL),(9,'PRUEEEEBA','$2y$10$oaSDHaXufgAWNeSKYt0GButYVc9i7G3vXn8lS4iWyrkY3RJtMhAqe','241234@hotmail.com','2020-11-26','Prueba1','prueba2','',NULL),(14,'gaoniS00009','$2y$10$sQ/PKAIpSioww1zuGLR12OHiu634Yknee2O5P6m4arnTDSaq/1qmG','psdigj@gmail.com','0001-01-01','psfpoj','pasdifnjpi','',NULL),(39,'Prueba42','$2y$10$EVKvYJImTVpt6H55YZbALelhyKGveXGF32ATCySGKkfqz5iUvLYEq','prueba1@gmail.com','0000-00-00','Alberto','prueba1','',NULL),(40,'espartaco','$2y$10$CAOI9Nk8kXuIMAah3iq..OGAOEI962STH6.lKBjbq8mK7wNgVFWZS','sffg@gmail.com','0000-00-00','espar','taco','',NULL),(42,'Felix','$2y$10$WsznOXmzh80KOT9s63G9Te/fVjHBUMr39hq5tVj3VBxy5qnfAf4g.','felix@gmail.com','0000-00-00','Felix','Carrion Rodriguez','',NULL),(44,'Marca','$2y$10$yuexD2Nus7ERSudkaLXYB.IfxeG/Ugt4r1sCVd9l8By1KSqMPCLHC','mar@gmail.com','0000-00-00','Mar','Carrion Rodriguez','',NULL),(46,'maria','$2y$10$IFmhRBq8cPWkq6UWgR85ke77FzOEPkWTSDpdmlP4C5n5lki2zobFi','maria@gmail.com','2021-05-08','maria','martin','',NULL),(57,'sinv5','$2y$10$yXgurgjA6qHUEpY.8i6EvuwCA1xw9ZrfGiZ/B2iTwmjBKDJ6CQmPW','sinv5@gmail.com','2021-06-09','sin','v',NULL,NULL),(58,'sinv7','$2y$10$BsWb/aByVZzi8XklcoY92ecG5hD/d52AgY7vkBplLR27Vqvd3KBly','sinv7@gmail.com','2021-06-19','sin','v',NULL,NULL),(59,'sinv8','$2y$10$F72bsHHC18JvGYUETw32OOglwTG1pOL4tDIb/Bv6TLrK95QK99uQS','sinv8@gmail.com','2021-06-19','sin','v',NULL,NULL),(60,'sinv9','$2y$10$y0eRzwgN2wg8tf.0gaUs5OiR2N8zMHHp6gQ/yLtm7wj9/ZX2/nAw.','aaaaaaaaa@gmsil.com','2021-06-18','sd','df',NULL,NULL),(61,'sinv10','$2y$10$bdZsHcqV99j5a/aYM09Vi.Vhz7J3gOprsxdZx4pcxiLv35XoK1XIa','sin10@gmail.com','2021-06-03','u','a',NULL,NULL),(63,'sinv11','$2y$10$NH5.DRjrsXzSRkqythnFPu3PGb.ri4kfn1f0ZyKxMBPA4atPIutS2','sinv11@gmail.com','2021-06-03','s','v',NULL,NULL);
/*!40000 ALTER TABLE `datosusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista_indice`
--

DROP TABLE IF EXISTS `lista_indice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lista_indice` (
  `id_indice` int(11) NOT NULL,
  `nombre_indice` varchar(50) NOT NULL,
  PRIMARY KEY (`id_indice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista_indice`
--

LOCK TABLES `lista_indice` WRITE;
/*!40000 ALTER TABLE `lista_indice` DISABLE KEYS */;
INSERT INTO `lista_indice` VALUES (1,'Necesidades'),(2,'Transporte'),(3,'Alojamiento'),(4,'Organización'),(5,'Fotos');
/*!40000 ALTER TABLE `lista_indice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `necesidades_viaje`
--

DROP TABLE IF EXISTS `necesidades_viaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `necesidades_viaje` (
  `id_necesidad_viaje` int(11) NOT NULL,
  `id_viaje` int(11) NOT NULL,
  `id_necesidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `necesidad_viaje` varchar(50) NOT NULL,
  PRIMARY KEY (`id_necesidad_viaje`),
  KEY `id_viaje` (`id_viaje`),
  KEY `id_necesidad` (`id_necesidad`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `necesidades_viaje_ibfk_2` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `necesidades_viaje_ibfk_4` FOREIGN KEY (`id_necesidad`) REFERENCES `catalogo_necesidades` (`id_necesidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `necesidades_viaje`
--

LOCK TABLES `necesidades_viaje` WRITE;
/*!40000 ALTER TABLE `necesidades_viaje` DISABLE KEYS */;
INSERT INTO `necesidades_viaje` VALUES (23,172,1,5,'Costillar'),(24,172,1,5,' patatas'),(25,172,1,5,' queso'),(26,172,2,5,'CocaCola'),(27,172,2,5,' agua'),(28,172,2,5,' fanta'),(29,172,3,5,'Pinzas barbacoa'),(30,172,3,5,' tenedores'),(31,172,4,5,'Carbon'),(40,172,1,5,'chedar'),(41,172,2,5,'7575'),(42,172,3,5,'7575'),(43,172,4,5,'7575'),(86,174,1,47,'e'),(87,174,2,47,'e'),(88,174,3,47,'e'),(89,174,4,47,'e'),(99,175,1,46,'pan'),(100,175,2,46,'agua'),(101,175,3,46,'pinzas'),(102,175,4,46,'abrigo'),(103,176,1,42,'e'),(104,176,2,42,'a'),(105,176,3,42,'a'),(106,176,4,42,'a'),(108,173,2,41,'raviolis'),(109,173,4,41,'eeeeeeeeeeeeeeee'),(110,173,1,41,'papatas'),(113,177,3,52,''),(114,177,4,52,''),(115,178,1,54,''),(116,178,2,54,''),(117,178,3,54,''),(118,178,4,54,''),(127,181,1,58,'a'),(128,181,2,58,'a'),(129,181,3,58,'a'),(130,181,4,58,'a'),(131,182,1,59,'4'),(132,182,2,59,'4'),(133,182,3,59,'4'),(134,182,4,59,'4'),(135,183,1,60,'3'),(136,183,2,60,'3'),(137,183,3,60,'3'),(138,183,4,60,'3'),(139,184,1,61,'t'),(140,184,2,61,'t'),(141,184,3,61,'t'),(142,184,4,61,'t'),(143,185,1,62,'Filete empanao'),(144,185,1,62,' tortilla de patatas'),(145,185,2,62,'agua'),(146,185,2,62,' coca cola'),(147,185,3,62,'palos'),(148,185,4,62,'mochilas'),(149,185,4,62,' brujula'),(150,185,4,62,' prismaticos'),(151,185,1,62,'macarrones'),(152,173,1,41,'tortilla'),(153,173,1,41,'aaaaaaaaaaaaaa'),(154,186,1,63,'s'),(155,186,2,63,'s'),(156,186,3,63,'s'),(157,186,4,63,'s');
/*!40000 ALTER TABLE `necesidades_viaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prueba`
--

DROP TABLE IF EXISTS `prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prueba` (
  `comida` varchar(25) NOT NULL,
  `usuarios` varchar(25) NOT NULL,
  PRIMARY KEY (`comida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prueba`
--

LOCK TABLES `prueba` WRITE;
/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
INSERT INTO `prueba` VALUES ('aguacates','pablo'),('hamburguesas','juanan'),('pan_hamburguesa','sevi');
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transporte`
--

DROP TABLE IF EXISTS `transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `tipo_transporte` varchar(25) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `combustible` varchar(25) DEFAULT NULL,
  `id_viaje` int(11) NOT NULL,
  PRIMARY KEY (`id_transporte`),
  KEY `id_viaje` (`id_viaje`),
  CONSTRAINT `transporte_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transporte`
--

LOCK TABLES `transporte` WRITE;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
INSERT INTO `transporte` VALUES (14,'Coche',2,'Gasolina',172),(15,'Coche',7,'Diesel',172),(16,'Coche',2,'Diesel',173),(17,'Coche',32,'Diesel',173),(18,'Coche',3,'Diesel',173),(19,'Ave',3,'Diesel',173),(20,'Coche',3,'Gasolina',173),(21,'Avión',9,'Diesel',173),(22,'Coche',2,'Hibrido',173),(23,'Avión',1,'Diesel',174),(24,'Autobus',1,'Hibrido',175),(25,'Coche',2,'Diesel',176),(26,'Coche',2,'Diesel',177),(27,'Coche',3,'Diesel',178),(29,'Coche',1,'Diesel',180),(30,'Coche',1,'Diesel',181),(31,'Coche',4,'Diesel',182),(32,'Coche',3,'Diesel',183),(33,'Coche',4,'Diesel',184),(34,'Coche',1,'Diesel',185),(35,'Coche',1,'Diesel',186);
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viajes`
--

DROP TABLE IF EXISTS `viajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viajes` (
  `idviaje` int(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_viaje` varchar(150) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `bote` int(50) NOT NULL,
  PRIMARY KEY (`idviaje`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viajes`
--

LOCK TABLES `viajes` WRITE;
/*!40000 ALTER TABLE `viajes` DISABLE KEYS */;
INSERT INTO `viajes` VALUES (150,8,'Tengoqueborraresto','','0000-00-00','0000-00-00',0),(152,40,'Manuela565665735','','2020-12-01','2020-12-09',800),(156,9,'Holabuenas4','','2021-01-20','2021-01-15',7568678),(172,5,'Sierra nevada','','2021-01-16','2021-01-23',350),(173,41,'La Herradura','España','2021-06-21','2021-06-27',1500),(174,47,'Sierra nevada','','2021-05-20','2021-05-22',500),(175,46,'La cala','','2021-05-31','2021-06-06',25),(176,42,'Sierra nevada','','2021-05-30','2021-06-05',2),(177,52,'Sierra nevada','','2021-06-26','2021-06-26',200),(178,54,'la cala','','2021-07-02','2021-07-04',12),(180,56,'cancun','','2021-06-11','2021-06-12',400),(181,58,'Malaga','','2021-06-24','2021-06-03',3),(182,59,'asdf','','0045-05-31','0034-05-31',2345),(183,60,'aaaaaaaaa','','3333-03-31','0333-03-31',3),(184,61,'eeeeeeeeeeeee','','0000-00-00','0000-00-00',4),(185,62,'Cazorla','','2021-06-25','2021-06-19',500),(186,63,'velez','España','2021-06-25','2021-06-26',20);
/*!40000 ALTER TABLE `viajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viajes_usuario`
--

DROP TABLE IF EXISTS `viajes_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viajes_usuario` (
  `id_viaje` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_viaje`,`id_usuario`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `viajes_usuario_ibfk_2` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viajes_usuario`
--

LOCK TABLES `viajes_usuario` WRITE;
/*!40000 ALTER TABLE `viajes_usuario` DISABLE KEYS */;
INSERT INTO `viajes_usuario` VALUES (176,1),(176,2),(173,41),(176,42),(175,46),(173,48),(177,52),(178,54),(180,56),(181,58),(182,59),(183,60),(184,61),(185,62),(186,63);
/*!40000 ALTER TABLE `viajes_usuario` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-02  1:02:24
