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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-17 16:51:49