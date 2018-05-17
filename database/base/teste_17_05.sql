-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: teste
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Padaria','2018-05-09 17:47:53','0000-00-00 00:00:00',NULL),(2,'Açougue','2018-05-09 17:47:53','0000-00-00 00:00:00',NULL),(3,'Cosméticos','2018-05-09 17:47:53','0000-00-00 00:00:00',NULL),(4,'Higiene Pessoal','2018-05-09 17:47:53','0000-00-00 00:00:00',NULL),(5,'Não Perecíveis','2018-05-09 21:22:15','2018-05-09 20:47:59',NULL),(6,'Enlatados','2018-05-09 21:25:58','2018-05-09 20:48:40',NULL),(7,'Doces','2018-05-09 21:26:27','2018-05-09 21:26:27',NULL),(8,'Salgados','2018-05-09 21:45:50','2018-05-09 21:26:30',NULL),(10,'Bebidas','2018-05-09 21:46:02','2018-05-09 21:46:02',NULL);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`usuario_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (15,'Thiago','12345678978','2018-05-09 18:17:03','2018-05-09 21:17:03',NULL,24),(16,'Camila','28144069002','2018-05-09 19:36:17','2018-05-09 19:36:17',NULL,25),(17,'Douglas','12345678912','2018-05-09 21:16:18','2018-05-09 21:16:18',NULL,21),(18,'Diego','12345678911','2018-05-16 20:29:20','2018-05-16 20:29:20',NULL,26),(19,'Tabata','111.111.111-11','2018-05-16 20:36:18','2018-05-16 20:36:18',NULL,27),(20,'Teste','123.456.789-45','2018-05-16 21:18:12','2018-05-16 21:18:12',NULL,28),(21,'Cabaré','777.777.777-77','2018-05-16 21:45:55','2018-05-16 21:45:55',NULL,29),(22,'Diego','123.456.111-11','2018-05-16 22:08:03','2018-05-16 22:08:03',NULL,31),(23,'Thiago','400.222.555-68','2018-05-16 22:09:14','2018-05-16 22:09:14',NULL,32),(24,'Diego','442.690.098-02','2018-05-16 22:52:26','2018-05-16 22:52:26',NULL,33),(25,'Thomas Turbano','236.547.945-48','2018-05-16 23:30:30','2018-05-16 23:30:30',NULL,34),(26,'Diogines','281.056.688-74','2018-05-17 22:26:37','2018-05-17 22:26:37',NULL,35);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2018_05_02_155948_categorias',1),('2018_05_02_160241_produtos',1),('2018_05_02_160311_produtos_categorias',1),('2018_05_02_164207_clientes',2),('2018_05_02_164318_vendas',2),('2018_05_02_164422_produtos_venda',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `preco` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (4,'Meia',15.00,NULL,'2018-05-16 22:10:40',NULL),(6,'Pasta de Dente',4.00,NULL,'2018-05-02 22:57:37',NULL),(7,'Laranja',4.59,NULL,'2018-05-03 21:42:53',NULL),(8,'Papel',3.00,NULL,'2018-05-03 20:50:22',NULL),(9,'Pasta de dente',4.00,NULL,'2018-05-03 21:42:13',NULL),(10,'Nescau',4.50,'2018-05-08 22:32:37','2018-05-08 22:32:37',NULL),(11,'Refrigerante',4.75,'2018-05-15 20:58:10','2018-05-15 20:58:10',NULL),(12,'aaaaaaa',3.50,'2018-05-16 22:10:26','2018-05-16 22:10:26',NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos_categorias`
--

DROP TABLE IF EXISTS `produtos_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_categorias` (
  `produto_id` int(10) unsigned NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  KEY `produtos_categorias_produto_id_foreign` (`produto_id`),
  KEY `produtos_categorias_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `produtos_categorias_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `produtos_categorias_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_categorias`
--

LOCK TABLES `produtos_categorias` WRITE;
/*!40000 ALTER TABLE `produtos_categorias` DISABLE KEYS */;
INSERT INTO `produtos_categorias` VALUES (4,4),(6,4),(7,1),(8,4),(9,4),(10,1),(11,10),(12,1);
/*!40000 ALTER TABLE `produtos_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos_venda`
--

DROP TABLE IF EXISTS `produtos_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_venda` (
  `produto_id` int(10) unsigned NOT NULL,
  `venda_id` int(10) unsigned NOT NULL,
  `qtd` int(11) NOT NULL,
  KEY `produtos_venda_produto_id_foreign` (`produto_id`),
  KEY `produtos_venda_venda_id_foreign` (`venda_id`),
  CONSTRAINT `produtos_venda_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtos_venda_venda_id_foreign` FOREIGN KEY (`venda_id`) REFERENCES `vendas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_venda`
--

LOCK TABLES `produtos_venda` WRITE;
/*!40000 ALTER TABLE `produtos_venda` DISABLE KEYS */;
INSERT INTO `produtos_venda` VALUES (7,1,2),(6,1,3),(6,2,1),(10,2,2),(6,2,3),(7,2,4),(6,3,2),(4,4,3),(6,4,1),(4,4,3),(8,4,1),(11,5,3),(4,6,2),(4,7,1);
/*!40000 ALTER TABLE `produtos_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(62) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (16,'diego@gmail.com','$2y$10$VvM/srDE4BR7Lg81RWicSOQiw2eJb7u15pRGDwYf0OlUL5wFactc6','2018-05-08 22:12:36','2018-05-08 20:10:49',NULL,NULL,NULL),(17,'','$2y$10$vl2A7VVetJtNeKqKIajHseaRe0jWovBYblIkrnUvPSjrO5Dt/dxym','2018-05-10 21:42:38','2018-05-08 20:12:55','2018-05-10 21:42:38',NULL,NULL),(18,'','$2y$10$1GuBO//OY6Qi65mvfnD0u.Fsm3oO6oe/mEo8dA0a3QEXXtJA3.EnC','2018-05-08 21:46:15','2018-05-08 20:14:57','2018-05-08 21:46:15',NULL,NULL),(19,'','$2y$10$DjPVVWTJ7.cYusvlbLPFEeMhCXS8gZyD3iTYjTzGGHPvQ2M78r4tG','2018-05-08 21:46:15','2018-05-08 20:16:47','2018-05-08 21:46:15',NULL,NULL),(20,'','$2y$10$D1TwZe3QzL4p5CXZ2C2blOPzWaEF/m/fAFmn2ZsfGm4.4UStvQw7m','2018-05-15 21:18:46','2018-05-08 20:17:36','2018-05-15 21:18:46',NULL,NULL),(21,'douglas@gmail.com','$2y$10$z6WHQlImS.tcJRbbTrOjj.g5Zrq/iH8lgHx79mEseXWndf3ZjubvW','2018-05-09 21:16:18','2018-05-08 22:59:22',NULL,NULL,NULL),(23,'diego12@gmail.com','$2y$10$P.wCsYyLvev4MMcr2nER1.WF/s9XpI4WehIrcCs9Oe.yTN1tJGeZG','2018-05-08 23:56:21','2018-05-08 23:56:21',NULL,NULL,NULL),(24,'t@gmai.com','$2y$10$QhfLJ..HR5cUoa3rsrWo4eNa1wr7.apZUffD6MB60iRlpDHM7atfi','2018-05-08 23:57:11','2018-05-08 23:57:11',NULL,NULL,NULL),(25,'camila@gmail.com','$2y$10$WhEN.rlKBz8OLGXE6RyFR.fsUoah0iPuAxqa7XO/G6azGQX1oKjTC','2018-05-17 22:22:14','2018-05-09 19:36:17',NULL,'y6KBFD5GpGByS1PToLUVOkw2cL3P7MuofxXODYi8yaxHliaQjNELbKOYaJfq',NULL),(26,'diegomagno@gmail.com','$2y$10$OCPRiKH.t.AfhEE2n2xtUOGuz1.wYDdruTxjvJUM4sUypUAZtD7Je','2018-05-16 22:01:26','2018-05-16 20:29:20',NULL,'EETQCoP9mYZALlxhfzgKzReUVPbb87JfySpurnsKeSQRbhdlxdQFUzBB3t0N',NULL),(27,'tabata@gmail.com','$2y$10$q/3YNeHUlUBeqv3byYEoYe1c9qCIf8RdO.aTmPhx8B8i.AcsvHOKS','2018-05-16 21:46:22','2018-05-16 20:36:18',NULL,NULL,NULL),(28,'teste@teste','$2y$10$8y9Hsf/z9gVkHit8hb8gxOYmp1.ierbLbLlfw3hcPOw1QS9qv6NuO','2018-05-16 21:46:19','2018-05-16 21:18:12','2018-05-16 21:46:19','vTjv5NEjeu021ZXkG0hRevlTIjZ7rDnnAoxq9Jj6cGuQI8x05I9nyrdxuRik',NULL),(29,'email@gmail.com','$2y$10$zxYjWtztRUgp.t1oCJtJVu6s36SBDquxB020DeaHYeFELQC7OyN46','2018-05-16 21:46:17','2018-05-16 21:45:55','2018-05-16 21:46:17',NULL,NULL),(31,'asdasdasd@asdasdadaa','$2y$10$IR941Bocrq8xkOOr1cNpNuiFlqb9n722fI.itWUXE2uNFNJ2Te696','2018-05-16 22:08:03','2018-05-16 22:08:03',NULL,NULL,NULL),(32,'thi@gmail.com','$2y$10$oxUQbcc7nljCjSmlmcKh6eYlCmjk5Gm4U1Xk9nbW9QcZNPUoqLx2S','2018-05-16 22:29:32','2018-05-16 22:09:14',NULL,'lrXSbU9eKKOE43VoxfvkrBCfDzRq88ncVfiNjenzEkRqYh1a0jMt0jPLX21E',NULL),(33,'magnomu@gmail.com','$2y$10$ldEO2KdXvJfFAWC/gc35..MOBOJr7WWC8CkCmMOESIYIwHh2/A41e','2018-05-16 23:17:25','2018-05-16 22:52:26',NULL,'tyjhnu8KYTIsias1PYywZdPqxE6rN1n7JHMtOSFlzJjJsqVdwNrvoeHsEGXw',NULL),(34,'thomas@gmail.com','$2y$10$1GMyqqR8N0/ap7soHpxAYOlnMxr62/vYlxRdcy8oya9BuyfeKOSdW','2018-05-16 23:30:46','2018-05-16 23:30:30',NULL,'2WX70ZezfvZCRLxjoWGYXFHXcpGV8saBz9xzWfEFTPjVCb4Ht0szN2JB0hFn',NULL),(35,'diow@gmail.com','$2y$10$wJ7vBulahPDbYe7QKSjsz.vP.ay9.rWN2N7rr0Fw4fZPjzNjRT50.','2018-05-17 22:48:06','2018-05-17 22:26:37',NULL,'5oOPmtIleQwRoP1kzFJmSkKz7dv4eG0jEK0TGME7rPYormu1MkMaE5Vfvfvi',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cliente_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendas_cliente_id_foreign` (`cliente_id`),
  CONSTRAINT `vendas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES (1,'2018-05-09 22:33:16','2018-05-09 22:33:16',15),(2,'2018-05-09 22:37:15','2018-05-09 22:37:15',16),(3,'2018-05-16 20:19:34','2018-05-16 20:19:34',16),(4,'2018-05-16 22:11:20','2018-05-16 22:11:20',23),(5,'2018-05-16 22:53:18','2018-05-16 22:53:18',24),(6,'2018-05-16 23:04:11','2018-05-16 23:04:11',24),(7,'2018-05-16 23:07:33','2018-05-16 23:07:33',24);
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'teste'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-17 16:52:44
