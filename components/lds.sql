CREATE DATABASE  IF NOT EXISTS `ldstest` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `ldstest`;
-- MySQL dump 10.13  Distrib 5.7.19, for Linux (i686)
--
-- Host: localhost    Database: ldstest
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `clid` int(11) NOT NULL AUTO_INCREMENT,
  `clname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `shortname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kpp` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `director` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opf` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`clid`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'ЛДС','ЛДС','1645000473','','г.Бугульма, ул.Гафиатуллина, д.32','(85594) 6-25-28','Сунгатулин Э.М','','','ООО'),(2,'Технофонд','Технофонд','1645003327','164500012','г.Бугульма, ул.Гафиатуллина, д.32','(85594) 6-25-28','Лукьянов Е.В.','№323','Сорокин Е.Ю.','ООО'),(4,'ЛДС плюс','ЛДС плюс','1645003344','164500232','г.Бугульма, ул.Гафиатуллина, д.32','(85594) 6-25-28','Дюкель А.Н.','№928-1','Лысенко П.А.','ООО'),(5,'','Иванов П.С.','','','','917-234-56-78','','','','ФЛ'),(6,'Семёнов А.Ф.','Семёнов А.Ф.','1645872327','','г.Бугульма, ул.Джалиля, д.18','927-876-34-46','','','','ИП'),(7,'','Петров П.Н.','','','','919-345-23-54','','','','ФЛ'),(8,'Смирнов С.В.','Смирнов С.В.','1645982983','','г.Бугульма, ул.Горького, д.9','937-827-63-84','','','','ИП'),(9,'Бугульминский механический завод','БМЗ','164538347','164523001','г.Бугульма, ул.Ленина, д.156','(85594) 7-12-12','Директоров Д.И.','№7364','Лысенко П.А.','ООО'),(10,'Бугульманефтепродукт','Бугульманефтепродукт','1645000491','','г.Бугульма, ул.М.Джалиля, д.70','(85594) 6-51-59','Махмутов Р. И.','','','ОАО'),(11,'Бугульминский комбинат хлебной продукции','БКХП №1','1645014575','','г.Бугульма, ул.14 Павших, д.56','','Журавлев В.А.','','','ЗАО'),(12,'Бугульминский завод железобетонных изделий','БЗЖБИ','1645000036','','г.Бугульма, ул.Строительная, д.1','(85594) 4-89-00','Тарасов В.И.','','','ОАО'),(15,'Макдоналдс','Макдоналдс','','','Гафиатуллина ','','','','','ООО'),(16,'','Фёдоров Ф.Ф.','','','','962-326-54-96','','','','ФЛ'),(17,'Воздушные мосты','Воздушные мосты','','','','3453451234','','','','ООО'),(18,'','Иванов Ф.П.','','','','917-283-98-02','','','','ФЛ'),(19,'','Петров А.Ф.','','','','925-342-43-58','','','','ФЛ'),(20,'','Смирнов О.Д.','','','','960-765-82-76','','','','ФЛ'),(21,'','Фёдоров Т.В.','','','','965-234-54-32','','','','ФЛ'),(22,'','Петров В.И.','','','','935-233-45-22','','','','ФЛ'),(23,'Пешков Алексей Максимович','Горький М.','12121212','21212121','Нижний Новгород','','','','','ИП'),(24,'Фролов М.В.','Фролов М.В.','','','','936-765-28-23','','','','ФЛ'),(25,'Маркин М.М.','Маркин М.М.','','','','912-348-98-34','','','','ФЛ');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depart`
--

DROP TABLE IF EXISTS `depart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depart` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depart`
--

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1,'Контрольно-кассовой техники'),(2,'Копировально-множительной техники'),(3,'Теплотехники'),(4,'Внедрения новой техники');
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journal`
--

DROP TABLE IF EXISTS `journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `depart` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summa` float DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal`
--

LOCK TABLES `journal` WRITE;
/*!40000 ALTER TABLE `journal` DISABLE KEYS */;
INSERT INTO `journal` VALUES (1,'ООО Контрагент','Картридж HP 1010','Заправка','2017-09-22','КМТ','Пеньков И.А.',250,'8','Готов'),(2,'ЗАО БКХП №1','Картридж SM ML1210','Заправка','2017-09-24','КМТ',NULL,NULL,NULL,'Новый');
/*!40000 ALTER TABLE `journal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master`
--

LOCK TABLES `master` WRITE;
/*!40000 ALTER TABLE `master` DISABLE KEYS */;
INSERT INTO `master` VALUES (1,'Пеньков И.А.','2'),(2,'Драгун Е.В.','4'),(3,'Сорокин Е.Ю.','1'),(4,'Пеньков П.А.','1'),(5,'Сунгатулин А.Э.','3'),(6,'Бабрышев Р.А.','3');
/*!40000 ALTER TABLE `master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,'HP CE285A 85A',4),(2,'тест',1),(3,'тест2',1);
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opf`
--

DROP TABLE IF EXISTS `opf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opf` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opf`
--

LOCK TABLES `opf` WRITE;
/*!40000 ALTER TABLE `opf` DISABLE KEYS */;
INSERT INTO `opf` VALUES (6,'ПАО'),(7,'ООО'),(8,'ИП'),(9,'ФЛ'),(10,'ОАО'),(11,'ЗАО');
/*!40000 ALTER TABLE `opf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prof`
--

DROP TABLE IF EXISTS `prof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prof` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prof`
--

LOCK TABLES `prof` WRITE;
/*!40000 ALTER TABLE `prof` DISABLE KEYS */;
INSERT INTO `prof` VALUES (1,'Техник ККТ'),(2,'Техник КМТ'),(3,'Техник ВТ'),(4,'Техник КИПиА');
/*!40000 ALTER TABLE `prof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Новый'),(2,'Готов'),(4,'Ожидает запчасть'),(5,'В работе'),(7,'Отказ от ремонта'),(9,'Ожидает оплаты'),(10,'Снят с учёта');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'Касса'),(2,'Принтер'),(3,'Копир'),(4,'Картридж'),(5,'Компьютер'),(6,'Ноутбук'),(7,'Сканер');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_on_repair`
--

DROP TABLE IF EXISTS `unit_on_repair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit_on_repair` (
  `idrepair` int(11) NOT NULL AUTO_INCREMENT,
  `idjournal` int(11) NOT NULL,
  `idunit` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `summa` float DEFAULT NULL,
  PRIMARY KEY (`idrepair`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_on_repair`
--

LOCK TABLES `unit_on_repair` WRITE;
/*!40000 ALTER TABLE `unit_on_repair` DISABLE KEYS */;
/*!40000 ALTER TABLE `unit_on_repair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'Картридж HP CE285A 85A','12345',1),(2,'Касса АТОЛ-11Ф','2342342',1),(3,'Принтер Xerox X4500','182389128379',6),(4,'Картридж ML 1520','7746568',24),(5,'Касса АТОЛ-11Ф','45673843',6),(6,'Картридж Philips P100','87345873',12),(7,'Касса АТОЛ-11Ф','987654',12);
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (1,'Диагностика'),(2,'Мелкий ремонт');
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zip`
--

DROP TABLE IF EXISTS `zip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zip` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zip`
--

LOCK TABLES `zip` WRITE;
/*!40000 ALTER TABLE `zip` DISABLE KEYS */;
INSERT INTO `zip` VALUES (1,'Тонер HP 1010'),(2,'Тонер ML 1210'),(3,'Тонер HP 1200'),(4,'Фотобарабан HP 1005');
/*!40000 ALTER TABLE `zip` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-09 20:56:29
